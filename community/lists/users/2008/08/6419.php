<?
$subject_val = "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 11:50:47 2008" -->
<!-- isoreceived="20080822155047" -->
<!-- sent="Fri, 22 Aug 2008 17:47:04 +0200" -->
<!-- isosent="20080822154704" -->
<!-- name="Camille Coti" -->
<!-- email="coti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="48AEDF78.5070901_at_lri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="343F0456-A3F0-40FB-A9B3-13C942B0A458_at_cisco.com" -->
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
<strong>From:</strong> Camille Coti (<em>coti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 11:47:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6418.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6418.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
inria_at_behemoth:~$ uname -a
<br>
Linux behemoth 2.6.5-7.283-sn2 #1 SMP Wed Nov 29 16:55:53 UTC 2006 ia64 
<br>
ia64 ia64 GNU/Linux
<br>
<p>I am not sure the output of plpa-info --topo gives good news...
<br>
<p>inria_at_behemoth:~$ plpa-info --topo
<br>
Kernel affinity support: yes
<br>
Kernel topology support: no
<br>
Number of processor sockets: unknown
<br>
Kernel topology not supported -- cannot show topology information
<br>
<p>Camille
<br>
<p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Camile --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you also send the output of &quot;uname -a&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, just to be absoultely sure, let's check that PLPA is doing the 
</span><br>
<span class="quotelev1">&gt; Right thing here (we don't think this is problem, but it's worth 
</span><br>
<span class="quotelev1">&gt; checking).  Grab the latest beta:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/plpa/v1.2/">http://www.open-mpi.org/software/plpa/v1.2/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a very small package and easy to install under your $HOME (or 
</span><br>
<span class="quotelev1">&gt; whatever).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the output of &quot;plpa-info --topo&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2008, at 7:00 AM, Camille Coti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I have tried with several versions, since you were working 
</span><br>
<span class="quotelev2">&gt;&gt; on the affinity thing. I have tried with revision 19103 a couple a 
</span><br>
<span class="quotelev2">&gt;&gt; weeks ago, the problem was already there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Part of /proc/cpuinfo is below:
</span><br>
<span class="quotelev2">&gt;&gt; processor  : 0
</span><br>
<span class="quotelev2">&gt;&gt; vendor     : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; arch       : IA-64
</span><br>
<span class="quotelev2">&gt;&gt; family     : Itanium 2
</span><br>
<span class="quotelev2">&gt;&gt; model      : 0
</span><br>
<span class="quotelev2">&gt;&gt; revision   : 7
</span><br>
<span class="quotelev2">&gt;&gt; archrev    : 0
</span><br>
<span class="quotelev2">&gt;&gt; features   : branchlong
</span><br>
<span class="quotelev2">&gt;&gt; cpu number : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu regs   : 4
</span><br>
<span class="quotelev2">&gt;&gt; cpu MHz    : 900.000000
</span><br>
<span class="quotelev2">&gt;&gt; itc MHz    : 900.000000
</span><br>
<span class="quotelev2">&gt;&gt; BogoMIPS   : 1325.40
</span><br>
<span class="quotelev2">&gt;&gt; siblings   : 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machine is a 60-way Altix machine, so you have 60 times this 
</span><br>
<span class="quotelev2">&gt;&gt; information in /proc/cpuinfo (yes, 60, not 64).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Camille
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe I have found the problem, and it may indeed relate to the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change in paffinity. By any chance, do you have unfilled sockets on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that machine? Could you provide the output from something like &quot;cat 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /proc/cpuinfo&quot; (or the equiv for your system) so we could see what 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical processors and sockets are present?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I'm correct as to the problem, here is the issue. OMPI has (until 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now) always assumed that the #logical processors (or sockets, or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores) was the same as the #physical processors (or sockets, or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores). As a result, several key subsystems were written without 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; making any distinction as to which (logical vs physical) they were 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; referring to. This was no problem until we recently encountered 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems with &quot;holes&quot; in their system - a processor turned &quot;off&quot;, or a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket unpopulated, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case, the local processor id no longer matches the physical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor id (ditto for sockets and cores). We adjusted the paffinity 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subsystem to deal with it - took much more effort than we would have 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; liked, and exposed lots of inconsistencies in how the base operating 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems handle such situations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, having gotten that straightened out, it is possible 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you have uncovered a similar inconsistency in logical vs 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical in another subsystem. I have asked better eyes than mine to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; take a look at that now to confirm - if so, it could take us a little 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while to fix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My request for info was aimed at helping us to determine why your 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system is seeing this problem, but our tests didn't. We have tested 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the revised paffinity on both completely filled and on at least one 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system with &quot;holes&quot;, but differences in OS levels, processor types, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc could have caused our tests to pass while your system fails. I'm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particularly suspicious of the old kernel you are running and how our 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revised code will handle it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For now, I would suggest you work with revisions lower than r19391 - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could you please confirm that r19390 or earlier works?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 22, 2008, at 7:21 AM, Camille Coti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, thank you!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Okay, I'll look into it. I suspect the problem is due to the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; redefinition of the paffinity API to clarify physical vs logical 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processors - more than likely, the maffinity interface suffers from 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the same problem we had to correct over there.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We'll report back later with an estimate of how quickly this can be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fixed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 22, 2008, at 7:03 AM, Camille Coti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I compiled a clean checkout from the trunk (r19392), the problem 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is still the same.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Camille
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What OMPI version are you using? We just changed the paffinity 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; module last night, but did nothing to maffinity. However, it is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; possible that the maffinity framework makes some calls into 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; paffinity that need to adjust.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So version number would help a great deal in this case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 22, 2008, at 5:23 AM, Camille Coti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to run applications on a shared-memory machine. For 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the moment I am just trying to run tests on point-to-point 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communications (a  trivial token ring) and collective operations 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (from the SkaMPI tests suite).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It runs smoothly if mpi_paffinity_alone is set to 0. For a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; number of processes which is larger than about 10, global 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communications just don't seem possible. Point-to-point 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communications seem to be OK.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But when I specify  --mca mpi_paffinity_alone 1 in my command 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; line, I get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mbind: Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I looked into the code of maffinity/libnuma, and found out the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error comes from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     numa_setlocal_memory(segments[i].mbs_start_addr,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          segments[i].mbs_len);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in maffinity_libnuma_module.c.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The machine I am using is a Linux box running a 2.6.5-7 kernel.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Has anyone experienced a similar problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6418.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6418.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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
