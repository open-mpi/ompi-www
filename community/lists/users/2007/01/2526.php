<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 15:01:21 2007" -->
<!-- isoreceived="20070122200121" -->
<!-- sent="Mon, 22 Jan 2007 11:59:06 -0800" -->
<!-- isosent="20070122195906" -->
<!-- name="Axel Schweiger" -->
<!-- email="axel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2" -->
<!-- id="45B5178A.6040506_at_apl.washington.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="27D4F1AA-A5EF-41BF-BE00-ADE3D3F51FBF_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-22 14:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>In reply to:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I'm afraid, I'm not familiar enough to dive into it. I suspect between 
<br>
the fact we have a working MPI
<br>
implementation (MPICH)  and the fact the this version of the pop model 
<br>
is superceded, it is probably
<br>
not worth the effort to spend a lot of time on it.
<br>
<p>I was hoping that this was maybe a &quot;typical&quot; error that could be treated 
<br>
with different compiler switches
<br>
or that it mapped to a  known bug/incompatability in OpenMPI.
<br>
<p>If this isn't the case it probably is best to drop it?
<br>
<p>Thanks for your offer to help though!
<br>
<p>Axel
<br>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 22, 2007, at 11:53 AM, Axel Schweiger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply. Yes POP 1.2 is dead w.r.t. development but our
</span><br>
<span class="quotelev2">&gt;&gt; application still uses it. The 1.2 to 2.0 transition
</span><br>
<span class="quotelev2">&gt;&gt; involves a lot of physical differences and for a while at least we are
</span><br>
<span class="quotelev2">&gt;&gt; stuck with 1.2.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Can't say if there is a bug that was fixed since there was a lot of
</span><br>
<span class="quotelev2">&gt;&gt; re-engineering going to 2.0. . But I do know that POP 1.2 works
</span><br>
<span class="quotelev2">&gt;&gt; fine with the MPICH MPI implementation. Wouldn't you expect that a bad
</span><br>
<span class="quotelev2">&gt;&gt; parameters would produce the same error with MPICH?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Usually, but not always.  Mostly, this involves problems with C  
</span><br>
<span class="quotelev1">&gt; codes, but it can happen in Fortran as well.  Specifically, different  
</span><br>
<span class="quotelev1">&gt; run-time behaviors of MPI implementations can sometimes result in a  
</span><br>
<span class="quotelev1">&gt; code that runs under one MPI and not under another, typically (but  
</span><br>
<span class="quotelev1">&gt; not always) if the code makes some assumptions or violates the  
</span><br>
<span class="quotelev1">&gt; standard in some way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see in OMPI's MPI_CART_SHIFT, we only return the &quot;bad communicator&quot;  
</span><br>
<span class="quotelev1">&gt; error if we get an invalid communicator or an intercommunicator.  Are  
</span><br>
<span class="quotelev1">&gt; you familiar with the POP code at all to be able to dive into it to  
</span><br>
<span class="quotelev1">&gt; see where the problem is actually occurring?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks much
</span><br>
<span class="quotelev2">&gt;&gt; Axel
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at the web page for POP (<a href="http://climate.lanl.gov/Models/POP/">http://climate.lanl.gov/Models/POP/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index.shtml), it looks like POP 1.2 is pretty ancient.  I gather from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your text that later versions work ok (&quot;POP 2&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My first guess -- knowing nothing about the POP code itself -- is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that there is a bug in the POP 1.2 code such that it is passing a bad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter to MPI_CART_SHIFT, and that later versions (POP 2) fixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know if this is the case?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 19, 2007, at 8:06 PM, Axel Schweiger wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having a problem running pop 1.2 (Parallel Ocean Model) with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI version 1.1.2  compiled with PGI 6.2-4  on RH EL-4 Update 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (configure result attached)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The error is as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -v -np 4 -machinefile node18.dat pop
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11220] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11221] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11221] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11221] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11221] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11220] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11220] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node18:11220] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The application runs fine with MPICH 1.2.6 and other applications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (POP 2) run fine with OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any suggestions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;configure_pgi_ext.log.gz&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;axel.vcf&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2526/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>In reply to:</strong> <a href="2525.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Reply:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
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
