<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 09:14:12 2009" -->
<!-- isoreceived="20090723131412" -->
<!-- sent="Thu, 23 Jul 2009 15:14:06 +0200 (CEST)" -->
<!-- isosent="20090723131406" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="Pine.LNX.4.64.0907231508350.10484_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fa4af8200907230436o6fc22552u62b351ac3349b89_at_mail.gmail.com" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 09:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10059.php">Prentice Bisbal: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 23 Jul 2009, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; 1:  Slave machine is reachable or not,  (How I will do that ??? Given - I
</span><br>
<span class="quotelev1">&gt; have IP address and Host Name of Slave machine.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2:  if reachable, check whether program(orted and &quot;slaveprocess&quot;) is alive
</span><br>
<span class="quotelev1">&gt; or not.
</span><br>
<p>You don't specify and based on your description I infer that you are 
<br>
not using a batch/queueing system, but just a rsh/ssh based start-up 
<br>
mechanism. A batch/queueing system might be able to tell you whether a 
<br>
remote computer is still accessible.
<br>
<p>I think that MPI is not the proper mechanism to achieve what you want. 
<br>
PVM or, maybe better, direct socket programming will probably serve 
<br>
you more.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10059.php">Prentice Bisbal: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10065.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
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
