<?
$subject_val = "Re: [OMPI users] incorrect verbose output in bind_downwards";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 19:14:46 2014" -->
<!-- isoreceived="20140311231446" -->
<!-- sent="Wed, 12 Mar 2014 08:14:01 +0900" -->
<!-- isosent="20140311231401" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect verbose output in bind_downwards" -->
<!-- id="OF1341EB86.36AB7355-ON49257C98.007F2BFB-49257C98.007FB06D_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7DE5B6E2-DBD6-43BE-81D2-CB5EB10BC631_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20incorrect%20verbose%20output%20in%20bind_downwards"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-11 19:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23805.php">Joshua Ladd: "[OMPI users] FW:  LOCAL QP OPERATION ERROR"</a>
<li><strong>Previous message:</strong> <a href="23803.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Reply:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, sorry for late confirmation. It worked for me, thanks.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; I fear that would be a bad thing to do as it would disrupt mpirun's
</span><br>
operations. However, I did fix the problem by adding the topology as a
<br>
param to the pretty-print functions. Please see:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4356">https://svn.open-mpi.org/trac/ompi/ticket/4356</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for pointing it out
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2014, at 1:15 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, I would report one more small thing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The verbose output in bind_downwards sometimes gives incorrect
</span><br>
binding-map
<br>
<span class="quotelev2">&gt; &gt; when I use heterogeneous nodes with different topologies. I confirmed
</span><br>
that
<br>
<span class="quotelev2">&gt; &gt; this             patch             fixed            the
</span><br>
problem:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- rmaps_base_binding.c        2014-03-06 12:08:17 +0900
</span><br>
<span class="quotelev2">&gt; &gt; +++ rmaps_base_binding.try.c    2014-03-07 18:27:42 +0900
</span><br>
<span class="quotelev2">&gt; &gt; @@ -322,6 +322,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         hwloc_bitmap_list_asprintf(&amp;proc-&gt;cpu_bitmap, totalcpuset);
</span><br>
<span class="quotelev2">&gt; &gt;         if            (4            &lt;
</span><br>
opal_output_get_verbosity
<br>
<span class="quotelev2">&gt; &gt; (orte_rmaps_base_framework.framework_output)) {
</span><br>
<span class="quotelev2">&gt; &gt;             char tmp1[1024], tmp2[1024];
</span><br>
<span class="quotelev2">&gt; &gt; +            opal_hwloc_topology = node-&gt;topology;
</span><br>
<span class="quotelev2">&gt; &gt;             if   (OPAL_ERR_NOT_BOUND   ==   opal_hwloc_base_cset2str
</span><br>
(tmp1,
<br>
<span class="quotelev2">&gt; &gt; sizeof(tmp1), totalcpuset)) {
</span><br>
<span class="quotelev2">&gt; &gt;                 opal_output(orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;                             &quot;%s PROC %s ON %s IS NOT BOUND&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
Mishima
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23805.php">Joshua Ladd: "[OMPI users] FW:  LOCAL QP OPERATION ERROR"</a>
<li><strong>Previous message:</strong> <a href="23803.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23789.php">Ralph Castain: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Reply:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
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
