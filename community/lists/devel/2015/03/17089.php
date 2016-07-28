<?
$subject_val = "Re: [OMPI devel] psm and process affinity in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 11:35:35 2015" -->
<!-- isoreceived="20150303163535" -->
<!-- sent="Tue, 3 Mar 2015 16:35:32 +0000" -->
<!-- isosent="20150303163532" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] psm and process affinity in open mpi" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518CB7727_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj67_Mexk=AS_3fAAUm_qYE-Gf5qVjw6HDb5r=WwTyn2-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] psm and process affinity in open mpi<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 11:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17090.php">Howard Pritchard: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17090.php">Howard Pritchard: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Reply:</strong> <a href="17090.php">Howard Pritchard: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>

<br>
The PSM MTL sets PSM_EP_OPEN_AFFINITY_SKIP, so if I understand right, OMPI already has the fix for you.
<br>

<br>
Andrew
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Tuesday, March 3, 2015 8:21 AM
<br>
To: Open MPI Developers List
<br>
Subject: [OMPI devel] psm and process affinity in open mpi
<br>

<br>
Hi Folks,
<br>

<br>
First initial disclaimer - I've looked through the open mpi faq and have been unable
<br>
so far an answer to my question below.
<br>

<br>
I've been having a discussion with one of the other trilab folks about some issues with
<br>
using PSM within mvpaich where the default cpu affinity behavior of PSM can cause problems.
<br>
It turns out that the default behavior of PSM appears to be to set cpu affinity for a process
<br>
which calls psm_ep_open if process affinity has not already been set.  We're finding that
<br>
it is necesary to use the PSM_EP_OPEN_AFFINITY_SKIP setting in the affinity field
<br>
of the psm_opts struct that is passed to psm_ep_open in order to work around the problem.
<br>

<br>
The problem has to do with singleton processes.  If mvapich is using psm and multiple
<br>
singleton jobs are scheduled on a node, they all by default end up binding to core 0.
<br>
Setting the above option eliminates this problem.
<br>

<br>
Could Open MPI also potentially have this same problem?  If so, I'd want to add an mca param
<br>
to set this option before calling psm_ep_open within psm mtl.  Hmm.. maybe the ofi mtl
<br>
supporter should talk with the libfabric psm provider folks about this.
<br>

<br>
Thanks for any help,
<br>

<br>
Howard
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17089/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17090.php">Howard Pritchard: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17088.php">Ralph Castain: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17090.php">Howard Pritchard: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Reply:</strong> <a href="17090.php">Howard Pritchard: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
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
