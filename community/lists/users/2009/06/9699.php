<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 11:05:23 2009" -->
<!-- isoreceived="20090624150523" -->
<!-- sent="Wed, 24 Jun 2009 11:05:13 -0400" -->
<!-- isosent="20090624150513" -->
<!-- name="Jim Kress" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband" -->
<!-- id="18B660E4699E430FB2EBC8A1C73EDBD9_at_inspiron9100" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F3DF91A7-132D-4972-9DEC-03471AC21DC1_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband<br>
<strong>From:</strong> Jim Kress (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 11:05:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9698.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9698.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9701.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Noam, Gus and List,
<br>
<p>Did you statically link your openmpi when you built it?  If you did (the
<br>
default is NOT to do this) then that could explain the discrepancy.
<br>
<p>Jim 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Noam Bernstein
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 24, 2009 9:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 50% performance reduction due to 
</span><br>
<span class="quotelev1">&gt; OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead 
</span><br>
<span class="quotelev1">&gt; of using Infiniband
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2009, at 6:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jim, list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On my OpenMPI 1.3.2 ompi_info -config gives:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Wrapper extra LIBS: -lrdmacm -libverbs -ltorque -lnuma -ldl -Wl,-- 
</span><br>
<span class="quotelev2">&gt; &gt; export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yours doesn't seem to have the IB libraries: -lrdmacm -libverbs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I would guess your OpenMPI 1.3.2 build doesn't have IB support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second of these statements doesn't follow from the first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My &quot;ompi_info -config&quot; returns
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info -config | grep LIBS
</span><br>
<span class="quotelev1">&gt;                Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;        Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic 
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil - 
</span><br>
<span class="quotelev1">&gt; lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it does have openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info | grep openib
</span><br>
<span class="quotelev1">&gt;                   MCA btl: openib (MCA v2.0, API v2.0, 
</span><br>
<span class="quotelev1">&gt; Component v1.3.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and osu_bibw returns
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bi-Directional Bandwidth Test v3.0
</span><br>
<span class="quotelev1">&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 4194304                1717.43
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which it's sure not getting over ethernet.  I think Jeff 
</span><br>
<span class="quotelev1">&gt; Squyres' test (ompi_info | grep openib) must be more definitive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 								
</span><br>
<span class="quotelev1">&gt; 		Noam
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
<li><strong>Next message:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9698.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9698.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9701.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband"</a>
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
