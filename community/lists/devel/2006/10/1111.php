<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 14:17:31 2006" -->
<!-- isoreceived="20061012181731" -->
<!-- sent="Thu, 12 Oct 2006 14:17:30 -0400 (EDT)" -->
<!-- isosent="20061012181730" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] configure changes tonight" -->
<!-- id="Pine.LNX.4.64.0610121411390.19341_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 14:17:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1112.php">Lisandro Dalcin: "[OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>Previous message:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>There will be three configure changes committed to the trunk tonight:
<br>
<p>&nbsp;&nbsp;&nbsp;- Some cleanups resulting from the update to the wrapper
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compilers for 32/64 bit support
<br>
&nbsp;&nbsp;&nbsp;- A new configure option to deal with some fixes for the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::SEEK_SET (and friends) issue
<br>
&nbsp;&nbsp;&nbsp;- Some cleanups in the pthreads configure tests
<br>
<p>The only real affect for everyone should be that you'll have to 
<br>
re-autogen.sh.  And that the 32/64 include and libdir flags will no longer 
<br>
be available.  I will be updating the wiki shortly w.r.t. how to build a 
<br>
multilib wrapper compiler shortly.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1112.php">Lisandro Dalcin: "[OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>Previous message:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
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
