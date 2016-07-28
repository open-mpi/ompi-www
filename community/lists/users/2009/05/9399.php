<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 06:08:36 2009" -->
<!-- isoreceived="20090520100836" -->
<!-- sent="Wed, 20 May 2009 13:08:24 +0300" -->
<!-- isosent="20090520100824" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A13D698.7080003_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 06:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Default algorithm thresholds in mvapich are different from ompi.
<br>
Using tunned collectives in Open MPI you may configure the Open MPI 
<br>
Alltoall threshold as Mvapich defaults.
<br>
The follow mca parameters configure Open MPI to use custom rules that 
<br>
are defined in configure(txt) file.
<br>
&quot;--mca use_dynamic_rules 1 --mca dynamic_rules_filename&quot;
<br>
<p>Here is example of dynamic_rules_filename that should make Ompi Alltoall 
<br>
tuning similar to Mvapich:
<br>
1 # num of collectives
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
<p><p>Thanks,
<br>
Pasha
<br>
<p>Peter Kjellstrom wrote:
<br>
<span class="quotelev1">&gt; On Tuesday 19 May 2009, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, May 19, 2009 at 3:29 PM, Peter Kjellstrom &lt;cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tuesday 19 May 2009, Roman Martonak wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.3.2                           time per one MD step is 3.66 s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    ELAPSED TIME :    0 HOURS  1 MINUTES 25.90 SECONDS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  = ALL TO ALL COMM           102033. BYTES               4221.  =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  = ALL TO ALL COMM             7.802  MB/S          55.200 SEC  =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With TASKGROUP=2 the summary looks as follows
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  = ALL TO ALL COMM           231821. BYTES               4221.  =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  = ALL TO ALL COMM            82.716  MB/S          11.830 SEC  =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt; bw for   4221    x 1595 B :  36.5 Mbytes/s       time was:  23.3 s
</span><br>
<span class="quotelev1">&gt; bw for   4221    x 3623 B : 125.4 Mbytes/s       time was:  15.4 s
</span><br>
<span class="quotelev1">&gt; bw for   4221    x 1595 B :  36.4 Mbytes/s       time was:  23.3 s
</span><br>
<span class="quotelev1">&gt; bw for   4221    x 3623 B : 125.6 Mbytes/s       time was:  15.3 s
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
<span class="quotelev1">&gt; bw for   4221    x 1595 B :  71.4 Mbytes/s       time was:  11.9 s
</span><br>
<span class="quotelev1">&gt; bw for   4221    x 3623 B : 125.8 Mbytes/s       time was:  15.3 s
</span><br>
<span class="quotelev1">&gt; bw for   4221    x 1595 B :  71.1 Mbytes/s       time was:  11.9 s
</span><br>
<span class="quotelev1">&gt; bw for   4221    x 3623 B : 125.5 Mbytes/s       time was:  15.3 s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To see when OpenMPI falls over I ran with an increasing packet size:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bw for   10      x 2900 B :  59.8 Mbytes/s       time was:  61.2 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 2925 B :  59.2 Mbytes/s       time was:  62.2 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 2950 B :  59.4 Mbytes/s       time was:  62.6 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 2975 B :  58.5 Mbytes/s       time was:  64.1 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 3000 B : 113.5 Mbytes/s       time was:  33.3 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 3100 B : 116.1 Mbytes/s       time was:  33.6 ms
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
<span class="quotelev1">&gt; bw for   10      x 2900 B : 110.3 Mbytes/s       time was:  33.1 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 2925 B : 110.4 Mbytes/s       time was:  33.4 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 2950 B : 111.5 Mbytes/s       time was:  33.3 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 2975 B : 112.4 Mbytes/s       time was:  33.4 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 3000 B : 118.2 Mbytes/s       time was:  32.0 ms
</span><br>
<span class="quotelev1">&gt; bw for   10      x 3100 B : 114.1 Mbytes/s       time was:  34.2 ms
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9400.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
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
