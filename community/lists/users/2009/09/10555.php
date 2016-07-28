<?
$subject_val = "Re: [OMPI users] explicit routing for multiple network interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 04:11:44 2009" -->
<!-- isoreceived="20090902081144" -->
<!-- sent="Wed, 2 Sep 2009 11:11:40 +0300" -->
<!-- isosent="20090902081140" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] explicit routing for multiple network interfaces" -->
<!-- id="B5F74246-824E-4CE5-AB6F-6678D776D564_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f6a174940908250914t31a40452y39386ff06c0198cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] explicit routing for multiple network interfaces<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 04:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10556.php">amjad ali: "Re: [OMPI users] Running problem"</a>
<li><strong>Previous message:</strong> <a href="10554.php">Attila B&#246;rcs: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10565.php">shan axida: "[OMPI users] How does OpenMPI decided to use which algorithm in MPI_Bcast????????????????"</a>
<li><strong>Reply:</strong> <a href="10565.php">shan axida: "[OMPI users] How does OpenMPI decided to use which algorithm in MPI_Bcast????????????????"</a>
<li><strong>Reply:</strong> <a href="10640.php">Jayanta Roy: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you don't use btl_tcp_if_include, Open MPI should use all available  
<br>
ethernet devices, and *should* (although I haven't tested this  
<br>
recently) only use devices that are routable to specific peers.   
<br>
Specifically, if you're on a node with eth0-3, it should use all of  
<br>
them to connect to another peer that has eth0-3, but only use eth0-1  
<br>
to connect to a peer that only has those 2 devices.  (all of the above  
<br>
assume that all your eth0's are on one subnet, all your eth1's are on  
<br>
another subnet, ...etc.)
<br>
<p>Does that work for you?
<br>
<p><p>On Aug 25, 2009, at 7:14 PM, Jayanta Roy wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Openmpi (version 1.2.2) for MPI data transfer using non- 
</span><br>
<span class="quotelev1">&gt; blocking MPI calls like MPI_Isend, MPI_Irecv etc. I am using &quot;--mca  
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include eth0,eth1&quot; to use both the eth link for data  
</span><br>
<span class="quotelev1">&gt; transfer within 48 nodes.  Now I have added eth2 and eth3 links on  
</span><br>
<span class="quotelev1">&gt; the 32 compute nodes. My aim is to share the high speed data within  
</span><br>
<span class="quotelev1">&gt; 32 compute nodes through eth2 and eth3. But I can't include this as  
</span><br>
<span class="quotelev1">&gt; part of &quot;mca&quot; as the rest of 16 nodes do not have these additional  
</span><br>
<span class="quotelev1">&gt; interfaces. In MPI/Openmp can one specify explicit routing table  
</span><br>
<span class="quotelev1">&gt; within a set of nodes? Such that I can edit /etc/host for additional  
</span><br>
<span class="quotelev1">&gt; hostname with these new interfaces and add these hosts in the mpi  
</span><br>
<span class="quotelev1">&gt; hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jayanta _______________________________________________
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
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10556.php">amjad ali: "Re: [OMPI users] Running problem"</a>
<li><strong>Previous message:</strong> <a href="10554.php">Attila B&#246;rcs: "Re: [OMPI users] [OT] : Programming on PS3 Cell BE chip ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10565.php">shan axida: "[OMPI users] How does OpenMPI decided to use which algorithm in MPI_Bcast????????????????"</a>
<li><strong>Reply:</strong> <a href="10565.php">shan axida: "[OMPI users] How does OpenMPI decided to use which algorithm in MPI_Bcast????????????????"</a>
<li><strong>Reply:</strong> <a href="10640.php">Jayanta Roy: "Re: [OMPI users] explicit routing for multiple network interfaces"</a>
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
