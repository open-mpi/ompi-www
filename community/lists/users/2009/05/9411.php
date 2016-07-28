<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 14:27:27 2009" -->
<!-- isoreceived="20090520182727" -->
<!-- sent="Wed, 20 May 2009 20:27:22 +0200" -->
<!-- isosent="20090520182722" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="d21ea44c0905201127s7786d194i2163f7ab5987fbaf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A143B7A.8020203_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2009-05-20 14:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to run with the first dynamic rules file that Pavel proposed
<br>
and it works, the time per one MD step on 48 cores decreased from 2.8
<br>
s to 1.8 s as expected. It was clearly the basic linear algorithm that
<br>
was causing the problem. I will check the performance of bruck and
<br>
pairwise on my HW. It would be nice if it could be tuned further.
<br>
<p>Thanks
<br>
<p>Roman
<br>
<p>On Wed, May 20, 2009 at 7:18 PM, Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Tomorrow I will add some printf to collective code and check what really
</span><br>
<span class="quotelev1">&gt; happens there...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday 20 May 2009, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Disabling basic_linear seems like a good idea but your config file sets
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the cut-off at 128 Bytes for 64-ranks (the field you set to 8192 seems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; result in a message size of that value divided by the number of ranks).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my testing bruck seems to win clearly (at least for 64 ranks on my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; up to 2048. Hence, the following line may be better:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;131072 2 0 0 # switch to pair wise for size 128K/nranks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Disclaimer: I guess this could differ quite a bit for nranks!=64 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different btls.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds strange for me. From the code is looks that we take the threshold
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is without dividing by number of ranks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting, I may have had to little or too much coffe but the figures in
</span><br>
<span class="quotelev2">&gt;&gt; my previous e-mail (3rd run, bruckto2k_pair) was run with the above line.
</span><br>
<span class="quotelev2">&gt;&gt; And it very much looks like it switched at 128K/64=2K, not at 128K (which
</span><br>
<span class="quotelev2">&gt;&gt; would have been above my largest size of 3000 and as such equiv. to
</span><br>
<span class="quotelev2">&gt;&gt; all_bruck).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also ran tests with:
</span><br>
<span class="quotelev2">&gt;&gt; &#160;8192 2 0 0 # ...
</span><br>
<span class="quotelev2">&gt;&gt; And it seemed to switch between 10 Bytes and 500 Bytes (most likely then
</span><br>
<span class="quotelev2">&gt;&gt; at 8192/64=128).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My testprogram calls MPI_Alltoall like this:
</span><br>
<span class="quotelev2">&gt;&gt; &#160;time1 = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt; &#160;for (i = 0; i &lt; repetitions; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;MPI_Alltoall(sbuf, message_size, MPI_CHAR,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; rbuf, message_size, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; &#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#160;time2 = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Peter
</span><br>
<span class="quotelev2">&gt;&gt; &#160;------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
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
