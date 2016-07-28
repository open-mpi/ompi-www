<?
$subject_val = "Re: [OMPI users] Related to project ideas in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 12:06:15 2011" -->
<!-- isoreceived="20110825160615" -->
<!-- sent="Thu, 25 Aug 2011 12:06:11 -0400" -->
<!-- isosent="20110825160611" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Related to project ideas in OpenMPI" -->
<!-- id="CAHwLALN7XgW0wCHqF+WHkeSM+OfGAGx1LS0bPGHKJgOKdGPQbw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHXxYDg-P-uCrOcUd50m41sVysGNcKaqFn1nprXzg5=-YkfAmA_at_mail.gmail.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 12:06:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17106.php">worldeb_at_[hidden]: "[OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>Previous message:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17110.php">Josh Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17110.php">Josh Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't know which SSI project you are referring to... I only know the
<br>
OpenSSI project, and I was one of the first who subscribed to its
<br>
mailing list (since 2001).
<br>
<p><a href="http://openssi.org/cgi-bin/view?page=openssi.html">http://openssi.org/cgi-bin/view?page=openssi.html</a>
<br>
<p>I don't think those OpenSSI clusters are designed for tens of
<br>
thousands of nodes, and not sure if it scales well to even a thousand
<br>
nodes -- so IMO they have limited use for HPC clusters.
<br>
<p>Rayson
<br>
<p><p><p>On Thu, Aug 25, 2011 at 11:45 AM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Also, in 2005 there was an attempt to implement SSI (Single System
</span><br>
<span class="quotelev1">&gt; Image) functionality to the then-current 2.6.10 kernel. The proposal
</span><br>
<span class="quotelev1">&gt; was very detailed and covered most of the bases of task creation, PID
</span><br>
<span class="quotelev1">&gt; allocation etc across a loosely tied cluster (without using fancy
</span><br>
<span class="quotelev1">&gt; hardware such as RDMA fabric). Anybody knows if it was ever
</span><br>
<span class="quotelev1">&gt; implemented? Any pointers in this direction?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 25, 2011 at 11:08 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Srinivas,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There's also Kernel-Level Checkpointing vs. User-Level Checkpointing -
</span><br>
<span class="quotelev2">&gt;&gt; if you can checkpoint an MPI task and restart it on a new node, then
</span><br>
<span class="quotelev2">&gt;&gt; this is also &quot;process migration&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, doing a checkpoint &amp; restart can be slower than pure
</span><br>
<span class="quotelev2">&gt;&gt; in-kernel process migration, but the advantage is that you don't need
</span><br>
<span class="quotelev2">&gt;&gt; any kernel support, and can in fact do all of it in user-space.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Aug 25, 2011 at 10:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It also depends on what part of migration interests you - are you wanting to look at the MPI part of the problem (reconnecting MPI transports, ensuring messages are not lost, etc.) or the RTE part of the problem (where to restart processes, detecting failures, etc.)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 24, 2011, at 7:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Be aware that process migration is a pretty complex issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh is probably the best one to answer your question directly, but he's out today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 24, 2011, at 5:45 AM, srinivas kundaram wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am final year grad student looking for my final year project in OpenMPI.We are group of 4 students.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wanted to know about the &quot;Process Migration&quot; process of MPI processes in OpenMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can anyone suggest me any ideas for project related to process migration in OenMPI or other topics in Systems.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Srinivas Kundaram
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srinu1034_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +91-8149399160
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17106.php">worldeb_at_[hidden]: "[OMPI users] ConnectX with InfiniHost IB HCAs"</a>
<li><strong>Previous message:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17110.php">Josh Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17110.php">Josh Hursey: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
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
