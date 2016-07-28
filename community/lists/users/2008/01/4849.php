<?
$subject_val = "Re: [OMPI users] Using open-mpi app on a normal network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 13:40:22 2008" -->
<!-- isoreceived="20080118184022" -->
<!-- sent="Fri, 18 Jan 2008 13:40:17 -0500" -->
<!-- isosent="20080118184017" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using open-mpi app on a normal network" -->
<!-- id="6708E095-DA10-42D0-AC2E-5CCD8C805C34_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4790D9CC.1010807_at_laas.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using open-mpi app on a normal network<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 13:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4850.php">Jeff Squyres: "Re: [OMPI users] Communications Problems when application distributed over different nodes"</a>
<li><strong>Previous message:</strong> <a href="4848.php">Antoine Monmayrant: "[OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>In reply to:</strong> <a href="4848.php">Antoine Monmayrant: "[OMPI users] Using open-mpi app on a normal network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can do it, it might or might not make sense, depending on your  
<br>
application. Load imbalance in regular MPI applications kills  
<br>
performance. Therefore if your cluster is very heterogeneous, you  
<br>
might prefer some different programming paradigm that take care of  
<br>
this by nature (let say RPC). However if you already have an  
<br>
application written in MPI, you can try it anyway. It might not be  
<br>
&quot;efficient&quot; but should still be way faster  than sequential run.
<br>
<p>For embarrassingly parallel jobs you definitely do not need MPI  
<br>
(though you can also use if on that purpose). Take a look at tools  
<br>
like Boinc or XtremWeb that helps deploying a grid of &quot;volunteer pc&quot;.
<br>
<p>Aurelien
<br>
<p>Le 18 janv. 08 &#224; 11:54, Antoine Monmayrant a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to open-mpi and parallel computing so I hope I won't
</span><br>
<span class="quotelev1">&gt; bore/offend you with obvious/off-topic questions.
</span><br>
<span class="quotelev1">&gt; We are running scientific simulations (using meep from mit) on small
</span><br>
<span class="quotelev1">&gt; bi-processors pcs and to fully use both processors on each machine, we
</span><br>
<span class="quotelev1">&gt; had to compile a mpi version of the soft.
</span><br>
<span class="quotelev1">&gt; Compiling and running the app (meep-mpi) with mpirun were both fine.
</span><br>
<span class="quotelev1">&gt; Now, we wonder if we can do a bit more by exploiting the unused
</span><br>
<span class="quotelev1">&gt; computing power that is available on our lab network during night and
</span><br>
<span class="quotelev1">&gt; week-end.
</span><br>
<span class="quotelev1">&gt; The problem is that even if our network is more than decent, it not  
</span><br>
<span class="quotelev1">&gt; near
</span><br>
<span class="quotelev1">&gt; what you can find in a cluster. What's more, the various computers we
</span><br>
<span class="quotelev1">&gt; could use are quite different (proc, ram, overall performances).
</span><br>
<span class="quotelev1">&gt; Taking this into account, do you think we can use open-mpi over such a
</span><br>
<span class="quotelev1">&gt; network:
</span><br>
<span class="quotelev1">&gt; a) for one long simulation to share on the different &quot;nodes&quot;?
</span><br>
<span class="quotelev1">&gt; b) for embarrassingly parallel simulations, that is for N independent
</span><br>
<span class="quotelev1">&gt; simulations that we want to &quot;spread&quot; over the network, for example
</span><br>
<span class="quotelev1">&gt; running one simulation on each available node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of gain/limitations can we expect for both cases?
</span><br>
<span class="quotelev1">&gt; If open-mpi is not the way forward, do you have an alternative to  
</span><br>
<span class="quotelev1">&gt; propose?
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Antoine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Antoine Monmayrant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAAS - CNRS
</span><br>
<span class="quotelev1">&gt; 7 avenue du Colonel Roche
</span><br>
<span class="quotelev1">&gt; 31077 TOULOUSE Cedex4
</span><br>
<span class="quotelev1">&gt; FRANCE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel:+33 5 61 33 64 59
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; email : antoine.monmayrant_at_[hidden]
</span><br>
<span class="quotelev1">&gt; permanent email : antoine.monmayrant_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4850.php">Jeff Squyres: "Re: [OMPI users] Communications Problems when application distributed over different nodes"</a>
<li><strong>Previous message:</strong> <a href="4848.php">Antoine Monmayrant: "[OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>In reply to:</strong> <a href="4848.php">Antoine Monmayrant: "[OMPI users] Using open-mpi app on a normal network"</a>
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
