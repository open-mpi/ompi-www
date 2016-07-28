<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 12:18:34 2008" -->
<!-- isoreceived="20081013161834" -->
<!-- sent="Mon, 13 Oct 2008 12:18:30 -0400" -->
<!-- isosent="20081013161830" -->
<!-- name="Sean Davis" -->
<!-- email="sdavis2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="264855a00810130918h73cc9e81i4a647961263b4b18_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3c12769c0810130910v52b07302uca04aa17ee13cc7c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rmpi installation issues<br>
<strong>From:</strong> Sean Davis (<em>sdavis2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 12:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6969.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6969.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6973.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 13, 2008 at 12:10 PM, Simone Giannerini
<br>
&lt;sgiannerini_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your mail is basically unreadable / impossible to attribute what is
</span><br>
<span class="quotelev2">&gt;&gt; original and what is cited. Please follow convention and indent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sorry, I am copy/pasting the messages because I switched off receiving
</span><br>
<span class="quotelev1">&gt; list mails. I forgot to ask to reply also to my personal address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this one is readable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, didn't see that. But please do understand that 0.5-5 is on CRAN
</span><br>
<span class="quotelev2">&gt;&gt; and released. (And yes, that is the version for which I also had to
</span><br>
<span class="quotelev2">&gt;&gt; make a fix to get it build on Debian as mentioned).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok I 'll stick to that one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not it does not as lib64 != lib. You probably it installed if you
</span><br>
<span class="quotelev2">&gt;&gt; create a softlink from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        /usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;       /usr/lib64/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dirk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you, the following works for me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ln -s /usr/lib64/mpi/gcc/openmpi/lib64/ /usr/lib64/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev1">&gt; # CC=&quot;mpicc&quot;  R CMD INSTALL  Rmpi_0.5-5.tar.gz
</span><br>
<span class="quotelev1">&gt; --configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<p>You can drop the --configure-args.  Using the correct mpicc should
<br>
take care of all the linking, etc.
<br>
<p>Sean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6969.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6969.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6971.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Reply:</strong> <a href="6973.php">Dirk Eddelbuettel: "Re: [OMPI users] Rmpi installation issues"</a>
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
