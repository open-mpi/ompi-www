<?
$subject_val = "Re: [OMPI devel] warn when fork() used with openib btl?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 18:21:54 2008" -->
<!-- isoreceived="20080624222154" -->
<!-- sent="Tue, 24 Jun 2008 17:21:46 -0500" -->
<!-- isosent="20080624222146" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] warn when fork() used with openib btl?" -->
<!-- id="44079e5f0806241521s1420d7bcg1453502098bf18bc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E57D4BF0-3E99-454C-B45A-CE2D57FFC411_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] warn when fork() used with openib btl?<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 18:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4225.php">Brad Benton: "[OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<li><strong>Previous message:</strong> <a href="4223.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4198.php">Jeff Squyres: "[OMPI devel] warn when fork() used with openib btl?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is a good idea, and for the reasons you outline in your
<br>
Rationale.  This definitely bites people from time to time at Big Blue as
<br>
well, and a gentle warning will certainly help.
<br>
<p>--brad
<br>
<p><p>On Mon, Jun 23, 2008 at 8:42 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Those who care about the openib BTL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think about warning when fork() is used with the openib BTL?
</span><br>
<span class="quotelev1">&gt;  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/1244">https://svn.open-mpi.org/trac/ompi/ticket/1244</a> for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rationale: Several Cisco customers have been bitten by not realizing that
</span><br>
<span class="quotelev1">&gt; they had calls to system() in their MPI codes when switching away from older
</span><br>
<span class="quotelev1">&gt; mVAPI-based stacks to OFED (the older Cisco/Topspin mVAPI stack was a bit
</span><br>
<span class="quotelev1">&gt; more tolerable of fork()).  Newer kernels and OFED versions can handle
</span><br>
<span class="quotelev1">&gt; fork() better, but I've still had spurious reports of MPI codes failing when
</span><br>
<span class="quotelev1">&gt; system() was used (never had much chance to followup to see what was
</span><br>
<span class="quotelev1">&gt; actually happening, though -- it *should* have worked...?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4225.php">Brad Benton: "[OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<li><strong>Previous message:</strong> <a href="4223.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4198.php">Jeff Squyres: "[OMPI devel] warn when fork() used with openib btl?"</a>
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
