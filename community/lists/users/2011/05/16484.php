<?
$subject_val = "Re: [OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 21:37:37 2011" -->
<!-- isoreceived="20110508013737" -->
<!-- sent="Sun, 8 May 2011 05:37:30 +0400" -->
<!-- isosent="20110508013730" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] USE mpi" -->
<!-- id="BANLkTinJksqnJ-Sfuf3NNje-euff62UDVw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DC5EDF8.1030602_at_aol.com" -->
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
<strong>Date:</strong> 2011-05-07 21:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim,
<br>
<p>I certainly do not expect anything special, just normally &quot;make
<br>
install&quot; should not have issues, if &quot;make&quot; passes fine, right? What we
<br>
have with OpenMPI is this strange difference: if ./configure CC=icc,
<br>
&quot;make&quot; works, and &quot;make install&quot; - does not; if ./configure
<br>
CC=/full/path/to/icc, then both &quot;make&quot; and &quot;make install&quot; work.
<br>
Nothing needs to be searched, icc is already in PATH, since
<br>
compilevars are sourced in profile.d. Or am I missing something?
<br>
<p>Thanks,
<br>
- D.
<br>
<p>2011/5/8 Tim Prince &lt;n8tm_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On 5/7/2011 2:35 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't find the icc compiler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, on 1.4.3 I saw the same issue, even more generally: &quot;make
</span><br>
<span class="quotelev2">&gt;&gt; install&quot; cannot find the compiler, if it is an alien compiler (i.e.
</span><br>
<span class="quotelev2">&gt;&gt; not the default gcc) - same situation for intel or llvm, for example.
</span><br>
<span class="quotelev2">&gt;&gt; The workaround is to specify full paths to compilers with CC=...
</span><br>
<span class="quotelev2">&gt;&gt; FC=... in ./configure params. Could it be &quot;make install&quot; breaks some
</span><br>
<span class="quotelev2">&gt;&gt; env paths?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most likely reason for not finding an installed icc is that the icc
</span><br>
<span class="quotelev1">&gt; environment (source the compilervars script if you have a current version)
</span><br>
<span class="quotelev1">&gt; wasn't set prior to running configure. &#160;Setting up the compiler in question
</span><br>
<span class="quotelev1">&gt; in accordance with its own instructions is a more likely solution than the
</span><br>
<span class="quotelev1">&gt; absolute path choice.
</span><br>
<span class="quotelev1">&gt; OpenMPI configure, for good reason, doesn't search your system to see where
</span><br>
<span class="quotelev1">&gt; a compiler might be installed. &#160;What if you had 2 versions of the same named
</span><br>
<span class="quotelev1">&gt; compiler?
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<li><strong>Next message:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16483.php">Tim Prince: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
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
