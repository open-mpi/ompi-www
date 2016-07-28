<?
$subject_val = "Re: [OMPI devel] 1.8.5 release";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 21:23:11 2015" -->
<!-- isoreceived="20150506012311" -->
<!-- sent="Tue, 05 May 2015 19:23:07 -0600" -->
<!-- isosent="20150506012307" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5 release" -->
<!-- id="55496CFB.9040407_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5549160E.90807_at_cs.uh.edu" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-05 21:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Previous message:</strong> <a href="17385.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>In reply to:</strong> <a href="17385.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Reply:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/05/2015 01:12 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Orion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you provide a couple of more details? I might not be able to fix
</span><br>
<span class="quotelev1">&gt; the problem for ompio in the 1.8 series, but I would definitely like
</span><br>
<span class="quotelev1">&gt; make sure that it is not an issue in the master/1.9 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled netcdf-4.3.3.1 and netcdf-fortran--4.4.2, using hdf-1.8.9,
</span><br>
<span class="quotelev1">&gt; parallel-tests enabled, and all tests pass (both on master and 1.8) if I
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   make check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these some other tests that you are running?
</span><br>
<p>I think a key trigger of the tests failing is that we compile everything 
<br>
with:
<br>
<p>-Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector-strong 
<br>
--param=ssp-buffer-size=4
<br>
<p>It's a fortify check that is failing in this case.
<br>
<p><span class="quotelev1">&gt; On 05/04/2015 09:34 PM, Orion Poplawski wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 05/04/2015 01:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are on a final overnight soak of the 1.8.5 release as we added
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some datatype fixes this morning. Pending overnight MTT results, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any last minute testing you wish to do, we will release tomorrow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after the telecon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that (at least with the Fedora builds) we've gone from a
</span><br>
<span class="quotelev2">&gt;&gt; default of romio with 1.8.3 to a default of ompio with 1.8.5. This is
</span><br>
<span class="quotelev2">&gt;&gt; breaking the netcdf-fortran tests as they crash when using ompio.  I
</span><br>
<span class="quotelev2">&gt;&gt; can work around the build issue by selecting romio, but this seems
</span><br>
<span class="quotelev2">&gt;&gt; like a big change in a stable branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17385.php">http://www.open-mpi.org/community/lists/devel/2015/05/17385.php</a>
</span><br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Previous message:</strong> <a href="17385.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>In reply to:</strong> <a href="17385.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Reply:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
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
