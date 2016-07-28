<?
$subject_val = "Re: [OMPI users] problem with data transfer in a heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 11:15:40 2012" -->
<!-- isoreceived="20121214161540" -->
<!-- sent="Fri, 14 Dec 2012 08:15:29 -0800" -->
<!-- isosent="20121214161529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with data transfer in a heterogeneous environment" -->
<!-- id="729866A5-B866-4534-BC0E-A8DF8076F2CD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212141352.qBEDq3fw022674_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with data transfer in a heterogeneous environment<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 11:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<li><strong>In reply to:</strong> <a href="20948.php">Siegmar Gross: "[OMPI users] problem with data transfer in a heterogeneous environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disturbing, but I don't know if/when someone will address it. The problem really is that few, if any, of the developers have access to hetero systems. So developing and testing hetero support is difficult to impossible.
<br>
<p>I'll file a ticket about it and direct it to the attention of the person who developed the datatype support - he might be able to look at it, or at least provide some direction.
<br>
<p><p>On Dec 14, 2012, at 5:52 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; some weeks ago I reported a problem with my matrix multiplication
</span><br>
<span class="quotelev1">&gt; program in a heterogeneous environment (little endian and big endian
</span><br>
<span class="quotelev1">&gt; machines). The problem occurs in openmpi-1.6.x, openmpi-1.7, and
</span><br>
<span class="quotelev1">&gt; openmpi-1.9. Now I implemented a small program which only scatters
</span><br>
<span class="quotelev1">&gt; the columns of an integer matrix so that it is easier to see what
</span><br>
<span class="quotelev1">&gt; goes wrong. I configured for a heterogeneous environment. Adding
</span><br>
<span class="quotelev1">&gt; &quot;-hetero-nodes&quot; and/or &quot;-hetero-apps&quot; on the command line doesn't
</span><br>
<span class="quotelev1">&gt; change much as you can see at the end of this email. Everything
</span><br>
<span class="quotelev1">&gt; works fine, if I use only little endian or only big endian machines.
</span><br>
<span class="quotelev1">&gt; Is it possible to fix the problem or do you know in which file(s)
</span><br>
<span class="quotelev1">&gt; I would have to look to find the problem or do you know debug
</span><br>
<span class="quotelev1">&gt; switches which would provide more information to solve the problem?
</span><br>
<span class="quotelev1">&gt; I used the following command to configure the package on my &quot;Solaris
</span><br>
<span class="quotelev1">&gt; 10 Sparc&quot; system (the commands for my other systems are similar).
</span><br>
<span class="quotelev1">&gt; Next time I will also add &quot;-without-sctp&quot; to get rid of the failures
</span><br>
<span class="quotelev1">&gt; on my Linux machines (Open SuSE 12.1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r27668/configure --prefix=/usr/local/openmpi-1.9_64_cc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/sparcv9 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.7.0_07/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.7.0_07 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --without-udapl \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 501 ompi_info | grep -e Ident -e Hetero -e &quot;Built on&quot;
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.9a1r27668
</span><br>
<span class="quotelev1">&gt;                Built on: Wed Dec 12 09:00:13 CET 2012
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; tyr small_prog 502 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 488 mpiexec -np 6 -host sunpc0,rs0 column_int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 1:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 2:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 3:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce71  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 4:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce71  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 0:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 5:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce71  
</span><br>
<span class="quotelev1">&gt; tyr small_prog 489 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 489 mpiexec -np 6 -host rs0,sunpc0 column_int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 2:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 3:
</span><br>
<span class="quotelev1">&gt; 0xffdf1234  0xffff5678  0x401234  0x5678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 4:
</span><br>
<span class="quotelev1">&gt; 0xffdf1234  0xffff5678  0x401234  0x5678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 0:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 5:
</span><br>
<span class="quotelev1">&gt; 0xffdf1234  0xffff5678  0x401234  0x5678  
</span><br>
<span class="quotelev1">&gt; tyr small_prog 490 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 491 mpiexec -np 6 -mca btl ^sctp -host rs0,linpc0 column_int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 2:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 3:
</span><br>
<span class="quotelev1">&gt; 0x1234  0x5678  0xf71c1234  0x5678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 4:
</span><br>
<span class="quotelev1">&gt; 0x1234  0x5678  0xc6011234  0x5678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 0:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 5:
</span><br>
<span class="quotelev1">&gt; 0x1234  0x5678  0x426f1234  0x5678  
</span><br>
<span class="quotelev1">&gt; tyr small_prog 492 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 492 mpiexec -np 6 -mca btl ^sctp -host linpc0,rs0 column_int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 2:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 1:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 3:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce51  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 4:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce51  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 0:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 5:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce51  
</span><br>
<span class="quotelev1">&gt; tyr small_prog 493 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 498 mpiexec -np 6 -mca btl ^sctp -hetero-nodes \
</span><br>
<span class="quotelev1">&gt;  -host linpc0,rs0 column_int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 1:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 2:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 3:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce31  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 4:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce31  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 0:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 5:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce31  
</span><br>
<span class="quotelev1">&gt; tyr small_prog 499 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 499 mpiexec -np 6 -mca btl ^sctp -hetero-nodes \
</span><br>
<span class="quotelev1">&gt;  -hetero-apps -host linpc0,rs0 column_int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 1:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 2:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 3:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce11  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 4:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce11  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 0:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 5:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce11  
</span><br>
<span class="quotelev1">&gt; tyr small_prog 500 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 500 mpiexec -np 6 -mca btl ^sctp -hetero-apps \
</span><br>
<span class="quotelev1">&gt;  -host linpc0,rs0 column_int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 2:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 1:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 3:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce31  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 4:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce31  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 0:
</span><br>
<span class="quotelev1">&gt; 0x12345678  0x12345678  0x12345678  0x12345678  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Column of process 5:
</span><br>
<span class="quotelev1">&gt; 0x56780000  0x12340000  0x5678ffff  0x1234ce31  
</span><br>
<span class="quotelev1">&gt; tyr small_prog 501 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance.
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
<span class="quotelev1">&gt; /* Small program  that creates and prints column vectors of a matrix.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * An MPI data type is defined by its size, its contents, and its
</span><br>
<span class="quotelev1">&gt; * extent. When multiple elements of the same size are used in a
</span><br>
<span class="quotelev1">&gt; * contiguous manner (e.g. in a &quot;scatter&quot; operation or an operation
</span><br>
<span class="quotelev1">&gt; * with &quot;count&quot; greater than one) the extent is used to compute where
</span><br>
<span class="quotelev1">&gt; * the next element will start. The extent for a derived data type is
</span><br>
<span class="quotelev1">&gt; * as big as the size of the derived data type so that the first
</span><br>
<span class="quotelev1">&gt; * elements of the second structure will start after the last element
</span><br>
<span class="quotelev1">&gt; * of the first structure, i.e., you have to &quot;resize&quot; the new data
</span><br>
<span class="quotelev1">&gt; * type if you want to send it multiple times (count &gt; 1) or to
</span><br>
<span class="quotelev1">&gt; * scatter/gather it to many processes. Restrict the extent of the
</span><br>
<span class="quotelev1">&gt; * derived data type for a strided vector in such a way that it looks
</span><br>
<span class="quotelev1">&gt; * like just one element if it is used with &quot;count &gt; 1&quot; or in a
</span><br>
<span class="quotelev1">&gt; * scatter/gather operation.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Compiling:
</span><br>
<span class="quotelev1">&gt; *   Store executable(s) into local directory.
</span><br>
<span class="quotelev1">&gt; *     mpicc -o &lt;program name&gt; &lt;source code file name&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   Store executable(s) into predefined directories.
</span><br>
<span class="quotelev1">&gt; *     make
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   Make program(s) automatically on all specified hosts. You must
</span><br>
<span class="quotelev1">&gt; *   edit the file &quot;make_compile&quot; and specify your host names before
</span><br>
<span class="quotelev1">&gt; *   you execute it.
</span><br>
<span class="quotelev1">&gt; *     make_compile
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Running:
</span><br>
<span class="quotelev1">&gt; *   LAM-MPI:
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot \
</span><br>
<span class="quotelev1">&gt; *	 -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt; : \
</span><br>
<span class="quotelev1">&gt; *	 -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     lamboot [-v] [&lt;host file&gt;]
</span><br>
<span class="quotelev1">&gt; *       mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *	 or
</span><br>
<span class="quotelev1">&gt; *	 mpiexec [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *     lamhalt
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   OpenMPI:
</span><br>
<span class="quotelev1">&gt; *     &quot;host1&quot;, &quot;host2&quot;, and so on can all have the same name,
</span><br>
<span class="quotelev1">&gt; *     if you want to start a virtual computer with some virtual
</span><br>
<span class="quotelev1">&gt; *     cpu's on the local host. The name &quot;localhost&quot; is allowed
</span><br>
<span class="quotelev1">&gt; *     as well.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *     mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec --host &lt;host1,host2,...&gt; \
</span><br>
<span class="quotelev1">&gt; *	 -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -hostfile &lt;hostfile name&gt; \
</span><br>
<span class="quotelev1">&gt; *	 -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -app &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Cleaning:
</span><br>
<span class="quotelev1">&gt; *   local computer:
</span><br>
<span class="quotelev1">&gt; *     rm &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     make clean_all
</span><br>
<span class="quotelev1">&gt; *   on all specified computers (you must edit the file &quot;make_clean_all&quot;
</span><br>
<span class="quotelev1">&gt; *   and specify your host names before you execute it.
</span><br>
<span class="quotelev1">&gt; *     make_clean_all
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * File: column_int.c			Author: S. Gross
</span><br>
<span class="quotelev1">&gt; * Date: 14.12.2012
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define	P		  4		/* # of rows			*/
</span><br>
<span class="quotelev1">&gt; #define Q		  6		/* # of columns			*/
</span><br>
<span class="quotelev1">&gt; #define NUM_ELEM_PER_LINE 6		/* to print a vector		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int ntasks,				/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt;      mytid,				/* my task id			*/
</span><br>
<span class="quotelev1">&gt;      i, j,				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt;      matrix[P][Q],
</span><br>
<span class="quotelev1">&gt;      column[P],
</span><br>
<span class="quotelev1">&gt;      tmp;				/* temporary value		*/
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype	column_t,		/* column type (strided vector)	*/
</span><br>
<span class="quotelev1">&gt; 		tmp_column_t;		/* needed to resize the extent	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;  /* check that we have the correct number of processes in our universe	*/
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if (ntasks != Q)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      fprintf (stderr, &quot;\n\nI need exactly %d processes.\n\n&quot;
</span><br>
<span class="quotelev1">&gt; 	       &quot;Usage:\n&quot;
</span><br>
<span class="quotelev1">&gt; 	       &quot;  mpiexec -np %d %s\n\n&quot;, Q, Q, argv[0]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (ntasks != Q)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;    exit (EXIT_SUCCESS);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* Build the new type for a strided vector and resize the extent
</span><br>
<span class="quotelev1">&gt;   * of the new datatype in such a way that the extent of the whole
</span><br>
<span class="quotelev1">&gt;   * column looks like just one element.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  MPI_Type_vector (P, 1, Q, MPI_INT, &amp;tmp_column_t);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_create_resized (tmp_column_t, 0, sizeof (int), &amp;column_t);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit (&amp;column_t);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_free (&amp;tmp_column_t);
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    tmp = 1;
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; P; ++i)		/* initialize matrix		*/
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      for (j = 0; j &lt; Q; ++j)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	/*	matrix[i][j] = tmp++; */
</span><br>
<span class="quotelev1">&gt; 	matrix[i][j] = 0x12345678;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\nmatrix:\n\n&quot;);		/* print matrix			*/
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; P; ++i)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      for (j = 0; j &lt; Q; ++j)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	printf (&quot;%#x  &quot;, matrix[i][j]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Scatter (matrix, 1, column_t, column, P, MPI_INT, 0,
</span><br>
<span class="quotelev1">&gt; 	       MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  /* Each process prints its column. The output will intermingle on
</span><br>
<span class="quotelev1">&gt;   * the screen so that you must use &quot;-output-filename&quot; in Open MPI.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  printf (&quot;\nColumn of process %d:\n&quot;, mytid);
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; P; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if (((i + 1) % NUM_ELEM_PER_LINE) == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;%#x\n&quot;, column[i]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;%#x  &quot;, column[i]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_free (&amp;column_t);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Previous message:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<li><strong>In reply to:</strong> <a href="20948.php">Siegmar Gross: "[OMPI users] problem with data transfer in a heterogeneous environment"</a>
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
