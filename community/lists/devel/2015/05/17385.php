<?
$subject_val = "Re: [OMPI devel] 1.8.5 release";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 15:10:16 2015" -->
<!-- isoreceived="20150505191016" -->
<!-- sent="Tue, 05 May 2015 14:12:14 -0500" -->
<!-- isosent="20150505191214" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5 release" -->
<!-- id="5549160E.90807_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55482C21.3080503_at_cora.nwra.com" -->
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
<strong>Date:</strong> 2015-05-05 15:12:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Previous message:</strong> <a href="17384.php">Ralph Castain: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>In reply to:</strong> <a href="17383.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Reply:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Orion,
<br>
<p>could you provide a couple of more details? I might not be able to fix 
<br>
the problem for ompio in the 1.8 series, but I would definitely like 
<br>
make sure that it is not an issue in the master/1.9 series.
<br>
<p>I compiled netcdf-4.3.3.1 and netcdf-fortran--4.4.2, using hdf-1.8.9, 
<br>
parallel-tests enabled, and all tests pass (both on master and 1.8) if I run
<br>
<p>&nbsp;&nbsp;make check.
<br>
<p>Are these some other tests that you are running?
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 05/04/2015 09:34 PM, Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; On 05/04/2015 01:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yo folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are on a final overnight soak of the 1.8.5 release as we added 
</span><br>
<span class="quotelev2">&gt;&gt; some datatype fixes this morning. Pending overnight MTT results, and 
</span><br>
<span class="quotelev2">&gt;&gt; any last minute testing you wish to do, we will release tomorrow 
</span><br>
<span class="quotelev2">&gt;&gt; after the telecon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that (at least with the Fedora builds) we've gone from a 
</span><br>
<span class="quotelev1">&gt; default of romio with 1.8.3 to a default of ompio with 1.8.5. This is 
</span><br>
<span class="quotelev1">&gt; breaking the netcdf-fortran tests as they crash when using ompio.  I 
</span><br>
<span class="quotelev1">&gt; can work around the build issue by selecting romio, but this seems 
</span><br>
<span class="quotelev1">&gt; like a big change in a stable branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Previous message:</strong> <a href="17384.php">Ralph Castain: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>In reply to:</strong> <a href="17383.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
<li><strong>Reply:</strong> <a href="17386.php">Orion Poplawski: "Re: [OMPI devel] 1.8.5 release"</a>
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
