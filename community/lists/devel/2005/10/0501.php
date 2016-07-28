<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 18:12:51 2005" -->
<!-- isoreceived="20051027231251" -->
<!-- sent="Thu, 27 Oct 2005 18:12:41 -0500" -->
<!-- isosent="20051027231241" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  MPI_Barrier in Netpipe causes segfault" -->
<!-- id="2EF236EB-20F6-4302-8B74-D324F847624C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051025032149.GB3275_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-27 18:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0502.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0502.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2005, at 10:21 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Oct 24, 2005 at 06:03:02PM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; troy_at_opteron1:/usr/src/netpipe3-dev$ mpirun -np 2 -mca  
</span><br>
<span class="quotelev2">&gt;&gt; btl_base_exclude
</span><br>
<span class="quotelev2">&gt;&gt; openib NPmpi
</span><br>
<span class="quotelev2">&gt;&gt; 1: opteron1
</span><br>
<span class="quotelev2">&gt;&gt; 0: opteron1
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 1 with PID 352 on node &quot;localhost&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 11.
</span><br>
<span class="quotelev2">&gt;&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is debian-amd64 (from
</span><br>
<span class="quotelev2">&gt;&gt; deb <a href="http://mirror.espri.arizona.edu/debian-amd64/debian/">http://mirror.espri.arizona.edu/debian-amd64/debian/</a> etch main )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Oct 24, 2005 at 10:36:29AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's a really weird backtrace - it seems to indicate that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype engine is improperly calling free().  Can you try running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without openib (add &quot;-mca btl_base_exclude openib&quot; to the mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arguments) and see if the problem goes away?  Also, what platform  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this on?
</span><br>
<p>I think we just committed a fix for this one on both the trunk and  
<br>
v1.0 branch.  Will be in the tarballs tomorrow morning.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Troy Benjegerdes: "MPI_Barrier in Netpipe causes segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0502.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Reply:</strong> <a href="0502.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
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
