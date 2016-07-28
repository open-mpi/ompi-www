<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 18:48:39 2006" -->
<!-- isoreceived="20060210234839" -->
<!-- sent="Fri, 10 Feb 2006 18:49:58 -0500" -->
<!-- isosent="20060210234958" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] &amp;quot;alltoall&amp;quot; vs &amp;quot;alltoallv&amp;quot;" -->
<!-- id="965CD957-9620-4123-9ACF-0B7001E45346_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060207164505.31038.qmail_at_web52006.mail.yahoo.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-10 18:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Konstantin,
<br>
<p>The all2all scheduling works only because we know they will all send  
<br>
the same amount of data, so the communications will take &quot;nearly&quot; the  
<br>
same time. Therefore, we can predict how to schedule the  
<br>
communications to get the best out of the network. But this approach  
<br>
can lead to worst performance for all2allv in most of the cases. From  
<br>
a user perspective we can imagine that if they will send roughly the  
<br>
same size they can get some benefit from this approach. But now from  
<br>
the MPI library how we can figure out the amount that have to be send  
<br>
globally ? Each one of the processes knows only how much data it have  
<br>
to send and how much data it have to receive ... but unfortunately  
<br>
does not have any informations about the communications that will  
<br>
take place between the others ...
<br>
<p>Of course we can do an all2all with the sizes before taking the  
<br>
decision on how to do the all2allv but the cost can be prohibited on  
<br>
most of the cases.
<br>
<p>Anyway, we're working on this issue and hopefully we will have a  
<br>
solution soon.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 7, 2006, at 11:45 AM, Konstantin Kudin wrote:
<br>
<p><span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I was wondering if it would be possible to use the same scheduling  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; &quot;alltoallv&quot; as for &quot;alltoall&quot;. If one assumes the messages of roughly
</span><br>
<span class="quotelev1">&gt; the same size, then &quot;alltoall&quot; would not be an unreasonable
</span><br>
<span class="quotelev1">&gt; approximation for &quot;alltoallv&quot;. As is, it appears that in v1.1
</span><br>
<span class="quotelev1">&gt; &quot;alltoallv&quot; is done via a bunch of &quot;isend+irecv&quot;, while &quot;alltoall&quot;  
</span><br>
<span class="quotelev1">&gt; is a
</span><br>
<span class="quotelev1">&gt; bit more clever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  One could then also have a runtime flag to use this sort of
</span><br>
<span class="quotelev1">&gt; substitution.
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Glen Kaukola: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
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
