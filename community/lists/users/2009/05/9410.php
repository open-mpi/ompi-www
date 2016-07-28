<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 13:18:58 2009" -->
<!-- isoreceived="20090520171858" -->
<!-- sent="Wed, 20 May 2009 20:18:50 +0300" -->
<!-- isosent="20090520171850" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A143B7A.8020203_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200905201912.59373.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2009-05-20 13:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tomorrow I will add some printf to collective code and check what really 
<br>
happens there...
<br>
<p>Pasha
<br>
<p>Peter Kjellstrom wrote:
<br>
<span class="quotelev1">&gt; On Wednesday 20 May 2009, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Disabling basic_linear seems like a good idea but your config file sets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cut-off at 128 Bytes for 64-ranks (the field you set to 8192 seems to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result in a message size of that value divided by the number of ranks).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my testing bruck seems to win clearly (at least for 64 ranks on my IB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; up to 2048. Hence, the following line may be better:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  131072 2 0 0 # switch to pair wise for size 128K/nranks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Disclaimer: I guess this could differ quite a bit for nranks!=64 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different btls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Sounds strange for me. From the code is looks that we take the threshold as
</span><br>
<span class="quotelev2">&gt;&gt; is without dividing by number of ranks.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting, I may have had to little or too much coffe but the figures in my 
</span><br>
<span class="quotelev1">&gt; previous e-mail (3rd run, bruckto2k_pair) was run with the above line. And it 
</span><br>
<span class="quotelev1">&gt; very much looks like it switched at 128K/64=2K, not at 128K (which would have 
</span><br>
<span class="quotelev1">&gt; been above my largest size of 3000 and as such equiv. to all_bruck).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also ran tests with:
</span><br>
<span class="quotelev1">&gt;  8192 2 0 0 # ...
</span><br>
<span class="quotelev1">&gt; And it seemed to switch between 10 Bytes and 500 Bytes (most likely then at 
</span><br>
<span class="quotelev1">&gt; 8192/64=128).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My testprogram calls MPI_Alltoall like this:
</span><br>
<span class="quotelev1">&gt;   time1 = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;   for (i = 0; i &lt; repetitions; i++) {
</span><br>
<span class="quotelev1">&gt;     MPI_Alltoall(sbuf, message_size, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                  rbuf, message_size, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   time2 = MPI_Wtime();
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
<li><strong>Next message:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
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
