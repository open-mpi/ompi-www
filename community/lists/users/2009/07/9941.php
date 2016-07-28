<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 14:11:56 2009" -->
<!-- isoreceived="20090713181156" -->
<!-- sent="Mon, 13 Jul 2009 13:11:50 -0500" -->
<!-- isosent="20090713181150" -->
<!-- name="JACOB_LIBERMAN_at_[hidden]" -->
<!-- email="JACOB_LIBERMAN_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="7ADD3FA62176CB4588006774C1CCA43B6A8F24_at_ausx3mps336.aus.amer.dell.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="7D838F69-9FC6-406C-8DDB-CAF94301A3CA_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 to 1 oversubscription<br>
<strong>From:</strong> <a href="mailto:JACOB_LIBERMAN_at_[hidden]?Subject=Re:%20[OMPI%20users]%202%20to%201%20oversubscription"><em>JACOB_LIBERMAN_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-07-13 14:11:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9942.php">Rainer Keller: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9940.php">Mark Borgerding: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9921.php">Robert Kubrick: "[OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Robert,
<br>
<p>Hakon Bugge presented a paper on this at ISC09.  He found that SMT helped several SPEC MPI benchmarks. (He used Platform MPI, not Open MPI.)
<br>
<p>He did not oversubscribe, though.  He just enabled SMT, which allowed the OS to allocate spare CPU cycles during IO wait, etc.
<br>
<p>My conclusions based on his paper and results gathered in our lab:
<br>
<p>1) Nehalem SMT is improved over previous versions 
<br>
2) For best performance, do not oversubscribe physical cores
<br>
3) test SMT on a per app basis.  Across various HPC workloads, I saw gains up to 14% and penalties up to 26%.
<br>
<p>Thanks, jacob
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Robert Kubrick
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, July 11, 2009 4:16 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] 2 to 1 oversubscription
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Open MPI FAQ recommends not to oversubscribe the available cores
</span><br>
<span class="quotelev1">&gt; for best performances, but is this still true? The new Nehalem
</span><br>
<span class="quotelev1">&gt; processors are built to run 2 threads on each core. On a 8 sockets
</span><br>
<span class="quotelev1">&gt; systems, that sums up to 128 threads that Intel claims can be run
</span><br>
<span class="quotelev1">&gt; without significant performance degradation. I guess the last word is
</span><br>
<span class="quotelev1">&gt; to those who have tried to run some benchmarks and applications on
</span><br>
<span class="quotelev1">&gt; the new Intel processors. Any experience to share?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://en.wikipedia.org/wiki/Simultaneous_multithreading">http://en.wikipedia.org/wiki/Simultaneous_multithreading</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://communities.intel.com/community/openportit/server/blog/">http://communities.intel.com/community/openportit/server/blog/</a>
</span><br>
<span class="quotelev1">&gt; 2009/06/11/nehalem-ex-brings-new-economics-to-scalable-systems
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
<li><strong>Next message:</strong> <a href="9942.php">Rainer Keller: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9940.php">Mark Borgerding: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9921.php">Robert Kubrick: "[OMPI users] 2 to 1 oversubscription"</a>
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
