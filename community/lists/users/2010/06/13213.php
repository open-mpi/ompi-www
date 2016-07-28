<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 13:51:45 2010" -->
<!-- isoreceived="20100602175145" -->
<!-- sent="Wed, 2 Jun 2010 13:51:41 -0400" -->
<!-- isosent="20100602175141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager." -->
<!-- id="FFF7BB1C-D714-448F-8B58-60E5ADACB78F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C069585.7030908_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 13:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 1:31 PM, guillaume ranquet wrote:
<br>
<p><span class="quotelev2">&gt; &gt; ~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self --mca pml ^cm ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the first command seems to be wrong, I had an error message:
</span><br>
<span class="quotelev1">&gt; MCA framework parameters can only take a single negation operator
</span><br>
<p>Correct.  Scott's 2nd one should be tried.
<br>
<p>Open MPI has 2 flavors of MX support: a BTL and an MTL.  You need to disable both of them. His 2nd command effectively does that:
<br>
<p>1. cm is the PML is uses MTLs; by disabling cm, you're disabling all MTLs -- including the MX MTL
<br>
2. By specifically listing openib,sm,self, you're only allowing those BTLs to be used (not the MX BTL).
<br>
<p><span class="quotelev1">&gt; granquet_at_bordeplage-9 ~/openmpi-1.4.2 $ ~/openmpi-1.4.2-bin/bin/mpirun
</span><br>
<span class="quotelev1">&gt; - --mca btl openib,sm,self --mca pml ^cm ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev1">&gt; granquet_at_bordeplage-9 ~/openmpi-1.4.2 $
</span><br>
<p>Good.
<br>
<p><span class="quotelev2">&gt; &gt; Ok, there is no segfault when it can't find IB.
</span><br>
<p>I'm not sure I follow this comment.
<br>
<p><span class="quotelev1">&gt;From your prior mails:
</span><br>
<p>- there's no segv when ptmalloc is disabled at run-time via the env var
<br>
- there's no segv when MX is completed disabled (both BTL and MTL)
<br>
<p>What happens if you run with only MX?  I *assume* that works with no segv...?
<br>
<p>It might be interesting to see what happens if you run with:
<br>
<p>mpirun --mca btl mx,openib,sm,self --mca pml ^cm --mca mpi_leave_pinned 0 ...yourapp...
<br>
<p>This should run with both verbs and MX, and the memory manager is in place at run-time, but it isn't being used to track memory.  That's slightly different than having the memory manager in place at run-time *and* using it to track memory.
<br>
<p><span class="quotelev1">&gt; the goal is to run the same version everywhere on every nodes (for the
</span><br>
<span class="quotelev1">&gt; sake of simplicity).
</span><br>
<span class="quotelev1">&gt; the current plans were targeting 1.4.1.
</span><br>
<span class="quotelev1">&gt; I don't think our users would mind upgrading to 1.4.2.
</span><br>
<p>FWIW, it *is* the same version on all nodes -- you're just running with different MCA parameter values.  Also FWIW, the sysadmin can hide these MCA params in a system-level file so that users don't have to deal with them, if that works for you.  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13214.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
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
