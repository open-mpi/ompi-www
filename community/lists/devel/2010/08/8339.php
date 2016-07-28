<?
$subject_val = "[OMPI devel] OpenBSD-4.6/i386 warns malloc.h is obsolete for 1.4.3rc1 and 1.5rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 22:59:05 2010" -->
<!-- isoreceived="20100825025905" -->
<!-- sent="Tue, 24 Aug 2010 19:58:46 -0700" -->
<!-- isosent="20100825025846" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenBSD-4.6/i386 warns malloc.h is obsolete for 1.4.3rc1 and 1.5rc5" -->
<!-- id="4C7486E6.9080806_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] OpenBSD-4.6/i386 warns malloc.h is obsolete for 1.4.3rc1 and 1.5rc5<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 22:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8340.php">Paul H. Hargrove: "[OMPI devel] Success (with warnings) on NetBSD 5.0.2/i386"</a>
<li><strong>Previous message:</strong> <a href="8338.php">Paul H. Hargrove: "[OMPI devel] mixed OpenBSD 4.6/i386 results: 1.5rc5 GOOD but 1.4.3rc1 BAD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building both of the new RCs on OpenBSD 4.6 for i386 is warning that 
<br>
malloc.h is obsolete.  The files/lines producing the warnings are nearly 
<br>
the same, but I provide both lists below for completeness.
<br>
<p>$ uname -a
<br>
OpenBSD obsd46-i386.my.domain 4.6 GENERIC#58 i386
<br>
<p>$ gcc --version
<br>
gcc (GCC) 3.3.5 (propolice)
<br>
Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions. There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p><p>&nbsp;From 1.4rc1 (configured with --disable-io-romio due to 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8338.php">http://www.open-mpi.org/community/lists/devel/2010/08/8338.php</a>)
<br>
<p>In file included from ../../../../ompi/mca/mpool/base/mpool_base_open.c:28:
<br>
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
<br>
use &lt;stdlib.h&gt;&quot;
<br>
<pre>
--
In file included from 
../../../../ompi/mca/mpool/base/mpool_base_lookup.c:28:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../../ompi/mca/mpool/fake/mpool_fake_component.c:32:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../../ompi/mca/mpool/rdma/mpool_rdma_module.c:36:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../../ompi/mca/mpool/rdma/mpool_rdma_component.c:33:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
 From 1.5rc5:
In file included from ../../../../ompi/mca/mpool/base/mpool_base_open.c:28:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../ompi/mca/mpool/base/mpool_base_lookup.c:28:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../../../../../ompi/mca/io/romio/romio/adio/common/malloc.c:29:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../../ompi/mca/mpool/fake/mpool_fake_component.c:30:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../../ompi/mca/mpool/rdma/mpool_rdma_module.c:34:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
--
In file included from 
../../../../../ompi/mca/mpool/rdma/mpool_rdma_component.c:31:
/usr/include/malloc.h:4:2: warning: #warning &quot;&lt;malloc.h&gt; is obsolete, 
use &lt;stdlib.h&gt;&quot;
-Paul
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8340.php">Paul H. Hargrove: "[OMPI devel] Success (with warnings) on NetBSD 5.0.2/i386"</a>
<li><strong>Previous message:</strong> <a href="8338.php">Paul H. Hargrove: "[OMPI devel] mixed OpenBSD 4.6/i386 results: 1.5rc5 GOOD but 1.4.3rc1 BAD"</a>
<!-- nextthread="start" -->
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
