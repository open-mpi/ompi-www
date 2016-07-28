<?
$subject_val = "Re: [OMPI users] totalview and message queue, empty windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 12:05:15 2010" -->
<!-- isoreceived="20100204170515" -->
<!-- sent="Thu, 04 Feb 2010 12:04:35 -0500" -->
<!-- isosent="20100204170435" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] totalview and message queue, empty windows" -->
<!-- id="4B6AFE23.20906_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B684208.5030601_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] totalview and message queue, empty windows<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 12:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Previous message:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="11961.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I figure out my issue.  We were building on Sles9 was causing the type 
<br>
field debug information not being generated for the .o.  So even though 
<br>
the type symbols could be found the field descriptions for those types 
<br>
could not because they were never generated.  Using Sles10 as the OS to 
<br>
compile and link on corrected the issue.
<br>
<p>I am not sure if this issue actually happens with other compilers but at 
<br>
least the Pathscale compiler run's into this issue.
<br>
<p>Note one of the things that helped me debug this issue was a SunStudio 
<br>
utility named dwarfdump which allows you to actually see the debugging 
<br>
symbols.
<br>
<p>Unfortunately, I still haven't tracked down Ashley's issue which I think 
<br>
probably has more to do with the OMPI code instead of the debugging 
<br>
information not being generated.
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Hi DevL, what compiler and options are you using to build OMPI.  I am 
</span><br>
<span class="quotelev1">&gt; seeing something similar (Warning messages and the Message Queue 
</span><br>
<span class="quotelev1">&gt; window having bizarre values) when building with the Pathscale 
</span><br>
<span class="quotelev1">&gt; compiler but I don't see this with SunStudio, gcc, Intel or PGI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I do see pending receives though there is no specific 
</span><br>
<span class="quotelev1">&gt; information on the actual communicators (name, size, rank).  It looks 
</span><br>
<span class="quotelev1">&gt; like some of the type symbols are not being kept in the .so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 28 Jan 2010, at 21:04, DevL wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it looks that there is an issue with totalview and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; openmpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; message queue just empty and output shows:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_ndims_or_nnodes of type 
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_dims_or_index of type mca_topo_base_comm_1_0_0_t 
</span><br>
<span class="quotelev2">&gt;&gt; not found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_periods_or_edges of type 
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_reorder of type mca_topo_base_comm_1_0_0_t not 
</span><br>
<span class="quotelev2">&gt;&gt; found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_ndims_or_nnodes of type 
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_dims_or_index of type mca_topo_base_comm_1_0_0_t 
</span><br>
<span class="quotelev2">&gt;&gt; not found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_periods_or_edges of type 
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; WARNING: Field mtc_reorder of type mca_topo_base_comm_1_0_0_t not 
</span><br>
<span class="quotelev2">&gt;&gt; found!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (Open MPI) 1.4a1r21427
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; totalview.8.7.0-7/linux-x86-64
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is this a known issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've not seen it before but I do know of problems with the 
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_comm_1_0_0_t type and the debugger plugin (which 
</span><br>
<span class="quotelev2">&gt;&gt; TotalView is calling).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and if so - how to overcome it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I don't know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Debugger plugin looks for the type (it's a struct) and then looks 
</span><br>
<span class="quotelev2">&gt;&gt; for some offsets within the struct. I've seen it fail to find the 
</span><br>
<span class="quotelev2">&gt;&gt; struct completely whereas this error appears to claim it can't find 
</span><br>
<span class="quotelev2">&gt;&gt; the entries within the struct. Perhaps the difference is that I found 
</span><br>
<span class="quotelev2">&gt;&gt; the problem using padb and you are using TotalView.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You could try the attached patch which allows the code to continue if 
</span><br>
<span class="quotelev2">&gt;&gt; the type isn't found, if you are seeing a different symptom of the 
</span><br>
<span class="quotelev2">&gt;&gt; same error then it might work for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As to the cause I've no idea, I've only seen it once or twice in the 
</span><br>
<span class="quotelev2">&gt;&gt; last six months and not on installations I've installed myself, I've 
</span><br>
<span class="quotelev2">&gt;&gt; never been able to find out the underlying cause and why some 
</span><br>
<span class="quotelev2">&gt;&gt; machines report this error and some don't.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev2">&gt;&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12006.php">Dave Goodell: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>Previous message:</strong> <a href="12004.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="11961.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
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
