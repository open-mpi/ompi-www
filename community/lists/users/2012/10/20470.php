<?
$subject_val = "Re: [OMPI users] debugs for jobs not starting";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 12:06:10 2012" -->
<!-- isoreceived="20121011160610" -->
<!-- sent="Thu, 11 Oct 2012 12:06:05 -0400" -->
<!-- isosent="20121011160605" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugs for jobs not starting" -->
<!-- id="CABOsP2MLcum0wdbaCE19ysa0vk2_BfuUt=1GCCQi30qARsSRgw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABOsP2OvMyJu1NTCrid6y8moKpSx6zGomWjPCED8oGSe2UfegQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-10-11 12:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20469.php">Michael Di Domenico: "[OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20469.php">Michael Di Domenico: "[OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Reply:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
too add a little more detail, it looks like xhpl is not actually
<br>
starting on all nodes when i kick off the mpirun
<br>
<p>each time i cancel and restart the job, the nodes that do not start
<br>
change, so i can't call it a bad node
<br>
<p>if i disable infiniband with --mca btl self,sm,tcp on occasion i can
<br>
get xhpl to actually run, but it's not consistent
<br>
<p>i'm going to check my ethernet network and make sure there's no
<br>
problems there (could this be an OOB error with mpirun?), on the nodes
<br>
that fail to start xhpl, i do see the orte process, but nothing in the
<br>
logs about why it failed to launch xhpl
<br>
<p><p><p>On Thu, Oct 11, 2012 at 11:49 AM, Michael Di Domenico
<br>
&lt;mdidomenico4_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm trying to diagnose an MPI job (in this case xhpl), that fails to
</span><br>
<span class="quotelev1">&gt; start when the rank count gets fairly high into the thousands.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My symptom is the jobs fires up via slurm, and I can see all the xhpl
</span><br>
<span class="quotelev1">&gt; processes on the nodes, but it never kicks over to the next process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, what debugs should I turn on to tell me what the
</span><br>
<span class="quotelev1">&gt; system might be waiting on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've checked a bunch of things, but I'm probably overlooking something
</span><br>
<span class="quotelev1">&gt; trivial (which is par for me).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the Openmpi 1.6.1, Slurm 2.4.2 on CentOS 6.3, with Infiniband/PSM
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20469.php">Michael Di Domenico: "[OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20469.php">Michael Di Domenico: "[OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Reply:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
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
