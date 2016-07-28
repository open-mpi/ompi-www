<?
$subject_val = "Re: [OMPI users] Problem with mpirun for java codes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 20:24:35 2013" -->
<!-- isoreceived="20130119012435" -->
<!-- sent="Sat, 19 Jan 2013 01:24:29 +0000" -->
<!-- isosent="20130119012429" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun for java codes" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E087C24_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1CC4600F-16DD-4568-A6FE-DB21D3485730_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-18 20:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21154.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>In reply to:</strong> <a href="21154.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the examples didn't work for you, then something else was wrong (or there's some bug that we're unaware of) -- we're all able to run the examples ok.  We pulled Java from the 1.7.0 release because of issues with multi-dimensional arrays, MPI.OBJECT weirdness, ...etc.  Basic functionality, like the examples, should work fine.
<br>
<p><p><p>On Jan 18, 2013, at 8:20 PM, Karos Lotfifar &lt;foadfbf_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Chuck, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I tried the examples but they did not work as well. Hope the issues would be resolved soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Karos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18 Jan 2013, at 20:26, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I expect it to be in the 1.7.1 release - we just need some time to really test it and clean things up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meantime, it is available in the developer's nightly tarball, or via svn checkout.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 18, 2013, at 12:23 PM, Chuck Mosher &lt;chuckmosher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph - I'm relying on you guys to support Java, hope it makes it back in soon !!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've had no problems, by the way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karos - Were you able to make and run the Java examples in the MPI_ROOT/examples directory  ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I started with those after similar hiccups trying to get things up and running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chuck Mosher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JavaSeis.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, January 17, 2013 2:27 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Problem with mpirun for java codes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just as an FYI: we have removed the Java bindings from the 1.7.0 release due to all the reported errors - looks like that code just isn't ready yet for release. It remains available on the nightly snapshots of the developer's trunk while we continue to debug it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With that said, I tried your example using the current developer's trunk - and it worked just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran it on a single node, however. Were you running this across multiple nodes? Is it possible that the &quot;classes&quot; directory wasn't available on the remote node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 16, 2013, at 4:17 PM, Karos Lotfifar &lt;foadfbf_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The version that I am using is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.7rc6 (pre-release)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Karos
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 16 Jan 2013, at 21:07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Which version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 16, 2013, at 11:43 AM, Karos Lotfifar &lt;foadfbf_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am still struggling with the installation problems! I get very strange errors. everything is fine when I run OpenMPI for C codes, but when I try to run a simple java code I get very strange error. The code is as simple as the following and I can not get it running:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; import mpi.*;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; class JavaMPI {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   public static void main(String[] args) throws MPIException {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI.Init(args);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     System.out.println(&quot;Hello world from rank &quot; + 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       MPI.COMM_WORLD.Rank() + &quot; of &quot; +
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       MPI.COMM_WORLD.Size() );
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI.Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; } 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; everything is ok with mpijavac, my java code, etc. when I try to run the code with the following command:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/bin/mpijavac -d classes JavaMPI.java       --&gt; FINE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/bin/mpirun -np 2 java -cp ./classes JavaMPI  --&gt; *ERROR*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'll the following error. Could you please help me about this (As I mentioned the I can run C MPI codes without any problem ). The system specifications are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; JRE version: 6.0_30-b12 (java-sun-6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OS: Linux 3.0.0-30-generic-pae #47-Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CPU:total 4 (2 cores per cpu, 2 threads per core) family 6 model 42 stepping 7, cmov, cx8, fxsr, mmx, sse, sse2, sse3, ssse3, sse4.1, sse4.2, popcnt, ht
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################################################
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #  SIGSEGV#
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #  SIGSEGV (0xb) at pc=0x70e1dd12, pid=28616, tid=3063311216
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  (0xb) at pc=0x70f61d12, pid=28615, tid=3063343984
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # JRE version: 6.0_30-b12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # JRE version: 6.0_30-b12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # C  [libmpi.so.1+0x20d12]  unsigned __int128+0xa2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # /home/karos/hs_err_pid28616.log
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # C  [libmpi.so.1+0x20d12]  unsigned __int128+0xa2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # /home/karos/hs_err_pid28615.log
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #   <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 0] [0xb777840c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 1] [0xb7778424]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75e3cff]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75e7325]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 4] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f) [0xb6f6df7f]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 5] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897) [0xb70b5897]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 6] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c) [0xb6f7529c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 7] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64) [0xb6f70f64]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 8] [0xb777840c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] [ 9] [0xb3891548]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28616] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #   <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 0] [0xb778040c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 1] [0xb7780424]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75ebcff]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75ef325]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 4] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f) [0xb6f75f7f]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 5] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897) [0xb70bd897]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 6] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c) [0xb6f7d29c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 7] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64) [0xb6f78f64]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 8] [0xb778040c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] [ 9] [0xb3899548]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [tulips:28615] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 28616 on node tulips exited on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ##################################################################################################################
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Karos Lotfifar _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21154.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>In reply to:</strong> <a href="21154.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
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
