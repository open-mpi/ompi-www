<?
$subject_val = "Re: [OMPI users] cluster with iOS or Android devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 19:15:09 2012" -->
<!-- isoreceived="20121130001509" -->
<!-- sent="Thu, 29 Nov 2012 16:14:55 -0800" -->
<!-- isosent="20121130001455" -->
<!-- name="Beatty, Daniel D CIV NAVAIR, 474300D" -->
<!-- email="daniel.beatty_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster with iOS or Android devices?" -->
<!-- id="CCDD3A7F.B405%daniel.beatty_at_navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50B69912.4070206_at_math.tu-dortmund.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] cluster with iOS or Android devices?<br>
<strong>From:</strong> Beatty, Daniel D CIV NAVAIR, 474300D (<em>daniel.beatty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 19:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20819.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20801.php">Dominik Goeddeke: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20823.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Reply:</strong> <a href="20823.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Ladies and gentlemen,
<br>
There is one alternative approach and this a psuedo-cloud based MPI.  The
<br>
idea is that MPI node list is adjusted via the cloud similar to the way
<br>
Xgrid's Bonjour used to do it for Xgrid.
<br>
<p>In this case, it is applying an MPI notion to the OpenCL codelets.  There
<br>
are obvious issues with security, battery life, etc.  There is considerable
<br>
room for discussion as far expectations.  Do jobs run free if the device is
<br>
plugged in?  If the device in the pocket, can the user switch to power
<br>
conservation/ cooler pockets?  What constitutes fairness?  Do owners have a
<br>
right to be biased in judgement?   These are tough questions that I think I
<br>
will have to provide fair assurances for.  After all, everyone likes to
<br>
think they are control of what they put in their pocket.
<br>
<p>V/R,
<br>
Dan
<br>
<p><p>On 11/28/12 3:06 PM, &quot;Dominik Goeddeke&quot;
<br>
&lt;dominik.goeddeke_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; shameless plug: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf">http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the MontBlanc project (www.montblanc-project.eu), a lot of folks from
</span><br>
<span class="quotelev1">&gt; all around Europe look into exactly this. Together with a few
</span><br>
<span class="quotelev1">&gt; colleagues, we have been honoured to get access to an early prototype
</span><br>
<span class="quotelev1">&gt; system. The runs for the paper above (accepted in JCP as of last week)
</span><br>
<span class="quotelev1">&gt; have been carried out with MPICH2 back in June, but OpenMPI also worked
</span><br>
<span class="quotelev1">&gt; flawlessly except for some issues with SLURM integration at the time we
</span><br>
<span class="quotelev1">&gt; did those tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bottom line is: The prototype machine (128 Tegra2's) ran standard
</span><br>
<span class="quotelev1">&gt; ubuntu, and since Android is essentially Linux, it should not be tooooo
</span><br>
<span class="quotelev1">&gt; hard to get the system you envision up and running, Shiny Knight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dominik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/29/2012 12:00 AM, Vincent Diepeveen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You might want to post in beowulf mailing list see cc
</span><br>
<span class="quotelev2">&gt;&gt; and you want to install linux of course.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics releases openmpi, yet it only works at a limited number of
</span><br>
<span class="quotelev2">&gt;&gt; distributions - most important is having
</span><br>
<span class="quotelev2">&gt;&gt; the correct kernel (usually old kernel).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm gonna try get it to work at debian soon.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2012, at 11:50 PM, shiny knight wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was looking for some info about MPI port on iOS or Android devices.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have some old devices that may result useful, if I could be able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include them in my computation scheme.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenCL runs on iOS and Android, so I was wondering if there is any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way to have an old iPhone/phone or iPad/tablet to run MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tried to look everywhere, but I didn't find anything that says that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is possible, nor I've found any practical example.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>
<br><p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20820/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20819.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20801.php">Dominik Goeddeke: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20823.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Reply:</strong> <a href="20823.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
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
