<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 17:24:32 2009" -->
<!-- isoreceived="20090414212432" -->
<!-- sent="Tue, 14 Apr 2009 14:23:59 -0700" -->
<!-- isosent="20090414212359" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E4FEEF.5040904_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49E4F7F3.7070309_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 17:23:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8925.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Okay.  Attached is a &quot;little&quot; note I wrote up illustrating memory 
</span><br>
<span class="quotelev1">&gt; profiling with Sun tools.  (It's &quot;big&quot; because I ended up including a 
</span><br>
<span class="quotelev1">&gt; few screenshots.)  The program has a bunch of one-way message traffic 
</span><br>
<span class="quotelev1">&gt; and some user-code memory allocation.  I then rerun with the receiver 
</span><br>
<span class="quotelev1">&gt; sleeping before jumping into action.  The messages back up and OMPI ends 
</span><br>
<span class="quotelev1">&gt; up allocating a bunch of memory.  The tools show you who (user or OMPI) 
</span><br>
<span class="quotelev1">&gt; is allocating how much memory and how big of a message backlog develops 
</span><br>
<span class="quotelev1">&gt; and how the sender starts stalling out (which is a good thing!).  
</span><br>
<span class="quotelev1">&gt; Anyhow, a useful exercise for me and hopefully helpful for you.
</span><br>
<p>Wow. Thanks, Eugene. I definitely have to look into the Sun HPC 
<br>
ClusterTools. It looks as though it could be very informative.
<br>
<p>What's the purpose of the 400 MB that MPI_Init has allocated?
<br>
<p>The figure of in-flight messages vs time when the receiver sleeps is 
<br>
particularly interesting. The sender appears to stop sending and block 
<br>
once there are 30'000 in-flight messages. Has Open MPI detected the 
<br>
situation of congestion and begun waiting for the receiver to catch 
<br>
up? Or is it something simpler, such as the underlying write(2) call 
<br>
to the TCP socket blocking? If it's the first case, perhaps I could 
<br>
tune this threshold to behave better for my application.
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8925.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8923.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
