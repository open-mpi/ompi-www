<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  7 13:47:55 2005" -->
<!-- isoreceived="20050907184755" -->
<!-- sent="Wed, 7 Sep 2005 20:47:49 +0200" -->
<!-- isosent="20050907184749" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  rcache" -->
<!-- id="20050907184749.GB26323_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="804471B4-8954-4D0B-BB50-05A749941622_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2005-09-07 13:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
<li><strong>Previous message:</strong> <a href="0321.php">George Bosilca: "rcache"</a>
<li><strong>In reply to:</strong> <a href="0321.php">George Bosilca: "rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>(Note I know hardly anything about rcache, or mca for that matter, but a
<br>
bit about Automake)
<br>
<p>* George Bosilca wrote on Wed, Sep 07, 2005 at 08:29:44PM CEST:
<br>
<span class="quotelev1">&gt; It can happpens that the compilation will fails after the rcache  
</span><br>
<span class="quotelev1">&gt; commit. It's again a dependency problem. You just have to go in the  
</span><br>
<span class="quotelev1">&gt; ompi/mca/rcache/base directory (in the tree where you compile) and do:
</span><br>
<span class="quotelev1">&gt; mkdir .deps
</span><br>
<span class="quotelev1">&gt; make -k
</span><br>
<p>This is weird.  When exactly do you have to do this (added source files,
<br>
added header files)?  What is the error you get if you don't do it (copy
<br>
and paste)?  And does it go away if you issue
<br>
&nbsp;&nbsp;./config.status --recheck
<br>
&nbsp;&nbsp;./config.status
<br>
in the toplevel build directory?
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
<li><strong>Previous message:</strong> <a href="0321.php">George Bosilca: "rcache"</a>
<li><strong>In reply to:</strong> <a href="0321.php">George Bosilca: "rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0323.php">George Bosilca: "Re:  rcache"</a>
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
