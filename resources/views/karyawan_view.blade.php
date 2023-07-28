@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    <a href="{{ route('diary') }}" class="btn btn-danger btn-sm"><i
                            class="fas fa-edit"></i> Back</a>
                </h3>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $diary->nama }}</h2>
                    <p class="blog-post-meta">{{ $diary->tanggal }}

                    <p>{{ $diary->diary }}</p>

                    {{-- <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">Another blog post</h2>
                    <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                        to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <blockquote>
                        <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                        to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Example table</h3>
                    <p>And don't forget about tables in these posts:</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Upvotes</th>
                                <th>Downvotes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alice</td>
                                <td>10</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>Bob</td>
                                <td>4</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Charlie</td>
                                <td>7</td>
                                <td>9</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Totals</td>
                                <td>21</td>
                                <td>23</td>
                            </tr>
                        </tfoot>
                    </table>

                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                        highly repetitive body text used throughout.</p>
                </article>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">New feature</h2>
                    <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                        to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                        highly repetitive body text used throughout.</p>
                </article> --}}

                    {{-- <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                </nav> --}}

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">

                </div>
            </div>
        </div>
    </div>
@endsection
