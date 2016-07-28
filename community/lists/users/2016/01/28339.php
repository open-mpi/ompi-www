<?
$subject_val = "Re: [OMPI users] Strange behaviour OpenMPI in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 10:48:20 2016" -->
<!-- isoreceived="20160122154820" -->
<!-- sent="Fri, 22 Jan 2016 15:48:17 +0000" -->
<!-- isosent="20160122154817" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour OpenMPI in Fortran" -->
<!-- id="0C0B36CB-2BE2-412F-9262-77D449AB6421_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGKz=uLAeRtkAacRXPP7kdpCWGquvLaKrSn6QkMRH3K0L-5tLg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 10:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>

<br>
If you're starting new code, try using the F08 MPI bindings.  Type safety === good.
<br>

<br>

<br>
<span class="quotelev1">&gt; On Jan 22, 2016, at 10:44 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will find the MPI Fortran 2008 bindings to be significantly better w.r.t. MPI types.  See e.g. MPI 3.1 section 17.2.5 where it describes TYPE(MPI_Status), which means that the status object is a first-class type in the Fortran 2008 interface, rather than being an error prone INTEGER array.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't used Fortran 2008 bindings in a nontrivial way yet, but it is my understanding that Open-MPI has a good implementation of them and has for a relatively long time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For multilingual MPI programmers, the Fortran 2008 bindings will be quite easy to understand from the perspective of the C bindings, since they are quite similar in many respects.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 22, 2016 at 7:12 AM, Pawe&#197;&#130; Jarz&#196;&#153;bski &lt;pjarz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thx a lot. I will be more careful with declaration of the MPI variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pawel J.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; W dniu 2016-01-22 o 16:06, Nick Papior pisze:
</span><br>
<span class="quotelev2">&gt;&gt; The status field should be
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; integer :: stat(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps n is located stackwise just after the stat variable, which then overwrites it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2016-01-22 15:37 GMT+01:00 Pawe&#197;&#130; Jarz&#196;&#153;bski &lt;pjarz_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wrote this code:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       program hello
</span><br>
<span class="quotelev2">&gt;&gt;        implicit none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;        integer :: rank, dest, source, tag, ierr, stat
</span><br>
<span class="quotelev2">&gt;&gt;        integer :: n
</span><br>
<span class="quotelev2">&gt;&gt;        integer :: taskinfo, ptr
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        if(rank.eq.0) then
</span><br>
<span class="quotelev2">&gt;&gt;         write(*,*) 'Hello'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         n = 20
</span><br>
<span class="quotelev2">&gt;&gt;         dest = 1
</span><br>
<span class="quotelev2">&gt;&gt;         tag = 1
</span><br>
<span class="quotelev2">&gt;&gt;         taskinfo = n
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_SEND(taskinfo, 1, MPI_INTEGER, dest, tag,
</span><br>
<span class="quotelev2">&gt;&gt;      1       MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         tag = tag + 1
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_SEND(ptr, 1, MPI_INTEGER, dest, tag,
</span><br>
<span class="quotelev2">&gt;&gt;      1       MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        else
</span><br>
<span class="quotelev2">&gt;&gt;         source = 0
</span><br>
<span class="quotelev2">&gt;&gt;         tag = 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; !        n = 1
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_RECV(taskinfo, 1, MPI_INTEGER, source, tag,
</span><br>
<span class="quotelev2">&gt;&gt;      1       MPI_COMM_WORLD, stat, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         n = taskinfo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         tag = tag + 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         write(*,*) 'n1 ', n
</span><br>
<span class="quotelev2">&gt;&gt;         write(*,*) 'taskinfo1 ', taskinfo
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_RECV(ptr, 1, MPI_INTEGER, source, tag,
</span><br>
<span class="quotelev2">&gt;&gt;      1       MPI_COMM_WORLD, stat, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         write(*,*) 'n2 ', n
</span><br>
<span class="quotelev2">&gt;&gt;         write(*,*) 'taskinfo2 ', taskinfo
</span><br>
<span class="quotelev2">&gt;&gt;        endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       end
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I supposed that it should produce this:
</span><br>
<span class="quotelev2">&gt;&gt;  Hello
</span><br>
<span class="quotelev2">&gt;&gt;  n1           20
</span><br>
<span class="quotelev2">&gt;&gt;  taskinfo1           20
</span><br>
<span class="quotelev2">&gt;&gt;  n2            20
</span><br>
<span class="quotelev2">&gt;&gt;  taskinfo2           20
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But in fact it produces this:
</span><br>
<span class="quotelev2">&gt;&gt;  Hello
</span><br>
<span class="quotelev2">&gt;&gt;  n1           20
</span><br>
<span class="quotelev2">&gt;&gt;  taskinfo1           20
</span><br>
<span class="quotelev2">&gt;&gt;  n2            2
</span><br>
<span class="quotelev2">&gt;&gt;  taskinfo2           20
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's strange to me that variable &quot;n&quot; is changed after call to MPI subroutine, but I dont even put it in calls to MPI.
</span><br>
<span class="quotelev2">&gt;&gt; If I comment line 13 with &quot; write(*,*) 'Hello' &quot; everything is ok. If I uncomment line 30 with &quot;n = 1&quot;, everything is ok as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could anybody explain me what is happening?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tested it on:
</span><br>
<span class="quotelev2">&gt;&gt;   1) intel fortran compiler 14.0 and openmpi 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt;   1) intel fortran compiler 13.1.3 and openmpi 1.8.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Pawel J.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28334.php">http://www.open-mpi.org/community/lists/users/2016/01/28334.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28336.php">http://www.open-mpi.org/community/lists/users/2016/01/28336.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28337.php">http://www.open-mpi.org/community/lists/users/2016/01/28337.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28338.php">http://www.open-mpi.org/community/lists/users/2016/01/28338.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28338.php">Jeff Hammond: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
