<?
$subject_val = "Re: [OMPI users] Need some help regarding Linpack execution";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 10:09:38 2008" -->
<!-- isoreceived="20080702140938" -->
<!-- sent="Wed, 02 Jul 2008 08:09:28 -0600" -->
<!-- isosent="20080702140928" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need some help regarding Linpack execution" -->
<!-- id="C490E838.E16B%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF0B7003D5.93F1CCBC-ON8525747A.004D3DD1-8525747A.004D4EE2_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need some help regarding Linpack execution<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 10:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6012.php">Brock Palen: "[OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6010.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<li><strong>In reply to:</strong> <a href="6010.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You also might want to resend this to the MPICH mailing list &#173; this is the
<br>
Open MPI mailing list
<br>
<p>;-)
<br>
<p><p>On 7/2/08 8:03 AM, &quot;Swamy Kandadai&quot; &lt;swamy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; May be you do not have 12 entries in your machine.list file. You need to have
</span><br>
<span class="quotelev1">&gt; atleast np lines in your machine.list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Swamy N. Kandadai
</span><br>
<span class="quotelev1">&gt; IBM Senior Certified Executive IT Specialist
</span><br>
<span class="quotelev1">&gt; STG WW  Modular Systems Benchmark Center
</span><br>
<span class="quotelev1">&gt; STG WW HPC and BI CoC Benchmark Center
</span><br>
<span class="quotelev1">&gt; Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
</span><br>
<span class="quotelev1">&gt; swamy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
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
<span class="quotelev1">&gt; &quot;Aditya Vasal&quot; &lt;Aditya.Vasal_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Aditya Vasal&quot; &lt;Aditya.Vasal_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent by: users-bounces_at_[hidden] 07/02/2008 07:36 AM Please respond to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cc 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [OMPI users] Need some help regarding Linpack execution
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I want to perform LINPACK test on my m/c, I have only 1 GB RAM on the m/c
</span><br>
<span class="quotelev1">&gt; where I want to run 12 parallel Linpack processes on SLES 10.
</span><br>
<span class="quotelev1">&gt; I am using of Mpich-1.2.7p1. (Mpich is built with &#173;rsh=ssh option)
</span><br>
<span class="quotelev1">&gt; I have modified HPL.dat accordingly,
</span><br>
<span class="quotelev1">&gt;             P = 3
</span><br>
<span class="quotelev1">&gt;             Q = 4    (so as to make PxQ = 12)
</span><br>
<span class="quotelev1">&gt;             N = 8640 (so as to make use of only 56% of available memory and
</span><br>
<span class="quotelev1">&gt; leave rest for host processes)
</span><br>
<span class="quotelev1">&gt;             NB = 11520
</span><br>
<span class="quotelev1">&gt; I have also set ulimit &#173;l unlimited..
</span><br>
<span class="quotelev1">&gt; Created a machine.list file by specifying my m/c&#185;s IP address 12 times. (So as
</span><br>
<span class="quotelev1">&gt; to execute all 12 processes on the same m/c) and using GotoBLAS for the
</span><br>
<span class="quotelev1">&gt; Linpack execution
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Execution command:
</span><br>
<span class="quotelev1">&gt; mpirun &#173;np 12 &#173;machinefile machine.list xhpl
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Upon execution, I get following error:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;             HPL ERROR from process # 0, on line 419 of function HPL_pdinfo:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Need at least 12 processes for these tests &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please guide me where am I going wrong
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Aditya  Vasal 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Software Engg | Semiconductor Solutions Group |KPIT Cummins Infosystems Ltd. |
</span><br>
<span class="quotelev1">&gt; +91 99 70 168 581 |Aditya.Vasal_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:%7CAditya.Vasal_at_[hidden]&gt;  |www.kpitcummins.com
</span><br>
<span class="quotelev1">&gt; &lt;blocked::&quot;&gt;<a href="http://www.kpitcummins.com/">http://www.kpitcummins.com/</a>&gt; &lt;<a href="http://www.kpitcummins.com/">http://www.kpitcummins.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><p>
<p><p>








<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/image.gif" alt="image.gif">
<!-- attachment="image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/03-image.gif" alt="image.gif">
<!-- attachment="03-image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/04-image.gif" alt="image.gif">
<!-- attachment="04-image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/05-image.gif" alt="image.gif">
<!-- attachment="05-image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/06-image.gif" alt="image.gif">
<!-- attachment="06-image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/07-image.gif" alt="image.gif">
<!-- attachment="07-image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/08-image.gif" alt="image.gif">
<!-- attachment="08-image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/09-image.gif" alt="image.gif">
<!-- attachment="09-image.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-6011/10-image.gif" alt="image.gif">
<!-- attachment="10-image.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6012.php">Brock Palen: "[OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6010.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<li><strong>In reply to:</strong> <a href="6010.php">Swamy Kandadai: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<!-- nextthread="start" -->
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
