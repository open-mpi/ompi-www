<?
$subject_val = "[OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 16:31:20 2009" -->
<!-- isoreceived="20090113213120" -->
<!-- sent="Tue, 13 Jan 2009 13:31:12 -0800" -->
<!-- isosent="20090113213112" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30" -->
<!-- id="496D0820.8050001_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 16:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5148.php">Paul H. Hargrove: "[OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>Previous message:</strong> <a href="5146.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<li><strong>Reply:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since it looks like you guys are very close to release, I just grabbed 
<br>
the 1.3rc4 tarball to give it a spin.
<br>
Unfortunately, the elan BTL is not building:
<br>
<p>$ ../configure --prefix=&lt;whatever&gt; CC=&lt;path to gcc-4.3.2&gt; CXX=&lt;path to 
<br>
g++-4.3.2&gt; FC=&lt;path to gfortran-4.3.2&gt;
<br>
...
<br>
$ make
<br>
...
<br>
Making all in mca/btl/elan
<br>
make[2]: Entering directory 
<br>
`/home/pcp1/phargrov/OpenMPI/openmpi-1.3rc4/BLD/ompi/mca/btl/elan'
<br>
depbase=`echo btl_elan.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=compile 
<br>
/usr/local/pkg/gcc-4.3.2/bin/gcc -DHAVE_CONFIG_H -I. 
<br>
-I../../../../../ompi/mca/btl/elan -I../../../../opal/include 
<br>
-I../../../../orte/include -I../../../../ompi/include 
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa   
<br>
-I../../../../.. -I../../../.. -I../../../../../opal/include 
<br>
-I../../../../../orte/include -I../../../../../ompi/include    -O3 
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -pthread 
<br>
-fvisibility=hidden -MT btl_elan.lo -MD -MP -MF $depbase.Tpo -c -o 
<br>
btl_elan.lo ../../../../../ompi/mca/btl/elan/btl_elan.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  /usr/local/pkg/gcc-4.3.2/bin/gcc -DHAVE_CONFIG_H -I. 
<br>
-I../../../../../ompi/mca/btl/elan -I../../../../opal/include 
<br>
-I../../../../orte/include -I../../../../ompi/include 
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../../.. 
<br>
-I../../../.. -I../../../../../opal/include 
<br>
-I../../../../../orte/include -I../../../../../ompi/include -O3 -DNDEBUG 
<br>
-finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT 
<br>
btl_elan.lo -MD -MP -MF .deps/btl_elan.Tpo -c 
<br>
../../../../../ompi/mca/btl/elan/btl_elan.c  -fPIC -DPIC -o .libs/btl_elan.o
<br>
In file included from /usr/include/qsnet/fence.h:116,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/include/elan3/elan3.h:42,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../../ompi/mca/btl/elan/btl_elan.h:34,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../../ompi/mca/btl/elan/btl_elan.c:18:
<br>
/usr/include/asm/bitops.h:333:2: warning: #warning This includefile is 
<br>
not available on all architectures.
<br>
/usr/include/asm/bitops.h:334:2: warning: #warning Using kernel headers 
<br>
in userspace.
<br>
../../../../../ompi/mca/btl/elan/btl_elan.c: In function 
<br>
'mca_btl_elan_add_procs':
<br>
../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: 
<br>
'ELAN_TPORT_USERCOPY_DISABLE' undeclared (first use in this function)
<br>
../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: (Each undeclared 
<br>
identifier is reported only once
<br>
../../../../../ompi/mca/btl/elan/btl_elan.c:167: error: for each 
<br>
function it appears in.)
<br>
../../../../../ompi/mca/btl/elan/btl_elan.c: In function 'mca_btl_elan_get':
<br>
../../../../../ompi/mca/btl/elan/btl_elan.c:551: warning: cast to 
<br>
pointer from integer of different size
<br>
make[2]: *** [btl_elan.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/home/pcp1/phargrov/OpenMPI/openmpi-1.3rc4/BLD/ompi/mca/btl/elan'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/home/pcp1/phargrov/OpenMPI/openmpi-1.3rc4/BLD/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>$ rpm -qif /usr/include/qsnet       
<br>
Name        : qsnet-headers                Relocations: (not relocateable)
<br>
Version     : 4.30qsnet                         Vendor: (none)
<br>
Release     : 0                             Build Date: Mon 31 Jan 2005 
<br>
07:36:45 AM PST
<br>
Install date: Mon 13 Mar 2006 04:37:36 PM PST      Build Host: pingu
<br>
Group       : Development/System            Source RPM: 
<br>
qsnet-headers-4.30qsnet-0.src.rpm
<br>
Size        : 608924                           License: GPL
<br>
Signature   : (none)
<br>
Summary     : The QsNet header files for the qsnet Linux kernel.
<br>
Description :
<br>
The headers package contains the QsNet kernel headers which are
<br>
required by library programmers to use the QsNet hardware.
<br>
<p><p>I couldn't find any info in the README about minimum supported version 
<br>
of qsnet.  However, I did notice a cut-and-paste error in the following 
<br>
text in README (&quot;InfiniPath&quot; should be &quot;Elan&quot;):
<br>
<p>--with-elan=&lt;directory&gt;
<br>
&nbsp;&nbsp;Specify the directory where the Quadrics Elan library and header
<br>
&nbsp;&nbsp;files are located.  This option is generally only necessary if the
<br>
&nbsp;&nbsp;InfiniPath headers and libraries are not in default compiler/linker
<br>
&nbsp;&nbsp;search paths.
<br>
<p><p>Sorry not to have done any testing earlier than today.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5148.php">Paul H. Hargrove: "[OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>Previous message:</strong> <a href="5146.php">Bogdan Costescu: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<li><strong>Reply:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
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
