<?
$subject_val = "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 18:40:41 2011" -->
<!-- isoreceived="20110317224041" -->
<!-- sent="Thu, 17 Mar 2011 23:40:31 +0100" -->
<!-- isosent="20110317224031" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling" -->
<!-- id="4D828DDF.9020906_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E39B1BE5-DAC4-4B3D-BB9D-8FB7265E3A96_at_cisco.com" -->
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
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 18:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Previous message:</strong> <a href="15905.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Reply:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
glad we could help and the two hours of stripping things down were 
<br>
effectively not wasted. Also good to hear (implicitly) that we were not 
<br>
too stupid to understand the MPI standard...
<br>
<p>Since to the best of my understanding, our workaround is practically 
<br>
overhead-free, we went ahead and coded everything up analogously to the 
<br>
workaround, i.e. we don't rely on / wait for an immediate fix.
<br>
<p>Please let us know if further information is needed.
<br>
<p>Thanks,
<br>
<p>dom
<br>
<p>On 03/17/2011 05:10 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the late reply, but many thanks for the bug report and reliable reproducer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've confirmed the problem and filed a bug about this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       <a href="https://svn.open-mpi.org/trac/ompi/ticket/2752">https://svn.open-mpi.org/trac/ompi/ticket/2752</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2011, at 6:12 PM, Dominik Goeddeke wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached example code (stripped down from a bigger app) demonstrates a way to trigger a severe crash in all recent ompi releases but not in a bunch of latest MPICH2 releases. The code is minimalistic and boils down to the call
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_create(MPI_COMM_WORLD, MPI_GROUP_EMPTY,&amp;dummy_comm);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which isn't supposed to be illegal. Please refer to the (well-documented) code for details on the high-dimensional cross product I tested (on ubuntu 10.04 LTS), a potential workaround (which isn't supposed to be necessary I think) and an exemplary stack trace.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instructions: mpicc test.c -Wall -O0&amp;&amp;  mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dr. Dominik G&#246;ddeke
Institut f&#252;r Angewandte Mathematik
Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Previous message:</strong> <a href="15905.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Reply:</strong> <a href="15907.php">Jack Bryan: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
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
