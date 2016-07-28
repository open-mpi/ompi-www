<?
$subject_val = "Re: [OMPI users] problem in installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 07:39:54 2012" -->
<!-- isoreceived="20120508113954" -->
<!-- sent="Tue, 8 May 2012 14:39:09 +0300" -->
<!-- isosent="20120508113909" -->
<!-- name="ahmed lasheen" -->
<!-- email="ahmed4kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem in installation" -->
<!-- id="CANkG+wnHOo8aVHVDcXWKoAVDH78De5Yj5u6_7HcYuSgAbkjnaA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DBA9BE7F-736A-41AD-8750-54506780ED20_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem in installation<br>
<strong>From:</strong> ahmed lasheen (<em>ahmed4kernel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 07:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19219.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19219.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>Reply:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using pgi10.0.0 and it works with nonMPI application well.
<br>
I will upgrade pgi and I will tell you the result.
<br>
thanks
<br>
<p>On Tue, May 8, 2012 at 1:15 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks like your PGI compiler installation may be busted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you compile non-MPI applications with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like you have PGI 10.x.  Try upgrading to the latest version of
</span><br>
<span class="quotelev1">&gt; the PGI 10.x series (i.e., get all the relevant PGI compiler bug fixes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 8, 2012, at 6:43 AM, ahmed lasheen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; I put cc and cxx ,But I also get the following errors
</span><br>
<span class="quotelev2">&gt; &gt; PGC/x86-64 Linux 10.0-0: compilation completed with severe errors
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [keyval_lex.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have attached the configure and make output.
</span><br>
<span class="quotelev2">&gt; &gt; thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 8, 2012 at 2:54 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On May 7, 2012, at 8:32 AM, ahmed lasheen wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In installation I used the following command
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./configure     --prefix=/usr/local/open_mpi_pgi/  F77=pgf77 FC=pgf90 ;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try also listing CC=pgcc and CXX=pgCC.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ===============
</span><br>
<span class="quotelev2">&gt; &gt; Ahmed Lasheen
</span><br>
<span class="quotelev2">&gt; &gt; Junior researcher at Cairo Numerical Weather Prediction Center (CNWPC)
</span><br>
<span class="quotelev2">&gt; &gt; Egyptian Meteorological Authority(EMA)
</span><br>
<span class="quotelev2">&gt; &gt; Cairo,Egypt
</span><br>
<span class="quotelev2">&gt; &gt; ===============
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;conf.out&gt;&lt;make.out&gt;_______________________________________________
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
<p><p><p><pre>
-- 
===============
Ahmed Lasheen
Junior researcher at Cairo Numerical Weather Prediction Center (CNWPC)
Egyptian Meteorological Authority(EMA)
Cairo,Egypt
===============
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19219.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19219.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
<li><strong>Reply:</strong> <a href="19221.php">Jeff Squyres: "Re: [OMPI users] problem in installation"</a>
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
