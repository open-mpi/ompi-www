<?
$subject_val = "Re: [OMPI devel] t_win failures if openib btl is not loaded";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 08:17:19 2008" -->
<!-- isoreceived="20080307131719" -->
<!-- sent="Fri, 7 Mar 2008 08:16:14 -0500" -->
<!-- isosent="20080307131614" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] t_win failures if openib btl is not loaded" -->
<!-- id="43E836C0-937A-4E67-B807-C914E0D6D634_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47B9AA0E.3000009_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] t_win failures if openib btl is not loaded<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 08:16:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3405.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Previous message:</strong> <a href="3403.php">Jeff Squyres: "Re: [OMPI devel] 3 test failures"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3259.php">Tim Prins: "[OMPI devel] t_win failures if openib btl is not loaded"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I filed this as <a href="https://svn.open-mpi.org/trac/ompi/ticket/1233">https://svn.open-mpi.org/trac/ompi/ticket/1233</a> so that  
<br>
it would not be forgotten.
<br>
<p><p>On Feb 18, 2008, at 10:53 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a bit strange, so I thought I'd ping the group before digging
</span><br>
<span class="quotelev1">&gt; any further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The onesided test 't_win' is failing for us (specifically the
</span><br>
<span class="quotelev1">&gt; 'FENCE_EPOCH' part). It is only failing when we are NOT using openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But here is where it gets strange. The test is run twice: once where  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; window memory is allocated using MPI_Alloc_mem, and once where it is
</span><br>
<span class="quotelev1">&gt; allocated using malloc. When we use MPI_Alloc_mem, it fails. Using
</span><br>
<span class="quotelev1">&gt; malloc, it works just fine all the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, I do
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 1 -mca btl &lt;btls&gt; ./t_win&quot; and get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btls        | Using MPI_Alloc_mem | using malloc
</span><br>
<span class="quotelev1">&gt; ------------+---------------------+---------------
</span><br>
<span class="quotelev1">&gt; self        |   Fail              |   Pass
</span><br>
<span class="quotelev1">&gt; openib,self |   Pass              |   Pass
</span><br>
<span class="quotelev1">&gt; sm,self     |   Fail              |   Pass
</span><br>
<span class="quotelev1">&gt; tcp,self    |   Fail              |   Pass
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we are only using one proc, so the only transport ever used should
</span><br>
<span class="quotelev1">&gt; be 'self'. So this makes me think something is going on with the mpool
</span><br>
<span class="quotelev1">&gt; or related part of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas as to what is going on here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3405.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Previous message:</strong> <a href="3403.php">Jeff Squyres: "Re: [OMPI devel] 3 test failures"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3259.php">Tim Prins: "[OMPI devel] t_win failures if openib btl is not loaded"</a>
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
