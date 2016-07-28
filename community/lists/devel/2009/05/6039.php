<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 14:41:39 2009" -->
<!-- isoreceived="20090514184139" -->
<!-- sent="Thu, 14 May 2009 12:41:34 -0600" -->
<!-- isosent="20090514184134" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="4A0C65DE.4090809_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A0C6511.4070401_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Bryan Lally (<em>lally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 14:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6040.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6038.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6037.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6040.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6040.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Argh.  This time with attachment attached ...
<br>
<p>Bryan Lally wrote:
<br>
<span class="quotelev1">&gt; While we're talking about build failures ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't been able to build any of the 1.3.x releases on my OS X 
</span><br>
<span class="quotelev1">&gt; machines.  OS X 10.5.6 (Leopard) on Intel macs.  Attached is the 
</span><br>
<span class="quotelev1">&gt; configure command and the failure from last night's development tarball, 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3a1r21223.tar.gz.  1.2.x builds fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     - Bryan
</span><br>
<p><p><pre>
-- 
Bryan Lally, lally_at_[hidden]
505.667.9954
CCS-2
Los Alamos National Laboratory
Los Alamos, New Mexico

</pre>
<p>
./configure                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.3.3x     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-f77                      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-f90                      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-profile
<br>
<p>make
<br>
<p>...
<br>
<p>Making all in tools/orte-iof
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing  -fvisibility=hidden  -export-dynamic   -o orte-iof orte-iof.o ../../../orte/libopen-rte.la -lutil  
<br>
libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -fvisibility=hidden -o orte-iof orte-iof.o  ../../../orte/.libs/libopen-rte.a /Users/lally/Software/openmpi-1.3.3a1r21223/opal/.libs/libopen-pal.a -lutil
<br>
Undefined symbols:
<br>
&nbsp;&nbsp;&quot;_orte_iof&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_iof$non_lazy_ptr in orte-iof.o
<br>
&nbsp;&nbsp;&quot;_orte_routed&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_routed$non_lazy_ptr in libopen-rte.a(hnp_contact.o)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_routed$non_lazy_ptr in libopen-rte.a(rml_base_contact.o)
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [orte-iof] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6040.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6038.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6037.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6040.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6040.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
