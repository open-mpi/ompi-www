<?
$subject_val = "Re: [OMPI users] Problems Compiling ULFM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 07:56:55 2015" -->
<!-- isoreceived="20150706115655" -->
<!-- sent="Mon, 6 Jul 2015 07:56:53 -0400" -->
<!-- isosent="20150706115653" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling ULFM" -->
<!-- id="CAMJJpkX5DojD6_voNECSKSA=OL_uh4Bt-mR2CToJS_66=x4Fxg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2621021.7TEj2qn2SF_at_mpcdflrafapc" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Compiling ULFM<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 07:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27254.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27252.php">Rafael Lago: "[OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27252.php">Rafael Lago: "[OMPI users] Problems Compiling ULFM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27254.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rafael,
<br>
<p>Add &quot;--enable-mca-no-build=plm-poe&quot; to your configure line. This should
<br>
disable the POE PLM, which I don't think works in the context of ULFM
<br>
anyway.
<br>
<p>That being said, ULFM is a separate effort from Open MPI, you should ask
<br>
your questions on the ULFM mailing lists (
<br>
<a href="http://fault-tolerance.org/2012/10/18/ulfm-mailing-list/">http://fault-tolerance.org/2012/10/18/ulfm-mailing-list/</a>).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Mon, Jul 6, 2015 at 7:49 AM, Rafael Lago &lt;rafael.lago_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello there!
</span><br>
<span class="quotelev1">&gt; I'm trying to work in a fault-tolerance project, and I immediately got
</span><br>
<span class="quotelev1">&gt; interested in the ULFM extension of OpenMPI. Although I've managed to
</span><br>
<span class="quotelev1">&gt; compile
</span><br>
<span class="quotelev1">&gt; and install OpenMPI-1.8.6 without a problem, I have been failing so far to
</span><br>
<span class="quotelev1">&gt; compile ULFM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to follow the instructions in
</span><br>
<span class="quotelev1">&gt; <a href="http://fault-tolerance.org/ulfm/ulfm-setup/">http://fault-tolerance.org/ulfm/ulfm-setup/</a>
</span><br>
<span class="quotelev1">&gt; but it seems that it is not enough. I'm using
</span><br>
<span class="quotelev1">&gt; m4-1.4.12
</span><br>
<span class="quotelev1">&gt; autoconf-2.69
</span><br>
<span class="quotelev1">&gt; automake-1.14.1
</span><br>
<span class="quotelev1">&gt; libtool-2.4.2
</span><br>
<span class="quotelev1">&gt; gcc-4.9.3
</span><br>
<span class="quotelev1">&gt; and I'm trying the mercurial version of ULFM. I am configuring with the
</span><br>
<span class="quotelev1">&gt; exact
</span><br>
<span class="quotelev1">&gt; command provided in the above link. When I try to make, I get the following
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/slurm'
</span><br>
<span class="quotelev1">&gt; Making all in mca/plm/poe
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
</span><br>
<span class="quotelev1">&gt;   CC       plm_poe_component.lo
</span><br>
<span class="quotelev1">&gt;   CC       plm_poe.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/plm/poe/plm_poe.c: In function 'spawn':
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/plm/poe/plm_poe.c:135:34: error: 'orte_rmaps_t'
</span><br>
<span class="quotelev1">&gt; has no
</span><br>
<span class="quotelev1">&gt; member named 'get_job_map'
</span><br>
<span class="quotelev1">&gt;      if (NULL == (map = orte_rmaps.get_job_map(jdata-&gt;jobid))) {
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/plm/poe/plm_poe.c:222:42: error: 'orte_job_map_t'
</span><br>
<span class="quotelev1">&gt; has
</span><br>
<span class="quotelev1">&gt; no member named 'policy'
</span><br>
<span class="quotelev1">&gt;              if (ORTE_MAPPING_BYNODE &amp; map-&gt;policy) {
</span><br>
<span class="quotelev1">&gt;                                           ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [plm_poe.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/hydra/u/lrafa/local/ulfm/build/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anybody experienced that?
</span><br>
<span class="quotelev1">&gt; Thanks in advance! Slainte
</span><br>
<span class="quotelev1">&gt; Rafael Lago
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27252.php">http://www.open-mpi.org/community/lists/users/2015/07/27252.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27254.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27252.php">Rafael Lago: "[OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27252.php">Rafael Lago: "[OMPI users] Problems Compiling ULFM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27254.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
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
