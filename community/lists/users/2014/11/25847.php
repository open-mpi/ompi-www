<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 08:23:37 2014" -->
<!-- isoreceived="20141120132337" -->
<!-- sent="Thu, 20 Nov 2014 13:23:32 +0000" -->
<!-- isosent="20141120132332" -->
<!-- name="Faraj, Daniel A" -->
<!-- email="daniel.a.faraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="9119B351DC3E914DB262CE51CCDF87CA095EDD08_at_CRSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="546AC5C8.3040809_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective algorithms<br>
<strong>From:</strong> Faraj, Daniel A (<em>daniel.a.faraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 08:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25848.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>In reply to:</strong> <a href="25832.php">Gilles Gouaillardet: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25843.php">George Bosilca: "Re: [OMPI users] collective algorithms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Thanx for the valuable information.  So this solves part of the puzzle.  The next thing is know the cost of these algorithms.  Some of them seem to be standard, however, I am afraid there could be some modifications that will ultimately alter the cost.  Hence I asked for a paper.
<br>
I will look around..again Thanx
<br>
<p><p><p>---------------
<br>
Daniel Faraj
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gilles Gouaillardet
<br>
Sent: Monday, November 17, 2014 10:07 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] collective algorithms
<br>
<p>Daniel,
<br>
<p>you can run
<br>
$ ompi_info --parseable --all | grep _algorithm: | grep enumerator
<br>
<p>that will give you the list of supported algo for the collectives,
<br>
here is a sample output :
<br>
<p>mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:0:ignore
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:1:basic_linear
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:2:nonoverlapping
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:3:recursive_doubling
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:4:ring
<br>
mca:coll:tuned:param:coll_tuned_allreduce_algorithm:enumerator:value:5:segmented_ring
<br>
<p><p>the decision (which algo is used based on communicator size/message size/...) is made in
<br>
ompi/mca/coll/tuned/coll_tuned_decision_fixed.c
<br>
and can be overriden via config file or environment variable
<br>
<p>i cannot point you to a paper, and hopefully someone else will
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2014/11/18 12:53, Faraj, Daniel A wrote:
<br>
<p>I am trying to survey the collective algorithms in Open MPI.
<br>
<p>I looked at the src code but could not make out the guts of the communication algorithms.
<br>
<p>There are some open mpi papers but not detailed, where they talk about what algorithms are using in certain collectives.
<br>
<p>Has anybody done this sort of work, or point me to a paper?
<br>
<p><p><p>Basically, for a given collective operation, what are:
<br>
<p><p><p>a)      Communication algorithm being used for a given criteria (i.e. message size or np)
<br>
<p><p><p>b)      What is theoretical algorithm cost
<br>
<p><p><p>Thanx
<br>
<p><p><p><p><p>---------------
<br>
<p>Daniel Faraj
<br>
<p><p><p><p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25831.php">http://www.open-mpi.org/community/lists/users/2014/11/25831.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25848.php">Ralph Castain: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>In reply to:</strong> <a href="25832.php">Gilles Gouaillardet: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25843.php">George Bosilca: "Re: [OMPI users] collective algorithms"</a>
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
