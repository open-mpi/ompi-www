<?
$subject_val = "[OMPI devel] Changes to libevent files";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  6 11:52:54 2010" -->
<!-- isoreceived="20101106155254" -->
<!-- sent="Sat, 6 Nov 2010 09:52:44 -0600" -->
<!-- isosent="20101106155244" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Changes to libevent files" -->
<!-- id="2B509020-1337-442D-8CEA-89B8FC22B48E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Changes to libevent files<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-06 11:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Previous message:</strong> <a href="8663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Jeff and I are trying really, really hard to avoid making changes to libevent files. Every time we make a customization to their distribution, it makes it that much harder to update to the next version. We saw this in spades with the last update - it proved impossible to go back and find all the little changes people had inserted.
<br>
<p>We realize that you sometimes simply -have- to make an adjustment - so far, it has been to make their files cleanly compile for one or another compiler. However, when you do that, please:
<br>
<p>(a) mark the change with a giant /*** OMPI ***/ comment so it is easily seen. This not only helps us see the change, but also makes it much easier for us to check new releases to see if the change is still required, and
<br>
<p>(b) send Jeff and I the diff so we can push it upstream to libevent. They have so far been very good at absorbing our changes, which means the next release doesn't have to be edited yet again.
<br>
<p>If you have already made changes, please send us the diff - it makes life much easier than asking us to search for them.
<br>
<p>Thanks!
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Previous message:</strong> <a href="8663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
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
