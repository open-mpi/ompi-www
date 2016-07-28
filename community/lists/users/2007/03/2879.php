<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 12:18:30 2007" -->
<!-- isoreceived="20070322161830" -->
<!-- sent="Thu, 22 Mar 2007 08:18:26 -0800" -->
<!-- isosent="20070322161826" -->
<!-- name="tim gunter" -->
<!-- email="tgunter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock on barrier" -->
<!-- id="90c088060703220918w12b70d3di51ff42ee1499e2d4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5779006-683A-4D85-BCC3-31C5A0D9F906_at_cisco.com" -->
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
<strong>From:</strong> tim gunter (<em>tgunter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 12:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Reply:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/22/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a TCP-based cluster?
</span><br>
<p><p>yes
<br>
<p>If so, do you have multiple IP addresses on your frontend machine?
<br>
<span class="quotelev1">&gt; Check out these two FAQ entries to see if they help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<p><p>ok, using the internal interfaces only fixed the problem.
<br>
<p>it is a little confusing that when this happens, one machine would make
<br>
it past the barrier, and the others would not.
<br>
<p>thanks Jeff!
<br>
<p>--tim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2880.php">Ralph Castain: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2878.php">Josh Hursey: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>In reply to:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Reply:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
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
