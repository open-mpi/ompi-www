<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 12 18:43:21 2007" -->
<!-- isoreceived="20070912224321" -->
<!-- sent="Wed, 12 Sep 2007 16:42:11 -0600" -->
<!-- isosent="20070912224211" -->
<!-- name="Manjunath" -->
<!-- email="manjugv_at_[hidden]" -->
<!-- subject="[OMPI devel] Adding a new component to MTL" -->
<!-- id="46E86B43.4070000_at_cs.unm.edu" -->
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
<strong>From:</strong> Manjunath (<em>manjugv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-12 18:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Previous message:</strong> <a href="2311.php">Resat Umit Payli: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Reply:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>I am a newbie to OpenMPI and started digging into code base.
<br>
I am trying to add a new component to MTL(mca/mtl/). I assumed adding a 
<br>
new component to MTL, is no different than adding a component to BTL
<br>
and followed slides below to do so.
<br>
<a href="http://www.open-mpi.org/papers/workshop-2006/mon_07_mca_part_2.pdf">http://www.open-mpi.org/papers/workshop-2006/mon_07_mca_part_2.pdf</a>
<br>
<p>Also, defined
<br>
mca_mycomponent_init(bool enable_progress_threads, bool 
<br>
enable_mpi_threads),
<br>
as mentioned in ( 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2007/09/2294.php">http://www.open-mpi.org/community/lists/devel/2007/09/2294.php</a> ),
<br>
which for now only returns success.
<br>
<p>Then ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ompi-trunk/autogen.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ompi-trunk/configure --prefix=&lt;install-path&gt;
<br>
seems to generate relavant make file.
<br>
<p>However,
<br>
$ make all install
<br>
doesn't compile my component. Is there something I am missing ?
<br>
Any ideas or documentation I should be reading.
<br>
<p>thanks in advance,
<br>
-Manjunath
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Previous message:</strong> <a href="2311.php">Resat Umit Payli: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Reply:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
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
