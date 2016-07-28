<?
$subject_val = "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 22:54:19 2014" -->
<!-- isoreceived="20140620025419" -->
<!-- sent="Thu, 19 Jun 2014 19:54:15 -0700" -->
<!-- isosent="20140620025415" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile" -->
<!-- id="9CEDD566-1EA6-4C21-9E77-C756BD00CEAF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF315716A9.5495D2B4-ON49257CED.001763D1-49257CFC.007E468D_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 22:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15031.php">Artem Polyakov: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>In reply to:</strong> <a href="15030.php">tmishima_at_[hidden]: "[OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15039.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My guess is that the coll/ml component may have problems with binding a single process across multiple cores like that - it might be that we'll have to have it check for that condition and disqualify itself. It is a particularly bad binding pattern, though, as shared memory gets completely messed up when you split that way.
<br>
<p><p>On Jun 19, 2014, at 3:57 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recently I have been seeing a hang with trunk when I specify a
</span><br>
<span class="quotelev1">&gt; particular binding by use of rankfile or &quot;-map-by slot&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This can be reproduced by the rankfile which allocates a process
</span><br>
<span class="quotelev1">&gt; beyond socket boundary. For example, on the node05 which has 2 socket
</span><br>
<span class="quotelev1">&gt; with 4 core, the rank 1 is allocated through socket 0 and 1 as shown
</span><br>
<span class="quotelev1">&gt; below. Then it hangs in the middle of communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage trial]$ cat rankfile1
</span><br>
<span class="quotelev1">&gt; rank 0=node05 slot=0-1
</span><br>
<span class="quotelev1">&gt; rank 1=node05 slot=3-4
</span><br>
<span class="quotelev1">&gt; rank 2=node05 slot=6-7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage trial]$ mpirun -rf rankfile1 -report-bindings demos/myprog
</span><br>
<span class="quotelev1">&gt; [node05.cluster:02342] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:02342] MCW rank 1 bound to socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 4[hwt 0]]: [./././B][B/././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:02342] MCW rank 2 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 3
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 3
</span><br>
<span class="quotelev1">&gt; &lt;&lt; hang here! &gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I disable coll_ml or use 1.8 series, it works, which means it
</span><br>
<span class="quotelev1">&gt; might be affected by coll_ml component, I guess. But, unfortunately,
</span><br>
<span class="quotelev1">&gt; I have no idea to fix this problem. So, please somebody could resolve
</span><br>
<span class="quotelev1">&gt; the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage trial]$ mpirun -rf rankfile1 -report-bindings -mca
</span><br>
<span class="quotelev1">&gt; coll_ml_priority 0 demos/myprog
</span><br>
<span class="quotelev1">&gt; [node05.cluster:02382] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:02382] MCW rank 1 bound to socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 4[hwt 0]]: [./././B][B/././.]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:02382] MCW rank 2 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 3
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 3
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addtition, when I use the host with 12 cores, &quot;-map-by slot&quot; causes the
</span><br>
<span class="quotelev1">&gt; same problem.
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage trial]$ mpirun -np 3 -map-by slot:pe=4 -report-bindings
</span><br>
<span class="quotelev1">&gt; demos/myprog
</span><br>
<span class="quotelev1">&gt; [manage.cluster:02557] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; cket 0[core 3[hwt 0]]: [B/B/B/B/./.][./././././.]
</span><br>
<span class="quotelev1">&gt; [manage.cluster:02557] MCW rank 1 bound to socket 0[core 4[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; cket 1[core 7[hwt 0]]: [././././B/B][B/B/./././.]
</span><br>
<span class="quotelev1">&gt; [manage.cluster:02557] MCW rank 2 bound to socket 1[core 8[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev1">&gt; ocket 1[core 11[hwt 0]]: [./././././.][././B/B/B/B]
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 3
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 3
</span><br>
<span class="quotelev1">&gt; &lt;&lt; hang here! &gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15030.php">http://www.open-mpi.org/community/lists/devel/2014/06/15030.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Previous message:</strong> <a href="15031.php">Artem Polyakov: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>In reply to:</strong> <a href="15030.php">tmishima_at_[hidden]: "[OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15033.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk hangs when I specify a particular binding by rankfile"</a>
<li><strong>Reply:</strong> <a href="15039.php">tmishima_at_[hidden]: "Re: [OMPI devel] trunk hangs when I specify a particular binding by	rankfile"</a>
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
