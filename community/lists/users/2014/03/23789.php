<?
$subject_val = "Re: [OMPI users] incorrect verbose output in bind_downwards";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 12:08:51 2014" -->
<!-- isoreceived="20140310160851" -->
<!-- sent="Mon, 10 Mar 2014 09:08:24 -0700" -->
<!-- isosent="20140310160824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect verbose output in bind_downwards" -->
<!-- id="7DE5B6E2-DBD6-43BE-81D2-CB5EB10BC631_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF8B4FD01E.2A5CD7CA-ON49257C97.002CAB85-49257C97.002D6A8D_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] incorrect verbose output in bind_downwards<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-10 12:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23790.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23788.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23786.php">tmishima_at_[hidden]: "[OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Reply:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fear that would be a bad thing to do as it would disrupt mpirun's operations. However, I did fix the problem by adding the topology as a param to the pretty-print functions. Please see:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4356">https://svn.open-mpi.org/trac/ompi/ticket/4356</a>
<br>
<p>Thanks for pointing it out
<br>
Ralph
<br>
<p>On Mar 10, 2014, at 1:15 AM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, I would report one more small thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The verbose output in bind_downwards sometimes gives incorrect binding-map
</span><br>
<span class="quotelev1">&gt; when I use heterogeneous nodes with different topologies. I confirmed that
</span><br>
<span class="quotelev1">&gt; this             patch             fixed            the            problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- rmaps_base_binding.c        2014-03-06 12:08:17 +0900
</span><br>
<span class="quotelev1">&gt; +++ rmaps_base_binding.try.c    2014-03-07 18:27:42 +0900
</span><br>
<span class="quotelev1">&gt; @@ -322,6 +322,7 @@
</span><br>
<span class="quotelev1">&gt;         hwloc_bitmap_list_asprintf(&amp;proc-&gt;cpu_bitmap, totalcpuset);
</span><br>
<span class="quotelev1">&gt;         if            (4            &lt;            opal_output_get_verbosity
</span><br>
<span class="quotelev1">&gt; (orte_rmaps_base_framework.framework_output)) {
</span><br>
<span class="quotelev1">&gt;             char tmp1[1024], tmp2[1024];
</span><br>
<span class="quotelev1">&gt; +            opal_hwloc_topology = node-&gt;topology;
</span><br>
<span class="quotelev1">&gt;             if   (OPAL_ERR_NOT_BOUND   ==   opal_hwloc_base_cset2str(tmp1,
</span><br>
<span class="quotelev1">&gt; sizeof(tmp1), totalcpuset)) {
</span><br>
<span class="quotelev1">&gt;                 opal_output(orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                             &quot;%s PROC %s ON %s IS NOT BOUND&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya                                                             Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23790.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23788.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23786.php">tmishima_at_[hidden]: "[OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Reply:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
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
