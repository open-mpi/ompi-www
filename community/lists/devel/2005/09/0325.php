<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  8 06:23:18 2005" -->
<!-- isoreceived="20050908112318" -->
<!-- sent="Thu, 8 Sep 2005 13:23:10 +0200" -->
<!-- isosent="20050908112310" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  rcache" -->
<!-- id="20050908112310.GC12611_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5C7A2C17-2343-4C87-BA80-D54524CBDEDE_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2005-09-08 06:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0326.php">Jeff Squyres: "Re:  rcache"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Jeff Squyres: "ROMIO #define conflicts"</a>
<li><strong>In reply to:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0326.php">Jeff Squyres: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0326.php">Jeff Squyres: "Re:  rcache"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>* George Bosilca wrote on Wed, Sep 07, 2005 at 09:08:36PM CEST:
<br>
<span class="quotelev1">&gt; On Sep 7, 2005, at 2:47 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; * George Bosilca wrote on Wed, Sep 07, 2005 at 08:29:44PM CEST:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It can happpens that the compilation will fails after the rcache
</span><br>
<span class="quotelev3">&gt; &gt;&gt; commit. It's again a dependency problem. You just have to go in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mca/rcache/base directory (in the tree where you compile) and  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; do:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mkdir .deps
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make -k
</span><br>
<p><span class="quotelev1">&gt; The mkdir + make -k is maybe not the best (or simplest) solution but  
</span><br>
<span class="quotelev1">&gt; for ompi is definitively the fastest. If I modify the Makefile.am the  
</span><br>
<span class="quotelev1">&gt; build system will detect it and regenerate the correct makefile.  
</span><br>
<span class="quotelev1">&gt; Except the dependencies ... that's why we have to create the .deps  
</span><br>
<span class="quotelev1">&gt; directory and then force the make to create them.
</span><br>
<p>Ok, I checked, and here's the quick and correct solution then:
<br>
&nbsp;&nbsp;./config.status ompi/mca/rcache/base/Makefile depfiles
<br>
<p>The automatic rebuilding rules emitted by Automake should cause exactly
<br>
this to be issued, though (Automake &gt;= 1.6).  So, if you have a test
<br>
case where this doesn't work, feel free to show it so we can fix
<br>
Automake.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0326.php">Jeff Squyres: "Re:  rcache"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Jeff Squyres: "ROMIO #define conflicts"</a>
<li><strong>In reply to:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0326.php">Jeff Squyres: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0326.php">Jeff Squyres: "Re:  rcache"</a>
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
