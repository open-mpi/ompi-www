<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 09:15:03 2011" -->
<!-- isoreceived="20110825131503" -->
<!-- sent="Thu, 25 Aug 2011 09:14:58 -0400" -->
<!-- isosent="20110825131458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="98E79B5F-B333-4EEB-B4BC-DE932E5FE3DF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E563F50.4010207_at_ericsson.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 09:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9696.php">Ralph Castain: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>Previous message:</strong> <a href="9694.php">Chris Samuel: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>In reply to:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2011, at 8:25 AM, Xin He wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Can you edit your configure.m4 directly and test it and whatnot?  I provided the configure.m4 as a starting point for you.  :-)  It shouldn't be hard to make it check linux/tipc.h instead of tipc.h.  I'm happy to give you direct write access to the bitbucket, if you want it.
</span><br>
<span class="quotelev1">&gt; I think me having write access is convenient for both of us :)
</span><br>
<p>Sure -- what's your bitbucket account ID?
<br>
<p><span class="quotelev2">&gt;&gt; As we've discussed off-list, we can't take the code upstream until the contributor agreement is signed, unfortunately.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; The agreement thing is ongoing right now, but it may take some time.
</span><br>
<p>No worries.  Lawyers tend to take time when reviewing this stuff; we've seen this pattern in most organizations who sign the OMPI agreement.
<br>
<p><span class="quotelev1">&gt; But to save time, can you guys do some test on TIPC BTL, so that
</span><br>
<span class="quotelev1">&gt; when the agreement is ready, the code can be used?
</span><br>
<p>I don't know if any of us has the TIPC support libraries installed.
<br>
<p>So... what *is* TIPC?  Is there a writeup anywhere that we can read about what it is / how it works?  For example, what makes TIPC perform better than TCP?
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I have done some tests using tools like NetPIPE, osu and IMB and the result shows that TIPC BTL has a better performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than TCP BTL.
</span><br>
<span class="quotelev2">&gt;&gt; Great!  Can you share any results?
</span><br>
<span class="quotelev1">&gt; Yes, please check the appendix for the results using IMB 3.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have done the tests on 2 computers. Dell SC1435
</span><br>
<span class="quotelev1">&gt; Dual-Core AMD Opteron(tm) Processor 2212 HE x 2
</span><br>
<span class="quotelev1">&gt; 4 GB Mem
</span><br>
<span class="quotelev1">&gt; Ubuntu Server 10.04 LTS 32-bit Linux 2.6.32-24
</span><br>
<p>I'm not familiar with the Dell or Opteron lines -- how recent are those models?
<br>
<p>I ask because your TCP latency is a bit high (about 85us in 2-process IMB PingPong); it might suggest older hardware.  Or you may have built a debugging version of Open MPI (if you have a .svn or .hg checkout, that's the default). See the HACKING top-level file for how to get an optimized build.
<br>
<p>For example, with my debug build of Open MPI on fairly old Xeons with 1GB ethernet, I'm getting the following PingPong results (note: this is a debug build; it's not even an optimized build):
<br>
<p>-----
<br>
$ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 hostname
<br>
svbu-mpi008
<br>
svbu-mpi009
<br>
$ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 IMB-MPI1 PingPong
<br>
#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V3.2, MPI-1 part    
<br>
#---------------------------------------------------
<br>
...
<br>
#---------------------------------------------------
<br>
# Benchmarking PingPong 
<br>
# #processes = 2 
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000        57.31         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        57.71         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        57.73         0.03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        57.81         0.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        57.78         0.13
<br>
-----
<br>
<p>With an optimized build, it shaves off only a few us (which isn't too important in this case, but it does matter in the low-latency transport cases):
<br>
<p>-----
<br>
#---------------------------------------------------
<br>
# Benchmarking PingPong 
<br>
# #processes = 2 
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions      t[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000        54.62         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        54.92         0.02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        55.15         0.03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        55.16         0.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        55.15         0.14
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9696.php">Ralph Castain: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>Previous message:</strong> <a href="9694.php">Chris Samuel: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<li><strong>In reply to:</strong> <a href="9693.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
