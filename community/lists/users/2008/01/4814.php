<?
$subject_val = "Re: [OMPI users] how to select a specific network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 13:53:51 2008" -->
<!-- isoreceived="20080111185351" -->
<!-- sent="Fri, 11 Jan 2008 13:53:44 -0500" -->
<!-- isosent="20080111185344" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to select a specific network" -->
<!-- id="34865A18-8B19-4707-B991-DF220B6E415D_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.GSO.4.53.0801111146030.19557_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to select a specific network<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-11 13:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4815.php">Priya Natarajan: "[OMPI users] Open MPI and thread-safety"</a>
<li><strong>Previous message:</strong> <a href="4813.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 787, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try something similar to this
<br>
<p>mpirun -np 1 -mca btl self,tcp -mca btl_tcp_if_include en1 NetPIPE_3.6/ 
<br>
NPmpi : -np 1 -mca btl self,tcp -mca btl_tcp_if_include en0   
<br>
NetPIPE_3.6/NPmpi
<br>
<p>You should then be able to specify a different if_include mask for you  
<br>
different processes.
<br>
<p>Aurelien
<br>
<p>Le 11 janv. 08 &#224; 06:46, Lydia Heck a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should have added that the two networks are not routable,
</span><br>
<span class="quotelev1">&gt; and that they are private class B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 11 Jan 2008, Lydia Heck wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a setup which contains one set of machines
</span><br>
<span class="quotelev2">&gt;&gt; with one nge and one e1000g network and of machines
</span><br>
<span class="quotelev2">&gt;&gt; with two e1000g networks configured. I am planning a
</span><br>
<span class="quotelev2">&gt;&gt; large run where all these computers will be occupied
</span><br>
<span class="quotelev2">&gt;&gt; with one job and the mpi communication should only go
</span><br>
<span class="quotelev2">&gt;&gt; over one specific network which is configured over
</span><br>
<span class="quotelev2">&gt;&gt; e1000g0 on the first set of machines and on e1000g1 on the
</span><br>
<span class="quotelev2">&gt;&gt; second set. I cannot use - for obvious reasons to either
</span><br>
<span class="quotelev2">&gt;&gt; include all of e1000g or to exclude part of e1000g - if that is
</span><br>
<span class="quotelev2">&gt;&gt; possible.
</span><br>
<span class="quotelev2">&gt;&gt; So I have to exclude or include on the internet number range.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there an obvious flag - which I have not yet found - to tell
</span><br>
<span class="quotelev2">&gt;&gt; mpirun to use one specific network?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lydia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr E L  Heck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; University of Durham
</span><br>
<span class="quotelev2">&gt;&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics
</span><br>
<span class="quotelev2">&gt;&gt; South Road
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev2">&gt;&gt; United Kingdom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt;&gt; ___________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>Dr. Aur&#233;lien Bouteiller
<br>
Sr. Research Associate - Innovative Computing Laboratory
<br>
Suite 350, 1122 Volunteer Boulevard
<br>
Knoxville, TN 37996
<br>
865 974 6321
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4815.php">Priya Natarajan: "[OMPI users] Open MPI and thread-safety"</a>
<li><strong>Previous message:</strong> <a href="4813.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 787, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="4811.php">Lydia Heck: "Re: [OMPI users] how to select a specific network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
<li><strong>Reply:</strong> <a href="4817.php">Rolf Vandevaart: "Re: [OMPI users] how to select a specific network"</a>
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
