<?
$subject_val = "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 13:34:31 2013" -->
<!-- isoreceived="20131122183431" -->
<!-- sent="Fri, 22 Nov 2013 11:34:31 -0700" -->
<!-- isosent="20131122183431" -->
<!-- name="Jason Gans" -->
<!-- email="jgans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI" -->
<!-- id="528FA3B7.5070509_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="528F9FF9.8080806_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI<br>
<strong>From:</strong> Jason Gans (<em>jgans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 13:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23031.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23026.php">Lloyd Brown: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23031.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23031.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/22/13 11:18 AM, Lloyd Brown wrote:
<br>
<span class="quotelev1">&gt; As far as I understand, the mpirun will assign processes to hosts in the
</span><br>
<span class="quotelev1">&gt; hostlist ($PBS_NODEFILE) sequentially, and if it runs out of hosts in
</span><br>
<span class="quotelev1">&gt; the list, it starts over at the top of the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Theoretically, you should be able to request specific hostnames, and the
</span><br>
<span class="quotelev1">&gt; processor counts per hostname, in your torque submit request.  I'm not
</span><br>
<span class="quotelev1">&gt; sure if this is correct (we don't use Torque here anymore, and I'm going
</span><br>
<span class="quotelev1">&gt; off memory), but it should be approximately correct:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; qsub -l nodes=n0000:2+n0001:2+n0002:8+n0003:8+n0004:2+n0005:2+n0006:2+n0007:4 ...
</span><br>
Thanks! This is awkward, but it did the trick. To get the desired 
<br>
behavior I first
<br>
had to provide a &quot;fake&quot; nodes file to Torque (where all of the nodes 
<br>
were listed
<br>
as having a large number of processors, i.e. np=8). Now I can submit 
<br>
jobs using:
<br>
<p>qsub -I -l nodes=n0000:ppn=2+n0001:ppn=2+n0002:ppn=8+...
<br>
<p>and get the expected behavior (including the expected $PBS_NODFILE, 
<br>
where the
<br>
name of each node appears &quot;ppn&quot; number of times).
<br>
<p>Thanks to everyone who responded!
<br>
<p>Regards,
<br>
<p>Jason
<br>
<span class="quotelev1">&gt; Granted, that's awkward, but I'm not sure if there's another way in
</span><br>
<span class="quotelev1">&gt; Torque to request different numbers of processors per node.  You might
</span><br>
<span class="quotelev1">&gt; ask on the Torque Users list.  They might tell you to change the nodes
</span><br>
<span class="quotelev1">&gt; file to reflect the number of actual processes you want on each node,
</span><br>
<span class="quotelev1">&gt; rather than the number of physical processors on the hosts.  Whether
</span><br>
<span class="quotelev1">&gt; this works for you, depends on whether you want this type of
</span><br>
<span class="quotelev1">&gt; oversubscription to happen all the time, or on a per-job basis, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/22/2013 11:11 AM, Gans, Jason D wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have tried the 1.7 series (specifically 1.7.3) and I get the same
</span><br>
<span class="quotelev2">&gt;&gt; behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run &quot;mpirun -oversubscribe -np 24 hostname&quot;, three instances of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;hostname&quot; are run on each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The contents of the $PBS_NODEFILE are:
</span><br>
<span class="quotelev2">&gt;&gt; n0007
</span><br>
<span class="quotelev2">&gt;&gt; n0006
</span><br>
<span class="quotelev2">&gt;&gt; n0005
</span><br>
<span class="quotelev2">&gt;&gt; n0004
</span><br>
<span class="quotelev2">&gt;&gt; n0003
</span><br>
<span class="quotelev2">&gt;&gt; n0002
</span><br>
<span class="quotelev2">&gt;&gt; n0001
</span><br>
<span class="quotelev2">&gt;&gt; n0000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but, since I have compiled OpenMPI using the &quot;--with-tm&quot;,  it appears
</span><br>
<span class="quotelev2">&gt;&gt; that OpenMPI is not using the $PBS_NODEFILE (which I tested by modifying
</span><br>
<span class="quotelev2">&gt;&gt; the torque pbs_mom to write a $PBS_NODEFILE that contained &quot;slot=xx&quot;
</span><br>
<span class="quotelev2">&gt;&gt; information for each node. mpirun complained when I did this).
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
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Friday, November 22, 2013 11:04 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] Oversubscription of nodes with Torque and
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Really shouldn't matter - this is clearly a bug in OMPI if it is doing
</span><br>
<span class="quotelev2">&gt;&gt; mapping as you describe. Out of curiosity, have you tried the 1.7
</span><br>
<span class="quotelev2">&gt;&gt; series? Does it behave the same?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can take a look at the code later today and try to figure out what
</span><br>
<span class="quotelev2">&gt;&gt; happened.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 22, 2013, at 9:56 AM, Jason Gans &lt;jgans_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:jgans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/22/13 10:47 AM, Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 22.11.2013 um 17:32 schrieb Gans, Jason D:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would like to run an instance of my application on every *core* of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a small cluster. I am using Torque 2.5.12 to run jobs on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster. The cluster in question is a heterogeneous collection of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machines that are all past their prime. Specifically, the number of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores ranges from 2-8. Here is the Torque &quot;nodes&quot; file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0000 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0001 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0002 np=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0003 np=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0004 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0005 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0006 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0007 np=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I use openmpi-1.6.3, I can oversubscribe nodes but the tasks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are allocated to nodes without regard to the number of cores on each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node (specified by the &quot;np=xx&quot; in the nodes file). For example, when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I run &quot;mpirun -np 24 hostname&quot;, mpirun places three instances of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;hostname&quot; on each node, despite the fact that some nodes only have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; two processors and some have more.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You submitted the job itself by requesting 24 cores for it too?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since there are only 8 Torque nodes in the cluster, I submitted the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job by requesting 8 nodes, i.e. &quot;qsub -I -l nodes=8&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to have OpenMPI &quot;gracefully&quot; oversubscribe nodes by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocating instances based on the &quot;np=xx&quot; information in the Torque
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes file? It this a Torque problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; p.s. I do get the desired behavior when I run *without* Torque and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specify the following machine file to mpirun:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0000 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0001 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0002 slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0003 slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0004 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0005 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0006 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0007 slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="23031.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23026.php">Lloyd Brown: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23031.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23031.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
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
