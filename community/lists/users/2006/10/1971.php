<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 10:34:27 2006" -->
<!-- isoreceived="20061012143427" -->
<!-- sent="Thu, 12 Oct 2006 10:34:17 -0400" -->
<!-- isosent="20061012143417" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS problem with OpenMP- only one processor used" -->
<!-- id="376D58D8-B351-44DD-96E5-313E0AAAFB86_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="678498360610120523p355e5133sc9044e3a90aaebab_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 10:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1972.php">Karl Dockendorf: "[OMPI users] Controlling Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 12, 2006, at 8:23 AM, amane001 wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply. I actually meant OpenMPI
</span><br>
<p><span class="quotelev1">&gt; Am 12.10.2006 um 09:52 schrieb amane001:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; the code below. Even if I set the OMP_NUM_THREADS = 2, the print
</span><br>
<p><span class="quotelev2">&gt; &gt; setenv OMP_NUM_THREADS 2
</span><br>
<p>These are OpenMP, not OpenMPI environmental variables.
<br>
<p><span class="quotelev1">&gt; /usr/local/openmp-1.1.1/bin/mpirun -np 2 ../source/test.exe  &lt;  
</span><br>
<span class="quotelev1">&gt; input.dat&gt;Output
</span><br>
<p>This tells OpenMPI to run with 2 processes, note you have dropped the  
<br>
&quot;i&quot; in openmpi in your directory names, this will continue to be a  
<br>
source of confusion.
<br>
<p>The first good test for any combination of any MPI and any scheduler  
<br>
is the following:
<br>
<p>mpirun -np 2 hostname
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1972.php">Karl Dockendorf: "[OMPI users] Controlling Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1981.php">Jeff Squyres: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
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
