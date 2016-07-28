<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 28 13:08:48 2012" -->
<!-- isoreceived="20120328170848" -->
<!-- sent="Wed, 28 Mar 2012 14:08:42 -0300" -->
<!-- isosent="20120328170842" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="CABm3_qpe-Zz8r7x9gYwt9R1m8V9-bOCgg6faJzuKY6U3b6Z4Qg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qp-H68KWE+WqGdbjHN1dnZgrW-j+KjvD+Y_RhW3KtQFPQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-28 13:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18865.php">Ralph Castain: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18863.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p>I tested the execution of my code using the option -mca coll ^inter as you
<br>
suggested and the program worked fine, even when I use 1 server instance.
<br>
<p>What is the modification caused by this parameter? I did not find an
<br>
explanation about the utilization of the module coll inter.
<br>
<p>Thanks a lot for your attention and for the solution.
<br>
<p>Best regards,
<br>
<p>Rodrigo Oliveira
<br>
<p>On Tue, Mar 27, 2012 at 1:10 PM, Rodrigo Oliveira &lt;rsilva.oliveira_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Edgar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the response. I just did not understand why the Barrier works
</span><br>
<span class="quotelev1">&gt; before I remove one of the client processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tryed it with 1 server and 3 clients and it worked properly. After I
</span><br>
<span class="quotelev1">&gt; removed 1 of the clients, it stops working. So, the removal is affecting
</span><br>
<span class="quotelev1">&gt; the functionality of Barrier, I guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone has an idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 26, 2012 at 12:34 PM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not recall on what the agreement was on how to treat the size=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18865.php">Ralph Castain: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18863.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18866.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
