<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 15:17:33 2009" -->
<!-- isoreceived="20091215201733" -->
<!-- sent="Tue, 15 Dec 2009 12:17:22 -0800" -->
<!-- isosent="20091215201722" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="60FDF1DA-8472-4783-A58A-DB373783159E_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B27E9C8.5000406_at_sun.com" -->
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
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 15:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11547.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11547.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would be happy to help troubleshoot, but I am not much of a programmer to know how. The hang is reproducible, and -mca btl ^sm is about 15% faster.
<br>
<p>if you want to shoot me some instructions off list, I can give it a go. 
<br>
<p>The application that I am working with, primarily, is ABySS:  <a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
<br>
<p>Matt
<br>
<p>On Dec 15, 2009, at 11:55 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Matthew MacManes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On my system,  mpirun -np 8 -mca btl_sm_num_fifos 7 is much slower (and appeared to hang after several thousand interations) than -mca btl ^sm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; If the hang is reproducible, we should perhaps have a look.  Also, the fact that it's much slower is interesting.  Can you characterize the message pattern?  Increasing the number of FIFOs means that there are more places to look to find messages, but this should make a difference mainly only for very large on-node process counts (more than 8 I would have thought) and very latency-sensitive applications (but perhaps that's what you have).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there another better way I should be modifying fifos to get better performance?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, there have some been some promising developments on the trac-2043 front.  So, maybe 1-3 days of patience could payoff here.  But, I'm not in a position to promise anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2009, at 4:04 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Thu, 10 Dec 2009 17:57:27 -0500
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 10, 2009, at 5:53 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; How does the efficiency of loopback
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (let's say, over TCP and over IB) compare with &quot;sm&quot;?            
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Definitely not as good; that's why we have sm.   :-)   I don't have any quantification of that assertion, though (i.e., no numbers to back that up).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, as Eugene wrote earlier you can actually increase the number of fifos used by the SM and avoid the hang that way.  Unless you are really strapped for memory I think that would be the best way to go.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11547.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11547.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11549.php">Eugene Loh: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
