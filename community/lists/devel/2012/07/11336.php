<?
$subject_val = "Re: [OMPI devel] The hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 28 13:24:46 2012" -->
<!-- isoreceived="20120728172446" -->
<!-- sent="Sat, 28 Jul 2012 10:24:39 -0700" -->
<!-- isosent="20120728172439" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The hostfile option" -->
<!-- id="AFB3A022-8207-4F9E-922C-E2770D5DB48E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45442A50-F85B-40DE-8237-2C6039732B7E_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-28 13:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="11334.php">George Bosilca: "[OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Reply:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been awhile, but I vaguely remember the discussion. IIRC, the rationale was that the default hostfile was equivalent to an RM allocation and should be treated the same. So hostfile and -host become filters in that case.
<br>
<p>FWIW, I believe the discussion was split on that question. I added a &quot;none&quot; option to the default hostfile MCA param so it would be ignored in the case where (a) the sys admin has given a default hostfile, but (b) someone wants to use hosts outside of it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: &lt;none&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of the default hostfile (relative or absolute path, &quot;none&quot; to ignore environmental or default MCA param setting)
<br>
<p>That said, I can see a use-case argument for behaving somewhat differently. We've even had cases where users have gotten an allocation from an RM, but want to add hosts that are external to the cluster to the job.
<br>
<p>It would be rather trivial to modify the logic:
<br>
<p>1. read the default hostfile or RM allocation for our baseline
<br>
<p>2. remove any hosts on that list that are *not* in the given hostfile
<br>
<p>3. add any hosts that are in the given hostfile, but weren't in the default hostfile
<br>
<p>And subsequently do the same for -host. I think that would retain the spirit of the discussion, but provide more flexibility and provide a tad more &quot;expected&quot; behavior.
<br>
<p>I don't have an iron in this fire as I don't use hostfiles, so I'm happy to implement whatever the community would like to see.
<br>
Ralph
<br>
<p>On Jul 27, 2012, at 6:30 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I'm somewhat puzzled by the behavior of the -hostfile in Open MPI. Based on the FAQ it is supposed to provide a list of resources to be used by the launcher (in my case ssh) to start the processes. Make sense so far.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if the configuration file contain a value for orte_default_hostfile, then the behavior of the hostfile option change drastically, and the option become a filter (the machines must be on the original list or a cryptic error message is displayed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Overall, we have a well defined [mostly] consistent behavior for parameters in Open MPI. We have an order of precedence of sources of MCA parameters, clearly defined which make understanding where a value comes straightforward. I'm absolutely certain there was a group discussion about this unique &quot;eccentricity&quot; regarding the hostfile option, but I fail to remember what was the reason we decided to go this way. Can I have a quick refresh please?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; george.
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
<li><strong>Next message:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="11334.php">George Bosilca: "[OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Reply:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
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
