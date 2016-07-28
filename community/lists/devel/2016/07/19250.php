<?
$subject_val = "[OMPI devel] singleton broken on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 08:34:36 2016" -->
<!-- isoreceived="20160721123436" -->
<!-- sent="Thu, 21 Jul 2016 21:34:35 +0900" -->
<!-- isosent="20160721123435" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] singleton broken on master" -->
<!-- id="CAAkFZ5tU4=haGGk6-jxJR5wVQE0ecsA=JfFGXoycy6xBOWxecQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] singleton broken on master<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 08:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19249.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19271.php">Ralph Castain: "Re: [OMPI devel] singleton broken on master"</a>
<li><strong>Reply:</strong> <a href="19271.php">Ralph Castain: "Re: [OMPI devel] singleton broken on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I noted singleton are broken on master.
<br>
git bisect points to the commit in which PMIx_tool were introduced.
<br>
if you revert to this commit, orted forked by the singleton crashes.
<br>
iirc, latest master does nit work, but orted does not crash either.
<br>
<p>sorry for the lack of details , I am afk until tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about Mellanox Jenkins"</a>
<li><strong>Previous message:</strong> <a href="19249.php">Artem Polyakov: "Re: [OMPI devel] about Mellanox Jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19271.php">Ralph Castain: "Re: [OMPI devel] singleton broken on master"</a>
<li><strong>Reply:</strong> <a href="19271.php">Ralph Castain: "Re: [OMPI devel] singleton broken on master"</a>
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
