<?
$subject_val = "Re: [OMPI users] Connection refused with openmpi-1.6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 12:12:57 2012" -->
<!-- isoreceived="20120711161257" -->
<!-- sent="Wed, 11 Jul 2012 18:12:32 +0200 (CEST)" -->
<!-- isosent="20120711161232" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection refused with openmpi-1.6.0" -->
<!-- id="201207111612.q6BGCWsA013340_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Connection refused with openmpi-1.6.0" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection refused with openmpi-1.6.0<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 12:12:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="19755.php">Siegmar Gross: "[OMPI users] Connection refused with openmpi-1.6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Reply:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Reuti,
<br>
<p>thank you for your reply.
<br>
<p><span class="quotelev2">&gt; &gt; I get the following error when I try to run my programs with
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.6.0.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 52 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.6_32_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 53 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 51 mpiexec --host tyr,sunpc1 -np 3 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 3 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 3 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; [[4154,1],0][../../../../../openmpi-1.6/ompi/mca/btl/tcp/btl_tcp_endpoint.c:586:m
</span><br>
<span class="quotelev2">&gt; &gt; ca_btl_tcp_endpoint_start_connect] from tyr.informatik.hs-fulda.de to: sunpc1 
</span><br>
<span class="quotelev2">&gt; &gt; Unable to connect to the peer 127.0.0.1 on port 1024: Connection refused
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 3 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; [[4154,1],1][../../../../../openmpi-1.6/ompi/mca/btl/tcp/btl_tcp_endpoint.c:586:m
</span><br>
<span class="quotelev2">&gt; &gt; ca_btl_tcp_endpoint_start_connect] from sunpc1.informatik.hs-fulda.de to: tyr 
</span><br>
<span class="quotelev2">&gt; &gt; Unable to connect to the peer 127.0.0.1 on port 516: Connection refused
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some distributions give the loopback interface also the name of the host. Is there an additonal line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 127.0.0.1 tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in /etc/hosts besides the localhost and interface entry?
</span><br>
<p>No it isn't.
<br>
<p>tyr etc 16 more hosts
<br>
#
<br>
# Internet host table
<br>
#
<br>
::1             localhost       
<br>
127.0.0.1       localhost
<br>
...
<br>
<p>tyr etc 20 ssh sunpc1 head /etc/hosts
<br>
127.0.0.1       localhost       
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><p><span class="quotelev2">&gt; &gt; [sunpc1.informatik.hs-fulda.de:24555] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1.informatik.hs-fulda.de:24555] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1.informatik.hs-fulda.de:24555] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1.informatik.hs-fulda.de:24555] *** MPI_ERRORS_ARE_FATAL: your MPI job will 
</span><br>
<span class="quotelev2">&gt; &gt; now abort
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have no problems with just one host (in this case &quot;127.0.0.1&quot; should
</span><br>
<span class="quotelev2">&gt; &gt; work). Why didn't mpiexec use the ip-addresses of the hosts in the
</span><br>
<span class="quotelev2">&gt; &gt; above example?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 53 mpiexec --host tyr -np 2 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 2 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from task 1:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 54 mpiexec --host sunpc1 -np 2 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 2 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 2 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from task 1:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem doesn't result from the heterogeneity of the two
</span><br>
<span class="quotelev2">&gt; &gt; hosts because I get the same error with two Sparc-systems or
</span><br>
<span class="quotelev2">&gt; &gt; two PCs. I didn't have any problems with openmpi-1.2.4.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 18 mpiexec -mca btl ^udapl --host tyr,sunpc1,linpc1 \
</span><br>
<span class="quotelev2">&gt; &gt; -np 4 hello_1_mpi
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on linpc1
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Now 3 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from task 2:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 19 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.2.4/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any ideas why it doesn't work with openmpi-1.6.0?
</span><br>
<span class="quotelev2">&gt; &gt; I configured the package with
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_32_cc \
</span><br>
<span class="quotelev2">&gt; &gt;  LDFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32 -library=stlport4&quot; FFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  --without-udapl --without-openib \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
</span><br>
<span class="quotelev2">&gt; &gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19758.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19756.php">Reuti: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="19755.php">Siegmar Gross: "[OMPI users] Connection refused with openmpi-1.6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<li><strong>Reply:</strong> <a href="19761.php">Jeff Squyres: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
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
