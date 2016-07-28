<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 24 18:11:59 2006" -->
<!-- isoreceived="20060324231159" -->
<!-- sent="Fri, 24 Mar 2006 16:11:46 -0700" -->
<!-- isosent="20060324231146" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[OMPI users] PBS Professional" -->
<!-- id="op.s6xxdw0fies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-24 18:11:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0902.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Previous message:</strong> <a href="0900.php">Ali Eghlima: "[OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0902.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Reply:</strong> <a href="0902.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Noticing the FAQ, <a href="http://www.open-mpi.org/faq/?category=building#build-rte">http://www.open-mpi.org/faq/?category=building#build-rte</a>
<br>
<p>Rather than simply running `./confiugre --disable-shared --enable static`  
<br>
and having /everything/ compiled statically, is it possible to compile  
<br>
only the bare minimum to get the tm module working, and leave the rest as  
<br>
dynamically loadable?
<br>
<p>--enable-mca-static=pls:tm,ras:tm doesn't seem to cut it, as liborte is  
<br>
still compiled dynamically; and I don't know enough of the Open MPI  
<br>
architecture to say if this is even feasable...
<br>
<p>I do realize that it would be easier if PBS Professional were compiled  
<br>
with -fPIC so that a DSO tm module could be built; I've asked Altair's  
<br>
support to do so in the past, and received a response to the effect of  
<br>
&quot;it's in the suggestion box; no idea if it will happen.&quot;
<br>
<p>It would be nice if they (Altair) would read some of the documentation  
<br>
&nbsp;from the x86-64 project:
<br>
<a href="http://www.x86-64.org/lists/discuss/msg05760.html">http://www.x86-64.org/lists/discuss/msg05760.html</a>  (Basically, a plead  
<br>
with suppliers of static libraries to compile  with -fPIC on x86-64).
<br>
<p>Sigh...
<br>
<pre>
--
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0902.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Previous message:</strong> <a href="0900.php">Ali Eghlima: "[OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0902.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Reply:</strong> <a href="0902.php">Brian Barrett: "Re: [OMPI users] PBS Professional"</a>
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
