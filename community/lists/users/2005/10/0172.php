<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 13:43:20 2005" -->
<!-- isoreceived="20051010184320" -->
<!-- sent="Mon, 10 Oct 2005 14:43:15 -0400" -->
<!-- isosent="20051010184315" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MPI ABI" -->
<!-- id="434AB643.8020007_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.44.0510101345180.28615-100000_at_coffee.psychology.mcmaster.ca" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 13:43:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0173.php">sdamjad: "[O-MPI users] make problems"</a>
<li><strong>Previous message:</strong> <a href="0171.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mark,
<br>
<p>Mark Hahn wrote:
<br>
<span class="quotelev2">&gt;&gt;There are only 2 ways to achieve ABI compatibility:
</span><br>
<span class="quotelev2">&gt;&gt;1) you impose/agree on a single one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ignoring the politics for a moment, what are the technical sticking points?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for instance, I have the impression that the linux x86_64 ABI is reasonably
</span><br>
<span class="quotelev1">&gt; well-defined, and it seems to permit use of at least some libraries 
</span><br>
<span class="quotelev1">&gt; across different compilers in my experience.  so what are the problem areas?
</span><br>
<span class="quotelev1">&gt; just that the MPI Forum has chosen/failed to define constants and proper
</span><br>
<span class="quotelev1">&gt; opaque types? 
</span><br>
<p>Basically, you need a reference mpi.h/mpif.h, including constants values 
<br>
and type definitions. However, it's not enough, you have to define some 
<br>
implementation details. For example, there is no pointers in Fortran, so 
<br>
MPI implementations should agree on the conversion method between 
<br>
integer and (pointer to) types. For the types themselves, you would need 
<br>
to replace the implementation specific fields with a pointer/reference 
<br>
to an opaque internal type.
<br>
<p>I believe it can be done with a commitment from the MPI implementors, 
<br>
but it's more than just pushing a new mpi.h and recompiling.
<br>
<p>Furthermore, there is no standard binary interface in Fortran, so you 
<br>
cannot safely use a library compiled with one compiler and an 
<br>
application compiled with another. So, ISVs would have to ship several 
<br>
binaries for linking with differents MPI libraries, or pick one 
<br>
supported Fortran compiler. Testing/validating would still have to be 
<br>
done per compiler, so it's likely that they would pick one.
<br>
<p><p>In retrospect, the choice of the MPI forum to not put constraints on the 
<br>
implementation was a good one. Now that MPI is pervasive, it's 
<br>
legitimate to care about an ABI, but it would certainly have been a 
<br>
weight for the adoption of the standard back in the days.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0173.php">sdamjad: "[O-MPI users] make problems"</a>
<li><strong>Previous message:</strong> <a href="0171.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>Maybe in reply to:</strong> <a href="0167.php">Joachim Worringen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
