<?
$subject_val = "Re: [OMPI users] Related to project ideas in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 11:08:12 2011" -->
<!-- isoreceived="20110825150812" -->
<!-- sent="Thu, 25 Aug 2011 11:08:06 -0400" -->
<!-- isosent="20110825150806" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Related to project ideas in OpenMPI" -->
<!-- id="CAHwLALM84Lqw5+UcFGuwm7+RFoAo_ZGDj1t4AKjF==pFqZeZOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="351B745B-F1DE-4286-8689-BBB958624B7A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-08-25 11:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17102.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17102.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Srinivas,
<br>
<p>There's also Kernel-Level Checkpointing vs. User-Level Checkpointing -
<br>
if you can checkpoint an MPI task and restart it on a new node, then
<br>
this is also &quot;process migration&quot;.
<br>
<p>Of course, doing a checkpoint &amp; restart can be slower than pure
<br>
in-kernel process migration, but the advantage is that you don't need
<br>
any kernel support, and can in fact do all of it in user-space.
<br>
<p>Rayson
<br>
<p><p>On Thu, Aug 25, 2011 at 10:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It also depends on what part of migration interests you - are you wanting to look at the MPI part of the problem (reconnecting MPI transports, ensuring messages are not lost, etc.) or the RTE part of the problem (where to restart processes, detecting failures, etc.)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2011, at 7:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Be aware that process migration is a pretty complex issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh is probably the best one to answer your question directly, but he's out today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2011, at 5:45 AM, srinivas kundaram wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am final year grad student looking for my final year project in OpenMPI.We are group of 4 students.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wanted to know about the &quot;Process Migration&quot; process of MPI processes in OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone suggest me any ideas for project related to process migration in OenMPI or other topics in Systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Srinivas Kundaram
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srinu1034_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +91-8149399160
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17102.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17102.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17104.php">Durga Choudhury: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
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
