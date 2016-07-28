<?
$subject_val = "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 14:41:17 2009" -->
<!-- isoreceived="20091214194117" -->
<!-- sent="Mon, 14 Dec 2009 12:41:08 -0700" -->
<!-- isosent="20091214194108" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler" -->
<!-- id="57E41551-ED8F-43B2-B868-CFE328D7171F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091214193237.GN24565_at_flash.uchicago.edu" -->
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
<strong>Date:</strong> 2009-12-14 14:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7230.php">Terry Dontje: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Previous message:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>In reply to:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7230.php">Terry Dontje: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll have to look through the logic and see if I can spot something obvious. I don't have access to an Intel compiler, and as you noted it works fine with gcc. Afraid I can't do much more than that, so this may take awhile and not necessarily have a positive result.
<br>
<p><p>On Dec 14, 2009, at 12:32 PM, Daan van Rossum wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I took the Dec 10th snapshot, but got exactly the same behavior as with version 1.3.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just noticed that even this rankfile doesn't work, with a single process:
</span><br>
<span class="quotelev1">&gt; rank 0=node01 slot=0-3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; [node01:31105] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:31105] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node01:31105] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:31105] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node01:31105] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node01:31105] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node01:31105] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node01:31105] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node01:31106] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:31106] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node01:31106] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev1">&gt; [node01:31106] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev1">&gt; [node01:31106] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt; [node01:31106] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev1">&gt; [node01:31106] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev1">&gt; [node01:31106] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev1">&gt; [node01:31106] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [node01:31106] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [node01:31106] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [node01:31106] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The spawned compute process doesn't sense that it should skip the setting paffinity...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw the posting from last July about a similar problem (the problem that I mentioned on the bottom, with the slot=0:* notation not working). But that is a different problem (besides, that is still not working as it seems).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Daan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * on Saturday, 12.12.09 at 18:48, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This looks like an uninitialized variable that gnu c handles one way and intel another. Someone recently contributed a patch to the ompi trunk to fix just such a  thing in this code area - don't know if it addresses this problem or not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try the ompi trunk (a nightly tarball from the last day or so forward) and see if this still occurs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2009, at 4:06 PM, Daan van Rossum wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's a problem with ompi 1.3.4 when compiled with the intel 11.1.059 c compiler, related with the built in processor binding functionallity. The problem does not occur when ompi is compiled with the gnu c compiler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A mpi program execution fails (segfault) on mpi_init() when the following rank file is used:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node01 slot=0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node01 slot=0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but runs fine with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node01 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node01 slot=1-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and fine with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node01 slot=0-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node01 slot=1-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but segfaults with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node01 slot=0-2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node01 slot=1-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is on a two-processor quad-core opteron machine (occurs on all nodes of the cluster) with Ubuntu 8.10, kernel 2.6.27-16.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the siplest case that fails. Generally, I would like to bind processors to physical procs but always allow any core, like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node01 slot=p0:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node01 slot=p0:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=node01 slot=p0:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=node01 slot=p0:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 4=node01 slot=p1:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 5=node01 slot=p1:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 6=node01 slot=p1:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 7=node01 slot=p1:0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which fails too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This happens with a test code that contains only two lines of code, calling mpi_init and mpi_finalize subsequently, and happens in both fortran and in c.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One more interesting thing is, that the problem with setting the process affinity does not occur on our four-processor quad-core opteron nodes, with exactly the same OS etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting &quot;--mca paffinity_base_verbose 5&quot; shows what is going wrong for this rankfile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node01 slot=0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node01 slot=0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- WRONG -----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23174] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23175] Failing at address: 0x30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node01:23176] Failing at address: 0x30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- WRONG -----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- RIGHT -----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #1 (#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #2 (#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 0 runs on cpu #3 (#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: slot_list == 0-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #0 (#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #1 (#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #2 (#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23241] paffinity slot assignment: rank 1 runs on cpu #3 (#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23242] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23242] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23242] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23243] mca:base:select:(paffinity) Querying component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23243] mca:base:select:(paffinity) Query of component [linux] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node25:23243] mca:base:select:(paffinity) Selected component [linux]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- RIGHT -----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apparently, only a master process (ID [node01:23174] and [node25:23241]) set the paffinity in the RIGHT case, but in the WRONG case, also the compute processes ([node01:23175] and [node01:23176], rank0 and rank1) try to set the their own paffinity properties.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that for the rankfile also the notation does not work. But that seems to have a different origin, as it tries to bind to a core# 4, whereas there are just 0-3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=node01 slot=0:*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=node01 slot=0:*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help on this!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daan van Rossum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Daan van Rossum
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Chicago
</span><br>
<span class="quotelev1">&gt; Department of Astronomy and Astrophysics
</span><br>
<span class="quotelev1">&gt; 5640 S. Ellis Ave
</span><br>
<span class="quotelev1">&gt; Chicago, IL 60637
</span><br>
<span class="quotelev1">&gt; phone: 773-7020624
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
<li><strong>Next message:</strong> <a href="7230.php">Terry Dontje: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Previous message:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>In reply to:</strong> <a href="7228.php">Daan van Rossum: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7230.php">Terry Dontje: "Re: [OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
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
