<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 14:34:15 2012" -->
<!-- isoreceived="20120627183415" -->
<!-- sent="Wed, 27 Jun 2012 11:34:10 -0700 (PDT)" -->
<!-- isosent="20120627183410" -->
<!-- name="Mohamad Ali Rostami" -->
<!-- email="ma.rostami_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="1340822050.12332.YahooMailNeo_at_web125702.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC9030BDDD2_at_rz-mbx2.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Problem<br>
<strong>From:</strong> Mohamad Ali Rostami (<em>ma.rostami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 14:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19692.php">William Au: "[OMPI users] hang in mpi_allreduce in single linux machine&#254;"</a>
<li><strong>Previous message:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey

Yes, I am from RWTH Aachen, doing Hybrid Parallelization of some code on HPC.

These are the outputs from the command line:

$ mpif90 --showme

gfortran -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl



$ mpif77 --showme
gfortran -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl


About the make file, I pass all of these parameters as FFLAGS!!! It is a lot, I know. :D

gfortran -c -I./ -Isolve/ -Inonlinear/ -Iforward/ -Isimul/ -Isimul/gs/ -Isimul/sgsim/ -Ig_taf/ -Iad_taf/ -Iinverse/ -Iinverse/g_taf/ -Iinverse/ad_taf/ -Initsol/ -Iprops/bas/ -Iuser/none/ -m64 -fno-second-underscore -march=k8 -O3 -ffast-math -funroll-all-loops -fprefetch-loop-arrays -mno-ieee-fp -DG95 -DCLopt -fdefault-integer-8 -frepack-arrays -ftree-vectorize -funit-at-a-time -fopenmp -DPROPS_bas -DSIMUL_sgsim -DUSER_none -DfOMP -DQDDOT -Dhead_base -DSTBAY -DstdFW -Dsetg_taf -DnoHDF -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -Wl,-rpath,/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -L/opt/MPI/openmpi-1.5.3/linux/gcc/lib -lmpi_f90 -lmpi_f77 -lmpi -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl -x f95-cpp-input simul/simul_wrapper.f90 -o simul/simul_wrapper.o -I/opt/MPI/openmpi-1.5.3/linux/gcc/include -fexceptions -pthread
<br>
&nbsp;-I/opt/MPI/openmpi-1.5.3/linux/gcc/lib -I/opt/MPI/openmpi-1.5.3/linux/gcc/lib


Regards,
Ali
RWTH Aachen


________________________________
 From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Wednesday, June 27, 2012 2:59 PM
Subject: RE: [OMPI users] MPI Problem
 

Hi,
&#194;&#160;
Could you please compare the output from &#226;&#128;&#156;mpif77/mpif90 -showme&#226;&#128;&#157; when executed from the command line and from inside the Makefile? Could you also check that the argument to MPI_INIT is a normal INTEGER and is not getting some funny KIND or preprocessor treatment?
&#194;&#160;
Regards,
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
&#194;&#160;
From:users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Mohamad Ali Rostami
Sent: Wednesday, June 27, 2012 9:36 AM
To: Jeff Squyres
Cc: Open MPI Users
Subject: Re: [OMPI users] MPI Problem
&#194;&#160;
Something strange,
&#194;&#160;
By adding all the libraries which I found from mpif90/mpif77 --showme,
Fortran 77 version worked finally,
but Fortran 90 version still has the problem.
&#194;&#160;
Error: There is no specific subroutine for the generic 'mpi_init' at (1)
&#194;&#160;
any idea??
&#194;&#160;

________________________________

From:Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt; 
Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Monday, June 25, 2012 10:22 PM
Subject: Re: [OMPI users] MPI Problem

On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:

&gt; &gt;&#194;&#160; &#194;&#160; mpif90 my_application.f90 -o my_application
&gt; 
&gt; Yes, as I told you out of make file, it works.
&gt; The problem is something strange in the make file.

I'm sorry; I must have mis-parsed your issue, then.&#194;&#160; So just to make sure I understand:

shell$ mpif90 my_application.f90 -o my_application

Works fine, but:

shell$ make
...something that eventually invokes &quot;mpif90 my_application.f90 -o my_application&quot;

doesn't work.&#194;&#160; Right?

If you're invoking the exact same command in both cases (interactive shell and makefile), the *usual* cause of this kind of problem is that the &quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the one that is picked up by your shell.&#194;&#160; Meaning: your PATH has been reset in the sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;, it finds a different one than the one you execute interactively in the shell.

Check what your path is and/or exactly which mpif90 is getting invoked by your Makefile.

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19691/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19692.php">William Au: "[OMPI users] hang in mpi_allreduce in single linux machine&#254;"</a>
<li><strong>Previous message:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19675.php">Iliev, Hristo: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19681.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
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
