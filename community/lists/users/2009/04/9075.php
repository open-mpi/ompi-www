<?
$subject_val = "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 13:35:25 2009" -->
<!-- isoreceived="20090423173525" -->
<!-- sent="Thu, 23 Apr 2009 23:05:20 +0530" -->
<!-- isosent="20090423173520" -->
<!-- name="Viral Mehta" -->
<!-- email="viral.vkm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="94efb1e50904231035i98dd6a6t48f1da262d5e1bbb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="aae01bca0904231006u3677006dk7d5aa14d830876eb_at_mail.gmail.com" -->
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
<strong>From:</strong> Viral Mehta (<em>viral.vkm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 13:35:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes of course i m sure about wellness of providers.... and i m using
<br>
ofed-1.4.1-rc3
<br>
i m running 24 proc per node on 8 node cluster..... so as i showed in
<br>
calculation that i require 36G mem.....
<br>
i just need to know if my calculation has not some obvious flaw and/or if i
<br>
m missing anything about setting up system environment or anything like that
<br>
<p>On Thu, Apr 23, 2009 at 10:36 PM, gossips J &lt;polk678_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What is the NIC you use?
</span><br>
<span class="quotelev1">&gt; What OFED build?
</span><br>
<span class="quotelev1">&gt; Are you sure about wellness of provider lib/drivers..?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is strange that you get out of mem in all to all tests... should not
</span><br>
<span class="quotelev1">&gt; happen on 32G system,..!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -polk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/23/09, viral.vkm_at_[hidden] &lt;viral.vkm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or any link which helps to understand system reuirement for certain test
</span><br>
<span class="quotelev2">&gt;&gt; scenario ..
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
<span class="quotelev3">&gt;&gt; &gt; So, in that case I will require very less memory but then in that case
</span><br>
<span class="quotelev2">&gt;&gt; also test is running out-of-memory. Please help someone to understand the
</span><br>
<span class="quotelev2">&gt;&gt; scenario.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Or do I need to switch to some algorithm or do I need to set some other
</span><br>
<span class="quotelev2">&gt;&gt; environment variables ? or anything like that ?
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
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; The same amount of memory required for recvbuf. So at the least each
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
<span class="quotelev4">&gt;&gt; &gt; &gt; however. The Application buffers will consume 36Gb of memory, the rest
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; of the application, any comms buffers and the usual OS overhead will
</span><br>
<span class="quotelev2">&gt;&gt; be
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Thanks,
Viral Mehta
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9080.php">Jeff Squyres: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
