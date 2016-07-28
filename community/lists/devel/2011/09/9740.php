<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 07:06:56 2011" -->
<!-- isoreceived="20110901110656" -->
<!-- sent="Thu, 1 Sep 2011 13:05:51 +0200" -->
<!-- isosent="20110901110551" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="4E5F670F.2020203_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D986A729-F6E5-4938-9A65-E9746CCFBB3C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL code ready for review<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 07:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi, I found the reason. It is because besides the direct links between 2 
<br>
PCs, there is another link going through many switches and TCP BTL seems 
<br>
to use
<br>
this slower link. So I run again with eth0 only.
<br>
<p>So I build ompi with: ./configure --disable-mpi-f90 --disable-mpi-f77 
<br>
--disable-mpi-cxx --disable-vt --disable-io-romio --prefix=/usr 
<br>
--with-platform=optimized
<br>
And ran with : mpirun -n 6 --mca btl tcp,self --mca btl_tcp_if_include 
<br>
eth0 -hostfile my_hostfile --bynode ./IMB-MPI1 &gt; tcp_0901
<br>
<p>And get the result as in appendix. It seems that TCP has better 
<br>
performances with smaller message while TIPC with larger message.
<br>
<p>/Xin
<br>
<p>On 08/30/2011 05:50 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 29, 2011, at 3:51 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svbu-mpi008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svbu-mpi009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 IMB-MPI1 PingPong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #    Intel (R) MPI Benchmark Suite V3.2, MPI-1 part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I think these models are reasonably new :)
</span><br>
<span class="quotelev2">&gt;&gt; The result I gave you, they are tested on 2 processes but on 2 different servers. I get that the result you showed is 2 processes on one machine?
</span><br>
<span class="quotelev1">&gt; Nope -- check my output -- I'm running across 2 different servers and through a 1GB TOR ethernet switch (it's not a particularly high-performance ethernet switch, either).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you run some native netpipe TCP numbers across the same nodes that you ran the TIPC MPI tests over?  You should be getting lower latency than what you're seeing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have jumbo frames enabled, perchance?  Are you going through only 1 switch?  If you're on a NUMA server, do you have processor affinity enabled, and have the processes located &quot;near&quot; the NIC?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I forgot to tell you about SM&amp;  TIPC. Unfortunately, TIPC does not beat SM...
</span><br>
<span class="quotelev1">&gt; That's probably not surprising; SM is tuned pretty well specifically for MPI communication across shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9740/tcp_0901">tcp_0901</a>
</ul>
<!-- attachment="tcp_0901" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9740/tipc_0901">tipc_0901</a>
</ul>
<!-- attachment="tipc_0901" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9739.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
