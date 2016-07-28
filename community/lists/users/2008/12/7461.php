<?
$subject_val = "Re: [OMPI users] How to force eager behavior during Isend?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 12:50:09 2008" -->
<!-- isoreceived="20081208175009" -->
<!-- sent="Mon,  8 Dec 2008 12:50:05 -0500 (EST)" -->
<!-- isosent="20081208175005" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force eager behavior during Isend?" -->
<!-- id="20081208125005.CEZ38110_at_punts5.cc.uga.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] How to force eager behavior during Isend?" -->
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
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 12:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7462.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Maybe in reply to:</strong> <a href="7448.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7469.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Reply:</strong> <a href="7469.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
---- Original message ----
<br>
<span class="quotelev1">&gt;Date: Mon, 8 Dec 2008 11:47:19 -0500
</span><br>
<span class="quotelev1">&gt;From: George Bosilca &lt;bosilca_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] How to force eager behavior during Isend?  
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Barry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;These values are used deep inside the Open MPI library, in order to  
</span><br>
<span class="quotelev1">&gt;define how we handle the messages internally. From a user perspective  
</span><br>
<span class="quotelev1">&gt;you will not see much difference. 
</span><br>
<p>Well, this user does.... ;-)  I'm working on how to slow the processor when the library is blocked, and it's my understanding from the state-of-the-openmpi-union talk at SC that blocking progress functionality wouldn't be implemented for a while yet.  So I'm making do with home-rolled solutions, one of which is figuring out the expected time needed to transfer a certain amount of data, then assuming any time spent in the library in excess of that is blocking time.
<br>
<p>The fact that the behavior of Isend and Irecv is determined by message size makes this a little more difficult, so I wanted to be able to either force eager sending in nearly all cases or turn off eager sending entirely.  Once the algorithm is working in these simpler cases I can go back and make it work for the optimized case.
<br>
<p><span class="quotelev1">&gt; Moreover, checking the number of  
</span><br>
<span class="quotelev1">&gt;completed requests returned by MPI_Wait* if definitively not the most  
</span><br>
<span class="quotelev1">&gt;accurate way to test this.
</span><br>
<p>I'm not sure what you mean here.  My PMPI library uses timestamps to determine how long was spent inside and outside the library.  If the Isends are eager, very little time should be spent in the corresponding Wait, correct?
<br>
<p><span class="quotelev1">&gt; If you really want to see that these  
</span><br>
<span class="quotelev1">&gt;parameters are taken in account you will need to a lower level  
</span><br>
<span class="quotelev1">&gt;interface, such as PERUSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok, that looks like it could be useful.  Google has your &quot;Implementation and Usage&quot; paper as the first hit; I'll read p on that.  
<br>
<p>Barry
<br>
<p><p><span class="quotelev1">&gt;   george.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7462.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7460.php">Brock Palen: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Maybe in reply to:</strong> <a href="7448.php">Barry Rountree: "[OMPI users] How to force eager behavior during Isend?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7469.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>Reply:</strong> <a href="7469.php">George Bosilca: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
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
