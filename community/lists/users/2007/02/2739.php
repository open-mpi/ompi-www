<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 27 22:00:12 2007" -->
<!-- isoreceived="20070228030012" -->
<!-- sent="Tue, 27 Feb 2007 22:00:05 -0500" -->
<!-- isosent="20070228030005" -->
<!-- name="Ganapathi Kamath" -->
<!-- email="hgkamath_at_[hidden]" -->
<!-- subject="[OMPI users] Cygwin build" -->
<!-- id="BAY104-F272A753D1AD719AEBB4820DA810_at_phx.gbl" -->
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
<strong>From:</strong> Ganapathi Kamath (<em>hgkamath_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-27 22:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2740.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2742.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2742.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Justing passing along some information about building on cygwin, if someone 
<br>
else is trying.
<br>
Though I can't comment on whether the modifications are sound or
<br>
whether resulting build is workable, it just pushes through the build.
<br>
<p>I made the following changes to revision 13777  off
<br>
<a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
<p>./ompi/mca/common/sm/common_sm_mmap.c
<br>
51a52
<br>
<span class="quotelev1">&gt;#include &lt;sys/uio.h&gt;
</span><br>
<p><p>./ompi/runtime/ompi_mpi_preconnect.c
<br>
26a27
<br>
<span class="quotelev1">&gt;#include &lt;sys/uio.h&gt;
</span><br>
<p><p>./opal/include/opal/sys/atomic.h
<br>
241c241
<br>
&lt; void opal_atomic_init(opal_atomic_lock_t* lock, int value);
<br>
<pre>
---
&gt;void opal_atomic_init(opal_atomic_lock_t* lock, int32_t value);
./opal/mca/paffinity/windows/paffinity_windows.h
33a34
&gt;#include &lt;w32api/windows.h&gt;
./opal/mca/timer/windows/timer_windows_component.c
22c22
&lt; #include &quot;opal/mca/timer/windows/timer_windows_component.h&quot;
---
&gt;#include &quot;opal/mca/timer/windows/timer_windows.h&quot;
I am still trying to figure things out.
[SYRU212-168:02268] *** Process received signal ***
[SYRU212-168:02268] Signal: Segmentation fault (11)
[SYRU212-168:02268] Signal code:  (23)
[SYRU212-168:02268] Failing at address: 0x610c5115
[SYRU212-168:02268] *** End of error message ***
     23 [main] ompi_info 2268 _cygtls::handle_exceptions: Exception: 
STATUS_ACCESS_VIOLATION
   8485 [main] ompi_info 2268 open_stackdumpfile: Dumping stack trace to 
ompi_info.exe.stackdump
Program received signal SIGSEGV, Segmentation fault.
0x61016525 in stack_info::walk () from /usr/bin/cygwin1.dll
(gdb) bt
#0  0x61016525 in stack_info::walk () from /usr/bin/cygwin1.dll
#1  0x7c859dcc in OutputDebugStringA ()
   from /cygdrive/c/WINDOWS/system32/kernel32.dll
#2  0x40010006 in ?? ()
#3  0x00000000 in ?? ()
The build configuration options were
./configure --prefix=/opt/openmpi/openmpi-1.2-svn/bin 
--exec-prefix=/opt/openmpi/openmpi-1.2-svn/bin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2740.php">Eric Thibodeau: "Re: [OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2742.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2742.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
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
