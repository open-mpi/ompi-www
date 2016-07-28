<?
$subject_val = "[OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 18:43:20 2014" -->
<!-- isoreceived="20140108234320" -->
<!-- sent="Wed, 8 Jan 2014 15:43:18 -0800" -->
<!-- isosent="20140108234318" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86" -->
<!-- id="CAAvDA15315i4T4uomwi7aCQyWtX2mh1qyfiGkg_HE89ev04j2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 18:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13594.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>Previous message:</strong> <a href="13592.php">Jeff Squyres (jsquyres): "[OMPI devel] MPI implementation requirements for low-layer network APIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While I have yet to get a working build on NetBSD for x86-64 h/w, I *have*
<br>
successfully built Open MPI's current 1.7.4rc tarball on NetBSD-6 for x86.
<br>
&nbsp;However, I can't *run* anything:
<br>
<p>Attempting the ring_c example on 2 cores:
<br>
-bash-4.2$ mpirun -mca btl sm,self -np 2 examples/ring_c
<br>
--------------------------------------------------------------------------
<br>
While computing bindings, we found no available cpus on
<br>
the following node:
<br>
<p>&nbsp;&nbsp;Node:  pcp-j-17
<br>
<p>Please check your allocation.
<br>
--------------------------------------------------------------------------
<br>
<p>The failure is the same w/o &quot;-mca btl sm,self&quot;
<br>
Singleton runs fail just as the np=2 run did.
<br>
<p>I've attached compressed output from &quot;ompi_info --all&quot;.
<br>
<p>Since this is probably an hwloc-related issue, I also build hwloc-1.7.2
<br>
from pristine sources.
<br>
I have attached compressed output of lstopo which NOTABLY indicates a
<br>
failure to bind to both of the CPUs.
<br>
<p>For now, an explicit &quot;--bind-to none&quot; is working for me.
<br>
Please let me know what additional info may be required.
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13593/ompi_info-netbsd-x86.txt.bz2">ompi_info-netbsd-x86.txt.bz2</a>
</ul>
<!-- attachment="ompi_info-netbsd-x86.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13593/lstopo172-netbsd-x86.txt.bz2">lstopo172-netbsd-x86.txt.bz2</a>
</ul>
<!-- attachment="lstopo172-netbsd-x86.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13594.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>Previous message:</strong> <a href="13592.php">Jeff Squyres (jsquyres): "[OMPI devel] MPI implementation requirements for low-layer network APIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
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
