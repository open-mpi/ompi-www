<?
$subject_val = "[OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 09:48:18 2009" -->
<!-- isoreceived="20090605134818" -->
<!-- sent="Fri, 05 Jun 2009 15:48:05 +0200" -->
<!-- isosent="20090605134805" -->
<!-- name="Mouhamed Gueye" -->
<!-- email="mouhamed.gueye_at_[hidden]" -->
<!-- subject="[OMPI devel] Multi-rail on openib" -->
<!-- id="4A292215.20106_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Multi-rail on openib<br>
<strong>From:</strong> Mouhamed Gueye (<em>mouhamed.gueye_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 09:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI devel] svn up on FAQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am working on  multi-rail IB and I was wondering how connections are 
<br>
established between ports.  I have two hosts, each with 2 ports on a 
<br>
same IB card, connected to the same switch.
<br>
<p>My question is : how ports are connected between them ? Is there a queue 
<br>
pair between all ports or only between ports of the same number (for 
<br>
example, Host A =&gt; port 1 &lt;===&gt; port 1 &lt;= Host B and Host A =&gt; port 2 
<br>
&lt;===&gt; port 2 &lt;= Host B or maybe Host A =&gt; port 1 &lt;===&gt; port 2 &lt;= Host B 
<br>
and Host A =&gt; port 2 &lt;===&gt; port 1 &lt;= Host B) ? Is it possible to force 
<br>
the connection scheme on the openib btl ?
<br>
<p>Thanks
<br>
<p>Mouhamed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI devel] svn up on FAQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
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
