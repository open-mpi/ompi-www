<?
$subject_val = "Re: [OMPI users] btl udapl leaves string uninitialised";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 18:02:18 2010" -->
<!-- isoreceived="20100107230218" -->
<!-- sent="Fri, 8 Jan 2010 00:02:01 +0100" -->
<!-- isosent="20100107230201" -->
<!-- name="Dennis Schridde" -->
<!-- email="devurandom_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl udapl leaves string uninitialised" -->
<!-- id="201001080002.06851.devurandom_at_gmx.net" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="4B465EA3.1050608_at_sun.com" -->
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
<strong>From:</strong> Dennis Schridde (<em>devurandom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 18:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11718.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Previous message:</strong> <a href="11716.php">Tim Miller: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Maybe in reply to:</strong> <a href="11707.php">Dennis Schridde: "[OMPI users] btl udapl leaves string uninitialised"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11718.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Reply:</strong> <a href="11718.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Don!
<br>
<p>Am Donnerstag, 7. Januar 2010 23:22:27 schrieben Sie:
<br>
<span class="quotelev1">&gt; I am assuming you are using something other than IPv4 so I am curious
</span><br>
<span class="quotelev1">&gt; what the string looks like when you call
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; inet_ntop(AF_INET, (void *) &amp;btl_addr-&gt;sin_addr,
</span><br>
<span class="quotelev1">&gt;                     btl_addr_string, INET_ADDRSTRLEN);
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the address is not of the AF_INET family?  Do you have an example
</span><br>
<span class="quotelev1">&gt; of this?
</span><br>
The address is indeed of family AF_INET, e.g. &quot;10.0.0.1&quot;.
<br>
<p>The issue in btl_udapl_proc is that it does not initialise btl_addr_string for 
<br>
every possible code path (peer_proc-&gt;proc_addr_count &lt;= 0).
<br>
Thus the error message sent by the nodes may contain garbage / uninitialised 
<br>
bytes. (As in our case.)
<br>
<p>I fixed that by initialising btl_addr_string at the earliest possible point, 
<br>
which is outside the AF_INET check and the loop over the proc addresses.
<br>
This also prevents the string from being copied multiple times within the 
<br>
loop, which seems just unnecessary.
<br>
You are right with your doubts that the move out of the check for AF_INET is 
<br>
correct, since inet_ntop is called for af=AF_INET. It should better be located 
<br>
inside the if block.
<br>
<p>The reason that peer_proc-&gt;proc_addr_count was &lt;= 0 must have had something to 
<br>
do with uDAPL not being setup correctly on our cluster. (I didnt check for the 
<br>
exact value of peer_proc-&gt;proc_addr_count, just guessed, because the loop was 
<br>
obviously never executed.)
<br>
<p>We actually want to connect the nodes via IB and uDAPL was just the default 
<br>
BTL choosen by OpenMPI. We are now using &quot;--mca btl openib,self&quot;, as we 
<br>
figured out uDAPL is not at all needed to connect the nodes via IB.
<br>
I still found it reasonable to report the issue detected, together with a 
<br>
possible fix.
<br>
<p>--Dennis
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11717/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11718.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Previous message:</strong> <a href="11716.php">Tim Miller: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Maybe in reply to:</strong> <a href="11707.php">Dennis Schridde: "[OMPI users] btl udapl leaves string uninitialised"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11718.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Reply:</strong> <a href="11718.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
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
