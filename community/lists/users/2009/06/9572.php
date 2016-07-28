<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 05:29:40 2009" -->
<!-- isoreceived="20090609092940" -->
<!-- sent="Tue, 09 Jun 2009 10:31:16 +0100" -->
<!-- isosent="20090609093116" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="1244539876.12364.52.camel_at_localhost.localdomain" -->
<!-- inreplyto="auto-000019646813_at_sci.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind writev() errors with 1.3.2.<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 05:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9571.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9571.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-06-08 at 23:41 -0600, tom fogal wrote:
<br>
<span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt; There is a whole page on valgrind web page about this topic. Please  
</span><br>
<span class="quotelev2">&gt; &gt; read <a href="http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress">http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress</a> 
</span><br>
<span class="quotelev2">&gt; &gt;   for more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even better, Ralph (et al.) is if we could just make valgrind think
</span><br>
<span class="quotelev1">&gt; this is defined memory.  One can do this with client requests:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
</span><br>
<p>Using the Valgrind client requests unnecessarily is a very bad idea,
<br>
they are intended for where applications use their own memory allocator
<br>
(i.e. replace malloc/free) or are using custom kernel modules or
<br>
hardware which Valgrind doesn't know about.
<br>
<p>The correct solution is either to not send un-initialised memory or to
<br>
suppress the error using a suppression file as George said.  As the
<br>
error is from MPI_Init() you can safely ignore it from a end-user
<br>
perspective.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman
Padb - A parallel job viewer for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9571.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9571.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
