<?
$subject_val = "Re: [OMPI devel] 1.6 NEWS bullets";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 09:37:05 2012" -->
<!-- isoreceived="20120502133705" -->
<!-- sent="Wed, 2 May 2012 06:36:59 -0700" -->
<!-- isosent="20120502133659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6 NEWS bullets" -->
<!-- id="7951F8EB-9E3B-4CF0-B877-EAD314F1F4F6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FA134FC.3010205_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6 NEWS bullets<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 09:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>In reply to:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 2, 2012, at 6:22 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - Fix some process affinity issues.  When binding a process, Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;  will now bind to all available hyperthreads in a core (or socket,
</span><br>
<span class="quotelev2">&gt;&gt;  depending on the binding options specified).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this really what you mean? Isn't hyperthreading ignored by default?
</span><br>
<p><p>If hyperthreading is enabled on the machine and you &quot;mpirun --bind-to-core&quot;, we now bind each process to all hyperthreads in the core.  Previously, we only bound to the first hyperthread in the core. 
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>In reply to:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
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
