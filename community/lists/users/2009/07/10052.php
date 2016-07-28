<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 07:36:58 2009" -->
<!-- isoreceived="20090723113658" -->
<!-- sent="Thu, 23 Jul 2009 17:06:54 +0530" -->
<!-- isosent="20090723113654" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="fa4af8200907230436o6fc22552u62b351ac3349b89_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B822923D-0BB6-4173-8D1C-44026C2F33DD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network connection check<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 07:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10053.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="10051.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10058.php">jody: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 23, 2009 at 3:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It depends on which network fails. If you lose all TCP connectivity, Open
</span><br>
<span class="quotelev1">&gt; MPI should abort the job as the out-of-band system will detect the loss of
</span><br>
<span class="quotelev1">&gt; connection. If you only lose the MPI connection (whether TCP or some other
</span><br>
<span class="quotelev1">&gt; interconnect), then I believe the system will eventually generate an error
</span><br>
<span class="quotelev1">&gt; after it retries sending the message a specified number of times, though it
</span><br>
<span class="quotelev1">&gt; may not abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thank you Ralph,
<br>
<p><span class="quotelev1">&gt;From your reply I came to know that the question I posted earlier was not
</span><br>
reflecting the problem properly.
<br>
<p>I can't use blocking communication routines in my main program (
<br>
&quot;masterprocess&quot;) because any type of network failure( may be due to physical
<br>
connectivity or TCP connectivity or MPI connection as you told) may occur.
<br>
So I am using non blocking point to point communication routines, and TEST
<br>
later for completion of that Request. Once I enter a TEST loop I will test
<br>
for Request complition till TIMEOUT. Suppose TIMEOUT has occured, In this
<br>
case first I will check whether
<br>
<p>&nbsp;1:  Slave machine is reachable or not,  (How I will do that ??? Given - I
<br>
have IP address and Host Name of Slave machine.)
<br>
<p>&nbsp;2:  if reachable, check whether program(orted and &quot;slaveprocess&quot;) is alive
<br>
or not.
<br>
<p>I don't want to abort my master process in case 1 and hope that network
<br>
connection will come up in future. Fortunately OpenMPI doesn't abort any
<br>
process. Both processes can run independently without communicating.
<br>
<p><p>Thanks and Regards,
<br>
<pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10053.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="10051.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10048.php">Ralph Castain: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10058.php">jody: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
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
