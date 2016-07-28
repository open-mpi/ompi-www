<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 16:36:57 2006" -->
<!-- isoreceived="20060313213657" -->
<!-- sent="Mon, 13 Mar 2006 22:36:47 +0100" -->
<!-- isosent="20060313213647" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11" -->
<!-- id="4415E5EF.9030107_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F426D58-0F1E-4A35-A5D7-B7A0A6FD9802_at_open-mpi.org" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.Valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 16:36:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have successfully build openmpi-1.1a1r9260 (from the subversion trunk) 
<br>
in 64-bit mode on Solaris Opteron.
<br>
This r9260 tarball incorporates the last patches for Solaris from Brian 
<br>
Barrett.
<br>
<p>In order to accelerate the build I disabled the f90 bindings. My build 
<br>
script is as follows:
<br>
<p>#! /bin/tcsh -v
<br>
setenv CC          &quot;cc&quot;
<br>
setenv CXX         &quot;CC&quot;
<br>
setenv F77         &quot;f95&quot;
<br>
setenv FC          &quot;f95&quot;
<br>
setenv CFLAGS      &quot;-g -O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv CXXFLAGS    &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv FFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
<br>
setenv FCFLAGS     &quot;-O1 -xtarget=opteron -xarch=amd64&quot;
<br>
setenv LD          &quot;ld -64&quot;
<br>
setenv LDFLAGS     &quot;-xtarget=opteron -xarch=amd64&quot;
<br>
setenv CXXLDFLAGS  &quot;-xtarget=opteron -xarch=amd64&quot;
<br>
./configure --prefix=/users/valiron/lib/openmpi-1.1a1r9260 --disable-mpi-f90
<br>
gmake
<br>
gmake install
<br>
<p>- The build is fine
<br>
- The standard output in mpirun is now fixed and behaves as expected
<br>
- Processor binding is functional (mpirun --mca mpi_paffinity_alone 1) 
<br>
and performances are improved with this option (tested on SMP 
<br>
quadriprocessors v40z)
<br>
- The latency is very low. Rotating buffers (each task pass a buffer to 
<br>
its neighbour on a ring) produces the following performance on a 
<br>
quadripro v40z:
<br>
<p>valiron_at_n33 ~/BENCHES &gt; mpirun --mca mpi_paffinity_alone 1 -np 4 rotate
<br>
&nbsp;NPROCS 4
<br>
&nbsp;buf_size, sent/node, iter_time (s), rate/node (MB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   400    0.000003     4.958
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16   400    0.000003     8.758
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32   400    0.000003    23.252
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64   400    0.000003    35.692
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128   400    0.000003    86.414
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256   400    0.000003   162.218
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512   400    0.000003   281.609
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024    40    0.000013   144.927
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048    40    0.000019   210.051
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096    40    0.000014   556.097
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192    40    0.000021   748.555
<br>
&nbsp;&nbsp;&nbsp;&nbsp;16384    40    0.000033   943.303
<br>
&nbsp;&nbsp;&nbsp;&nbsp;32768    40    0.000061  1024.600
<br>
&nbsp;&nbsp;&nbsp;&nbsp;65536    40    0.000112  1116.338
<br>
&nbsp;&nbsp;&nbsp;131072    40    0.000215  1161.857
<br>
&nbsp;&nbsp;&nbsp;262144    40    0.000427  1172.068
<br>
&nbsp;&nbsp;&nbsp;524288    40    0.000964  1037.103
<br>
&nbsp;&nbsp;1048576     8    0.002225   898.679
<br>
&nbsp;&nbsp;2097152     8    0.005317   752.287
<br>
&nbsp;&nbsp;4194304     8    0.008794   909.763
<br>
&nbsp;&nbsp;8388608     8    0.017402   919.429
<br>
&nbsp;16777216     8    0.034699   922.217
<br>
<p>In comparison, I obtain the following data with lam/mpi (lam-7.1.2b28) 
<br>
on the same platform:
<br>
<p>valiron_at_n15 ~/BENCHES &gt; mpirun -ssi rpi usysv -np 4 rotate
<br>
&nbsp;NPROCS 4
<br>
&nbsp;buf_size, sent/node, iter_time (s), rate/node (MB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   400    0.000007     2.160
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16   400    0.000007     4.579
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32   400    0.000007     9.175
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64   400    0.000007    18.350
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128   400    0.000007    34.925
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256   400    0.000007    69.731
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512   400    0.000007   132.998
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024    40    0.000008   230.598
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048    40    0.000010   399.610
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096    40    0.000013   592.014
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192    40    0.000018   845.899
<br>
&nbsp;&nbsp;&nbsp;&nbsp;16384    40    0.000035   902.544
<br>
&nbsp;&nbsp;&nbsp;&nbsp;32768    40    0.000093   668.991
<br>
&nbsp;&nbsp;&nbsp;&nbsp;65536    40    0.000169   738.226
<br>
&nbsp;&nbsp;&nbsp;131072    40    0.000364   687.140
<br>
&nbsp;&nbsp;&nbsp;262144    40    0.000806   620.308
<br>
&nbsp;&nbsp;&nbsp;524288    40    0.001631   613.281
<br>
&nbsp;&nbsp;1048576     8    0.003703   540.086
<br>
&nbsp;&nbsp;2097152     8    0.004849   824.828
<br>
&nbsp;&nbsp;4194304     8    0.009545   838.101
<br>
&nbsp;&nbsp;8388608     8    0.019937   802.523
<br>
&nbsp;16777216     8    0.037989   842.349
<br>
<p>Open-mpi offers a much better latency than lam/mpi (3 us instead of 7 
<br>
us) and also features a higher throughput. This is very promising !
<br>
<p>- Finally I could run successfully my production ab-initio quantum 
<br>
chemistry code DIRCCR12 using open-mpi.
<br>
<p>Congratulations to the open-mpi folks!
<br>
Pierre V.
<br>
<p><p>PS. The open-mpi performances over gigabit ethernet don't seem as good 
<br>
with respect to lam/mpi. I'll make more testing after browsing the 
<br>
ethernet-related messages on the list. I'll also check if parallelizing 
<br>
over two ethernet NICS helps.
<br>
<p><pre>
-- 
Soutenez le mouvement SAUVONS LA RECHERCHE :
<a href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>
       _/_/_/_/    _/       _/       Dr. Pierre VALIRON
      _/     _/   _/      _/   Laboratoire d'Astrophysique
     _/     _/   _/     _/    Observatoire de Grenoble / UJF
    _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
   _/          _/   _/    <a href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
  _/          _/  _/     Mail: Pierre.Valiron_at_[hidden]
 _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
_/          _/_/        
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0847.php">Brian Barrett: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
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
