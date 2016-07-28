<?
$subject_val = "Re: [OMPI users] mpirun has exited due to process rank N";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 18:12:12 2016" -->
<!-- isoreceived="20160707221212" -->
<!-- sent="Thu, 7 Jul 2016 15:12:08 -0700" -->
<!-- isosent="20160707221208" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun has exited due to process rank N" -->
<!-- id="5F2E7D4A-2341-4D1B-A5D5-ADBC9BF64733_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="650DD2DA2F86254EB3CAEFB7CFE6D7CF5DAEB81D_at_chimbx4.ad.uillinois.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun has exited due to process rank N<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 18:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29598.php">Ralph Castain: "Re: [OMPI users] Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="29596.php">Alberti, Andrea: "[OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>In reply to:</strong> <a href="29596.php">Alberti, Andrea: "[OMPI users] mpirun has exited due to process rank N"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29599.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>Reply:</strong> <a href="29599.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try running one of the OMPI example codes and verify that things run correctly if N &gt; 25. I suspect you have an error in your code that causes it to fail if its rank is &gt; 25.
<br>
<p><p><span class="quotelev1">&gt; On Jul 7, 2016, at 2:49 PM, Alberti, Andrea &lt;alberti3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my name is Andrea and I am a new openMPI user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a code compiled with:
</span><br>
<span class="quotelev1">&gt; intel/16.0.3
</span><br>
<span class="quotelev1">&gt; openmpi/1.6.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; When I try to run my code with:  mpirun -n N ./code.exe
</span><br>
<span class="quotelev1">&gt;       a) the code correctly runs and gives results if N&lt;=25
</span><br>
<span class="quotelev1">&gt;       b) the code gives the following error if N&gt;25:
</span><br>
<span class="quotelev1">&gt;           mpirun has exited due to process rank X with PID ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; This seems to be a pretty common problem when not all the processes are initialized or finalized.
</span><br>
<span class="quotelev1">&gt;       However, I do init and finalize the processors.
</span><br>
<span class="quotelev1">&gt;       And, moreover, I do not understand why the problem is not there when  N&lt;=25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone, please, help me out with that or point me to some pages where the same problem is discussed/solved?
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrea
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29596.php">http://www.open-mpi.org/community/lists/users/2016/07/29596.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29596.php">http://www.open-mpi.org/community/lists/users/2016/07/29596.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29598.php">Ralph Castain: "Re: [OMPI users] Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="29596.php">Alberti, Andrea: "[OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>In reply to:</strong> <a href="29596.php">Alberti, Andrea: "[OMPI users] mpirun has exited due to process rank N"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29599.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>Reply:</strong> <a href="29599.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
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
