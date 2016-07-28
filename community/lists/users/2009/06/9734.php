<?
$subject_val = "Re: [OMPI users] Problem getting OpenMPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 13:54:52 2009" -->
<!-- isoreceived="20090626175452" -->
<!-- sent="Fri, 26 Jun 2009 13:54:47 -0400" -->
<!-- isosent="20090626175447" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem getting OpenMPI to run" -->
<!-- id="4A450B67.1020105_at_ias.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A2424D0.9080006_at_att.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem getting OpenMPI to run<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 13:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>In reply to:</strong> <a href="9485.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2009, at 2:04 PM, Jeff Layton wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: executing task of job 3084 failed: execution daemon on host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;compute-2-2.local&quot; didn't accept task
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like an error message from the resource manager/scheduler
</span><br>
<span class="quotelev2">&gt;&gt; -- not from OMPI (i.e., OMPI tried to launch a process on a node and
</span><br>
<span class="quotelev2">&gt;&gt; the launch failed because something rejected it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which one are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE
</span><br>
<p>Jeff,
<br>
<p>This sounds like an SGE problem to me, too. You might have better luck
<br>
on the SGE mailing list with this one. Does SGE show any of the queue
<br>
instances in an error state? Have you tried restarting sge_execd on
<br>
compute-2-2.local?
<br>
<p>I would try sending a non-MPI program to compute-2-2.local, and see if
<br>
that gets rejected to. A simple &quot;Hello, world&quot; shell script should work.
<br>
That will help you determine whether it's a problem with SGE in general,
<br>
or with the configuration of your parallel environment (PE).
<br>
<p>You should be able to specify the host to run on with
<br>
<p>qsub -l hostname=compute-2-2.local submit.sh
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>In reply to:</strong> <a href="9485.php">Jeff Layton: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
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
