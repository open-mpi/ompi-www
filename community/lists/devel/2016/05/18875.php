<?
$subject_val = "[OMPI devel] [2.0.0rc2] openib btl build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 16:57:27 2016" -->
<!-- isoreceived="20160502205727" -->
<!-- sent="Mon, 2 May 2016 13:57:07 -0700" -->
<!-- isosent="20160502205707" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] openib btl build failure" -->
<!-- id="CAAvDA15oe0cDYxYfGTfHETY7MRqPwwyxvJQvtQciUmwg0K=HRQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] openib btl build failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 16:57:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18876.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] run failure on OpenBSD5-i386"</a>
<li><strong>Previous message:</strong> <a href="18874.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18884.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<li><strong>Reply:</strong> <a href="18884.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an x86-64/Linux system with a fairly standard install of Scientific
<br>
Linux 6.3 (a RHEL clone like CentOS).
<br>
However, it appears from the error messages (at the bottom of this email)
<br>
that the OFED install differs in some way from OMPI's expectations.
<br>
<p>It appears the OFED was not installed via RPMs, leaving me not knowing how
<br>
to determine a version number.
<br>
Please let me know what additional information is required to resolve this,
<br>
and to whom to send it.
<br>
<p>FWIW: This is on NERSC's Babbage testbed, to which Nathan and Howard may
<br>
already have access (or can request it).
<br>
<p>-Paul
<br>
<p><p>libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../../ompi/mpiext/cuda/c -I/usr/include/infiniband
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2
<br>
-I../../../..
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/include
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/orte/include
<br>
-I../../../../orte/include
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/ompi/include
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/oshmem/include
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -MT
<br>
btl_openib_component.lo -MD -MP -MF .deps/btl_openib_component.Tpo -c
<br>
/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib/btl_openib_component.c
<br>
&nbsp;-fPIC -DPIC -o .libs/btl_openib_component.o
<br>
/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib/btl_openib_component.c:
<br>
In function 'init_one_port':
<br>
/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib/btl_openib_component.c:785:
<br>
error: 'struct ibv_exp_device_attr' has no member named 'ext_atom'
<br>
make[2]: *** [btl_openib_component.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal/mca/btl/openib'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal'
<br>
make: *** [all-recursive] Error 1
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18876.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] run failure on OpenBSD5-i386"</a>
<li><strong>Previous message:</strong> <a href="18874.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18884.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<li><strong>Reply:</strong> <a href="18884.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] openib btl build failure"</a>
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
