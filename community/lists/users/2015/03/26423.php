<?
$subject_val = "[OMPI users] some warnings for openmpi-dev-1184-gbb22d26";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 07:18:34 2015" -->
<!-- isoreceived="20150303121834" -->
<!-- sent="Tue, 3 Mar 2015 13:18:11 +0100 (CET)" -->
<!-- isosent="20150303121811" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] some warnings for openmpi-dev-1184-gbb22d26" -->
<!-- id="201503031218.t23CIBo4010320_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] some warnings for openmpi-dev-1184-gbb22d26<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 07:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26424.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-dev-1184-gbb22d2 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13. Perhaps somebody is
<br>
interested in some warnings that I got.
<br>
<p><p>tyr openmpi-dev-1184-gbb22d26-SunOS.sparc.64_gcc 57 grep warning \
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_gcc | grep -v attempted | sort | uniq
<br>
../../../openmpi-dev-1184-gbb22d26/ompi/datatype/ompi_datatype_args.c:68:11:
<br>
&nbsp;&nbsp;warning: assignment makes integer from pointer without a cast
<br>
ld: warning: symbol 'mpi_fortran_argv_null' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_argv_null_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_argvs_null' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_argvs_null_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_errcodes_ignore' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_errcodes_ignore_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_status_ignore' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_status_ignore_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_statuses_ignore' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_statuses_ignore_' has differing sizes:
<br>
<p><p><p>linpc1 openmpi-dev-1184-gbb22d26-Linux.x86_64.64_gcc 165 grep warning \
<br>
&nbsp;&nbsp;log.make.Linux.x86_64.64_gcc | grep -v attempted | sort | uniq
<br>
/usr/include/netlink/object.h:58:23: warning: inline function
<br>
&nbsp;&nbsp;'nl_object_priv' declared but never defined
<br>
<p><p><p>tyr openmpi-dev-1184-gbb22d26-SunOS.sparc.64_cc 56 grep warning \
<br>
&nbsp;&nbsp;log.make.SunOS.sparc.64_cc | grep -v attempted | sort | uniq
<br>
&quot;../../../../../../../openmpi-dev-1184-gbb22d26/opal/mca/hwloc/hwloc191/hwloc/src/topology-custom.c&quot;,
<br>
&nbsp;&nbsp;line 88: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-dev-1184-gbb22d26/opal/mca/hwloc/hwloc191/hwloc/src/topology-synthetic.c&quot;,
<br>
&nbsp;&nbsp;line 432: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-dev-1184-gbb22d26/opal/mca/hwloc/hwloc191/hwloc/src/topology-xml.c&quot;,
<br>
&nbsp;&nbsp;line 1518: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../openmpi-dev-1184-gbb22d26/ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;,
<br>
&nbsp;&nbsp;line 310: warning: statement not reached
<br>
&quot;../../../openmpi-dev-1184-gbb22d26/ompi/datatype/ompi_datatype_args.c&quot;,
<br>
&nbsp;&nbsp;line 512: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
<p><p><p>linpc1 openmpi-dev-1184-gbb22d26-Linux.x86_64.64_cc 153 grep warning \
<br>
&nbsp;&nbsp;log.make.Linux.x86_64.64_cc | grep -v attempted | \
<br>
&nbsp;&nbsp;grep -v atomic.h | sort | uniq
<br>
&quot;../../../../../../../openmpi-dev-1184-gbb22d26/opal/mca/hwloc/hwloc191/hwloc/src/topology-custom.c&quot;,
<br>
&nbsp;&nbsp;line 88: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-dev-1184-gbb22d26/opal/mca/hwloc/hwloc191/hwloc/src/topology-linux.c&quot;,
<br>
&nbsp;&nbsp;line 2528: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-dev-1184-gbb22d26/opal/mca/hwloc/hwloc191/hwloc/src/topology-synthetic.c&quot;,
<br>
&nbsp;&nbsp;line 432: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-dev-1184-gbb22d26/opal/mca/hwloc/hwloc191/hwloc/src/topology-xml.c&quot;,
<br>
&nbsp;&nbsp;line 1518: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../openmpi-dev-1184-gbb22d26/opal/mca/reachable/netlink/reachable_netlink_utils_common.c&quot;,
<br>
&nbsp;&nbsp;line 322: warning: extern inline function &quot;nl_object_priv&quot; not defined in translation unit
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26424.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26422.php">Lloyd Brown: "Re: [OMPI users] understanding BTL selection process"</a>
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
