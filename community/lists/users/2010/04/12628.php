<?
$subject_val = "Re: [OMPI users] Hibernating/Wakeup MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 10:55:47 2010" -->
<!-- isoreceived="20100413145547" -->
<!-- sent="Tue, 13 Apr 2010 10:55:43 -0400" -->
<!-- isosent="20100413145543" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hibernating/Wakeup MPI processes" -->
<!-- id="E388E6C2-5BDC-41BA-9B67-839E2DDC816B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="459D633D-9208-4BD9-A4B7-C27940BC121C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hibernating/Wakeup MPI processes<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-13 10:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12627.php">Durga Choudhury: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>In reply to:</strong> <a href="12626.php">Ralph Castain: "Re: [OMPI users] Hibernating/Wakeup MPI processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So what you are looking for is checkpoint/restart support, which you  
<br>
can find some details about at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
<br>
<p>Additionally, we relatively recently added the ability to checkpoint  
<br>
and 'stop' the application. This generates a usable checkpoint of the  
<br>
application then sends SIGSTOP. The processes can be continued with  
<br>
'SIGCONT', but they could also be killed (or otherwise removed from  
<br>
the system) and then later restarted from the checkpoint. Some details  
<br>
on this feature are at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-stop">http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-stop</a>
<br>
<p>-- Josh
<br>
<p>On Apr 13, 2010, at 10:28 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe that is called &quot;checkpoint/restart&quot; - see the FAQ page on  
</span><br>
<span class="quotelev1">&gt; that subject.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2010, at 7:30 AM, Hoelzlwimmer Andreas - S0810595005 wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found in the FAQ that it is possible to suspend/resume MPI jobs.  
</span><br>
<span class="quotelev2">&gt;&gt; Would it also be possible to Hibernate the jobs (free the memory,  
</span><br>
<span class="quotelev2">&gt;&gt; serialize it to the hard drive) and continue/wake them up later,  
</span><br>
<span class="quotelev2">&gt;&gt; possibly at different locations?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Andreas
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12627.php">Durga Choudhury: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>In reply to:</strong> <a href="12626.php">Ralph Castain: "Re: [OMPI users] Hibernating/Wakeup MPI processes"</a>
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
