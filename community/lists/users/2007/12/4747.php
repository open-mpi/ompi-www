<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 17:17:26 2007" -->
<!-- isoreceived="20071219221726" -->
<!-- sent="Wed, 19 Dec 2007 15:17:16 -0700" -->
<!-- isosent="20071219221716" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="C38EE67C.BA71%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F1A65DC9F3C9404DA4B6808E58A56CD006376B59_at_ES22SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2007-12-19 17:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4748.php">de Almeida, Valmor F.: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4750.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4750.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is fully implemented, but on my development branch at the moment. We hope
<br>
to bring that over to the trunk late Jan - primarily need to complete some
<br>
work on MPI-2 dynamic process management and give Josh a chance to repair
<br>
the checkpoint/restart functionality before we bring it over.
<br>
<p>Ralph
<br>
<p><p><p>On 12/19/07 3:07 PM, &quot;Adams, Brian M&quot; &lt;briadam_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the clarification as I'm dealing with workarounds for this at
</span><br>
<span class="quotelev1">&gt; Sandia as well...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I might have missed this earlier in the dialog, but is this capability
</span><br>
<span class="quotelev1">&gt; in the SVN trunk right now, or still on the TODO list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; Brian M. Adams, PhD (briadam_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Optimization and Uncertainty Estimation
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; P.O. Box 5800, Mail Stop 1318
</span><br>
<span class="quotelev1">&gt; Albuquerque, NM 87185-1318
</span><br>
<span class="quotelev1">&gt; Voice: 505-284-8845, FAX: 505-284-2518
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, December 19, 2007 2:35 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;; pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Castain, Ralph H. (LANL)
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.3 will support use of the hostfile and the tm
</span><br>
<span class="quotelev2">&gt;&gt; launcher simultaneously. It will work slightly differently,
</span><br>
<span class="quotelev2">&gt;&gt; though, with respect to the hostfile:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. PBS_NODEFILE will be read to obtain a complete list of
</span><br>
<span class="quotelev2">&gt;&gt; what has been allocated to us
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. you will be allowed to provide a hostfile for each
</span><br>
<span class="quotelev2">&gt;&gt; app_context as a separate entry to define the hosts to be
</span><br>
<span class="quotelev2">&gt;&gt; used for that specific app_context.
</span><br>
<span class="quotelev2">&gt;&gt; The hosts in your hostfile, however, must be included in the
</span><br>
<span class="quotelev2">&gt;&gt; PBS_NODEFILE.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Basically, the hostfile argument will serve as a filter to
</span><br>
<span class="quotelev2">&gt;&gt; the hosts provided via PBS_NODEFILE. We will use the TM
</span><br>
<span class="quotelev2">&gt;&gt; launcher (unless, of course, you tell us to do otherwise), so
</span><br>
<span class="quotelev2">&gt;&gt; the issues I mentioned before will go away.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There will be a FAQ entry describing the revised hostfile
</span><br>
<span class="quotelev2">&gt;&gt; behavior in some detail. We think the change will help
</span><br>
<span class="quotelev2">&gt;&gt; rationalize the behavior so it is more consistent across all
</span><br>
<span class="quotelev2">&gt;&gt; the different use-cases people have invented. ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4748.php">de Almeida, Valmor F.: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4746.php">Adams, Brian M: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4750.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Reply:</strong> <a href="4750.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
