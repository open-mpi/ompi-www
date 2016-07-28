<?
$subject_val = "Re: [OMPI users] debugs for jobs not starting";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 12:42:01 2012" -->
<!-- isoreceived="20121011164201" -->
<!-- sent="Thu, 11 Oct 2012 12:41:56 -0400" -->
<!-- isosent="20121011164156" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugs for jobs not starting" -->
<!-- id="CABOsP2Ose56duLvzTM_Kj8JnWcOfscRvb+vzL8_=gd1qxHHwxw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABOsP2MLcum0wdbaCE19ysa0vk2_BfuUt=1GCCQi30qARsSRgw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] debugs for jobs not starting<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 12:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20472.php">Gus Correa: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20474.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Reply:</strong> <a href="20474.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
adding some additional info
<br>
<p>did an strace on an orted process where xhpl failed to start, i did
<br>
this after the mpirun execution, so i probably missed some output, but
<br>
it keeps scrolling
<br>
<p>poll([{fd=4, events=POLLIN},{fd=7, events=POLLIN},{fd=8,
<br>
events=POLLIN},{fd=10, events=POLLIN},{fd=12, events=POLLIN},{fd=13,
<br>
events=POLLIN},{fd=14, events=POLLIN},{fd=15, events=POLLIN},{fd=16,
<br>
events=POLLIN}], 9, 1000) = 0 (Timeout)
<br>
<p>i didn't see anything useful in /proc under those file descriptors,
<br>
but perhaps i missed something i don't know to look for
<br>
<p>On Thu, Oct 11, 2012 at 12:06 PM, Michael Di Domenico
<br>
&lt;mdidomenico4_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; too add a little more detail, it looks like xhpl is not actually
</span><br>
<span class="quotelev1">&gt; starting on all nodes when i kick off the mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; each time i cancel and restart the job, the nodes that do not start
</span><br>
<span class="quotelev1">&gt; change, so i can't call it a bad node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i disable infiniband with --mca btl self,sm,tcp on occasion i can
</span><br>
<span class="quotelev1">&gt; get xhpl to actually run, but it's not consistent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm going to check my ethernet network and make sure there's no
</span><br>
<span class="quotelev1">&gt; problems there (could this be an OOB error with mpirun?), on the nodes
</span><br>
<span class="quotelev1">&gt; that fail to start xhpl, i do see the orte process, but nothing in the
</span><br>
<span class="quotelev1">&gt; logs about why it failed to launch xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 11, 2012 at 11:49 AM, Michael Di Domenico
</span><br>
<span class="quotelev1">&gt; &lt;mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to diagnose an MPI job (in this case xhpl), that fails to
</span><br>
<span class="quotelev2">&gt;&gt; start when the rank count gets fairly high into the thousands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My symptom is the jobs fires up via slurm, and I can see all the xhpl
</span><br>
<span class="quotelev2">&gt;&gt; processes on the nodes, but it never kicks over to the next process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question is, what debugs should I turn on to tell me what the
</span><br>
<span class="quotelev2">&gt;&gt; system might be waiting on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've checked a bunch of things, but I'm probably overlooking something
</span><br>
<span class="quotelev2">&gt;&gt; trivial (which is par for me).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using the Openmpi 1.6.1, Slurm 2.4.2 on CentOS 6.3, with Infiniband/PSM
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20472.php">Gus Correa: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20474.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Reply:</strong> <a href="20474.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
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
