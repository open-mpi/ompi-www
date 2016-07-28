<?
$subject_val = "Re: [OMPI users] Problem getting job to start";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 18:06:02 2015" -->
<!-- isoreceived="20150623220602" -->
<!-- sent="Wed, 24 Jun 2015 07:06:01 +0900" -->
<!-- isosent="20150623220601" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem getting job to start" -->
<!-- id="CAAkFZ5uOiS9uJoBewfvBj=Q2oTVL2zwUg7AjFRz+AVmFp0ta7g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2013249865.4094610.1435080025005.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem getting job to start<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-23 18:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27177.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27175.php">Jeff Layton: "[OMPI users] Problem getting job to start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem getting job to start"</a>
<li><strong>Reply:</strong> <a href="27182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem getting job to start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>it sounds like openmpI is not available on sone nodes !
<br>
<p>an other possibility is it is installed but in an other directory
<br>
or mabye it is not in your path and you did not configure with
<br>
--enable-mpirun-prefix-by-default
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, June 24, 2015, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good afternoon sports fans!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run the ft code of NPB, class D, over 128 processors. I
</span><br>
<span class="quotelev1">&gt; built the code with gfortran 4.4.7 (CentOS 6 platform) and Open MPI 1.8.1.
</span><br>
<span class="quotelev1">&gt; I'm using openlava as the resource manager. The error output is the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ec2-user_at_ip-172-31-42-106 bin]$ more runit_ft_128_D.err
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added the RSA host key for IP address '172.31.41.229'
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<span class="quotelev1">&gt;  list of known hosts.
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize this is something of a catch-all for startup problems but I'm
</span><br>
<span class="quotelev1">&gt; not exactly sure where to start debugging. Any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27179.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27177.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27175.php">Jeff Layton: "[OMPI users] Problem getting job to start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem getting job to start"</a>
<li><strong>Reply:</strong> <a href="27182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem getting job to start"</a>
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
