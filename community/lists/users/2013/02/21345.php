<?
$subject_val = "Re: [OMPI users] how to find the binding of each rank on the local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 03:08:15 2013" -->
<!-- isoreceived="20130210080815" -->
<!-- sent="Sun, 10 Feb 2013 09:08:08 +0100" -->
<!-- isosent="20130210080808" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to find the binding of each rank on the local machine" -->
<!-- id="51175568.4040805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B9237B5E-AB49-4DC1-90ED-58D0BB4ADA3E_at_open-mpi.org" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 03:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21346.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21344.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>In reply to:</strong> <a href="21344.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Reply:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been talking with Kranthi offline, he wants to use locality info
<br>
inside OMPI. He needs the binding info from *inside* MPI. From 10
<br>
thousands feet, it looks like communicator-&gt;rank[X]-&gt;locality_info as a
<br>
hwloc object or as a hwloc bitmap.
<br>
<p>Brice
<br>
<p><p><p>Le 10/02/2013 06:07, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Add --report-bindings to the mpirun cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember, we do not bind processes by default, so you will need to include something about the binding to use (by core, by socket, etc.) on the cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See &quot;mpirun -h&quot; for the options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2013, at 8:46 PM, Kranthi Kumar &lt;kranthipls_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Sir,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need a way to find out where each rank runs from inside the implementation? 
</span><br>
<span class="quotelev2">&gt;&gt; How do I  know the binding of each rank in an MPI application? 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kranthi _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21346.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21344.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>In reply to:</strong> <a href="21344.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Reply:</strong> <a href="21351.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
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
