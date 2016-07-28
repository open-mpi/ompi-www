<?
$subject_val = "[OMPI devel] openmpi-1.5.5rc1: VT-related check failures";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 17 03:07:26 2011" -->
<!-- isoreceived="20111217080726" -->
<!-- sent="Sat, 17 Dec 2011 00:07:04 -0800" -->
<!-- isosent="20111217080704" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.5.5rc1: VT-related check failures" -->
<!-- id="4EEC4DA8.3030208_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EEC0773.4060107_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.5.5rc1: VT-related check failures<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-17 03:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10166.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="10164.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms"</a>
<li><strong>In reply to:</strong> <a href="10164.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Solaris-10 testers on both x86 and SPARC both produced errors on 
<br>
&lt;stdbool.h&gt; included from 
<br>
ompi/contrib/vt/vt/extlib/otf/tests/thumbnail/thumbnail.c during &quot;make 
<br>
check&quot;.  This is due to the following in /usr/include/stdbool.h on 
<br>
Solaris 10:
<br>
<span class="quotelev1">&gt;  * Included for alignment with the ISO/IEC 9899:1999 standard. The
</span><br>
<span class="quotelev1">&gt;  * contents of this header are only visible when using a c99
</span><br>
<span class="quotelev1">&gt;  * compiler, otherwise inclusion of this header will result in a
</span><br>
<span class="quotelev1">&gt;  * forced compilation failure.
</span><br>
As that comment implies, there is an #error on non-c99 compilations.
<br>
<p>This was simple to work-around on these platforms by adding &quot;-std=c99&quot; 
<br>
to CFLAGS on both systems, but would not help on systems which don't 
<br>
have an stdbool.h at all.
<br>
<p>Additionally, this work-around should NOT be necessary because it 
<br>
appears this header is not actually used.
<br>
So, I recommend removing &quot;#include &lt;stdbool.h&gt;&quot; from 
<br>
ompi/contrib/vt/vt/extlib/otf/tests/thumbnail/thumbnail.c
<br>
<p>If &quot;#include &lt;stdbool.h&gt;&quot; must remain, then it should be guarded by &quot;#if 
<br>
HAVE_STDBOOL_H&quot;.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. HargrovePHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10166.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="10164.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms"</a>
<li><strong>In reply to:</strong> <a href="10164.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms"</a>
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
