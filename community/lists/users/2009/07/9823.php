<?
$subject_val = "Re: [OMPI users] Network Problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  4 08:56:31 2009" -->
<!-- isoreceived="20090704125631" -->
<!-- sent="Sat, 4 Jul 2009 08:56:26 -0400" -->
<!-- isosent="20090704125626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network Problem?" -->
<!-- id="50997041-3C13-420B-AB10-3695988A187C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1246387793.25367.9.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network Problem?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-04 08:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Previous message:</strong> <a href="9822.php">Jeff Squyres: "Re: [OMPI users] MPI and C++"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9783.php">David Ronis: "[OMPI users] Network Problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI does not currently support NAT; sorry.  :-(
<br>
<p>On Jun 30, 2009, at 2:49 PM, David Ronis wrote:
<br>
<p><span class="quotelev1">&gt; (This may be a duplicate.  An earlier post seems to have been lost).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openmpi (1.3.2) to run on 3 dual processor machines (running
</span><br>
<span class="quotelev1">&gt; linux, slackware-12.1, gcc-4.4.0).  Two are directly on my LAN while
</span><br>
<span class="quotelev1">&gt; the 3rd is connected to my LAN via VPN and NAT (I can communicate in
</span><br>
<span class="quotelev1">&gt; either direction from any of the machines to the remote machines using
</span><br>
<span class="quotelev1">&gt; its NAT address).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program I'm trying to run is very simple in terms of MPI.
</span><br>
<span class="quotelev1">&gt; Basically it is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         [snip];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;myrank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [snip];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if(myrank==0)
</span><br>
<span class="quotelev1">&gt;     i=MPI_Reduce(MPI_IN_PLACE, C, N, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt;                  MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   else
</span><br>
<span class="quotelev1">&gt;     i=MPI_Reduce(C, MPI_IN_PLACE, N, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt;                  MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if(i!=MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       fprintf(stderr,&quot;MPI_Reduce (C) fails on processor %d\n&quot;,  
</span><br>
<span class="quotelev1">&gt; myrank);
</span><br>
<span class="quotelev1">&gt;       MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;       exit(1);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [snip];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run by invoking:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mpirun -v -np ${NPROC} -hostfile ${HOSTFILE} --stdin none $*
</span><br>
<span class="quotelev2">&gt; &gt; /dev/null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run on the 4 nodes that are physically on the LAN it works as
</span><br>
<span class="quotelev1">&gt; expected.  When I add the nodes on the remote machine things don't
</span><br>
<span class="quotelev1">&gt; work properly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  If I start with NPROC=6 on one of the LAN machines all 6 nodes
</span><br>
<span class="quotelev1">&gt; start (as shown by running ps), and all get to the MPI_HARVEST
</span><br>
<span class="quotelev1">&gt; calls. At that point things hang (I see no network traffic, which
</span><br>
<span class="quotelev1">&gt; given the size of the array I'm trying to reduce is strange).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.  If I start on the remote with NPROC=6, the only the mpirun call
</span><br>
<span class="quotelev1">&gt; shows up under ps on the remote, while nothing shows up on the other
</span><br>
<span class="quotelev1">&gt; nodes.  Killing the process gives messages like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          hostname - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3.  If I start on the remote with NPROC=2, the 2 processes start on
</span><br>
<span class="quotelev1">&gt; the remote and finish properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My suspicion is that there's some bad interaction with NAT and
</span><br>
<span class="quotelev1">&gt; authentication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Previous message:</strong> <a href="9822.php">Jeff Squyres: "Re: [OMPI users] MPI and C++"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9783.php">David Ronis: "[OMPI users] Network Problem?"</a>
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
