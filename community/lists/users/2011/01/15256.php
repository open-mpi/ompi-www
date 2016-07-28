<?
$subject_val = "[OMPI users] Sending large boradcasts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 11:48:06 2011" -->
<!-- isoreceived="20110103164806" -->
<!-- sent="Mon, 3 Jan 2011 11:47:56 -0500" -->
<!-- isosent="20110103164756" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Sending large boradcasts" -->
<!-- id="6604D817-9B27-462E-BD92-46EB0E1DE17C_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Sending large boradcasts<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 11:47:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15257.php">óÅÒÇÅÊ òÅÊÍÅÒÏ×: "[OMPI users] Sending MPI-message from master to master"</a>
<li><strong>Previous message:</strong> <a href="15255.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Reply:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Maybe reply:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a user who reports that sending a broadcast of
<br>
<p>540*1080 of reals (just over 2GB) fails with this:
<br>
<p><p>*** An error occurred in MPI_Bcast
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_TRUNCATE: message truncated
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>I was reading the archives and there appears to be an issue with large messages.  I was a little confused, is there a way to send messages larger than 2GB?  
<br>
<p>The user has access to some IB machines, per a note in the archives there was an issue with writev() would this issue only be related to messages over ethernet?
<br>
<p>Thanks just trying to get some clarification.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15257.php">óÅÒÇÅÊ òÅÊÍÅÒÏ×: "[OMPI users] Sending MPI-message from master to master"</a>
<li><strong>Previous message:</strong> <a href="15255.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Reply:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Maybe reply:</strong> <a href="15260.php">David Singleton: "Re: [OMPI users] Sending large boradcasts"</a>
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
