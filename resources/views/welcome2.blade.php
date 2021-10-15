@extends('layouts.layout')

@section('vendorCss')
@stop

@section('pageCss')
@stop

@section('content')
    @if(Session::has('message'))
        <input id="message" type="hidden" value="{{ Session::get('message') }}" />
    @endif

    <div class="container description">
        <p>Mauris venenatis lectus nec libero sollicitudin condimentum. Integer ultrices vehicula magna vel accumsan. Proin lobortis dolor ac urna sodales porta. Donec finibus bibendum sagittis. Morbi sed augue sem. Nullam quis eros sed sapien lobortis gravida. Quisque gravida mi ac efficitur sagittis.</p>
    </div>
    <div class="container description">
        <p>Maecenas lobortis, massa ut suscipit mattis, tortor sem volutpat justo, sit amet luctus risus urna nec augue. Vestibulum vehicula ex non mattis volutpat. Duis non tristique dolor. Aenean id massa dui. Sed tincidunt quam non erat faucibus, aliquet pulvinar nulla viverra. In hac habitasse platea dictumst. Curabitur hendrerit sagittis nunc, vel aliquam nisi tempus in. Nunc lacinia, ex non suscipit auctor, felis ligula ornare ante, congue lobortis lacus mi quis metus. Nunc est nisi, faucibus id mauris in, hendrerit lacinia mi. Integer ornare dui a convallis vehicula. Etiam interdum enim in diam pellentesque, vitae mollis eros rhoncus. In nibh justo, ultricies mattis pretium eget, lobortis quis eros. Vestibulum magna arcu, pretium at porta eget, hendrerit a purus. Praesent pulvinar ultrices felis eget viverra. Integer dictum auctor varius. Donec efficitur volutpat elementum.</p>
    </div>
    <div class="container description">
        <div class="row">
            <div class="col-sm">
                <p>Proin quis odio interdum, scelerisque enim id, lacinia quam. Ut id aliquam purus, sit amet bibendum tortor. Nulla egestas, lorem sit amet tempor dignissim, est velit bibendum odio, at lacinia augue enim nec justo. Phasellus quis bibendum urna. Donec arcu est, volutpat et tortor eu, mollis mattis lectus. Nullam malesuada maximus dolor. Etiam congue diam orci, eu molestie tortor mattis quis. Fusce aliquet lectus eu nisl finibus ultricies. Nam interdum, odio et consectetur suscipit, quam dui ullamcorper lacus, non rhoncus odio magna a mauris. Integer vel erat purus. Donec eleifend fringilla massa. Phasellus libero metus, imperdiet sed urna vitae, congue laoreet lacus. Sed quis facilisis velit. Aenean rutrum sodales dignissim. Aliquam facilisis placerat turpis, eget rhoncus lorem.</p>
            </div>
            <div class="col-sm">
                <p>Aenean vitae purus eleifend nisi elementum efficitur in ut nulla. Aliquam quis mi lorem. Nullam sagittis dolor at pretium ornare. Nullam tincidunt nisl sed velit aliquam, sed vulputate turpis sollicitudin. Integer ultrices leo in libero gravida, nec blandit justo suscipit. Vestibulum vehicula neque eros, quis semper quam vulputate sit amet. Nam diam lorem, pulvinar vel rutrum ultricies, consequat non augue.</p>
            </div>
            <div class="col-sm">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius, ligula eget tincidunt vehicula, metus sem accumsan neque, eu semper nulla erat id odio. Morbi dapibus id purus quis vulputate. Etiam ac luctus ligula. Sed a sem est. Nullam dictum ipsum neque, et pellentesque nisl congue at. Fusce vitae cursus nulla. Vestibulum varius sollicitudin neque, a dapibus erat lacinia porttitor.</p>
            </div>
        </div>
    </div>
    @stop

@section('vendorScripts')
@stop

@section('pageScripts')
@stop


