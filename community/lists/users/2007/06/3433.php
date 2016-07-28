<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 15:16:25 2007" -->
<!-- isoreceived="20070610191625" -->
<!-- sent="Sun, 10 Jun 2007 13:16:16 -0600" -->
<!-- isosent="20070610191616" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Library Definitions" -->
<!-- id="C291AA20.300B%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="466C4C18.4000406_at_uark.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-10 15:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3431.php">Jeff Pummill: "[OMPI users] Library Definitions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not a dumb question at all. :-)
<br>
<p>I think the problem is your &#173;L flag. Our mpif90 wrapper compiler should
<br>
already know where to find the MPI library, which is located in wherever you
<br>
installed openmpi. Your flag is trying to overload our settings and I
<br>
believe is causing confusion.
<br>
<p>So just eliminate the flag and I think you&#185;ll find everything compiles just
<br>
fine.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 6/10/07 1:08 PM, &quot;Jeff Pummill&quot; &lt;jpummil_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Maybe the &quot;dumb question&quot; of the week, but here goes...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile a piece of code (NPB) under OpenMPI and I am having a
</span><br>
<span class="quotelev1">&gt; problem with specifying the right library. Possibly something I need to define
</span><br>
<span class="quotelev1">&gt; in a LD_LIBRARY_PATH statement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Gnu mpich, the line looked like this...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FMPI_LIB  = -L/opt/mpich/gnu/lib/ -lmpich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to replace this with...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FMPI_LIB  = -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to which the make responded...
</span><br>
<span class="quotelev1">&gt; mpif90 -O -o ../bin/cg.A.2 cg.o ../common/print_results.o ../common/randdp.o
</span><br>
<span class="quotelev1">&gt; ../common/timers.o -L/usr/lib/openmpi/ -llibmpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -llibmpi
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wrong library file? Setup or path issue?
</span><br>
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3434.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3431.php">Jeff Pummill: "[OMPI users] Library Definitions"</a>
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
