<?
$subject_val = "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 03:43:49 2012" -->
<!-- isoreceived="20121030074349" -->
<!-- sent="Tue, 30 Oct 2012 08:43:44 +0100" -->
<!-- isosent="20121030074344" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application" -->
<!-- id="CAH_fbjn88fCw_gF2=VGaga2ofN3or=8jnPcW_tN1a+=KBUWjug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="508EE88C.9000408_at_khubla.com" -->
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
<strong>Date:</strong> 2012-10-30 03:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20585.php">Paul Kapinos: "Re: [OMPI users] Performance/stability impact of thread support"</a>
<li><strong>Previous message:</strong> <a href="20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>In reply to:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20586.php">Damien Hocking: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20586.php">Damien Hocking: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>The only message I have is:
<br>
[vs2010:09300] [[56007,0],0]-[[56007,1],0] mca_oob_tcp_msg_recv: readv
<br>
failed: Unknown error (108)
<br>
[vs2010:09300] 2 more processes have sent help message
<br>
help-odls-default.txt / odls-default:could-not-kill
<br>
<p>Does it mean something for you?
<br>
<p><p><p>On Mon, Oct 29, 2012 at 9:35 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Is there a series of error messages or anything at all that you can post
</span><br>
<span class="quotelev1">&gt; here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29/10/2012 2:30 PM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi guys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Finally, I compiled with /O: the options is deprecated and, like I did
</span><br>
<span class="quotelev1">&gt; previously, I used /Od instead... unsuccessfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I also compiled my code from a script in order to call mpicc.exe /
</span><br>
<span class="quotelev1">&gt; mpiCC.exe / mpif77.exe instead of directly calling cl.exe and ifort.exe.
</span><br>
<span class="quotelev1">&gt; Only the linkage is done without mpicc.exe because I did not found how to
</span><br>
<span class="quotelev1">&gt; call the linker from mpicc.exe (if it can change something, just let me
</span><br>
<span class="quotelev1">&gt; know). So, the purpose is to compile with the default OpenMPI options (if
</span><br>
<span class="quotelev1">&gt; there is any). But my solver still crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So, if anybody has an idea...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 29, 2012 at 7:33 PM, Mathieu Gontier &lt;
</span><br>
<span class="quotelev1">&gt; mathieu.gontier_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I crashes into the fortran routine calling a MPI functions. When I run
</span><br>
<span class="quotelev2">&gt;&gt; the debugger, the crash seems to be in libmpi_f77.lib, but I cannot go
</span><br>
<span class="quotelev2">&gt;&gt; further since the lib is not in debbug mode.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Attached to this email the files of my small case. But with
</span><br>
<span class="quotelev2">&gt;&gt; less aggressive options, it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I did not know the lowst optimization level is /O: I am going to try.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Oct 29, 2012 at 5:08 PM, Damien &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Mathieu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where is the crash?  Without that info, I'd suggest turning off all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimisations and just compile it without any flags other than what you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to compile it cleanly (so no /O flags) and see if it crashes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 26/10/2012 10:27 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I am willing to use OpenMPI on Windows for a CFD instead of  MPICH2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My solver is developed if Fortran77 and piloted by a C++ interface; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both levels call MPI functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  So, I installed OpenMPI-1.6.2-x64 on my system and compiled my code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully. But, at the runtime it crashed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I reproduced the problem into a small C application calling a Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function using MPI_Allreduce; when I removed some aggressive optimization
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options from the Fortran, it worked:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Optimization: Disable (/Od)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Inline Function Expansion: Any Suitable (/Ob2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Favor Size or Speed: Favor Fast Code (/Ot)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  So, I removed the same options from the Fortran parts of my solver,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it still crashes. I tried some others, but it still continues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; crashing. Does anybody has an idea? Should I (de)activate some compilation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options? Is there some properties to build and link against libmpi_f77.lib?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks for your help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mathieu.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mathieu Gontier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - MSN: mathieu.gontier_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Skype: mathieu_gontier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20584/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20585.php">Paul Kapinos: "Re: [OMPI users] Performance/stability impact of thread support"</a>
<li><strong>Previous message:</strong> <a href="20583.php">rajesh: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>In reply to:</strong> <a href="20582.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20586.php">Damien Hocking: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20586.php">Damien Hocking: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
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
