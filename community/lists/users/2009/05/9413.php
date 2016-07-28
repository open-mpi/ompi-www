<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 03:09:53 2009" -->
<!-- isoreceived="20090521070953" -->
<!-- sent="Thu, 21 May 2009 10:09:46 +0300" -->
<!-- isosent="20090521070946" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A14FE3A.7000904_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d21ea44c0905201127s7786d194i2163f7ab5987fbaf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-21 03:09:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9414.php">Josh Hursey: "Re: [OMPI users] Bug in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9419.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9419.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I tried to run with the first dynamic rules file that Pavel proposed
</span><br>
<span class="quotelev1">&gt; and it works, the time per one MD step on 48 cores decreased from 2.8
</span><br>
<span class="quotelev1">&gt; s to 1.8 s as expected. 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Good news :-)
<br>
<p>Pasha.
<br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roman
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 20, 2009 at 7:18 PM, Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Tomorrow I will add some printf to collective code and check what really
</span><br>
<span class="quotelev2">&gt;&gt; happens there...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wednesday 20 May 2009, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Disabling basic_linear seems like a good idea but your config file sets
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the cut-off at 128 Bytes for 64-ranks (the field you set to 8192 seems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; result in a message size of that value divided by the number of ranks).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In my testing bruck seems to win clearly (at least for 64 ranks on my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up to 2048. Hence, the following line may be better:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  131072 2 0 0 # switch to pair wise for size 128K/nranks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Disclaimer: I guess this could differ quite a bit for nranks!=64 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different btls.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sounds strange for me. From the code is looks that we take the threshold
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is without dividing by number of ranks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting, I may have had to little or too much coffe but the figures in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my previous e-mail (3rd run, bruckto2k_pair) was run with the above line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And it very much looks like it switched at 128K/64=2K, not at 128K (which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would have been above my largest size of 3000 and as such equiv. to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all_bruck).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also ran tests with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  8192 2 0 0 # ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And it seemed to switch between 10 Bytes and 500 Bytes (most likely then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at 8192/64=128).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My testprogram calls MPI_Alltoall like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  time1 = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  for (i = 0; i &lt; repetitions; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Alltoall(sbuf, message_size, MPI_CHAR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 rbuf, message_size, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  time2 = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Peter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9414.php">Josh Hursey: "Re: [OMPI users] Bug in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9412.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9411.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9419.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9419.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
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
