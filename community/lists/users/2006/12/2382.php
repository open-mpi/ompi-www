<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 19 15:33:15 2006" -->
<!-- isoreceived="20061219203315" -->
<!-- sent="Tue, 19 Dec 2006 12:33:11 -0800 (PST)" -->
<!-- isosent="20061219203311" -->
<!-- name="Harakiri" -->
<!-- email="harakiri_23_at_[hidden]" -->
<!-- subject="[OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)" -->
<!-- id="20061219203311.77476.qmail_at_web52204.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Harakiri (<em>harakiri_23_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-19 15:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2383.php">Michael John Hanby: "Re: [OMPI users] configure openmpi with support for Sun gridengine(SGE)?"</a>
<li><strong>Previous message:</strong> <a href="2381.php">Michael John Hanby: "[OMPI users] configure openmpi with support for Sun gridengine (SGE)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2384.php">Andreas Schäfer: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Reply:</strong> <a href="2384.php">Andreas Schäfer: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i need some input on the parallelisation of quicksort.
<br>
If anyone knows a more appropriate forum/list than
<br>
this, please tell me =)
<br>
<p>I've written 2 different approaches to the quicksort
<br>
parallelisation.
<br>
<p>1. The &quot;master&quot; server splits the array of numbers
<br>
into N seperate parts, where N is the number of
<br>
available clients or slave servers. Each slave then
<br>
does a quicksort on its own subarray - finally all
<br>
slaves sent their subarray to the master. The master
<br>
then does a quicksort on the presorted list.
<br>
*This was done for the assumption that presorted list
<br>
sort faster with quicksort than very unordered/random
<br>
numbers lists.
<br>
<p>2. The &quot;master&quot; server finds out the MIN and MAX value
<br>
from the to sorting array (iterates through all
<br>
numbers). Then it will assign boundaries to each slave
<br>
starting from MIN for the first slave, to MAX for the
<br>
last slave (i.e. for 2 slaves it would be from MIN -&gt;
<br>
MAX/2 and MAX/2+1 -&gt; MAX). 
<br>
The master then sends the whole array to each slave,
<br>
each slave filters through the whole array all numbers
<br>
within their own boundary (slave 1 for example would
<br>
find all numbers between MIN -&gt; MAX/2), after that it
<br>
would quicksort the resulting array. Finally each
<br>
slave server would sent the resulting subarrays to the
<br>
master in the correct sequence - meaning that the
<br>
master server would not be needed to do any sorting at
<br>
all - only append the results i.e. slave1 starts
<br>
first, then slave2...
<br>
<p>This has the advantage that only minimum network
<br>
&quot;messages&quot; are sent (not traffic).
<br>
<p><p>Anyone has any different ideas ? I've read a few
<br>
papers about it - the basic approach would be to
<br>
parallel the divide and conquer part - which would
<br>
result in ALOT of network messages...
<br>
<p><p>Thank you
<br>
<p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2383.php">Michael John Hanby: "Re: [OMPI users] configure openmpi with support for Sun gridengine(SGE)?"</a>
<li><strong>Previous message:</strong> <a href="2381.php">Michael John Hanby: "[OMPI users] configure openmpi with support for Sun gridengine (SGE)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2384.php">Andreas Schäfer: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Reply:</strong> <a href="2384.php">Andreas Schäfer: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
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
