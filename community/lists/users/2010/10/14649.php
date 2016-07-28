<?
$subject_val = "Re: [OMPI users] failed to install openmpi trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 10:27:05 2010" -->
<!-- isoreceived="20101029142705" -->
<!-- sent="Fri, 29 Oct 2010 08:26:53 -0600" -->
<!-- isosent="20101029142653" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] failed to install openmpi trunk" -->
<!-- id="EAB53E51-D271-4E6E-A890-80AD13D8DF81_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1288344723.11228.7.camel_at_vase" -->
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
<strong>Subject:</strong> Re: [OMPI users] failed to install openmpi trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 10:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14650.php">Brian Austin: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>In reply to:</strong> <a href="14646.php">Vasiliy G Tolstov: "[OMPI users] failed to install openmpi trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couple of things stand out:
<br>
<p>1. you definitely don't want to use a copy of the trunk beyond r23924. The developer's trunk is undergoing some major change and orcm no longer is in-sync with it. I probably won't update orcm to match until later this year (will freeze integration at r23924).
<br>
<p>2. the configure options don't look right to me - they should simply be:
<br>
./configure --prefix=&lt;wherever&gt; --with-platform=contrib/platform/cisco/linux
<br>
<p>I believe the errors are caused by confusion due to the various configure options.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Oct 29, 2010, at 3:32 AM, Vasiliy G Tolstov wrote:
<br>
<p><span class="quotelev1">&gt; Hello. I'm try to build orcm , in dependencies it need openmpi trunk
</span><br>
<span class="quotelev1">&gt; with some options have been enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Install fails with message:
</span><br>
<span class="quotelev1">&gt; Creating orte-migrate.1 man page...
</span><br>
<span class="quotelev1">&gt; x86_64-pc-linux-gnu-gcc -DHAVE_CONFIG_H -I. -I../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/hwloc/hwloc/include/private
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/hwloc/hwloc/include/hwloc   -I../../..
</span><br>
<span class="quotelev1">&gt; -march=native -pipe -O2 -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev1">&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -I/var/tmp/paludis/build/sys-cluster-openmpi-scm/work/openmpi-scm/opal/mca/paffinity/hwloc/hwloc/include -fvisibility=hidden -c -o orte-migrate.o orte-migrate.c
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/var/tmp/paludis/build/sys-cluster-openmpi-scm/work/openmpi-scm/orte/tools/orte-migrate'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/var/tmp/paludis/build/sys-cluster-openmpi-scm/work/openmpi-scm/orte'
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:101:39: error: 'ORTE_ERRMGR_MIGRATE_STATE_NONE'
</span><br>
<span class="quotelev1">&gt; undeclared here (not in a function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:221:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_FINISH'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:221:12: note: each undeclared identifier is reported only
</span><br>
<span class="quotelev1">&gt; once for each function it appears in
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:222:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_ERROR'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:223:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c: In function 'hnp_receiver':
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:531:5: error: 'orte_errmgr_tool_cmd_flag_t' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:531:33: error: expected ';' before 'command'
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:532:5: warning: ISO C90 forbids mixed declarations and
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:542:56: error: 'command' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:542:73: error: 'ORTE_ERRMGR_MIGRATE_TOOL_CMD' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:548:14: error: 'ORTE_ERRMGR_MIGRATE_TOOL_UPDATE_CMD'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:555:14: error: 'ORTE_ERRMGR_MIGRATE_TOOL_INIT_CMD'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c: In function 'process_ckpt_update_cmd':
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:597:9: error: 'ORTE_ERRMGR_MIGRATE_STATE_ERR_INPROGRESS'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:609:12: error: 'ORTE_ERRMGR_MIGRATE_STATE_FINISH'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c: In function 'notify_hnp':
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:622:5: error: 'orte_errmgr_tool_cmd_flag_t' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:622:33: error: expected ';' before 'command'
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:643:55: error: 'command' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:643:67: error: 'ORTE_ERRMGR_MIGRATE_TOOL_CMD' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; orte-migrate.c: In function 'pretty_print_status':
</span><br>
<span class="quotelev1">&gt; orte-migrate.c:710:5: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'orte_errmgr_base_migrate_state_str'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orte-migrate.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configured with flags:
</span><br>
<span class="quotelev1">&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev1">&gt; configure: running /bin/sh './configure'  '--prefix=/usr'
</span><br>
<span class="quotelev1">&gt; '--host=x86_64-pc-linux-gnu' '--build=x86_64-pc-linux-gnu'
</span><br>
<span class="quotelev1">&gt; '--mandir=/usr/share/man' '--infodir=/usr/share/info'
</span><br>
<span class="quotelev1">&gt; '--datadir=/usr/share' '--docdir=/usr/share/doc/openmpi-scm'
</span><br>
<span class="quotelev1">&gt; '--sysconfdir=/etc' '--localstatedir=/var/lib'
</span><br>
<span class="quotelev1">&gt; '--disable-dependency-tracking' '--disable-silent-rules'
</span><br>
<span class="quotelev1">&gt; '--enable-fast-install' '--libdir=/usr/lib64'
</span><br>
<span class="quotelev1">&gt; '--sysconfdir=/etc/openmpi' '--enable-pretty-print-stacktrace'
</span><br>
<span class="quotelev1">&gt; '--enable-orterun-prefix-by-default'
</span><br>
<span class="quotelev1">&gt; '--with-platform=contrib/platform/cisco/ebuild/native'
</span><br>
<span class="quotelev1">&gt; '--enable-multicast' '--with-ft=orcm' '--enable-sensors'
</span><br>
<span class="quotelev1">&gt; '--enable-heartbeat' '--enable-mpi-threads' '--enable-progress-threads'
</span><br>
<span class="quotelev1">&gt; '--disable-mpi-f90' '--disable-mpi-f77' '--enable-contrib-no-build=vt'
</span><br>
<span class="quotelev1">&gt; '--disable-io-romio' '--enable-heterogeneous' '--enable-ipv6'
</span><br>
<span class="quotelev1">&gt; 'build_alias=x86_64-pc-linux-gnu' 'host_alias=x86_64-pc-linux-gnu'
</span><br>
<span class="quotelev1">&gt; 'CC=x86_64-pc-linux-gnu-gcc' 'CFLAGS=-march=native -pipe -O2' 'CPP=cpp'
</span><br>
<span class="quotelev1">&gt; --enable-ltdl-convenience --disable-ltdl-install --enable-shared
</span><br>
<span class="quotelev1">&gt; --disable-static --cache-file=/dev/null --srcdir=.
</span><br>
<span class="quotelev1">&gt; --disable-option-checking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Selfip.Ru
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14650.php">Brian Austin: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>In reply to:</strong> <a href="14646.php">Vasiliy G Tolstov: "[OMPI users] failed to install openmpi trunk"</a>
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
