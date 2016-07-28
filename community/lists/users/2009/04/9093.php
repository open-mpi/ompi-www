<?
$subject_val = "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 26 04:11:30 2009" -->
<!-- isoreceived="20090426081130" -->
<!-- sent="Sun, 26 Apr 2009 11:11:24 +0300" -->
<!-- isosent="20090426081124" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="49F4172C.6020808_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B203A894-9D1C-4ADF-B24F-910564C1E436_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: mpi alltoall memory requirement]<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-26 04:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9094.php">jan: "Re: [OMPI users] users Digest, Vol 1212, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="9092.php">Alex Margolin: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>In reply to:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9323.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may try to use XRC, it should decrease openib btl memory footprint, 
<br>
especially on multi-core system, like you have. The follow command will 
<br>
switch default OMPI config to XRC:
<br>
&quot; --mca btl_openib_receive_queues 
<br>
X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32&quot;
<br>
<p>Regards,
<br>
Pasha
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think Ashley still has the right general idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to see how much memory the OS is taking off the top.  Then 
</span><br>
<span class="quotelev1">&gt; see how much memory the application images consume (before using any 
</span><br>
<span class="quotelev1">&gt; memory).  Open MPI itself then takes up a bunch of memory for its own 
</span><br>
<span class="quotelev1">&gt; internal buffering.  Remember, too, that Open MPI will default to both 
</span><br>
<span class="quotelev1">&gt; shared memory and OpenFabrics -- both of which have their own, 
</span><br>
<span class="quotelev1">&gt; separate buffering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can disable shared memory, if you want, by specifying
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --mca btl openib,self ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (&quot;sm&quot; is the shared memory btl, so by not specifying it, Open MPI 
</span><br>
<span class="quotelev1">&gt; won't use it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have recent Mellanox HCAs, you should probably be using OMPI's 
</span><br>
<span class="quotelev1">&gt; XRC support, which will decrease OMPI's memory usage even further 
</span><br>
<span class="quotelev1">&gt; (I'll let Mellanox comment on this further if they want).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, there's a bunch of information on this FAQ page describing 
</span><br>
<span class="quotelev1">&gt; how to tune Open MPI's OpenFabrics usage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2009, at 1:35 PM, Viral Mehta wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes of course i m sure about wellness of providers.... and i m using 
</span><br>
<span class="quotelev2">&gt;&gt; ofed-1.4.1-rc3
</span><br>
<span class="quotelev2">&gt;&gt; i m running 24 proc per node on 8 node cluster..... so as i showed in 
</span><br>
<span class="quotelev2">&gt;&gt; calculation that i require 36G mem.....
</span><br>
<span class="quotelev2">&gt;&gt; i just need to know if my calculation has not some obvious flaw 
</span><br>
<span class="quotelev2">&gt;&gt; and/or if i m missing anything about setting up system environment or 
</span><br>
<span class="quotelev2">&gt;&gt; anything like that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 23, 2009 at 10:36 PM, gossips J &lt;polk678_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What is the NIC you use?
</span><br>
<span class="quotelev2">&gt;&gt; What OFED build?
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure about wellness of provider lib/drivers..?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is strange that you get out of mem in all to all tests... should 
</span><br>
<span class="quotelev2">&gt;&gt; not happen on 32G system,..!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -polk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/23/09, viral.vkm_at_[hidden] &lt;viral.vkm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; or any link which helps to understand system reuirement for certain 
</span><br>
<span class="quotelev2">&gt;&gt; test scenario ..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2009 12:42pm, viral.vkm_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for your response.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, I am running
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpiexec .... -ppn 24 -n 192 /opt/IMB-MPI1 alltaoll -msglen /root/temp
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And file /root/temp contains entry upto 65535 size only. That means 
</span><br>
<span class="quotelev2">&gt;&gt; alltoall test will run upto 65K size only
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So, in that case I will require very less memory but then in that 
</span><br>
<span class="quotelev2">&gt;&gt; case also test is running out-of-memory. Please help someone to 
</span><br>
<span class="quotelev2">&gt;&gt; understand the scenario.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Or do I need to switch to some algorithm or do I need to set some 
</span><br>
<span class="quotelev2">&gt;&gt; other environment variables ? or anything like that ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Apr 22, 2009 6:43pm, Ashley Pittman ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Wed, 2009-04-22 at 12:40 +0530, vkm wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; The same amount of memory required for recvbuf. So at the least 
</span><br>
<span class="quotelev2">&gt;&gt; each
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; node should have 36GB of memory.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Am I calculating right ? Please correct.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Your calculation looks correct, the conclusion is slightly wrong
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; however. The Application buffers will consume 36Gb of memory, the 
</span><br>
<span class="quotelev2">&gt;&gt; rest
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; of the application, any comms buffers and the usual OS overhead 
</span><br>
<span class="quotelev2">&gt;&gt; will be
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; on top of this so putting only 36Gb of ram in your nodes will still
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; leave you short.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Ashley,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Viral Mehta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9094.php">jan: "Re: [OMPI users] users Digest, Vol 1212, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="9092.php">Alex Margolin: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>In reply to:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9323.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
