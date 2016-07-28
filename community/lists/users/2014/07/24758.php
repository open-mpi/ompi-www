<?
$subject_val = "[OMPI users] MPI_T Control Variables";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 12:42:04 2014" -->
<!-- isoreceived="20140711164204" -->
<!-- sent="Fri, 11 Jul 2014 16:42:01 +0000" -->
<!-- isosent="20140711164201" -->
<!-- name="Gallardo, Esthela" -->
<!-- email="egallardo5_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_T Control Variables" -->
<!-- id="1405096920987.69093_at_miners.utep.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_T Control Variables<br>
<strong>From:</strong> Gallardo, Esthela (<em>egallardo5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-11 12:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>I am new to the MPI_T interface, and was trying to run an applications developed by LLNL which queries and lists the values of the control variables available. The tool can be downloaded from the following site:
<br>
<p><a href="https://computation-rnd.llnl.gov/mpi_t/varList.php">https://computation-rnd.llnl.gov/mpi_t/varList.php</a>
<br>
<p><p>I noticed that when I ran the tool, I would encounter the following error:
<br>
<p>[c557-604:121075] Signal: Segmentation fault (11)
<br>
[c557-604:121075] Signal code: Invalid permissions (2)
<br>
[c557-604:121075] Failing at address: 0x2b54ce9d1418
<br>
[c557-604:121075] [ 0] /lib64/libpthread.so.0[0x397060f710]
<br>
[c557-604:121075] [ 1] /work/02282/esthela/MPI/install-openmpi-1.8.1/lib/libmpi.so.1(MPI_T_cvar_read+0xc6)[0x2b54cbe55bd6]
<br>
[c557-604:121075] [ 2] ./varlist(list_cvars+0xda7)[0x402e17]
<br>
[c557-604:121075] [ 3] ./varlist(main+0x347)[0x401e37]
<br>
[c557-604:121075] [ 4] /lib64/libc.so.6(__libc_start_main+0xfd)[0x396fe1ed1d]
<br>
[c557-604:121075] [ 5] ./varlist[0x401a29]
<br>
[c557-604:121075] *** End of error message ***
<br>
<p>I went ahead and tried to write a code that follows the process in varlist to read the control variables, and encountered the same error when I called the following function:
<br>
<p>err=MPI_T_cvar_read(handle,val);
<br>
<p><p>Through a recommendation, I ran both my code and the tool using mvapich, and could not reproduce the error. I don't know if this is a bug or if I didn't configure my installation of OpenMPI correctly. Below is a script that I used to install OpenMPI:
<br>
<p><p>set -e
<br>
rm -fr /work/02282/esthela/MPI/install-openmpi-1.8.1 &amp;&amp; \
<br>
make clean &amp;&amp; \
<br>
./configure --with-cma=yes --prefix=/work/02282/esthela/MPI/install-openmpi-1.8.1 \
<br>
CC=icc CXX=icpc FC=ifort --enable-shared CFLAGS=&quot;-O3 -ip -xHost&quot; \
<br>
CXXFLAGS=&quot;-O3 -ip -xHost&quot; --without-slurm --disable-vt --with-verbs=/opt/ofed \
<br>
--with-verbs-libdir=/opt/ofed/lib64 &amp;&amp; \
<br>
make clean &amp;&amp; \
<br>
make -j4 &amp;&amp; \
<br>
make install?
<br>
<p><p><p>Help in resolving this issue would be greatly appreciated.
<br>
<p><p>Thank you!
<br>
<p><p>Esthela Gallardo
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Previous message:</strong> <a href="24757.php">Alexander Frolov: "Re: [OMPI users] All MPI processes have rank 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
<li><strong>Reply:</strong> <a href="24759.php">Nathan Hjelm: "Re: [OMPI users] MPI_T Control Variables"</a>
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
