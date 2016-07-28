<?
$subject_val = "Re: [OMPI users] Execution in multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 13:35:01 2008" -->
<!-- isoreceived="20080930173501" -->
<!-- sent="Tue, 30 Sep 2008 19:34:31 +0200" -->
<!-- isosent="20080930173431" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Execution in multicore machines" -->
<!-- id="92FD7813-1A11-4B00-A7A3-94480367B054_at_stud.cs.uit.no" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F2AF7E9-D791-429E-8A3B-43C287097325_at_cisco.com" -->
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
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 13:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6798.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Reply:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>If they are 8 core Intel machines, I believe this is the case:
<br>
<p>*) Each pair of cores share an L2-cache. So using two cores that share  
<br>
cache will probably reduce performance.
<br>
*) Each Quad core CPU has its own memory bus (Dual independent bus),  
<br>
so using more than one core on a quad CPU can reduce performance if  
<br>
the bus is a bottle neck.
<br>
<p>In your first case, both L2-cache and memory bus are shared. In your  
<br>
second case, only memory bus is shared. In your third case no L2-cache  
<br>
or memory bus are shared (The Linux scheduler maps processes so that  
<br>
they run on different CPUs if possible).
<br>
<p>If you want another performance-case, you can map the processes such  
<br>
that they run on 4 different nodes, but share L2-cache. This can be  
<br>
done by something like this mpirun -n 8 taskset -cp 0,4 LU.C.8 . Core  
<br>
ID 0 and 4 share L2-cache on our system at least. I guess you are not  
<br>
that interested, but it is possible! :)
<br>
<p>In addition I don't believe there is very much communication happening  
<br>
in the LU-benchmark compared to the other NAS benchmarks.
<br>
<p>All in all, I agree with both of you. Both the L2-cache and the memory  
<br>
bus are probably slowing you down.
<br>
<p>As for the sys% time, I believe it is the NIC driver. The more inter- 
<br>
node communication, the more sys%. The shared memory communication  
<br>
module (BTL SM) does all its communication in user space, as you  
<br>
noticed.
<br>
<p><p>Best regards,
<br>
<p>-Torje S. Henriksen
<br>
<p>On Sep 30, 2008, at 6:55 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Are these intel-based machines?  I have seen similar effects  
</span><br>
<span class="quotelev1">&gt; mentioned earlier in this thread where having all 8 cores banging on  
</span><br>
<span class="quotelev1">&gt; memory pretty much kills performance on the UMA-style intel 8 core  
</span><br>
<span class="quotelev1">&gt; machines.  I'm not a hardware expert, but I've stayed away from  
</span><br>
<span class="quotelev1">&gt; buying 8-core servers for exactly this reason.  AMD's been NUMA all  
</span><br>
<span class="quotelev1">&gt; along, and Intel's newer chips are NUMA to alleviate some of this  
</span><br>
<span class="quotelev1">&gt; bus pressure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~2x performance loss (between 8 and 4 cores on a single node) seems  
</span><br>
<span class="quotelev1">&gt; a bit excessive, but I guess it could happen...?  (I don't have any  
</span><br>
<span class="quotelev1">&gt; hard numbers either way)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2008, at 2:30 PM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m doing some probes in a multi core (8 cores per node) machine  
</span><br>
<span class="quotelev2">&gt;&gt; with NAS benchmarks. Something that I consider strange is  
</span><br>
<span class="quotelev2">&gt;&gt; occurring...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m using only one NIC and paffinity:
</span><br>
<span class="quotelev2">&gt;&gt; ./bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -n 8
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile ./hostfile
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_include eth1
</span><br>
<span class="quotelev2">&gt;&gt; --loadbalance
</span><br>
<span class="quotelev2">&gt;&gt; ./codes/nas/NPB3.3/NPB3.3-MPI/bin/lu.C.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have sufficient memory to run this application in only one node,  
</span><br>
<span class="quotelev2">&gt;&gt; but:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) If I use one node (8 cores) the &quot;user&quot; % is around 100% per  
</span><br>
<span class="quotelev2">&gt;&gt; core. The execution time is around 430 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) If I use 2 nodes (4 cores in each node) the &quot;user&quot; % is around  
</span><br>
<span class="quotelev2">&gt;&gt; 95% per core and the &quot;sys&quot; % is 5%. The execution time is around  
</span><br>
<span class="quotelev2">&gt;&gt; 220 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) If I use 4 nodes (1 cores in each node) the &quot;user&quot; % is around  
</span><br>
<span class="quotelev2">&gt;&gt; %85 per core and the &quot;sys&quot; % is 15%. The execution time is around  
</span><br>
<span class="quotelev2">&gt;&gt; 200 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well... the questions are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) The execution time in case &quot;1&quot; should be smaller (only sm  
</span><br>
<span class="quotelev2">&gt;&gt; communication, no?) than case &quot;2&quot; and &quot;3&quot;, no? Cache problems?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B) Why the &quot;sys&quot; time while using communication inter nodes? NIC  
</span><br>
<span class="quotelev2">&gt;&gt; driver? Why this time increase when I balance the load across the  
</span><br>
<span class="quotelev2">&gt;&gt; nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6798.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>In reply to:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
<li><strong>Reply:</strong> <a href="6799.php">Joe Griffin: "[OMPI users] 1.2.2 to 1.2.7 differences."</a>
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
