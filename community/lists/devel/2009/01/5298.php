<?
$subject_val = "[OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 02:19:22 2009" -->
<!-- isoreceived="20090126071922" -->
<!-- sent="Mon, 26 Jan 2009 08:19:13 +0100" -->
<!-- isosent="20090126071913" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols" -->
<!-- id="497D63F1.4020700_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 02:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5299.php">doriankrause: "[OMPI devel] segfault in opal_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="5297.php">Josh Hursey: "[OMPI devel] Open MPI Extensions Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<li><strong>Reply:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<li><strong>Reply:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am testing OpenMPI 1.3 over Open-MX. OpenMPI 1.2 works well but 1.3
<br>
does not load. This is caused by OMPI MX components now using some MX
<br>
internal symbols (mx_open_board, mx__get_mapper_state and
<br>
mx__regcache_clean). This looks like an ugly hack to me :) Why don't you
<br>
talk to Myricom about adding a proper interface in MX?
<br>
<p>Building OMPI directly on Open-MX will disable the mapper_state stuff
<br>
because of missing MX internal headers. But, Open-MX is ABI compatible
<br>
with MX. So building on MX and running on Open-MX requires the addition
<br>
of these symbols in Open-MX anyway. Before I do so, I'd like to know why
<br>
you actually need these symbols. Are mx_open_board and
<br>
mx__get_mapper_state used to get a &quot;fabric identifier&quot; in the context of
<br>
multi-clusters/grids? If so, assuming it will ever matter for Open-MX,
<br>
is it ok to just have mx__get_mapper_state report the MAC address of the
<br>
my mapper node and nothing else in the mapper_state structure? Then, I
<br>
guess mx__regcache_clean is called when the OMPI free hook wants to
<br>
clear the MX regcache, right?
<br>
<p>Also, is there any plan to use any other MX internal symbols in the
<br>
future releases?
<br>
<p>By the way, is there a way to get more details from OMPI when it fails
<br>
to load a component because of missing symbols like this?
<br>
LD_DEBUG=verbose isn't very convenient :)
<br>
<p>thanks,
<br>
Brice Goglin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5299.php">doriankrause: "[OMPI devel] segfault in opal_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="5297.php">Josh Hursey: "[OMPI devel] Open MPI Extensions Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<li><strong>Reply:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<li><strong>Reply:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
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
