<?
$subject_val = "[OMPI users] Open MPI timeout problems.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 12:13:02 2008" -->
<!-- isoreceived="20080618161302" -->
<!-- sent="Wed, 18 Jun 2008 12:11:52 -0400" -->
<!-- isosent="20080618161152" -->
<!-- name="Peter Diamessis" -->
<!-- email="pjd38_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI timeout problems." -->
<!-- id="1213805512.12328.29.camel_at_pacific.cee.cornell.edu" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI timeout problems.<br>
<strong>From:</strong> Peter Diamessis (<em>pjd38_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 12:11:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5930.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear folks,
<br>
<p>I would appreciate your help on the following:
<br>
<p>I'm running a parallel CFD code on the Army Research Lab's MJM Linux
<br>
cluster, which uses Open-MPI. I've run the same code on other Linux
<br>
clusters that use MPICH2 and had never run into this problem.
<br>
<p>I'm quite convinced that the bottleneck for my code is this data
<br>
transposition routine, although I have not done any rigorous profiling
<br>
to check on it. This is where 90% of the parallel communication takes
<br>
place. I'm running a CFD code that uses a 3-D rectangular domain which
<br>
is partitioned across processors in such a way that each processor
<br>
stores vertical slabs that are contiguous in the x-direction but shared
<br>
across processors in the y-dir. . When a 2-D Fast Fourier Transform
<br>
(FFT) needs to be done, data is transposed such that the vertical slabs
<br>
are now contiguous in the y-dir. in each processor. 
<br>
<p>The code would normally be run for about 10,000 timesteps. In the
<br>
specific case which blocks, the job crashes after ~200 timesteps and at
<br>
each timestep a large number of 2-D FFTs are performed. For a domain
<br>
with resolution of Nx * Ny * Nz points and P processors, during one FFT,
<br>
each processor performs P Sends and P Receives of a message of size
<br>
(Nx*Ny*Nz)/P, i.e. there are a total of 2*P^2 such Sends/Receives. 
<br>
<p>I've focused on a case using P=32 procs with Nx=256, Ny=128, Nz=175. You
<br>
can see that each FFT involves 2048 communications. I totally rewrote my
<br>
data transposition routine to no longer use specific blocking/non-
<br>
blocking Sends/Receives but to use MPI_ALLTOALL which I would hope is
<br>
optimized for the specific MPI Implementation to do data transpositions.
<br>
Unfortunately, my code still crashes with time-out problems like before.
<br>
<p>This happens for P=4, 8, 16 &amp; 32 processors. The same MPI_ALLTOALL code
<br>
worked fine on a smaller cluster here. Note that in the future I would
<br>
like to work with resolutions of (Nx,Ny,Nz)=(512,256,533) and P=128 or
<br>
256 procs. which will involve an order of magnitude more communication.
<br>
<p>Note that I ran the job by submitting it to an LSF queue system. I've
<br>
attached the script file used for that. I basically enter bsub -x &lt;
<br>
script_openmpi at the command line. 
<br>
<p>When I communicated with a consultant at ARL, he recommended I use
<br>
3 specific script files which I've attached. I believe these enable
<br>
control over some of the MCA parameters. I've experimented with values
<br>
of  btl_mvapi_ib_timeout = 14, 18, 20, 24 and 30 and I still have this
<br>
problem. I am still in contact with this consultant but thought it would
<br>
be good to contact you folks directly.
<br>
<p>Note:
<br>
a) echo $PATH returns: 
<br>
<p>/opt/mpi/x86_64/pgi/6.2/openmpi-1.2/bin:
<br>
/opt/compiler/pgi/linux86-64/6.2/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
<br>
ia32e/bin:/usr/lsf/6.2/linux2.6-glibc2.3-
<br>
ia32e/etc:/usr/cta/modules/3.1.6/bin:
<br>
/usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/gnome/bin:
<br>
.:/usr/lib/java/bin:/opt/gm/bin:/opt/mx/bin:/opt/PST/bin
<br>
<p>b) echo $LD_LIBRARY_PATH returns:
<br>
/opt/mpi/x86_64/pgi/6.2/openmpi-1.2/lib:
<br>
/opt/compiler/pgi/linux86-64/6.2/lib:
<br>
/opt/compiler/pgi/linux86-64/6.2/libso:/usr/lsf/6.2/linux2.6-glibc2.3-
<br>
ia32e/lib
<br>
<p>I've attached the following files:
<br>
1) Gzipped versions of the .out &amp; .err files of the failed job.
<br>
2) ompi_info.log: The output of ompi_info -all
<br>
3) mpirun, mpirun.lsf, openmpi_wrapper: the three script files provided
<br>
to me by the ARL consultant. I store these in my home directory and
<br>
experimented with the MCA parameter btl_mvapi_ib_timeout in mpirun.
<br>
4) The script file script_openmpi that I use to submit the job.
<br>
<p>I am unable to provide you with the config.log file as I cannot find it
<br>
in the top level Open MPI directory.
<br>
<p>I am also unable to provide you with details on the specific cluster
<br>
that I'm running in terms of the network. I know they use Infiniband and
<br>
some more detail may be found on:
<br>
<p><a href="http://www.arl.hpc.mil/Systems/mjm.html">http://www.arl.hpc.mil/Systems/mjm.html</a>
<br>
<p>Some other info:
<br>
a) uname -a returns: 
<br>
Linux l1 2.6.5-7.308-smp.arl-msrc #2 SMP Thu Jan 10 09:18:41 EST 2008
<br>
x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>b) ulimit -l returns: unlimited
<br>
<p>I cannot see a pattern as to which nodes are bad and which are good ...
<br>
<p><p>Note that I found in the mail archives that someone had a similar
<br>
problem in transposing a matrix with 16 million elements. The only
<br>
answer I found in the thread was to increase the value of
<br>
btl_mvapi_ib_timeout to 14 or 16, something I've done already.
<br>
<p>I'm hoping that there must be a way out of this problem. I need to
<br>
get my code running as I'm under pressure to produce results for a
<br>
grant that's paying me.
<br>
<p>If you have any feedback I would be hugely grateful.
<br>
<p>Sincerely,
<br>
<p>Peter Diamessis
<br>
Cornell University
<br>
<p><p><p>






<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5929/308964.err.gz">308964.err.gz</a>
</ul>
<!-- attachment="308964.err.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5929/308964.out.gz">308964.out.gz</a>
</ul>
<!-- attachment="308964.out.gz" -->
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5929/mpirun">mpirun</a>
</ul>
<!-- attachment="mpirun" -->
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5929/mpirun.lsf">mpirun.lsf</a>
</ul>
<!-- attachment="mpirun.lsf" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5929/ompi_info.log__charset_UTF-8">ompi_info.log__charset_UTF-8</a>
</ul>
<!-- attachment="ompi_info.log__charset_UTF-8" -->
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5929/openmpi_wrapper">openmpi_wrapper</a>
</ul>
<!-- attachment="openmpi_wrapper" -->
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5929/script_openmpi">script_openmpi</a>
</ul>
<!-- attachment="script_openmpi" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5930.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
<li><strong>Reply:</strong> <a href="5934.php">Pavel Shamis (Pasha): "Re: [OMPI users] Open MPI timeout problems."</a>
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
