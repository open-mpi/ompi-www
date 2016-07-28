<?
$subject_val = "Re: [OMPI users] Problem with mpirun for java codes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 16:07:11 2013" -->
<!-- isoreceived="20130116210711" -->
<!-- sent="Wed, 16 Jan 2013 13:07:00 -0800" -->
<!-- isosent="20130116210700" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun for java codes" -->
<!-- id="201AD5CB-B52C-47EA-B2BA-AECAC628F23F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGr61rJQVWTn0v2v9wJqT48xEnBmgiX+3+AN3faePHiQE86u2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with mpirun for java codes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 16:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21140.php">Karos Lotfifar: "[OMPI users] help - Problem with mpirun for java codes"</a>
<li><strong>In reply to:</strong> <a href="21139.php">Karos Lotfifar: "[OMPI users] Problem with mpirun for java codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Reply:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of OMPI are you using?
<br>
<p><p>On Jan 16, 2013, at 11:43 AM, Karos Lotfifar &lt;foadfbf_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am still struggling with the installation problems! I get very strange errors. everything is fine when I run OpenMPI for C codes, but when I try to run a simple java code I get very strange error. The code is as simple as the following and I can not get it running:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; import mpi.*;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; class JavaMPI {
</span><br>
<span class="quotelev1">&gt;   public static void main(String[] args) throws MPIException {
</span><br>
<span class="quotelev1">&gt;     MPI.Init(args);
</span><br>
<span class="quotelev1">&gt;     System.out.println(&quot;Hello world from rank &quot; + 
</span><br>
<span class="quotelev1">&gt;       MPI.COMM_WORLD.Rank() + &quot; of &quot; +
</span><br>
<span class="quotelev1">&gt;       MPI.COMM_WORLD.Size() );
</span><br>
<span class="quotelev1">&gt;     MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; everything is ok with mpijavac, my java code, etc. when I try to run the code with the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpijavac -d classes JavaMPI.java       --&gt; FINE
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun -np 2 java -cp ./classes JavaMPI  --&gt; *ERROR*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll the following error. Could you please help me about this (As I mentioned the I can run C MPI codes without any problem ). The system specifications are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JRE version: 6.0_30-b12 (java-sun-6)
</span><br>
<span class="quotelev1">&gt; OS: Linux 3.0.0-30-generic-pae #47-Ubuntu
</span><br>
<span class="quotelev1">&gt; CPU:total 4 (2 cores per cpu, 2 threads per core) family 6 model 42 stepping 7, cmov, cx8, fxsr, mmx, sse, sse2, sse3, ssse3, sse4.1, sse4.2, popcnt, ht
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################################################################################################################
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV#
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0x70e1dd12, pid=28616, tid=3063311216
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;  (0xb) at pc=0x70f61d12, pid=28615, tid=3063343984
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: 6.0_30-b12
</span><br>
<span class="quotelev1">&gt; # JRE version: 6.0_30-b12
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
</span><br>
<span class="quotelev1">&gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; # C  [libmpi.so.1+0x20d12]  unsigned __int128+0xa2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/karos/hs_err_pid28616.log
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
</span><br>
<span class="quotelev1">&gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; # C  [libmpi.so.1+0x20d12]  unsigned __int128+0xa2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/karos/hs_err_pid28615.log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; [tulips:28616] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tulips:28616] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [tulips:28616] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 0] [0xb777840c]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 1] [0xb7778424]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75e3cff]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75e7325]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 4] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f) [0xb6f6df7f]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 5] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897) [0xb70b5897]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 6] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c) [0xb6f7529c]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 7] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64) [0xb6f70f64]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 8] [0xb777840c]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] [ 9] [0xb3891548]
</span><br>
<span class="quotelev1">&gt; [tulips:28616] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [tulips:28615] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tulips:28615] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [tulips:28615] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 0] [0xb778040c]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 1] [0xb7780424]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75ebcff]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75ef325]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 4] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f) [0xb6f75f7f]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 5] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897) [0xb70bd897]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 6] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c) [0xb6f7d29c]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 7] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64) [0xb6f78f64]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 8] [0xb778040c]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] [ 9] [0xb3899548]
</span><br>
<span class="quotelev1">&gt; [tulips:28615] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 28616 on node tulips exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################################################################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Karos Lotfifar _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21140.php">Karos Lotfifar: "[OMPI users] help - Problem with mpirun for java codes"</a>
<li><strong>In reply to:</strong> <a href="21139.php">Karos Lotfifar: "[OMPI users] Problem with mpirun for java codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Reply:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
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
