<?
$subject_val = "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 08:24:28 2016" -->
<!-- isoreceived="20160708122428" -->
<!-- sent="Fri, 8 Jul 2016 14:15:03 +0200" -->
<!-- isosent="20160708121503" -->
<!-- name="Gundram Leifert" -->
<!-- email="gundram.leifert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java-OpenMPI returns with SIGSEGV" -->
<!-- id="577F9947.2000805_at_uni-rostock.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5veKU5WVUYAwtnEp2PdTuJxH0jK2dpPa+K5y52JpEWbnQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-08 08:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29603.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29603.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You made the best of it... thanks a lot!
<br>
<p>Whithout MPI it runs.
<br>
Just adding MPI.init() causes the crash!
<br>
<p>maybe I installed something wrong...
<br>
<p>install newest automake, autoconf, m4, libtoolize in right order and 
<br>
same prefix
<br>
check out ompi,
<br>
autogen
<br>
configure with same prefix, pointing to the same jdk, I later use
<br>
make
<br>
make install
<br>
<p>I will test some different configurations of ./configure...
<br>
<p><p>On 07/08/2016 01:40 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; I am running out of ideas ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what if you do not run within slurm ?
</span><br>
<span class="quotelev1">&gt; what if you do not use '-cp executor.jar'
</span><br>
<span class="quotelev1">&gt; or what if you configure without --disable-dlopen --disable-mca-dso ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ...
</span><br>
<span class="quotelev1">&gt; then MPI_Bcast and MPI_Barrier are basically no-op, so it is really 
</span><br>
<span class="quotelev1">&gt; weird your program is still crashing. an other test is to comment out 
</span><br>
<span class="quotelev1">&gt; MPI_Bcast and MPI_Barrier and try again with -np 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, July 8, 2016, Gundram Leifert 
</span><br>
<span class="quotelev1">&gt; &lt;gundram.leifert_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gundram.leifert_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In any cases the same error.
</span><br>
<span class="quotelev1">&gt;     this is my code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     salloc -n 3
</span><br>
<span class="quotelev1">&gt;     export IPATH_NO_BACKTRACE
</span><br>
<span class="quotelev1">&gt;     ulimit -s 10240
</span><br>
<span class="quotelev1">&gt;     mpirun -np 3 java -cp executor.jar
</span><br>
<span class="quotelev1">&gt;     de.uros.citlab.executor.test.TestSendBigFiles2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     also for 1 or two cores, the process crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 07/08/2016 12:32 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     you can try
</span><br>
<span class="quotelev2">&gt;&gt;     export IPATH_NO_BACKTRACE
</span><br>
<span class="quotelev2">&gt;&gt;     before invoking mpirun (that should not be needed though)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     an other test is to
</span><br>
<span class="quotelev2">&gt;&gt;     ulimit -s 10240
</span><br>
<span class="quotelev2">&gt;&gt;     before invoking mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     btw, do you use mpirun or srun ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     can you reproduce the crash with 1 or 2 tasks ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Friday, July 8, 2016, Gundram Leifert
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;gundram.leifert_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','gundram.leifert_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         configure:
</span><br>
<span class="quotelev2">&gt;&gt;         ./configure --enable-mpi-java
</span><br>
<span class="quotelev2">&gt;&gt;         --with-jdk-dir=/home/gl069/bin/jdk1.7.0_25 --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt;         --disable-mca-dso
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         1 node with 3 cores. I use SLURM to allocate one node. I
</span><br>
<span class="quotelev2">&gt;&gt;         changed --mem, but it has no effect.
</span><br>
<span class="quotelev2">&gt;&gt;         salloc -n 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         core file size          (blocks, -c) 0
</span><br>
<span class="quotelev2">&gt;&gt;         data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;         scheduling priority             (-e) 0
</span><br>
<span class="quotelev2">&gt;&gt;         file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;         pending signals                 (-i) 256564
</span><br>
<span class="quotelev2">&gt;&gt;         max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;         max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;         open files                      (-n) 100000
</span><br>
<span class="quotelev2">&gt;&gt;         pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt;         POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt;         real-time priority              (-r) 0
</span><br>
<span class="quotelev2">&gt;&gt;         stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;         cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;         max user processes              (-u) 4096
</span><br>
<span class="quotelev2">&gt;&gt;         virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;         file locks                      (-x) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         uname -a
</span><br>
<span class="quotelev2">&gt;&gt;         Linux titan01.service 3.10.0-327.13.1.el7.x86_64 #1 SMP Thu
</span><br>
<span class="quotelev2">&gt;&gt;         Mar 31 16:04:38 UTC 2016 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         cat /etc/system-release
</span><br>
<span class="quotelev2">&gt;&gt;         CentOS Linux release 7.2.1511 (Core)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         what else do you need?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers, Gundram
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 07/07/2016 10:05 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Gundram,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         can you please provide more information on your environment :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - configure command line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - OS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - memory available
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - number of nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - number of tasks used
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - interconnect used (if any)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - batch manager (if any)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On 7/7/2016 4:17 PM, Gundram Leifert wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Hello Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I tried you code and it crashes after 3-15 iterations (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (1)). It is always the same error (only the &quot;94&quot; varies).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Meanwhile I think Java and MPI use the same memory because
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         when I delete the hash-call, the program runs sometimes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         more than 9k iterations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         When it crashes, there are different lines (see (2) and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (3)). The crashes also occurs on rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ##### (1)#####
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         # Problematic frame:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         # J 94 C2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         de.uros.citlab.executor.test.TestSendBigFiles2.hashcode([BI)I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         (42 bytes) @ 0x00002b03242dc9c4 [0x00002b03242dc860+0x164]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         #####(2)#####
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         # Problematic frame:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         # V  [libjvm.so+0x68d0f6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         JavaCallWrapper::JavaCallWrapper(methodHandle, Handle,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         JavaValue*, Thread*)+0xb6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         #####(3)#####
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         # Problematic frame:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         # V  [libjvm.so+0x4183bf]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ThreadInVMfromNative::ThreadInVMfromNative(JavaThread*)+0x4f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Any more idea?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         On 07/07/2016 03:00 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Gundram,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         fwiw, i cannot reproduce the issue on my box
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         - centos 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         - java version &quot;1.8.0_71&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Java(TM) SE Runtime Environment (build 1.8.0_71-b15)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Java HotSpot(TM) 64-Bit Server VM (build 25.71-b15,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         mixed mode)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         i noticed on non zero rank saveMem is allocated at each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         iteration.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         ideally, the garbage collector can take care of that and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         this should not be an issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         would you mind giving the attached file a try ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         On 7/7/2016 7:41 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         I will have a look at it today
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         how did you configure OpenMPI ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         On Thursday, July 7, 2016, Gundram Leifert
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         &lt;gundram.leifert_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         &lt;javascript:_e(%7B%7D,'cvml','gundram.leifert_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Hello Giles,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             thank you for your hints! I did 3 changes,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             unfortunately the same error occures:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             update ompi:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             commit ae8444682f0a7aa158caea08800542ce9874455e
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Date:   Tue Jul 5 20:07:16 2016 -0700
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             update java:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             java version &quot;1.8.0_92&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Java(TM) SE Runtime Environment (build 1.8.0_92-b14)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Java HotSpot(TM) Server VM (build 25.92-b14, mixed mode)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             delete hashcode-lines.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Now I get this error message - to 100%, after
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             different number of iterations (15-300):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              0/ 3:length = 100000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              0/ 3:bcast length done (length = 100000000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              1/ 3:bcast length done (length = 100000000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              2/ 3:bcast length done (length = 100000000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # A fatal error has been detected by the Java Runtime
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Environment:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #  SIGSEGV (0xb) at pc=0x00002b3d022fcd24, pid=16578,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             tid=0x00002b3d29716700
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # JRE version: Java(TM) SE Runtime Environment
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             (8.0_92-b14) (build 1.8.0_92-b14)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # Java VM: Java HotSpot(TM) 64-Bit Server VM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             (25.92-b14 mixed mode linux-amd64 compressed oops)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # Problematic frame:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # V  [libjvm.so+0x414d24]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             ciEnv::get_field_by_index(ciInstanceKlass*, int)+0x94
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # Failed to write core dump. Core dumps have been
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             disabled. To enable core dumping, try &quot;ulimit -c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             unlimited&quot; before starting Java again
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # /home/gl069/ompi/bin/executor/hs_err_pid16578.log
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # Compiler replay data is saved as:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # /home/gl069/ompi/bin/executor/replay_pid16578.log
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             # <a href="http://bugreport.java.com/bugreport/crash.jsp">http://bugreport.java.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /usr/lib64/libpthread.so.0(+0xf100)[0x2b3d01500100]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /usr/lib64/libc.so.6(gsignal+0x37)[0x2b3d01b5c5f7]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /usr/lib64/libc.so.6(abort+0x148)[0x2b3d01b5dce8]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x91e605)[0x2b3d02806605]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0xabda63)[0x2b3d029a5a63]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x14f)[0x2b3d0280be2f]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x91a5c3)[0x2b3d028025c3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /usr/lib64/libc.so.6(+0x35670)[0x2b3d01b5c670]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x414d24)[0x2b3d022fcd24]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x43c5ae)[0x2b3d023245ae]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [10]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x369ade)[0x2b3d02251ade]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [11]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36eda0)[0x2b3d02256da0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [12]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37091b)[0x2b3d0225891b]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [13]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3712b6)[0x2b3d022592b6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [14]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36d2cf)[0x2b3d022552cf]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [15]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36e412)[0x2b3d02256412]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [16]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36ed8d)[0x2b3d02256d8d]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [17]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37091b)[0x2b3d0225891b]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [18]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3712b6)[0x2b3d022592b6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [19]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36d2cf)[0x2b3d022552cf]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [20]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36e412)[0x2b3d02256412]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [21]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36ed8d)[0x2b3d02256d8d]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [22]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3708c2)[0x2b3d022588c2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [23]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3724e7)[0x2b3d0225a4e7]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [24]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37a817)[0x2b3d02262817]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [25]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37a92f)[0x2b3d0226292f]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [26]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x358edb)[0x2b3d02240edb]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [27]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x35929e)[0x2b3d0224129e]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [28]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3593ce)[0x2b3d022413ce]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] [29]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x35973e)[0x2b3d0224173e]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             [titan01:16578] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             a non-zero exit code. Per user-direction, the job has
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             been aborted.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             mpirun noticed that process rank 2 with PID 0 on node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             titan01 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             I don't know if it is a  problem of java or ompi -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             but the last years, java worked with no problems on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             my machine...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Thank you for your tips in advance!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             Gundram
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             On 07/06/2016 03:10 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Note a race condition in MPI_Init has been fixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             yesterday in the master.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             can you please update your OpenMPI and try again ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             hopefully the hang will disappear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Can you reproduce the crash with a simpler (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             ideally deterministic) version of your program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             the crash occurs in hashcode, and this makes little
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             sense to me. can you also update your jdk ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             On Wednesday, July 6, 2016, Gundram Leifert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             &lt;gundram.leifert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Hello Jason,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 thanks for your response! I thing it is another
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 problem. I try to send 100MB bytes. So there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 not many tries (between 10 and 30). I realized
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 that the execution of this code can result 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 different errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 1. most often the posted error message occures.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 2. in &lt;10% the cases i have a live lock. I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 see 3 java-processes, one with 200% and two with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 100% processor utilization. After ~15 minutes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 without new system outputs this error occurs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [thread 47499823949568 also had an error]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # A fatal error has been detected by the Java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Runtime Environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 #  Internal Error (safepoint.cpp:317),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 pid=24256, tid=47500347131648
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 #  guarantee(PageArmed == 0) failed: invariant
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # Java VM: Java HotSpot(TM) 64-Bit Server VM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 (23.25-b01 mixed mode linux-amd64 compressed oops)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # Failed to write core dump. Core dumps have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 been disabled. To enable core dumping, try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # An error report file with more information is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 saved as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # /home/gl069/ompi/bin/executor/hs_err_pid24256.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # If you would like to submit a bug report,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 please visit:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 #
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] Signal: Aborted (6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] Signal code:  (-6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /usr/lib64/libpthread.so.0(+0xf100)[0x2b336a324100]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /usr/lib64/libc.so.6(gsignal+0x37)[0x2b336a9815f7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /usr/lib64/libc.so.6(abort+0x148)[0x2b336a982ce8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b336b44fac5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b336b5af137]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x407262)[0x2b336b114262]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x7c6c34)[0x2b336b4d3c34]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a9c17)[0x2b336b5b6c17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8aa2c0)[0x2b336b5b72c0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x744270)[0x2b336b451270]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /usr/lib64/libpthread.so.0(+0x7dc5)[0x2b336a31cdc5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 /usr/lib64/libc.so.6(clone+0x6d)[0x2b336aa4228d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 [titan01:24256] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Primary job  terminated normally, but 1 process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 a non-zero exit code. Per user-direction, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 mpirun noticed that process rank 0 with PID 0 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 node titan01 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 3. in &lt;10% the cases i have a dead lock while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 MPI.init. This stays for more than 15 minutes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 without returning with an error message...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Can I enable some debug-flags to see what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 happens on C / OpenMPI side?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Thanks in advance for your help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Gundram Leifert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 On 07/05/2016 06:05 PM, Jason Maldonis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 After reading your thread looks like it may be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 related to an issue I had a few weeks ago (I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 a novice though). Maybe my thread will be of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 help:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 <a href="https://www.open-mpi.org/community/lists/users/2016/06/29425.php">https://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 When you say &quot;After a specific number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 repetitions the process either hangs up or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 returns with a SIGSEGV.&quot;  does you mean that a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 single call hangs, or that at some point during
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 the for loop a call hangs? If you mean the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 latter, then it might relate to my issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Otherwise my thread probably won't be helpful.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Jason Maldonis
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Materials Science Grad Student
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 University of Wisconsin, Madison
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 1509 University Ave, Rm M142
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Madison, WI 53706
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 maldonis_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 &lt;javascript:_e(%7B%7D,'cvml','maldonis_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 608-295-5532
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 On Tue, Jul 5, 2016 at 9:58 AM, Gundram Leifert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 &lt;gundram.leifert_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 &lt;javascript:_e(%7B%7D,'cvml','gundram.leifert_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     I try to send many byte-arrays via
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     broadcast. After a specific number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     repetitions the process either hangs up or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     returns with a SIGSEGV. Does any one can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     help me solving the problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     ########## The code:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     import java.util.Random;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     import mpi.*;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     public class TestSendBigFiles {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         public static void log(String msg) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             try {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     System.err.println(String.format(&quot;%2d/%2d:%s&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.getRank(),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.getSize(), msg));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             } catch (MPIException ex) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     System.err.println(String.format(&quot;%2s/%2s:%s&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     &quot;?&quot;, &quot;?&quot;, msg));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         private static int hashcode(byte[]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     bytearray) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             if (bytearray == null) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             int hash = 39;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             for (int i = 0; i &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     bytearray.length; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 byte b = bytearray[i];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 hash = hash * 7 + (int) b;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             return hash;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         public static void main(String args[])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     throws MPIException {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             log(&quot;start main&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.Init(args);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             try {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     log(&quot;initialized done&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 byte[] saveMem = new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     byte[100000000];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 Random r = new Random();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     r.nextBytes(saveMem);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 if (MPI.COMM_WORLD.getRank() ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     for (int i = 0; i &lt; 1000; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     saveMem[r.nextInt(saveMem.length)]++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;i = &quot; + i);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       int[] lengthData = new int[]{saveMem.length};
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;length = &quot; + lengthData[0]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;bcast length done (length = &quot; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.bcast(saveMem,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     lengthData[0], MPI.BYTE, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.bcast(new int[]{0}, 1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 } else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     while (true) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       int[] lengthData = new int[1];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;bcast length done (length = &quot; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       if (lengthData[0] == 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                           break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       saveMem = new byte[lengthData[0]];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.bcast(saveMem,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     saveMem.length, MPI.BYTE, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                       log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             } catch (MPIException ex) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     log(ex.getMessage());
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             } catch (RuntimeException ex) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     log(ex.getMessage());
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             } finally {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     MPI.Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                             }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     ############ The Error (if it does not just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     hang up):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # A fatal error has been detected by the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #  SIGSEGV (0xb) at pc=0x00002b7e9c86e3a1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     pid=1172, tid=47822674495232
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # A fatal error has been detected by the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Java Runtime Environment:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Java VM: Java HotSpot(TM) 64-Bit Server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     VM (23.25-b01 mixed mode linux-amd64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     compressed oops)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Problematic frame:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #  SIGSEGV (0xb) at pc=0x00002af69c0693a1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     pid=1173, tid=47238546896640
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     J
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Failed to write core dump. Core dumps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     have been disabled. To enable core dumping,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     try &quot;ulimit -c unlimited&quot; before starting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Java again
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Java VM: Java HotSpot(TM) 64-Bit Server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     VM (23.25-b01 mixed mode linux-amd64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     compressed oops)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Problematic frame:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # J
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # Failed to write core dump. Core dumps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     have been disabled. To enable core dumping,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     try &quot;ulimit -c unlimited&quot; before starting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Java again
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # An error report file with more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     information is saved as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/ompi/bin/executor/hs_err_pid1172.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # An error report file with more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     information is saved as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/ompi/bin/executor/hs_err_pid1173.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # If you would like to submit a bug report,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     please visit:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # If you would like to submit a bug report,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     please visit:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] Signal: Aborted (6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] Signal code:  (-6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] Signal: Aborted (6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] Signal code:  (-6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libpthread.so.0(+0xf100)[0x2b7e9596a100]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(gsignal+0x37)[0x2b7e95fc75f7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(abort+0x148)[0x2b7e95fc8ce8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b7e96a95ac5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b7e96bf5137]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2b7e96a995e0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 6] [titan01:01173] [ 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libpthread.so.0(+0xf100)[0x2af694ded100]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(+0x35670)[0x2b7e95fc7670]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] [ 7] [0x2b7e9c86e3a1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01172] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(gsignal+0x37)[0x2af69544a5f7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(abort+0x148)[0x2af69544bce8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2af695f18ac5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2af696078137]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2af695f1c5e0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     /usr/lib64/libc.so.6(+0x35670)[0x2af69544a670]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] [ 7] [0x2af69c0693a1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     [titan01:01173] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Primary job terminated normally, but 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     process returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     a non-zero exit code. Per user-direction,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     the job has been aborted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     -------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     mpirun noticed that process rank 1 with PID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     0 on node titan01 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     ########CONFIGURATION:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     I used the ompi master sources from github:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     commit 267821f0dd405b5f4370017a287d9a49f92e734a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Author: Gilles Gouaillardet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Date:   Tue Jul 5 13:47:50 2016 +0900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     ./configure --enable-mpi-java
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     --with-jdk-dir=/home/gl069/bin/jdk1.7.0_25
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     --disable-dlopen --disable-mca-dso
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Thanks a lot for your help!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Gundram
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/community/lists/users/2016/07/29584.php">http://www.open-mpi.org/community/lists/users/2016/07/29584.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29585.php">http://www.open-mpi.org/community/lists/users/2016/07/29585.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29587.php">http://www.open-mpi.org/community/lists/users/2016/07/29587.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29589.php">http://www.open-mpi.org/community/lists/users/2016/07/29589.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29590.php">http://www.open-mpi.org/community/lists/users/2016/07/29590.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29592.php">http://www.open-mpi.org/community/lists/users/2016/07/29592.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29593.php">http://www.open-mpi.org/community/lists/users/2016/07/29593.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29601.php">http://www.open-mpi.org/community/lists/users/2016/07/29601.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29603.php">http://www.open-mpi.org/community/lists/users/2016/07/29603.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29603.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29603.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
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
