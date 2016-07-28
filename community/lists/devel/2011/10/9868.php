<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 08:37:15 2011" -->
<!-- isoreceived="20111020123715" -->
<!-- sent="Thu, 20 Oct 2011 08:37:10 -0400" -->
<!-- isosent="20111020123710" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323" -->
<!-- id="E4782CEE-37D2-41F1-B4A9-5300E17DDC24_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB53B17D-63AB-49F6-BE1D-EBB254680F52_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 08:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9869.php">Ralph Castain: "[OMPI devel] Process ranks"</a>
<li><strong>Previous message:</strong> <a href="9867.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>In reply to:</strong> <a href="9864.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 19, 2011, at 6:41 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; A careful reading of the committed patch, would have pointed out that none of the concerns raised so far were true, the &quot;old-way&quot; behavior of the OMPI code was preserved.
</span><br>
<p>Then perhaps you could have added some comments to explain the not-obvious semantics, and less people would have argued.  :-)
<br>
<p><span class="quotelev1">&gt; Moreover, every single of the error codes removed were not used in ages.
</span><br>
<p>On the trunk.  It is highly likely that no one else is using those codes anywhere, but you can't *know* that.  A courtesy RFC is always a good idea here.  
<br>
<p>Indeed, you have railed against exactly this kind of behavior before: people changing things on the trunk that had impact on your private research branches.  :-)
<br>
<p><span class="quotelev1">&gt; What Brian pointed out as evil, evil being a subjective notion by itself, didn't prevent the correct behavior of the code, nor affected in any way it's correctness. Anyway, to address his concern I pushed a patch (25333) putting the OMPI error codes back where they were originally.
</span><br>
<p>The point was that an RFC would have been a much less controversial way of doing this, especially since the code turned out to be fairly subtle, un-commented, and different than what has been done in the past.
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
<li><strong>Next message:</strong> <a href="9869.php">Ralph Castain: "[OMPI devel] Process ranks"</a>
<li><strong>Previous message:</strong> <a href="9867.php">Ralph Castain: "Re: [OMPI devel] Locality info"</a>
<li><strong>In reply to:</strong> <a href="9864.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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
