<?
$subject_val = "Re: [OMPI users] OpenMPI locking up only on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 11:40:20 2008" -->
<!-- isoreceived="20080703154020" -->
<!-- sent="Thu, 03 Jul 2008 18:40:12 +0300" -->
<!-- isosent="20080703154012" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI locking up only on IB" -->
<!-- id="486CF2DC.6020902_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5DF8EAEC-A66C-4B9D-8126-F95719B833EE_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI locking up only on IB<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 11:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6024.php">Carmen Navarrete Navarrete: "[OMPI users] MPI_Graph_create hangs"</a>
<li><strong>Previous message:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<span class="quotelev1">&gt; Ok it looks like a bigger problem.  The segfault is not related to 
</span><br>
<span class="quotelev1">&gt; OMPI because when I go and rebuild 1.2 or another version we use with 
</span><br>
<span class="quotelev1">&gt; IB all the time, it will now fail with a segfault when forcing IB.  
</span><br>
<span class="quotelev1">&gt; The old libs of the same version still work.  They of-course do not 
</span><br>
<span class="quotelev1">&gt; have the flag to turn off early completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was there an older version of OpenMPI that did not suffer from the 
</span><br>
<span class="quotelev1">&gt; early completion problem? 
</span><br>
The issue was fixed in 1.3 branch, all versions before 1.3 have this 
<br>
problem.
<br>
<span class="quotelev1">&gt; We have many installed and for a quick test latest and greatest would 
</span><br>
<span class="quotelev1">&gt; not be of much concern while we track down the problem on our end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are on RHEL4  using OFED provided by redhat.  The error is &quot;address 
</span><br>
<span class="quotelev1">&gt; not mapped to object&quot;
</span><br>
I think that best for you will be try to install Mellanox OFED 
<br>
distribution that already include pre-build versions on OpenMPI 1.2.6 
<br>
with Intel and Pgi compilers:
<br>
<a href="http://www.mellanox.com/products/ofed.php">http://www.mellanox.com/products/ofed.php</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 3, 2008, at 8:38 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2008, at 11:51 PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In trying to build 1.2.6 with the pgi compilers it makes an MPI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; library that works with tcp, sm.  But it segfaults on openib.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Both our intel compiler version and pgi version of 1.2.6 blow up 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like this when we force IB.  So this is a new issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have ompi 1.2.6 installed on my machines with Intel compiler 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (version 10.1) and Pgi compiler (version 7.1-5), both of them works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with IB without any problem. BTW Mellanox provides Mellanox OFED 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binary distribution that include Intel and Pgi Open MPI 1.2.6 build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can download it from here <a href="http://www.mellanox.com/products/ofed.php">http://www.mellanox.com/products/ofed.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a way to shut off early completion in 1.2.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure, just add &quot;--mca |pml_ob1_use_early_completion 0&quot; to your 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line.| ||
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that this flag was not added until v1.2.6; it has no effect in 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or the the above a known issues and i should use 1.2.7-pre  or grab 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a 1.3 snap shot?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.6 should be ok.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The upcoming v1.3 series works a little differently; there's no need 
</span><br>
<span class="quotelev2">&gt;&gt; to use this flag in the v1.3 series (i.e., this flag only exists in 
</span><br>
<span class="quotelev2">&gt;&gt; the v1.2 series starting with v1.2.6).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6024.php">Carmen Navarrete Navarrete: "[OMPI users] MPI_Graph_create hangs"</a>
<li><strong>Previous message:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
