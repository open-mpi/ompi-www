<?
$subject_val = "Re: [OMPI users] Xgrid performance (it choose tcp when it should choose sm)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 17:06:04 2009" -->
<!-- isoreceived="20090313210604" -->
<!-- sent="Fri, 13 Mar 2009 15:05:56 -0600" -->
<!-- isosent="20090313210556" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid performance (it choose tcp when it should choose sm)" -->
<!-- id="7DCB2A0E-186A-4369-BEC5-788E5AF2D284_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ebd2bd0b0903130547h1bf25de3k8b86f38662eb23d3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Xgrid performance (it choose tcp when it should choose sm)<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 17:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8434.php">ben rodriguez: "[OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>In reply to:</strong> <a href="8422.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Xgrid performance (it choose tcp when it should choose sm)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2009, at 6:47 AM, Ricardo Fern&#225;ndez-Perea wrote:
<br>
<p><span class="quotelev1">&gt; In the same machine the same job takes a lot more time while using
</span><br>
<span class="quotelev1">&gt; XGrid than while using any other method even all the orted run in the
</span><br>
<span class="quotelev1">&gt; same node when using Xgrid it use tcp instead of sm is that expected
</span><br>
<span class="quotelev1">&gt; or do I have a problem.
</span><br>
<p><p>This is unfortunately a known issue.  Because XGrid doesn't give any  
<br>
way of knowing where to launch until the processes are already  
<br>
started, and doesn't handle wire-up, I had to fake a couple of things  
<br>
when I initially wrote the code.  In particular, our run-time really  
<br>
wanted to know if two processes were on the same node *before* the  
<br>
launch (so that it would know if they could share a control daemon).   
<br>
That part is still a problem, although possibly solvable with changes  
<br>
in the run-time since I wrote that code.
<br>
<p>If the world was perfect, I'd launch only the executables and skip the  
<br>
daemons.  The problem with that model is that xgrid's stdio forwarding  
<br>
is a little different than what most users expect.  It is (or was)  
<br>
nearly impossible to get &quot;real time&quot; stdio output from the processes  
<br>
without handling it all ourselves, which requires the previously  
<br>
mentioned, slightly evil, daemons.
<br>
<p>All this leads up to the short answer to your question - it's expected  
<br>
that two processes on the same node with xgrid will use tcp instead of  
<br>
shared memory for communication.  This could probably be fixed with  
<br>
some extra coding, but unfortunately I'm totally swamped on another  
<br>
project (and trying to finish my thesis), so it's unlikely I'll be  
<br>
able to look at it for a while.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8434.php">ben rodriguez: "[OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>In reply to:</strong> <a href="8422.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Xgrid performance (it choose tcp when it should choose sm)"</a>
<!-- nextthread="start" -->
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
