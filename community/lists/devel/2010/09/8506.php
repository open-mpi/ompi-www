<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23774";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 10:08:57 2010" -->
<!-- isoreceived="20100920140857" -->
<!-- sent="Mon, 20 Sep 2010 10:08:52 -0400" -->
<!-- isosent="20100920140852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23774" -->
<!-- id="1939D86B-B9AB-47AA-B4A2-1408C9C87966_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201009200634.o8K6YKnm020015_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23774<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 10:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8505.php">Ralph Castain: "Re: [OMPI devel] Libevent update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about a sym link instead of another script?
<br>
<p><p>On Sep 20, 2010, at 2:34 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2010-09-20 02:34:19 EDT (Mon, 20 Sep 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23774
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23774">https://svn.open-mpi.org/trac/ompi/changeset/23774</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; adding autogen.sh which calls autogen.pl
</span><br>
<span class="quotelev1">&gt; for backwards compatability (many scripts and mtt`s ini files using these API)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/autogen.sh   (contents, props changed)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/autogen.sh
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/autogen.sh	2010-09-20 02:34:19 EDT (Mon, 20 Sep 2010)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,2 @@
</span><br>
<span class="quotelev1">&gt; +#!/bin/sh
</span><br>
<span class="quotelev1">&gt; +exec $(cd `dirname $0`;pwd)/autogen.pl
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8505.php">Ralph Castain: "Re: [OMPI devel] Libevent update"</a>
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
