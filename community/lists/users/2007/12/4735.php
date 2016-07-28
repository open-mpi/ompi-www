<?
$subject_val = "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 11:08:02 2007" -->
<!-- isoreceived="20071219160802" -->
<!-- sent="Wed, 19 Dec 2007 11:07:56 -0500" -->
<!-- isosent="20071219160756" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing" -->
<!-- id="75069E0A-93F7-4883-92AD-E42EEB96F49A_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B545F99C-8FE1-47D8-BCD2-A8755F80B6C1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing<br>
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 11:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4736.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4731.php">Jeff Squyres: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4738.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>Reply:</strong> <a href="4738.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have quite different definitions than Jeff.
<br>
<p>Distributed computing is encompassing all the &quot;parallel computing&quot;  
<br>
models, including clusters, grids, master-slave, shared memory...  
<br>
Everything that basically implies using several collaborating   
<br>
processes to solve a problem (whatever collaborating means, network,  
<br>
shared memory, RPC, data dependencies... ).
<br>
<p>Cluster computing simply refers simply to computations that occurs on  
<br>
a cluster type machine. A cluster is -usually- a distributed memory  
<br>
computer based on commodity hardware (but counter examples exist).  It  
<br>
may include commodity network (like giga ethernet) or more specific  
<br>
nics (like myrinet, infiniband, quadrics and so on). As said Jeff,  
<br>
usually the best way to use such a machine is to have a kind of  
<br>
tightly coupled application.
<br>
<p>Grid computing refers to gathering several clusters (and sometimes  
<br>
large databases and scientific instruments like telescopes that  
<br>
generate data) and use them altogether. Compared to a cluster or a  
<br>
supercomputer, this introduces several issues related to password  
<br>
administration, user domains, firewall bypass, several different  
<br>
scheduler collaborating, and quite slow network between the sites.
<br>
<p>Le 19 d&#233;c. 07 &#224; 09:30, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; It's a pretty hazy difference; I don't think there are formal
</span><br>
<span class="quotelev1">&gt; definitions for each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cluster computing *usually* (but not always) implies a bit more
</span><br>
<span class="quotelev1">&gt; tightly coupled set of computing: the app communicates and coordinates
</span><br>
<span class="quotelev1">&gt; between itself more than your standard manager/worker computation
</span><br>
<span class="quotelev1">&gt; model.  Distributed computing *usually* focuses on the manager/worker
</span><br>
<span class="quotelev1">&gt; model -- send some work to anyone who asks for it and then eventually
</span><br>
<span class="quotelev1">&gt; get some results back from them (or not -- then you have to send the
</span><br>
<span class="quotelev1">&gt; same work out to someone else).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But you can certainly use the manager/worker model in cluster
</span><br>
<span class="quotelev1">&gt; computing, too.  Not all cluster computing is tightly coupled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably the easiest distinction is that &quot;cluster computing&quot; occurs on
</span><br>
<span class="quotelev1">&gt; a cluster; distributed computing [usually] occurs in a larger-than-a-
</span><br>
<span class="quotelev1">&gt; SAN area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2007, at 1:10 AM, Amit Kumar Saha wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a bit hazy about the differences between Distributed Computing
</span><br>
<span class="quotelev2">&gt;&gt; and Cluster Computing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This document here
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.ibm.com/developerworks/grid/library/gr-heritage/">http://www.ibm.com/developerworks/grid/library/gr-heritage/</a> is a nice
</span><br>
<span class="quotelev2">&gt;&gt; read on Grid Computing and it also has few lines about important
</span><br>
<span class="quotelev2">&gt;&gt; differences from Cluster Computing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hints will be duly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Amit
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Amit Kumar Saha
</span><br>
<span class="quotelev2">&gt;&gt; Writer, Programmer, Researcher
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
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
<li><strong>Next message:</strong> <a href="4736.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4734.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4731.php">Jeff Squyres: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4738.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>Reply:</strong> <a href="4738.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
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
