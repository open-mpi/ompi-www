<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 06:01:55 2006" -->
<!-- isoreceived="20060310110155" -->
<!-- sent="Fri, 10 Mar 2006 06:01:46 -0500" -->
<!-- isosent="20060310110146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="E9B04738-9857-433A-8C43-AA58139844F1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4410634A.4070305_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 06:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 12:18 PM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; - However compiling the mpi.f90 takes over 35 *minutes* with -O1.   
</span><br>
<span class="quotelev1">&gt; This seems a bit excessive...  I tried removing any -O option and  
</span><br>
<span class="quotelev1">&gt; things are just as slow. Is this behaviour related to open-mpi or  
</span><br>
<span class="quotelev1">&gt; to some wrong features of the Studio11 compiler ?
</span><br>
<p>You're not the first person to ask about this, so I've added the  
<br>
reasons why to the FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#f90-bindings-slow-compile">http://www.open-mpi.org/faq/?category=building#f90-bindings-slow-compile</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#f90-mpi-slow-compiles">http://www.open-mpi.org/faq/?category=mpi-apps#f90-mpi-slow-compiles</a>
<br>
<p>Brian is already working with you on the rest of the issues; I just  
<br>
thought I'd pipe in with the F90 stuff since I was one of the guys  
<br>
who did the F90 work in Open MPI.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0825.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
