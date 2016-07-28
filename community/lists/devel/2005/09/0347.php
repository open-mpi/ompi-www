<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 12:16:06 2005" -->
<!-- isoreceived="20050914171606" -->
<!-- sent="Wed, 14 Sep 2005 19:16:03 +0200" -->
<!-- isosent="20050914171603" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  64bit shared library problems" -->
<!-- id="20050914171603.GB21524_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050913062133.6830.qmail_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 12:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0348.php">James W. Barker: "error message on make"</a>
<li><strong>Previous message:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p><span class="quotelev1">&gt; Nathan DeBardeleben writes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been having this problem for a week or so and I've been asking 
</span><br>
<span class="quotelev2">&gt; &gt; other people to weigh in if they know what I'm doing wrong.  I've gotten 
</span><br>
<span class="quotelev2">&gt; &gt; no where on this so I figure I'll finally drop it out on the list.  
</span><br>
<span class="quotelev2">&gt; &gt; First, here's the important info:
</span><br>
<p><span class="quotelev2">&gt; &gt; Configured using: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ ./configure --enable-static --disable-shared --without-threads 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --prefix=/home/ndebard/local/ompi --with-devel-headers 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Simple C file which I will compile into a shared library: 
</span><br>
<p>Upon rethinking this: it really is a &quot;Doctor, it hurts when I do this --
<br>
don't do it, then&quot; issue.  Do not disable shared libraries if you want
<br>
to create dependent shared libraries.  The fact that x86 will let you
<br>
get away with this (at a cost) does not mean it is a good idea.  Just
<br>
FYI.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0348.php">James W. Barker: "error message on make"</a>
<li><strong>Previous message:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
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
