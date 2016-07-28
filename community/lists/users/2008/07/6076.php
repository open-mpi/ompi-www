<?
$subject_val = "Re: [OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 07:40:22 2008" -->
<!-- isoreceived="20080714114022" -->
<!-- sent="Mon, 14 Jul 2008 07:40:10 -0400" -->
<!-- isosent="20080714114010" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Functionality" -->
<!-- id="591808AE-21DD-47A7-8102-773854922015_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1216033658.6757.6.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind Functionality<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 07:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 7:07 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The default in v1.3 is that ptmalloc2 is *not* built into libopen-
</span><br>
<span class="quotelev2">&gt;&gt; pal.  This is different than v1.2, where ptmalloc2 *was* included in
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal unless you specified --disable-memory-manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for clearing that ip Jeff, what is the cost of using this
</span><br>
<span class="quotelev1">&gt; option.  The comments in the code led me to believe this was more to  
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt; with pinning memory than anything else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it be advisable to add a mpicc option to enable and disable
</span><br>
<span class="quotelev1">&gt; linking this library, with 1.2.6 I was sucesfully able to compile and
</span><br>
<span class="quotelev1">&gt; run a application without it by simply changing the gcc compile line.
</span><br>
<p><p>FWIW, we have an open ticket to document this stuff before the v1.3  
<br>
release.  :-)
<br>
<p>Here's the scoop:
<br>
<p>- setting &quot;mpi_leave_pinned&quot; to true does a few things; see <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a> 
<br>
&nbsp;&nbsp;for details
<br>
<p>- we decided that ptmalloc2 is more trouble than it's worth; it causes  
<br>
real problems in some applications
<br>
<p>- but some applications definitely do benefit from leave_pinned behavior
<br>
<p>- some kind of memory manager is *required* in OMPI for leave_pinned  
<br>
behavior to work (i.e., OMPI *has* to have visibility to when memory  
<br>
is returned to the OS so that we know to invalidate relevant entries  
<br>
in our internal registration cache)
<br>
<p>- there's another option, however: simply just don't return memory to  
<br>
the OS (via a mallopt hint).  This avoids the problem altogether.
<br>
<p>- it is important to note that OMPI's ptmalloc2 was configured  
<br>
essentially to do this anyway (rarely to return memory to the OS), and  
<br>
we haven't seen complaints about this effect.
<br>
<p>- so for v1.3, we have changed the default behavior:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- when transports that benefits from leave_pinned behavior are  
<br>
used in a job, mpi_leave_pinned will automatically enable itself
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- OMPI's internal ptmalloc2 library will now be a separate  
<br>
library (-lopenmpi-malloc) and it will *NOT* be linked in by default.   
<br>
If you want to use it, you need to add -lopenmpi-malloc to your  
<br>
wrapper compiler command line.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- if ptmalloc2 is not available and a transport that would  
<br>
benefit from leave_pinned is used, we'll use the mallopt hint to  
<br>
disable memory from being returned to the OS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- if mallopt fails for some reason, we'll disable leave_pinned
<br>
<p>Note that the &quot;automatically enable itself&quot; part isn't enabled yet;  
<br>
that's still on my to-do list.  It'll be done by v1.3.  ptmalloc2 as a  
<br>
separate library is already done.
<br>
<p>What this means is quite simple:
<br>
<p>- if you run with openfabrics networks, mpi_leave_pinned will now be  
<br>
the default, but through the mallopt mechanism, not ptmalloc2
<br>
- if you run with openfabrics and want to use ptmalloc2, add -lopenmpi- 
<br>
malloc to your link command line
<br>
- if you do not run with openfabrics networks, you're not really  
<br>
affected (aside from now returning memory to the OS via the normal  
<br>
libc memory allocator)
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
<li><strong>Next message:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
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
