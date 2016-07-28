<?
$subject_val = "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  7 05:09:22 2008" -->
<!-- isoreceived="20080607090922" -->
<!-- sent="Sat, 7 Jun 2008 11:09:07 +0200" -->
<!-- isosent="20080607090907" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network" -->
<!-- id="26BFE87C-A399-467E-9CEB-667C56F04506_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE8015D4774_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-07 05:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5849.php">Ashley Pittman: "[OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.06.2008 um 10:50 schrieb SLIM H.A.:
<br>
<p><span class="quotelev1">&gt; I tried this but the problem I ran into was that the value of the  
</span><br>
<span class="quotelev1">&gt; environment variable OMPI_MCA_btl set in the PE start script is not
</span><br>
<p>exactly. Therefore I mentioned &quot;starter_method&quot;, which is set in the  
<br>
queue definition. The &quot;start_proc_args&quot; in the PE definition you need  
<br>
anyway to prepare the machinefile.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; propagated to the job script. Therefore the mpirun environment is  
</span><br>
<span class="quotelev1">&gt; not aware of its value. I must be missing something here, do you  
</span><br>
<span class="quotelev1">&gt; have any idea?
</span><br>
<span class="quotelev1">&gt; (I associate each hostgroup with its own PE, similar to the  
</span><br>
<span class="quotelev1">&gt; suggestion in that url, but with  a common start script)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A transparent solution would be to create a &quot;starter_method&quot; in the
</span><br>
<span class="quotelev1">&gt; parallel queue, which will check the node that it's running on and
</span><br>
<span class="quotelev1">&gt; hence you know which type of interface to use. Export the variable
</span><br>
<span class="quotelev1">&gt; and exec the real script; i.e. something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; if [ &quot;${HOSTNAME%%[0-9]*}&quot; = &quot;node_ib&quot; ]; then
</span><br>
<span class="quotelev1">&gt;      export OMPI_MCA_btl=tcp
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;      export OMPI_MCA_btl=openib
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you get the idea of the script. Maybe you have some special
</span><br>
<span class="quotelev1">&gt; names for these machines. Another indicator would be the $PE or
</span><br>
<span class="quotelev1">&gt; $QUEUE of SGE. If you want to be sure to get only nodes of one and
</span><br>
<span class="quotelev1">&gt; the same type (but you don't care which at submission time), you will
</span><br>
<span class="quotelev1">&gt; need to setup something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.info/articles/2006/02/14/grouping-jobs-to-nodes">http://gridengine.info/articles/2006/02/14/grouping-jobs-to-nodes</a>- 
</span><br>
<span class="quotelev1">&gt; via-wildcard-pes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH - Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np $NSLOTS executable
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as I have seen in some of the OpenMPI FAQs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Henk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] on behalf of Reuti
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Fri 6/6/2008 6:47 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] using OpenMPI + SGE in a heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt; network
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 06.06.2008 um 19:31 schrieb Patrick Geoffray:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I would be grateful for any advice
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Just to check, you are not using the MTL for MX, right ? Only the
</span><br>
<span class="quotelev2">&gt; &gt; BTL
</span><br>
<span class="quotelev3">&gt; &gt; &gt; interface allow to choose between several devices at run time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At least there would be the option to built two binaries and decide
</span><br>
<span class="quotelev2">&gt; &gt; at runtime which to use in your jobscript - depending on the machine
</span><br>
<span class="quotelev2">&gt; &gt; you landed on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5849.php">Ashley Pittman: "[OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<li><strong>In reply to:</strong> <a href="5847.php">SLIM H.A.: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5844.php">George Bosilca: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
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
