<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 10:16:42 2007" -->
<!-- isoreceived="20070122151642" -->
<!-- sent="Mon, 22 Jan 2007 10:16:36 -0500" -->
<!-- isosent="20070122151636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2" -->
<!-- id="D8441187-2F2F-4232-8CF0-5792FE9123BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45B16B04.6030608_at_apl.washington.edu" -->
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
<strong>Date:</strong> 2007-01-22 10:16:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2521.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2519.php">Axel Schweiger: "[OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2524.php">Axel Schweiger: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2524.php">Axel Schweiger: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at the web page for POP (<a href="http://climate.lanl.gov/Models/POP/">http://climate.lanl.gov/Models/POP/</a> 
<br>
index.shtml), it looks like POP 1.2 is pretty ancient.  I gather from  
<br>
your text that later versions work ok (&quot;POP 2&quot;).
<br>
<p>My first guess -- knowing nothing about the POP code itself -- is  
<br>
that there is a bug in the POP 1.2 code such that it is passing a bad  
<br>
parameter to MPI_CART_SHIFT, and that later versions (POP 2) fixed  
<br>
the problem.
<br>
<p>Do you know if this is the case?
<br>
<p><p>On Jan 19, 2007, at 8:06 PM, Axel Schweiger wrote:
<br>
<p><span class="quotelev1">&gt; I am having a problem running pop 1.2 (Parallel Ocean Model) with
</span><br>
<span class="quotelev1">&gt; OpenMPI version 1.1.2  compiled with PGI 6.2-4  on RH EL-4 Update 4
</span><br>
<span class="quotelev1">&gt; (configure result attached)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -v -np 4 -machinefile node18.dat pop
</span><br>
<span class="quotelev1">&gt; [node18:11220] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev1">&gt; [node18:11221] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev1">&gt; [node18:11221] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node18:11221] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node18:11221] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node18:11220] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node18:11220] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node18:11220] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application runs fine with MPICH 1.2.6 and other applications  
</span><br>
<span class="quotelev1">&gt; (POP 2) run fine with OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;configure_pgi_ext.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;axel.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2521.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2519.php">Axel Schweiger: "[OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2524.php">Axel Schweiger: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2524.php">Axel Schweiger: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
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
