<?
$subject_val = "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 05:51:39 2015" -->
<!-- isoreceived="20151210105139" -->
<!-- sent="Thu, 10 Dec 2015 19:51:35 +0900" -->
<!-- isosent="20151210105135" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc" -->
<!-- id="CAAkFZ5tLQKovO46JuHtjht_0wZPZmpGG5h7e6V59BFuxMFcjEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57odiE9WMm=tk9iBx0XJNbv7d-MC+-uPePxhCnm5EbSZDxA_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-10 05:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
<li><strong>Previous message:</strong> <a href="18413.php">Ralph Castain: "[OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>In reply to:</strong> <a href="18413.php">Ralph Castain: "[OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>iirc, we are using a slightly patched version of libevent, is this correct ?
<br>
<p>I guess removing the internal versions is the way to go,
<br>
that being said, could/should we do this one step at a time ?
<br>
I mean a first step could be to update the configure default option to
<br>
configure --with-hwloc=external --with-libevent=external
<br>
(assuming external is valid, and configure will automatically fallback to
<br>
the internal
<br>
copy if there is no such external library, or the version is too old)
<br>
I guess there is still quite a bunch of systems running rhel6 like distro,
<br>
did you check if
<br>
the library they provide are ok for ompi ?
<br>
<p>my 0.02 US$
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, December 10, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Several of us (Igor, Artem, and myself) have recently been investigating
</span><br>
<span class="quotelev1">&gt; cross-library problems involving conflicts between our internal copies of
</span><br>
<span class="quotelev1">&gt; libevent and hwloc vs components in OMPI that are linked against external
</span><br>
<span class="quotelev1">&gt; copies of those libraries. It turns out that our linker friends are
</span><br>
<span class="quotelev1">&gt; generating some interesting (and troubling) cross-connections, even with
</span><br>
<span class="quotelev1">&gt; our internal renaming efforts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After digging into this a bunch, we would like to propose that OMPI remove
</span><br>
<span class="quotelev1">&gt; the internal copies of these two libraries. We originally included them
</span><br>
<span class="quotelev1">&gt; because they weren't prevalent in the upstream distributions, and we didn't
</span><br>
<span class="quotelev1">&gt; want to make users download and install additional packages to use OMPI. We
</span><br>
<span class="quotelev1">&gt; wanted them to just download OMPI, build and &quot;go&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Twelve years later, this is no longer the case. Both libevent and hwloc
</span><br>
<span class="quotelev1">&gt; are typically part of the base distribution, or at the worst easily
</span><br>
<span class="quotelev1">&gt; installed. The packagers have kept up with their versions, and so the
</span><br>
<span class="quotelev1">&gt; problem of whether or not the distributed version of the library contains
</span><br>
<span class="quotelev1">&gt; all our required functionality isn't an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So perhaps it is time for us to re-evaluate the need for including the
</span><br>
<span class="quotelev1">&gt; libevent and hwloc source code in OMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18415.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems 2.0"</a>
<li><strong>Previous message:</strong> <a href="18413.php">Ralph Castain: "[OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>In reply to:</strong> <a href="18413.php">Ralph Castain: "[OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
