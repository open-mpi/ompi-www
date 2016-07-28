<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 17:39:22 2006" -->
<!-- isoreceived="20061109223922" -->
<!-- sent="Thu, 09 Nov 2006 15:39:17 -0700" -->
<!-- isosent="20061109223917" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Getting process PID" -->
<!-- id="C178FC25.5BFC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C36BE469-BAA0-447B-9550-A36D58DAD1D4_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-11-09 17:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>In reply to:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Reply:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...let me check it out - will get back to you later today.
<br>
<p>Sorry for the problem
<br>
Ralph
<br>
<p><p>On 11/9/06 3:07 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I tried ORTE_PROC_LOCAL_PID_KEY but it just returns 0 on MacOSX.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 9, 2006, at 1:31 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All of the schema keys are listed in orte/mca/schema/
</span><br>
<span class="quotelev2">&gt;&gt; schema_types.h. The key
</span><br>
<span class="quotelev2">&gt;&gt; you are looking for is the ORTE_PROC_LOCAL_PID_KEY.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You will also see a ORTE_PROC_PID_KEY. This one refers to the pid
</span><br>
<span class="quotelev2">&gt;&gt; assigned
</span><br>
<span class="quotelev2">&gt;&gt; by the launcher - the other refers to the pid reported by the
</span><br>
<span class="quotelev2">&gt;&gt; process from
</span><br>
<span class="quotelev2">&gt;&gt; its remote node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/9/06 11:44 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In OpenMPI 1.0, I was able to get the PID's for each process by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; querying the ORTE_PROCESS_PID_KEY. This no longer seems to work in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2. Can someone let me know how I can get hold of the PID's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regardless of the pls?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>In reply to:</strong> <a href="1169.php">Greg Watson: "Re: [OMPI devel] Getting process PID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>Reply:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
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
