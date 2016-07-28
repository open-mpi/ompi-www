<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 11:22:25 2007" -->
<!-- isoreceived="20070202162225" -->
<!-- sent="Fri, 2 Feb 2007 11:22:20 -0500" -->
<!-- isosent="20070202162220" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="2453e2900702020822x76fdd74aw3f9fb81dd9fc6efd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2089FA8A-9DDD-4503-8063-3DA835F9F4C4_at_cs.utk.edu" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 11:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2588.php">Heywood, Todd: "[OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2586.php">Vadivelan Ranjith: "[OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>In reply to:</strong> <a href="2584.php">George Bosilca: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2621.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2621.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That really did fix it, George:
<br>
<p># mpirun --prefix $MPIHOME -hostfile ~/testdir/hosts --mca btl
<br>
tcp,self --mca btl_tcp_if_exclude ib0,ib1 ~/testdir/hello
<br>
Hello from Alex' MPI test program
<br>
Process 0 on dr11.lsf.platform.com out of 2
<br>
Hello from Alex' MPI test program
<br>
Process 1 on compute-0-0.local out of 2
<br>
<p>It never occurred to me that the headnode would try to communicate
<br>
with the slave using infiniband interfaces... Orthogonally, what are
<br>
the industry standard OpenMPI benchmark tests I could run to perform a
<br>
real test?
<br>
<p>Thanks,
<br>
Alex.
<br>
<p>On 2/2/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can should try to limit the ethernet devices used by Open MPI during
</span><br>
<span class="quotelev1">&gt; the execution. Please add &quot;--mca btl_tcp_if_exclude eth1,ib0,ib1&quot; to
</span><br>
<span class="quotelev1">&gt; your mpirun command line and give it a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2588.php">Heywood, Todd: "[OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2586.php">Vadivelan Ranjith: "[OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>In reply to:</strong> <a href="2584.php">George Bosilca: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2621.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2621.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
