<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 08:00:01 2010" -->
<!-- isoreceived="20100129130001" -->
<!-- sent="Fri, 29 Jan 2010 07:59:55 -0500" -->
<!-- isosent="20100129125955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses" -->
<!-- id="705DDE19-F4BE-4A67-A876-F82FC7DF266B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="876512661001281123h71eb2ba2jbb21e77da80501fc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 07:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>In reply to:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2010, at 2:23 PM, Laurence Marks wrote:
<br>
<p><span class="quotelev2">&gt; &gt; If one process dies prematurely in Open MPI (i.e., before MPI_Finalize), all the others &gt; should be automatically killed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does not seem to be happening. Part of the problem may be (and I
</span><br>
<span class="quotelev1">&gt; am out of my depth here) that the fortran rtl library (ifort) does not
</span><br>
<span class="quotelev1">&gt; appear to be dying prematurely, at least there is no signal that I can
</span><br>
<span class="quotelev1">&gt; catch (I'm not a good c programmer).
</span><br>
<p>Ahh.  That would be a problem.  If the process doesn't die, then Open MPI has no way to know that it is hung, and therefore any other MPI processes that are waiting for messages (or whatever) from the hung process will eventually block waiting for input that will never come.  End result: the entire MPI job hangs.
<br>
<p>Can you double check that this is actually what is happening?  I.e., that no process is actually exiting?  It would just be good to confirm that that is actually what is happening (and make me feel better that we don't have some corner case where an MPI process aborting early isn't terminating the entire job properly).  If you run your MPI job and you see this error occurs, go run &quot;ps&quot; on all the nodes where the job is running and count the number of MPI processes that you see.  
<br>
<p><span class="quotelev1">&gt; I posted to the Intel ifort site as well, and the response I got (see
</span><br>
<span class="quotelev1">&gt; link below) is that &quot;There is a feature request in to add this
</span><br>
<span class="quotelev1">&gt; functionality, but it is not currently on the list for
</span><br>
<span class="quotelev1">&gt; implementation.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/en-us/forums/showthread.php?t=71571&amp;o=d&amp;s=lr">http://software.intel.com/en-us/forums/showthread.php?t=71571&amp;o=d&amp;s=lr</a>
</span><br>
<p>Bummer!
<br>
<p>I'm tangentially involved in Fortran/MPI stuff, but I'm not enough of a Fortran expert to know how to help here -- I understand that in your final production code, this problem likely won't occur.  But that doesn't help while you're writing / debugging the code itself (which is a huge amount of time and effort).  
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>In reply to:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
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
