@extends('layouts.header')
@section('content')
    <div class=""id="app">
        <h1 class="mt-5 mb-5 text-center">素材製作表單</h1>
        <form class="was-validated" method="POST" action="{{url('/addOrder')}}">
                {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="applicant">申請人員</label>
                <input type="text" class="form-control is-valid" name="applicant" placeholder="申請人員"required>
                <div class="invalid-feedback">請輸入申請人員</div>
              </div>
              <div class="form-group col-md-6">
                <label for="project">廣告專案</label>
                <input type="text" class="form-control is-valid" name="project" placeholder="廣告專案"required>
                <div class="invalid-feedback">請輸入廣告專案</div>
              </div>
            </div>
            <div class="form-group">
              <label for="adForm">廣告形式</label>
              <select name="adForm" class="form-control custom-select" required>
                    <option value="">請選擇素材</option>
                    <option value="漂浮多商品">漂浮多商品</option>
                    <option value="客製化素材">客製化素材</option>
                  </select>
                  <div class="invalid-feedback">請選擇廣告形式</div>
            </div>
            <div class="form-group">
              <label for="Template">公版/非公版</label>
              <select name="template" class="form-control custom-select"required>
                    <option value="">請選擇類型</option>
                    <option value="公版">公版</option>
                    <option value="非公版">非公版</option>
                  </select>
                  <div class="invalid-feedback">請選擇類型</div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="description">客製化說明</label>
                <textarea class="form-control is-invalid" name="description" placeholder="請輸入內容" required></textarea>
              </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-2">
            <label for="number">數量</label>
            <input type="text" class="form-control text-center" style="max-width:80px;" name="number" placeholder="數量"required>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">送出</button>
          </form>
          
    </div>

@endsection