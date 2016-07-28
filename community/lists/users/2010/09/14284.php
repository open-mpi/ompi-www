<?
$subject_val = "Re: [OMPI users] BTL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 13:53:11 2010" -->
<!-- isoreceived="20100922175311" -->
<!-- sent="Wed, 22 Sep 2010 19:53:06 +0200" -->
<!-- isosent="20100922175306" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL layer" -->
<!-- id="AANLkTinTWA-qcGGc1JrLqnHyZtFXEhwL4k6nkJcNnAvT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04899048-1A0D-4CBD-8391-F29C36175862_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BTL layer<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 13:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14283.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>In reply to:</strong> <a href="14268.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Reply:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
<p>and.. what about RDMA? It works only with point-to-point or also with
<br>
collectives?
<br>
<p>2010/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Sep 22, 2010, at 3:46 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'm tuning collectives of OpenMPI 1.4.2 with OTPO. I have a little
</span><br>
<span class="quotelev1">&gt; question about BTL. This layer is involves just in point-to-point
</span><br>
<span class="quotelev1">&gt; communication or also in collectives routines?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because i've noted that changing some blt parameters like
</span><br>
<span class="quotelev1">&gt; btl_sm_eager_limit and doing one collective routine, performances can have
</span><br>
<span class="quotelev1">&gt; very different behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BTLs are dumb byte transport layers -- they have no idea of any MPI
</span><br>
<span class="quotelev1">&gt; semantics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that being said, they act as the lowest layers for the MPI
</span><br>
<span class="quotelev1">&gt; point-to-point functions (MPI_SEND and the like).  They may *also* act as
</span><br>
<span class="quotelev1">&gt; the lowest layers for all of the collective functions.  Some collective
</span><br>
<span class="quotelev1">&gt; algorithms call MPI_SEND to do their individual sends, for example.  Others
</span><br>
<span class="quotelev1">&gt; may invoke BTL send/receive functions directly.  Others don't use the BTLs
</span><br>
<span class="quotelev1">&gt; at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14283.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>In reply to:</strong> <a href="14268.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>Reply:</strong> <a href="14285.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
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
