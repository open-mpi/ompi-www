<?
$subject_val = "Re: [OMPI devel] 1.8.5 release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 09:21:53 2015" -->
<!-- isoreceived="20150506132153" -->
<!-- sent="Wed, 06 May 2015 08:21:52 -0500" -->
<!-- isosent="20150506132152" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5 release" -->
<!-- id="554A1570.4000702_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55496CFB.9040407_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5 release<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-06 09:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17388.php">Lisandro Dalcin: "[OMPI devel] Warnings about malloc(0) in debug build"</a>
<li><strong>Previous message:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>In reply to:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, thanks! I will look into it.
<br>
<p>Edgar
<br>
<p>On 5/5/2015 8:23 PM, Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; On 05/05/2015 01:12 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Orion,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you provide a couple of more details? I might not be able to fix
</span><br>
<span class="quotelev2">&gt;&gt; the problem for ompio in the 1.8 series, but I would definitely like
</span><br>
<span class="quotelev2">&gt;&gt; make sure that it is not an issue in the master/1.9 series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled netcdf-4.3.3.1 and netcdf-fortran--4.4.2, using hdf-1.8.9,
</span><br>
<span class="quotelev2">&gt;&gt; parallel-tests enabled, and all tests pass (both on master and 1.8) if I
</span><br>
<span class="quotelev2">&gt;&gt; run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   make check.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are these some other tests that you are running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think a key trigger of the tests failing is that we compile everything
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector-strong
</span><br>
<span class="quotelev1">&gt; --param=ssp-buffer-size=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's a fortify check that is failing in this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/04/2015 09:34 PM, Orion Poplawski wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 05/04/2015 01:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are on a final overnight soak of the 1.8.5 release as we added
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some datatype fixes this morning. Pending overnight MTT results, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any last minute testing you wish to do, we will release tomorrow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; after the telecon.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that (at least with the Fedora builds) we've gone from a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default of romio with 1.8.3 to a default of ompio with 1.8.5. This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; breaking the netcdf-fortran tests as they crash when using ompio.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can work around the build issue by selecting romio, but this seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like a big change in a stable branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17385.php">http://www.open-mpi.org/community/lists/devel/2015/05/17385.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17388.php">Lisandro Dalcin: "[OMPI devel] Warnings about malloc(0) in debug build"</a>
<li><strong>Previous message:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>In reply to:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
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
