<?
$subject_val = "Re: [OMPI users] Progress in MPI_Win_unlock";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 12:08:02 2010" -->
<!-- isoreceived="20100204170802" -->
<!-- sent="Thu, 4 Feb 2010 11:07:53 -0600" -->
<!-- isosent="20100204170753" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress in MPI_Win_unlock" -->
<!-- id="1EDBCCEB-5A90-4C19-BB02-E85F988E288F_at_mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B6A13A1.8010808_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress in MPI_Win_unlock<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 12:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>In reply to:</strong> <a href="11997.php">Dorian Krause: "[OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Reply:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2010, at 6:24 PM, Dorian Krause wrote:
<br>
<p><span class="quotelev1">&gt; Unless it is also specified that a process must eventually exit with  
</span><br>
<span class="quotelev1">&gt; a call to MPI_Finalize (I couldn't find such a requirement),  
</span><br>
<span class="quotelev1">&gt; progress for RMA access to a passive server which does not  
</span><br>
<span class="quotelev1">&gt; participate actively in any MPI communication is not guaranteed,  
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<span class="quotelev1">&gt; (Btw. mvapich2 has the same behavior in this regard)
</span><br>
<p>For the finalize requirement, see MPI-2.2 page 291, lines 36-38:
<br>
<p>------8&lt;------
<br>
This routine cleans up all MPI state. Each process must call  
<br>
MPI_FINALIZE before it exits. Unless there has been a call to  
<br>
MPI_ABORT, each process must ensure that all pending nonblocking  
<br>
communications are (locally) complete before calling MPI_FINALIZE.
<br>
------8&lt;------
<br>
<p>MPI is intentionally vague on progress issues and leaves lots of room  
<br>
for implementation choices.
<br>
<p>I'll let the Open MPI folks answer the questions about their  
<br>
implementation.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Previous message:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>In reply to:</strong> <a href="11997.php">Dorian Krause: "[OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Reply:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
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
