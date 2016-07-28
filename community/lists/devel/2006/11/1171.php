<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 18:05:47 2006" -->
<!-- isoreceived="20061109230547" -->
<!-- sent="Thu, 09 Nov 2006 16:05:39 -0700" -->
<!-- isosent="20061109230539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Getting process PID" -->
<!-- id="C1790253.3BC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C178FC25.5BFC%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 18:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
<li><strong>Previous message:</strong> <a href="1170.php">Ralph H Castain: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>In reply to:</strong> <a href="1170.php">Ralph H Castain: "Re: [OMPI devel] Getting process PID"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've checked the code and it looks like it is putting it in LOCAL_PID_KEY.
<br>
Could you send me the code where you are accessing this info?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 11/9/06 3:39 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...let me check it out - will get back to you later today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the problem
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/9/06 3:07 PM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried ORTE_PROC_LOCAL_PID_KEY but it just returns 0 on MacOSX.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 9, 2006, at 1:31 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All of the schema keys are listed in orte/mca/schema/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schema_types.h. The key
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are looking for is the ORTE_PROC_LOCAL_PID_KEY.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You will also see a ORTE_PROC_PID_KEY. This one refers to the pid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assigned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by the launcher - the other refers to the pid reported by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its remote node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/9/06 11:44 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In OpenMPI 1.0, I was able to get the PID's for each process by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; querying the ORTE_PROCESS_PID_KEY. This no longer seems to work in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2. Can someone let me know how I can get hold of the PID's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regardless of the pls?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
<li><strong>Previous message:</strong> <a href="1170.php">Ralph H Castain: "Re: [OMPI devel] Getting process PID"</a>
<li><strong>In reply to:</strong> <a href="1170.php">Ralph H Castain: "Re: [OMPI devel] Getting process PID"</a>
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
