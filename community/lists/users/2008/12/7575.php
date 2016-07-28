<?
$subject_val = "Re: [OMPI users] help with mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 02:23:36 2008" -->
<!-- isoreceived="20081223072336" -->
<!-- sent="Tue, 23 Dec 2008 02:23:30 -0500" -->
<!-- isosent="20081223072330" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help with mpi" -->
<!-- id="F0B316AA-0EB2-48E4-82D3-4E96D9CCE1BD_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9247a3360812222129w598fcb74r793d1e1e681c4fd0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] help with mpi<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 02:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7576.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Previous message:</strong> <a href="7574.php">Win Than Aung: "[OMPI users] help with mpi"</a>
<li><strong>In reply to:</strong> <a href="7574.php">Win Than Aung: "[OMPI users] help with mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are using MPICH. You should ask submit your question to their  
<br>
mailing list to get the most accurate answers. From the log you  
<br>
provide, I can still guess that you need to define a machinefile  
<br>
containing at least 4 computing ressources. If you need more details  
<br>
concerning machinefiles in MPICH, you should definitely consult the  
<br>
MPICH faq/users manual.
<br>
<p>Aurelien
<br>
<p><p>Le 23 d&#233;c. 08 &#224; 00:29, Win Than Aung a &#233;crit :
<br>
<p><span class="quotelev1">&gt; mpirun -np 4 ./hello
</span><br>
<span class="quotelev1">&gt; running mpdallexit on steele-a137.rcac.purdue.edu
</span><br>
<span class="quotelev1">&gt; LAUNCHED mpd on steele-a137.rcac.purdue.edu  via
</span><br>
<span class="quotelev1">&gt; RUNNING: mpd on steele-a137.rcac.purdue.edu
</span><br>
<span class="quotelev1">&gt; steele-a137.rcac.purdue.edu_36959 (172.18.24.147)
</span><br>
<span class="quotelev1">&gt; time for 100 loops = 2.98023223877e-05 seconds
</span><br>
<span class="quotelev1">&gt; too few entries in machinefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i put cout&lt;&lt;&quot;sth &quot; in hello.cpp but it doesn't get displayed
</span><br>
<span class="quotelev1">&gt; help!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7576.php">Aurélien Bouteiller: "Re: [OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Previous message:</strong> <a href="7574.php">Win Than Aung: "[OMPI users] help with mpi"</a>
<li><strong>In reply to:</strong> <a href="7574.php">Win Than Aung: "[OMPI users] help with mpi"</a>
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
