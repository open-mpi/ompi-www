<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 14:54:30 2009" -->
<!-- isoreceived="20091215195430" -->
<!-- sent="Tue, 15 Dec 2009 11:55:52 -0800" -->
<!-- isosent="20091215195552" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="4B27E9C8.5000406_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FE47EDBB-83D7-4B25-874C-AE45E6A1BDAF_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 14:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11548.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11546.php">Ralph Castain: "Re: [OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<li><strong>In reply to:</strong> <a href="11519.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11548.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11548.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthew MacManes wrote:
<br>
<p><span class="quotelev1">&gt;On my system,  mpirun -np 8 -mca btl_sm_num_fifos 7 is much slower (and appeared to hang after several thousand interations) than -mca btl ^sm
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
If the hang is reproducible, we should perhaps have a look.  Also, the 
<br>
fact that it's much slower is interesting.  Can you characterize the 
<br>
message pattern?  Increasing the number of FIFOs means that there are 
<br>
more places to look to find messages, but this should make a difference 
<br>
mainly only for very large on-node process counts (more than 8 I would 
<br>
have thought) and very latency-sensitive applications (but perhaps 
<br>
that's what you have).
<br>
<p><span class="quotelev1">&gt;Is there another better way I should be modifying fifos to get better performance?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Actually, there have some been some promising developments on the 
<br>
trac-2043 front.  So, maybe 1-3 days of patience could payoff here.  
<br>
But, I'm not in a position to promise anything.
<br>
<p><span class="quotelev1">&gt;On Dec 11, 2009, at 4:04 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Date: Thu, 10 Dec 2009 17:57:27 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt;From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Dec 10, 2009, at 5:53 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;How does the efficiency of loopback
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;(let's say, over TCP and over IB) compare with &quot;sm&quot;?   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Definitely not as good; that's why we have sm.   :-)   I don't have any quantification of that assertion, though (i.e., no numbers to back that up).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;However, as Eugene wrote earlier you can actually increase the number of fifos used by the SM and avoid the hang that way.  Unless you are really strapped for memory I think that would be the best way to go.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11548.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11546.php">Ralph Castain: "Re: [OMPI users] OpenFOAM fail to run under openmpi-1.3.3 on 2x Ubuntu 9.10 x64 Server"</a>
<li><strong>In reply to:</strong> <a href="11519.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11548.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11548.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
