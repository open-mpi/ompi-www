<?
$subject_val = "Re: [OMPI users] mpiexec seems to be resolving names on server	insteadof each node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 18:14:35 2009" -->
<!-- isoreceived="20090506221435" -->
<!-- sent="Wed, 06 May 2009 18:14:19 -0400" -->
<!-- isosent="20090506221419" -->
<!-- name="Rolf vandeVaarrt" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec seems to be resolving names on server	insteadof each node" -->
<!-- id="4A020BBB.4080206_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="90663DBB-25C6-4DA7-B143-910F1445FCFB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec seems to be resolving names on server	insteadof each node<br>
<strong>From:</strong> Rolf vandeVaarrt (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 18:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9247.php">neeraj_at_[hidden]: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9245.php">Jeff Squyres: "Re: [OMPI users] error no=110 (Connection timeout)"</a>
<li><strong>In reply to:</strong> <a href="9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13714.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is worth mentioning that there is a FAQ that describes the algorithm.
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a>
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay in replying; I kept starting to look into this and 
</span><br>
<span class="quotelev1">&gt; then getting distracted by shiny objects.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI v1.3 actually has a fairly sophisticated TCP address/network 
</span><br>
<span class="quotelev1">&gt; matching algorithm.  The hostname resolution shouldn't really be the 
</span><br>
<span class="quotelev1">&gt; issue; OMPI directly queries the kernel IP interfaces on each node 
</span><br>
<span class="quotelev1">&gt; where it runs and publishes that to all other MPI processes.  Then the 
</span><br>
<span class="quotelev1">&gt; TCP network matching algorithm is used to select the &quot;best&quot; pairs to 
</span><br>
<span class="quotelev1">&gt; connect to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per your diagram:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     192.168.1.1      192.168.1.2
</span><br>
<span class="quotelev2">&gt;&gt; hubert ------------------------ fry
</span><br>
<span class="quotelev2">&gt;&gt;   |    \                    /    | 192.168.4.1
</span><br>
<span class="quotelev2">&gt;&gt;   |       \              /       |
</span><br>
<span class="quotelev2">&gt;&gt;   |          \        /          |
</span><br>
<span class="quotelev2">&gt;&gt;   |             \  /             |
</span><br>
<span class="quotelev2">&gt;&gt;   |             /  \             |
</span><br>
<span class="quotelev2">&gt;&gt;   |          /        \          |
</span><br>
<span class="quotelev2">&gt;&gt;   |       /              \       |
</span><br>
<span class="quotelev2">&gt;&gt;   |    /                     \   | 192.168.4.2
</span><br>
<span class="quotelev2">&gt;&gt; hermes ----------------------- leelas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume that the netmasks are all class C, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I might ask you to run some diagnostic OMPI builds so that we 
</span><br>
<span class="quotelev1">&gt; can see what the matching algorithm is doing on your machine...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2009, at 8:45 PM, Micha Feigin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having problems running openmpi 1.3 on my claster and I was 
</span><br>
<span class="quotelev2">&gt;&gt; wondering if
</span><br>
<span class="quotelev2">&gt;&gt; anyone else is seeing this problem and/or can give hints on how to 
</span><br>
<span class="quotelev2">&gt;&gt; solve it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I understand the error, mpiexec resolves host names on the 
</span><br>
<span class="quotelev2">&gt;&gt; master node
</span><br>
<span class="quotelev2">&gt;&gt; it is run on instead of an each host seperately. This works in an 
</span><br>
<span class="quotelev2">&gt;&gt; environment where
</span><br>
<span class="quotelev2">&gt;&gt; each hostname resolves to the same address on each host (cluster 
</span><br>
<span class="quotelev2">&gt;&gt; connected via a
</span><br>
<span class="quotelev2">&gt;&gt; switch) but fails where it resolves to different addresses (ring/star 
</span><br>
<span class="quotelev2">&gt;&gt; setups for
</span><br>
<span class="quotelev2">&gt;&gt; example where each computer is connected directly to all/some of the 
</span><br>
<span class="quotelev2">&gt;&gt; others)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not 100% sure that this is the problem as I'm seeing success on a 
</span><br>
<span class="quotelev2">&gt;&gt; single
</span><br>
<span class="quotelev2">&gt;&gt; case where this should probably fail but it is my best bet from the 
</span><br>
<span class="quotelev2">&gt;&gt; error message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; version 1.2.8 worked fine for the same simple program (a simple 
</span><br>
<span class="quotelev2">&gt;&gt; hellow world that
</span><br>
<span class="quotelev2">&gt;&gt; just comunicated the computer name for each process)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An example output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec is run on the master node hubert and is set to run the 
</span><br>
<span class="quotelev2">&gt;&gt; processes on two nodes
</span><br>
<span class="quotelev2">&gt;&gt; fry and leela. As is understood from the error messages leela tries 
</span><br>
<span class="quotelev2">&gt;&gt; to connect to
</span><br>
<span class="quotelev2">&gt;&gt; fry on address 192.168.1.2 which is it's address on hubert but not 
</span><br>
<span class="quotelev2">&gt;&gt; leela (where it
</span><br>
<span class="quotelev2">&gt;&gt; is 192.168.4.1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a four node claster all interconnected
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     192.168.1.1      192.168.1.2
</span><br>
<span class="quotelev2">&gt;&gt; hubert ------------------------ fry
</span><br>
<span class="quotelev2">&gt;&gt;   |    \                    /    | 192.168.4.1
</span><br>
<span class="quotelev2">&gt;&gt;   |       \              /       |
</span><br>
<span class="quotelev2">&gt;&gt;   |          \        /          |
</span><br>
<span class="quotelev2">&gt;&gt;   |             \  /             |
</span><br>
<span class="quotelev2">&gt;&gt;   |             /  \             |
</span><br>
<span class="quotelev2">&gt;&gt;   |          /        \          |
</span><br>
<span class="quotelev2">&gt;&gt;   |       /              \       |
</span><br>
<span class="quotelev2">&gt;&gt;   |    /                     \   | 192.168.4.2
</span><br>
<span class="quotelev2">&gt;&gt; hermes ----------------------- leelas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 8 -H fry,leela test_mpi
</span><br>
<span class="quotelev2">&gt;&gt; Hello MPI from the server process of 8 on fry!
</span><br>
<span class="quotelev2">&gt;&gt; [[36620,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] 
</span><br>
<span class="quotelev2">&gt;&gt; from leela to: fry Unable to connect to the peer 192.168.1.2 on port 
</span><br>
<span class="quotelev2">&gt;&gt; 154: Network is unreachable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[36620,1],3][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] 
</span><br>
<span class="quotelev2">&gt;&gt; from leela to: fry Unable to connect to the peer 192.168.1.2 on port 
</span><br>
<span class="quotelev2">&gt;&gt; 154: Network is unreachable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[36620,1],7][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] 
</span><br>
<span class="quotelev2">&gt;&gt; from leela to: fry Unable to connect to the peer 192.168.1.2 on port 
</span><br>
<span class="quotelev2">&gt;&gt; 154: Network is unreachable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [leela:4436] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; [leela:4436] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [leela:4436] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; [leela:4436] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [[36620,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] 
</span><br>
<span class="quotelev2">&gt;&gt; from leela to: fry Unable to connect to the peer 192.168.1.2 on port 
</span><br>
<span class="quotelev2">&gt;&gt; 154: Network is unreachable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec has exited due to process rank 1 with PID 4433 on
</span><br>
<span class="quotelev2">&gt;&gt; node leela exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hubert:11312] 3 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt;&gt; [hubert:11312] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev2">&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to be a directional issue as running the program -H 
</span><br>
<span class="quotelev2">&gt;&gt; fry,leela failes
</span><br>
<span class="quotelev2">&gt;&gt; where -H leela,fry works, same behaviour for all senarious except 
</span><br>
<span class="quotelev2">&gt;&gt; those that include
</span><br>
<span class="quotelev2">&gt;&gt; the master node (hubert) where it resolves the external ip (from an 
</span><br>
<span class="quotelev2">&gt;&gt; external dns) instead
</span><br>
<span class="quotelev2">&gt;&gt; of the internal ip (from the hosts file). thus one direction fails 
</span><br>
<span class="quotelev2">&gt;&gt; (no external connection
</span><br>
<span class="quotelev2">&gt;&gt; at the moment for all but the master) and the other causes a lockup
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope that the explenation is not too convoluted
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9247.php">neeraj_at_[hidden]: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>Previous message:</strong> <a href="9245.php">Jeff Squyres: "Re: [OMPI users] error no=110 (Connection timeout)"</a>
<li><strong>In reply to:</strong> <a href="9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13714.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
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
