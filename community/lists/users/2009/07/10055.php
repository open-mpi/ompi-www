<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 08:07:06 2009" -->
<!-- isoreceived="20090723120706" -->
<!-- sent="Thu, 23 Jul 2009 08:06:56 -0400" -->
<!-- isosent="20090723120656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="2099DEF0-9851-4D69-970B-FB50AFCF705D_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 08:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10054.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2009, at 7:36 AM, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; I can't use blocking communication routines in my main program  
</span><br>
<span class="quotelev1">&gt; ( &quot;masterprocess&quot;) because any type of network failure( may be due  
</span><br>
<span class="quotelev1">&gt; to physical connectivity or TCP connectivity or MPI connection as  
</span><br>
<span class="quotelev1">&gt; you told) may occur. So I am using non blocking point to point  
</span><br>
<span class="quotelev1">&gt; communication routines, and TEST later for completion of that  
</span><br>
<span class="quotelev1">&gt; Request. Once I enter a TEST loop I will test for Request complition  
</span><br>
<span class="quotelev1">&gt; till TIMEOUT. Suppose TIMEOUT has occured, In this case first I will  
</span><br>
<span class="quotelev1">&gt; check whether
</span><br>
<p>Open MPI should return a failure if TCP connectivity is lost, even  
<br>
with a non-blocking point-to-point operation.  The failure should be  
<br>
returned in the call to MPI_TEST (and friends).  So I'm not sure your  
<br>
timeout has meaning here -- if you reach the timeout, I think it  
<br>
simply means that the MPI communication has not completed yet.  It  
<br>
does not necessarily mean that the MPI communication has failed.
<br>
<p><span class="quotelev1">&gt;  1:  Slave machine is reachable or not,  (How I will do that ???  
</span><br>
<span class="quotelev1">&gt; Given - I have IP address and Host Name of Slave machine.)
</span><br>
<p><span class="quotelev1">&gt;  2:  if reachable, check whether program(orted and &quot;slaveprocess&quot;)  
</span><br>
<span class="quotelev1">&gt; is alive or not.
</span><br>
<p>MPI doesn't provide any standard way to check reachability and/or  
<br>
health of a peer process.
<br>
<p>That being said, I think some of the academics are working on more  
<br>
fault tolerant / resilient MPI messaging, but I don't know if they're  
<br>
ready to talk about such efforts publicly yet.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10054.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10052.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
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
