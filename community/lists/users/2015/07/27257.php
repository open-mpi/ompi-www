<?
$subject_val = "Re: [OMPI users] Problems Compiling ULFM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 08:37:18 2015" -->
<!-- isoreceived="20150706123718" -->
<!-- sent="Mon, 6 Jul 2015 21:37:16 +0900" -->
<!-- isosent="20150706123716" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling ULFM" -->
<!-- id="CAAkFZ5vhe3yv-M-_cgqC1sGJhjv5R0zPh1qGqiaqXx2GAR2ggw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 08:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Previous message:</strong> <a href="27256.php">Rafael Lago: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27255.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I got confused since from bitbucket, ulfm was imported from svn r25756 and
<br>
this svn id comes from the v1.7 branch
<br>
Also, orte_job_map_t has a policy field in v1.6 but no more in v1.7
<br>
<p>Anyway, you obviously know ulfm better than me, so I was wrong
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, July 6, 2015, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles thanks for your feedback, but I need to correct your claim: ULFM is
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
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rafael,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first glance, ulfm is based on openmpi 1.7
</span><br>
<span class="quotelev2">&gt;&gt; But the poe plm was written for openmpi 1.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You'd better ask the ulfm folks about this issue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday, July 6, 2015, Rafael Lago &lt;rafael.lago_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rafael.lago_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello there!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to work in a fault-tolerance project, and I immediately got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interested in the ULFM extension of OpenMPI. Although I've managed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and install OpenMPI-1.8.6 without a problem, I have been failing so far
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile ULFM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to follow the instructions in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://fault-tolerance.org/ulfm/ulfm-setup/">http://fault-tolerance.org/ulfm/ulfm-setup/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it seems that it is not enough. I'm using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m4-1.4.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoconf-2.69
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automake-1.14.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool-2.4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc-4.9.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I'm trying the mercurial version of ULFM. I am configuring with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exact
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command provided in the above link. When I try to make, I get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/slurm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in mca/plm/poe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC       plm_poe_component.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC       plm_poe.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/plm/poe/plm_poe.c: In function 'spawn':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/plm/poe/plm_poe.c:135:34: error: 'orte_rmaps_t'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; member named 'get_job_map'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (NULL == (map = orte_rmaps.get_job_map(jdata-&gt;jobid))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                   ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/plm/poe/plm_poe.c:222:42: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'orte_job_map_t' has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no member named 'policy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              if (ORTE_MAPPING_BYNODE &amp; map-&gt;policy) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                           ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [plm_poe.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/hydra/u/lrafa/local/ulfm/build/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anybody experienced that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance! Slainte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rafael Lago
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27252.php">http://www.open-mpi.org/community/lists/users/2015/07/27252.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27254.php">http://www.open-mpi.org/community/lists/users/2015/07/27254.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27258.php">Saliya Ekanayake: "Re: [OMPI users] Binding width affects allgatherv performance?"</a>
<li><strong>Previous message:</strong> <a href="27256.php">Rafael Lago: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>In reply to:</strong> <a href="27255.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
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
