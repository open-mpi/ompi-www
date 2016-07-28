<?
$subject_val = "Re: [OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 09:12:03 2009" -->
<!-- isoreceived="20090506131203" -->
<!-- sent="Wed, 6 May 2009 09:11:58 -0400" -->
<!-- isosent="20090506131158" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What alternatives do exist to &amp;quot;MCA memory: ptmalloc2&amp;quot; ?" -->
<!-- id="173C3912-323A-430F-B0F9-426B725F0180_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A018595.1070708_at_hppi.troitsk.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 09:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9232.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="9230.php">MKondrin: "[OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="9230.php">MKondrin: "[OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2009, at 8:41 AM, MKondrin wrote:
<br>
<p><span class="quotelev1">&gt; There are some doubts about memory management in openmpi. Are there
</span><br>
<span class="quotelev1">&gt; alternatives to MCA memory parameter (which is currently ptmalloc2) -
</span><br>
<span class="quotelev1">&gt; just for testing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I'm not sure what you're asking.  Are you asking how to disable the  
<br>
Open MPI memory manager?  If so, it depends on what version of OMPI  
<br>
you are using.
<br>
<p>If you are using OMPI v1.2, you have to configure OMPI --without- 
<br>
memory-manager.
<br>
<p>If you are using OMPI v1.3 or v1.3.1, don't use the memory manager --  
<br>
it's broken (see <a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>) 
<br>
.
<br>
<p>If you are using OMPI v1.3.2, you can disable it by using --mca  
<br>
mpi_leave_pinned 0.  See <a href="http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2">http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2</a> 
<br>
.
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
<li><strong>Next message:</strong> <a href="9232.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="9230.php">MKondrin: "[OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="9230.php">MKondrin: "[OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
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
