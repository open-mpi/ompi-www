<?
$subject_val = "[OMPI users] problem with Sun C 5.14 beta";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 05:34:55 2016" -->
<!-- isoreceived="20160507093455" -->
<!-- sent="Sat, 7 May 2016 11:34:30 +0200" -->
<!-- isosent="20160507093430" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with Sun C 5.14 beta" -->
<!-- id="c2fe6d5c-5016-98a9-585c-383d3d08bb9d_at_informatik.hs-fulda.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] problem with Sun C 5.14 beta<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 05:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29129.php">Siegmar Gross: "[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29132.php">Gilles Gouaillardet: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Reply:</strong> <a href="29132.php">Gilles Gouaillardet: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to install openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
<br>
Enterprise Server 12 (x86_64)&quot; with Sun C 5.14 beta. Unfortunately
<br>
&quot;configure&quot; breaks, because it thinks that C and C++ are link
<br>
incompatible. I used the following configure command.
<br>
<p>../openmpi-v1.10.2-176-g9d45e07/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.10.3_64_cc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.10.3_64_cc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0_66/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0_66 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64 -mt -Wl,-z -Wl,noexecstack&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64 -mt&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
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
<p><p>I don't know if it is a compiler problem or a problem with the
<br>
configure command. Perhaps you are nevertheless interested in
<br>
the problem.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29130/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29130/log.configure.Linux.x86_64.64_cc">log.configure.Linux.x86_64.64_cc</a>
</ul>
<!-- attachment="log.configure.Linux.x86_64.64_cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29129.php">Siegmar Gross: "[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29132.php">Gilles Gouaillardet: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Reply:</strong> <a href="29132.php">Gilles Gouaillardet: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
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
