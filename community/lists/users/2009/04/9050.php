<?
$subject_val = "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 03:12:16 2009" -->
<!-- isoreceived="20090423071216" -->
<!-- sent="Thu, 23 Apr 2009 07:12:11 +0000" -->
<!-- isosent="20090423071211" -->
<!-- name="viral.vkm_at_[hidden]" -->
<!-- email="viral.vkm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="00163646ccde5195b2046833992d_at_google.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1240405991.3514.15.camel_at_alpha" -->
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
<strong>Date:</strong> 2009-04-23 03:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9051.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9049.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9323.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Thanks for your response.
<br>
However, I am running
<br>
mpiexec .... -ppn 24 -n 192 /opt/IMB-MPI1 alltaoll -msglen /root/temp
<br>
<p>And file /root/temp contains entry upto 65535 size only. That means  
<br>
alltoall test will run upto 65K size only
<br>
<p>So, in that case I will require very less memory but then in that case also  
<br>
test is running out-of-memory. Please help someone to understand the  
<br>
scenario.
<br>
Or do I need to switch to some algorithm or do I need to set some other  
<br>
environment variables ? or anything like that ?
<br>
<p>On Apr 22, 2009 6:43pm, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2009-04-22 at 12:40 +0530, vkm wrote:
</span><br>
<p><p><p><span class="quotelev2">&gt; &gt; The same amount of memory required for recvbuf. So at the least each
</span><br>
<p><span class="quotelev2">&gt; &gt; node should have 36GB of memory.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Am I calculating right ? Please correct.
</span><br>
<p><p><p><span class="quotelev1">&gt; Your calculation looks correct, the conclusion is slightly wrong
</span><br>
<p><span class="quotelev1">&gt; however. The Application buffers will consume 36Gb of memory, the rest
</span><br>
<p><span class="quotelev1">&gt; of the application, any comms buffers and the usual OS overhead will be
</span><br>
<p><span class="quotelev1">&gt; on top of this so putting only 36Gb of ram in your nodes will still
</span><br>
<p><span class="quotelev1">&gt; leave you short.
</span><br>
<p><p><p><span class="quotelev1">&gt; Ashley,
</span><br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9051.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9049.php">Eugene Loh: "Re: [OMPI users] SHARED Memory----------------"</a>
<li><strong>In reply to:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9323.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
