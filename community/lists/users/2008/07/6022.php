<?
$subject_val = "Re: [OMPI users] OpenMPI locking up only on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 11:21:43 2008" -->
<!-- isoreceived="20080703152143" -->
<!-- sent="Thu, 3 Jul 2008 11:20:32 -0400" -->
<!-- isosent="20080703152032" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI locking up only on IB" -->
<!-- id="5DF8EAEC-A66C-4B9D-8126-F95719B833EE_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37C7A3FD-692F-4C6A-A06D-7791E480D88A_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 11:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok it looks like a bigger problem.  The segfault is not related to  
<br>
OMPI because when I go and rebuild 1.2 or another version we use with  
<br>
IB all the time, it will now fail with a segfault when forcing IB.   
<br>
The old libs of the same version still work.  They of-course do not  
<br>
have the flag to turn off early completion.
<br>
<p>Was there an older version of OpenMPI that did not suffer from the  
<br>
early completion problem? We have many installed and for a quick test  
<br>
latest and greatest would not be of much concern while we track down  
<br>
the problem on our end.
<br>
<p>We are on RHEL4  using OFED provided by redhat.  The error is  
<br>
&quot;address not mapped to object&quot;
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jul 3, 2008, at 8:38 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 2, 2008, at 11:51 PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In trying to build 1.2.6 with the pgi compilers it makes an MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library that works with tcp, sm.  But it segfaults on openib.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both our intel compiler version and pgi version of 1.2.6 blow up  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like this when we force IB.  So this is a new issue.
</span><br>
<span class="quotelev2">&gt;&gt; I have ompi 1.2.6 installed on my machines with Intel compiler  
</span><br>
<span class="quotelev2">&gt;&gt; (version 10.1) and Pgi compiler (version 7.1-5), both of them works
</span><br>
<span class="quotelev2">&gt;&gt; with IB without any problem. BTW Mellanox provides Mellanox OFED  
</span><br>
<span class="quotelev2">&gt;&gt; binary distribution that include Intel and Pgi Open MPI 1.2.6 build.
</span><br>
<span class="quotelev2">&gt;&gt; You can download it from here <a href="http://www.mellanox.com/products/">http://www.mellanox.com/products/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; ofed.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to shut off early completion in 1.2.3?
</span><br>
<span class="quotelev2">&gt;&gt; Sure, just add &quot;--mca |pml_ob1_use_early_completion 0&quot; to your  
</span><br>
<span class="quotelev2">&gt;&gt; command line.| ||
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this flag was not added until v1.2.6; it has no effect in  
</span><br>
<span class="quotelev1">&gt; v1.2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or the the above a known issues and i should use 1.2.7-pre  or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grab a 1.3 snap shot?
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.6 should be ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The upcoming v1.3 series works a little differently; there's no  
</span><br>
<span class="quotelev1">&gt; need to use this flag in the v1.3 series (i.e., this flag only  
</span><br>
<span class="quotelev1">&gt; exists in the v1.2 series starting with v1.2.6).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
