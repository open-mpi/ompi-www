<?
$subject_val = "Re: [OMPI users] ompi-restart using different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 11:52:41 2009" -->
<!-- isoreceived="20091202165241" -->
<!-- sent="Wed, 2 Dec 2009 11:52:32 -0500" -->
<!-- isosent="20091202165232" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart using different nodes" -->
<!-- id="D4C2CFB2-A917-44C8-8960-1BA4D9DB959E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B167F93.1070409_at_rqchp.qc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart using different nodes<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 11:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>In reply to:</strong> <a href="11367.php">Jonathan Ferland: "[OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Though I do not test this scenario (using hostfiles) very often, it  
<br>
used to work. The ompi-restart command takes a --hostfile (or -- 
<br>
machinefile) argument that is passed directly to the mpirun command. I  
<br>
wonder if something broke recently with this handoff. I can certainly  
<br>
checkpoint with one set of nodes/allocation and restart with another,  
<br>
but most/all of my testing occurs in a SLURM environment, so no need  
<br>
for an explicit hostfile.
<br>
<p>I'll take a look to see if I can reproduce, but probably will not be  
<br>
until next week.
<br>
<p>-- Josh
<br>
<p>On Dec 2, 2009, at 9:54 AM, Jonathan Ferland wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use BLCR checkpointing in mpi. I am currently able to  
</span><br>
<span class="quotelev1">&gt; run my application using some hostfile, checkpoint the run, and then  
</span><br>
<span class="quotelev1">&gt; restart the application using the same hostfile. The thing I would  
</span><br>
<span class="quotelev1">&gt; like to do is to restart the application with a different hostfile.  
</span><br>
<span class="quotelev1">&gt; But this leads to a segfault using 1.3.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to restart the application using a different hostfile  
</span><br>
<span class="quotelev1">&gt; (we are using pbs to create the hostfile, so each new restart might  
</span><br>
<span class="quotelev1">&gt; be on different nodes), how can we do that? If no, do you plan to  
</span><br>
<span class="quotelev1">&gt; include this in a future release?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
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
<li><strong>Next message:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11369.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages onNetBSD"</a>
<li><strong>In reply to:</strong> <a href="11367.php">Jonathan Ferland: "[OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11371.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
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
