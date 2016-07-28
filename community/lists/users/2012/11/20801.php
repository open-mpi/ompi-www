<?
$subject_val = "Re: [OMPI users] cluster with iOS or Android devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 18:07:03 2012" -->
<!-- isoreceived="20121128230703" -->
<!-- sent="Thu, 29 Nov 2012 00:06:58 +0100" -->
<!-- isosent="20121128230658" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster with iOS or Android devices?" -->
<!-- id="50B69912.4070206_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96721EB3-295B-46C8-8240-27959910CA96_at_xs4all.nl" -->
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
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 18:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20802.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="20800.php">Vincent Diepeveen: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20800.php">Vincent Diepeveen: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20804.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Reply:</strong> <a href="20804.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Reply:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
shameless plug: 
<br>
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf">http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf</a>
<br>
<p>In the MontBlanc project (www.montblanc-project.eu), a lot of folks from 
<br>
all around Europe look into exactly this. Together with a few 
<br>
colleagues, we have been honoured to get access to an early prototype 
<br>
system. The runs for the paper above (accepted in JCP as of last week) 
<br>
have been carried out with MPICH2 back in June, but OpenMPI also worked 
<br>
flawlessly except for some issues with SLURM integration at the time we 
<br>
did those tests.
<br>
<p>The bottom line is: The prototype machine (128 Tegra2's) ran standard 
<br>
ubuntu, and since Android is essentially Linux, it should not be tooooo 
<br>
hard to get the system you envision up and running, Shiny Knight.
<br>
<p>Cheers,
<br>
<p>Dominik
<br>
<p><p>On 11/29/2012 12:00 AM, Vincent Diepeveen wrote:
<br>
<span class="quotelev1">&gt; You might want to post in beowulf mailing list see cc
</span><br>
<span class="quotelev1">&gt; and you want to install linux of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenFabrics releases openmpi, yet it only works at a limited number of 
</span><br>
<span class="quotelev1">&gt; distributions - most important is having
</span><br>
<span class="quotelev1">&gt; the correct kernel (usually old kernel).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm gonna try get it to work at debian soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2012, at 11:50 PM, shiny knight wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was looking for some info about MPI port on iOS or Android devices.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have some old devices that may result useful, if I could be able to 
</span><br>
<span class="quotelev2">&gt;&gt; include them in my computation scheme.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenCL runs on iOS and Android, so I was wondering if there is any 
</span><br>
<span class="quotelev2">&gt;&gt; way to have an old iPhone/phone or iPad/tablet to run MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tried to look everywhere, but I didn't find anything that says that 
</span><br>
<span class="quotelev2">&gt;&gt; it is possible, nor I've found any practical example.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
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
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
Institut f&#252;r Angewandte Mathematik (LS III)
Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20802.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="20800.php">Vincent Diepeveen: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20800.php">Vincent Diepeveen: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20804.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Reply:</strong> <a href="20804.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Reply:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
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
