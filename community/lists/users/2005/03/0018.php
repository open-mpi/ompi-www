<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 10 22:37:10 2005" -->
<!-- isoreceived="20050311033710" -->
<!-- sent="Thu, 10 Mar 2005 19:32:46 -0800" -->
<!-- isosent="20050311033246" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="20050311033246.GA4481_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="fafb4304d2be3471477db2dbba924e7a_at_anu.edu.au" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-10 22:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 11, 2005 at 02:21:58PM +1100, Stuart Midgley wrote:
<br>
<p><span class="quotelev1">&gt; One major implementation issue is the equivalent of mpirun (which I 
</span><br>
<span class="quotelev1">&gt; assume would be part of an ABI?) - or the startup requirements of 
</span><br>
<span class="quotelev1">&gt; different MPI's.
</span><br>
<p>This may or may not be part of an ABI.
<br>
<p>The reason to not include it is that it's kind of hard. Right now everyone
<br>
does different stuff.
<br>
<p>The reason to include it is that it would make integrating with batch
<br>
systems less of a headache for system administrators. Right now most
<br>
only support 1 MPI version because this is annoying.
<br>
<p><span class="quotelev1">&gt; The other issue we are concerned about is that an ABI doesn't resolve 
</span><br>
<span class="quotelev1">&gt; one of the central issues.  While you might have different MPI's with 
</span><br>
<span class="quotelev1">&gt; the same ABI, different mpi's behave differently and can cause a code 
</span><br>
<span class="quotelev1">&gt; to behave differently.  An ISV would still have to verify their code 
</span><br>
<span class="quotelev1">&gt; against all MPI's they wish to support.  For example, an ISV might, by 
</span><br>
<span class="quotelev1">&gt; accident, make an assumption about the small message size and their 
</span><br>
<span class="quotelev1">&gt; code might hang on different MPI's.
</span><br>
<p>For exactly this reason, I expect the average ISV to only want to
<br>
support 1 MPI. However, testing multiple MPIs is far, far easier if
<br>
you don't have to recompile for each one. So a uniform &lt;mpi.h&gt; is a
<br>
major step in the right direction, and any ISV which already supports
<br>
more than one MPI is going to love it.
<br>
<p>And if testing became easier, people might actually fix their code.
<br>
OK, *now* I'm dreaming... ;-)
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
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
