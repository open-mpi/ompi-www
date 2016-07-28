<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 06:01:23 2013" -->
<!-- isoreceived="20130910100123" -->
<!-- sent="Tue, 10 Sep 2013 10:01:20 +0000" -->
<!-- isosent="20130910100120" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F87C019_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="522689C8.8060602_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 06:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12881.php">Rolf vandeVaart: "[OMPI devel] RFC: Remove alignment code from rcache"</a>
<li><strong>Previous message:</strong> <a href="12879.php">Lars Sch&#228;fers: "[OMPI devel] Inconsistent description of btl_openib_eager_rdma_num parameter in FAQ"</a>
<li><strong>In reply to:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I don't know how to proceed here.  I don't doubt that this is happening to you, but I'm unable to reproduce it.  :-\
<br>
<p>Can you install a segv handler to simply write(0,...) and sleep() so that you can attach a debugger to a live process when this happens, and poke around a bit?  You might get more information from a live process than a corefile.  For example, &quot;remainder&quot; comes form chunk_at_offset(p, nb), so it might be interesting to look at that routine and see if something is going wrong in there...?
<br>
<p><p><p>On Sep 4, 2013, at 3:15 AM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/09/13 04:47, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  Are you building Open MPI in a special way?  I ask because I'm
</span><br>
<span class="quotelev2">&gt;&gt; unable to replicate the issue -- I've run your test (and a C
</span><br>
<span class="quotelev2">&gt;&gt; equivalent) a few hundred times now:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think we do anything unusual, the script we are using is
</span><br>
<span class="quotelev1">&gt; fairly simple (it does a module purge to ensure we are just using the
</span><br>
<span class="quotelev1">&gt; system compilers and don't pick up anything strange) and is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BASE=`basename $PWD | sed -e s,-,/,`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module purge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/${BASE} --with-slurm --with-openib --enable-static  --enable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make -j
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlImicgACgkQO2KABBYQAh83GQCcDp/TF/lCe3RnmNYq+tl6ef0D
</span><br>
<span class="quotelev1">&gt; q2AAn3BNG8omGncmLc4HadRPZgRjQEph
</span><br>
<span class="quotelev1">&gt; =56wh
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12881.php">Rolf vandeVaart: "[OMPI devel] RFC: Remove alignment code from rcache"</a>
<li><strong>Previous message:</strong> <a href="12879.php">Lars Sch&#228;fers: "[OMPI devel] Inconsistent description of btl_openib_eager_rdma_num parameter in FAQ"</a>
<li><strong>In reply to:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
