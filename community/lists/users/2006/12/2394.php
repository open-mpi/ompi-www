<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 21:50:44 2006" -->
<!-- isoreceived="20061221025044" -->
<!-- sent="Wed, 20 Dec 2006 21:50:38 -0500 (EST)" -->
<!-- isosent="20061221025038" -->
<!-- name="Andrew J Caird" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband - Any suggestions on &amp;quot;How can you proveto me that OpenMPI is using it?&amp;quot;" -->
<!-- id="Pine.LNX.4.63.0612202145010.14890_at_lancaster.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D65BB4F4-2278-4812-8FA2-1BB619003F35_at_cisco.com" -->
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
<strong>From:</strong> Andrew J Caird (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-20 21:50:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<li><strong>In reply to:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also usually watch the counters on the IB cards and 
<br>
Ethernet cards.  For programs that have a lot of communication 
<br>
between nodes it is quickly obvious which network you're using.
<br>
<p>The IB card monitoring is driver specific, but you should have 
<br>
some tools for this.  For Ethernet you can do something like:
<br>
<p>last=`/sbin/ifconfig eth1 | grep RX\ pack | awk '{print $2}' | 
<br>
awk -F: '{print $2}'`; for m in `seq 1 20` ; do sleep 5; 
<br>
this=`/sbin/ifconfig eth1 | grep RX\ pack | awk '{print $2}' | 
<br>
awk -F: '{print $2}'`; echo `expr $this - $last` ; last=$this ; 
<br>
done
<br>
<p>That should all be on one line.
<br>
<p>--andy
<br>
<p>On Wed, 20 Dec 2006, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 20, 2006, at 6:28 PM, Michael John Hanby wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howdy, I'm new to cluster administration, MPI and high speed networks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've compiled my OpenMPI using these settings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC='icc' CXX='icpc' FC='ifort' F77='ifort'
</span><br>
<span class="quotelev2">&gt;&gt; --with-mvapi=/usr/local/topspin
</span><br>
<span class="quotelev2">&gt;&gt; --with-mvapi-libdir=/usr/local/topspin/lib64 --enable-static
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/share/apps/openmpi/1.1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running a Gromacs -np 16 job that I submitting using Sun Grid
</span><br>
<span class="quotelev2">&gt;&gt; Engine
</span><br>
<span class="quotelev2">&gt;&gt; and OpenMPI that's going to run for several hours.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job was submitted with:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 -machinefile machines mdrun ......
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been asked by the owner of the cluster &quot;How can you prove to me
</span><br>
<span class="quotelev2">&gt;&gt; that this openmpi job is using the Infiniband network?&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first I thought a simple netstat -an on the compute nodes might
</span><br>
<span class="quotelev2">&gt;&gt; tell
</span><br>
<span class="quotelev2">&gt;&gt; me, however I don't see the Infiniband IP's in the list so I'm
</span><br>
<span class="quotelev2">&gt;&gt; thinking
</span><br>
<span class="quotelev2">&gt;&gt; maybe I need to be looking elsewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ompi_info reports:
</span><br>
<span class="quotelev2">&gt;&gt;   MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;   MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good -- this shows that OMPI was properly compiled with MVAPI support
</span><br>
<span class="quotelev1">&gt; (have you considered moving to the OpenFabrics/OFED IB stack,
</span><br>
<span class="quotelev1">&gt; perchance?  See this web page for more details: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/faq/?category=openfabrics, in particular, <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/faq/?category=openfabrics#vapi-support).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usual answer is that you should be able to tell via performance
</span><br>
<span class="quotelev1">&gt; that OMPI is using IB.  You can do some small runs with an MPI
</span><br>
<span class="quotelev1">&gt; network benchmark  application (e.g., NetPIPE) to verify this.  Runs
</span><br>
<span class="quotelev1">&gt; over the IB network will exhibit much better performance than over
</span><br>
<span class="quotelev1">&gt; the TCP network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, Open MPI checks out what networks are available at run
</span><br>
<span class="quotelev1">&gt; time and chooses the &quot;best&quot; one(s) to use for MPI traffic.  So if it
</span><br>
<span class="quotelev1">&gt; sees an IB network, it should automatically use it.  Additionally, if
</span><br>
<span class="quotelev1">&gt; OMPI has support for the IB network compiled in (e.g., the mvapi
</span><br>
<span class="quotelev1">&gt; components) and it *doesn't* find a valid IB network to use at run
</span><br>
<span class="quotelev1">&gt; time, the mvapi component will complain and tell you that you're
</span><br>
<span class="quotelev1">&gt; likely to get less performance than you expect and then fail over to
</span><br>
<span class="quotelev1">&gt; tcp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So -- no news is good news.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Admittedly, some users advocate that an option to mpirun showing
</span><br>
<span class="quotelev1">&gt; which networks are being used would be nicer, such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun --show-me-which-network-i'm-using ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we haven't gotten around to implementing that because the users
</span><br>
<span class="quotelev1">&gt; that we [informally] polled said &quot;if you tell me that I'm *not* using
</span><br>
<span class="quotelev1">&gt; the high speed network, that's good enough.&quot;  So that's what we
</span><br>
<span class="quotelev1">&gt; implemented first and never got a round tuit to implement the notices
</span><br>
<span class="quotelev1">&gt; viewed from the other way around (so to speak).  It's on the to-do
</span><br>
<span class="quotelev1">&gt; list; it's just low priority.  Patches would be gratefully
</span><br>
<span class="quotelev1">&gt; accepted.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All that being said, you can *force* using the IB network with the
</span><br>
<span class="quotelev1">&gt; following (also see <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>?
</span><br>
<span class="quotelev1">&gt; category=openfabrics#ib-btl):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun --mca btl mvapi,self,sm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This tells Open MPI to use the &quot;BTL&quot; (read: MPI point-to-point
</span><br>
<span class="quotelev1">&gt; network) using the mvapi, sm (shared memory), and self components
</span><br>
<span class="quotelev1">&gt; (&quot;self&quot; is what is used when an MPI application sends to itself).
</span><br>
<span class="quotelev1">&gt; Similarly, you can force using TCP with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun --mca btl tcp,self,sm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you specify the &quot;btl&quot; MCA parameter, OMPI will only use the
</span><br>
<span class="quotelev1">&gt; components that you tell it to use.  Or, you can tell OMPI which
</span><br>
<span class="quotelev1">&gt; components *not* to use, such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun --mca btl ^tcp ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which tells OMPI that it can use any btl component *except* tcp
</span><br>
<span class="quotelev1">&gt; (i.e., mvapi, sm, self, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2393.php">Jeff Squyres: "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<li><strong>In reply to:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
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
