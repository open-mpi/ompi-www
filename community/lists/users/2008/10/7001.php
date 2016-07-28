<?
$subject_val = "[OMPI users] Errors compiling OpenMPI 1.2.8 with SUN Studio express (2008/07/10) in 32bit modus";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 10:42:17 2008" -->
<!-- isoreceived="20081016144217" -->
<!-- sent="Thu, 16 Oct 2008 16:42:00 +0200" -->
<!-- isosent="20081016144200" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Errors compiling OpenMPI 1.2.8 with SUN Studio express (2008/07/10) in 32bit modus" -->
<!-- id="48F752B8.7040103_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Errors compiling OpenMPI 1.2.8 with SUN Studio express (2008/07/10) in 32bit modus<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 10:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
<li><strong>Previous message:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We tried to install OpenMPI 1.2.8 on Linux in a couple of versions here 
<br>
(compiler from intel, pgi, studio, gcc - all 64bit and 32bit).
<br>
<p>If we used SUN Studio Express (2008/07/10) and configured to produce 
<br>
32bit library, we got following errors (full log see in file 
<br>
my_makelog_sun32.txt)
<br>
<p>..........
<br>
gmake[2]: Entering directory 
<br>
`/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl/openib'
<br>
source='btl_openib_component.c' object='btl_openib_component.lo' 
<br>
libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=compile cc 
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include 
<br>
-I../../../../orte/include -I../../../../ompi/include 
<br>
-DPKGDATADIR=\&quot;/rwthfs/rz/SW/MPI/openmpi-1.2.8/linux32/studio/share/openmpi\&quot; 
<br>
-I../../../..    -DNDEBUG -O2 -m32  -c -o btl_openib_component.lo 
<br>
btl_openib_component.c
<br>
libtool: compile:  cc -DHAVE_CONFIG_H -I. -I../../../../opal/include 
<br>
-I../../../../orte/include -I../../../../ompi/include 
<br>
-DPKGDATADIR=\&quot;/rwthfs/rz/SW/MPI/openmpi-1.2.8/linux32/studio/share/openmpi\&quot; 
<br>
-I../../../.. -DNDEBUG -O2 -m32 -c btl_openib_component.c  -KPIC -DPIC 
<br>
-o .libs/btl_openib_component.o
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 167: warning: 
<br>
impossible constraint for &quot;%1&quot; asm operand
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 167: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 184: warning: 
<br>
impossible constraint for &quot;%1&quot; asm operand
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 184: warning: 
<br>
parameter in inline asm statement unused: %2
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 103: syntax error before or 
<br>
at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 109: syntax error before or 
<br>
at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 124: syntax error before or 
<br>
at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 135: syntax error before or 
<br>
at: __u64
<br>
.......
<br>
<p><p>This seems for us to be an error on linux headers in file kern-abi.h 
<br>
which includes  linux/types.h which contains this:
<br>
<p><p>#if defined(__GNUC__) &amp;&amp; !defined(__STRICT_ANSI__)
<br>
typedef		__u64		uint64_t;
<br>
typedef		__u64		u_int64_t;
<br>
typedef		__s64		int64_t;
<br>
#endif
<br>
<p><p>So, it looks for us so, that by byilding of openmpi 1.2.8 the SUN Studio 
<br>
compiler cannot compile some Linux headers because of these are 
<br>
programmed in &quot;GNU C&quot; instead of ANSI C.
<br>
<p>If so then this is an Linux issue and not OpenMPI's - but, if so, *why* 
<br>
did you not seen this problems during of release preparation? That is, 
<br>
maybe we have done some mistakes? Maybe the devel headers and/or static 
<br>
libs are the problem? (I will try to disable them, but we want to report 
<br>
this problem anyway).
<br>
<p><p><p><p><p>We use Scientific Linux 5.1 which is an Red Hat Enterprice 5 Linux.
<br>
<p>$ uname -a
<br>
Linux linuxhtc01.rz.RWTH-Aachen.DE 2.6.18-53.1.14.el5_lustre.1.6.5custom 
<br>
#1 SMP Wed Jun 25 12:17:09 CEST 2008 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p>configured with:
<br>
<p><p>&nbsp;&nbsp;./configure --enable-static --with-devel-headers CFLAGS=&quot;-O2 -m32&quot; 
<br>
CXXFLAGS=&quot;-O2 -m32&quot; FFLAGS=&quot;-O2 -m32&quot; FCFLAGS=&quot;-O2 -m32&quot; LDFLAGS=&quot;-m32&quot; 
<br>
--prefix=/rwthfs/rz/SW/MPI/openmpi-1.2.8/linux32/studio
<br>
<p><p>Best regards,
<br>
<p>Paul Kapinos
<br>
HPC Group
<br>
RZ RWTH Aachen
<br>
<p><p><p><p><p><p><p><p><p><p><p><p>


<p>
Making all in config
<br>
gmake[1]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/config'
<br>
gmake[1]: Nothing to be done for `all'.
<br>
gmake[1]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/config'
<br>
Making all in contrib
<br>
gmake[1]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/contrib'
<br>
gmake[1]: Nothing to be done for `all'.
<br>
gmake[1]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/contrib'
<br>
Making all in opal
<br>
gmake[1]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal'
<br>
Making all in include
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/include'
<br>
gmake  all-am
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/include'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/include'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/include'
<br>
Making all in libltdl
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/libltdl'
<br>
gmake  all-am
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/libltdl'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/libltdl'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/libltdl'
<br>
Making all in asm
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/asm'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/asm'
<br>
Making all in etc
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/etc'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/etc'
<br>
Making all in event
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event'
<br>
Making all in compat
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event/compat'
<br>
Making all in sys
<br>
gmake[4]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event/compat/sys'
<br>
gmake[4]: Nothing to be done for `all'.
<br>
gmake[4]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event/compat/sys'
<br>
gmake[4]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event/compat'
<br>
gmake[4]: Nothing to be done for `all-am'.
<br>
gmake[4]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event/compat'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event/compat'
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event'
<br>
gmake[3]: Nothing to be done for `all-am'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/event'
<br>
Making all in util
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/util'
<br>
Making all in keyval
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/util/keyval'
<br>
gmake[3]: Nothing to be done for `all'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/util/keyval'
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/util'
<br>
gmake[3]: Nothing to be done for `all-am'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/util'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/util'
<br>
Making all in mca/base
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/base'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/base'
<br>
Making all in mca/backtrace
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/backtrace'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/backtrace'
<br>
Making all in mca/installdirs
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/installdirs'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/installdirs'
<br>
Making all in mca/maffinity
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/maffinity'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/maffinity'
<br>
Making all in mca/memcpy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/memcpy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/memcpy'
<br>
Making all in mca/memory
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/memory'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/memory'
<br>
Making all in mca/paffinity
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/paffinity'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/paffinity'
<br>
Making all in mca/timer
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/timer'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/timer'
<br>
Making all in mca/backtrace/execinfo
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/backtrace/execinfo'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/backtrace/execinfo'
<br>
Making all in mca/installdirs/env
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/installdirs/env'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/installdirs/env'
<br>
Making all in mca/installdirs/config
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/installdirs/config'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/installdirs/config'
<br>
Making all in mca/maffinity/first_use
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/maffinity/first_use'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/maffinity/first_use'
<br>
Making all in mca/maffinity/libnuma
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/maffinity/libnuma'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/maffinity/libnuma'
<br>
Making all in mca/memory/ptmalloc2
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/memory/ptmalloc2'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/memory/ptmalloc2'
<br>
Making all in mca/paffinity/linux
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/paffinity/linux'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/paffinity/linux'
<br>
Making all in mca/timer/linux
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/timer/linux'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/mca/timer/linux'
<br>
Making all in .
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal'
<br>
gmake[2]: Nothing to be done for `all-am'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal'
<br>
Making all in tools/wrappers
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/tools/wrappers'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal/tools/wrappers'
<br>
gmake[1]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/opal'
<br>
Making all in orte
<br>
gmake[1]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte'
<br>
Making all in include
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/include'
<br>
gmake  all-am
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/include'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/include'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/include'
<br>
Making all in mca/errmgr
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr'
<br>
Making all in mca/gpr
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr'
<br>
Making all in mca/iof
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/iof'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/iof'
<br>
Making all in mca/ns
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ns'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ns'
<br>
Making all in mca/odls
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/odls'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/odls'
<br>
Making all in mca/oob
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/oob'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/oob'
<br>
Making all in mca/pls
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls'
<br>
Making all in mca/ras
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras'
<br>
Making all in mca/rds
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds'
<br>
Making all in mca/rmaps
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmaps'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmaps'
<br>
Making all in mca/rmgr
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmgr'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmgr'
<br>
Making all in mca/rml
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rml'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rml'
<br>
Making all in mca/schema
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/schema'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/schema'
<br>
Making all in mca/sds
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds'
<br>
Making all in mca/smr
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/smr'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/smr'
<br>
Making all in mca/errmgr/hnp
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr/hnp'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr/hnp'
<br>
Making all in mca/errmgr/orted
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr/orted'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr/orted'
<br>
Making all in mca/errmgr/proxy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr/proxy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/errmgr/proxy'
<br>
Making all in mca/gpr/null
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/null'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/null'
<br>
Making all in mca/gpr/proxy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/proxy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/proxy'
<br>
Making all in mca/gpr/replica
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica'
<br>
Making all in api_layer
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/api_layer'
<br>
gmake[3]: Nothing to be done for `all'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/api_layer'
<br>
Making all in functional_layer
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/functional_layer'
<br>
gmake[3]: Nothing to be done for `all'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/functional_layer'
<br>
Making all in transition_layer
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/transition_layer'
<br>
gmake[3]: Nothing to be done for `all'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/transition_layer'
<br>
Making all in communications
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/communications'
<br>
gmake[3]: Nothing to be done for `all'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica/communications'
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica'
<br>
gmake[3]: Nothing to be done for `all-am'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/gpr/replica'
<br>
Making all in mca/iof/proxy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/iof/proxy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/iof/proxy'
<br>
Making all in mca/iof/svc
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/iof/svc'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/iof/svc'
<br>
Making all in mca/ns/proxy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ns/proxy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ns/proxy'
<br>
Making all in mca/ns/replica
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ns/replica'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ns/replica'
<br>
Making all in mca/odls/default
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/odls/default'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/odls/default'
<br>
Making all in mca/oob/tcp
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/oob/tcp'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/oob/tcp'
<br>
Making all in mca/pls/proxy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/proxy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/proxy'
<br>
Making all in mca/pls/gridengine
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/gridengine'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/gridengine'
<br>
Making all in mca/pls/rsh
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/rsh'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/rsh'
<br>
Making all in mca/pls/slurm
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/slurm'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/pls/slurm'
<br>
Making all in mca/ras/dash_host
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/dash_host'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/dash_host'
<br>
Making all in mca/ras/localhost
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/localhost'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/localhost'
<br>
Making all in mca/ras/gridengine
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/gridengine'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/gridengine'
<br>
Making all in mca/ras/slurm
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/slurm'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/ras/slurm'
<br>
Making all in mca/rds/hostfile
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds/hostfile'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds/hostfile'
<br>
Making all in mca/rds/proxy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds/proxy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds/proxy'
<br>
Making all in mca/rds/resfile
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds/resfile'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rds/resfile'
<br>
Making all in mca/rmaps/round_robin
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmaps/round_robin'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmaps/round_robin'
<br>
Making all in mca/rmgr/proxy
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmgr/proxy'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmgr/proxy'
<br>
Making all in mca/rmgr/urm
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmgr/urm'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rmgr/urm'
<br>
Making all in mca/rml/oob
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rml/oob'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/rml/oob'
<br>
Making all in mca/sds/env
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/env'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/env'
<br>
Making all in mca/sds/seed
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/seed'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/seed'
<br>
Making all in mca/sds/singleton
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/singleton'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/singleton'
<br>
Making all in mca/sds/pipe
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/pipe'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/pipe'
<br>
Making all in mca/sds/slurm
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/slurm'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/mca/sds/slurm'
<br>
Making all in etc
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/etc'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/etc'
<br>
Making all in .
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte'
<br>
gmake[2]: Nothing to be done for `all-am'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte'
<br>
Making all in tools/orted
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/tools/orted'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/tools/orted'
<br>
Making all in tools/orterun
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/tools/orterun'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/tools/orterun'
<br>
Making all in tools/wrappers
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/tools/wrappers'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte/tools/wrappers'
<br>
gmake[1]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/orte'
<br>
Making all in ompi
<br>
gmake[1]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi'
<br>
Making all in include
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/include'
<br>
gmake  all-am
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/include'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/include'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/include'
<br>
Making all in datatype
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/datatype'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/datatype'
<br>
Making all in debuggers
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/debuggers'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/debuggers'
<br>
Making all in etc
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/etc'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/etc'
<br>
Making all in mpi
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi'
<br>
Making all in c
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/c'
<br>
Making all in profile
<br>
gmake[4]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/c/profile'
<br>
gmake[4]: Nothing to be done for `all'.
<br>
gmake[4]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/c/profile'
<br>
gmake[4]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/c'
<br>
gmake[4]: Nothing to be done for `all-am'.
<br>
gmake[4]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/c'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/c'
<br>
Making all in cxx
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/cxx'
<br>
gmake[3]: Nothing to be done for `all'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/cxx'
<br>
Making all in f77
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f77'
<br>
Making all in profile
<br>
gmake[4]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f77/profile'
<br>
gmake[4]: Nothing to be done for `all'.
<br>
gmake[4]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f77/profile'
<br>
gmake[4]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f77'
<br>
gmake[4]: Nothing to be done for `all-am'.
<br>
gmake[4]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f77'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f77'
<br>
Making all in f90
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90'
<br>
gmake  all-recursive
<br>
gmake[4]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90'
<br>
Making all in scripts
<br>
gmake[5]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90/scripts'
<br>
gmake[5]: Nothing to be done for `all'.
<br>
gmake[5]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90/scripts'
<br>
gmake[5]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90'
<br>
gmake[5]: Nothing to be done for `all-am'.
<br>
gmake[5]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90'
<br>
gmake[4]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90'
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi/f90'
<br>
gmake[3]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi'
<br>
gmake[3]: Nothing to be done for `all-am'.
<br>
gmake[3]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi'
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mpi'
<br>
Making all in mca/common
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/common'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/common'
<br>
Making all in mca/allocator
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/allocator'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/allocator'
<br>
Making all in mca/bml
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/bml'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/bml'
<br>
Making all in mca/btl
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl'
<br>
Making all in mca/coll
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/coll'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/coll'
<br>
Making all in mca/io
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/io'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/io'
<br>
Making all in mca/mpool
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/mpool'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/mpool'
<br>
Making all in mca/mtl
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/mtl'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/mtl'
<br>
Making all in mca/osc
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/osc'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/osc'
<br>
Making all in mca/pml
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/pml'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/pml'
<br>
Making all in mca/rcache
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/rcache'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/rcache'
<br>
Making all in mca/topo
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/topo'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/topo'
<br>
Making all in mca/common/sm
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/common/sm'
<br>
if test -z &quot;&quot;; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f &quot;libmca_common_sm.la&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s &quot;libmca_common_sm_noinst.la&quot; &quot;libmca_common_sm.la&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/common/sm'
<br>
Making all in mca/allocator/basic
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/allocator/basic'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/allocator/basic'
<br>
Making all in mca/allocator/bucket
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/allocator/bucket'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/allocator/bucket'
<br>
Making all in mca/bml/r2
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/bml/r2'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/bml/r2'
<br>
Making all in mca/btl/self
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl/self'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl/self'
<br>
Making all in mca/btl/sm
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl/sm'
<br>
gmake[2]: Nothing to be done for `all'.
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl/sm'
<br>
Making all in mca/btl/openib
<br>
gmake[2]: Entering directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl/openib'
<br>
source='btl_openib_component.c' object='btl_openib_component.lo' libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=compile cc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include   -DPKGDATADIR=\&quot;/rwthfs/rz/SW/MPI/openmpi-1.2.8/linux32/studio/share/openmpi\&quot; -I../../../..    -DNDEBUG -O2 -m32  -c -o btl_openib_component.lo btl_openib_component.c
<br>
libtool: compile:  cc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -DPKGDATADIR=\&quot;/rwthfs/rz/SW/MPI/openmpi-1.2.8/linux32/studio/share/openmpi\&quot; -I../../../.. -DNDEBUG -O2 -m32 -c btl_openib_component.c  -KPIC -DPIC -o .libs/btl_openib_component.o
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 167: warning: impossible constraint for &quot;%1&quot; asm operand 
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 167: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 184: warning: impossible constraint for &quot;%1&quot; asm operand 
<br>
&quot;../../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 184: warning: parameter in inline asm statement unused: %2
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 103: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 109: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 124: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 135: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 148: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 153: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 200: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 203: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 233: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 252: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 258: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 278: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 289: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 295: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 304: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 325: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 348: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 351: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 357: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 364: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 436: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 451: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 484: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 487: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 521: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 554: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 561: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 571: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 578: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 583: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 602: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 615: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 624: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 640: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 656: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 682: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 693: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 700: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 706: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 724: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 731: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 734: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 748: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 833: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 842: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 846: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 859: syntax error before or at: __u64
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 56: syntax error before or at: typedef
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 59: syntax error before or at: ibv_driver_init_func
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 59: member cannot be function: ibv_register_driver
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 60: member cannot be function: ibv_cmd_get_context
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 63: member cannot be function: ibv_cmd_query_device
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 67: member cannot be function: ibv_cmd_query_port
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 70: member cannot be function: ibv_cmd_query_gid
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 72: member cannot be function: ibv_cmd_query_pkey
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 74: member cannot be function: ibv_cmd_alloc_pd
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 77: member cannot be function: ibv_cmd_dealloc_pd
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 79: member cannot be function: ibv_cmd_reg_mr
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 84: member cannot be function: ibv_cmd_dereg_mr
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 85: member cannot be function: ibv_cmd_create_cq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 90: member cannot be function: ibv_cmd_poll_cq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 91: member cannot be function: ibv_cmd_req_notify_cq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 93: member cannot be function: ibv_cmd_resize_cq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 96: member cannot be function: ibv_cmd_destroy_cq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 98: member cannot be function: ibv_cmd_create_srq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 102: member cannot be function: ibv_cmd_modify_srq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 106: member cannot be function: ibv_cmd_query_srq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 109: member cannot be function: ibv_cmd_destroy_srq
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 111: member cannot be function: ibv_cmd_create_qp
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 115: member cannot be function: ibv_cmd_query_qp
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 119: member cannot be function: ibv_cmd_modify_qp
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 122: member cannot be function: ibv_cmd_destroy_qp
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 123: member cannot be function: ibv_cmd_post_send
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 125: member cannot be function: ibv_cmd_post_recv
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 127: member cannot be function: ibv_cmd_post_srq_recv
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 129: member cannot be function: ibv_cmd_create_ah
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 131: member cannot be function: ibv_cmd_destroy_ah
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 132: member cannot be function: ibv_cmd_attach_mcast
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 133: member cannot be function: ibv_cmd_detach_mcast
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 135: member cannot be function: ibv_dontfork_range
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 136: member cannot be function: ibv_dofork_range
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 141: member cannot be function: ibv_get_sysfs_path
<br>
&quot;/usr/include/infiniband/driver.h&quot;, line 143: member cannot be function: ibv_read_sysfs_file
<br>
&quot;/usr/include/sys/stat.h&quot;, line 207: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 207: member cannot be function: stat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 212: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 212: member cannot be function: fstat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 226: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 226: member cannot be function: stat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 228: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 228: member cannot be function: fstat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 236: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 236: member cannot be function: fstatat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 250: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 250: member cannot be function: fstatat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 259: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 259: member cannot be function: lstat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 272: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 272: member cannot be function: lstat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 280: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 280: member cannot be function: chmod
<br>
&quot;/usr/include/sys/stat.h&quot;, line 287: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 287: member cannot be function: lchmod
<br>
&quot;/usr/include/sys/stat.h&quot;, line 293: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 293: member cannot be function: fchmod
<br>
&quot;/usr/include/sys/stat.h&quot;, line 299: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 299: member cannot be function: fchmodat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 307: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 307: member cannot be function: umask
<br>
&quot;/usr/include/sys/stat.h&quot;, line 312: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 312: member cannot be function: getumask
<br>
&quot;/usr/include/sys/stat.h&quot;, line 316: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 316: member cannot be function: mkdir
<br>
&quot;/usr/include/sys/stat.h&quot;, line 323: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 323: member cannot be function: mkdirat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 331: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 331: member cannot be function: mknod
<br>
&quot;/usr/include/sys/stat.h&quot;, line 339: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 339: member cannot be function: mknodat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 345: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 345: member cannot be function: mkfifo
<br>
&quot;/usr/include/sys/stat.h&quot;, line 352: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 352: member cannot be function: mkfifoat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 380: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 380: member cannot be function: __fxstat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 382: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 382: member cannot be function: __xstat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 384: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 384: member cannot be function: __lxstat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 386: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 386: member cannot be function: __fxstatat
<br>
&quot;/usr/include/sys/stat.h&quot;, line 413: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 413: member cannot be function: __fxstat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 415: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 415: member cannot be function: __xstat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 417: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 417: member cannot be function: __lxstat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 419: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 419: member cannot be function: __fxstatat64
<br>
&quot;/usr/include/sys/stat.h&quot;, line 423: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 423: member cannot be function: __xmknod
<br>
&quot;/usr/include/sys/stat.h&quot;, line 426: syntax error before or at: extern
<br>
&quot;/usr/include/sys/stat.h&quot;, line 426: member cannot be function: __xmknodat
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 32: warning: unnamed struct member
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 91: member cannot be function: mca_pml_base_modex_send
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 127: member cannot be function: mca_pml_base_modex_recv
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 151: syntax error before or at: typedef
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 161: syntax error before or at: mca_pml_base_modex_cb_fn_t
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 161: warning: undefined or missing type for: mca_pml_base_modex_cb_fn_t
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 162: warning: undefined or missing type for: void
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 158: member cannot be function: mca_pml_base_modex_recv_nb
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 167: member cannot be function: mca_pml_base_modex_exchange
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 172: member cannot be function: mca_pml_base_modex_init
<br>
&quot;../../../../ompi/mca/pml/base/pml_base_module_exchange.h&quot;, line 177: member cannot be function: mca_pml_base_modex_finalize
<br>
&quot;btl_openib_component.c&quot;, line 65: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 65: member cannot be function: btl_openib_component_open
<br>
&quot;btl_openib_component.c&quot;, line 66: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 66: member cannot be function: btl_openib_component_close
<br>
&quot;btl_openib_component.c&quot;, line 67: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 67: member cannot be function: btl_openib_modex_send
<br>
&quot;btl_openib_component.c&quot;, line 68: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 68: member cannot be function: btl_openib_control
<br>
&quot;btl_openib_component.c&quot;, line 72: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 72: member cannot be function: init_one_port
<br>
&quot;btl_openib_component.c&quot;, line 75: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 75: member cannot be function: init_one_hca
<br>
&quot;btl_openib_component.c&quot;, line 76: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 76: member cannot be function: btl_openib_component_init
<br>
&quot;btl_openib_component.c&quot;, line 79: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 79: member cannot be function: merge_values
<br>
&quot;btl_openib_component.c&quot;, line 81: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 81: member cannot be function: btl_openib_handle_incoming
<br>
&quot;btl_openib_component.c&quot;, line 85: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 85: member cannot be function: btl_openib_component_status_to_string
<br>
&quot;btl_openib_component.c&quot;, line 86: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 86: member cannot be function: btl_openib_component_progress
<br>
&quot;btl_openib_component.c&quot;, line 87: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 87: member cannot be function: btl_openib_frag_progress_pending
<br>
&quot;btl_openib_component.c&quot;, line 90: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 90: member cannot be function: openib_reg_mr
<br>
&quot;btl_openib_component.c&quot;, line 92: syntax error before or at: static
<br>
&quot;btl_openib_component.c&quot;, line 92: member cannot be function: openib_dereg_mr
<br>
&quot;btl_openib_component.c&quot;, line 95: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 95: syntax error before or at: =
<br>
&quot;btl_openib_component.c&quot;, line 65: member cannot be function: btl_openib_component_open
<br>
&quot;btl_openib_component.c&quot;, line 134: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 134: syntax error before or at: {
<br>
&quot;btl_openib_component.c&quot;, line 138: syntax error before or at: mca_btl_openib_component
<br>
&quot;btl_openib_component.c&quot;, line 139: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 849: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 142: syntax error before or at: *
<br>
&quot;btl_openib_component.c&quot;, line 142: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 142: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 142: warning: no explicit type given
<br>
&quot;btl_openib_component.c&quot;, line 142: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 142: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 142: warning: no explicit type given
<br>
&quot;btl_openib_component.c&quot;, line 142: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 849: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 159: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 838: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 166: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 829: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 177: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 67: member cannot be function: btl_openib_modex_send
<br>
&quot;btl_openib_component.c&quot;, line 193: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 193: syntax error before or at: {
<br>
&quot;btl_openib_component.c&quot;, line 196: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 196: syntax error before or at: =
<br>
&quot;btl_openib_component.c&quot;, line 196: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 727: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 202: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 716: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 206: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 696: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 210: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 685: zero-sized struct/union
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 685: warning: unnamed struct member
<br>
&quot;btl_openib_component.c&quot;, line 213: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 674: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 214: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 214: syntax error before or at: =
<br>
&quot;btl_openib_component.c&quot;, line 215: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 524: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 218: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 490: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 225: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 480: zero-sized struct/union
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 480: warning: unnamed struct member
<br>
&quot;btl_openib_component.c&quot;, line 244: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 432: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 244: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 354: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 248: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 344: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 252: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 285: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 254: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 274: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 270: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 248: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 282: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 229: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 283: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 196: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 286: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;btl_openib_component.c&quot;, line 293: warning: syntax requires &quot;;&quot; after last struct/union member
<br>
&quot;/usr/include/infiniband/kern-abi.h&quot;, line 144: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 293: warning: syntax error:  empty declaration
<br>
&quot;btl_openib_component.c&quot;, line 293: warning: syntax error:  empty declaration
<br>
&quot;btl_openib_component.c&quot;, line 294: warning: syntax error:  empty declaration
<br>
&quot;btl_openib_component.c&quot;, line 298: cannot recover from previous errors
<br>
cc: acomp failed for btl_openib_component.c
<br>
gmake[2]: *** [btl_openib_component.lo] Error 1
<br>
gmake[2]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi/mca/btl/openib'
<br>
gmake[1]: *** [all-recursive] Error 1
<br>
gmake[1]: Leaving directory `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.8_studio32/ompi'
<br>
gmake: *** [all-recursive] Error 1
<br>
<p>

<br><p>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7001/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7001/kern-abi.h">kern-abi.h</a>
</ul>
<!-- attachment="kern-abi.h" -->
<hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7001/types.h">types.h</a>
</ul>
<!-- attachment="types.h" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7001/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
<li><strong>Previous message:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
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
