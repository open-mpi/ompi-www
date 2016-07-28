<?
$subject_val = "Re: [OMPI users] Problem with AlltoAll routine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 11:59:38 2008" -->
<!-- isoreceived="20080507155938" -->
<!-- sent="Wed, 7 May 2008 17:59:29 +0200" -->
<!-- isosent="20080507155929" -->
<!-- name="Gabriele FATIGATI" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with AlltoAll routine" -->
<!-- id="20080507155929.2660F2AFF5_at_list.cineca.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="44079e5f0805061930r7112e3c2ib18a75e05b7fc6e8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with AlltoAll routine<br>
<strong>From:</strong> Gabriele FATIGATI (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 11:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="5618.php">Joe Landman: "[OMPI users] crash with mpiBLAST"</a>
<li><strong>In reply to:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5698.php">Nysal Jan: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Reply:</strong> <a href="5698.php">Nysal Jan: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have attached informations requested about Infiniband net and OpenMPi enviroment. There is also LSF script used to launch the application.
<br>
<p>On Tue, 6 May 2008 21:30:17 -0500, Brad Benton said:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Gabriele,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To help track down this problem, could I ask you to take a look at the Open
</span><br>
<span class="quotelev1">&gt; MPI &quot;Getting Help&quot; page?
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular, if you could collect and send the information requested on
</span><br>
<span class="quotelev1">&gt; that page to the list, it will help us to better understand your
</span><br>
<span class="quotelev1">&gt; configuration and how others might reproduce the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; --Brad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brad Benton
</span><br>
<span class="quotelev1">&gt; IBM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 6, 2008 at 10:35 AM, Gabriele FATIGATI &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; i tried to run SkaMPI 5.0.4 benchmark on IBM-BladeCenterLS21 system with
</span><br>
<span class="quotelev2">&gt; &gt; 256 processors over Infiniband 5 Gb/s, but test has stopped on
</span><br>
<span class="quotelev2">&gt; &gt; &quot;AlltoAll-length&quot; routine, with count=2048 for some reason.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have launched test with:
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl_openib_eager_limit 1024
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Same tests with 128 processor or less, have finished successful.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Different values of eager limit don't solve the problem. Version of
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI involved is 1.2.5. There's someone with this kind of problem over
</span><br>
<span class="quotelev2">&gt; &gt; Infiniband?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing  Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:    39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5619/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="5618.php">Joe Landman: "[OMPI users] crash with mpiBLAST"</a>
<li><strong>In reply to:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5698.php">Nysal Jan: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Reply:</strong> <a href="5698.php">Nysal Jan: "Re: [OMPI users] Problem with AlltoAll routine"</a>
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
