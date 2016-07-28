<?
$subject_val = "[OMPI users] failed to install openmpi trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 05:32:08 2010" -->
<!-- isoreceived="20101029093208" -->
<!-- sent="Fri, 29 Oct 2010 13:32:03 +0400" -->
<!-- isosent="20101029093203" -->
<!-- name="Vasiliy G Tolstov" -->
<!-- email="v.tolstov_at_[hidden]" -->
<!-- subject="[OMPI users] failed to install openmpi trunk" -->
<!-- id="1288344723.11228.7.camel_at_vase" -->
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
<strong>Subject:</strong> [OMPI users] failed to install openmpi trunk<br>
<strong>From:</strong> Vasiliy G Tolstov (<em>v.tolstov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 05:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14647.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14645.php">Siegmar Gross: "[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI users] failed to install openmpi trunk"</a>
<li><strong>Reply:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI users] failed to install openmpi trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello. I'm try to build orcm , in dependencies it need openmpi trunk
<br>
with some options have been enabled.
<br>
<p>Install fails with message:
<br>
Creating orte-migrate.1 man page...
<br>
x86_64-pc-linux-gnu-gcc -DHAVE_CONFIG_H -I. -I../../../opal/include
<br>
-I../../../orte/include
<br>
-I../../../opal/mca/paffinity/hwloc/hwloc/include/private
<br>
-I../../../opal/mca/paffinity/hwloc/hwloc/include/hwloc   -I../../..
<br>
-march=native -pipe -O2 -g -Wall -Wundef -Wno-long-long -Wsign-compare
<br>
-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread
<br>
-I/var/tmp/paludis/build/sys-cluster-openmpi-scm/work/openmpi-scm/opal/mca/paffinity/hwloc/hwloc/include -fvisibility=hidden -c -o orte-migrate.o orte-migrate.c
<br>
make[2]: Leaving directory
<br>
`/var/tmp/paludis/build/sys-cluster-openmpi-scm/work/openmpi-scm/orte/tools/orte-migrate'
<br>
make[1]: Leaving directory
<br>
`/var/tmp/paludis/build/sys-cluster-openmpi-scm/work/openmpi-scm/orte'
<br>
orte-migrate.c:101:39: error: 'ORTE_ERRMGR_MIGRATE_STATE_NONE'
<br>
undeclared here (not in a function)
<br>
orte-migrate.c: In function 'main':
<br>
orte-migrate.c:221:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_FINISH'
<br>
undeclared (first use in this function)
<br>
orte-migrate.c:221:12: note: each undeclared identifier is reported only
<br>
once for each function it appears in
<br>
orte-migrate.c:222:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_ERROR'
<br>
undeclared (first use in this function)
<br>
orte-migrate.c:223:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS'
<br>
undeclared (first use in this function)
<br>
orte-migrate.c: In function 'hnp_receiver':
<br>
orte-migrate.c:531:5: error: 'orte_errmgr_tool_cmd_flag_t' undeclared
<br>
(first use in this function)
<br>
orte-migrate.c:531:33: error: expected ';' before 'command'
<br>
orte-migrate.c:532:5: warning: ISO C90 forbids mixed declarations and
<br>
code
<br>
orte-migrate.c:542:56: error: 'command' undeclared (first use in this
<br>
function)
<br>
orte-migrate.c:542:73: error: 'ORTE_ERRMGR_MIGRATE_TOOL_CMD' undeclared
<br>
(first use in this function)
<br>
orte-migrate.c:548:14: error: 'ORTE_ERRMGR_MIGRATE_TOOL_UPDATE_CMD'
<br>
undeclared (first use in this function)
<br>
orte-migrate.c:555:14: error: 'ORTE_ERRMGR_MIGRATE_TOOL_INIT_CMD'
<br>
undeclared (first use in this function)
<br>
orte-migrate.c: In function 'process_ckpt_update_cmd':
<br>
orte-migrate.c:597:9: error: 'ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS'
<br>
undeclared (first use in this function)
<br>
orte-migrate.c:609:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_FINISH'
<br>
undeclared (first use in this function)
<br>
orte-migrate.c: In function 'notify_hnp':
<br>
orte-migrate.c:622:5: error: 'orte_errmgr_tool_cmd_flag_t' undeclared
<br>
(first use in this function)
<br>
orte-migrate.c:622:33: error: expected ';' before 'command'
<br>
orte-migrate.c:643:55: error: 'command' undeclared (first use in this
<br>
function)
<br>
orte-migrate.c:643:67: error: 'ORTE_ERRMGR_MIGRATE_TOOL_CMD' undeclared
<br>
(first use in this function)
<br>
orte-migrate.c: In function 'pretty_print_status':
<br>
orte-migrate.c:710:5: error: implicit declaration of function
<br>
'orte_errmgr_base_migrate_state_str'
<br>
make[2]: *** [orte-migrate.o] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Configured with flags:
<br>
configure: OMPI configuring in opal/libltdl
<br>
configure: running /bin/sh './configure'  '--prefix=/usr'
<br>
'--host=x86_64-pc-linux-gnu' '--build=x86_64-pc-linux-gnu'
<br>
'--mandir=/usr/share/man' '--infodir=/usr/share/info'
<br>
'--datadir=/usr/share' '--docdir=/usr/share/doc/openmpi-scm'
<br>
'--sysconfdir=/etc' '--localstatedir=/var/lib'
<br>
'--disable-dependency-tracking' '--disable-silent-rules'
<br>
'--enable-fast-install' '--libdir=/usr/lib64'
<br>
'--sysconfdir=/etc/openmpi' '--enable-pretty-print-stacktrace'
<br>
'--enable-orterun-prefix-by-default'
<br>
'--with-platform=contrib/platform/cisco/ebuild/native'
<br>
'--enable-multicast' '--with-ft=orcm' '--enable-sensors'
<br>
'--enable-heartbeat' '--enable-mpi-threads' '--enable-progress-threads'
<br>
'--disable-mpi-f90' '--disable-mpi-f77' '--enable-contrib-no-build=vt'
<br>
'--disable-io-romio' '--enable-heterogeneous' '--enable-ipv6'
<br>
'build_alias=x86_64-pc-linux-gnu' 'host_alias=x86_64-pc-linux-gnu'
<br>
'CC=x86_64-pc-linux-gnu-gcc' 'CFLAGS=-march=native -pipe -O2' 'CPP=cpp'
<br>
--enable-ltdl-convenience --disable-ltdl-install --enable-shared
<br>
--disable-static --cache-file=/dev/null --srcdir=.
<br>
--disable-option-checking
<br>
<p><p><pre>
-- 
Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
Selfip.Ru
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14647.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14645.php">Siegmar Gross: "[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI users] failed to install openmpi trunk"</a>
<li><strong>Reply:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI users] failed to install openmpi trunk"</a>
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
