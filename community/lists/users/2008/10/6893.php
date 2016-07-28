<?
$subject_val = "Re: [OMPI users] OMPI link error with petsc 2.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 09:37:53 2008" -->
<!-- isoreceived="20081008133753" -->
<!-- sent="Wed, 08 Oct 2008 09:37:45 -0400" -->
<!-- isosent="20081008133745" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI link error with petsc 2.3.3" -->
<!-- id="48ECB7A9.9000800_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2974.1223471408.16379.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 09:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6894.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6892.php">Ray Muno: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Reply:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yann,
<br>
<p>Your whole compile process in your email below shows you using mpicc to 
<br>
link your executable.  Can you please try and do the following for 
<br>
linkage  instead?
<br>
<p>mpif90 -fPIC -m64  -o solv_ksp solv_ksp.o 
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
-lopen-rte -lopen-pal -lnsl -lrt -lm -lsocket  
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
<p>--td
<br>
<span class="quotelev1">&gt; Date: Wed, 08 Oct 2008 14:14:50 +0200 From: &quot;Yann JOBIC&quot; 
</span><br>
<span class="quotelev1">&gt; &lt;jobic_at_[hidden]&gt; Subject: Re: [OMPI users] OMPI link error 
</span><br>
<span class="quotelev1">&gt; with petsc 2.3.3 To: Open MPI Users &lt;users_at_[hidden]&gt; Message-ID: 
</span><br>
<span class="quotelev1">&gt; &lt;48ECA43A.1060202_at_[hidden]&gt; Content-Type: text/plain; 
</span><br>
<span class="quotelev1">&gt; charset=ISO-8859-1; format=flowed Hello, I used cc to compile. I tried 
</span><br>
<span class="quotelev1">&gt; to use mpicc/mpif90 to compile PETSC, but it changed nothing. I still 
</span><br>
<span class="quotelev1">&gt; have the same error. I'm giving you the whole compile proccess : 
</span><br>
<span class="quotelev1">&gt; 4440p-jobic% gmake solv_ksp mpicc -o solv_ksp.o -c -fPIC -m64 
</span><br>
<span class="quotelev1">&gt; -I/opt/lib/petsc -I/opt/lib/petsc/bmake/amd-64-openmpi_no_debug 
</span><br>
<span class="quotelev1">&gt; -I/opt/lib/petsc/include -I/opt/SUNWhpc/HPC8.0/include 
</span><br>
<span class="quotelev1">&gt; -I/opt/SUNWhpc/HPC8.0/include/amd64 -I. -D__SDIR__=&quot;&quot; solv_ksp.c mpicc 
</span><br>
<span class="quotelev1">&gt; -fPIC -m64 -o solv_ksp solv_ksp.o 
</span><br>
<span class="quotelev1">&gt; -R/opt/lib/petsc/lib/amd-64-openmpi_no_debug 
</span><br>
<span class="quotelev1">&gt; -L/opt/lib/petsc/lib/amd-64-openmpi_no_debug -lpetscsnes -lpetscksp 
</span><br>
<span class="quotelev1">&gt; -lpetscdm -lpetscmat -lpetscvec -lpetsc -lX11 -lsunperf -lsunmath -lm 
</span><br>
<span class="quotelev1">&gt; -ldl -R/opt/mx/lib/amd64 -R/opt/SUNWhpc/HPC8.0/lib/amd64 
</span><br>
<span class="quotelev1">&gt; -R/opt/SUNWhpc/HPC8.0/lib/amd64 -L/opt/SUNWhpc/HPC8.0/lib/amd64 -lmpi 
</span><br>
<span class="quotelev1">&gt; -lopen-rte -lopen-pal -lnsl -lrt -lm -lsocket -lmpi_f77 -lmpi_f90 
</span><br>
<span class="quotelev1">&gt; -R/opt/SUNWspro/lib/amd64 -R/opt/SUNWspro/lib/amd64 
</span><br>
<span class="quotelev1">&gt; -L/opt/SUNWspro/lib/amd64 -R/opt/SUNWspro/prod/lib/amd64 
</span><br>
<span class="quotelev1">&gt; -L/opt/SUNWspro/prod/lib/amd64 -R/usr/ccs/lib/amd64 
</span><br>
<span class="quotelev1">&gt; -L/usr/ccs/lib/amd64 -R/lib/64 -L/lib/64 -R/usr/lib/64 -L/usr/lib/64 
</span><br>
<span class="quotelev1">&gt; -lm -lfui -lfai -lfsu -lsunmath -lmtsk -lm -ldl -R/usr/ucblib ld: 
</span><br>
<span class="quotelev1">&gt; warning: symbol `mpi_fortran_status_ignore_' has differing sizes: 
</span><br>
<span class="quotelev1">&gt; (file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8; file 
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14); 
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so definition taken /usr/bin/rm 
</span><br>
<span class="quotelev1">&gt; -f solv_ksp.o Thanks for your help, Yann Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Yann,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; How were you trying to link your code with PETSc?  Did you use mpif90 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; or mpif77 wrappers or were you using cc or mpicc wrappers?  I ran some 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; basic tests that test the usage of MPI_STATUS_IGNORE using mpif90 (and 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpif77) and it works fine.  However I was able to generate a similar 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; error as you did when tried to link things with the cc program. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If you are using cc to link could you possibly try to use mpif90 to 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; link your code?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --td
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: Tue, 07 Oct 2008 16:55:14 +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; From: &quot;Yann JOBIC&quot; &lt;jobic_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subject: [OMPI users] OMPI link error with petsc 2.3.3
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Message-ID: &lt;48EB7852.6070404_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm using openmpi 1.3r19400 (ClusterTools 8.0), with sun studio 12, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and solaris 10u5
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've got this error when linking a PETSc code :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ld: warning: symbol `mpi_fortran_status_ignore_' has differing sizes:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        (file /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so value=0x8; file 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi_f90.so value=0x14);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        /opt/SUNWhpc/HPC8.0/lib/amd64/libmpi.so definition taken
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Isn't it very strange ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Have you got any idea on the way to solve it ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Many thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Yann
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- ___________________________ Yann JOBIC HPC engineer Polytech 
</span><br>
<span class="quotelev1">&gt; Marseille DME IUSTI-CNRS UMR 6595 Technop?le de Ch?teau Gombert 5 rue 
</span><br>
<span class="quotelev1">&gt; Enrico Fermi 13453 Marseille cedex 13 Tel : (33) 4 91 10 69 39 ou (33) 
</span><br>
<span class="quotelev1">&gt; 4 91 10 69 43 Fax : (33) 4 91 10 69 69
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6894.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6892.php">Ray Muno: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Reply:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
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
