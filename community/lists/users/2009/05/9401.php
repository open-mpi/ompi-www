<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 08:58:44 2009" -->
<!-- isoreceived="20090520125844" -->
<!-- sent="Wed, 20 May 2009 08:58:29 -0400" -->
<!-- isosent="20090520125829" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A13FE75.1040102_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d21ea44c0905200448v525fe834kd98c189a14333b12_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 08:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The correct MCA parameters are the following:
<br>
-mca coll_tuned_use_dynamic_rules 1
<br>
-mca coll_tuned_dynamic_rules_filename ./dyn_rules
<br>
<p>You can also run the following command:
<br>
ompi_info -mca coll_tuned_use_dynamic_rules 1 -param coll tuned
<br>
This will give some insight into all the various algorithms that make up 
<br>
the tuned collectives.
<br>
<p>If I am understanding what is happening, it looks like the original 
<br>
MPI_Alltoall made use of three algorithms.  (You can look in 
<br>
coll_tuned_decision_fixed.c)
<br>
<p>If message size &lt; 200 or communicator size &gt; 12
<br>
&nbsp;&nbsp;&nbsp;bruck
<br>
else if message size &lt; 3000
<br>
&nbsp;&nbsp;&nbsp;basic linear
<br>
else
<br>
&nbsp;&nbsp;&nbsp;pairwise
<br>
end
<br>
<p>With the file Pavel has provided things have changed to the following. 
<br>
(maybe someone can confirm)
<br>
<p>If message size &lt; 8192
<br>
&nbsp;&nbsp;&nbsp;bruck
<br>
else
<br>
&nbsp;&nbsp;&nbsp;pairwise
<br>
end
<br>
<p>Rolf
<br>
<p><p>On 05/20/09 07:48, Roman Martonak wrote:
<br>
<span class="quotelev1">&gt; Many thanks for the highly helpful analysis. Indeed, what Peter says
</span><br>
<span class="quotelev1">&gt; seems to be precisely the case here. I tried to run the 32 waters test
</span><br>
<span class="quotelev1">&gt; on 48 cores now, with the original cutoff of 100 Ry, and with slightly
</span><br>
<span class="quotelev1">&gt; increased one of 110 Ry. Normally with larger cutoff it should
</span><br>
<span class="quotelev1">&gt; obviously take more time for one step. Increasing cutoff however also
</span><br>
<span class="quotelev1">&gt; increases the size of the data buffer and it appears just to cross the
</span><br>
<span class="quotelev1">&gt; packet size threshold for different behaviour (test was ran with
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; cutoff 100Ry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time per 1 step is 2.869 s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM           151583. BYTES               2211.  =
</span><br>
<span class="quotelev1">&gt; = ALL TO ALL COMM            16.741  MB/S          20.020 SEC  =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; cutoff 110 Ry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time per 1 step is 1.879 s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM           167057. BYTES               2211.  =
</span><br>
<span class="quotelev1">&gt;  = ALL TO ALL COMM            43.920  MB/S           8.410 SEC  =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; so it actually runs much faster and  ALL TO ALL COMM is 2.6 times
</span><br>
<span class="quotelev1">&gt; faster. In my case the threshold seems to be somewhere between
</span><br>
<span class="quotelev1">&gt; 167057/48 = 3 480 and 151583/48 = 3 157 bytes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saved the text that Pavel suggested
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 # num of collectives
</span><br>
<span class="quotelev1">&gt; 3 # ID = 3 Alltoall collective (ID in coll_tuned.h)
</span><br>
<span class="quotelev1">&gt; 1 # number of com sizes
</span><br>
<span class="quotelev1">&gt; 64 # comm size 8
</span><br>
<span class="quotelev1">&gt; 2 # number of msg sizes
</span><br>
<span class="quotelev1">&gt; 0 3 0 0 # for message size 0, bruck 1, topo 0, 0 segmentation
</span><br>
<span class="quotelev1">&gt; 8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
</span><br>
<span class="quotelev1">&gt; # end of first collective
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to the file dyn_rules and tried to run appending the options
</span><br>
<span class="quotelev1">&gt; &quot;--mca use_dynamic_rules 1 --mca dynamic_rules_filename ./dyn_rules&quot; to mpirun
</span><br>
<span class="quotelev1">&gt; but it does not make any change. Is this the correct syntax to enable
</span><br>
<span class="quotelev1">&gt; the rules ?
</span><br>
<span class="quotelev1">&gt; And will the above sample file shift the threshold to lower values (to
</span><br>
<span class="quotelev1">&gt; what value) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Roman
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 20, 2009 at 10:39 AM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 19 May 2009, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, May 19, 2009 at 3:29 PM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3.2                           time per one MD step is 3.66 s
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    ELAPSED TIME :    0 HOURS  1 MINUTES 25.90 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  = ALL TO ALL COMM           102033. BYTES               4221.  =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  = ALL TO ALL COMM             7.802  MB/S          55.200 SEC  =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With TASKGROUP=2 the summary looks as follows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  = ALL TO ALL COMM           231821. BYTES               4221.  =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  = ALL TO ALL COMM            82.716  MB/S          11.830 SEC  =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wow, according to this it takes 1/5th the time to do the same number (4221)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of alltoalls if the size is (roughly) doubled... (ten times better
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance with the larger transfer size)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Something is not quite right, could you possibly try to run just the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alltoalls like I suggested in my previous e-mail?
</span><br>
<span class="quotelev2">&gt;&gt; I was curious so I ran som tests. First it seems that the size reported by
</span><br>
<span class="quotelev2">&gt;&gt; CPMD is the total size of the data buffer not the message size. Running
</span><br>
<span class="quotelev2">&gt;&gt; alltoalls with 231821/64 and 102033/64 gives this (on a similar setup):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 1595 B :  36.5 Mbytes/s       time was:  23.3 s
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 3623 B : 125.4 Mbytes/s       time was:  15.4 s
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 1595 B :  36.4 Mbytes/s       time was:  23.3 s
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 3623 B : 125.6 Mbytes/s       time was:  15.3 s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it does seem that OpenMPI has some problems with small alltoalls. It is
</span><br>
<span class="quotelev2">&gt;&gt; obviously broken when you can get things across faster by sending more...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a reference I ran with a commercial MPI using the same program and node-set
</span><br>
<span class="quotelev2">&gt;&gt; (I did not have MVAPICH nor IntelMPI on this system):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 1595 B :  71.4 Mbytes/s       time was:  11.9 s
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 3623 B : 125.8 Mbytes/s       time was:  15.3 s
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 1595 B :  71.1 Mbytes/s       time was:  11.9 s
</span><br>
<span class="quotelev2">&gt;&gt; bw for   4221    x 3623 B : 125.5 Mbytes/s       time was:  15.3 s
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To see when OpenMPI falls over I ran with an increasing packet size:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2900 B :  59.8 Mbytes/s       time was:  61.2 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2925 B :  59.2 Mbytes/s       time was:  62.2 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2950 B :  59.4 Mbytes/s       time was:  62.6 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2975 B :  58.5 Mbytes/s       time was:  64.1 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 3000 B : 113.5 Mbytes/s       time was:  33.3 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 3100 B : 116.1 Mbytes/s       time was:  33.6 ms
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be for packets with 1000Bytes &lt; size &lt; 3000Bytes with a
</span><br>
<span class="quotelev2">&gt;&gt; hard edge at 3000Bytes. Your CPMD was communicating at more or less the worst
</span><br>
<span class="quotelev2">&gt;&gt; case packet size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These are the figures for my &quot;reference&quot; MPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2900 B : 110.3 Mbytes/s       time was:  33.1 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2925 B : 110.4 Mbytes/s       time was:  33.4 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2950 B : 111.5 Mbytes/s       time was:  33.3 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 2975 B : 112.4 Mbytes/s       time was:  33.4 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 3000 B : 118.2 Mbytes/s       time was:  32.0 ms
</span><br>
<span class="quotelev2">&gt;&gt; bw for   10      x 3100 B : 114.1 Mbytes/s       time was:  34.2 ms
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setup-details:
</span><br>
<span class="quotelev2">&gt;&gt; hw: dual socket quad core harpertowns with ConnectX IB and 1:1 2-level tree
</span><br>
<span class="quotelev2">&gt;&gt; sw: CentOS-5.3 x86_64 with OpenMPI-1.3b2 (did not have time to try 1.3.2) on
</span><br>
<span class="quotelev2">&gt;&gt; OFED from CentOS (1.3.2-ish I think).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Peter
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
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
