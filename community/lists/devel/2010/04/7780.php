<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23014";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 11:20:42 2010" -->
<!-- isoreceived="20100421152042" -->
<!-- sent="Wed, 21 Apr 2010 11:20:01 -0400" -->
<!-- isosent="20100421152001" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23014" -->
<!-- id="D492615B-A126-45AA-B1E8-1A1D3E5B93F3_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201004210000.o3L00EDx016072_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23014<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 11:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7779.php">Rolf vandeVaart: "[OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The comment doesn't match the commit itself.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 20, 2010, at 20:00 , cyeoh_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: cyeoh
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-20 20:00:14 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23014
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23014">https://svn.open-mpi.org/trac/ompi/changeset/23014</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fixes #2355 - race in interaction between opal_atomic_lifo_push
</span><br>
<span class="quotelev1">&gt; and opal_atomic_lifo_pop. Adds memory barriers to remove the race
</span><br>
<span class="quotelev1">&gt; condition
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/include/opal/sys/powerpc/atomic.h |     3 +--                                     
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/include/opal/sys/powerpc/atomic.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/include/opal/sys/powerpc/atomic.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/include/opal/sys/powerpc/atomic.h	2010-04-20 20:00:14 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -296,7 +297,6 @@
</span><br>
<span class="quotelev1">&gt;                         &quot;     add     %0, %2, %0   \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                         &quot;     stwcx.  %0, 0, %3    \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                         &quot;     bne-    1b           \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot;     mr      %3, %0       \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                         : &quot;=&amp;r&quot; (t), &quot;=m&quot; (*v)
</span><br>
<span class="quotelev1">&gt;                         : &quot;r&quot; (inc), &quot;r&quot; (v), &quot;m&quot; (*v)
</span><br>
<span class="quotelev1">&gt;                         : &quot;cc&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -314,7 +314,6 @@
</span><br>
<span class="quotelev1">&gt;                         &quot;     subf    %0,%2,%0     \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                         &quot;     stwcx.  %0,0,%3      \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                         &quot;     bne-    1b           \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                        &quot;     mr      %3, %0       \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                         : &quot;=&amp;r&quot; (t), &quot;=m&quot; (*v)
</span><br>
<span class="quotelev1">&gt;                         : &quot;r&quot; (dec), &quot;r&quot; (v), &quot;m&quot; (*v)
</span><br>
<span class="quotelev1">&gt;                         : &quot;cc&quot;);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7779.php">Rolf vandeVaart: "[OMPI devel] RFC: Change PML error handler signature"</a>
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
