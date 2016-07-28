<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 14:37:25 2011" -->
<!-- isoreceived="20110803183725" -->
<!-- sent="Wed, 3 Aug 2011 14:37:20 -0400" -->
<!-- isosent="20110803183720" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="D83D07C7-5648-4335-9BC6-E8B93EECA08D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E3974E9.4030006_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 14:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9603.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9601.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9603.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9603.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2011, at 12:18 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I reproduced here on SLES10 with
</span><br>
<span class="quotelev1">&gt;    ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-static --disable-dlopen --enable-contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;    make -j 8 orted_LDFLAGS=-all-static all
</span><br>
<p>Shouldn't you pass the same LDFLAGS to configure as to make?  
<br>
<p>I.e., if you tell configure &quot;configure it &lt;this&gt; way&quot; but then you tell make &quot;build it &lt;that&gt; way&quot;, I'm not surprised that it doesn't work.  Left hand not talking to the right hand and all that.
<br>
<p>Shouldn't you instead do:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --enable-static --disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-static -all-static all&quot;
<br>
&nbsp;&nbsp;&nbsp;make -j 8
<br>
<p>That being said, I don't seem to have a version of gcc that supports -all-static, so I can't test this myself...
<br>
<p>Sidenote -- it looks like --without-memory-manager is broken on the trunk (i.e., it still builds a memory manager if you use that switch).  I'll file a bug and look at this later.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9603.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9601.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9594.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9603.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9603.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
