<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 00:11:18 2009" -->
<!-- isoreceived="20090725041118" -->
<!-- sent="Fri, 24 Jul 2009 22:11:04 -0600" -->
<!-- isosent="20090725041104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="5D43D1AA-C971-41AC-8262-F84FD9EABA0C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1731374888.165071248443842303.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-25 00:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6524.php">Sebastian Rinke: "[OMPI devel] ob1 question"</a>
<li><strong>In reply to:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps a telecon (myself, Jeff S, and you) would be best at this  
<br>
stage. I confess I'm now confused too - what you describe is precisely  
<br>
what we already do.
<br>
<p>Let me know when you are available and we'll try to work out a time -  
<br>
might as well do that off list so we don't bang everyone's inbox.
<br>
<p><p>On Jul 24, 2009, at 7:57 AM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ummm....I'll let you guys work this out on PLPA. However, just to
</span><br>
<span class="quotelev2">&gt;&gt; clarify, OMPI currently binds to cores, not logical cpus. It is the
</span><br>
<span class="quotelev2">&gt;&gt; PLPA that is &quot;dumb&quot; and provides the plumbing to do what OMPI tells
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahh, if that's the case then this isn't something that PLPA
</span><br>
<span class="quotelev1">&gt; needs to be involved in then!  I'm getting confused here,
</span><br>
<span class="quotelev1">&gt; haven't had a coffee since Monday, must be the reason. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What we really want is for the usual execution of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec /path/to/my/code $arguments
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to launch via the PBS TM API, work out what cores are
</span><br>
<span class="quotelev1">&gt; available to it on the nodes assigned to it and then
</span><br>
<span class="quotelev1">&gt; bind appropriately to them.  Easy, see.. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt; The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt; P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6524.php">Sebastian Rinke: "[OMPI devel] ob1 question"</a>
<li><strong>In reply to:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
