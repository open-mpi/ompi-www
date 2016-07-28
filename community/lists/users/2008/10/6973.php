<?
$subject_val = "Re: [OMPI users] Rmpi installation issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 13:28:04 2008" -->
<!-- isoreceived="20081013172804" -->
<!-- sent="Mon, 13 Oct 2008 12:27:57 -0500" -->
<!-- isosent="20081013172757" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi installation issues" -->
<!-- id="20081013172757.GA30924_at_eddelbuettel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="264855a00810130918h73cc9e81i4a647961263b4b18_at_mail.gmail.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 13:27:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 13, 2008 at 12:18:30PM -0400, Sean Davis wrote:
<br>
<span class="quotelev1">&gt; On Mon, Oct 13, 2008 at 12:10 PM, Simone Giannerini
</span><br>
<span class="quotelev1">&gt; &lt;sgiannerini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Your mail is basically unreadable / impossible to attribute what is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; original and what is cited. Please follow convention and indent.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am sorry, I am copy/pasting the messages because I switched off receiving
</span><br>
<span class="quotelev2">&gt; &gt; list mails. I forgot to ask to reply also to my personal address.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this one is readable
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ok, didn't see that. But please do understand that 0.5-5 is on CRAN
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and released. (And yes, that is the version for which I also had to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make a fix to get it build on Debian as mentioned).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok I 'll stick to that one
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not it does not as lib64 != lib. You probably it installed if you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; create a softlink from
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        /usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;       /usr/lib64/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dirk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you, the following works for me:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # ln -s /usr/lib64/mpi/gcc/openmpi/lib64/ /usr/lib64/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev2">&gt; &gt; # CC=&quot;mpicc&quot;  R CMD INSTALL  Rmpi_0.5-5.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt; --configure-args=--with-mpi=/usr/lib64/mpi/gcc/openmpi/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can drop the --configure-args.  Using the correct mpicc should
</span><br>
<span class="quotelev1">&gt; take care of all the linking, etc.
</span><br>
<p>As I said, I doubt this works for R.  In general, this is sane advide.
<br>
In R's case, _a lot_ of flags and library mangling happens.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6970.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6972.php">Simone Giannerini: "Re: [OMPI users] Rmpi installation issues"</a>
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
