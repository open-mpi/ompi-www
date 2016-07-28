<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 15:44:15 2007" -->
<!-- isoreceived="20070301204415" -->
<!-- sent="Thu, 1 Mar 2007 15:13:03 -0500" -->
<!-- isosent="20070301201303" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cygwin build" -->
<!-- id="10221735-B6A1-43A2-9248-B37F6ACCA6C3_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D549A198-D027-4062-BB4D-2C1070242F76_at_cisco.com" -->
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
<strong>Date:</strong> 2007-03-01 15:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2748.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] Current working directory issue"</a>
<li><strong>Previous message:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="2742.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Few months ago it was compiling nicely under Cygwin, Mingw and  
<br>
Interix. They are definitively very Unix like environments so few  
<br>
changes were required. All changes I made are now in the trunk, so I  
<br>
expect a smooth compilation under all these environments. I used 2  
<br>
compilers, the mingw gcc (supposed to generate Windows native  
<br>
executables) as well as cl (the Microsoft compiler). I had to use the  
<br>
latest beta of the libtool in order to get Windows support (more  
<br>
precisely cl support).
<br>
<p>The whole compilation took about 4 hours on my 2.5Ghz AMD processor.  
<br>
Way to much to be usable for anything else than a proof of concept.  
<br>
The main overhead come from the compilation environment, and all the  
<br>
processes that get spawned. So, I decide to move toward a completely  
<br>
Windows native version. I have 2 sets of solution and projects files  
<br>
(for the free version of Visual Studio), one for building everything  
<br>
as a static library and one for building everything as a shared  
<br>
library. The compilation is taking now around 3 minutes on the same  
<br>
machine.
<br>
<p>Meanwhile, we added registry support, installation scripts, better  
<br>
support for the atomic operations, better path management, threads,  
<br>
critical sections and synchronization primitives, simple approach to  
<br>
Direct Socket.
<br>
<p>If anybody want to provide some help, I can distribute the project  
<br>
files.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 1, 2007, at 6:10 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca at U. Tennessee is working on a native Windows port
</span><br>
<span class="quotelev1">&gt; for Open MPI; I don't know if anyone has ever tried to compile or run
</span><br>
<span class="quotelev1">&gt; it under cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George -- can you comment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2007, at 10:00 PM, Ganapathi Kamath wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Justing passing along some information about building on cygwin, if
</span><br>
<span class="quotelev2">&gt;&gt; someone
</span><br>
<span class="quotelev2">&gt;&gt; else is trying.
</span><br>
<span class="quotelev2">&gt;&gt; Though I can't comment on whether the modifications are sound or
</span><br>
<span class="quotelev2">&gt;&gt; whether resulting build is workable, it just pushes through the  
</span><br>
<span class="quotelev2">&gt;&gt; build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I made the following changes to revision 13777  off
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev2">&gt;&gt; 51a52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/uio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/runtime/ompi_mpi_preconnect.c
</span><br>
<span class="quotelev2">&gt;&gt; 26a27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/uio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev2">&gt;&gt; 241c241
</span><br>
<span class="quotelev2">&gt;&gt; &lt; void opal_atomic_init(opal_atomic_lock_t* lock, int value);
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void opal_atomic_init(opal_atomic_lock_t* lock, int32_t value);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./opal/mca/paffinity/windows/paffinity_windows.h
</span><br>
<span class="quotelev2">&gt;&gt; 33a34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;w32api/windows.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./opal/mca/timer/windows/timer_windows_component.c
</span><br>
<span class="quotelev2">&gt;&gt; 22c22
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #include &quot;opal/mca/timer/windows/timer_windows_component.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/mca/timer/windows/timer_windows.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am still trying to figure things out.
</span><br>
<span class="quotelev2">&gt;&gt; [SYRU212-168:02268] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [SYRU212-168:02268] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [SYRU212-168:02268] Signal code:  (23)
</span><br>
<span class="quotelev2">&gt;&gt; [SYRU212-168:02268] Failing at address: 0x610c5115
</span><br>
<span class="quotelev2">&gt;&gt; [SYRU212-168:02268] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;      23 [main] ompi_info 2268 _cygtls::handle_exceptions: Exception:
</span><br>
<span class="quotelev2">&gt;&gt; STATUS_ACCESS_VIOLATION
</span><br>
<span class="quotelev2">&gt;&gt;    8485 [main] ompi_info 2268 open_stackdumpfile: Dumping stack
</span><br>
<span class="quotelev2">&gt;&gt; trace to
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info.exe.stackdump
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 0x61016525 in stack_info::walk () from /usr/bin/cygwin1.dll
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x61016525 in stack_info::walk () from /usr/bin/cygwin1.dll
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x7c859dcc in OutputDebugStringA ()
</span><br>
<span class="quotelev2">&gt;&gt;    from /cygdrive/c/WINDOWS/system32/kernel32.dll
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x40010006 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The build configuration options were
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi/openmpi-1.2-svn/bin
</span><br>
<span class="quotelev2">&gt;&gt; --exec-prefix=/opt/openmpi/openmpi-1.2-svn/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2748.php">Grismer, Matthew J Civ AFRL/VAAC: "[OMPI users] Current working directory issue"</a>
<li><strong>Previous message:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="2742.php">Jeff Squyres: "Re: [OMPI users] Cygwin build"</a>
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
