<?
$subject_val = "Re: [OMPI users] OpenMPI providing rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  1 18:14:50 2010" -->
<!-- isoreceived="20100801221450" -->
<!-- sent="Sun, 1 Aug 2010 18:14:42 -0400" -->
<!-- isosent="20100801221442" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI providing rank?" -->
<!-- id="C3043E68-8E11-4802-8B72-4662240CB877_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C55036E.1040408_at_oracle.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-01 18:14:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13880.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13878.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="13878.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13907.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yves, 
<br>
<p>In Open MPI you can have a very fine control over how the deployment is bound to the cores. For more information, please refer to the faq concerning the rankfile description (in a rankfile you can specify very precisely what rank goes on what physical PU). For a more single shot option, you can use the --slot-list option with the -nperproc option, to specify the order in which your ranks are deployed on physical PU. 
<br>
<p>Dr. Aurelien Bouteiller
<br>
Innovative Computing Laboratory, The University of Tennessee
<br>
<p>Le 1 ao&#251;t 2010 &#224; 01:17, Eugene Loh a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le Wednesday 28 July 2010 15:05:28, vous avez &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am confused. I thought all you wanted to do is report out the binding of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the process - yes? Are you trying to set the affinity bindings yourself?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the latter, then your script doesn't do anything that mpirun wouldn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do, and doesn't do it as well. You would be far better off just adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --bind-to-core to the mpirun cmd line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun -h&quot; says that it is the default, so there is not even something to do?
</span><br>
<span class="quotelev2">&gt;&gt; I don't even have to add &quot;--mca mpi_paffinity_alone 1&quot; ?
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Wow.  I just tried &quot;mpirun -h&quot; and, yes, it claims that &quot;--bind-to-core&quot; is the default.  I believe this is wrong... or at least &quot;misleading.&quot;  :^)  You should specify --bind-to-core explicitly.  It is the successor to paffinity.  Do add --report-bindings to check what you're getting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 28, 2010, at 6:37 AM, Yves Caniou wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le Wednesday 28 July 2010 11:34:13 Ralph Castain, vous avez &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 27, 2010, at 11:18 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le Wednesday 28 July 2010 06:03:21 Nysal Jan, vous avez &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_COMM_WORLD_RANK can be used to get the MPI rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are processes affected to nodes sequentially, so that I can get the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; NODE number from $OMPI_COMM_WORLD_RANK modulo the number of proc per
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; By default, yes. However, you can select alternative mapping methods.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It reports to stderr, so the $OMPI_COMM_WORLD_RANK modulo the number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc per nodes seems more appropriate for what I need, right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So is the following valid to put memory affinity?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; script.sh:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MYRANK=$OMPI_COMM_WORLD_RANK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MYVAL=$(expr $MYRANK / 4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  NODE=$(expr $MYVAL % 4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  numactl --cpunodebind=$NODE --membind=$NODE $@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec ./script.sh -n 128 myappli myparam
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Another option is to use OMPI_COMM_WORLD_LOCAL_RANK.  This environment variable directly gives you the value you're looking for, regardless of how process ranks are mapped to the nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which is better: using this option, or the cmd line with numactl (if it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works)? What is the difference?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know what's &quot;better,&quot; but here are some potential issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) Different MPI implementations use different mechanisms for specifying binding.  So, if you want your solution to be &quot;portable&quot;... well, if you want that, you're out of luck.  But, perhaps some mechanisms (command-line arguments, run-time scripts, etc.) might seem easier for you to adapt than others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) Some mechanisms bind processes at process launch time and some at MPI_Init time.  The former might be better.  Otherwise, a process might place some NUMA memory in a location before MPI_Init and then be moved away from that memory when MPI_Init is encountered.  I believe both the numactl and OMPI --bind-to-core mechanisms have this characteristic.  (OMPI's older paffinity might not, but I don't remember for sure.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mostly, if you're going to use just OMPI, the --bind-to-core command-line argument might be the simplest.
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
<li><strong>Next message:</strong> <a href="13880.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13878.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="13878.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13907.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
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
