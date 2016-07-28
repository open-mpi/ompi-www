<?
$subject_val = "Re: [OMPI users] how to find the binding of each rank on the local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 00:07:38 2013" -->
<!-- isoreceived="20130210050738" -->
<!-- sent="Sat, 9 Feb 2013 21:07:31 -0800" -->
<!-- isosent="20130210050731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to find the binding of each rank on the local machine" -->
<!-- id="B9237B5E-AB49-4DC1-90ED-58D0BB4ADA3E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL97QqiAWaZu-LWhtLtvz16xsmSiyuqPLjMOE82CQ=Fbssvhrg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to find the binding of each rank on the local machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 00:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>In reply to:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Reply:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --report-bindings to the mpirun cmd line
<br>
<p>Remember, we do not bind processes by default, so you will need to include something about the binding to use (by core, by socket, etc.) on the cmd line
<br>
<p>See &quot;mpirun -h&quot; for the options
<br>
<p>On Feb 9, 2013, at 8:46 PM, Kranthi Kumar &lt;kranthipls_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Sir,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need a way to find out where each rank runs from inside the implementation? 
</span><br>
<span class="quotelev1">&gt; How do I  know the binding of each rank in an MPI application? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kranthi _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>In reply to:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Reply:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
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
