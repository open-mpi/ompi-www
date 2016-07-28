<?
$subject_val = "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 05:17:31 2016" -->
<!-- isoreceived="20160712091731" -->
<!-- sent="Tue, 12 Jul 2016 11:08:06 +0200" -->
<!-- isosent="20160712090806" -->
<!-- name="Gundram Leifert" -->
<!-- email="gundram.leifert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java-OpenMPI returns with SIGSEGV" -->
<!-- id="5784B376.6020103_at_uni-rostock.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj7fWSnPuBEwyL-OZcduYAijziwvC-zymC837ZatgUE6hQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java-OpenMPI returns with SIGSEGV<br>
<strong>From:</strong> Gundram Leifert (<em>gundram.leifert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 05:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29648.php">Alfio Lazzaro: "[OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29610.php">Howard Pritchard: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilley, Howard,
<br>
<p>I configured without disable dlopen - same error.
<br>
<p>I test these classes on another cluster and: IT WORKS!
<br>
<p>So it is a problem of the cluster configuration. Thank you all very much 
<br>
for all your help! When the admin can solve the problem, i will let you 
<br>
know, what he had changed.
<br>
<p>Cheers Gundram
<br>
<p>On 07/08/2016 04:19 PM, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; Hi Gundram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you configure without the disable dlopen option and retry?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am Freitag, 8. Juli 2016 schrieb Gilles Gouaillardet :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the JVM sets its own signal handlers, and it is important openmpi
</span><br>
<span class="quotelev1">&gt;     dones not override them.
</span><br>
<span class="quotelev1">&gt;     this is what previously happened with PSM (infinipath) but this
</span><br>
<span class="quotelev1">&gt;     has been solved since.
</span><br>
<span class="quotelev1">&gt;     you might be linking with a third party library that hijacks
</span><br>
<span class="quotelev1">&gt;     signal handlers and cause the crash
</span><br>
<span class="quotelev1">&gt;     (which would explain why I cannot reproduce the issue)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the master branch has a revamped memory patcher (compared to v2.x
</span><br>
<span class="quotelev1">&gt;     or v1.10), and that could have some bad interactions with the JVM,
</span><br>
<span class="quotelev1">&gt;     so you might also give v2.x a try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Friday, July 8, 2016, Gundram Leifert
</span><br>
<span class="quotelev1">&gt;     &lt;gundram.leifert_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;javascript:_e(%7B%7D,'cvml','gundram.leifert_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         You made the best of it... thanks a lot!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Whithout MPI it runs.
</span><br>
<span class="quotelev1">&gt;         Just adding MPI.init() causes the crash!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         maybe I installed something wrong...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         install newest automake, autoconf, m4, libtoolize in right
</span><br>
<span class="quotelev1">&gt;         order and same prefix
</span><br>
<span class="quotelev1">&gt;         check out ompi,
</span><br>
<span class="quotelev1">&gt;         autogen
</span><br>
<span class="quotelev1">&gt;         configure with same prefix, pointing to the same jdk, I later use
</span><br>
<span class="quotelev1">&gt;         make
</span><br>
<span class="quotelev1">&gt;         make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I will test some different configurations of ./configure...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 07/08/2016 01:40 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;         I am running out of ideas ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         what if you do not run within slurm ?
</span><br>
<span class="quotelev2">&gt;&gt;         what if you do not use '-cp executor.jar'
</span><br>
<span class="quotelev2">&gt;&gt;         or what if you configure without --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt;         --disable-mca-dso ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if you
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun -np 1 ...
</span><br>
<span class="quotelev2">&gt;&gt;         then MPI_Bcast and MPI_Barrier are basically no-op, so it is
</span><br>
<span class="quotelev2">&gt;&gt;         really weird your program is still crashing. an other test is
</span><br>
<span class="quotelev2">&gt;&gt;         to comment out MPI_Bcast and MPI_Barrier and try again with -np 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Friday, July 8, 2016, Gundram Leifert
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;gundram.leifert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             In any cases the same error.
</span><br>
<span class="quotelev2">&gt;&gt;             this is my code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             salloc -n 3
</span><br>
<span class="quotelev2">&gt;&gt;             export IPATH_NO_BACKTRACE
</span><br>
<span class="quotelev2">&gt;&gt;             ulimit -s 10240
</span><br>
<span class="quotelev2">&gt;&gt;             mpirun -np 3 java -cp executor.jar
</span><br>
<span class="quotelev2">&gt;&gt;             de.uros.citlab.executor.test.TestSendBigFiles2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             also for 1 or two cores, the process crashes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On 07/08/2016 12:32 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             you can try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             export IPATH_NO_BACKTRACE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             before invoking mpirun (that should not be needed though)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             an other test is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ulimit -s 10240
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             before invoking mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             btw, do you use mpirun or srun ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             can you reproduce the crash with 1 or 2 tasks ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On Friday, July 8, 2016, Gundram Leifert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;gundram.leifert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ./configure --enable-mpi-java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --with-jdk-dir=/home/gl069/bin/jdk1.7.0_25
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --disable-dlopen --disable-mca-dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 1 node with 3 cores. I use SLURM to allocate one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 node. I changed --mem, but it has no effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 salloc -n 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 pending signals                 (-i) 256564
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 open files                      (-n) 100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 max user processes              (-u) 4096
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Linux titan01.service 3.10.0-327.13.1.el7.x86_64 #1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 SMP Thu Mar 31 16:04:38 UTC 2016 x86_64 x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 cat /etc/system-release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 CentOS Linux release 7.2.1511 (Core)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 what else do you need?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Cheers, Gundram
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 On 07/07/2016 10:05 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Gundram,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 can you please provide more information on your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 environment :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - configure command line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - OS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - memory available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - ulimit -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - number of nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - number of tasks used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - interconnect used (if any)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 - batch manager (if any)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 On 7/7/2016 4:17 PM, Gundram Leifert wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Hello Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 I tried you code and it crashes after 3-15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 iterations (see (1)). It is always the same error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 (only the &quot;94&quot; varies).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Meanwhile I think Java and MPI use the same memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 because when I delete the hash-call, the program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 runs sometimes more than 9k iterations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 When it crashes, there are different lines (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 (2) and (3)). The crashes also occurs on rank 0.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 ##### (1)#####
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 # Problematic frame:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 # J 94 C2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 de.uros.citlab.executor.test.TestSendBigFiles2.hashcode([BI)I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 (42 bytes) @ 0x00002b03242dc9c4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 [0x00002b03242dc860+0x164]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 #####(2)#####
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 # Problematic frame:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 # V  [libjvm.so+0x68d0f6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 JavaCallWrapper::JavaCallWrapper(methodHandle,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Handle, JavaValue*, Thread*)+0xb6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 #####(3)#####
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 # Problematic frame:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 # V  [libjvm.so+0x4183bf]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 ThreadInVMfromNative::ThreadInVMfromNative(JavaThread*)+0x4f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Any more idea?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 On 07/07/2016 03:00 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Gundram,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 fwiw, i cannot reproduce the issue on my box
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 - centos 7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 - java version &quot;1.8.0_71&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                   Java(TM) SE Runtime Environment (build
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 1.8.0_71-b15)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                   Java HotSpot(TM) 64-Bit Server VM (build
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 25.71-b15, mixed mode)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 i noticed on non zero rank saveMem is allocated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 at each iteration.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 ideally, the garbage collector can take care of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 that and this should not be an issue.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 would you mind giving the attached file a try ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 On 7/7/2016 7:41 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 I will have a look at it today
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 how did you configure OpenMPI ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 On Thursday, July 7, 2016, Gundram Leifert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 &lt;gundram.leifert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Hello Giles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     thank you for your hints! I did 3 changes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     unfortunately the same error occures:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     update ompi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     commit ae8444682f0a7aa158caea08800542ce9874455e
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Date:   Tue Jul 5 20:07:16 2016 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     update java:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     java version &quot;1.8.0_92&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Java(TM) SE Runtime Environment (build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     1.8.0_92-b14)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Java HotSpot(TM) Server VM (build 25.92-b14,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     mixed mode)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     delete hashcode-lines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Now I get this error message - to 100%,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     after different number of iterations (15-300):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                      0/ 3:length = 100000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                      0/ 3:bcast length done (length = 100000000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                      1/ 3:bcast length done (length = 100000000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                      2/ 3:bcast length done (length = 100000000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # A fatal error has been detected by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #  SIGSEGV (0xb) at pc=0x00002b3d022fcd24,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     pid=16578, tid=0x00002b3d29716700
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # JRE version: Java(TM) SE Runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Environment (8.0_92-b14) (build 1.8.0_92-b14)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Java VM: Java HotSpot(TM) 64-Bit Server VM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     (25.92-b14 mixed mode linux-amd64 compressed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     oops)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Problematic frame:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # V [libjvm.so+0x414d24]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     ciEnv::get_field_by_index(ciInstanceKlass*,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     int)+0x94
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Failed to write core dump. Core dumps have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     been disabled. To enable core dumping, try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # An error report file with more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     is saved as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/ompi/bin/executor/hs_err_pid16578.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Compiler replay data is saved as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/ompi/bin/executor/replay_pid16578.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # If you would like to submit a bug report,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     please visit:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # <a href="http://bugreport.java.com/bugreport/crash.jsp">http://bugreport.java.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libpthread.so.0(+0xf100)[0x2b3d01500100]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(gsignal+0x37)[0x2b3d01b5c5f7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(abort+0x148)[0x2b3d01b5dce8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x91e605)[0x2b3d02806605]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0xabda63)[0x2b3d029a5a63]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x14f)[0x2b3d0280be2f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x91a5c3)[0x2b3d028025c3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(+0x35670)[0x2b3d01b5c670]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x414d24)[0x2b3d022fcd24]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x43c5ae)[0x2b3d023245ae]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x369ade)[0x2b3d02251ade]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36eda0)[0x2b3d02256da0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37091b)[0x2b3d0225891b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3712b6)[0x2b3d022592b6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36d2cf)[0x2b3d022552cf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36e412)[0x2b3d02256412]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [16]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36ed8d)[0x2b3d02256d8d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37091b)[0x2b3d0225891b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [18]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3712b6)[0x2b3d022592b6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36d2cf)[0x2b3d022552cf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [20]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36e412)[0x2b3d02256412]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [21]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36ed8d)[0x2b3d02256d8d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [22]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3708c2)[0x2b3d022588c2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [23]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3724e7)[0x2b3d0225a4e7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [24]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37a817)[0x2b3d02262817]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37a92f)[0x2b3d0226292f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x358edb)[0x2b3d02240edb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x35929e)[0x2b3d0224129e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [28]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3593ce)[0x2b3d022413ce]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] [29]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x35973e)[0x2b3d0224173e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:16578] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Primary job  terminated normally, but 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     a non-zero exit code. Per user-direction,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     mpirun noticed that process rank 2 with PID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     0 on node titan01 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     I don't know if it is a problem of java or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     ompi - but the last years, java worked with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     no problems on my machine...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Thank you for your tips in advance!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Gundram
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     On 07/06/2016 03:10 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Note a race condition in MPI_Init has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     fixed yesterday in the master.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     can you please update your OpenMPI and try
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     again ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     hopefully the hang will disappear.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Can you reproduce the crash with a simpler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     (and ideally deterministic) version of your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     the crash occurs in hashcode, and this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     makes little sense to me. can you also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     update your jdk ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     On Wednesday, July 6, 2016, Gundram Leifert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     &lt;gundram.leifert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Hello Jason,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         thanks for your response! I thing it is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         another problem. I try to send 100MB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         bytes. So there are not many tries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         (between 10 and 30). I realized that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         the execution of this code can result 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         different errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         1. most often the posted error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         occures.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         2. in &lt;10% the cases i have a live
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         lock. I can see 3 java-processes, one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         with 200% and two with 100% processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         utilization. After ~15 minutes without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         new system outputs this error occurs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [thread 47499823949568 also had an error]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         # A fatal error has been detected by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         the Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #  Internal Error (safepoint.cpp:317),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         pid=24256, tid=47500347131648
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         # guarantee(PageArmed == 0) failed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         invariant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         # Java VM: Java HotSpot(TM) 64-Bit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         linux-amd64 compressed oops)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         # Failed to write core dump. Core dumps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         have been disabled. To enable core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         dumping, try &quot;ulimit -c unlimited&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         before starting Java again
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         # An error report file with more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         information is saved as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/ompi/bin/executor/hs_err_pid24256.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         # If you would like to submit a bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         report, please visit:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] *** Process received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] Signal: Aborted (6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] Signal code: (-6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /usr/lib64/libpthread.so.0(+0xf100)[0x2b336a324100]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /usr/lib64/libc.so.6(gsignal+0x37)[0x2b336a9815f7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /usr/lib64/libc.so.6(abort+0x148)[0x2b336a982ce8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b336b44fac5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b336b5af137]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x407262)[0x2b336b114262]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x7c6c34)[0x2b336b4d3c34]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a9c17)[0x2b336b5b6c17]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8aa2c0)[0x2b336b5b72c0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x744270)[0x2b336b451270]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /usr/lib64/libpthread.so.0(+0x7dc5)[0x2b336a31cdc5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] [11]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         /usr/lib64/libc.so.6(clone+0x6d)[0x2b336aa4228d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         [titan01:24256] *** End of error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Primary job terminated normally, but 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         process returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         a non-zero exit code. Per
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         user-direction, the job has been aborted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         mpirun noticed that process rank 0 with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         PID 0 on node titan01 exited on signal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         6 (Aborted).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         3. in &lt;10% the cases i have a dead lock
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         while MPI.init. This stays for more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         than 15 minutes without returning with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         an error message...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Can I enable some debug-flags to see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         what happens on C / OpenMPI side?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Thanks in advance for your help!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Gundram Leifert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         On 07/05/2016 06:05 PM, Jason Maldonis
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         After reading your thread looks like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         it may be related to an issue I had a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         few weeks ago (I'm a novice though).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Maybe my thread will be of help:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         <a href="https://www.open-mpi.org/community/lists/users/2016/06/29425.php">https://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         When you say &quot;After a specific number
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         of repetitions the process either
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         hangs up or returns with a SIGSEGV.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          does you mean that a single call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         hangs, or that at some point during
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         the for loop a call hangs? If you mean
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         the latter, then it might relate to my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         issue. Otherwise my thread probably
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         won't be helpful.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Jason Maldonis
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Research Assistant of Professor Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Voyles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Materials Science Grad Student
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         University of Wisconsin, Madison
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         1509 University Ave, Rm M142
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Madison, WI 53706
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         maldonis_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         608-295-5532
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         On Tue, Jul 5, 2016 at 9:58 AM,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Gundram Leifert
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;gundram.leifert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             I try to send many byte-arrays via
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             broadcast. After a specific number
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             of repetitions the process either
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             hangs up or returns with a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             SIGSEGV. Does any one can help me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             solving the problem:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             ########## The code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             import java.util.Random;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             import mpi.*;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             public class TestSendBigFiles {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 public static void log(String
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             msg) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     try {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             System.err.println(String.format(&quot;%2d/%2d:%s&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.getRank(),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.getSize(), msg));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     } catch (MPIException ex) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             System.err.println(String.format(&quot;%2s/%2s:%s&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             &quot;?&quot;, &quot;?&quot;, msg));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 private static int
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             hashcode(byte[] bytearray) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     if (bytearray == null) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     int hash = 39;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     for (int i = 0; i &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             bytearray.length; i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             byte b = bytearray[i];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             hash = hash * 7 + (int) b;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     return hash;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 public static void main(String
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             args[]) throws MPIException {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;start main&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.Init(args);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     try {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;initialized done&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             byte[] saveMem = new byte[100000000];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Random r = new Random();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             r.nextBytes(saveMem);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             (MPI.COMM_WORLD.getRank() == 0) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                               for (int i = 0; i &lt; 1000; i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             saveMem[r.nextInt(saveMem.length)]++;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                   log(&quot;i = &quot; + i);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                   int[] lengthData = new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             int[]{saveMem.length};
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;object hash = &quot; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             hashcode(saveMem));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;length = &quot; + lengthData[0]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.bcast(lengthData,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             1, MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;bcast length done (length = &quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             + lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.bcast(saveMem,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             lengthData[0], MPI.BYTE, 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                               }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.bcast(new int[]{0},
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             1, MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                               while (true) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                   int[] lengthData = new int[1];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.bcast(lengthData,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             1, MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;bcast length done (length = &quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             + lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                   if (lengthData[0] == 0) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             break;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                   saveMem = new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             byte[lengthData[0]];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.bcast(saveMem,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             saveMem.length, MPI.BYTE, 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;object hash = &quot; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             hashcode(saveMem));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                               }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     } catch (MPIException ex) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             System.out.println(&quot;caugth error.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             + ex);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(ex.getMessage());
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     } catch (RuntimeException
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             ex) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             System.out.println(&quot;caugth error.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             + ex);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(ex.getMessage());
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     } finally {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             ############ The Error (if it does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             not just hang up):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # A fatal error has been detected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #  SIGSEGV (0xb) at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             pc=0x00002b7e9c86e3a1, pid=1172,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             tid=47822674495232
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # A fatal error has been detected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # Java VM: Java HotSpot(TM) 64-Bit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             linux-amd64 compressed oops)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # Problematic frame:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #  SIGSEGV (0xb) at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             pc=0x00002af69c0693a1, pid=1173,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             tid=47238546896640
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             J
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # Failed to write core dump. Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             dumps have been disabled. To
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             enable core dumping, try &quot;ulimit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             -c unlimited&quot; before starting Java
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             again
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # Java VM: Java HotSpot(TM) 64-Bit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             linux-amd64 compressed oops)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # Problematic frame:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # J
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # Failed to write core dump. Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             dumps have been disabled. To
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             enable core dumping, try &quot;ulimit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             -c unlimited&quot; before starting Java
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             again
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # An error report file with more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             information is saved as:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/ompi/bin/executor/hs_err_pid1172.log
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # An error report file with more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             information is saved as:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/ompi/bin/executor/hs_err_pid1173.log
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # If you would like to submit a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             bug report, please visit:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             # If you would like to submit a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             bug report, please visit:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] *** Process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] Signal code: (-6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] *** Process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] Signal code: (-6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libpthread.so.0(+0xf100)[0x2b7e9596a100]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libc.so.6(gsignal+0x37)[0x2b7e95fc75f7]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 2]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libc.so.6(abort+0x148)[0x2b7e95fc8ce8]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b7e96a95ac5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b7e96bf5137]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2b7e96a995e0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libpthread.so.0(+0xf100)[0x2af694ded100]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libc.so.6(+0x35670)[0x2b7e95fc7670]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] [ 7] [0x2b7e9c86e3a1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01172] *** End of error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libc.so.6(gsignal+0x37)[0x2af69544a5f7]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 2]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libc.so.6(abort+0x148)[0x2af69544bce8]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2af695f18ac5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2af696078137]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2af695f1c5e0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             /usr/lib64/libc.so.6(+0x35670)[0x2af69544a670]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] [ 7] [0x2af69c0693a1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             [titan01:01173] *** End of error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Primary job terminated normally,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             but 1 process returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             a non-zero exit code. Per
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             user-direction, the job has been
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             aborted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             mpirun noticed that process rank 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             with PID 0 on node titan01 exited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             ########CONFIGURATION:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             I used the ompi master sources
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             from github:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             commit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             267821f0dd405b5f4370017a287d9a49f92e734a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Author: Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Date:   Tue Jul 5 13:47:50 2016 +0900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             ./configure --enable-mpi-java
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             --with-jdk-dir=/home/gl069/bin/jdk1.7.0_25
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             --disable-dlopen --disable-mca-dso
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Thanks a lot for your help!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Gundram
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             <a href="http://www.open-mpi.org/community/lists/users/2016/07/29584.php">http://www.open-mpi.org/community/lists/users/2016/07/29584.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29585.php">http://www.open-mpi.org/community/lists/users/2016/07/29585.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29587.php">http://www.open-mpi.org/community/lists/users/2016/07/29587.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29589.php">http://www.open-mpi.org/community/lists/users/2016/07/29589.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29590.php">http://www.open-mpi.org/community/lists/users/2016/07/29590.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29592.php">http://www.open-mpi.org/community/lists/users/2016/07/29592.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29593.php">http://www.open-mpi.org/community/lists/users/2016/07/29593.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29601.php">http://www.open-mpi.org/community/lists/users/2016/07/29601.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29603.php">http://www.open-mpi.org/community/lists/users/2016/07/29603.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29610.php">http://www.open-mpi.org/community/lists/users/2016/07/29610.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29648.php">Alfio Lazzaro: "[OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29610.php">Howard Pritchard: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
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
