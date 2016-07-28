<?
$subject_val = "Re: [OMPI devel] orte_odls_base_default_launch_local()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 10:48:11 2011" -->
<!-- isoreceived="20110714144811" -->
<!-- sent="Thu, 14 Jul 2011 08:48:03 -0600" -->
<!-- isosent="20110714144803" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_odls_base_default_launch_local()" -->
<!-- id="8B10F3FC-9C88-4203-BBEC-CF42E302B0CA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1CEA61.4040503_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte_odls_base_default_launch_local()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 10:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9529.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay - got tied up. This looks sane to me and should work.
<br>
<p>FWIW: I haven't seen any problem with comm_spawn_multiple. That code will only executes if the specific limit is hit, so I suspect that is an issue of scale and race conditions.
<br>
<p><p>On Jul 12, 2011, at 6:44 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the quick and helpful response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm willing to make the changes if only I were more confident I understood the issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you call the first usage of num_procs_alive seems to count &quot;local procs alive or about to be launched&quot;.  It tests on &quot;child-&gt;alive || opal_dss.compare(&amp;job, &amp;(child-&gt;name-&gt;jobid), ORTE_JOBID))&quot;.  This is only in the !oversubscribed case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you call &quot;the later usage&quot; (&quot;0 &lt; opal_sys_limits.num_procs&quot; or &quot;check the system limits&quot;) seems to want only the number of alive procs (not including any that are about to be launched).  So, as I guess you were driving at, a fresh computation of num_procs_alive seems to be needed at this point, both in v1.5 and in the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is actually a third usage of num_procs_alive (&quot;available file descriptors&quot; or &quot;0 &lt; opal_sys_limits.num_files&quot;).  I think there are two problems here.  One is that the number of procs we're about to launch is not accounted for.  Secondly, and perhaps most importantly, if we &quot;wait a little time&quot; and recompute num_procs_alive, we loop over item/child. This is bad since we are already inside an item/child loop!  (This is actually the origin of my foray into this mess... MPI_Comm_spawn_multiple gets screwed up by this reuse of variable names.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm attaching an original (trunk) file, a proposed version, and the diff file.  Let me know if it looks sane.  If so, I'll try it out and put it back and then file a CMR for 1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some more below...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/12/11 18:19, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, yes and no.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes - the value definitely needs to be computed in all cases since it is used later on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No - the way it is computed is only correct for that one usage. The later usage (in the block that starts with 0&lt;  opal_sys_limits.num_procs)) needs a completely different value.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The current computation only comes up with the number of procs for the specific job being launched. The latter code requires the total number of local procs that are alive - a rather different value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first usage, to compare with num_processors, includes not only procs for the job being launched but also already-alive procs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second usage, to be compared to opal_sys_limits.num_procs, should only have alive procs since app-&gt;num_procs will be added later.  (Plus, we try to keep a running total of this number of alive procs.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The third usage, to be compared to opal_sys_limits.num_files, should also only have alive procs for the same reasons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So v1.5 is incorrect in either case. Would you like me to create a patch to correct it, or would you like to do it (covering both cases)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trunk also appears to be incorrect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2011, at 3:35 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The function orte_odls_base_default_launch_local() has a variable num_procs_alive that is basically initialized like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if ( oversubscribed ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    } else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        num_procs_alive = ...;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Specifically, if the &quot;oversubscribed&quot; test passes, the variable is not initialized.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Strictly speaking, this is true only in v1.5.  In the trunk, the variable is set to 0 when it is declared, but I'm not sure that's very helpful.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm inclined to move the num_procs_alive computation ahead of the &quot;if&quot; block so that this computation is always performed.
</span><br>
<span class="quotelev1">&gt; &lt;files.tar.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="9529.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9527.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>In reply to:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
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
