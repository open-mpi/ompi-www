<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 17:14:06 2009" -->
<!-- isoreceived="20091026211406" -->
<!-- sent="Mon, 26 Oct 2009 21:14:23 +0000" -->
<!-- isosent="20091026211423" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="1256591663.3517.3891.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="98A07A5F-E052-4F8A-9D87-99F2BE45AF6E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 17:14:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10977.php">Jeff Squyres: "Re: [OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>Previous message:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10974.php">Rainer Keller: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-10-26 at 16:21 -0400, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; there's a tiny/ 
</span><br>
<span class="quotelev1">&gt; small amount of overhead inserted by OMPI telling Valgrind &quot;this  
</span><br>
<span class="quotelev1">&gt; memory region is ok&quot;, but we live in an intensely competitive HPC  
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<p>I may be wrong but I seem to remember Julian saying the overhead is
<br>
twelve cycles for the valgrind calls.  Of course calculating what to
<br>
pass to valgrind may add to this.
<br>
<p><span class="quotelev1">&gt; The option to enable this Valgrind Goodness in OMPI is --with- 
</span><br>
<span class="quotelev1">&gt; valgrind.  I *think* the option may be the same for libibverbs, but I  
</span><br>
<span class="quotelev1">&gt; don't remember offhand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I'm guessing that we still have bunches of other  
</span><br>
<span class="quotelev1">&gt; valgrind warnings that may be legitimate.  We can always use some help  
</span><br>
<span class="quotelev1">&gt; to stamp out these warnings...  :-)
</span><br>
<p>I note there is a bug for this, being &quot;Valgrind clean&quot; is a very
<br>
desirable feature for any software and particularly a library IMHO.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1720">https://svn.open-mpi.org/trac/ompi/ticket/1720</a>
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10977.php">Jeff Squyres: "Re: [OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>Previous message:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10974.php">Rainer Keller: "Re: [OMPI users] memchecker overhead?"</a>
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
