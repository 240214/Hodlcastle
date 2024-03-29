<div class="table-responsive">
    <table id="emailTemplates-table" class="table custom-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Language</th>
                <th>Company</th>
                <th>Module</th>
                <th>Type</th>
                <th>Last Modified</th>
                <th width="140">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($templates as $template)
            @if(is_object($template))
            <tr>
                <td>{!! $template->name !!}</td>
                <td>{!! $template->subject !!}</td>
                <td><img src="/img/pmflags/{!! $template->language->code !!}.png" class="lang-flag">{!! $template->language->name !!}</td>
                <td>{!! $template->company ? $template->company->name : '' !!}</td>
                <td>{!! $template->module->name !!}</td>
                <td>{!! $template->type() !!}</td>
                <td>{!! $template->updated_at !!}</td>
                <td>
                    {!! Form::open(['route' => ['trainingNotifyTemplates.destroy', $template->id], 'method' => 'delete']) !!}
                    <div class="btn-group flex">
                        <a href="{!! route('trainingNotifyTemplates.show', [$template->id]) !!}" class='btn btn-info'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('trainingNotifyTemplates.edit', [$template->id]) !!}" class='btn btn-warning'><i class="fa fa-edit"></i></a>
                        <a href="{!! route('trainingNotifyTemplates.copy', [$template->id]) !!}" class='btn btn-success'><i class="fa fa-copy"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @else
                <tr>
                    <td><?php var_dump($template) ?></td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>