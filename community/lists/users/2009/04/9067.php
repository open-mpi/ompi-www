<?
$subject_val = "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 08:51:07 2009" -->
<!-- isoreceived="20090423125107" -->
<!-- sent="Thu, 23 Apr 2009 12:51:02 +0000" -->
<!-- isosent="20090423125102" -->
<!-- name="viral.vkm_at_[hidden]" -->
<!-- email="viral.vkm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="001636456e3825101304683855ca_at_google.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00163646ccde5195b2046833992d_at_google.com" -->
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
<strong>From:</strong> <a href="mailto:viral.vkm_at_[hidden]?Subject=Re:%20[OMPI%20users]%20[Fwd:%20mpi%20alltoall%20memory%20requirement]"><em>viral.vkm_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-04-23 08:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9068.php">Ralph Castain: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>Previous message:</strong> <a href="9066.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9050.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
or any link which helps to understand system reuirement for certain test  
<br>
scenario ..
<br>
<p>On Apr 23, 2009 12:42pm, viral.vkm_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Thanks for your response.
</span><br>
<span class="quotelev1">&gt; However, I am running
</span><br>
<span class="quotelev1">&gt; mpiexec .... -ppn 24 -n 192 /opt/IMB-MPI1 alltaoll -msglen /root/temp
</span><br>
<p><span class="quotelev1">&gt; And file /root/temp contains entry upto 65535 size only. That means  
</span><br>
<span class="quotelev1">&gt; alltoall test will run upto 65K size only
</span><br>
<p><span class="quotelev1">&gt; So, in that case I will require very less memory but then in that case  
</span><br>
<span class="quotelev1">&gt; also test is running out-of-memory. Please help someone to understand the  
</span><br>
<span class="quotelev1">&gt; scenario.
</span><br>
<span class="quotelev1">&gt; Or do I need to switch to some algorithm or do I need to set some other  
</span><br>
<span class="quotelev1">&gt; environment variables ? or anything like that ?
</span><br>
<p><span class="quotelev1">&gt; On Apr 22, 2009 6:43pm, Ashley Pittman ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2009-04-22 at 12:40 +0530, vkm wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The same amount of memory required for recvbuf. So at the least each
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node should have 36GB of memory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Am I calculating right ? Please correct.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your calculation looks correct, the conclusion is slightly wrong
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; however. The Application buffers will consume 36Gb of memory, the rest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; of the application, any comms buffers and the usual OS overhead will be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; on top of this so putting only 36Gb of ram in your nodes will still
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; leave you short.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ashley,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9068.php">Ralph Castain: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>Previous message:</strong> <a href="9066.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9050.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9074.php">gossips J: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
