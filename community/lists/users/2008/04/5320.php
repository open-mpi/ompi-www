<?
$subject_val = "[OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 17:48:01 2008" -->
<!-- isoreceived="20080404214801" -->
<!-- sent="Fri, 4 Apr 2008 15:47:49 -0600" -->
<!-- isosent="20080404214749" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="[OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)" -->
<!-- id="d105ee120804041447k557dc4c6n59fdec44538c13d2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 17:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5321.php">Davi Vercillo C. Garcia: "[OMPI users] Introduce myself."</a>
<li><strong>Previous message:</strong> <a href="5319.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>Reply:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was hanging problems with 1.2.5 hanging during collective operations
<br>
(MPI_Gather and MPI_Barrier):
<br>
<p>2008/3/27 Matt Hughes &lt;matt.c.hughes_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;  A similar problem was reported in this message, and a 1.3 nightly was
</span><br>
<span class="quotelev1">&gt;  reported to work:
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/community/lists/users/2008/01/4891.php">http://www.open-mpi.org/community/lists/users/2008/01/4891.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I tested the code in that message, and it hangs (actually, runs very
</span><br>
<span class="quotelev1">&gt;  slowly after a few iterations) with 1.2.5, but works find with 1.3.
</span><br>
<p>I was able to eliminate the hang I was seeing with 1.2.5 during the
<br>
gather operation by using these btl parameters (found at
<br>
<a href="http://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/btl-openib-benchmark">http://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/btl-openib-benchmark</a>):
<br>
<p>&nbsp;btl_openib_max_btls=20
<br>
&nbsp;btl_openib_rd_num=128
<br>
&nbsp;btl_openib_rd_low=75
<br>
&nbsp;btl_openib_rd_win=50
<br>
&nbsp;btl_openib_max_eager_rdma=32
<br>
&nbsp;mpool_base_use_mem_hooks=1
<br>
&nbsp;mpi_leave_pinned=1
<br>
<p>Only the btl_openib_rd_low=75 and btl_openib_rd_num=128 parameters are
<br>
necessary to avoid the hang.
<br>
<p>The information given for the parameters in ompi_info is not very
<br>
helpful.  Can anyone explain (or point me to a reference) what these
<br>
parameters do and how they affect collective operations?
<br>
<p>Thanks,
<br>
mch
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My own code starts worker processes with MPI::Comm::Spawn, and does a
</span><br>
<span class="quotelev1">&gt;  series of Bcast's and Gather's from the parent process.  Large
</span><br>
<span class="quotelev1">&gt;  messages are passed between the spawned processes using ISend / IRecv
</span><br>
<span class="quotelev1">&gt;  / Wait, and that works fine.  The crash or hang is always observed in
</span><br>
<span class="quotelev1">&gt;  the parent process during the Gather operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I suspect this may have something to do with eager rdma, so I ran some
</span><br>
<span class="quotelev1">&gt;  tests with different values of btl_openib_use_eager_rdma.  On 1.2.5,
</span><br>
<span class="quotelev1">&gt;  no difference was observed.  It always hung after about 20 Gathers.
</span><br>
<span class="quotelev1">&gt;  On 1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Not set: parent process crashes with a null pointer dereference on
</span><br>
<span class="quotelev1">&gt;  the 10th Gather operation.
</span><br>
<span class="quotelev1">&gt;   * Set to 0: parent process crashes with a null pointer dereference on
</span><br>
<span class="quotelev1">&gt;  the 33rd Gather operation.
</span><br>
<span class="quotelev1">&gt;   * Set to 1: parent process hangs on the 7th Gather operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I built 1.3 in debug mode and attempted to narrow down where the crash
</span><br>
<span class="quotelev1">&gt;  (segfault due to null pointer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Before the crash, the stack trace looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #0  PMPI_Gather (sendbuf=0x7fbfffe494, sendcount=1, sendtype=0x2a958aab80,
</span><br>
<span class="quotelev1">&gt;     recvbuf=0xda1a40, recvcount=1, recvtype=0x2a958aab80, root=0,
</span><br>
<span class="quotelev1">&gt;     comm=0xd5bbd0) at pgather.c:138
</span><br>
<span class="quotelev1">&gt;  #1  0x0000000000608ff4 in MPI::Comm::Gather (this=0xcdd890,
</span><br>
<span class="quotelev1">&gt;     sendbuf=0x7fbfffe494, sendcount=1, sendtype=@0xa33950, recvbuf=0xda1a40,
</span><br>
<span class="quotelev1">&gt;     recvcount=1, recvtype=@0xa33950, root=0)
</span><br>
<span class="quotelev1">&gt;     at /home/matt/opt/openmpi/1.3/include/openmpi/ompi/mpi/cxx/comm_inln.h:325
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Stepping into comm-&gt;c_coll.coll_gather at pgather.c:138 results in an
</span><br>
<span class="quotelev1">&gt;  immediate crash, but comm-&gt;c_coll.coll_gather itself is not null (it
</span><br>
<span class="quotelev1">&gt;  is the same as for successful Gathers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Can anyone suggest where I can go from here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;  Matt Hughes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5321.php">Davi Vercillo C. Garcia: "[OMPI users] Introduce myself."</a>
<li><strong>Previous message:</strong> <a href="5319.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>Reply:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
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
