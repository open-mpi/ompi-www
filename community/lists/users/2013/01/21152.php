<?
$subject_val = "Re: [OMPI users] Problem with mpirun for java codes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 15:23:36 2013" -->
<!-- isoreceived="20130118202336" -->
<!-- sent="Fri, 18 Jan 2013 12:23:31 -0800 (PST)" -->
<!-- isosent="20130118202331" -->
<!-- name="Chuck Mosher" -->
<!-- email="chuckmosher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun for java codes" -->
<!-- id="1358540611.42595.YahooMailNeo_at_web141105.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="34DA2D27-723A-405C-9984-CFA97DDA8FEE_at_open-mpi.org" -->
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
<strong>From:</strong> Chuck Mosher (<em>chuckmosher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-18 15:23:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21153.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21150.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21153.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Reply:</strong> <a href="21153.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph - I'm relying on you guys to support Java, hope it makes it back in soon !!!

I've had no problems, by the way.

Karos - Were you able to make and run the Java examples in the MPI_ROOT/examples directory ?

I started with those after similar hiccups trying to get things up and running.

Chuck Mosher
JavaSeis.org


________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, January 17, 2013 2:27 PM
Subject: Re: [OMPI users] Problem with mpirun for java codes
 

Just as an FYI: we have removed the Java bindings from the 1.7.0 release due to all the reported errors - looks like that code just isn't ready yet for release. It remains available on the nightly snapshots of the developer's trunk while we continue to debug it.

With that said, I tried your example using the current developer's trunk - and it worked just fine.

I ran it on a single node, however. Were you running this across multiple nodes? Is it possible that the &quot;classes&quot; directory wasn't available on the remote node?



On Jan 16, 2013, at 4:17 PM, Karos Lotfifar &lt;foadfbf_at_[hidden]&gt; wrote:

Hi,&#160;
&gt;The version that I am using is&#160;
&gt;
&gt;
&gt;1.7rc6 (pre-release)
&gt;
&gt;
&gt;
&gt;
&gt;Regards,
&gt;Karos
&gt;
&gt;On 16 Jan 2013, at 21:07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt;
&gt;Which version of OMPI are you using?
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;On Jan 16, 2013, at 11:43 AM, Karos Lotfifar &lt;foadfbf_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;Hi,
&gt;&gt;&gt;
&gt;&gt;&gt;I am still struggling with the installation problems! I get very strange errors. everything is fine when I run OpenMPI for C codes, but when I try to run a simple java code I get very strange error. The code is as simple as the following and I can not get it running:
&gt;&gt;&gt;
&gt;&gt;&gt;import mpi.*;
&gt;&gt;&gt;
&gt;&gt;&gt;class JavaMPI {
&gt;&gt;&gt;&#160; public static void main(String[] args) throws MPIException {
&gt;&gt;&gt;&#160;&#160;&#160; MPI.Init(args);
&gt;&gt;&gt;&#160;&#160;&#160; System.out.println(&quot;Hello world from rank &quot; + 
&gt;&gt;&gt;&#160;&#160;&#160;&#160;&#160; MPI.COMM_WORLD.Rank() + &quot; of &quot; +
&gt;&gt;&gt;&#160;&#160;&#160;&#160;&#160; MPI.COMM_WORLD.Size() );
&gt;&gt;&gt;&#160;&#160;&#160; MPI.Finalize();
&gt;&gt;&gt;&#160; }
&gt;&gt;&gt;} 
&gt;&gt;&gt;
&gt;&gt;&gt;everything is ok with mpijavac, my java code, etc. when I try to run the code with the following command:
&gt;&gt;&gt;
&gt;&gt;&gt;/usr/local/bin/mpijavac -d classes JavaMPI.java&#160;&#160;&#160;&#160;&#160;&#160; --&gt; FINE
&gt;&gt;&gt;/usr/local/bin/mpirun -np 2 java -cp ./classes JavaMPI&#160; --&gt; *ERROR*
&gt;&gt;&gt;
&gt;&gt;&gt;I'll the following error. Could you please help me about this (As I mentioned the I can run C MPI codes without any problem ). The system specifications are:
&gt;&gt;&gt;
&gt;&gt;&gt;JRE version: 6.0_30-b12 (java-sun-6)
&gt;&gt;&gt;OS: Linux 3.0.0-30-generic-pae #47-Ubuntu
&gt;&gt;&gt;CPU:total 4 (2 cores per cpu, 2 threads per core) family 6 model 42 stepping 7, cmov, cx8, fxsr, mmx, sse, sse2, sse3, ssse3, sse4.1, sse4.2, popcnt, ht
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;##################################################################################################################
&gt;&gt;&gt;#
&gt;&gt;&gt;# A fatal error has been detected by the Java Runtime Environment:
&gt;&gt;&gt;#
&gt;&gt;&gt;#&#160; SIGSEGV#
&gt;&gt;&gt;# A fatal error has been detected by the Java Runtime Environment:
&gt;&gt;&gt;#
&gt;&gt;&gt;#&#160; SIGSEGV (0xb) at pc=0x70e1dd12, pid=28616, tid=3063311216
&gt;&gt;&gt;#
&gt;&gt;&gt;&#160;(0xb) at pc=0x70f61d12, pid=28615, tid=3063343984
&gt;&gt;&gt;#
&gt;&gt;&gt;# JRE version: 6.0_30-b12
&gt;&gt;&gt;# JRE version: 6.0_30-b12
&gt;&gt;&gt;# Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
&gt;&gt;&gt;# Problematic frame:
&gt;&gt;&gt;# C&#160; [libmpi.so.1+0x20d12]&#160; unsigned __int128+0xa2
&gt;&gt;&gt;#
&gt;&gt;&gt;# An error report file with more information is saved as:
&gt;&gt;&gt;# /home/karos/hs_err_pid28616.log
&gt;&gt;&gt;# Java VM: Java HotSpot(TM) Server VM (20.5-b03 mixed mode linux-x86 )
&gt;&gt;&gt;# Problematic frame:
&gt;&gt;&gt;# C&#160; [libmpi.so.1+0x20d12]&#160; unsigned __int128+0xa2
&gt;&gt;&gt;#
&gt;&gt;&gt;# An error report file with more information is saved as:
&gt;&gt;&gt;# /home/karos/hs_err_pid28615.log
&gt;&gt;&gt;#
&gt;&gt;&gt;# If you would like to submit a bug report, please visit:
&gt;&gt;&gt;#&#160;&#160; <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
&gt;&gt;&gt;# The crash happened outside the Java Virtual Machine in native code.
&gt;&gt;&gt;# See problematic frame for where to report the bug.
&gt;&gt;&gt;#
&gt;&gt;&gt;[tulips:28616] *** Process received signal ***
&gt;&gt;&gt;[tulips:28616] Signal: Aborted (6)
&gt;&gt;&gt;[tulips:28616] Signal code:&#160; (-6)
&gt;&gt;&gt;[tulips:28616] [ 0] [0xb777840c]
&gt;&gt;&gt;[tulips:28616] [ 1] [0xb7778424]
&gt;&gt;&gt;[tulips:28616] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75e3cff]
&gt;&gt;&gt;[tulips:28616] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75e7325]
&gt;&gt;&gt;[tulips:28616] [ 4] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f) [0xb6f6df7f]
&gt;&gt;&gt;[tulips:28616] [ 5] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897) [0xb70b5897]
&gt;&gt;&gt;[tulips:28616] [ 6] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c) [0xb6f7529c]
&gt;&gt;&gt;[tulips:28616] [ 7] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64) [0xb6f70f64]
&gt;&gt;&gt;[tulips:28616] [ 8] [0xb777840c]
&gt;&gt;&gt;[tulips:28616] [ 9] [0xb3891548]
&gt;&gt;&gt;[tulips:28616] *** End of error message ***
&gt;&gt;&gt;[tulips:28615] *** Process received signal ***
&gt;&gt;&gt;[tulips:28615] Signal: Aborted (6)
&gt;&gt;&gt;[tulips:28615] Signal code:&#160; (-6)
&gt;&gt;&gt;#
&gt;&gt;&gt;# If you would like to submit a bug report, please visit:
&gt;&gt;&gt;#&#160;&#160; <a href="http://java.sun.com/webapps/bugreport/crash.jsp">http://java.sun.com/webapps/bugreport/crash.jsp</a>
&gt;&gt;&gt;# The crash happened outside the Java Virtual Machine in native code.
&gt;&gt;&gt;# See problematic frame for where to report the bug.
&gt;&gt;&gt;#
&gt;&gt;&gt;[tulips:28615] [ 0] [0xb778040c]
&gt;&gt;&gt;[tulips:28615] [ 1] [0xb7780424]
&gt;&gt;&gt;[tulips:28615] [ 2] /lib/i386-linux-gnu/libc.so.6(gsignal+0x4f) [0xb75ebcff]
&gt;&gt;&gt;[tulips:28615] [ 3] /lib/i386-linux-gnu/libc.so.6(abort+0x175) [0xb75ef325]
&gt;&gt;&gt;[tulips:28615] [ 4] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dcf7f) [0xb6f75f7f]
&gt;&gt;&gt;[tulips:28615] [ 5] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x724897) [0xb70bd897]
&gt;&gt;&gt;[tulips:28615] [ 6] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(JVM_handle_linux_signal+0x21c) [0xb6f7d29c]
&gt;&gt;&gt;[tulips:28615] [ 7] /usr/lib/jvm/java-6-sun-1.6.0.30/jre/lib/i386/server/libjvm.so(+0x5dff64) [0xb6f78f64]
&gt;&gt;&gt;[tulips:28615] [ 8] [0xb778040c]
&gt;&gt;&gt;[tulips:28615] [ 9] [0xb3899548]
&gt;&gt;&gt;[tulips:28615] *** End of error message ***
&gt;&gt;&gt;--------------------------------------------------------------------------
&gt;&gt;&gt;mpirun noticed that process rank 1 with PID 28616 on node tulips exited on signal 6 (Aborted).
&gt;&gt;&gt;--------------------------------------------------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt;##################################################################################################################
&gt;&gt;&gt;
&gt;&gt;&gt;-- 
&gt;&gt;&gt;Regards,
&gt;&gt;&gt;Karos Lotfifar
_______________________________________________
&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21153.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21150.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21153.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Reply:</strong> <a href="21153.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
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
