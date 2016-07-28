<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 15:33:30 2011" -->
<!-- isoreceived="20110404193330" -->
<!-- sent="Mon, 4 Apr 2011 14:33:24 -0500" -->
<!-- isosent="20110404193324" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="BANLkTi=mNJB1uaoFt5whGLLQORxMQ3uTPQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTi=EvcjyV3geFoG5WLQrU7Sq3099fg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems,<br>
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 15:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>In reply to:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16124.php">Samuel K. Gutierrez: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
altering LD_LIBRARY_PATH alter's the process's path to mpi's libraries, how
<br>
do i alter its path to compiler libs like libfui.so.1? it needs to find them
<br>
cause it was compiled by a sun compiler
<br>
<p>On Mon, Apr 4, 2011 at 10:06 AM, Nehemiah Dacres &lt;dacresni_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Ralph indicated, he'll add the hostname to the error message (but that
</span><br>
<span class="quotelev2">&gt;&gt; might be tricky; that error message is coming from rsh/ssh...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime, you might try (csh style):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; foreach host (`cat list`)
</span><br>
<span class="quotelev2">&gt;&gt;    echo $host
</span><br>
<span class="quotelev2">&gt;&gt;    ls -l /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; that's what the tentakel line was refering to, or ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 4, 2011, at 10:24 AM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have installed it via a symlink on all of the nodes, I can go
</span><br>
<span class="quotelev2">&gt;&gt; 'tentakel which mpirun ' and it finds it' I'll check the library paths but
</span><br>
<span class="quotelev2">&gt;&gt; isn't there a way to find out which nodes are returning the error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found it misslinked on a couple nodes. thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev1">&gt; System Administrator
</span><br>
<span class="quotelev1">&gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Nehemiah I. Dacres
System Administrator
Advanced Technology Group Saint Louis University
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>In reply to:</strong> <a href="16118.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16124.php">Samuel K. Gutierrez: "Re: [OMPI users] mpi problems,"</a>
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
