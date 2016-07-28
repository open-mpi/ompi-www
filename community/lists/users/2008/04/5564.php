<?
$subject_val = "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 09:54:15 2008" -->
<!-- isoreceived="20080429135415" -->
<!-- sent="Tue, 29 Apr 2008 08:54:10 -0500" -->
<!-- isosent="20080429135410" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="5D7E8469-23D0-4289-9959-9994B290B867_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4816B85B.8030208_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 09:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Previous message:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2008, at 12:55 AM, Sharon Brunett wrote:
<br>
<p><span class="quotelev1">&gt; I'm finding that using ompi-checkpoint on an application which is  
</span><br>
<span class="quotelev1">&gt; very cpu bound takes a very very long time. For example, trying to  
</span><br>
<span class="quotelev1">&gt; checkpoint a 4 or 8 way Pallas MPI Benchmark application can take  
</span><br>
<span class="quotelev1">&gt; more than an hour. The problem is not where I'm dumping checkpoints  
</span><br>
<span class="quotelev1">&gt; (I've tried local and an nfs mount with plenty of space, and cpu  
</span><br>
<span class="quotelev1">&gt; intensive apps checkpoint quickly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using BLCR_VERSION=0.6.5 and openmpi-1.3a1r18241.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this condition common and if so, are there possibly mca paramters  
</span><br>
<span class="quotelev1">&gt; which could help?
</span><br>
<p>It depends on how you configured Open MPI with checkpoint/restart.  
<br>
There are two modes of operation: No threads, and with a checkpoint  
<br>
thread. They are described a bit more in the Checkpoint/Restart Fault  
<br>
Tolerance User's Guide on the wiki:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>By default we compile without the checkpoint thread. The restriction  
<br>
he is that all processes must be in the MPI library in order to make  
<br>
progress on the global checkpoint. For CPU intensive applications this  
<br>
may cause quite a delay in the time to start, and subsequently finish,  
<br>
a checkpoint. I'm guessing that this is what you are seeing.
<br>
<p>If you configure with the checkpoint thread (add '--enable-mpi-threads  
<br>
--enable-ft-thread' to ./configure) then Open MPI will create a thread  
<br>
that runs with each application process. This thread is fairly light  
<br>
weight and will make sure that a checkpoint progresses even when the  
<br>
process is not in the Open MPI library.
<br>
<p>Try enabling the checkpoint thread and see if that helps improve the  
<br>
checkpoint time.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sharon
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
<li><strong>Next message:</strong> <a href="5565.php">George Bosilca: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Previous message:</strong> <a href="5563.php">Leonardo Fialho: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
