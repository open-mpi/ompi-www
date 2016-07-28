<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  7 13:32:38 2005" -->
<!-- isoreceived="20050907183238" -->
<!-- sent="Wed, 7 Sep 2005 14:29:44 -0400" -->
<!-- isosent="20050907182944" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="rcache" -->
<!-- id="804471B4-8954-4D0B-BB50-05A749941622_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-09-07 13:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>Previous message:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It can happpens that the compilation will fails after the rcache  
<br>
commit. It's again a dependency problem. You just have to go in the  
<br>
ompi/mca/rcache/base directory (in the tree where you compile) and do:
<br>
mkdir .deps
<br>
make -k
<br>
<p>Sorry about that,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
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
<li><strong>Next message:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>Previous message:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
<li><strong>Reply:</strong> <a href="0322.php">Ralf Wildenhues: "Re:  rcache"</a>
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
