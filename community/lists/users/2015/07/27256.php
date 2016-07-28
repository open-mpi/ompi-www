<?
$subject_val = "Re: [OMPI users] Problems Compiling ULFM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 08:26:22 2015" -->
<!-- isoreceived="20150706122622" -->
<!-- sent="Mon, 06 Jul 2015 14:26:17 +0200" -->
<!-- isosent="20150706122617" -->
<!-- name="Rafael Lago" -->
<!-- email="rafael.lago_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling ULFM" -->
<!-- id="9589088.s3MkCFLN1F_at_mpcdflrafapc" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkW9o094g3NNvofDdt0JF8T+iwDtYx8f_=1ZBX5rRxtVJQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Rafael Lago (<em>rafael.lago_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 08:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27257.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27255.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27255.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27257.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you both for your feedback!
<br>
It now compiles. I have also subscribed to the correct mailing list.
<br>
Slainte!
<br>
Rafael Lago
<br>
<p>On Monday 06 July 2015 08:15:33 George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Gilles thanks for your feedback, but I need to correct your claim: ULFM is
</span><br>
<span class="quotelev1">&gt; based on 1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 6, 2015 at 8:11 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Rafael,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; At first glance, ulfm is based on openmpi 1.7
</span><br>
<span class="quotelev2">&gt; &gt; But the poe plm was written for openmpi 1.6
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You'd better ask the ulfm folks about this issue
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Monday, July 6, 2015, Rafael Lago &lt;rafael.lago_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello there!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm trying to work in a fault-tolerance project, and I immediately got
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interested in the ULFM extension of OpenMPI. Although I've managed to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and install OpenMPI-1.8.6 without a problem, I have been failing so far
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compile ULFM.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to follow the instructions in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://fault-tolerance.org/ulfm/ulfm-setup/">http://fault-tolerance.org/ulfm/ulfm-setup/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but it seems that it is not enough. I'm using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; m4-1.4.12
</span><br>
<span class="quotelev3">&gt; &gt;&gt; autoconf-2.69
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automake-1.14.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtool-2.4.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gcc-4.9.3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and I'm trying the mercurial version of ULFM. I am configuring with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exact
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command provided in the above link. When I try to make, I get the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/slurm'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making all in mca/plm/poe
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   CC       plm_poe_component.lo
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   CC       plm_poe.lo
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ../../../../../orte/mca/plm/poe/plm_poe.c: In function 'spawn':
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ../../../../../orte/mca/plm/poe/plm_poe.c:135:34: error: 'orte_rmaps_t'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; has no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; member named 'get_job_map'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if (NULL == (map = orte_rmaps.get_job_map(jdata-&gt;jobid))) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                   ^
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ../../../../../orte/mca/plm/poe/plm_poe.c:222:42: error: 'orte_job_map_t'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; has
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no member named 'policy'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              if (ORTE_MAPPING_BYNODE &amp; map-&gt;policy) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                           ^
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: *** [plm_poe.lo] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: Leaving directory `/hydra/u/lrafa/local/ulfm/build/orte'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Has anybody experienced that?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance! Slainte
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rafael Lago
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27252.php">http://www.open-mpi.org/community/lists/users/2015/07/27252.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27254.php">http://www.open-mpi.org/community/lists/users/2015/07/27254.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27257.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27255.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27255.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27257.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
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
