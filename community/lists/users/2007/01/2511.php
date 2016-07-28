<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 10:59:48 2007" -->
<!-- isoreceived="20070119155948" -->
<!-- sent="Thu, 18 Jan 2007 22:52:37 -0500" -->
<!-- isosent="20070119035237" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]" -->
<!-- id="DEC7405C-0556-4F89-83DA-12F1AD862C9F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 22:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2512.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2510.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Maybe in reply to:</strong> <a href="2499.php">Arif Ali: "[OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2512.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2512.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Beware: this is a lengthy, detailed message.
<br>
<p>On Jan 18, 2007, at 3:53 PM, Arif Ali wrote:
<br>
<p><span class="quotelev1">&gt; 1. We have
</span><br>
<span class="quotelev1">&gt; HW
</span><br>
<span class="quotelev1">&gt; * 2xBladecenter H
</span><br>
<span class="quotelev1">&gt; * 2xCisco Infiniband Switch Modules
</span><br>
<span class="quotelev1">&gt; * 1xCisco Infiniband Switch
</span><br>
<span class="quotelev1">&gt; * 16x PPC64 JS21 blades each are 4 cores, with Cisco HCA
</span><br>
<p>Can you provide the details of your Cisco HCA?
<br>
<p><span class="quotelev1">&gt; SW
</span><br>
<span class="quotelev1">&gt; * SLES 10
</span><br>
<span class="quotelev1">&gt; * OFED 1.1 w. OpenMPI 1.1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running the Intel MPI Benchmark (IMB) on the cluster as a part  
</span><br>
<span class="quotelev1">&gt; of validation process for the customer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried the OpenMPI that comes with OFED 1.1, which gave  
</span><br>
<span class="quotelev1">&gt; spurious &quot;Not Enough Memory&quot; error messages, after looking through  
</span><br>
<span class="quotelev1">&gt; FAQs (with the help of Cisco) I was able to find the problems and  
</span><br>
<span class="quotelev1">&gt; fixes. I used the FAQs to add unlimited soft and hard limits for  
</span><br>
<span class="quotelev1">&gt; memlock, turned RDMA off by using &quot;--mca btl_openib_flags 1&quot;. This  
</span><br>
<span class="quotelev1">&gt; still did not work, and still got the Memory problems.
</span><br>
<p>As a clarification: I suggested setting the btl_openib_flags to 1 as  
<br>
one means of [potentially] reducing the amount of registered memory  
<br>
to verify that the amount of registered memory available in the  
<br>
system is the problem (especially because it was dying with large  
<br>
messages in the all-to-all pattern).  With that setting, we got  
<br>
through the alltoall test (which we previously couldn't).  So it  
<br>
seemed to indicate that on that platform, there isn't much registered  
<br>
memory available (even though there's 8GB available on each blade).
<br>
<p>Are you saying that a full run of the IMB still failed with the same  
<br>
&quot;cannot register any more memory&quot; kind of error?
<br>
<p>I checked with Brad Benton -- an OMPI developer from IBM -- he  
<br>
confirms that on the JS21s, depending on the version of your  
<br>
firmware, you will be limited to 256M or 512M of registerable memory  
<br>
(256M = older firmware, 512M = newer firmware).  This could very  
<br>
definitely be a factor in what is happening here.
<br>
<p>Can you let us know what version of the firmware you have?
<br>
<p><span class="quotelev1">&gt; I tried the nightly snapshot of OpenMPI-1.2b4r13137, which failed  
</span><br>
<span class="quotelev1">&gt; miserably.
</span><br>
<p>Can you describe what happened there?  Is it failing in a different way?
<br>
<p><span class="quotelev1">&gt; I then tried the released version of the OpenMPI-1.2b3, which got  
</span><br>
<span class="quotelev1">&gt; me further than before. Now the benchmark goes through all the  
</span><br>
<span class="quotelev1">&gt; tests until Allgatherv finishes, and it seems that it is waiting to  
</span><br>
<span class="quotelev1">&gt; start AlltoAll, I have waited about 12 hours to see if this  
</span><br>
<span class="quotelev1">&gt; continues. I have since then managed to run AlltoAll, and the rest  
</span><br>
<span class="quotelev1">&gt; of the benchmark separately.
</span><br>
<p>If it does not continue within a few minutes, it's not going to go  
<br>
anywhere.  IMB does do &quot;warmup&quot; sends that may take a few minutes,  
<br>
but if you've gone 5-10 minutes with no activity, it's likely to be  
<br>
hung.
<br>
<p>FWIW: I can run IMB on 64 processes (16 hosts, 4ppn -- but not a  
<br>
blade center) with no problem.  I.e., it doesn't hang/crash.
<br>
<p>Hanging instead of crashing may still be a side-effect of running out  
<br>
of DMA-able memory -- I don't know enough about the IBM hardware to  
<br>
say.  I doubt that we have explored the error scenarios in OMPI too  
<br>
much; it's pretty safe to say that if limits are not used and the  
<br>
system runs out of DMA-able memory, Bad / Undefined things may happen  
<br>
(a &quot;good&quot; scenario would be that the process/MPI job aborts, a &quot;bad&quot;  
<br>
scenario would be some kind of deadlock situation).
<br>
<p><span class="quotelev1">&gt; I have tried a few tunable paramaters, that was suggested by Cisco,  
</span><br>
<span class="quotelev1">&gt; which improved the results, but still hung. The parameters that I  
</span><br>
<span class="quotelev1">&gt; have used to try and diagnose are below. I used the debug/verbose  
</span><br>
<span class="quotelev1">&gt; variables to see if I could see if I could get error messages on  
</span><br>
<span class="quotelev1">&gt; the running of the benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #orte_debug=1
</span><br>
<span class="quotelev1">&gt; #btl_openib_verbose=1
</span><br>
<span class="quotelev1">&gt; #mca_verbose=1
</span><br>
<span class="quotelev1">&gt; #btl_base_debug=1
</span><br>
<span class="quotelev1">&gt; btl_openib_flags=1
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned=1
</span><br>
<span class="quotelev1">&gt; mpool_base_use_mem_hooks=1
</span><br>
<p>Note that in that list, only the btl_openib_flags parameter will  
<br>
[potentially] decrease the amount of registered memory used.  Also,  
<br>
note that mpi_leave_pinned is only useful when utilizing RDMA  
<br>
operations; so it's effectively a no-op when btl_openib_flags is set  
<br>
to 1.
<br>
<p>--&gt; For those jumping into the conversation late, the value of  
<br>
btl_openib_flags is a bit mask with the following bits: SEND=1,  
<br>
PUT=2, GET=4.
<br>
<p>With all that was said above, let me provide a few options for  
<br>
decreasing the amount of registered memory that OMPI uses and also  
<br>
describe a way to put a strict limit on how much registered memory  
<br>
OMPI will use.
<br>
<p>I'll create some FAQ entries about these exact topics in the Near  
<br>
Future that will go into more detail, but it might take a few days  
<br>
because FAQ wording is tricky; the algorithms that OMPI uses and the  
<br>
tunable parameters that it exports are quite complicated -- I'll want  
<br>
to sure it's precisely correct for those who land there via Google.   
<br>
Here's the quick version (Galen/Gleb/Pasha: please correct me if I  
<br>
get these details incorrect -- thanks!):
<br>
<p>- All internal-to-OMPI registered buffers -- whether they are used  
<br>
for sending or receiving -- are cached on freelists.  So if OMPI  
<br>
registers an internal buffer, sends from it, and then is done with  
<br>
it, the buffer is not de-registered -- it is put back on the free  
<br>
list for use in the future.
<br>
<p>- OMPI makes IB connections to peer MPI processes lazily.  That is,  
<br>
the first time you MPI_SEND or MPI_RECV to a peer, OMPI makes the  
<br>
connection.
<br>
<p>- OMPI creates an initial set of pre-posted buffers when each IB port  
<br>
is initialized.  The amount registered for each IB endpoint (i.e.,  
<br>
ports and LIDs) in use on the host by the MPI process upon MPI_INIT is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 * btl_openib_free_list_inc *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(btl_openib_max_send_size + btl_openib_eager_limit)
<br>
<p>=&gt; NOTE: There's some pretty pictures of the exact meanings of the  
<br>
max send size and eager limit and how they are used in this paper:  
<br>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/</a>.
<br>
<p>The &quot;2&quot; is because there are actually 2 free lists -- one for sending  
<br>
buffers and one for receiving buffers.  Default values for these  
<br>
three MCA parameters are 32 (free_list_inc), 64k (max_send_size), 12k  
<br>
(eager_limit), respectively.  So each MPI process will preregister  
<br>
about 4.75MB of memory per endpoint in use on the host.  Since these  
<br>
are all MCA parameters, they are all adjustable at run-time.
<br>
<p>- OMPI then pre-registers and pre-posts receive buffers when each  
<br>
lazy IB connection is made.  The buffers are drawn from the freelists  
<br>
mentioned above, so the first few connections may not actually  
<br>
register any *new* memory.  The freelists register more memory and  
<br>
dole it out as necessary when requests are made that cannot be  
<br>
satisfied by what is already on the freelist.
<br>
<p>- The number of pre-posted receiver buffers are controlled via the  
<br>
btl_openib_rd_num and btl_openib_rd_win MCA parameters.  OMPI pre- 
<br>
posts btl_openib_rd_num plus a few more (for control messages) --  
<br>
resulting in 11 buffers by default per queue pair (OMPI uses 2 QPs,  
<br>
one high priority for eager fragments and one low priority for send  
<br>
fragments) per endpoint.  So there are
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11 * (12k + 64k) = 836k
<br>
<p>buffers pre posted for each IB connection endpoint.
<br>
<p>=&gt; What I'm guessing is happening in your network is that IMB is  
<br>
hitting some communication intensive portions and network traffic  
<br>
either backs up, starts getting congested, or otherwise becomes  
<br>
&quot;slow&quot;, meaning that OMPI is queueing up traffic faster than the  
<br>
network can process it.  Hence, OMPI keeps registering more and more  
<br>
memory because there's no more memory available on the freelist to  
<br>
recycle.
<br>
<p>- The sending buffering behavior is regulated by the  
<br>
btl_openib_free_list_max MCA parameter, which defaults to -1 (meaning  
<br>
that the free list can grow to infinite size).  You can set a cap on  
<br>
this, telling OMPI how many entries it is allowed to have on the  
<br>
freelist, but that doesn't have a direct correlation as to how much  
<br>
memory will actually be registered at any one time when  
<br>
btl_openib_flags &gt; 1 (because OMPI will also be registering and  
<br>
caching user buffers).  Also keep in mind that this MCA parameter  
<br>
governs the size of both sending and receiving buffer freelists.
<br>
<p>That being said, if you use btl_openib_flags=1, you can use  
<br>
btl_openib_free_list_max as a direct method (because OMPI will *not*  
<br>
be registering and caching user buffers), but you need to choose a  
<br>
value that will be acceptable for both the send and receive freelists.
<br>
<p>What should happen if OMPI hits the btl_openib_free_list_max limit is  
<br>
that the upper layer (called the &quot;PML&quot;) will internally buffer  
<br>
messages until more IB registered buffers become available.  It's not  
<br>
entirely accurate, but you can think of it as effectively multiple  
<br>
levels of queueing going on here: MPI requests, PML buffers, IB  
<br>
registered buffers, network.  Fun stuff!  :-)
<br>
<p>- A future OMPI feature is an MCA parameter called  
<br>
mpool_rdma_rcache_size_limit.  It defaults to an &quot;unlimited&quot; value,  
<br>
which means that OMPI will try to register memory forever.  But if  
<br>
you set it to a nonzero positive value (in bytes), OMPI will limit  
<br>
itself to that much registered memory for each MPI process.  This MCA  
<br>
parameter unfortunately didn't make it into the 1.2 release, but will  
<br>
be included in some future release.  This code is currently on the  
<br>
OMPI trunk (and nightly snapshots), but not available in the 1.2  
<br>
branch (and nightly snapshots/releases).
<br>
<p>=====
<br>
<p>With all those explanations, here's some recommendations for you:
<br>
<p>- Try simply setting the size of the eager limit and max send size to  
<br>
smaller values, perhaps 4k for the eager limit and 12k for the max  
<br>
send size.  This will decrease the amount of registered memory that  
<br>
OMPI uses for each connection.
<br>
<p>- Try setting btl_openib_free_list_max, perhaps in conjunction with  
<br>
btl_openib_flags=1, to allow you to directly set indirectly or  
<br>
exactly how much registered memory is used per endpoint.
<br>
<p>- If you want to explore the OMPI trunk (with all the normal  
<br>
disclaimers about development code), try setting  
<br>
mpool_rdma_rcache_size_limit to a fixed value.
<br>
<p>Keep in mind that the intermixing of all of these values is quite  
<br>
complicated.  It's a very, very thin line to walk to balance resource  
<br>
constraints and application performance.  Tweaking one parameter may  
<br>
give you good resource limits but hose your overall performance.   
<br>
Another dimension here is that different applications will likely use  
<br>
different communication patterns, so different sets of values may be  
<br>
suitable for different applications.  It's a complicated parameter  
<br>
space problem.  :-\
<br>
<p><span class="quotelev1">&gt; 2. On another side note, I am having similar problems on another  
</span><br>
<span class="quotelev1">&gt; customer's cluster, where the benchmark hangs but at a different  
</span><br>
<span class="quotelev1">&gt; place each time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HW specs
</span><br>
<span class="quotelev1">&gt; * 12x IBM 3455 2xdual Core machines, with Infinipath/pathscale HCAs
</span><br>
<span class="quotelev1">&gt; * 1x Voltaire Switch
</span><br>
<span class="quotelev1">&gt; SW
</span><br>
<span class="quotelev1">&gt; * master: RHEL 4 AS U3
</span><br>
<span class="quotelev1">&gt; * compute: RHEL 4 WS U3
</span><br>
<span class="quotelev1">&gt; * OFED 1.1.1 w. OpenMPI-1.1.2
</span><br>
<p>For InfiniPath HCAs, you should probably be using the psm MTL instead  
<br>
of the openib BTL.
<br>
<p>The short version explanation between the two is that MTL plugins are  
<br>
designed for networks that export MPI-like interfaces (e.g., portals,  
<br>
tports, MX, InifiniPath).  BTL plugins are more geared towards  
<br>
networks that export RDMA interfaces.  You can force using the psm  
<br>
MTL with:
<br>
<p>mpirun --mca pml cm ...
<br>
<p>This tells OMPI to use the &quot;cm&quot; PML plugin (PML is the back end to  
<br>
MPI point-to-point), which, if you've built the &quot;psm&quot; MTL plugin (psm  
<br>
is the InfiniPath library glue), will use the InfiniPath native back- 
<br>
end library which will do nice things.  Beyond that, someone else  
<br>
will have to answer -- I have no experience with the psm MTL...
<br>
<p>Hope this helps!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2512.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2510.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Maybe in reply to:</strong> <a href="2499.php">Arif Ali: "[OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2512.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2512.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
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
