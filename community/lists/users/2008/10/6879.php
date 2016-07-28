<?
$subject_val = "Re: [OMPI users] OMPI link error with petsc 2.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 11:05:19 2008" -->
<!-- isoreceived="20081007150519" -->
<!-- sent="Tue, 7 Oct 2008 07:57:05 -0700" -->
<!-- isosent="20081007145705" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI link error with petsc 2.3.3" -->
<!-- id="84D683CA-9F97-426C-896B-DAE22D3EB291_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48EB7852.6070404_at_polytech.univ-mrs.fr" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 10:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6880.php">Massimo Cafaro: "[OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Previous message:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>In reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Reply:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yann,
<br>
<p>It looks like somehow the libmpi and libmpi_f90 have different values  
<br>
for the variable mpi_fortran_status_ignore. It sounds like a  
<br>
configure problem. You might check the mpi include files to see if  
<br>
you can see where the different values are coming from.
<br>
<p>Doug Reeder
<br>
On Oct 7, 2008, at 7:55 AM, Yann JOBIC wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openmpi 1.3r19400 (ClusterTools 8.0), with sun studio 12,  
</span><br>
<span class="quotelev1">&gt; and solaris 10u5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've got this error when linking a PETSc code :
</span><br>
<span class="quotelev1">&gt; ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
</span><br>
<span class="quotelev1">&gt;        (file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8;  
</span><br>
<span class="quotelev1">&gt; file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14);
</span><br>
<span class="quotelev1">&gt;        /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so definition taken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't it very strange ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you got any idea on the way to solve it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6880.php">Massimo Cafaro: "[OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Previous message:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>In reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Reply:</strong> <a href="6881.php">Rolf Vandevaart: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
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
