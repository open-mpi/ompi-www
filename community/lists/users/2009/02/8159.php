<?
$subject_val = "Re: [OMPI users] How to quit asynchronous processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 10:42:33 2009" -->
<!-- isoreceived="20090223154233" -->
<!-- sent="Mon, 23 Feb 2009 08:42:23 -0700" -->
<!-- isosent="20090223154223" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to quit asynchronous processes" -->
<!-- id="57361ABA-7EAB-4B8E-B244-6216FDC94557_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="180492.84803.qm_at_web76201.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to quit asynchronous processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 10:42:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8160.php">Olaf Lenz: "[OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Previous message:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>In reply to:</strong> <a href="8154.php">Tee Wen Kai: "[OMPI users] How to quit asynchronous processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8162.php">Richard Treumann: "Re: [OMPI users] How to quit asynchronous processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would suggest that if C receives some kind of quit command, it  
<br>
should send that command to both A &amp; B, and then call MPI_Finalize.  
<br>
When A &amp; B receive the quit command, they can complete whatever they  
<br>
are currently doing (you'll have to set a flag so they know they  
<br>
should do this), and then also call MPI_Finalize.
<br>
<p>There is a barrier in MPI_Finalize, so nobody will actually terminate  
<br>
until everyone gets there.
<br>
<p><p>On Feb 22, 2009, at 8:49 PM, Tee Wen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have three processes A,B &amp; C. A will receive some data and process  
</span><br>
<span class="quotelev1">&gt; and after that will pass results to B. Thereafter, A will go back to  
</span><br>
<span class="quotelev1">&gt; get data and process and prepare to send them to B again. Same goes  
</span><br>
<span class="quotelev1">&gt; for B to C where C will provide the final output. As all the  
</span><br>
<span class="quotelev1">&gt; processes are running asynchronously, I can't find a method to quit  
</span><br>
<span class="quotelev1">&gt; all processes gracefully. I have tried to use C to issue MPI_Abort  
</span><br>
<span class="quotelev1">&gt; when quit command is received with processes A and B entering the  
</span><br>
<span class="quotelev1">&gt; SIGTERM handler to free all the allocated memories. However, the  
</span><br>
<span class="quotelev1">&gt; processes may be in the midst of a communication when SIGTERM signal  
</span><br>
<span class="quotelev1">&gt; is raise, resulting in some error msg like &quot;remote connection close&quot;  
</span><br>
<span class="quotelev1">&gt; etc. To prevent such error messages from displaying, I couldn't use  
</span><br>
<span class="quotelev1">&gt; MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seek your advice on methods to quit asynchonous processes properly  
</span><br>
<span class="quotelev1">&gt; without all these error messages. And I would also like to find out  
</span><br>
<span class="quotelev1">&gt; what will be the outcome eventually if I don't close the processes  
</span><br>
<span class="quotelev1">&gt; with an MPI_Finalize command, will it lead to eventual memory leak  
</span><br>
<span class="quotelev1">&gt; etc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Wenkai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Get your preferred Email name!
</span><br>
<span class="quotelev1">&gt; Now you can @ymail.com and  
</span><br>
<span class="quotelev1">&gt; @rocketmail.com._______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8160.php">Olaf Lenz: "[OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Previous message:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>In reply to:</strong> <a href="8154.php">Tee Wen Kai: "[OMPI users] How to quit asynchronous processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8162.php">Richard Treumann: "Re: [OMPI users] How to quit asynchronous processes"</a>
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
