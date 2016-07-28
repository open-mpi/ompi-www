<?
$subject_val = "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 09:42:57 2009" -->
<!-- isoreceived="20090211144257" -->
<!-- sent="Wed, 11 Feb 2009 07:42:46 -0700" -->
<!-- isosent="20090211144246" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am" -->
<!-- id="B6F0D660-FF3D-44A9-88D6-BF109D8BDD3C_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1234355903.29157.104.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 09:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>In reply to:</strong> <a href="8017.php">&#197;ke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ARG!  You are quite correct - the line got dropped somehow. This is  
<br>
now fixed in 1.3.1, which should come out soon.
<br>
<p>Thanks for picking up on this!
<br>
Ralph
<br>
<p>On Feb 11, 2009, at 5:38 AM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/tm/Makefile.am is missing a
</span><br>
<span class="quotelev1">&gt; mca_plm_tm_la_LIBADD = $(plm_tm_LIBS)
</span><br>
<span class="quotelev1">&gt; like the corresponding line in orte/mca/ras/tm/Makefile.am
</span><br>
<span class="quotelev1">&gt; mca_ras_tm_la_LIBADD...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is the cause for the &quot;undefined symbol: tm_init&quot; mail  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; 2009-02-09 20:41:45 by Brett Pemberton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the same problem and when closely checking the resulting
</span><br>
<span class="quotelev1">&gt; Makefiles and build output i saw that mca_ras_tm.so gets the -ltorque
</span><br>
<span class="quotelev1">&gt; added but mca_plm_tm.so doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<li><strong>Next message:</strong> <a href="8020.php">Ralph Castain: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>In reply to:</strong> <a href="8017.php">&#197;ke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
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
