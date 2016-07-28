<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 08:17:42 2006" -->
<!-- isoreceived="20060310131742" -->
<!-- sent="Fri, 10 Mar 2006 08:17:40 -0500" -->
<!-- isosent="20060310131740" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and MultiRail InfiniBand" -->
<!-- id="4B467191-E7D5-4F90-8B0D-C10E43B9EE01_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FFA80A1B-30D7-42A6-9ECD-FE16DB8E53AB_at_linuxnetworx.com" -->
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
<strong>Date:</strong> 2006-03-10 08:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2006, at 2:24 AM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 9, 2006, at 9:18 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2006, at 6:41 PM, Troy Telford wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've got a machine that has the following config:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Each node has two InfiniBand ports:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * The first port is on fabric 'a' with switches for 'a'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * The second port is on fabric 'b' with separate switches for 'b'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * The two fabrics are not shared ('a' and 'b' can't communicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe that Open MPI is perfectly capable of stripeing over both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fabric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'a' and 'b', and IIRC, this is the default behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does Open MPI handle the case where Open MPI puts all of its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; traffic on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first IB port (ie. fabric 'a'), and leaves the second IB port
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ie.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fabric 'b') free for other uses (I'll use NFS as a humorous  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, is there any magic required to configure it thusly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With mvapi, we don't have the functionality in place for the user to
</span><br>
<span class="quotelev2">&gt;&gt; specify which HCA port is used.  The user can say that at most N HCA
</span><br>
<span class="quotelev2">&gt;&gt; ports should be used through the btl_mvapi_max_btls MCA parameter.
</span><br>
<span class="quotelev2">&gt;&gt; So in your case, if you ran Open MPI with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -mca btl_mvapi_max_btls 1 -np X ./foobar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only the first active port would be used for mvapi communication.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if this is enough for your needs or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So long as the second active port isn't touched by Open MPI, it
</span><br>
<span class="quotelev1">&gt; sounds just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing, though -- You mention mvapi, which IIRC is the 1st
</span><br>
<span class="quotelev1">&gt; Generation IB stack.  Is there similar functionality with the openib
</span><br>
<span class="quotelev1">&gt; btl (for the 2nd generation IB stack)?
</span><br>
<p>It looks like we never added similar logic to the Open IB transport.   
<br>
I'll pass your request on to the developer of our Open IB transport.  
<br>
Given our timeframe for releasing Open MPI 1.0.2, it's doubtful any  
<br>
change will make that release.  But it should definitely be possible  
<br>
to add such functionality in a future release.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0820.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>In reply to:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
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
