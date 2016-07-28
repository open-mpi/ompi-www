<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 11:32:38 2008" -->
<!-- isoreceived="20080904153238" -->
<!-- sent="Thu, 04 Sep 2008 08:35:26 -0700" -->
<!-- isosent="20080904153526" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="48C0003E.6040505_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3F6A7F35-D03A-40B0-AA66-FF6B5D65580B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-04 11:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; OMPI currently polls for message  passing progress.  While you're in 
</span><br>
<span class="quotelev1">&gt; MPI_BCAST, it's quite possible/ likely that OMPI will poll hard until 
</span><br>
<span class="quotelev1">&gt; the BCAST is done.  It is  possible that a future version of OMPI will 
</span><br>
<span class="quotelev1">&gt; use a hybrid polling+non- polling approach for progress, such that if 
</span><br>
<span class="quotelev1">&gt; you call MPI_BCAST, we'll  poll for a while.  And if nothing 
</span><br>
<span class="quotelev1">&gt; &quot;interesting&quot; happens after a while  (i.e., the BCAST hasn't finished 
</span><br>
<span class="quotelev1">&gt; and nothing else seems to be  happening), we'll allow OMPI's internal 
</span><br>
<span class="quotelev1">&gt; progression engine to block/go  to sleep until something interesting 
</span><br>
<span class="quotelev1">&gt; happens.
</span><br>
<p>There are many alternatives to polling hard.  One is to yield the CPU if 
<br>
someone else is asking for it.  Again, Open MPI has some support for 
<br>
this today with the &quot;mpi_yield_when_idle&quot; variable.  Right?  Might not 
<br>
be all of what someone wants, but the above discussion just seems not to 
<br>
account for this.  In any case, I verified that it does do something 
<br>
useful in at least one case.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
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
