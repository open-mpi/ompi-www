<?
$subject_val = "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 08:50:23 2010" -->
<!-- isoreceived="20100512125023" -->
<!-- sent="Wed, 12 May 2010 06:49:41 -0600" -->
<!-- isosent="20100512124941" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version" -->
<!-- id="4BEAA3E5.2030700_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BEA65B9.4040505_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 08:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13029.php">Hanjun Kim: "[OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13027.php">Olivier Riff: "[OMPI users] Question on virtual memory allocated"</a>
<li><strong>In reply to:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Absolutely.  I'll get a package of stuff put together.
<br>
<p>Damien
<br>
<p>On 12/05/2010 2:24 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know there will be more problems, and your feedback is always 
</span><br>
<span class="quotelev1">&gt; helpful.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please provide me a Visual Studio solution file for MUMPS? I 
</span><br>
<span class="quotelev1">&gt; would like to test it a little.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-5-12 6:11 AM, Damien wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Me again (poor Shiqing, I know...).  I've been trying to get the 
</span><br>
<span class="quotelev2">&gt;&gt; MUMPS solver running on Windows with Open-MPI.  I can only use the 
</span><br>
<span class="quotelev2">&gt;&gt; 1.5 branch because that has Fortran support on Windows and 1.4.2 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't.  There's a couple of things going wrong:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, calls to MPI_Initialized from Fortran report that MPI isn't 
</span><br>
<span class="quotelev2">&gt;&gt; initialised (MUMPS has a MPI_Initialized check).  If I call 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Initialized from C or C++, it is initialized.  I'm not sure what 
</span><br>
<span class="quotelev2">&gt;&gt; this means for MPI calls from Fortran, but it could be the cause of 
</span><br>
<span class="quotelev2">&gt;&gt; the second problem, which is:  If I bypass the MPI_Initialized check 
</span><br>
<span class="quotelev2">&gt;&gt; in MUMPS, I can get the solver to start and run in one process.  If I 
</span><br>
<span class="quotelev2">&gt;&gt; try and run 2 or more processes, all the processes ramp to 100% CPU 
</span><br>
<span class="quotelev2">&gt;&gt; in the first parallel section, and sit there with no progress.  If I 
</span><br>
<span class="quotelev2">&gt;&gt; break in with the debugger, I can usually land on some MPI_IProbe 
</span><br>
<span class="quotelev2">&gt;&gt; calls, presumably looking for receives that don't exist, possibly 
</span><br>
<span class="quotelev2">&gt;&gt; because the Fortran MPI environment really isn't initialised.  After 
</span><br>
<span class="quotelev2">&gt;&gt; many debugger break-ins, I end up in a small group of calls, so it's 
</span><br>
<span class="quotelev2">&gt;&gt; a loop waiting for something.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For reference, it was yesterday's 1.5 svn trunk, MUMPS 4.9.2, and 
</span><br>
<span class="quotelev2">&gt;&gt; Intel Math libraries, and a 32-bit build.  MUMPS is Fortran 90/95 but 
</span><br>
<span class="quotelev2">&gt;&gt; uses the F77 MPI interfaces.  It does run with MPICH2.  I realise 
</span><br>
<span class="quotelev2">&gt;&gt; that 1.5 is a dev branch, so it might just be too early for this to 
</span><br>
<span class="quotelev2">&gt;&gt; work.  I'd be grateful for suggestions though.  I can build and test 
</span><br>
<span class="quotelev2">&gt;&gt; this on Linux if that would help narrow this down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13029.php">Hanjun Kim: "[OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13027.php">Olivier Riff: "[OMPI users] Question on virtual memory allocated"</a>
<li><strong>In reply to:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
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
