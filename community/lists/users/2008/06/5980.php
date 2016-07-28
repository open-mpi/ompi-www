<?
$subject_val = "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 07:50:01 2008" -->
<!-- isoreceived="20080624115001" -->
<!-- sent="Tue, 24 Jun 2008 07:49:49 -0400" -->
<!-- isosent="20080624114949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable" -->
<!-- id="6B4C753E-86E8-4D30-83DF-8AEBD8C728D4_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="78DE440C4156CC45A35FDBCBF9B830D7038E0813_at_sohm.kpit.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 07:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="5979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5977.php">Aditya Vasal: "[OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 24, 2008, at 1:12 AM, Aditya Vasal wrote:
<br>
<p><span class="quotelev1">&gt; I am using Linpack test on SLES 10 using openmpi-1.2.6.
</span><br>
<span class="quotelev1">&gt; However, I am not getting expected output,
</span><br>
<span class="quotelev1">&gt; i would be glad to receive some information regarding the  
</span><br>
<span class="quotelev1">&gt; environment variable OMPI_MCA_ns_nds_vpid and it&#146;s use.
</span><br>
<p><p>As I mentioned in my other reply, OMPI_MCA_ns_nds_vpid is an  
<br>
&quot;internal&quot; Open MPI parameter -- you should not set it yourself.  If  
<br>
you are seeing some kind of problem with this parameter, it could be  
<br>
either a bug in Open MPI or perhaps a misconfiguration / corrupted  
<br>
installation.
<br>
<p>If you are having a run-time problem with Open MPI, please see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="5979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5977.php">Aditya Vasal: "[OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
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
