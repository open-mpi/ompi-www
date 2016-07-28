<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 16:53:19 2008" -->
<!-- isoreceived="20080228215319" -->
<!-- sent="Thu, 28 Feb 2008 16:53:11 -0500" -->
<!-- isosent="20080228215311" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather" -->
<!-- id="29463C87-7555-445D-AEC3-0837C8B7CCDD_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080228195508.GG19742_at_mv.qlogic.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 16:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this particular case, I don't think the solution is that obvious.  
<br>
If you look at the stack in the original email, you will notice how we  
<br>
get into this. The problem here, is that the FREE_LIST_WAIT is used to  
<br>
get a fragment to store an unexpected message. If this macro return  
<br>
NULL (in other words the PML is unable to store the unexpected  
<br>
message), what do you expect to happen ? Drop the message ? Ask the  
<br>
BTL to hold it for a while ? How about ordering ?
<br>
<p>It is unfortunate to say it, only few days after we had the discussion  
<br>
about the flow control, but the only correct solution here is to add  
<br>
PML level flow control ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 28, 2008, at 2:55 PM, Christian Bell wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 28 Feb 2008, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The trick is to call progress only from functions that are called
</span><br>
<span class="quotelev2">&gt;&gt; directly by a user process. Never call progress from a callback  
</span><br>
<span class="quotelev2">&gt;&gt; functions.
</span><br>
<span class="quotelev2">&gt;&gt; The main offenders of this rule are calls to OMPI_FREE_LIST_WAIT().  
</span><br>
<span class="quotelev2">&gt;&gt; They
</span><br>
<span class="quotelev2">&gt;&gt; should be changed to OMPI_FREE_LIST_GET() and dial with NULL return  
</span><br>
<span class="quotelev2">&gt;&gt; value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right -- and it should be easy to find more offenders by having an
</span><br>
<span class="quotelev1">&gt; assert statement soak in the builds for a while (or by default in
</span><br>
<span class="quotelev1">&gt; debug mode).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was if it was ever part of the (or a) design to allow re-entrant
</span><br>
<span class="quotelev1">&gt; calls to progress from the same calling thread ?  It can be done but
</span><br>
<span class="quotelev1">&gt; callers have to have a holistic view of how other components require
</span><br>
<span class="quotelev1">&gt; and make the progress happen -- this isn't compatible with the Open
</span><br>
<span class="quotelev1">&gt; MPI model of independent dynamically loadable components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (QLogic Host Solutions Group, formerly Pathscale)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5096/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5095.php">Christian Bell: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5105.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
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
