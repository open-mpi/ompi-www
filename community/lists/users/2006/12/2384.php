<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 19 20:35:34 2006" -->
<!-- isoreceived="20061220013534" -->
<!-- sent="Wed, 20 Dec 2006 02:35:30 +0100" -->
<!-- isosent="20061220013530" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)" -->
<!-- id="20061220013530.GA4589_at_wintermute" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20061219203311.77476.qmail_at_web52204.mail.yahoo.com" -->
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
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-19 20:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Previous message:</strong> <a href="2383.php">Michael John Hanby: "Re: [OMPI users] configure openmpi with support for Sun gridengine(SGE)?"</a>
<li><strong>In reply to:</strong> <a href="2382.php">Harakiri: "[OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Reply:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hiho,
<br>
<p>On 12:33 Tue 19 Dec     , Harakiri wrote:
<br>
<span class="quotelev1">&gt; i need some input on the parallelisation of quicksort.
</span><br>
<span class="quotelev1">&gt; If anyone knows a more appropriate forum/list than
</span><br>
<span class="quotelev1">&gt; this, please tell me =)
</span><br>
<p>uhm, do you have access to a library? Get yourself a textbook on
<br>
algorithms. Knuth should be a good basis to start with...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've written 2 different approaches to the quicksort
</span><br>
<span class="quotelev1">&gt; parallelisation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The &quot;master&quot; server splits the array of numbers
</span><br>
<span class="quotelev1">&gt; into N seperate parts, where N is the number of
</span><br>
<span class="quotelev1">&gt; available clients or slave servers. Each slave then
</span><br>
<span class="quotelev1">&gt; does a quicksort on its own subarray - finally all
</span><br>
<span class="quotelev1">&gt; slaves sent their subarray to the master. The master
</span><br>
<span class="quotelev1">&gt; then does a quicksort on the presorted list.
</span><br>
<span class="quotelev1">&gt; *This was done for the assumption that presorted list
</span><br>
<span class="quotelev1">&gt; sort faster with quicksort than very unordered/random
</span><br>
<span class="quotelev1">&gt; numbers lists.
</span><br>
<p>Just some random ideas:
<br>
<p>&nbsp;* Are you bound to use Quicksort in the master? Since the arrays are
<br>
&nbsp;&nbsp;&nbsp;presorted, Mergesort would be more advisable.
<br>
<p>&nbsp;* I wouldn't combine the arrays at the master but do this step in
<br>
&nbsp;&nbsp;&nbsp;parallel, too. Given 4 machines 0..3, machine 0 would merge its own
<br>
&nbsp;&nbsp;&nbsp;subarray with no. 1's while machine 2 would merge with
<br>
&nbsp;&nbsp;&nbsp;no. 3. finally no. 0 and no. 3 would combine their arrays.
<br>
<p>&nbsp;* All of this is quite obsolete, as there is an optimal parallel
<br>
&nbsp;&nbsp;&nbsp;Quicksort at hands (all praise Wikipedia):
<br>
&nbsp;&nbsp;&nbsp;<a href="http://citeseer.ist.psu.edu/cache/papers/cs/16170/ftp:zSzzSzai.ist.flinders.edu.auzSzpubzSzaizSzpaperszSz199109-PaCT.pdf/powers91parallelized.pdf">http://citeseer.ist.psu.edu/cache/papers/cs/16170/ftp:zSzzSzai.ist.flinders.edu.auzSzpubzSzaizSzpaperszSz199109-PaCT.pdf/powers91parallelized.pdf</a>
<br>
<p><span class="quotelev1">&gt; 2. The &quot;master&quot; server finds out the MIN and MAX value
</span><br>
<span class="quotelev2">&gt; &gt;from the to sorting array (iterates through all
</span><br>
<span class="quotelev1">&gt; numbers). Then it will assign boundaries to each slave
</span><br>
<span class="quotelev1">&gt; starting from MIN for the first slave, to MAX for the
</span><br>
<span class="quotelev1">&gt; last slave (i.e. for 2 slaves it would be from MIN -&gt;
</span><br>
<span class="quotelev1">&gt; MAX/2 and MAX/2+1 -&gt; MAX). 
</span><br>
<p>&nbsp;That would imply assumptions on the distribution of the
<br>
&nbsp;elements. This may be clever from a practical point of view, but is
<br>
&nbsp;flawed because of theoretical considerations. Assume you had 1000
<br>
&nbsp;elements ranging from 1.0 to 1.1 and just one element with a value of
<br>
&nbsp;100.0. No good.
<br>
<p><span class="quotelev1">&gt; The master then sends the whole array to each slave,
</span><br>
<span class="quotelev1">&gt; each slave filters through the whole array all numbers
</span><br>
<span class="quotelev1">&gt; within their own boundary (slave 1 for example would
</span><br>
<span class="quotelev1">&gt; find all numbers between MIN -&gt; MAX/2),
</span><br>
<p>Communication is expensive. Sending n elements is more expensive than
<br>
filtering them on the local machine and sending only the remainder. At
<br>
least this is what I'd expect, although I haven't benchmarked this. 
<br>
<p><span class="quotelev1">&gt; Anyone has any different ideas ? I've read a few
</span><br>
<span class="quotelev1">&gt; papers about it - the basic approach would be to
</span><br>
<span class="quotelev1">&gt; parallel the divide and conquer part - which would
</span><br>
<span class="quotelev1">&gt; result in ALOT of network messages...
</span><br>
<p>As already said, please read Powers' paper from above. I could imagine
<br>
that even though this results in _many_ messages, the algorithms
<br>
optimal runtime complexity will compensate for it.
<br>
<p>But benchmark your own ;-)
<br>
<p>hth
<br>
-Andreas
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
+49 3641 9 46376 - voice
============================================

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2384/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Previous message:</strong> <a href="2383.php">Michael John Hanby: "Re: [OMPI users] configure openmpi with support for Sun gridengine(SGE)?"</a>
<li><strong>In reply to:</strong> <a href="2382.php">Harakiri: "[OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Reply:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
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
