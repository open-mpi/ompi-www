<?
$subject_val = "Re: [OMPI users] Loopback Communication";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  1 07:58:12 2008" -->
<!-- isoreceived="20080301125812" -->
<!-- sent="Sat, 1 Mar 2008 13:57:54 +0100" -->
<!-- isosent="20080301125754" -->
<!-- name="Giovanni Davide Vergine" -->
<!-- email="verginegiovanni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Loopback Communication" -->
<!-- id="6E9EDEA8-E60C-4E42-8B5B-79FCEAE34F6E_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47C8947E.8060305_at_umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Loopback Communication<br>
<strong>From:</strong> Giovanni Davide Vergine (<em>verginegiovanni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-01 07:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5114.php">Albert Babinskas: "Re: [OMPI users] Error compiling open-mpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5113.php">Elvedin Trnjanin: "[OMPI users] Loopback Communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Loopback communication it's shared memory copy, of course.
<br>
Even if it would be implemented with socket() and other network
<br>
syscalls, kernel will do finally only memory copying.
<br>
<p><p>Il giorno 01/mar/08, alle ore 00:25, Elvedin Trnjanin ha scritto:
<br>
<p><span class="quotelev1">&gt; I'm using a &quot;ping pong&quot; program to approximate bandwidth and latency  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; various messages sizes and I notice when doing various transfers (eg.
</span><br>
<span class="quotelev1">&gt; async) that the maximum bandwidth isn't the system's maximum  
</span><br>
<span class="quotelev1">&gt; bandwidth.
</span><br>
<span class="quotelev1">&gt; I've looked through the FAQ and I haven't noticed this being covered  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; how does OpenMPI handle loopback communication? Is it still over a
</span><br>
<span class="quotelev1">&gt; network interconnect or some sort of shared memory copy?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Elvedin
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
<li><strong>Next message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5114.php">Albert Babinskas: "Re: [OMPI users] Error compiling open-mpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5113.php">Elvedin Trnjanin: "[OMPI users] Loopback Communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI users] Loopback Communication"</a>
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
