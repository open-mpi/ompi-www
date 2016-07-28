<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 10:43:37 2007" -->
<!-- isoreceived="20070206154337" -->
<!-- sent="Tue, 6 Feb 2007 10:43:15 -0500" -->
<!-- isosent="20070206154315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="08D53AF3-4BFC-44D8-A311-B5850044E06C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900702020822x76fdd74aw3f9fb81dd9fc6efd_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-02-06 10:43:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 2, 2007, at 11:22 AM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; That really did fix it, George:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun --prefix $MPIHOME -hostfile ~/testdir/hosts --mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self --mca btl_tcp_if_exclude ib0,ib1 ~/testdir/hello
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Process 0 on dr11.lsf.platform.com out of 2
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Process 1 on compute-0-0.local out of 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It never occurred to me that the headnode would try to communicate
</span><br>
<span class="quotelev1">&gt; with the slave using infiniband interfaces... Orthogonally, what are
</span><br>
<p>The problem here is that since your IB IP addresses are  
<br>
&quot;public&quot; (meaning that they're not in the IETF defined ranges for  
<br>
private IP addresses), Open MPI assumes that they can be used to  
<br>
communicate with your back-end nodes on the IPoIB network.  See this  
<br>
FAQ entry for details:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<p>If you update your IP addresses to be in the private range, Open MPI  
<br>
should do the Right routability computations and you shouldn't need  
<br>
to exclude anything.
<br>
<p><span class="quotelev1">&gt; the industry standard OpenMPI benchmark tests I could run to perform a
</span><br>
<span class="quotelev1">&gt; real test?
</span><br>
<p>Just about anything will work -- NetPIPE, the Intel Benchmarks, ...etc.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2627.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
