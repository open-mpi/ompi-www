<?
$subject_val = "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 15:54:11 2009" -->
<!-- isoreceived="20090423195411" -->
<!-- sent="Thu, 23 Apr 2009 15:54:05 -0400" -->
<!-- isosent="20090423195405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="B203A894-9D1C-4ADF-B24F-910564C1E436_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="94efb1e50904231035i98dd6a6t48f1da262d5e1bbb_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 15:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9081.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9079.php">Alex Margolin: "[OMPI users] Open-MPI Presentation"</a>
<li><strong>In reply to:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9093.php">Pavel Shamis (Pasha): "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9093.php">Pavel Shamis (Pasha): "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Ashley still has the right general idea.
<br>
<p>You need to see how much memory the OS is taking off the top.  Then  
<br>
see how much memory the application images consume (before using any  
<br>
memory).  Open MPI itself then takes up a bunch of memory for its own  
<br>
internal buffering.  Remember, too, that Open MPI will default to both  
<br>
shared memory and OpenFabrics -- both of which have their own,  
<br>
separate buffering.
<br>
<p>You can disable shared memory, if you want, by specifying
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,self ...
<br>
<p>(&quot;sm&quot; is the shared memory btl, so by not specifying it, Open MPI  
<br>
won't use it)
<br>
<p>If you have recent Mellanox HCAs, you should probably be using OMPI's  
<br>
XRC support, which will decrease OMPI's memory usage even further  
<br>
(I'll let Mellanox comment on this further if they want).
<br>
<p>Finally, there's a bunch of information on this FAQ page describing  
<br>
how to tune Open MPI's OpenFabrics usage:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a>
<br>
<p><p><p>On Apr 23, 2009, at 1:35 PM, Viral Mehta wrote:
<br>
<p><span class="quotelev1">&gt; yes of course i m sure about wellness of providers.... and i m using  
</span><br>
<span class="quotelev1">&gt; ofed-1.4.1-rc3
</span><br>
<span class="quotelev1">&gt; i m running 24 proc per node on 8 node cluster..... so as i showed  
</span><br>
<span class="quotelev1">&gt; in calculation that i require 36G mem.....
</span><br>
<span class="quotelev1">&gt; i just need to know if my calculation has not some obvious flaw and/ 
</span><br>
<span class="quotelev1">&gt; or if i m missing anything about setting up system environment or  
</span><br>
<span class="quotelev1">&gt; anything like that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 23, 2009 at 10:36 PM, gossips J &lt;polk678_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What is the NIC you use?
</span><br>
<span class="quotelev1">&gt; What OFED build?
</span><br>
<span class="quotelev1">&gt; Are you sure about wellness of provider lib/drivers..?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is strange that you get out of mem in all to all tests... should  
</span><br>
<span class="quotelev1">&gt; not happen on 32G system,..!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -polk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/23/09, viral.vkm_at_[hidden] &lt;viral.vkm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; or any link which helps to understand system reuirement for certain  
</span><br>
<span class="quotelev1">&gt; test scenario ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2009 12:42pm, viral.vkm_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your response.
</span><br>
<span class="quotelev2">&gt; &gt; However, I am running
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec .... -ppn 24 -n 192 /opt/IMB-MPI1 alltaoll -msglen /root/ 
</span><br>
<span class="quotelev1">&gt; temp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And file /root/temp contains entry upto 65535 size only. That  
</span><br>
<span class="quotelev1">&gt; means alltoall test will run upto 65K size only
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, in that case I will require very less memory but then in that  
</span><br>
<span class="quotelev1">&gt; case also test is running out-of-memory. Please help someone to  
</span><br>
<span class="quotelev1">&gt; understand the scenario.
</span><br>
<span class="quotelev2">&gt; &gt; Or do I need to switch to some algorithm or do I need to set some  
</span><br>
<span class="quotelev1">&gt; other environment variables ? or anything like that ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 22, 2009 6:43pm, Ashley Pittman ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, 2009-04-22 at 12:40 +0530, vkm wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The same amount of memory required for recvbuf. So at the  
</span><br>
<span class="quotelev1">&gt; least each
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; node should have 36GB of memory.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Am I calculating right ? Please correct.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Your calculation looks correct, the conclusion is slightly wrong
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; however. The Application buffers will consume 36Gb of memory,  
</span><br>
<span class="quotelev1">&gt; the rest
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of the application, any comms buffers and the usual OS overhead  
</span><br>
<span class="quotelev1">&gt; will be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on top of this so putting only 36Gb of ram in your nodes will  
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; leave you short.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ashley,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Viral Mehta
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
<li><strong>Next message:</strong> <a href="9081.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9079.php">Alex Margolin: "[OMPI users] Open-MPI Presentation"</a>
<li><strong>In reply to:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9093.php">Pavel Shamis (Pasha): "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9093.php">Pavel Shamis (Pasha): "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
