<?
$subject_val = "Re: [OMPI users] probl&#232;me with MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 10:34:41 2011" -->
<!-- isoreceived="20111102143441" -->
<!-- sent="Wed, 2 Nov 2011 10:34:37 -0400" -->
<!-- isosent="20111102143437" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probl&amp;#232;me with MPI_FINALIZE" -->
<!-- id="CAHXxYDjhau2raKoXVO=4GvP5oWKMeZxKeVa80-=n5T-7LsqWOg_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 10:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17666.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>In reply to:</strong> <a href="17665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any particular reason these calls don't nest? In some other HPC-like
<br>
paradigms (e.g. VSIPL) such calls are allowed to nest (i.e. only the
<br>
finalize() that matches the first init() will destroy allocated
<br>
resources.)
<br>
<p>Just a curiosity question, doesn't really concern me in any particular way.
<br>
<p>Best regards
<br>
Durga
<br>
<p><p>2011/11/2 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Did you call MPI-INIT after you called MPI-finalize? &#160;If so, you're not allowed to do that. Call. MPI-INIT once and call MPI-finalize once.
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
<span class="quotelev2">&gt;&gt; hey
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'm new in mpi , i try tu use &#160;mpi inside of function and i have this error messag
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** after MPI was finalized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [dellam:16806] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; maybe i cant use mpi inside of function ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; amine mrabet
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17666.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>In reply to:</strong> <a href="17665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="17669.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
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
