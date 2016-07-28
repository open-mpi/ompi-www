<?
$subject_val = "[OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 18:06:20 2009" -->
<!-- isoreceived="20091211230620" -->
<!-- sent="Fri, 11 Dec 2009 17:06:12 -0600" -->
<!-- isosent="20091211230612" -->
<!-- name="Daan van Rossum" -->
<!-- email="daan_at_[hidden]" -->
<!-- subject="[OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler" -->
<!-- id="20091211230612.GA24731_at_flash.uchicago.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler<br>
<strong>From:</strong> Daan van Rossum (<em>daan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-11 18:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7223.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7226.php">Ralph Castain: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Reply:</strong> <a href="7226.php">Ralph Castain: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>There's a problem with ompi 1.3.4 when compiled with the intel 11.1.059 c compiler, related with the built in processor binding functionallity. The problem does not occur when ompi is compiled with the gnu c compiler.
<br>
<p>A mpi program execution fails (segfault) on mpi_init() when the following rank file is used:
<br>
&nbsp;rank 0=node01 slot=0-3
<br>
&nbsp;rank 1=node01 slot=0-3
<br>
but runs fine with:
<br>
&nbsp;rank 0=node01 slot=0
<br>
&nbsp;rank 1=node01 slot=1-3
<br>
and fine with:
<br>
&nbsp;rank 0=node01 slot=0-1
<br>
&nbsp;rank 1=node01 slot=1-3
<br>
but segfaults with:
<br>
&nbsp;rank 0=node01 slot=0-2
<br>
&nbsp;rank 1=node01 slot=1-3
<br>
<p>This is on a two-processor quad-core opteron machine (occurs on all nodes of the cluster) with Ubuntu 8.10, kernel 2.6.27-16.
<br>
This is the siplest case that fails. Generally, I would like to bind processors to physical procs but always allow any core, like
<br>
&nbsp;rank 0=node01 slot=p0:0-3
<br>
&nbsp;rank 1=node01 slot=p0:0-3
<br>
&nbsp;rank 2=node01 slot=p0:0-3
<br>
&nbsp;rank 3=node01 slot=p0:0-3
<br>
&nbsp;rank 4=node01 slot=p1:0-3
<br>
&nbsp;rank 5=node01 slot=p1:0-3
<br>
&nbsp;rank 6=node01 slot=p1:0-3
<br>
&nbsp;rank 7=node01 slot=p1:0-3
<br>
which fails too.
<br>
<p>This happens with a test code that contains only two lines of code, calling mpi_init and mpi_finalize subsequently, and happens in both fortran and in c.
<br>
<p>One more interesting thing is, that the problem with setting the process affinity does not occur on our four-processor quad-core opteron nodes, with exactly the same OS etc.
<br>
<p><p>Setting &quot;--mca paffinity_base_verbose 5&quot; shows what is going wrong for this rankfile:
<br>
&nbsp;rank 0=node01 slot=0-3
<br>
&nbsp;rank 1=node01 slot=0-3
<br>
------------- WRONG -----------------
<br>
[node01:23174] mca:base:select:(paffinity) Querying component [linux]
<br>
[node01:23174] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node01:23174] mca:base:select:(paffinity) Selected component [linux]
<br>
[node01:23174] paffinity slot assignment: slot_list == 0-3
<br>
[node01:23174] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
<br>
[node01:23174] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
<br>
[node01:23174] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
<br>
[node01:23174] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
<br>
[node01:23174] paffinity slot assignment: slot_list == 0-3
<br>
[node01:23174] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
<br>
[node01:23174] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
<br>
[node01:23174] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
<br>
[node01:23174] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
<br>
[node01:23175] mca:base:select:(paffinity) Querying component [linux]
<br>
[node01:23175] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node01:23175] mca:base:select:(paffinity) Selected component [linux]
<br>
[node01:23176] mca:base:select:(paffinity) Querying component [linux]
<br>
[node01:23176] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node01:23176] mca:base:select:(paffinity) Selected component [linux]
<br>
[node01:23175] paffinity slot assignment: slot_list == 0-3
<br>
[node01:23175] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
<br>
[node01:23175] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
<br>
[node01:23175] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
<br>
[node01:23175] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
<br>
[node01:23176] paffinity slot assignment: slot_list == 0-3
<br>
[node01:23176] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
<br>
[node01:23176] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
<br>
[node01:23176] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
<br>
[node01:23176] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
<br>
[node01:23175] *** Process received signal ***
<br>
[node01:23176] *** Process received signal ***
<br>
[node01:23175] Signal: Segmentation fault (11)
<br>
[node01:23175] Signal code: Address not mapped (1)
<br>
[node01:23175] Failing at address: 0x30
<br>
[node01:23176] Signal: Segmentation fault (11)
<br>
[node01:23176] Signal code: Address not mapped (1)
<br>
[node01:23176] Failing at address: 0x30
<br>
------------- WRONG -----------------
<br>
<p>------------- RIGHT -----------------
<br>
[node25:23241] mca:base:select:(paffinity) Querying component [linux]
<br>
[node25:23241] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node25:23241] mca:base:select:(paffinity) Selected component [linux]
<br>
[node25:23241] paffinity slot assignment: slot_list == 0-3
<br>
[node25:23241] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
<br>
[node25:23241] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
<br>
[node25:23241] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
<br>
[node25:23241] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
<br>
[node25:23241] paffinity slot assignment: slot_list == 0-3
<br>
[node25:23241] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
<br>
[node25:23241] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
<br>
[node25:23241] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
<br>
[node25:23241] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
<br>
[node25:23242] mca:base:select:(paffinity) Querying component [linux]
<br>
[node25:23242] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node25:23242] mca:base:select:(paffinity) Selected component [linux]
<br>
[node25:23243] mca:base:select:(paffinity) Querying component [linux]
<br>
[node25:23243] mca:base:select:(paffinity) Query of component [linux] set priority to 10
<br>
[node25:23243] mca:base:select:(paffinity) Selected component [linux]
<br>
------------- RIGHT -----------------
<br>
<p>Apparently, only a master process (ID [node01:23174] and [node25:23241]) set the paffinity in the RIGHT case, but in the WRONG case, also the compute processes ([node01:23175] and [node01:23176], rank0 and rank1) try to set the their own paffinity properties.
<br>
<p><p><p>Note that for the rankfile also the notation does not work. But that seems to have a different origin, as it tries to bind to a core# 4, whereas there are just 0-3.
<br>
&nbsp;rank 0=node01 slot=0:*
<br>
&nbsp;rank 1=node01 slot=0:*
<br>
<p><p>Thanks for your help on this!
<br>
<p><pre>
--
Daan van Rossum
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7225.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7223.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7226.php">Ralph Castain: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Reply:</strong> <a href="7226.php">Ralph Castain: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
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
