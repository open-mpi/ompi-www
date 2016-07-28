<?
$subject_val = "Re: [OMPI users] flash2.5 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 14:19:18 2008" -->
<!-- isoreceived="20080125191918" -->
<!-- sent="Fri, 25 Jan 2008 14:18:10 -0500" -->
<!-- isosent="20080125191810" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] flash2.5 with openmpi" -->
<!-- id="668F66CA-5991-4CBC-8931-7C1183A99FCC_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="479A328B.9020903_at_uark.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] flash2.5 with openmpi<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 14:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4884.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4884.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4887.php">Daniel Pfenniger: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes that is true.
<br>
<p>The underlying filesystems are ether NFSv3 provided by a OnStor  
<br>
bobcat,  or a simple Lustre cluster.
<br>
<p>All systems are 64bit x86_64.  We create files larger than 2GB al the  
<br>
time.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jan 25, 2008, at 2:03 PM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; I'm guessing he means the ASC FLASH code which simulates star  
</span><br>
<span class="quotelev1">&gt; explosions...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you mean flash memory, like a USB memory stick. What kid of file
</span><br>
<span class="quotelev2">&gt;&gt; system is on the memory. Is there some filesystem limit you are
</span><br>
<span class="quotelev2">&gt;&gt; bumping into.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 25, 2008, at 8:38 AM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is anyone using flash with openMPI?  we are here, but when ever it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tries to write its second checkpoint file it segfaults once it gets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 2.2GB always in the same location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Debugging is a pain as it takes 3 days to get to that point.  Just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wondering if anyone else has seen this same behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4884.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4884.php">Jeff Pummill: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4887.php">Daniel Pfenniger: "Re: [OMPI users] flash2.5 with openmpi"</a>
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
