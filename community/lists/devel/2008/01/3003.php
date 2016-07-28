<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 18:19:11 2008" -->
<!-- isoreceived="20080118231911" -->
<!-- sent="Fri, 18 Jan 2008 18:18:55 -0500" -->
<!-- isosent="20080118231855" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="309F42F0-41A9-4FA8-B462-BEE60DDB6E44_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA4296EF_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SDP support for OPEN-MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 18:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>Previous message:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>In reply to:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 15, 2008, at 3:57 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ah, you meant the listener socket -- not 2 sockets to each peer.  Ok,
</span><br>
<span class="quotelev2">&gt;&gt; fair enough.  Opening up one more listener socket in each process is
</span><br>
<span class="quotelev2">&gt;&gt; no big deal (IMO).
</span><br>
<span class="quotelev1">&gt; I thought in a large cluster it can be a problem.
</span><br>
<p>If you're adding one more listener socket in each process, that's no  
<br>
big deal.  That's an O(1) increase -- not an O(N) (or O(N^2)) increase.
<br>
<p><span class="quotelev2">&gt;&gt; Perhaps I don't understand exactly what you are proposing.  I was
</span><br>
<span class="quotelev2">&gt;&gt; under the impression that you were going after a common case: mpirun
</span><br>
<span class="quotelev2">&gt;&gt; and the MPI jobs are running on back-end compute nodes where all of
</span><br>
<span class="quotelev2">&gt;&gt; them support SDP (although the other case of mpirun running on the
</span><br>
<span class="quotelev2">&gt;&gt; head node without SDP and all the MPI processes are running on back-
</span><br>
<span class="quotelev2">&gt;&gt; end nodes with SDP is also not-uncommon...).  Are you thinking of
</span><br>
<span class="quotelev2">&gt;&gt; something else, or are you looking for more flexibility?
</span><br>
<span class="quotelev1">&gt; I am just looking for more flexibility for the end user.
</span><br>
<p><p>Can you cite some specific use-cases that you want to be able to  
<br>
support?  I think we're talking around in circles because we're  
<br>
talking about different scenarios.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3004.php">Jeff Squyres: "Re: [OMPI devel] patch for mpirun.1 manpage"</a>
<li><strong>Previous message:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>In reply to:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
