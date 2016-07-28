<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 16:21:36 2009" -->
<!-- isoreceived="20091026202136" -->
<!-- sent="Mon, 26 Oct 2009 16:21:31 -0400" -->
<!-- isosent="20091026202131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="98A07A5F-E052-4F8A-9D87-99F2BE45AF6E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AE601E3.9020008_at_59A2.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 16:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10974.php">Rainer Keller: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's a whole class of valgrind warnings that are generated when you  
<br>
use OS-bypass networks like OpenFabrics.  The verbs library and Open  
<br>
MPI can be configured and compiled with additional instructions that  
<br>
tell Valgrind where the &quot;problematic&quot; spots are, and that the memory  
<br>
is actually ok (because it's memory that came from outside of  
<br>
Valgrind's scope of influence).  Verbs and Open MPI don't have these  
<br>
options on by default because a) you need to compile against  
<br>
Valgrind's header files to get them to work, and b) there's a tiny/ 
<br>
small amount of overhead inserted by OMPI telling Valgrind &quot;this  
<br>
memory region is ok&quot;, but we live in an intensely competitive HPC  
<br>
environment.
<br>
<p>The option to enable this Valgrind Goodness in OMPI is --with- 
<br>
valgrind.  I *think* the option may be the same for libibverbs, but I  
<br>
don't remember offhand.
<br>
<p>That being said, I'm guessing that we still have bunches of other  
<br>
valgrind warnings that may be legitimate.  We can always use some help  
<br>
to stamp out these warnings...  :-)
<br>
<p><p>On Oct 26, 2009, at 4:09 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jed,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if this will help, but it's worth a try.  Turn off  
</span><br>
<span class="quotelev1">&gt; OMPI's
</span><br>
<span class="quotelev2">&gt; &gt; memory wrapper and see what happens.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; c-like shell
</span><br>
<span class="quotelev2">&gt; &gt; setenv OMPI_MCA_memory_ptmalloc2_disable 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bash-like shell
</span><br>
<span class="quotelev2">&gt; &gt; export OMPI_MCA_memory_ptmalloc2_disable=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also add the following MCA parameter to you run command.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --mca mpi_leave_pinned 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the tip, but these make very little difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;signature.asc&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10974.php">Rainer Keller: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10972.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Reply:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
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
