<?
$subject_val = "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 16:35:50 2012" -->
<!-- isoreceived="20121029203550" -->
<!-- sent="Mon, 29 Oct 2012 14:35:24 -0600" -->
<!-- isosent="20121029203524" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application" -->
<!-- id="508EE88C.9000408_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAH_fbjkOEqehS_o365reEaBa+J5gtrpBEHtU1tfxtGiP0H3ZPw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-10-29 16:35:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Previous message:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a series of error messages or anything at all that you can post 
<br>
here?
<br>
<p>Damien
<br>
<p>On 29/10/2012 2:30 PM, Mathieu Gontier wrote:
<br>
<span class="quotelev1">&gt; Hi guys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I compiled with /O: the options is deprecated and, like I did 
</span><br>
<span class="quotelev1">&gt; previously, I used /Od instead... unsuccessfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also compiled my code from a script in order to call mpicc.exe / 
</span><br>
<span class="quotelev1">&gt; mpiCC.exe / mpif77.exe instead of directly calling cl.exe and 
</span><br>
<span class="quotelev1">&gt; ifort.exe. Only the linkage is done without mpicc.exe because I did 
</span><br>
<span class="quotelev1">&gt; not found how to call the linker from mpicc.exe (if it can change 
</span><br>
<span class="quotelev1">&gt; something, just let me know). So, the purpose is to compile with the 
</span><br>
<span class="quotelev1">&gt; default OpenMPI options (if there is any). But my solver still crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, if anybody has an idea...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 29, 2012 at 7:33 PM, Mathieu Gontier 
</span><br>
<span class="quotelev1">&gt; &lt;mathieu.gontier_at_[hidden] &lt;mailto:mathieu.gontier_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I crashes into the fortran routine calling a MPI functions. When I
</span><br>
<span class="quotelev1">&gt;     run the debugger, the crash seems to be in libmpi_f77.lib, but I
</span><br>
<span class="quotelev1">&gt;     cannot go further since the lib is not in debbug mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Attached to this email the files of my small case. But with
</span><br>
<span class="quotelev1">&gt;     less aggressive options, it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I did not know the lowst optimization level is /O: I am going to try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Mon, Oct 29, 2012 at 5:08 PM, Damien &lt;damien_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Mathieu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Where is the crash?  Without that info, I'd suggest turning
</span><br>
<span class="quotelev1">&gt;         off all the optimisations and just compile it without any
</span><br>
<span class="quotelev1">&gt;         flags other than what you need to compile it cleanly (so no /O
</span><br>
<span class="quotelev1">&gt;         flags) and see if it crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 26/10/2012 10:27 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;         Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I am willing to use OpenMPI on Windows for a CFD instead of
</span><br>
<span class="quotelev2">&gt;&gt;          MPICH2. My solver is developed if Fortran77 and piloted by a
</span><br>
<span class="quotelev2">&gt;&gt;         C++ interface; the both levels call MPI functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         So, I installed OpenMPI-1.6.2-x64 on my system and compiled
</span><br>
<span class="quotelev2">&gt;&gt;         my code successfully. But, at the runtime it crashed.
</span><br>
<span class="quotelev2">&gt;&gt;         I reproduced the problem into a small C application calling a
</span><br>
<span class="quotelev2">&gt;&gt;         Fortran function using MPI_Allreduce; when I removed
</span><br>
<span class="quotelev2">&gt;&gt;         some aggressive optimization options from the Fortran, it worked:
</span><br>
<span class="quotelev2">&gt;&gt;         *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Optimization: Disable (/Od)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Inline Function Expansion: Any Suitable (/Ob2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Favor Size or Speed: Favor Fast Code (/Ot)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         So, I removed the same options from the Fortran parts of my
</span><br>
<span class="quotelev2">&gt;&gt;         solver, but it still crashes. I tried some others, but it
</span><br>
<span class="quotelev2">&gt;&gt;         still continues crashing. Does anybody has an idea? Should I
</span><br>
<span class="quotelev2">&gt;&gt;         (de)activate some compilation options? Is there some
</span><br>
<span class="quotelev2">&gt;&gt;         properties to build and link against libmpi_f77.lib?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt;         Mathieu.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         Mathieu Gontier
</span><br>
<span class="quotelev2">&gt;&gt;         - MSN: mathieu.gontier_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:mathieu.gontier_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         - Skype: mathieu_gontier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Mathieu Gontier
</span><br>
<span class="quotelev1">&gt;     - MSN: mathieu.gontier_at_[hidden] &lt;mailto:mathieu.gontier_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     - Skype: mathieu_gontier
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>Previous message:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20581.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20584.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
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
