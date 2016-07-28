<?
$subject_val = "Re: [OMPI users] Check whether non-blocking communication has finished?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 13:56:26 2011" -->
<!-- isoreceived="20110202185626" -->
<!-- sent="Wed, 2 Feb 2011 13:56:21 -0500" -->
<!-- isosent="20110202185621" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Check whether non-blocking communication has finished?" -->
<!-- id="AANLkTik+sW9bxgJzPmUKBQv+OngYfFSHC6y449Ef=jw5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="09D2C199-13B2-4D69-9AD2-4633AB288FA1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Check whether non-blocking communication has finished?<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 13:56:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Previous message:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15480.php">Jeff Squyres: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Reply:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps often it is more useful to use MPI_WAIT rather than MPI_TEST type
<br>
fucntions, because at MPI_WAIT point it will be taken care of communication
<br>
completion, automatically, which may be necessary before going ahead. with
<br>
MPI_TEST it would become the responsibility of the programmer to handle the
<br>
situation if the test is FALSE/FAILED.
<br>
<p>On Wed, Feb 2, 2011 at 7:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes; you can use any of the various flavors of the MPI_TEST* functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2011, at 7:03 AM, Bibrak Qamar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any way to find whether a non blocking communication has
</span><br>
<span class="quotelev1">&gt; finished without calling the wait( ) function.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Bibrak Qamar
</span><br>
<span class="quotelev2">&gt; &gt; Undergraduate Student BIT-9
</span><br>
<span class="quotelev2">&gt; &gt; Member Center for High Performance Scientific Computing
</span><br>
<span class="quotelev2">&gt; &gt; NUST-School of Electrical Engineering and Computer Science.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Previous message:</strong> <a href="15489.php">Jeffrey A Cummings: "[OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15480.php">Jeff Squyres: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Reply:</strong> <a href="15491.php">David Zhang: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
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
