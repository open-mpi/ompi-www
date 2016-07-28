<?
$subject_val = "[OMPI devel] trunk link failure on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 23:15:11 2014" -->
<!-- isoreceived="20140801031511" -->
<!-- sent="Thu, 31 Jul 2014 20:15:09 -0700" -->
<!-- isosent="20140801031509" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk link failure on Solaris-10/SPARC" -->
<!-- id="CAAvDA179zJ7Tk04=NrgKEhVJEV=VxHedC6FhvxGWT9z3V4FHzw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk link failure on Solaris-10/SPARC<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 23:15:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15422.php">George Bosilca: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15420.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15422.php">George Bosilca: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15422.php">George Bosilca: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15423.php">Ralph Castain: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$ INST/bin/mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
ld.so.1: ring_c: fatal: relocation error: file
<br>
/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus/INST/lib/openmpi/mca_pml_ob1.so:
<br>
symbol alloca: referenced symbol not found
<br>
<p><p>This platform has worked in the past.
<br>
I will be trying 1.8.2rc2 on this system ASAP.
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15422.php">George Bosilca: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15420.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15422.php">George Bosilca: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15422.php">George Bosilca: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15423.php">Ralph Castain: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
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
