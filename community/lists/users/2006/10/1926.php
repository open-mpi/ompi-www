<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  4 08:25:56 2006" -->
<!-- isoreceived="20061004122556" -->
<!-- sent="Wed, 4 Oct 2006 14:22:34 +0200 (CEST)" -->
<!-- isosent="20061004122234" -->
<!-- name="Harald Forbert" -->
<!-- email="Harald.Forbert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="Pine.LNX.4.61.0610041411300.21466_at_bryan.theochem.ruhr-uni-bochum.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3472.1159911847.4460.users_at_open-mpi.org" -->
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
<strong>From:</strong> Harald Forbert (<em>Harald.Forbert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-04 08:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1925.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Additional note on the the BLACS vs. OpenMPI 1.1.1 &amp; 1.3 problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The BLACS install program xtc_CsameF77  says to not use -DCsameF77  
</span><br>
<span class="quotelev1">&gt; with OpenMPI; however, because of an oversight I used it in my first  
</span><br>
<span class="quotelev1">&gt; tests -- for OpenMPI 1.1.1 the errors are the same with and without  
</span><br>
<span class="quotelev1">&gt; this setting; however, without it the tester program is very slow  
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.1.1 or hangs at &quot;RUNNING REPEATABLE SUM TEST&quot; near the  
</span><br>
<span class="quotelev1">&gt; end.   OpenMPI 1.1.2rc1 behaved nearly identically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With regards to OpenMPI 1.3, not using -DCsameF77 (that is setting  
</span><br>
<span class="quotelev1">&gt; TRANSCOMM blank), prevents the crash I observed earlier; however,  
</span><br>
<span class="quotelev1">&gt; massive errors begin at the &quot;DOUBLE COMPLEX AMX&quot; tests and then the  
</span><br>
<span class="quotelev1">&gt; auxiliary tests at the end are very slow or hangs at &quot;RUNNING  
</span><br>
<span class="quotelev1">&gt; REPEATABLE SUM TEST&quot;.
</span><br>
<p>The TRANSCOMM setting that we are using here and that I think is the
<br>
correct one is &quot;-DUseMpi2&quot; since OpenMPI implements the corresponding
<br>
mpi2 calls. You need a recent version of BLACS for this setting
<br>
to be available (1.1 with patch 3 should be fine). Together with the
<br>
patch to openmpi1.1.1 from ticket 356 we are passing the blacs tester
<br>
for 4 processors. I didn't have to time to test with other numbers
<br>
though.
<br>
<p>Harald Forbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1925.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe in reply to:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1927.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
