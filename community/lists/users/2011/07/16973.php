<?
$subject_val = "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 14:26:16 2011" -->
<!-- isoreceived="20110722182616" -->
<!-- sent="Fri, 22 Jul 2011 20:26:11 +0200" -->
<!-- isosent="20110722182611" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0" -->
<!-- id="4E29C0C3.7080305_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A93D223-8E72-43D3-A5AB-1C23BF06C5EB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 14:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Previous message:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<span class="quotelev1">&gt; Higher rev levels of the autotools are required for the 1.5 series - are you at the right ones? See
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<p>Many thanks for the link.
<br>
Short test, and it's out: autoconf version on our release is too old. We 
<br>
have 2.63 and needed ist 2.65.
<br>
<p>I will trigger our admins...
<br>
<p>Best wishes,
<br>
<p>Paul
<br>
<p><p><p><p>m4 (GNU M4) 1.4.13 (OK)
<br>
autoconf (GNU Autoconf) 2.63 (Need: 2.65, NOK)
<br>
automake (GNU automake) 1.11.1 (OK)
<br>
ltmain.sh (GNU libtool) 2.2.6b (OK)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 22, 2011, at 9:12 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI volks,
</span><br>
<span class="quotelev2">&gt;&gt; currently I have a problem by building the version 1.5.3 of OpenMPI on
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Linux 6.0 systems, which seem vor me to be a configuration
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After the configure run (which seem to terminate without error code),
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;gmake all&quot; stage produces errors and exits.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Typical is the output below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fancy: the 1.4.3 version on same computer can be build with no special
</span><br>
<span class="quotelev2">&gt;&gt; trouble. Both the 1.4.3 and 1.5.3 versions can be build on other
</span><br>
<span class="quotelev2">&gt;&gt; computer running CentOS 5.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In each case I build 16 versions at all (4 compiler * 32bit/64bit *
</span><br>
<span class="quotelev2">&gt;&gt; support for multithreading ON/OFF). The same error arise in all 16 versions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone give a hint about how to avoid this issue? Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some logs and configure are downloadable here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD">https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The configure line is in RUNME.sh, the
</span><br>
<span class="quotelev2">&gt;&gt; logs of configure and build stage in log_* files; I also attached the
</span><br>
<span class="quotelev2">&gt;&gt; config.log file and the configure itself (which is the standard from the
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.3 release).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ######################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd . &amp;&amp; /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/pk224850/linuxc2_11254/openmpi-1.5.3mt_linux64_gcc/config/missing
</span><br>
<span class="quotelev2">&gt;&gt; --run aclocal-1.11 -I config
</span><br>
<span class="quotelev2">&gt;&gt; sh: config/ompi_get_version.sh: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/m4: esyscmd subprocess failed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;last message repeated 12x&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not
</span><br>
<span class="quotelev2">&gt;&gt; m4_defun'd
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:37: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: the top level
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: warning: AC_COMPILE_IFELSE was called before
</span><br>
<span class="quotelev2">&gt;&gt; AC_USE_SYSTEM_EXTENSIONS
</span><br>
<span class="quotelev2">&gt;&gt; ../../lib/autoconf/specific.m4:386: AC_USE_SYSTEM_EXTENSIONS is expanded
</span><br>
<span class="quotelev2">&gt;&gt; from...
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:152:
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_SETUP_CORE_AFTER_C99 is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; ../../lib/m4sugar/m4sh.m4:505: AS_IF is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:22: HWLOC_SETUP_CORE is
</span><br>
<span class="quotelev2">&gt;&gt; expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/paffinity/hwloc/configure.m4:40: MCA_paffinity_hwloc_CONFIG is
</span><br>
<span class="quotelev2">&gt;&gt; expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:540: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded
</span><br>
<span class="quotelev2">&gt;&gt; from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:326: MCA_CONFIGURE_FRAMEWORK is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_mca.m4:247: MCA_CONFIGURE_PROJECT is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:953: warning: AC_RUN_IFELSE was called before
</span><br>
<span class="quotelev2">&gt;&gt; AC_USE_SYSTEM_EXTENSIONS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16973/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Previous message:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>In reply to:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16974.php">Jeff Squyres: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
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
