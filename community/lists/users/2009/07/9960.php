<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 21:04:04 2009" -->
<!-- isoreceived="20090715010404" -->
<!-- sent="Tue, 14 Jul 2009 18:03:58 -0700" -->
<!-- isosent="20090715010358" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="358555ED-E429-4634-9C65-A6EE41EA9641_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="842CE8F7-E61A-46D6-B329-FA66881E1591_at_gmail.com" -->
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
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 21:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14-Jul-09, at 5:14 PM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; Jody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure, you did set processor affinity during your test  
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>I'm not sure what that means in the context of OS X.
<br>
<p>Hyperthreading was turned on.
<br>
<p>Cheers,  Jody
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 13, 2009, at 9:28 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Robert,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got inspired by your question to run a few more tests.  They are  
</span><br>
<span class="quotelev2">&gt;&gt; crude, and I don't have actual cpu timing information because of a  
</span><br>
<span class="quotelev2">&gt;&gt; library mismatch.  However:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setup:
</span><br>
<span class="quotelev2">&gt;&gt; Xserve, 2x2.26 GHz Quad-core Intel Xeon
</span><br>
<span class="quotelev2">&gt;&gt; 6.0 Gb memory 1067 MHz DDR3
</span><br>
<span class="quotelev2">&gt;&gt; Mac OS X 10.5.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nodes are connected with a dedicated gigabit ethernet switch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running the MITgcm, a nonhydrostatic global circulation model.   
</span><br>
<span class="quotelev2">&gt;&gt; The grid size is modest: 10x150x1600, so bear that in mind.   
</span><br>
<span class="quotelev2">&gt;&gt; Message passing is on the dimension that is 150x10, and typically  
</span><br>
<span class="quotelev2">&gt;&gt; is 3 grid cells in either direction.  I'm not sure how many  
</span><br>
<span class="quotelev2">&gt;&gt; variables are passed, but I would guess on the order of 24.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I turned off all the I/O I knew of to reduce disk latency.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 node:  8 processes:              54 minutes
</span><br>
<span class="quotelev2">&gt;&gt; 1 node: 16 processes:             40 minutes (oversubscribed)
</span><br>
<span class="quotelev2">&gt;&gt; 2 nodes, 16 processes:            29 minutes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, oversubscribing was faster (in this case), but it didn't double  
</span><br>
<span class="quotelev2">&gt;&gt; the speed.  Certainly spreading the load to another node was much  
</span><br>
<span class="quotelev2">&gt;&gt; faster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't had a chance to implement Warner's suggestion of turning  
</span><br>
<span class="quotelev2">&gt;&gt; hyperthreading off to see what affect that has on the speed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,  Jody
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="9961.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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
