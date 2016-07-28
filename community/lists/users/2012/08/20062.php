<?
$subject_val = "[OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 05:37:49 2012" -->
<!-- isoreceived="20120830093749" -->
<!-- sent="Thu, 30 Aug 2012 11:37:43 +0200" -->
<!-- isosent="20120830093743" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="[OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="503F3467.2030108_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] what is a &quot;node&quot;?<br>
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 05:37:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<li><strong>Previous message:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>consider this specification:
<br>
<p>&quot;Curie fat consists in 360 nodes which contains 4 eight cores CPU 
<br>
Nehalem-EX clocked at 2.27 GHz, let 32 cores / node and 11520 cores for 
<br>
the full fat configuration&quot;
<br>
<p>Suppose I would like to run some performance tests just on a single 
<br>
processor rather than 4 of them.
<br>
Is there a way to do this?
<br>
I'm afraid specifying that I need 1 cluster node with 8 MPI prcesses
<br>
will result in OS distributing these 8 processes among 4
<br>
processors forming the node, and this is not what I'm after.
<br>
<p>Z Koza
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<li><strong>Previous message:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
