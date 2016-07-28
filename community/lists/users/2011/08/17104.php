<?
$subject_val = "Re: [OMPI users] Related to project ideas in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 11:45:22 2011" -->
<!-- isoreceived="20110825154522" -->
<!-- sent="Thu, 25 Aug 2011 11:45:17 -0400" -->
<!-- isosent="20110825154517" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Related to project ideas in OpenMPI" -->
<!-- id="CAHXxYDg-P-uCrOcUd50m41sVysGNcKaqFn1nprXzg5=-YkfAmA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALM84Lqw5+UcFGuwm7+RFoAo_ZGDj1t4AKjF==pFqZeZOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Related to project ideas in OpenMPI<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 11:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17103.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17103.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is anything done at the kernel level portable (e.g. to Windows)? It
<br>
*can* be, in principle at least (by putting appropriate #ifdef's in
<br>
the code), but I am wondering if it is in reality.
<br>
<p>Also, in 2005 there was an attempt to implement SSI (Single System
<br>
Image) functionality to the then-current 2.6.10 kernel. The proposal
<br>
was very detailed and covered most of the bases of task creation, PID
<br>
allocation etc across a loosely tied cluster (without using fancy
<br>
hardware such as RDMA fabric). Anybody knows if it was ever
<br>
implemented? Any pointers in this direction?
<br>
<p>Thanks and regards
<br>
Durga
<br>
<p><p>On Thu, Aug 25, 2011 at 11:08 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Srinivas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's also Kernel-Level Checkpointing vs. User-Level Checkpointing -
</span><br>
<span class="quotelev1">&gt; if you can checkpoint an MPI task and restart it on a new node, then
</span><br>
<span class="quotelev1">&gt; this is also &quot;process migration&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, doing a checkpoint &amp; restart can be slower than pure
</span><br>
<span class="quotelev1">&gt; in-kernel process migration, but the advantage is that you don't need
</span><br>
<span class="quotelev1">&gt; any kernel support, and can in fact do all of it in user-space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 25, 2011 at 10:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It also depends on what part of migration interests you - are you wanting to look at the MPI part of the problem (reconnecting MPI transports, ensuring messages are not lost, etc.) or the RTE part of the problem (where to restart processes, detecting failures, etc.)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2011, at 7:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Be aware that process migration is a pretty complex issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh is probably the best one to answer your question directly, but he's out today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 24, 2011, at 5:45 AM, srinivas kundaram wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am final year grad student looking for my final year project in OpenMPI.We are group of 4 students.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wanted to know about the &quot;Process Migration&quot; process of MPI processes in OpenMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can anyone suggest me any ideas for project related to process migration in OenMPI or other topics in Systems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Srinivas Kundaram
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; srinu1034_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +91-8149399160
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17103.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17103.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17105.php">Rayson Ho: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
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
