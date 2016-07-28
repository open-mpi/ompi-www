<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 15:45:15 2007" -->
<!-- isoreceived="20070514194515" -->
<!-- sent="Mon, 14 May 2007 21:46:23 +0200" -->
<!-- isosent="20070514194623" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple MPI_Reduce" -->
<!-- id="20070514194623.GO14385_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="f6a174940705141129qa9d984ek1af87426e78ca729_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 15:46:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3271.php">Brian Barrett: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Previous message:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3276.php">Jayanta Roy: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="3276.php">Jayanta Roy: "Re: [OMPI users] multiple MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 14, 2007 at 11:59:18PM +0530, Jayanta Roy wrote:
<br>
<p><span class="quotelev1">&gt; if(myrank = 0 || myrank == 1)
</span><br>
<span class="quotelev1">&gt; if(myrank = 2 || myrank == 3)
</span><br>
<p>Just to make clear we're not talking about a typo: Do you mean
<br>
assignment or comparison?
<br>
<p><p>For comparisons, better put the constant value to the left, so
<br>
<p>&nbsp;&nbsp;&nbsp;if (2 = myrank)
<br>
<p>gives you a compiler error, because your intention was
<br>
<p>&nbsp;&nbsp;&nbsp;if (2 == myrank)
<br>
<p><p>Just guessing...
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3271.php">Brian Barrett: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Previous message:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3276.php">Jayanta Roy: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="3276.php">Jayanta Roy: "Re: [OMPI users] multiple MPI_Reduce"</a>
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
