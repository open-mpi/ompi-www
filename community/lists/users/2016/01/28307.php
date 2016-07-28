<?
$subject_val = "Re: [OMPI users] problemwithexecstackandopenmpi-v1.10.1-140-g31ff573";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 07:23:27 2016" -->
<!-- isoreceived="20160120122327" -->
<!-- sent="Wed, 20 Jan 2016 13:22:34 +0100" -->
<!-- isosent="20160120122234" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problemwithexecstackandopenmpi-v1.10.1-140-g31ff573" -->
<!-- id="569F7C0A.5040100_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="569EF814.4050304_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] problemwithexecstackandopenmpi-v1.10.1-140-g31ff573<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-20 07:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28306.php">Gilles Gouaillardet: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28306.php">Gilles Gouaillardet: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28286.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>thank you very much for your help! Your workaround works on my
<br>
Linux machine as well.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<p><p>On 01/20/16 03:59, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that looks like a libtool issue : &quot;-z noexecstack&quot; is not correctly passed to cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a simple workaround is to append &quot;-Wl,-z -Wl,noexecstack&quot; to your LDFLAGS
</span><br>
<span class="quotelev1">&gt; (and do not pass &quot;-z noexecstack&quot; to LDFLAGS nor CFLAGS)
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
<span class="quotelev1">&gt; On 1/19/2016 11:19 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we have installed &quot;execstack&quot;, but it doesn't work as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loki lib64 110 execstack -c libmpi_java.so.1.2.0
</span><br>
<span class="quotelev2">&gt;&gt; execstack: libmpi_java.so.1.2.0: Unknown debugging section .debug_funcnames
</span><br>
<span class="quotelev2">&gt;&gt; loki lib64 111
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've also tried to build it with &quot;cc&quot; instead of &quot;gcc&quot;, but it
</span><br>
<span class="quotelev2">&gt;&gt; failed, because &quot;configure&quot; still uses &quot;-Wall&quot; and friends, although
</span><br>
<span class="quotelev2">&gt;&gt; it used the correct compilers. I've removed &quot;-Wall&quot; and &quot;-Wno-...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; from all Makefiles. Unfortunately there are still some &quot;-Wl,...&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; so that &quot;make&quot; fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; cc -m64 -m64 -o execstack execstack.o checksum.o data.o dso.o dwarf2.o fptr.o hashtab.o mdebug.o stabs.o crc32.o
</span><br>
<span class="quotelev2">&gt;&gt; arch-i386.o arch-alpha.o arch-ppc.o arch-ppc64.o arch-sparc.o arch-sparc64.o arch-x86_64.o arch-mips.o arch-s390.o
</span><br>
<span class="quotelev2">&gt;&gt; arch-s390x.o arch-arm.o arch-sh.o arch-ia64.o -lelf
</span><br>
<span class="quotelev2">&gt;&gt; dso.o: In function `fdopen_dso':
</span><br>
<span class="quotelev2">&gt;&gt; dso.c:(.text+0x1bd1): undefined reference to `__start_pl_arch'
</span><br>
<span class="quotelev2">&gt;&gt; dso.c:(.text+0x1be6): undefined reference to `__stop_pl_arch'
</span><br>
<span class="quotelev2">&gt;&gt; dso.c:(.text+0x1c73): undefined reference to `__stop_pl_arch'
</span><br>
<span class="quotelev2">&gt;&gt; dso.c:(.text+0x1c87): undefined reference to `__stop_pl_arch'
</span><br>
<span class="quotelev2">&gt;&gt; dso.o: In function `update_dso':
</span><br>
<span class="quotelev2">&gt;&gt; dso.c:(.text+0x7212): undefined reference to `strdupa'
</span><br>
<span class="quotelev2">&gt;&gt; dso.c:(.text+0x7231): undefined reference to `strdupa'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:266: recipe for target 'execstack' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [execstack] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully you find the place where you must add &quot;-z noexecstack&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; so that the warnings for Java programs will not appear in future
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI versions.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 15.01.2016 um 14:05 schrieb Siegmar Gross:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;execstack&quot; isn't available at our system and it isn't part of the repository
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for SuSE Linux Enterprise Server or Desktop. Next week I'll ask our admin,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if he can try to locate and install the program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 01/15/16 08:01, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did you try to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execstack -c /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and did this help ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the message suggests you link with -z noexecstack,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you added this to your CFLAGS and not LDFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would you mind trying to configure with LDFLAGS='-m64 -mt -z noexecstack'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and see if it helps ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 1/14/2016 11:30 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've successfully built openmpi-v1.10.1-140-g31ff573 on my machine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sun C 5.13. Unfortunately I get warnings if I use my cc version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; running a Java program, although I added &quot;-z noexecstack&quot; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CFLAGS. I used the following commands to build the package.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mkdir openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cd openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../openmpi-v1.10.1-140-g31ff573/configure \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --prefix=/usr/local/openmpi-1.10.2_64_cc \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --libdir=/usr/local/openmpi-1.10.2_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.8.0_66/include \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   JAVA_HOME=/usr/local/jdk1.8.0_66 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   LDFLAGS=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   CFLAGS=&quot;-m64 -mt -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --with-wrapper-ldflags=&quot;-mt&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki java 115 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; absolute:&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Open MPI repo revision: v1.10.1-140-g31ff573
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; loki java 116 mpiexec -np 4 --host loki --slot-list 0:0-5,1:0-5 java
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; disabled stack guard. The VM will try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; disabled stack guard. The VM will try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; disabled stack guard. The VM will try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; disabled stack guard. The VM will try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fix the stack guard now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's highly recommended that you fix the library with 'execstack -c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;libfile&gt;', or link it with '-z noexecstack'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now 3 processes are sending greetings.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   message length: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   message:        loki
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anybody know how I can get rid of the messages or can somebody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fix the problem directly in the distribution? Please let me know if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you need anything else. Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28275.php">http://www.open-mpi.org/community/lists/users/2016/01/28275.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28282.php">http://www.open-mpi.org/community/lists/users/2016/01/28282.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28285.php">http://www.open-mpi.org/community/lists/users/2016/01/28285.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28300.php">http://www.open-mpi.org/community/lists/users/2016/01/28300.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28306.php">http://www.open-mpi.org/community/lists/users/2016/01/28306.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28308.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28306.php">Gilles Gouaillardet: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28306.php">Gilles Gouaillardet: "Re: [OMPI users] problem withexecstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28286.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
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
