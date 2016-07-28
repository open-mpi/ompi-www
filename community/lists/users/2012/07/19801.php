<?
$subject_val = "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 20 13:33:25 2012" -->
<!-- isoreceived="20120720173325" -->
<!-- sent="Fri, 20 Jul 2012 17:33:06 +0000 (UTC)" -->
<!-- isosent="20120720173306" -->
<!-- name="Jack Galloway" -->
<!-- email="jackg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue" -->
<!-- id="loom.20120720T193128-101_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB531B26-7887-4F25-911A-0EC68012DF5F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue<br>
<strong>From:</strong> Jack Galloway (<em>jackg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-20 13:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19800.php">Ralph Castain: "Re: [OMPI users] issue with 2 connected computers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4381.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19807.php">Paul Kapinos: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="19807.php">Paul Kapinos: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres &lt;at&gt; cisco.com&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 9:52 PM, Neeraj Chourasia wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     but the program is running on TCP interconnect with same  
</span><br>
<span class="quotelev2">&gt; &gt; datasize and also on IB with small datasize say 1MB. So i dont  
</span><br>
<span class="quotelev2">&gt; &gt; think problem is in OpenMPI, it has to do something with IB logic,  
</span><br>
<span class="quotelev2">&gt; &gt; which probably doesnt work well with threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPi's TCP nominally supports threads, but I'd be surprised if it  
</span><br>
<span class="quotelev1">&gt; works consistently (i.e., it has not been tested thoroughly).  The  
</span><br>
<span class="quotelev1">&gt; Open MPI IB code definitely does not yet work with threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I also tried the program with MPI_THREAD_SERIALIZED, but in vain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI currently treats this as no different than THREAD_SINGLE;  
</span><br>
<span class="quotelev1">&gt; the problem is that you'll still have multiple different threads  
</span><br>
<span class="quotelev1">&gt; calling MPI simultaneously with your program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  When is the version 1.3 scheduled to be released? Would it fix  
</span><br>
<span class="quotelev2">&gt; &gt; such issues?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  We had been planning to make THREAD_MULTIPLE support available  
</span><br>
<span class="quotelev1">&gt; in the 1.3 series, but there honestly has not been enough customer  
</span><br>
<span class="quotelev1">&gt; demand for it such that we could not justify putting the resources /  
</span><br>
<span class="quotelev1">&gt; spending the time to finish it in Open MPI.    THREAD_MULTIPLE is  
</span><br>
<span class="quotelev1">&gt; still on the long-term roadmap, but it will not be included in the  
</span><br>
<span class="quotelev1">&gt; 1.4 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is an old thread, and I'm curious if there is support now for this?  I have 
<br>
a large code that I'm running, a hybrid MPI/OpenMP code, that is having trouble 
<br>
over our infiniband network.  I'm running a fairly large problem (uses about 
<br>
18GB), and part way in, I get the following errors:
<br>
<p><p>[[929,1],0][btl_openib_component.c:3238:handle_wc] from tebow to: tebow416 error 
<br>
polling LP CQ with status LOCAL LENGTH ERROR status number 1 for wr_id 103761776 
<br>
opcode 128  vendor error 105 qp_idx 3
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 29873 on
<br>
node tebow exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>This seems very similar to the question that originated this thread, and since 
<br>
we're now on version 1.4.5 I was wondering if there was any better help for this 
<br>
(compiler options, run-time flags or anything), or if someone had encountered 
<br>
this problem and solved it.
<br>
<p>Thanks,
<br>
Jack
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19800.php">Ralph Castain: "Re: [OMPI users] issue with 2 connected computers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4381.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19807.php">Paul Kapinos: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="19807.php">Paul Kapinos: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
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
