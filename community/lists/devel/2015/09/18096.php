<?
$subject_val = "Re: [OMPI devel] pmix warnings on cray with HEAD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 04:29:55 2015" -->
<!-- isoreceived="20150922082955" -->
<!-- sent="Tue, 22 Sep 2015 17:29:54 +0900" -->
<!-- isosent="20150922082954" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pmix warnings on cray with HEAD" -->
<!-- id="CAAkFZ5sHZFXx+nrWHSS3tfTMjQNkJfTw+Md6e57VH-jCoDgYrA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9C75B7EB-12DB-43C8-B336-DD21D5ED87A5_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pmix warnings on cray with HEAD<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-22 04:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>Previous message:</strong> <a href="18095.php">Mark Santcroos: "[OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>In reply to:</strong> <a href="18095.php">Mark Santcroos: "[OMPI devel] pmix warnings on cray with HEAD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>Reply:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark,
<br>
<p>i think there is no more mca_pmix_native.so.
<br>
you can confirm that by checking the timestamps of the libs after
<br>
running make install.
<br>
just remove your install dir, and run make install again, and that
<br>
will solve your issue.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Tue, Sep 22, 2015 at 5:26 PM, Mark Santcroos
<br>
&lt;mark.santcroos_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On some Cray's I see the following warning (regardless whether I run through aprun, mpirun or orte-submit):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nid01926:30931] mca_base_component_repository_open: unable to open mca_pmix_native: /work/e290/e290/marksant/openmpi/installed/HEAD/lib/openmpi/mca_pmix_native.so: undefined symbol: opal_dstore_internal (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Application seems to run fine, but wanted to report it anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18095.php">http://www.open-mpi.org/community/lists/devel/2015/09/18095.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>Previous message:</strong> <a href="18095.php">Mark Santcroos: "[OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>In reply to:</strong> <a href="18095.php">Mark Santcroos: "[OMPI devel] pmix warnings on cray with HEAD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>Reply:</strong> <a href="18097.php">Mark Santcroos: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
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
