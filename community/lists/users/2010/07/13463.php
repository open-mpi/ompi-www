<?
$subject_val = "[OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  2 05:06:49 2010" -->
<!-- isoreceived="20100702090649" -->
<!-- sent="Fri, 02 Jul 2010 11:06:52 +0200" -->
<!-- isosent="20100702090652" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="[OMPI users] [openib] segfault when using openib btl" -->
<!-- id="4C2DAC2C.5030709_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [openib] segfault when using openib btl<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-02 05:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13464.php">Simone Pellegrini: "[OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
<li><strong>Previous message:</strong> <a href="13462.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14067.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14241.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14267.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14324.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14325.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14336.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm observing a random segmentation fault during an internode parallel 
<br>
computation involving the openib btl and OpenMPI-1.4.2 (the same issue 
<br>
can be observed with OpenMPI-1.3.3).
<br>
&nbsp;&nbsp;&nbsp;mpirun (Open MPI) 1.4.2
<br>
&nbsp;&nbsp;&nbsp;Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
&nbsp;&nbsp;&nbsp;[pbn08:02624] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;[pbn08:02624] Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;&nbsp;[pbn08:02624] Signal code: Address not mapped (1)
<br>
&nbsp;&nbsp;&nbsp;[pbn08:02624] Failing at address: (nil)
<br>
&nbsp;&nbsp;&nbsp;[pbn08:02624] [ 0] /lib64/libpthread.so.0 [0x349540e4c0]
<br>
&nbsp;&nbsp;&nbsp;[pbn08:02624] *** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;sh: line 1:  2624 Segmentation fault      
<br>
\/share\/hpc3\/actran_suite\/Actran_11\.0\.rc2\.41872\/RedHatEL\-5\/x86_64\/bin\/actranpy_mp 
<br>
'--apl=/share/hpc3/actran_suite/Actran_11.0.rc2.41872/RedHatEL-5/x86_64/Actran_11.0.rc2.41872' 
<br>
'--inputfile=/work/st25652/LSF_130073_0_47696_0/Case1_3Dreal_m4_n2.dat' 
<br>
'--scratch=/scratch/st25652/LSF_130073_0_47696_0/scratch' '--mem=3200' 
<br>
'--threads=1' '--errorlevel=FATAL' '--t_max=0.1' '--parallel=domain'
<br>
<p>If I choose not to use the openib btl (by using --mca btl self,sm,tcp on 
<br>
the command line, for instance), I don't encounter any problem and the 
<br>
parallel computation runs flawlessly.
<br>
<p>I would like to get some help to be able:
<br>
- to diagnose the issue I'm facing with the openib btl
<br>
- understand why this issue is observed only when using the openib btl 
<br>
and not when using self,sm,tcp
<br>
<p>Any help would be very much appreciated.
<br>
<p>The outputs of ompi_info and the configure scripts of OpenMPI are 
<br>
enclosed to this email, and some information on the infiniband drivers 
<br>
as well.
<br>
<p>Here is the command line used when launching a parallel computation 
<br>
using infiniband:
<br>
&nbsp;&nbsp;&nbsp;path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca 
<br>
btl openib,sm,self,tcp  --display-map --verbose --version --mca 
<br>
mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
<br>
and the command line used if not using infiniband:
<br>
&nbsp;&nbsp;&nbsp;path_to_openmpi/bin/mpirun -np $NPROCESS --hostfile host.list --mca 
<br>
btl self,sm,tcp  --display-map --verbose --version --mca 
<br>
mpi_warn_on_fork 0 --mca btl_openib_want_fork_support 0 [...]
<br>
<p>Thanks,
<br>
Eloi
<br>
<p><p><p><p><p><p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Axis Park Louvain-la-Neuve
Rue Emile Francqui, 1
B-1435 Mont-Saint Guibert
BELGIUM
Company Phone: +32 10 487 959
Company Fax:   +32 10 454 626
</pre>
<p>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13463/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13463/ompi_info--openib">ompi_info--openib</a>
</ul>
<!-- attachment="ompi_info--openib" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13463/ompi_info">ompi_info</a>
</ul>
<!-- attachment="ompi_info" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13463/config">config</a>
</ul>
<!-- attachment="config" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13463/drivers">drivers</a>
</ul>
<!-- attachment="drivers" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13464.php">Simone Pellegrini: "[OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
<li><strong>Previous message:</strong> <a href="13462.php">David Zhang: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Reply:</strong> <a href="13584.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14067.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14241.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14267.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14324.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14325.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14336.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
