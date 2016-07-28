<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan  6 09:52:52 2006" -->
<!-- isoreceived="20060106145252" -->
<!-- sent="Fri, 6 Jan 2006 09:52:44 -0500" -->
<!-- isosent="20060106145244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="660CDFFD-C394-4065-8BCC-8C74887146F0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.OSF.4.58.0601061341001.355566_at_gwdu70.gwdg.de" -->
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
<strong>Date:</strong> 2006-01-06 09:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2006, at 8:13 AM, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; Looks like the problem is somewhere in the tuned collectives?
</span><br>
<span class="quotelev1">&gt; Unfortunately I need a logfile with exactly those :(
</span><br>
<p>FWIW, we just activated these tuned collectives on the trunk (which  
<br>
will eventually become the 1.1.x series; the tuned collectives don't  
<br>
exist in the 1.0.x series).
<br>
<p>Until right before the holidays, the tuned collectives were developed/ 
<br>
tested only by a small subset of the Open MPI developers.  Whenever  
<br>
we turn on any new functionality in the code base, it's inevitable  
<br>
that some bugs will be exposed by testing by other developers/users  
<br>
-- so thanks for your patience!
<br>
<p>We also just [re-]activated the stack-tracing facility so that one  
<br>
can get some at-least-somewhat helpful information upon SIGFPE,  
<br>
SIGSEGV, and SIGBUS -- that's where those stack traces are coming  
<br>
from.  This also does not exist in the 1.0.x series.
<br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0491.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
