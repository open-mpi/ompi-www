<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 13:13:02 2009" -->
<!-- isoreceived="20090520171302" -->
<!-- sent="Wed, 20 May 2009 19:12:55 +0200" -->
<!-- isosent="20090520171255" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="200905201912.59373.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A1433C1.5030804_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 13:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 20 May 2009, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev2">&gt; &gt; Disabling basic_linear seems like a good idea but your config file sets
</span><br>
<span class="quotelev2">&gt; &gt; the cut-off at 128 Bytes for 64-ranks (the field you set to 8192 seems to
</span><br>
<span class="quotelev2">&gt; &gt; result in a message size of that value divided by the number of ranks).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my testing bruck seems to win clearly (at least for 64 ranks on my IB)
</span><br>
<span class="quotelev2">&gt; &gt; up to 2048. Hence, the following line may be better:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  131072 2 0 0 # switch to pair wise for size 128K/nranks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Disclaimer: I guess this could differ quite a bit for nranks!=64 and
</span><br>
<span class="quotelev2">&gt; &gt; different btls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds strange for me. From the code is looks that we take the threshold as
</span><br>
<span class="quotelev1">&gt; is without dividing by number of ranks.
</span><br>
<p>Interesting, I may have had to little or too much coffe but the figures in my 
<br>
previous e-mail (3rd run, bruckto2k_pair) was run with the above line. And it 
<br>
very much looks like it switched at 128K/64=2K, not at 128K (which would have 
<br>
been above my largest size of 3000 and as such equiv. to all_bruck).
<br>
<p>I also ran tests with:
<br>
&nbsp;8192 2 0 0 # ...
<br>
And it seemed to switch between 10 Bytes and 500 Bytes (most likely then at 
<br>
8192/64=128).
<br>
<p>My testprogram calls MPI_Alltoall like this:
<br>
&nbsp;&nbsp;time1 = MPI_Wtime();
<br>
&nbsp;&nbsp;for (i = 0; i &lt; repetitions; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alltoall(sbuf, message_size, MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf, message_size, MPI_CHAR, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;time2 = MPI_Wtime();
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9409/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9410.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
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
