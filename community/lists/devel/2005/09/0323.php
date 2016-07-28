<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  7 14:11:33 2005" -->
<!-- isoreceived="20050907191133" -->
<!-- sent="Wed, 7 Sep 2005 15:08:36 -0400" -->
<!-- isosent="20050907190836" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  rcache" -->
<!-- id="5C7A2C17-2343-4C87-BA80-D54524CBDEDE_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050907184749.GB26323_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-07 14:08:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Jeff Squyres: "ROMIO #define conflicts"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>In reply to:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well note that I hardly know anything about rcache too it's just an  
<br>
empty framework right now ... I just notice it break my compilation :)
<br>
<p>The mkdir + make -k is maybe not the best (or simplest) solution but  
<br>
for ompi is definitively the fastest. If I modify the Makefile.am the  
<br>
build system will detect it and regenerate the correct makefile.  
<br>
Except the dependencies ... that's why we have to create the .deps  
<br>
directory and then force the make to create them.
<br>
<p>I know it's weird, but it's fast enough to make me forget about the  
<br>
weirdness.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 7, 2005, at 2:47 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Note I know hardly anything about rcache, or mca for that matter,  
</span><br>
<span class="quotelev1">&gt; but a
</span><br>
<span class="quotelev1">&gt; bit about Automake)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * George Bosilca wrote on Wed, Sep 07, 2005 at 08:29:44PM CEST:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It can happpens that the compilation will fails after the rcache
</span><br>
<span class="quotelev2">&gt;&gt; commit. It's again a dependency problem. You just have to go in the
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/rcache/base directory (in the tree where you compile) and  
</span><br>
<span class="quotelev2">&gt;&gt; do:
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .deps
</span><br>
<span class="quotelev2">&gt;&gt; make -k
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is weird.  When exactly do you have to do this (added source  
</span><br>
<span class="quotelev1">&gt; files,
</span><br>
<span class="quotelev1">&gt; added header files)?  What is the error you get if you don't do it  
</span><br>
<span class="quotelev1">&gt; (copy
</span><br>
<span class="quotelev1">&gt; and paste)?  And does it go away if you issue
</span><br>
<span class="quotelev1">&gt;   ./config.status --recheck
</span><br>
<span class="quotelev1">&gt;   ./config.status
</span><br>
<span class="quotelev1">&gt; in the toplevel build directory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Jeff Squyres: "ROMIO #define conflicts"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>In reply to:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0325.php">Ralf Wildenhues: "Re:  rcache"</a>
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
