<?
$subject_val = "Re: [OMPI users] Progress in MPI_Win_unlock";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 12:57:48 2010" -->
<!-- isoreceived="20100204175748" -->
<!-- sent="Thu, 04 Feb 2010 18:57:35 +0100" -->
<!-- isosent="20100204175735" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress in MPI_Win_unlock" -->
<!-- id="4B6B0A8F.1070109_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1EDBCCEB-5A90-4C19-BB02-E85F988E288F_at_mcs.anl.gov" -->
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
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 12:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12011.php">Barrett, Brian W: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Reply:</strong> <a href="12011.php">Barrett, Brian W: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>thanks for your answer.
<br>
<p>The question to me is: Is an MPI process supposed to eventually exit or 
<br>
can it be a server process running for eternity?
<br>
In the later case, no progress will be made ...
<br>
<p>I think it might be helpful to users to give a clarification in the 
<br>
standard (e.g. in an &quot;advice to users.&quot;), especially because obviously 
<br>
the target in passive target communication is not allowed to be quite so 
<br>
passive ...
<br>
<p>Dorian
<br>
<p><span class="quotelev1">&gt; For the finalize requirement, see MPI-2.2 page 291, lines 36-38:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------8&lt;------
</span><br>
<span class="quotelev1">&gt; This routine cleans up all MPI state. Each process must call 
</span><br>
<span class="quotelev1">&gt; MPI_FINALIZE before it exits. Unless there has been a call to 
</span><br>
<span class="quotelev1">&gt; MPI_ABORT, each process must ensure that all pending nonblocking 
</span><br>
<span class="quotelev1">&gt; communications are (locally) complete before calling MPI_FINALIZE.
</span><br>
<span class="quotelev1">&gt; ------8&lt;------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI is intentionally vague on progress issues and leaves lots of room 
</span><br>
<span class="quotelev1">&gt; for implementation choices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll let the Open MPI folks answer the questions about their 
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12011.php">Barrett, Brian W: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Reply:</strong> <a href="12011.php">Barrett, Brian W: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
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
