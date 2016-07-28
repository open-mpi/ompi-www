<?
$subject_val = "Re: [OMPI users] OMPI link error with petsc 2.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 11:25:03 2008" -->
<!-- isoreceived="20081007152503" -->
<!-- sent="Tue, 07 Oct 2008 11:24:47 -0400" -->
<!-- isosent="20081007152447" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI link error with petsc 2.3.3" -->
<!-- id="48EB7F3F.8030203_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="84D683CA-9F97-426C-896B-DAE22D3EB291_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI link error with petsc 2.3.3<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 11:24:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6882.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6880.php">Massimo Cafaro: "[OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>In reply to:</strong> <a href="6879.php">Doug Reeder: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6882.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is strange.  We need to look into this a little more.  However, you 
<br>
may be OK as the warning says it is taking the value from libmpi.so 
<br>
which I believe is the correct one.  Does your program run OK?
<br>
<p>Rolf
<br>
<p>On 10/07/08 10:57, Doug Reeder wrote:
<br>
<span class="quotelev1">&gt; Yann,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like somehow the libmpi and libmpi_f90 have different values 
</span><br>
<span class="quotelev1">&gt; for the variable mpi_fortran_status_ignore. It sounds like a configure 
</span><br>
<span class="quotelev1">&gt; problem. You might check the mpi include files to see if you can see 
</span><br>
<span class="quotelev1">&gt; where the different values are coming from.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2008, at 7:55 AM, Yann JOBIC wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi 1.3r19400 (ClusterTools 8.0), with sun studio 12, 
</span><br>
<span class="quotelev2">&gt;&gt; and solaris 10u5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've got this error when linking a PETSc code :
</span><br>
<span class="quotelev2">&gt;&gt; ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
</span><br>
<span class="quotelev2">&gt;&gt;        (file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8; file 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14);
</span><br>
<span class="quotelev2">&gt;&gt;        /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so definition taken
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Isn't it very strange ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you got any idea on the way to solve it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yann
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6882.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6880.php">Massimo Cafaro: "[OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>In reply to:</strong> <a href="6879.php">Doug Reeder: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6882.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
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
