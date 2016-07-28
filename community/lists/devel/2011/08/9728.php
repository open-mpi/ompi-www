<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 12:40:58 2011" -->
<!-- isoreceived="20110830164058" -->
<!-- sent="Tue, 30 Aug 2011 12:40:53 -0400" -->
<!-- isosent="20110830164053" -->
<!-- name="teng ma" -->
<!-- email="xiaok1981_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="CANQYCiZ9QB+Q1kA_RQw33ApdJULN5j2_Sn+X1BNHmXMXz=z_9w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E5CD01E.3090702_at_ericsson.com" -->
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
<strong>Date:</strong> 2011-08-30 12:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9729.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the links.
<br>
<p>I found a link(below) to compare TIPC, TCP and SCTP. But it uses some old
<br>
version of TIPC(1.7.3).  Do you have any similar tests but on the latest
<br>
version of TIPC, TCP and SCTP.  That will be more helpful to convince people
<br>
to use TIPC.
<br>
<p>Another thing I am interested is whether or not TIPC has some
<br>
internal/underlying mechanism  to manage multiple network interfaces on
<br>
single node, e.g. automatic load balance between multiple network cards.
<br>
<p><a href="http://www.strlen.de/tipc/">http://www.strlen.de/tipc/</a>
<br>
<p>Teng
<br>
On Tue, Aug 30, 2011 at 7:57 AM, Xin He &lt;xin.i.he_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Yes, it is Gigabytes Ethernet. I configure ompi again using &quot;./configure
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f90 --disable-mpi-f77 --disable-mpi-cxx --disable-vt
</span><br>
<span class="quotelev1">&gt; --disable-io-romio --prefix=/usr --with-platform=optimized&quot;
</span><br>
<span class="quotelev1">&gt; and run IMB-MPI1 again with &quot;mpirun --mca btl tcp,self -n 2 --hostfile
</span><br>
<span class="quotelev1">&gt; my_hostfile --bynode ./IMB-MPI1&quot; again, the result does not seem very
</span><br>
<span class="quotelev1">&gt; different though...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About TIPC, maybe this article can explains more:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kernel.org/doc/ols/2004/ols2004v2-pages-61-70.pdf">http://www.kernel.org/doc/ols/2004/ols2004v2-pages-61-70.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To use TIPC, you use &quot;tipcutil&quot; to configure:
</span><br>
<span class="quotelev1">&gt; I first connect 2 machines directly with wires
</span><br>
<span class="quotelev1">&gt; 1. set tipc address of 2 PC. Say &lt;1.1.1&gt; and &lt;1.1.2&gt; respectively and with
</span><br>
<span class="quotelev1">&gt; the same Network ID
</span><br>
<span class="quotelev1">&gt; 2. &quot;tipc-config -v -i -be=eth:eth0,eth:eth1&quot; at each machine to set the
</span><br>
<span class="quotelev1">&gt; bears. Check
</span><br>
<span class="quotelev1">&gt; <a href="http://tipc.sourceforge.net/doc/tipc_1.7_users_guide.html#installation">http://tipc.sourceforge.net/doc/tipc_1.7_users_guide.html#installation</a> for
</span><br>
<span class="quotelev1">&gt; more information
</span><br>
<span class="quotelev1">&gt; 3. &quot;tipc-config -l&quot; to check links. If successful, you should see:
</span><br>
<span class="quotelev1">&gt; ehhexxn_at_node2:~/git/test_ompi/IMB_3.2/src$ tipc-config -l
</span><br>
<span class="quotelev1">&gt; Links:
</span><br>
<span class="quotelev1">&gt; multicast-link: up
</span><br>
<span class="quotelev1">&gt; 1.1.2:eth0-1.1.1:eth0: up
</span><br>
<span class="quotelev1">&gt; 1.1.2:eth1-1.1.1:eth1: up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the attachment, there are sample programs using TIPC that can be used to
</span><br>
<span class="quotelev1">&gt; test TIPC environment :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Xin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/29/2011 03:22 PM, teng ma wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is your interconnect Gigabytes Ethernet? It's very surprised to see TCP BTL
</span><br>
<span class="quotelev1">&gt; just got 33MBytes peak BW on your cluster.  I did a similar test on an amd
</span><br>
<span class="quotelev1">&gt; cluster with gigabytes Ethernet. As following shows, the TCP BTL's BW is
</span><br>
<span class="quotelev1">&gt; similar with your tipc(112MBytes/s).   Could you redo the test with 2
</span><br>
<span class="quotelev1">&gt; processes spawned, 2 nodes in your machinefile and enabling --bynode?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like your tipc BTL is pretty good at message size between 8K and
</span><br>
<span class="quotelev1">&gt; 512K.  Can you tell us more about difference between TIPC and TCP protocol
</span><br>
<span class="quotelev1">&gt; stacks?  Any special configure needed to enable your tipc?  Maybe you can
</span><br>
<span class="quotelev1">&gt; write a module in Netpipe( similar to NPTcp )to test raw performance on both
</span><br>
<span class="quotelev1">&gt; TCP and TIPC without MPI.
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
<span class="quotelev1">&gt; On Mon, Aug 29, 2011 at 3:51 AM, Xin He &lt;xin.i.he_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/25/2011 03:14 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 25, 2011, at 8:25 AM, Xin He wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Can you edit your configure.m4 directly and test it and whatnot?  I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; provided the configure.m4 as a starting point for you.  :-)  It shouldn't be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hard to make it check linux/tipc.h instead of tipc.h.  I'm happy to give you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; direct write access to the bitbucket, if you want it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think me having write access is convenient for both of us :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sure -- what's your bitbucket account ID?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It's &quot;letter113&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   As we've discussed off-list, we can't take the code upstream until the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; contributor agreement is signed, unfortunately.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  The agreement thing is ongoing right now, but it may take some time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No worries.  Lawyers tend to take time when reviewing this stuff; we've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seen this pattern in most organizations who sign the OMPI agreement.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  But to save time, can you guys do some test on TIPC BTL, so that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when the agreement is ready, the code can be used?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know if any of us has the TIPC support libraries installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It is easy to have TIPC support. It is within the kernel actually. To get
</span><br>
<span class="quotelev2">&gt;&gt; TIPC working, you only have to configure it by using &quot;tipc-config&quot;. Maybe
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; can check this doc for information:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://tipc.sourceforge.net/doc/Users_Guide.txt">http://tipc.sourceforge.net/doc/Users_Guide.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  So... what *is* TIPC?  Is there a writeup anywhere that we can read about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what it is / how it works?  For example, what makes TIPC perform better than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Sure.  Search &quot;TIPC: Providing Communication for Linux Clusters&quot;. It is a
</span><br>
<span class="quotelev2">&gt;&gt; paper written by the author of TIPC, explaining basic stuff about TIPC,
</span><br>
<span class="quotelev2">&gt;&gt; should be very useful. And you can visit TIPC homepage:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://tipc.sourceforge.net/">http://tipc.sourceforge.net/</a> .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I have done some tests using tools like NetPIPE, osu and IMB and the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; result shows that TIPC BTL has a better performance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; than TCP BTL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Great!  Can you share any results?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, please check the appendix for the results using IMB 3.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have done the tests on 2 computers. Dell SC1435
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dual-Core AMD Opteron(tm) Processor 2212 HE x 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4 GB Mem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ubuntu Server 10.04 LTS 32-bit Linux 2.6.32-24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not familiar with the Dell or Opteron lines -- how recent are those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; models?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ask because your TCP latency is a bit high (about 85us in 2-process IMB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PingPong); it might suggest older hardware.  Or you may have built a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugging version of Open MPI (if you have a .svn or .hg checkout, that's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the default). See the HACKING top-level file for how to get an optimized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, with my debug build of Open MPI on fairly old Xeons with 1GB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ethernet, I'm getting the following PingPong results (note: this is a debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build; it's not even an optimized build):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svbu-mpi008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svbu-mpi009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB-MPI1 PingPong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #    Intel (R) MPI Benchmark Suite V3.2, MPI-1 part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # #processes = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             0         1000        57.31         0.00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             1         1000        57.71         0.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             2         1000        57.73         0.03
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             4         1000        57.81         0.07
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             8         1000        57.78         0.13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With an optimized build, it shaves off only a few us (which isn't too
</span><br>
<span class="quotelev3">&gt;&gt;&gt; important in this case, but it does matter in the low-latency transport
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cases):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # #processes = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             0         1000        54.62         0.00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             1         1000        54.92         0.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             2         1000        55.15         0.03
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             4         1000        55.16         0.07
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             8         1000        55.15         0.14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hi, I think these models are reasonably new :)
</span><br>
<span class="quotelev2">&gt;&gt; The result I gave you, they are tested on 2 processes but on 2 different
</span><br>
<span class="quotelev2">&gt;&gt; servers. I get that the result you showed is 2 processes on one machine?
</span><br>
<span class="quotelev2">&gt;&gt; But I did build with debug enabled, I will try optimize then :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I forgot to tell you about SM &amp; TIPC. Unfortunately, TIPC does not
</span><br>
<span class="quotelev2">&gt;&gt; beat SM...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Xin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9729.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25093"</a>
<li><strong>Previous message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
