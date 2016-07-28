<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 23 12:46:01 2008" -->
<!-- isoreceived="20080223174601" -->
<!-- sent="Sat, 23 Feb 2008 12:45:39 -0500" -->
<!-- isosent="20080223174539" -->
<!-- name="Swamy Kandadai" -->
<!-- email="swamy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target" -->
<!-- id="OF6CC661E1.AFB50AC4-ON852573F8.00616AC4-852573F8.0061A887_at_us.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFFA70C9C6.E21089F2-ONC12573F8.00038BEF-C12573F8.0052E13E_at_de.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target<br>
<strong>From:</strong> Swamy Kandadai (<em>swamy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-23 12:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>In reply to:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5081.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mathias:
<br>
<p>I built on AIX on POWER pltform using the following build script and it
<br>
worked:
<br>
<p>#!/bin/sh
<br>
export OBJECT_MODE=64
<br>
<p>&nbsp;export CC=xlc_r
<br>
&nbsp;export CXX=xlC_r
<br>
&nbsp;export F77=xlf_r
<br>
&nbsp;export FC=xlf90_r
<br>
<p>&nbsp;export CFLAGS=&quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -q64
<br>
-DHAVE_SYS_TYPES_H=1&quot;
<br>
&nbsp;export CXXFLAGS=&quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -q64&quot;
<br>
&nbsp;export FFLAGS=&quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -q64&quot;
<br>
&nbsp;export FCFLAGS=&quot;-qthreaded -O3 -qmaxmem=-1 -qarch=pwr5x -qtune=pwr5 -q64&quot;
<br>
<p>&nbsp;./configure --prefix=/vol/swamy/OpenMPI/AIX --disable-shared
<br>
--enable-static LDFLAGS=&quot;-Wl,-brtl&quot; --with-loadleveler=/usr/lpp/LoadL/full
<br>
<p>Please give a try. My build is under
<br>
/vol/swamy/OpenMPI/AIX.
<br>
<p>Thanks
<br>
Swamy
<br>
<p>Dr. Swamy N. Kandadai
<br>
IBM Senior Certified Executive IT Specialist
<br>
HPC Benchmark Center
<br>
System &amp; Technology Group, Poughkeepsie, NY
<br>
Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
<br>
swamy_at_[hidden]
<br>
<a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
<br>
<p><p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mathias PUETZ                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;mpuetz_at_[hidden]                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m&gt;                                                         To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                  users_at_[hidden]                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces_at_ope                                          cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n-mpi.org                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[OMPI users] OpenMPI 1.2.5          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;02/23/2008 10:05          configure bug for POWERPC64 target  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AM                                                            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mpi.o                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rg&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p><p>Hi,
<br>
<p>I attempted to build OpenMPI-1.2.5 on a POWER5/AIX 5.3 platform.
<br>
I know this isn't officially supported, but I report the bug anyway
<br>
(otherwise it'll never get chance to be supported, right ?).
<br>
<p>I started configure with
<br>
<p>./configure CC=&quot;xlc -q64&quot; CXX=&quot;xlc++ -q64&quot; F77=&quot;xlf -q64&quot; FC=&quot;xlf90 -q64&quot;
<br>
NM=&quot;nm -X64&quot; AR=&quot;ar -X64&quot; --disable-shared --enable-static
<br>
--prefix=/usr/local/openmpi
<br>
<p>to build with IBM XL compilers in 64 bit mode (-q64).
<br>
<p>Configure completed to the end, however it printed the following status
<br>
about atomic operations in the config.log file:
<br>
<p>configure:26189: checking for pre-built assembly file
<br>
configure:26206: result: no (not in asm-data)
<br>
configure:26214: checking whether possible to generate assembly file
<br>
configure:26219: perl /vol/ctt/mpuetz/openmpi-1.2.5
<br>
/opal/asm/generate-asm.pl POWERPC64 aix-.csect .text[PR]-.globl-:-.-\
<br>
L--0-0-0-1-0 /vol/ctt/mpuetz/openmpi-1.2.5/opal/asm/base
<br>
/vol/ctt/mpuetz/openmpi-1.2.5/opal/asm/generated/atomic-local.\
<br>
s &gt;conftest.out 2&gt;&amp;1
<br>
configure:26222: $? = 2
<br>
Could not open .text[PR]-.globl-:-.-L--0-0-0-1-0/POWERPC64.asm: No such
<br>
file or directory
<br>
configure:26232: result: failed
<br>
configure:26234: WARNING: Could not build atomic operations assembly file.
<br>
configure:26236: WARNING: There will be no atomic operations for this
<br>
build.
<br>
configure:26254: checking for atomic assembly filename
<br>
configure:26257: result: none
<br>
<p>Thus configure fails to find the
<br>
./opal/asm/generated/atomic-powerpc64-aix.s file
<br>
which is definitely present. In the end OpenMPI fails to build because of
<br>
missing
<br>
atomic functions in the opal library.
<br>
<p>I inspected the configure script for the test in &quot;configure:26206: result:
<br>
no (not in asm-data)&quot;
<br>
which is obviously failing:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if grep &quot;$ompi_cv_asm_arch&quot; &quot;${top_ompi_srcdir}/opal/asm/asm-data.txt&quot;
<br>
| $FGREP &quot;$ompi_cv_asm_format&quot; &gt;conftest.out\
<br>
&nbsp;2&gt;&amp;1 ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_file=&quot;`cut -f3 conftest.out`&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test ! &quot;$ompi_cv_asm_file&quot; = &quot;&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_file=&quot;atomic-${ompi_cv_asm_file}.s&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -f
<br>
&quot;${top_ompi_srcdir}/opal/asm/generated/${ompi_cv_asm_file}&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ echo &quot;$as_me:$LINENO: result: yes ($ompi_cv_asm_file)&quot;
<br>
<span class="quotelev1">&gt;&amp;5
</span><br>
echo &quot;${ECHO_T}yes ($ompi_cv_asm_file)&quot; &gt;&amp;6; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ echo &quot;$as_me:$LINENO: result: no ($ompi_cv_asm_file not
<br>
found)&quot; &gt;&amp;5
<br>
echo &quot;${ECHO_T}no ($ompi_cv_asm_file not found)&quot; &gt;&amp;6; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_cv_asm_file=&quot;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ echo &quot;$as_me:$LINENO: result: no (not in asm-data)&quot; &gt;&amp;5
<br>
echo &quot;${ECHO_T}no (not in asm-data)&quot; &gt;&amp;6; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>ompi_cv_asm_arch has the value &quot;POWERPC64&quot;.
<br>
The value determined earlier for ompi_cv_asm_format = &quot;aix-.csect
<br>
.text[PR]-.globl-:-.-L--0-0-0-1-0&quot;.
<br>
This asm_format is not found in the standard asm-data.txt file which reads
<br>
for POWERPC64:
<br>
<p>aix-.csect .text[PR]-.globl-:-.-L--0-1-0-1-0
<br>
<p>By a single 1 that stands for align_log.
<br>
<p>Then configure continues to make an attempt to generate an assembly file on
<br>
the fly,
<br>
This test is buggy in a single line:
<br>
<p>ompi_try='$PERL $top_ompi_srcdir/opal/asm/generate-asm.pl $ompi_cv_asm_arch
<br>
$ompi_cv_asm_format $top_ompi_srcdir/opal/asm/base $top_o\
<br>
mpi_builddir/opal/asm/generated/$ompi_cv_asm_file &gt;conftest.out 2&gt;&amp;1'
<br>
<p>where $ompi_cv_asm_format should be enclosed in double quotes &quot;&quot;,
<br>
because the format string may contain a blanks (at least in the AIX case it
<br>
does),
<br>
Hence all tests fail, no atomic asm source code is generated and the whole
<br>
build fails.
<br>
<p>1. Could you please fix the bug above in the configure script ?
<br>
<p>2. Could someone explain, why configure might determine a different
<br>
ompi_cv_asm_format
<br>
&nbsp;&nbsp;&nbsp;&nbsp;than stated in the asm-data.txt database ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Maybe the meaning of the cryptic assmebler format string is explained
<br>
somewhere.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;If so, could someone point me to the explanation ?
<br>
<p>Viele Gr&#252;sse / Best regards,
<br>
Mathias P&#252;tz
<br>
<p>Deep Computing - Strategic Growth Business
<br>
IBM Systems &amp; Technology Group
<br>
<p>e-mail:  mpuetz_at_[hidden]
<br>
mobile: + 49-(0)160-7120602
<br>
fax:         + 49-(0)6131-84-6660
<br>
<p>Anschrift:
<br>
&nbsp;IBM Deutschland GmbH
<br>
&nbsp;Department B513
<br>
&nbsp;Hechtsheimer Str. 2 / Building 12
<br>
&nbsp;55131 Mainz
<br>
&nbsp;Germany
<br>
<p>IBM Deutschland GmbH
<br>
Vorsitzender des Aufsichtsrats: Hans Ulrich Maerki
<br>
Gesch&#228;ftsf&#252;hrung: Martin Jetter (Vorsitzender), Christian Diedrich,
<br>
Christoph Grandpierre, Matthias Hartmann, Thomas Fell, Michael Diemer
<br>
Sitz der Gesellschaft: Stuttgart
<br>
Registergericht: Amtsgericht Stuttgart, HRB 14562 WEEE-Reg.-Nr. DE 99369940
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<p><p>


<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5071/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5071/pic31051.gif" alt="pic31051.gif">
<!-- attachment="pic31051.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5071/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>In reply to:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5081.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
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
