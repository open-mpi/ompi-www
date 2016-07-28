<?
$subject_val = "Re: [OMPI devel] 1.8.3 and PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 05:12:02 2014" -->
<!-- isoreceived="20141112101202" -->
<!-- sent="Wed, 12 Nov 2014 11:12:01 +0100" -->
<!-- isosent="20141112101201" -->
<!-- name="Rainer Keller" -->
<!-- email="rainer.keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3 and PSM errors" -->
<!-- id="4DEF2ABD-6A88-462B-9FDB-3D1A7EFEE974_at_hft-stuttgart.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C60DA4_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3 and PSM errors<br>
<strong>From:</strong> Rainer Keller (<em>rainer.keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 05:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>Previous message:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16303.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16303.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Andrew,
<br>
no, this is not done with dynamically connecting jobs.
<br>
<p>The failing tests use a communicator, which is setup by merging back an intercommunicator (MPI_Intercomm_merge), which was first split from MPI_COMM_WORLD (MPI_Intercomm_create).
<br>
<p>Please see tst_comm.c:459
<br>
<p>Best regards,
<br>
Rainer
<br>
<p><p><p><p>On 11.11.2014, at 23:44, &quot;Friedley, Andrew&quot; &lt;andrew.friedley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're right that PSM wouldn't support dynamically connecting jobs.  I don't think intercomm_create implies that though.  For example you could split COMM_WORLD's group into two groups, then create an intercommunicator across those two groups.  I'm guessing that's what this test is doing, I'd have to go read the code to be sure though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I verified this tests works over PSM and OMPI 1.6.5; it fails on 1.8.1 and 1.8.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, November 11, 2014 2:23 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] 1.8.3 and PSM errors
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought PSM didn&#146;t support dynamic operations such as Intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt; - yes? The PSM security key wouldn&#146;t match between the two jobs, and so
</span><br>
<span class="quotelev2">&gt;&gt; there is no way for them to communicate.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which is why I thought PSM can&#146;t be used for dynamic operations at all,
</span><br>
<span class="quotelev2">&gt;&gt; including comm_spawn and connect/accept
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 11, 2014, at 2:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 11, 2014, at 4:56 PM, Friedley, Andrew
</span><br>
<span class="quotelev2">&gt;&gt; &lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, I'm able to reproduce this now, not sure why I couldn't before.  I took
</span><br>
<span class="quotelev2">&gt;&gt; a look at the diff of the PSM MTL from 1.6.5 to 1.8.1, and nothing is standing
</span><br>
<span class="quotelev2">&gt;&gt; out to me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Question more for the general group:  Did anything related to the
</span><br>
<span class="quotelev2">&gt;&gt; behavior/usage of MTL add_procs() change in this time window?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The time between the 1.6.x series and the 1.8.x series is measure in terms
</span><br>
<span class="quotelev2">&gt;&gt; of a year or two, so, ya, something might have changed...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; More particularly, it looks like add_procs is being called a second time
</span><br>
<span class="quotelev2">&gt;&gt; during MPI_Intercomm_create and being passed a process that is already
</span><br>
<span class="quotelev2">&gt;&gt; connected (passed into the first add_procs call).  Is that right?  Should the
</span><br>
<span class="quotelev2">&gt;&gt; MTL handle multiple add_procs calls with the same proc provided?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid I don't know much about the MTL interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George / Nathan?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/devel/2014/11/16294.php
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/devel/2014/11/16295.php
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16296.php">http://www.open-mpi.org/community/lists/devel/2014/11/16296.php</a>
</span><br>
<p>---------------------------------------------------------------------
<br>
Prof. Dr.-Ing. Rainer Keller
<br>
Hochschule f&#252;r Technik Stuttgart
<br>
Fakult&#228;t f&#252;r Vermessung, Informatik und Mathematik
<br>
Schellingstr. 24, Raum 2/449
<br>
70174 Stuttgart
<br>
T.: +49 (0)711 8926-2812
<br>
F.: +49 (0)711 8926-2553
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>Previous message:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16303.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16303.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
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
