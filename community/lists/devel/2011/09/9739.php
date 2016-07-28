<?
$subject_val = "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 05:43:13 2011" -->
<!-- isoreceived="20110901094313" -->
<!-- sent="Thu, 1 Sep 2011 03:43:05 -0600" -->
<!-- isosent="20110901094305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits" -->
<!-- id="1F5D9D01-525C-4ED5-8FD3-2CDE525E3B94_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E5F2B9C.5020309_at_oracle.com" -->
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
<strong>Date:</strong> 2011-09-01 05:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9740.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2011, at 12:52 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; On 8/31/2011 4:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps it would help if you had clearly stated your concern.
</span><br>
<span class="quotelev1">&gt; Yeah.  It would have helped had I clearly understood what was going on.  Most of all, that way I wouldn't have had to ask any questions!  :^)
</span><br>
<span class="quotelev2">&gt;&gt; From this description, I gather your concern is -not- that remote processes don't see the setting, but that the remote -orteds- don't see it.
</span><br>
<span class="quotelev1">&gt; Let's dumb this down a notch for my sake.  Let's say I want to run a job with the TCP BTL and have lots of processes.  I hit a descriptor limit and so my friend tells me to use the MCA parameter opal_set_max_sys_limits.  So, is the point that while most MCA parameters can be set on the mpirun command line *OR* in param files *OR* with environment variables, in this case the environment-variable setting should be avoided?
</span><br>
<p>It's more general than that - IF you are using an rsh-like launcher, then you need to set any MCA params INTENDED FOR ORTEDS on the cmd line or in the param files.
<br>
<p>MCA params INTENDED FOR APPS can always be in the environment. The orteds don't care about BTL params, so params for those can be in the environment. Orteds do care about set_limits, so that param cannot go in the environ IF you are using an rsh-like launcher.
<br>
<p>I know it's somewhat confusing, but that's one of the consequences of selecting an rsh-like launcher. Fortunately, most of the time the system param file can be setup to avoid having users deal with orted-level params, so this isn't an issue.
<br>
<p>I suppose a more intelligent option is available. All of the MCA params are added to the app_context's env array. The rsh launcher could be smart and (a) harvest the MCA params from that array, (b) see if the cmd line is able to handle adding them, and if so then (c) pass them along - if not, then warn the user with a helpful message about adding them to the param file.
<br>
<p>A patch would always be welcome, if this would help resolve the concern. Or you can file it as a ticket and someone might tackle it during a quiet time someday.
<br>
<p><p><span class="quotelev2">&gt;&gt; Yes, I'm aware of that issue for rsh-based launches. It stems from rsh not allowing one to extend the environment. If you place the param on the cmd line, then it gets propagated because we collect and extend the cmd line params. If you place it in the environment, then we don't - because (as we have repeatedly explained to people) we cannot pass all relevant envars on the cmd line due to length restrictions. We don't have this issue with cmd line params because (the thinking goes) it already fit on the cmd line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So for rsh-like launches, there is an unavoidable discrepancy. It's one reason why we have both system-level and personal-level MCA param files.
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
<li><strong>Next message:</strong> <a href="9740.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9738.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
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
