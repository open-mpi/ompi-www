<?
$subject_val = "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 13:17:11 2009" -->
<!-- isoreceived="20090619171711" -->
<!-- sent="Fri, 19 Jun 2009 10:17:15 -0700" -->
<!-- isosent="20090619171715" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes" -->
<!-- id="4A3BC81B.70604_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="82dde0906190718h6a70ed7i936efee09943445e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 13:17:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9642.php">SLIM H.A.: "[OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>In reply to:</strong> <a href="9639.php">Mark Bolstad: "[OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark Bolstad wrote:
<br>
<p><span class="quotelev1">&gt; I have a small test code that I've managed to duplicate the results 
</span><br>
<span class="quotelev1">&gt; from a larger code. In essence, using the sm btl with ISend, I wind up 
</span><br>
<span class="quotelev1">&gt; with the communication being completely serialized, i.e., all the 
</span><br>
<span class="quotelev1">&gt; calls from process 1 complete, then all from 2, ...
</span><br>
<p>I need to do some other stuff, but might spend time on this later.  For 
<br>
now, I'll just observe that your sends are rendezvous sends.  E.g., if 
<br>
you decrease BUFLEN from 25000 to 2500 (namely, from over 4K to under 
<br>
4K), the behavior should change (to what you'd expect).  That may or may 
<br>
not help you, but I think it's an important observation in reasoning 
<br>
about this behavior.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9642.php">SLIM H.A.: "[OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>In reply to:</strong> <a href="9639.php">Mark Bolstad: "[OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
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
