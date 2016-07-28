<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 13:06:43 2007" -->
<!-- isoreceived="20070425170643" -->
<!-- sent="Wed, 25 Apr 2007 13:05:35 -0400" -->
<!-- isosent="20070425170535" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun syntax for smp machine" -->
<!-- id="CAF266A1-6F12-4DD5-9CBE-7B309CCCC758_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F202C92E99_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-25 13:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3139.php">damien_at_[hidden]: "[OMPI users] testing the Windows version of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3137.php">Borenstein, Bernard S: "[OMPI users] mpirun syntax for smp machine"</a>
<li><strong>In reply to:</strong> <a href="3137.php">Borenstein, Bernard S: "[OMPI users] mpirun syntax for smp machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI will do this on its own.  As shared memory in its mind is  
<br>
preferable to tcp.  We can measure the difference here on the same  
<br>
kind of system (Sun x4600).   If you want to force omitting tcp  
<br>
(should not be needed)  run like this:
<br>
<p>mpirun --mca btl ^tcp -np 8 ./a.out
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Apr 25, 2007, at 12:54 PM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; We just got a 8 cpu machine with 64GB of memory.  I've been told it  
</span><br>
<span class="quotelev1">&gt; would be advantageous to run MPI codes with shared memory and not  
</span><br>
<span class="quotelev1">&gt; use TCP sockets
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for this new machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I do this with OPENMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3139.php">damien_at_[hidden]: "[OMPI users] testing the Windows version of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3137.php">Borenstein, Bernard S: "[OMPI users] mpirun syntax for smp machine"</a>
<li><strong>In reply to:</strong> <a href="3137.php">Borenstein, Bernard S: "[OMPI users] mpirun syntax for smp machine"</a>
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
