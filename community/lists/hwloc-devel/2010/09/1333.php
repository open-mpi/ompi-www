<?
$subject_val = "[hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 04:38:13 2010" -->
<!-- isoreceived="20100922083813" -->
<!-- sent="Wed, 22 Sep 2010 10:38:08 +0200" -->
<!-- isosent="20100922083808" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] roadmap" -->
<!-- id="4C99C070.5070305_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] roadmap<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 04:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1332.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>hwloc 1.0 was released in May. I think we should release 1.1 before
<br>
SC10, which means doing a first RC within a couple weeks.
<br>
<p>trunk got many changes since 1.0, but nothing very important. trac says
<br>
we're missing memory binding, distances and user-defined process
<br>
restrictions. Memory binding is the most important one, it was supposed
<br>
to be in 1.0. I think we shouldn't defer 1.1 because of the others.
<br>
<p>There are still some problems to solve in the membind branch:
<br>
* Some OS bind the process too when you bind memory. I see the following
<br>
solutions:
<br>
&nbsp;&nbsp;+ Add a flag such as HWLOC_MEMBIND_EVEN_IF_FAR_FROM_PROCESS so that
<br>
the user can explicitly refuse memory binding if it may break process
<br>
binding
<br>
&nbsp;&nbsp;+ Drop hwloc_set_membind on these OSes and add a
<br>
hwloc_set_cpumembind() to bind both
<br>
&nbsp;&nbsp;+ Make both process and memory binding do nothing if the STRICT flag
<br>
is given. But I'd rather not play too much with this flag.
<br>
&nbsp;&nbsp;+ Drop support for memory binding on these OS.
<br>
&nbsp;&nbsp;+ Drop these OS.
<br>
* cpuset and nodeset structures are the same, they are both manipulated
<br>
with hwloc_cpuset_foo functions. So maybe rename into hwloc_set_t and
<br>
hwloc_set_foo functions. With #define and aliases to not break API/ABIs.
<br>
<p>Opinions ?
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1332.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe reply:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
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
