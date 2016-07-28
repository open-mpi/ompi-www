<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 18:25:04 2009" -->
<!-- isoreceived="20091222232504" -->
<!-- sent="Tue, 22 Dec 2009 15:26:40 -0800" -->
<!-- isosent="20091222232640" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="4B3155B0.5050000_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200912031815.20365.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-22 18:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11634.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="11632.php">Roman Cheplyaka: "[OMPI users] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11399.php">vasilis gkanis: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
vasilis gkanis wrote:
<br>
<p><span class="quotelev1">&gt;I had a similar problem with the portland Fortran compiler. I new that this 
</span><br>
<span class="quotelev1">&gt;was not caused by a network problem ( I run the code on a single node with 4 
</span><br>
<span class="quotelev1">&gt;CPUs). After I tested pretty much anything, I decided to change the compiler.
</span><br>
<span class="quotelev1">&gt;I used the Intel Fortran compiler and everything is running fine. 
</span><br>
<span class="quotelev1">&gt;It could be a PGI compiler voodoo :)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
There were some thoughts on this e-mail thread that the problem could be 
<br>
related to trac ticket 2043.  Note that there has been progress on this 
<br>
ticket.  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043#comment:18">https://svn.open-mpi.org/trac/ompi/ticket/2043#comment:18</a> 
<br>
.  The shared-memory (on-node) communications were subject to race 
<br>
conditions that could be exposed by optimizing compilers.  Some signals 
<br>
could have gotten lost in inter-process communications, quite possibly 
<br>
leading to hangs.
<br>
<p>If you think you got bitten by this bug, please try the revisions 
<br>
mentioned in the trac ticket and report your success (or, alas, failure) 
<br>
via the trac ticket or as appropriate.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11634.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="11632.php">Roman Cheplyaka: "[OMPI users] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11399.php">vasilis gkanis: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
