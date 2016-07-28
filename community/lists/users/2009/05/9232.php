<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 09:14:48 2009" -->
<!-- isoreceived="20090506131448" -->
<!-- sent="Wed, 6 May 2009 15:14:41 +0200" -->
<!-- isosent="20090506131441" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="ebd2bd0b0905060614p691fc4dbue6bfb5e347ae151f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0905041734290.3970_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX<br>
<strong>From:</strong> Ricardo Fern&#225;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 09:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9233.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>Previous message:</strong> <a href="9231.php">Jeff Squyres: "Re: [OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#180;m sorry if I didn&#180;t said it before
<br>
the test where run with commands like the following
<br>
<p>/opt/openmpi/bin/mpirun --bynode --mca pml cm --mca mtl mx -np 124 -hostfile
<br>
hostfile IMB-MPI1 [testname] 1&gt;IMB1-[testname].results 2&gt;&amp;1
<br>
<p>Ricardo
<br>
<p>On Mon, May 4, 2009 at 5:36 PM, Bogdan Costescu &lt;
<br>
Bogdan.Costescu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 4 May 2009, Ricardo Fern&#225;ndez-Perea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  any idea where I should look for the cause.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try adding to the mpirun/mpiexec command line '--mca mtl mx --mca
</span><br>
<span class="quotelev1">&gt; pml cm' to specify usage of the non-default MX MTL ? (sorry if you already
</span><br>
<span class="quotelev1">&gt; do, I haven't found it in your e-mail)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bogdan Costescu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
</span><br>
<span class="quotelev1">&gt; Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
</span><br>
<span class="quotelev1">&gt; E-mail: bogdan.costescu_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9233.php">Luis Vitorio Cargnini: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>Previous message:</strong> <a href="9231.php">Jeff Squyres: "Re: [OMPI users] What alternatives do exist to &quot;MCA memory: ptmalloc2&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="9188.php">Bogdan Costescu: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
