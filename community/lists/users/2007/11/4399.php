<?
$subject_val = "Re: [OMPI users] Code dies, no error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 11:05:30 2007" -->
<!-- isoreceived="20071105160530" -->
<!-- sent="Mon, 5 Nov 2007 17:05:18 +0100" -->
<!-- isosent="20071105160518" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Code dies, no error" -->
<!-- id="200711051705.18718.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="005501c81e0a$effc1340$0200a8c0_at_Timo" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 11:05:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI users] Code dies, no error"</a>
<li><strong>Previous message:</strong> <a href="4398.php">Neeraj Chourasia: "[OMPI users] Adding new API"</a>
<li><strong>In reply to:</strong> <a href="4397.php">Tim Reis: "[OMPI users] Code dies, no error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI users] Code dies, no error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Tim,
<br>
On Saturday 03 November 2007 12:16, Tim Reis wrote:
<br>
<span class="quotelev1">&gt; I have a code that seems to build fine with mpif90. I can submit it to a
</span><br>
<span class="quotelev1">&gt; queue using mpirun with no problems but once it has transferred from qw to
</span><br>
<span class="quotelev1">&gt; r state it dies very quickly (I say die rather than finish because this is
</span><br>
<span class="quotelev1">&gt; a large code that ran for days on an old cluster).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And when I try to look at the .e and .o files that are defined in my script
</span><br>
<span class="quotelev1">&gt; I notice they are both empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am quite puzzled by this so any advice will be most gratefully received.
</span><br>
This sounds like a general problem with the cluster, not with MPI, right?
<br>
<p>So the first step would be to run any non-MPI application, if that is working 
<br>
fine (producing output in Your PBS?-output files), then check, whether 
<br>
mpicc-compiled applications work and finally try the mpif90-compiled 
<br>
application again.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
&quot;Emails save time, not printing them saves trees!&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI users] Code dies, no error"</a>
<li><strong>Previous message:</strong> <a href="4398.php">Neeraj Chourasia: "[OMPI users] Adding new API"</a>
<li><strong>In reply to:</strong> <a href="4397.php">Tim Reis: "[OMPI users] Code dies, no error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI users] Code dies, no error"</a>
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
