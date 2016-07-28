<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 07:00:46 2009" -->
<!-- isoreceived="20090724110046" -->
<!-- sent="Fri, 24 Jul 2009 05:00:29 -0600" -->
<!-- isosent="20090724110029" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="C5750280-2860-4465-A0D5-05AFDA03D95D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1298088764.164681248423520246.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-07-24 07:00:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6518.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummm....I'll let you guys work this out on PLPA. However, just to  
<br>
clarify, OMPI currently binds to cores, not logical cpus. It is the  
<br>
PLPA that is &quot;dumb&quot; and provides the plumbing to do what OMPI tells it.
<br>
<p>:-)
<br>
<p>On Jul 24, 2009, at 2:18 AM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PLPA does not currently deal with cpusets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it can get close enough if it assumes that
</span><br>
<span class="quotelev1">&gt; its initial affinity list is the subset of cores that
</span><br>
<span class="quotelev1">&gt; it can choose from when setting CPU affinity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for whether OMPI or PLPA should choose, I suspect
</span><br>
<span class="quotelev1">&gt; it's better if OMPI continues to be dumb and say &quot;bind
</span><br>
<span class="quotelev1">&gt; me to CPU n&quot; and PLPA works out what CPU 'n' works
</span><br>
<span class="quotelev1">&gt; out to be in terms of actual cores it can access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I'll take the rest of this to the PLPA list. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
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
<li><strong>Next message:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6518.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
