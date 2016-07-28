<?
$subject_val = "Re: [OMPI devel] hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 14 23:52:42 2014" -->
<!-- isoreceived="20140915035242" -->
<!-- sent="Sun, 14 Sep 2014 20:51:47 -0700" -->
<!-- isosent="20140915035147" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc error" -->
<!-- id="BCB09F2C-0F48-449A-9904-1BA464F53901_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADGp0BSGQuG4dyGNCnPiJ2hSEpAxYT=zwJsRRrUpVSb3z7Tx5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-14 23:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15826.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Previous message:</strong> <a href="15824.php">Alina Sklarevich: "[OMPI devel] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="15824.php">Alina Sklarevich: "[OMPI devel] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15827.php">Alina Sklarevich: "Re: [OMPI devel] hwloc error"</a>
<li><strong>Reply:</strong> <a href="15827.php">Alina Sklarevich: "Re: [OMPI devel] hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding --hetero-nodes to your mpirun cmd line
<br>
<p>On Sep 14, 2014, at 8:25 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am using ompi-v1.8 and have come across the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Local host:        vegas17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Application name:  trivial/test_get__trivial/c_hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0,16&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Location:          odls_default_module.c:551
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This happens when running a simple trivial test with the following command line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1 &#133;/trivial/test_get__trivial/c_hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What seems to eliminate this error is changing the binding policy from core to none (--bind-to none).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only nodes which are issuing this error are always the nodes which have GPUs in them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running the same command line on other non-GPU nodes, there is no error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m using Slurm to allocate the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Has anyone seen this issue or knows what&#146;s wrong here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alina.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15824.php">http://www.open-mpi.org/community/lists/devel/2014/09/15824.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15826.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Previous message:</strong> <a href="15824.php">Alina Sklarevich: "[OMPI devel] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="15824.php">Alina Sklarevich: "[OMPI devel] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15827.php">Alina Sklarevich: "Re: [OMPI devel] hwloc error"</a>
<li><strong>Reply:</strong> <a href="15827.php">Alina Sklarevich: "Re: [OMPI devel] hwloc error"</a>
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
