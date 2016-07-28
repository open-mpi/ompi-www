<?
$subject_val = "Re: [OMPI users] Memory mapped memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 17 12:46:25 2011" -->
<!-- isoreceived="20111017164625" -->
<!-- sent="Mon, 17 Oct 2011 11:46:20 -0500" -->
<!-- isosent="20111017164620" -->
<!-- name="James Dinan" -->
<!-- email="dinan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory mapped memory" -->
<!-- id="4E9C5BDC.2000803_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHXxYDikZaS8Os4L1itjrSKkiNb+H2BmLEMaQ=SLtKjtj69zuQ_at_mail.gmail.com" -->
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
<strong>From:</strong> James Dinan (<em>dinan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-17 12:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17562.php">Shiqing Fan: "Re: [OMPI users] revisiting topic: prebuilt on windows7 not xp"</a>
<li><strong>Previous message:</strong> <a href="17560.php">Durga Choudhury: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>In reply to:</strong> <a href="17560.php">Durga Choudhury: "Re: [OMPI users] Memory mapped memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17602.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] Memory mapped memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, this is possible and generally works, although it is not defined
<br>
by the MPI standard.  Regular shared memory rules apply: you may have to
<br>
add additional memory consistency and/or synchronization calls depending
<br>
on your platform to ensure that MPI sees intended data updates.
<br>
<p>Best,
<br>
&nbsp;~Jim.
<br>
<p>On 10/17/2011 09:09 AM, Durga Choudhury wrote:
<br>
<span class="quotelev1">&gt; If the mmap() pages are created with MAP_SHARED, then they should be
</span><br>
<span class="quotelev1">&gt; sharable with other processes in the same node, isn't it? MPI
</span><br>
<span class="quotelev1">&gt; processes are just like any other process, aren't they? Will one of
</span><br>
<span class="quotelev1">&gt; the MPI Gurus please comment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 17, 2011 at 9:45 AM, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; More in detail,
</span><br>
<span class="quotelev2">&gt;&gt; is it possible use mmap() function from MPI process and sharing these memory
</span><br>
<span class="quotelev2">&gt;&gt; between others processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/10/13 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is there some limitation or issues to use memory mapped memory into MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes? I would like to share some memory in a node without using OpenM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC specialist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
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
<li><strong>Next message:</strong> <a href="17562.php">Shiqing Fan: "Re: [OMPI users] revisiting topic: prebuilt on windows7 not xp"</a>
<li><strong>Previous message:</strong> <a href="17560.php">Durga Choudhury: "Re: [OMPI users] Memory mapped memory"</a>
<li><strong>In reply to:</strong> <a href="17560.php">Durga Choudhury: "Re: [OMPI users] Memory mapped memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17602.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] Memory mapped memory"</a>
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
