<?
$subject_val = "Re: [OMPI users] OMPI link error with petsc 2.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 08:15:14 2008" -->
<!-- isoreceived="20081008121514" -->
<!-- sent="Wed, 08 Oct 2008 14:14:50 +0200" -->
<!-- isosent="20081008121450" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI link error with petsc 2.3.3" -->
<!-- id="48ECA43A.1060202_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48EBA06E.3020802_at_sun.com" -->
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
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 08:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6886.php">Terry Dontje: "[OMPI users]  OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I used cc to compile. I tried to use mpicc/mpif90 to compile PETSC, but 
<br>
it changed nothing.
<br>
I still have the same error.
<br>
<p>I'm giving you the whole compile proccess :
<br>
4440p-jobic% gmake solv_ksp
<br>
mpicc -o solv_ksp.o -c -fPIC -m64 -I/opt/lib/petsc 
<br>
-I/opt/lib/petsc/bmake/amd-64-openmpi_no_debug -I/opt/lib/petsc/include 
<br>
-I/opt/SUNWhpc/HPC8.0/include -I/opt/SUNWhpc/HPC8.0/include/amd64 -I. 
<br>
-D__SDIR__=&quot;&quot; solv_ksp.c
<br>
mpicc -fPIC -m64  -o solv_ksp solv_ksp.o 
<br>
-R/opt/lib/petsc/lib/amd-64-openmpi_no_debug 
<br>
-L/opt/lib/petsc/lib/amd-64-openmpi_no_debug -lpetscsnes -lpetscksp 
<br>
-lpetscdm -lpetscmat -lpetscvec -lpetsc   -lX11  -lsunperf -lsunmath -lm 
<br>
-ldl -R/opt/mx/lib/amd64 -R/opt/SUNWhpc/HPC8.0/lib/amd64 
<br>
-R/opt/SUNWhpc/HPC8.0/lib/amd64 -L/opt/SUNWhpc/HPC8.0/lib/amd64 -lmpi 
<br>
-lopen-rte -lopen-pal -lnsl -lrt -lm -lsocket -lmpi_f77 -lmpi_f90 
<br>
-R/opt/SUNWspro/lib/amd64 -R/opt/SUNWspro/lib/amd64 
<br>
-L/opt/SUNWspro/lib/amd64 -R/opt/SUNWspro/prod/lib/amd64 
<br>
-L/opt/SUNWspro/prod/lib/amd64 -R/usr/ccs/lib/amd64 -L/usr/ccs/lib/amd64 
<br>
-R/lib/64 -L/lib/64 -R/usr/lib/64 -L/usr/lib/64 -lm -lfui -lfai -lfsu 
<br>
-lsunmath -lmtsk -lm   -ldl  -R/usr/ucblib
<br>
ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8; file 
<br>
/opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so definition taken
<br>
/usr/bin/rm -f solv_ksp.o
<br>
<p><p>Thanks for your help,
<br>
<p>Yann
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Yann,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How were you trying to link your code with PETSc?  Did you use mpif90 
</span><br>
<span class="quotelev1">&gt; or mpif77 wrappers or were you using cc or mpicc wrappers?  I ran some 
</span><br>
<span class="quotelev1">&gt; basic tests that test the usage of MPI_STATUS_IGNORE using mpif90 (and 
</span><br>
<span class="quotelev1">&gt; mpif77) and it works fine.  However I was able to generate a similar 
</span><br>
<span class="quotelev1">&gt; error as you did when tried to link things with the cc program. 
</span><br>
<span class="quotelev1">&gt; If you are using cc to link could you possibly try to use mpif90 to 
</span><br>
<span class="quotelev1">&gt; link your code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 07 Oct 2008 16:55:14 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Yann JOBIC&quot; &lt;jobic_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OMPI link error with petsc 2.3.3
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;48EB7852.6070404_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt;        (file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8; file 
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14);
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
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
<p><p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6889.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6886.php">Terry Dontje: "[OMPI users]  OMPI link error with petsc 2.3.3"</a>
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
