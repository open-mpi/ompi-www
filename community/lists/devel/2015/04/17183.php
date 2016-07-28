<?
$subject_val = "[OMPI devel] 1.8.5rc1 VT-related build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 16:10:29 2015" -->
<!-- isoreceived="20150406201029" -->
<!-- sent="Mon, 6 Apr 2015 13:10:14 -0700" -->
<!-- isosent="20150406201014" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.5rc1 VT-related build failure" -->
<!-- id="CAAvDA17ad_YH612gzwtrTpkeQGXXgs+eOcx_Cwm-3eJgG1U+PA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.5rc1 VT-related build failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 16:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17184.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Previous message:</strong> <a href="17182.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<li><strong>Reply:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build Open MPI 1.8.5rc1 wit AMDs Open64 4.5.2.1.
<br>
I see the following failure (from &quot;make V=1&quot;) while building VT:
<br>
<p><p>openCC -DHAVE_CONFIG_H -I.
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter
<br>
-I../..
<br>
&nbsp;-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/extlib/otf/otflib
<br>
-I../../extlib/otf/otflib
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/old
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/include
<br>
-I../../include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/rfg
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/vtlib
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt
<br>
-DINSIDE_OPENMPI
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/opal/mca/event/libevent2021/libevent
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/opal/mca/event/libevent2021/libevent/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/BLD/opal/mca/event/libevent2021/libevent/include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/../../../include
<br>
-I/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/BLD/ompi/contrib/vt/vt/../../../include
<br>
-fopenmp -DVT_FILTER_OLD -O3 -DNDEBUG -finline-functions -pthread -MT
<br>
vtfilter-vt_filter.o -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o
<br>
vtfilter-vt_filter.o `test -f 'vt_filter.cc' || echo
<br>
'/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/'`vt_filter.cc
<br>
In file included from
<br>
/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.h:16,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.cc:13:
<br>
/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter_config.h:39:12:
<br>
error: floating constant in preprocessor expression
<br>
In file included from
<br>
/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.h:16,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter.cc:13:
<br>
/scratch/phargrov/OMPI/openmpi-1.8.5rc1-linux-x86_64-open64/openmpi-1.8.5rc1/ompi/contrib/vt/vt/tools/vtfilter/vt_filter_config.h:39:12:
<br>
error: floating constant in preprocessor expression
<br>
make[7]: *** [vtfilter-vt_filter.o] Error 1
<br>
<p><p>The offending line is
<br>
<p>#     if !(__OPENCC_PATCHLEVEL__ + 0)
<br>
<p>And the reason for the error is that __OPENCC_PATCHLEVEL__ is defined, but
<br>
is not an INTEGER:
<br>
<p>$ /opt/amd/x86_open64-4.5.2.1/bin/openCC -dM -E ~/empty.c | grep OPENCC
<br>
#define __OPENCC_MINOR__ 5
<br>
#define __OPENCC__ 4
<br>
#define __OPENCC_PATCHLEVEL__ 2.1
<br>
<p><p>The same usage of __OPENCC_PATCHLEVEL__ as an integer appears in
<br>
vt_unify_config.h.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17184.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Previous message:</strong> <a href="17182.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<li><strong>Reply:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
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
