<?
$subject_val = "Re: [OMPI users] totalview and message queue, empty windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 16:16:19 2010" -->
<!-- isoreceived="20100129211619" -->
<!-- sent="Fri, 29 Jan 2010 21:16:07 +0000" -->
<!-- isosent="20100129211607" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] totalview and message queue, empty windows" -->
<!-- id="685A5D20-280D-48EC-983A-085054D74F32_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4fe59ccf1001281304n38df00cbu228b31821e52c28a_at_mail.gmail.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 16:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11946.php">Jazcek Braden: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11944.php">Paul Wolfgang: "[OMPI users] MPI_Bcast hangs on with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="11916.php">DevL: "[OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11961.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 28 Jan 2010, at 21:04, DevL wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; it looks that there is an issue with totalview and
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; message queue just empty and output shows:
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_ndims_or_nnodes of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_dims_or_index of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_periods_or_edges of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_reorder of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_ndims_or_nnodes of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_dims_or_index of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_periods_or_edges of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; WARNING: Field mtc_reorder of type mca_topo_base_comm_1_0_0_t not found!
</span><br>
<span class="quotelev1">&gt; [
</span><br>
<span class="quotelev1">&gt;  (Open MPI) 1.4a1r21427
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; totalview.8.7.0-7/linux-x86-64
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; is this a known issue?
</span><br>
<p>I've not seen it before but I do know of problems with the mca_topo_base_comm_1_0_0_t type and the debugger plugin (which TotalView is calling).
<br>
<p><span class="quotelev1">&gt; and if so - how to overcome it ?
</span><br>
<p>I'm afraid I don't know.
<br>
<p>The Debugger plugin looks for the type (it's a struct) and then looks for some offsets within the struct.  I've seen it fail to find the struct completely whereas this error appears to claim it can't find the entries within the struct.  Perhaps the difference is that I found the problem using padb and you are using TotalView.
<br>
<p>You could try the attached patch which allows the code to continue if the type isn't found, if you are seeing a different symptom of the same error then it might work for you.
<br>
<p><p>

<br><p>
<p><p>As to the cause I've no idea, I've only seen it once or twice in the last six months and not on installations I've installed myself, I've never been able to find out the underlying cause and why some machines report this error and some don't.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11945/ompi-topo-type.patch">ompi-topo-type.patch</a>
</ul>
<!-- attachment="ompi-topo-type.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11946.php">Jazcek Braden: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11944.php">Paul Wolfgang: "[OMPI users] MPI_Bcast hangs on with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="11916.php">DevL: "[OMPI users] totalview and message queue, empty windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11961.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
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
