<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 06:10:56 2007" -->
<!-- isoreceived="20070301111056" -->
<!-- sent="Thu, 1 Mar 2007 06:10:45 -0500" -->
<!-- isosent="20070301111045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cygwin build" -->
<!-- id="D549A198-D027-4062-BB4D-2C1070242F76_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY104-F272A753D1AD719AEBB4820DA810_at_phx.gbl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-01 06:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2741.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2739.php">Ganapathi Kamath: "[OMPI users] Cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2747.php">George Bosilca: "Re: [OMPI users] Cygwin build"</a>
<li><strong>Reply:</strong> <a href="2747.php">George Bosilca: "Re: [OMPI users] Cygwin build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca at U. Tennessee is working on a native Windows port  
<br>
for Open MPI; I don't know if anyone has ever tried to compile or run  
<br>
it under cygwin.
<br>
<p>George -- can you comment?
<br>
<p><p>On Feb 27, 2007, at 10:00 PM, Ganapathi Kamath wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justing passing along some information about building on cygwin, if  
</span><br>
<span class="quotelev1">&gt; someone
</span><br>
<span class="quotelev1">&gt; else is trying.
</span><br>
<span class="quotelev1">&gt; Though I can't comment on whether the modifications are sound or
</span><br>
<span class="quotelev1">&gt; whether resulting build is workable, it just pushes through the build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made the following changes to revision 13777  off
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt; 51a52
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/uio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./ompi/runtime/ompi_mpi_preconnect.c
</span><br>
<span class="quotelev1">&gt; 26a27
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/uio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev1">&gt; 241c241
</span><br>
<span class="quotelev1">&gt; &lt; void opal_atomic_init(opal_atomic_lock_t* lock, int value);
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; void opal_atomic_init(opal_atomic_lock_t* lock, int32_t value);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./opal/mca/paffinity/windows/paffinity_windows.h
</span><br>
<span class="quotelev1">&gt; 33a34
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;w32api/windows.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./opal/mca/timer/windows/timer_windows_component.c
</span><br>
<span class="quotelev1">&gt; 22c22
</span><br>
<span class="quotelev1">&gt; &lt; #include &quot;opal/mca/timer/windows/timer_windows_component.h&quot;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/timer/windows/timer_windows.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am still trying to figure things out.
</span><br>
<span class="quotelev1">&gt; [SYRU212-168:02268] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [SYRU212-168:02268] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [SYRU212-168:02268] Signal code:  (23)
</span><br>
<span class="quotelev1">&gt; [SYRU212-168:02268] Failing at address: 0x610c5115
</span><br>
<span class="quotelev1">&gt; [SYRU212-168:02268] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;      23 [main] ompi_info 2268 _cygtls::handle_exceptions: Exception:
</span><br>
<span class="quotelev1">&gt; STATUS_ACCESS_VIOLATION
</span><br>
<span class="quotelev1">&gt;    8485 [main] ompi_info 2268 open_stackdumpfile: Dumping stack  
</span><br>
<span class="quotelev1">&gt; trace to
</span><br>
<span class="quotelev1">&gt; ompi_info.exe.stackdump
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x61016525 in stack_info::walk () from /usr/bin/cygwin1.dll
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x61016525 in stack_info::walk () from /usr/bin/cygwin1.dll
</span><br>
<span class="quotelev1">&gt; #1  0x7c859dcc in OutputDebugStringA ()
</span><br>
<span class="quotelev1">&gt;    from /cygdrive/c/WINDOWS/system32/kernel32.dll
</span><br>
<span class="quotelev1">&gt; #2  0x40010006 in ?? ()
</span><br>
<span class="quotelev1">&gt; #3  0x00000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build configuration options were
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/openmpi-1.2-svn/bin
</span><br>
<span class="quotelev1">&gt; --exec-prefix=/opt/openmpi/openmpi-1.2-svn/bin
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2743.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2741.php">Tim Prins: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2739.php">Ganapathi Kamath: "[OMPI users] Cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2747.php">George Bosilca: "Re: [OMPI users] Cygwin build"</a>
<li><strong>Reply:</strong> <a href="2747.php">George Bosilca: "Re: [OMPI users] Cygwin build"</a>
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
