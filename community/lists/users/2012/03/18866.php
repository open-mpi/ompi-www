<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 28 17:03:24 2012" -->
<!-- isoreceived="20120328210324" -->
<!-- sent="Wed, 28 Mar 2012 16:03:17 -0500" -->
<!-- isosent="20120328210317" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="4F737C95.8040003_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qpe-Zz8r7x9gYwt9R1m8V9-bOCgg6faJzuKY6U3b6Z4Qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-28 17:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18865.php">Ralph Castain: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18864.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18941.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18941.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
it just uses a different algorithm which avoids the bcast on a
<br>
communicator of 1 (which is causing the problem here).
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 3/28/2012 12:08 PM, Rodrigo Oliveira wrote:
<br>
<span class="quotelev1">&gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested the execution of my code using the option -mca coll ^inter as
</span><br>
<span class="quotelev1">&gt; you suggested and the program worked fine, even when I use 1 server
</span><br>
<span class="quotelev1">&gt; instance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the modification caused by this parameter? I did not find an
</span><br>
<span class="quotelev1">&gt; explanation about the utilization of the module coll inter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your attention and for the solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 27, 2012 at 1:10 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt; &lt;rsilva.oliveira_at_[hidden] &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Edgar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Thanks for the response. I just did not understand why the Barrier
</span><br>
<span class="quotelev1">&gt;     works before I remove one of the client processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I tryed it with 1 server and 3 clients and it worked properly. After
</span><br>
<span class="quotelev1">&gt;     I removed 1 of the clients, it stops working. So, the removal is
</span><br>
<span class="quotelev1">&gt;     affecting the functionality of Barrier, I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Anyone has an idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Mon, Mar 26, 2012 at 12:34 PM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I do not recall on what the agreement was on how to treat the size=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18866/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18867.php">Rohan Deshpande: "[OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18865.php">Ralph Castain: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18864.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18941.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18941.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
