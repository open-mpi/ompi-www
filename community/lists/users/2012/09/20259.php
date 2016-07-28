<?
$subject_val = "Re: [OMPI users] problem with mpijavac in openmpi-1.9a1r27359";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 22 15:10:23 2012" -->
<!-- isoreceived="20120922191023" -->
<!-- sent="Sat, 22 Sep 2012 12:10:15 -0700" -->
<!-- isosent="20120922191015" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpijavac in openmpi-1.9a1r27359" -->
<!-- id="CAF3273C-2F60-49FA-AF3A-CF61FBFDE801_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209221805.q8MI4lnv019312_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with mpijavac in openmpi-1.9a1r27359<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-22 15:10:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20258.php">Siegmar Gross: "[OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20258.php">Siegmar Gross: "[OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks to me like we had a bug in the configure code - when we set the path for the javac/h tests, we put your specified jdk-bindir at the *end* instead of at the beginning. So if you had javac in your path, we picked it up instead of the one you specified.
<br>
<p>Should now be fixed in r27360.
<br>
<p>Thanks!
<br>
<p>On Sep 22, 2012, at 11:04 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just installed openmpi-1.9a1r27359 in 64-bit mode. I used the following
</span><br>
<span class="quotelev1">&gt; command to configure the package. Unfortunately it doesn't work as expected,
</span><br>
<span class="quotelev1">&gt; because it still uses the 32-bit javac from /usr/local/jdk1.7.0_07/bin
</span><br>
<span class="quotelev1">&gt; so that I get an error when I try to run a Java program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r27359/configure --prefix=/usr/local/openmpi-1.9_64_cc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/sparcv9 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.7.0_07/include \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --without-udapl \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the following lines in config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9-SunOS.sparc.64_cc 237 more config.log
</span><br>
<span class="quotelev1">&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was created by Open MPI configure 1.9a1, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.69.  Invocation command line was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  $ ../openmpi-1.9a1r27359/configure --prefix=/usr/local/openmpi-1.9_64_cc --libd
</span><br>
<span class="quotelev1">&gt; ir=/usr/local/openmpi-1.9_64_cc/lib64 --with-jdk-bindir=/usr/local/jdk1.7.0_07/bi
</span><br>
<span class="quotelev1">&gt; n/sparcv9 --with-jdk-headers=/usr/local/jdk1.7.0_07/include LDFLAGS=-m64 CC=cc CX
</span><br>
<span class="quotelev1">&gt; X=CC FC=f95 CFLAGS=-m64 CXXFLAGS=-m64 -library=stlport4 FCFLAGS=-m64 CPP=cpp CXXC
</span><br>
<span class="quotelev1">&gt; PP=cpp CPPFLAGS= CXXCPPFLAGS= C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH= OB
</span><br>
<span class="quotelev1">&gt; JC_INCLUDE_PATH= OPENMPI_HOME= --enable-cxx-exceptions --enable-mpi-java --enable
</span><br>
<span class="quotelev1">&gt; -heterogeneous --enable-orterun-prefix-by-default --enable-opal-multi-threads --e
</span><br>
<span class="quotelev1">&gt; nable-mpi-thread-multiple --with-threads=posix --with-hwloc=internal --without-ve
</span><br>
<span class="quotelev1">&gt; rbs --without-udapl --with-wrapper-cflags=-m64
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; configure:27443: checking --with-jdk-bindir value
</span><br>
<span class="quotelev1">&gt; configure:27463: result: sanity check ok (/usr/local/jdk1.7.0_07/bin/sparcv9)
</span><br>
<span class="quotelev1">&gt; configure:27475: checking --with-jdk-headers value
</span><br>
<span class="quotelev1">&gt; configure:27495: result: sanity check ok (/usr/local/jdk1.7.0_07/include)
</span><br>
<span class="quotelev1">&gt; configure:27515: checking for javac
</span><br>
<span class="quotelev1">&gt; configure:27533: found /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev1">&gt; configure:27545: result: /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev1">&gt; configure:27555: checking for javah
</span><br>
<span class="quotelev1">&gt; configure:27573: found /usr/local/jdk1.7.0_07/bin/javah
</span><br>
<span class="quotelev1">&gt; configure:27585: result: /usr/local/jdk1.7.0_07/bin/javah
</span><br>
<span class="quotelev1">&gt; configure:27595: checking for jar
</span><br>
<span class="quotelev1">&gt; configure:27613: found /usr/local/jdk1.7.0_07/bin/jar
</span><br>
<span class="quotelev1">&gt; configure:27625: result: /usr/local/jdk1.7.0_07/bin/jar
</span><br>
<span class="quotelev1">&gt; configure:27666: checking jni.h usability
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; javac is available in the 64-bit directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9-SunOS.sparc.64_cc 239 file /usr/local/jdk1.7.0_07/bin/sparcv9/javac
</span><br>
<span class="quotelev1">&gt; /usr/local/jdk1.7.0_07/bin/sparcv9/javac:       ELF 64-bit MSB executable SPARCV9
</span><br>
<span class="quotelev1">&gt;  Version 1, dynamically linked, not stripped, no debugging information available
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why does configure still use the 32-bit version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9-SunOS.sparc.64_cc 240 mpijavac -showme
</span><br>
<span class="quotelev1">&gt; /usr/local/jdk1.7.0_07/bin/javac -cp ... :.:/usr/local/openmpi-1.9_64_cc/lib64/mpi.jar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This way I get the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 244 mpiexec java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.UnsatisfiedLinkError:
</span><br>
<span class="quotelev1">&gt;  /.../openmpi-1.9_64_cc/lib64/libmpi_java.so.0.0.0: ld.so.1: java: fatal:
</span><br>
<span class="quotelev1">&gt;  /.../openmpi-1.9_64_cc/lib64/libmpi_java.so.0.0.0: wrong ELF class: ELFCLASS64
</span><br>
<span class="quotelev1">&gt;  (Possible cause: architecture word width mismatch)
</span><br>
<span class="quotelev1">&gt;        at java.lang.ClassLoader$NativeLibrary.load(Native Method)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is something wrong with my configure command? Thank you very much for any help
</span><br>
<span class="quotelev1">&gt; in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20260.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20258.php">Siegmar Gross: "[OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20258.php">Siegmar Gross: "[OMPI users] problem with mpijavac in openmpi-1.9a1r27359"</a>
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
