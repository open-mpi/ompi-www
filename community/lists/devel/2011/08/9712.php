<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 09:22:08 2011" -->
<!-- isoreceived="20110829132208" -->
<!-- sent="Mon, 29 Aug 2011 09:22:02 -0400" -->
<!-- isosent="20110829132202" -->
<!-- name="teng ma" -->
<!-- email="xiaok1981_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="CANQYCiaoH-HazP1oPEmMwYag3Oy7KGkWhUuVo=uJp0NhJgxJhw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E5B44FF.4080503_at_ericsson.com" -->
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
<strong>From:</strong> teng ma (<em>xiaok1981_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 09:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is your interconnect Gigabytes Ethernet? It's very surprised to see TCP BTL
<br>
just got 33MBytes peak BW on your cluster.  I did a similar test on an amd
<br>
cluster with gigabytes Ethernet. As following shows, the TCP BTL's BW is
<br>
similar with your tipc(112MBytes/s).   Could you redo the test with 2
<br>
processes spawned, 2 nodes in your machinefile and enabling --bynode?
<br>
<p>It looks like your tipc BTL is pretty good at message size between 8K and
<br>
512K.  Can you tell us more about difference between TIPC and TCP protocol
<br>
stacks?  Any special configure needed to enable your tipc?  Maybe you can
<br>
write a module in Netpipe( similar to NPTcp )to test raw performance on both
<br>
TCP and TIPC without MPI.
<br>
<p>TCP BTL on a Gigbytes ethernet
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000        23.27         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        23.78         0.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        23.77         0.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        25.47         0.15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        23.94         0.32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        24.36         0.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        24.83         1.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        25.76         2.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        27.25         4.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        30.66         7.96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        36.86        13.25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        49.00        19.93
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000        77.83        25.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000        82.42        47.39
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000       165.28        47.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       325.01        48.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000       440.75        70.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640      1060.00        58.96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      1674.71        74.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      2814.13        88.84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80      4975.11       100.50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40      9526.94       104.97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20     18419.33       108.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10     36150.05       110.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8388608            5     71880.79       111.30
<br>
<p><p><p>Teng
<br>
<p>On Mon, Aug 29, 2011 at 3:51 AM, Xin He &lt;xin.i.he_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/25/2011 03:14 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 25, 2011, at 8:25 AM, Xin He wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Can you edit your configure.m4 directly and test it and whatnot?  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; provided the configure.m4 as a starting point for you.  :-)  It shouldn't be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hard to make it check linux/tipc.h instead of tipc.h.  I'm happy to give you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; direct write access to the bitbucket, if you want it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think me having write access is convenient for both of us :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure -- what's your bitbucket account ID?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It's &quot;letter113&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  As we've discussed off-list, we can't take the code upstream until the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contributor agreement is signed, unfortunately.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  The agreement thing is ongoing right now, but it may take some time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No worries.  Lawyers tend to take time when reviewing this stuff; we've
</span><br>
<span class="quotelev2">&gt;&gt; seen this pattern in most organizations who sign the OMPI agreement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  But to save time, can you guys do some test on TIPC BTL, so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the agreement is ready, the code can be used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if any of us has the TIPC support libraries installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is easy to have TIPC support. It is within the kernel actually. To get
</span><br>
<span class="quotelev1">&gt; TIPC working, you only have to configure it by using &quot;tipc-config&quot;. Maybe
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; can check this doc for information: <a href="http://tipc.sourceforge.net/">http://tipc.sourceforge.net/</a>**
</span><br>
<span class="quotelev1">&gt; doc/Users_Guide.txt &lt;<a href="http://tipc.sourceforge.net/doc/Users_Guide.txt">http://tipc.sourceforge.net/doc/Users_Guide.txt</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So... what *is* TIPC?  Is there a writeup anywhere that we can read about
</span><br>
<span class="quotelev2">&gt;&gt; what it is / how it works?  For example, what makes TIPC perform better than
</span><br>
<span class="quotelev2">&gt;&gt; TCP?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure.  Search &quot;TIPC: Providing Communication for Linux Clusters&quot;. It is a
</span><br>
<span class="quotelev1">&gt; paper written by the author of TIPC, explaining basic stuff about TIPC,
</span><br>
<span class="quotelev1">&gt; should be very useful. And you can visit TIPC homepage:
</span><br>
<span class="quotelev1">&gt; <a href="http://tipc.sourceforge.net/">http://tipc.sourceforge.net/</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have done some tests using tools like NetPIPE, osu and IMB and the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; result shows that TIPC BTL has a better performance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than TCP BTL.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Great!  Can you share any results?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, please check the appendix for the results using IMB 3.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have done the tests on 2 computers. Dell SC1435
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dual-Core AMD Opteron(tm) Processor 2212 HE x 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 GB Mem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ubuntu Server 10.04 LTS 32-bit Linux 2.6.32-24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not familiar with the Dell or Opteron lines -- how recent are those
</span><br>
<span class="quotelev2">&gt;&gt; models?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ask because your TCP latency is a bit high (about 85us in 2-process IMB
</span><br>
<span class="quotelev2">&gt;&gt; PingPong); it might suggest older hardware.  Or you may have built a
</span><br>
<span class="quotelev2">&gt;&gt; debugging version of Open MPI (if you have a .svn or .hg checkout, that's
</span><br>
<span class="quotelev2">&gt;&gt; the default). See the HACKING top-level file for how to get an optimized
</span><br>
<span class="quotelev2">&gt;&gt; build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, with my debug build of Open MPI on fairly old Xeons with 1GB
</span><br>
<span class="quotelev2">&gt;&gt; ethernet, I'm getting the following PingPong results (note: this is a debug
</span><br>
<span class="quotelev2">&gt;&gt; build; it's not even an optimized build):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt; svbu-mpi008
</span><br>
<span class="quotelev2">&gt;&gt; svbu-mpi009
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev2">&gt;&gt; IMB-MPI1 PingPong
</span><br>
<span class="quotelev2">&gt;&gt; #-----------------------------**----------------------
</span><br>
<span class="quotelev2">&gt;&gt; #    Intel (R) MPI Benchmark Suite V3.2, MPI-1 part
</span><br>
<span class="quotelev2">&gt;&gt; #-----------------------------**----------------------
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; #-----------------------------**----------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev2">&gt;&gt; # #processes = 2
</span><br>
<span class="quotelev2">&gt;&gt; #-----------------------------**----------------------
</span><br>
<span class="quotelev2">&gt;&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev2">&gt;&gt;             0         1000        57.31         0.00
</span><br>
<span class="quotelev2">&gt;&gt;             1         1000        57.71         0.02
</span><br>
<span class="quotelev2">&gt;&gt;             2         1000        57.73         0.03
</span><br>
<span class="quotelev2">&gt;&gt;             4         1000        57.81         0.07
</span><br>
<span class="quotelev2">&gt;&gt;             8         1000        57.78         0.13
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With an optimized build, it shaves off only a few us (which isn't too
</span><br>
<span class="quotelev2">&gt;&gt; important in this case, but it does matter in the low-latency transport
</span><br>
<span class="quotelev2">&gt;&gt; cases):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; #-----------------------------**----------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev2">&gt;&gt; # #processes = 2
</span><br>
<span class="quotelev2">&gt;&gt; #-----------------------------**----------------------
</span><br>
<span class="quotelev2">&gt;&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev2">&gt;&gt;             0         1000        54.62         0.00
</span><br>
<span class="quotelev2">&gt;&gt;             1         1000        54.92         0.02
</span><br>
<span class="quotelev2">&gt;&gt;             2         1000        55.15         0.03
</span><br>
<span class="quotelev2">&gt;&gt;             4         1000        55.16         0.07
</span><br>
<span class="quotelev2">&gt;&gt;             8         1000        55.15         0.14
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi, I think these models are reasonably new :)
</span><br>
<span class="quotelev1">&gt; The result I gave you, they are tested on 2 processes but on 2 different
</span><br>
<span class="quotelev1">&gt; servers. I get that the result you showed is 2 processes on one machine?
</span><br>
<span class="quotelev1">&gt; But I did build with debug enabled, I will try optimize then :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I forgot to tell you about SM &amp; TIPC. Unfortunately, TIPC does not
</span><br>
<span class="quotelev1">&gt; beat SM...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Xin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9712/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
