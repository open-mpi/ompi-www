<?
$subject_val = "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 12:08:45 2012" -->
<!-- isoreceived="20121029160845" -->
<!-- sent="Mon, 29 Oct 2012 10:08:26 -0600" -->
<!-- isosent="20121029160826" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application" -->
<!-- id="508EA9FA.5000502_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAH_fbj=6cUNcAj08_cThbgkKv2SF_bRXF71ZH2cjQmzoDBiFHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 12:08:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20577.php">John Hearns: "Re: [OMPI users] Tip for HPC cluster admins"</a>
<li><strong>Previous message:</strong> <a href="20575.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20550.php">Mathieu Gontier: "[OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20578.php">Rayson Ho: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20578.php">Rayson Ho: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20580.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mathieu,
<br>
<p>Where is the crash?  Without that info, I'd suggest turning off all the 
<br>
optimisations and just compile it without any flags other than what you 
<br>
need to compile it cleanly (so no /O flags) and see if it crashes.
<br>
<p>Damien
<br>
<p>On 26/10/2012 10:27 AM, Mathieu Gontier wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am willing to use OpenMPI on Windows for a CFD instead of  MPICH2. 
</span><br>
<span class="quotelev1">&gt; My solver is developed if Fortran77 and piloted by a C++ interface; 
</span><br>
<span class="quotelev1">&gt; the both levels call MPI functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I installed OpenMPI-1.6.2-x64 on my system and compiled my code 
</span><br>
<span class="quotelev1">&gt; successfully. But, at the runtime it crashed.
</span><br>
<span class="quotelev1">&gt; I reproduced the problem into a small C application calling a Fortran 
</span><br>
<span class="quotelev1">&gt; function using MPI_Allreduce; when I removed 
</span><br>
<span class="quotelev1">&gt; some aggressive optimization options from the Fortran, it worked:
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Optimization: Disable (/Od)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Inline Function Expansion: Any Suitable (/Ob2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Favor Size or Speed: Favor Fast Code (/Ot)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I removed the same options from the Fortran parts of my solver, 
</span><br>
<span class="quotelev1">&gt; but it still crashes. I tried some others, but it still continues 
</span><br>
<span class="quotelev1">&gt; crashing. Does anybody has an idea? Should I (de)activate some 
</span><br>
<span class="quotelev1">&gt; compilation options? Is there some properties to build and link 
</span><br>
<span class="quotelev1">&gt; against libmpi_f77.lib?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; Mathieu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mathieu Gontier
</span><br>
<span class="quotelev1">&gt; - MSN: mathieu.gontier_at_[hidden] &lt;mailto:mathieu.gontier_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; - Skype: mathieu_gontier
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20577.php">John Hearns: "Re: [OMPI users] Tip for HPC cluster admins"</a>
<li><strong>Previous message:</strong> <a href="20575.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20550.php">Mathieu Gontier: "[OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20578.php">Rayson Ho: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20578.php">Rayson Ho: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20580.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
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
