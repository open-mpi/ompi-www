<?
$subject_val = "Re: [OMPI users] Problem with AlltoAll routine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 22:30:25 2008" -->
<!-- isoreceived="20080507023025" -->
<!-- sent="Tue, 6 May 2008 21:30:17 -0500" -->
<!-- isosent="20080507023017" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with AlltoAll routine" -->
<!-- id="44079e5f0805061930r7112e3c2ib18a75e05b7fc6e8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080506153509.5F1422AFF9_at_list.cineca.com" -->
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
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 22:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5618.php">Joe Landman: "[OMPI users] crash with mpiBLAST"</a>
<li><strong>Previous message:</strong> <a href="5616.php">Alberto Giannetti: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="5615.php">Gabriele FATIGATI: "[OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Reply:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gabriele,
<br>
<p>To help track down this problem, could I ask you to take a look at the Open
<br>
MPI &quot;Getting Help&quot; page?
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>In particular, if you could collect and send the information requested on
<br>
that page to the list, it will help us to better understand your
<br>
configuration and how others might reproduce the problem.
<br>
<p>Thanks &amp; Regards,
<br>
--Brad
<br>
<p>Brad Benton
<br>
IBM
<br>
<p><p>On Tue, May 6, 2008 at 10:35 AM, Gabriele FATIGATI &lt;g.fatigati_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i tried to run SkaMPI 5.0.4 benchmark on IBM-BladeCenterLS21 system with
</span><br>
<span class="quotelev1">&gt; 256 processors over Infiniband 5 Gb/s, but test has stopped on
</span><br>
<span class="quotelev1">&gt; &quot;AlltoAll-length&quot; routine, with count=2048 for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have launched test with:
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_eager_limit 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same tests with 128 processor or less, have finished successful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Different values of eager limit don't solve the problem. Version of
</span><br>
<span class="quotelev1">&gt; OpenMPI involved is 1.2.5. There's someone with this kind of problem over
</span><br>
<span class="quotelev1">&gt; Infiniband?
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:    39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5618.php">Joe Landman: "[OMPI users] crash with mpiBLAST"</a>
<li><strong>Previous message:</strong> <a href="5616.php">Alberto Giannetti: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="5615.php">Gabriele FATIGATI: "[OMPI users] Problem with AlltoAll routine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Reply:</strong> <a href="5619.php">Gabriele FATIGATI: "Re: [OMPI users] Problem with AlltoAll routine"</a>
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
