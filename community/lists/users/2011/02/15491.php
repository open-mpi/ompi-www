<?
$subject_val = "Re: [OMPI users] Check whether non-blocking communication has finished?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 18:39:50 2011" -->
<!-- isoreceived="20110202233950" -->
<!-- sent="Wed, 2 Feb 2011 15:39:46 -0800" -->
<!-- isosent="20110202233946" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Check whether non-blocking communication has finished?" -->
<!-- id="AANLkTim13DXQz2=DuvaRC4s9TRuatazVgD_zCEraC_mK_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTik+sW9bxgJzPmUKBQv+OngYfFSHC6y449Ef=jw5_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 18:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15492.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Previous message:</strong> <a href="15490.php">amjad ali: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15490.php">amjad ali: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think ultimately it would comes down to whether code execution is
<br>
more important than receiving the message in a timely fashion.
<br>
<p>On 2/2/11, amjad ali &lt;amjad11_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Perhaps often it is more useful to use MPI_WAIT rather than MPI_TEST type
</span><br>
<span class="quotelev1">&gt; fucntions, because at MPI_WAIT point it will be taken care of communication
</span><br>
<span class="quotelev1">&gt; completion, automatically, which may be necessary before going ahead. with
</span><br>
<span class="quotelev1">&gt; MPI_TEST it would become the responsibility of the programmer to handle the
</span><br>
<span class="quotelev1">&gt; situation if the test is FALSE/FAILED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 2, 2011 at 7:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes; you can use any of the various flavors of the MPI_TEST* functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 2, 2011, at 7:03 AM, Bibrak Qamar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello All,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is there any way to find whether a non blocking communication has
</span><br>
<span class="quotelev2">&gt;&gt; finished without calling the wait( ) function.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Bibrak Qamar
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Undergraduate Student BIT-9
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Member Center for High Performance Scientific Computing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; NUST-School of Electrical Engineering and Computer Science.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15492.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<li><strong>Previous message:</strong> <a href="15490.php">amjad ali: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15490.php">amjad ali: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
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
