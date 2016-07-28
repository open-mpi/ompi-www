<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 11:20:41 2007" -->
<!-- isoreceived="20070724152041" -->
<!-- sent="Tue, 24 Jul 2007 11:20:25 -0400" -->
<!-- isosent="20070724152025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid" -->
<!-- id="6D83892C-8B9F-4CBB-8FB0-13054CF2D2C1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070724150131.GY24192_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-24 11:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1986.php">Ralph H Castain: "[OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2007, at 11:01 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Which is also what POSIX says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.opengroup.org/onlinepubs/009695399/functions/">http://www.opengroup.org/onlinepubs/009695399/functions/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; malloc.html
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I vote with gleb -- return NULL, don't set errno, and be done with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to second. Just if this is a poll ;)
</span><br>
<p>Sounds like a pretty strong argument to me.  This is easy to  
<br>
implement; I'll do it.
<br>
<p>Per Lisandro's comments: I think that if you need a random/valid  
<br>
value for an STL map (or similar), malloc(0) is not a good idea to  
<br>
use as a key.
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
<li><strong>Next message:</strong> <a href="1986.php">Ralph H Castain: "[OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>In reply to:</strong> <a href="1984.php">Adrian Knoth: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Reply:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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
