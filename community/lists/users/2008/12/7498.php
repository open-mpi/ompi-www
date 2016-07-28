<?
$subject_val = "Re: [OMPI users] Multicast?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 13:53:42 2008" -->
<!-- isoreceived="20081210185342" -->
<!-- sent="Wed, 10 Dec 2008 13:52:45 -0500" -->
<!-- isosent="20081210185245" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multicast?" -->
<!-- id="E35C0B7F-2C70-4D44-967E-02450C618012_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="528A816D-C547-4DE4-99B7-EA0F230DA6C7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multicast?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 13:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>Previous message:</strong> <a href="7497.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>In reply to:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks I will pass that on to the person asking.   And it answers my  
<br>
own questions of observed behavior with IMB and other tools.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Dec 10, 2008, at 10:37 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Brock,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI has a very fancy collective implementation. While we don't  
</span><br>
<span class="quotelev1">&gt; use multicast, we dynamically change the algorithm used for the  
</span><br>
<span class="quotelev1">&gt; collective based on the number of nodes, the size and type of the  
</span><br>
<span class="quotelev1">&gt; message, and eventually the operation involved if any. Moreover, we  
</span><br>
<span class="quotelev1">&gt; detect hierarchies, and we can potentially change the algorithms to  
</span><br>
<span class="quotelev1">&gt; take advantage of this knowledge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want more information, please refer to this paper (Flexible  
</span><br>
<span class="quotelev1">&gt; collective communication tuning architecture applied to Open MPI)  
</span><br>
<span class="quotelev1">&gt; for more information, <a href="http://www.netlib.org/netlib/utk/people/">http://www.netlib.org/netlib/utk/people/</a> 
</span><br>
<span class="quotelev1">&gt; JackDongarra/PAPERS/Flex-collective-euro-pvmmpi-2006.pdf..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2008, at 21:49 , Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is OpenMPI using Multicast for things like MPI_Bcast() ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some simple tests of really old versions (1.0.2) showed binary  
</span><br>
<span class="quotelev2">&gt;&gt; tree type performance, while latter versions gave me the same run  
</span><br>
<span class="quotelev2">&gt;&gt; time no matter how many CPU's I used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus this lead me to believe that something like multicast is in  
</span><br>
<span class="quotelev2">&gt;&gt; use.  Is it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>Previous message:</strong> <a href="7497.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>In reply to:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
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
