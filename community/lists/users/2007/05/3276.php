<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 15 10:07:23 2007" -->
<!-- isoreceived="20070515140723" -->
<!-- sent="Tue, 15 May 2007 19:37:17 +0530" -->
<!-- isosent="20070515140717" -->
<!-- name="Jayanta Roy" -->
<!-- email="jay.roys_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple MPI_Reduce" -->
<!-- id="f6a174940705150707m40814f35w7be55e729df42a1d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070514194623.GO14385_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Jayanta Roy (<em>jay.roys_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-15 10:07:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
<li><strong>Previous message:</strong> <a href="3275.php">Ron Brightwell: "[OMPI users] CFP: IEEE Cluster'07"</a>
<li><strong>In reply to:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rainer and Adrian,
<br>
<p>Thank you lot for the help. It works. I was trying this for long time but
<br>
didn't notice the mistakes. I can't understand how can I overlooked that!
<br>
<p>Regards,
<br>
Jayanta
<br>
<p>On 5/15/07, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 14, 2007 at 11:59:18PM +0530, Jayanta Roy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; if(myrank = 0 || myrank == 1)
</span><br>
<span class="quotelev2">&gt; &gt; if(myrank = 2 || myrank == 3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make clear we're not talking about a typo: Do you mean
</span><br>
<span class="quotelev1">&gt; assignment or comparison?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For comparisons, better put the constant value to the left, so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (2 = myrank)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives you a compiler error, because your intention was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (2 == myrank)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just guessing...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
<li><strong>Previous message:</strong> <a href="3275.php">Ron Brightwell: "[OMPI users] CFP: IEEE Cluster'07"</a>
<li><strong>In reply to:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
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
