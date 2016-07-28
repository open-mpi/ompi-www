<?
$subject_val = "Re: [OMPI devel] CUDA support not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 07:35:35 2013" -->
<!-- isoreceived="20131125123535" -->
<!-- sent="Mon, 25 Nov 2013 12:34:32 +0000" -->
<!-- isosent="20131125123432" -->
<!-- name="Solibakke Per Bjarte" -->
<!-- email="Per.B.Solibakke_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CUDA support not working?" -->
<!-- id="812F22F5D75FE946B6D9883F4D3ECEA104057B8A_at_Piggulke.himolde.no" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="82FE8B9F-98F3-489F-9E76-5F322879760F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CUDA support not working?<br>
<strong>From:</strong> Solibakke Per Bjarte (<em>Per.B.Solibakke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 07:34:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13321.php">Nadia Derbey: "[OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13319.php">Ralph Castain: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13324.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13324.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For version 1.7.3 and 1.7.4a1r29747 and CUDA-support......
<br>
<p>--with-cuda -with-hwloc -enable-shared and the use of -VT
<br>
<p>Problems during  command: sudo make (the configure-phase runs without problems/errors):
<br>
ERROR during VT-configuration in the make-command...
<br>
<p>./configure -with-cuda=/usr/local/cuda-5.5/include -with-hwloc=/usr/local/hwloc -with-hwloc-libdir=/usr/local/heloc/lib -withwith-threds=posix -enable-mpi-thread-multiple -enable-opal-multi-threads -enable-shared -with libltdl -prefix=/usr/local
<br>
<p>OK
<br>
sudo make
<br>
<p>Must specify: --disable-vt
<br>
<p>OK
<br>
NB! Without the option: --disable-vt ==&gt; Error 1 (see attached file
<br>
<p>Running without VT:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: /usr/local/lib/openmpi/mca_pml_obl.so: undefined symbol: progress_one_cuda_htod_event
<br>
<p>Suggestions for option specifications. I have followed the e-mail correspondence between
<br>
J&#246;rg Bornschein,
<br>
Ralph Castain
<br>
<p>I have changed the Makefile.am before ./configure according to attached diff.pml
<br>
However, nothing helps for neither 1.7.3 nor 1.7.4a1r29747
<br>
<p>I'm out of ideas for my MPI-application (moving from COU to GPU processing). Suggestions?
<br>
<p>PBSolibakke
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13323.php">George Bosilca: "Re: [OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>Previous message:</strong> <a href="13321.php">Nadia Derbey: "[OMPI devel] bug in opal_generic_simple_pack_function()"</a>
<li><strong>In reply to:</strong> <a href="13319.php">Ralph Castain: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13324.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
<li><strong>Reply:</strong> <a href="13324.php">Jörg Bornschein: "Re: [OMPI devel] CUDA support not working?"</a>
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
