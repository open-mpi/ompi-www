<?
$subject_val = "Re: [OMPI users] Problem with MPI_Intercomm_create";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 00:24:06 2011" -->
<!-- isoreceived="20110602042406" -->
<!-- sent="Thu, 2 Jun 2011 12:23:41 +0800" -->
<!-- isosent="20110602042341" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Intercomm_create" -->
<!-- id="BANLkTi=MTxpJk026YgJ4_p6xhOh6N6f9Vw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76d28e95802cc83389924e14bb189838_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Intercomm_create<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-02 00:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16670.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16668.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16664.php">Fr&#195;&#169;d&#195;&#169;ric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since your new intra-communicator contains all members, couldn't you
<br>
just use the MPI_COMM_WORLD communicator?
<br>
<p>2011/6/1 Fr&#233;d&#233;ric Feyel &lt;mcffeyel_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem using MPI_Intercomm_create.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I 5 tasks, let's say T0, T1, T2, T3, T4 resulting from two spawn
</span><br>
<span class="quotelev1">&gt; operations by T0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have two intra-communicator :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; intra0 contains : T0, T1, T2
</span><br>
<span class="quotelev1">&gt; intra1 contains : T0, T3, T4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my goal is to make a collective loop to build a single intra-communicator
</span><br>
<span class="quotelev1">&gt; containing T0, T1, T2, T3, T4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to do it using MPI_Intercomm_create and MPI_Intercom_merge calls,
</span><br>
<span class="quotelev1">&gt; but without success (I always get MPI internal errors).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am doing :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on T0 :
</span><br>
<span class="quotelev1">&gt; *******
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Intercom_create(intra0,0,intra1,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on T1 and T2 :
</span><br>
<span class="quotelev1">&gt; **************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Intercom_create(intra0,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on T3 and T4 :
</span><br>
<span class="quotelev1">&gt; **************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Intercom_create(intra1,0,MPI_COMM_WORLD,0,1,&amp;new_com)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm certainly missing something. Could anybody help me to solve this
</span><br>
<span class="quotelev1">&gt; problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fr&#233;d&#233;ric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS : of course I did an extensive web search without finding anything
</span><br>
<span class="quotelev1">&gt; usefull on my problem.
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16670.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16668.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16664.php">Fr&#195;&#169;d&#195;&#169;ric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
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
