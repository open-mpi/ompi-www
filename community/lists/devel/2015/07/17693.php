<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 10:34:12 2015" -->
<!-- isoreceived="20150724143412" -->
<!-- sent="Fri, 24 Jul 2015 07:34:05 -0700" -->
<!-- isosent="20150724143405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2" -->
<!-- id="5616FBED-8568-4298-B4B3-DC9C928C7838_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="28808AB0-1B16-4D86-BDDE-13AF1BD30A31_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 10:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17694.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17692.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17691.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17694.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glancing at the code, I believe I see the problem. The OFI MTL component registers an opal progress function during init, but the CM PML is not the one ultimately selected. Thus, the CM PML has its finalize called and is unloaded.
<br>
<p>During finalize, CM closes the MTL framework. This in turn calls component close on all the components, including OFI. However, the OFI component close function does *not* unregister the opal progress function.
<br>
<p>And so we segfault on first call to opal_progress
<br>
<p>So just add the unregister call to the OFI component close and you should be okay
<br>
<p><p><span class="quotelev1">&gt; On Jul 24, 2015, at 7:19 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yohann --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you have a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2015, at 10:15 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; looks like ofi mtl is being naughty.  its tje onlx mtl which registers with opal progress in component init method.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sent from my smart phonr so no good type.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2015 7:03 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It looks like one of the MTL components is registering a progress call with the opal_progress thread, and then unloading when de-selected. Registering with opal_progress should only be done once the MTL has been selected and will run
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 23, 2015, at 5:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yohann,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With PR409 as it stands right now (commit 6daef310) I see no change to the behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still get a SEGV below opal_progress() unless I use either
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -mca mtl ^ofi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -mca pml cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A backtrace from gdb appears below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007f5bc7b59867 in ?? () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007f5bc7b5a119 in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007f5bcc9b08f6 in __backtrace (array=&lt;value optimized out&gt;, size=32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at ../sysdeps/ia64/backtrace.c:110
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007f5bcc3483e1 in opal_backtrace_print (file=0x7f5bccc40880, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    prefix=0x7fff6181d1f0 &quot;[pcp-f-5:05049] &quot;, strip=2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at /scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/opal/mca/backtrace/execinfo/backtrace_execinfo.c:47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007f5bcc3456a9 in show_stackframe (signo=11, info=0x7fff6181d770, p=0x7fff6181d640)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at /scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/opal/util/stacktrace.c:336
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  &lt;signal handler called&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x00007f5bc7717c58 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x00007f5bcc2f567a in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at /scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/opal/runtime/opal_progress.c:187
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8  0x00007f5bccebbcb9 in ompi_mpi_init (argc=1, argv=0x7fff6181dd78, requested=0, provided=0x7fff6181dbf8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at /scratch/phargrov/OMPI/openmpi-1.10.0rc2-linux-x86_64-sl6x/openmpi-1.10.0rc2/ompi/runtime/ompi_mpi_init.c:645
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9  0x00007f5bccefbe77 in PMPI_Init (argc=0x7fff6181dc5c, argv=0x7fff6181dc50) at pinit.c:84
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0x000000000040088e in main (argc=1, argv=0x7fff6181dd78) at ring_c.c:19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) up 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x00007f5bc7717c58 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) disass
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No function contains program counter for selected frame.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 23, 2015 at 8:13 AM, Burette, Yohann &lt;yohann.burette_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While looking at the issue, we noticed that we were missing some code that deals with MTL priorities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PR 409 (<a href="https://github.com/open-mpi/ompi-release/pull/409">https://github.com/open-mpi/ompi-release/pull/409</a>) is attempting to fix that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully, this will also fix the error you encountered.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yohann
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, July 22, 2015 12:07 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] 1.10.0rc2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yohann,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Things run fine with those additional flags.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In fact, adding just &quot;--mca pml cm&quot; is sufficient to eliminate the SEGV.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 22, 2015 at 8:49 AM, Burette, Yohann &lt;yohann.burette_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for doing all this testing!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; About 1), it&#226;&#128;&#153;s hard for me to see whether it&#226;&#128;&#153;s a problem with mtl:ofi or with how OMPI selects the components to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please run your test again with &#226;&#128;&#156;--mca mtl ofi --mca mtl_ofi_provider sockets --mca pml cm&#226;&#128;&#157;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The idea is that if it still fails, then we have a problem with either mtl:ofi or the OFI/sockets provider. If it works, then there is an issue with how OMPI selects what component to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just tried 1.10.0rc2 with the latest libfabric (master) and it seems to work fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yohann
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, July 22, 2015 1:05 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] 1.10.0rc2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.10.0rc2 looks mostly good to me, but I still found some issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) New to this round of testing, I have built mtl:ofi with gcc, pgi, icc, clang, open64 and studio compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have only the sockets provider in libfaric (v1.0.0 and 1.1.0rc2).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, unless I pass &quot;-mca mtl ^ofi&quot; to mpirun I get a SEGV from a callback invoked in opal_progress().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gdb did not give a function name for the  callback, but the PC looks valid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Of the several compilers I tried, only pgi-13.0 failed to compile mtl:ofi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        /bin/sh ../../../../libtool  --tag=CC   --mode=compile pgcc -DHAVE_CONFIG_H -I. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen  -I/usr/common/ftg/libfabric/1.1.0rc2p1/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2 -I../../../.. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include   -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include  -g  -c -o mtl_ofi_component.lo /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -I/usr/common/ftg/libfabric/1.1.0rc2p1/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2 -I../../../.. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/orte/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/oshmem/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/opal/mca/event/libevent2021/libevent/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/BLD/opal/mca/event/libevent2021/libevent/include -g -c /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c  -fpic -DPIC -o .libs/mtl_ofi_component.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0060-opal_convertor_clone is not a member of this struct or union (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-pgi-13.10/openmpi-1.10.0rc2/ompi/mca/mtl/ofi/mtl_ofi_component.c: 51)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgcc-Fatal-/global/scratch2/sd/hargrove/pgi-13.10/linux86-64/13.10/bin/pgc TERMINATED by signal 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since this ends with a SEGV in the compiler, I don't think this is an issue with the C code, just a plain compiler bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At lease pgi-9.0-4 and pgi-10.9 compiled the code just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) As I noted in a separate email, there are some newly uncovered issues in the embedded hwloc w/ pgi and -m32.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I had not tested such configurations previously, and all indications are that these issues have existed for a while.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice is on vacation, so there will not be an official hwloc fix for this issue until next week at the earliest.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [The upside is that I now have coverage for eight additional x86 configurations (true x86 or x86-64 w/ -m32).]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) I noticed a couple warnings somebody might want to investigate:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:2323:59: warning: format specifies type 'int' but the argument has type 'struct ibv_qp *' [-Wformat]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  openmpi-1.10.0rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c&quot;, line 2471: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also worth noting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ConnectX and ConnectIB XRC detection logic appears to be working as expected on multiple systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also have learned that pgi-9.0-4 is not a conforming C99 compiler when passed -m32, which is not Open MPI's fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And as before...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + I am currently without any SPARC platforms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + Several qemu-emulated ARM and MIPS tests will complete by morning (though I have some ARM successes already)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jul 21, 2015 at 12:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.10.0rc2 is now out for review - excepting the library version numbers, this should be the final version. Please take a quick gander and let me know of any problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17670.php">http://www.open-mpi.org/community/lists/devel/2015/07/17670.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17681.php">http://www.open-mpi.org/community/lists/devel/2015/07/17681.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17687.php">http://www.open-mpi.org/community/lists/devel/2015/07/17687.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17688.php">http://www.open-mpi.org/community/lists/devel/2015/07/17688.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17689.php">http://www.open-mpi.org/community/lists/devel/2015/07/17689.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17690.php">http://www.open-mpi.org/community/lists/devel/2015/07/17690.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17691.php">http://www.open-mpi.org/community/lists/devel/2015/07/17691.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17694.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17692.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17691.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17694.php">Howard Pritchard: "Re: [OMPI devel] 1.10.0rc2"</a>
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
