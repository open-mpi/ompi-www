<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding	by	rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 19:25:13 2014" -->
<!-- isoreceived="20140620232513" -->
<!-- sent="Sat, 21 Jun 2014 08:24:09 +0900" -->
<!-- isosent="20140620232409" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding	by	rankfile" -->
<!-- id="OFA7F0EC7E.7D0941D0-ON49257CFD.008021F2-49257CFD.0080AC71_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20A4023C-36B7-49EC-86E4-4E25C667E556_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs when I specify a particular binding	by	rankfile<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20trunk%20hangs%20when%20I%20specify%20a%20particular%20binding	by	rankfile"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-20 19:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15042.php">Paul Hargrove: "[OMPI devel] Is leave-pinned FAQ entry up-todate?"</a>
<li><strong>Previous message:</strong> <a href="15040.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>In reply to:</strong> <a href="15040.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph. I'll check it on next Monday.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Should be fixed with r32058
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 20, 2014, at 4:13 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; By the way, something is wrong with your latest rmaps_rank_file.c.
</span><br>
<span class="quotelev2">&gt; &gt; I've got the error below. I'm tring to find the problem. But, you
</span><br>
<span class="quotelev2">&gt; &gt; could find it more quickly...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage trial]$ cat rankfile
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=node05 slot=0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=node05 slot=3-4
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=node05 slot=6-7
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage trial]$ mpirun -np 3 -rf rankfile -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt; demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; Error, invalid syntax in the rankfile (rankfile)
</span><br>
<span class="quotelev2">&gt; &gt; syntax must be the fallowing
</span><br>
<span class="quotelev2">&gt; &gt; rank i=host_i slot=string
</span><br>
<span class="quotelev2">&gt; &gt; Examples of proper syntax include:
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1=host1 slot=1:0,1
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0=host2 slot=0:*
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2=host4 slot=1-2
</span><br>
<span class="quotelev2">&gt; &gt;    rank 3=host3 slot=0:1;1:0-2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; [manage.cluster:24456] [[20979,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
file
<br>
<span class="quotelev2">&gt; &gt; rmaps_rank_file.c at line 483
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:24456] [[20979,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
file
<br>
<span class="quotelev2">&gt; &gt; rmaps_rank_file.c at line 149
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:24456] [[20979,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
file
<br>
<span class="quotelev2">&gt; &gt; base/rmaps_base_map_job.c at line 287
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My guess is that the coll/ml component may have problems with binding
</span><br>
a
<br>
<span class="quotelev2">&gt; &gt; single process across multiple cores like that - it might be that we'll
</span><br>
<span class="quotelev2">&gt; &gt; have to have it check for that condition and disqualify
</span><br>
<span class="quotelev3">&gt; &gt;&gt; itself. It is a particularly bad binding pattern, though, as shared
</span><br>
<span class="quotelev2">&gt; &gt; memory gets completely messed up when you split that way.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 19, 2014, at 3:57 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Recently I have been seeing a hang with trunk when I specify a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; particular binding by use of rankfile or &quot;-map-by slot&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This can be reproduced by the rankfile which allocates a process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; beyond socket boundary. For example, on the node05 which has 2 socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with 4 core, the rank 1 is allocated through socket 0 and 1 as shown
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; below. Then it hangs in the middle of communication.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage trial]$ cat rankfile1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rank 0=node05 slot=0-1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rank 1=node05 slot=3-4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rank 2=node05 slot=6-7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage trial]$ mpirun -rf rankfile1 -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt; demos/myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:02342] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:02342] MCW rank 1 bound to socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 4[hwt 0]]: [./././B][B/././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:02342] MCW rank 2 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;&lt; hang here! &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If I disable coll_ml or use 1.8 series, it works, which means it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; might be affected by coll_ml component, I guess. But, unfortunately,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have no idea to fix this problem. So, please somebody could resolve
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage trial]$ mpirun -rf rankfile1 -report-bindings -mca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; coll_ml_priority 0 demos/myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:02382] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:02382] MCW rank 1 bound to socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 4[hwt 0]]: [./././B][B/././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:02382] MCW rank 2 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 0 of 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In addtition, when I use the host with 12 cores, &quot;-map-by slot&quot;
</span><br>
causes
<br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; same problem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage trial]$ mpirun -np 3 -map-by slot:pe=4
</span><br>
-report-bindings
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; demos/myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [manage.cluster:02557] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 0[core 3[hwt 0]]: [B/B/B/B/./.][./././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [manage.cluster:02557] MCW rank 1 bound to socket 0[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 1[core 7[hwt 0]]: [././././B/B][B/B/./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [manage.cluster:02557] MCW rank 2 bound to socket 1[core 8[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ocket 1[core 11[hwt 0]]: [./././././.][././B/B/B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;&lt; hang here! &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15030.php">http://www.open-mpi.org/community/lists/devel/2014/06/15030.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15032.php">http://www.open-mpi.org/community/lists/devel/2014/06/15032.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/06/15039.php">http://www.open-mpi.org/community/lists/devel/2014/06/15039.php</a>
<br>
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
<a href="http://www.open-mpi.org/community/lists/devel/2014/06/15040.php">http://www.open-mpi.org/community/lists/devel/2014/06/15040.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15042.php">Paul Hargrove: "[OMPI devel] Is leave-pinned FAQ entry up-todate?"</a>
<li><strong>Previous message:</strong> <a href="15040.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<li><strong>In reply to:</strong> <a href="15040.php">Ralph Castain: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
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
