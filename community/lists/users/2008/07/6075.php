<?
$subject_val = "Re: [OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 07:07:45 2008" -->
<!-- isoreceived="20080714110745" -->
<!-- sent="Mon, 14 Jul 2008 12:07:38 +0100" -->
<!-- isosent="20080714110738" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Functionality" -->
<!-- id="1216033658.6757.6.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="9A391D58-6CB2-4942-9534-CA02E98DC4F1_at_cisco.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 07:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6076.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6065.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6076.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6076.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2008-07-13 at 09:16 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 13, 2008, at 9:11 AM, Tom Riddle wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone know if this feature has been incorporated yet? I did a
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --help but do not see the enable-ptmalloc2-internal  
</span><br>
<span class="quotelev2">&gt; &gt; option.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - The ptmalloc2 memory manager component is now by default built as
</span><br>
<span class="quotelev2">&gt; &gt;   a standalone library named libopenmpi-malloc.  Users wanting to
</span><br>
<span class="quotelev2">&gt; &gt;   use leave_pinned with ptmalloc2 will now need to link the library
</span><br>
<span class="quotelev2">&gt; &gt;   into their application explicitly.  All other users will use the
</span><br>
<span class="quotelev2">&gt; &gt;   libc-provided allocator instead of Open MPI's ptmalloc2.  This  
</span><br>
<span class="quotelev2">&gt; &gt; change
</span><br>
<span class="quotelev2">&gt; &gt;   may be overriden with the configure option enable-ptmalloc2-internal
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Expected: 1.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is on the trunk/v1.3 branch, yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default in v1.3 is that ptmalloc2 is *not* built into libopen- 
</span><br>
<span class="quotelev1">&gt; pal.  This is different than v1.2, where ptmalloc2 *was* included in  
</span><br>
<span class="quotelev1">&gt; libopen-pal unless you specified --disable-memory-manager.
</span><br>
<p>Thank you for clearing that ip Jeff, what is the cost of using this
<br>
option.  The comments in the code led me to believe this was more to do
<br>
with pinning memory than anything else?
<br>
<p>Would it be advisable to add a mpicc option to enable and disable
<br>
linking this library, with 1.2.6 I was sucesfully able to compile and
<br>
run a application without it by simply changing the gcc compile line.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6076.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>In reply to:</strong> <a href="6065.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6076.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6076.php">Jeff Squyres: "Re: [OMPI users] Valgrind Functionality"</a>
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
