<?
$subject_val = "Re: [OMPI users] Execution in multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 12:55:33 2008" -->
<!-- isoreceived="20080930165533" -->
<!-- sent="Tue, 30 Sep 2008 12:55:26 -0400" -->
<!-- isosent="20080930165526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Execution in multicore machines" -->
<!-- id="7F2AF7E9-D791-429E-8A3B-43C287097325_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48E11ED5.2060808_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Execution in multicore machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 12:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are these intel-based machines?  I have seen similar effects mentioned  
<br>
earlier in this thread where having all 8 cores banging on memory  
<br>
pretty much kills performance on the UMA-style intel 8 core machines.   
<br>
I'm not a hardware expert, but I've stayed away from buying 8-core  
<br>
servers for exactly this reason.  AMD's been NUMA all along, and  
<br>
Intel's newer chips are NUMA to alleviate some of this bus pressure.
<br>
<p>~2x performance loss (between 8 and 4 cores on a single node) seems a  
<br>
bit excessive, but I guess it could happen...?  (I don't have any hard  
<br>
numbers either way)
<br>
<p><p>On Sep 29, 2008, at 2:30 PM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#180;m doing some probes in a multi core (8 cores per node) machine  
</span><br>
<span class="quotelev1">&gt; with NAS benchmarks. Something that I consider strange is occurring...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#180;m using only one NIC and paffinity:
</span><br>
<span class="quotelev1">&gt; ./bin/mpirun
</span><br>
<span class="quotelev1">&gt; -n 8
</span><br>
<span class="quotelev1">&gt; --hostfile ./hostfile
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include eth1
</span><br>
<span class="quotelev1">&gt; --loadbalance
</span><br>
<span class="quotelev1">&gt; ./codes/nas/NPB3.3/NPB3.3-MPI/bin/lu.C.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have sufficient memory to run this application in only one node,  
</span><br>
<span class="quotelev1">&gt; but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) If I use one node (8 cores) the &quot;user&quot; % is around 100% per core.  
</span><br>
<span class="quotelev1">&gt; The execution time is around 430 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) If I use 2 nodes (4 cores in each node) the &quot;user&quot; % is around  
</span><br>
<span class="quotelev1">&gt; 95% per core and the &quot;sys&quot; % is 5%. The execution time is around 220  
</span><br>
<span class="quotelev1">&gt; seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) If I use 4 nodes (1 cores in each node) the &quot;user&quot; % is around  
</span><br>
<span class="quotelev1">&gt; %85 per core and the &quot;sys&quot; % is 15%. The execution time is around  
</span><br>
<span class="quotelev1">&gt; 200 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well... the questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) The execution time in case &quot;1&quot; should be smaller (only sm  
</span><br>
<span class="quotelev1">&gt; communication, no?) than case &quot;2&quot; and &quot;3&quot;, no? Cache problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B) Why the &quot;sys&quot; time while using communication inter nodes? NIC  
</span><br>
<span class="quotelev1">&gt; driver? Why this time increase when I balance the load across the  
</span><br>
<span class="quotelev1">&gt; nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6797.php">Torje Henriksen: "Re: [OMPI users] Execution in multicore machines"</a>
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
