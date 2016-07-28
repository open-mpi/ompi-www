<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 01:01:24 2005" -->
<!-- isoreceived="20051206060124" -->
<!-- sent="Tue, 6 Dec 2005 01:01:19 -0500 (EST)" -->
<!-- isosent="20051206060119" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron" -->
<!-- id="Pine.LNX.4.58.0512060036050.19904_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4394ABAD.4040002_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-06 01:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<li><strong>In reply to:</strong> <a href="0417.php">Pierre Valiron: "[O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pierre,
<br>
<p>The problem seems to come from the fact that we do not detect how to
<br>
generate the assembly code for our atomic operations. As a result we fall
<br>
back on the gcc mode for 32 bits architectures.
<br>
<p>Here is the corresponding output from the configure script:
<br>
<p>checking if cc supports GCC inline assembly... no
<br>
checking if cc supports DEC inline assembly... no
<br>
checking if cc supports XLC inline assembly... no
<br>
checking if CC supports GCC inline assembly... no
<br>
checking if CC supports DEC inline assembly... no
<br>
checking if CC supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:--.L-_at_-1-0-1-1
<br>
checking for asssembly architecture... IA32
<br>
<p>But there is something strange with the system you're compiling on. The
<br>
size of a C pointer is detected as 8 bytes, so this system is running in
<br>
64 bits mode. However, configure report it as a i386-pc-solaris2.10
<br>
(basically a 32 bits mode).
<br>
<p>Give us one or two days to find a fix.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p>On Mon, 5 Dec 2005, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to experiment open-mpi on our Solaris10 v40z cluster hoping it
</span><br>
<span class="quotelev1">&gt; might surpass lam/mpi 7.1.2b28...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following script to compile in 64 bit mode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #! /bin/tcsh -v
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv CC          &quot;cc&quot;
</span><br>
<span class="quotelev1">&gt; setenv CXX         &quot;CC&quot;
</span><br>
<span class="quotelev1">&gt; setenv FC          &quot;f95&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv CFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt; setenv CXXFLAGS    &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt; setenv FFLAGS      &quot;-O -xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv LDFLAGS     &quot;-xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt; setenv CXXLDFLAGS  &quot;-xtarget=opteron -xarch=amd64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/users/valiron/lib/openmpi-1.0.1rc5
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure runs fine and the make aborts very rapidly.
</span><br>
<span class="quotelev1">&gt; I attach the log for configure+make and the config.log file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea ?
</span><br>
<span class="quotelev1">&gt; Pierre.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<li><strong>In reply to:</strong> <a href="0417.php">Pierre Valiron: "[O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Reply:</strong> <a href="0420.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
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
