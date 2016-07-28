<?
$subject_val = "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 12:29:41 2014" -->
<!-- isoreceived="20141024162941" -->
<!-- sent="Fri, 24 Oct 2014 18:29:24 +0200 (CEST)" -->
<!-- isosent="20141024162924" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="201410241629.s9OGTOlY007249_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 12:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25576.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25582.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="25582.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>thank you very much for your help.
<br>
<p><span class="quotelev1">&gt; how did you configure openmpi ? which java version did you use ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i just found a regression and you currently have to explicitly add
</span><br>
<span class="quotelev1">&gt; CFLAGS=-D_REENTRANT CPPFLAGS=-D_REENTRANT
</span><br>
<span class="quotelev1">&gt; to your configure command line
</span><br>
<p>I added &quot;-D_REENTRANT&quot; to my command.
<br>
<p>../openmpi-dev-124-g91e9686/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64 -D_REENTRANT&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;-D_REENTRANT&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>I use Java 8.
<br>
<p>tyr openmpi-1.9 112 java -version
<br>
java version &quot;1.8.0&quot;
<br>
Java(TM) SE Runtime Environment (build 1.8.0-b132)
<br>
Java HotSpot(TM) 64-Bit Server VM (build 25.0-b70, mixed mode)
<br>
tyr openmpi-1.9 113 
<br>
<p>Unfortunately I still get a SIGSEGV with openmpi-dev-124-g91e9686.
<br>
I have applied your patch and will try to debug my small Java
<br>
program tomorrow or next week and then let you know the result.
<br>
<p><p>Kind regards and thank you very much once more
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25576.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25582.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="25582.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
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
