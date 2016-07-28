<?
$subject_val = "Re: [OMPI devel] Paffinity Error.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 13 09:02:59 2011" -->
<!-- isoreceived="20110513130259" -->
<!-- sent="Fri, 13 May 2011 07:02:51 -0600" -->
<!-- isosent="20110513130251" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Paffinity Error." -->
<!-- id="B562970A-28BA-4AE7-8D0E-F7EAB6CC134C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimGMqEgqHNsWrvRNOUB1kQA-AYTbw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-13 09:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9254.php">Hugo Meyer: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Previous message:</strong> <a href="9252.php">Hugo Meyer: "[OMPI devel] Paffinity Error."</a>
<li><strong>In reply to:</strong> <a href="9252.php">Hugo Meyer: "[OMPI devel] Paffinity Error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9254.php">Hugo Meyer: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Reply:</strong> <a href="9254.php">Hugo Meyer: "Re: [OMPI devel] Paffinity Error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For some reason, your system didn't build any process affinity components. This is most unusual unless you configured the system to no-build them.
<br>
<p><p>On May 12, 2011, at 11:31 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello.
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
<span class="quotelev1">&gt;   Error message:     opal_paffinity_base_slot_list_set() returned &quot;Framework requires at least one active module, but none found&quot;
</span><br>
<span class="quotelev1">&gt;   Location:          ../../../../../orte/mca/odls/default/odls_default_module.c:426
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9254.php">Hugo Meyer: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Previous message:</strong> <a href="9252.php">Hugo Meyer: "[OMPI devel] Paffinity Error."</a>
<li><strong>In reply to:</strong> <a href="9252.php">Hugo Meyer: "[OMPI devel] Paffinity Error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9254.php">Hugo Meyer: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Reply:</strong> <a href="9254.php">Hugo Meyer: "Re: [OMPI devel] Paffinity Error."</a>
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
