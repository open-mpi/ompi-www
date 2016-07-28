<?
$subject_val = "Re: [OMPI users] Valgrind Functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 09:16:29 2008" -->
<!-- isoreceived="20080713131629" -->
<!-- sent="Sun, 13 Jul 2008 09:16:22 -0400" -->
<!-- isosent="20080713131622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Functionality" -->
<!-- id="9A391D58-6CB2-4942-9534-CA02E98DC4F1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="713821.34726.qm_at_web55406.mail.re4.yahoo.com" -->
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
<strong>Date:</strong> 2008-07-13 09:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6067.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6067.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 13, 2008, at 9:11 AM, Tom Riddle wrote:
<br>
<p><span class="quotelev1">&gt; Does anyone know if this feature has been incorporated yet? I did a
</span><br>
<span class="quotelev1">&gt; ./configure --help but do not see the enable-ptmalloc2-internal  
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The ptmalloc2 memory manager component is now by default built as
</span><br>
<span class="quotelev1">&gt;   a standalone library named libopenmpi-malloc.  Users wanting to
</span><br>
<span class="quotelev1">&gt;   use leave_pinned with ptmalloc2 will now need to link the library
</span><br>
<span class="quotelev1">&gt;   into their application explicitly.  All other users will use the
</span><br>
<span class="quotelev1">&gt;   libc-provided allocator instead of Open MPI's ptmalloc2.  This  
</span><br>
<span class="quotelev1">&gt; change
</span><br>
<span class="quotelev1">&gt;   may be overriden with the configure option enable-ptmalloc2-internal
</span><br>
<span class="quotelev1">&gt;   --&gt; Expected: 1.3
</span><br>
<p>This is on the trunk/v1.3 branch, yes.
<br>
<p>The default in v1.3 is that ptmalloc2 is *not* built into libopen- 
<br>
pal.  This is different than v1.2, where ptmalloc2 *was* included in  
<br>
libopen-pal unless you specified --disable-memory-manager.
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
<li><strong>Next message:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>In reply to:</strong> <a href="6064.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6067.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6067.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Reply:</strong> <a href="6075.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
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
