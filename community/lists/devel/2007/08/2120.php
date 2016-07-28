<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 11:00:41 2007" -->
<!-- isoreceived="20070813150041" -->
<!-- sent="Mon, 13 Aug 2007 08:00:36 -0700" -->
<!-- isosent="20070813150036" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="20070813150036.GS31748_at_pathscale.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070812194919.GA23182_at_minantech.com" -->
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
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 11:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 12 Aug 2007, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Any objections?  We can discuss what approaches we want to take  
</span><br>
<span class="quotelev2">&gt; &gt; (there's going to be some complications because of the PML driver,  
</span><br>
<span class="quotelev2">&gt; &gt; etc.); perhaps in the Tuesday Mellanox teleconf...?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; My main objection is that the only reason you propose to do this is some
</span><br>
<span class="quotelev1">&gt; bogus benchmark? Is there any other reason to implement header caching?
</span><br>
<span class="quotelev1">&gt; I also hope you don't propose to break layering and somehow cache PML headers
</span><br>
<span class="quotelev1">&gt; in BTL.
</span><br>
<p>Gleb is hitting the main points I wanted to bring up.  We had
<br>
examined this header caching in the context of PSM a little while
<br>
ago.  0.5us is much more than we had observed -- at 3GHz, 0.5us would
<br>
be about 1500 cycles of code that has little amounts of branches.
<br>
For us, with a much bigger header and more fields to fetch from
<br>
different structures, it was more like 350 cycles which is on the
<br>
order of 0.1us and not worth the effort (in code complexity,
<br>
readability and frankly motivation for performance).  Maybe there's
<br>
more to it than just &quot;code caching&quot; -- like sending from pre-pinned
<br>
headers or using the RDMA with immediate, etc.  But I'd be suprised
<br>
to find out that openib btl doesn't do the best thing here.
<br>
<p>I have pretty good evidence that for CM, the latency difference comes
<br>
from the receive-side (in particular opal_progress).  Doesn't the
<br>
openib btl receive-side do something similiar with opal_progress,
<br>
i.e. register a callback function?  It probably does something
<br>
different like check a few RDMA mailboxes (or per-peer landing pads)
<br>
but anything that gets called before or after it as part of
<br>
opal_progress is cause for slowdown.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic Host Solutions Group, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2121.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2119.php">George Bosilca: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2107.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
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
