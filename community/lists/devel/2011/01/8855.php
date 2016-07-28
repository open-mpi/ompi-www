<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24219";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 13:47:08 2011" -->
<!-- isoreceived="20110111184708" -->
<!-- sent="Tue, 11 Jan 2011 13:47:03 -0500" -->
<!-- isosent="20110111184703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24219" -->
<!-- id="FDB835E4-A800-400A-9BBB-6633FD90137E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201101111831.p0BIVtlu002524_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24219<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 13:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry --
<br>
<p>The trunk doesn't use configure.params anymore.  You should probably remove this file again...
<br>
<p><p>On Jan 11, 2011, at 1:31 PM, tdd_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: tdd
</span><br>
<span class="quotelev1">&gt; Date: 2011-01-11 13:31:55 EST (Tue, 11 Jan 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24219
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24219">https://svn.open-mpi.org/trac/ompi/changeset/24219</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add configure.params to solaris sysinfo module to allow it to be built
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/sysinfo/solaris/configure.params
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/opal/mca/sysinfo/solaris/configure.params
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/sysinfo/solaris/configure.params	2011-01-11 13:31:55 EST (Tue, 11 Jan 2011)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,18 @@
</span><br>
<span class="quotelev1">&gt; +# -*- shell-script -*-
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2011      Oracle and/or affiliates.  All rights reserved. 
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +PARAM_CONFIG_FILES=&quot;Makefile&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Set the config priority so that, if we can build,
</span><br>
<span class="quotelev1">&gt; +# only this component will build
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +PARAM_CONFIG_PRIORITY=60
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
<li><strong>Next message:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Previous message:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
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
