<?
$subject_val = "[OMPI devel] psm and process affinity in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 11:20:59 2015" -->
<!-- isoreceived="20150303162059" -->
<!-- sent="Tue, 3 Mar 2015 09:20:58 -0700" -->
<!-- isosent="20150303162058" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] psm and process affinity in open mpi" -->
<!-- id="CAF1Cqj67_Mexk=AS_3fAAUm_qYE-Gf5qVjw6HDb5r=WwTyn2-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] psm and process affinity in open mpi<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 11:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Reply:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Reply:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>First initial disclaimer - I've looked through the open mpi faq and have
<br>
been unable
<br>
so far an answer to my question below.
<br>
<p>I've been having a discussion with one of the other trilab folks about some
<br>
issues with
<br>
using PSM within mvpaich where the default cpu affinity behavior of PSM can
<br>
cause problems.
<br>
It turns out that the default behavior of PSM appears to be to set cpu
<br>
affinity for a process
<br>
which calls psm_ep_open if process affinity has not already been set.
<br>
We're finding that
<br>
it is necesary to use the PSM_EP_OPEN_AFFINITY_SKIP setting in the affinity
<br>
field
<br>
of the psm_opts struct that is passed to psm_ep_open in order to work
<br>
around the problem.
<br>
<p>The problem has to do with singleton processes.  If mvapich is using psm
<br>
and multiple
<br>
singleton jobs are scheduled on a node, they all by default end up binding
<br>
to core 0.
<br>
Setting the above option eliminates this problem.
<br>
<p>Could Open MPI also potentially have this same problem?  If so, I'd want to
<br>
add an mca param
<br>
to set this option before calling psm_ep_open within psm mtl.  Hmm.. maybe
<br>
the ofi mtl
<br>
supporter should talk with the libfabric psm provider folks about this.
<br>
<p>Thanks for any help,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17087/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17086.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] nightly tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Reply:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Reply:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
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
