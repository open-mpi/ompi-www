<?
$subject_val = "Re: [OMPI users] Sending large boradcasts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 16:58:38 2011" -->
<!-- isoreceived="20110103215838" -->
<!-- sent="Mon, 3 Jan 2011 16:58:14 -0500" -->
<!-- isosent="20110103215814" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending large boradcasts" -->
<!-- id="A560EB0E-033C-4D21-9372-22EA753D14F2_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6604D817-9B27-462E-BD92-46EB0E1DE17C_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending large boradcasts<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 16:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Previous message:</strong> <a href="15258.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>In reply to:</strong> <a href="15256.php">Brock Palen: "[OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi  Brock
<br>
<p>He's probably hitting the MPI address boundary of 2GB.
<br>
<p>A workaround is to declare a user defined type (MPI_TYPE_CONTIGUOUS,
<br>
or MPI_TYPE_VECTOR), to bundle a bunch of primitive data (e.g. reals),
<br>
then send (broadcast for him/her) a smaller number of those types.
<br>
<p>See this thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14792.php">http://www.open-mpi.org/community/lists/users/2010/11/14792.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14816.php">http://www.open-mpi.org/community/lists/users/2010/11/14816.php</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Jan 3, 2011, at 11:47 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I have a user who reports that sending a broadcast of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 540*1080 of reals (just over 2GB) fails with this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was reading the archives and there appears to be an issue with large messages.  I was a little confused, is there a way to send messages larger than 2GB?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The user has access to some IB machines, per a note in the archives there was an issue with writev() would this issue only be related to messages over ethernet?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks just trying to get some clarification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Previous message:</strong> <a href="15258.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>In reply to:</strong> <a href="15256.php">Brock Palen: "[OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
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
