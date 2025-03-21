jQuery(document).ready(function() {

    CalculateCostModal.appendModalHtml();
    CalculateCostModal.appendCarButtonsHtml();
    CalculateCostModal.bindModal();
    CalculateCostModal.bindCarButtons();

});

class CalculateCostModal {
    static appendCarButtonsHtml() {
        jQuery('.listViewEntriesTable tbody tr').each(function() {
            let recordId = jQuery(this).find('td:first a').attr('href');
            if (recordId) {
                recordId = recordId.match(/record=(\d+)/);
                if (recordId) {
                    const carId = recordId[1];

                    jQuery(this).append(`
                        <td>
                            <button style="background-color: #337ab7;" class="btn btn-primary calculate-cost-btn" data-car-id="${carId}">
                                Koszt Eksp.
                            </button>
                        </td>
                    `);
                }
            }
        });
    }

    static bindCarButtons() {
        jQuery('.calculate-cost-btn').each(function () {
            jQuery(this).on('click', function () {
                const carId = jQuery(this).attr('data-car-id');
                const modal = jQuery("#calculateCostModal");
                modal.modal("show");
                modal.attr('data-car-id', carId);
            });
        });
    }

    static appendModalHtml() {
        jQuery("body").append(`
            <div class="modal fade" id="calculateCostModal" tabindex="-1" role="dialog" aria-labelledby="calculateCostTitle" aria-hidden="true" data-car-id="0">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="calculateCostTitle">Kalkulator kosztu eksploatacji</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="calculateCostForm">
                                <div class="form-group">
                                    <label for="start_date">Data początku eksploatacji</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="end_date">Data końca eksploatacji</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="submit" class="btn btn-primary" id="submitCostCalculation">Oblicz</button>
                        </div>
                    </div>
                </div>
            </div>
        `);
    }

    static bindModal() {
        jQuery("#submitCostCalculation").on("click", function(event) {
            event.preventDefault();

            const carId = jQuery("#calculateCostModal").attr("data-car-id");
            const startDate = jQuery("#start_date").val();
            const endDate = jQuery("#end_date").val();

            if (!startDate || !endDate) {
                alert("Proszę podać daty");
                return;
            }

            const params = {
                module: "Cars",
                action: "CalculateCost",
                mode: "calculate",
                car_id: carId,
                start_date: startDate,
                end_date: endDate
            };

            AppConnector.request(params).done(function(response) {
                if (response.success) {
                    const calculationResult = response.result;
                    if (calculationResult.success) {
                        Vtiger_Helper_Js.showMessage({type: "success", text: calculationResult.result});
                        jQuery("#calculateCostModal").modal("hide");
                    } else {
                        Vtiger_Helper_Js.showMessage({type: "error", text: calculationResult.error});
                    }

                } else {
                    Vtiger_Helper_Js.showMessage({type: "error", text: "Błąd połączenia: " + response.error});
                }

            }).fail(function(error) {
                console.error("CalculateCost request failed:", error);
                Vtiger_Helper_Js.showMessage({type: "error", text: "Błąd połączenia: " + error.message});
            });
        });
    }
}
