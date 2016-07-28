<?
$subject_val = "Re: [OMPI users] Disable use of Torque at run-time";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 13:59:31 2009" -->
<!-- isoreceived="20090911175931" -->
<!-- sent="Fri, 11 Sep 2009 11:59:26 -0600" -->
<!-- isosent="20090911175926" -->
<!-- name="jgans" -->
<!-- email="jgans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Disable use of Torque at run-time" -->
<!-- id="4AAA8FFE.9070409_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="855FAD59-D5A2-4D35-BC34-9B35BDDB2071_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Disable use of Torque at run-time<br>
<strong>From:</strong> jgans (<em>jgans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 13:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10623.php">Andreas Haselbacher: "[OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Maybe in reply to:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10643.php">Josh Hursey: "Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you for you help. This is exactly what I wanted!
<br>
<p>Regards,
<br>
<p>Jason
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...well, here is one way to do it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 -host n0 ./master_worker : -n N-1 -host +e ./master_worker
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What this will do is put rank 0 on the first node in your allocation, 
</span><br>
<span class="quotelev1">&gt; and then all the remaining ranks on the remaining nodes in the 
</span><br>
<span class="quotelev1">&gt; allocation. All the ranks will be in the same comm_world.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check out &quot;man orte_hosts&quot; for a detailed explanation (with examples) 
</span><br>
<span class="quotelev1">&gt; of this &quot;relative node indexing&quot; syntax.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2009, at 3:57 PM, jgans wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A single app:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -N ./master_worker
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jason
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the master a different app, or is the same app used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In other words, do you run this as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 1 ./master: -n N worker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -N ./master_worker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either way, I can advise you on a better way to accomplish your goal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 10, 2009, at 2:58 PM, Jason D. Gans wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a master/worker bioinformatics application where the master 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; higher memory overhead than the workers. I want to restrict the master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node to a single slot (to prevent the master node from getting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oversubscribed and having workers compete for precious ram), while all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other non-master nodes can be oversubscribed (infinite max_slot).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess I'm puzzled, then. First, hostfile and Torque work fine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; together in the 1.3 series - it was the 1.2 series that had the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Second, the default max_slot setting is taken from the slots 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to you by Torque. I don't see the purpose in changing them - you can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; always oversubscribe the node anyway.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps you could explain more about what you are trying to do? You
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may find that there is a much simpler solution already in place.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 10, 2009, at 2:07 PM, Jason D. Gans wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What OMPI version are you talking about?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; version 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 10, 2009, at 1:40 PM, Jason D. Gans wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would like to use a custom hostfile (that changes the default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; max_slot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; values for certain nodes). My understanding of the FAQ is that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *not* possible with Torque. Therefore, is is possible to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; disable use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Torque at runtime (via an argument to mpirun), or do I need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; recompile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to remove Torque support altogether.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jason Gans
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Previous message:</strong> <a href="10623.php">Andreas Haselbacher: "[OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Maybe in reply to:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10643.php">Josh Hursey: "Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
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
