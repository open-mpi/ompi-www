<?
$subject_val = "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 16:34:48 2016" -->
<!-- isoreceived="20160520203448" -->
<!-- sent="Fri, 20 May 2016 14:34:45 -0600" -->
<!-- isosent="20160520203445" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind" -->
<!-- id="c9c00188-14dd-d746-8800-c13f0f0141f2_at_khubla.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADsB1iBvxFfJpLDzj_YNcwFTyof2ogsGJBt4iFFxtWfep4N7jQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 16:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29260.php">Akihiro Tabuchi: "[OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29258.php">Gus Correa: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>In reply to:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29265.php">Jeff Hammond: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you look around on Ebay, you can find old 16-core Opteron servers for 
<br>
a few hundred dollars.  It's not screaming performance, but 16 cores is 
<br>
enough to get you started on scaling and parallelism in MPI.  It's a 
<br>
cheap cluster in a box.
<br>
<p>Damien
<br>
<p>On 5/20/2016 12:40 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say I don't have access to a actual cluster, yet I'm considering cloud 
</span><br>
<span class="quotelev1">&gt; compute solutions for my MPI program ultimately, but such a cost may 
</span><br>
<span class="quotelev1">&gt; be highly prohibitive at the moment.
</span><br>
<span class="quotelev1">&gt; In terms of middle ground, if I am interesting in compute only, no 
</span><br>
<span class="quotelev1">&gt; storage, what are possible hardware solutions out there to deploy my 
</span><br>
<span class="quotelev1">&gt; MPI program?
</span><br>
<span class="quotelev1">&gt; By no storage, I mean that my control linux box running the frontend 
</span><br>
<span class="quotelev1">&gt; of the program, but is also part of the mpi communicator always 
</span><br>
<span class="quotelev1">&gt; gathers all results and stores them locally.
</span><br>
<span class="quotelev1">&gt; At the moment, I have a second box over ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking at something like Intel Compute Stick (is it possible at 
</span><br>
<span class="quotelev1">&gt; all to buy a few, is linux running on them, the arch seems to be the 
</span><br>
<span class="quotelev1">&gt; same x86-64, is there a possible setup with tcp for those and have 
</span><br>
<span class="quotelev1">&gt; openmpi over tcp)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it more cost-effective to look at extra regular linux commodity boxes?
</span><br>
<span class="quotelev1">&gt; If a no hard drive box is possible, can the executables of my MPI 
</span><br>
<span class="quotelev1">&gt; program sendable over the wire before running them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we exclude GPU or other nonMPI solutions, and cost being a primary 
</span><br>
<span class="quotelev1">&gt; factor, what is progression path from 2boxes to a cloud based solution 
</span><br>
<span class="quotelev1">&gt; (amazon and the like...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; MM
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29257.php">http://www.open-mpi.org/community/lists/users/2016/05/29257.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29260.php">Akihiro Tabuchi: "[OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29258.php">Gus Correa: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>In reply to:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29265.php">Jeff Hammond: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
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
