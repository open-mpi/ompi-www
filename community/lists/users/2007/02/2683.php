<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 13:31:36 2007" -->
<!-- isoreceived="20070213183136" -->
<!-- sent="Tue, 13 Feb 2007 13:30:28 -0500" -->
<!-- isosent="20070213183028" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and PBS Pro 8" -->
<!-- id="8DCE4002-AE83-432F-AA12-BA9BB6EF0CA9_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.tno73aa9zidtg1_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2007-02-13 13:30:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>In reply to:</strong> <a href="2679.php">Troy Telford: "[OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2007, at 12:55 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; First, the good news:
</span><br>
<span class="quotelev1">&gt; I've recently tried PBS Pro 8 with Open MPI 1.1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least with PBS Pro version 8, you can (finally) do a dynamic/shared
</span><br>
<span class="quotelev1">&gt; object for the TM module, rather than having to compile everything
</span><br>
<span class="quotelev1">&gt; statically.  (So the FAQ needs a minor update.)  The jobs seem to  
</span><br>
<span class="quotelev1">&gt; run and
</span><br>
<span class="quotelev1">&gt; use TM properly.
</span><br>
<p>Good,
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bad news:
</span><br>
<span class="quotelev1">&gt; My memory is a bit fuzzy on how to use OMPI with PBS and cousins.   
</span><br>
<span class="quotelev1">&gt; Sad, I
</span><br>
<span class="quotelev1">&gt; know, but that doesn't make it any less true.
</span><br>
<p>Make sure your OMPI build used --with-tm=/path/to/pbs
<br>
<p>You can also use ompi_info and grep for tm.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the moment, I've read the FAQ and see that you need to use the  
</span><br>
<span class="quotelev1">&gt; '-np
</span><br>
<span class="quotelev1">&gt; &lt;foo&gt;' option to specify the number of processes.  For some reason, I
</span><br>
<span class="quotelev1">&gt; recall that OMPI used to be able to get the number of processes to run
</span><br>
<span class="quotelev1">&gt;  from PBS; am I just 'remembering' something that never existed?
</span><br>
<p>To my memory this has never been the case.  there is $PBS_NODEFILE  
<br>
which you can wrap around:
<br>
<p>CPUS=`cat $PBS_NODEFILE | wc -l`
<br>
<p>mpirun -np $CPUS myexe
<br>
<p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Troy Telford
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>In reply to:</strong> <a href="2679.php">Troy Telford: "[OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
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
