<?
$subject_val = "[OMPI devel] mtt failures from last nite";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 11:37:17 2015" -->
<!-- isoreceived="20150417153717" -->
<!-- sent="Fri, 17 Apr 2015 09:37:16 -0600" -->
<!-- isosent="20150417153716" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] mtt failures from last nite" -->
<!-- id="CAF1Cqj5Cvf4mvfSK6GR_a+ni7jTxkNRD4i5dXLUXZLynczTTtQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mtt failures from last nite<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 11:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Folks,
<br>
<p>I'm seeing build failures on both carver/pgi at nersc and on a cray
<br>
internal machine
<br>
with the nightly build of master.
<br>
<p><span class="quotelev1">&gt;From the cray box:
</span><br>
<p>ommon_ugni.c:30:5: error: 'MCA_BASE_VERSION_2_0_0' undeclared here
<br>
(not in a function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_VERSION_2_0_0,
<br>
common_ugni.c:31:5: warning: initialization makes integer from pointer
<br>
without a cast [enabled by
<br>
default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;common&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
common_ugni.c:31:5: warning: (near initialization for
<br>
'opal_common_ugni_component.mca_minor_version') [enabled by default]
<br>
common_ugni.c:31:5: error: initializer element is not computable at load time
<br>
common_ugni.c:35:5: warning: initialization makes integer from pointer
<br>
without a cast [enabled by
<br>
default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,
<br>
common_ugni.c:35:5: warning: (near initialization for
<br>
'opal_common_ugni_component.mca_project_minor_version') [enabled by default]
<br>
common_ugni.c:37:1: warning: initialization makes integer from pointer
<br>
without a cast [enabled by
<br>
default]
<br>
)
<br>
&nbsp;^
<br>
make[2]: *** [common_ugni.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>from the ibm dataplex box:
<br>
<p>./../config/depcomp: line 427: atomic-asm.d: No such file or directory
<br>
../../config/depcomp: line 430: atomic-asm.d: No such file or directory
<br>
pgcc-Fatal-/global/common/carver/usg/pgi/14.4/linux86-64/14.4/bin/pgc
<br>
TERMINATED by signal 11
<br>
Arguments to /global/common/carver/usg/pgi/14.4/linux86-64/14.4/bin/pgc
<br>
&nbsp;-inform warn -x 119 0xa10000 -x 122 0x40 -x 123 0x1000 -x 127 4 -x
<br>
127 17 -x 19 0x400000 -x 28
<br>
0x40000 -x 120 0x10000000 -x 70 0x8000 -x 122 1 -x 125 0x20000 -x 117
<br>
0x1000 -quad -x 59 4 -tp
<br>
nehalem -astype 0 -stdinc
<br>
/global/common/carver/usg/pgi/14.4/linux86-64/14.4/include-gcc41:/global/common/carver/usg/pgi/14.4/linux86-64/14.4/include:/usr/local/include:/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include:/usr/include
<br>
-def unix -def __unix -def __unix__ -def linux -def __linux -def
<br>
__linux__ -def __NO_MATH_INLINES
<br>
-def __x86_64 -def __x86_64__ -def __LONG_MAX__=9223372036854775807L
<br>
-def '__SIZE_TYPE__=unsigned
<br>
long int' -def '__PTRDIFF_TYPE__=long int' -def __THROW= -def
<br>
__extension__= -def __amd_64__amd64__
<br>
-def __k8 -def __k8__ -def __SSE__ -def __MMX__ -def __SSE2__ -def
<br>
__SSE3__ -def __SSSE3__
<br>
-predicate '#machine(x86_64) #lint(off) #system(posix) #cpu(x86_64)'
<br>
-idir . -idir
<br>
../../../../opal/include -idir ../../../../ompi/include -idir
<br>
../../../../oshmem/include -idir
<br>
../../../../opal/mca/common/libfabric/libfabric -idir
<br>
../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -idir
<br>
../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -idir
<br>
./libevent -idir
<br>
./libevent/include -idir ./libevent/include -idir ./libevent/compat
<br>
-idir ../../../.. -idir
<br>
../../../../orte/include -idir
<br>
/global/u2/h/hpp/mtt_carver_tmp/mpi-install/8_8A/src/openmpi-dev-1527-g97444d8/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-idir
<br>
/global/u2/h/hpp/mtt_carver_tmp/mpi-install/8_8A/src/openmpi-dev-1527-g97444d8/opal/mca/event/libevent2022/libevent
<br>
-idir
<br>
/global/u2/h/hpp/mtt_carver_tmp/mpi-install/8_8A/src/openmpi-dev-1527-g97444d8/opal/mca/event/libevent2022/libevent/include
<br>
-def HAVE_CONFIG_H -def __PIC__ -def PIC -cmdline '+pgcc
<br>
libevent2022_component.c -DHAVE_CONFIG_H
<br>
-I. -I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/common/libfabric/libfabric
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
-I./libevent -I./libevent/include
<br>
-I./libevent/include -I./libevent/compat -I../../../..
<br>
-I../../../../orte/include
<br>
-I/global/u2/h/hpp/mtt_carver_tmp/mpi-install/8_8A/src/openmpi-dev-1527-g97444d8/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/u2/h/hpp/mtt_carver_tmp/mpi-install/8_8A/src/openmpi-dev-1527-g97444d8/opal/mca/event/libevent2022/libevent
<br>
-I/global/u2/h/hpp/mtt_carver_tmp/mpi-install/8_8A/src/openmpi-dev-1527-g97444d8/opal/mca/event/libevent2022/libevent/include
<br>
-g -c -MD -fpic -DPIC -o .libs/libevent2022_component.o' -outfile
<br>
.libs/libevent2022_component.o -x
<br>
123 0x80000000 -x 123 4 -x 2 0x400 -x 119 0x20 -def __pgnu_vsn=40102
<br>
-alwaysinline
<br>
/global/common/carver/usg/pgi/14.4/linux86-64/14.4/lib/libintrinsics.il
<br>
4 -x 123 8 -x 120 0x200000
<br>
-x 70 0x40000000 -x 163 0x800000 -y 189 0x4000000 -x 62 8 -asm
<br>
/global/scratch2/sd/hpp/pgccFq0dD9_z_POK.s
<br>
make[3]: *** [libevent2022_component.lo] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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
