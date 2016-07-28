<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 08:23:49 2010" -->
<!-- isoreceived="20100129132349" -->
<!-- sent="Fri, 29 Jan 2010 07:23:44 -0600" -->
<!-- isosent="20100129132344" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses" -->
<!-- id="876512661001290523o50607800oe4a0e4e05d511f2a_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="705DDE19-F4BE-4A67-A876-F82FC7DF266B_at_cisco.com" -->
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
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 08:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 29, 2010 at 6:59 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jan 28, 2010, at 2:23 PM, Laurence Marks wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If one process dies prematurely in Open MPI (i.e., before MPI_Finalize), all the others &gt; should be automatically killed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This does not seem to be happening. Part of the problem may be (and I
</span><br>
<span class="quotelev2">&gt;&gt; am out of my depth here) that the fortran rtl library (ifort) does not
</span><br>
<span class="quotelev2">&gt;&gt; appear to be dying prematurely, at least there is no signal that I can
</span><br>
<span class="quotelev2">&gt;&gt; catch (I'm not a good c programmer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahh. &#194;&#160;That would be a problem. &#194;&#160;If the process doesn't die, then Open MPI has no way to know that it is hung, and therefore any other MPI processes that are waiting for messages (or whatever) from the hung process will eventually block waiting for input that will never come. &#194;&#160;End result: the entire MPI job hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you double check that this is actually what is happening? &#194;&#160;I.e., that no process is actually exiting? &#194;&#160;It would just be good to confirm that that is actually what is happening (and make me feel better that we don't have some corner case where an MPI process aborting early isn't terminating the entire job properly). &#194;&#160;If you run your MPI job and you see this error occurs, go run &quot;ps&quot; on all the nodes where the job is running and count the number of MPI processes that you see.
</span><br>
<p>I'll try, but sometimes these things are hard to reproduce and I have
<br>
to wait for free nodes to do the test. If I do manage to reproduce the
<br>
issue (I've added ERR= traps, so would have to regress) any thing else
<br>
to look at?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I posted to the Intel ifort site as well, and the response I got (see
</span><br>
<span class="quotelev2">&gt;&gt; link below) is that &quot;There is a feature request in to add this
</span><br>
<span class="quotelev2">&gt;&gt; functionality, but it is not currently on the list for
</span><br>
<span class="quotelev2">&gt;&gt; implementation.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://software.intel.com/en-us/forums/showthread.php?t=71571&amp;o=d&amp;s=lr">http://software.intel.com/en-us/forums/showthread.php?t=71571&amp;o=d&amp;s=lr</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bummer!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm tangentially involved in Fortran/MPI stuff, but I'm not enough of a Fortran expert to know how to help here -- I understand that in your final production code, this problem likely won't occur. &#194;&#160;But that doesn't help while you're writing / debugging the code itself (which is a huge amount of time and effort).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
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
