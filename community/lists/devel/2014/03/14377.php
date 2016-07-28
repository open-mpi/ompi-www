<?
$subject_val = "[OMPI devel] 1.7.5rc5 still building oshmem by default?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 01:31:55 2014" -->
<!-- isoreceived="20140320053155" -->
<!-- sent="Wed, 19 Mar 2014 22:31:53 -0700" -->
<!-- isosent="20140320053153" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5rc5 still building oshmem by default?" -->
<!-- id="CAAvDA16dZqLYh2sxB4yfC=Sp8oOy6F9_oob5imvcYNE81d+G9w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5rc5 still building oshmem by default?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 01:31:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14378.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>Previous message:</strong> <a href="14376.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14378.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>Reply:</strong> <a href="14378.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe I misunderstood, but I though it had been decided 1.7.5 was *not*
<br>
going to build oshmem by default.  If I am mistaken, then feel free to
<br>
ignore the rest of this post.
<br>
<p>Though I don't configure with any options which mention oshmem, I still see
<br>
(known as ticket #4262) failures linking the oshmem examples on
<br>
xlc/ppc32/linux:
<br>
<p>shmemfort -g ring_oshmemfh.f90 -o ring_oshmemfh
<br>
** ring_oshmem   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file ring_oshmemfh.f90.
<br>
ring_oshmemfh.o: In function `ring_oshmem':
<br>
/gpfs-biou/phh1/OMPI/openmpi-1.7.5rc5-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:35:
<br>
undefined reference to `shmem_put8'
<br>
/gpfs-biou/phh1/OMPI/openmpi-1.7.5rc5-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:48:
<br>
undefined reference to `shmem_int8_wait_until'
<br>
/gpfs-biou/phh1/OMPI/openmpi-1.7.5rc5-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:55:
<br>
undefined reference to `shmem_put8'
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14378.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>Previous message:</strong> <a href="14376.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14378.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>Reply:</strong> <a href="14378.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
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
