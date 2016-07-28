<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 21:53:48 2009" -->
<!-- isoreceived="20090331015348" -->
<!-- sent="Mon, 30 Mar 2009 21:53:42 -0400" -->
<!-- isosent="20090331015342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="22C50902-B459-4C98-AF57-EAC10068B3FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D14F4D.8070602_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 21:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, George found what looks like a race condition in the sm init  
<br>
code today -- it looks like we don't call maffinity anywhere in the sm  
<br>
btl startup, so we're not actually guaranteed that the memory is local  
<br>
to any particular process(or) (!).  This race shouldn't cause segvs,  
<br>
though; it should only mean that memory is potentially farther away  
<br>
than we intended.
<br>
<p>The central question is: does &quot;first touch&quot; mean both read and write?   
<br>
I.e., is the first process that either reads *or* writes to a given  
<br>
location considered &quot;first touch&quot;?  Or is it only the first write?
<br>
<p><p>On Mar 30, 2009, at 7:01 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 30, 2009, at 1:40 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; we will have to  find a
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; pretty smart way to do this or we will completely break the  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; affinity stuff.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I didn't look at the code, but I sure hope that the SM init code  
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev3">&gt; &gt;&gt; touch each page to force allocation, otherwise there is no memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; affinity stuff at all...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why not?  The &quot;owning&quot; process can do the touch; then it'll be
</span><br>
<span class="quotelev2">&gt; &gt; affinity'ed properly.  Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far as I can tell, the code has two mechanisms for memory  
</span><br>
<span class="quotelev1">&gt; placement.
</span><br>
<span class="quotelev1">&gt; One is to create a different mpool for each affinity pool.  The second
</span><br>
<span class="quotelev1">&gt; is to have the correct owner perform the first touch.  (It's not clear
</span><br>
<span class="quotelev1">&gt; to me that the first mechanism is working, makes sense, is necessary,
</span><br>
<span class="quotelev1">&gt; etc.  I just don't know.)  Anyhow, we do indeed want proper first  
</span><br>
<span class="quotelev1">&gt; touch
</span><br>
<span class="quotelev1">&gt; and the code seems to respect that.
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
<li><strong>Next message:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
