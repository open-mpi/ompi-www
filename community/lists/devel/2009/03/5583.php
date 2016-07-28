<?
$subject_val = "[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 07:59:54 2009" -->
<!-- isoreceived="20090305125954" -->
<!-- sent="Thu, 5 Mar 2009 07:59:47 -0500" -->
<!-- isosent="20090305125947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available" -->
<!-- id="567E8A6F-A59B-4C24-9B5A-118EC7060B87_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="92daa7bf0903042151l52d77c20r2440d95c3be49de8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 07:59:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5582.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
<li><strong>Reply:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
VT guys --
<br>
<p>It looks like we still have a compile bug in OMPI 1.3.1rc4...  See  
<br>
below.
<br>
<p>Do you think you can get a fix ASAP for OMPI 1.3.1final?
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;PN&quot; &lt;poknam_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: March 5, 2009 12:51:28 AM EST
</span><br>
<span class="quotelev1">&gt; To: &quot;Tziporet Koren&quot; &lt;tziporet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: &lt;ewg_at_[hidden]&gt;, &lt;general_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [ofa-general] OFED 1.4.1 is available
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a build error of OFED-1.4.1-rc1 under CentOS 5.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; Build openmpi_gcc RPM
</span><br>
<span class="quotelev1">&gt; Running  rpmbuild --rebuild  --define '_topdir /var/tmp/OFED_topdir'  
</span><br>
<span class="quotelev1">&gt; --define 'dist %{nil}' --target x86_64 --define '_name openmpi_gcc'  
</span><br>
<span class="quotelev1">&gt; --define 'mpi_selector /usr/bin/mpi-selector' --define  
</span><br>
<span class="quotelev1">&gt; 'use_mpi_selector 1' --define 'install_shell_scripts 1' --define  
</span><br>
<span class="quotelev1">&gt; 'shell_scripts_basename mpivars' --define '_usr /usr' --define 'ofed  
</span><br>
<span class="quotelev1">&gt; 0' --define '_prefix /usr/mpi/gcc/openmpi-1.3.1rc4' --define  
</span><br>
<span class="quotelev1">&gt; '_defaultdocdir /usr/mpi/gcc/openmpi-1.3.1rc4' --define '_mandir % 
</span><br>
<span class="quotelev1">&gt; {_prefix}/share/man' --define 'mflags -j 4' --define  
</span><br>
<span class="quotelev1">&gt; 'configure_options   --with-openib=/usr --with-openib-libdir=/usr/ 
</span><br>
<span class="quotelev1">&gt; lib64  CC=gcc CXX=g++ F77=gfortran FC=gfortran --enable-mpirun- 
</span><br>
<span class="quotelev1">&gt; prefix-by-default' --define 'use_default_rpm_opt_flags 1' /opt/ 
</span><br>
<span class="quotelev1">&gt; software/packages/ofed/OFED-1.4.1-rc1/OFED-1.4.1-rc1/SRPMS/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1rc4-1.src.rpm
</span><br>
<span class="quotelev1">&gt; Failed to build openmpi RPM
</span><br>
<span class="quotelev1">&gt; See /tmp/OFED.28377.logs/openmpi.rpmbuild.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In /tmp/OFED.28377.logs/openmpi.rpmbuild.log:
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib -I../extlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=\&quot;/usr/mpi/ 
</span><br>
<span class="quotelev1">&gt; gcc/openmpi-1.3.1rc4/bin\&quot; -DDATADIR=\&quot;/usr/mpi/gcc/openmpi-1.3.1rc4/ 
</span><br>
<span class="quotelev1">&gt; share\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector --param=ssp-buffer- 
</span><br>
<span class="quotelev1">&gt; size=4 -m64 -mtune=generic -MT vt_iowrap_helper.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; vt_iowrap_helper.Tpo -c -o vt_iowrap_helper.o vt_iowrap_helper.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib -I../extlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=\&quot;/usr/mpi/ 
</span><br>
<span class="quotelev1">&gt; gcc/openmpi-1.3.1rc4/bin\&quot; -DDATADIR=\&quot;/usr/mpi/gcc/openmpi-1.3.1rc4/ 
</span><br>
<span class="quotelev1">&gt; share\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector --param=ssp-buffer- 
</span><br>
<span class="quotelev1">&gt; size=4 -m64 -mtune=generic -MT rfg_regions.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; rfg_regions.Tpo -c -o rfg_regions.o rfg_regions.c
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1242: error: expected declaration specifiers or '...'  
</span><br>
<span class="quotelev1">&gt; before numeric constant
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev1">&gt; mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/var/tmp/OFED_topdir/BUILD/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1rc4/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/var/tmp/OFED_topdir/BUILD/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1rc4/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/var/tmp/OFED_topdir/BUILD/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1rc4/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/var/tmp/OFED_topdir/BUILD/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1rc4/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/var/tmp/OFED_topdir/BUILD/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.1rc4/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.40739 (%build)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;     user jsquyres does not exist - using root
</span><br>
<span class="quotelev1">&gt;     group eng10 does not exist - using root
</span><br>
<span class="quotelev1">&gt;     user jsquyres does not exist - using root
</span><br>
<span class="quotelev1">&gt;     group eng10 does not exist - using root
</span><br>
<span class="quotelev1">&gt;     Bad exit status from /var/tmp/rpm-tmp.40739 (%build)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error seems similar to <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5230.php">http://www.open-mpi.org/community/lists/devel/2009/01/5230.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; PN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/3/5 Tziporet Koren &lt;tziporet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OFED-1.4.1-rc1 release is available on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfabrics.org/downloads/OFED/ofed-1.4.1/OFED-1.4.1">http://www.openfabrics.org/downloads/OFED/ofed-1.4.1/OFED-1.4.1</a>- 
</span><br>
<span class="quotelev1">&gt; rc1.tgz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To get BUILD_ID run ofed_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please report any issues in bugzilla <a href="https://bugs.openfabrics.org/">https://bugs.openfabrics.org/</a>  
</span><br>
<span class="quotelev1">&gt; for OFED 1.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vladimir &amp; Tziporet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Release information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux Operating Systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL4 up4:  2.6.9-42.ELsmp      *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL4 up5:  2.6.9-55.ELsmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL4 up6:  2.6.9-67.ELsmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL4 up7:        2.6.9-78.ELsmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL5:        2.6.18-8.el5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL5 up1:  2.6.18-53.el5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL5 up2:  2.6.18-92.el5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - RedHat EL5 up3:  2.6.18-128.el5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - OEL 4.5:               2.6.9-55.ELsmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - OEL 5.2:               2.6.18-92.el5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - CentOS 5.2:         2.6.18-92.el5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - Fedora C9:           2.6.25-14.fc9          *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - SLES10:              2.6.16.21-0.8-smp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - SLES10 SP1:       2.6.16.46-0.12-smp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - SLES10 SP1 up1: 2.6.16.53-0.16-smp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - SLES10 SP2:       2.6.16.60-0.21-smp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - SLES11 RC3:    2.6.27.13-1-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - OpenSuSE 10.3:   2.6.22.5-31             *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - kernel.org:            2.6.26 and 2.6.27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      * Minimal QA for these versions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * x86
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * ia64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * ppc64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Main Changes from OFED-1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Added support for RHEL 5.3 and SLES11 RC3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Added RHEL 5.2 backports for NFS/RDMA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Updated MPI packages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mvapich-1.1.0-3143
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Open MPI 1.3.1-rc4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Updated bonding package: ib-bonding-0.9.0-38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Updated opensm version to include critical bug fixes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fixed RDS iWARP support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Low level drivers updated: ehca, mlx4, cxgb3, nes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Bug fixes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Attached kernel git tree changes for details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;ofa_kernel-1.4_1.4.1-rc1.log&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tasks that should be completed for RC2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. High priority bug fixes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. RHEL 5.2 32 bits compilation issue (due to NFS/RDMA backports)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Open MPI 1.3.1 release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. MVAPICH 1.1.1.minor release with critical bug fixes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. OSM release 3.2.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. Documentation update
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; general mailing list
</span><br>
<span class="quotelev1">&gt; general_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; general mailing list
</span><br>
<span class="quotelev1">&gt; general_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5583/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5582.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
<li><strong>Reply:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
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
