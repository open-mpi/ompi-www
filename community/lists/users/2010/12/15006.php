<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 09:00:39 2010" -->
<!-- isoreceived="20101206140039" -->
<!-- sent="Mon, 06 Dec 2010 15:03:13 +0100" -->
<!-- isosent="20101206140313" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="4CFCED21.1040604_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CFBC776.4020700_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Mathieu Gontier (<em>mathieu.gontier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 09:03:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Previous message:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>In reply to:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15009.php">Peter Kjellström: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15009.php">Peter Kjellström: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>A small update.
<br>
My colleague made a mistake and there is no arithmetic performance 
<br>
issue. Sorry for bothering you.
<br>
<p>Nevertheless, one can observed some differences between MPICH and 
<br>
OpenMPI from 25% to 100% depending on the options we are using into our 
<br>
software. Tests are lead on a single SGI node on 6 or 12 processes, and 
<br>
thus, I am focused on the sm option.
<br>
<p>So, I have two questions:
<br>
1/ does the option--mca mpool_sm_max_size=XXXX can change something (I 
<br>
am wondering if the value is not too small and, as consequence, a set of 
<br>
small messages is sent instead of a big one)
<br>
2/ is there a difference between --mca btl tcp,sm,self and --mca btl 
<br>
self,sm,tcp (or not put any explicit mca option)?
<br>
<p>Best regards,
<br>
Mathieu.
<br>
<p>On 12/05/2010 06:10 PM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Mathieu Gontier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Dear OpenMPI users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am dealing with an arithmetic problem. In fact, I have two variants 
</span><br>
<span class="quotelev2">&gt;&gt; of my code: one in single precision, one in double precision. When I 
</span><br>
<span class="quotelev2">&gt;&gt; compare the two executable built with MPICH, one can observed an 
</span><br>
<span class="quotelev2">&gt;&gt; expected difference of performance: 115.7-sec in single precision 
</span><br>
<span class="quotelev2">&gt;&gt; against 178.68-sec in double precision (+54%).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The thing is, when I use OpenMPI, the difference is really bigger: 
</span><br>
<span class="quotelev2">&gt;&gt; 238.5-sec in single precision against 403.19-sec double precision 
</span><br>
<span class="quotelev2">&gt;&gt; (+69%).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our experiences have already shown OpenMPI is less efficient than 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH on Ethernet with a small number of processes. This explain the 
</span><br>
<span class="quotelev2">&gt;&gt; differences between the first set of results with MPICH and the 
</span><br>
<span class="quotelev2">&gt;&gt; second set with OpenMPI. (But if someone have more information about 
</span><br>
<span class="quotelev2">&gt;&gt; that or even a solution, I am of course interested.)
</span><br>
<span class="quotelev2">&gt;&gt; But, using OpenMPI increases the difference between the two 
</span><br>
<span class="quotelev2">&gt;&gt; arithmetic. Is it the accentuation of the OpenMPI+Ethernet loss of 
</span><br>
<span class="quotelev2">&gt;&gt; performance, is it another issue into OpenMPI or is there any option 
</span><br>
<span class="quotelev2">&gt;&gt; a can use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is also unusual that the performance difference between MPICH and 
</span><br>
<span class="quotelev1">&gt; OMPI is so large.  You say that OMPI is slower than MPICH even at 
</span><br>
<span class="quotelev1">&gt; small process counts.  Can you confirm that this is because MPI calls 
</span><br>
<span class="quotelev1">&gt; are slower?  Some of the biggest performance differences I've seen 
</span><br>
<span class="quotelev1">&gt; between MPI implementations had nothing to do with the performance of 
</span><br>
<span class="quotelev1">&gt; MPI calls at all.  It had to do with process binding or other factors 
</span><br>
<span class="quotelev1">&gt; that impacted the computational (non-MPI) performance of the code.  
</span><br>
<span class="quotelev1">&gt; The performance of MPI calls was basically irrelevant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this particular case, I'm not convinced since neither OMPI nor 
</span><br>
<span class="quotelev1">&gt; MPICH binds processes by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, can you do some basic performance profiling to confirm what 
</span><br>
<span class="quotelev1">&gt; aspect of your application is consuming so much time?  Is it a 
</span><br>
<span class="quotelev1">&gt; particular MPI call?  If your application is spending almost all of 
</span><br>
<span class="quotelev1">&gt; its time in MPI calls, do you have some way of judging whether the 
</span><br>
<span class="quotelev1">&gt; faster performance is acceptable?  That is, is 238 secs acceptable and 
</span><br>
<span class="quotelev1">&gt; 403 secs slow?  Or, are both timings unacceptable -- e.g., the code 
</span><br>
<span class="quotelev1">&gt; &quot;should&quot; be running in about 30 secs.
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
<li><strong>Next message:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Previous message:</strong> <a href="15005.php">Tim Prince: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>In reply to:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15009.php">Peter Kjellström: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15009.php">Peter Kjellström: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
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
