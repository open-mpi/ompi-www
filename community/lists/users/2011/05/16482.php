<?
$subject_val = "Re: [OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 17:35:12 2011" -->
<!-- isoreceived="20110507213512" -->
<!-- sent="Sun, 8 May 2011 01:35:05 +0400" -->
<!-- isosent="20110507213505" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] USE mpi" -->
<!-- id="BANLkTindEx8RvRZy6NQ=LtYjGtQUb4HpoQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D92686EE-2123-45A3-AFFD-CF4B9EA50A4C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] USE mpi<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 17:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16481.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16480.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; didn't find the icc compiler
</span><br>
<p>Jeff, on 1.4.3 I saw the same issue, even more generally: &quot;make
<br>
install&quot; cannot find the compiler, if it is an alien compiler (i.e.
<br>
not the default gcc) - same situation for intel or llvm, for example.
<br>
The workaround is to specify full paths to compilers with CC=...
<br>
FC=... in ./configure params. Could it be &quot;make install&quot; breaks some
<br>
env paths?
<br>
<p>- D.
<br>
<p>2011/5/8 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; We iterated off-list -- the problem was that &quot;sudo make install&quot; didn't find the icc compiler, and therefore didn't complete properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the ompi_info and mpif90 cited in this thread were from some other (broken?) OMPI installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2011, at 3:01 PM, Steph Bredenhann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I missed the 2nd statement:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Steph Bredenhann
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, 2011-05-07 at 14:46 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info | grep 90
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16481.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16480.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
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
