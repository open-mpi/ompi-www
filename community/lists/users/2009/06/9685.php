<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 16:18:25 2009" -->
<!-- isoreceived="20090623201825" -->
<!-- sent="Tue, 23 Jun 2009 16:18:15 -0400" -->
<!-- isosent="20090623201815" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband" -->
<!-- id="4A413887.1050904_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3CF59699C0214F23B30C47B75F40E122_at_inspiron9100" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 16:18:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9684.php">Gus Correa: "Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice"</a>
<li><strong>In reply to:</strong> <a href="9682.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim
<br>
<p>Jim Kress wrote:
<br>
<span class="quotelev1">&gt; Are you speaking of the configure for the application or for OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I am speaking of OpenMPI configure.
<br>
Scott Hamilton also mentioned this,
<br>
when he answered you in the Rocks mailing list.
<br>
<p><span class="quotelev1">&gt; I have no control over the application since it is provided as an executable
</span><br>
<span class="quotelev1">&gt; only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I understand that ORCA is a black box or a black killer whale,
<br>
but if your OpenMPI was not built with IB,
<br>
there is no hope that ORCA will use IB.
<br>
Did you do ompi_info -config?
<br>
<p>Some of my builds missed libnuma, others missed libtorque,
<br>
eventually I got it right.
<br>
Then the OpenMPI team changed configure
<br>
(somewhere along the 1.3 series), so I had to change again.
<br>
<p>If the libraries aren't in standard places (/usr/lib /usr/lib64),
<br>
and the includes also (/usr/include) you need to tell configure where 
<br>
they are.  See the OpenMPI README file and FAQ.
<br>
<p>My $0.02.
<br>
Gus Correa
<br>
<p>PS - BTW, what is your advice for a fellow trying to run the
<br>
computational chemistry software from Schroedinger.com?
<br>
I know nothing of comput-chem, an area where you are the pro.
<br>
This question came on the Beowulf list, and apparently the darn piece of 
<br>
software requires MPICH-1, and only executables are provided.
<br>
I know (You told me!) that MPICH-1 fails miserably with those
<br>
p4 errors on later Linux kernels, which is what the poor guy
<br>
is getting.
<br>
If he at least had the object files he could try to link to MPICH2,
<br>
but apparently he only has executables (statically linked to MPICH-1,
<br>
I suppose).
<br>
<p>---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; Jim 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, June 23, 2009 2:01 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] 50% performance reduction due to 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI v 1.3.2 forcing all MPI traffic over Ethernet instead 
</span><br>
<span class="quotelev2">&gt;&gt; of using Infiniband
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jim, list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you checked if configure caught your IB libraries properly?
</span><br>
<span class="quotelev2">&gt;&gt; IIRR there has been some changes since 1.2.8 on how configure 
</span><br>
<span class="quotelev2">&gt;&gt; searches for libraries (e.g. finding libnuma was a problem, 
</span><br>
<span class="quotelev2">&gt;&gt; now fixed).
</span><br>
<span class="quotelev2">&gt;&gt; Chances are that if you used some old script or command line 
</span><br>
<span class="quotelev2">&gt;&gt; to run configure, it may not have worked as you expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check the output of ompi_info -config.
</span><br>
<span class="quotelev2">&gt;&gt; It should show -lrdmacm -libverbs, otherwise it skipped IB.
</span><br>
<span class="quotelev2">&gt;&gt; In this case you can reconfigure, pointing to the IB library location.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have a log of your configure step you can also search 
</span><br>
<span class="quotelev2">&gt;&gt; it for openib, libverbs, etc, to see if it did what you expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University 
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jim,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you please share with us you mca conf file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jim Kress ORG wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the app I am using, ORCA (a Quantum Chemistry 
</span><br>
<span class="quotelev2">&gt;&gt; program), when it 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was compiled using openMPI 1.2.8 and run under 1.2.8 with the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following in the openmpi-mca-params.conf file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl=self,openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the app ran fine with no traffic over my Ethernet network and all 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; traffic over my Infiniband network.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, now that ORCA has been recompiled with openMPI v1.3.2 and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run under 1.3.2 (using the same openmpi-mca-params.conf file), the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance has been reduced by 50% and all the MPI 
</span><br>
<span class="quotelev2">&gt;&gt; traffic is going 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; over the Ethernet network.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a matter of fact, the openMPI v1.3.2 performance now 
</span><br>
<span class="quotelev2">&gt;&gt; looks exactly 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like the performance I get if I use MPICH 1.2.7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyone have any ideas:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) How could this have happened?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) How can I fix it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a 50% reduction in performance is just not acceptable.  Ideas/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggestions would be appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9686.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9684.php">Gus Correa: "Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice"</a>
<li><strong>In reply to:</strong> <a href="9682.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9680.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
