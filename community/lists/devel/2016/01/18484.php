<?
$subject_val = "Re: [OMPI devel] Compilation error on master";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  9 20:51:23 2016" -->
<!-- isoreceived="20160110015123" -->
<!-- sent="Sun, 10 Jan 2016 01:51:18 +0000" -->
<!-- isosent="20160110015118" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compilation error on master" -->
<!-- id="1452390677967.45188_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAkFZ5sCyUj-wA2JLriwoS_rnejBeKJ2rh2uiiCMBLqX8aEgOQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compilation error on master<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-09 20:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18485.php">Jeff Squyres (jsquyres): "[OMPI devel] Question for researchers"</a>
<li><strong>Previous message:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>In reply to:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
?Awesome. Thanks for fixing this !
<br>
<p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
Sent: Saturday, January 09, 2016 1:51 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Compilation error on master
<br>
<p>This is now fixed in master
<br>
<p>Thanks for the report !
<br>
<p>Gilles
<br>
<p>On Saturday, January 9, 2016, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&gt; wrote:
<br>
Hey Folks
<br>
<p>OpenMPI master appears to be broken for a non-debug build:
<br>
<pre>
---
make[2]: Entering directory `ompi/build/opal'
  CC       runtime/opal_progress.lo
../../opal/runtime/opal_progress.c: In function 'opal_progress_event_users_decrement':
../../opal/runtime/opal_progress.c:249:8: error: 'val' undeclared (first use in this function)
    if (val &gt;= 0) {
        ^
../../opal/runtime/opal_progress.c:249:8: note: each undeclared identifier is reported only once for each function it appears in
---
The error was introduced by this commit: commit 64b695669af03ed4544b2a4dbc62cb9e94eb51c9
&gt;From the code it seems that the non-debug part of the function relies on a variable that is updated only in a debug mode.
Since this does not make sense, I would ask somebody that is familiar with this logic to take a look :)
Thanks !
Pavel (Pasha) Shamis
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18482.php">http://www.open-mpi.org/community/lists/devel/2016/01/18482.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18484/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18485.php">Jeff Squyres (jsquyres): "[OMPI devel] Question for researchers"</a>
<li><strong>Previous message:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>In reply to:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
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
