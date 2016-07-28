<?
$subject_val = "Re: [OMPI users] Strange behaviour OpenMPI in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 10:12:54 2016" -->
<!-- isoreceived="20160122151254" -->
<!-- sent="Fri, 22 Jan 2016 16:12:47 +0100" -->
<!-- isosent="20160122151247" -->
<!-- name="Pawe&#197;&#130; Jarz&#196;&#153;bski" -->
<!-- email="pjarz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour OpenMPI in Fortran" -->
<!-- id="56A246EF.3050908_at_ippt.pan.pl" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc69R6DP6rGO+9RCyB50P8fTipK=iaq9kpiYHfYrGWvLKQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Pawe&#197;&#130; Jarz&#196;&#153;bski (<em>pjarz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 10:12:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thx a lot. I will be more careful with declaration of the MPI variables.
<br>
<p>Pawel J.
<br>
<p>W dniu 2016-01-22 o 16:06, Nick Papior pisze:
<br>
<span class="quotelev1">&gt; The status field should be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; integer :: stat(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps n is located stackwise just after the stat variable, which 
</span><br>
<span class="quotelev1">&gt; then overwrites it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-22 15:37 GMT+01:00 Pawe&#197;&#130; Jarz&#196;&#153;bski &lt;pjarz_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:pjarz_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I wrote this code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           program hello
</span><br>
<span class="quotelev1">&gt;            implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;            integer :: rank, dest, source, tag, ierr, stat
</span><br>
<span class="quotelev1">&gt;            integer :: n
</span><br>
<span class="quotelev1">&gt;            integer :: taskinfo, ptr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;            call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            if(rank.eq.0) then
</span><br>
<span class="quotelev1">&gt;             write(*,*) 'Hello'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             n = 20
</span><br>
<span class="quotelev1">&gt;             dest = 1
</span><br>
<span class="quotelev1">&gt;             tag = 1
</span><br>
<span class="quotelev1">&gt;             taskinfo = n
</span><br>
<span class="quotelev1">&gt;             call MPI_SEND(taskinfo, 1, MPI_INTEGER, dest, tag,
</span><br>
<span class="quotelev1">&gt;          1       MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             tag = tag + 1
</span><br>
<span class="quotelev1">&gt;             call MPI_SEND(ptr, 1, MPI_INTEGER, dest, tag,
</span><br>
<span class="quotelev1">&gt;          1       MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            else
</span><br>
<span class="quotelev1">&gt;             source = 0
</span><br>
<span class="quotelev1">&gt;             tag = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     !        n = 1
</span><br>
<span class="quotelev1">&gt;             call MPI_RECV(taskinfo, 1, MPI_INTEGER, source, tag,
</span><br>
<span class="quotelev1">&gt;          1       MPI_COMM_WORLD, stat, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             n = taskinfo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             tag = tag + 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             write(*,*) 'n1 ', n
</span><br>
<span class="quotelev1">&gt;             write(*,*) 'taskinfo1 ', taskinfo
</span><br>
<span class="quotelev1">&gt;             call MPI_RECV(ptr, 1, MPI_INTEGER, source, tag,
</span><br>
<span class="quotelev1">&gt;          1       MPI_COMM_WORLD, stat, ierr)
</span><br>
<span class="quotelev1">&gt;             write(*,*) 'n2 ', n
</span><br>
<span class="quotelev1">&gt;             write(*,*) 'taskinfo2 ', taskinfo
</span><br>
<span class="quotelev1">&gt;            endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt;           end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I supposed that it should produce this:
</span><br>
<span class="quotelev1">&gt;      Hello
</span><br>
<span class="quotelev1">&gt;      n1           20
</span><br>
<span class="quotelev1">&gt;      taskinfo1           20
</span><br>
<span class="quotelev1">&gt;      n2            20
</span><br>
<span class="quotelev1">&gt;      taskinfo2           20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But in fact it produces this:
</span><br>
<span class="quotelev1">&gt;      Hello
</span><br>
<span class="quotelev1">&gt;      n1           20
</span><br>
<span class="quotelev1">&gt;      taskinfo1           20
</span><br>
<span class="quotelev1">&gt;      n2            2
</span><br>
<span class="quotelev1">&gt;      taskinfo2           20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's strange to me that variable &quot;n&quot; is changed after call to MPI
</span><br>
<span class="quotelev1">&gt;     subroutine, but I dont even put it in calls to MPI.
</span><br>
<span class="quotelev1">&gt;     If I comment line 13 with &quot; write(*,*) 'Hello' &quot; everything is ok.
</span><br>
<span class="quotelev1">&gt;     If I uncomment line 30 with &quot;n = 1&quot;, everything is ok as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Could anybody explain me what is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I tested it on:
</span><br>
<span class="quotelev1">&gt;       1) intel fortran compiler 14.0 and openmpi 1.6.5
</span><br>
<span class="quotelev1">&gt;       1) intel fortran compiler 13.1.3 and openmpi 1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best regards,
</span><br>
<span class="quotelev1">&gt;     Pawel J.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/01/28334.php">http://www.open-mpi.org/community/lists/users/2016/01/28334.php</a>
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
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28336.php">http://www.open-mpi.org/community/lists/users/2016/01/28336.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28337/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
