<x-web.layout.main>
    <form action="{{ Request::getBaseUrl() }}" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@exapme.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>

        <button class="btn btn-light border rounded">Sent</button>

    </form>
</x-web.layout.main>
