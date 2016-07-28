<?
$subject_val = "[OMPI devel] Configure and contrib pkgs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 13:16:51 2008" -->
<!-- isoreceived="20080303181651" -->
<!-- sent="Mon, 03 Mar 2008 11:16:38 -0700" -->
<!-- isosent="20080303181638" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Configure and contrib pkgs" -->
<!-- id="C3F18E96.C785%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Configure and contrib pkgs<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 13:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3338.php">Ralph H Castain: "[OMPI devel] Trunk build times?"</a>
<li><strong>Previous message:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3339.php">Jeff Squyres: "Re: [OMPI devel] Configure and contrib pkgs"</a>
<li><strong>Reply:</strong> <a href="3339.php">Jeff Squyres: "Re: [OMPI devel] Configure and contrib pkgs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have several options in configure that take lists as their argument. Yet
<br>
there appears to be no way for a user to find out valid members for those
<br>
lists.
<br>
<p>For example, we have the option --enable-contrib-no-build. Is there some way
<br>
that the user and/or sys admin can find out what contributed packages are in
<br>
this distribution? Do they have to just leaf through the source code,
<br>
assuming that they know where the contributed packages are stored?
<br>
<p>Also, is there some way that configure can output &quot;here are the packages I
<br>
am going to build&quot; in a more concise format than we currently get? I'm not
<br>
knocking the current output, but it is rather verbose and hard to find just
<br>
the list of what is going to be built.
<br>
<p>I'm wondering about this since we now have so many things building by
<br>
default - if a user wants to -not- build them, they first have to (a) know
<br>
that they are being built, and (b) figure out how to tell configure not to
<br>
build them.
<br>
<p>It isn't very obvious at the moment - at least, not to me, and I'm coming
<br>
across cases where people are simply mis-configuring the system out of
<br>
ignorance and/or not realizing what the system is doing.
<br>
<p>Do we need to do something about this?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3338.php">Ralph H Castain: "[OMPI devel] Trunk build times?"</a>
<li><strong>Previous message:</strong> <a href="3336.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3339.php">Jeff Squyres: "Re: [OMPI devel] Configure and contrib pkgs"</a>
<li><strong>Reply:</strong> <a href="3339.php">Jeff Squyres: "Re: [OMPI devel] Configure and contrib pkgs"</a>
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
