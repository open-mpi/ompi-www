<?
$subject_val = "Re: [OMPI users] Export enviroment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 10:01:50 2008" -->
<!-- isoreceived="20081210150150" -->
<!-- sent="Wed, 10 Dec 2008 10:01:44 -0500" -->
<!-- isosent="20081210150144" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Export enviroment variable" -->
<!-- id="49A5B737-906C-4489-BC5D-EDA7FC1D8A3E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0812100250v7721fc93s15ea8daccbc98587_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Export enviroment variable<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 10:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="7491.php">Jeff Squyres: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>In reply to:</strong> <a href="7490.php">Gabriele Fatigati: "[OMPI users] Export enviroment variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, the only way is to name your environment variable  
<br>
OMPI_MCA_&lt;foo&gt;; mpirun will automatically scoop all of those up and  
<br>
send them along.
<br>
<p>It wouldn't be *terribly* difficult to add other mechanisms for  
<br>
sending along environment variables, though.  What do you need / want  
<br>
to do?
<br>
<p><p>On Dec 10, 2008, at 5:50 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; i wold like to know how i can export by default some enviroment
</span><br>
<span class="quotelev1">&gt; variables, so without using&quot; -x&quot; option after mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to add some flags in openmpi-mca-params.conf ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7493.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="7491.php">Jeff Squyres: "Re: [OMPI users] Problem with feupdateenv"</a>
<li><strong>In reply to:</strong> <a href="7490.php">Gabriele Fatigati: "[OMPI users] Export enviroment variable"</a>
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
