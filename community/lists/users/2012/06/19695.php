<?
$subject_val = "Re: [OMPI users] Fwd:  MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 15:14:03 2012" -->
<!-- isoreceived="20120627191403" -->
<!-- sent="Wed, 27 Jun 2012 12:13:58 -0700 (PDT)" -->
<!-- isosent="20120627191358" -->
<!-- name="Mohamad Ali Rostami" -->
<!-- email="ma.rostami_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd:  MPI Problem" -->
<!-- id="1340824438.72419.YahooMailNeo_at_web125706.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56B16F00-1747-462B-8BE2-96A4674E7C83_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd:  MPI Problem<br>
<strong>From:</strong> Mohamad Ali Rostami (<em>ma.rostami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 15:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
<li><strong>In reply to:</strong> <a href="19693.php">Iliev, Hristo: "[OMPI users] Fwd:  MPI Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good. :)

It works.&#194;&#160;
integer(kind=4) nprocs, myrank, dest, source, tag, ierr, tagi


Thank you,
Ali
RWTH Aachen



________________________________
 From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Wednesday, June 27, 2012 9:00 PM
Subject: [OMPI users] Fwd:  MPI Problem
 

Hit Reply by mistake instead of Reply to all...



Begin forwarded message:

From: Hristo Iliev &lt;iliev_at_[hidden]&gt;
&gt;
&gt;Subject: Re: [OMPI users] MPI Problem
&gt;
&gt;Date: 27 &#209;&#142;&#208;&#189;&#208;&#184; 2012 20:58:55 CEST
&gt;
&gt;To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;
&gt;
&gt;
&gt;Hi,
&gt;
&gt;
&gt;I spotted &quot;-fdefault-integer-8&quot; in the long list of parameters that you pass to the compiler in your Makefile. This would make all INTEGER variables to be of the 8-byte kind which is incompatible with the Open MPI interface (its INTEGERs are of the 4-byte kind). Try to change the definition of the error argument to MPI_INIT to&#194;&#160;INTEGER(KIND=4).
&gt;
&gt;
&gt;Kind regards,
&gt;
&gt;
&gt;Hristo
&gt;
&gt;
&gt;On 27.06.2012, at 20:34, Mohamad Ali Rostami wrote:
&gt;
&gt;Hey
&gt;&gt;
&gt;&gt;
&gt;&gt;Yes, I am from RWTH Aachen, doing Hybrid Parallelization of some code on HPC.
&gt;&gt;
&gt;&gt;
&gt;&gt;These are the outputs from the command line:
&gt;&gt;
&gt;&gt;
&gt;&gt;$ mpif90 --showme
&gt;&gt;
&gt;&gt;gfortran -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;$ mpif77 --showme
&gt;&gt;gfortran -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;About the make file, I pass all of these parameters as FFLAGS!!! It is a lot, I know. :D
&gt;&gt;
&gt;&gt;
&gt;&gt;gfortran -c -I./ -Isolve/ -Inonlinear/ -Iforward/ -Isimul/ -Isimul/gs/ -Isimul/sgsim/ -Ig_taf/ -Iad_taf/ -Iinverse/ -Iinverse/g_taf/ -Iinverse/ad_taf/ -Initsol/ -Iprops/bas/ -Iuser/none/ -m64 -fno-second-underscore -march=k8 -O3 -ffast-math -funroll-all-loops -fprefetch-loop-arrays -mno-ieee-fp -DG95 -DCLopt -fdefault-integer-8 -frepack-arrays -ftree-vectorize -funit-at-a-time -fopenmp -DPROPS_bas -DSIMUL_sgsim -DUSER_none -DfOMP -DQDDOT -Dhead_base -DSTBAY -DstdFW -Dsetg_taf -DnoHDF -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl -x f95-cpp-input simul/simul_wrapper.f90 -o simul/simul_wrapper.o -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread
<br>
&nbsp;-I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;Regards,
&gt;&gt;Ali
&gt;&gt;RWTH Aachen
&gt;&gt;
&gt;&gt;
&gt;&gt;________________________________
&gt;&gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
&gt;&gt;To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt;&gt;Sent: Wednesday, June 27, 2012 2:59 PM
&gt;&gt;Subject: RE: [OMPI users] MPI Problem
&gt;&gt; 
&gt;&gt;
&gt;&gt;Hi,
&gt;&gt;&#194;&#160;
&gt;&gt;Could you please compare the output from &#226;&#128;&#156;mpif77/mpif90 -showme&#226;&#128;&#157; when executed from the command line and from inside the Makefile? Could you also check that the argument to MPI_INIT is a normal INTEGER and is not getting some funny KIND or preprocessor treatment?
&gt;&gt;&#194;&#160;
&gt;&gt;Regards,
&gt;&gt;--
&gt;&gt;Hristo Iliev, Ph.D. -- High Performance Computing
&gt;&gt;RWTH Aachen University, Center for Computing and Communication
&gt;&gt;&#194;&#160;
&gt;&gt;From:users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Mohamad Ali Rostami
&gt;&gt;Sent: Wednesday, June 27, 2012 9:36 AM
&gt;&gt;To: Jeff Squyres
&gt;&gt;Cc: Open MPI Users
&gt;&gt;Subject: Re: [OMPI users] MPI Problem
&gt;&gt;&#194;&#160;
&gt;&gt;Something strange,
&gt;&gt;&#194;&#160;
&gt;&gt;By adding all the libraries which I found from mpif90/mpif77 --showme,
&gt;&gt;Fortran 77 version worked finally,
&gt;&gt;but Fortran 90 version still has the problem.
&gt;&gt;&#194;&#160;
&gt;&gt;Error: There is no specific subroutine for the generic 'mpi_init' at (1)
&gt;&gt;&#194;&#160;
&gt;&gt;any idea??
&gt;&gt;&#194;&#160;
&gt;&gt;
&gt;&gt;________________________________
&gt;&gt;
&gt;&gt;From:Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
&gt;&gt;Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
&gt;&gt;Sent: Monday, June 25, 2012 10:22 PM
&gt;&gt;Subject: Re: [OMPI users] MPI Problem
&gt;&gt;
&gt;&gt;On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:
&gt;&gt;
&gt;&gt;&gt; &gt;&#194;&#160; &#194;&#160; mpif90 my_application.f90 -o my_application
&gt;&gt;&gt; 
&gt;&gt;&gt; Yes, as I told you out of make file, it works.
&gt;&gt;&gt; The problem is something strange in the make file.
&gt;&gt;
&gt;&gt;I'm sorry; I must have mis-parsed your issue, then.&#194;&#160; So just to make sure I understand:
&gt;&gt;
&gt;&gt;shell$ mpif90 my_application.f90 -o my_application
&gt;&gt;
&gt;&gt;Works fine, but:
&gt;&gt;
&gt;&gt;shell$ make
&gt;&gt;...something that eventually invokes &quot;mpif90 my_application.f90 -o my_application&quot;
&gt;&gt;
&gt;&gt;doesn't work.&#194;&#160; Right?
&gt;&gt;
&gt;&gt;If you're invoking the exact same command in both cases (interactive shell and makefile), the *usual* cause of this kind of problem is that the &quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the
 one that is picked up by your shell.&#194;&#160; Meaning: your PATH has been reset in the sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;, it finds a different one than the one you execute interactively in the shell.
&gt;&gt;
&gt;&gt;Check what your path is and/or exactly which mpif90 is getting invoked by your Makefile.
&gt;&gt;
&gt;&gt;-- 
&gt;&gt;Jeff Squyres
&gt;&gt;jsquyres_at_[hidden]
&gt;&gt;For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;
&gt;--
&gt;Hristo Iliev, Ph.D. -- High Performance Computing,
&gt;RWTH Aachen University, Center for Computing and Communication
&gt;
&gt; 
&gt;

--
Hristo Iliev, Ph.D. -- High Performance Computing,
RWTH Aachen University, Center for Computing and Communication


_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
<li><strong>In reply to:</strong> <a href="19693.php">Iliev, Hristo: "[OMPI users] Fwd:  MPI Problem"</a>
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
