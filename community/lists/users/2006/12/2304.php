<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  5 18:15:33 2006" -->
<!-- isoreceived="20061205231533" -->
<!-- sent="Tue, 05 Dec 2006 16:15:29 -0700" -->
<!-- isosent="20061205231529" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="4575FD91.5080500_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="143CCBCC-AF71-441C-B12D-BC718D7F90FD_at_umich.edu" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-05 18:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2305.php">Aaron McDonough: "[OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2302.php">Brock Palen: "[OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2311.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt;I was asked by mirycom to run a test using the data reliability pml.   
</span><br>
<span class="quotelev1">&gt;(dr)  I ran it like so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpirun  --mca pml dr -np 4 ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is this the right format for running the dr pml?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
This should be fine, yes.
<br>
I can running HPL on our test cluster to see if something is wrong with DR.
<br>
I assume you are using GM and not MX?
<br>
Can you try running a simple ping-pong to make sure we have the basics 
<br>
on this platform?
<br>
If you have access to them, running the intel test suite would also be 
<br>
helpful in determining if/where we have an issue.
<br>
<p><span class="quotelev1">&gt;Is there any gotchas on using the dr pml?
</span><br>
<span class="quotelev1">&gt;also if the dr pml is finding errors, and is resending data, can i  
</span><br>
<span class="quotelev1">&gt;have it tell me when that happens?  Like a verbose mode?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Unfortunately you will need to update the source and recompile, try:
<br>
<p>Updating this file: topdir/ompi/mca/pml/dr/pml_dr.h:245:#define 
<br>
MCA_PML_DR_DEBUG_LEVEL -1
<br>
And change MCA_PML_DR_DEBUG_LEVEL to 0..
<br>
<p><span class="quotelev1">&gt;I also tried the following (just praying)  That it might work,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpirun  --mca pml dr --mca btl ^gm -np 4 ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
You are telling Open MPI not to use GM in this case...
<br>
<p><span class="quotelev1">&gt;I still get no output to the screen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is on G5 xserve, with 1.2b1 OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brock Palen
</span><br>
<span class="quotelev1">&gt;Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt;brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;(734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2305.php">Aaron McDonough: "[OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>In reply to:</strong> <a href="2302.php">Brock Palen: "[OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2311.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
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
