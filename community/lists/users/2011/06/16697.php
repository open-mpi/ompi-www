<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 09:27:14 2011" -->
<!-- isoreceived="20110608132714" -->
<!-- sent="Wed, 08 Jun 2011 15:25:30 +0200" -->
<!-- isosent="20110608132530" -->
<!-- name="francoise.roch_at_[hidden]" -->
<!-- email="francoise.roch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="4DEF784A.10003_at_obs.ujf-grenoble.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C4A3E021-C21B-4B0E-B4B4-6FC4D8FB1701_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1<br>
<strong>From:</strong> <a href="mailto:francoise.roch_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_COMM_DUP%20freeze%20with%20OpenMPI%201.4.1"><em>francoise.roch_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-06-08 09:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16698.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16696.php">Jeff Squyres: "Re: [OMPI users] HWLOC problem"</a>
<li><strong>In reply to:</strong> <a href="16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Thanks for your answer.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 31, 2011, at 10:55 AM, francoise.roch_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I reproduced the problem with the following code :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I can reconcile this statement with your later statements...?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I execute the program on 2 nodes of 12 cores each (a total of 24 processes), it doesn't stop.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your first statement seems to imply that you got the sample program to hang, but this statement says that it worked fine.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am able to run this sample program fine, too.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Sorry for the misunderstanding. When I say that the program is frozen 
<br>
and it does not stop it means that the program hang at the 
<br>
&quot;MPI_COMM_DUP&quot; instruction level.
<br>
<p><span class="quotelev2">&gt;&gt; Adding the 2 lines above in the code, just before the MPI_COMM_DUP call, I remark that several process have the same rank for COMM_NODES communicator .
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_COMM_RANK(COMM_NODES, MYID2, IERR)
</span><br>
<span class="quotelev2">&gt;&gt; WRITE(*,*) 'before DUP call myid is ', MYID, 'myid2 is ', MYID2
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That definitely should not be.  Can you show the output for this?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Here's the output (the rank 17 is missing and the 22 is twice :
<br>
<p>before DUP myid is 1 myid2 is 0
<br>
before DUP myid is 2 myid2 is 1
<br>
before DUP myid is 3 myid2 is 2
<br>
before DUP myid is 4 myid2 is 3
<br>
before DUP myid is 5 myid2 is 4
<br>
before DUP myid is 6 myid2 is 5
<br>
before DUP myid is 7 myid2 is 6
<br>
before DUP myid is 8 myid2 is 7
<br>
before DUP myid is 9 myid2 is 8
<br>
before DUP myid is 10 myid2 is 9
<br>
before DUP myid is 11 myid2 is 10
<br>
before DUP myid is 12 myid2 is 11
<br>
before DUP myid is 13 myid2 is 12
<br>
before DUP myid is 14 myid2 is 13
<br>
before DUP myid is 15 myid2 is 14
<br>
before DUP myid is 16 myid2 is 15
<br>
before DUP myid is 17 myid2 is 16
<br>
before DUP myid is 18 myid2 is 18
<br>
before DUP myid is 19 myid2 is 19
<br>
before DUP myid is 20 myid2 is 20
<br>
before DUP myid is 21 myid2 is 21
<br>
before DUP myid is 22 myid2 is 22
<br>
before DUP myid is 23 myid2 is 22
<br>
<p><p><span class="quotelev1">&gt; I put those lines in an I see unique rank values for all processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using the wrong mpif.h, 
</span><br>
I have verified the include path and it is ok.
<br>
Moreover, I am able to run the program on 2 nodes and a total of 12 
<br>
tasks (mpirun -np 12) or with 2 nodes with a total of 18 tasks. The rank 
<br>
values are ok.
<br>
But the program hang beyond 18 tasks. And the rank values are not unique 
<br>
in these cases. It's the same behaviour for 4 nodes, for example.
<br>
<p>Best regards
<br>
F. Roch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16698.php">Shiqing Fan: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>Previous message:</strong> <a href="16696.php">Jeff Squyres: "Re: [OMPI users] HWLOC problem"</a>
<li><strong>In reply to:</strong> <a href="16671.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
