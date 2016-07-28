<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 19:25:38 2010" -->
<!-- isoreceived="20100428232538" -->
<!-- sent="Thu, 29 Apr 2010 00:25:14 +0100" -->
<!-- isosent="20100428232514" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="87zl0np3c5.fsf_at_liv.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BD7DBDF.1090706_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 19:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12841.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12830.php">Fabian H&#228;nsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12838.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fabian H&#228;nsel &lt;fabtagon_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; You could try to set optimizations more fine-grained. Every
</span><br>
<span class="quotelev1">&gt; -Osomething stands for a certain set of optimizations. Start with
</span><br>
<span class="quotelev1">&gt; e.g. &quot;gcc -Q -O2 --help=optimizers&quot; to see all available optimizations
</span><br>
<span class="quotelev1">&gt; and which are enabled at -O2. Read about them on the gcc
</span><br>
<span class="quotelev1">&gt; manpage. Disable those that decrease accuracy.
</span><br>
<p>There are none which `decrease accuracy' or violate the IEEE floating
<br>
point rules (modulo rather rare bugs).  I was willing to take bets on
<br>
problems being in the user's code rather than GCC when I was a
<br>
maintainer.  -ffast-math, for instance, is chosen explicitly.  This
<br>
surely isn't the place to talk about it, though.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12841.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12839.php">Douglas Guptill: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12830.php">Fabian H&#228;nsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12838.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
