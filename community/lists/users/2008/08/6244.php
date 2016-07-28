<?
$subject_val = "Re: [OMPI users] Segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 08:58:37 2008" -->
<!-- isoreceived="20080801125837" -->
<!-- sent="Fri, 1 Aug 2008 08:58:26 -0400" -->
<!-- isosent="20080801125826" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault: Address not mapped" -->
<!-- id="D64ED8F7-7054-43B6-B908-2FFA60C44F9D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2b1c8c4f0807300531q38bb6adbl552cf80410362639_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-01 08:58:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6245.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Previous message:</strong> <a href="6243.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="../../2008/07/6204.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6246.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2008, at 8:31 AM, James Philbin wrote:
<br>
<p><span class="quotelev1">&gt; OK, to answer my own question, I recompiled OpenMPI appending
</span><br>
<span class="quotelev1">&gt; '--with-memory-manager=none' to configure and now things seem to run
</span><br>
<span class="quotelev1">&gt; fine. I'm not sure how this might affect performance, but at least
</span><br>
<span class="quotelev1">&gt; it's working now.
</span><br>
<p>If you're not using OpenFabrics networks or older Myrinet (GM)  
<br>
networks, it won't impact performance at all.  The memory manager is  
<br>
*only* used to improve the bandwidth of large messages on these  
<br>
networks.
<br>
<p><span class="quotelev1">&gt; Maybe this can be put in the FAQ?
</span><br>
<p>Yes, it probably should be...  I'll add it to the doc tickets for  
<br>
v1.3.  Thanks for the heads up.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6245.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Previous message:</strong> <a href="6243.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="../../2008/07/6204.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6246.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
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
