<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 22 17:42:33 2005" -->
<!-- isoreceived="20050722224233" -->
<!-- sent="Fri, 22 Jul 2005 16:42:28 -0600 (MDT)" -->
<!-- isosent="20050722224228" -->
<!-- name="Timothy B. Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re:  bproc problem" -->
<!-- id="47039.128.165.148.200.1122072148.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="dbf5998277bbeb13f27c934444d261d9_at_open-mpi.org" -->
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
<strong>From:</strong> Timothy B. Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-22 17:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0046.php">Jeff Squyres: "Re:  bproc problem"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Jeff Squyres: "MCA params: newer API"</a>
<li><strong>In reply to:</strong> <a href="0040.php">Jeff Squyres: "bproc problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0046.php">Jeff Squyres: "Re:  bproc problem"</a>
<li><strong>Reply:</strong> <a href="0046.php">Jeff Squyres: "Re:  bproc problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Problem 2 should be fixed in the trunk. We now detect if the proper
<br>
version of bproc is available, and we will abort configure if the proper
<br>
version is not available and --with-bproc is passed.
<br>
<p>To disable bproc entirely, simply pass --without-bproc or --with-bproc=no
<br>
to configure (this functionality was previously broken).
<br>
<p>The current bproc modules support LANL bproc &gt;=3.2.0. They do not
<br>
currently run on any version of Scyld or older LANL bproc. If anyone is
<br>
curious, we detect the bproc version by looking for sys/bproc_common.h,
<br>
which is only present in LANL bproc v 3.2.0 and greater. By happy
<br>
coincidence, v3.2.0 is the exact version where all the features we use are
<br>
first available.
<br>
<p>Sorry, but this change should require an autogen/configure....
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; There appear to be 2 bproc problems in the tree right now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I mailed Tim Prins / Greg Watson about one of them already (trying
</span><br>
<span class="quotelev1">&gt; to compile bproc on systems that don't have bproc -- perhaps related to
</span><br>
<span class="quotelev1">&gt; the .ompi_unignore from last night?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The second was noticed by Joel Krauska from Cisco (he'll probably be
</span><br>
<span class="quotelev1">&gt; on this list shortly).  Here's a mail he sent to me last night:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't done the due diligence to attempt to disable the bproc stuff
</span><br>
<span class="quotelev2">&gt;&gt; -- it just appears to not agree with my system and it's in the stock
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make&quot;..   I will later read the documentation, but it looks like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/orte/mca/pls/bproc_seed/pls_bproc_seed.c:446
</span><br>
<span class="quotelev2">&gt;&gt;     rc = bproc_vrfork(num_nodes, node_list, daemon_pids);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; conflicts with my scyld system's
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/sys/bproc.h
</span><br>
<span class="quotelev2">&gt;&gt; 	int  bproc_vrfork     (int *nodes, int nnodes);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, I think we're just checking for bproc.h to determine if the
</span><br>
<span class="quotelev1">&gt; system has bproc -- we're not doing anything to figure out *which*
</span><br>
<span class="quotelev1">&gt; bproc you have (LANL vs. Scyld).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any Scyld machines lying around?  The prototype for
</span><br>
<span class="quotelev1">&gt; vrfork() is one indicator, but not the easiest to test fork -- are they
</span><br>
<span class="quotelev1">&gt; any other telltale #define's or such that we can use for testing in
</span><br>
<span class="quotelev1">&gt; configure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0046.php">Jeff Squyres: "Re:  bproc problem"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Jeff Squyres: "MCA params: newer API"</a>
<li><strong>In reply to:</strong> <a href="0040.php">Jeff Squyres: "bproc problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0046.php">Jeff Squyres: "Re:  bproc problem"</a>
<li><strong>Reply:</strong> <a href="0046.php">Jeff Squyres: "Re:  bproc problem"</a>
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
