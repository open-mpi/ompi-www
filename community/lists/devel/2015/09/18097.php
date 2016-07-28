<?
$subject_val = "Re: [OMPI devel] pmix warnings on cray with HEAD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 04:53:47 2015" -->
<!-- isoreceived="20150922085347" -->
<!-- sent="Tue, 22 Sep 2015 10:53:44 +0200" -->
<!-- isosent="20150922085344" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pmix warnings on cray with HEAD" -->
<!-- id="0F65442B-6009-4B47-8D04-5D21F7337EF9_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sHZFXx+nrWHSS3tfTMjQNkJfTw+Md6e57VH-jCoDgYrA_at_mail.gmail.com" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-22 04:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18098.php">Howard Pritchard: "[OMPI devel] problems compiling ompi master"</a>
<li><strong>Previous message:</strong> <a href="18096.php">Gilles Gouaillardet: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>In reply to:</strong> <a href="18096.php">Gilles Gouaillardet: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>Oops ... you are right!
<br>
(Was doing this on too many machines in parallel that I forgot to clean up correctly on some of them)
<br>
<p>Sorry for the noise.
<br>
<p>Im a happy camper now!
<br>
<p>Mark
<br>
<p><span class="quotelev1">&gt; On 22 Sep 2015, at 10:29 , Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i think there is no more mca_pmix_native.so.
</span><br>
<span class="quotelev1">&gt; you can confirm that by checking the timestamps of the libs after
</span><br>
<span class="quotelev1">&gt; running make install.
</span><br>
<span class="quotelev1">&gt; just remove your install dir, and run make install again, and that
</span><br>
<span class="quotelev1">&gt; will solve your issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 22, 2015 at 5:26 PM, Mark Santcroos
</span><br>
<span class="quotelev1">&gt; &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On some Cray's I see the following warning (regardless whether I run through aprun, mpirun or orte-submit):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nid01926:30931] mca_base_component_repository_open: unable to open mca_pmix_native: /work/e290/e290/marksant/openmpi/installed/HEAD/lib/openmpi/mca_pmix_native.so: undefined symbol: opal_dstore_internal (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Application seems to run fine, but wanted to report it anyway.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18095.php">http://www.open-mpi.org/community/lists/devel/2015/09/18095.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18096.php">http://www.open-mpi.org/community/lists/devel/2015/09/18096.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18098.php">Howard Pritchard: "[OMPI devel] problems compiling ompi master"</a>
<li><strong>Previous message:</strong> <a href="18096.php">Gilles Gouaillardet: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
<li><strong>In reply to:</strong> <a href="18096.php">Gilles Gouaillardet: "Re: [OMPI devel] pmix warnings on cray with HEAD"</a>
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
