<?
$subject_val = "[OMPI devel] hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 14 11:25:58 2014" -->
<!-- isoreceived="20140914152558" -->
<!-- sent="Sun, 14 Sep 2014 18:25:58 +0300" -->
<!-- isosent="20140914152558" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="[OMPI devel] hwloc error" -->
<!-- id="CADGp0BSGQuG4dyGNCnPiJ2hSEpAxYT=zwJsRRrUpVSb3z7Tx5g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] hwloc error<br>
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-14 11:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="15823.php">Paul Hargrove: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
<li><strong>Reply:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p><p>I am using ompi-v1.8 and have come across the following error:
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
<p>Open MPI tried to bind a new process, but something went wrong.  The
<br>
<p>process was killed without launching the target application.  Your job
<br>
<p>will now abort.
<br>
<p><p><p>&nbsp;&nbsp;Local host:        vegas17
<br>
<p>&nbsp;&nbsp;Application name:  trivial/test_get__trivial/c_hello
<br>
<p>&nbsp;&nbsp;Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0,16&quot;
<br>
<p>&nbsp;&nbsp;Location:          odls_default_module.c:551
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p><p>This happens when running a simple trivial test with the following command
<br>
line:
<br>
<p><p><p>mpirun --map-by node --bind-to core -display-map -np 2 -mca pml ob1
<br>
&#226;&#128;&#166;/trivial/test_get__trivial/c_hello
<br>
<p><p><p>What seems to eliminate this error is changing the binding policy from core
<br>
to none (--bind-to none).
<br>
<p>The only nodes which are issuing this error are always the nodes which have
<br>
GPUs in them.
<br>
<p>When running the same command line on other non-GPU nodes, there is no
<br>
error.
<br>
<p>I&#226;&#128;&#153;m using Slurm to allocate the nodes.
<br>
<p><p><p>Has anyone seen this issue or knows what&#226;&#128;&#153;s wrong here?
<br>
<p><p><p>Thanks,
<br>
<p>Alina.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="15823.php">Paul Hargrove: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
<li><strong>Reply:</strong> <a href="15825.php">Ralph Castain: "Re: [OMPI devel] hwloc error"</a>
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
