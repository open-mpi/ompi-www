<?
$subject_val = "[OMPI users] problem with data transfer in a heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 08:59:03 2012" -->
<!-- isoreceived="20121214135903" -->
<!-- sent="Fri, 14 Dec 2012 14:52:03 +0100 (CET)" -->
<!-- isosent="20121214135203" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with data transfer in a heterogeneous environment" -->
<!-- id="201212141352.qBEDq3fw022674_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with data transfer in a heterogeneous environment<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 08:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>some weeks ago I reported a problem with my matrix multiplication
<br>
program in a heterogeneous environment (little endian and big endian
<br>
machines). The problem occurs in openmpi-1.6.x, openmpi-1.7, and
<br>
openmpi-1.9. Now I implemented a small program which only scatters
<br>
the columns of an integer matrix so that it is easier to see what
<br>
goes wrong. I configured for a heterogeneous environment. Adding
<br>
&quot;-hetero-nodes&quot; and/or &quot;-hetero-apps&quot; on the command line doesn't
<br>
change much as you can see at the end of this email. Everything
<br>
works fine, if I use only little endian or only big endian machines.
<br>
Is it possible to fix the problem or do you know in which file(s)
<br>
I would have to look to find the problem or do you know debug
<br>
switches which would provide more information to solve the problem?
<br>
I used the following command to configure the package on my &quot;Solaris
<br>
10 Sparc&quot; system (the commands for my other systems are similar).
<br>
Next time I will also add &quot;-without-sctp&quot; to get rid of the failures
<br>
on my Linux machines (Open SuSE 12.1).
<br>
<p>../openmpi-1.9a1r27668/configure --prefix=/usr/local/openmpi-1.9_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/sparcv9 \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.7.0_07/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.7.0_07 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p><p>tyr small_prog 501 ompi_info | grep -e Ident -e Hetero -e &quot;Built on&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.9a1r27668
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Wed Dec 12 09:00:13 CET 2012
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
tyr small_prog 502 
<br>
<p><p>tyr small_prog 488 mpiexec -np 6 -host sunpc0,rs0 column_int
<br>
<p>matrix:
<br>
<p>0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p><p>Column of process 1:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 2:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 3:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce71  
<br>
<p>Column of process 4:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce71  
<br>
<p>Column of process 0:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 5:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce71  
<br>
tyr small_prog 489 
<br>
<p><p><p><p>tyr small_prog 489 mpiexec -np 6 -host rs0,sunpc0 column_int
<br>
<p>matrix:
<br>
<p>0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p><p>Column of process 1:
<br>
<p>Column of process 2:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 3:
<br>
0xffdf1234  0xffff5678  0x401234  0x5678  
<br>
<p>Column of process 4:
<br>
0xffdf1234  0xffff5678  0x401234  0x5678  
<br>
<p>Column of process 0:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 5:
<br>
0xffdf1234  0xffff5678  0x401234  0x5678  
<br>
tyr small_prog 490 
<br>
<p><p><p><p>tyr small_prog 491 mpiexec -np 6 -mca btl ^sctp -host rs0,linpc0 column_int
<br>
<p>matrix:
<br>
<p>0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p><p>Column of process 1:
<br>
<p>Column of process 2:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 3:
<br>
0x1234  0x5678  0xf71c1234  0x5678  
<br>
<p>Column of process 4:
<br>
0x1234  0x5678  0xc6011234  0x5678  
<br>
<p>Column of process 0:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 5:
<br>
0x1234  0x5678  0x426f1234  0x5678  
<br>
tyr small_prog 492 
<br>
<p><p><p><p>tyr small_prog 492 mpiexec -np 6 -mca btl ^sctp -host linpc0,rs0 column_int
<br>
<p>matrix:
<br>
<p>0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p><p>Column of process 2:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 1:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 3:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce51  
<br>
<p>Column of process 4:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce51  
<br>
<p>Column of process 0:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 5:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce51  
<br>
tyr small_prog 493 
<br>
<p><p><p>tyr small_prog 498 mpiexec -np 6 -mca btl ^sctp -hetero-nodes \
<br>
&nbsp;&nbsp;-host linpc0,rs0 column_int
<br>
<p>matrix:
<br>
<p>0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p><p>Column of process 1:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 2:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 3:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce31  
<br>
<p>Column of process 4:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce31  
<br>
<p>Column of process 0:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 5:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce31  
<br>
tyr small_prog 499 
<br>
<p><p><p>tyr small_prog 499 mpiexec -np 6 -mca btl ^sctp -hetero-nodes \
<br>
&nbsp;&nbsp;-hetero-apps -host linpc0,rs0 column_int
<br>
<p>matrix:
<br>
<p>0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p><p>Column of process 1:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 2:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 3:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce11  
<br>
<p>Column of process 4:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce11  
<br>
<p>Column of process 0:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 5:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce11  
<br>
tyr small_prog 500 
<br>
<p><p><p>tyr small_prog 500 mpiexec -np 6 -mca btl ^sctp -hetero-apps \
<br>
&nbsp;&nbsp;-host linpc0,rs0 column_int
<br>
<p>matrix:
<br>
<p>0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p><p>Column of process 2:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 1:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 3:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce31  
<br>
<p>Column of process 4:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce31  
<br>
<p>Column of process 0:
<br>
0x12345678  0x12345678  0x12345678  0x12345678  
<br>
<p>Column of process 5:
<br>
0x56780000  0x12340000  0x5678ffff  0x1234ce31  
<br>
tyr small_prog 501 
<br>
<p><p>Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>TEXT/x-sun-c-file attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20948/column_int.c">column_int.c</a>
</ul>
<!-- attachment="column_int.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>Reply:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
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
