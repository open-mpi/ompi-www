<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 17:45:05 2008" -->
<!-- isoreceived="20081211224505" -->
<!-- sent="Thu, 11 Dec 2008 17:44:58 -0500" -->
<!-- isosent="20081211224458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="44170A9F-4EC2-49B3-A7CC-68A76AF43F93_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4941947C.4020900_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock on large numbers of processors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 17:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7511.php">Marcus G. Daniels: "[OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2008, at 5:30 PM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; The more I look at this bug the more I'm convinced it is with  
</span><br>
<span class="quotelev1">&gt; openMPI and not our code.  Here is why:  Our code generates a  
</span><br>
<span class="quotelev1">&gt; communication/execution schedule.  At each timestep this schedule is  
</span><br>
<span class="quotelev1">&gt; executed and all communication and execution is performed.  Our  
</span><br>
<span class="quotelev1">&gt; problem is AMR which means the communication schedule may change  
</span><br>
<span class="quotelev1">&gt; from time to time.  In this case the schedule has not changed in  
</span><br>
<span class="quotelev1">&gt; many timesteps meaning the same communication schedule is being used  
</span><br>
<span class="quotelev1">&gt; as the last X (x being around 20 in this case) timesteps.
</span><br>
<span class="quotelev1">&gt; Our code does have a very large communication problem.  I have been  
</span><br>
<span class="quotelev1">&gt; able to reduce the hang down to 16 processors and it seems to me the  
</span><br>
<span class="quotelev1">&gt; hang occurs when he have lots of work per processor.  Meaning if I  
</span><br>
<span class="quotelev1">&gt; add more processors it may not hang but reducing processors makes it  
</span><br>
<span class="quotelev1">&gt; more likely to hang.
</span><br>
<span class="quotelev1">&gt; What is the status on the fix for this particular freelist deadlock?
</span><br>
<p><p>George is actively working on it because it is the &quot;last&quot; issue  
<br>
blocking us from releasing v1.3.  I fear that if he doesn't get it  
<br>
fixed by tonight, we'll have to push v1.3 to next year (see <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5029.php">http://www.open-mpi.org/community/lists/devel/2008/12/5029.php</a> 
<br>
&nbsp;&nbsp;and <a href="http://www.open-mpi.org/community/lists/users/2008/12/7499.php">http://www.open-mpi.org/community/lists/users/2008/12/7499.php</a>).
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
<li><strong>Next message:</strong> <a href="7511.php">Marcus G. Daniels: "[OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
