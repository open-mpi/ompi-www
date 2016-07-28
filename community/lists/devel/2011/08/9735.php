<?
$subject_val = "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 31 07:48:31 2011" -->
<!-- isoreceived="20110831114831" -->
<!-- sent="Wed, 31 Aug 2011 05:48:20 -0600" -->
<!-- isosent="20110831114820" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits" -->
<!-- id="D960F306-5DED-44B9-8A80-A4B9B71E78A1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E5DD31C.6050407_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-31 07:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9736.php">teng ma: "[OMPI devel] a performance issue of Open MPI Reduce on infiniband cluster."</a>
<li><strong>Previous message:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps it would help if you had clearly stated your concern. From this description, I gather your concern is -not- that remote processes don't see the setting, but that the remote -orteds- don't see it.
<br>
<p>Yes, I'm aware of that issue for rsh-based launches. It stems from rsh not allowing one to extend the environment. If you place the param on the cmd line, then it gets propagated because we collect and extend the cmd line params. If you place it in the environment, then we don't - because (as we have repeatedly explained to people) we cannot pass all relevant envars on the cmd line due to length restrictions. We don't have this issue with cmd line params because (the thinking goes) it already fit on the cmd line.
<br>
<p>So for rsh-like launches, there is an unavoidable discrepancy. It's one reason why we have both system-level and personal-level MCA param files.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Aug 31, 2011, at 12:22 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; On 8/30/2011 7:34 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2011, at 11:18 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe someone can help me from having to think too hard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's say I want to max my system limits.  I can say this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    % mpirun --mca opal_set_max_sys_limits 1 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cool.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meanwhile, if I do this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    % setenv OMPI_MCA_opal_set_max_sys_limits 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    % mpirun ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote processes don't see the setting.  (Local processes and ompi_info are fine.)
</span><br>
<span class="quotelev2">&gt;&gt; I looked at the 1.5 code, and mpirun is reaping all OMPI_ params from the environ and adding them to the app. So it should be getting set.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I then ran &quot;mpirun -n 1 printenv&quot; on a slurm machine, and verified that indeed that param was in the environment. Ditto when I told it to use the rsh launcher.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bug?  Naively, this looks &quot;wrong.&quot;  At least disturbing, in any case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is with v1.5.
</span><br>
<span class="quotelev1">&gt; Okay, so one answer is implicit in your reply:  you are expecting the same result I am.  So, if the behavior is not as I expect but as I describe, it's a bug candidate.  (As opposed to, &quot;The problem you're describing is how it's supposed to work;  it's no problem at all.&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, regarding &quot;mpirun -n 1 printenv&quot;, I agree that the environment variable is getting set.  Even on a remote node.  That suggests that things are fine, but it turns out they are not.  The problem is -- and I'm afraid I don't understand the details -- it's set &quot;too late.&quot;  I imagine a time line like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A)  orted starts
</span><br>
<span class="quotelev1">&gt; B)  orted calls opal_util_init_sys_limits()
</span><br>
<span class="quotelev1">&gt; C)  daemonize a child process
</span><br>
<span class="quotelev1">&gt; D)  child process execs target process
</span><br>
<span class="quotelev1">&gt; E)  target process starts up
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the environment, I don't see the variable set in B, which is the only place the variable does any good.  Like you, I do see it in E, which is interesting but doesn't help the user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your experiment was reasonable, but the problem is odd.  I suggest the following to see the problem.  Set the variable in your environment.  Then use mpirun to launch a remote process.  Then:
</span><br>
<span class="quotelev1">&gt; 1)  In the remote orted, inside opal_util_init_sys_limits(), check for the variable in your environment.
</span><br>
<span class="quotelev1">&gt; And/or:
</span><br>
<span class="quotelev1">&gt; 2)  Make the remotely launched process something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/csh
</span><br>
<span class="quotelev1">&gt; limit descriptors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and see if the descriptor limit got bumped up from what it otherwise should be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In contrast, if you set the MCA parameter on your mpirun command line, the environment variable *does* get set, even in the environment of the orted when it calls opal_util_init_sys_limits().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can poke at this more tomorrow, but I suspect with one &quot;aha!&quot; you'll figure it out a lot faster than I can.  :^(
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
<li><strong>Next message:</strong> <a href="9736.php">teng ma: "[OMPI devel] a performance issue of Open MPI Reduce on infiniband cluster."</a>
<li><strong>Previous message:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
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
