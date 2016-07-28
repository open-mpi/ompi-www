<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 03:52:29 2011" -->
<!-- isoreceived="20110829075229" -->
<!-- sent="Mon, 29 Aug 2011 09:51:27 +0200" -->
<!-- isosent="20110829075127" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="4E5B44FF.4080503_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98E79B5F-B333-4EEB-B4BC-DE932E5FE3DF_at_cisco.com" -->
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
<strong>Date:</strong> 2011-08-29 03:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9707.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/25/2011 03:14 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 25, 2011, at 8:25 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you edit your configure.m4 directly and test it and whatnot?  I provided the configure.m4 as a starting point for you.  :-)  It shouldn't be hard to make it check linux/tipc.h instead of tipc.h.  I'm happy to give you direct write access to the bitbucket, if you want it.
</span><br>
<span class="quotelev2">&gt;&gt; I think me having write access is convenient for both of us :)
</span><br>
<span class="quotelev1">&gt; Sure -- what's your bitbucket account ID?
</span><br>
It's &quot;letter113&quot;
<br>
<span class="quotelev3">&gt;&gt;&gt; As we've discussed off-list, we can't take the code upstream until the contributor agreement is signed, unfortunately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The agreement thing is ongoing right now, but it may take some time.
</span><br>
<span class="quotelev1">&gt; No worries.  Lawyers tend to take time when reviewing this stuff; we've seen this pattern in most organizations who sign the OMPI agreement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But to save time, can you guys do some test on TIPC BTL, so that
</span><br>
<span class="quotelev2">&gt;&gt; when the agreement is ready, the code can be used?
</span><br>
<span class="quotelev1">&gt; I don't know if any of us has the TIPC support libraries installed.
</span><br>
<p>It is easy to have TIPC support. It is within the kernel actually. To 
<br>
get TIPC working, you only have to configure it by using &quot;tipc-config&quot;. 
<br>
Maybe you
<br>
can check this doc for information: 
<br>
<a href="http://tipc.sourceforge.net/doc/Users_Guide.txt">http://tipc.sourceforge.net/doc/Users_Guide.txt</a>
<br>
<span class="quotelev1">&gt; So... what *is* TIPC?  Is there a writeup anywhere that we can read about what it is / how it works?  For example, what makes TIPC perform better than TCP?
</span><br>
<p>Sure.  Search &quot;TIPC: Providing Communication for Linux Clusters&quot;. It is 
<br>
a paper written by the author of TIPC, explaining basic stuff about TIPC,
<br>
should be very useful. And you can visit TIPC homepage: 
<br>
<a href="http://tipc.sourceforge.net/">http://tipc.sourceforge.net/</a> .
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have done some tests using tools like NetPIPE, osu and IMB and the result shows that TIPC BTL has a better performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than TCP BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Great!  Can you share any results?
</span><br>
<span class="quotelev2">&gt;&gt; Yes, please check the appendix for the results using IMB 3.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have done the tests on 2 computers. Dell SC1435
</span><br>
<span class="quotelev2">&gt;&gt; Dual-Core AMD Opteron(tm) Processor 2212 HE x 2
</span><br>
<span class="quotelev2">&gt;&gt; 4 GB Mem
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu Server 10.04 LTS 32-bit Linux 2.6.32-24
</span><br>
<span class="quotelev1">&gt; I'm not familiar with the Dell or Opteron lines -- how recent are those models?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because your TCP latency is a bit high (about 85us in 2-process IMB PingPong); it might suggest older hardware.  Or you may have built a debugging version of Open MPI (if you have a .svn or .hg checkout, that's the default). See the HACKING top-level file for how to get an optimized build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, with my debug build of Open MPI on fairly old Xeons with 1GB ethernet, I'm getting the following PingPong results (note: this is a debug build; it's not even an optimized build):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 hostname
</span><br>
<span class="quotelev1">&gt; svbu-mpi008
</span><br>
<span class="quotelev1">&gt; svbu-mpi009
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 IMB-MPI1 PingPong
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #    Intel (R) MPI Benchmark Suite V3.2, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;              0         1000        57.31         0.00
</span><br>
<span class="quotelev1">&gt;              1         1000        57.71         0.02
</span><br>
<span class="quotelev1">&gt;              2         1000        57.73         0.03
</span><br>
<span class="quotelev1">&gt;              4         1000        57.81         0.07
</span><br>
<span class="quotelev1">&gt;              8         1000        57.78         0.13
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With an optimized build, it shaves off only a few us (which isn't too important in this case, but it does matter in the low-latency transport cases):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;              0         1000        54.62         0.00
</span><br>
<span class="quotelev1">&gt;              1         1000        54.92         0.02
</span><br>
<span class="quotelev1">&gt;              2         1000        55.15         0.03
</span><br>
<span class="quotelev1">&gt;              4         1000        55.16         0.07
</span><br>
<span class="quotelev1">&gt;              8         1000        55.15         0.14
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi, I think these models are reasonably new :)
<br>
The result I gave you, they are tested on 2 processes but on 2 different 
<br>
servers. I get that the result you showed is 2 processes on one machine?
<br>
But I did build with debug enabled, I will try optimize then :)
<br>
<p>BTW, I forgot to tell you about SM &amp; TIPC. Unfortunately, TIPC does not 
<br>
beat SM...
<br>
<p>/Xin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9707.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>In reply to:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
