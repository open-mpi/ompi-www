<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 16:34:46 2007" -->
<!-- isoreceived="20071219213446" -->
<!-- sent="Wed, 19 Dec 2007 14:34:36 -0700" -->
<!-- isosent="20071219213436" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="C38EDC7C.BA6D%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF2693BC55.B330F5B2-ON862573B6.007379E1-862573B6.0073DFA8_at_exxonmobil.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 16:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4744.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4744.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI 1.3 will support use of the hostfile and the tm launcher
<br>
simultaneously. It will work slightly differently, though, with respect to
<br>
the hostfile:
<br>
<p>1. PBS_NODEFILE will be read to obtain a complete list of what has been
<br>
allocated to us
<br>
<p>2. you will be allowed to provide a hostfile for each app_context as a
<br>
separate entry to define the hosts to be used for that specific app_context.
<br>
The hosts in your hostfile, however, must be included in the PBS_NODEFILE.
<br>
<p>Basically, the hostfile argument will serve as a filter to the hosts
<br>
provided via PBS_NODEFILE. We will use the TM launcher (unless, of course,
<br>
you tell us to do otherwise), so the issues I mentioned before will go away.
<br>
<p>There will be a FAQ entry describing the revised hostfile behavior in some
<br>
detail. We think the change will help rationalize the behavior so it is more
<br>
consistent across all the different use-cases people have invented. ;-)
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 12/19/07 2:05 PM, &quot;pat.o'bryant_at_[hidden]&quot;
<br>
&lt;pat.o'bryant_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;     Thanks for the information. I am assuming OpenMPI 1.3 will support
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; &quot;-hostfile&quot; without the extra parms. Will 1.3 also carry the same
</span><br>
<span class="quotelev1">&gt; restrictions you list below?
</span><br>
<span class="quotelev1">&gt;               Pat
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
<span class="quotelev1">&gt;              Ralph H
</span><br>
<span class="quotelev1">&gt;              Castain
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt; &lt;rhc_at_[hidden]&gt;                                             To
</span><br>
<span class="quotelev1">&gt;              Sent by:                 &quot;Open MPI Users
</span><br>
<span class="quotelev1">&gt;              users-bounces@           &lt;users_at_[hidden]&gt;&quot;
</span><br>
<span class="quotelev1">&gt;              open-
</span><br>
<span class="quotelev1">&gt; mpi.org                                               cc
</span><br>
<span class="quotelev1">&gt;                                       Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt;              12/19/07 10:10           Re: [OMPI users] Torque and
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt;              AM                       1.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              Please respond
</span><br>
<span class="quotelev1">&gt;                    to
</span><br>
<span class="quotelev1">&gt;              Open MPI Users
</span><br>
<span class="quotelev1">&gt;              &lt;users_at_open-mp
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
<span class="quotelev1">&gt; Just to be clear: what this does is tell Open MPI to launch using the
</span><br>
<span class="quotelev1">&gt; SSH
</span><br>
<span class="quotelev1">&gt; launcher. This will work okay, but means that Torque doesn't know
</span><br>
<span class="quotelev1">&gt; about the
</span><br>
<span class="quotelev1">&gt; children and cannot monitor them. It also won't work on clusters (such
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; the ones we have here) that do not allow you to ssh procs onto the
</span><br>
<span class="quotelev1">&gt; backend
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are going this route, you actually don't need the --with-tm
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; option. Your command line basically tells the system to ignore anything
</span><br>
<span class="quotelev1">&gt; associated with tm anyway - you are operating just as if you were in an
</span><br>
<span class="quotelev1">&gt; ssh-only cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it works for you, that is great - just be aware of the limitations
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; disclaimers. I would only suggest it be used as a temporary workaround
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; opposed to a general practice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Caird, Andrew J&quot; &lt;acaird_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: December 19, 2007 9:40:27 AM EST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Glad to hear that worked for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Full credit goes to Brock Palen who told me about this.  It turns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out we also have a user who wanted to do that.  And meta-credit goes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the OMPI developers for making a consistent and flexible set of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI tools and libraries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --andy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, December 19, 2007 9:37 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andrew,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    That worked like a champ. Now my users can have it both
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ways. For the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; record, my control statements looked like the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.2.4/bin/mpirun -mca pls ^tm -np $NP -hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $PBS_NODEFILE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $my_binary_path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My job works just fine and reports no errors. This version of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; built with &quot;--with-tm=/usr/local/pbs&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Thanks for your help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              Pat
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Business Line Infrastructure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Technical Systems, HPC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office: 713-431-7022
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            &quot;Caird, Andrew
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            J&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            &lt;acaird_at_umich.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         To
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            edu&gt;                     &quot;Open MPI Users&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Sent by:                 &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            users-bounces@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            open-mpi.org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Subject
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                     Re: [OMPI users] Torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            12/19/07 07:59           1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Please respond
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                  to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            &lt;users_at_open-mp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                i.org&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oops, I meant -mca, not -mcs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Caird, Andrew J
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, December 19, 2007 8:57 AM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cc: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does OMPI built with TM but run with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  -mcs pls ^tm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; give the same effect?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --andy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, December 19, 2007 8:47 AM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cc: Open MPI Users; users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Your suggestion worked. So long as I specifically state
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;--without-tm&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the OpenMPI 1.2.4 build allows the use of &quot;-hostfile&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Apparently, by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; default, OpenMPI 1.2.4 will incorporate Torque if it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exists, so it is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; necessary to specifically request &quot;no Torque support&quot;.  I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; used the normal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Torque processes to submit the job and specified &quot;-hostfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $PBS_NODEFILE&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Everything worked.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           Pat
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Business Line Infrastructure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Technical Systems, HPC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Office: 713-431-7022
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            Terry
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            Frankcombe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            &lt;terry_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         To
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            .se&gt;                     Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            Sent by:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         cc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            users-bounces@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            open-mpi.org
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    Subject
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Re: [OMPI users] Torque
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     1.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            12/18/07 01:45
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            PM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            Please respond
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            &lt;users_at_open-mp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                i.org&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, 2007-12-18 at 11:59 -0700, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hate to be a party-pooper, but the answer is &quot;no&quot; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI 1.2. We
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; allow the use of a hostfile in a Torque environment in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We have changed this for v1.3, but you'll have to wait for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that release.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can one not build OpenMPI without tm support and spawn remote
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jobs using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the other mechanisms, using only $PBS_NODEFILE (or a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; derivative of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file that that points to) in the script?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ciao
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Terry
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dr Terry Frankcombe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Physical Chemistry, Department of Chemistry
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; G&#246;teborgs Universitet
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SE-412 96 G&#246;teborg Sweden
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ph: +46 76 224 0887   Skype: terry.frankcombe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4744.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4744.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
