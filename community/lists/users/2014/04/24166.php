<?
$subject_val = "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 13 12:33:29 2014" -->
<!-- isoreceived="20140413163329" -->
<!-- sent="Sun, 13 Apr 2014 18:33:16 +0200" -->
<!-- isosent="20140413163316" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cygwin compilation problems for openmpi-1.8" -->
<!-- id="534ABC4C.70307_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1397320929.84848.YahooMailNeo_at_web164905.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cygwin compilation problems for openmpi-1.8<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-13 12:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24167.php">Allan Wu: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24165.php">Cristian Butincu: "[OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>In reply to:</strong> <a href="24165.php">Cristian Butincu: "[OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/04/2014 18:42, Cristian Butincu wrote:
<br>
<span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The latest precompiled version to date of openmpi for cygwin is 1.7.4-1.
</span><br>
<p>1.7.5 will be uploaded shortly.
<br>
I don't plan to upload 1.8 until 1.8.1,
<br>
but I will built it just to check.
<br>
<p><span class="quotelev1">&gt; Because I got some runtime errors when trying to run simple MPI
</span><br>
<span class="quotelev1">&gt; programs, I have decided to upgrade to openmpi-1.8.
</span><br>
<p>which errors ?
<br>
1.8 should be almost identical to 1.7.5, except the oshmem default,
<br>
so unlike to make any difference
<br>
<p><p><span class="quotelev1">&gt; When trying to compile openmpi-1.8 under cygwin I get the following
</span><br>
<span class="quotelev1">&gt; error during &quot;make all&quot; and the build process halts:
</span><br>
<span class="quotelev1">&gt; Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The commands issued:
</span><br>
<span class="quotelev1">&gt;   ./configure --prefix=$HOME/Apps/openmpi-1.8
</span><br>
<span class="quotelev1">&gt;   make all
</span><br>
<p>cygwin package is currently built with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-sysv-shmem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Platform:
</span><br>
<span class="quotelev1">&gt;   Operating system: Windows 8, 32 bits
</span><br>
<span class="quotelev1">&gt;   CPU: Intel Core2 Duo
</span><br>
<span class="quotelev1">&gt;   Memory: 4 GB
</span><br>
<span class="quotelev1">&gt;   Cygwin version: 1.7.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached to this message an archive containing the output of
</span><br>
<span class="quotelev1">&gt; config and build processes.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24167.php">Allan Wu: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24165.php">Cristian Butincu: "[OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>In reply to:</strong> <a href="24165.php">Cristian Butincu: "[OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
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
