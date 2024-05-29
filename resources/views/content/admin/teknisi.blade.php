@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <div class="d-flex flex-row justify-content-between">
                <div>
                  <h5 class="mb-0">Daftar Teknisi</h5>
                </div>
                   <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="align-middle text-center">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Teknisi</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO HP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Aksi
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">1</td>
                      <td>
                           <h6 class="mb-0 text-sm">Irwan Mauk</h6>                            
                      </td>
                      <td>
                           <h6 class="mb-0 text-sm">082234678554</h6>                            
                      </td>
                      <td class="text-center">
                          <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                            <i class="fas fa-user-edit text-secondary"></i>
                          </a>
                          <span>
                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                          </span>
                        </td>
                    </tr>
                    
                      
                  </tbody>
                </table>
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
  
  @endsection
