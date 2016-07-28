<?
$subject_val = "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 16:59:04 2009" -->
<!-- isoreceived="20090113215904" -->
<!-- sent="Tue, 13 Jan 2009 16:58:57 -0500" -->
<!-- isosent="20090113215857" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30" -->
<!-- id="8CEEDC21-3FF2-47DF-B592-44C446244E7F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496D0820.8050001_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 16:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5150.php">Jeff Squyres: "Re: [OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>Previous message:</strong> <a href="5148.php">Paul H. Hargrove: "[OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>In reply to:</strong> <a href="5147.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5200.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<li><strong>Reply:</strong> <a href="5200.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>Thanks for noticing the Elan problem. It appears we miss one patch in  
<br>
the 1.3 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/20122">https://svn.open-mpi.org/trac/ompi/changeset/20122</a>). I'll  
<br>
fill a CMR asap.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 13, 2009, at 16:31 , Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Since it looks like you guys are very close to release, I just  
</span><br>
<span class="quotelev1">&gt; grabbed the 1.3rc4 tarball to give it a spin.
</span><br>
<span class="quotelev1">&gt; Unfortunately, the elan BTL is not building:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=&lt;whatever&gt; CC=&lt;path to gcc-4.3.2&gt; CXX=&lt;path  
</span><br>
<span class="quotelev1">&gt; to g++-4.3.2&gt; FC=&lt;path to gfortran-4.3.2&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Making all in mca/btl/elan
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/pcp1/phargrov/OpenMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc4/BLD/ompi/mca/btl/elan'
</span><br>
<span class="quotelev1">&gt; depbase=`echo btl_elan.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt;       /bin/sh ../../../../libtool --tag=CC   --mode=compile /usr/ 
</span><br>
<span class="quotelev1">&gt; local/pkg/gcc-4.3.2/bin/gcc -DHAVE_CONFIG_H -I. -I../../../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/elan -I../../../../opal/include -I../../../../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../ompi/include -I../../../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa   -I../../../../.. -I../../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../../opal/include -I../../../../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../ompi/include    -O3 -DNDEBUG -finline-functions -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -pthread -fvisibility=hidden -MT btl_elan.lo -MD -MP  
</span><br>
<span class="quotelev1">&gt; -MF $depbase.Tpo -c -o btl_elan.lo ../../../../../ompi/mca/btl/elan/ 
</span><br>
<span class="quotelev1">&gt; btl_elan.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;       mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /usr/local/pkg/gcc-4.3.2/bin/gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I../../../../../ompi/mca/btl/elan -I../../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../ 
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/linux/plpa/src/libplpa -I../../../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../.. -I../../../../../opal/include -I../../../../../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../../ompi/include -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT  
</span><br>
<span class="quotelev1">&gt; btl_elan.lo -MD -MP -MF .deps/btl_elan.Tpo -c ../../../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; mca/btl/elan/btl_elan.c  -fPIC -DPIC -o .libs/btl_elan.o
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/qsnet/fence.h:116,
</span><br>
<span class="quotelev1">&gt;                from /usr/include/elan3/elan3.h:42,
</span><br>
<span class="quotelev1">&gt;                from ../../../../../ompi/mca/btl/elan/btl_elan.h:34,
</span><br>
<span class="quotelev1">&gt;                from ../../../../../ompi/mca/btl/elan/btl_elan.c:18:
</span><br>
<span class="quotelev1">&gt; /usr/include/asm/bitops.h:333:2: warning: #warning This includefile  
</span><br>
<span class="quotelev1">&gt; is not available on all architectures.
</span><br>
<span class="quotelev1">&gt; /usr/include/asm/bitops.h:334:2: warning: #warning Using kernel  
</span><br>
<span class="quotelev1">&gt; headers in userspace.
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c: In function  
</span><br>
<span class="quotelev1">&gt; 'mca_btl_elan_add_procs':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:167: error:  
</span><br>
<span class="quotelev1">&gt; 'ELAN_TPORT_USERCOPY_DISABLE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: (Each  
</span><br>
<span class="quotelev1">&gt; undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: for each  
</span><br>
<span class="quotelev1">&gt; function it appears in.)
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c: In function  
</span><br>
<span class="quotelev1">&gt; 'mca_btl_elan_get':
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:551: warning: cast to  
</span><br>
<span class="quotelev1">&gt; pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make[2]: *** [btl_elan.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/pcp1/phargrov/OpenMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc4/BLD/ompi/mca/btl/elan'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/pcp1/phargrov/OpenMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3rc4/BLD/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ rpm -qif /usr/include/qsnet       Name        : qsnet- 
</span><br>
<span class="quotelev1">&gt; headers                Relocations: (not relocateable)
</span><br>
<span class="quotelev1">&gt; Version     : 4.30qsnet                         Vendor: (none)
</span><br>
<span class="quotelev1">&gt; Release     : 0                             Build Date: Mon 31 Jan  
</span><br>
<span class="quotelev1">&gt; 2005 07:36:45 AM PST
</span><br>
<span class="quotelev1">&gt; Install date: Mon 13 Mar 2006 04:37:36 PM PST      Build Host: pingu
</span><br>
<span class="quotelev1">&gt; Group       : Development/System            Source RPM: qsnet- 
</span><br>
<span class="quotelev1">&gt; headers-4.30qsnet-0.src.rpm
</span><br>
<span class="quotelev1">&gt; Size        : 608924                           License: GPL
</span><br>
<span class="quotelev1">&gt; Signature   : (none)
</span><br>
<span class="quotelev1">&gt; Summary     : The QsNet header files for the qsnet Linux kernel.
</span><br>
<span class="quotelev1">&gt; Description :
</span><br>
<span class="quotelev1">&gt; The headers package contains the QsNet kernel headers which are
</span><br>
<span class="quotelev1">&gt; required by library programmers to use the QsNet hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I couldn't find any info in the README about minimum supported  
</span><br>
<span class="quotelev1">&gt; version of qsnet.  However, I did notice a cut-and-paste error in  
</span><br>
<span class="quotelev1">&gt; the following text in README (&quot;InfiniPath&quot; should be &quot;Elan&quot;):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-elan=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt; Specify the directory where the Quadrics Elan library and header
</span><br>
<span class="quotelev1">&gt; files are located.  This option is generally only necessary if the
</span><br>
<span class="quotelev1">&gt; InfiniPath headers and libraries are not in default compiler/linker
</span><br>
<span class="quotelev1">&gt; search paths.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry not to have done any testing earlier than today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory
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
<li><strong>Next message:</strong> <a href="5150.php">Jeff Squyres: "Re: [OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>Previous message:</strong> <a href="5148.php">Paul H. Hargrove: "[OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>In reply to:</strong> <a href="5147.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5200.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<li><strong>Reply:</strong> <a href="5200.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
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
