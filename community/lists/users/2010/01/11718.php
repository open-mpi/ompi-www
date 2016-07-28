<?
$subject_val = "Re: [OMPI users] btl udapl leaves string uninitialised";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 21:18:57 2010" -->
<!-- isoreceived="20100108021857" -->
<!-- sent="Thu, 07 Jan 2010 21:18:52 -0500" -->
<!-- isosent="20100108021852" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl udapl leaves string uninitialised" -->
<!-- id="4B46960C.5090906_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="201001080002.06851.devurandom_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl udapl leaves string uninitialised<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 21:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11719.php">Arunkumar C R: "[OMPI users] [PMX:VIRUS] MPI debugger"</a>
<li><strong>Previous message:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>In reply to:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I understand what you are doing but there is still a possible error 
<br>
case I was trying to consider and your initial placement of the call 
<br>
outside of the  af==AF_INET  check lead me to assume you were using 
<br>
something other than IPv4 which is why I was asking if you had an 
<br>
example. You don't and that is fine.  Thanks again for the feedback, it 
<br>
is appreciated.  I will make a change.
<br>
<p>-DON
<br>
<p>On 01/07/10 18:02, Dennis Schridde wrote:
<br>
<span class="quotelev1">&gt; Hello Don!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am Donnerstag, 7. Januar 2010 23:22:27 schrieben Sie:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am assuming you are using something other than IPv4 so I am curious
</span><br>
<span class="quotelev2">&gt;&gt; what the string looks like when you call
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt; inet_ntop(AF_INET, (void *) &amp;btl_addr-&gt;sin_addr,
</span><br>
<span class="quotelev2">&gt;&gt;                     btl_addr_string, INET_ADDRSTRLEN);
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when the address is not of the AF_INET family?  Do you have an example
</span><br>
<span class="quotelev2">&gt;&gt; of this?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; The address is indeed of family AF_INET, e.g. &quot;10.0.0.1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue in btl_udapl_proc is that it does not initialise btl_addr_string for 
</span><br>
<span class="quotelev1">&gt; every possible code path (peer_proc-&gt;proc_addr_count &lt;= 0).
</span><br>
<span class="quotelev1">&gt; Thus the error message sent by the nodes may contain garbage / uninitialised 
</span><br>
<span class="quotelev1">&gt; bytes. (As in our case.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I fixed that by initialising btl_addr_string at the earliest possible point, 
</span><br>
<span class="quotelev1">&gt; which is outside the AF_INET check and the loop over the proc addresses.
</span><br>
<span class="quotelev1">&gt; This also prevents the string from being copied multiple times within the 
</span><br>
<span class="quotelev1">&gt; loop, which seems just unnecessary.
</span><br>
<span class="quotelev1">&gt; You are right with your doubts that the move out of the check for AF_INET is 
</span><br>
<span class="quotelev1">&gt; correct, since inet_ntop is called for af=AF_INET. It should better be located 
</span><br>
<span class="quotelev1">&gt; inside the if block.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason that peer_proc-&gt;proc_addr_count was &lt;= 0 must have had something to 
</span><br>
<span class="quotelev1">&gt; do with uDAPL not being setup correctly on our cluster. (I didnt check for the 
</span><br>
<span class="quotelev1">&gt; exact value of peer_proc-&gt;proc_addr_count, just guessed, because the loop was 
</span><br>
<span class="quotelev1">&gt; obviously never executed.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We actually want to connect the nodes via IB and uDAPL was just the default 
</span><br>
<span class="quotelev1">&gt; BTL choosen by OpenMPI. We are now using &quot;--mca btl openib,self&quot;, as we 
</span><br>
<span class="quotelev1">&gt; figured out uDAPL is not at all needed to connect the nodes via IB.
</span><br>
<span class="quotelev1">&gt; I still found it reasonable to report the issue detected, together with a 
</span><br>
<span class="quotelev1">&gt; possible fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Dennis
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11719.php">Arunkumar C R: "[OMPI users] [PMX:VIRUS] MPI debugger"</a>
<li><strong>Previous message:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>In reply to:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
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
