<?
$subject_val = "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 09:03:45 2012" -->
<!-- isoreceived="20120924130345" -->
<!-- sent="Mon, 24 Sep 2012 15:03:33 +0200" -->
<!-- isosent="20120924130333" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc" -->
<!-- id="50605A25.9010308_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="003401cd9a11$c422a9e0$4c67fda0$_at_comcast.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 09:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20268.php">Roy Hogan: "[OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/24/2012 7:02 AM, Roy Hogan wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m trying to build version 1.6.1 on Cygwin (1.7), using the gcc 4.5.3
</span><br>
<span class="quotelev1">&gt; compilers.  I need to use the Cygwin  linux environment specifically so
</span><br>
<span class="quotelev1">&gt; I&#146;m not interested in the cmake option on the windows side.   I&#146;ve
</span><br>
<span class="quotelev1">&gt; searched the archives, but don&#146;t find much on the Cygwin build option
</span><br>
<span class="quotelev1">&gt; over the last couple of years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve attached the logs for my &#147;configure&#148; and &#147;make all&#148; steps.   Our
</span><br>
<span class="quotelev1">&gt; email filter will not allow me to send zipped files, so I&#146;ve attached
</span><br>
<span class="quotelev1">&gt; the two log files.   I&#146;d appreciate any advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Roy,
<br>
I built a cygwin version, some time ago
<br>
<a href="http://matzeri.altervista.org/cygwin-1.7/openmpi/">http://matzeri.altervista.org/cygwin-1.7/openmpi/</a>
<br>
<p>but never really tested  for other issue on my machine.
<br>
You should be able to replicate using cygport as build packager.
<br>
<p>$ cygport openmpi-1.6-1.cygport almostall
<br>
<p><p>The configure options were:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-progress-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p><p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20268.php">Roy Hogan: "[OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
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
