<?
$subject_val = "Re: [OMPI users] How to force eager behavior during Isend?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 14:44:48 2008" -->
<!-- isoreceived="20081208194448" -->
<!-- sent="Mon, 8 Dec 2008 14:44:42 -0500" -->
<!-- isosent="20081208194442" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force eager behavior during Isend?" -->
<!-- id="10E3EF79-02E6-4B9B-8B98-8219E6720D89_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081208125005.CEZ38110_at_punts5.cc.uga.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to force eager behavior during Isend?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 14:44:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7470.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="7461.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7471.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Barry,
<br>
<p>If you set the eager size large enough, the isend will not return  
<br>
until the data is pushed into the network layer. However, this doesn't  
<br>
guarantee that the data is delivered to the peer, but only that it was  
<br>
queued in the network (in the TCP case it is copied somewhere in the  
<br>
kernel buffers). The kernel will deliver that data doing a best  
<br>
effort, but there is no guarantee on that. As the kernel buffer has a  
<br>
limited size (no more than 128k) the expected graphical behavior for  
<br>
the isend operation over TCP should look like stairs, slightly going  
<br>
up because of the memcpy, and a large jump for every syscall required  
<br>
to do the operation.
<br>
<p>Now for the irecv the story is a lot more complex. The irecv only  
<br>
realize the matching, and if the data is not yet completely available  
<br>
(let's say only a small fragment was received at the moment of the  
<br>
irecv), the irecv will return (there is no eager notion there). The  
<br>
remaining of the data will became available only after the  
<br>
corresponding MPI_Wait.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 8, 2008, at 12:50 , Barry Rountree wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---- Original message ----
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 8 Dec 2008 11:47:19 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] How to force eager behavior during Isend?
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Barry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These values are used deep inside the Open MPI library, in order to
</span><br>
<span class="quotelev2">&gt;&gt; define how we handle the messages internally. From a user perspective
</span><br>
<span class="quotelev2">&gt;&gt; you will not see much difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, this user does.... ;-)  I'm working on how to slow the  
</span><br>
<span class="quotelev1">&gt; processor when the library is blocked, and it's my understanding  
</span><br>
<span class="quotelev1">&gt; from the state-of-the-openmpi-union talk at SC that blocking  
</span><br>
<span class="quotelev1">&gt; progress functionality wouldn't be implemented for a while yet.  So  
</span><br>
<span class="quotelev1">&gt; I'm making do with home-rolled solutions, one of which is figuring  
</span><br>
<span class="quotelev1">&gt; out the expected time needed to transfer a certain amount of data,  
</span><br>
<span class="quotelev1">&gt; then assuming any time spent in the library in excess of that is  
</span><br>
<span class="quotelev1">&gt; blocking time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that the behavior of Isend and Irecv is determined by  
</span><br>
<span class="quotelev1">&gt; message size makes this a little more difficult, so I wanted to be  
</span><br>
<span class="quotelev1">&gt; able to either force eager sending in nearly all cases or turn off  
</span><br>
<span class="quotelev1">&gt; eager sending entirely.  Once the algorithm is working in these  
</span><br>
<span class="quotelev1">&gt; simpler cases I can go back and make it work for the optimized case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, checking the number of
</span><br>
<span class="quotelev2">&gt;&gt; completed requests returned by MPI_Wait* if definitively not the most
</span><br>
<span class="quotelev2">&gt;&gt; accurate way to test this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean here.  My PMPI library uses timestamps to  
</span><br>
<span class="quotelev1">&gt; determine how long was spent inside and outside the library.  If the  
</span><br>
<span class="quotelev1">&gt; Isends are eager, very little time should be spent in the  
</span><br>
<span class="quotelev1">&gt; corresponding Wait, correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you really want to see that these
</span><br>
<span class="quotelev2">&gt;&gt; parameters are taken in account you will need to a lower level
</span><br>
<span class="quotelev2">&gt;&gt; interface, such as PERUSE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, that looks like it could be useful.  Google has your  
</span><br>
<span class="quotelev1">&gt; &quot;Implementation and Usage&quot; paper as the first hit; I'll read p on  
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
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
<li><strong>Next message:</strong> <a href="7470.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7468.php">Heitor Florido: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="7461.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7471.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
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
