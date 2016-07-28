<?
$subject_val = "Re: [OMPI users] some problems with openmpi-1.9a1r30100";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 11:09:10 2014" -->
<!-- isoreceived="20140101160910" -->
<!-- sent="Wed, 1 Jan 2014 08:07:24 -0800" -->
<!-- isosent="20140101160724" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some problems with openmpi-1.9a1r30100" -->
<!-- id="39729ED7-397F-42A1-90EB-3C8EE55188A4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201401010948.s019m734010487_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] some problems with openmpi-1.9a1r30100<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 11:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23306.php">Oscar Vega-Gisbert: "[OMPI users]  some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The fix to build Java hasn't moved to 1.7 yet - waiting for Jeff to return from vacation to review it.
<br>
<p>Per your prior note about mpiexec hanging on Sparc, there is no reason why the Java bindings would alter that situation. So the problem is the same, and I won't create a new ticket for the java behavior.
<br>
<p><p>On Jan 1, 2014, at 1:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have similar problems with Java.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 197 mpiexec -np 4 java BcastIntArrayMain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 0 running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt;  intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 1 running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt;  intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 2 running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt;  intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 3 running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt;  intValues[0]: 0  intValues[1]: 11  intValues[2]: 22  intValues[3]: 33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 198 mpiexec -np 4 -host rs0,tyr java BcastIntArrayMain
</span><br>
<span class="quotelev1">&gt; tyr java 199 echo $status
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; tyr java 200 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why? Both machines are big endian machines. By the way, I have similar
</span><br>
<span class="quotelev1">&gt; problems with openmpi-1.7.x. Java isn't available at the moment as I
</span><br>
<span class="quotelev1">&gt; reported before.
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23306.php">Oscar Vega-Gisbert: "[OMPI users]  some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
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
