<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 20:14:18 2009" -->
<!-- isoreceived="20090715001418" -->
<!-- sent="Tue, 14 Jul 2009 20:14:12 -0400" -->
<!-- isosent="20090715001412" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="842CE8F7-E61A-46D6-B329-FA66881E1591_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="25E9AC01-884C-46CC-BDDD-F1C6542EF2CF_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 to 1 oversubscription<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 20:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="9945.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jody,
<br>
<p>Just to make sure, you did set processor affinity during your test  
<br>
right?
<br>
<p>On Jul 13, 2009, at 9:28 PM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Robert,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got inspired by your question to run a few more tests.  They are  
</span><br>
<span class="quotelev1">&gt; crude, and I don't have actual cpu timing information because of a  
</span><br>
<span class="quotelev1">&gt; library mismatch.  However:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setup:
</span><br>
<span class="quotelev1">&gt; Xserve, 2x2.26 GHz Quad-core Intel Xeon
</span><br>
<span class="quotelev1">&gt; 6.0 Gb memory 1067 MHz DDR3
</span><br>
<span class="quotelev1">&gt; Mac OS X 10.5.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nodes are connected with a dedicated gigabit ethernet switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running the MITgcm, a nonhydrostatic global circulation model.   
</span><br>
<span class="quotelev1">&gt; The grid size is modest: 10x150x1600, so bear that in mind.   
</span><br>
<span class="quotelev1">&gt; Message passing is on the dimension that is 150x10, and typically  
</span><br>
<span class="quotelev1">&gt; is 3 grid cells in either direction.  I'm not sure how many  
</span><br>
<span class="quotelev1">&gt; variables are passed, but I would guess on the order of 24.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I turned off all the I/O I knew of to reduce disk latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 node:  8 processes:              54 minutes
</span><br>
<span class="quotelev1">&gt; 1 node: 16 processes:             40 minutes (oversubscribed)
</span><br>
<span class="quotelev1">&gt; 2 nodes, 16 processes:            29 minutes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, oversubscribing was faster (in this case), but it didn't double  
</span><br>
<span class="quotelev1">&gt; the speed.  Certainly spreading the load to another node was much  
</span><br>
<span class="quotelev1">&gt; faster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't had a chance to implement Warner's suggestion of turning  
</span><br>
<span class="quotelev1">&gt; hyperthreading off to see what affect that has on the speed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,  Jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="9945.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9960.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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
