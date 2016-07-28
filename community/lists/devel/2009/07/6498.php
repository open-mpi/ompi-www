<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 10:57:32 2009" -->
<!-- isoreceived="20090722145732" -->
<!-- sent="Wed, 22 Jul 2009 10:57:26 -0400" -->
<!-- isosent="20090722145726" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="35DDD3E5-6941-4858-A961-6371F8FFA137_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="115550579.846641248048893940.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-07-22 10:57:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6499.php">Ralph Castain: "Re: [OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>Previous message:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm the &quot;primary PLPA&quot; guy that Ralph referred to, and I was on  
<br>
vacation last week -- sorry for missing all the chatter.
<br>
<p>Based on your mails, it looks like you're out this week -- so little  
<br>
will likely occur.  I'm at the MPI Forum standards meeting next week,  
<br>
so my replies to email will be sporatic.
<br>
<p>OMPI is pretty much directly calling PLPA to set affinity for  
<br>
&quot;processors&quot; 0, 1, 2, 3 (which PLPA translates into Linux virtual  
<br>
processor IDs, and then invokes sched_setaffinity with each of those  
<br>
IDs).
<br>
<p>Note that the EFAULT errors you're seeing in the output are  
<br>
deliberate.  PLPA has to &quot;probe&quot; the kernel to see what flavor of API  
<br>
it uses.  Based on the error codes that comes back, it knows which  
<br>
flavor to use when actually invoking the syscall for  
<br>
sched_setaffinity.  So you can ignore those EFAULT's.
<br>
<p>But as to why it's getting EINVAL, that could be wonky.  We might want  
<br>
to take this to the PLPA list and have you run some small, non-MPI  
<br>
examples to ensure that PLPA is parsing your /sys tree properly, etc.
<br>
<p>Ping when you get back from vacation.
<br>
<p><p><p>On Jul 19, 2009, at 8:14 PM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should just be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -mca paffinity_base_verbose 5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any value greater than 4 should turn it &quot;on&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yup, that's what I was trying, but couldn't get any output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Something I should have mentioned. The paffinity_base_service.c   
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev2">&gt; &gt; is solely used by the rank_file syntax. It has nothing to do with
</span><br>
<span class="quotelev2">&gt; &gt; setting mpi_paffinity_alone and letting OMPI self-determine the
</span><br>
<span class="quotelev2">&gt; &gt; process-to-core binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would explain why I'm not seeing any output from it
</span><br>
<span class="quotelev1">&gt; then, it and the solaris module are the only ones containing
</span><br>
<span class="quotelev1">&gt; any opal_output() statements in the paffinity section of MCA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try scattering some opal_output()'s into the linux module
</span><br>
<span class="quotelev1">&gt; instead along the same lines as the base module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; You want to dig into the linux module code that calls down
</span><br>
<span class="quotelev2">&gt; &gt; into the plpa. The same mca param should give you messages
</span><br>
<span class="quotelev2">&gt; &gt; from the module, and -might- give you messages from inside
</span><br>
<span class="quotelev2">&gt; &gt; plpa (not sure of the latter).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PLPA output is not run time selectable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if defined(PLPA_DEBUG) &amp;&amp; PLPA_DEBUG &amp;&amp; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
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
<span class="quotelev1">&gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6499.php">Ralph Castain: "Re: [OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>Previous message:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
