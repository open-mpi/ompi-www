<?
$subject_val = "Re: [OMPI devel] Add an orte tool";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 11:49:29 2015" -->
<!-- isoreceived="20151209164929" -->
<!-- sent="Wed, 9 Dec 2015 17:49:20 +0100" -->
<!-- isosent="20151209164920" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add an orte tool" -->
<!-- id="CADf4hJJpJ++K4LVJNKyksSkF6J_MGDn0+5P_HqoW2uSjhtza0w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="11028B00-58C6-4B3D-AE28-F4140A43C965_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Add an orte tool<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 11:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18413.php">Ralph Castain: "[OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>Previous message:</strong> <a href="18411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>In reply to:</strong> <a href="18411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Add an orte tool"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@Gilles, sorry I misspelled the path in the previous email, I've updated
<br>
the orte/tools/Makefile.am (not the orte/Makefile.am).
<br>
<p>@Jeff, yes I forgot to update that file, now it works
<br>
<p>Thank you guys for your support (for the hundredth time!).
<br>
<p>2015-12-09 14:25 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; You also need to add your Makefile to the list in
</span><br>
<span class="quotelev1">&gt; config/orte_config_files.m4 (and re-run autopen.pl).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 9, 2015, at 5:01 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Federico,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; you also need to update orte/tools/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wednesday, December 9, 2015, Federico Reghenzani &lt;
</span><br>
<span class="quotelev1">&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to add a new tool under /orte/tools/, I've followed as
</span><br>
<span class="quotelev1">&gt; example the orte-ps and created my orted-restore directory. I've also add
</span><br>
<span class="quotelev1">&gt; the directory path in /orte/Makefile.am, but it seems that
</span><br>
<span class="quotelev1">&gt; /orte/tools/orted-restore/Makefile.am is completely ignored by autogen.sh.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did I missed something?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt; &gt; __
</span><br>
<span class="quotelev2">&gt; &gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18410.php">http://www.open-mpi.org/community/lists/devel/2015/12/18410.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18411.php">http://www.open-mpi.org/community/lists/devel/2015/12/18411.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18412/orte_tools_Makefile.am">orte_tools_Makefile.am</a>
</ul>
<!-- attachment="orte_tools_Makefile.am" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18412/orte_tools_orted-restore_Makefile.am">orte_tools_orted-restore_Makefile.am</a>
</ul>
<!-- attachment="orte_tools_orted-restore_Makefile.am" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18413.php">Ralph Castain: "[OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>Previous message:</strong> <a href="18411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Add an orte tool"</a>
<li><strong>In reply to:</strong> <a href="18411.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Add an orte tool"</a>
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
