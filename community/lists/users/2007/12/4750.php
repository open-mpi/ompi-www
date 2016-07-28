<?
$subject_val = "Re: [OMPI users] Torque and OpenMPI 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:37:11 2007" -->
<!-- isoreceived="20071220133711" -->
<!-- sent="Thu, 20 Dec 2007 06:37:02 -0700" -->
<!-- isosent="20071220133702" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2" -->
<!-- id="C38FBE0E.BA8B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C38EE67C.BA71%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-12-20 08:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4751.php">SaiGiridhar Ramasamy: "[OMPI users] mounting"</a>
<li><strong>Previous message:</strong> <a href="4749.php">Ralph H Castain: "Re: [OMPI users] mpirun: specify multiple install prefixes"</a>
<li><strong>In reply to:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For anyone truly interested, the revised hostfile behavior to be supported
<br>
beginning with release 1.3 is described on the Open MPI wiki:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p>Many thanks to the folks from Sun for providing that summary!
<br>
Ralph
<br>
<p><p>On 12/19/07 3:17 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is fully implemented, but on my development branch at the moment. We hope
</span><br>
<span class="quotelev1">&gt; to bring that over to the trunk late Jan - primarily need to complete some
</span><br>
<span class="quotelev1">&gt; work on MPI-2 dynamic process management and give Josh a chance to repair
</span><br>
<span class="quotelev1">&gt; the checkpoint/restart functionality before we bring it over.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/19/07 3:07 PM, &quot;Adams, Brian M&quot; &lt;briadam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the clarification as I'm dealing with workarounds for this at
</span><br>
<span class="quotelev2">&gt;&gt; Sandia as well...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I might have missed this earlier in the dialog, but is this capability
</span><br>
<span class="quotelev2">&gt;&gt; in the SVN trunk right now, or still on the TODO list?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Brian M. Adams, PhD (briadam_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; Optimization and Uncertainty Estimation
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; P.O. Box 5800, Mail Stop 1318
</span><br>
<span class="quotelev2">&gt;&gt; Albuquerque, NM 87185-1318
</span><br>
<span class="quotelev2">&gt;&gt; Voice: 505-284-8845, FAX: 505-284-2518
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, December 19, 2007 2:35 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;; pat.o'bryant_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: Castain, Ralph H. (LANL)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Torque and OpenMPI 1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.3 will support use of the hostfile and the tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launcher simultaneously. It will work slightly differently,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though, with respect to the hostfile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. PBS_NODEFILE will be read to obtain a complete list of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what has been allocated to us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. you will be allowed to provide a hostfile for each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app_context as a separate entry to define the hosts to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used for that specific app_context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The hosts in your hostfile, however, must be included in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_NODEFILE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically, the hostfile argument will serve as a filter to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hosts provided via PBS_NODEFILE. We will use the TM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launcher (unless, of course, you tell us to do otherwise), so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the issues I mentioned before will go away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There will be a FAQ entry describing the revised hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior in some detail. We think the change will help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rationalize the behavior so it is more consistent across all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the different use-cases people have invented. ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4751.php">SaiGiridhar Ramasamy: "[OMPI users] mounting"</a>
<li><strong>Previous message:</strong> <a href="4749.php">Ralph H Castain: "Re: [OMPI users] mpirun: specify multiple install prefixes"</a>
<li><strong>In reply to:</strong> <a href="4747.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
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
