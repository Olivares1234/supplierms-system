<!-- Add New Forms & Receipt Roll -->
<div class="modal fade" id="add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><i style="color:#2c8cb7;" class="fas fa-truck fa-xl"></i> <b>Add New Supplier</b></h3>
                <span class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark fa-lg" style="color: #c50909; cursor: pointer;"></i></span>
            </div>

            <div class="modal-body modal-lg">
                <form id="addForm" autocomplete="off">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Company Name:</b></label>
                                <input type="hidden" style="text-transform: capitalize;" class="form-control" name="sppr_raw_materials" value="PE/PU Conductive">
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_company_name" placeholder="Enter Company Name..." required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Address:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_address" placeholder="Enter Address Lists...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Product Lists:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_product_lists" placeholder="Enter Product Lists...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Current Price:</b></label>
                                <input type="number" min="0" max="" style="text-transform: capitalize;" class="form-control" name="sppr_current_price" placeholder="Enter Current Price...">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                           <div class="form-group form-group-default">
                                <label><b>Nationality</b></label>
                                <input type="text" class="form-control" name="sppr_nationality" list="nationalities" placeholder="Enter Nationality...">
                                <datalist id="nationalities">
                                    <option value="None">None</option>
                                    <option value="Afghan">Afghan</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Algerian">Algerian</option>
                                    <option value="American">American</option>
                                    <option value="Andorran">Andorran</option>
                                    <option value="Angolan">Angolan</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Antiguans">Antiguans</option>
                                    <option value="Argentinean">Argentinean</option>
                                    <option value="Armenian">Armenian</option>
                                    <option value="Australian">Australian</option>
                                    <option value="Austrian">Austrian</option>
                                    <option value="Azerbaijani">Azerbaijani</option>
                                    <option value="Bahamian">Bahamian</option>
                                    <option value="Bahraini">Bahraini</option>
                                    <option value="Bangladeshi">Bangladeshi</option>
                                    <option value="Barbadian">Barbadian</option>
                                    <option value="Barbudans">Barbudans</option>
                                    <option value="Batswana">Batswana</option>
                                    <option value="Belarusian">Belarusian</option>
                                    <option value="Beninese">Beninese</option>
                                    <option value="Bhutanese">Bhutanese</option>
                                    <option value="Bolivian">Bolivian</option>
                                    <option value="Bosnian">Bosnian</option>
                                    <option value="Brazilian">Brazilian</option>
                                    <option value="British">British</option>
                                    <option value="Bruneian">Bruneian</option>
                                    <option value="Bulgarian">Bulgarian</option>
                                    <option value="Burkinabe">Burkinabe</option>
                                    <option value="Burmese">Burmese</option>
                                    <option value="Burundian">Burundian</option>
                                    <option value="Cambodian">Cambodian</option>
                                    <option value="Cameroonian">Cameroonian</option>
                                    <option value="Canadian">Canadian</option>
                                    <option value="Cape Verdean">Cape Verdean</option>
                                    <option value="Central Africa">Central Africa</option>
                                    <option value="Chadian">Chadian</option>
                                    <option value="Chilean">Chilean</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Colombian">Colombian</option>
                                    <option value="Comoran">Comoran</option>
                                    <option value="Congolese">Congolese</option>
                                    <option value="Costa Rican">Costa Rican</option>
                                    <option value="Croatian">Croatian</option>
                                    <option value="Cuban">Cuban</option>
                                    <option value="Cypriot">Cypriot</option>
                                    <option value="Czech">Czech</option>
                                    <option value="Danish">Danish</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominican">Dominican</option>
                                    <option value="Dutch">Dutch</option>
                                    <option value="East Timorese">East Timorese</option>
                                    <option value="Egyptian">Egyptian</option>
                                    <option value="Emirian">Emirian</option>
                                    <option value="Equatorial Guinean">Equatorial Guinean</option>
                                    <option value="Eritrean">Eritrean</option>
                                    <option value="Estonian">Estonian</option>
                                    <option value="Ethiopian">Ethiopian</option>
                                    <option value="Fijian">Fijian</option>
                                    <option value="Filipino">Filipino</option>
                                    <option value="Finnish">Finnish</option>
                                    <option value="French">French</option>
                                    <option value="Gabonese">Gabonese</option>
                                    <option value="Gambian">Gambian</option>
                                    <option value="Georgian">Georgian</option>
                                    <option value="German">German</option>
                                    <option value="Ghanaian">Ghanaian</option>
                                    <option value="Greek">Greek</option>
                                    <option value="Grenadian">Grenadian</option>
                                    <option value="Guatemalan">Guatemalan</option>
                                    <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                                    <option value="Guinean">Guinean</option>
                                    <option value="Guyanese">Guyanese</option>
                                    <option value="Haitian">Haitian</option>
                                    <option value="Herzegovinian">Herzegovinian</option>
                                    <option value="Honduran">Honduran</option>
                                    <option value="Hungarian">Hungarian</option>
                                    <option value="I-Kiribati">I-Kiribati</option>
                                    <option value="Icelander">Icelander</option>
                                    <option value="Indian">Indian</option>
                                    <option value="Indonesian">Indonesian</option>
                                    <option value="Iranian">Iranian</option>
                                    <option value="Iraqi">Iraqi</option>
                                    <option value="Irish">Irish</option>
                                    <option value="Israeli">Israeli</option>
                                    <option value="Italian">Italian</option>
                                    <option value="Ivorian">Ivorian</option>
                                    <option value="Jamaican">Jamaican</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Jordanian">Jordanian</option>
                                    <option value="Kazakhstani">Kazakhstani</option>
                                    <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                                    <option value="Kuwaiti">Kuwaiti</option>
                                    <option value="Kyrgyz">Kyrgyz</option>
                                    <option value="Laotian">Laotian</option>
                                    <option value="Latvian">Latvian</option>
                                    <option value="Lebanese">Lebanese</option>
                                    <option value="Liberian">Liberian</option>
                                    <option value="Libyan">Libyan</option>
                                    <option value="Liechtensteiner">Liechtensteiner</option>
                                    <option value="Lithuanian">Lithuanian</option>
                                    <option value="Luxembourger">Luxembourger</option>
                                    <option value="Macedonian">Macedonian</option>
                                    <option value="Malagasy">Malagasy</option>
                                    <option value="Malawian">Malawian</option>
                                    <option value="Malaysian">Malaysian</option>
                                    <option value="Maldivan">Maldivan</option>
                                    <option value="Malian">Malian</option>
                                    <option value="Maltese">Maltese</option>
                                    <option value="Marshallese">Marshallese</option>
                                    <option value="Mauritanian">Mauritanian</option>
                                    <option value="Mauritian">Mauritian</option>
                                    <option value="Mexican">Mexican</option>
                                    <option value="Micronesian">Micronesian</option>
                                    <option value="Moldovan">Moldovan</option>
                                    <option value="Monacan">Monacan</option>
                                    <option value="Mongolian">Mongolian</option>
                                    <option value="Moroccan">Moroccan</option>
                                    <option value="Mosotho">Mosotho</option>
                                    <option value="Motswana">Motswana</option>
                                    <option value="Mozambican">Mozambican</option>
                                    <option value="Namibian">Namibian</option>
                                    <option value="Nauruan">Nauruan</option>
                                    <option value="Nepalese">Nepalese</option>
                                    <option value="New Zealander">New Zealander</option>
                                    <option value="Nicaraguan">Nicaraguan</option>
                                    <option value="Nigerian">Nigerian</option>
                                    <option value="Nigerien">Nigerien</option>
                                    <option value="Northern Irish">Northern Irish</option>
                                    <option value="Norwegian">Norwegian</option>
                                    <option value="Omani">Omani</option>
                                    <option value="Pakistani">Pakistani</option>
                                    <option value="Palauan">Palauan</option>
                                    <option value="Panamanian">Panamanian</option>
                                    <option value="Papua New Guinean">Papua New Guinean</option>
                                    <option value="Paraguayan">Paraguayan</option>
                                    <option value="Peruvian">Peruvian</option>
                                    <option value="Polish">Polish</option>
                                    <option value="Romanian">Romanian</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Rwandan">Rwandan</option>
                                    <option value="Salvadoran">Salvadoran</option>
                                    <option value="Samoan">Samoan</option>
                                    <option value="San Marinese">San Marinese</option>
                                    <option value="Sao Tomean">Sao Tomean</option>
                                    <option value="Saudi">Saudi</option>
                                    <option value="Senegalese">Senegalese</option>
                                    <option value="Serbian">Serbian</option>
                                    <option value="Seychellois">Seychellois</option>
                                    <option value="Sierra Leonean">Sierra Leonean</option>
                                    <option value="Singaporean">Singaporean</option>
                                    <option value="Slovakian">Slovakian</option>
                                    <option value="Slovenian">Slovenian</option>
                                    <option value="South African">Solomon Islander</option>
                                    <option value="Somali">Somali</option>
                                    <option value="South Korean">South Korean</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Sri Lankan">Sri Lankan</option>
                                    <option value="Sudanese">Sudanese</option>
                                    <option value="Surinamer">Surinamer</option>
                                    <option value="Swazi">Swazi</option>
                                    <option value="Swedish">Swedish</option>
                                    <option value="Swiss">Swiss</option>
                                    <option value="Syrian">Syrian</option>
                                    <option value="Taiwanese">Taiwanese</option>
                                    <option value="Tajik">Tajik</option>
                                    <option value="Tanzanian">Tanzanian</option>
                                    <option value="Thai">Thai</option>
                                    <option value="Togolese">Togolese</option>
                                    <option value="Tongan">Tongan</option>
                                    <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                                    <option value="Tunisian">Tunisian</option>
                                    <option value="Turkish">Turkish</option>
                                    <option value="Tuvaluan">Tuvaluan</option>
                                    <option value="Ugandan">Ugandan</option>
                                    <option value="Ukrainian">Ukrainian</option>
                                    <option value="Uruguayan">Uruguayan</option>
                                    <option value="Uzbekistani">Uzbekistani</option>
                                    <option value="Venezuelan">Venezuelan</option>
                                    <option value="Vietnamese">Vietnamese</option>
                                    <option value="Welsh">Welsh</option>
                                    <option value="Yemenite">Yemenite</option>
                                    <option value="Zambian">Zambian</option>
                                    <option value="Zimbabwean">Zimbabwean</option>
                                </datalist>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Owner:</b></label>
                                <input type="text"  style="text-transform: capitalize;" class="form-control" name="sppr_owner" placeholder="Enter Owner...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Contact Person:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_contact_person" placeholder="Enter Contact Person...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Contact#:</b></label>
                                <input type="text" min="0" max="" style="text-transform: capitalize;" class="form-control" name="sppr_contact_num" placeholder="Enter Contact #...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Fax#:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_fax_num" placeholder="Enter Fax #...">
                            </div>
                        </div>
                   

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Email / Website:</b></label>
                                <input type="text" class="form-control" name="sppr_email" placeholder="Enter Email / Website...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Current Payment Terms:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_current_pay_terms" placeholder="Enter Current Payment Terms...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Year Approved:</b></label>
                                <input type="number" min="1900" max="" step="1" value="2016" style="text-transform: capitalize;" class="form-control" name="sppr_approved" placeholder="Enter Year Approved...">
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_raw_extension" placeholder="Enter Raw Extension..." value="PE" hidden>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Remarks:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_remarks" placeholder="Enter Remarks...">
                            </div>
                        </div>
                    </div> 
                    

                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span><i class="fa-solid fa-repeat"></i> Reset</button>
                <button type="submit" id="submitBtn" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> <i class="fa-solid fa-paper-plane"></i> Save</a>
                    </form>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- View -->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><i style="color:#2c8cb7;" class="fab fa-linode fa-2xl"></i> <b>Details Supplier</b></h3>
                <span class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark fa-lg" style="color: #c50909; cursor: pointer;"></i></span>
            </div>
            <div class="modal-body modal-lg">
                <form id="viewForm">
                    <input type="hidden" class="id" name="id">
                    <div class="row form-group">
                        <table class="table table-bordered table-responsive" style="width: 100%">
                            <tr>
                                <th>Raw Item:</th>
                                <td colspan="1" style="word-wrap: break-word;" class="sppr_raw_materials" name="sppr_raw_materials" value="sppr_raw_materials"></td>

                                <th>Supplier Name:</th>
                                <td colspan="3" ; style="word-wrap: break-word;" class="sppr_company_name" name="sppr_company_name" value="sppr_company_name"></td>

                            </tr>

                            <tr>
                                <th>Product List:</th>
                                <td colspan="0" ; style="word-wrap: break-word;" class="sppr_product_lists" name="sppr_product_lists" value="sppr_product_lists"></td>

                                <th>Address:</th>
                                <td colspan="3" ; style="word-wrap: break-word;" class="sppr_address" name="sppr_address" value="sppr_address"></td>

                            </tr>

                            <tr>
                                <th>Current Price:</th>
                                <td style="word-wrap: break-word;" class="sppr_current_price" name="sppr_current_price" value="sppr_current_price"></td>

                                <th>Nationality:</th>
                                <td colspan="3" ; style="word-wrap: break-word;" class="sppr_nationality" name="sppr_nationality" value="sppr_nationality"></td>

                            </tr>

                            <tr>
                                <th>Owner:</th>
                                <td style="word-wrap: break-word;" class="sppr_owner" name="sppr_owner" value="sppr_owner"></td>

                                <th>Contact Person:</th>
                                <td colspan="3" style="word-wrap: break-word;" class="sppr_contact_person" name="sppr_contact_person" value="sppr_contact_person"></td>

                            </tr>

                            <tr>
                                <th>Contact #:</th>
                                <td colspan="0" ; style="word-wrap: break-word;" class="sppr_contact_num" name="sppr_contact_num" value="sppr_contact_num">

                                <th>Fax #:</th>
                                <td colspan="3" style="word-wrap: break-word;" class="sppr_fax_num" name="sppr_fax_num" value="sppr_fax_num"></td>

                            </tr>

                            <tr>
                                <th>Email Address / Website:</th>
                                <td style="word-wrap: break-word;" class="sppr_email" name="sppr_email" value="sppr_email"></td>

                                <th>Current Payment Terms:</th>
                                <td colspan="3" ; style="word-wrap: break-word;" class="sppr_current_pay_terms" name="sppr_current_pay_terms" value="sppr_current_pay_terms"></td>

                                <!-- <td colspan="5"></td> -->
                            </tr>

                            <tr>
                                <th>Year Approved:</th>
                                <td style="word-wrap: break-word;" class="sppr_approved" name="sppr_approved" value="sppr_approved"></td>

                                <th>Remarks:</th>
                                <td style="word-wrap: break-word; color:#209d8f;" class="sppr_remarks" name="sppr_remarks" value="sppr_remarks"></td>

                                <th>Status:</th>
                                <td style="word-wrap: break-word; color:orange; font-weight:bold;" class="" name="" value="">Ongoing</td>
                            </tr>
                        </table>
                    </div>

            </div>
            </form>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" id="refresh" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Update</a>
            </div> -->

        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><i style="color:#2c8cb7;" class="fas fa-truck fa-xl"></i> <b>Edit Details Supplier</b></h3>
                <span class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark fa-lg" style="color: #c50909; cursor: pointer;"></i></span>
            </div>

            <div class="modal-body modal-lg">
                <form id="editForm" autocomplete="off">
                <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Company Name:</b></label>
                                <input type="text" class="id" name="id" hidden>
                                <input type="hidden" style="text-transform: capitalize;" class="form-control" name="sppr_raw_materials" value="Danpla">
                                <input type="text" style="text-transform: capitalize;" class="form-control sppr_company_name" name="sppr_company_name" placeholder="Enter Company Name..." required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Address:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control sppr_address" name="sppr_address" placeholder="Enter Address Lists...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Product Lists:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control sppr_product_lists" name="sppr_product_lists" placeholder="Enter Product Lists...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Current Price:</b></label>
                                <input type="number" min="0" max="" style="text-transform: capitalize;" class="form-control sppr_current_price" name="sppr_current_price" placeholder="Enter Current Price...">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                           <div class="form-group form-group-default">
                                <label><b>Nationality</b></label>
                                <input type="text" class="form-control sppr_nationality" name="sppr_nationality" list="nationalities" placeholder="Enter Nationality...">
                                <datalist id="nationalities">
                                    <option value="None">None</option>
                                    <option value="Afghan">Afghan</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Algerian">Algerian</option>
                                    <option value="American">American</option>
                                    <option value="Andorran">Andorran</option>
                                    <option value="Angolan">Angolan</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Antiguans">Antiguans</option>
                                    <option value="Argentinean">Argentinean</option>
                                    <option value="Armenian">Armenian</option>
                                    <option value="Australian">Australian</option>
                                    <option value="Austrian">Austrian</option>
                                    <option value="Azerbaijani">Azerbaijani</option>
                                    <option value="Bahamian">Bahamian</option>
                                    <option value="Bahraini">Bahraini</option>
                                    <option value="Bangladeshi">Bangladeshi</option>
                                    <option value="Barbadian">Barbadian</option>
                                    <option value="Barbudans">Barbudans</option>
                                    <option value="Batswana">Batswana</option>
                                    <option value="Belarusian">Belarusian</option>
                                    <option value="Beninese">Beninese</option>
                                    <option value="Bhutanese">Bhutanese</option>
                                    <option value="Bolivian">Bolivian</option>
                                    <option value="Bosnian">Bosnian</option>
                                    <option value="Brazilian">Brazilian</option>
                                    <option value="British">British</option>
                                    <option value="Bruneian">Bruneian</option>
                                    <option value="Bulgarian">Bulgarian</option>
                                    <option value="Burkinabe">Burkinabe</option>
                                    <option value="Burmese">Burmese</option>
                                    <option value="Burundian">Burundian</option>
                                    <option value="Cambodian">Cambodian</option>
                                    <option value="Cameroonian">Cameroonian</option>
                                    <option value="Canadian">Canadian</option>
                                    <option value="Cape Verdean">Cape Verdean</option>
                                    <option value="Central Africa">Central Africa</option>
                                    <option value="Chadian">Chadian</option>
                                    <option value="Chilean">Chilean</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Colombian">Colombian</option>
                                    <option value="Comoran">Comoran</option>
                                    <option value="Congolese">Congolese</option>
                                    <option value="Costa Rican">Costa Rican</option>
                                    <option value="Croatian">Croatian</option>
                                    <option value="Cuban">Cuban</option>
                                    <option value="Cypriot">Cypriot</option>
                                    <option value="Czech">Czech</option>
                                    <option value="Danish">Danish</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominican">Dominican</option>
                                    <option value="Dutch">Dutch</option>
                                    <option value="East Timorese">East Timorese</option>
                                    <option value="Egyptian">Egyptian</option>
                                    <option value="Emirian">Emirian</option>
                                    <option value="Equatorial Guinean">Equatorial Guinean</option>
                                    <option value="Eritrean">Eritrean</option>
                                    <option value="Estonian">Estonian</option>
                                    <option value="Ethiopian">Ethiopian</option>
                                    <option value="Fijian">Fijian</option>
                                    <option value="Filipino">Filipino</option>
                                    <option value="Finnish">Finnish</option>
                                    <option value="French">French</option>
                                    <option value="Gabonese">Gabonese</option>
                                    <option value="Gambian">Gambian</option>
                                    <option value="Georgian">Georgian</option>
                                    <option value="German">German</option>
                                    <option value="Ghanaian">Ghanaian</option>
                                    <option value="Greek">Greek</option>
                                    <option value="Grenadian">Grenadian</option>
                                    <option value="Guatemalan">Guatemalan</option>
                                    <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                                    <option value="Guinean">Guinean</option>
                                    <option value="Guyanese">Guyanese</option>
                                    <option value="Haitian">Haitian</option>
                                    <option value="Herzegovinian">Herzegovinian</option>
                                    <option value="Honduran">Honduran</option>
                                    <option value="Hungarian">Hungarian</option>
                                    <option value="I-Kiribati">I-Kiribati</option>
                                    <option value="Icelander">Icelander</option>
                                    <option value="Indian">Indian</option>
                                    <option value="Indonesian">Indonesian</option>
                                    <option value="Iranian">Iranian</option>
                                    <option value="Iraqi">Iraqi</option>
                                    <option value="Irish">Irish</option>
                                    <option value="Israeli">Israeli</option>
                                    <option value="Italian">Italian</option>
                                    <option value="Ivorian">Ivorian</option>
                                    <option value="Jamaican">Jamaican</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Jordanian">Jordanian</option>
                                    <option value="Kazakhstani">Kazakhstani</option>
                                    <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                                    <option value="Kuwaiti">Kuwaiti</option>
                                    <option value="Kyrgyz">Kyrgyz</option>
                                    <option value="Laotian">Laotian</option>
                                    <option value="Latvian">Latvian</option>
                                    <option value="Lebanese">Lebanese</option>
                                    <option value="Liberian">Liberian</option>
                                    <option value="Libyan">Libyan</option>
                                    <option value="Liechtensteiner">Liechtensteiner</option>
                                    <option value="Lithuanian">Lithuanian</option>
                                    <option value="Luxembourger">Luxembourger</option>
                                    <option value="Macedonian">Macedonian</option>
                                    <option value="Malagasy">Malagasy</option>
                                    <option value="Malawian">Malawian</option>
                                    <option value="Malaysian">Malaysian</option>
                                    <option value="Maldivan">Maldivan</option>
                                    <option value="Malian">Malian</option>
                                    <option value="Maltese">Maltese</option>
                                    <option value="Marshallese">Marshallese</option>
                                    <option value="Mauritanian">Mauritanian</option>
                                    <option value="Mauritian">Mauritian</option>
                                    <option value="Mexican">Mexican</option>
                                    <option value="Micronesian">Micronesian</option>
                                    <option value="Moldovan">Moldovan</option>
                                    <option value="Monacan">Monacan</option>
                                    <option value="Mongolian">Mongolian</option>
                                    <option value="Moroccan">Moroccan</option>
                                    <option value="Mosotho">Mosotho</option>
                                    <option value="Motswana">Motswana</option>
                                    <option value="Mozambican">Mozambican</option>
                                    <option value="Namibian">Namibian</option>
                                    <option value="Nauruan">Nauruan</option>
                                    <option value="Nepalese">Nepalese</option>
                                    <option value="New Zealander">New Zealander</option>
                                    <option value="Nicaraguan">Nicaraguan</option>
                                    <option value="Nigerian">Nigerian</option>
                                    <option value="Nigerien">Nigerien</option>
                                    <option value="Northern Irish">Northern Irish</option>
                                    <option value="Norwegian">Norwegian</option>
                                    <option value="Omani">Omani</option>
                                    <option value="Pakistani">Pakistani</option>
                                    <option value="Palauan">Palauan</option>
                                    <option value="Panamanian">Panamanian</option>
                                    <option value="Papua New Guinean">Papua New Guinean</option>
                                    <option value="Paraguayan">Paraguayan</option>
                                    <option value="Peruvian">Peruvian</option>
                                    <option value="Polish">Polish</option>
                                    <option value="Romanian">Romanian</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Rwandan">Rwandan</option>
                                    <option value="Salvadoran">Salvadoran</option>
                                    <option value="Samoan">Samoan</option>
                                    <option value="San Marinese">San Marinese</option>
                                    <option value="Sao Tomean">Sao Tomean</option>
                                    <option value="Saudi">Saudi</option>
                                    <option value="Senegalese">Senegalese</option>
                                    <option value="Serbian">Serbian</option>
                                    <option value="Seychellois">Seychellois</option>
                                    <option value="Sierra Leonean">Sierra Leonean</option>
                                    <option value="Singaporean">Singaporean</option>
                                    <option value="Slovakian">Slovakian</option>
                                    <option value="Slovenian">Slovenian</option>
                                    <option value="South African">Solomon Islander</option>
                                    <option value="Somali">Somali</option>
                                    <option value="South Korean">South Korean</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Sri Lankan">Sri Lankan</option>
                                    <option value="Sudanese">Sudanese</option>
                                    <option value="Surinamer">Surinamer</option>
                                    <option value="Swazi">Swazi</option>
                                    <option value="Swedish">Swedish</option>
                                    <option value="Swiss">Swiss</option>
                                    <option value="Syrian">Syrian</option>
                                    <option value="Taiwanese">Taiwanese</option>
                                    <option value="Tajik">Tajik</option>
                                    <option value="Tanzanian">Tanzanian</option>
                                    <option value="Thai">Thai</option>
                                    <option value="Togolese">Togolese</option>
                                    <option value="Tongan">Tongan</option>
                                    <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                                    <option value="Tunisian">Tunisian</option>
                                    <option value="Turkish">Turkish</option>
                                    <option value="Tuvaluan">Tuvaluan</option>
                                    <option value="Ugandan">Ugandan</option>
                                    <option value="Ukrainian">Ukrainian</option>
                                    <option value="Uruguayan">Uruguayan</option>
                                    <option value="Uzbekistani">Uzbekistani</option>
                                    <option value="Venezuelan">Venezuelan</option>
                                    <option value="Vietnamese">Vietnamese</option>
                                    <option value="Welsh">Welsh</option>
                                    <option value="Yemenite">Yemenite</option>
                                    <option value="Zambian">Zambian</option>
                                    <option value="Zimbabwean">Zimbabwean</option>
                                </datalist>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Owner:</b></label>
                                <input type="text"  style="text-transform: capitalize;" class="form-control sppr_owner" name="sppr_owner" placeholder="Enter Owner...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Contact Person:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control sppr_contact_person" name="sppr_contact_person" placeholder="Enter Contact Person...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Contact#:</b></label>
                                <input type="text" min="0" max="" style="text-transform: capitalize;" class="form-control sppr_contact_num" name="sppr_contact_num" placeholder="Enter Contact #...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Fax#:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control sppr_fax_num" name="sppr_fax_num" placeholder="Enter Fax #...">
                            </div>
                        </div>
                   

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Email / Website:</b></label>
                                <input type="text" class="form-control sppr_email" name="sppr_email" placeholder="Enter Email / Website...">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Current Payment Terms:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control sppr_current_pay_terms" name="sppr_current_pay_terms" placeholder="Enter Current Payment Terms...">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Year Approved:</b></label>
                                <input type="number" min="1900" max="" step="1" value="2016" style="text-transform: capitalize;" class="form-control sppr_approved" name="sppr_approved" placeholder="Enter Year Approved...">
                                <input type="text" style="text-transform: capitalize;" class="form-control" name="sppr_raw_extension" placeholder="Enter Raw Extension..." value="PE" hidden>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label><b>Remarks:</b></label>
                                <input type="text" style="text-transform: capitalize;" class="form-control sppr_remarks" name="sppr_remarks" placeholder="Enter Remarks...">
                            </div>
                        </div>
                    </div> 
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span><i class="fa-solid fa-repeat"></i> Reset</button>
                <button type="submit" id="refresh" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span><i class="fa-solid fa-paper-plane"></i> Save</a>
                    </form>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title"><i style="color:#2c8cb7;" class="fas fa-truck fa-xl"></i> <b>Deleting Record</b></h3>
                <span class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-circle-xmark fa-lg" style="color: #c50909; cursor: pointer;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete?</p>
                <h2 class="text-center fullname"></h2>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span><i class="fa-solid fa-remove"></i> Cancel</button>
                <button type="submit" id="refresh" class="btn btn-primary id"><span class="glyphicon glyphicon-check"></span><i class="fa-solid fa-paper-plane"></i> Yes</a>
            </div>

        </div>
    </div>
</div>