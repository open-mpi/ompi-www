<?
$subject_val = "Re: [OMPI devel] debugger confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 07:52:28 2011" -->
<!-- isoreceived="20111108125228" -->
<!-- sent="Tue, 8 Nov 2011 07:52:23 -0500" -->
<!-- isosent="20111108125223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger confusion" -->
<!-- id="BA022A0F-499C-45BA-80D7-D7D935175601_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C462E38B-73F8-4728-86EF-89233F5E50CF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger confusion<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 07:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2011, at 8:34 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Best guess: from what I've seen, most debuggers don't seem to conform to what the MPI Forum has &quot;accepted&quot;. It doesn't appear that the vendors and debugger developers pay too much attention to that document, possibly because it (a) came after the debuggers were developed, and (b) still doesn't seem to be widely adopted.
</span><br>
<p>Keep in mind that the debugger/tool authors essentially wrote the document, with some guidance from the Forum.  The Forum saw the wisdom in making it an &quot;official&quot; MPI Forum document so that it would carry some weight, and voted to do so.  That document is not actually part of any MPI standard document for multiple reasons; here's two:
<br>
<p>1. MPIR has a bunch of known problems which no one is currently interested in fixing (e.g., scalability)
<br>
2. No one wanted to *mandate* the MPIR interface in an MPI implementation
<br>
<p>It is therefore a standalone document that, since it became an &quot;official&quot; Forum document, is available on mpi-forum.org:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpir-specification-10-11-2010.pdf">http://www.mpi-forum.org/docs/mpir-specification-10-11-2010.pdf</a>
<br>
<p>To be clear: that document simply standardizes what MPI implementations are supposed to provide in their MPIR implementation (prior to this, MPI implementations tended to have subtle differences between their MPIR implementations, which were a nightmare for the debugger/tool vendors).  This document does *not* fix the scalability and other well-known issues with MPIR -- it just consolidates and standardizes the slightly-different versions of MPIR that were floating around out there.
<br>
<p><span class="quotelev1">&gt; I'd suggest being a little careful about making changes without consulting people who use TV and &quot;stat&quot;, at least - those are the ones most recently tested.
</span><br>
<p>Fair enough.
<br>
<p>Moving towards what was specified in that document would probably be a good thing, though, since that document *is* the currently accepted version of how MPIR is supposed to work and was essentially written *by* the tool vendors.  Of course, appropriate testing with various debuggers and tools out there should be a given -- current versions of DDT, Totalview, and padb are probably the 3 most obvious ones with which to test; others have mentioned some &quot;stat,&quot; too.
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
<li><strong>Next message:</strong> <a href="9939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
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
