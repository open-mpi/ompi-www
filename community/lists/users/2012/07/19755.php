<?
$subject_val = "[OMPI users] Connection refused with openmpi-1.6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 10:59:59 2012" -->
<!-- isoreceived="20120711145959" -->
<!-- sent="Wed, 11 Jul 2012 16:59:40 +0200 (CEST)" -->
<!-- isosent="20120711145940" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Connection refused with openmpi-1.6.0" -->
<!-- id="201207111459.q6BExee4012925_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Connection refused with openmpi-1.6.0<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 10:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Previous message:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Reply:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Maybe reply:</strong> <a href="19757.php">Siegmar Gross: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I get the following error when I try to run my programs with
<br>
openmpi-1.6.0.
<br>
<p>tyr hello_1 52 which mpiexec
<br>
/usr/local/openmpi-1.6_32_cc/bin/mpiexec
<br>
tyr hello_1 53 
<br>
<p>tyr hello_1 51 mpiexec --host tyr,sunpc1 -np 3 hello_1_mpi
<br>
Process 0 of 3 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 3 running on tyr.informatik.hs-fulda.de
<br>
[[4154,1],0][../../../../../openmpi-1.6/ompi/mca/btl/tcp/btl_tcp_endpoint.c:586:m
<br>
ca_btl_tcp_endpoint_start_connect] from tyr.informatik.hs-fulda.de to: sunpc1 
<br>
Unable to connect to the peer 127.0.0.1 on port 1024: Connection refused
<br>
<p>Process 1 of 3 running on sunpc1.informatik.hs-fulda.de
<br>
[[4154,1],1][../../../../../openmpi-1.6/ompi/mca/btl/tcp/btl_tcp_endpoint.c:586:m
<br>
ca_btl_tcp_endpoint_start_connect] from sunpc1.informatik.hs-fulda.de to: tyr 
<br>
Unable to connect to the peer 127.0.0.1 on port 516: Connection refused
<br>
<p>[sunpc1.informatik.hs-fulda.de:24555] *** An error occurred in MPI_Barrier
<br>
[sunpc1.informatik.hs-fulda.de:24555] *** on communicator MPI_COMM_WORLD
<br>
[sunpc1.informatik.hs-fulda.de:24555] *** MPI_ERR_INTERN: internal error
<br>
[sunpc1.informatik.hs-fulda.de:24555] *** MPI_ERRORS_ARE_FATAL: your MPI job will 
<br>
now abort
<br>
...
<br>
<p><p>I have no problems with just one host (in this case &quot;127.0.0.1&quot; should
<br>
work). Why didn't mpiexec use the ip-addresses of the hosts in the
<br>
above example?
<br>
<p><p>tyr hello_1 53 mpiexec --host tyr -np 2 hello_1_mpi
<br>
Process 0 of 2 running on tyr.informatik.hs-fulda.de
<br>
Now 1 slave tasks are sending greetings.
<br>
Greetings from task 1:
<br>
...
<br>
<p><p>tyr hello_1 54 mpiexec --host sunpc1 -np 2 hello_1_mpi
<br>
Process 1 of 2 running on sunpc1.informatik.hs-fulda.de
<br>
Process 0 of 2 running on sunpc1.informatik.hs-fulda.de
<br>
Now 1 slave tasks are sending greetings.
<br>
Greetings from task 1:
<br>
...
<br>
<p><p>The problem doesn't result from the heterogeneity of the two
<br>
hosts because I get the same error with two Sparc-systems or
<br>
two PCs. I didn't have any problems with openmpi-1.2.4.
<br>
<p>tyr hello_1 18 mpiexec -mca btl ^udapl --host tyr,sunpc1,linpc1 \
<br>
-np 4 hello_1_mpi
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 4 running on linpc1
<br>
Process 1 of 4 running on sunpc1.informatik.hs-fulda.de
<br>
Process 3 of 4 running on tyr.informatik.hs-fulda.de
<br>
Now 3 slave tasks are sending greetings.
<br>
Greetings from task 2:
<br>
...
<br>
<p>tyr hello_1 19 which mpiexec
<br>
/usr/local/openmpi-1.2.4/bin/mpiexec
<br>
<p>Do you have any ideas why it doesn't work with openmpi-1.6.0?
<br>
I configured the package with
<br>
<p>../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_32_cc \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32 -library=stlport4&quot; FFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;FCFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;--without-udapl --without-openib \
<br>
&nbsp;&nbsp;--enable-mpi-f90 --with-mpi-f90-size=small \
<br>
&nbsp;&nbsp;--enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;--with-threads=posix --enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
<br>
<p>Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Previous message:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Reply:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Maybe reply:</strong> <a href="19757.php">Siegmar Gross: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
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
