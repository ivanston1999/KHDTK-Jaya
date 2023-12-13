

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-chamelcase text-bold text-xl-start font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($statuses as $status)
                                <tr>
                                    <td class="ps-4">
                                        {{ $status->status }}
                                    </td>
                                    <!-- Other table data -->
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
</div>
