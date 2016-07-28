<?
$subject_val = "Re: [OMPI users] incorrect verbose output in bind_downwards";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 20:50:07 2014" -->
<!-- isoreceived="20140312005007" -->
<!-- sent="Tue, 11 Mar 2014 17:49:31 -0700" -->
<!-- isosent="20140312004931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect verbose output in bind_downwards" -->
<!-- id="FDBBE081-8226-40FF-9A77-5DBEC784878F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF4DE38802.CF4ACE7C-ON49257C99.0002364D-49257C99.0002BD8A_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2014-03-11 20:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>In reply to:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch - thanks
<br>
Ralph
<br>
<p>On Mar 11, 2014, at 5:29 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, sorry. I missed a problem in the hwloc_base_util.c file.
</span><br>
<span class="quotelev1">&gt; The &quot;static int build_map&quot; still depends on the opal_hwloc_topology.
</span><br>
<span class="quotelev1">&gt; (Please see attached patch file)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (See attached file: patch.hwloc_base_util)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, sorry for late confirmation. It worked for me, thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I fear that would be a bad thing to do as it would disrupt mpirun's
</span><br>
<span class="quotelev2">&gt;&gt; operations. However, I did fix the problem by adding the topology as a
</span><br>
<span class="quotelev2">&gt;&gt; param to the pretty-print functions. Please see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4356">https://svn.open-mpi.org/trac/ompi/ticket/4356</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for pointing it out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 10, 2014, at 1:15 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph, I would report one more small thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The verbose output in bind_downwards sometimes gives incorrect
</span><br>
<span class="quotelev2">&gt;&gt; binding-map
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when I use heterogeneous nodes with different topologies. I confirmed
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this             patch             fixed            the
</span><br>
<span class="quotelev2">&gt;&gt; problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- rmaps_base_binding.c        2014-03-06 12:08:17 +0900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ rmaps_base_binding.try.c    2014-03-07 18:27:42 +0900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -322,6 +322,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        hwloc_bitmap_list_asprintf(&amp;proc-&gt;cpu_bitmap, totalcpuset);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        if            (4            &lt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_output_get_verbosity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (orte_rmaps_base_framework.framework_output)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            char tmp1[1024], tmp2[1024];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            opal_hwloc_topology = node-&gt;topology;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if   (OPAL_ERR_NOT_BOUND   ==   opal_hwloc_base_cset2str
</span><br>
<span class="quotelev2">&gt;&gt; (tmp1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sizeof(tmp1), totalcpuset)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                opal_output
</span><br>
<span class="quotelev1">&gt; (orte_rmaps_base_framework.framework_output,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                            &quot;%s PROC %s ON %s IS NOT BOUND&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev2">&gt;&gt; Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &lt;patch.hwloc_base_util&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>In reply to:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
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
