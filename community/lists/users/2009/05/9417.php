<?
$subject_val = "[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 23 13:08:55 2009" -->
<!-- isoreceived="20090523170855" -->
<!-- sent="Sat, 23 May 2009 11:08:47 -0600" -->
<!-- isosent="20090523170847" -->
<!-- name="Ben Mayer" -->
<!-- email="bmayer_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0" -->
<!-- id="fd5f2ba10905231008g38307f30q697ae1d19f1fbdb4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0<br>
<strong>From:</strong> Ben Mayer (<em>bmayer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-23 13:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Previous message:</strong> <a href="9416.php">&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;: "[OMPI users] OpenMPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Reply:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Reply:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get to &quot;make install&quot; and then it complains about icc not being
<br>
found and libopen-rte.la needing to be relinked.
<br>
<p>Any help would be appreciated.
<br>
<p>Linux version
<br>
cat /proc/version
<br>
Linux version 2.6.27.7-9-pae (geeko_at_buildhost) (gcc version 4.3.2
<br>
[gcc-4_3-branch revision 141291] (SUSE Linux) ) #1 SMP 2008-12-04
<br>
18:10:04 +0100
<br>
<p>cat /etc/SuSE-release
<br>
openSUSE 11.1 (i586)
<br>
VERSION = 11.1
<br>
<p><p>Final error message:
<br>
make[3]: Entering directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
<br>
test -z &quot;/opt/openmpi-1.3.2_intel-11.0/lib&quot; || /bin/mkdir -p
<br>
&quot;/opt/openmpi-1.3.2_intel-11.0/lib&quot;
<br>
&nbsp;/bin/sh ../libtool   --mode=install /usr/bin/install -c
<br>
'libopen-rte.la' '/opt/openmpi-1.3.2_intel-11.0/lib/libopen-rte.la'
<br>
libtool: install: warning: relinking `libopen-rte.la'
<br>
libtool: install: (cd /home/bmayer/benchmarking/openmpi-1.3.2/orte;
<br>
/bin/sh /home/bmayer/benchmarking/openmpi-1.3.2/libtool  --tag CC
<br>
--mode=relink icc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
<br>
-restrict -pthread -fvisibility=hidden -export-dynamic -o
<br>
libopen-rte.la -rpath /opt/openmpi-1.3.2_intel-11.0/lib
<br>
runtime/orte_finalize.lo runtime/orte_init.lo runtime/orte_locks.lo
<br>
runtime/orte_globals.lo
<br>
runtime/data_type_support/orte_dt_compare_fns.lo
<br>
runtime/data_type_support/orte_dt_copy_fns.lo
<br>
runtime/data_type_support/orte_dt_print_fns.lo
<br>
runtime/data_type_support/orte_dt_release_fns.lo
<br>
runtime/data_type_support/orte_dt_size_fns.lo
<br>
runtime/data_type_support/orte_dt_packing_fns.lo
<br>
runtime/data_type_support/orte_dt_unpacking_fns.lo
<br>
runtime/orte_mca_params.lo runtime/orte_wait.lo runtime/orte_cr.lo
<br>
runtime/orte_data_server.lo util/error_strings.lo util/name_fns.lo
<br>
util/proc_info.lo util/session_dir.lo util/show_help.lo
<br>
util/context_fns.lo util/parse_options.lo
<br>
util/pre_condition_transports.lo util/hnp_contact.lo
<br>
util/hostfile/hostfile_lex.lo util/hostfile/hostfile.lo
<br>
util/dash_host/dash_host.lo util/comm/comm.lo util/nidmap.lo
<br>
orted/orted_main.lo orted/orted_comm.lo mca/errmgr/libmca_errmgr.la
<br>
mca/ess/libmca_ess.la mca/filem/libmca_filem.la
<br>
mca/grpcomm/libmca_grpcomm.la mca/iof/libmca_iof.la
<br>
mca/notifier/libmca_notifier.la mca/odls/libmca_odls.la
<br>
mca/oob/libmca_oob.la mca/plm/libmca_plm.la mca/ras/libmca_ras.la
<br>
mca/rmaps/libmca_rmaps.la mca/rml/libmca_rml.la
<br>
mca/routed/libmca_routed.la mca/snapc/libmca_snapc.la
<br>
/home/bmayer/benchmarking/openmpi-1.3.2/opal/libopen-pal.la -lnsl
<br>
-lutil )
<br>
libtool: relink: icc -shared  runtime/.libs/orte_finalize.o
<br>
runtime/.libs/orte_init.o runtime/.libs/orte_locks.o
<br>
runtime/.libs/orte_globals.o
<br>
runtime/data_type_support/.libs/orte_dt_compare_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_copy_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_print_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_release_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_size_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_packing_fns.o
<br>
runtime/data_type_support/.libs/orte_dt_unpacking_fns.o
<br>
runtime/.libs/orte_mca_params.o runtime/.libs/orte_wait.o
<br>
runtime/.libs/orte_cr.o runtime/.libs/orte_data_server.o
<br>
util/.libs/error_strings.o util/.libs/name_fns.o
<br>
util/.libs/proc_info.o util/.libs/session_dir.o util/.libs/show_help.o
<br>
util/.libs/context_fns.o util/.libs/parse_options.o
<br>
util/.libs/pre_condition_transports.o util/.libs/hnp_contact.o
<br>
util/hostfile/.libs/hostfile_lex.o util/hostfile/.libs/hostfile.o
<br>
util/dash_host/.libs/dash_host.o util/comm/.libs/comm.o
<br>
util/.libs/nidmap.o orted/.libs/orted_main.o orted/.libs/orted_comm.o
<br>
-Wl,--whole-archive mca/errmgr/.libs/libmca_errmgr.a
<br>
mca/ess/.libs/libmca_ess.a mca/filem/.libs/libmca_filem.a
<br>
mca/grpcomm/.libs/libmca_grpcomm.a mca/iof/.libs/libmca_iof.a
<br>
mca/notifier/.libs/libmca_notifier.a mca/odls/.libs/libmca_odls.a
<br>
mca/oob/.libs/libmca_oob.a mca/plm/.libs/libmca_plm.a
<br>
mca/ras/.libs/libmca_ras.a mca/rmaps/.libs/libmca_rmaps.a
<br>
mca/rml/.libs/libmca_rml.a mca/routed/.libs/libmca_routed.a
<br>
mca/snapc/.libs/libmca_snapc.a -Wl,--no-whole-archive  -Wl,-rpath
<br>
-Wl,/opt/openmpi-1.3.2_intel-11.0/lib
<br>
-L/opt/openmpi-1.3.2_intel-11.0/lib -lopen-pal -ldl -lnsl -lutil
<br>
-pthread   -pthread -Wl,-soname -Wl,libopen-rte.so.0 -o
<br>
.libs/libopen-rte.so.0.0.0
<br>
/home/bmayer/benchmarking/openmpi-1.3.2/libtool: line 7847: icc:
<br>
command not found
<br>
libtool: install: error: relink `libopen-rte.la' with the above
<br>
command before installing it
<br>
make[3]: *** [install-libLTLIBRARIES] Error 1
<br>
make[3]: Leaving directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
<br>
make[2]: *** [install-am] Error 2
<br>
make[2]: Leaving directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/bmayer/benchmarking/openmpi-1.3.2/orte'
<br>
make: *** [install-recursive] Error 1
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9417/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Previous message:</strong> <a href="9416.php">&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;: "[OMPI users] OpenMPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Reply:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Reply:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
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
