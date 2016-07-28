<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 14:19:18 2008" -->
<!-- isoreceived="20080229191918" -->
<!-- sent="Fri, 29 Feb 2008 21:19:08 +0200" -->
<!-- isosent="20080229191908" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather" -->
<!-- id="20080229191908.GB1027_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="29463C87-7555-445D-AEC3-0837C8B7CCDD_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-02-29 14:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5106.php">Jeff Squyres: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="5104.php">John Markus Bj&#248;rndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 28, 2008 at 04:53:11PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; In this particular case, I don't think the solution is that obvious. If 
</span><br>
<span class="quotelev1">&gt; you look at the stack in the original email, you will notice how we get 
</span><br>
<span class="quotelev1">&gt; into this. The problem here, is that the FREE_LIST_WAIT is used to get a 
</span><br>
<span class="quotelev1">&gt; fragment to store an unexpected message. If this macro return NULL (in 
</span><br>
<span class="quotelev1">&gt; other words the PML is unable to store the unexpected message), what do 
</span><br>
<span class="quotelev1">&gt; you expect to happen ? Drop the message ? Ask the BTL to hold it for a 
</span><br>
<span class="quotelev1">&gt; while ? How about ordering ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
In all cases where we use FREE_LIST_WAIT from a callback today a solution
<br>
will not be simple otherwise it would be already implemented. In this
<br>
particular case if we will wait till memory allocation fails it is too
<br>
late to do anything useful, so printing helpful message and aborting is
<br>
good enough. In order to not get into the situation when all memory is
<br>
occupied by unexpected messages we either will have to implement some
<br>
kind of flow control in OB1 (and became more spec compliant in the
<br>
process) or declare all those programs that exhibit that kind of
<br>
behaviour &quot;unrealistic&quot; like we do now. 
<br>
<p><span class="quotelev1">&gt; It is unfortunate to say it, only few days after we had the discussion  
</span><br>
<span class="quotelev1">&gt; about the flow control, but the only correct solution here is to add PML 
</span><br>
<span class="quotelev1">&gt; level flow control ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2008, at 2:55 PM, Christian Bell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 28 Feb 2008, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The trick is to call progress only from functions that are called
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly by a user process. Never call progress from a callback  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The main offenders of this rule are calls to OMPI_FREE_LIST_WAIT().  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be changed to OMPI_FREE_LIST_GET() and dial with NULL return  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right -- and it should be easy to find more offenders by having an
</span><br>
<span class="quotelev2">&gt;&gt; assert statement soak in the builds for a while (or by default in
</span><br>
<span class="quotelev2">&gt;&gt; debug mode).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was if it was ever part of the (or a) design to allow re-entrant
</span><br>
<span class="quotelev2">&gt;&gt; calls to progress from the same calling thread ?  It can be done but
</span><br>
<span class="quotelev2">&gt;&gt; callers have to have a holistic view of how other components require
</span><br>
<span class="quotelev2">&gt;&gt; and make the progress happen -- this isn't compatible with the Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI model of independent dynamically loadable components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; christian.bell_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (QLogic Host Solutions Group, formerly Pathscale)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5106.php">Jeff Squyres: "Re: [OMPI users] processes aborting on MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="5104.php">John Markus Bj&#248;rndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump	with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5096.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
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
