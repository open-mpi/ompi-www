<?
$subject_val = "[OMPI users] Newbie: Using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 23 06:00:20 2007" -->
<!-- isoreceived="20071123110020" -->
<!-- sent="Fri, 23 Nov 2007 16:30:15 +0530" -->
<!-- isosent="20071123110015" -->
<!-- name="Madireddy Samuel Vijaykumar" -->
<!-- email="mad.vijay_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie: Using hostfile" -->
<!-- id="ec5d15220711230300u6c6f4514i639d391995e5b847_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Newbie: Using hostfile<br>
<strong>From:</strong> Madireddy Samuel Vijaykumar (<em>mad.vijay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-23 06:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4515.php">Dirk Eddelbuettel: "Re: [OMPI users] Is anyone researching PGAPack"</a>
<li><strong>Previous message:</strong> <a href="4513.php">Torsten Hoefler: "Re: [OMPI users] ETH BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been using using clusters for some tests. My localhost &quot;lynx&quot;
<br>
and i have &quot;puma&quot; and &quot;tiger&quot; which make up the cluster. All have
<br>
passwordless ssh enabled. Now if i have the following in my
<br>
hostfile(perline in the same order)
<br>
<p>lynx
<br>
puma
<br>
tiger
<br>
<p>My tests(from lynx) run over the cluster without any issues.
<br>
<p>But if move/remove the lynx from there either (perline in the same order)
<br>
<p>puma
<br>
lynx
<br>
tiger
<br>
<p>or
<br>
<p>puma
<br>
tiger
<br>
<p>My test(from lynx) just does not get any where. It just hangs. And
<br>
does not proceed at all. Is this an issue with way my script handles
<br>
the cluster node. Or is there an method for the hostfile. Thanks.
<br>
<p><pre>
-- 
Sam aka Vijju
:)~
Linux: Open, True and Cool
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4515.php">Dirk Eddelbuettel: "Re: [OMPI users] Is anyone researching PGAPack"</a>
<li><strong>Previous message:</strong> <a href="4513.php">Torsten Hoefler: "Re: [OMPI users] ETH BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Reply:</strong> <a href="4538.php">Jeff Squyres: "Re: [OMPI users] Newbie: Using hostfile"</a>
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
