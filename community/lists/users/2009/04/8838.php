<?
$subject_val = "Re: [OMPI users] Interaction between Intel and OpenMPI floating pointexceptions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 07:02:07 2009" -->
<!-- isoreceived="20090408110207" -->
<!-- sent="Wed, 8 Apr 2009 06:02:01 -0500" -->
<!-- isosent="20090408110201" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interaction between Intel and OpenMPI floating pointexceptions" -->
<!-- id="B6EDF192-D14E-4073-A0DE-B6F6E6099E5C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DA8ECF.2010606_at_nrlmry.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Interaction between Intel and OpenMPI floating pointexceptions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 07:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8839.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8837.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8798.php">Steve Lowder: "[OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2009, at 6:22 PM, Steve Lowder wrote:
<br>
<p><span class="quotelev1">&gt; When I run the MPI version and set --mca opal_signal 6,7,11 the code
</span><br>
<span class="quotelev1">&gt; doesn't abort on underflow.  I'd like to know if I'm interpreting this
</span><br>
<span class="quotelev1">&gt; behavior correctly, it appears that the mpi versus no mpi cases handle
</span><br>
<span class="quotelev1">&gt; underflow differently. I'm assuming OpenMPI has a handler that  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; the interrupts ahead of the Fortran RTL, stopping execution.   
</span><br>
<span class="quotelev1">&gt; Otherwise
</span><br>
<span class="quotelev1">&gt; the Fortran RTL handler would just ignore the underflow.  Do I sort of
</span><br>
<span class="quotelev1">&gt; understand what is going on here?  Is there another solution short of
</span><br>
<span class="quotelev1">&gt; the --mca opal_signal switch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>You are correct; Open MPI inserts an FPE handler unless you tell it  
<br>
to; your case is fairly special in that you *don't* want to see a  
<br>
signal/stack trace when an FPE occurs.  My $0.02 is that it is  
<br>
probably easiest to always run with the opal_signal MCA param value  
<br>
set to exclude the FPE handler, as you discovered.
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
<li><strong>Next message:</strong> <a href="8839.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8837.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8798.php">Steve Lowder: "[OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<!-- nextthread="start" -->
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
