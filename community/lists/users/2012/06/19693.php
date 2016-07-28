<?
$subject_val = "[OMPI users] Fwd:  MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 15:00:41 2012" -->
<!-- isoreceived="20120627190041" -->
<!-- sent="Wed, 27 Jun 2012 19:00:35 +0000" -->
<!-- isosent="20120627190035" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd:  MPI Problem" -->
<!-- id="56B16F00-1747-462B-8BE2-96A4674E7C83_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="57B5A4D0-9EA2-41A0-AC9A-00693C95B382_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Fwd:  MPI Problem<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 15:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
<li><strong>Previous message:</strong> <a href="19692.php">William Au: "[OMPI users] hang in mpi_allreduce in single linux machine&#254;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hit Reply by mistake instead of Reply to all...
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Hristo Iliev &lt;iliev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI Problem
</span><br>
<span class="quotelev1">&gt; Date: 27 &#209;&#142;&#208;&#189;&#208;&#184; 2012 20:58:55 CEST
</span><br>
<span class="quotelev1">&gt; To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I spotted &quot;-fdefault-integer-8&quot; in the long list of parameters that you pass to the compiler in your Makefile. This would make all INTEGER variables to be of the 8-byte kind which is incompatible with the Open MPI interface (its INTEGERs are of the 4-byte kind). Try to change the definition of the error argument to MPI_INIT to INTEGER(KIND=4).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 27.06.2012, at 20:34, Mohamad Ali Rostami wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hey
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I am from RWTH Aachen, doing Hybrid Parallelization of some code on HPC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These are the outputs from the command line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpif90 --showme
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpif77 --showme
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; About the make file, I pass all of these parameters as FFLAGS!!! It is a lot, I know. :D
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -c -I./ -Isolve/ -Inonlinear/ -Iforward/ -Isimul/ -Isimul/gs/ -Isimul/sgsim/ -Ig_taf/ -Iad_taf/ -Iinverse/ -Iinverse/g_taf/ -Iinverse/ad_taf/ -Initsol/ -Iprops/bas/ -Iuser/none/ -m64 -fno-second-underscore -march=k8 -O3 -ffast-math -funroll-all-loops -fprefetch-loop-arrays -mno-ieee-fp -DG95 -DCLopt -fdefault-integer-8 -frepack-arrays -ftree-vectorize -funit-at-a-time -fopenmp -DPROPS_bas -DSIMUL_sgsim -DUSER_none -DfOMP -DQDDOT -Dhead_base -DSTBAY -DstdFW -Dsetg_taf -DnoHDF -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl -x f95-cpp-input simul/simul_wrapper.f90 -o simul/simul_wrapper.o -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Ali
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 27, 2012 2:59 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: RE: [OMPI users] MPI Problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Could you please compare the output from &#226;&#128;&#156;mpif77/mpif90 -showme&#226;&#128;&#157; when executed from the command line and from inside the Makefile? Could you also check that the argument to MPI_INIT is a normal INTEGER and is not getting some funny KIND or preprocessor treatment?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Mohamad Ali Rostami
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 27, 2012 9:36 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI Problem
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Something strange,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; By adding all the libraries which I found from mpif90/mpif77 --showme,
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 77 version worked finally,
</span><br>
<span class="quotelev2">&gt;&gt; but Fortran 90 version still has the problem.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Error: There is no specific subroutine for the generic 'mpi_init' at (1)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; any idea??
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, June 25, 2012 10:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI Problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;    mpif90 my_application.f90 -o my_application
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Yes, as I told you out of make file, it works.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem is something strange in the make file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry; I must have mis-parsed your issue, then.  So just to make sure I understand:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; shell$ mpif90 my_application.f90 -o my_application
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Works fine, but:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; shell$ make
</span><br>
<span class="quotelev2">&gt;&gt; ...something that eventually invokes &quot;mpif90 my_application.f90 -o my_application&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't work.  Right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you're invoking the exact same command in both cases (interactive shell and makefile), the *usual* cause of this kind of problem is that the &quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the one that is picked up by your shell.  Meaning: your PATH has been reset in the sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;, it finds a different one than the one you execute interactively in the shell.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Check what your path is and/or exactly which mpif90 is getting invoked by your Makefile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19693/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
<li><strong>Previous message:</strong> <a href="19692.php">William Au: "[OMPI users] hang in mpi_allreduce in single linux machine&#254;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
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
