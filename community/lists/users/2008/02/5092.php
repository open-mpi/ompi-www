<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 11:31:57 2008" -->
<!-- isoreceived="20080228163157" -->
<!-- sent="Thu, 28 Feb 2008 18:31:42 +0200" -->
<!-- isosent="20080228163142" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather" -->
<!-- id="20080228163141.GA1027_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0802270957370.32381_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 11:31:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>In reply to:</strong> <a href="5082.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 27, 2008 at 10:01:06AM -0600, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; The only solution to this problem is to suck it up and audit all the code 
</span><br>
<span class="quotelev1">&gt; to eliminate calls to opal_progress() in situations where infinite  
</span><br>
<span class="quotelev1">&gt; recursion can result.  It's going to be long and painful, but there's no  
</span><br>
<span class="quotelev1">&gt; quick fix (IMHO).
</span><br>
<span class="quotelev1">&gt;
</span><br>
The trick is to call progress only from functions that are called
<br>
directly by a user process. Never call progress from a callback functions.
<br>
The main offenders of this rule are calls to OMPI_FREE_LIST_WAIT(). They
<br>
should be changed to OMPI_FREE_LIST_GET() and dial with NULL return value.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5093.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>In reply to:</strong> <a href="5082.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
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
