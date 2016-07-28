<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 11:53:36 2007" -->
<!-- isoreceived="20070122165336" -->
<!-- sent="Mon, 22 Jan 2007 08:53:38 -0800" -->
<!-- isosent="20070122165338" -->
<!-- name="Axel Schweiger" -->
<!-- email="axel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2" -->
<!-- id="45B4EC12.20301_at_apl.washington.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D8441187-2F2F-4232-8CF0-5792FE9123BF_at_cisco.com" -->
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
<strong>From:</strong> Axel Schweiger (<em>axel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-22 11:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
Thanks for your reply. Yes POP 1.2 is dead w.r.t. development but our 
<br>
application still uses it. The 1.2 to 2.0 transition
<br>
involves a lot of physical differences and for a while at least we are 
<br>
stuck with 1.2.
<br>
<p>Can't say if there is a bug that was fixed since there was a lot of 
<br>
re-engineering going to 2.0. . But I do know that POP 1.2 works
<br>
fine with the MPICH MPI implementation. Wouldn't you expect that a bad 
<br>
parameters would produce the same error with MPICH?
<br>
<p>Thanks much
<br>
Axel
<br>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Looking at the web page for POP (<a href="http://climate.lanl.gov/Models/POP/">http://climate.lanl.gov/Models/POP/</a> 
</span><br>
<span class="quotelev1">&gt; index.shtml), it looks like POP 1.2 is pretty ancient.  I gather from  
</span><br>
<span class="quotelev1">&gt; your text that later versions work ok (&quot;POP 2&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first guess -- knowing nothing about the POP code itself -- is  
</span><br>
<span class="quotelev1">&gt; that there is a bug in the POP 1.2 code such that it is passing a bad  
</span><br>
<span class="quotelev1">&gt; parameter to MPI_CART_SHIFT, and that later versions (POP 2) fixed  
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know if this is the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2007, at 8:06 PM, Axel Schweiger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am having a problem running pop 1.2 (Parallel Ocean Model) with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI version 1.1.2  compiled with PGI 6.2-4  on RH EL-4 Update 4
</span><br>
<span class="quotelev2">&gt;&gt; (configure result attached)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -v -np 4 -machinefile node18.dat pop
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11220] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11221] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11221] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11221] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11221] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11220] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11220] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt;&gt; [node18:11220] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The application runs fine with MPICH 1.2.6 and other applications  
</span><br>
<span class="quotelev2">&gt;&gt; (POP 2) run fine with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;configure_pgi_ext.log.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;axel.vcf&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
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
