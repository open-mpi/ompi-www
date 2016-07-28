<?
$subject_val = "Re: [OMPI users] libnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 14:39:31 2009" -->
<!-- isoreceived="20090415183931" -->
<!-- sent="Wed, 15 Apr 2009 14:39:26 -0400" -->
<!-- isosent="20090415183926" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma issue" -->
<!-- id="49E629DE.60307_at_ias.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="b87c422a0904151106v339af1cdv49da05a8e8fa8586_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma issue<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 14:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8938.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8938.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8938.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; I used --with-libnuma=/usr since Prentice Bisbal's suggestion and it
</span><br>
<span class="quotelev1">&gt; worked. Unfortunately, I found no way to fix the failure in finding
</span><br>
<span class="quotelev1">&gt; libimf.so when compiling openmpi-1.3.1 with intels, as you have seen
</span><br>
<span class="quotelev1">&gt; in other e-mail from me. And gnu compilers (which work well with both
</span><br>
<span class="quotelev1">&gt; openmpi and the slower code of my application) are defeated by the
</span><br>
<span class="quotelev1">&gt; faster code of my application. With limited hardware resources, I must
</span><br>
<span class="quotelev1">&gt; rely on that 40% speeding up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>To fix the libimf.so problem you need to include the path to Intel's
<br>
libimf.so in your LD_LIBRARY_PATH environment variable. On my system, I
<br>
installed v11.074 of the Intel compilers in /usr/local/intel, so my
<br>
libimf.so file is located here:
<br>
<p>/usr/local/intel/Compiler/11.0/074/lib/intel64/libimf.so
<br>
<p>So I just add that to my LD_LIBRARY_PATH:
<br>
<p>LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/intel64:$LD_LIBRARY_PATH
<br>
export LD_LIBRARY_PATH
<br>
<p>Now I can run whatever programs need libimf.so without any problems. In
<br>
your case, you'll want to that before your make command.
<br>
<p>Here's exactly what I use to compile OpenMPI with the Intel Compilers:
<br>
<p>export PATH=/usr/local/intel/Compiler/11.0/074/bin/intel64:$PATH
<br>
<p>export
<br>
LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/intel64:$LD_LIBRARY_PATH
<br>
<p>../configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
--prefix=/usr/local/openmpi-1.2.8/intel-11/x86_64 --disable-ipv6
<br>
--with-sge --with-openib --enable-static
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8938.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8938.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8938.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
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
