<?
$subject_val = "Re: [OMPI users] libibverbs and openmpi 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 07:59:10 2008" -->
<!-- isoreceived="20080605115910" -->
<!-- sent="Thu, 5 Jun 2008 07:59:00 -0400" -->
<!-- isosent="20080605115900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libibverbs and openmpi 1.2.6" -->
<!-- id="73285E8D-242E-4059-9E92-792679DDAB18_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4847D46D.4090908_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] libibverbs and openmpi 1.2.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 07:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2008, at 7:56 AM, Samuel Sarholz wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Nothing changed between 1.2.5 and 1.2.6 with regards to depending  
</span><br>
<span class="quotelev2">&gt;&gt; on  libibverbs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok then I need to check what we did differently when installing both  
</span><br>
<span class="quotelev1">&gt; versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpicc wrapper from 1.2.6 links -libverbs.
</span><br>
<span class="quotelev1">&gt; (It shows up with mpicc -V).
</span><br>
<p>This suggests that perhaps 1.2.6 was configured with --enable-static  
<br>
or --disable-dlopen.  If either of these two options were used, OMPI  
<br>
will suck all the plugins to become part of libmpi (and friends), and  
<br>
therefore the plugins' dependencies will therefore become dependencies  
<br>
of libmpi (and friends).
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
<li><strong>Next message:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5825.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5827.php">Samuel Sarholz: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
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
