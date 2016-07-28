<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 07:48:52 2009" -->
<!-- isoreceived="20090520114852" -->
<!-- sent="Wed, 20 May 2009 13:48:46 +0200" -->
<!-- isosent="20090520114846" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="d21ea44c0905200448v525fe834kd98c189a14333b12_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200905201039.13535.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Roman Martonak (<em>r.martonak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 07:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the highly helpful analysis. Indeed, what Peter says
<br>
seems to be precisely the case here. I tried to run the 32 waters test
<br>
on 48 cores now, with the original cutoff of 100 Ry, and with slightly
<br>
increased one of 110 Ry. Normally with larger cutoff it should
<br>
obviously take more time for one step. Increasing cutoff however also
<br>
increases the size of the data buffer and it appears just to cross the
<br>
packet size threshold for different behaviour (test was ran with
<br>
openmpi-1.3.2).
<br>
<p>--------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
cutoff 100Ry
<br>
<p>time per 1 step is 2.869 s
<br>
<p>&nbsp;= ALL TO ALL COMM           151583. BYTES               2211.  =
<br>
= ALL TO ALL COMM            16.741  MB/S          20.020 SEC  =
<br>
<p>--------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
cutoff 110 Ry
<br>
<p>time per 1 step is 1.879 s
<br>
<p>&nbsp;= ALL TO ALL COMM           167057. BYTES               2211.  =
<br>
&nbsp;= ALL TO ALL COMM            43.920  MB/S           8.410 SEC  =
<br>
<p>--------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
so it actually runs much faster and  ALL TO ALL COMM is 2.6 times
<br>
faster. In my case the threshold seems to be somewhere between
<br>
167057/48 = 3 480 and 151583/48 = 3 157 bytes.
<br>
<p>I saved the text that Pavel suggested
<br>
<p>1 # num of collectives
<br>
3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
<br>
1 # number of com sizes
<br>
64 # comm size 8
<br>
2 # number of msg sizes
<br>
0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
<br>
8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
<br>
# end of first collective
<br>
<p>to the file dyn_rules and tried to run appending the options
<br>
&quot;--mca use_dynamic_rules 1 --mca dynamic_rules_filename ./dyn_rules&quot; to mpirun
<br>
but it does not make any change. Is this the correct syntax to enable
<br>
the rules ?
<br>
And will the above sample file shift the threshold to lower values (to
<br>
what value) ?
<br>
<p>Best regards
<br>
<p>Roman
<br>
<p>On Wed, May 20, 2009 at 10:39 AM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Tuesday 19 May 2009, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, May 19, 2009 at 3:29 PM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; openmpi-1.3.2 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; time per one MD step is 3.66 s
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; &#160; &#160;ELAPSED TIME : &#160; &#160;0 HOURS &#160;1 MINUTES 25.90 SECONDS
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; 102033. BYTES &#160; &#160; &#160; &#160; &#160; &#160; &#160; 4221. &#160;=
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; &#160; 7.802 &#160;MB/S &#160; &#160; &#160; &#160; &#160;55.200 SEC &#160;=
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; With TASKGROUP=2 the summary looks as follows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; 231821. BYTES &#160; &#160; &#160; &#160; &#160; &#160; &#160; 4221. &#160;=
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160;= ALL TO ALL COMM &#160; &#160; &#160; &#160; &#160; &#160;82.716 &#160;MB/S &#160; &#160; &#160; &#160; &#160;11.830 SEC &#160;=
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wow, according to this it takes 1/5th the time to do the same number (4221)
</span><br>
<span class="quotelev2">&gt;&gt; of alltoalls if the size is (roughly) doubled... (ten times better
</span><br>
<span class="quotelev2">&gt;&gt; performance with the larger transfer size)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something is not quite right, could you possibly try to run just the
</span><br>
<span class="quotelev2">&gt;&gt; alltoalls like I suggested in my previous e-mail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was curious so I ran som tests. First it seems that the size reported by
</span><br>
<span class="quotelev1">&gt; CPMD is the total size of the data buffer not the message size. Running
</span><br>
<span class="quotelev1">&gt; alltoalls with 231821/64 and 102033/64 gives this (on a similar setup):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 1595 B : &#160;36.5 Mbytes/s &#160; &#160; &#160; time was: &#160;23.3 s
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 3623 B : 125.4 Mbytes/s &#160; &#160; &#160; time was: &#160;15.4 s
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 1595 B : &#160;36.4 Mbytes/s &#160; &#160; &#160; time was: &#160;23.3 s
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 3623 B : 125.6 Mbytes/s &#160; &#160; &#160; time was: &#160;15.3 s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it does seem that OpenMPI has some problems with small alltoalls. It is
</span><br>
<span class="quotelev1">&gt; obviously broken when you can get things across faster by sending more...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a reference I ran with a commercial MPI using the same program and node-set
</span><br>
<span class="quotelev1">&gt; (I did not have MVAPICH nor IntelMPI on this system):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 1595 B : &#160;71.4 Mbytes/s &#160; &#160; &#160; time was: &#160;11.9 s
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 3623 B : 125.8 Mbytes/s &#160; &#160; &#160; time was: &#160;15.3 s
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 1595 B : &#160;71.1 Mbytes/s &#160; &#160; &#160; time was: &#160;11.9 s
</span><br>
<span class="quotelev1">&gt; bw for &#160; 4221 &#160; &#160;x 3623 B : 125.5 Mbytes/s &#160; &#160; &#160; time was: &#160;15.3 s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To see when OpenMPI falls over I ran with an increasing packet size:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2900 B : &#160;59.8 Mbytes/s &#160; &#160; &#160; time was: &#160;61.2 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2925 B : &#160;59.2 Mbytes/s &#160; &#160; &#160; time was: &#160;62.2 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2950 B : &#160;59.4 Mbytes/s &#160; &#160; &#160; time was: &#160;62.6 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2975 B : &#160;58.5 Mbytes/s &#160; &#160; &#160; time was: &#160;64.1 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 3000 B : 113.5 Mbytes/s &#160; &#160; &#160; time was: &#160;33.3 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 3100 B : 116.1 Mbytes/s &#160; &#160; &#160; time was: &#160;33.6 ms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem seems to be for packets with 1000Bytes &lt; size &lt; 3000Bytes with a
</span><br>
<span class="quotelev1">&gt; hard edge at 3000Bytes. Your CPMD was communicating at more or less the worst
</span><br>
<span class="quotelev1">&gt; case packet size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the figures for my &quot;reference&quot; MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2900 B : 110.3 Mbytes/s &#160; &#160; &#160; time was: &#160;33.1 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2925 B : 110.4 Mbytes/s &#160; &#160; &#160; time was: &#160;33.4 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2950 B : 111.5 Mbytes/s &#160; &#160; &#160; time was: &#160;33.3 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 2975 B : 112.4 Mbytes/s &#160; &#160; &#160; time was: &#160;33.4 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 3000 B : 118.2 Mbytes/s &#160; &#160; &#160; time was: &#160;32.0 ms
</span><br>
<span class="quotelev1">&gt; bw for &#160; 10 &#160; &#160; &#160;x 3100 B : 114.1 Mbytes/s &#160; &#160; &#160; time was: &#160;34.2 ms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setup-details:
</span><br>
<span class="quotelev1">&gt; hw: dual socket quad core harpertowns with ConnectX IB and 1:1 2-level tree
</span><br>
<span class="quotelev1">&gt; sw: CentOS-5.3 x86_64 with OpenMPI-1.3b2 (did not have time to try 1.3.2) on
</span><br>
<span class="quotelev1">&gt; OFED from CentOS (1.3.2-ish I think).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9399.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
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
