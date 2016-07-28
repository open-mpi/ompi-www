<?
$subject_val = "Re: [OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  8 11:33:30 2011" -->
<!-- isoreceived="20110508153330" -->
<!-- sent="Sun, 08 May 2011 17:33:24 +0200" -->
<!-- isosent="20110508153324" -->
<!-- name="Steph Bredenhann" -->
<!-- email="s.j.bredenhann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] USE mpi" -->
<!-- id="1304868804.2578.39.camel_at_sjb-linux" -->
<!-- charset="utf-8" -->
<!-- inreplyto="21D6BC41-677A-4D18-AD69-F76C5190E29F_at_cisco.com" -->
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
<strong>From:</strong> Steph Bredenhann (<em>s.j.bredenhann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-08 11:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16487.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16487.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16487.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff is correct. The Intel environmental variables are either set
<br>
in /etc/profile or /user/.bashrc (or manually). Root sets its own
<br>
environmental variables and therefore the key is to make sure that the
<br>
environmental variables are set before an installation as root is done,
<br>
i.e.:
<br>
<p>source /opt/intel/Compiler/11.1/073/bin/ifortvars.sh intel64 
<br>
source /opt/intel/Compiler/11.1/073/bin/iccvars.sh intel64
<br>
<p>Then the rest of the procedure can follow.
<br>
<p>It sounds simple and it is, perhaps 
<br>
<p><pre>
-- 
Steph Bredenhann 
On Sun, 2011-05-08 at 09:09 -0400, Jeff Squyres (jsquyres) wrote:
&gt; Make all gets the same environment as make install (assuming you do it in the same shell). But if you sudo make install, the environment may be different - it may not inherit everything from your environment. 
&gt; 
&gt; I advised the user to &quot;sudo -s&quot; and ten setup the compiler environment and then run make install. 
&gt; 
&gt; Sent from my phone. No type good. 
&gt; 
&gt; On May 7, 2011, at 9:37 PM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; Tim,
&gt; &gt; 
&gt; &gt; I certainly do not expect anything special, just normally &quot;make
&gt; &gt; install&quot; should not have issues, if &quot;make&quot; passes fine, right? What we
&gt; &gt; have with OpenMPI is this strange difference: if ./configure CC=icc,
&gt; &gt; &quot;make&quot; works, and &quot;make install&quot; - does not; if ./configure
&gt; &gt; CC=/full/path/to/icc, then both &quot;make&quot; and &quot;make install&quot; work.
&gt; &gt; Nothing needs to be searched, icc is already in PATH, since
&gt; &gt; compilevars are sourced in profile.d. Or am I missing something?
&gt; &gt; 
&gt; &gt; Thanks,
&gt; &gt; - D.
&gt; &gt; 
&gt; &gt; 2011/5/8 Tim Prince &lt;n8tm_at_[hidden]&gt;:
&gt; &gt;&gt; On 5/7/2011 2:35 PM, Dmitry N. Mikushin wrote:
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; didn't find the icc compiler
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; Jeff, on 1.4.3 I saw the same issue, even more generally: &quot;make
&gt; &gt;&gt;&gt; install&quot; cannot find the compiler, if it is an alien compiler (i.e.
&gt; &gt;&gt;&gt; not the default gcc) - same situation for intel or llvm, for example.
&gt; &gt;&gt;&gt; The workaround is to specify full paths to compilers with CC=...
&gt; &gt;&gt;&gt; FC=... in ./configure params. Could it be &quot;make install&quot; breaks some
&gt; &gt;&gt;&gt; env paths?
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; Most likely reason for not finding an installed icc is that the icc
&gt; &gt;&gt; environment (source the compilervars script if you have a current version)
&gt; &gt;&gt; wasn't set prior to running configure.  Setting up the compiler in question
&gt; &gt;&gt; in accordance with its own instructions is a more likely solution than the
&gt; &gt;&gt; absolute path choice.
&gt; &gt;&gt; OpenMPI configure, for good reason, doesn't search your system to see where
&gt; &gt;&gt; a compiler might be installed.  What if you had 2 versions of the same named
&gt; &gt;&gt; compiler?
&gt; &gt;&gt; --
&gt; &gt;&gt; Tim Prince
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; 
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16486/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16487.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16485.php">Jeff Squyres (jsquyres): "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16487.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16487.php">Dmitry N. Mikushin: "Re: [OMPI users] USE mpi"</a>
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
