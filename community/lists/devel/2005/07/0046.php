<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 22 18:08:48 2005" -->
<!-- isoreceived="20050722230848" -->
<!-- sent="Fri, 22 Jul 2005 19:08:46 -0400" -->
<!-- isosent="20050722230846" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  bproc problem" -->
<!-- id="8aa5b7b4cf9c2b10f8d89c67bb310207_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47039.128.165.148.200.1122072148.squirrel_at_webmail.lanl.gov" -->
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
<strong>Date:</strong> 2005-07-22 18:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0047.php">Troy Benjegerdes: "Adding a collaborator? (Scott Feldman from Orion)"</a>
<li><strong>Previous message:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Tim!
<br>
<p>On Jul 22, 2005, at 6:42 PM, Timothy B. Prins wrote:
<br>
<p><span class="quotelev1">&gt; Problem 2 should be fixed in the trunk. We now detect if the proper
</span><br>
<span class="quotelev1">&gt; version of bproc is available, and we will abort configure if the 
</span><br>
<span class="quotelev1">&gt; proper
</span><br>
<span class="quotelev1">&gt; version is not available and --with-bproc is passed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To disable bproc entirely, simply pass --without-bproc or 
</span><br>
<span class="quotelev1">&gt; --with-bproc=no
</span><br>
<span class="quotelev1">&gt; to configure (this functionality was previously broken).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current bproc modules support LANL bproc &gt;=3.2.0. They do not
</span><br>
<span class="quotelev1">&gt; currently run on any version of Scyld or older LANL bproc. If anyone is
</span><br>
<span class="quotelev1">&gt; curious, we detect the bproc version by looking for sys/bproc_common.h,
</span><br>
<span class="quotelev1">&gt; which is only present in LANL bproc v 3.2.0 and greater. By happy
</span><br>
<span class="quotelev1">&gt; coincidence, v3.2.0 is the exact version where all the features we use 
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; first available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, but this change should require an autogen/configure....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There appear to be 2 bproc problems in the tree right now:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. I mailed Tim Prins / Greg Watson about one of them already (trying
</span><br>
<span class="quotelev2">&gt;&gt; to compile bproc on systems that don't have bproc -- perhaps related 
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; the .ompi_unignore from last night?).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. The second was noticed by Joel Krauska from Cisco (he'll probably 
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; on this list shortly).  Here's a mail he sent to me last night:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't done the due diligence to attempt to disable the bproc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- it just appears to not agree with my system and it's in the stock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;make&quot;..   I will later read the documentation, but it looks like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/orte/mca/pls/bproc_seed/pls_bproc_seed.c:446
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     rc = bproc_vrfork(num_nodes, node_list, daemon_pids);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicts with my scyld system's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/sys/bproc.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	int  bproc_vrfork     (int *nodes, int nnodes);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now, I think we're just checking for bproc.h to determine if the
</span><br>
<span class="quotelev2">&gt;&gt; system has bproc -- we're not doing anything to figure out *which*
</span><br>
<span class="quotelev2">&gt;&gt; bproc you have (LANL vs. Scyld).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any Scyld machines lying around?  The prototype for
</span><br>
<span class="quotelev2">&gt;&gt; vrfork() is one indicator, but not the easiest to test fork -- are 
</span><br>
<span class="quotelev2">&gt;&gt; they
</span><br>
<span class="quotelev2">&gt;&gt; any other telltale #define's or such that we can use for testing in
</span><br>
<span class="quotelev2">&gt;&gt; configure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0047.php">Troy Benjegerdes: "Adding a collaborator? (Scott Feldman from Orion)"</a>
<li><strong>Previous message:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
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
