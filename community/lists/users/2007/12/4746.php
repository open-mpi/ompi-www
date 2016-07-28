<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 17:07:40 2007" -->
<!-- isoreceived="20071219220740" -->
<!-- sent="Wed, 19 Dec 2007 15:07:23 -0700" -->
<!-- isosent="20071219220723" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="F1A65DC9F3C9404DA4B6808E58A56CD006376B59_at_ES22SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C38EDC7C.BA6D%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 17:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4745.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4745.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for the clarification as I'm dealing with workarounds for this at
<br>
Sandia as well...
<br>
<p>I might have missed this earlier in the dialog, but is this capability
<br>
in the SVN trunk right now, or still on the TODO list?
<br>
<p>Brian
<br>
----------------------------------------
<br>
Brian M. Adams, PhD (briadam_at_[hidden])
<br>
Optimization and Uncertainty Estimation
<br>
Sandia National Laboratories
<br>
P.O. Box 5800, Mail Stop 1318
<br>
Albuquerque, NM 87185-1318
<br>
Voice: 505-284-8845, FAX: 505-284-2518
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 19, 2007 2:35 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;; pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Castain, Ralph H. (LANL)
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.3 will support use of the hostfile and the tm 
</span><br>
<span class="quotelev1">&gt; launcher simultaneously. It will work slightly differently, 
</span><br>
<span class="quotelev1">&gt; though, with respect to the hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. PBS_NODEFILE will be read to obtain a complete list of 
</span><br>
<span class="quotelev1">&gt; what has been allocated to us
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. you will be allowed to provide a hostfile for each 
</span><br>
<span class="quotelev1">&gt; app_context as a separate entry to define the hosts to be 
</span><br>
<span class="quotelev1">&gt; used for that specific app_context.
</span><br>
<span class="quotelev1">&gt; The hosts in your hostfile, however, must be included in the 
</span><br>
<span class="quotelev1">&gt; PBS_NODEFILE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically, the hostfile argument will serve as a filter to 
</span><br>
<span class="quotelev1">&gt; the hosts provided via PBS_NODEFILE. We will use the TM 
</span><br>
<span class="quotelev1">&gt; launcher (unless, of course, you tell us to do otherwise), so 
</span><br>
<span class="quotelev1">&gt; the issues I mentioned before will go away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There will be a FAQ entry describing the revised hostfile 
</span><br>
<span class="quotelev1">&gt; behavior in some detail. We think the change will help 
</span><br>
<span class="quotelev1">&gt; rationalize the behavior so it is more consistent across all 
</span><br>
<span class="quotelev1">&gt; the different use-cases people have invented. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4745.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4745.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
