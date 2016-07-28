<?
$subject_val = "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 28 16:35:01 2012" -->
<!-- isoreceived="20120328203501" -->
<!-- sent="Wed, 28 Mar 2012 14:34:52 -0600" -->
<!-- isosent="20120328203452" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster" -->
<!-- id="EA7FB9C7-15F0-4D7A-B2CF-70C1FED42D89_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="COL105-W294B3C115E4DE6A5B24E639D4B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-28 16:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18864.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18863.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What di you have in the &quot;hosts&quot; file? We don't have a native integration with Condor, so you'll have to specify the hosts and number of slots on each, as Reuti explained. You'll also need to check that your sys admin allows you to ssh without password to each host.
<br>
<p><p>On Mar 28, 2012, at 10:02 AM, Hameed Alzahrani wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks that works fine when I submit hello program but when I tried to benchmark the system it look like it does not do anything  
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --hostfile hosts xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 28 Mar 2012 17:40:07 +0200
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Can not run a parallel job on all the nodes in the	cluster
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 28.03.2012 um 17:35 schrieb Hameed Alzahrani:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is there a specific name or location for the hostfile because I could not figure how to specify the number of processors for each machine in the command line.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No, just specify the name (or path) to it with:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --hostfile foobar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: Wed, 28 Mar 2012 17:21:39 +0200
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] Can not run a parallel job on all the nodes in the	cluster
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Am 28.03.2012 um 16:55 schrieb Hameed Alzahrani:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I ran hello program which return the host name when I run it using 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpirun -np 8 hello
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; all the 8 answer returned from the same machine
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; when I run it using 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpirun -np 8 --host host1,host2,host3 hello
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I got answers from all the machines but it is not from all processors because I have 8 processors host1=4, host2=2, host3=2 the answer was 3 from host1, 3 from host2 and 2 from host3.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If you want to specify the number of slots you can put it in a hostfile (otherwise a round robin assignment is just used). I'm not aware that it can be specified on the command line with different values for each machine:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; host1 slots=4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; host2 slots=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; host3 slots=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -- Reuti
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Date: Wed, 28 Mar 2012 16:42:21 +0200
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] Can not run a parallel job on all the nodes in the	cluster
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Am 28.03.2012 um 16:30 schrieb Hameed Alzahrani:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; I mean the node that I run mpirun command from. I use condor as a scheduler but I need to benchmark the cluster either from condor or directly from open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I can't say anything regarding the Condor integration of Open MPI, but starting it directly by mpirun and supplying a valid number of ranks and hostfile should start some processes on other machines as requested. Can you run a plain mpihello first and output rank and hostname? Do you have ssh access to all the machines in questions? You have a shared home directory with the applications?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; when I ran mpirun from a machine and checking the memory status for the three machines that I have it appear that the memory usage increased just in the same machine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Date: Wed, 28 Mar 2012 15:12:17 +0200
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Subject: Re: [OMPI users] Can not run a parallel job on all the nodes in the	cluster
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Am 27.03.2012 um 23:46 schrieb Hameed Alzahrani:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; When I run any parallel job I get the answer just from the submitting node
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; what do you mean by submitting node: you use a queuing system - which one?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; -- Reuti
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; even when I tried to benchmark the cluster using LINPACK but it look like the job just working on the submitting node is there a way to make openMPI send the job equally to all the nodes depending on the number of processor in the current mode even if I specify that the job should use 8 processor it look like openMPI use the submitting node 4 processors instead of using the other processors. I tried also --host but it does not work correctly in benchmarking the cluster so does any one use openMPI in benchmarking a cluster or does any one knows how to make openMPI divids the parallel job equally to every processor on the cluster.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Regards, 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18864.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18863.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
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
