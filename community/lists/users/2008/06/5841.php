<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 18:06:46 2008" -->
<!-- isoreceived="20080606220646" -->
<!-- sent="Fri, 6 Jun 2008 23:06:28 +0100" -->
<!-- isosent="20080606220628" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE8015D4773_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B1E77DC1-4E2D-4752-BFDE-E4CDD21226B9_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 18:06:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5840.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5840.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The btl interface is used. The nodes in both subclusters have the same architecture so no need for two binaries. The MPI libraries for the interconnect can be selected at runtime, for example through the value of the OMPI_MCA_btl environment variable. However that variable should then somehow be set once SGE has decided on which subcluster to run the job, thus avoiding it to be set in advance when submitting. I tried a couple of things like different PEs but there does not seem to be an elegant solution; I mean something completely transparent to the user like
<br>
&nbsp;
<br>
mpirun -np $NSLOTS executable
<br>
&nbsp;
<br>
as I have seen in some of the OpenMPI FAQs.
<br>
&nbsp;
<br>
Thanks
<br>
&nbsp;
<br>
Henk
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of Reuti
<br>
Sent: Fri 6/6/2008 6:47 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network
<br>
<p><p><p>Am 06.06.2008 um 19:31 schrieb Patrick Geoffray:
<br>
<p><span class="quotelev1">&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful for any advice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to check, you are not using the MTL for MX, right ? Only the BTL
</span><br>
<span class="quotelev1">&gt; interface allow to choose between several devices at run time.
</span><br>
<p>At least there would be the option to built two binaries and decide 
<br>
at runtime which to use in your jobscript - depending on the machine 
<br>
you landed on.
<br>
<p>-- Reuti
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5840.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5840.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
