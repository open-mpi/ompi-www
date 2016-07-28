<?
$subject_val = "[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 19 03:20:06 2012" -->
<!-- isoreceived="20120519072006" -->
<!-- sent="Sat, 19 May 2012 00:20:01 -0700" -->
<!-- isosent="20120519072001" -->
<!-- name="Sergiy Bubin" -->
<!-- email="sergb77_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers" -->
<!-- id="COL110-W120B0AD19E798CAC258C97AE1F0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers<br>
<strong>From:</strong> Sergiy Bubin (<em>sergb77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-19 03:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19310.php">Jeff Squyres: "Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Reply:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,I reinstalled/upgraded the operating system on my desktop (now it is Kubuntu 12.04 64 bit) and installed the newest set of intel compilers (ver. 12.1.3 ). Then I built OpenMPI with that set of intel compilers. Everything seems to be fine and I can compile my fortran+MPI code with no problem when I invoke ifort. I should say that I do not actually invoke the &quot;wrapper&quot; mpi compiler. I normally just add flags as MPICOMPFLAGS=$(shell mpif90 --showme:compile) and MPILINKFLAGS=$(shell mpif90 --showme:link) in my makefile. I know it is not the recommended way of doing things but the reason I do that is that I absolutely need to be able to use different fortran compilers to build my fortran code. So far I never had problems using gfortran even though my OpenMPI build is always done with intel compilers. There seemed to be compatibility. However, after the last upgrade of the OS and compilers I can no longer do that. When I use gfortran (ver. 4.6.3) I get messages such as:
<br>
debug/main.o: In function `MAIN__':/home/bubin/fp/pectus_prototype/./src/main.f90:6: undefined reference to `mpi_init_'/home/bubin/fp/pectus_prototype/./src/main.f90:7: undefined reference to `mpi_comm_rank_'/home/bubin/fp/pectus_prototype/./src/main.f90:8: undefined reference to `mpi_comm_size_'/home/bubin/fp/pectus_prototype/./src/main.f90:12: undefined reference to `omp_get_max_threads_'/home/bubin/fp/pectus_prototype/./src/main.f90:13: undefined reference to `omp_get_num_procs_'/home/bubin/fp/pectus_prototype/./src/main.f90:19: undefined reference to `mpi_finalize_'
<br>
I also tried to use the fortran compiler (f95) from the latest Solaris Studio (ver 12.3) together with OpenMPI (which was again built with intel) and I do not have that problem there. The version of OpenMPI source that I have is 1.4.3 (I also tried 1.4.5 - same result) 
<br>
Thus, I can compile my code with ifort or solaris studio f95, but not gfortran. As I said I never had this problem before (have used ubuntu + ifort + gfortran + sun/solaris studio for several years on my desktop computers). I wonder if there is an easy solution here, such as some compiler flags for gfortran that force compatibility. Or, perhaps, I need to rebuild OpenMPI with some other flags. I tried to google something useful but did not find anything that would help me.
<br>
One potential solution to my problem, I imagine, would be to build OpenMPI separately with intel compilers and gnu compilers (in fact it is already prebuilt with gnu compilers by the ubuntu team) and then use one of those builds depending on the fortran compiler for my code. However, that will create inconvenience because I normally use Netbeans or Solaris Studio and switch configurations while working in there (each configuration has its own set of parameters for the makefile; one of the parameter accepted by the makefile is the compiler type -- intel, gnu, or solaris).
<br>
Any help would be appreciated.Sergiy    		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19310.php">Jeff Squyres: "Re: [OMPI users] Make OpenMPI-1.6 fails: Missing files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Reply:</strong> <a href="19312.php">Tim Prince: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
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
