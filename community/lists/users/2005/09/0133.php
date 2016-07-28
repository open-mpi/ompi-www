<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 10 16:45:52 2005" -->
<!-- isoreceived="20050910214552" -->
<!-- sent="Sat, 10 Sep 2005 16:45:48 -0500" -->
<!-- isosent="20050910214548" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MIPS64 - The Long-Awaited Config File" -->
<!-- id="E388C7A1-85E9-4AF0-AB71-FC0D9049617B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050909211332.67072.qmail_at_web31515.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-10 16:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Previous message:</strong> <a href="0132.php">George Bosilca: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Jonathan Day: "[O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Reply:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9, 2005, at 4:13 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; It has taken me a while to try a few things out at
</span><br>
<span class="quotelev1">&gt; this end, but in the end I've still drawn a blank. To
</span><br>
<span class="quotelev1">&gt; recap, I'm compiling on a Broadcom SB1, which is a
</span><br>
<span class="quotelev1">&gt; MIPS64 board, using a Gnu compiler and tools. The
</span><br>
<span class="quotelev1">&gt; error message I get is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: No atomic primitives available for
</span><br>
<span class="quotelev1">&gt; mips64-unknown-linux-gnu
</span><br>
<p>I think that this is a fairly easy fix - Irix identifies any MIPS  
<br>
chip as a mips-* from config.guess, but Linux apparently makes a  
<br>
distinction between mips and mips64.  Attached is a patch that should  
<br>
help, although you will need to run autogen.sh (and have all the  
<br>
tools described here: <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>).  Can  
<br>
you apply this patch, reconfigure / build and run &quot;make check&quot; in  
<br>
[topsrcdir]/test?  The make check includes some basic tests to make  
<br>
sure the atomic operations behave properly.
<br>
<p>Thanks!
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0133/mips64.diff">mips64.diff</a>
</ul>
<!-- attachment="mips64.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Previous message:</strong> <a href="0132.php">George Bosilca: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Jonathan Day: "[O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<li><strong>Reply:</strong> <a href="0134.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
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
