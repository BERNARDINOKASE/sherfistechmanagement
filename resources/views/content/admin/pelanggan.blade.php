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
                <h5 class="mb-0">Daftar Pelanggan</h5>
              </div>
                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah </a>
             </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="align-middle text-center">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NO HP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">1</td>
                      <td>
                           <h6 class="mb-0 text-sm">Awi FInit</h6>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">082134567654</p>
                      </td>      
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Bileno</span>
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
                    <tr>
                      <td class="align-middle text-center">2</td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Bernard Kase</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">082265347891</p>
                      </td>                     
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Oebufu</span>
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
                    <tr>
                      <td class="align-middle text-center">3</td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Richard Pong</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">082313490786</p>
                      </td>                     
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Penfui</span>
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
                    <tr>
                      <td class="align-middle text-center">4</td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Sofiando Ngefak</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">082456890672</p>
                      </td>                     
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Batuplat</span>
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
                    <tr>
                      <td class="align-middle text-center">5</td>
                      <td>                        
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Yohanes Mauk</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">08253617802</p>
                      </td>                     
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Liliba</span>
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
                    <tr>
                      <td class="align-middle text-center">6</td>
                      <td>                        
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Yoseph Manbait</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">082673489055</p>
                      </td>                      
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">STIM</span>
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
