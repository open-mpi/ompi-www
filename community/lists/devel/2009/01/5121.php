<?
$subject_val = "Re: [OMPI devel] size of shared-memory backing file + maffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 02:55:48 2009" -->
<!-- isoreceived="20090113075548" -->
<!-- sent="Tue, 13 Jan 2009 09:55:41 +0200" -->
<!-- isosent="20090113075541" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] size of shared-memory backing file + maffinity" -->
<!-- id="453d39990901122355n6231af0ar8d6aae465fc58c95_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="496BA1C5.50207_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] size of shared-memory backing file + maffinity<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 02:55:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>Previous message:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5118.php">Eugene Loh: "[OMPI devel] size of shared-memory backing file + maffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5141.php">Eugene Loh: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Reply:</strong> <a href="5141.php">Eugene Loh: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually the size is suppose to be the same,
<br>
It just suppose to bind process to it's closer memory node, instead of
<br>
leaving it to OS.
<br>
<p>see:
<br>
mpool_sm_module.c:82:        opal_maffinity_base_bind(&amp;mseg, 1,
<br>
mpool_sm-&gt;mem_node);
<br>
<p><p>Best regards
<br>
Lenny.
<br>
<p>On Mon, Jan 12, 2009 at 10:02 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm trying to understand how much shared memory is allocated when maffinity
</span><br>
<span class="quotelev1">&gt; is on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sm BTL sets up a file that is mmapped into each local process's address
</span><br>
<span class="quotelev1">&gt; space so that the processes on a node can communicate via shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, when maffinity indicates that there are multiple &quot;memory nodes&quot; on
</span><br>
<span class="quotelev1">&gt; the node, then a separate file is set up and mmapped for each &quot;memory node&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an MCA parameter named &quot;[mpool_sm_per_]peer_size&quot;, which by default
</span><br>
<span class="quotelev1">&gt; is 32 Mbytes.  The idea is that there are n processes on the node, then the
</span><br>
<span class="quotelev1">&gt; size of the file to be mmapped in is n*32M.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if there are multiple &quot;memory nodes&quot;, will there be that much more
</span><br>
<span class="quotelev1">&gt; shared memory?  That is, is the total amount of shared memory that's mmapped
</span><br>
<span class="quotelev1">&gt; into all the processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mem_nodes * num_local_procs * peer_size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, should the file for a memory node be created with size proportional to
</span><br>
<span class="quotelev1">&gt; the number of processes that correspond to that memory node?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>Previous message:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5118.php">Eugene Loh: "[OMPI devel] size of shared-memory backing file + maffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5141.php">Eugene Loh: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Reply:</strong> <a href="5141.php">Eugene Loh: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
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
