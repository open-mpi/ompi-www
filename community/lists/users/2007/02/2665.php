<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 11 08:47:03 2007" -->
<!-- isoreceived="20070211134703" -->
<!-- sent="Sun, 11 Feb 2007 08:46:57 -0500" -->
<!-- isosent="20070211134657" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error using MPI_WAITALL" -->
<!-- id="20B3EB3B-F0E5-46F2-BA9A-5D2E1EF23290_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="915775.48479.qm_at_web7610.mail.in.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-11 08:46:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2666.php">matteo.guglielmi_at_[hidden]: "[OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2663.php">Vadivelan Ranjith: "[OMPI users] Error using MPI_WAITALL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This list is for supporting Open MPI, not MPICH (MPICH is an entirely  
<br>
different software package).  You should probably redirect your  
<br>
question to their support lists.
<br>
<p>FWIW, based on the error message, it sounds like you may have an  
<br>
incorrect MPI application with a race condition -- sometimes it  
<br>
works, sometimes it doesn't.  E.g., in some cases, you're passing an  
<br>
invalid MPI request to MPI_WAITALL.  You should double check your  
<br>
code to ensure that every entry in the request array is valid (e.g.,  
<br>
check what happens after you call WAITALL the first time; are all  
<br>
requests re-generated properly?  Is your count accurate?  etc.)
<br>
<p>Good luck.
<br>
<p><p><p>On Feb 10, 2007, at 1:07 PM, Vadivelan Ranjith wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I am using mpich2-1.0.3 to compiling our code. Our code is calling  
</span><br>
<span class="quotelev1">&gt; MPI_WAITALL. We ran the case in intel-Dual core without any problem  
</span><br>
<span class="quotelev1">&gt; and solution was fine. I tried to ran the code in intel quad-core.  
</span><br>
<span class="quotelev1">&gt; Compilation using mpif90 is fine. I started running the executable  
</span><br>
<span class="quotelev1">&gt; file, i got the following error.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Waitall: Invalid MPI_Request, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Waitall(241): MPI_Waitall(count=250, req_array=0x23e52e0,  
</span><br>
<span class="quotelev1">&gt; status_array=0x7fbfffe3a0) failed
</span><br>
<span class="quotelev1">&gt; MPI_Waitall(109): Invalid MPI_Request
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i removed all the lines where MPI-WAITALL is using. Again i  
</span><br>
<span class="quotelev1">&gt; compiled to code using mpif90(mpich) and ran it. Now its running  
</span><br>
<span class="quotelev1">&gt; without any problem. Can you please explain me what is happen here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Velan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s a new way to find what you're looking for - Yahoo! Answers
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2666.php">matteo.guglielmi_at_[hidden]: "[OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2663.php">Vadivelan Ranjith: "[OMPI users] Error using MPI_WAITALL"</a>
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
