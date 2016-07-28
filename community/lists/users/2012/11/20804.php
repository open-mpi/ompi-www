<?
$subject_val = "Re: [OMPI users] cluster with iOS or Android devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 23:22:34 2012" -->
<!-- isoreceived="20121129042234" -->
<!-- sent="Wed, 28 Nov 2012 20:22:27 -0800" -->
<!-- isosent="20121129042227" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster with iOS or Android devices?" -->
<!-- id="715CB3EB-4346-4395-B95E-8D80C9B99CF9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 23:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20805.php">Syed Ahsan Ali: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)"</a>
<li><strong>Previous message:</strong> <a href="20803.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20801.php">Dominik Goeddeke: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I seem to vaguely recall someone porting OMPI to the iPad at one time as part of a large-scale, impromptu cluster demo at some conference - everyone was supposed to bring a computer, network them all into a large &quot;cluster&quot;, and then run a benchmark to see how fast it would work. I can't find or recall the details though.
<br>
<p>There are some ARM folks on this list, though, so perhaps they will speak up - IIRC, there was some more formal effort to make such a port.
<br>
<p><p>On Nov 28, 2012, at 3:06 PM, Dominik Goeddeke &lt;dominik.goeddeke_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; shameless plug: <a href="http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf">http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the MontBlanc project (www.montblanc-project.eu), a lot of folks from all around Europe look into exactly this. Together with a few colleagues, we have been honoured to get access to an early prototype system. The runs for the paper above (accepted in JCP as of last week) have been carried out with MPICH2 back in June, but OpenMPI also worked flawlessly except for some issues with SLURM integration at the time we did those tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bottom line is: The prototype machine (128 Tegra2's) ran standard ubuntu, and since Android is essentially Linux, it should not be tooooo hard to get the system you envision up and running, Shiny Knight.
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
<span class="quotelev2">&gt;&gt; OpenFabrics releases openmpi, yet it only works at a limited number of distributions - most important is having
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
<span class="quotelev3">&gt;&gt;&gt; I have some old devices that may result useful, if I could be able to include them in my computation scheme.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenCL runs on iOS and Android, so I was wondering if there is any way to have an old iPhone/phone or iPad/tablet to run MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tried to look everywhere, but I didn't find anything that says that it is possible, nor I've found any practical example.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jun.-Prof. Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev1">&gt; Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
</span><br>
<span class="quotelev1">&gt; Institut f&#252;r Angewandte Mathematik (LS III)
</span><br>
<span class="quotelev1">&gt; Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev1">&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
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
<li><strong>Next message:</strong> <a href="20805.php">Syed Ahsan Ali: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)"</a>
<li><strong>Previous message:</strong> <a href="20803.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20801.php">Dominik Goeddeke: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
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
