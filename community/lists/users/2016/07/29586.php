<?
$subject_val = "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 08:21:02 2016" -->
<!-- isoreceived="20160706122102" -->
<!-- sent="Wed, 6 Jul 2016 14:12:11 +0200" -->
<!-- isosent="20160706121211" -->
<!-- name="Gundram Leifert" -->
<!-- email="gundram.leifert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java-OpenMPI returns with SIGSEGV" -->
<!-- id="577CF59B.3040501_at_uni-rostock.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+LevYKXy0y3vpF3azZNgCDK5rMbtT+655+ZHvybpbxJRtQ=MA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-06 08:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29585.php">Jason Maldonis: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29585.php">Jason Maldonis: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jason,
<br>
<p>thanks for your response! I thing it is another problem. I try to send 
<br>
100MB bytes. So there are not many tries (between 10 and 30). I realized 
<br>
that the execution of this code can result 3 different errors:
<br>
<p>1. most often the posted error message occures.
<br>
<p>2. in &lt;10% the cases i have a live lock. I can see 3 java-processes, one 
<br>
with 200% and two with 100% processor utilization. After ~15 minutes 
<br>
without new system outputs this error occurs.
<br>
<p><p>[thread 47499823949568 also had an error]
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  Internal Error (safepoint.cpp:317), pid=24256, tid=47500347131648
<br>
#  guarantee(PageArmed == 0) failed: invariant
<br>
#
<br>
# JRE version: 7.0_25-b15
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed mode 
<br>
linux-amd64 compressed oops)
<br>
# Failed to write core dump. Core dumps have been disabled. To enable 
<br>
core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/gl069/ompi/bin/executor/hs_err_pid24256.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
#
<br>
[titan01:24256] *** Process received signal ***
<br>
[titan01:24256] Signal: Aborted (6)
<br>
[titan01:24256] Signal code:  (-6)
<br>
[titan01:24256] [ 0] /usr/lib64/libpthread.so.0(+0xf100)[0x2b336a324100]
<br>
[titan01:24256] [ 1] /usr/lib64/libc.so.6(gsignal+0x37)[0x2b336a9815f7]
<br>
[titan01:24256] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2b336a982ce8]
<br>
[titan01:24256] [ 3] 
<br>
/home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b336b44fac5]
<br>
[titan01:24256] [ 4] 
<br>
/home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b336b5af137]
<br>
[titan01:24256] [ 5] 
<br>
/home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x407262)[0x2b336b114262]
<br>
[titan01:24256] [ 6] 
<br>
/home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x7c6c34)[0x2b336b4d3c34]
<br>
[titan01:24256] [ 7] 
<br>
/home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a9c17)[0x2b336b5b6c17]
<br>
[titan01:24256] [ 8] 
<br>
/home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8aa2c0)[0x2b336b5b72c0]
<br>
[titan01:24256] [ 9] 
<br>
/home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x744270)[0x2b336b451270]
<br>
[titan01:24256] [10] /usr/lib64/libpthread.so.0(+0x7dc5)[0x2b336a31cdc5]
<br>
[titan01:24256] [11] /usr/lib64/libc.so.6(clone+0x6d)[0x2b336aa4228d]
<br>
[titan01:24256] *** End of error message ***
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 0 on node titan01 exited on 
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p>3. in &lt;10% the cases i have a dead lock while MPI.init. This stays for 
<br>
more than 15 minutes without returning with an error message...
<br>
<p>Can I enable some debug-flags to see what happens on C / OpenMPI side?
<br>
<p>Thanks in advance for your help!
<br>
Gundram Leifert
<br>
<p><p>On 07/05/2016 06:05 PM, Jason Maldonis wrote:
<br>
<span class="quotelev1">&gt; After reading your thread looks like it may be related to an issue I 
</span><br>
<span class="quotelev1">&gt; had a few weeks ago (I'm a novice though). Maybe my thread will be of 
</span><br>
<span class="quotelev1">&gt; help: <a href="https://www.open-mpi.org/community/lists/users/2016/06/29425.php">https://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you say &quot;After a specific number of repetitions the process 
</span><br>
<span class="quotelev1">&gt; either hangs up or returns with a SIGSEGV.&quot;  does you mean that a 
</span><br>
<span class="quotelev1">&gt; single call hangs, or that at some point during the for loop a call 
</span><br>
<span class="quotelev1">&gt; hangs? If you mean the latter, then it might relate to my issue. 
</span><br>
<span class="quotelev1">&gt; Otherwise my thread probably won't be helpful.
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
<span class="quotelev1">&gt; maldonis_at_[hidden] &lt;mailto:maldonis_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 608-295-5532
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 5, 2016 at 9:58 AM, Gundram Leifert 
</span><br>
<span class="quotelev1">&gt; &lt;gundram.leifert_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gundram.leifert_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I try to send many byte-arrays via broadcast. After a specific
</span><br>
<span class="quotelev1">&gt;     number of repetitions the process either hangs up or returns with
</span><br>
<span class="quotelev1">&gt;     a SIGSEGV. Does any one can help me solving the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ########## The code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     import java.util.Random;
</span><br>
<span class="quotelev1">&gt;     import mpi.*;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     public class TestSendBigFiles {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         public static void log(String msg) {
</span><br>
<span class="quotelev1">&gt;             try {
</span><br>
<span class="quotelev1">&gt;                 System.err.println(String.format(&quot;%2d/%2d:%s&quot;,
</span><br>
<span class="quotelev1">&gt;     MPI.COMM_WORLD.getRank(), MPI.COMM_WORLD.getSize(), msg));
</span><br>
<span class="quotelev1">&gt;             } catch (MPIException ex) {
</span><br>
<span class="quotelev1">&gt;                 System.err.println(String.format(&quot;%2s/%2s:%s&quot;, &quot;?&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;?&quot;, msg));
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         private static int hashcode(byte[] bytearray) {
</span><br>
<span class="quotelev1">&gt;             if (bytearray == null) {
</span><br>
<span class="quotelev1">&gt;                 return 0;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             int hash = 39;
</span><br>
<span class="quotelev1">&gt;             for (int i = 0; i &lt; bytearray.length; i++) {
</span><br>
<span class="quotelev1">&gt;                 byte b = bytearray[i];
</span><br>
<span class="quotelev1">&gt;                 hash = hash * 7 + (int) b;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             return hash;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         public static void main(String args[]) throws MPIException {
</span><br>
<span class="quotelev1">&gt;             log(&quot;start main&quot;);
</span><br>
<span class="quotelev1">&gt;             MPI.Init(args);
</span><br>
<span class="quotelev1">&gt;             try {
</span><br>
<span class="quotelev1">&gt;                 log(&quot;initialized done&quot;);
</span><br>
<span class="quotelev1">&gt;                 byte[] saveMem = new byte[100000000];
</span><br>
<span class="quotelev1">&gt;                 MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;                 Random r = new Random();
</span><br>
<span class="quotelev1">&gt;                 r.nextBytes(saveMem);
</span><br>
<span class="quotelev1">&gt;                 if (MPI.COMM_WORLD.getRank() == 0) {
</span><br>
<span class="quotelev1">&gt;                     for (int i = 0; i &lt; 1000; i++) {
</span><br>
<span class="quotelev1">&gt;                         saveMem[r.nextInt(saveMem.length)]++;
</span><br>
<span class="quotelev1">&gt;                         log(&quot;i = &quot; + i);
</span><br>
<span class="quotelev1">&gt;                         int[] lengthData = new int[]{saveMem.length};
</span><br>
<span class="quotelev1">&gt;                         log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev1">&gt;                         log(&quot;length = &quot; + lengthData[0]);
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev1">&gt;                         log(&quot;bcast length done (length = &quot; +
</span><br>
<span class="quotelev1">&gt;     lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.bcast(saveMem, lengthData[0],
</span><br>
<span class="quotelev1">&gt;     MPI.BYTE, 0);
</span><br>
<span class="quotelev1">&gt;                         log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     MPI.COMM_WORLD.bcast(new int[]{0}, 1, MPI.INT
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev1">&gt;                 } else {
</span><br>
<span class="quotelev1">&gt;                     while (true) {
</span><br>
<span class="quotelev1">&gt;                         int[] lengthData = new int[1];
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev1">&gt;                         log(&quot;bcast length done (length = &quot; +
</span><br>
<span class="quotelev1">&gt;     lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev1">&gt;                         if (lengthData[0] == 0) {
</span><br>
<span class="quotelev1">&gt;                             break;
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;                         saveMem = new byte[lengthData[0]];
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.bcast(saveMem, saveMem.length,
</span><br>
<span class="quotelev1">&gt;     MPI.BYTE, 0);
</span><br>
<span class="quotelev1">&gt;                         log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev1">&gt;                         MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;                         log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev1">&gt;             } catch (MPIException ex) {
</span><br>
<span class="quotelev1">&gt;                 System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev1">&gt;                 log(ex.getMessage());
</span><br>
<span class="quotelev1">&gt;             } catch (RuntimeException ex) {
</span><br>
<span class="quotelev1">&gt;                 System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev1">&gt;                 log(ex.getMessage());
</span><br>
<span class="quotelev1">&gt;             } finally {
</span><br>
<span class="quotelev1">&gt;                 MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ############ The Error (if it does not just hang up):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     #  SIGSEGV (0xb) at pc=0x00002b7e9c86e3a1, pid=1172,
</span><br>
<span class="quotelev1">&gt;     tid=47822674495232
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;     # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev1">&gt;     # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev1">&gt;     linux-amd64 compressed oops)
</span><br>
<span class="quotelev1">&gt;     # Problematic frame:
</span><br>
<span class="quotelev1">&gt;     # #
</span><br>
<span class="quotelev1">&gt;     #  SIGSEGV (0xb) at pc=0x00002af69c0693a1, pid=1173,
</span><br>
<span class="quotelev1">&gt;     tid=47238546896640
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev1">&gt;     J de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # Failed to write core dump. Core dumps have been disabled. To
</span><br>
<span class="quotelev1">&gt;     enable core dumping, try &quot;ulimit -c unlimited&quot; before starting
</span><br>
<span class="quotelev1">&gt;     Java again
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev1">&gt;     linux-amd64 compressed oops)
</span><br>
<span class="quotelev1">&gt;     # Problematic frame:
</span><br>
<span class="quotelev1">&gt;     # J de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # Failed to write core dump. Core dumps have been disabled. To
</span><br>
<span class="quotelev1">&gt;     enable core dumping, try &quot;ulimit -c unlimited&quot; before starting
</span><br>
<span class="quotelev1">&gt;     Java again
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt;     # /home/gl069/ompi/bin/executor/hs_err_pid1172.log
</span><br>
<span class="quotelev1">&gt;     # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt;     # /home/gl069/ompi/bin/executor/hs_err_pid1173.log
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt;     # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt;     # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 0]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/libpthread.so.0(+0xf100)[0x2b7e9596a100]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 1]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/libc.so.6(gsignal+0x37)[0x2b7e95fc75f7]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2b7e95fc8ce8]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 3]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b7e96a95ac5]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 4]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b7e96bf5137]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 5]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2b7e96a995e0]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 6] [titan01:01173] [ 0]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/libpthread.so.0(+0xf100)[0x2af694ded100]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] [ 1] /usr/lib64/libc.so.6(+0x35670)[0x2b7e95fc7670]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] [ 7] [0x2b7e9c86e3a1]
</span><br>
<span class="quotelev1">&gt;     [titan01:01172] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/libc.so.6(gsignal+0x37)[0x2af69544a5f7]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2af69544bce8]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] [ 3]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2af695f18ac5]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] [ 4]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2af696078137]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] [ 5]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2af695f1c5e0]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] [ 6] /usr/lib64/libc.so.6(+0x35670)[0x2af69544a670]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] [ 7] [0x2af69c0693a1]
</span><br>
<span class="quotelev1">&gt;     [titan01:01173] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;     a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that process rank 1 with PID 0 on node titan01
</span><br>
<span class="quotelev1">&gt;     exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ########CONFIGURATION:
</span><br>
<span class="quotelev1">&gt;     I used the ompi master sources from github:
</span><br>
<span class="quotelev1">&gt;     commit 267821f0dd405b5f4370017a287d9a49f92e734a
</span><br>
<span class="quotelev1">&gt;     Author: Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Date:   Tue Jul 5 13:47:50 2016 +0900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure --enable-mpi-java
</span><br>
<span class="quotelev1">&gt;     --with-jdk-dir=/home/gl069/bin/jdk1.7.0_25 --disable-dlopen
</span><br>
<span class="quotelev1">&gt;     --disable-mca-dso
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks a lot for your help!
</span><br>
<span class="quotelev1">&gt;     Gundram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/07/29584.php">http://www.open-mpi.org/community/lists/users/2016/07/29584.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29585.php">http://www.open-mpi.org/community/lists/users/2016/07/29585.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29586/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29585.php">Jason Maldonis: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29585.php">Jason Maldonis: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
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
