<?
$subject_val = "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 12:11:02 2011" -->
<!-- isoreceived="20110317161102" -->
<!-- sent="Thu, 17 Mar 2011 12:10:56 -0400" -->
<!-- isosent="20110317161056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling" -->
<!-- id="E39B1BE5-DAC4-4B3D-BB9D-8FB7265E3A96_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D7414DB.7080007_at_math.tu-dortmund.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 12:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>Previous message:</strong> <a href="15896.php">Jeff Squyres: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<li><strong>In reply to:</strong> <a href="15803.php">Dominik Goeddeke: "[OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Reply:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the late reply, but many thanks for the bug report and reliable reproducer.
<br>
<p>I've confirmed the problem and filed a bug about this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2752">https://svn.open-mpi.org/trac/ompi/ticket/2752</a>
<br>
<p><p>On Mar 6, 2011, at 6:12 PM, Dominik Goeddeke wrote:
<br>
<p><span class="quotelev1">&gt; The attached example code (stripped down from a bigger app) demonstrates a way to trigger a severe crash in all recent ompi releases but not in a bunch of latest MPICH2 releases. The code is minimalistic and boils down to the call
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_create(MPI_COMM_WORLD, MPI_GROUP_EMPTY, &amp;dummy_comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which isn't supposed to be illegal. Please refer to the (well-documented) code for details on the high-dimensional cross product I tested (on ubuntu 10.04 LTS), a potential workaround (which isn't supposed to be necessary I think) and an exemplary stack trace.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instructions: mpicc test.c -Wall -O0 &amp;&amp; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>Previous message:</strong> <a href="15896.php">Jeff Squyres: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<li><strong>In reply to:</strong> <a href="15803.php">Dominik Goeddeke: "[OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Reply:</strong> <a href="15906.php">Dominik Goeddeke: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
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
