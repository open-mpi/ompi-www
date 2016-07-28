<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 12:50:57 2009" -->
<!-- isoreceived="20090518165057" -->
<!-- sent="Mon, 18 May 2009 19:50:49 +0300" -->
<!-- isosent="20090518165049" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A1191E9.1090908_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d21ea44c0905180853w47c0f582x3efcc90c87414d5e_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-18 12:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9365.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roman,
<br>
Can you please share with us Mvapich numbers that you get . Also what is 
<br>
mvapich version that you use.
<br>
Default mvapich and openmpi IB tuning is very similar, so it is strange 
<br>
to see so big difference. Do you know what kind of collectives operation 
<br>
is used in this specific application.
<br>
<p>Pasha.
<br>
<p>Roman Martonak wrote:
<br>
<span class="quotelev1">&gt; I've been using --mca mpi_paffinity_alone 1 in all simulations. Concerning &quot;-mca
</span><br>
<span class="quotelev1">&gt;  mpi_leave_pinned 1&quot;, I tried it with openmpi 1.2.X versions and it
</span><br>
<span class="quotelev1">&gt; makes no difference.
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
<span class="quotelev1">&gt; On Mon, May 18, 2009 at 4:57 PM, Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) I was told to add &quot;-mca mpi_leave_pinned 0&quot; to avoid problems with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infinband.  This was with OpenMPI 1.3.1.  Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Actually for 1.2.X version I will recommend you to enable leave pinned &quot;-mca
</span><br>
<span class="quotelev2">&gt;&gt; mpi_leave_pinned 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure if the problems were fixed on 1.3.2, but I am hanging on to that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting just in case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; We had data corruption issue in 1.3.1 but it was resolved in 1.3.2. In 1.3.2
</span><br>
<span class="quotelev2">&gt;&gt; version leave_pinned is enabled by default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I remember correct mvapich enables affinity mode by default, so I can
</span><br>
<span class="quotelev2">&gt;&gt; recommend you to try to enable it too:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--mca mpi_paffinity_alone 1&quot;. For more details please check FAQ -
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha.
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
<li><strong>Next message:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9365.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
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
