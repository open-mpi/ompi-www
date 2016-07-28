<?
$subject_val = "Re: [OMPI users] Cofigure(?) problem building /1.5.3	on	ScientificLinux6.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 09:30:07 2011" -->
<!-- isoreceived="20111209143007" -->
<!-- sent="Fri, 09 Dec 2011 15:29:59 +0100" -->
<!-- isosent="20111209142959" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cofigure(?) problem building /1.5.3	on	ScientificLinux6.0" -->
<!-- id="4EE21B67.4030608_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E29CDF4.9080603_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cofigure(?) problem building /1.5.3	on	ScientificLinux6.0<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 09:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gus, Ralph, Jeff
<br>
<p>a very late answer for this - just found it in my mailbox.
<br>
<p><span class="quotelev1">&gt; Would &quot;cp -rp&quot; help?
</span><br>
<span class="quotelev1">&gt; (To preserve time stamps, instead of &quot;cp -r&quot;.)
</span><br>
<p>Yes, the root of the evil were the time stamps. 'cp -a' is the magic 
<br>
wand. Many thanks for your help, and I should wear sackcloth and 
<br>
ashes... :-/
<br>
<p>Best,
<br>
<p>Paul
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, since 1.2.8 here I build 5, sometimes more versions,
</span><br>
<span class="quotelev1">&gt; all from the same tarball, but on separate build directories,
</span><br>
<span class="quotelev1">&gt; as Jeff suggests.
</span><br>
<span class="quotelev1">&gt; [VPATH] Works for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah -- Ralph pointed out the relevant line to me in your first mail 
</span><br>
<span class="quotelev2">&gt;&gt; that I initially missed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In each case I build 16 versions at all (4 compiler * 32bit/64bit *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support for multithreading ON/OFF). The same error arise in all 16 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps you should just expand the tarball once and then do VPATH 
</span><br>
<span class="quotelev2">&gt;&gt; builds...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tar xf openmpi-1.5.3.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt; cd openmpi-1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mkdir build-gcc
</span><br>
<span class="quotelev2">&gt;&gt; cd build-gcc
</span><br>
<span class="quotelev2">&gt;&gt; ../configure ........blah..........
</span><br>
<span class="quotelev2">&gt;&gt; make -j 4
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt; cd ..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mkdir build-icc
</span><br>
<span class="quotelev2">&gt;&gt; ../configure CC=icc CXX=icpc FC=ifort F77=ifort ......blah.....
</span><br>
<span class="quotelev2">&gt;&gt; make -j 4
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt; cd ..
</span><br>
<span class="quotelev2">&gt;&gt; ....etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This allows you to have one set of source and have N different builds 
</span><br>
<span class="quotelev2">&gt;&gt; from it.  Open MPI uses the GNU Autotools correctly to support this 
</span><br>
<span class="quotelev2">&gt;&gt; kind of build pattern.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 22, 2011, at 2:37 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your RUNME script is a *very* strange way to build Open MPI.  It 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starts with a massive copy:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cp -r /home/pk224850/OpenMPI/openmpi-1.5.3/AUTHORS 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/pk224850/OpenMPI/openmpi-1.5.3/CMakeLists.txt &lt;...much 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snipped...&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why are you doing this kind of copy?  I suspect that the GNU 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autotools' timestamps are getting all out of whack when you do this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kind of copy, and therefore when you run &quot;configure&quot;, it tries to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; re-autogen itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To be clear: when you expand OMPI from a tarball, you shouldn't need 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the GNU Autotools installed at all -- the tarball is pre-bootstrapped 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly to avoid you needing to use the Autotools (much less any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific version of the Autotools).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect that if you do this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar xf openmpi-1.5.3.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd openmpi-1.5.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure ....etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything will work just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 22, 2011, at 11:12 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear OpenMPI volks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently I have a problem by building the version 1.5.3 of OpenMPI on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scientific Linux 6.0 systems, which seem vor me to be a configuration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After the configure run (which seem to terminate without error code),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;gmake all&quot; stage produces errors and exits.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Typical is the output below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fancy: the 1.4.3 version on same computer can be build with no special
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trouble. Both the 1.4.3 and 1.5.3 versions can be build on other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computer running CentOS 5.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In each case I build 16 versions at all (4 compiler * 32bit/64bit *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support for multithreading ON/OFF). The same error arise in all 16 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can someone give a hint about how to avoid this issue? Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best wishes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some logs and configure are downloadable here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD">https://gigamove.rz.rwth-aachen.de/d/id/2jM6MEa2nveJJD</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The configure line is in RUNME.sh, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logs of configure and build stage in log_* files; I also attached the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config.log file and the configure itself (which is the standard from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.5.3 release).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ######################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd . &amp;&amp; /bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/pk224850/linuxc2_11254/openmpi-1.5.3mt_linux64_gcc/config/missing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --run aclocal-1.11 -I config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sh: config/ompi_get_version.sh: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/m4: esyscmd subprocess failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;last message repeated 12x&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure.ac:953: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; m4_defun'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:37: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure.ac:953: the top level
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure.ac:953: warning: AC_COMPILE_IFELSE was called before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AC_USE_SYSTEM_EXTENSIONS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../lib/autoconf/specific.m4:386: AC_USE_SYSTEM_EXTENSIONS is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expanded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:152:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HWLOC_SETUP_CORE_AFTER_C99 is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../lib/m4sugar/m4sh.m4:505: AS_IF is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4:22: HWLOC_SETUP_CORE is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/mca/paffinity/hwloc/configure.m4:40: MCA_paffinity_hwloc_CONFIG is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:540: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:326: MCA_CONFIGURE_FRAMEWORK is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config/ompi_mca.m4:247: MCA_CONFIGURE_PROJECT is expanded from...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure.ac:953: warning: AC_RUN_IFELSE was called before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AC_USE_SYSTEM_EXTENSIONS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17916/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Previous message:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16976.php">Gus Correa: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on	ScientificLinux6.0"</a>
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
