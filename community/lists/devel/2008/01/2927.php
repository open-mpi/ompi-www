<?
$subject_val = "[OMPI devel] Common initialization code for IB.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 09:04:04 2008" -->
<!-- isoreceived="20080103140404" -->
<!-- sent="Thu, 3 Jan 2008 16:03:56 +0200" -->
<!-- isosent="20080103140356" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] Common initialization code for IB." -->
<!-- id="20080103140356.GH22604_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Common initialization code for IB.<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 09:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Previous message:</strong> <a href="2926.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Reply:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;In Paris we've talked about putting HCA discovery and initialization code
<br>
outside of openib BTL so other components that want to use IB will be able
<br>
to share common code, data and registration cache. Other components I am
<br>
thinking about are ofud and multicast collectives. I started to look at
<br>
this and I have a couple of problems with this approach. Currently openib
<br>
BTL has if_include/if_exclude parameters to control which HCAs should be
<br>
used. Should we make those parameters global and initialize only HCAs
<br>
that are not exulted by those filters, or should we initialize all HCAs
<br>
and each component will have its own include/exclude filters? Another
<br>
problem is how multicast collective knows that all processes in a
<br>
communicator are reachable via the same network, do we have a mechanism
<br>
in ompi to check this?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Previous message:</strong> <a href="2926.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Reply:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
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
