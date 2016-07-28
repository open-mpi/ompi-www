<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 09:40:31 2007" -->
<!-- isoreceived="20071219144031" -->
<!-- sent="Wed, 19 Dec 2007 09:40:27 -0500" -->
<!-- isosent="20071219144027" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="CBA57977CF4A2A4D94031A347F7E011BDD263A_at_ECLUST2-VS2.adsroot.itcs.umich.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFBAFBE820.2AE4F8D7-ON862573B6.004F9193-862573B6.005043D0_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Torque and OpenMPI 1.2<br>
<strong>From:</strong> Caird, Andrew J (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 09:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4732.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4732.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glad to hear that worked for you.
<br>
<p>Full credit goes to Brock Palen who told me about this.  It turns out we also have a user who wanted to do that.  And meta-credit goes to the OMPI developers for making a consistent and flexible set of MPI tools and libraries.
<br>
<p>--andy
<br>
&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of 
</span><br>
<span class="quotelev1">&gt; pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 19, 2007 9:37 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew,
</span><br>
<span class="quotelev1">&gt;      That worked like a champ. Now my users can have it both 
</span><br>
<span class="quotelev1">&gt; ways. For the
</span><br>
<span class="quotelev1">&gt; record, my control statements looked like the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.4/bin/mpirun -mca pls ^tm -np $NP -hostfile 
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; $my_binary_path
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My job works just fine and reports no errors. This version of 
</span><br>
<span class="quotelev1">&gt; OpenMPI was
</span><br>
<span class="quotelev1">&gt; built with &quot;--with-tm=/usr/local/pbs&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;               Thanks for your help,
</span><br>
<span class="quotelev1">&gt;                Pat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev1">&gt; Business Line Infrastructure
</span><br>
<span class="quotelev1">&gt; Technical Systems, HPC
</span><br>
<span class="quotelev1">&gt; Office: 713-431-7022
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              &quot;Caird, Andrew                                   
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              J&quot;                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              &lt;acaird_at_umich.                                   
</span><br>
<span class="quotelev1">&gt;           To 
</span><br>
<span class="quotelev1">&gt;              edu&gt;                     &quot;Open MPI Users&quot;        
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              Sent by:                 &lt;users_at_[hidden]&gt;    
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              users-bounces@                                   
</span><br>
<span class="quotelev1">&gt;           cc 
</span><br>
<span class="quotelev1">&gt;              open-mpi.org             
</span><br>
<span class="quotelev1">&gt; &lt;users-bounces_at_[hidden]&gt;         
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;      Subject 
</span><br>
<span class="quotelev1">&gt;                                       Re: [OMPI users] Torque 
</span><br>
<span class="quotelev1">&gt; and OpenMPI  
</span><br>
<span class="quotelev1">&gt;              12/19/07 07:59           1.2                     
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              AM                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              Please respond                                   
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                    to                                         
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              Open MPI Users                                   
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              &lt;users_at_open-mp                                   
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                  i.org&gt;                                       
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;                                                               
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oops, I meant -mca, not -mcs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Caird, Andrew J
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, December 19, 2007 8:57 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Cc: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does OMPI built with TM but run with:
</span><br>
<span class="quotelev2">&gt; &gt;    -mcs pls ^tm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; give the same effect?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --andy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Wednesday, December 19, 2007 8:47 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cc: Open MPI Users; users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Terry,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Your suggestion worked. So long as I specifically state
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;--without-tm&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the OpenMPI 1.2.4 build allows the use of &quot;-hostfile&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; Apparently, by
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default, OpenMPI 1.2.4 will incorporate Torque if it
</span><br>
<span class="quotelev2">&gt; &gt; exists, so it is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; necessary to specifically request &quot;no Torque support&quot;.  I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; used the normal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Torque processes to submit the job and specified &quot;-hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $PBS_NODEFILE&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Everything worked.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            Thanks for your help,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             Pat
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Business Line Infrastructure
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Technical Systems, HPC
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Office: 713-431-7022
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Terry
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Frankcombe
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              &lt;terry_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           To
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              .se&gt;                     Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Sent by:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              users-bounces@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              open-mpi.org
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      Subject
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                       Re: [OMPI users] Torque
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                       1.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              12/18/07 01:45
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              PM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Please respond
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                    to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              &lt;users_at_open-mp
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  i.org&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, 2007-12-18 at 11:59 -0700, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hate to be a party-pooper, but the answer is &quot;no&quot; in
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.2. We
</span><br>
<span class="quotelev3">&gt; &gt; &gt; don't
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; allow the use of a hostfile in a Torque environment in
</span><br>
<span class="quotelev2">&gt; &gt; that version.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; We have changed this for v1.3, but you'll have to wait for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that release.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can one not build OpenMPI without tm support and spawn remote
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jobs using
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the other mechanisms, using only $PBS_NODEFILE (or a
</span><br>
<span class="quotelev2">&gt; &gt; derivative of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; file that that points to) in the script?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ciao
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Terry
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dr Terry Frankcombe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Physical Chemistry, Department of Chemistry
</span><br>
<span class="quotelev3">&gt; &gt; &gt; G&#246;teborgs Universitet
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SE-412 96 G&#246;teborg Sweden
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ph: +46 76 224 0887   Skype: terry.frankcombe
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4732.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4732.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
