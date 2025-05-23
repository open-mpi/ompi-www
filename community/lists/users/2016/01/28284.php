<?
$subject_val = "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 04:06:48 2016" -->
<!-- isoreceived="20160115090648" -->
<!-- sent="Fri, 15 Jan 2016 10:05:50 +0100" -->
<!-- isosent="20160115090550" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573" -->
<!-- id="5698B66E.4080903_at_informatik.hs-fulda.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj4PQuEzzPvzpvEOXj3bpee1AfYKpQjNdN0Jbm1AP_snjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 04:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28285.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>In reply to:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>I've attached the file.
<br>
<p>Best regards
<br>
<p>Siegmar
<br>
<p><p>Am 14.01.2016 um 18:40 schrieb Howard Pritchard:
<br>
<span class="quotelev1">&gt; HI Sigmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you mind posting your MsgSendRecvMain to the mail list?  I'd like to see
</span><br>
<span class="quotelev1">&gt; if I can
</span><br>
<span class="quotelev1">&gt; reproduce it on my linux box.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-14 7:30 GMT-07:00 Siegmar Gross &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I've successfully built openmpi-v1.10.1-140-g31ff573 on my machine
</span><br>
<span class="quotelev1">&gt;     (SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
</span><br>
<span class="quotelev1">&gt;     Sun C 5.13. Unfortunately I get warnings if I use my cc version
</span><br>
<span class="quotelev1">&gt;     running a Java program, although I added &quot;-z noexecstack&quot; to
</span><br>
<span class="quotelev1">&gt;     CFLAGS. I used the following commands to build the package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mkdir openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt;     cd openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../openmpi-v1.10.1-140-g31ff573/configure \
</span><br>
<span class="quotelev1">&gt;        --prefix=/usr/local/openmpi-1.10.2_64_cc \
</span><br>
<span class="quotelev1">&gt;        --libdir=/usr/local/openmpi-1.10.2_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;        --with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
</span><br>
<span class="quotelev1">&gt;        --with-jdk-headers=/usr/local/jdk1.8.0_66/include \
</span><br>
<span class="quotelev1">&gt;        JAVA_HOME=/usr/local/jdk1.8.0_66 \
</span><br>
<span class="quotelev1">&gt;        LDFLAGS=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;        CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;        CFLAGS=&quot;-m64 -mt -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot;
</span><br>
<span class="quotelev1">&gt;     FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;        CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;        --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;        --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;        --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;        --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;        --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;        --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;        --without-verbs \
</span><br>
<span class="quotelev1">&gt;        --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;        --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev1">&gt;        --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;        --with-wrapper-ldflags=&quot;-mt&quot; \
</span><br>
<span class="quotelev1">&gt;        --enable-debug \
</span><br>
<span class="quotelev1">&gt;        |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     loki java 115 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C
</span><br>
<span class="quotelev1">&gt;     compiler absolute:&quot;
</span><br>
<span class="quotelev1">&gt;        Open MPI repo revision: v1.10.1-140-g31ff573
</span><br>
<span class="quotelev1">&gt;           C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     loki java 116 mpiexec -np 4 --host loki --slot-list 0:0-5,1:0-5 java
</span><br>
<span class="quotelev1">&gt;     MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt;     Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;     /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might
</span><br>
<span class="quotelev1">&gt;     have disabled stack guard. The VM will try to fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;     It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;     &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;     Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;     /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might
</span><br>
<span class="quotelev1">&gt;     have disabled stack guard. The VM will try to fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;     It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;     &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;     Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;     /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might
</span><br>
<span class="quotelev1">&gt;     have disabled stack guard. The VM will try to fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;     It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;     &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;     Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;     /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might
</span><br>
<span class="quotelev1">&gt;     have disabled stack guard. The VM will try to fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;     It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;     &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Now 3 processes are sending greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;        message tag:    3
</span><br>
<span class="quotelev1">&gt;        message length: 4
</span><br>
<span class="quotelev1">&gt;        message:        loki
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does anybody know how I can get rid of the messages or can somebody
</span><br>
<span class="quotelev1">&gt;     fix the problem directly in the distribution? Please let me know if
</span><br>
<span class="quotelev1">&gt;     you need anything else. Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Siegmar
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/01/28275.php">http://www.open-mpi.org/community/lists/users/2016/01/28275.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28276.php">http://www.open-mpi.org/community/lists/users/2016/01/28276.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28284/MsgSendRecvMain.java">MsgSendRecvMain.java</a>
</ul>
<!-- attachment="MsgSendRecvMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28285.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28283.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>In reply to:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
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
