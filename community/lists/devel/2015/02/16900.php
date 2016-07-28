<?
$subject_val = "[OMPI devel] Master failure building oshmem java examples";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 22:15:17 2015" -->
<!-- isoreceived="20150203031517" -->
<!-- sent="Mon, 2 Feb 2015 19:15:15 -0800" -->
<!-- isosent="20150203031515" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master failure building oshmem java examples" -->
<!-- id="CAAvDA17QvnkeeqJr3siMmMr4FKS9e8J50Rb+-d+1vnt4D205Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Master failure building oshmem java examples<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 22:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Previous message:</strong> <a href="16899.php">Paul Hargrove: "[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>Reply:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a system on which 1.8.4rc5 passed all my tests, I see the following
<br>
running &quot;make&quot; in the examples directory:
<br>
<p>[...]
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: *** No rule to make target `Hello_oshmem.java', needed by
<br>
`Hello_oshmem.class'.
<br>
make[2]: Target `Hello_oshmem.class' not remade because of errors.
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: *** No rule to make target `Ring_oshmem.java', needed by
<br>
`Ring_oshmem.class'.
<br>
make[2]: Target `Ring_oshmem.class' not remade because of errors.
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: *** No rule to make target `oshmem_circular_shift.java', needed by
<br>
`oshmem_circular_shift.class'.
<br>
make[2]: Target `oshmem_circular_shift.class' not remade because of errors.
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: *** No rule to make target `oshmem_max_reduction.java', needed by
<br>
`oshmem_max_reduction.class'.
<br>
make[2]: Target `oshmem_max_reduction.class' not remade because of errors.
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: *** No rule to make target `oshmem_strided_puts.java', needed by
<br>
`oshmem_strided_puts.class'.
<br>
make[2]: Target `oshmem_strided_puts.class' not remade because of errors.
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[2]: *** No rule to make target `oshmem_symmetric_data.java', needed by
<br>
`oshmem_symmetric_data.class'.
<br>
make[2]: Target `oshmem_symmetric_data.class' not remade because of errors.
<br>
make[2]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make[1]: *** [oshmem] Error 2
<br>
make[1]: Leaving directory
<br>
`/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
<br>
make: *** [all] Error 2
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Previous message:</strong> <a href="16899.php">Paul Hargrove: "[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>Reply:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
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
