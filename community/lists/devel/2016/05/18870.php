<?
$subject_val = "[OMPI devel] [2.0.0rc2] build failure on IA64/Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 16:00:46 2016" -->
<!-- isoreceived="20160502200046" -->
<!-- sent="Mon, 2 May 2016 13:00:43 -0700" -->
<!-- isosent="20160502200043" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] build failure on IA64/Linux" -->
<!-- id="CAAvDA14WKFs8FJrXboa6b=RzshDWtDSREQv7h2KXaKyykacTvg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] build failure on IA64/Linux<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 16:00:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<li><strong>Previous message:</strong> <a href="18869.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an IA64 system running SLES11.
<br>
I have configured with only --prefix=  and --enable-debug
<br>
<p>I have no particular reason to think this failure is specific to SLES11.
<br>
However, the error is coming from code within &quot;#if defined(__ia64__)&quot;.
<br>
<p>The build failure:
<br>
<p>libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/patcher/overwrite
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../../ompi/mpiext/cuda/c
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2
<br>
-I../../../..
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/include
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/orte/include
<br>
-I../../../../orte/include
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/ompi/include
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/oshmem/include
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -MT
<br>
patcher_overwrite_module.lo -MD -MP -MF .deps/patcher_overwrite_module.Tpo
<br>
-c
<br>
/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/patcher/overwrite/patcher_overwrite_module.c
<br>
&nbsp;-fPIC -DPIC -o .libs/patcher_overwrite_module.o
<br>
/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/patcher/overwrite/patcher_overwrite_module.c:
<br>
In function 'mca_patcher_overwrite_apply_patch':
<br>
/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/patcher/overwrite/patcher_overwrite_module.c:108:
<br>
error: 'func_old_addr' undeclared (first use in this function)
<br>
/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/patcher/overwrite/patcher_overwrite_module.c:108:
<br>
error: (Each undeclared identifier is reported only once
<br>
/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/patcher/overwrite/patcher_overwrite_module.c:108:
<br>
error: for each function it appears in.)
<br>
/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/openmpi-2.0.0rc2/opal/mca/patcher/overwrite/patcher_overwrite_module.c:136:
<br>
error: 'mca_patcher_base_patch_t' has no member named 'data_size'
<br>
make[2]: *** [patcher_overwrite_module.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/BLD/opal/mca/patcher/overwrite'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/eng/home/PHHargrove/OMPI/openmpi-2.0.0rc2-linux-ia64/BLD/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18870/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18871.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on RHEL AS4"</a>
<li><strong>Previous message:</strong> <a href="18869.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
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
