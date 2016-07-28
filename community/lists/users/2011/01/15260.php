<?
$subject_val = "Re: [OMPI users] Sending large boradcasts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 17:14:50 2011" -->
<!-- isoreceived="20110103221450" -->
<!-- sent="Tue, 04 Jan 2011 09:14:41 +1100" -->
<!-- isosent="20110103221441" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending large boradcasts" -->
<!-- id="4D224A51.9060909_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22339_1294073365_4D21FE15_22339_36033_1_6604D817-9B27-462E-BD92-46EB0E1DE17C_at_umich.edu" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 17:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15261.php">’≈æß: "[OMPI users] Can openmpi run on two different operating system?"</a>
<li><strong>Previous message:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Maybe in reply to:</strong> <a href="15256.php">Brock Palen: "[OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15266.php">Jeff Squyres: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Reply:</strong> <a href="15266.php">Jeff Squyres: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brock,
<br>
<p>That message should only be 2MB.  Are you sure its not a mismatch of
<br>
message lengths in MPI_Bcast calls?
<br>
<p>David
<br>
<p>On 01/04/2011 03:47 AM, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I have a user who reports that sending a broadcast of
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15261.php">’≈æß: "[OMPI users] Can openmpi run on two different operating system?"</a>
<li><strong>Previous message:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Maybe in reply to:</strong> <a href="15256.php">Brock Palen: "[OMPI users] Sending large boradcasts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15266.php">Jeff Squyres: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Reply:</strong> <a href="15266.php">Jeff Squyres: "Re: [OMPI users] Sending large boradcasts"</a>
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
