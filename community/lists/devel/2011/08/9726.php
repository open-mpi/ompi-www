<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 07:58:22 2011" -->
<!-- isoreceived="20110830115822" -->
<!-- sent="Tue, 30 Aug 2011 13:57:18 +0200" -->
<!-- isosent="20110830115718" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="4E5CD01E.3090702_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANQYCiaoH-HazP1oPEmMwYag3Oy7KGkWhUuVo=uJp0NhJgxJhw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-30 07:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9728.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9728.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it is Gigabytes Ethernet. I configure ompi again using &quot;./configure 
<br>
--disable-mpi-f90 --disable-mpi-f77 --disable-mpi-cxx --disable-vt 
<br>
--disable-io-romio --prefix=/usr --with-platform=optimized&quot;
<br>
and run IMB-MPI1 again with &quot;mpirun --mca btl tcp,self -n 2 --hostfile 
<br>
my_hostfile --bynode ./IMB-MPI1&quot; again, the result does not seem very 
<br>
different though...
<br>
<p>About TIPC, maybe this article can explains more: 
<br>
<a href="http://www.kernel.org/doc/ols/2004/ols2004v2-pages-61-70.pdf">http://www.kernel.org/doc/ols/2004/ols2004v2-pages-61-70.pdf</a>
<br>
<p>To use TIPC, you use &quot;tipcutil&quot; to configure:
<br>
I first connect 2 machines directly with wires
<br>
1. set tipc address of 2 PC. Say &lt;1.1.1&gt; and &lt;1.1.2&gt; respectively and 
<br>
with the same Network ID
<br>
2. &quot;tipc-config -v -i -be=eth:eth0,eth:eth1&quot; at each machine to set the 
<br>
bears. Check 
<br>
<a href="http://tipc.sourceforge.net/doc/tipc_1.7_users_guide.html#installation">http://tipc.sourceforge.net/doc/tipc_1.7_users_guide.html#installation</a> 
<br>
for more information
<br>
3. &quot;tipc-config -l&quot; to check links. If successful, you should see:
<br>
ehhexxn_at_node2:~/git/test_ompi/IMB_3.2/src$ tipc-config -l
<br>
Links:
<br>
multicast-link: up
<br>
1.1.2:eth0-1.1.1:eth0: up
<br>
1.1.2:eth1-1.1.1:eth1: up
<br>
<p>In the attachment, there are sample programs using TIPC that can be used 
<br>
to test TIPC environment :)
<br>
<p>/Xin
<br>
<p><p>On 08/29/2011 03:22 PM, teng ma wrote:
<br>
<span class="quotelev1">&gt; Is your interconnect Gigabytes Ethernet? It's very surprised to see 
</span><br>
<span class="quotelev1">&gt; TCP BTL just got 33MBytes peak BW on your cluster.  I did a similar 
</span><br>
<span class="quotelev1">&gt; test on an amd cluster with gigabytes Ethernet. As following shows, 
</span><br>
<span class="quotelev1">&gt; the TCP BTL's BW is similar with your tipc(112MBytes/s).   Could you 
</span><br>
<span class="quotelev1">&gt; redo the test with 2 processes spawned, 2 nodes in your machinefile 
</span><br>
<span class="quotelev1">&gt; and enabling --bynode?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like your tipc BTL is pretty good at message size between 8K 
</span><br>
<span class="quotelev1">&gt; and 512K.  Can you tell us more about difference between TIPC and TCP 
</span><br>
<span class="quotelev1">&gt; protocol stacks?  Any special configure needed to enable your tipc?  
</span><br>
<span class="quotelev1">&gt; Maybe you can write a module in Netpipe( similar to NPTcp )to test raw 
</span><br>
<span class="quotelev1">&gt; performance on both TCP and TIPC without MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TCP BTL on a Gigbytes ethernet
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;             0         1000        23.27         0.00
</span><br>
<span class="quotelev1">&gt;             1         1000        23.78         0.04
</span><br>
<span class="quotelev1">&gt;             2         1000        23.77         0.08
</span><br>
<span class="quotelev1">&gt;             4         1000        25.47         0.15
</span><br>
<span class="quotelev1">&gt;             8         1000        23.94         0.32
</span><br>
<span class="quotelev1">&gt;            16         1000        24.36         0.63
</span><br>
<span class="quotelev1">&gt;            32         1000        24.83         1.23
</span><br>
<span class="quotelev1">&gt;            64         1000        25.76         2.37
</span><br>
<span class="quotelev1">&gt;           128         1000        27.25         4.48
</span><br>
<span class="quotelev1">&gt;           256         1000        30.66         7.96
</span><br>
<span class="quotelev1">&gt;           512         1000        36.86        13.25
</span><br>
<span class="quotelev1">&gt;          1024         1000        49.00        19.93
</span><br>
<span class="quotelev1">&gt;          2048         1000        77.83        25.10
</span><br>
<span class="quotelev1">&gt;          4096         1000        82.42        47.39
</span><br>
<span class="quotelev1">&gt;          8192         1000       165.28        47.27
</span><br>
<span class="quotelev1">&gt;         16384         1000       325.01        48.08
</span><br>
<span class="quotelev1">&gt;         32768         1000       440.75        70.90
</span><br>
<span class="quotelev1">&gt;         65536          640      1060.00        58.96
</span><br>
<span class="quotelev1">&gt;        131072          320      1674.71        74.64
</span><br>
<span class="quotelev1">&gt;        262144          160      2814.13        88.84
</span><br>
<span class="quotelev1">&gt;        524288           80      4975.11       100.50
</span><br>
<span class="quotelev1">&gt;       1048576           40      9526.94       104.97
</span><br>
<span class="quotelev1">&gt;       2097152           20     18419.33       108.58
</span><br>
<span class="quotelev1">&gt;       4194304           10     36150.05       110.65
</span><br>
<span class="quotelev1">&gt;       8388608            5     71880.79       111.30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Teng
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 29, 2011 at 3:51 AM, Xin He &lt;xin.i.he_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:xin.i.he_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 08/25/2011 03:14 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Aug 25, 2011, at 8:25 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Can you edit your configure.m4 directly and test it
</span><br>
<span class="quotelev1">&gt;                 and whatnot?  I provided the configure.m4 as a
</span><br>
<span class="quotelev1">&gt;                 starting point for you.  :-)  It shouldn't be hard to
</span><br>
<span class="quotelev1">&gt;                 make it check linux/tipc.h instead of tipc.h.  I'm
</span><br>
<span class="quotelev1">&gt;                 happy to give you direct write access to the
</span><br>
<span class="quotelev1">&gt;                 bitbucket, if you want it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I think me having write access is convenient for both of us :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Sure -- what's your bitbucket account ID?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's &quot;letter113&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 As we've discussed off-list, we can't take the code
</span><br>
<span class="quotelev1">&gt;                 upstream until the contributor agreement is signed,
</span><br>
<span class="quotelev1">&gt;                 unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             The agreement thing is ongoing right now, but it may take
</span><br>
<span class="quotelev1">&gt;             some time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         No worries.  Lawyers tend to take time when reviewing this
</span><br>
<span class="quotelev1">&gt;         stuff; we've seen this pattern in most organizations who sign
</span><br>
<span class="quotelev1">&gt;         the OMPI agreement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             But to save time, can you guys do some test on TIPC BTL,
</span><br>
<span class="quotelev1">&gt;             so that
</span><br>
<span class="quotelev1">&gt;             when the agreement is ready, the code can be used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I don't know if any of us has the TIPC support libraries
</span><br>
<span class="quotelev1">&gt;         installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It is easy to have TIPC support. It is within the kernel actually.
</span><br>
<span class="quotelev1">&gt;     To get TIPC working, you only have to configure it by using
</span><br>
<span class="quotelev1">&gt;     &quot;tipc-config&quot;. Maybe you
</span><br>
<span class="quotelev1">&gt;     can check this doc for information:
</span><br>
<span class="quotelev1">&gt;     <a href="http://tipc.sourceforge.net/doc/Users_Guide.txt">http://tipc.sourceforge.net/doc/Users_Guide.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         So... what *is* TIPC?  Is there a writeup anywhere that we can
</span><br>
<span class="quotelev1">&gt;         read about what it is / how it works?  For example, what makes
</span><br>
<span class="quotelev1">&gt;         TIPC perform better than TCP?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sure.  Search &quot;TIPC: Providing Communication for Linux Clusters&quot;.
</span><br>
<span class="quotelev1">&gt;     It is a paper written by the author of TIPC, explaining basic
</span><br>
<span class="quotelev1">&gt;     stuff about TIPC,
</span><br>
<span class="quotelev1">&gt;     should be very useful. And you can visit TIPC homepage:
</span><br>
<span class="quotelev1">&gt;     <a href="http://tipc.sourceforge.net/">http://tipc.sourceforge.net/</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     I have done some tests using tools like NetPIPE,
</span><br>
<span class="quotelev1">&gt;                     osu and IMB and the result shows that TIPC BTL has
</span><br>
<span class="quotelev1">&gt;                     a better performance
</span><br>
<span class="quotelev1">&gt;                     than TCP BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Great!  Can you share any results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Yes, please check the appendix for the results using IMB 3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I have done the tests on 2 computers. Dell SC1435
</span><br>
<span class="quotelev1">&gt;             Dual-Core AMD Opteron(tm) Processor 2212 HE x 2
</span><br>
<span class="quotelev1">&gt;             4 GB Mem
</span><br>
<span class="quotelev1">&gt;             Ubuntu Server 10.04 LTS 32-bit Linux 2.6.32-24
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm not familiar with the Dell or Opteron lines -- how recent
</span><br>
<span class="quotelev1">&gt;         are those models?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I ask because your TCP latency is a bit high (about 85us in
</span><br>
<span class="quotelev1">&gt;         2-process IMB PingPong); it might suggest older hardware.  Or
</span><br>
<span class="quotelev1">&gt;         you may have built a debugging version of Open MPI (if you
</span><br>
<span class="quotelev1">&gt;         have a .svn or .hg checkout, that's the default). See the
</span><br>
<span class="quotelev1">&gt;         HACKING top-level file for how to get an optimized build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         For example, with my debug build of Open MPI on fairly old
</span><br>
<span class="quotelev1">&gt;         Xeons with 1GB ethernet, I'm getting the following PingPong
</span><br>
<span class="quotelev1">&gt;         results (note: this is a debug build; it's not even an
</span><br>
<span class="quotelev1">&gt;         optimized build):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         $ mpirun --mca btl tcp,self --bynode -np 2 --mca
</span><br>
<span class="quotelev1">&gt;         btl_tcp_if_include eth0 hostname
</span><br>
<span class="quotelev1">&gt;         svbu-mpi008
</span><br>
<span class="quotelev1">&gt;         svbu-mpi009
</span><br>
<span class="quotelev1">&gt;         $ mpirun --mca btl tcp,self --bynode -np 2 --mca
</span><br>
<span class="quotelev1">&gt;         btl_tcp_if_include eth0 IMB-MPI1 PingPong
</span><br>
<span class="quotelev1">&gt;         #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         #    Intel (R) MPI Benchmark Suite V3.2, MPI-1 part
</span><br>
<span class="quotelev1">&gt;         #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         ...
</span><br>
<span class="quotelev1">&gt;         #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt;         # #processes = 2
</span><br>
<span class="quotelev1">&gt;         #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;                     0         1000        57.31         0.00
</span><br>
<span class="quotelev1">&gt;                     1         1000        57.71         0.02
</span><br>
<span class="quotelev1">&gt;                     2         1000        57.73         0.03
</span><br>
<span class="quotelev1">&gt;                     4         1000        57.81         0.07
</span><br>
<span class="quotelev1">&gt;                     8         1000        57.78         0.13
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         With an optimized build, it shaves off only a few us (which
</span><br>
<span class="quotelev1">&gt;         isn't too important in this case, but it does matter in the
</span><br>
<span class="quotelev1">&gt;         low-latency transport cases):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;         #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt;         # #processes = 2
</span><br>
<span class="quotelev1">&gt;         #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev1">&gt;                     0         1000        54.62         0.00
</span><br>
<span class="quotelev1">&gt;                     1         1000        54.92         0.02
</span><br>
<span class="quotelev1">&gt;                     2         1000        55.15         0.03
</span><br>
<span class="quotelev1">&gt;                     4         1000        55.16         0.07
</span><br>
<span class="quotelev1">&gt;                     8         1000        55.15         0.14
</span><br>
<span class="quotelev1">&gt;         -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi, I think these models are reasonably new :)
</span><br>
<span class="quotelev1">&gt;     The result I gave you, they are tested on 2 processes but on 2
</span><br>
<span class="quotelev1">&gt;     different servers. I get that the result you showed is 2 processes
</span><br>
<span class="quotelev1">&gt;     on one machine?
</span><br>
<span class="quotelev1">&gt;     But I did build with debug enabled, I will try optimize then :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     BTW, I forgot to tell you about SM &amp; TIPC. Unfortunately, TIPC
</span><br>
<span class="quotelev1">&gt;     does not beat SM...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /Xin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9726/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9726/tcp_0830">tcp_0830</a>
</ul>
<!-- attachment="tcp_0830" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9726/tipc_0830">tipc_0830</a>
</ul>
<!-- attachment="tipc_0830" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9726/tipc_client.c">tipc_client.c</a>
</ul>
<!-- attachment="tipc_client.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9726/tipc_server.c">tipc_server.c</a>
</ul>
<!-- attachment="tipc_server.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9728.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9728.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
