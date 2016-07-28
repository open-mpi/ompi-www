<?
$subject_val = "Re: [OMPI users] Default to TCP/IP?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 21:15:48 2008" -->
<!-- isoreceived="20080911011548" -->
<!-- sent="Wed, 10 Sep 2008 21:14:59 -0400" -->
<!-- isosent="20080911011459" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default to TCP/IP?" -->
<!-- id="27765958-DEE6-4563-B4B1-A24ABC953FB5_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="684A19A1-35AF-4279-BF70-E6F7A3111C02_at_gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Default to TCP/IP?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 21:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6505.php">Christopher Tanner: "[OMPI users] Default to TCP/IP?"</a>
<li><strong>In reply to:</strong> <a href="6505.php">Christopher Tanner: "[OMPI users] Default to TCP/IP?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By default it will fail back to tcp,
<br>
<p>You will get a bunch of message about not finding any hca's when you  
<br>
are built with OpenIB and its not working.
<br>
<p>You can also always force it to not look for openib
<br>
<p>mpirun --mca btl ^openib app
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Sep 10, 2008, at 9:08 PM, Christopher Tanner wrote:
<br>
<span class="quotelev1">&gt; I compiled the Open MPI source with openib support. However, the  
</span><br>
<span class="quotelev1">&gt; Infiniband part is still not working right (I had to build it from  
</span><br>
<span class="quotelev1">&gt; source since I'm using Ubuntu, and it's a mess).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I execute 'mpirun', I assume it will automatically look to  
</span><br>
<span class="quotelev1">&gt; communicate using Infiniband. However, since Infiniband is not  
</span><br>
<span class="quotelev1">&gt; working, will Open MPI default back to using the standard ethernet  
</span><br>
<span class="quotelev1">&gt; connection or will it just not work at all? Is there a way to tell  
</span><br>
<span class="quotelev1">&gt; Open MPI to do so in some configuration file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; Chris Tanner
</span><br>
<span class="quotelev1">&gt; Space Systems Design Lab
</span><br>
<span class="quotelev1">&gt; Georgia Institute of Technology
</span><br>
<span class="quotelev1">&gt; christopher.tanner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6505.php">Christopher Tanner: "[OMPI users] Default to TCP/IP?"</a>
<li><strong>In reply to:</strong> <a href="6505.php">Christopher Tanner: "[OMPI users] Default to TCP/IP?"</a>
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
