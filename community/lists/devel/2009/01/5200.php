<?
$subject_val = "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 18:10:40 2009" -->
<!-- isoreceived="20090114231040" -->
<!-- sent="Wed, 14 Jan 2009 15:10:34 -0800" -->
<!-- isosent="20090114231034" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30" -->
<!-- id="496E70EA.3010802_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8CEEDC21-3FF2-47DF-B592-44C446244E7F_at_eecs.utk.edu" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 18:10:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5201.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5199.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc6 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm that both 1.3rc6 and 1.2.9rc2 now build fine for me.
<br>
<p>-Paul
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for noticing the Elan problem. It appears we miss one patch in 
</span><br>
<span class="quotelev1">&gt; the 1.3 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/20122">https://svn.open-mpi.org/trac/ompi/changeset/20122</a>). I'll 
</span><br>
<span class="quotelev1">&gt; fill a CMR asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2009, at 16:31 , Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since it looks like you guys are very close to release, I just 
</span><br>
<span class="quotelev2">&gt;&gt; grabbed the 1.3rc4 tarball to give it a spin.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, the elan BTL is not building:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ../configure --prefix=&lt;whatever&gt; CC=&lt;path to gcc-4.3.2&gt; CXX=&lt;path 
</span><br>
<span class="quotelev2">&gt;&gt; to g++-4.3.2&gt; FC=&lt;path to gfortran-4.3.2&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; $ make
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/btl/elan
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/home/pcp1/phargrov/OpenMPI/openmpi-1.3rc4/BLD/ompi/mca/btl/elan'
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo btl_elan.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt;       /bin/sh ../../../../libtool --tag=CC   --mode=compile 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/pkg/gcc-4.3.2/bin/gcc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../../ompi/mca/btl/elan -I../../../../opal/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../orte/include -I../../../../ompi/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa   
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../.. -I../../../.. -I../../../../../opal/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../../orte/include -I../../../../../ompi/include    -O3 
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread 
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT btl_elan.lo -MD -MP -MF $depbase.Tpo -c -o 
</span><br>
<span class="quotelev2">&gt;&gt; btl_elan.lo ../../../../../ompi/mca/btl/elan/btl_elan.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt;       mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  /usr/local/pkg/gcc-4.3.2/bin/gcc -DHAVE_CONFIG_H 
</span><br>
<span class="quotelev2">&gt;&gt; -I. -I../../../../../ompi/mca/btl/elan -I../../../../opal/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../orte/include -I../../../../ompi/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../.. -I../../../.. -I../../../../../opal/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../../orte/include -I../../../../../ompi/include -O3 
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -pthread 
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden -MT btl_elan.lo -MD -MP -MF .deps/btl_elan.Tpo -c 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c  -fPIC -DPIC -o 
</span><br>
<span class="quotelev2">&gt;&gt; .libs/btl_elan.o
</span><br>
<span class="quotelev2">&gt;&gt; In file included from /usr/include/qsnet/fence.h:116,
</span><br>
<span class="quotelev2">&gt;&gt;                from /usr/include/elan3/elan3.h:42,
</span><br>
<span class="quotelev2">&gt;&gt;                from ../../../../../ompi/mca/btl/elan/btl_elan.h:34,
</span><br>
<span class="quotelev2">&gt;&gt;                from ../../../../../ompi/mca/btl/elan/btl_elan.c:18:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/asm/bitops.h:333:2: warning: #warning This includefile 
</span><br>
<span class="quotelev2">&gt;&gt; is not available on all architectures.
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/asm/bitops.h:334:2: warning: #warning Using kernel 
</span><br>
<span class="quotelev2">&gt;&gt; headers in userspace.
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c: In function 
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_btl_elan_add_procs':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: 
</span><br>
<span class="quotelev2">&gt;&gt; 'ELAN_TPORT_USERCOPY_DISABLE' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: (Each 
</span><br>
<span class="quotelev2">&gt;&gt; undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: for each 
</span><br>
<span class="quotelev2">&gt;&gt; function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c: In function 
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_btl_elan_get':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/elan/btl_elan.c:551: warning: cast to 
</span><br>
<span class="quotelev2">&gt;&gt; pointer from integer of different size
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [btl_elan.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/home/pcp1/phargrov/OpenMPI/openmpi-1.3rc4/BLD/ompi/mca/btl/elan'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/home/pcp1/phargrov/OpenMPI/openmpi-1.3rc4/BLD/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ rpm -qif /usr/include/qsnet       Name        : 
</span><br>
<span class="quotelev2">&gt;&gt; qsnet-headers                Relocations: (not relocateable)
</span><br>
<span class="quotelev2">&gt;&gt; Version     : 4.30qsnet                         Vendor: (none)
</span><br>
<span class="quotelev2">&gt;&gt; Release     : 0                             Build Date: Mon 31 Jan 
</span><br>
<span class="quotelev2">&gt;&gt; 2005 07:36:45 AM PST
</span><br>
<span class="quotelev2">&gt;&gt; Install date: Mon 13 Mar 2006 04:37:36 PM PST      Build Host: pingu
</span><br>
<span class="quotelev2">&gt;&gt; Group       : Development/System            Source RPM: 
</span><br>
<span class="quotelev2">&gt;&gt; qsnet-headers-4.30qsnet-0.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; Size        : 608924                           License: GPL
</span><br>
<span class="quotelev2">&gt;&gt; Signature   : (none)
</span><br>
<span class="quotelev2">&gt;&gt; Summary     : The QsNet header files for the qsnet Linux kernel.
</span><br>
<span class="quotelev2">&gt;&gt; Description :
</span><br>
<span class="quotelev2">&gt;&gt; The headers package contains the QsNet kernel headers which are
</span><br>
<span class="quotelev2">&gt;&gt; required by library programmers to use the QsNet hardware.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I couldn't find any info in the README about minimum supported 
</span><br>
<span class="quotelev2">&gt;&gt; version of qsnet.  However, I did notice a cut-and-paste error in the 
</span><br>
<span class="quotelev2">&gt;&gt; following text in README (&quot;InfiniPath&quot; should be &quot;Elan&quot;):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --with-elan=&lt;directory&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specify the directory where the Quadrics Elan library and header
</span><br>
<span class="quotelev2">&gt;&gt; files are located.  This option is generally only necessary if the
</span><br>
<span class="quotelev2">&gt;&gt; InfiniPath headers and libraries are not in default compiler/linker
</span><br>
<span class="quotelev2">&gt;&gt; search paths.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry not to have done any testing earlier than today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5201.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5199.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc6 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
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
