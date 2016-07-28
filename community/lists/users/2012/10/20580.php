<?
$subject_val = "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 14:34:00 2012" -->
<!-- isoreceived="20121029183400" -->
<!-- sent="Mon, 29 Oct 2012 19:33:55 +0100" -->
<!-- isosent="20121029183355" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application" -->
<!-- id="CAH_fbjmF785PMp3aRsXZYWGXyned03BB6ZXgoEFxVj=a7YTRHQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="508EA9FA.5000502_at_khubla.com" -->
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
<strong>From:</strong> Mathieu Gontier (<em>mathieu.gontier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 14:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20579.php">Daniel Mitchell: "[OMPI users] Performance/stability impact of thread support"</a>
<li><strong>In reply to:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I crashes into the fortran routine calling a MPI functions. When I run the
<br>
debugger, the crash seems to be in libmpi_f77.lib, but I cannot go further
<br>
since the lib is not in debbug mode.
<br>
<p>Attached to this email the files of my small case. But with
<br>
less aggressive options, it works.
<br>
<p>I did not know the lowst optimization level is /O: I am going to try.
<br>
<p><p>On Mon, Oct 29, 2012 at 5:08 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Mathieu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where is the crash?  Without that info, I'd suggest turning off all the
</span><br>
<span class="quotelev1">&gt; optimisations and just compile it without any flags other than what you
</span><br>
<span class="quotelev1">&gt; need to compile it cleanly (so no /O flags) and see if it crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 26/10/2012 10:27 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am willing to use OpenMPI on Windows for a CFD instead of  MPICH2. My
</span><br>
<span class="quotelev1">&gt; solver is developed if Fortran77 and piloted by a C++ interface; the both
</span><br>
<span class="quotelev1">&gt; levels call MPI functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So, I installed OpenMPI-1.6.2-x64 on my system and compiled my code
</span><br>
<span class="quotelev1">&gt; successfully. But, at the runtime it crashed.
</span><br>
<span class="quotelev1">&gt; I reproduced the problem into a small C application calling a Fortran
</span><br>
<span class="quotelev1">&gt; function using MPI_Allreduce; when I removed some aggressive optimization
</span><br>
<span class="quotelev1">&gt; options from the Fortran, it worked:
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Optimization: Disable (/Od)
</span><br>
<span class="quotelev1">&gt;     -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Inline Function Expansion: Any Suitable (/Ob2)
</span><br>
<span class="quotelev1">&gt;     -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Favor Size or Speed: Favor Fast Code (/Ot)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So, I removed the same options from the Fortran parts of my solver, but
</span><br>
<span class="quotelev1">&gt; it still crashes. I tried some others, but it still continues
</span><br>
<span class="quotelev1">&gt; crashing. Does anybody has an idea? Should I (de)activate some compilation
</span><br>
<span class="quotelev1">&gt; options? Is there some properties to build and link against libmpi_f77.lib?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for your help.
</span><br>
<span class="quotelev1">&gt; Mathieu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Mathieu Gontier
</span><br>
<span class="quotelev1">&gt; - MSN: mathieu.gontier_at_[hidden]
</span><br>
<span class="quotelev1">&gt; - Skype: mathieu_gontier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
Mathieu Gontier
- MSN: mathieu.gontier_at_[hidden]
- Skype: mathieu_gontier


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20580/hello.cpp">hello.cpp</a>
</ul>
<!-- attachment="hello.cpp" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20580/red.f90">red.f90</a>
</ul>
<!-- attachment="red.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20579.php">Daniel Mitchell: "[OMPI users] Performance/stability impact of thread support"</a>
<li><strong>In reply to:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
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
