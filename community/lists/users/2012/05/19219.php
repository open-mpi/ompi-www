<?
$subject_val = "Re: [OMPI users] problem in installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 07:15:31 2012" -->
<!-- isoreceived="20120508111531" -->
<!-- sent="Tue, 8 May 2012 07:15:14 -0400" -->
<!-- isosent="20120508111514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem in installation" -->
<!-- id="DBA9BE7F-736A-41AD-8750-54506780ED20_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANkG+w=Ahp_Jo4gUn_0MPUnm8hVwo9yiozungEQo-CyHdndUGQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 07:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19218.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19218.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>Reply:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like your PGI compiler installation may be busted.
<br>
<p>Can you compile non-MPI applications with it?  
<br>
<p>It looks like you have PGI 10.x.  Try upgrading to the latest version of the PGI 10.x series (i.e., get all the relevant PGI compiler bug fixes).
<br>
<p><p>On May 8, 2012, at 6:43 AM, ahmed lasheen wrote:
<br>
<p><span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; I put cc and cxx ,But I also get the following errors
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 10.0-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; make[3]: *** [keyval_lex.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the configure and make output.
</span><br>
<span class="quotelev1">&gt; thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 8, 2012 at 2:54 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On May 7, 2012, at 8:32 AM, ahmed lasheen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In installation I used the following command
</span><br>
<span class="quotelev2">&gt; &gt; ./configure     --prefix=/usr/local/open_mpi_pgi/  F77=pgf77 FC=pgf90 ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try also listing CC=pgcc and CXX=pgCC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt; Ahmed Lasheen
</span><br>
<span class="quotelev1">&gt; Junior researcher at Cairo Numerical Weather Prediction Center (CNWPC)
</span><br>
<span class="quotelev1">&gt; Egyptian Meteorological Authority(EMA)
</span><br>
<span class="quotelev1">&gt; Cairo,Egypt 
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;conf.out&gt;&lt;make.out&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19218.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19218.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>Reply:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
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
