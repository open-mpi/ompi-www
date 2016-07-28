<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 21:34:52 2007" -->
<!-- isoreceived="20070324013452" -->
<!-- sent="Fri, 23 Mar 2007 19:33:39 -0600" -->
<!-- isosent="20070324013339" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cell EIB support for OpenMPI" -->
<!-- id="46047FF3.9070609_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD4D51A4-B980-4B3E-B24A-96621DA60976_at_cs.utk.edu" -->
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
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 21:33:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Previous message:</strong> <a href="2908.php">George Bosilca: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2908.php">George Bosilca: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; All in all we end up with a multi-hundreds KB library which in most  
</span><br>
<span class="quotelev1">&gt; of the applications will be only used at 10%.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Seems like it ought to be possible to do some coverage analysis for a 
<br>
particular application and figure out what parts of the library (and 
<br>
user code) to make adjacent in memory.  Then the 10% could be put in the 
<br>
same overlay.   Seems like the EIB is quite fast and can take some abuse 
<br>
in terms of swapping.
<br>
<span class="quotelev1">&gt; Moreover, most  
</span><br>
<span class="quotelev1">&gt; of the Cell users we talked with, are not interested to have MPI  
</span><br>
<span class="quotelev1">&gt; between the SPU. There is only one thing they're looking for,  
</span><br>
<span class="quotelev1">&gt; removing the last unused SPU cycle from the pipeline !!! There is no  
</span><br>
<span class="quotelev1">&gt; room for anything MPI-like at that level.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I imagine that OpenMP might be good option for the Cell and even sounds 
<br>
like maybe there will be a GCC option:
<br>
<p><a href="http://gcc.gnu.org/ml/gcc-patches/2006-05/msg00987.html">http://gcc.gnu.org/ml/gcc-patches/2006-05/msg00987.html</a>
<br>
<p>..but even so, there are more existing scientific codes for MPI than 
<br>
OpenMP.    Even if the thing was a dog initially, and yielded 2 speed 
<br>
ups instead of 10 compared to typical CPUs, it would still be useful for 
<br>
installations with large Cell deployments that could well be risking 
<br>
underutilization or hogging due to poor tools support.  
<br>
<p>I have not investigated how much of the SPU C library stuff is missing 
<br>
to make OpenMPI compile, but that's at least fixable and independently 
<br>
useful thing to have for Cell users.
<br>
<p>Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Previous message:</strong> <a href="2908.php">George Bosilca: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2908.php">George Bosilca: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
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
