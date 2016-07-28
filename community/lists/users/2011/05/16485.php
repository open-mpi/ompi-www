<?
$subject_val = "Re: [OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  8 09:10:58 2011" -->
<!-- isoreceived="20110508131058" -->
<!-- sent="Sun, 8 May 2011 09:09:31 -0400" -->
<!-- isosent="20110508130931" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] USE mpi" -->
<!-- id="21D6BC41-677A-4D18-AD69-F76C5190E29F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinJksqnJ-Sfuf3NNje-euff62UDVw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-08 09:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16486.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16486.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16486.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make all gets the same environment as make install (assuming you do it in the same shell). But if you sudo make install, the environment may be different - it may not inherit everything from your environment. 
<br>
<p>I advised the user to &quot;sudo -s&quot; and ten setup the compiler environment and then run make install. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On May 7, 2011, at 9:37 PM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I certainly do not expect anything special, just normally &quot;make
</span><br>
<span class="quotelev1">&gt; install&quot; should not have issues, if &quot;make&quot; passes fine, right? What we
</span><br>
<span class="quotelev1">&gt; have with OpenMPI is this strange difference: if ./configure CC=icc,
</span><br>
<span class="quotelev1">&gt; &quot;make&quot; works, and &quot;make install&quot; - does not; if ./configure
</span><br>
<span class="quotelev1">&gt; CC=/full/path/to/icc, then both &quot;make&quot; and &quot;make install&quot; work.
</span><br>
<span class="quotelev1">&gt; Nothing needs to be searched, icc is already in PATH, since
</span><br>
<span class="quotelev1">&gt; compilevars are sourced in profile.d. Or am I missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/5/8 Tim Prince &lt;n8tm_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; On 5/7/2011 2:35 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; didn't find the icc compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, on 1.4.3 I saw the same issue, even more generally: &quot;make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install&quot; cannot find the compiler, if it is an alien compiler (i.e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not the default gcc) - same situation for intel or llvm, for example.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The workaround is to specify full paths to compilers with CC=...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC=... in ./configure params. Could it be &quot;make install&quot; breaks some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; env paths?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Most likely reason for not finding an installed icc is that the icc
</span><br>
<span class="quotelev2">&gt;&gt; environment (source the compilervars script if you have a current version)
</span><br>
<span class="quotelev2">&gt;&gt; wasn't set prior to running configure.  Setting up the compiler in question
</span><br>
<span class="quotelev2">&gt;&gt; in accordance with its own instructions is a more likely solution than the
</span><br>
<span class="quotelev2">&gt;&gt; absolute path choice.
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI configure, for good reason, doesn't search your system to see where
</span><br>
<span class="quotelev2">&gt;&gt; a compiler might be installed.  What if you had 2 versions of the same named
</span><br>
<span class="quotelev2">&gt;&gt; compiler?
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prince
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16486.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16484.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16486.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16486.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
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
