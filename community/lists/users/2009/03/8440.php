<?
$subject_val = "Re: [OMPI users] Compiling ompi for use on another machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 05:07:37 2009" -->
<!-- isoreceived="20090314090737" -->
<!-- sent="Sat, 14 Mar 2009 18:07:32 +0900" -->
<!-- isosent="20090314090732" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling ompi for use on another machine" -->
<!-- id="49BB73D4.2050503_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="COL106-W12E321C3CA78BEC4D0DA02CA9C0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling ompi for use on another machine<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 05:07:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>In reply to:</strong> <a href="8434.php">ben rodriguez: "[OMPI users] Compiling ompi for use on another machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Reply:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben,
<br>
<p><p>ben rodriguez wrote:
<br>
<span class="quotelev1">&gt; I have compiled ompi and another program for use on another rhel5/x86_64 machine, after transfering the binaries and setting up environment variables is there anything else I need to do for ompi to run properly? When executing my prog I get:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p>Just a few thoughts about your problem...
<br>
<p>Are the two machines identical in architecture and RH installation?  Is there any reason why you cannot compile on the other machine too?  (Sometimes the location of dynamic libraries, etc. changes so I try to make a note to always recompile on each machine.)  Are you having problems running your program on each node individually first?  If not, you might try that first (i.e., with &quot;--np 1&quot;).
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>In reply to:</strong> <a href="8434.php">ben rodriguez: "[OMPI users] Compiling ompi for use on another machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Reply:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
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
