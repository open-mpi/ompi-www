<?
$subject_val = "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 11:52:49 2008" -->
<!-- isoreceived="20080822155249" -->
<!-- sent="Fri, 22 Aug 2008 08:52:43 -0700" -->
<!-- isosent="20080822155243" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="A34B28B2-569D-4C66-B6C0-2A16D48BB9AA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48AEDF78.5070901_at_lri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem when mpi_paffinity_alone is set to 1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 11:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6419.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6419.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6414.php">Mi Yan: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, this is a fairly kernel -- it does not support the topology stuff.
<br>
<p>So in this case, logical and physical IDs should be the same.  Hmm.   
<br>
Need to think about that...
<br>
<p><p>On Aug 22, 2008, at 8:47 AM, Camille Coti wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; inria_at_behemoth:~$ uname -a
</span><br>
<span class="quotelev1">&gt; Linux behemoth 2.6.5-7.283-sn2 #1 SMP Wed Nov 29 16:55:53 UTC 2006  
</span><br>
<span class="quotelev1">&gt; ia64 ia64 ia64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure the output of plpa-info --topo gives good news...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; inria_at_behemoth:~$ plpa-info --topo
</span><br>
<span class="quotelev1">&gt; Kernel affinity support: yes
</span><br>
<span class="quotelev1">&gt; Kernel topology support: no
</span><br>
<span class="quotelev1">&gt; Number of processor sockets: unknown
</span><br>
<span class="quotelev1">&gt; Kernel topology not supported -- cannot show topology information
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Camille
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Camile --
</span><br>
<span class="quotelev2">&gt;&gt; Can you also send the output of &quot;uname -a&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; Also, just to be absoultely sure, let's check that PLPA is doing  
</span><br>
<span class="quotelev2">&gt;&gt; the Right thing here (we don't think this is problem, but it's  
</span><br>
<span class="quotelev2">&gt;&gt; worth checking).  Grab the latest beta:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/plpa/v1.2/">http://www.open-mpi.org/software/plpa/v1.2/</a>
</span><br>
<span class="quotelev2">&gt;&gt; It's a very small package and easy to install under your $HOME (or  
</span><br>
<span class="quotelev2">&gt;&gt; whatever).
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the output of &quot;plpa-info --topo&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 22, 2008, at 7:00 AM, Camille Coti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, I have tried with several versions, since you were  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working on the affinity thing. I have tried with revision 19103 a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couple a weeks ago, the problem was already there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Part of /proc/cpuinfo is below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor  : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor     : GenuineIntel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arch       : IA-64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; family     : Itanium 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model      : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revision   : 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archrev    : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; features   : branchlong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu number : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu regs   : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz    : 900.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itc MHz    : 900.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BogoMIPS   : 1325.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings   : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The machine is a 60-way Altix machine, so you have 60 times this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information in /proc/cpuinfo (yes, 60, not 64).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe I have found the problem, and it may indeed relate to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the change in paffinity. By any chance, do you have unfilled  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sockets on that machine? Could you provide the output from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something like &quot;cat /proc/cpuinfo&quot; (or the equiv for your system)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so we could see what physical processors and sockets are present?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I'm correct as to the problem, here is the issue. OMPI has  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (until now) always assumed that the #logical processors (or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sockets, or cores) was the same as the #physical processors (or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sockets, or cores). As a result, several key subsystems were  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; written without making any distinction as to which (logical vs  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; physical) they were referring to. This was no problem until we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recently encountered systems with &quot;holes&quot; in their system - a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor turned &quot;off&quot;, or a socket unpopulated, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In this case, the local processor id no longer matches the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; physical processor id (ditto for sockets and cores). We adjusted  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the paffinity subsystem to deal with it - took much more effort  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than we would have liked, and exposed lots of inconsistencies in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how the base operating systems handle such situations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, having gotten that straightened out, it is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possible that you have uncovered a similar inconsistency in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logical vs physical in another subsystem. I have asked better  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eyes than mine to take a look at that now to confirm - if so, it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could take us a little while to fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My request for info was aimed at helping us to determine why your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system is seeing this problem, but our tests didn't. We have  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tested the revised paffinity on both completely filled and on at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; least one system with &quot;holes&quot;, but differences in OS levels,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor types, etc could have caused our tests to pass while  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your system fails. I'm particularly suspicious of the old kernel  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are running and how our revised code will handle it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For now, I would suggest you work with revisions lower than  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r19391 - could you please confirm that r19390 or earlier works?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 22, 2008, at 7:21 AM, Camille Coti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OK, thank you!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Okay, I'll look into it. I suspect the problem is due to the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; redefinition of the paffinity API to clarify physical vs  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; logical processors - more than likely, the maffinity interface  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; suffers from the same problem we had to correct over there.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We'll report back later with an estimate of how quickly this  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can be fixed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 22, 2008, at 7:03 AM, Camille Coti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I compiled a clean checkout from the trunk (r19392), the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem is still the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Camille
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What OMPI version are you using? We just changed the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; paffinity module last night, but did nothing to maffinity.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, it is possible that the maffinity framework makes  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; some calls into paffinity that need to adjust.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So version number would help a great deal in this case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 22, 2008, at 5:23 AM, Camille Coti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to run applications on a shared-memory machine.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For the moment I am just trying to run tests on point-to- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; point communications (a  trivial token ring) and collective  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; operations (from the SkaMPI tests suite).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It runs smoothly if mpi_paffinity_alone is set to 0. For a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; number of processes which is larger than about 10, global  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communications just don't seem possible. Point-to-point  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communications seem to be OK.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But when I specify  --mca mpi_paffinity_alone 1 in my  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; command line, I get the following error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mbind: Invalid argument
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I looked into the code of maffinity/libnuma, and found out  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the error comes from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    numa_setlocal_memory(segments[i].mbs_start_addr,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         segments[i].mbs_len);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in maffinity_libnuma_module.c.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The machine I am using is a Linux box running a 2.6.5-7  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; kernel.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Has anyone experienced a similar problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6419.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6419.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6414.php">Mi Yan: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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
