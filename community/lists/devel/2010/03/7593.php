<?
$subject_val = "Re: [OMPI devel] Silly question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 20:24:30 2010" -->
<!-- isoreceived="20100316002430" -->
<!-- sent="Mon, 15 Mar 2010 18:24:16 -0600" -->
<!-- isosent="20100316002416" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Silly question" -->
<!-- id="02B6ED17-2F88-4E8D-9F56-A2C231712813_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AA8C0AC2-50E3-4325-8D8D-7401BF5C858D_at_caos.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Silly question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 20:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7592.php">Leonardo Fialho: "[OMPI devel] Silly question"</a>
<li><strong>In reply to:</strong> <a href="7592.php">Leonardo Fialho: "[OMPI devel] Silly question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a bug in the system that I fixed a few days ago on the developer's trunk - you might want to update.
<br>
<p>On Mar 15, 2010, at 5:56 PM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; I know that it should be uncommon but why I get an error while I try to run a &quot;parallel&quot; application with only one process?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; aopclf:ping fialho$ mpirun -np 1 ./ping
</span><br>
<span class="quotelev1">&gt; [Fialho-2.local:02834] OPAL dss:unpack: got type 32 when expecting type 9
</span><br>
<span class="quotelev1">&gt; [Fialho-2.local:02834] [[57446,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 330
</span><br>
<span class="quotelev1">&gt; [Fialho-2.local:02834] [[57446,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 444
</span><br>
<span class="quotelev1">&gt; aopclf:ping fialho$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand the error and I know the reason, but this is a limitation from Open MPI (due to modex?) or from the MPI standard?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leonardo
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
<li><strong>Next message:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7592.php">Leonardo Fialho: "[OMPI devel] Silly question"</a>
<li><strong>In reply to:</strong> <a href="7592.php">Leonardo Fialho: "[OMPI devel] Silly question"</a>
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
