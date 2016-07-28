<?
$subject_val = "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 08:05:56 2016" -->
<!-- isoreceived="20160115130556" -->
<!-- sent="Fri, 15 Jan 2016 14:05:28 +0100" -->
<!-- isosent="20160115130528" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573" -->
<!-- id="5698EE98.9090303_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5698994D.9000707_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-01-15 08:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28286.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28284.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28300.php">Siegmar Gross: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Reply:</strong> <a href="28300.php">Siegmar Gross: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>&quot;execstack&quot; isn't available at our system and it isn't part of the repository
<br>
for SuSE Linux Enterprise Server or Desktop. Next week I'll ask our admin,
<br>
if he can try to locate and install the program.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<p><p>On 01/15/16 08:01, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did you try to run
</span><br>
<span class="quotelev1">&gt; execstack -c /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and did this help ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the message suggests you link with -z noexecstack,
</span><br>
<span class="quotelev1">&gt; you added this to your CFLAGS and not LDFLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would you mind trying to configure with LDFLAGS='-m64 -mt -z noexecstack' and see if it helps ?
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
<span class="quotelev1">&gt; On 1/14/2016 11:30 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've successfully built openmpi-v1.10.1-140-g31ff573 on my machine
</span><br>
<span class="quotelev2">&gt;&gt; (SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
</span><br>
<span class="quotelev2">&gt;&gt; Sun C 5.13. Unfortunately I get warnings if I use my cc version
</span><br>
<span class="quotelev2">&gt;&gt; running a Java program, although I added &quot;-z noexecstack&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS. I used the following commands to build the package.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mkdir openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt; cd openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-v1.10.1-140-g31ff573/configure \
</span><br>
<span class="quotelev2">&gt;&gt;   --prefix=/usr/local/openmpi-1.10.2_64_cc \
</span><br>
<span class="quotelev2">&gt;&gt;   --libdir=/usr/local/openmpi-1.10.2_64_cc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.8.0_66/include \
</span><br>
<span class="quotelev2">&gt;&gt;   JAVA_HOME=/usr/local/jdk1.8.0_66 \
</span><br>
<span class="quotelev2">&gt;&gt;   LDFLAGS=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CFLAGS=&quot;-m64 -mt -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-ldflags=&quot;-mt&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki java 115 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler absolute:&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI repo revision: v1.10.1-140-g31ff573
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki java 116 mpiexec -np 4 --host loki --slot-list 0:0-5,1:0-5 java MsgSendRecvMain
</span><br>
<span class="quotelev2">&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to
</span><br>
<span class="quotelev2">&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev2">&gt;&gt; It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev2">&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to
</span><br>
<span class="quotelev2">&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev2">&gt;&gt; It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev2">&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to
</span><br>
<span class="quotelev2">&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev2">&gt;&gt; It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev2">&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to
</span><br>
<span class="quotelev2">&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev2">&gt;&gt; It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now 3 processes are sending greetings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from process 1:
</span><br>
<span class="quotelev2">&gt;&gt;   message tag:    3
</span><br>
<span class="quotelev2">&gt;&gt;   message length: 4
</span><br>
<span class="quotelev2">&gt;&gt;   message:        loki
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody know how I can get rid of the messages or can somebody
</span><br>
<span class="quotelev2">&gt;&gt; fix the problem directly in the distribution? Please let me know if
</span><br>
<span class="quotelev2">&gt;&gt; you need anything else. Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28275.php">http://www.open-mpi.org/community/lists/users/2016/01/28275.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28282.php">http://www.open-mpi.org/community/lists/users/2016/01/28282.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28286.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28284.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28300.php">Siegmar Gross: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Reply:</strong> <a href="28300.php">Siegmar Gross: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
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
