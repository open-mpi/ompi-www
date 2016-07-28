<?
$subject_val = "Re: [OMPI users] Need explanation for the following ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 11:07:41 2008" -->
<!-- isoreceived="20080123160741" -->
<!-- sent="Wed, 23 Jan 2008 09:07:32 -0700" -->
<!-- isosent="20080123160732" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need explanation for the following ORTE error message" -->
<!-- id="C3BCB454.BE0F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A522C2FE-872E-4BFD-A99E-A3C797557D96_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need explanation for the following ORTE error message<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 11:07:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4869.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4867.php">David Gunter: "[OMPI users] Need explanation for the following ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="4867.php">David Gunter: "[OMPI users] Need explanation for the following ORTE error message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/23/08 8:26 AM, &quot;David Gunter&quot; &lt;dog_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A user of one of our OMPI 1.2.3 builds encountered the following error
</span><br>
<span class="quotelev1">&gt; message during an MPI job run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: File read failure in file
</span><br>
<span class="quotelev1">&gt; util/universe_setup_file_io.c at line 123
</span><br>
<p>It means that at some point in the past, an mpirun attempted to startup,
<br>
started to write a file that includes info on its name and contact info, and
<br>
then was aborted. The user subsequently restarted the job, it saw the file
<br>
and attempted to read it, but the info in the file was incomplete.
<br>
<p>This can be ignored - we eliminated that handshake from future versions, so
<br>
you'll never see it after 1.2.
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; He reported that the job ran normally other than that but we are
</span><br>
<span class="quotelev1">&gt; wondering what this message means.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
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
<li><strong>Next message:</strong> <a href="4869.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4867.php">David Gunter: "[OMPI users] Need explanation for the following ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="4867.php">David Gunter: "[OMPI users] Need explanation for the following ORTE error message"</a>
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
