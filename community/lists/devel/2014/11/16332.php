<?
$subject_val = "[OMPI devel] question to OMPI_DECLSPEC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 11:07:28 2014" -->
<!-- isoreceived="20141125160728" -->
<!-- sent="Tue, 25 Nov 2014 10:07:29 -0600" -->
<!-- isosent="20141125160729" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] question to OMPI_DECLSPEC" -->
<!-- id="5474A941.6080901_at_cs.uh.edu" -->
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
<strong>Subject:</strong> [OMPI devel] question to OMPI_DECLSPEC<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 11:07:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Reply:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has something changed recently on the trunk/master regarding 
<br>
OMPI_DECLSPEC? The reason I ask is because we get now errors about 
<br>
unresolved symbols, e.g.
<br>
<p>symbol lookup error: 
<br>
/home/gabriel/OpenMPI/lib64/openmpi/mca_fcoll_dynamic.so: undefined 
<br>
symbol: ompi_io_ompio_decode_datatype
<br>
<p><p>and that problem was not there roughly two weeks back the last time I 
<br>
tested. I did verify that the the function listed there has an 
<br>
OMPI_DECLSPEC before its definition.
<br>
<p>Thanks
<br>
Edgar
<br>
<pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16331.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Reply:</strong> <a href="16333.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
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
