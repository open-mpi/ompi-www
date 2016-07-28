<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 19:29:02 2008" -->
<!-- isoreceived="20080606232902" -->
<!-- sent="Fri, 6 Jun 2008 19:28:53 -0400" -->
<!-- isosent="20080606232853" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="103C74A1-AD7A-43F7-A927-97CAE63B5989_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE8015D4773_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 19:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5841.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How do you know the BTL is used ? I run applications in such context,  
<br>
and as soon as I force the BTLs everything works like a charm.
<br>
<p>Please try &quot;--mca pml ob1&quot; to the command line, this will do the trick
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 6, 2008, at 6:06 PM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; The btl interface is used. The nodes in both subclusters have the  
</span><br>
<span class="quotelev1">&gt; same architecture so no need for two binaries. The MPI libraries for  
</span><br>
<span class="quotelev1">&gt; the interconnect can be selected at runtime, for example through the  
</span><br>
<span class="quotelev1">&gt; value of the OMPI_MCA_btl environment variable. However that  
</span><br>
<span class="quotelev1">&gt; variable should then somehow be set once SGE has decided on which  
</span><br>
<span class="quotelev1">&gt; subcluster to run the job, thus avoiding it to be set in advance  
</span><br>
<span class="quotelev1">&gt; when submitting. I tried a couple of things like different PEs but  
</span><br>
<span class="quotelev1">&gt; there does not seem to be an elegant solution; I mean something  
</span><br>
<span class="quotelev1">&gt; completely transparent to the user like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as I have seen in some of the OpenMPI FAQs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: Fri 6/6/2008 6:47 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] using OpenMPI + SGE in a heterogeneous  
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 06.06.2008 um 19:31 schrieb Patrick Geoffray:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would be grateful for any advice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to check, you are not using the MTL for MX, right ? Only the  
</span><br>
<span class="quotelev1">&gt; BTL
</span><br>
<span class="quotelev2">&gt; &gt; interface allow to choose between several devices at run time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least there would be the option to built two binaries and decide
</span><br>
<span class="quotelev1">&gt; at runtime which to use in your jobscript - depending on the machine
</span><br>
<span class="quotelev1">&gt; you landed on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5844/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5845.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5841.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5843.php">John Hearns: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
