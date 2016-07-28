<?
$subject_val = "[OMPI users] problems compiling svn-version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 04:45:29 2007" -->
<!-- isoreceived="20071107094529" -->
<!-- sent="Wed, 7 Nov 2007 09:45:24 +0000" -->
<!-- isosent="20071107094524" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="[OMPI users] problems compiling svn-version" -->
<!-- id="20071107094524.GC17548_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 04:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4428.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4426.php">Sharon Melamed: "Re: [OMPI users] machinefile and rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4428.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Reply:</strong> <a href="4428.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p><p>As it seems I need a feature only present in the svn-version of OpenMPI
<br>
I'm in the process of installing and compiling this version.
<br>
<p>I've tried on two different machines.
<br>
<p>1) debian everything worked OK.
<br>
autoconf 2.61-4
<br>
automake 1:1.10+nogfdl-1
<br>
libtool  1.5.24-1
<br>
ifort Version 10.0
<br>
<p>2) ubuntu (single processor/quad-core)
<br>
autoconf 2.61-4
<br>
automake 1:1.10+nogfdl-1
<br>
libtool  1.5.24-1ubuntu1
<br>
ifort Version 10.0
<br>
<p>make[2]: Entering directory
<br>
`/data/kb/compile/openmpi-svn/orte/tools/orteboot'
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link gcc  -g -Wall -Wundef
<br>
-Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes
<br>
-Wcomment -pedantic -Werror-implicit-function-declaration
<br>
-finline-functions -fno-strict-aliasing -pthread  -export-dynamic   -o
<br>
orteboot orteboot.o ../../../orte/libopen-rte.la  -lnsl -lutil  -lm 
<br>
gcc -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
<br>
-Wstrict-prototypes -Wcomment -pedantic
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread -o .libs/orteboot orteboot.o
<br>
-Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so -lnsl -lutil
<br>
-lm  -Wl,--rpath -Wl,/opt/openmpi-svn/lib
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_sys_limits'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_cr_finalize'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_cr_set_enabled'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_path_access'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_crs_base_extract_expected_component'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_crs_base_state_str'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_mutex_check_locks'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_progress_set_yield_when_idle'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_cr_init'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_progress_set_event_flag'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_crs_base_snapshot_t_class'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_cr_reg_coord_callback'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_cr_output'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_get_num_processors'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [orteboot] Error 1
<br>
<p><p>If I do:
<br>
strings orte/.libs/libopen-rte.so.0.0.0 | grep opal_get_num_processors
<br>
I get:
<br>
opal_get_num_processors
<br>
<p>Are there any known issues with ubuntus version of libtool. When I run
<br>
./autogen.sh 
<br>
I get this:
<br>
<p>[Running] autoheader
<br>
** Adjusting libtool for OMPI :-(
<br>
&nbsp;&nbsp;&nbsp;++ patching for pathscale multi-line output (LT 1.5.x)
<br>
[Running] autoconf
<br>
[Running] libtoolize --automake --copy --ltdl
<br>
&nbsp;&nbsp;&nbsp;-- Moving libltdl to opal/
<br>
** Adjusting libltdl for OMPI :-(
<br>
&nbsp;&nbsp;&nbsp;++ patching for argz bugfix in libtool 1.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- your libtool doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;++ patching 64-bit OS X bug in ltmain.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- your libtool doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;++ RTLD_GLOBAL in libltdl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- your libltdl doesn't need this! yay!
<br>
<p><p>I don't get that on machine 1.
<br>
<p>I tried to copy orte/.libs/libopen-rte.so from 1 to 2 without luck.
<br>
<p>kb
<br>
<p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4428.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4426.php">Sharon Melamed: "Re: [OMPI users] machinefile and rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4428.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Reply:</strong> <a href="4428.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
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
