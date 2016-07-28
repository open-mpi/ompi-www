<?
$subject_val = "[OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 09:31:18 2016" -->
<!-- isoreceived="20160114143118" -->
<!-- sent="Thu, 14 Jan 2016 15:30:19 +0100" -->
<!-- isosent="20160114143019" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573" -->
<!-- id="5697B0FB.7060600_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 09:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28274.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-dev-3356-ge5cf2db"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Reply:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Reply:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've successfully built openmpi-v1.10.1-140-g31ff573 on my machine
<br>
(SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
<br>
Sun C 5.13. Unfortunately I get warnings if I use my cc version
<br>
running a Java program, although I added &quot;-z noexecstack&quot; to
<br>
CFLAGS. I used the following commands to build the package.
<br>
<p><p>mkdir openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
<br>
cd openmpi-v1.10.1-140-g31ff573-${SYSTEM_ENV}.${MACHINE_ENV}.64_cc
<br>
<p>../openmpi-v1.10.1-140-g31ff573/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.10.2_64_cc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.10.2_64_cc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0_66/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0_66 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64 -mt -z noexecstack&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-mt&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p><p><p><p>loki java 115 ompi_info | egrep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;Open MPI repo revision: v1.10.1-140-g31ff573
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
<p>loki java 116 mpiexec -np 4 --host loki --slot-list 0:0-5,1:0-5 java MsgSendRecvMain
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to fix 
<br>
the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to fix 
<br>
the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to fix 
<br>
the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.10.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try to fix 
<br>
the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
<p>Now 3 processes are sending greetings.
<br>
<p>Greetings from process 1:
<br>
&nbsp;&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;&nbsp;message length: 4
<br>
&nbsp;&nbsp;&nbsp;message:        loki
<br>
...
<br>
<p><p>Does anybody know how I can get rid of the messages or can somebody
<br>
fix the problem directly in the distribution? Please let me know if
<br>
you need anything else. Thank you very much for any help in advance.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Previous message:</strong> <a href="28274.php">Siegmar Gross: "[OMPI users] runtime errors with openmpi-dev-3356-ge5cf2db"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Reply:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>Reply:</strong> <a href="28282.php">Gilles Gouaillardet: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
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
