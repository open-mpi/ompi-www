<?
$subject_val = "Re: [OMPI devel] orte_odls_base_default_launch_local()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 20:42:44 2011" -->
<!-- isoreceived="20110713004244" -->
<!-- sent="Tue, 12 Jul 2011 20:44:17 -0400" -->
<!-- isosent="20110713004417" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_odls_base_default_launch_local()" -->
<!-- id="4E1CEA61.4040503_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="425213CB-566D-4FB9-A8DD-CD1BE7CDFA7C_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 20:44:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>In reply to:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9528.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Reply:</strong> <a href="9528.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick and helpful response.
<br>
<p>I'm willing to make the changes if only I were more confident I 
<br>
understood the issues.
<br>
<p>What you call the first usage of num_procs_alive seems to count &quot;local 
<br>
procs alive or about to be launched&quot;.  It tests on &quot;child-&gt;alive || 
<br>
opal_dss.compare(&amp;job, &amp;(child-&gt;name-&gt;jobid), ORTE_JOBID))&quot;.  This is 
<br>
only in the !oversubscribed case.
<br>
<p>What you call &quot;the later usage&quot; (&quot;0 &lt; opal_sys_limits.num_procs&quot; or 
<br>
&quot;check the system limits&quot;) seems to want only the number of alive procs 
<br>
(not including any that are about to be launched).  So, as I guess you 
<br>
were driving at, a fresh computation of num_procs_alive seems to be 
<br>
needed at this point, both in v1.5 and in the trunk.
<br>
<p>There is actually a third usage of num_procs_alive (&quot;available file 
<br>
descriptors&quot; or &quot;0 &lt; opal_sys_limits.num_files&quot;).  I think there are two 
<br>
problems here.  One is that the number of procs we're about to launch is 
<br>
not accounted for.  Secondly, and perhaps most importantly, if we &quot;wait 
<br>
a little time&quot; and recompute num_procs_alive, we loop over item/child. 
<br>
This is bad since we are already inside an item/child loop!  (This is 
<br>
actually the origin of my foray into this mess... 
<br>
MPI_Comm_spawn_multiple gets screwed up by this reuse of variable names.)
<br>
<p>I'm attaching an original (trunk) file, a proposed version, and the diff 
<br>
file.  Let me know if it looks sane.  If so, I'll try it out and put it 
<br>
back and then file a CMR for 1.5.
<br>
<p>Some more below...
<br>
<p>On 07/12/11 18:19, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Well, yes and no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes - the value definitely needs to be computed in all cases since it is used later on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No - the way it is computed is only correct for that one usage. The later usage (in the block that starts with 0&lt;  opal_sys_limits.num_procs)) needs a completely different value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current computation only comes up with the number of procs for the specific job being launched. The latter code requires the total number of local procs that are alive - a rather different value.
</span><br>
<p>The first usage, to compare with num_processors, includes not only procs 
<br>
for the job being launched but also already-alive procs.
<br>
<p>The second usage, to be compared to opal_sys_limits.num_procs, should 
<br>
only have alive procs since app-&gt;num_procs will be added later.  (Plus, 
<br>
we try to keep a running total of this number of alive procs.)
<br>
<p>The third usage, to be compared to opal_sys_limits.num_files, should 
<br>
also only have alive procs for the same reasons.
<br>
<p><span class="quotelev1">&gt; So v1.5 is incorrect in either case. Would you like me to create a patch to correct it, or would you like to do it (covering both cases)?
</span><br>
<p>Trunk also appears to be incorrect.
<br>
<p><span class="quotelev1">&gt; On Jul 12, 2011, at 3:35 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The function orte_odls_base_default_launch_local() has a variable num_procs_alive that is basically initialized like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if ( oversubscribed ) {
</span><br>
<span class="quotelev2">&gt;&gt;         ...
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt;         num_procs_alive = ...;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, if the &quot;oversubscribed&quot; test passes, the variable is not initialized.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Strictly speaking, this is true only in v1.5.  In the trunk, the variable is set to 0 when it is declared, but I'm not sure that's very helpful.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm inclined to move the num_procs_alive computation ahead of the &quot;if&quot; block so that this computation is always performed.
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9512/files.tar.gz">files.tar.gz</a>
</ul>
<!-- attachment="files.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9513.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>In reply to:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9528.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Reply:</strong> <a href="9528.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
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
