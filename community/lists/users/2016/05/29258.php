<?
$subject_val = "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 15:17:25 2016" -->
<!-- isoreceived="20160520191725" -->
<!-- sent="Fri, 20 May 2016 15:17:24 -0400" -->
<!-- isosent="20160520191724" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind" -->
<!-- id="573F62C4.2080407_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 15:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29259.php">Damien: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>Previous message:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>In reply to:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29259.php">Damien: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/20/2016 02:40 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say I don't have access to a actual cluster, yet I'm considering cloud
</span><br>
<span class="quotelev1">&gt; compute solutions for my MPI program ultimately, but such a cost may be
</span><br>
<span class="quotelev1">&gt; highly prohibitive at the moment.
</span><br>
<span class="quotelev1">&gt; In terms of middle ground, if I am interesting in compute only, no
</span><br>
<span class="quotelev1">&gt; storage, what are possible hardware solutions out there to deploy my MPI
</span><br>
<span class="quotelev1">&gt; program?
</span><br>
<span class="quotelev1">&gt; By no storage, I mean that my control linux box running the frontend of
</span><br>
<span class="quotelev1">&gt; the program, but is also part of the mpi communicator always gathers all
</span><br>
<span class="quotelev1">&gt; results and stores them locally.
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
<span class="quotelev1">&gt;
</span><br>
<p>1. You can run MPI programs in a single computer (multi-core 
<br>
multi-processor). So, in principle, you don't need a cluster, not even 
<br>
two machines.  If you want a proof of concept across Ethernet, two old 
<br>
desktops/laptops connected back to back (or through a cheap SOHO switch)
<br>
will do.
<br>
<p>2. Not trying to dismiss your question, although its scope goes beyond 
<br>
MPI (and OpenMPI), and is more about HPC and clusters.
<br>
However, if you ask this question in the Beowulf mailing list,
<br>
you will get lots, tons, of advice, as the focus there is precisely
<br>
on HPC and clusters (of all sizes and for all budgets).
<br>
<p><a href="http://www.beowulf.org/mailman/listinfo/beowulf">http://www.beowulf.org/mailman/listinfo/beowulf</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29259.php">Damien: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>Previous message:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>In reply to:</strong> <a href="29257.php">MM: "[OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29259.php">Damien: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
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
