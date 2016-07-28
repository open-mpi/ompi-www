<?
$subject_val = "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 09:42:27 2010" -->
<!-- isoreceived="20100720134227" -->
<!-- sent="Tue, 20 Jul 2010 09:43:02 -0400" -->
<!-- isosent="20100720134302" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node" -->
<!-- id="9743ED41-BFA4-47C9-ABDC-329C89AB1240_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090418034504.017b6f2b_at_vivalunalitshi.luna.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 09:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13715.php">Alexandru Blidaru: "[OMPI users] Partitioning problem set data"</a>
<li><strong>Previous message:</strong> <a href="13713.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8969.php">Micha Feigin: "[OMPI users] mpiexec seems to be resolving names on server instead of each node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Micha --
<br>
<p>(re-digging up this really, really old issue because Manuel just pointed me at the Debian bug for the same issue: <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=524553">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=524553</a>)
<br>
<p>Can you confirm that this is still an issue on the latest Open MPI?
<br>
<p>If so, it should probably piggyback onto this Open MPI tickets:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2045">https://svn.open-mpi.org/trac/ompi/ticket/2045</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2383">https://svn.open-mpi.org/trac/ompi/ticket/2383</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1983">https://svn.open-mpi.org/trac/ompi/ticket/1983</a>
<br>
<p><p><p>On Apr 17, 2009, at 8:45 PM, Micha Feigin wrote:
<br>
<p><span class="quotelev1">&gt; I am having problems running openmpi 1.3 on my claster and I was wondering if
</span><br>
<span class="quotelev1">&gt; anyone else is seeing this problem and/or can give hints on how to solve it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I understand the error, mpiexec resolves host names on the master node
</span><br>
<span class="quotelev1">&gt; it is run on instead of an each host seperately. This works in an environment where
</span><br>
<span class="quotelev1">&gt; each hostname resolves to the same address on each host (cluster connected via a
</span><br>
<span class="quotelev1">&gt; switch) but fails where it resolves to different addresses (ring/star setups for
</span><br>
<span class="quotelev1">&gt; example where each computer is connected directly to all/some of the others)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not 100% sure that this is the problem as I'm seeing success on a single
</span><br>
<span class="quotelev1">&gt; case where this should probably fail but it is my best bet from the error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; version 1.2.8 worked fine for the same simple program (a simple hellow world that
</span><br>
<span class="quotelev1">&gt; just comunicated the computer name for each process)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An example output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec is run on the master node hubert and is set to run the processes on two nodes
</span><br>
<span class="quotelev1">&gt; fry and leela. As is understood from the error messages leela tries to connect to
</span><br>
<span class="quotelev1">&gt; fry on address 192.168.1.2 which is it's address on hubert but not leela (where it
</span><br>
<span class="quotelev1">&gt; is 192.168.4.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a four node claster all interconnected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     192.168.1.1      192.168.1.2
</span><br>
<span class="quotelev1">&gt; hubert ------------------------ fry
</span><br>
<span class="quotelev1">&gt;   |    \                    /    | 192.168.4.1
</span><br>
<span class="quotelev1">&gt;   |       \              /       |
</span><br>
<span class="quotelev1">&gt;   |          \        /          |
</span><br>
<span class="quotelev1">&gt;   |             \  /             |
</span><br>
<span class="quotelev1">&gt;   |             /  \             |
</span><br>
<span class="quotelev1">&gt;   |          /        \          |
</span><br>
<span class="quotelev1">&gt;   |       /              \       |
</span><br>
<span class="quotelev1">&gt;   |    /                     \   | 192.168.4.2
</span><br>
<span class="quotelev1">&gt; hermes ----------------------- leelas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; mpiexec -np 8 -H fry,leela test_mpi
</span><br>
<span class="quotelev1">&gt; Hello MPI from the server process of 8 on fry!
</span><br>
<span class="quotelev1">&gt; [[36620,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[36620,1],3][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[36620,1],7][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [leela:4436] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; [leela:4436] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [leela:4436] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [leela:4436] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [[36620,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 1 with PID 4433 on
</span><br>
<span class="quotelev1">&gt; node leela exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hubert:11312] 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [hubert:11312] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to be a directional issue as running the program -H fry,leela failes
</span><br>
<span class="quotelev1">&gt; where -H leela,fry works, same behaviour for all senarious except those that include
</span><br>
<span class="quotelev1">&gt; the master node (hubert) where it resolves the external ip (from an external dns) instead
</span><br>
<span class="quotelev1">&gt; of the internal ip (from the hosts file). thus one direction fails (no external connection
</span><br>
<span class="quotelev1">&gt; at the moment for all but the master) and the other causes a lockup
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope that the explenation is not too convoluted
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13715.php">Alexandru Blidaru: "[OMPI users] Partitioning problem set data"</a>
<li><strong>Previous message:</strong> <a href="13713.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8969.php">Micha Feigin: "[OMPI users] mpiexec seems to be resolving names on server instead of each node"</a>
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
