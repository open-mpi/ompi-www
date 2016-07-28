<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 14:20:20 2007" -->
<!-- isoreceived="20070213192020" -->
<!-- sent="Tue, 13 Feb 2007 12:20:14 -0700" -->
<!-- isosent="20070213192014" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and PBS Pro 8" -->
<!-- id="C1F75D7E.7A4F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8DCE4002-AE83-432F-AA12-BA9BB6EF0CA9_at_umich.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 14:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>In reply to:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/13/07 11:30 AM, &quot;Brock Palen&quot; &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 13, 2007, at 12:55 PM, Troy Telford wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, the good news:
</span><br>
<span class="quotelev2">&gt;&gt; I've recently tried PBS Pro 8 with Open MPI 1.1.4.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At least with PBS Pro version 8, you can (finally) do a dynamic/shared
</span><br>
<span class="quotelev2">&gt;&gt; object for the TM module, rather than having to compile everything
</span><br>
<span class="quotelev2">&gt;&gt; statically.  (So the FAQ needs a minor update.)  The jobs seem to
</span><br>
<span class="quotelev2">&gt;&gt; run and
</span><br>
<span class="quotelev2">&gt;&gt; use TM properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The bad news:
</span><br>
<span class="quotelev2">&gt;&gt; My memory is a bit fuzzy on how to use OMPI with PBS and cousins.
</span><br>
<span class="quotelev2">&gt;&gt; Sad, I
</span><br>
<span class="quotelev2">&gt;&gt; know, but that doesn't make it any less true.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sure your OMPI build used --with-tm=/path/to/pbs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also use ompi_info and grep for tm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the moment, I've read the FAQ and see that you need to use the
</span><br>
<span class="quotelev2">&gt;&gt; '-np
</span><br>
<span class="quotelev2">&gt;&gt; &lt;foo&gt;' option to specify the number of processes.  For some reason, I
</span><br>
<span class="quotelev2">&gt;&gt; recall that OMPI used to be able to get the number of processes to run
</span><br>
<span class="quotelev2">&gt;&gt;  from PBS; am I just 'remembering' something that never existed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To my memory this has never been the case.  there is $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; which you can wrap around:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPUS=`cat $PBS_NODEFILE | wc -l`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np $CPUS myexe
</span><br>
<p>Actually, that isn't the complete story. Open MPI will automatically run in
<br>
several ways:
<br>
<p>1. one proc in each available slot on every node in your allocation: just
<br>
don't include -np on your command line.  You can rank them by slot (--byslot
<br>
or leave out) or by node (--bynode).
<br>
<p>2. one proc on each node in your allocation: use --pernode on your command
<br>
line. You can limit the number of nodes used by combining --pernode with -np
<br>
&lt;foo&gt; - we will launch &lt;foo&gt; procs, one per node
<br>
<p>3. a specified number of procs on every node: use --npernode &lt;n&gt;. Again, you
<br>
can limit the number of procs launched by combining it with -np and can rank
<br>
by slot or node
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Troy Telford
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>In reply to:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
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
