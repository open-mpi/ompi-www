<?
$subject_val = "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 09:44:08 2009" -->
<!-- isoreceived="20090305144408" -->
<!-- sent="Thu, 05 Mar 2009 16:43:59 +0200" -->
<!-- isosent="20090305144359" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available" -->
<!-- id="49AFE52F.5070203_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="567E8A6F-A59B-4C24-9B5A-118EC7060B87_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 09:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Previous message:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5583.php">Jeff Squyres: "[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5591.php">Matthias Jurenz: "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1	(rc1)	is available"</a>
<li><strong>Reply:</strong> <a href="5591.php">Matthias Jurenz: "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1	(rc1)	is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adding pointer to OFED bugzilla ticket for more information: 
<br>
<a href="https://bugs.openfabrics.org/show_bug.cgi?id=1537">https://bugs.openfabrics.org/show_bug.cgi?id=1537</a>
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; VT guys --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like we still have a compile bug in OMPI 1.3.1rc4...  See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you think you can get a fix ASAP for OMPI 1.3.1final?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *From: *&quot;PN&quot; &lt;poknam_at_[hidden] &lt;mailto:poknam_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Date: *March 5, 2009 12:51:28 AM EST
</span><br>
<span class="quotelev2">&gt;&gt; *To: *&quot;Tziporet Koren&quot; &lt;tziporet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:tziporet_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Cc: *&lt;ewg_at_[hidden] &lt;mailto:ewg_at_[hidden]&gt;&gt;, 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;general_at_[hidden] &lt;mailto:general_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:** Re: [ofa-general] OFED 1.4.1 is available*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a build error of OFED-1.4.1-rc1 under CentOS 5.2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; Build openmpi_gcc RPM
</span><br>
<span class="quotelev2">&gt;&gt; Running  rpmbuild --rebuild  --define '_topdir /var/tmp/OFED_topdir' 
</span><br>
<span class="quotelev2">&gt;&gt; --define 'dist %{nil}' --target x86_64 --define '_name openmpi_gcc' 
</span><br>
<span class="quotelev2">&gt;&gt; --define 'mpi_selector /usr/bin/mpi-selector' --define 
</span><br>
<span class="quotelev2">&gt;&gt; 'use_mpi_selector 1' --define 'install_shell_scripts 1' --define 
</span><br>
<span class="quotelev2">&gt;&gt; 'shell_scripts_basename mpivars' --define '_usr /usr' --define 'ofed 
</span><br>
<span class="quotelev2">&gt;&gt; 0' --define '_prefix /usr/mpi/gcc/openmpi-1.3.1rc4' --define 
</span><br>
<span class="quotelev2">&gt;&gt; '_defaultdocdir /usr/mpi/gcc/openmpi-1.3.1rc4' --define '_mandir 
</span><br>
<span class="quotelev2">&gt;&gt; %{_prefix}/share/man' --define 'mflags -j 4' --define 
</span><br>
<span class="quotelev2">&gt;&gt; 'configure_options   --with-openib=/usr 
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib-libdir=/usr/lib64  CC=gcc CXX=g++ F77=gfortran 
</span><br>
<span class="quotelev2">&gt;&gt; FC=gfortran --enable-mpirun-prefix-by-default' --define 
</span><br>
<span class="quotelev2">&gt;&gt; 'use_default_rpm_opt_flags 1' 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/software/packages/ofed/OFED-1.4.1-rc1/OFED-1.4.1-rc1/SRPMS/openmpi-1.3.1rc4-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; Failed to build openmpi RPM
</span><br>
<span class="quotelev2">&gt;&gt; See /tmp/OFED.28377.logs/openmpi.rpmbuild.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In /tmp/OFED.28377.logs/openmpi.rpmbuild.log:
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib 
</span><br>
<span class="quotelev2">&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE 
</span><br>
<span class="quotelev2">&gt;&gt; -DBINDIR=\&quot;/usr/mpi/gcc/openmpi-1.3.1rc4/bin\&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;/usr/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG  -DVT_MEMHOOK 
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions 
</span><br>
<span class="quotelev2">&gt;&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT 
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap_helper.o -MD -MP -MF .deps/vt_iowrap_helper.Tpo -c -o 
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap_helper.o vt_iowrap_helper.c
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib 
</span><br>
<span class="quotelev2">&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE 
</span><br>
<span class="quotelev2">&gt;&gt; -DBINDIR=\&quot;/usr/mpi/gcc/openmpi-1.3.1rc4/bin\&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;/usr/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG  -DVT_MEMHOOK 
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions 
</span><br>
<span class="quotelev2">&gt;&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT 
</span><br>
<span class="quotelev2">&gt;&gt; rfg_regions.o -MD -MP -MF .deps/rfg_regions.Tpo -c -o rfg_regions.o 
</span><br>
<span class="quotelev2">&gt;&gt; rfg_regions.c
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c:1242: error: expected declaration specifiers or '...' 
</span><br>
<span class="quotelev2">&gt;&gt; before numeric constant
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; error: Bad exit status from /var/tmp/rpm-tmp.40739 (%build)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RPM build errors:
</span><br>
<span class="quotelev2">&gt;&gt;     user jsquyres does not exist - using root
</span><br>
<span class="quotelev2">&gt;&gt;     group eng10 does not exist - using root
</span><br>
<span class="quotelev2">&gt;&gt;     user jsquyres does not exist - using root
</span><br>
<span class="quotelev2">&gt;&gt;     group eng10 does not exist - using root
</span><br>
<span class="quotelev2">&gt;&gt;     Bad exit status from /var/tmp/rpm-tmp.40739 (%build)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error seems similar to 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5230.php">http://www.open-mpi.org/community/lists/devel/2009/01/5230.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; PN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/3/5 Tziporet Koren &lt;tziporet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:tziporet_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     OFED-1.4.1-rc1 release is available on
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _<a href="http://www.openfabrics.org/downloads/OFED/ofed-1.4.1/OFED-1.4.1-rc1.tgz">http://www.openfabrics.org/downloads/OFED/ofed-1.4.1/OFED-1.4.1-rc1.tgz</a>_
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     To get BUILD_ID run ofed_info
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Please report any issues in bugzilla
</span><br>
<span class="quotelev2">&gt;&gt;     _<a href="https://bugs.openfabrics.org/">https://bugs.openfabrics.org/</a>_ for OFED 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Vladimir &amp; Tziporet
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Release information:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Linux Operating Systems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL4 up4:  2.6.9-42.ELsmp      *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL4 up5:  2.6.9-55.ELsmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL4 up6:  2.6.9-67.ELsmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL4 up7:        2.6.9-78.ELsmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL5:        2.6.18-8.el5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL5 up1:  2.6.18-53.el5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL5 up2:  2.6.18-92.el5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - RedHat EL5 up3:  2.6.18-128.el5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - OEL 4.5:               2.6.9-55.ELsmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - OEL 5.2:               2.6.18-92.el5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - CentOS 5.2:         2.6.18-92.el5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - Fedora C9:           2.6.25-14.fc9          *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - SLES10:              2.6.16.21-0.8-smp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - SLES10 SP1:       2.6.16.46-0.12-smp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - SLES10 SP1 up1: 2.6.16.53-0.16-smp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - SLES10 SP2:       2.6.16.60-0.21-smp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - SLES11 RC3:    2.6.27.13-1-default
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - OpenSuSE 10.3:   2.6.22.5-31             *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            - kernel.org &lt;<a href="http://kernel.org">http://kernel.org</a>&gt;:            2.6.26 and
</span><br>
<span class="quotelev2">&gt;&gt;     2.6.27
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          * Minimal QA for these versions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Systems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            * x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            * x86
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            * ia64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            * ppc64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Main Changes from OFED-1.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ======================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Added support for RHEL 5.3 and SLES11 RC3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Added RHEL 5.2 backports for NFS/RDMA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Updated MPI packages:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             mvapich-1.1.0-3143
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Open MPI 1.3.1-rc4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Updated bonding package: ib-bonding-0.9.0-38
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Updated opensm version to include critical bug fixes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Fixed RDS iWARP support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Low level drivers updated: ehca, mlx4, cxgb3, nes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Bug fixes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     - Attached kernel git tree changes for details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;&lt;ofa_kernel-1.4_1.4.1-rc1.log&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Tasks that should be completed for RC2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     =============================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     1. High priority bug fixes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2. RHEL 5.2 32 bits compilation issue (due to NFS/RDMA backports)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     3. Open MPI 1.3.1 release
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     4. MVAPICH 1.1.1.minor release with critical bug fixes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     5. OSM release 3.2.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     6. Documentation update
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     general mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     general_at_[hidden] &lt;mailto:general_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     To unsubscribe, please visit
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; general mailing list
</span><br>
<span class="quotelev2">&gt;&gt; general_at_[hidden] &lt;mailto:general_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To unsubscribe, please visit 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Previous message:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5583.php">Jeff Squyres: "[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5591.php">Matthias Jurenz: "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1	(rc1)	is available"</a>
<li><strong>Reply:</strong> <a href="5591.php">Matthias Jurenz: "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1	(rc1)	is available"</a>
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
