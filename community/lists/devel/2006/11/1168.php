<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 15:31:12 2006" -->
<!-- isoreceived="20061109203112" -->
<!-- sent="Thu, 09 Nov 2006 13:31:07 -0700" -->
<!-- isosent="20061109203107" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Getting process PID" -->
<!-- id="C178DE1B.5BEA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="94858835-C2DC-4046-BDCA-3DB8C5E27320_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 15:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Previous message:</strong> <a href="1167.php">Greg Watson: "[OMPI devel] Getting process PID"</a>
<li><strong>In reply to:</strong> <a href="1167.php">Greg Watson: "[OMPI devel] Getting process PID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Reply:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg
<br>
<p>All of the schema keys are listed in orte/mca/schema/schema_types.h. The key
<br>
you are looking for is the ORTE_PROC_LOCAL_PID_KEY.
<br>
<p>You will also see a ORTE_PROC_PID_KEY. This one refers to the pid assigned
<br>
by the launcher - the other refers to the pid reported by the process from
<br>
its remote node.
<br>
<p>Ralph
<br>
<p><p>On 11/9/06 11:44 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In OpenMPI 1.0, I was able to get the PID's for each process by
</span><br>
<span class="quotelev1">&gt; querying the ORTE_PROCESS_PID_KEY. This no longer seems to work in
</span><br>
<span class="quotelev1">&gt; 1.2. Can someone let me know how I can get hold of the PID's
</span><br>
<span class="quotelev1">&gt; regardless of the pls?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Previous message:</strong> <a href="1167.php">Greg Watson: "[OMPI devel] Getting process PID"</a>
<li><strong>In reply to:</strong> <a href="1167.php">Greg Watson: "[OMPI devel] Getting process PID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Reply:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
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
