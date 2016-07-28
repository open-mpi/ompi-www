<?
$subject_val = "Re: [OMPI users] 'AINT' undeclared";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 17:35:32 2016" -->
<!-- isoreceived="20160510213532" -->
<!-- sent="Wed, 11 May 2016 06:35:30 +0900" -->
<!-- isosent="20160510213530" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'AINT' undeclared" -->
<!-- id="CAAkFZ5u9-Cf4nmT_K7OswcyS3DaafnvKg5S1=ueafV_O_AiJTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1462895526275.53893_at_umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'AINT' undeclared<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 17:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29165.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29171.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ilias,
<br>
<p>at first glance, you are using the PGI preprocessor (!)
<br>
<p>can you re-run configure with CPP=cpp,
<br>
or after removing all PGI related environment variables,
<br>
and see it it helps ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, May 11, 2016, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2016/05/29148.php">https://www.open-mpi.org/community/lists/users/2016/05/29148.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Gill,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ooops, I don't have SIZEOF_PTRDIFF_T in config.status/config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching config.log, config.status files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is virtual machine :
</span><br>
<span class="quotelev1">&gt; Linux grid.ui.savba.sk 2.6.32-573.26.1.el6.x86_64 #1 SMP Tue May 3
</span><br>
<span class="quotelev1">&gt; 14:22:07 CDT 2016 x86_64 x86_64 x86_64 GNU/Linux ; 4 cpu Westmere
</span><br>
<span class="quotelev1">&gt; E56xx/L56xx/X56xx (Nehalem-C).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Miro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29165.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29171.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
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
