<?
$subject_val = "[OMPI users] Problem with mpirun for java codes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 14:44:02 2013" -->
<!-- isoreceived="20130116194402" -->
<!-- sent="Wed, 16 Jan 2013 19:43:57 +0000" -->
<!-- isosent="20130116194357" -->
<!-- name="Karos Lotfifar" -->
<!-- email="foadfbf_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with mpirun for java codes" -->
<!-- id="CAGr61rJQVWTn0v2v9wJqT48xEnBmgiX+3+AN3faePHiQE86u2Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with mpirun for java codes<br>
<strong>From:</strong> Karos Lotfifar (<em>foadfbf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 14:43:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21140.php">Karos Lotfifar: "[OMPI users] help - Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21138.php">Divakar Viswanath: "[OMPI users] openmpi 1.4 vs. 1.6 internals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21141.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Reply:</strong> <a href="21141.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am still struggling with the installation problems! I get very strange
<br>
errors. everything is fine when I run OpenMPI for C codes, but when I try
<br>
to run a simple java code I get very strange error. The code is as simple
<br>
as the following and I can not get it running:
<br>
<p>import mpi.*;
<br>
<p>class JavaMPI {
<br>
&nbsp;&nbsp;public static void main(String[] args) throws MPIException {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init(args);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;Hello world from rank &quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Rank() + &quot; of &quot; +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.Size() );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize();
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p>everything is ok with mpijavac, my java code, etc. when I try to run the
<br>
code with the following command:
<br>
<p>/usr/local/bin/mpijavac -d classes JavaMPI.java       --&gt; FINE
<br>
/usr/local/bin/mpirun -np 2 java -cp ./classes JavaMPI  --&gt; *ERROR*
<br>
<p>I'll the following error. Could you please help me about this (As I
<br>
mentioned the I can run C MPI codes without any problem ). The system
<br>
specifications are:
<br>
<p>JRE version: 6.0_30-b12 (java-sun-6)
<br>
OS: Linux 3.0.0-30-generic-pae #47-Ubuntu
<br>
CPU:total 4 (2 cores per cpu, 2 threads per core) family 6 model 42
<br>
stepping 7, cmov, cx8, fxsr, mmx, sse, sse2, sse3, ssse3, sse4.1, sse4.2,
<br>
popcnt, ht
<br>
<p><p><p><p>##################################################################################################################
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0x70e1dd12, pid=28616, tid=3063311216
<br>
#
<br>
&nbsp;(0xb) at pc=0x70f61d12, pid=28615, tid=3063343984
<br>
#
<br>
# JRE version: 6.0_30-b12
<br>
# JRE version: 6.0_30-b12
<br>
# Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
<br>
# Problematic frame:
<br>
# C  [libmpi.so.1+0x20d12]  unsigned __int128+0xa2
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/karos/hs_err_pid28616.log
<br>
# Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
<br>
# Problematic frame:
<br>
# C  [libmpi.so.1+0x20d12]  unsigned __int128+0xa2
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/karos/hs_err_pid28615.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
<br>
# The crash happened outside the Java Virtual Machine in native code.
<br>
# See problematic frame for where to report the bug.
<br>
#
<br>
[tulips:28616] *** Process received signal ***
<br>
[tulips:28616] Signal: Aborted (6)
<br>
[tulips:28616] Signal code:  (-6)
<br>
[tulips:28616] [ 0] [0xb777840c]
<br>
[tulips:28616] [ 1] [0xb7778424]
<br>
[tulips:28616] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75e3cff]
<br>
[tulips:28616] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75e7325]
<br>
[tulips:28616] [ 4]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f)
<br>
[0xb6f6df7f]
<br>
[tulips:28616] [ 5]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897)
<br>
[0xb70b5897]
<br>
[tulips:28616] [ 6]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c)
<br>
[0xb6f7529c]
<br>
[tulips:28616] [ 7]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64)
<br>
[0xb6f70f64]
<br>
[tulips:28616] [ 8] [0xb777840c]
<br>
[tulips:28616] [ 9] [0xb3891548]
<br>
[tulips:28616] *** End of error message ***
<br>
[tulips:28615] *** Process received signal ***
<br>
[tulips:28615] Signal: Aborted (6)
<br>
[tulips:28615] Signal code:  (-6)
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
<br>
# The crash happened outside the Java Virtual Machine in native code.
<br>
# See problematic frame for where to report the bug.
<br>
#
<br>
[tulips:28615] [ 0] [0xb778040c]
<br>
[tulips:28615] [ 1] [0xb7780424]
<br>
[tulips:28615] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75ebcff]
<br>
[tulips:28615] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75ef325]
<br>
[tulips:28615] [ 4]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f)
<br>
[0xb6f75f7f]
<br>
[tulips:28615] [ 5]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897)
<br>
[0xb70bd897]
<br>
[tulips:28615] [ 6]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c)
<br>
[0xb6f7d29c]
<br>
[tulips:28615] [ 7]
<br>
/usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64)
<br>
[0xb6f78f64]
<br>
[tulips:28615] [ 8] [0xb778040c]
<br>
[tulips:28615] [ 9] [0xb3899548]
<br>
[tulips:28615] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 28616 on node tulips exited on
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p>##################################################################################################################
<br>
<p><pre>
-- 
Regards,
Karos Lotfifar
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21140.php">Karos Lotfifar: "[OMPI users] help - Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21138.php">Divakar Viswanath: "[OMPI users] openmpi 1.4 vs. 1.6 internals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21141.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Reply:</strong> <a href="21141.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
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
