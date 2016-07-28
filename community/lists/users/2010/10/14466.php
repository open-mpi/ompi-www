<?
$subject_val = "Re: [OMPI users] How to time data transfers?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 15:23:52 2010" -->
<!-- isoreceived="20101014192352" -->
<!-- sent="Thu, 14 Oct 2010 14:23:39 -0500" -->
<!-- isosent="20101014192339" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to time data transfers?" -->
<!-- id="4CB758BB.8060603_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28A35F63-AD32-43B4-999F-55FB450896C8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to time data transfers?<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 15:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>In reply to:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 10/14/10 07:37, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 13, 2010, at 4:52 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does MPI_Wtime of OMPI 1.4.3/1.5.0 rely on high resolution clocks  (for Linux) or does still rely on gettimeofday() ? How would one request at OMPI built time to let it use high resolution clocks?
</span><br>
<span class="quotelev1">&gt; Check the man page for MPI_Wtime(3):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On  POSIX  platforms, this function may utilize a timer that is cheaper
</span><br>
<span class="quotelev1">&gt;         to invoke than the gettimeofday() system call, but will  fall  back  to
</span><br>
<span class="quotelev1">&gt;         gettimeofday()  if a cheap high-resolution timer is not available.  The
</span><br>
<span class="quotelev1">&gt;         ompi_info command can be consulted to see if Open MPI supports a native
</span><br>
<span class="quotelev1">&gt;         high-resolution  timer  on  your platform; see the value for &quot;MPI_WTIME
</span><br>
<span class="quotelev1">&gt;         support&quot; (or &quot;options:mpi-wtime&quot; when viewing the parsable output).  If
</span><br>
<span class="quotelev1">&gt;         this value is &quot;native&quot;, a method that is likely to be cheaper than get-
</span><br>
<span class="quotelev1">&gt;         timeofday() will be used to obtain the time when MPI_Wtime is  invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, the problem on Linux is that the native x86 timers are a per-chip value (e.g., on a multi-socket system, the value is different on each socket).  Hence, if you MPI_Wtime() while your MPI process is on socket A, but then the OS moves it to socket B and you call MPI_Wtime() again, the two values are completely unrelated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I see clock_gettime() has CLOCK_REALTIME, which is supposed to be system-wide.  Is it cheaper and/or more accurate than gettimeofday?  I see that it has nanosecond precision in the man page, but what is it (typically) actually implemented as?
</span><br>
<span class="quotelev1">&gt;
</span><br>
In the POSIX compliant UNIX world clock_gettime() always had s 2-3 
<br>
orders of magnitude better sampling resolution vs gettimeofday(). I know 
<br>
that OMPI 1.4.2 is relying on gettimeofday() and I was wondering if this 
<br>
changed with 1.4.3 and 1.5.0.
<br>
<p>I just read on some Internet postings that stating with Linux kernel 
<br>
2.6.18, gettimeofday()  uses the
<br>
clock_gettime(CLOCK_REALTIME)
<br>
as source so things may not be as &quot;ugly&quot; any more when one samples the 
<br>
gettimofday();
<br>
<p><span class="quotelev1">&gt; Additionally, I suppose that if a process is bound to a single native clock scope (I don't know offhand if it's per socket or per core -- I said &quot;socket&quot; up above, but that was a guess), we could make the *assumption* that the process will never move and might be able to use the native x86 timer (there's some complications here, but we might be able to figure it out).  Bad Things could happen if the process ever moved, though (e.g., if the application ever manually changed the binding).
</span><br>
<span class="quotelev1">&gt;
</span><br>
This APIs were put together by the Real-Time work group of the POSIX 
<br>
community to address exactly these issues of non-global clocks or of 
<br>
clocks which back-step in time when NTP for instance adjusts the clock 
<br>
(with CLOCK_MONOTONIC). So the question now is if OMPI relies on 
<br>
gettimeofday() and if indeed Linux 2.6.18 uses as its time source the 
<br>
clock_gettime(CLOCK_REALTIME) and if Linux complies with the glbal per 
<br>
system CLOCK_REALTIME requirements. Another problem is when power 
<br>
management adjusts the frequency of the CPU clock....
<br>
<p>anyways thanks for the answer
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14467.php">Jeff Squyres: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14465.php">Kalin Kanov: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic	client/server application"</a>
<li><strong>In reply to:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
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
