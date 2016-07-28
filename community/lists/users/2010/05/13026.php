<?
$subject_val = "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 04:22:50 2010" -->
<!-- isoreceived="20100512082250" -->
<!-- sent="Wed, 12 May 2010 10:24:25 +0200" -->
<!-- isosent="20100512082425" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version" -->
<!-- id="4BEA65B9.4040505_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BEA2A54.9030408_at_khubla.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 04:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13027.php">Olivier Riff: "[OMPI users] Question on virtual memory allocated"</a>
<li><strong>Previous message:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="13024.php">Damien: "[OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Reply:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>I know there will be more problems, and your feedback is always 
<br>
helpful.  :-)
<br>
<p>Could you please provide me a Visual Studio solution file for MUMPS? I 
<br>
would like to test it a little.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p>On 2010-5-12 6:11 AM, Damien wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Me again (poor Shiqing, I know...).  I've been trying to get the MUMPS 
</span><br>
<span class="quotelev1">&gt; solver running on Windows with Open-MPI.  I can only use the 1.5 
</span><br>
<span class="quotelev1">&gt; branch because that has Fortran support on Windows and 1.4.2 doesn't.  
</span><br>
<span class="quotelev1">&gt; There's a couple of things going wrong:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, calls to MPI_Initialized from Fortran report that MPI isn't 
</span><br>
<span class="quotelev1">&gt; initialised (MUMPS has a MPI_Initialized check).  If I call 
</span><br>
<span class="quotelev1">&gt; MPI_Initialized from C or C++, it is initialized.  I'm not sure what 
</span><br>
<span class="quotelev1">&gt; this means for MPI calls from Fortran, but it could be the cause of 
</span><br>
<span class="quotelev1">&gt; the second problem, which is:  If I bypass the MPI_Initialized check 
</span><br>
<span class="quotelev1">&gt; in MUMPS, I can get the solver to start and run in one process.  If I 
</span><br>
<span class="quotelev1">&gt; try and run 2 or more processes, all the processes ramp to 100% CPU in 
</span><br>
<span class="quotelev1">&gt; the first parallel section, and sit there with no progress.  If I 
</span><br>
<span class="quotelev1">&gt; break in with the debugger, I can usually land on some MPI_IProbe 
</span><br>
<span class="quotelev1">&gt; calls, presumably looking for receives that don't exist, possibly 
</span><br>
<span class="quotelev1">&gt; because the Fortran MPI environment really isn't initialised.  After 
</span><br>
<span class="quotelev1">&gt; many debugger break-ins, I end up in a small group of calls, so it's a 
</span><br>
<span class="quotelev1">&gt; loop waiting for something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For reference, it was yesterday's 1.5 svn trunk, MUMPS 4.9.2, and 
</span><br>
<span class="quotelev1">&gt; Intel Math libraries, and a 32-bit build.  MUMPS is Fortran 90/95 but 
</span><br>
<span class="quotelev1">&gt; uses the F77 MPI interfaces.  It does run with MPICH2.  I realise that 
</span><br>
<span class="quotelev1">&gt; 1.5 is a dev branch, so it might just be too early for this to work.  
</span><br>
<span class="quotelev1">&gt; I'd be grateful for suggestions though.  I can build and test this on 
</span><br>
<span class="quotelev1">&gt; Linux if that would help narrow this down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13027.php">Olivier Riff: "[OMPI users] Question on virtual memory allocated"</a>
<li><strong>Previous message:</strong> <a href="13025.php">jody: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="13024.php">Damien: "[OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Reply:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
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
