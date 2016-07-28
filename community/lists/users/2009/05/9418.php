<?
$subject_val = "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 06:54:31 2009" -->
<!-- isoreceived="20090525105431" -->
<!-- sent="Mon, 25 May 2009 18:54:27 +0800" -->
<!-- isosent="20090525105427" -->
<!-- name="St Druid" -->
<!-- email="tq02ksu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0" -->
<!-- id="1e36df0905250354s4f0c7cbak523814f20e442539_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="fd5f2ba10905231008g38307f30q697ae1d19f1fbdb4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0<br>
<strong>From:</strong> St Druid (<em>tq02ksu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-25 06:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9419.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9417.php">Ben Mayer: "[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>In reply to:</strong> <a href="9417.php">Ben Mayer: "[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ben,
<br>
<p>I also use the same distribution,
<br>
<p># zypper install stdc++*
<br>
<p>Might resolve the problem.
<br>
<p>you can try it , good luck.
<br>
<p>On Sun, May 24, 2009 at 1:08 AM, Ben Mayer &lt;bmayer_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I get to &quot;make install&quot; and then it complains about icc not being
</span><br>
<span class="quotelev1">&gt; found and libopen-rte.la needing to be relinked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux version
</span><br>
<span class="quotelev1">&gt; cat /proc/version
</span><br>
<span class="quotelev1">&gt; Linux version 2.6.27.7-9-pae (geeko_at_buildhost) (gcc version 4.3.2
</span><br>
<span class="quotelev1">&gt; [gcc-4_3-branch revision 141291] (SUSE Linux) ) #1 SMP 2008-12-04
</span><br>
<span class="quotelev1">&gt; 18:10:04 +0100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat /etc/SuSE-release
</span><br>
<span class="quotelev1">&gt; openSUSE 11.1 (i586)
</span><br>
<span class="quotelev1">&gt; VERSION = 11.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Final error message:
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/opt/openmpi-1.3.2_intel-11.0/lib&quot; || /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; &quot;/opt/openmpi-1.3.2_intel-11.0/lib&quot;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;/bin/sh ../libtool &#194;&#160; --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; 'libopen-rte.la' '/opt/openmpi-1.3.2_intel-11.0/lib/libopen-rte.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libopen-rte.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: (cd /home/bmayer/benchmarking/openmpi-1.3.2/orte;
</span><br>
<span class="quotelev1">&gt; /bin/sh /home/bmayer/benchmarking/openmpi-1.3.2/libtool &#194;&#160;--tag CC
</span><br>
<span class="quotelev1">&gt; --mode=relink icc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -restrict -pthread -fvisibility=hidden -export-dynamic -o
</span><br>
<span class="quotelev1">&gt; libopen-rte.la -rpath /opt/openmpi-1.3.2_intel-11.0/lib
</span><br>
<span class="quotelev1">&gt; runtime/orte_finalize.lo runtime/orte_init.lo runtime/orte_locks.lo
</span><br>
<span class="quotelev1">&gt; runtime/orte_globals.lo
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/orte_dt_compare_fns.lo
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/orte_dt_copy_fns.lo
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/orte_dt_print_fns.lo
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/orte_dt_release_fns.lo
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/orte_dt_size_fns.lo
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/orte_dt_packing_fns.lo
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/orte_dt_unpacking_fns.lo
</span><br>
<span class="quotelev1">&gt; runtime/orte_mca_params.lo runtime/orte_wait.lo runtime/orte_cr.lo
</span><br>
<span class="quotelev1">&gt; runtime/orte_data_server.lo util/error_strings.lo util/name_fns.lo
</span><br>
<span class="quotelev1">&gt; util/proc_info.lo util/session_dir.lo util/show_help.lo
</span><br>
<span class="quotelev1">&gt; util/context_fns.lo util/parse_options.lo
</span><br>
<span class="quotelev1">&gt; util/pre_condition_transports.lo util/hnp_contact.lo
</span><br>
<span class="quotelev1">&gt; util/hostfile/hostfile_lex.lo util/hostfile/hostfile.lo
</span><br>
<span class="quotelev1">&gt; util/dash_host/dash_host.lo util/comm/comm.lo util/nidmap.lo
</span><br>
<span class="quotelev1">&gt; orted/orted_main.lo orted/orted_comm.lo mca/errmgr/libmca_errmgr.la
</span><br>
<span class="quotelev1">&gt; mca/ess/libmca_ess.la mca/filem/libmca_filem.la
</span><br>
<span class="quotelev1">&gt; mca/grpcomm/libmca_grpcomm.la mca/iof/libmca_iof.la
</span><br>
<span class="quotelev1">&gt; mca/notifier/libmca_notifier.la mca/odls/libmca_odls.la
</span><br>
<span class="quotelev1">&gt; mca/oob/libmca_oob.la mca/plm/libmca_plm.la mca/ras/libmca_ras.la
</span><br>
<span class="quotelev1">&gt; mca/rmaps/libmca_rmaps.la mca/rml/libmca_rml.la
</span><br>
<span class="quotelev1">&gt; mca/routed/libmca_routed.la mca/snapc/libmca_snapc.la
</span><br>
<span class="quotelev1">&gt; /home/bmayer/benchmarking/openmpi-1.3.2/opal/libopen-pal.la -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil )
</span><br>
<span class="quotelev1">&gt; libtool: relink: icc -shared &#194;&#160;runtime/.libs/orte_finalize.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/orte_init.o runtime/.libs/orte_locks.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/orte_globals.o
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_compare_fns.o
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_copy_fns.o
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_print_fns.o
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_release_fns.o
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_size_fns.o
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_packing_fns.o
</span><br>
<span class="quotelev1">&gt; runtime/data_type_support/.libs/orte_dt_unpacking_fns.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/orte_mca_params.o runtime/.libs/orte_wait.o
</span><br>
<span class="quotelev1">&gt; runtime/.libs/orte_cr.o runtime/.libs/orte_data_server.o
</span><br>
<span class="quotelev1">&gt; util/.libs/error_strings.o util/.libs/name_fns.o
</span><br>
<span class="quotelev1">&gt; util/.libs/proc_info.o util/.libs/session_dir.o util/.libs/show_help.o
</span><br>
<span class="quotelev1">&gt; util/.libs/context_fns.o util/.libs/parse_options.o
</span><br>
<span class="quotelev1">&gt; util/.libs/pre_condition_transports.o util/.libs/hnp_contact.o
</span><br>
<span class="quotelev1">&gt; util/hostfile/.libs/hostfile_lex.o util/hostfile/.libs/hostfile.o
</span><br>
<span class="quotelev1">&gt; util/dash_host/.libs/dash_host.o util/comm/.libs/comm.o
</span><br>
<span class="quotelev1">&gt; util/.libs/nidmap.o orted/.libs/orted_main.o orted/.libs/orted_comm.o
</span><br>
<span class="quotelev1">&gt; -Wl,--whole-archive mca/errmgr/.libs/libmca_errmgr.a
</span><br>
<span class="quotelev1">&gt; mca/ess/.libs/libmca_ess.a mca/filem/.libs/libmca_filem.a
</span><br>
<span class="quotelev1">&gt; mca/grpcomm/.libs/libmca_grpcomm.a mca/iof/.libs/libmca_iof.a
</span><br>
<span class="quotelev1">&gt; mca/notifier/.libs/libmca_notifier.a mca/odls/.libs/libmca_odls.a
</span><br>
<span class="quotelev1">&gt; mca/oob/.libs/libmca_oob.a mca/plm/.libs/libmca_plm.a
</span><br>
<span class="quotelev1">&gt; mca/ras/.libs/libmca_ras.a mca/rmaps/.libs/libmca_rmaps.a
</span><br>
<span class="quotelev1">&gt; mca/rml/.libs/libmca_rml.a mca/routed/.libs/libmca_routed.a
</span><br>
<span class="quotelev1">&gt; mca/snapc/.libs/libmca_snapc.a -Wl,--no-whole-archive &#194;&#160;-Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/openmpi-1.3.2_intel-11.0/lib
</span><br>
<span class="quotelev1">&gt; -L/opt/openmpi-1.3.2_intel-11.0/lib -lopen-pal -ldl -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; -pthread &#194;&#160; -pthread -Wl,-soname -Wl,libopen-rte.so.0 -o
</span><br>
<span class="quotelev1">&gt; .libs/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /home/bmayer/benchmarking/openmpi-1.3.2/libtool: line 7847: icc:
</span><br>
<span class="quotelev1">&gt; command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libopen-rte.la' with the above
</span><br>
<span class="quotelev1">&gt; command before installing it
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
B.W. Dong
State Key Laboratory of Superhard Materials,
Jilin University, Changchun, China. 130012
tq02ksu_at_[hidden] [ tq02ksu_at_[hidden] ]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9419.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9417.php">Ben Mayer: "[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>In reply to:</strong> <a href="9417.php">Ben Mayer: "[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
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
