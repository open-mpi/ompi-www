<?
$subject_val = "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 16:54:07 2010" -->
<!-- isoreceived="20100419205407" -->
<!-- sent="Mon, 19 Apr 2010 14:53:58 -0600" -->
<!-- isosent="20100419205358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque" -->
<!-- id="F371EE2C-2FAF-44E2-8684-01649755CDA2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100419200148.GA4911_at_stikine.its.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 16:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12705.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12703.php">Samuel Collis: "[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond"</a>
<li><strong>In reply to:</strong> <a href="12702.php">Martin Siegert: "[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you using? The behavior depends on the version...
<br>
<p>On Apr 19, 2010, at 2:01 PM, Martin Siegert wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering what effects it will have when I configure openmpi
</span><br>
<span class="quotelev1">&gt; with --enable-mpi-threads: we are using the TM interface to torque
</span><br>
<span class="quotelev1">&gt; and therefore each MPI program gets assigned a certain number of cores
</span><br>
<span class="quotelev1">&gt; on a set of nodes by the scheduler. If the MPI program now starts
</span><br>
<span class="quotelev1">&gt; additional threads how does that work?
</span><br>
<span class="quotelev1">&gt; - will this lead to an oversubscription of nodes
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; - will the creation of additional threads fail, if the number of
</span><br>
<span class="quotelev1">&gt;  processes on a node has reached the process count on that node
</span><br>
<span class="quotelev1">&gt;  assigned through torque?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How is this done properly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Martin Siegert
</span><br>
<span class="quotelev1">&gt; Head, Research Computing
</span><br>
<span class="quotelev1">&gt; WestGrid Site Lead
</span><br>
<span class="quotelev1">&gt; IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev1">&gt; Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev1">&gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Canada  V5A 1S6
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
<li><strong>Next message:</strong> <a href="12705.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12703.php">Samuel Collis: "[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond"</a>
<li><strong>In reply to:</strong> <a href="12702.php">Martin Siegert: "[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
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
