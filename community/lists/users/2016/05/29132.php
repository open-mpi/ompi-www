<?
$subject_val = "Re: [OMPI users] problem with Sun C 5.14 beta";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 06:15:38 2016" -->
<!-- isoreceived="20160507101538" -->
<!-- sent="Sat, 7 May 2016 19:15:37 +0900" -->
<!-- isosent="20160507101537" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with Sun C 5.14 beta" -->
<!-- id="CAAkFZ5tcXmB87-cQGTwD-k7M3+nthMGx-+x1BR7dZ6S5XU_kdQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="c2fe6d5c-5016-98a9-585c-383d3d08bb9d_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with Sun C 5.14 beta<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 06:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>In reply to:</strong> <a href="29130.php">Siegmar Gross: "[OMPI users] problem with Sun C 5.14 beta"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29135.php">Siegmar Gross: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Reply:</strong> <a href="29135.php">Siegmar Gross: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>per the config.log, you need to update your CXXFLAGS=&quot;-m64
<br>
-library=stlport4 -std=sun03&quot;
<br>
or just CXXFLAGS=&quot;-m64&quot;
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, May 7, 2016, Siegmar Gross &lt;
<br>
siegmar.gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; today I tried to install openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
</span><br>
<span class="quotelev1">&gt; Enterprise Server 12 (x86_64)&quot; with Sun C 5.14 beta. Unfortunately
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot; breaks, because it thinks that C and C++ are link
</span><br>
<span class="quotelev1">&gt; incompatible. I used the following configure command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-v1.10.2-176-g9d45e07/configure \
</span><br>
<span class="quotelev1">&gt;   --prefix=/usr/local/openmpi-1.10.3_64_cc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.10.3_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0_66/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0_66/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0_66 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64 -mt -Wl,-z -Wl,noexecstack&quot; CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64 -mt&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cxxflags=&quot;-m64 -library=stlport4&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-ldflags=&quot;-mt&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if it is a compiler problem or a problem with the
</span><br>
<span class="quotelev1">&gt; configure command. Perhaps you are nevertheless interested in
</span><br>
<span class="quotelev1">&gt; the problem.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29133.php">Siegmar Gross: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29131.php">Gilles Gouaillardet: "Re: [OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>In reply to:</strong> <a href="29130.php">Siegmar Gross: "[OMPI users] problem with Sun C 5.14 beta"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29135.php">Siegmar Gross: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
<li><strong>Reply:</strong> <a href="29135.php">Siegmar Gross: "Re: [OMPI users] problem with Sun C 5.14 beta"</a>
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
