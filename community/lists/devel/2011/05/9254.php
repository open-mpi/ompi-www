<?
$subject_val = "Re: [OMPI devel] Paffinity Error.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 15 10:13:19 2011" -->
<!-- isoreceived="20110515141319" -->
<!-- sent="Sun, 15 May 2011 16:13:12 +0200" -->
<!-- isosent="20110515141312" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Paffinity Error." -->
<!-- id="BANLkTi=e131Lr6dDxzedZC3__5pDwUmj6g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B562970A-28BA-4AE7-8D0E-F7EAB6CC134C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Paffinity Error.<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-15 10:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9255.php">Ralph Castain: "[OMPI devel] ompi-profiler"</a>
<li><strong>Previous message:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>In reply to:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.
<br>
As you said, is unusual, but now i solved putting a piece of code in the
<br>
Mpi_rank so i can set the affinity there.
<br>
<p>Thanks Ralph.
<br>
<p>Hugo
<br>
<p>2011/5/13 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; For some reason, your system didn't build any process affinity components.
</span><br>
<span class="quotelev1">&gt; This is most unusual unless you configured the system to no-build them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2011, at 11:31 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting an error when i try to use the paffinity option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:        clus9
</span><br>
<span class="quotelev1">&gt;   Application name:  ./mm-static
</span><br>
<span class="quotelev1">&gt;   Error message:     opal_paffinity_base_slot_list_set() returned
</span><br>
<span class="quotelev1">&gt; &quot;Framework requires at least one active module, but none found&quot;
</span><br>
<span class="quotelev1">&gt;   Location:
</span><br>
<span class="quotelev1">&gt;  ../../../../../orte/mca/odls/default/odls_default_module.c:426
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm launching the app like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -v -n 8 \
</span><br>
<span class="quotelev1">&gt;  -tag-output \
</span><br>
<span class="quotelev1">&gt; --hostfile ../hostfile \
</span><br>
<span class="quotelev1">&gt; --slot-list 1:1 \
</span><br>
<span class="quotelev1">&gt; --bynode \
</span><br>
<span class="quotelev1">&gt; ./mm-static 1000 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am i doing something wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9255.php">Ralph Castain: "[OMPI devel] ompi-profiler"</a>
<li><strong>Previous message:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>In reply to:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
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
