<?
$subject_val = "Re: [OMPI users] collective communications broken on more than 4 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 10:42:19 2009" -->
<!-- isoreceived="20091029144219" -->
<!-- sent="Thu, 29 Oct 2009 15:42:14 +0100" -->
<!-- isosent="20091029144214" -->
<!-- name="Vincent Loechner" -->
<!-- email="loechner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective communications broken on more than 4 cores" -->
<!-- id="E1N3WCc-0007Ag-3E_at_gauvain.u-strasbg.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="93A28CE9-613B-47C6-8B74-CE1D51209453_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective communications broken on more than 4 cores<br>
<strong>From:</strong> Vincent Loechner (<em>loechner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 10:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev4">&gt; &gt;&gt;&gt; It seems that the calls to collective communication are not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; returning for some MPI processes, when the number of processes is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; greater or equal to 5. It's reproduceable, on two different
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; architectures, with two different versions of OpenMPI (1.3.2 and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1.3.3). It was working correctly with OpenMPI version 1.2.7.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does it work if you turn off the shared memory transport layer;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that is,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -n 6 -mca btl ^sm ./testmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes it does, on both my configurations (AMD and Intel processor).
</span><br>
<span class="quotelev2">&gt; &gt; So it seems that the shared memory synchronization process is
</span><br>
<span class="quotelev2">&gt; &gt; broken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Presumably that is this bug:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
</span><br>
<p>Yes it is.
<br>
<p><span class="quotelev1">&gt; I also found by trial and error that increasing the number of fifos, eg
</span><br>
<span class="quotelev1">&gt; -mca btl_sm_num_fifos 5
</span><br>
<span class="quotelev1">&gt; on a 6-processor job, apparently worked around the problem.
</span><br>
<span class="quotelev1">&gt; But yes, something seems broken in OpenMP shared memory transport with  
</span><br>
<span class="quotelev1">&gt; gcc 4.4.x.
</span><br>
<p>Yes, same for me: -mca btl_sm_num_fifos 5 worked.
<br>
Thanks for your answer Jonathan.
<br>
<p>If I may help the developpers in any way to track this bug get into
<br>
contact with me.
<br>
<p>--Vincent
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="11002.php">Jonathan Dursi: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Reply:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
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
