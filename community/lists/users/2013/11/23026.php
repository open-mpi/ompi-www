<?
$subject_val = "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 13:18:44 2013" -->
<!-- isoreceived="20131122181844" -->
<!-- sent="Fri, 22 Nov 2013 11:18:33 -0700" -->
<!-- isosent="20131122181833" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI" -->
<!-- id="528F9FF9.8080806_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AC6D38C07BF6248ACD81166D380DB1C3874BBA3_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 13:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Previous message:</strong> <a href="23025.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23024.php">Gans, Jason D: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23030.php">Jason Gans: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23030.php">Jason Gans: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I understand, the mpirun will assign processes to hosts in the
<br>
hostlist ($PBS_NODEFILE) sequentially, and if it runs out of hosts in
<br>
the list, it starts over at the top of the file.
<br>
<p>Theoretically, you should be able to request specific hostnames, and the
<br>
processor counts per hostname, in your torque submit request.  I'm not
<br>
sure if this is correct (we don't use Torque here anymore, and I'm going
<br>
off memory), but it should be approximately correct:
<br>
<p><span class="quotelev1">&gt; qsub -l nodes=n0000:2+n0001:2+n0002:8+n0003:8+n0004:2+n0005:2+n0006:2+n0007:4 ...
</span><br>
<p>Granted, that's awkward, but I'm not sure if there's another way in
<br>
Torque to request different numbers of processors per node.  You might
<br>
ask on the Torque Users list.  They might tell you to change the nodes
<br>
file to reflect the number of actual processes you want on each node,
<br>
rather than the number of physical processors on the hosts.  Whether
<br>
this works for you, depends on whether you want this type of
<br>
oversubscription to happen all the time, or on a per-job basis, etc.
<br>
<p><p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 11/22/2013 11:11 AM, Gans, Jason D wrote:
<br>
<span class="quotelev1">&gt; I have tried the 1.7 series (specifically 1.7.3) and I get the same
</span><br>
<span class="quotelev1">&gt; behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run &quot;mpirun -oversubscribe -np 24 hostname&quot;, three instances of
</span><br>
<span class="quotelev1">&gt; &quot;hostname&quot; are run on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The contents of the $PBS_NODEFILE are:
</span><br>
<span class="quotelev1">&gt; n0007
</span><br>
<span class="quotelev1">&gt; n0006
</span><br>
<span class="quotelev1">&gt; n0005
</span><br>
<span class="quotelev1">&gt; n0004
</span><br>
<span class="quotelev1">&gt; n0003
</span><br>
<span class="quotelev1">&gt; n0002
</span><br>
<span class="quotelev1">&gt; n0001
</span><br>
<span class="quotelev1">&gt; n0000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but, since I have compiled OpenMPI using the &quot;--with-tm&quot;,  it appears
</span><br>
<span class="quotelev1">&gt; that OpenMPI is not using the $PBS_NODEFILE (which I tested by modifying
</span><br>
<span class="quotelev1">&gt; the torque pbs_mom to write a $PBS_NODEFILE that contained &quot;slot=xx&quot;
</span><br>
<span class="quotelev1">&gt; information for each node. mpirun complained when I did this).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jason
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain
</span><br>
<span class="quotelev1">&gt; [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, November 22, 2013 11:04 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Oversubscription of nodes with Torque and
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Really shouldn't matter - this is clearly a bug in OMPI if it is doing
</span><br>
<span class="quotelev1">&gt; mapping as you describe. Out of curiosity, have you tried the 1.7
</span><br>
<span class="quotelev1">&gt; series? Does it behave the same?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can take a look at the code later today and try to figure out what
</span><br>
<span class="quotelev1">&gt; happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2013, at 9:56 AM, Jason Gans &lt;jgans_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jgans_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/22/13 10:47 AM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 22.11.2013 um 17:32 schrieb Gans, Jason D:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would like to run an instance of my application on every *core* of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a small cluster. I am using Torque 2.5.12 to run jobs on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster. The cluster in question is a heterogeneous collection of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machines that are all past their prime. Specifically, the number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores ranges from 2-8. Here is the Torque &quot;nodes&quot; file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0000 np=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0001 np=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0002 np=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0003 np=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0004 np=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0005 np=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0006 np=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0007 np=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I use openmpi-1.6.3, I can oversubscribe nodes but the tasks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are allocated to nodes without regard to the number of cores on each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node (specified by the &quot;np=xx&quot; in the nodes file). For example, when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run &quot;mpirun -np 24 hostname&quot;, mpirun places three instances of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;hostname&quot; on each node, despite the fact that some nodes only have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two processors and some have more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You submitted the job itself by requesting 24 cores for it too?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; Since there are only 8 Torque nodes in the cluster, I submitted the
</span><br>
<span class="quotelev2">&gt;&gt; job by requesting 8 nodes, i.e. &quot;qsub -I -l nodes=8&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a way to have OpenMPI &quot;gracefully&quot; oversubscribe nodes by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocating instances based on the &quot;np=xx&quot; information in the Torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes file? It this a Torque problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p.s. I do get the desired behavior when I run *without* Torque and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the following machine file to mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0000 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0001 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0002 slots=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0003 slots=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0004 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0005 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0006 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n0007 slots=4
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Previous message:</strong> <a href="23025.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23024.php">Gans, Jason D: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23030.php">Jason Gans: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23030.php">Jason Gans: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
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
