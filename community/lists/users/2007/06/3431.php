<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 15:08:14 2007" -->
<!-- isoreceived="20070610190814" -->
<!-- sent="Sun, 10 Jun 2007 14:08:08 -0500" -->
<!-- isosent="20070610190808" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="[OMPI users] Library Definitions" -->
<!-- id="466C4C18.4000406_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-10 15:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe the &quot;dumb question&quot; of the week, but here goes...
<br>
<p>I am trying to compile a piece of code (NPB) under OpenMPI and I am 
<br>
having a problem with specifying the right library. Possibly something I 
<br>
need to define in a LD_LIBRARY_PATH statement?
<br>
<p>Using Gnu mpich, the line looked like this...
<br>
<p>FMPI_LIB  = -L/opt/mpich/gnu/lib/ -lmpich
<br>
<p>I tried to replace this with...
<br>
<p>FMPI_LIB  = -L/usr/lib/openmpi/ -llibmpi
<br>
<p>to which the make responded...
<br>
mpif90 -O -o ../bin/cg.A.2 cg.o ../common/print_results.o 
<br>
../common/randdp.o ../common/timers.o -L/usr/lib/openmpi/ -llibmpi
<br>
/usr/bin/ld: cannot find -llibmpi
<br>
collect2: ld returned 1 exit status
<br>
<p>Wrong library file? Setup or path issue?
<br>
<p><pre>
-- 
Jeff F. Pummill
Senior Linux Cluster Administrator
University of Arkansas
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3432.php">Jeff Squyres: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Reply:</strong> <a href="3433.php">Ralph Castain: "Re: [OMPI users] Library Definitions"</a>
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
