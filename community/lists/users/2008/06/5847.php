<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  7 04:51:16 2008" -->
<!-- isoreceived="20080607085116" -->
<!-- sent="Sat, 7 Jun 2008 09:50:59 +0100" -->
<!-- isosent="20080607085059" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE8015D4774_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6704E8E8-42CA-4DBC-9CA4-22FCBA4CE912_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-06-07 04:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti
<br>
&nbsp;
<br>
&nbsp;
<br>
I tried this but the problem I ran into was that the value of the environment variable OMPI_MCA_btl set in the PE start script is not propagated to the job script. Therefore the mpirun environment is not aware of its value. I must be missing something here, do you have any idea? 
<br>
(I associate each hostgroup with its own PE, similar to the suggestion in that url, but with  a common start script)
<br>
&nbsp;
<br>
Thanks
<br>
&nbsp;
<br>
Henk
<br>
<p><p>A transparent solution would be to create a &quot;starter_method&quot; in the 
<br>
parallel queue, which will check the node that it's running on and 
<br>
hence you know which type of interface to use. Export the variable 
<br>
and exec the real script; i.e. something like:
<br>
<p>#!/bin/sh
<br>
if [ &quot;${HOSTNAME%%[0-9]*}&quot; = &quot;node_ib&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_btl=tcp
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_btl=openib
<br>
fi
<br>
exec &quot;$@&quot;
<br>
<p><p>I think you get the idea of the script. Maybe you have some special 
<br>
names for these machines. Another indicator would be the $PE or 
<br>
$QUEUE of SGE. If you want to be sure to get only nodes of one and 
<br>
the same type (but you don't care which at submission time), you will 
<br>
need to setup something like:
<br>
<p><a href="http://gridengine.info/articles/2006/02/14/grouping-jobs-to-nodes-via-wildcard-pes">http://gridengine.info/articles/2006/02/14/grouping-jobs-to-nodes-via-wildcard-pes</a>
<br>
<p>anyway.
<br>
<p>HTH - Reuti
<br>
<p><p><span class="quotelev1">&gt;
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Previous message:</strong> <a href="5846.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5842.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>Reply:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
