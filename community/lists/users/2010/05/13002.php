<?
$subject_val = "Re: [OMPI users] PGI problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 13:08:29 2010" -->
<!-- isoreceived="20100510170829" -->
<!-- sent="Mon, 10 May 2010 13:08:22 -0400" -->
<!-- isosent="20100510170822" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI problems" -->
<!-- id="4BE83D86.7020304_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87ocgongi7.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI problems<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 13:08:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13003.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12992.php">Dave Love: "[OMPI users] PGI problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13010.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Reply:</strong> <a href="13010.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave Love wrote:
<br>
<span class="quotelev1">&gt; NEWS says that problems with PGI 10 were fixed in 1.4.1, but PGI 10
</span><br>
<span class="quotelev1">&gt; won't configure 1.4.2 for me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev1">&gt;   configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev1">&gt;   # pgcc -V
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   pgcc 10.1-0 64-bit target on x86-64 Linux -tp k8-64e 
</span><br>
<span class="quotelev1">&gt;   Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt;   Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually I get the same result using PGI 8, so I guess this is something
</span><br>
<span class="quotelev1">&gt; different from Ticket #2129.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have a fix, workaround, or diagnosis before I try to find
</span><br>
<span class="quotelev1">&gt; one and make a bug report?
</span><br>
<p>Dave,
<br>
<p>I compiled 1.4.1 with PGI 9.0-3 a couple of months ago, and I just
<br>
compiled 1.4.2 with PGI 10.4:
<br>
<p>$ pgcc -V
<br>
<p>pgcc 10.4-0 64-bit target on x86-64 Linux -tp shanghai-64
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>Here's the configure command I used for the 1.4.2/10.4 build:
<br>
<p>./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 LDFLAGS=&quot;-L/usr/lib64&quot;
<br>
--prefix=/usr/local/openmpi-1.4.2/pgi-10.4/x86_64 --disable-ipv6
<br>
--with-sge --with-openib --enable-static --with-libnuma=/usr | tee
<br>
configure.log 2&gt;&amp;1
<br>
<p><p>Since I was successful compiled 1.4.1 with PGI 9 and 1.4.2 with PGI
<br>
10.4, I suspect the problem is local to you. Can you go through your
<br>
environment and make sure you don't have any settings that are incorrect
<br>
for this build that the configure script is picking up, like an
<br>
incorrect CPPFLAGS, LDFLAGS, or something like that?
<br>
<p>I didn't see your exact configure command. If you're not already doing
<br>
so, I'd make sure you explicitly list the CC, CXX, FC and F77 variables,
<br>
including the full path to them if necessary to remove ambiguity about
<br>
what compiler you're really using.
<br>
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13003.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12992.php">Dave Love: "[OMPI users] PGI problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13010.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Reply:</strong> <a href="13010.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
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
