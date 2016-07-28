<?
$subject_val = "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 10:23:40 2012" -->
<!-- isoreceived="20120926142340" -->
<!-- sent="Wed, 26 Sep 2012 16:16:41 +0200 (CEST)" -->
<!-- isosent="20120926141641" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
<!-- id="201209261416.q8QEGfxv011716_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-26 10:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20337.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Previous message:</strong> <a href="20335.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Maybe in reply to:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Does the behavior only occur with Java applications, as your subject
</span><br>
<span class="quotelev1">&gt; implies? I thought this was a more general behavior based on prior notes?
</span><br>
<p>It is a general problem as you can see in the older email below. I
<br>
didn't change the header because I detected this behaviour when I
<br>
tried out mpiJava.
<br>
<p><p><span class="quotelev1">&gt; As I said back then, I have no earthly idea why your local machine is being
</span><br>
<span class="quotelev1">&gt; ignored, and I cannot replicate that behavior on any system available to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you might try is adding --display-allocation --display-devel-map to
</span><br>
<span class="quotelev1">&gt; your cmd line and see what the system thinks it is doing. The first option
</span><br>
<span class="quotelev1">&gt; will display what nodes and slots it thinks are available to it, and the
</span><br>
<span class="quotelev1">&gt; second will report where it thinks it placed everything.
</span><br>
<p>tyr topo 244 mpiexec -np 3 -host tyr,sunpc4,linpc4 --display-allocation \
<br>
&nbsp;&nbsp;--display-devel-map hostname
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: tyr             Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[3909,0],0]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 0 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 0    Next node_rank: 0
<br>
&nbsp;Data for node: sunpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[3909,0],1]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 0 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 0    Next node_rank: 0
<br>
&nbsp;Data for node: linpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[3909,0],2]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 0 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 0    Next node_rank: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYSLOT
<br>
&nbsp;&nbsp;&nbsp;Ranking policy: SLOT  Binding policy: NONE[NODE]  Cpu set: NULL  PPR: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0      New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 2
<br>
<p>&nbsp;Data for node: sunpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[3909,0],1]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 1 Oversubscribed: TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 2    Next node_rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[3909,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0   Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: 0-1     Binding: NULL[0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[3909,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 1   Node rank: 1    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: 0-1     Binding: NULL[0]
<br>
<p>&nbsp;Data for node: linpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[3909,0],2]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 1 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[3909,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0   Node rank: 0    App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED      Restarts: 0     App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: 0-1     Binding: NULL[0]
<br>
linpc4
<br>
sunpc4.informatik.hs-fulda.de
<br>
sunpc4.informatik.hs-fulda.de
<br>
<p><p>I get the following output for the command for openmpi-1.6.2.
<br>
<p>tyr topo 109 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
<br>
&nbsp;&nbsp;--display-allocation --display-devel-map hostname
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: tyr.informatik.hs-fulda.de              Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1   Num sockets/board: 0    Num cores/socket: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[4018,0],0]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 0 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detected Resources:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 0    Next node_rank: 0
<br>
&nbsp;Data for node: sunpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1   Num sockets/board: 0    Num cores/socket: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: Not defined     Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 0 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detected Resources:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 0    Next node_rank: 0
<br>
&nbsp;Data for node: linpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1   Num sockets/board: 0    Num cores/socket: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: Not defined     Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 0 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detected Resources:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 0    Next node_rank: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;Map generated by mapping policy: 0400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Npernode: 0     Oversubscribe allowed: TRUE     CPU Lists: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 2      New daemon starting vpid 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 3
<br>
<p>&nbsp;Data for node: tyr.informatik.hs-fulda.de              Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1   Num sockets/board: 0    Num cores/socket: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[4018,0],0]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 1 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detected Resources:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[4018,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0   Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0        Restarts: 0     App_context: 0  Slot list: NULL
<br>
<p>&nbsp;Data for node: sunpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1   Num sockets/board: 0    Num cores/socket: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[4018,0],1]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 1 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detected Resources:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[4018,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0   Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0        Restarts: 0     App_context: 0  Slot list: NULL
<br>
<p>&nbsp;Data for node: linpc4          Launch id: -1   State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num boards: 1   Num sockets/board: 0    Num cores/socket: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[4018,0],2]    Daemon launched: False
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 1    Slots in use: 1 Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 1  Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detected Resources:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 1    Next node_rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[4018,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0  Local rank: 0   Node rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: 0        Restarts: 0     App_context: 0  Slot list: NULL
<br>
linpc4
<br>
sunpc4.informatik.hs-fulda.de
<br>
tyr.informatik.hs-fulda.de
<br>
<p><p>Is the above output helpful? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Wed, Sep 26, 2012 at 4:53 AM, Siegmar Gross &lt;
</span><br>
<span class="quotelev1">&gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yesterday I have installed openmpi-1.9a1r27362 and I still have a
</span><br>
<span class="quotelev2">&gt; &gt; problem with &quot;-host&quot;. My local machine will not be used, if I try
</span><br>
<span class="quotelev2">&gt; &gt; to start processes on three hosts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr:    Solaris 10, Sparc
</span><br>
<span class="quotelev2">&gt; &gt; sunpc4: Solaris 10 , x86_64
</span><br>
<span class="quotelev2">&gt; &gt; linpc4: openSUSE-Linux 12.1, x86_64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr mpi_classfiles 175 javac HelloMainWithoutMPI.java
</span><br>
<span class="quotelev2">&gt; &gt; tyr mpi_classfiles 176 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
</span><br>
<span class="quotelev2">&gt; &gt;   java -cp $HOME/mpi_classfiles HelloMainWithoutMPI
</span><br>
<span class="quotelev2">&gt; &gt; Hello from linpc4.informatik.hs-fulda.de/193.174.26.225
</span><br>
<span class="quotelev2">&gt; &gt; Hello from sunpc4.informatik.hs-fulda.de/193.174.26.224
</span><br>
<span class="quotelev2">&gt; &gt; Hello from sunpc4.informatik.hs-fulda.de/193.174.26.224
</span><br>
<span class="quotelev2">&gt; &gt; tyr mpi_classfiles 177 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.9_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Everything works fine with openmpi-1.6.2rc5r27346.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr mpi_classfiles 108 javac HelloMainWithoutMPI.java
</span><br>
<span class="quotelev2">&gt; &gt; tyr mpi_classfiles 109 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
</span><br>
<span class="quotelev2">&gt; &gt;   java -cp $HOME/mpi_classfiles HelloMainWithoutMPI
</span><br>
<span class="quotelev2">&gt; &gt; Hello from linpc4.informatik.hs-fulda.de/193.174.26.225
</span><br>
<span class="quotelev2">&gt; &gt; Hello from sunpc4.informatik.hs-fulda.de/193.174.26.224
</span><br>
<span class="quotelev2">&gt; &gt; Hello from tyr.informatik.hs-fulda.de/193.174.24.39
</span><br>
<span class="quotelev2">&gt; &gt; tyr mpi_classfiles 110 which mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.6.2_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my opinion it is a problem with openmpi-1.9. I used the following
</span><br>
<span class="quotelev2">&gt; &gt; configure command for Sparc. The commands for the other platforms are
</span><br>
<span class="quotelev2">&gt; &gt; similar.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-1.9a1r27362/configure --prefix=/usr/local/openmpi-1.9_64_cc \
</span><br>
<span class="quotelev2">&gt; &gt;   --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/sparcv9 \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-jdk-headers=/usr/local/jdk1.7.0_07/include \
</span><br>
<span class="quotelev2">&gt; &gt;   JAVA_HOME=/usr/local/jdk1.7.0_07 \
</span><br>
<span class="quotelev2">&gt; &gt;   LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-opal-multi-threads \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-threads=posix \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt; &gt;   --without-verbs \
</span><br>
<span class="quotelev2">&gt; &gt;   --without-udapl \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-debug \
</span><br>
<span class="quotelev2">&gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can I provide anything to track the problem? Thank you very much for
</span><br>
<span class="quotelev2">&gt; &gt; any help in advance.
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; I tried mpiJava on a 32-bit installation of openmpi-1.9a1r27361.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Why doesn't &quot;mpiexec&quot; start a process on my local machine (it
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; is not a matter of Java, because I have the same behaviour when
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; I use &quot;hostname&quot;)?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 133 mpiexec -np 3 -host tyr,sunpc4,sunpc1 \
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Process 0 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Process 1 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Process 2 of 3 running on sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr small_prog 142 mpiexec -np 3 -host tyr,sunpc4,sunpc1 hostname
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; No idea - it works fine for me. Do you have an environmental
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; variable, or something in your default MCA param file, that
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; indicates &quot;no_use_local&quot;?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have only built and installed Open MPI and I have no param file.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I don't have a mca environment variable.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; tyr hello_1 136 grep local \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /usr/local/openmpi-1.9_64_cc/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; # $sysconf is a directory on a local disk, it is likely that changes
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #   component_path = /usr/local/lib/openmpi:~/my_openmpi_components
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; tyr hello_1 143 env | grep -i mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; tyr hello_1 144
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; No ideas - I can't make it behave that way  :-(
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; The command breaks if I add a Linux machine.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Check to ensure that the path and ld_library_path on your linux box
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; is being correctly set to point to the corresponding Linux OMPI libs.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; It looks like that isn't the case. Remember, the Java bindings are
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; just that - they are bindings that wrap on top of the regular C
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; code. Thus, the underlying OMPI system remains system-dependent,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; and you must have the appropriate native libraries installed on
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; each machine.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I implemented a small program, which shows these values and they
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; are wrong for MPI, but I have no idea why. The two entries at the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; beginning from PATH and LD_LIBRARY_PATH are not from our normal
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; environment, because I add these values at the end of the environment
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; variables PATH, LD_LIBRARY_PATH_32, and LD_LIBRARY_PATH_64. Afterwards
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I set LD_LIBRARY_PATH to LD_LIBRARY_PATH_64 on a 64-bit Solaris
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; machine, to LD_LIBRARY_PATH_32 followed by LD_LIBRARY_PATH_64 on a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 64-bit Linux machine, and to LD_LIBRARY_PATH_32 on every 32-bit
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; machine.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I see the problem - our heterogeneous support could use some
</span><br>
<span class="quotelev2">&gt; &gt; improvement, but
</span><br>
<span class="quotelev2">&gt; &gt; it'll be awhile before I can get to it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What's happening is that we are picking up and propagating the prefix you
</span><br>
<span class="quotelev2">&gt; &gt; specified, prepending it to your path and ld_library_path. Did you by
</span><br>
<span class="quotelev2">&gt; &gt; chance
</span><br>
<span class="quotelev2">&gt; &gt; configure with --enable-orterun-prefix-by-default? Or specify --prefix on
</span><br>
<span class="quotelev2">&gt; &gt; your
</span><br>
<span class="quotelev2">&gt; &gt; cmd line? Otherwise, it shouldn't be doing this. For this purpose, you
</span><br>
<span class="quotelev2">&gt; &gt; cannot
</span><br>
<span class="quotelev2">&gt; &gt; use either of those options.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, you'll need to add --enable-heterogeneous to your configure so the
</span><br>
<span class="quotelev2">&gt; &gt; MPI
</span><br>
<span class="quotelev2">&gt; &gt; layer builds the right support, and add --hetero-nodes to your cmd line.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Now 1 slave tasks are sending their environment.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Environment from task 1:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  message type:        3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  msg length:          4622 characters
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  message:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    hostname:          tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    operating system:  SunOS
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    release:           5.10
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    processor:         sun4u
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    PATH
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/bin  (!!!)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/bin  (!!!)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/eclipse-3.6.1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/bin  (&lt;- from our
</span><br>
<span class="quotelev2">&gt; &gt; environment)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    LD_LIBRARY_PATH_32
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/lib
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/jdk1.7.0_07/jre/lib/sparc
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/lib  (&lt;- from our
</span><br>
<span class="quotelev2">&gt; &gt; environment)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    LD_LIBRARY_PATH_64
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/lib/sparcv9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/jdk1.7.0_07/jre/lib/sparcv9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/lib64  (&lt;- from our
</span><br>
<span class="quotelev2">&gt; &gt; environment)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/lib     (!!!)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/lib64   (!!!)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/lib/sparcv9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/jdk1.7.0_07/jre/lib/sparcv9
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/openmpi-1.9_64_cc/lib64  (&lt;- from our
</span><br>
<span class="quotelev2">&gt; &gt; environment)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    CLASSPATH
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/junit4.10
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/junit4.10/junit-4.10.jar
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dcore.jar
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dutils.jar
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       //usr/local/jdk1.7.0_07/j3d/lib/ext/vecmath.jar
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       /usr/local/javacc-5.0/javacc.jar
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                       .
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Without MPI the program uses our environment.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; tyr hello_1 147 diff env_with*
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1,7c1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt; Now 1 slave tasks are sending their environment.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt; Environment from task 1:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;   message type:        3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;   msg length:          4622 characters
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ---
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Environment:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 14,15d7
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;                        /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;                        /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 81,82d72
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;                        /usr/local/openmpi-1.9_64_cc/lib
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; tyr hello_1 148
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have attached the programs so that you can check yourself and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; hopefully get the same results. Do you modify PATH and LD_LIBRARY_PATH?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 110 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt; &gt; process is
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev2">&gt; &gt; failure;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt; &gt; process is
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev2">&gt; &gt; failure;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; opal_init failed
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process
</span><br>
<span class="quotelev2">&gt; &gt; is
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's
</span><br>
<span class="quotelev2">&gt; &gt; some
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev2">&gt; &gt; abort,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; [linpc4:27369] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; not able to aggregate error messages, and not able to guarantee
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; that all other processes were killed!
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev2">&gt; &gt; status,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Process name: [[21095,1],2]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 111 which mpijavac
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; /usr/local/openmpi-1.9_32_cc/bin/mpijavac
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 112 more /usr/local/openmpi-1.9_32_cc/bin/mpijavac
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; #!/usr/bin/env perl
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # WARNING: DO NOT EDIT THE mpijava.pl FILE AS IT IS GENERATED!
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; #          MAKE ALL CHANGES IN mpijava.pl.in
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # Copyright (c) 2012      Oracle and/or its affiliates.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; use strict;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # The main purpose of this wrapper compiler is to check for
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # and adjust the Java class path to include the OMPI classes
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # in mpi.jar. The user may have specified a class path on
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # our cmd line, or it may be in the environment, so we have
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # to check for both. We also need to be careful not to
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # just override the class path as it probably includes classes
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # they need for their application! It also may already include
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # the path to mpi.jar, and while it doesn't hurt anything, we
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # don't want to include our class path more than once to avoid
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # user astonishment
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # Let the build system provide us with some critical values
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; my $my_compiler = &quot;/usr/local/jdk1.7.0_07/bin/javac&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; my $ompi_classpath = &quot;/usr/local/openmpi-1.9_32_cc/lib/mpi.jar&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; # globals
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; my $showme_arg = 0;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; my $verbose = 0;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; my $my_arg;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; All libraries are available.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 113 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libthread.so.1 =&gt;        /usr/lib/libthread.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libjli.so =&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/jdk1.7.0_07/bin/../jre/lib/sparc/jli/libjli.so
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libdl.so.1 =&gt;    /usr/lib/libdl.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libc.so.1 =&gt;     /usr/lib/libc.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libm.so.2 =&gt;     /usr/lib/libm.so.2
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       /platform/SUNW,A70/lib/libc_psr.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 114 ssh sunpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libthread.so.1 =&gt;        /usr/lib/libthread.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libjli.so =&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libdl.so.1 =&gt;    /usr/lib/libdl.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libc.so.1 =&gt;     /usr/lib/libc.so.1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libm.so.2 =&gt;     /usr/lib/libm.so.2
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 115 ssh linpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       linux-gate.so.1 =&gt;  (0xffffe000)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf77b2000)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libjli.so =&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; (0xf779d000)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7798000)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       libc.so.6 =&gt; /lib/libc.so.6 (0xf762b000)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;       /lib/ld-linux.so.2 (0xf77ce000)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; I don't have any errors in the log files except the error for nfs.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr openmpi-1.9-Linux.x86_64.32_cc 136 ls log.*
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev2">&gt; &gt; log.make-install.Linux.x86_64.32_cc
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc  log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr openmpi-1.9-Linux.x86_64.32_cc 137 grep &quot;Error 1&quot; log.*
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc:make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc:make[1]: *** [check-recursive]
</span><br>
<span class="quotelev2">&gt; &gt; Error 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc:make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 32 failed)
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 1 of 2 tests failed
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; It doesn't help to build the class files on Linux (which should be
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; independent of the architecture anyway).
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; tyr java 131 ssh linpc4
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; linpc4 fd1026 98 cd .../prog/mpi/java
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; linpc4 java 99 make clean
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; rm -f /home/fd1026/mpi_classfiles/HelloMainWithBarrier.class \
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; /home/fd1026/mpi_classfiles/HelloMainWithoutBarrier.class
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; linpc4 java 100 make
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithBarrier.java
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithoutBarrier.java
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; linpc4 java 101  mpiexec -np 3 -host linpc4 \
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt; &gt; process is
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev2">&gt; &gt; failure;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Has anybody else this problem as well? Do you know a solution?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /* A small MPI program, which delivers some information about its
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * machine, operating system, and some environment variables.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * Compiling:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   Store executable(s) into local directory.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpicc -o &lt;program name&gt; &lt;source code file name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   Store executable(s) into predefined directories.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     make
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   Make program(s) automatically on all specified hosts. You must
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   edit the file &quot;make_compile&quot; and specify your host names before
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   you execute it.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     make_compile
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * Running:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   LAM-MPI:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpiexec -boot -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpiexec -boot \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *    -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt; : \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *    -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpiexec -boot [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     lamboot [-v] [&lt;host file&gt;]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *       mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *    or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *    mpiexec [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     lamhalt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   OpenMPI:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     &quot;host1&quot;, &quot;host2&quot;, and so on can all have the same name,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     if you want to start a virtual computer with some virtual
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     cpu's on the local host. The name &quot;localhost&quot; is allowed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     as well.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpiexec --host &lt;host1,host2,...&gt; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *    -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpiexec -hostfile &lt;hostfile name&gt; \
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *    -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     mpiexec -app &lt;application file&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * Cleaning:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   local computer:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     rm &lt;program name&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     make clean_all
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   on all specified computers (you must edit the file &quot;make_clean_all&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   and specify your host names before you execute it.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     make_clean_all
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * File: environ_mpi.c                       Author: S. Gross
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * Date: 25.09.2012
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;sys/utsname.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #define     BUF_SIZE        8192            /* message buffer size
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #define     MAX_TASKS       12              /* max. number of tasks
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #define     SENDTAG         1               /* send message command
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #define     EXITTAG         2               /* termination command
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #define     MSGTAG          3               /* normal message token
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #define ENTASKS             -1              /* error: too many tasks
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; static void master (void);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; static void slave (void);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  int  mytid,                                /* my task id
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       ntasks;                               /* number of parallel tasks
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  if (mytid == 0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    master ();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  else
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    slave ();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Finalize ();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /* Function for the &quot;master task&quot;. The master sends a request to all
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * slaves asking for a message. After receiving and printing the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * messages he sends all slaves a termination command.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * input parameters: not necessary
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * output parameters:        not available
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * return value:     nothing
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * side effects:     no side effects
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; void master (void)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  int                ntasks,                 /* number of parallel tasks
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;             mytid,                  /* my task id                   */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;             num,                    /* number of entries            */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;             i;                      /* loop variable                */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  char               buf[BUF_SIZE + 1];      /* message buffer (+1 for
</span><br>
<span class="quotelev2">&gt; &gt; '\0')
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Status stat;                   /* message details              */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  if (ntasks &gt; MAX_TASKS)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    fprintf (stderr, &quot;Error: Too many tasks. Try again with at most &quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;          &quot;%d tasks.\n&quot;, MAX_TASKS);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    /* terminate all slave tasks                                     */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      MPI_Send ((char *) NULL, 0, MPI_CHAR, i, EXITTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    MPI_Finalize ();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    exit (ENTASKS);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  printf (&quot;\n\nNow %d slave tasks are sending their environment.\n\n&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       ntasks - 1);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /* request messages from slave tasks
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    MPI_Send ((char *) NULL, 0, MPI_CHAR, i, SENDTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /* wait for messages and print greetings
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;           MPI_ANY_TAG, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    MPI_Get_count (&amp;stat, MPI_CHAR, &amp;num);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    buf[num] = '\0';                 /* add missing end-of-string    */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    printf (&quot;Environment from task %d:\n&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         &quot;  message type:        %d\n&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         &quot;  msg length:          %d characters\n&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         &quot;  message:             %s\n\n&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         stat.MPI_SOURCE, stat.MPI_TAG, num, buf);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  /* terminate all slave tasks
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    MPI_Send ((char *) NULL, 0, MPI_CHAR, i, EXITTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /* Function for &quot;slave tasks&quot;. The slave task sends its hostname,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * operating system name and release, and processor architecture
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * as a message to the master.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * input parameters: not necessary
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * output parameters:        not available
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * return value:     nothing
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * side effects:     no side effects
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; void slave (void)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  struct utsname sys_info;           /* system information           */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  int                 mytid,                 /* my task id
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              num_env_vars,          /* # of environment variables   */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              i,                     /* loop variable                */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              more_to_do;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  char                buf[BUF_SIZE],         /* message buffer
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              *env_vars[] = {&quot;PATH&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;LD_LIBRARY_PATH_32&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;LD_LIBRARY_PATH_64&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;LD_LIBRARY_PATH&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;CLASSPATH&quot;};
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Status  stat;                  /* message details              */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  num_env_vars = sizeof (env_vars) / sizeof (env_vars[0]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  more_to_do = 1;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  while (more_to_do == 1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    /* wait for a message from the master task
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, 0, MPI_ANY_TAG,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;           MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    if (stat.MPI_TAG != EXITTAG)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      uname (&amp;sys_info);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strcpy (buf, &quot;\n    hostname:          &quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strncpy (buf + strlen (buf), sys_info.nodename,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;            BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strncpy (buf + strlen (buf), &quot;\n    operating system:  &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;            BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strncpy (buf + strlen (buf), sys_info.sysname,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;            BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strncpy (buf + strlen (buf), &quot;\n    release:           &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;            BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strncpy (buf + strlen (buf), sys_info.release,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;            BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strncpy (buf + strlen (buf), &quot;\n    processor:         &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;            BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      strncpy (buf + strlen (buf), sys_info.machine,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;            BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      for (i = 0; i &lt; num_env_vars; ++i)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     char *env_val,                  /* pointer to environment value */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;          *delimiter = &quot;:&quot;   ,       /* field delimiter for &quot;strtok&quot; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;          *next_tok;                 /* next token                   */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     env_val = getenv (env_vars[i]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     if (env_val != NULL)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       if ((strlen (buf) + strlen (env_vars[i]) + 6) &lt; BUF_SIZE)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         strncpy (buf + strlen (buf), &quot;\n    &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                  BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         strncpy (buf + strlen (buf), env_vars[i],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                  BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       else
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot;.&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                  &quot;\n\n&quot;, env_vars[i]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       /* Get first token in &quot;env_val&quot;. &quot;strtok&quot; skips all
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * characters that are contained in the current delimiter
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * string. If it finds a character which is not contained
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * in the delimiter string, it is the start of the first
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * token. Now it searches for the next character which is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * part of the delimiter string. If it finds one it will
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * overwrite it by a '\0' to terminate the first token.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * Otherwise the token extends to the end of the string.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * Subsequent calls of &quot;strtok&quot; use a NULL pointer as first
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * argument and start searching from the saved position
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * after the last token. &quot;strtok&quot; returns NULL if it
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        * couldn't find a token.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       next_tok = strtok (env_val, delimiter);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       while (next_tok != NULL)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         if ((strlen (buf) + strlen (next_tok) + 25) &lt; BUF_SIZE)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;           strncpy (buf + strlen (buf), &quot;\n                       &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                    BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;           strncpy (buf + strlen (buf), next_tok,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                    BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         else
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;           fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot; &quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                    &quot;to %s.\n\n&quot;, next_tok, env_vars[i]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         /* get next token                                           */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         next_tok = strtok (NULL, delimiter);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      MPI_Send (buf, strlen (buf), MPI_CHAR, stat.MPI_SOURCE,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                     MSGTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    else
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      more_to_do = 0;                        /* terminate
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /* A small program, which delivers some information about its
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * machine, operating system, and some environment variables.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * Compiling:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   Store executable(s) into local directory.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *     (g)cc -o environ_without_mpi environ_without_mpi.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * Running:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *   environ_without_mpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * File: environ_without_mpi.c               Author: S. Gross
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; * Date: 25.09.2012
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &lt;sys/utsname.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #define     BUF_SIZE        8192            /* message buffer size
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  struct utsname sys_info;           /* system information           */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  int                 num_env_vars,          /* # of environment
</span><br>
<span class="quotelev2">&gt; &gt; variables
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              i;                     /* loop variable                */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  char                buf[BUF_SIZE],         /* message buffer
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              *env_vars[] = {&quot;PATH&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;LD_LIBRARY_PATH_32&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;LD_LIBRARY_PATH_64&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;LD_LIBRARY_PATH&quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                             &quot;CLASSPATH&quot;};
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  num_env_vars = sizeof (env_vars) / sizeof (env_vars[0]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  uname (&amp;sys_info);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strcpy (buf, &quot;\n    hostname:          &quot;);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strncpy (buf + strlen (buf), sys_info.nodename,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strncpy (buf + strlen (buf), &quot;\n    operating system:  &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strncpy (buf + strlen (buf), sys_info.sysname,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strncpy (buf + strlen (buf), &quot;\n    release:           &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strncpy (buf + strlen (buf), sys_info.release,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strncpy (buf + strlen (buf), &quot;\n    processor:         &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  strncpy (buf + strlen (buf), sys_info.machine,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  for (i = 0; i &lt; num_env_vars; ++i)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    char *env_val,                   /* pointer to environment value */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      *delimiter = &quot;:&quot;       ,       /* field delimiter for &quot;strtok&quot; */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      *next_tok;                     /* next token                   */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    env_val = getenv (env_vars[i]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    if (env_val != NULL)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      if ((strlen (buf) + strlen (env_vars[i]) + 6) &lt; BUF_SIZE)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     strncpy (buf + strlen (buf), &quot;\n    &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     strncpy (buf + strlen (buf), env_vars[i],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      else
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot;.&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;              &quot;\n\n&quot;, env_vars[i]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      /* Get first token in &quot;env_val&quot;. &quot;strtok&quot; skips all
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * characters that are contained in the current delimiter
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * string. If it finds a character which is not contained
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * in the delimiter string, it is the start of the first
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * token. Now it searches for the next character which is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * part of the delimiter string. If it finds one it will
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * overwrite it by a '\0' to terminate the first token.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * Otherwise the token extends to the end of the string.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * Subsequent calls of &quot;strtok&quot; use a NULL pointer as first
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * argument and start searching from the saved position
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * after the last token. &quot;strtok&quot; returns NULL if it
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       * couldn't find a token.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      next_tok = strtok (env_val, delimiter);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      while (next_tok != NULL)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     if ((strlen (buf) + strlen (next_tok) + 25) &lt; BUF_SIZE)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       strncpy (buf + strlen (buf), &quot;\n                       &quot;,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       strncpy (buf + strlen (buf), next_tok,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     else
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot; &quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                &quot;to %s.\n\n&quot;, next_tok, env_vars[i]);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     /* get next token                                               */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     next_tok = strtok (NULL, delimiter);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  printf (&quot;Environment:\n&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       &quot;  message:             %s\n\n&quot;,  buf);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20337.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Previous message:</strong> <a href="20335.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Maybe in reply to:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
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
