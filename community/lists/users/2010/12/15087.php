<?
$subject_val = "Re: [OMPI users] How to check if Send was made or not before performing a recv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 12 01:19:17 2010" -->
<!-- isoreceived="20101212061917" -->
<!-- sent="Sat, 11 Dec 2010 22:18:59 -0800" -->
<!-- isosent="20101212061859" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check if Send was made or not before performing a recv" -->
<!-- id="4D046953.9010506_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinKNVtgQ7tKaa5uE+qmKVoQnRwc6tr6F5uNQHcG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check if Send was made or not before performing a recv<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-12 01:18:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alaukik Aggarwal wrote:
<br>
<p><span class="quotelev1">&gt;Thanks for your reply. I used this to solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But I think there should be an in-built construct for this.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
What would such a construct look like?  If you need information from the 
<br>
remote processes, they need to send messages (in the two-sided model).  
<br>
If you want to time out after a while, you can have MPI_Iprobe() checks 
<br>
for in-coming messages and then give up after some period of time.  I 
<br>
just don't know what you'd be looking for.
<br>
<p>If you have concrete ideas you would really want, you should address 
<br>
them to the MPI Forum, which is in charge of defining MPI calls.
<br>
<p><span class="quotelev1">&gt;On Sat, Dec 11, 2010 at 10:28 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Alaukik Aggarwal wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I am using Open MPI 1.4.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I have to perform a receive operation from processes that are sending
</span><br>
<span class="quotelev3">&gt;&gt;&gt;data. It might happen that some of the processes don't send data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(might have completed in-fact).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;So, how do I perform check on which processes to receive data from and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;which processes to skip?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[code]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;if(id != master)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI::COMM_WORLD.Send(&amp;dist, NUM_VERTEX, MPI_LONG, master, 1234);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;if(id == master)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      for(int eachId = 1; eachId&lt;procs ; eachId++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI::COMM_WORLD.Recv(&amp;dist1, NUM_VERTEX, MPI_LONG, eachId, 1234);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[/code]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15086.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Reply:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
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
