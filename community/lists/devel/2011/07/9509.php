<?
$subject_val = "Re: [OMPI devel] orte_odls_base_default_launch_local()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 18:19:26 2011" -->
<!-- isoreceived="20110712221926" -->
<!-- sent="Tue, 12 Jul 2011 16:19:17 -0600" -->
<!-- isosent="20110712221917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_odls_base_default_launch_local()" -->
<!-- id="425213CB-566D-4FB9-A8DD-CD1BE7CDFA7C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1CBE06.9040805_at_oracle.com" -->
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
<strong>Date:</strong> 2011-07-12 18:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9510.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>In reply to:</strong> <a href="9507.php">Eugene Loh: "[OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Reply:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, yes and no.
<br>
<p>Yes - the value definitely needs to be computed in all cases since it is used later on.
<br>
<p>No - the way it is computed is only correct for that one usage. The later usage (in the block that starts with 0 &lt; opal_sys_limits.num_procs)) needs a completely different value.
<br>
<p>The current computation only comes up with the number of procs for the specific job being launched. The latter code requires the total number of local procs that are alive - a rather different value.
<br>
<p>So v1.5 is incorrect in either case. Would you like me to create a patch to correct it, or would you like to do it (covering both cases)?
<br>
<p><p>On Jul 12, 2011, at 3:35 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The function orte_odls_base_default_launch_local() has a variable num_procs_alive that is basically initialized like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if ( oversubscribed ) {
</span><br>
<span class="quotelev1">&gt;        ...
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        num_procs_alive = ...;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, if the &quot;oversubscribed&quot; test passes, the variable is not initialized.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Strictly speaking, this is true only in v1.5.  In the trunk, the variable is set to 0 when it is declared, but I'm not sure that's very helpful.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm inclined to move the num_procs_alive computation ahead of the &quot;if&quot; block so that this computation is always performed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sanity check?
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
<li><strong>Next message:</strong> <a href="9510.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>In reply to:</strong> <a href="9507.php">Eugene Loh: "[OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Reply:</strong> <a href="9512.php">Eugene Loh: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
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
