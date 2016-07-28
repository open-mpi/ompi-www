<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 19:41:23 2007" -->
<!-- isoreceived="20070323234123" -->
<!-- sent="Fri, 23 Mar 2007 19:41:05 -0400" -->
<!-- isosent="20070323234105" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cell EIB support for OpenMPI" -->
<!-- id="FD4D51A4-B980-4B3E-B24A-96621DA60976_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4602AF2C.30803_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 19:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2907.php">George Bosilca: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The main problem with MPI is the huge number of function in the API.  
<br>
Even if we implement only the 1.0 standard we still have several  
<br>
hundreds of functions around. Moreover, an MPI library is far from  
<br>
being a simple self-sufficient library, it requires a way to start  
<br>
and monitor processes, interact with the operating system and so on.  
<br>
All in all we end up with a multi-hundreds KB library which in most  
<br>
of the applications will be only used at 10%.
<br>
<p>We investigated this possiblity few months ago, but in front of the  
<br>
task of removing all unnecessary functions from Open MPI in order to  
<br>
get something that can fit in the 256KB of memory on the SPU (and of  
<br>
course still leave some empty room for the user) ... Moreover, most  
<br>
of the Cell users we talked with, are not interested to have MPI  
<br>
between the SPU. There is only one thing they're looking for,  
<br>
removing the last unused SPU cycle from the pipeline !!! There is no  
<br>
room for anything MPI-like at that level.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 22, 2007, at 12:30 PM, Marcus G. Daniels wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone investigated adding intra chip Cell EIB messaging to  
</span><br>
<span class="quotelev1">&gt; OpenMPI?
</span><br>
<span class="quotelev1">&gt; It seems like it ought to work.  This paper seems pretty convincing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.fsu.edu/research/reports/TR-061215.pdf">http://www.cs.fsu.edu/research/reports/TR-061215.pdf</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2907.php">George Bosilca: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2909.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
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
