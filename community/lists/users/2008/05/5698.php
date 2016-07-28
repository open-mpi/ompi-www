<?
$subject_val = "Re: [OMPI users] Problem with AlltoAll routine";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 17 15:46:28 2008" -->
<!-- isoreceived="20080517194628" -->
<!-- sent="Sun, 18 May 2008 01:16:16 +0530" -->
<!-- isosent="20080517194616" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with AlltoAll routine" -->
<!-- id="5d5f7eba0805171246t4660f207wefeb05220ff95c3e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080507155929.2660F2AFF5_at_list.cineca.com" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-17 15:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5699.php">Davi Vercillo C. Garcia: "[OMPI users] ROMIO of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>In reply to:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele,
<br>
Can you try with Open MPI 1.2.6. It has a parameter to disable early
<br>
completion, set it to zero (-mca pml_ob1_use_early_completion 0).
<br>
<p>--Nysal
<br>
<p>On Wed, May 7, 2008 at 9:29 PM, Gabriele FATIGATI &lt;g.fatigati_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I have attached informations requested about Infiniband net and OpenMPi
</span><br>
<span class="quotelev1">&gt; enviroment. There is also LSF script used to launch the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 6 May 2008 21:30:17 -0500, Brad Benton said:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Gabriele,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To help track down this problem, could I ask you to take a look at the
</span><br>
<span class="quotelev1">&gt; Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI &quot;Getting Help&quot; page?
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In particular, if you could collect and send the information requested on
</span><br>
<span class="quotelev2">&gt; &gt; that page to the list, it will help us to better understand your
</span><br>
<span class="quotelev2">&gt; &gt; configuration and how others might reproduce the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; --Brad
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brad Benton
</span><br>
<span class="quotelev2">&gt; &gt; IBM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 6, 2008 at 10:35 AM, Gabriele FATIGATI &lt;g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i tried to run SkaMPI 5.0.4 benchmark on IBM-BladeCenterLS21 system
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 256 processors over Infiniband 5 Gb/s, but test has stopped on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;AlltoAll-length&quot; routine, with count=2048 for some reason.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have launched test with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --mca btl_openib_eager_limit 1024
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Same tests with 128 processor or less, have finished successful.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Different values of eager limit don't solve the problem. Version of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPI involved is 1.2.5. There's someone with this kind of problem
</span><br>
<span class="quotelev1">&gt; over
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Infiniband?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Supercomputing  Group
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; www.cineca.it                    Tel:    39 051 6171722
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5699.php">Davi Vercillo C. Garcia: "[OMPI users] ROMIO of OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5697.php">Jeff Squyres: "Re: [OMPI users] qsub and limits.conf"</a>
<li><strong>In reply to:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
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
