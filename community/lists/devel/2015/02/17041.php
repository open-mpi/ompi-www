<?
$subject_val = "[OMPI devel] verbs and oob_ub breakage?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 14:41:13 2015" -->
<!-- isoreceived="20150225194113" -->
<!-- sent="Wed, 25 Feb 2015 11:41:09 -0800" -->
<!-- isosent="20150225194109" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] verbs and oob_ub breakage?" -->
<!-- id="CAAvDA17aejnMgY8mO1iznYfjKvD6XeiLnNydESMfYENC-cfGwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] verbs and oob_ub breakage?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 14:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17042.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>Previous message:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17042.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>Reply:</strong> <a href="17042.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] verbs and oob_ub breakage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI:
<br>
<p>On several systems where Jeff's tarball for pr410 ran fine yesterday, I am
<br>
seeing errors in today's tarball related to either libverbs or mca_oob_ud.
<br>
<p><p>Issue #1:
<br>
On Solaris verbs support is now rejected at configure time.
<br>
Configure output appears below as &quot;1)&quot;
<br>
<p>Issue #2:
<br>
On Linux I get undefined symbols at either build time (from
<br>
oob_ud_component.o when static linking orte-cean) or at runtime (dynamic
<br>
linker again complaining about undefined symbol(s) in mca_oob_ud.so).  In
<br>
both cases I would venture a guess that some linker option (-L or -l ?) is
<br>
missing.
<br>
Outputs appear below as &quot;2a)&quot; and &quot;2b)&quot;.
<br>
<p>I am currently assuming these failures with Jeff's tarball for PR410
<br>
reflect recent changes in 'master' (e.g. I assume Jeff rebased his branch
<br>
since the previous tarballs), but I don't have time to confirm that.  I
<br>
believe that the failure in the static linking case eliminates Jeff's
<br>
dlopen-related work from consideration as a root cause, but I could
<br>
certainly be mistaken.
<br>
<p>If these two issues are known, or have already been fixed in 'master', then
<br>
just say so and I'll drop this.
<br>
Otherwise, let me know what additional files/output you want to see and who
<br>
to send it to.
<br>
<p>-Paul
<br>
<p>1) Configure output from Solaris-11 on x86-64,using Gnu compilers:
<br>
<p>--- MCA component common:verbs (m4 configuration macro)
<br>
checking for MCA component common:verbs compile mode... dso
<br>
checking if want to add padding to the openib BTL control header... no
<br>
checking for fcntl.h... (cached) yes
<br>
checking sys/poll.h usability... yes
<br>
checking sys/poll.h presence... yes
<br>
checking for sys/poll.h... yes
<br>
checking infiniband/verbs.h usability... yes
<br>
checking infiniband/verbs.h presence... yes
<br>
checking for infiniband/verbs.h... yes
<br>
looking for library without search path
<br>
checking for library containing ibv_open_device... -libverbs
<br>
checking number of arguments to ibv_create_cq... unknown
<br>
configure: WARNING: Can not determine number of args to ibv_create_cq.
<br>
configure: WARNING: Not building component.
<br>
checking if ConnectX XRC support is enabled... no
<br>
checking if ConnectIB XRC support is enabled... no
<br>
checking if dynamic SL is enabled... no
<br>
configure: WARNING: Verbs support requested (via --with-verbs) but not
<br>
found.
<br>
configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or
<br>
v1.1), you *MUST* have both the libsysfs headers and libraries installed.
<br>
Later versions of libibverbs do not require libsysfs.
<br>
configure: error: Aborting.
<br>
<p>2a) Failure at build time on Linux with &quot;--enable-static --disable-shared&quot;
<br>
(truncated):
<br>
<p>/bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -g
<br>
-finline-functions -fno-strict-aliasing -pthread   -o orte-clean
<br>
orte-clean.o ../../../orte/libopen-rte.la ../../../opal/libopen-pal.la -lrt
<br>
-lm -lutil
<br>
&nbsp;&nbsp;-lrt -lm -lutillibtool: link: gcc -std=gnu99 -g -finline-functions
<br>
-fno-strict-aliasing -pthread -o orte-clean orte-clean.o
<br>
../../../orte/.libs/libopen-rte.a -L/usr/syscom/opt/torque/4.1.4/lib
<br>
/usr/syscom/opt/torque/4.1.4/lib/libtorqu
<br>
e.so -lxml2 -lz -lcrypto -lssl -lpthread
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/BLD/opal/.libs/libopen-pal.a
<br>
../../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread -Wl,-rpath
<br>
&nbsp;-Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
<br>
-Wl,/usr/syscom/opt/torque/4.1.4/lib
<br>
../../../orte/.libs/libopen-rte.a(oob_ud_component.o): In function
<br>
`mca_oob_ud_device_setup':/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:220:
<br>
undefined reference to `ibv_open_device'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:228:
<br>
undefined reference to `ibv_query_device'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:236:
<br>
undefined reference to `ibv_create_comp_channel'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:244:
<br>
undefined reference to `ibv_alloc_pd'
<br>
../../../orte/.libs/libopen-rte.a(oob_ud_component.o): In function
<br>
`mca_oob_ud_component_startup':
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:291:
<br>
undefined reference to `ibv_get_device_list'
<br>
[and many more]
<br>
<p><p>2b)  Failure at run time on Linux with only &quot;normal&quot; configure options:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-icc-11.1/INST/bin/mpirun:
<br>
symbol lookup error:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_oob_ud.so:
<br>
undefined symbol: ibv_get_device_list
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17042.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>Previous message:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17042.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>Reply:</strong> <a href="17042.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] verbs and oob_ub breakage?"</a>
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
