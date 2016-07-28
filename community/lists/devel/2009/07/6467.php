<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 20:15:08 2009" -->
<!-- isoreceived="20090720001508" -->
<!-- sent="Mon, 20 Jul 2009 10:14:53 +1000 (EST)" -->
<!-- isosent="20090720001453" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="115550579.846641248048893940.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2061716752.844511248048568593.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-19 20:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6468.php">Greg Watson: "Re: [OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6466.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should just be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca paffinity_base_verbose 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any value greater than 4 should turn it &quot;on&quot;
</span><br>
<p>Yup, that's what I was trying, but couldn't get any output.
<br>
<p><span class="quotelev1">&gt; Something I should have mentioned. The paffinity_base_service.c  file 
</span><br>
<span class="quotelev1">&gt; is solely used by the rank_file syntax. It has nothing to do with  
</span><br>
<span class="quotelev1">&gt; setting mpi_paffinity_alone and letting OMPI self-determine the  
</span><br>
<span class="quotelev1">&gt; process-to-core binding.
</span><br>
<p>That would explain why I'm not seeing any output from it
<br>
then, it and the solaris module are the only ones containing
<br>
any opal_output() statements in the paffinity section of MCA.
<br>
<p>I'll try scattering some opal_output()'s into the linux module
<br>
instead along the same lines as the base module.
<br>
<p><span class="quotelev1">&gt; You want to dig into the linux module code that calls down
</span><br>
<span class="quotelev1">&gt; into the plpa. The same mca param should give you messages
</span><br>
<span class="quotelev1">&gt; from the module, and -might- give you messages from inside
</span><br>
<span class="quotelev1">&gt; plpa (not sure of the latter).
</span><br>
<p>The PLPA output is not run time selectable:
<br>
<p>#if defined(PLPA_DEBUG) &amp;&amp; PLPA_DEBUG &amp;&amp; 0
<br>
<p>:-)
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6468.php">Greg Watson: "Re: [OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6466.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
