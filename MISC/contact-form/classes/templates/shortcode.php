<div class="px-3 mb-4">
        <form onsubmit="event.preventDefault();return form_submited(this);"> 
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                    <input name="nimi" type="text" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">Nimi</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                    <input name="email" type="email" id="form6Example2" class="form-control" />
                    <label class="form-label" for="form6Example2">Sähköpostiosoite</label>
                    </div>
                </div>
            </div>
        
            <!-- Text input -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                    <input name="address" type="text" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">Nykyisten nettisivujesi osoite (jos on)</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <input name="date" type='text' data-autoclose="true" readonly class='datepicker-here dpicker w-100' placeholder="Milloin uusien sivujesi pitäisi olla valmiit?" data-language='fi' />
                </div>

                <div class="col">
                    
                    <div class="form-outline">
                    <input name="phone" type="number" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">Puhelinnumero</label>
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-outline">
                    <input name="budjet" type="text" id="form6Example4" class="form-control" />
                    <label class="form-label" for="form6Example4">Budjettisi</label>
                    </div>
                </div>

            </div>


                <div class="col mb-4">
                    
                    <span>Tarvitsetko apua brändäyksessä (esim. logo, yritysilme)?</span>
                    <select name="logo" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="En tarvitse, minulla on kaikki valmiina" selected>En tarvitse, minulla on kaikki valmiina</option>
                        <option value="Kyllä tarvitsen - logoa tarvitsisi uudistaa">Kyllä tarvitsen - logoa tarvitsisi uudistaa</option>
                        <option value="Kyllä tarvitsen, minulla ei ole logoa">Kyllä tarvitsen, minulla ei ole logoa</option>
                        <option value="En osaa sanoa">En osaa sanoa</option>
                    </select>

                </div>

                <div class="col mb-4">
                    
                    <span>Tarvitsetko sivuillesi valokuvia?</span>
                    <select name="photos" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="En tarvitse, minulla on kaikki valmiina" selected>En tarvitse, minulla on kaikki valmiina</option>
                        <option value="Kyllä, mutta olen jo varannut valokuvaajan tai valinnut kuvapankista sopivat">Kyllä, mutta olen jo varannut valokuvaajan tai valinnut kuvapankista sopivat</option>
                        <option value="Kyllä - en tiedä mistä aloittaa">Kyllä - en tiedä mistä aloittaa</option>
                        <option value="En osaa sanoa">En osaa sanoa</option>
                    </select>

                </div>


                <div class="col mb-4">
        
                    <span>Haluatko sivujen löytyvän hyvin hakukoneista?</span>
                    <select name="seo" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="Kyllä" selected>Kyllä</option>
                        <option value="En">En</option>
                        <option value="En osaa sanoa">En osaa sanoa</option>
                    </select>
            
                </div>
            
                <div class="col mb-4">
                    
                    <span>Tarvitsetko apua sisällön kanssa?</span>
                    <select name="help" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="En tarvitse, minulla on kaikki valmiina" selected>En tarvitse, minulla on kaikki valmiina</option>
                        <option value="Kyllä tarvitsen. Minulla on sisältöä, mutta sitä pitää vielä muotoilla hakukoneystävälliseksi">Kyllä tarvitsen. Minulla on sisältöä, mutta sitä pitää vielä muotoilla hakukoneystävälliseksi</option>
                        <option value="Kyllä tarvitsen. Minulla ei ole ollenkaa">Kyllä tarvitsen. Minulla ei ole ollenkaa</option>
                        <option value="En osaa sanoa">En osaa sanoa</option>
                    </select>
            
                </div>
            
            


            <div class="mb-4">
                    
                <span>Aiotko myydä jotakin nettisivujesi kautta? Siten, että asiakas voi ostaa ja maksaa suoraan sivujen kautta - eli tarvitsetko verkkokaupan?</span>
                <select name="shop" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="En myy mitään verkkokaupan kautta - en tarvitse verkkokauppaa" selected>En myy mitään verkkokaupan kautta - en tarvitse verkkokauppaa</option>
                    <option value="Myyn palveluja verkkokaupan kautta">Myyn palveluja verkkokaupan kautta</option>
                    <option value="Myyn fyysisiä tuotteita verkkokaupassa">Myyn fyysisiä tuotteita verkkokaupassa</option>
                    <option value="Myyn digitaalisia (ladattavia) tuotteita verkkokaupassa">Myyn digitaalisia (ladattavia) tuotteita verkkokaupassa</option>
                    <option value="Myyn verkkokursseja verkkokaupassa">Myyn verkkokursseja verkkokaupassa</option>
                    <option value="Myyn jäsenyyksiä verkkokaupassa">Myyn jäsenyyksiä verkkokaupassa</option>
                    <option value="Muuta (kerro lisää)">Muuta (kerro lisää)</option>
                </select>

            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
            <textarea name="message" class="form-control" id="form6Example7" rows="4"></textarea>
            <label class="form-label" for="form6Example7">Kerro hieman yrityksestäsi ja siitä, mitä haluat uusien nettisivujen kautta saavuttaa!</label>
            </div>
        
            <!-- Submit button -->
            <input id="user_submit" class="btn btn-primary btn-block" type='submit' name='submit' value='Haluan kotisivun'>
        </form>
</div>