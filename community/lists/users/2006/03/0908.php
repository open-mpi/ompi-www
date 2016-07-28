<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 03:52:21 2006" -->
<!-- isoreceived="20060327085221" -->
<!-- sent="Mon, 27 Mar 2006 10:45:56 +0200" -->
<!-- isosent="20060327084556" -->
<!-- name="Jean Latour" -->
<!-- email="latour_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to establish communication between two separate COM WORLD" -->
<!-- id="4427A644.60104_at_fujitsu.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="OF437814BC.BC004F2E-ON8525713B.006B6EAC-8525713B.007F4B69_at_mck.us.ray.com" -->
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
<strong>From:</strong> Jean Latour (<em>latour_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 03:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0909.php">Tony Power: "[OMPI users] Best MPI implementation"</a>
<li><strong>Previous message:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>In reply to:</strong> <a href="0900.php">Ali Eghlima: "[OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Reply:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>It seems to me there is only one way to create a communication between
<br>
two MPI_COMM_WORLD :  use MPI_Open_Port with a specific
<br>
IP + port address, and then MPI_comm_connect / MPI_comm_accept.
<br>
<p>In order to ease the port number communication, the use of MPI_publish-name
<br>
/ MPI_lookup_name is also possible with the constraint that the &quot;publish&quot;
<br>
must be done before the &quot;lookup&quot;, and this involves some synchronization
<br>
between the processes anyway.
<br>
<p>Simple examples can be found in the handbook on MPI : &quot;Using MPI-2&quot;
<br>
by William Gropp et al.
<br>
<p>Best Regards,
<br>
Jean
<br>
<p>Ali Eghlima wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have read MPI-2 documents as well as FAQ. I am confused as the best 
</span><br>
<span class="quotelev1">&gt; way to establish communication
</span><br>
<span class="quotelev1">&gt; between two  MPI_COMM_WORLD which has been created by two mpiexec 
</span><br>
<span class="quotelev1">&gt; calls on the same node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -conf  config1
</span><br>
<span class="quotelev1">&gt;      This start 20 processes on 7 nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -conf  config2
</span><br>
<span class="quotelev1">&gt;       This start 18 processes on 5 nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do appreciate any comments or pointer to a document or example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ali,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0909.php">Tony Power: "[OMPI users] Best MPI implementation"</a>
<li><strong>Previous message:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>In reply to:</strong> <a href="0900.php">Ali Eghlima: "[OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Reply:</strong> <a href="0911.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
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
