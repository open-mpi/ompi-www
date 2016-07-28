<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 14:27:11 2007" -->
<!-- isoreceived="20070213192711" -->
<!-- sent="Tue, 13 Feb 2007 12:27:07 -0700" -->
<!-- isosent="20070213192707" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and PBS Pro 8" -->
<!-- id="C1F75F1B.7A52%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1F75D7E.7A4F%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-02-13 14:27:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2686.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for papers"</a>
<li><strong>Previous message:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>In reply to:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, I should have made something clear - I believe those command line
<br>
options aren't available in the 1.1 series. You'll have to upgrade to 1.2
<br>
(available in beta at the moment).
<br>
<p><p>On 2/13/07 12:20 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/13/07 11:30 AM, &quot;Brock Palen&quot; &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 13, 2007, at 12:55 PM, Troy Telford wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, the good news:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've recently tried PBS Pro 8 with Open MPI 1.1.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least with PBS Pro version 8, you can (finally) do a dynamic/shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object for the TM module, rather than having to compile everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; statically.  (So the FAQ needs a minor update.)  The jobs seem to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use TM properly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bad news:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My memory is a bit fuzzy on how to use OMPI with PBS and cousins.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sad, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know, but that doesn't make it any less true.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make sure your OMPI build used --with-tm=/path/to/pbs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can also use ompi_info and grep for tm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the moment, I've read the FAQ and see that you need to use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '-np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;foo&gt;' option to specify the number of processes.  For some reason, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recall that OMPI used to be able to get the number of processes to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  from PBS; am I just 'remembering' something that never existed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To my memory this has never been the case.  there is $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; which you can wrap around:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; CPUS=`cat $PBS_NODEFILE | wc -l`
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np $CPUS myexe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, that isn't the complete story. Open MPI will automatically run in
</span><br>
<span class="quotelev1">&gt; several ways:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. one proc in each available slot on every node in your allocation: just
</span><br>
<span class="quotelev1">&gt; don't include -np on your command line.  You can rank them by slot (--byslot
</span><br>
<span class="quotelev1">&gt; or leave out) or by node (--bynode).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. one proc on each node in your allocation: use --pernode on your command
</span><br>
<span class="quotelev1">&gt; line. You can limit the number of nodes used by combining --pernode with -np
</span><br>
<span class="quotelev1">&gt; &lt;foo&gt; - we will launch &lt;foo&gt; procs, one per node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. a specified number of procs on every node: use --npernode &lt;n&gt;. Again, you
</span><br>
<span class="quotelev1">&gt; can limit the number of procs launched by combining it with -np and can rank
</span><br>
<span class="quotelev1">&gt; by slot or node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Troy Telford
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2686.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for papers"</a>
<li><strong>Previous message:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>In reply to:</strong> <a href="2684.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Reply:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
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
