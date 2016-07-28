<?
$subject_val = "Re: [OMPI users] OpenIB problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 16:16:45 2007" -->
<!-- isoreceived="20071121211645" -->
<!-- sent="Wed, 21 Nov 2007 16:08:50 -0500" -->
<!-- isosent="20071121210850" -->
<!-- name="Brian Dobbins" -->
<!-- email="brian.dobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problems" -->
<!-- id="47449E62.4030402_at_yale.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4744979A.6050201_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problems<br>
<strong>From:</strong> Brian Dobbins (<em>brian.dobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 16:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4510.php">yh sun: "[OMPI users] Is anyone researching PGAPack"</a>
<li><strong>Previous message:</strong> <a href="4508.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4521.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andrew, Brock, and everyone else,
<br>
<p>Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; If this is what I think it is, try using this MCA parameter:
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_ib_timeout 20
</span><br>
<span class="quotelev1">&gt;   
</span><br>
&nbsp;&nbsp;Just FYI, in addition to the above, I retried using the gigabit links 
<br>
('--mca btl tcp,self', right?) and that failed too, so at least in /my/ 
<br>
case, it isn't a problem related to the IB fabrics.  I'm recompiling 
<br>
OpenMPI-1.2.4 with PGI-6.2-5 right now, and recompiling CCSM with this 
<br>
will take an hour or two, but I'll send a status update after that.  I'm 
<br>
98% certain that that configuration has worked before on a 32-bit Xeon 
<br>
with gigabit links, so while there are still lots of variables, it 
<br>
should help me narrow things down.
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale University HPC
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4510.php">yh sun: "[OMPI users] Is anyone researching PGAPack"</a>
<li><strong>Previous message:</strong> <a href="4508.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4506.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4521.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
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
