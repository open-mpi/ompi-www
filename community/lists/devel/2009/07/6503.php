<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 13:22:21 2009" -->
<!-- isoreceived="20090722172221" -->
<!-- sent="Wed, 22 Jul 2009 13:22:16 -0400" -->
<!-- isosent="20090722172216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="B925CB4C-B544-40F4-B029-D8A5C3BD29A9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0907221700350.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 13:22:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6504.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6508.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6508.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2009, at 11:17 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; I'm interested in joining the effort, since we will likely have the  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; problem with SLURM's cpuset support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok.
<br>
<p><span class="quotelev2">&gt; &gt; But as to why it's getting EINVAL, that could be wonky.  We might  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev2">&gt; &gt; take this to the PLPA list and have you run some small, non-MPI  
</span><br>
<span class="quotelev1">&gt; examples to
</span><br>
<span class="quotelev2">&gt; &gt; ensure that PLPA is parsing your /sys tree properly, etc.
</span><br>
<span class="quotelev1">&gt; I don't see the /sys implication here. Can you be more precise on  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; files are read to determine placement ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Check in opal/mca/paffinity/linux/plpa/src/libplpa/ 
<br>
plpa_map.c:load_cache().
<br>
<p><span class="quotelev1">&gt; IIRC, when you are inside a cpuset, you can see all cpus (/sys  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; unmodified) but calling set_schedaffinity with a mask containing a cpu
</span><br>
<span class="quotelev1">&gt; outside the cpuset will return EINVAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, that could be the issue.
<br>
<p><span class="quotelev1">&gt; The only solution I see to solve
</span><br>
<span class="quotelev1">&gt; this would be to get the &quot;allowed&quot; cpus with sched_getaffinity,
</span><br>
<span class="quotelev1">&gt; which should be set according to the cpuset mask.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>There are two issues here:
<br>
<p>- what should OMPI do
<br>
- what should PLPA do
<br>
<p>PLPA currently does two things:
<br>
<p>1. provide a portable set/get affinity API (to isolate you from  
<br>
whatever version you have in your linux install)
<br>
2. provide topology mapping information (sockets, cores)
<br>
<p>PLPA does not currently deal with cpusets.  If we want to expand PLPA  
<br>
to somehow interact with cpusets, that should probably be brought up  
<br>
on the PLPA mailing lists (someone made this suggestion to me about a  
<br>
month or two ago and I haven't had a chance to follow up on it :-( ).
<br>
<p>OMPI (as a whole -- meaning: including the ORTE layer) does the  
<br>
following:
<br>
<p>1. decide whether to bind MPI processes or not
<br>
2. if we do bind, use the paffinity module to bind processes to  
<br>
specific processors (the linux paffinity module uses PLPA to do the  
<br>
actual binding -- PLPA is wholly embedded inside OMPI's linux  
<br>
paffinity module)
<br>
<p>And there's two layers involved here:
<br>
<p>- the main ORTE logic saying both &quot;yes, bind&quot; and making the decision  
<br>
as to which processors to bind to
<br>
- the linux paffinity component does a thin layer of translation  
<br>
between ORTE's/OMPI's requests and calling the back-end PLPA library
<br>
<p>As Ralph described, OMPI is currently fairly &quot;dumb&quot; about how it  
<br>
chooses which processors it uses -- 0 to N-1.  I think the issue here  
<br>
is to make OMPI smarter about how it chooses which processors to use.   
<br>
It could be in ORTE itself, or it could be in the linux paffinity  
<br>
translation layer (e.g., linux paffinity component could report only  
<br>
as many processors as are available in the cpuset...?  And binding  
<br>
could be relative to the cpuset...?).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6504.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6508.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6508.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6520.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
