<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 08:45:36 2016" -->
<!-- isoreceived="20160316124536" -->
<!-- sent="Wed, 16 Mar 2016 07:45:35 -0500" -->
<!-- isosent="20160316124535" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E9556F.2020402_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56E94C35.3090607_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with MPI_Register_datarep<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 08:45:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28713.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28711.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28711.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/16/2016 7:06 AM, &#201;ric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Le 16-03-14 15:07, Rob Latham a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On mpich's discussion list the point was made that libraries like HDF5
</span><br>
<span class="quotelev2">&gt;&gt; and (Parallel-)NetCDF provide not only the sort of platform
</span><br>
<span class="quotelev2">&gt;&gt; portability Eric desires, but also provide a self-describing file format.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; But I do not agree with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If MPI can provide me a simple solution like user datarep, why in the
</span><br>
<span class="quotelev1">&gt; world would I bind my code to another library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead of re-coding all my I/O in my code, I would prefer to contribute
</span><br>
<span class="quotelev1">&gt; to MPI I/O implementations out there...  :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the never answered question: How big is that task????
</span><br>
<p>Just speaking for OMPIO: there is a simple solution which would 
<br>
basically perform the necessary conversion of the user buffer as a first 
<br>
step. This implementation would be fairly straight forward, but would 
<br>
require a temporary buffer that is basically of the same size (or 
<br>
larger, depending on the format) as your input buffer, which would be a 
<br>
problem for many application scenarios.
<br>
<p>The problem with trying to perform the conversion at a later step is, 
<br>
that all the buffers are treated as byte sequences internally, so the 
<br>
notion of data types is lost at one point in time. This is especially 
<br>
important for collective I/O, since the aggregation step might in some 
<br>
extreme situations even break up a datatype to be written in different 
<br>
cycles (or by different aggregators) internally.
<br>
<p>That being said, I admit that I haven't spent too much time thinking 
<br>
about solutions to this problem. If there is interest, I am would be 
<br>
happy to work on it - and happy to accept help :-)
<br>
<p>Edgar
<br>
<p><span class="quotelev1">&gt; Also, in 2012, I can state that having looked at HDF5, there was no
</span><br>
<span class="quotelev1">&gt; functions that used collective MPI I/O for *randomly distributed*
</span><br>
<span class="quotelev1">&gt; data...  Collective I/O was available only for &quot;structured&quot; data. So I
</span><br>
<span class="quotelev1">&gt; coded it all directly into MPI natives calls... and it works like a charm!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28711.php">http://www.open-mpi.org/community/lists/users/2016/03/28711.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28713.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28711.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28711.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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
