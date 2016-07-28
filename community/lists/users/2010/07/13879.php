<?
$subject_val = "[OMPI users] undefined reference to `mp_barrier_'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 30 10:55:55 2010" -->
<!-- isoreceived="20100730145555" -->
<!-- sent="Fri, 30 Jul 2010 16:55:18 +0200" -->
<!-- isosent="20100730145518" -->
<!-- name="LB" -->
<!-- email="lappis.bike_at_[hidden]" -->
<!-- subject="[OMPI users] undefined reference to `mp_barrier_'" -->
<!-- id="AANLkTi=ApC6A499C3mPCJsGRK5rrN9ZSgyNu1-p6X2nL_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] undefined reference to `mp_barrier_'<br>
<strong>From:</strong> LB (<em>lappis.bike_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-30 10:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Previous message:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Reply:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to compile a Fortran77 program which supports PVM and MPI. When
<br>
I link compiled objects by
<br>
<p>mpif77  -B100 -o runme olib/*.o clib/*.o -L/usr/X11R6/lib64 -L/usr/X11R6/lib
<br>
-lX11 -L$PVM_ROOT/lib/$PVM_ARCH  -lfpvm3 -lpvm3
<br>
<p>I get the following error
<br>
<p>/opt/intel/fce/9.1.036/lib/libimf.so: warning: warning: feupdateenv is not
<br>
implemented and will always fail
<br>
olib/vtask.o: In function `vtask_':
<br>
vtask.f:(.text+0x11c): undefined reference to `mp_barrier_'
<br>
vtask.f:(.text+0x147): undefined reference to `mp_barrier_'
<br>
<p>mpif77 is linked to ifort.
<br>
<p>Adding -lmpi to the linker command doesn't change anything. How can I
<br>
resolve this problem?
<br>
<p>Thank you.
<br>
LB
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Previous message:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Reply:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
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
