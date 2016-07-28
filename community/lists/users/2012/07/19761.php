<?
$subject_val = "Re: [OMPI users] Connection refused with openmpi-1.6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 07:26:52 2012" -->
<!-- isoreceived="20120712112652" -->
<!-- sent="Thu, 12 Jul 2012 07:26:48 -0400" -->
<!-- isosent="20120712112648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection refused with openmpi-1.6.0" -->
<!-- id="D4B5C724-FB22-467B-ADF1-478D10B78E82_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201207111612.q6BGCWsA013340_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 07:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19762.php">Jonathan Dursi: "[OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19757.php">Siegmar Gross: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you setting any MCA parameters, such as btl_tcp_if_include or btl_tcp_if_exclude, perchance?  They could be in your environment or in a file, too.
<br>
<p>I ask because we should be skipping the loopback device by default (i.e., it should be covered by the default value of btl_tcp_if_exclude).
<br>
<p>What is the output from ifconfig?
<br>
<p><p>On Jul 11, 2012, at 12:12 PM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hello Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error when I try to run my programs with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.6.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr hello_1 52 which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.6_32_cc/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr hello_1 53 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr hello_1 51 mpiexec --host tyr,sunpc1 -np 3 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 3 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 of 3 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[4154,1],0][../../../../../openmpi-1.6/ompi/mca/btl/tcp/btl_tcp_endpoint.c:586:m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ca_btl_tcp_endpoint_start_connect] from tyr.informatik.hs-fulda.de to: sunpc1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unable to connect to the peer 127.0.0.1 on port 1024: Connection refused
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 of 3 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[4154,1],1][../../../../../openmpi-1.6/ompi/mca/btl/tcp/btl_tcp_endpoint.c:586:m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ca_btl_tcp_endpoint_start_connect] from sunpc1.informatik.hs-fulda.de to: tyr 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unable to connect to the peer 127.0.0.1 on port 516: Connection refused
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some distributions give the loopback interface also the name of the host. Is there an additonal line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1 tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in /etc/hosts besides the localhost and interface entry?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No it isn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr etc 16 more hosts
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Internet host table
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ::1             localhost       
</span><br>
<span class="quotelev1">&gt; 127.0.0.1       localhost
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr etc 20 ssh sunpc1 head /etc/hosts
</span><br>
<span class="quotelev1">&gt; 127.0.0.1       localhost       
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1.informatik.hs-fulda.de:24555] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1.informatik.hs-fulda.de:24555] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1.informatik.hs-fulda.de:24555] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sunpc1.informatik.hs-fulda.de:24555] *** MPI_ERRORS_ARE_FATAL: your MPI job will 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no problems with just one host (in this case &quot;127.0.0.1&quot; should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work). Why didn't mpiexec use the ip-addresses of the hosts in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above example?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr hello_1 53 mpiexec --host tyr -np 2 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 2 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings from task 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr hello_1 54 mpiexec --host sunpc1 -np 2 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 of 2 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 2 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings from task 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem doesn't result from the heterogeneity of the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hosts because I get the same error with two Sparc-systems or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two PCs. I didn't have any problems with openmpi-1.2.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr hello_1 18 mpiexec -mca btl ^udapl --host tyr,sunpc1,linpc1 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 4 hello_1_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 of 4 running on linpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 of 4 running on sunpc1.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now 3 slave tasks are sending greetings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings from task 2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr hello_1 19 which mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.2.4/bin/mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any ideas why it doesn't work with openmpi-1.6.0?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I configured the package with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi-1.6/configure --prefix=/usr/local/openmpi-1.6_32_cc \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LDFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32 -library=stlport4&quot; FFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-udapl --without-openib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-opal-multi-threads \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19762.php">Jonathan Dursi: "[OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19757.php">Siegmar Gross: "Re: [OMPI users] Connection refused with openmpi-1.6.0"</a>
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
