<?
$subject_val = "Re: [OMPI users] totalview and message queue, empty windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 10:18:02 2010" -->
<!-- isoreceived="20100202151802" -->
<!-- sent="Tue, 02 Feb 2010 10:17:28 -0500" -->
<!-- isosent="20100202151728" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] totalview and message queue, empty windows" -->
<!-- id="4B684208.5030601_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] totalview and message queue, empty windows" -->
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
<strong>Date:</strong> 2010-02-02 10:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11960.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11916.php">DevL: "[OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Reply:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi DevL, what compiler and options are you using to build OMPI.  I am 
<br>
seeing something similar (Warning messages and the Message Queue window 
<br>
having bizarre values) when building with the Pathscale compiler but I 
<br>
don't see this with SunStudio, gcc, Intel or PGI.
<br>
<p>However, I do see pending receives though there is no specific 
<br>
information on the actual communicators (name, size, rank).  It looks 
<br>
like some of the type symbols are not being kept in the .so.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 Jan 2010, at 21:04, DevL wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; it looks that there is an issue with totalview and
</span><br>
<span class="quotelev2">&gt; &gt; openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; message queue just empty and output shows:
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_ndims_or_nnodes of type mca_topo_base_comm_1_0_0_t 
</span><br>
<span class="quotelev1">&gt; not found!
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_dims_or_index of type mca_topo_base_comm_1_0_0_t 
</span><br>
<span class="quotelev1">&gt; not found!
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_periods_or_edges of type 
</span><br>
<span class="quotelev1">&gt; mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_reorder of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_ndims_or_nnodes of type mca_topo_base_comm_1_0_0_t 
</span><br>
<span class="quotelev1">&gt; not found!
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_dims_or_index of type mca_topo_base_comm_1_0_0_t 
</span><br>
<span class="quotelev1">&gt; not found!
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_periods_or_edges of type 
</span><br>
<span class="quotelev1">&gt; mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Field mtc_reorder of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev2">&gt; &gt; [
</span><br>
<span class="quotelev2">&gt; &gt; (Open MPI) 1.4a1r21427
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev2">&gt; &gt; totalview.8.7.0-7/linux-x86-64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is this a known issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've not seen it before but I do know of problems with the 
</span><br>
<span class="quotelev1">&gt; mca_topo_base_comm_1_0_0_t type and the debugger plugin (which 
</span><br>
<span class="quotelev1">&gt; TotalView is calling).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and if so - how to overcome it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Debugger plugin looks for the type (it's a struct) and then looks 
</span><br>
<span class="quotelev1">&gt; for some offsets within the struct. I've seen it fail to find the 
</span><br>
<span class="quotelev1">&gt; struct completely whereas this error appears to claim it can't find 
</span><br>
<span class="quotelev1">&gt; the entries within the struct. Perhaps the difference is that I found 
</span><br>
<span class="quotelev1">&gt; the problem using padb and you are using TotalView.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could try the attached patch which allows the code to continue if 
</span><br>
<span class="quotelev1">&gt; the type isn't found, if you are seeing a different symptom of the 
</span><br>
<span class="quotelev1">&gt; same error then it might work for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to the cause I've no idea, I've only seen it once or twice in the 
</span><br>
<span class="quotelev1">&gt; last six months and not on installations I've installed myself, I've 
</span><br>
<span class="quotelev1">&gt; never been able to find out the underlying cause and why some machines 
</span><br>
<span class="quotelev1">&gt; report this error and some don't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11960.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11916.php">DevL: "[OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Reply:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
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
