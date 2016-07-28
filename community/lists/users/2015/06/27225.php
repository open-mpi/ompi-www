<?
$subject_val = "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 18:16:10 2015" -->
<!-- isoreceived="20150629221610" -->
<!-- sent="Tue, 30 Jun 2015 07:16:09 +0900" -->
<!-- isosent="20150629221609" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS" -->
<!-- id="CAAkFZ5vWP9jqG52iEau4W4zJBxUbU5LpLQi83OUYBEAwnAJTTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150629220838.GB17134_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 18:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="27224.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27224.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Reply:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Shall I remove the --with-threads configure option ?
<br>
or make it dummy ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, June 30, 2015, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, that would explain why I am not seeing it in master. Can you PR the
</span><br>
<span class="quotelev1">&gt; changes to v1.10?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 30, 2015 at 07:06:15AM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Nathan,
</span><br>
<span class="quotelev2">&gt; &gt;    I removed all of this (including the --with-threads configure option)
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt;    master a while ago.
</span><br>
<span class="quotelev2">&gt; &gt;    because this is a change in the configure command line, I never made
</span><br>
<span class="quotelev1">&gt; a PR
</span><br>
<span class="quotelev2">&gt; &gt;    for v1.8
</span><br>
<span class="quotelev2">&gt; &gt;    Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;    Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    On Tuesday, June 30, 2015, Nathan Hjelm &lt;hjelmn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Open MPI has required posix threads for some time. The check for
</span><br>
<span class="quotelev2">&gt; &gt;      OPAL_HAVE_POSIX_THREADS in ompi/mca/osc/sm/osc_sm.h is stale and
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev2">&gt; &gt;      be removed. I will clean that out in master, 1.8, and 1.10.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      On Mon, Jun 29, 2015 at 05:26:30PM +0200, AAke Sandgren wrote:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Hi!
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; The my_sense entity in struct ompi_osc_sm_module_t is protected by
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; OPAL_HAVE_POSIX_THREADS in the definition
</span><br>
<span class="quotelev1">&gt; (ompi/mca/osc/sm/osc_sm.h)
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; But in ./ompi/mca/osc/sm/osc_sm_active_target.c it is not.
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; (Tripped on this due to a compiler problem which caused it to only
</span><br>
<span class="quotelev2">&gt; &gt;      partially
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; detect threads support, found for C++, missing for C/Fortran)
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Not sure if it is something that need to be dealt with but
</span><br>
<span class="quotelev1">&gt; reporting
</span><br>
<span class="quotelev2">&gt; &gt;      anyway.
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; --
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Internet: ake_at_[hidden] &lt;javascript:;&gt;   Phone: +46 90
</span><br>
<span class="quotelev1">&gt; 7866134 Fax: +46 90-580 14
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/06/27211.php">http://www.open-mpi.org/community/lists/users/2015/06/27211.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27223.php">http://www.open-mpi.org/community/lists/users/2015/06/27223.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="27224.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27224.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Reply:</strong> <a href="27226.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
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
