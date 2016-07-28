<?
$subject_val = "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 16:30:54 2012" -->
<!-- isoreceived="20121029203054" -->
<!-- sent="Mon, 29 Oct 2012 21:30:50 +0100" -->
<!-- isosent="20121029203050" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application" -->
<!-- id="CAH_fbjkOEqehS_o365reEaBa+J5gtrpBEHtU1tfxtGiP0H3ZPw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAH_fbjmF785PMp3aRsXZYWGXyned03BB6ZXgoEFxVj=a7YTRHQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-10-29 16:30:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20580.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20580.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys.
<br>
<p>Finally, I compiled with /O: the options is deprecated and, like I did
<br>
previously, I used /Od instead... unsuccessfully.
<br>
<p>I also compiled my code from a script in order to call mpicc.exe /
<br>
mpiCC.exe / mpif77.exe instead of directly calling cl.exe and ifort.exe.
<br>
Only the linkage is done without mpicc.exe because I did not found how to
<br>
call the linker from mpicc.exe (if it can change something, just let me
<br>
know). So, the purpose is to compile with the default OpenMPI options (if
<br>
there is any). But my solver still crashes.
<br>
<p>So, if anybody has an idea...
<br>
<p>Thanks for your help.
<br>
<p>On Mon, Oct 29, 2012 at 7:33 PM, Mathieu Gontier
<br>
&lt;mathieu.gontier_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I crashes into the fortran routine calling a MPI functions. When I run the
</span><br>
<span class="quotelev1">&gt; debugger, the crash seems to be in libmpi_f77.lib, but I cannot go further
</span><br>
<span class="quotelev1">&gt; since the lib is not in debbug mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached to this email the files of my small case. But with
</span><br>
<span class="quotelev1">&gt; less aggressive options, it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not know the lowst optimization level is /O: I am going to try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 29, 2012 at 5:08 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Mathieu,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where is the crash?  Without that info, I'd suggest turning off all the
</span><br>
<span class="quotelev2">&gt;&gt; optimisations and just compile it without any flags other than what you
</span><br>
<span class="quotelev2">&gt;&gt; need to compile it cleanly (so no /O flags) and see if it crashes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 26/10/2012 10:27 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am willing to use OpenMPI on Windows for a CFD instead of  MPICH2. My
</span><br>
<span class="quotelev2">&gt;&gt; solver is developed if Fortran77 and piloted by a C++ interface; the both
</span><br>
<span class="quotelev2">&gt;&gt; levels call MPI functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  So, I installed OpenMPI-1.6.2-x64 on my system and compiled my code
</span><br>
<span class="quotelev2">&gt;&gt; successfully. But, at the runtime it crashed.
</span><br>
<span class="quotelev2">&gt;&gt; I reproduced the problem into a small C application calling a Fortran
</span><br>
<span class="quotelev2">&gt;&gt; function using MPI_Allreduce; when I removed some aggressive optimization
</span><br>
<span class="quotelev2">&gt;&gt; options from the Fortran, it worked:
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Optimization: Disable (/Od)
</span><br>
<span class="quotelev2">&gt;&gt;     -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Inline Function Expansion: Any Suitable (/Ob2)
</span><br>
<span class="quotelev2">&gt;&gt;     -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Favor Size or Speed: Favor Fast Code (/Ot)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  So, I removed the same options from the Fortran parts of my solver, but
</span><br>
<span class="quotelev2">&gt;&gt; it still crashes. I tried some others, but it still continues
</span><br>
<span class="quotelev2">&gt;&gt; crashing. Does anybody has an idea? Should I (de)activate some compilation
</span><br>
<span class="quotelev2">&gt;&gt; options? Is there some properties to build and link against libmpi_f77.lib?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt; Mathieu.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Mathieu Gontier
</span><br>
<span class="quotelev2">&gt;&gt; - MSN: mathieu.gontier_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; - Skype: mathieu_gontier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mathieu Gontier
</span><br>
<span class="quotelev1">&gt; - MSN: mathieu.gontier_at_[hidden]
</span><br>
<span class="quotelev1">&gt; - Skype: mathieu_gontier
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20580.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20580.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
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
