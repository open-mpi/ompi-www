<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 20:05:32 2015" -->
<!-- isoreceived="20150724000532" -->
<!-- sent="Thu, 23 Jul 2015 17:05:24 -0700" -->
<!-- isosent="20150724000524" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2" -->
<!-- id="CAAvDA14x7nbdXaeK0ubOcOYwFJHspp2KUmewDJ=u5efUtPcwSA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6777BD114B546D458A2696C0DEB863DF5F740EFD_at_ORSMSX107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc2<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 20:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17689.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17687.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17687.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17689.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17689.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17692.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yohann,
<br>
<p>With PR409 as it stands right now (commit 6daef310) I see no change to the
<br>
behavior.
<br>
I still get a SEGV below opal_progress() unless I use either
<br>
&nbsp;&nbsp;&nbsp;-mca mtl ^ofi
<br>
OR
<br>
&nbsp;&nbsp;&nbsp;-mca pml cm
<br>
<p>A backtrace from gdb appears below.
<br>
<p>-Paul
<br>
<p>(gdb) where
<br>
#0  0x00007f5bc7b59867 in ?? () from /lib64/libgcc_s.so.1
<br>
#1  0x00007f5bc7b5a119 in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
<br>
#2  0x00007f5bcc9b08f6 in __backtrace (array=&lt;value optimized out&gt;, size=32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../sysdeps/ia64/backtrace.c:110
<br>
#3  0x00007f5bcc3483e1 in opal_backtrace_print (file=0x7f5bccc40880,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;prefix=0x7fff6181d1f0 &quot;[pcp-f-5:05049] &quot;, strip=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/opal/mca/backtrace/execinfo/backtrace_execinfo.c:47
<br>
#4  0x00007f5bcc3456a9 in show_stackframe (signo=11, info=0x7fff6181d770,
<br>
p=0x7fff6181d640)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/opal/util/stacktrace.c:336
<br>
#5  &lt;signal handler called&gt;
<br>
#6  0x00007f5bc7717c58 in ?? ()
<br>
#7  0x00007f5bcc2f567a in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/opal/runtime/opal_progress.c:187
<br>
#8  0x00007f5bccebbcb9 in ompi_mpi_init (argc=1, argv=0x7fff6181dd78,
<br>
requested=0, provided=0x7fff6181dbf8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/ompi/runtime/ompi_mpi_init.c:645
<br>
#9  0x00007f5bccefbe77 in PMPI_Init (argc=0x7fff6181dc5c,
<br>
argv=0x7fff6181dc50) at pinit.c:84
<br>
#10 0x000000000040088e in main (argc=1, argv=0x7fff6181dd78) at ring_c.c:19
<br>
<p>(gdb) up 6
<br>
#6  0x00007f5bc7717c58 in ?? ()
<br>
(gdb) disass
<br>
No function contains program counter for selected frame.
<br>
<p>On Thu, Jul 23, 2015 at 8:13 AM, Burette, Yohann &lt;yohann.burette_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While looking at the issue, we noticed that we were missing some code that
</span><br>
<span class="quotelev1">&gt; deals with MTL priorities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PR 409 (<a href="https://github.com/open-mpi/ompi-release/pull/409">https://github.com/open-mpi/ompi-release/pull/409</a>) is attempting
</span><br>
<span class="quotelev1">&gt; to fix that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully, this will also fix the error you encountered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yohann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Paul
</span><br>
<span class="quotelev1">&gt; Hargrove
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, July 22, 2015 12:07 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] 1.10.0rc2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yohann,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things run fine with those additional flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact, adding just &quot;--mca pml cm&quot; is sufficient to eliminate the SEGV.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 22, 2015 at 8:49 AM, Burette, Yohann &lt;yohann.burette_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for doing all this testing!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About 1), it&#226;&#128;&#153;s hard for me to see whether it&#226;&#128;&#153;s a problem with mtl:ofi or
</span><br>
<span class="quotelev1">&gt; with how OMPI selects the components to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please run your test again with &#226;&#128;&#156;--mca mtl ofi --mca
</span><br>
<span class="quotelev1">&gt; mtl_ofi_provider sockets --mca pml cm&#226;&#128;&#157;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The idea is that if it still fails, then we have a problem with either
</span><br>
<span class="quotelev1">&gt; mtl:ofi or the OFI/sockets provider. If it works, then there is an issue
</span><br>
<span class="quotelev1">&gt; with how OMPI selects what component to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried 1.10.0rc2 with the latest libfabric (master) and it seems to
</span><br>
<span class="quotelev1">&gt; work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yohann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Paul
</span><br>
<span class="quotelev1">&gt; Hargrove
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, July 22, 2015 1:05 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] 1.10.0rc2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.10.0rc2 looks mostly good to me, but I still found some issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) New to this round of testing, I have built mtl:ofi with gcc, pgi, icc,
</span><br>
<span class="quotelev1">&gt; clang, open64 and studio compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have only the sockets provider in libfaric (v1.0.0 and 1.1.0rc2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, unless I pass &quot;-mca mtl ^ofi&quot; to mpirun I get a SEGV from a
</span><br>
<span class="quotelev1">&gt; callback invoked in opal_progress().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gdb did not give a function name for the  callback, but the PC looks valid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Of the several compilers I tried, only pgi-13.0 failed to compile
</span><br>
<span class="quotelev1">&gt; mtl:ofi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /bin/sh ../../../../libtool  --tag=CC   --mode=compile pgcc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt;  -I/usr/common/ftg/libfabric/1.1.0rc2p1/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt;  -g  -c -o mtl_ofi_component.lo
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -I/usr/common/ftg/libfabric/1.1.0rc2p1/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -g -c
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c
</span><br>
<span class="quotelev1">&gt;  -fpic -DPIC -o .libs/mtl_ofi_component.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGC-S-0060-opal_convertor_clone is not a member of this struct or union
</span><br>
<span class="quotelev1">&gt; (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c:
</span><br>
<span class="quotelev1">&gt; 51)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgcc-Fatal-/global/scratch2/sd/hargrove/pgi-13.10/linux86-64/13.10/bin/pgc
</span><br>
<span class="quotelev1">&gt; TERMINATED by signal 11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this ends with a SEGV in the compiler, I don't think this is an
</span><br>
<span class="quotelev1">&gt; issue with the C code, just a plain compiler bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At lease pgi-9.0-4 and pgi-10.9 compiled the code just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) As I noted in a separate email, there are some newly uncovered issues
</span><br>
<span class="quotelev1">&gt; in the embedded hwloc w/ pgi and -m32.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I had not tested such configurations previously, and all
</span><br>
<span class="quotelev1">&gt; indications are that these issues have existed for a while.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice is on vacation, so there will not be an official hwloc fix for this
</span><br>
<span class="quotelev1">&gt; issue until next week at the earliest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [The upside is that I now have coverage for eight additional x86
</span><br>
<span class="quotelev1">&gt; configurations (true x86 or x86-64 w/ -m32).]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) I noticed a couple warnings somebody might want to investigate:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:2323:59:
</span><br>
<span class="quotelev1">&gt; warning: format specifies type 'int' but the argument has type 'struct
</span><br>
<span class="quotelev1">&gt; ibv_qp *' [-Wformat]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 2471: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also worth noting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ConnectX and ConnectIB XRC detection logic appears to be working as
</span><br>
<span class="quotelev1">&gt; expected on multiple systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also have learned that pgi-9.0-4 is not a conforming C99 compiler when
</span><br>
<span class="quotelev1">&gt; passed -m32, which is not Open MPI's fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And as before...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + I am currently without any SPARC platforms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + Several qemu-emulated ARM and MIPS tests will complete by morning
</span><br>
<span class="quotelev1">&gt; (though I have some ARM successes already)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 21, 2015 at 12:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hey folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.10.0rc2 is now out for review - excepting the library version numbers,
</span><br>
<span class="quotelev1">&gt; this should be the final version. Please take a quick gander and let me
</span><br>
<span class="quotelev1">&gt; know of any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17670.php">http://www.open-mpi.org/community/lists/devel/2015/07/17670.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17681.php">http://www.open-mpi.org/community/lists/devel/2015/07/17681.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17687.php">http://www.open-mpi.org/community/lists/devel/2015/07/17687.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17689.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17687.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17687.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17689.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17689.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17692.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
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
