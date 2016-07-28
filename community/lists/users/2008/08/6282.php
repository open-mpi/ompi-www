<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 13:44:08 2008" -->
<!-- isoreceived="20080806174408" -->
<!-- sent="Wed, 6 Aug 2008 13:44:03 -0400" -->
<!-- isosent="20080806174403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="6DA584B0-F402-46BB-AEC4-F74BA0FFF1C6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4899D362.3050207_at_offis.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 13:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6283.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2008, at 12:37 PM, Jan Ploski wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm using the latest of Open MPI compiled with debug turned on, and  
</span><br>
<span class="quotelev2">&gt;&gt; valgrind 3.3.0. From your trace it looks like there is a conflict  
</span><br>
<span class="quotelev2">&gt;&gt; between two memory managers. I'm not having the same problem as I  
</span><br>
<span class="quotelev2">&gt;&gt; disable the Open MPI memory manager on my builds (configure option  
</span><br>
<span class="quotelev2">&gt;&gt; --without-memory-manager).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the tip! I confirm that the problem goes away after  
</span><br>
<span class="quotelev1">&gt; rebuilding --without-memory-manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I also have the same problem in another cluster, I'd like to know  
</span><br>
<span class="quotelev1">&gt; what side effects using this configuration option might have before  
</span><br>
<span class="quotelev1">&gt; suggesting it as a solution to that cluster's admin. I didn't find  
</span><br>
<span class="quotelev1">&gt; an explanation of what it does in the FAQ (beyond a recommendation  
</span><br>
<span class="quotelev1">&gt; to use it for static builds). Could you please explain this option,  
</span><br>
<span class="quotelev1">&gt; especially why one might want to *not* use it?
</span><br>
<p>This is on my to-do list (add this to the FAQ); sorry it isn't done yet.
<br>
<p>Here's a recent post where I've explained it a bit more:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/07/6161.php">http://www.open-mpi.org/community/lists/users/2008/07/6161.php</a>
<br>
<p>Let me know if you'd like to know more.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6283.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
