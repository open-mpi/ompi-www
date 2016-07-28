<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 16:43:01 2009" -->
<!-- isoreceived="20091026204301" -->
<!-- sent="Mon, 26 Oct 2009 21:43:12 +0100" -->
<!-- isosent="20091026204312" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="4AE609E0.5090504_at_59A2.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98A07A5F-E052-4F8A-9D87-99F2BE45AF6E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 16:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10974.php">Rainer Keller: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Verbs and Open MPI don't have these options on by default because a)
</span><br>
<span class="quotelev1">&gt; you need to compile against Valgrind's header files to get them to
</span><br>
<span class="quotelev1">&gt; work, and b) there's a tiny/small amount of overhead inserted by OMPI
</span><br>
<span class="quotelev1">&gt; telling Valgrind &quot;this memory region is ok&quot;, but we live in an
</span><br>
<span class="quotelev1">&gt; intensely competitive HPC environment.
</span><br>
<p>It's certainly competitive, but we spend most of our implementation time
<br>
getting things correct rather than tuning.  The huge speed benefits come
<br>
from algorithmic advances, and finding bugs quickly makes the
<br>
implementation of new algorithms easier.  I'm not arguing that it should
<br>
be on by default, but it's helpful to have an environment where the
<br>
lower-level libs are valgrind-clean.  These days, I usually revert to
<br>
MPICH when hunting something with valgrind, but use OMPI most other
<br>
times.
<br>
<p><span class="quotelev1">&gt; The option to enable this Valgrind Goodness in OMPI is --with-valgrind. 
</span><br>
<span class="quotelev1">&gt; I *think* the option may be the same for libibverbs, but I don't
</span><br>
<span class="quotelev1">&gt; remember offhand.
</span><br>
<p>I see plenty of warning over btl sm.  Several variations, including the
<br>
excessive
<br>
<p>--enable-debug --enable-mem-debug --enable-mem-profile \
<br>
&nbsp;&nbsp;&nbsp;--enable-memchecker --with-valgrind=/usr
<br>
<p>were not sufficient.  (I think everything in this line except
<br>
--with-valgrind increases the number of warnings, but it's nontrivial
<br>
with plain --with-valgrind.)
<br>
<p><p>Thanks,
<br>
<p>Jed
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10975/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10974.php">Rainer Keller: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
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
