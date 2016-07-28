<?
$subject_val = "Re: [OMPI users] probl&#232;me with MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 12:09:33 2011" -->
<!-- isoreceived="20111102160933" -->
<!-- sent="Wed, 2 Nov 2011 17:09:28 +0100" -->
<!-- isosent="20111102160928" -->
<!-- name="amine mrabet" -->
<!-- email="aminesm01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probl&amp;#232;me with MPI_FINALIZE" -->
<!-- id="CAA+UwzvMqYor+9dUtMdm58hfpJ2OxyvoKgn8oN_FmNrcJHxB7A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1A99CBDD-F3E3-4543-95A6-A455C98FE3F5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] probl&#232;me with MPI_FINALIZE<br>
<strong>From:</strong> amine mrabet (<em>aminesm01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 12:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="17665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes i call MPI_init after MPI_finalise ,because i use mpi in function and i
<br>
call it lot of time .
<br>
thank you for ur help ,now i call mpi_init and finalize out of funtion and
<br>
it work .
<br>
thank you
<br>
<p><p><p><p>Le 2 novembre 2011 13:29, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; a
<br>
&#233;crit :
<br>
<p><span class="quotelev1">&gt; Did you call MPI-INIT after you called MPI-finalize?  If so, you're not
</span><br>
<span class="quotelev1">&gt; allowed to do that. Call. MPI-INIT once and call MPI-finalize once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2011, at 2:45 PM, &quot;amine mrabet&quot; &lt;aminesm01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; hey
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'm new in mpi , i try tu use  mpi inside of function and i have this
</span><br>
<span class="quotelev1">&gt; error messag
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** after MPI was finalized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; [dellam:16806] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; maybe i cant use mpi inside of function ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; amine mrabet
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
<p><p><p><pre>
-- 
amine mrabet
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17668/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="17665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
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
