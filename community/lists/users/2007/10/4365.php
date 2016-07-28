<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 14:01:25 2007" -->
<!-- isoreceived="20071031180125" -->
<!-- sent="Wed, 31 Oct 2007 23:31:22 +0530" -->
<!-- isosent="20071031180122" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to construct a datatype over two different arrays?" -->
<!-- id="547db2260710311101g41acb975i487448472158cfe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6ab5deaf0710311040r60862e46l9074a5da270668dd_at_mail.gmail.com" -->
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
<strong>From:</strong> Amit Kumar Saha (<em>amitsaha.in_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 14:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/31/07, Oleg Morajko &lt;olegmorajko_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following problem. There areI two arrays somewere in the
</span><br>
<span class="quotelev1">&gt; program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double weights [MAX_SIZE];
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; int       values [MAX_SIZE];
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to be able to send a single pair { weights [i], values [i] } with a
</span><br>
<span class="quotelev1">&gt; single MPI_Send call Or receive it directly into both arrays at at given
</span><br>
<span class="quotelev1">&gt; index i. How can I define a datatype that spans this pair over both arrays?
</span><br>
<p><p>Did you have a look at topics like - MPI derived data types, MPI packing?
<br>
May be they can help.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Amit Kumar Saha
*NetBeans Community Docs
Contribution Coordinator*
me blogs@ <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
URL:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4365/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4364.php">Karsten Bolding: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>In reply to:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4370.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
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
