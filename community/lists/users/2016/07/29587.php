<?
$subject_val = "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 09:10:55 2016" -->
<!-- isoreceived="20160706131055" -->
<!-- sent="Wed, 6 Jul 2016 22:10:52 +0900" -->
<!-- isosent="20160706131052" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java-OpenMPI returns with SIGSEGV" -->
<!-- id="CAAkFZ5sqjPyXdsGyV6EWtRhLsREa3MS=-m61bi0xKu2KG6-e5g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="577CF59B.3040501_at_uni-rostock.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-06 09:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29588.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29586.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29586.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29588.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29588.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note a race condition in MPI_Init has been fixed yesterday in the master.
<br>
can you please update your OpenMPI and try again ?
<br>
<p>hopefully the hang will disappear.
<br>
<p>Can you reproduce the crash with a simpler (and ideally deterministic)
<br>
version of your program.
<br>
the crash occurs in hashcode, and this makes little sense to me. can you
<br>
also update your jdk ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, July 6, 2016, Gundram Leifert &lt;gundram.leifert_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jason,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your response! I thing it is another problem. I try to send
</span><br>
<span class="quotelev1">&gt; 100MB bytes. So there are not many tries (between 10 and 30). I realized
</span><br>
<span class="quotelev1">&gt; that the execution of this code can result 3 different errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. most often the posted error message occures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. in &lt;10% the cases i have a live lock. I can see 3 java-processes, one
</span><br>
<span class="quotelev1">&gt; with 200% and two with 100% processor utilization. After ~15 minutes
</span><br>
<span class="quotelev1">&gt; without new system outputs this error occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [thread 47499823949568 also had an error]
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  Internal Error (safepoint.cpp:317), pid=24256, tid=47500347131648
</span><br>
<span class="quotelev1">&gt; #  guarantee(PageArmed == 0) failed: invariant
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev1">&gt; linux-amd64 compressed oops)
</span><br>
<span class="quotelev1">&gt; # Failed to write core dump. Core dumps have been disabled. To enable core
</span><br>
<span class="quotelev1">&gt; dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/gl069/ompi/bin/executor/hs_err_pid24256.log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; [titan01:24256] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [titan01:24256] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [titan01:24256] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 0] /usr/lib64/libpthread.so.0(+0xf100)[0x2b336a324100]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 1] /usr/lib64/libc.so.6(gsignal+0x37)[0x2b336a9815f7]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2b336a982ce8]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b336b44fac5]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b336b5af137]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x407262)[0x2b336b114262]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x7c6c34)[0x2b336b4d3c34]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a9c17)[0x2b336b5b6c17]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8aa2c0)[0x2b336b5b72c0]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x744270)[0x2b336b451270]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [10] /usr/lib64/libpthread.so.0(+0x7dc5)[0x2b336a31cdc5]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] [11] /usr/lib64/libc.so.6(clone+0x6d)[0x2b336aa4228d]
</span><br>
<span class="quotelev1">&gt; [titan01:24256] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 0 on node titan01 exited on
</span><br>
<span class="quotelev1">&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. in &lt;10% the cases i have a dead lock while MPI.init. This stays for
</span><br>
<span class="quotelev1">&gt; more than 15 minutes without returning with an error message...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I enable some debug-flags to see what happens on C / OpenMPI side?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help!
</span><br>
<span class="quotelev1">&gt; Gundram Leifert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/05/2016 06:05 PM, Jason Maldonis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After reading your thread looks like it may be related to an issue I had a
</span><br>
<span class="quotelev1">&gt; few weeks ago (I'm a novice though). Maybe my thread will be of help:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2016/06/29425.php">https://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you say &quot;After a specific number of repetitions the process either
</span><br>
<span class="quotelev1">&gt; hangs up or returns with a SIGSEGV.&quot;  does you mean that a single call
</span><br>
<span class="quotelev1">&gt; hangs, or that at some point during the for loop a call hangs? If you mean
</span><br>
<span class="quotelev1">&gt; the latter, then it might relate to my issue. Otherwise my thread probably
</span><br>
<span class="quotelev1">&gt; won't be helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jason Maldonis
</span><br>
<span class="quotelev1">&gt; Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev1">&gt; Materials Science Grad Student
</span><br>
<span class="quotelev1">&gt; University of Wisconsin, Madison
</span><br>
<span class="quotelev1">&gt; 1509 University Ave, Rm M142
</span><br>
<span class="quotelev1">&gt; Madison, WI 53706
</span><br>
<span class="quotelev1">&gt; maldonis_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','maldonis_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; 608-295-5532
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 5, 2016 at 9:58 AM, Gundram Leifert &lt;
</span><br>
<span class="quotelev1">&gt; gundram.leifert_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gundram.leifert_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to send many byte-arrays via broadcast. After a specific number of
</span><br>
<span class="quotelev2">&gt;&gt; repetitions the process either hangs up or returns with a SIGSEGV. Does any
</span><br>
<span class="quotelev2">&gt;&gt; one can help me solving the problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ########## The code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; import java.util.Random;
</span><br>
<span class="quotelev2">&gt;&gt; import mpi.*;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; public class TestSendBigFiles {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     public static void log(String msg) {
</span><br>
<span class="quotelev2">&gt;&gt;         try {
</span><br>
<span class="quotelev2">&gt;&gt;             System.err.println(String.format(&quot;%2d/%2d:%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; MPI.COMM_WORLD.getRank(), MPI.COMM_WORLD.getSize(), msg));
</span><br>
<span class="quotelev2">&gt;&gt;         } catch (MPIException ex) {
</span><br>
<span class="quotelev2">&gt;&gt;             System.err.println(String.format(&quot;%2s/%2s:%s&quot;, &quot;?&quot;, &quot;?&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; msg));
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     private static int hashcode(byte[] bytearray) {
</span><br>
<span class="quotelev2">&gt;&gt;         if (bytearray == null) {
</span><br>
<span class="quotelev2">&gt;&gt;             return 0;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         int hash = 39;
</span><br>
<span class="quotelev2">&gt;&gt;         for (int i = 0; i &lt; bytearray.length; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;             byte b = bytearray[i];
</span><br>
<span class="quotelev2">&gt;&gt;             hash = hash * 7 + (int) b;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         return hash;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     public static void main(String args[]) throws MPIException {
</span><br>
<span class="quotelev2">&gt;&gt;         log(&quot;start main&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI.Init(args);
</span><br>
<span class="quotelev2">&gt;&gt;         try {
</span><br>
<span class="quotelev2">&gt;&gt;             log(&quot;initialized done&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;             byte[] saveMem = new byte[100000000];
</span><br>
<span class="quotelev2">&gt;&gt;             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;             Random r = new Random();
</span><br>
<span class="quotelev2">&gt;&gt;             r.nextBytes(saveMem);
</span><br>
<span class="quotelev2">&gt;&gt;             if (MPI.COMM_WORLD.getRank() == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                 for (int i = 0; i &lt; 1000; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;                     saveMem[r.nextInt(saveMem.length)]++;
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;i = &quot; + i);
</span><br>
<span class="quotelev2">&gt;&gt;                     int[] lengthData = new int[]{saveMem.length};
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;length = &quot; + lengthData[0]);
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;bcast length done (length = &quot; + lengthData[0] +
</span><br>
<span class="quotelev2">&gt;&gt; &quot;)&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.bcast(saveMem, lengthData[0],
</span><br>
<span class="quotelev2">&gt;&gt; MPI.BYTE, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI.COMM_WORLD.bcast(new int[]{0}, 1, MPI.INT, 0);
</span><br>
<span class="quotelev2">&gt;&gt;             } else {
</span><br>
<span class="quotelev2">&gt;&gt;                 while (true) {
</span><br>
<span class="quotelev2">&gt;&gt;                     int[] lengthData = new int[1];
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;bcast length done (length = &quot; + lengthData[0] +
</span><br>
<span class="quotelev2">&gt;&gt; &quot;)&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     if (lengthData[0] == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                         break;
</span><br>
<span class="quotelev2">&gt;&gt;                     }
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                     saveMem = new byte[lengthData[0]];
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.bcast(saveMem, saveMem.length,
</span><br>
<span class="quotelev2">&gt;&gt; MPI.BYTE, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;         } catch (MPIException ex) {
</span><br>
<span class="quotelev2">&gt;&gt;             System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev2">&gt;&gt;             log(ex.getMessage());
</span><br>
<span class="quotelev2">&gt;&gt;         } catch (RuntimeException ex) {
</span><br>
<span class="quotelev2">&gt;&gt;             System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev2">&gt;&gt;             log(ex.getMessage());
</span><br>
<span class="quotelev2">&gt;&gt;         } finally {
</span><br>
<span class="quotelev2">&gt;&gt;             MPI.Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ############ The Error (if it does not just hang up):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #  SIGSEGV (0xb) at pc=0x00002b7e9c86e3a1, pid=1172, tid=47822674495232
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt;&gt; # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev2">&gt;&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev2">&gt;&gt; linux-amd64 compressed oops)
</span><br>
<span class="quotelev2">&gt;&gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt;&gt; # #
</span><br>
<span class="quotelev2">&gt;&gt; #  SIGSEGV (0xb) at pc=0x00002af69c0693a1, pid=1173, tid=47238546896640
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev2">&gt;&gt; J  de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Failed to write core dump. Core dumps have been disabled. To enable
</span><br>
<span class="quotelev2">&gt;&gt; core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev2">&gt;&gt; linux-amd64 compressed oops)
</span><br>
<span class="quotelev2">&gt;&gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt;&gt; # J  de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Failed to write core dump. Core dumps have been disabled. To enable
</span><br>
<span class="quotelev2">&gt;&gt; core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt;&gt; # /home/gl069/ompi/bin/executor/hs_err_pid1172.log
</span><br>
<span class="quotelev2">&gt;&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt;&gt; # /home/gl069/ompi/bin/executor/hs_err_pid1173.log
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt;&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt;&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 0] /usr/lib64/libpthread.so.0(+0xf100)[0x2b7e9596a100]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 1] /usr/lib64/libc.so.6(gsignal+0x37)[0x2b7e95fc75f7]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2b7e95fc8ce8]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b7e96a95ac5]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b7e96bf5137]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2b7e96a995e0]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 6] [titan01:01173] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libpthread.so.0(+0xf100)[0x2af694ded100]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] [ 1] /usr/lib64/libc.so.6(+0x35670)[0x2b7e95fc7670]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] [ 7] [0x2b7e9c86e3a1]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01172] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libc.so.6(gsignal+0x37)[0x2af69544a5f7]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2af69544bce8]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2af695f18ac5]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2af696078137]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2af695f1c5e0]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] [ 6] /usr/lib64/libc.so.6(+0x35670)[0x2af69544a670]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] [ 7] [0x2af69c0693a1]
</span><br>
<span class="quotelev2">&gt;&gt; [titan01:01173] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 0 on node titan01 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ########CONFIGURATION:
</span><br>
<span class="quotelev2">&gt;&gt; I used the ompi master sources from github:
</span><br>
<span class="quotelev2">&gt;&gt; commit 267821f0dd405b5f4370017a287d9a49f92e734a
</span><br>
<span class="quotelev2">&gt;&gt; Author: Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Tue Jul 5 13:47:50 2016 +0900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-mpi-java --with-jdk-dir=/home/gl069/bin/jdk1.7.0_25
</span><br>
<span class="quotelev2">&gt;&gt; --disable-dlopen --disable-mca-dso
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for your help!
</span><br>
<span class="quotelev2">&gt;&gt; Gundram
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29584.php">http://www.open-mpi.org/community/lists/users/2016/07/29584.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29585.php">http://www.open-mpi.org/community/lists/users/2016/07/29585.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29588.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29586.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29586.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29588.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29588.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
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
