<?
$subject_val = "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 06:12:08 2015" -->
<!-- isoreceived="20150608101208" -->
<!-- sent="Mon, 08 Jun 2015 12:12:01 +0200" -->
<!-- isosent="20150608101201" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5" -->
<!-- id="55756A71.6030901_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0EC91541DFCC614DB6B36C4BAE80AB6E0FDF0277_at_MAILBOX3.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 06:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27047.php">Ilias Miroslav: "[OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27047.php">Ilias Miroslav: "[OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/7/2015 5:52 PM, Ilias Miroslav wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CygWin is interesting intermediating environment between Windows and Linux-like architectures, and the OpenMPI project is good platform for enabling parallel calculations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my OpenMPI building experience with some problems encountered (with up-to-date CygWin &amp; OpenMPI):
</span><br>
<p>cygwin already provides openmpi 1.8.5 package.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) the &quot;default&quot; OpenMPI configuration (no special flags) gives these linking errors:
</span><br>
<p>the packages are built with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-sysv-shmem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p><p><span class="quotelev1">&gt; 2) The OpenMPI configuration with the flags specified by
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2014/04/24166.php">https://www.open-mpi.org/community/lists/users/2014/04/24166.php</a>
</span><br>
<span class="quotelev1">&gt; produces working mpif90,mpicc,mpicxx... executables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the &quot;make check&quot; testing  gives the second test wrong (see below).
</span><br>
<p>the only current failure is on x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;assertion &quot;opal_atomic_cmpset
<br>
<p>all the other tests pass.
<br>
<p><span class="quotelev1">&gt; Any help how to fix this test issue ?
</span><br>
<p>use cygwin packages
<br>
;-)
<br>
<p><span class="quotelev1">&gt; Miro
</span><br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27047.php">Ilias Miroslav: "[OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27047.php">Ilias Miroslav: "[OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
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
