<?
$subject_val = "Re: [OMPI users] undefined reference to `mp_barrier_'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 30 16:17:03 2010" -->
<!-- isoreceived="20100730201703" -->
<!-- sent="Fri, 30 Jul 2010 22:16:28 +0200" -->
<!-- isosent="20100730201628" -->
<!-- name="LB" -->
<!-- email="lappis.bike_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `mp_barrier_'" -->
<!-- id="AANLkTi=R7ubOFwfCGGH5N4TYUiZ7RMWZBJPYh55A6OQX_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C587025C-77DA-4162-A625-03B0619EAA21_at_open-mpi.org" -->
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
<strong>From:</strong> LB (<em>lappis.bike_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-30 16:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13884.php">Eugene Loh: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13882.php">Jeremy Roberts: "[OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>In reply to:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I made a wrong conclusion that it belongs to MPI. Now I see my mistake.
<br>
Thank you for reply!
<br>
<p><p>On Fri, Jul 30, 2010 at 18:17, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks to me like you have a misspelling in your program - it is looking for
</span><br>
<span class="quotelev1">&gt; something called &quot;mp_barrier&quot;, which doesn't exist in an MPI library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you mean to use &quot;mpi_barrier&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2010, at 8:55 AM, LB wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile a Fortran77 program which supports PVM and MPI. When
</span><br>
<span class="quotelev1">&gt; I link compiled objects by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif77  -B100 -o runme olib/*.o clib/*.o -L/usr/X11R6/lib64
</span><br>
<span class="quotelev1">&gt; -L/usr/X11R6/lib -lX11 -L$PVM_ROOT/lib/$PVM_ARCH  -lfpvm3 -lpvm3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/fce/9.1.036/lib/libimf.so: warning: warning: feupdateenv is not
</span><br>
<span class="quotelev1">&gt; implemented and will always fail
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
<span class="quotelev1">&gt; Adding -lmpi to the linker command doesn't change anything. How can I
</span><br>
<span class="quotelev1">&gt; resolve this problem?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13883/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13884.php">Eugene Loh: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13882.php">Jeremy Roberts: "[OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>In reply to:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
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
