<?
$subject_val = "[OMPI devel] Trunk broken for --with-devel-headers?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 18:37:47 2014" -->
<!-- isoreceived="20140724223747" -->
<!-- sent="Thu, 24 Jul 2014 15:36:27 -0700" -->
<!-- isosent="20140724223627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk broken for --with-devel-headers?" -->
<!-- id="BC1146A6-5997-4B2D-BAFA-BD1F06D01EC1_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk broken for --with-devel-headers?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 18:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15261.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Reply:</strong> <a href="15265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey folks
<br>
<p>Something in the last day or so appears to have broken the trunk's ability to run --with-devel-headers. It looks like the headers are being installed correctly, but mpicc fails to compile a program that uses them - the include passes, but the linker fails:
<br>
<p>Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_opal_hwloc172_hwloc_bitmap_alloc&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in hello.o
<br>
&nbsp;&nbsp;&quot;_opal_hwloc172_hwloc_bitmap_list_asprintf&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in hello.o
<br>
&nbsp;&nbsp;&quot;_opal_hwloc172_hwloc_get_cpubind&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in hello.o
<br>
&nbsp;&nbsp;&quot;_opal_hwloc_topology&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in hello.o
<br>
&nbsp;&nbsp;&quot;_orte_process_info&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in hello.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
collect2: error: ld returned 1 exit status
<br>
<p>Anybody else seeing this?
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15261.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<li><strong>Reply:</strong> <a href="15265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
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
