<?
$subject_val = "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 18:36:45 2015" -->
<!-- isoreceived="20150629223645" -->
<!-- sent="Mon, 29 Jun 2015 16:36:35 -0600" -->
<!-- isosent="20150629223635" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS" -->
<!-- id="20150629223635.GC17134_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vWP9jqG52iEau4W4zJBxUbU5LpLQi83OUYBEAwnAJTTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 18:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="27225.php">Gilles Gouaillardet: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27225.php">Gilles Gouaillardet: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would remove it since it has no effect in 1.10.
<br>
<p>-Nathan
<br>
<p>On Tue, Jun 30, 2015 at 07:16:09AM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;    Nathan,
</span><br>
<span class="quotelev1">&gt;    Shall I remove the --with-threads configure option ?
</span><br>
<span class="quotelev1">&gt;    or make it dummy ?
</span><br>
<span class="quotelev1">&gt;    Cheers,
</span><br>
<span class="quotelev1">&gt;    Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Tuesday, June 30, 2015, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Ah, that would explain why I am not seeing it in master. Can you PR the
</span><br>
<span class="quotelev1">&gt;      changes to v1.10?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Tue, Jun 30, 2015 at 07:06:15AM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;    Nathan,
</span><br>
<span class="quotelev2">&gt;      &gt;    I removed all of this (including the --with-threads configure
</span><br>
<span class="quotelev1">&gt;      option) on
</span><br>
<span class="quotelev2">&gt;      &gt;    master a while ago.
</span><br>
<span class="quotelev2">&gt;      &gt;    because this is a change in the configure command line, I never
</span><br>
<span class="quotelev1">&gt;      made a PR
</span><br>
<span class="quotelev2">&gt;      &gt;    for v1.8
</span><br>
<span class="quotelev2">&gt;      &gt;    Cheers,
</span><br>
<span class="quotelev2">&gt;      &gt;    Gilles
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    On Tuesday, June 30, 2015, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      Open MPI has required posix threads for some time. The check for
</span><br>
<span class="quotelev2">&gt;      &gt;      OPAL_HAVE_POSIX_THREADS in ompi/mca/osc/sm/osc_sm.h is stale and
</span><br>
<span class="quotelev1">&gt;      should
</span><br>
<span class="quotelev2">&gt;      &gt;      be removed. I will clean that out in master, 1.8, and 1.10.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      -Nathan
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      On Mon, Jun 29, 2015 at 05:26:30PM +0200, AAke Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Hi!
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; The my_sense entity in struct ompi_osc_sm_module_t is protected
</span><br>
<span class="quotelev1">&gt;      by
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; OPAL_HAVE_POSIX_THREADS in the definition
</span><br>
<span class="quotelev1">&gt;      (ompi/mca/osc/sm/osc_sm.h)
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; But in ./ompi/mca/osc/sm/osc_sm_active_target.c it is not.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; (Tripped on this due to a compiler problem which caused it to
</span><br>
<span class="quotelev1">&gt;      only
</span><br>
<span class="quotelev2">&gt;      &gt;      partially
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; detect threads support, found for C++, missing for C/Fortran)
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Not sure if it is something that need to be dealt with but
</span><br>
<span class="quotelev1">&gt;      reporting
</span><br>
<span class="quotelev2">&gt;      &gt;      anyway.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; --
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46
</span><br>
<span class="quotelev1">&gt;      90-580 14
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/06/27211.php">http://www.open-mpi.org/community/lists/users/2015/06/27211.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/06/27223.php">http://www.open-mpi.org/community/lists/users/2015/06/27223.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27225.php">http://www.open-mpi.org/community/lists/users/2015/06/27225.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27226/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27227.php">Thomas Jahns: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="27225.php">Gilles Gouaillardet: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27225.php">Gilles Gouaillardet: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
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
