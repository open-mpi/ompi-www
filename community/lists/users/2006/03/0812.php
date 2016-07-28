<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 23:18:08 2006" -->
<!-- isoreceived="20060310041808" -->
<!-- sent="Thu, 9 Mar 2006 23:18:01 -0500" -->
<!-- isosent="20060310041801" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and MultiRail InfiniBand" -->
<!-- id="FEE2D337-FB92-4597-92A8-5C067C4E15E8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s556r2fuies9li_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2006-03-09 23:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Troy Telford: "[OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 6:41 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; I've got a machine that has the following config:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each node has two InfiniBand ports:
</span><br>
<span class="quotelev1">&gt;   * The first port is on fabric 'a' with switches for 'a'
</span><br>
<span class="quotelev1">&gt;   * The second port is on fabric 'b' with separate switches for 'b'
</span><br>
<span class="quotelev1">&gt;   * The two fabrics are not shared ('a' and 'b' can't communicate  
</span><br>
<span class="quotelev1">&gt; with one
</span><br>
<span class="quotelev1">&gt; another)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that Open MPI is perfectly capable of stripeing over both  
</span><br>
<span class="quotelev1">&gt; fabric
</span><br>
<span class="quotelev1">&gt; 'a' and 'b', and IIRC, this is the default behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does Open MPI handle the case where Open MPI puts all of its  
</span><br>
<span class="quotelev1">&gt; traffic on
</span><br>
<span class="quotelev1">&gt; the first IB port (ie. fabric 'a'), and leaves the second IB port (ie.
</span><br>
<span class="quotelev1">&gt; fabric 'b') free for other uses (I'll use NFS as a humorous example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, is there any magic required to configure it thusly?
</span><br>
<p>With mvapi, we don't have the functionality in place for the user to  
<br>
specify which HCA port is used.  The user can say that at most N HCA  
<br>
ports should be used through the btl_mvapi_max_btls MCA parameter.   
<br>
So in your case, if you ran Open MPI with:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -mca btl_mvapi_max_btls 1 -np X ./foobar
<br>
<p>Only the first active port would be used for mvapi communication.   
<br>
I'm not sure if this is enough for your needs or not.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Troy Telford: "[OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
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
