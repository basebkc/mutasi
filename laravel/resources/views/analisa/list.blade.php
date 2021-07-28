@extends('layouts.app')

@section('head')
    <link rel="stylesheet" media="screen, print"
          href="{{asset('public/assets/css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print"
          href="{{asset('public/assets/css/formplugins/select2/select2.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{asset('public/assets/css/fa-solid.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{asset('public/assets/css/fa-brands.css') }}">
    <style>
        .select2-close-mask {
            z-index: 2099;
        }

        .select2-dropdown {
            z-index: 3051;
        }

        span.select2-container {
            z-index: 10050;
        }
    </style>
@endsection
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Anlisa Kredit <span class="fw-300"><i>Tabel</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0"
                                    data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10"
                                    data-original-title="Collapse"><i class="fal fa-window-minimize"></i></button>
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0"
                                    data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10"
                                    data-original-title="Fullscreen"><i class="fal fa-expand"></i></button>
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0"
                                    data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                                    data-original-title="Close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                      
                            <div class="panel-hdr">
                                <h2></h2>
                                <div class="panel-toolbar">
                                    <h5 class="m-0"></h5>
                                </div>
                                <div class="panel-toolbar ml-0">
                                    <h5 class="m-0">
                                        <a id="resetModal" data-toggle="modal" data-target="#pilih" class="btn btn-success react-url"><i
                                                class="fal fa-plus"></i><!-- react-text: 54 --><!-- /react-text --><span
                                                class="hidden-mobile"> Tambah Aplikasi</span></a>
                                    </h5>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <div class="panel-tag">
                                        Lakukan pengecekan data dengan mencari data nasabah terlebih dahulu sebelum melakukan menambahkan analisa
                                    </div>
                                    <!-- datatable start -->
                                    <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                        <thead class="bg-highlight">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- datatable end -->
                                </div>
                            </div>
                        
                            <!-- datatable end -->
                            <div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lx" role="document" style="max-width: 80%">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Please select the type of application</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel-content">
                                                <form id="formAdd" class="smart-form" novalidate="novalidate">
                                                    @csrf
                                                    <div class="form-row">
                                                        <input type="hidden" name="step" id="step" value="0">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationCustom01">Type of
                                                                Application<span class="text-danger">*</span>
                                                            </label>
                                                            <select class="custom-select" id="typeApplication"
                                                                    name="type_application" required="">
                                                                <option value="" disabled="" selected>Select Type
                                                                </option>
                                                               
                                                            </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Proposal From
                                                                <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="branch" id="branchKode"
                                                                    required="">
                                                                <option value="">Select Branch</option>
                                                               
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            {{--<form action="{{ url()->current() }}" >--}}
                                                            <div class="border-faded bg-faded p-3 mb-g d-flex">

                                                                <input oninput="this.value" type="text"
                                                                       id="js-filter-contacts" name="filter-contacts"
                                                                       class="form-control shadow-inset-2 form-control-lg"
                                                                       placeholder="Search Debtor">
                                                                <button type="submit" class="btn btn-primary"
                                                                        style="display: none;">
                                                                    Search
                                                                </button>


                                                                <div
                                                                    class="btn-group btn-group-lg btn-group-toggle ml-4">
                                                                    <div class="demo">
                                                                        <div
                                                                            class="custom-control custom-radio custom-radio-rounded">
                                                                            <input type="radio"
                                                                                   class="custom-control-input"
                                                                                   id="filter-name" value="1"
                                                                                   name="filter" checked="">
                                                                            <label class="custom-control-label"
                                                                                   for="filter-name">Name</label>
                                                                        </div>
                                                                        <div
                                                                            class="custom-control custom-radio custom-radio-rounded">
                                                                            <input type="radio"
                                                                                   class="custom-control-input"
                                                                                   id="filter-id" value="2"
                                                                                   name="filter">
                                                                            <label class="custom-control-label"
                                                                                   for="filter-id">KTP/NPWP</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="demo">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input typeDebtor"
                                                                                   id="typeDebtor1" value="1"
                                                                                   name="typeDebtor" onclick="return false;">
                                                                            <label class="custom-control-label"
                                                                                   for="typeDebtor1">Personal</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input typeDebtor"
                                                                                   id="typeDebtor2" value="2"
                                                                                   name="typeDebtor" checked="" onclick="return false;">
                                                                            <label class="custom-control-label"
                                                                                   for="typeDebtor2">Perusahaan</label>
                                                                        </div>
                                                                    </div>
                                                                    {{--<label class="btn btn-default active">--}}
                                                                    {{--<input type="radio" name="contactview" id="grid" checked="" value="grid"><i class="fas fa-table"></i>--}}
                                                                    {{--</label>--}}
                                                                    {{--<label class="btn btn-default waves-effect waves-themed active">--}}
                                                                    {{--<input type="radio" name="contactview" id="table" value="table"><i class="fas fa-th-list"></i>--}}
                                                                    {{--</label>--}}
                                                                </div>
                                                            </div>
                                                </form>
                                                        </div>

{{--                                                        <div class="row">--}}
                                                            <div class="col-md-12">
                                                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                                                    <li class="nav-item active" id="t1"><a class="nav-link disabled active" data-toggle="tab" href="#tab_justified-1" role="tab" id="tab1">Debitur</a></li>
                                                                    <li class="nav-item" id="t2"><a class="nav-link disabled" data-toggle="tab" href="#tab_justified-2" role="tab" id="tab2">Eligibility</a></li>
                                                                    <li class="nav-item" id="t3"><a class="nav-link disabled" data-toggle="tab" href="#tab_justified-3" role="tab" id="tab3">Score Card</a></li>
                                                                </ul>
                                                                <div class="tab-content p-3" >
                                                                    <div class="tab-pane fade show active" id="tab_justified-1" role="tabpanel">
                                                                        <div class="col-md-12" id="js-contacts">
                                                                        </div>
                                                                        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                                            <button class="btn btn-primary ml-auto btnNext" id="btnSave1"  style="display: none;" type="button">Next</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab_justified-2" role="tabpanel">
                                                                        <div class="col-md-12" id="js-eligibility" style="display: none;">
                                                                            <div class="card border mb-g eligibility">
                                                                                <div class="card-body">
                                                                                    <div class="form-row form-group">
                                                                                        {{-- <div class="col-md-12 mb-3">
                                                                                            <div class="form-group">
                                                                                                <label class="form-label" for="totalAsset">Type Score</label>
                                                                                                <div class="frame-wrap">
                                                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                                                        <input type="radio" class="custom-control-input typeScore" id="typeScore1" value="1" name="typeScore" >
                                                                                                        <label class="custom-control-label" for="typeScore1" >NEW</label>
                                                                                                    </div>
                                                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                                                        <input type="radio" class="custom-control-input typeScore" id="typeScore2" value="2" name="typeScore">
                                                                                                        <label class="custom-control-label" for="typeScore2">ADD</label>
                                                                                                    </div>
                                                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                                                        <input type="radio" class="custom-control-input typeScore" id="typeScore3" value="3" name="typeScore" >
                                                                                                        <label class="custom-control-label" for="typeScore3">Renewal</label>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                        <div class="col-md-2 mb-3">
                                                                                            <div class="form-group">
                                                                                                <label class="form-label" for="validationCustom0111">Type Score<span class="text-danger"></span></label>
                                                                                                <input type="hidden" class="form-control typeScore" id="typeScoreNilai"  name="typeScore" >
                                                                                                <input type="text" style="font-size:18px" class="form-control" id="typeScoreText" readonly  name="typeScoreText" >
                                                                                            </div>
                                                                                        </div>

                                                                                        </div>
                                                                                    </div>

                                                                                <div class="card-body">
                                                                                    <h5 class="card-title">UJI KELAYAKAN / <i>ELIGIBILITY REVIEW</i> </h5>
                                                                                   <form id="formEligibility" enctype="multipart/form-data" method="POST">
                                                                                        <div class="form-row form-group">
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label class="form-label" for="validationCustom02">Nama Cadeb :<span class="text-danger"></span></label>
                                                                                                <div class="input-group">
                                                                                                    <input type="text" class="form-control" id="namaCadeb" required="" name="namaCadeb" readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label class="form-label" for="validationCustom02">No. MRK :<span class="text-danger"></span></label>
                                                                                                <div class="input-group">
                                                                                                    <input type="text" class="form-control" id="noMRK" required="" name="noMRK">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label class="form-label" for="validationCustom02">Total Plafond Akhir :<span class="text-danger"></span></label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">IDR</span>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control money" id="totalPlafondAkhir" required="" name="totalPlafondAkhir">
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text">juta</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label class="form-label" for="validationCustom02"> Total Nilai Taksasi :<span class="text-danger"></span></label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">IDR</span>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control money" id="totalNilaiTaksasi" name="totalNilaiTaksasi" required="">
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text">juta</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label class="form-label" for="validationCustom02"> Fasilitas PRK :<span class="text-danger"></span></label>
                                                                                                <select type="select" class="form-control" name="fasilitasPRK" id="fasilitasPRK">
                                                                                                    <option value="Belum Ada / Tidak Ada">Belum Ada / Tidak Ada</option>
                                                                                                    <option value="Ada" selected>Ada</option>
                                                                                                    <option value="Sudah ditutup">Sudah ditutup</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <label class="form-label" for="validationCustom02"> Fasilitas KK :<span class="text-danger"></span></label>
                                                                                                <select type="select" class="form-control" name="fasilitasKK" id="fasilitasKK">
                                                                                                    <option value="Belum Ada / Tidak Ada">Belum Ada / Tidak Ada</option>
                                                                                                    <option value="Ada" selected>Ada</option>
                                                                                                    <option value="Sudah ditutup">Sudah ditutup</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-md-12 mb-6">
                                                                                            </div>
                                                                                            <div class="col-md-12 mb-3">
                                                                                                <table id="table-deb" class="table table-bordered table-hover table-striped w-100">
                                                                                                    <thead>
                                                                                                    <tr>
                                                                                                        <th>No</th>
                                                                                                        <th>Requirement</th>
                                                                                                        <th>Data</th>
                                                                                                    </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                    <tr>
                                                                                                        <td>1</td>
                                                                                                        <td> Apakah Cadeb Berstatus DHIB dan/atau DHN ?</td>
                                                                                                        <td>
                                                                                                            <select name="statusCadeb" required="" class="form-control component" id="statusCadeb">
                                                                                                                <option value="" selected disabled> Choose </option>
                                                                                                                <option value="clear">Clear</option>
                                                                                                                <option value="DHN">DHN</option>
                                                                                                                <option value="DHIB">DHIB</option>
                                                                                                                <option value="DHN+DHIB">DHN+DHIB</option>
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>2</td>
                                                                                                        <td> Apakah cadeb pernah mengalami restruktur kredit ?</td>
                                                                                                        <td>
                                                                                                            <select name="restruktur" required="" class="form-control component" id="restruktur">
                                                                                                                <option value="" selected disabled> Choose </option>
                                                                                                                <option value="0">Tidak</option>
                                                                                                                <option value="1">Iya</option>
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>3</td>
                                                                                                        <td> Usia Cadeb / Ultimate Shareholder / Key person</td>
                                                                                                        <td>
                                                                                                            <input type="number"  class="form-control component" name="tanggalLahir" id="tanggalLahir" value="0">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>4</td>
                                                                                                        <td> Atas nama pemilik sertifikat jaminan baru yang akan dijaminkan</td>
                                                                                                        <td>
                                                                                                            <select class="form-control component" required="" name="sertifikat" id="sertifikat">
                                                                                                                <option value="" selected disabled> Choose </option>
                                                                                                                <option value="Cadeb/Debitur">Cadeb/Debitur</option>
                                                                                                                <option value="Pasangan">Pasangan</option>
                                                                                                                <option value="Orang Tua / Anak">Orang Tua / Anak</option>
                                                                                                                <option value="Direktur">Direktur</option>
                                                                                                                <option value="Komisaris">Komisaris</option>
                                                                                                                <option value="PerseroKomanditer">Persero Komanditer</option>
                                                                                                                <option value="DirekturUtama">Direktur Utama</option>
                                                                                                                <option value="KomisarisUtama">Komisaris Utama</option>
                                                                                                                <option value="Pemegangsaham">Pemegang saham</option>
                                                                                                                <option value="CrossCollateral">Cross Collateral</option>
                                                                                                                <option value="Lainnya">Lainnya</option>
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>5</td>
                                                                                                        <td> Usaha Cadeb bertentangan dengan hukum dan norma yang berlaku?</td>
                                                                                                        <td>
                                                                                                            <select name="sektorEkonomi" required="" class="form-control component" id="sektorEkonomi">
                                                                                                                <option value="" selected disabled> Choose </option>
                                                                                                                <option value="0">Tidak</option>
                                                                                                                <option value="1">Iya</option>
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>6</td>
                                                                                                        <td> Total pinjaman Group di CCBI (jika tidak ada diisi nol / 0)</td>
                                                                                                        <td>
                                                                                                            <input class="form-control component money" required="" type="text" name="totalLoan" id="totalLoan">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>7</td>
                                                                                                        <td> Jumlah plafond fasilitas kredit di seluruh Bank (Exclude total plafond akhir di CCBI)</td>
                                                                                                        <td>
                                                                                                            <input class="form-control component money" required="" type="text" name="totalPlafond" id="totalPlafond">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>8</td>
                                                                                                        <td> Omset per tahun / annual sales periode berjalan</td>
                                                                                                        <td>
                                                                                                            <input class="form-control component money" required="" type="text" name="omset" id="omset">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>9</td>
                                                                                                        <td> Kolektibilitas terburuk berdasarkan IDEB  (Posisi ter-update)</td>
                                                                                                        <td>
                                                                                                            <select class="form-control component" required="" name="koletibilitas" id="koletibilitas">
                                                                                                                <option value="" selected disabled> Choose </option>
                                                                                                                <option value="1">1</option>
                                                                                                                <option value="2">2</option>
                                                                                                                <option value="3">3</option>
                                                                                                                <option value="4">4</option>
                                                                                                                <option value="5">5</option>
                                                                                                            </select>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>10</td>
                                                                                                        <td> Total Nilai SCCR (Secure Collateral Coverage Ratio)</td>
                                                                                                        <td>
                                                                                                            <input class="form-control component money" required="" type="text" name="totalNilaiSCCR" id="totalNilaiSCCR" >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="4">
                                                                                                            <div class="input-group input-group-lg">
                                                                                                                {{-- <button style="width:100%" id="btnEligibility" type="submit" class="btn btn-primary waves-effect waves-themed" onclick="return isEligibility();">HASIL KELAYAKAN / <i>ELIGIBILITY RESULT </i></button><i> --}}
                                                                                                                <button style="width:100%" id="btnEligibility" type="submit" class="btn btn-primary waves-effect waves-themed">HASIL KELAYAKAN / <i>ELIGIBILITY RESULT </i></button><i>
                                                                                                                
                                                                                                                </i>
                                                                                                            </div>
                                                                                                            <i>
                                                                                                            </i>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                   </form>
                                                                                    <div class="input-group input-group-lg">
                                                                                        <input type="text" readonly="" class="form-control prosesHasil" value="-" id="hasil" name="hasil" size="10" style="text-align: center;padding: 0.2rem 1.5rem;font-size: 3rem;">
                                                                                    </div>
                                                                                    <div class="card border mb-g" style="display: none;">
                                                                                        <div class="card-body">
                                                                                            <div class="col-md-12 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="logicElig">Keys Data</label>
                                                                                                    <textarea class="form-control" name="logicElig" id="logicElig" rows="5" readonly></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                                            <button class="btn btn-primary ml-auto btnReset"  onclick="return isReset(2);">Reset</button>
                                                                            <button class="btn btn-primary ml-3 btnNext" id="btnSave2" type="button" style="display: none;" >Next</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab_justified-3" role="tabpanel">
                                                                        <div class="col-md-12" id="js-scoreCard"  style="display: none;">
                                                                           <form id="scoreDt" class="needs-validation" enctype="multipart/form-data" method="POST">
                                                                                <div class="card border mb-g">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="totalAsset">Total Asset</label>
                                                                                                    <input type="text" id="totalAsset" name="totalAsset" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="totKewajiban">Tot Kewajiban Bank</label>
                                                                                                    <input type="text" id="totKewajiban" name="totKewajiban" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="I">Kol. IDEB Terakhir</label>
                                                                                                    <select class="custom-select" name="I" id="I" required="">
                                                                                                        <option value="" disabled selected>Select</option>
                                                                                                        <option value="1" >Kol 1</option>
                                                                                                        <option value="2" >Pernah Kol 2 (>2x)</option>
                                                                                                        <option value="3" >Pernah NPL (KK)</option>
                                                                                                        <option value="4" >Pernah NPL (Non KK)</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="nop">% NOP</label>
                                                                                                    <input type="text" id="nop" name="nop" class="form-control money">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="US">Lama Usaha</label>
                                                                                                    <input type="text" id="US" name="US" class="form-control money">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="BS">Kode LBU</label>
                                                                                                    {{--                                                        <input type="text" id="BS" name="BS" class="form-control">--}}
                                                                                                    <select class="custom-select" name="BS" id="BS" required="">
                                                                                                        <option value="" disabled selected>Select</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="OD">Overdraft</label>
                                                                                                    <input type="text" id="OD" name="OD" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="TLK">Tolakan Keluar</label>
                                                                                                    <input type="text" id="TLK" name="TLK" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="saleRek">Sale Rek</label>
                                                                                                    <input type="text" id="saleRek" name="saleRek" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group saleBefore">
                                                                                                    <label class="form-label" for="saleBefore">Sales Rek. (Before) : </label>
                                                                                                    <input type="text" id="saleBefore" name="saleBefore" class="form-control money" value="0">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="plafondKK">Total Plafond KK</label>
                                                                                                    <input type="text" id="plafondKK" name="plafondKK" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="osKK">Total OS KK</label>
                                                                                                    <input type="text" id="osKK" name="osKK" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="plafondPRK">Total Plafond PRK</label>
                                                                                                    <input type="text" id="plafondPRK" name="plafondPRK" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="avgPRK">Avg. usage PRK</label>
                                                                                                    <input type="text" id="avgPRK" name="avgPRK" class="form-control money" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="form-group">
                                                                                                    <label class="form-label" for="jenisUsaha">Jenis Usaha </label>
                                                                                                    <select class="custom-select" name="jenisUsaha" id="jenisUsaha" required="">
                                                                                                        <option value="" disabled selected>Select</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="modal-footer">
                                                                                    <a href="#">
                                                                                       
                                                                                            <button type="submit" class="btn btn-primary">Calculate</button>
                                                                                        {{-- <button type="submit" class="btn btn-primary" id="btnScore" onclick="return isScoreDt();">Calculate</button> --}}
                                                                                        {{-- <button type="submit" class="btn btn-primary" id="btnScore">Calculate</button> --}}
                                                                                    </a>
                                                                                </div>
                                                                           </form>
                                                                            <div class="card border mb-g">
                                                                                <div class="card-body">
                                                                                    <div class="col-md-12 mb-3">
                                                                                        <div class="form-group">
                                                                                            <label class="form-label" for="hasilScore">Hasil</label>
                                                                                            <input type="text" id="hasilScore" name="hasilScore" class="form-control money" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 mb-3">
                                                                                        <div class="form-group">
                                                                                            <label class="form-label" for="totalMax">Total Plafond akhir  yang direkomendasikan (Max)</label>
                                                                                            <input type="text" id="totalMax" name="totalMax" class="form-control money" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 mb-3" style="display: none;">
                                                                                        <div class="form-group">
                                                                                            <label class="form-label" for="noteScore">Rekomendasi</label>
                                                                                            <input type="text" id="noteScore" name="noteScore" class="form-control money" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="card border mb-g" style="display: none;">
                                                                                <div class="card-body">
                                                                                    <div class="col-md-12 mb-3">
                                                                                        <div class="form-group">
                                                                                            <label class="form-label" for="logic">Keys Data</label>
                                                                                            <textarea class="form-control" name="logic" id="logic" rows="5" readonly></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card border mb-g" style="display: none;">
                                                                                <table id="dt-score" class="table table-bordered table-hover table-striped w-100">
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                                            {{-- <button class="btn btn-primary ml-auto btnReset" onclick="return isReset(3);">Reset</button> --}}
                                                                            {{-- <button class="btn btn-primary ml-3 btn-finish" id="btnSave3" type="submit" style="display: none;">Submit</button> --}}
                                                                            <button class="btn btn-primary" onclick="return isReset(3);" >Reset</button>
                                                                            <button type="button" class="btn btn-danger" id="btncreate" data-toggle="modal" data-target="#createApp">Create Appication</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{--disi di sini--}}
{{--                                                        </div>--}}

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning resetsearch">
                                                            Reset
                                                        </button>
                                                        <button id="close" type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
{{--                                                        <button type="submit" class="btn btn-primary">Submit</button>--}}
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
     <!-- Modal center Large no backdrop -->
     <div class="modal fade modal-backdrop-transparent" id="createApp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        Are you sure create this data?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" onclick="createApp()" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('public/assets/js/datagrid/datatables/datatables.bundle.js') }}"></script>
    <script src="{{asset('public/assets/js/formplugins/inputmask/inputmask.bundle.js') }}"></script>
    <script src="{{asset('public/assets/js/formplugins/select2/select2.bundle.js')}}"></script>
    <script src="{{asset('assets_custom/js/uang.js') }}"></script>
    <script src="{{asset('assets_custom/js/accounting.js') }}"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/logic.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initScoreCard.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initEligibility.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initScoringDebitur.js"></script>

    {{--<script>--}}
    {{--$('#js-expand-btn').click(function(e){--}}
    {{--e.preventDefault();--}}

    {{--});--}}
    {{--</script>--}}
    <script type="text/javascript">
        $(".money").change(function () {
            console.log(this.value);
            result = accounting.formatMoney(this.value,{
                precision : 2,
                thousand : ".",
                decimal  : ",",
            });
            $("#"+this.id).val(result);

        });


        $('#application').select2({
            dropdownParent: $('#pilih'),
            placeholder: "-- Select application --",
            allowClear: true
        });
        $('#branchKode').select2({
            placeholder: "-- Select Branch --",
            allowClear: true
        });

        $('#filter1').select({
            dropdownParent: $('#pilih'),
            placeholder: "-- Select  --",
            allowClear: true
        });

        $('#typeApplication').select2({
            placeholder: "-- Select type application --",
            allowClear: true
        });

        $('#personGender').select2({
            dropdownParent: $('#pilih'),
            placeholder: "-- Select Gender --",
            allowClear: true
        });


        function selectDebtor(id) {
            event.preventDefault();
            console.log(id);
            var query = "";
            fetch_customer_data();

            function fetch_customer_data(query = '') {
                query = id;
                $.ajax({
                    url: "",
                    method: 'GET',
                    data: {query: query},
                    dataType: 'json',
                    headers: {
                        'Authorization': $('#authorization').val()
                    },
                    success: function (data) {
                        
                        $("#formAdd").trigger("reset");
                        
                        $('#js-contacts').html(data.table_data);
                        // document.getElementById("js-scoreCard").style.display = "none";
                        document.getElementById("js-scoreCard").style.display = "none";
                        document.getElementById("btnSave1").style.display = "block";
                        $('#step').val(1);
                        

                        
                        // $('tbody').html(data.table_data);
                        // $('#total_records').text(data.total_data);
                        // $('tbody').html(data.table_data);
                        // $('#total_records').text(data.total_data);
                    }
                })
            }
        }




    </script>
    <script>
        function validatePart(isMessage,id){
            var idDiv = id.toString() ;
            var isvalid =  true;
            if(idDiv === "1" || idDiv === "2" || idDiv === "4"){
                if(idDiv === "4" ){
                    idDiv ="3"
                }
                var input = $("#tab_justified-"+idDiv).find("select, textarea, input");
                
                $.each(input, function () {
                    
                    if (!this.checkValidity()) {
                        isvalid = false;
                        console.log("ini namanya",this.name)
                    }
                });
                if(isMessage && !isvalid){
                    toastr.info('make sure the data sent is complete', 'Info Tab '+idDiv);
                }
            }

            return isvalid;
        }
        $(document).on("click",".one-data",function(e) {
            var linkHref = this.getAttribute("href");
            var idLink = linkHref.substring(linkHref.lastIndexOf("/")+1);
            for (var i = 0; i < localStorage.length; i++) {
                // console.log(localStorage.getItem(localStorage.key(i)));
                var keyLocal= localStorage.key(i);
                var idStorage = keyLocal.substring(0,keyLocal.indexOf("-"));
                if(idStorage === idLink){
                    localStorage.removeItem(keyLocal);
                }
            }

        });

        $(document).ready(function () {

            // $('.btnNext').click(function () {
            //     stepScroing();
            // });

            $('.btnPrev').click(function () {
                // if ($('.active').prev('.nav-link').length) {
                //     $('.active').removeClass('active')
                //         .prev('.nav-link')
                //         .addClass('active');
                // }
                if ($('.tab-pane.fade.show').prev(".tab-pane").length) {
                    $('.tab-pane.fade.show').removeClass('active show')
                        .prev(".tab-pane")
                        .addClass('active show');


                }
                var countPrev =  $('#step').val();
                $('#step').val(parseInt(countPrev)-1);
            });


            fetch_customer_data();

            function fetch_customer_data(query = '', debPersonal = 0, debCompany = 0, filter = 0) {
                // var debPersonal = 0;
                // var debCompany = 0;
                // var filter =0 ;
                if (document.getElementById('filter-name').checked) {
                    filter = document.getElementById('filter-name').value;
                } else if (document.getElementById('filter-id').checked) {
                    filter = document.getElementById('filter-id').value;
                }

                if (document.getElementById('typeDebtor1').checked) {
                    debPersonal = 1;

                }
                if (document.getElementById('typeDebtor2').checked) {
                    debCompany = 2;
                }

                if(query.length>3) {
                    $.ajax({
                        url: "",
                        method: 'GET',
                        data: {query: query, debPersonal: debPersonal, debCompany: debCompany, filter: filter},
                        dataType: 'json',
                        headers: {
                            'Authorization': $('#authorization').val()
                        },
                        success: function (data) {
                            $('#js-contacts').html(data.table_data);
                            $(".nav-link").removeClass('active');
                            $('.tab-pane.fade.show').removeClass('active show');
                            $('#tab_justified-1').addClass('active show');
                            $("#tab1").addClass('active');
                            document.getElementById("btnSave1").style.display = "none";
                            document.getElementById("js-eligibility").style.display = "none";
                            document.getElementById("js-scoreCard").style.display = "none";
                            // $('tbody').html(data.table_data);
                            // $('#total_records').text(data.total_data);
                        }
                    })
                }
            }

            $(document).on('keyup', '#js-filter-contacts', function () {
                var query = $(this).val();
                fetch_customer_data(query);
            });
        });


    </script>

    <script type="application/javascript">

        function isEligibility() {
            var formAdd = document.forms.formAdd;
            var resultEl = false;
            var isRequire = validatePart(true,2);
            if(isRequire){
                resultEl = eligibility(formAdd, "formEligibility");
                if (resultEl) {
                    document.getElementById("btnSave2").style.display = "block";
                    document.getElementById("btnEligibility").style.display = "none";

                }else{
                    document.getElementById("btnSave2").style.display = "none";
                    document.getElementById("btnEligibility").style.display = "none";
                }
                $('#step').val(3);
            }
        }
        function isScoreDt() {
            var formAdd = document.forms.formAdd;
            var resultSC = false;
            var isRequire = validatePart(true,4);
            if(isRequire) {
                resultSC =   scoreDt(formAdd, "scoreDt",false);
                if (resultSC) {
                    document.getElementById("btnSave3").style.display = "block";
                    // document.getElementById("btnScore").style.display = "none";

                } else {
                    document.getElementById("btnSave3").style.display = "none";
                    document.getElementById("btnScore").style.display = "none";
                }
                $('#step').val(5);
            }
        }
        function isReset(idstep) {

            document.getElementById("btnScore").style.display = "block";
            document.getElementById("btnEligibility").style.display = "block";
            $(".nav-link").removeClass('active');
            $('.tab-pane.fade.show').removeClass('active show');
            $('#tab_justified-'+idstep).addClass('active show');
            $('#tab_justified-'+idstep).find('input:text').val('');
            $("#tab"+idstep).addClass('active');
            // $("#formAdd")[0].reset();
            if(idstep === 3){
                idstep = idstep+1;
            }
            $('#step').val(idstep);

        }
        function isValidate() {
            console.log("last1");
            var formAdd = document.forms.formAdd;
            var stepForm = new FormData(formAdd);
            console.log(stepForm.get("step"));
            var step = parseInt(stepForm.get("step"))-1;
            var isRequire = validatePart(false,step);
            console.log("",isRequire);
            if(isRequire) {
                console.log("last");
                if (stepForm.get("step") === "2") {
                    var today = new Date();
                    var dob = new Date($("#tanggalPendirian").val());
                    var age = today.getFullYear() - dob.getFullYear(); //This is the update
                    $('#US').val(age);
                    $(".nav-link").removeClass('active');
                    $("#tab2").addClass('active');
                    document.getElementById("js-eligibility").style.display = "block";
                    return false
                } else if (stepForm.get("step") === "3") {
                    document.getElementById("js-scoreCard").style.display = "block";
                    return false;
                } else if (stepForm.get("step") === "4") {
                    $(".nav-link").removeClass('active');
                    $("#tab3").addClass('active');
                    return false
                } else if (stepForm.get("step") === "5") {
                    if (stepForm.get("type_application") == null || stepForm.get("id_debtor") == null || stepForm.get("selectApp") == null || stepForm.get("branch") == null || $("#noteScore") === "Reject" || $("textarea#logic").val() === "" || $("textarea#logicElig").val() === "") {
                        toastr.info('make sure the data sent is complete', 'Info data input');
                        return false
                    } 
                    else {
                        if (confirm(' Are you sure create this data?')) {
                            return true;
                        }
                        else{
                            return false;
                        }

                    }
                } else {
                    return false
                }
            }
            else{
                return false
            }
        }
        $(document).ready(function () {


        });
    </script>
    <script>
        $('#application').select2({
            dropdownParent: $('#pilih'),
            placeholder: "-- Select Province --",
            allowClear: true
        });

       

        $(document).ready(function () {
            const columns = [
                {
                    title: "Application No",
                    data: "noAplikasi",
                    searchable: true
                },
                {
                    title: "Debtor Name",
                    data: "nama",
                    searchable: true
                },
                {
                    title: "Branch",
                    data: "namaCabang",
                    searchable: true,
                },
                {
                    title: "Application Status",
                    data: "statusAplikasi",
                    hide: true,
                    searchable: true,
                    render: function (data, type, full) {
                        var url = window.CONFIG.APP_URL + "/application/editData/" + full.id;
                        if(full.statusAplikasi === 'REJECT') return "<a href='" + url + "' class='btn btn-danger btn-xs one-data'>" + full.statusAplikasi + "</a>";
                        if(full.statusAplikasi === 'FINISH') return "<a href='" + url + "' class='btn btn-success btn-xs one-data'>" + full.statusAplikasi + "</a>";
                        return "<a href='" + url + "' class='btn btn-primary btn-xs one-data'>" + full.statusAplikasi + "</a>";
                    }
                }
            ]


           
            // Setup - add a text input to each footer cell
            $('#dt-basic-example thead tr').clone(true).appendTo('#dt-basic-example thead');
            $('#dt-basic-example thead tr:eq(1) th').each(function(i)
            {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

                $('input', this).on('keyup change', function()
                {
                    if (table.column(i).search() !== this.value)
                    {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });

            var table = $('#dt-basic-example').DataTable(
            {
                //responsive: true,
                orderCellsTop: true,
                fixedHeader: true,
            });

            

            // table = $("#dt-basic-example").DataTable({
            //     "sDom": "" +
            //         "t" +
            //         "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            //     "sPaginationType": "full_numbers",
            //     orderCellsTop: true,
            //     fixedHeader: true,
            //     columns,
            //     initComplete: function () {
            //         $("div#table-app_filter")
            //             .prepend($("<button/>").addClass("btn btn-primary pull-right add-new-users").text("Add New Users"));
            //     },
            //     serverSide: true,
            //     "ajax": {
            //         "url": window.CONFIG.APP_API_URL_LOAN+"/api/v1/aplikasi/"+window.CONFIG.APP_SEGMENT_URL+"/tablesView?status=DRAFT&status=REJECT&status=FINISH",
            //         {{--"url": "{{route("application.tablesApp")}}",--}}
            //         "type": "POST",
            //         headers: {
            //             'Authorization': window.CONFIG.authToken
            //         },
            //         contentType: 'application/json',
            //         data: function (d) {
            //             let {columns} = d;
            //             columns = columns.map(f => {
            //                 // if (f.data === "statusAplikasi") {
            //                 //     f.search = {
            //                 //         value: "DRAFT|REJECT",
            //                 //         regex: true
            //                 //     };
            //                 // }
            //                 return f;
            //             });
            //             d.columns = columns;
            //             return JSON.stringify(d);
            //         },
            //         // success: function (data) {
            //         //
            //         //  console.log(data);
            //         // },
            //         error: function (e) {
            //             console.log('Error:', e);
            //         }
            //     }
            // });
            // $('#dt-basic-example thead tr').clone(true).appendTo('#dt-basic-example thead');
            // $('#dt-basic-example thead tr:eq(1) th').each(function (i) {
            //     var title = $(this).text();
            //     $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

            //     $('input', this).on('keyup change', function () {
            //         if (table.column(i).search() !== this.value) {
            //             table
            //                 .column(i)
            //                 .search(this.value)
            //                 .draw();
            //         }
            //     });
            // });

            // Setup - add a text input to each footer cell


        });

    </script>
@endsection
