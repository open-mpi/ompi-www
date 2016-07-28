<?
$subject_val = "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 12 20:48:53 2009" -->
<!-- isoreceived="20091213014853" -->
<!-- sent="Sat, 12 Dec 2009 18:48:44 -0700" -->
<!-- isosent="20091213014844" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler" -->
<!-- id="9FCF5148-3DB2-4F4D-80BB-C2F669ED7B2B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091211230612.GA24731_at_flash.uchicago.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-12 20:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7227.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7224.php">Daan van Rossum: "[OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Reply:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like an uninitialized variable that gnu c handles one way and intel another. Someone recently contributed a patch to the ompi trunk to fix just such a  thing in this code area - don't know if it addresses this problem or not.
<br>
<p>Can you try the ompi trunk (a nightly tarball from the last day or so forward) and see if this still occurs?
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Dec 11, 2009, at 4:06 PM, Daan van Rossum wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a problem with ompi 1.3.4 when compiled with the intel 11.1.059 c compiler, related with the built in processor binding functionallity. The problem does not occur when ompi is compiled with the gnu c compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A mpi program execution fails (segfault) on mpi_init() when the following rank file is used:
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=0-3
</span><br>
<span class="quotelev1">&gt; rank 1=node01 slot=0-3
</span><br>
<span class="quotelev1">&gt; but runs fine with:
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=node01 slot=1-3
</span><br>
<span class="quotelev1">&gt; and fine with:
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=0-1
</span><br>
<span class="quotelev1">&gt; rank 1=node01 slot=1-3
</span><br>
<span class="quotelev1">&gt; but segfaults with:
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=0-2
</span><br>
<span class="quotelev1">&gt; rank 1=node01 slot=1-3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is on a two-processor quad-core opteron machine (occurs on all nodes of the cluster) with Ubuntu 8.10, kernel 2.6.27-16.
</span><br>
<span class="quotelev1">&gt; This is the siplest case that fails. Generally, I would like to bind processors to physical procs but always allow any core, like
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=p0:0-3
</span><br>
<span class="quotelev1">&gt; rank 1=node01 slot=p0:0-3
</span><br>
<span class="quotelev1">&gt; rank 2=node01 slot=p0:0-3
</span><br>
<span class="quotelev1">&gt; rank 3=node01 slot=p0:0-3
</span><br>
<span class="quotelev1">&gt; rank 4=node01 slot=p1:0-3
</span><br>
<span class="quotelev1">&gt; rank 5=node01 slot=p1:0-3
</span><br>
<span class="quotelev1">&gt; rank 6=node01 slot=p1:0-3
</span><br>
<span class="quotelev1">&gt; rank 7=node01 slot=p1:0-3
</span><br>
<span class="quotelev1">&gt; which fails too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This happens with a test code that contains only two lines of code, calling mpi_init and mpi_finalize subsequently, and happens in both fortran and in c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One more interesting thing is, that the problem with setting the process affinity does not occur on our four-processor quad-core opteron nodes, with exactly the same OS etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Setting &quot;--mca paffinity_base_verbose 5&quot; shows what is going wrong for this rankfile:
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=0-3
</span><br>
<span class="quotelev1">&gt; rank 1=node01 slot=0-3
</span><br>
<span class="quotelev1">&gt; ------------- WRONG -----------------
</span><br>
<span class="quotelev1">&gt; [node01:23174] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:23174] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node01:23174] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node01:23175] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:23175] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node01:23175] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:23176] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:23176] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node01:23176] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:23175] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node01:23176] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node01:23175] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node01:23176] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node01:23175] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node01:23175] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node01:23175] Failing at address: 0x30
</span><br>
<span class="quotelev1">&gt; [node01:23176] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node01:23176] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node01:23176] Failing at address: 0x30
</span><br>
<span class="quotelev1">&gt; ------------- WRONG -----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------- RIGHT -----------------
</span><br>
<span class="quotelev1">&gt; [node25:23241] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node25:23241] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node25:23241] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node25:23242] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node25:23242] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node25:23242] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [node25:23243] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node25:23243] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node25:23243] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; ------------- RIGHT -----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently, only a master process (ID [node01:23174] and [node25:23241]) set the paffinity in the RIGHT case, but in the WRONG case, also the compute processes ([node01:23175] and [node01:23176], rank0 and rank1) try to set the their own paffinity properties.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that for the rankfile also the notation does not work. But that seems to have a different origin, as it tries to bind to a core# 4, whereas there are just 0-3.
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=0:*
</span><br>
<span class="quotelev1">&gt; rank 1=node01 slot=0:*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help on this!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Daan van Rossum
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
<li><strong>Next message:</strong> <a href="7227.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7224.php">Daan van Rossum: "[OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Reply:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
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
