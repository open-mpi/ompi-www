<?
$subject_val = "Re: [OMPI users] Sandy Bridge performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  7 08:28:48 2013" -->
<!-- isoreceived="20130607122848" -->
<!-- sent="Fri, 7 Jun 2013 12:28:26 +0000" -->
<!-- isosent="20130607122826" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sandy Bridge performance question" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA15181_at_HDXDSP53.us.lmco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F66C3E6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sandy Bridge performance question<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-07 08:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>In reply to:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Reply:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My bad. Just a dumb mistake. Load-balance, as Ralph suggested. I had decomposed into 16 equally sized parts which didn't map well to 15 cores.
<br>
<p>Regarding VTune, we have a code that doesn't scale well so that's a good tip.  I have access to VTune, I've used it.  But I only remember looking at OpenMP, I didn't know it could handle MPI runs. That would be great.  Is VampirTrace (?) is another option for identifying communication bottlenecks, serial content, etc.?
<br>
<p>Thanks
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
<br>
Sent: Friday, June 07, 2013 6:00 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Sandy Bridge performance question
<br>
<p>+1
<br>
<p>Depending on how much you care, you might also want to look at some performance analysis tools to look and see what is happening under the covers.  The Intel VTune suite is the gold standard -- it shows all the counters and statistics from the CPUs themselves (be aware that there's a bit of a learning curve) -- to include things like cache statistics, instructions per clock, ...etc.  Lots and lots and lots of info.
<br>
<p>Other tools are good, too -- google around (e.g., the cachegrind tool in valgrind, etc.).
<br>
<p><p><p>On Jun 6, 2013, at 4:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It depends on the application you are using. Some are &quot;balanced&quot; - i.e., they run faster if the number of processes is a power of two. You'll see that n8 is faster than n7, so this is likely the situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2013, at 4:10 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running single-node Sandy Bridge cases with OpenMPI and looking at scaling.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m using &#150;bind-to-core without any other options (default is &#150;bycore I believe).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These numbers indicate number of cores first, then the second digit is the run number (except for n=1, all runs repeated 3 times).  Any thought why n15 should be so much slower than n16?   I also measure the RSS of the running processes, and the rank 0 process for n=15 cases uses about 2x more memory than all the other ranks, whereas all the ranks use the same amount of memory for the n=16 cases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for insights,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n1.1:    6.9530
</span><br>
<span class="quotelev2">&gt;&gt; n2.1:    7.0185
</span><br>
<span class="quotelev2">&gt;&gt; n2.2:    7.0313
</span><br>
<span class="quotelev2">&gt;&gt; n3.1:    8.2069
</span><br>
<span class="quotelev2">&gt;&gt; n3.2:    8.1628
</span><br>
<span class="quotelev2">&gt;&gt; n3.3:    8.1311
</span><br>
<span class="quotelev2">&gt;&gt; n4.1:    7.5307
</span><br>
<span class="quotelev2">&gt;&gt; n4.2:    7.5323
</span><br>
<span class="quotelev2">&gt;&gt; n4.3:    7.5858
</span><br>
<span class="quotelev2">&gt;&gt; n5.1:    9.5693
</span><br>
<span class="quotelev2">&gt;&gt; n5.2:    9.5104
</span><br>
<span class="quotelev2">&gt;&gt; n5.3:    9.4821
</span><br>
<span class="quotelev2">&gt;&gt; n6.1:    8.9821
</span><br>
<span class="quotelev2">&gt;&gt; n6.2:    8.9720
</span><br>
<span class="quotelev2">&gt;&gt; n6.3:    8.9541
</span><br>
<span class="quotelev2">&gt;&gt; n7.1:    10.640
</span><br>
<span class="quotelev2">&gt;&gt; n7.2:    10.650
</span><br>
<span class="quotelev2">&gt;&gt; n7.3:    10.638
</span><br>
<span class="quotelev2">&gt;&gt; n8.1:    8.6822
</span><br>
<span class="quotelev2">&gt;&gt; n8.2:    8.6630
</span><br>
<span class="quotelev2">&gt;&gt; n8.3:    8.6903
</span><br>
<span class="quotelev2">&gt;&gt; n9.1:    9.5058
</span><br>
<span class="quotelev2">&gt;&gt; n9.2:    9.5255
</span><br>
<span class="quotelev2">&gt;&gt; n9.3:    9.4809
</span><br>
<span class="quotelev2">&gt;&gt; n10.1:    10.484
</span><br>
<span class="quotelev2">&gt;&gt; n10.2:    10.452
</span><br>
<span class="quotelev2">&gt;&gt; n10.3:    10.516
</span><br>
<span class="quotelev2">&gt;&gt; n11.1:    11.327
</span><br>
<span class="quotelev2">&gt;&gt; n11.2:    11.316
</span><br>
<span class="quotelev2">&gt;&gt; n11.3:    11.318
</span><br>
<span class="quotelev2">&gt;&gt; n12.1:    12.285
</span><br>
<span class="quotelev2">&gt;&gt; n12.2:    12.303
</span><br>
<span class="quotelev2">&gt;&gt; n12.3:    12.272
</span><br>
<span class="quotelev2">&gt;&gt; n13.1:    13.127
</span><br>
<span class="quotelev2">&gt;&gt; n13.2:    13.113
</span><br>
<span class="quotelev2">&gt;&gt; n13.3:    13.113
</span><br>
<span class="quotelev2">&gt;&gt; n14.1:    14.035
</span><br>
<span class="quotelev2">&gt;&gt; n14.2:    13.989
</span><br>
<span class="quotelev2">&gt;&gt; n14.3:    14.021
</span><br>
<span class="quotelev2">&gt;&gt; n15.1:    14.533
</span><br>
<span class="quotelev2">&gt;&gt; n15.2:    14.529
</span><br>
<span class="quotelev2">&gt;&gt; n15.3:    14.586
</span><br>
<span class="quotelev2">&gt;&gt; n16.1:    8.6542
</span><br>
<span class="quotelev2">&gt;&gt; n16.2:    8.6731
</span><br>
<span class="quotelev2">&gt;&gt; n16.3:    8.6586
</span><br>
<span class="quotelev2">&gt;&gt; ~
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
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Previous message:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>In reply to:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Reply:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
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
