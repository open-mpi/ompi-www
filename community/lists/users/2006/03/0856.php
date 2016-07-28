<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 13:37:54 2006" -->
<!-- isoreceived="20060314183754" -->
<!-- sent="Tue, 14 Mar 2006 12:37:52 -0600" -->
<!-- isosent="20060314183752" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] comm_join and singleton init" -->
<!-- id="44170D80.1050004_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4417036D.2040003_at_cs.uh.edu" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 13:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0857.php">Robert Latham: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I know what goes wrong. Since they are in different 'universes', 
<br>
they will have exactly the same 'Open MPI name', and therefore the 
<br>
algorithm in intercomm_merge can not determine which process should be 
<br>
first and which is second.
<br>
<p>Practically, all jobs which are connected at a certain point in there 
<br>
lifetime have to be in the same MPI universe, such that all jobs will 
<br>
have different jobid's and therefore different names. To use the same 
<br>
universe, you have to start the orted daemon in the persistent mode, so 
<br>
the sequence should be:
<br>
<p>orted --seed --persistent --scope public
<br>
mpirun -np x ./app1
<br>
mpirun -np y ./app2
<br>
<p>In this case everything should work as expected, you could do the 
<br>
comm_join between app1 and app2 and the intercomm_merge should work as well.
<br>
<p>Hope this helps
<br>
Edgar
<br>
<p>Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; could you provide me a simple testcode for that? Comm_join and 
</span><br>
<span class="quotelev1">&gt; intercomm_merge should work, I would have a look at that...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (separate answer to your second email is coming soon)
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Robert Latham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I've got a bit of an odd bug here.  I've been playing around with MPI
</span><br>
<span class="quotelev2">&gt;&gt;process management routines and I notied the following behavior with
</span><br>
<span class="quotelev2">&gt;&gt;openmpi-1.0.1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Two processes (a and b), linked with ompi, but started independently
</span><br>
<span class="quotelev2">&gt;&gt;(no mpiexec, just started the programs directly).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;- a and b: call MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt;- a: open a unix network socket on 'fd'
</span><br>
<span class="quotelev2">&gt;&gt;- b: connect to a's socket
</span><br>
<span class="quotelev2">&gt;&gt;- a and b: call MPI_Comm_join over 'fd'
</span><br>
<span class="quotelev2">&gt;&gt;- a and b: call MPI_Intercomm_merge, get intracommunicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;These steps all work fine. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Now the odd part: a and b call MPI_Comm_rank and MPI_Comm_size over
</span><br>
<span class="quotelev2">&gt;&gt;the intracommunicator.  Both (correctly) think Comm_size is two, but
</span><br>
<span class="quotelev2">&gt;&gt;both also think (incorrectly) that they are rank 1.  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;==rob
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Department of Computer Science          email:gabriel_at_[hidden]
University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0857.php">Robert Latham: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
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
