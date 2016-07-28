<?
$subject_val = "Re: [OMPI users] Memory mapped memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 17 10:09:10 2011" -->
<!-- isoreceived="20111017140910" -->
<!-- sent="Mon, 17 Oct 2011 10:09:05 -0400" -->
<!-- isosent="20111017140905" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory mapped memory" -->
<!-- id="CAHXxYDikZaS8Os4L1itjrSKkiNb+H2BmLEMaQ=SLtKjtj69zuQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUV0FYqUZYfPRrYsaMJD2R5DJQNr7C1E3Xo17WYDeaHA_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory mapped memory<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-17 10:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17561.php">James Dinan: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>Previous message:</strong> <a href="17559.php">Gabriele Fatigati: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>In reply to:</strong> <a href="17559.php">Gabriele Fatigati: "Re: [OMPI users] Memory mapped memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17561.php">James Dinan: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>Reply:</strong> <a href="17561.php">James Dinan: "Re: [OMPI users] Memory mapped memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the mmap() pages are created with MAP_SHARED, then they should be
<br>
sharable with other processes in the same node, isn't it? MPI
<br>
processes are just like any other process, aren't they? Will one of
<br>
the MPI Gurus please comment?
<br>
<p>Regards
<br>
Durga
<br>
<p><p>On Mon, Oct 17, 2011 at 9:45 AM, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; More in detail,
</span><br>
<span class="quotelev1">&gt; is it possible use mmap() function from MPI process and sharing these memory
</span><br>
<span class="quotelev1">&gt; between others processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/10/13 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI&#160;users and developers,
</span><br>
<span class="quotelev2">&gt;&gt; is there some limitation or issues to use memory mapped memory into MPI
</span><br>
<span class="quotelev2">&gt;&gt; processes? I would like to share some memory in a node without using OpenM.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HPC specialist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Tel:&#160;&#160; +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Tel:&#160;&#160; +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17561.php">James Dinan: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>Previous message:</strong> <a href="17559.php">Gabriele Fatigati: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>In reply to:</strong> <a href="17559.php">Gabriele Fatigati: "Re: [OMPI users] Memory mapped memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17561.php">James Dinan: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>Reply:</strong> <a href="17561.php">James Dinan: "Re: [OMPI users] Memory mapped memory"</a>
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
