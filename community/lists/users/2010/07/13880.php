<?
$subject_val = "Re: [OMPI users] undefined reference to `mp_barrier_'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 30 12:17:35 2010" -->
<!-- isoreceived="20100730161735" -->
<!-- sent="Fri, 30 Jul 2010 10:17:25 -0600" -->
<!-- isosent="20100730161725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `mp_barrier_'" -->
<!-- id="C587025C-77DA-4162-A625-03B0619EAA21_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=ApC6A499C3mPCJsGRK5rrN9ZSgyNu1-p6X2nL_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined reference to `mp_barrier_'<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-30 12:17:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13881.php">Allen Barnett: "[OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13879.php">LB: "[OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>In reply to:</strong> <a href="13879.php">LB: "[OMPI users] undefined reference to `mp_barrier_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Reply:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks to me like you have a misspelling in your program - it is looking for something called &quot;mp_barrier&quot;, which doesn't exist in an MPI library.
<br>
<p>Did you mean to use &quot;mpi_barrier&quot;?
<br>
<p>On Jul 30, 2010, at 8:55 AM, LB wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile a Fortran77 program which supports PVM and MPI. When I link compiled objects by
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif77  -B100 -o runme olib/*.o clib/*.o -L/usr/X11R6/lib64 -L/usr/X11R6/lib -lX11 -L$PVM_ROOT/lib/$PVM_ARCH  -lfpvm3 -lpvm3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/intel/fce/9.1.036/lib/libimf.so: warning: warning: feupdateenv is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; olib/vtask.o: In function `vtask_':
</span><br>
<span class="quotelev1">&gt; vtask.f:(.text+0x11c): undefined reference to `mp_barrier_'
</span><br>
<span class="quotelev1">&gt; vtask.f:(.text+0x147): undefined reference to `mp_barrier_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif77 is linked to ifort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding -lmpi to the linker command doesn't change anything. How can I resolve this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; LB
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13881.php">Allen Barnett: "[OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13879.php">LB: "[OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>In reply to:</strong> <a href="13879.php">LB: "[OMPI users] undefined reference to `mp_barrier_'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Reply:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
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
