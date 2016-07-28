<?
$subject_val = "Re: [OMPI users] How to time data transfers?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 08:38:02 2010" -->
<!-- isoreceived="20101014123802" -->
<!-- sent="Thu, 14 Oct 2010 08:37:56 -0400" -->
<!-- isosent="20101014123756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to time data transfers?" -->
<!-- id="28A35F63-AD32-43B4-999F-55FB450896C8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CB61BF2.6080609_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 08:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Previous message:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 13, 2010, at 4:52 PM, Michael E. Thomadakis wrote:
<br>
<p><span class="quotelev1">&gt; Does MPI_Wtime of OMPI 1.4.3/1.5.0 rely on high resolution clocks  (for Linux) or does still rely on gettimeofday() ? How would one request at OMPI built time to let it use high resolution clocks?
</span><br>
<p>Check the man page for MPI_Wtime(3):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On  POSIX  platforms, this function may utilize a timer that is cheaper
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to invoke than the gettimeofday() system call, but will  fall  back  to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gettimeofday()  if a cheap high-resolution timer is not available.  The
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info command can be consulted to see if Open MPI supports a native
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;high-resolution  timer  on  your platform; see the value for &quot;MPI_WTIME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support&quot; (or &quot;options:mpi-wtime&quot; when viewing the parsable output).  If
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this value is &quot;native&quot;, a method that is likely to be cheaper than get-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timeofday() will be used to obtain the time when MPI_Wtime is  invoked.
<br>
<p>IIRC, the problem on Linux is that the native x86 timers are a per-chip value (e.g., on a multi-socket system, the value is different on each socket).  Hence, if you MPI_Wtime() while your MPI process is on socket A, but then the OS moves it to socket B and you call MPI_Wtime() again, the two values are completely unrelated.
<br>
<p>That being said, I see clock_gettime() has CLOCK_REALTIME, which is supposed to be system-wide.  Is it cheaper and/or more accurate than gettimeofday?  I see that it has nanosecond precision in the man page, but what is it (typically) actually implemented as?
<br>
<p>Additionally, I suppose that if a process is bound to a single native clock scope (I don't know offhand if it's per socket or per core -- I said &quot;socket&quot; up above, but that was a guess), we could make the *assumption* that the process will never move and might be able to use the native x86 timer (there's some complications here, but we might be able to figure it out).  Bad Things could happen if the process ever moved, though (e.g., if the application ever manually changed the binding).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14464.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Comm_accept in a dynamic client/server application"</a>
<li><strong>Previous message:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14458.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Reply:</strong> <a href="14466.php">Michael E. Thomadakis: "Re: [OMPI users] How to time data transfers?"</a>
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
