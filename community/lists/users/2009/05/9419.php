<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 12:08:45 2009" -->
<!-- isoreceived="20090525160845" -->
<!-- sent="Mon, 25 May 2009 18:08:38 +0200" -->
<!-- isosent="20090525160838" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="d21ea44c0905250908w5eab5afbh8900f96e792e5901_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A14FE3A.7000904_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2009-05-25 12:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
<li><strong>Previous message:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>In reply to:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
<li><strong>Reply:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried the settings suggested by Peter and it indeed helps to improve
<br>
much more. Running on 64 cores with the line (in dyn_rules)
<br>
<p>8192 2 0 0 # 8k+, pairwise 2, no topo or segmentation
<br>
<p>I get the following
<br>
<p>bw for   100     x 10 B :   1.9 Mbytes/s         time was:  65.4 ms
<br>
bw for   100     x 20 B :   3.7 Mbytes/s         time was:  67.9 ms
<br>
bw for   100     x 50 B :   9.5 Mbytes/s         time was:  66.5 ms
<br>
bw for   100     x 100 B :  20.1 Mbytes/s        time was:  62.8 ms
<br>
bw for   100     x 128 B :   1.8 Mbytes/s        time was: 873.2 ms
<br>
bw for   100     x 200 B :   2.9 Mbytes/s        time was: 859.6 ms
<br>
bw for   100     x 256 B :   3.7 Mbytes/s        time was: 871.0 ms
<br>
bw for   100     x 500 B :   7.4 Mbytes/s        time was: 848.6 ms
<br>
bw for   100     x 1000 B :  15.5 Mbytes/s       time was: 813.8 ms
<br>
bw for   100     x 1500 B :  24.2 Mbytes/s       time was: 780.8 ms
<br>
bw for   100     x 2000 B :  34.3 Mbytes/s       time was: 734.6 ms
<br>
bw for   100     x 3000 B :  62.2 Mbytes/s       time was: 607.6 ms
<br>
bw for   100     x 4096 B : 100.2 Mbytes/s       time was: 515.0 ms
<br>
bw for   100     x 5000 B : 116.1 Mbytes/s       time was: 542.5 ms
<br>
bw for   100     x 10000 B : 166.9 Mbytes/s      time was: 755.0 ms
<br>
bw for   100     x 20000 B :  64.7 Mbytes/s      time was:   3.9 s
<br>
bw for   100     x 50000 B : 125.5 Mbytes/s      time was:   5.0 s
<br>
<p>so it seems indeed to switch at 8192/64 = 128 bytes and the
<br>
performance is poor (though still much better for CPMD than with
<br>
default openmpi-1.3.2 settings)
<br>
<p>On the other hand, with the line
<br>
262144 2 0 0 # 8k+, pairwise 2, no topo or segmentation
<br>
<p>I get far better numbers
<br>
<p>bw for   100     x 10 B :   1.9 Mbytes/s         time was:  67.0 ms
<br>
bw for   100     x 20 B :   3.8 Mbytes/s         time was:  66.7 ms
<br>
bw for   100     x 50 B :   9.6 Mbytes/s         time was:  65.9 ms
<br>
bw for   100     x 100 B :  19.7 Mbytes/s        time was:  64.1 ms
<br>
bw for   100     x 128 B :  23.5 Mbytes/s        time was:  68.6 ms
<br>
bw for   100     x 200 B :  36.6 Mbytes/s        time was:  68.8 ms
<br>
bw for   100     x 256 B :  43.7 Mbytes/s        time was:  73.7 ms
<br>
bw for   100     x 500 B :  31.4 Mbytes/s        time was: 200.7 ms
<br>
bw for   100     x 1000 B :  52.7 Mbytes/s       time was: 239.3 ms
<br>
bw for   100     x 1500 B :  72.5 Mbytes/s       time was: 260.9 ms
<br>
bw for   100     x 2000 B :  75.1 Mbytes/s       time was: 335.8 ms
<br>
bw for   100     x 3000 B :  74.8 Mbytes/s       time was: 505.6 ms
<br>
bw for   100     x 4096 B :  99.9 Mbytes/s       time was: 516.4 ms
<br>
bw for   100     x 5000 B : 119.3 Mbytes/s       time was: 528.1 ms
<br>
bw for   100     x 10000 B : 167.5 Mbytes/s      time was: 752.4 ms
<br>
bw for   100     x 20000 B :  64.9 Mbytes/s      time was:   3.9 s
<br>
bw for   100     x 50000 B : 126.0 Mbytes/s      time was:   5.0 s
<br>
<p>Concerning the 32 waters CPMD time per step, with default settings it
<br>
was 3.664 s, with threshold of 8192 it was about 2.55 s and finally
<br>
with threshold of  262144
<br>
it is now 1.56 s, the same as with IntelMPI (and better than default
<br>
mvapich which is 2.55 s)
<br>
<p>Roman
<br>
<p><p>On Thu, May 21, 2009 at 9:09 AM, Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to run with the first dynamic rules file that Pavel proposed
</span><br>
<span class="quotelev2">&gt;&gt; and it works, the time per one MD step on 48 cores decreased from 2.8
</span><br>
<span class="quotelev2">&gt;&gt; s to 1.8 s as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good news :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Roman
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 20, 2009 at 7:18 PM, Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tomorrow I will add some printf to collective code and check what really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens there...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Peter Kjellstrom wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wednesday 20 May 2009, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Disabling basic_linear seems like a good idea but your config file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sets
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the cut-off at 128 Bytes for 64-ranks (the field you set to 8192 seems
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; result in a message size of that value divided by the number of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ranks).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In my testing bruck seems to win clearly (at least for 64 ranks on my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; IB)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; up to 2048. Hence, the following line may be better:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160;131072 2 0 0 # switch to pair wise for size 128K/nranks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Disclaimer: I guess this could differ quite a bit for nranks!=64 and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; different btls.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sounds strange for me. From the code is looks that we take the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; threshold
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is without dividing by number of ranks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interesting, I may have had to little or too much coffe but the figures
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my previous e-mail (3rd run, bruckto2k_pair) was run with the above
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And it very much looks like it switched at 128K/64=2K, not at 128K
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would have been above my largest size of 3000 and as such equiv. to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all_bruck).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also ran tests with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;8192 2 0 0 # ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And it seemed to switch between 10 Bytes and 500 Bytes (most likely then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at 8192/64=128).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My testprogram calls MPI_Alltoall like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;time1 = MPI_Wtime();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;for (i = 0; i &lt; repetitions; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; MPI_Alltoall(sbuf, message_size, MPI_CHAR,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;rbuf, message_size, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;time2 = MPI_Wtime();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /Peter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
<li><strong>Previous message:</strong> <a href="9418.php">St Druid: "Re: [OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>In reply to:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
<li><strong>Reply:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
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
