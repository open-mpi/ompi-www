<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 08:57:07 2007" -->
<!-- isoreceived="20071219135707" -->
<!-- sent="Wed, 19 Dec 2007 08:57:03 -0500" -->
<!-- isosent="20071219135703" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="CBA57977CF4A2A4D94031A347F7E011BDD2632_at_ECLUST2-VS2.adsroot.itcs.umich.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFB62617D4.287C7371-ON862573B6.004B1AFA-862573B6.004BBA57_at_exxonmobil.com" -->
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
<strong>Date:</strong> 2007-12-19 08:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>In reply to:</strong> <a href="4726.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does OMPI built with TM but run with:
<br>
&nbsp;&nbsp;&nbsp;-mcs pls ^tm
<br>
<p>give the same effect?
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
<span class="quotelev1">&gt; Sent: Wednesday, December 19, 2007 8:47 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;     Your suggestion worked. So long as I specifically state 
</span><br>
<span class="quotelev1">&gt; &quot;--without-tm&quot;,
</span><br>
<span class="quotelev1">&gt; the OpenMPI 1.2.4 build allows the use of &quot;-hostfile&quot;. Apparently, by
</span><br>
<span class="quotelev1">&gt; default, OpenMPI 1.2.4 will incorporate Torque if it exists, so it is
</span><br>
<span class="quotelev1">&gt; necessary to specifically request &quot;no Torque support&quot;.  I 
</span><br>
<span class="quotelev1">&gt; used the normal
</span><br>
<span class="quotelev1">&gt; Torque processes to submit the job and specified &quot;-hostfile 
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE&quot;.
</span><br>
<span class="quotelev1">&gt; Everything worked.
</span><br>
<span class="quotelev1">&gt;            Thanks for your help,
</span><br>
<span class="quotelev1">&gt;             Pat
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
<span class="quotelev1">&gt;              Terry                                            
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              Frankcombe                                       
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              &lt;terry_at_[hidden]                                   
</span><br>
<span class="quotelev1">&gt;           To 
</span><br>
<span class="quotelev1">&gt;              .se&gt;                     Open MPI Users 
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt;              Sent by:                                         
</span><br>
<span class="quotelev1">&gt;           cc 
</span><br>
<span class="quotelev1">&gt;              users-bounces@                                   
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              open-mpi.org                                     
</span><br>
<span class="quotelev1">&gt;      Subject 
</span><br>
<span class="quotelev1">&gt;                                       Re: [OMPI users] Torque 
</span><br>
<span class="quotelev1">&gt; and OpenMPI  
</span><br>
<span class="quotelev1">&gt;                                       1.2                     
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              12/18/07 01:45                                   
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;              PM                                               
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
<span class="quotelev1">&gt; On Tue, 2007-12-18 at 11:59 -0700, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hate to be a party-pooper, but the answer is &quot;no&quot; in OpenMPI 1.2. We
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev2">&gt; &gt; allow the use of a hostfile in a Torque environment in that version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have changed this for v1.3, but you'll have to wait for 
</span><br>
<span class="quotelev1">&gt; that release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can one not build OpenMPI without tm support and spawn remote 
</span><br>
<span class="quotelev1">&gt; jobs using
</span><br>
<span class="quotelev1">&gt; the other mechanisms, using only $PBS_NODEFILE (or a derivative of the
</span><br>
<span class="quotelev1">&gt; file that that points to) in the script?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ciao
</span><br>
<span class="quotelev1">&gt; Terry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr Terry Frankcombe
</span><br>
<span class="quotelev1">&gt; Physical Chemistry, Department of Chemistry
</span><br>
<span class="quotelev1">&gt; G&#246;teborgs Universitet
</span><br>
<span class="quotelev1">&gt; SE-412 96 G&#246;teborg Sweden
</span><br>
<span class="quotelev1">&gt; Ph: +46 76 224 0887   Skype: terry.frankcombe
</span><br>
<span class="quotelev1">&gt; &lt;terry_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>In reply to:</strong> <a href="4726.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
