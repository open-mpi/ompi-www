<?
$subject_val = "Re: [OMPI devel] The hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 05:37:02 2012" -->
<!-- isoreceived="20120730093702" -->
<!-- sent="Mon, 30 Jul 2012 11:37:00 +0200" -->
<!-- isosent="20120730093700" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The hostfile option" -->
<!-- id="2C20C3C5-454D-45D9-AAF0-5F62A1670DC9_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AFB3A022-8207-4F9E-922C-E2770D5DB48E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The hostfile option<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 05:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11338.php">Iliev, Hristo: "[OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>Previous message:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>In reply to:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Reply:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that as long as there is a single home area per cluster the difference between the different approaches might seem irrelevant to most of the people.
<br>
<p>My problem is twofold. First, I have a common home area across several different development clusters. Thus I have direct access through ssh to any machine. If I create a single large machinefile, it turns out that every mpirun will spawn a daemon on every single node, even if I only run a ping-pong test. Second, while I usually run my apps on the same set of resources I need on a regular base to switch my nodes for few tests.
<br>
<p>What I was hoping to achieve is a machinefile containing the &quot;default&quot; development cluster (aka. the cluster where I'm almost alone so my deamons have minimal chances to disturb other people experiences), and then use a machinefile to sporadicly change the cluster where I run for smaller tests. Unfortunately, this doesn't work due to the filtering behavior described in my original email.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Jul 28, 2012, at 19:24 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It's been awhile, but I vaguely remember the discussion. IIRC, the rationale was that the default hostfile was equivalent to an RM allocation and should be treated the same. So hostfile and -host become filters in that case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I believe the discussion was split on that question. I added a &quot;none&quot; option to the default hostfile MCA param so it would be ignored in the case where (a) the sys admin has given a default hostfile, but (b) someone wants to use hosts outside of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          Name of the default hostfile (relative or absolute path, &quot;none&quot; to ignore environmental or default MCA param setting)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, I can see a use-case argument for behaving somewhat differently. We've even had cases where users have gotten an allocation from an RM, but want to add hosts that are external to the cluster to the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be rather trivial to modify the logic:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. read the default hostfile or RM allocation for our baseline
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. remove any hosts on that list that are *not* in the given hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. add any hosts that are in the given hostfile, but weren't in the default hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And subsequently do the same for -host. I think that would retain the spirit of the discussion, but provide more flexibility and provide a tad more &quot;expected&quot; behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have an iron in this fire as I don't use hostfiles, so I'm happy to implement whatever the community would like to see.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2012, at 6:30 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm somewhat puzzled by the behavior of the -hostfile in Open MPI. Based on the FAQ it is supposed to provide a list of resources to be used by the launcher (in my case ssh) to start the processes. Make sense so far.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, if the configuration file contain a value for orte_default_hostfile, then the behavior of the hostfile option change drastically, and the option become a filter (the machines must be on the original list or a cryptic error message is displayed).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Overall, we have a well defined [mostly] consistent behavior for parameters in Open MPI. We have an order of precedence of sources of MCA parameters, clearly defined which make understanding where a value comes straightforward. I'm absolutely certain there was a group discussion about this unique &quot;eccentricity&quot; regarding the hostfile option, but I fail to remember what was the reason we decided to go this way. Can I have a quick refresh please?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11338.php">Iliev, Hristo: "[OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>Previous message:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>In reply to:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Reply:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
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
