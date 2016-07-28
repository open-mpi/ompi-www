<?
$subject_val = "Re: [OMPI users] Strange behaviour OpenMPI in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 18:37:18 2016" -->
<!-- isoreceived="20160122233718" -->
<!-- sent="Sat, 23 Jan 2016 08:37:16 +0900" -->
<!-- isosent="20160122233716" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour OpenMPI in Fortran" -->
<!-- id="CAAkFZ5vXufssFMa_S-_7ouuW1-g5fR4nQ_QFarrQz1Wg9_FyCg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56A23EBD.6000004_at_ippt.pan.pl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour OpenMPI in Fortran<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 18:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28348.php">Emani, Murali: "[OMPI users] Error in BTL with larger number of nodes"</a>
<li><strong>Previous message:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>In reply to:</strong> <a href="28334.php">Pawe&#197;&#130; Jarz&#196;&#153;bski: "[OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ptr is uninitialized when sent by task 0, isn't it ?
<br>
<p>On Friday, January 22, 2016, Pawe&#197;&#130; Jarz&#196;&#153;bski &lt;pjarz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wrote this code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       program hello
</span><br>
<span class="quotelev1">&gt;        implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;        integer :: rank, dest, source, tag, ierr, stat
</span><br>
<span class="quotelev1">&gt;        integer :: n
</span><br>
<span class="quotelev1">&gt;        integer :: taskinfo, ptr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if(rank.eq.0) then
</span><br>
<span class="quotelev1">&gt;         write(*,*) 'Hello'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         n = 20
</span><br>
<span class="quotelev1">&gt;         dest = 1
</span><br>
<span class="quotelev1">&gt;         tag = 1
</span><br>
<span class="quotelev1">&gt;         taskinfo = n
</span><br>
<span class="quotelev1">&gt;         call MPI_SEND(taskinfo, 1, MPI_INTEGER, dest, tag,
</span><br>
<span class="quotelev1">&gt;      1       MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         tag = tag + 1
</span><br>
<span class="quotelev1">&gt;         call MPI_SEND(ptr, 1, MPI_INTEGER, dest, tag,
</span><br>
<span class="quotelev1">&gt;      1       MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;         source = 0
</span><br>
<span class="quotelev1">&gt;         tag = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !        n = 1
</span><br>
<span class="quotelev1">&gt;         call MPI_RECV(taskinfo, 1, MPI_INTEGER, source, tag,
</span><br>
<span class="quotelev1">&gt;      1       MPI_COMM_WORLD, stat, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         n = taskinfo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         tag = tag + 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         write(*,*) 'n1 ', n
</span><br>
<span class="quotelev1">&gt;         write(*,*) 'taskinfo1 ', taskinfo
</span><br>
<span class="quotelev1">&gt;         call MPI_RECV(ptr, 1, MPI_INTEGER, source, tag,
</span><br>
<span class="quotelev1">&gt;      1       MPI_COMM_WORLD, stat, ierr)
</span><br>
<span class="quotelev1">&gt;         write(*,*) 'n2 ', n
</span><br>
<span class="quotelev1">&gt;         write(*,*) 'taskinfo2 ', taskinfo
</span><br>
<span class="quotelev1">&gt;        endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt;       end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I supposed that it should produce this:
</span><br>
<span class="quotelev1">&gt;  Hello
</span><br>
<span class="quotelev1">&gt;  n1           20
</span><br>
<span class="quotelev1">&gt;  taskinfo1           20
</span><br>
<span class="quotelev1">&gt;  n2            20
</span><br>
<span class="quotelev1">&gt;  taskinfo2           20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But in fact it produces this:
</span><br>
<span class="quotelev1">&gt;  Hello
</span><br>
<span class="quotelev1">&gt;  n1           20
</span><br>
<span class="quotelev1">&gt;  taskinfo1           20
</span><br>
<span class="quotelev1">&gt;  n2            2
</span><br>
<span class="quotelev1">&gt;  taskinfo2           20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's strange to me that variable &quot;n&quot; is changed after call to MPI
</span><br>
<span class="quotelev1">&gt; subroutine, but I dont even put it in calls to MPI.
</span><br>
<span class="quotelev1">&gt; If I comment line 13 with &quot; write(*,*) 'Hello' &quot; everything is ok. If I
</span><br>
<span class="quotelev1">&gt; uncomment line 30 with &quot;n = 1&quot;, everything is ok as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anybody explain me what is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested it on:
</span><br>
<span class="quotelev1">&gt;   1) intel fortran compiler 14.0 and openmpi 1.6.5
</span><br>
<span class="quotelev1">&gt;   1) intel fortran compiler 13.1.3 and openmpi 1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Pawel J.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28334.php">http://www.open-mpi.org/community/lists/users/2016/01/28334.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28348.php">Emani, Murali: "[OMPI users] Error in BTL with larger number of nodes"</a>
<li><strong>Previous message:</strong> <a href="28346.php">Matt Thompson: "Re: [OMPI users] Issues Building Open MPI static with Intel Fortran 16"</a>
<li><strong>In reply to:</strong> <a href="28334.php">Pawe&#197;&#130; Jarz&#196;&#153;bski: "[OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
