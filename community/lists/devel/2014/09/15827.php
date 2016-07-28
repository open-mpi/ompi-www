<?
$subject_val = "Re: [OMPI devel] hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 02:47:45 2014" -->
<!-- isoreceived="20140915064745" -->
<!-- sent="Mon, 15 Sep 2014 09:47:44 +0300" -->
<!-- isosent="20140915064744" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc error" -->
<!-- id="CADGp0BSN2MSHrcREtjR4CMfY=2tXhL4t6ZMAkRgCtbE29Bxo-Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BCB09F2C-0F48-449A-9904-1BA464F53901_at_open-mpi.org" -->
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
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-15 02:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15828.php">Rolf vandeVaart: "[OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Previous message:</strong> <a href="15826.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>In reply to:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
adding --hetero-nodes to the command line solved this issue.
<br>
<p>Alina.
<br>
<p>On Mon, Sep 15, 2014 at 6:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try adding --hetero-nodes to your mpirun cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2014, at 8:25 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt; This happens when running a simple trivial test with the following command
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#166;/trivial/test_get__trivial/c_hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What seems to eliminate this error is changing the binding policy from
</span><br>
<span class="quotelev1">&gt; core to none (--bind-to none).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only nodes which are issuing this error are always the nodes which
</span><br>
<span class="quotelev1">&gt; have GPUs in them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running the same command line on other non-GPU nodes, there is no
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m using Slurm to allocate the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen this issue or knows what&#226;&#128;&#153;s wrong here?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15824.php">http://www.open-mpi.org/community/lists/devel/2014/09/15824.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15825.php">http://www.open-mpi.org/community/lists/devel/2014/09/15825.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15828.php">Rolf vandeVaart: "[OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Previous message:</strong> <a href="15826.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>In reply to:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
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
