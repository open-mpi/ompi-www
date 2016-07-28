<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 02:24:55 2006" -->
<!-- isoreceived="20060310072455" -->
<!-- sent="Fri, 10 Mar 2006 00:24:50 -0700" -->
<!-- isosent="20060310072450" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and MultiRail InfiniBand" -->
<!-- id="FFA80A1B-30D7-42A6-9ECD-FE16DB8E53AB_at_linuxnetworx.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FEE2D337-FB92-4597-92A8-5C067C4E15E8_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 02:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0814.php">Ravi Manumachu: "[OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 9:18 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 9, 2006, at 6:41 PM, Troy Telford wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've got a machine that has the following config:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each node has two InfiniBand ports:
</span><br>
<span class="quotelev2">&gt;&gt;   * The first port is on fabric 'a' with switches for 'a'
</span><br>
<span class="quotelev2">&gt;&gt;   * The second port is on fabric 'b' with separate switches for 'b'
</span><br>
<span class="quotelev2">&gt;&gt;   * The two fabrics are not shared ('a' and 'b' can't communicate
</span><br>
<span class="quotelev2">&gt;&gt; with one
</span><br>
<span class="quotelev2">&gt;&gt; another)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe that Open MPI is perfectly capable of stripeing over both
</span><br>
<span class="quotelev2">&gt;&gt; fabric
</span><br>
<span class="quotelev2">&gt;&gt; 'a' and 'b', and IIRC, this is the default behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does Open MPI handle the case where Open MPI puts all of its
</span><br>
<span class="quotelev2">&gt;&gt; traffic on
</span><br>
<span class="quotelev2">&gt;&gt; the first IB port (ie. fabric 'a'), and leaves the second IB port  
</span><br>
<span class="quotelev2">&gt;&gt; (ie.
</span><br>
<span class="quotelev2">&gt;&gt; fabric 'b') free for other uses (I'll use NFS as a humorous example).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, is there any magic required to configure it thusly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With mvapi, we don't have the functionality in place for the user to
</span><br>
<span class="quotelev1">&gt; specify which HCA port is used.  The user can say that at most N HCA
</span><br>
<span class="quotelev1">&gt; ports should be used through the btl_mvapi_max_btls MCA parameter.
</span><br>
<span class="quotelev1">&gt; So in your case, if you ran Open MPI with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -mca btl_mvapi_max_btls 1 -np X ./foobar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only the first active port would be used for mvapi communication.
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is enough for your needs or not.
</span><br>
<p>So long as the second active port isn't touched by Open MPI, it  
<br>
sounds just fine.
<br>
<p>One thing, though -- You mention mvapi, which IIRC is the 1st  
<br>
Generation IB stack.  Is there similar functionality with the openib  
<br>
btl (for the 2nd generation IB stack)?
<br>
<p>Thanks!
<br>
<p>Troy
<br>
&nbsp;&nbsp;Telford
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0814.php">Ravi Manumachu: "[OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0812.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
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
