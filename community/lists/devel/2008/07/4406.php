<?
$subject_val = "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 10:15:45 2008" -->
<!-- isoreceived="20080723141545" -->
<!-- sent="Wed, 23 Jul 2008 10:15:38 -0400" -->
<!-- isosent="20080723141538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Help on building openmpi with &amp;quot;-Wl, --as-needed -Wl, --no-undefined&amp;quot;" -->
<!-- id="453F815F-9434-42DE-A47A-9616495AB314_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080723140837.GC13233_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 10:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2008, at 10:08 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Is the attached patch what you're talking about?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, I'll commit to trunk, v1.2, and v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that it work with a pristine build?  The dependencies  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; such look sane to me, also the cruft removal, but I fail to see how
</span><br>
<span class="quotelev1">&gt; your directory ordering can work:
</span><br>
<p>You're right; I tested only in an already-built tree.  I also didn't  
<br>
run &quot;make install&quot; to an empty tree, which also shows the problem.
<br>
<p>Let me twonk around with this a bit...
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
<li><strong>Next message:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4405.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Reply:</strong> <a href="4418.php">Jeff Squyres: "[OMPI devel] Need v1.3 RM ruling (was: Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
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
