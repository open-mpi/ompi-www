<?
$subject_val = "[OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 11:12:46 2011" -->
<!-- isoreceived="20110722151246" -->
<!-- sent="Fri, 22 Jul 2011 17:12:38 +0200" -->
<!-- isosent="20110722151238" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0" -->
<!-- id="4E299366.5070709_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 11:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16968.php">tma_at_[hidden]: "[OMPI users] stuck after IMB calling MPI_Finalize in Open MPI trunk"</a>
<li><strong>Previous message:</strong> <a href="16966.php">Jeff Squyres: "[OMPI users] EuroMPI 2011 CFP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Reply:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Reply:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI volks,
<br>
currently I have a problem by building the version 1.5.3 of OpenMPI on
<br>
Scientific Linux 6.0 systems, which seem vor me to be a configuration
<br>
problem.
<br>
<p>After the configure run (which seem to terminate without error code),
<br>
the &quot;gmake all&quot; stage produces errors and exits.
<br>
<p>Typical is the output below.
<br>
<p>Fancy: the 1.4.3 version on same computer can be build with no special
<br>
trouble. Both the 1.4.3 and 1.5.3 versions can be build on other
<br>
computer running CentOS 5.6.
<br>
<p>In each case I build 16 versions at all (4 compiler * 32bit/64bit *
<br>
support for multithreading ON/OFF). The same error arise in all 16 versions.
<br>
<p>Can someone give a hint about how to avoid this issue? Thanks!
<br>
<p>Best wishes,
<br>
<p>Paul
<br>
<p><p>Some logs and configure are downloadable here:
<br>
<a href="https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD">https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD</a>
<br>
<p>&nbsp;&nbsp;&nbsp;The configure line is in RUNME.sh, the
<br>
logs of configure and build stage in log_* files; I also attached the
<br>
config.log file and the configure itself (which is the standard from the
<br>
1.5.3 release).
<br>
<p><p>######################################################################
<br>
<p><p>CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd . &amp;&amp; /bin/sh
<br>
/tmp/pk224850/linuxc2_11254/openmpi-1.5.3mt_linux64_gcc/config/missing
<br>
--run aclocal-1.11 -I config
<br>
sh: config/ompi_get_version.sh: No such file or directory
<br>
/usr/bin/m4: esyscmd subprocess failed
<br>
<p>&lt;last message repeated 12x&gt;
<br>
<p>configure.ac:953: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not
<br>
m4_defun'd
<br>
config/ompi_mca.m4:37: OMPI_MCA is expanded from...
<br>
configure.ac:953: the top level
<br>
configure.ac:953: warning: AC_COMPILE_IFELSE was called before
<br>
AC_USE_SYSTEM_EXTENSIONS
<br>
../../lib/autoconf/specific.m4:386: AC_USE_SYSTEM_EXTENSIONS is expanded
<br>
from...
<br>
opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:152:
<br>
HWLOC_SETUP_CORE_AFTER_C99 is expanded from...
<br>
../../lib/m4sugar/m4sh.m4:505: AS_IF is expanded from...
<br>
opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:22: HWLOC_SETUP_CORE is
<br>
expanded from...
<br>
opal/mca/paffinity/hwloc/configure.m4:40: MCA_paffinity_hwloc_CONFIG is
<br>
expanded from...
<br>
config/ompi_mca.m4:540: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded
<br>
from...
<br>
config/ompi_mca.m4:326: MCA_CONFIGURE_FRAMEWORK is expanded from...
<br>
config/ompi_mca.m4:247: MCA_CONFIGURE_PROJECT is expanded from...
<br>
configure.ac:953: warning: AC_RUN_IFELSE was called before
<br>
AC_USE_SYSTEM_EXTENSIONS
<br>
<p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16967/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16968.php">tma_at_[hidden]: "[OMPI users] stuck after IMB calling MPI_Finalize in Open MPI trunk"</a>
<li><strong>Previous message:</strong> <a href="16966.php">Jeff Squyres: "[OMPI users] EuroMPI 2011 CFP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Reply:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Reply:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
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
