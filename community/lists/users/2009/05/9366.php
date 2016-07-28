<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 12:21:06 2009" -->
<!-- isoreceived="20090518162106" -->
<!-- sent="Mon, 18 May 2009 12:20:55 -0400" -->
<!-- isosent="20090518162055" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A118AE7.6060709_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 12:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9365.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9365.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roman
<br>
<p>Note that in 1.3.0 and 1.3.1 the default (&quot;-mca mpi_leave_pinned 1&quot;)
<br>
had a glitch.  In my case it appeared as a memory leak.
<br>
<p>See this:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/05/9173.php">http://www.open-mpi.org/community/lists/users/2009/05/9173.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>
<br>
<p>One workaround is to revert to
<br>
&quot;-mca mpi_leave_pinned 0&quot; (which is what I suggested to you)
<br>
when using 1.3.0 or 1.3.1.
<br>
The solution advocated by OpenMPI is to upgrade to 1.3.2.
<br>
<p>You reported you used &quot;1.3&quot;, besides 1.2.6 and 1.2.8.
<br>
If this means that you are using 1.3.0 or 1.3.1,
<br>
you may want to try the workaround or the upgrade,
<br>
regardless of any scaling performance expectations.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p><p>Roman Martonak wrote:
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
<span class="quotelev3">&gt;&gt;&gt; 1) I was told to add &quot;-mca mpi_leave_pinned 0&quot; to avoid problems with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infinband.  This was with OpenMPI 1.3.1.  Not
</span><br>
<span class="quotelev2">&gt;&gt; Actually for 1.2.X version I will recommend you to enable leave pinned &quot;-mca
</span><br>
<span class="quotelev2">&gt;&gt; mpi_leave_pinned 1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure if the problems were fixed on 1.3.2, but I am hanging on to that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting just in case.
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
<li><strong>Next message:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9365.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9365.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
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
