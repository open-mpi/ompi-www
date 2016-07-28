<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 10 11:24:34 2010" -->
<!-- isoreceived="20100910152434" -->
<!-- sent="Fri, 10 Sep 2010 11:24:27 -0400" -->
<!-- isosent="20100910152427" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="OFE6874F75.FB695BA7-ON8525779A.00529EA5-8525779A.0054A38E_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C8A4036.3060203_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-10 11:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14213.php">Srikanth Raju: "[OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14193.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The difference is that MPI_Barrier or even MPI_Ibarrier is a crude tool 
<br>
for the job. It is likely to leave resources idle that could be doing 
<br>
productive work.
<br>
<p>I agree it is part of the tool kit but if this kind of problem is 
<br>
significant enough so a textbook should cover it then I would advocate 
<br>
that people be taught where to look for the problem and to consider which 
<br>
tool to use. 
<br>
<p>The first step is to look for way to improve load balance.  The second 
<br>
step is to look for ways to impede as few processes as possible and only 
<br>
when they must be impeded. 
<br>
<p>I am also suggesting that there is a middle class of application that 
<br>
improves with semantically redundant barrier. Applications with a 
<br>
significant design flaw that it would be better to find and fix than to 
<br>
mask.
<br>
<p>The MPI standard provides for a flow control to prevent eager message 
<br>
flooding but it does not provide a flow control for descriptor flooding. 
<br>
Descriptor flooding may even bring down a job and the standard does not 
<br>
oblige the MPI implementation to prevent that.  This problem was 
<br>
understood from the beginning but it cannot be solved within the semantic 
<br>
rules for non-blocking Send/Recv. The options were to give the problem to 
<br>
the application writer or to say &quot;A non-blocking operation will return 
<br>
promptly unless there is a resource shortage&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick 
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 09/10/2010 10:27:02 AM:
<br>
<p><span class="quotelev1">&gt; [image removed] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI_Reduce performance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eugene Loh 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 09/10/2010 10:30 AM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Treumann wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ashley 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand the problem with descriptor flooding can be serious in 
</span><br>
<span class="quotelev1">&gt; an application with unidirectional data dependancy. Perhaps we have 
</span><br>
<span class="quotelev1">&gt; a different perception of how common that is. 
</span><br>
<span class="quotelev1">&gt; Ashley speculated it was a &quot;significant minority.&quot;  I don't know 
</span><br>
<span class="quotelev1">&gt; what that means, but it seems like it is a minority (most 
</span><br>
<span class="quotelev1">&gt; computations have causal relationships among the processes holding 
</span><br>
<span class="quotelev1">&gt; unbounded imbalances in check) and yet we end up seeing these 
</span><br>
exceptions.
<br>
<span class="quotelev1">&gt; I think that adding some flow control to the application is a better
</span><br>
<span class="quotelev1">&gt; solution than semantically redundant barrier.
</span><br>
<span class="quotelev1">&gt; It seems to me there is no difference.  Flow control, at this level,
</span><br>
<span class="quotelev1">&gt; is just semantically redundant synchronization.  A barrier is just a
</span><br>
<span class="quotelev1">&gt; special case of that._______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14212/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14213.php">Srikanth Raju: "[OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14211.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14193.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
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
