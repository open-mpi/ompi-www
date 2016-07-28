<?
$subject_val = "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 10:04:37 2008" -->
<!-- isoreceived="20080822140437" -->
<!-- sent="Fri, 22 Aug 2008 16:00:53 +0200" -->
<!-- isosent="20080822140053" -->
<!-- name="Camille Coti" -->
<!-- email="coti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="48AEC695.8070508_at_lri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0BE0AB41-B32E-4AB4-ABE9-747F225930B0_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-08-22 10:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6416.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6414.php">Mi Yan: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6417.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6417.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6418.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I have tried with several versions, since you were working on 
<br>
the affinity thing. I have tried with revision 19103 a couple a weeks 
<br>
ago, the problem was already there.
<br>
<p>Part of /proc/cpuinfo is below:
<br>
processor  : 0
<br>
vendor     : GenuineIntel
<br>
arch       : IA-64
<br>
family     : Itanium 2
<br>
model      : 0
<br>
revision   : 7
<br>
archrev    : 0
<br>
features   : branchlong
<br>
cpu number : 0
<br>
cpu regs   : 4
<br>
cpu MHz    : 900.000000
<br>
itc MHz    : 900.000000
<br>
BogoMIPS   : 1325.40
<br>
siblings   : 1
<br>
<p>The machine is a 60-way Altix machine, so you have 60 times this 
<br>
information in /proc/cpuinfo (yes, 60, not 64).
<br>
<p>Camille
<br>
<p><p><p>Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; I believe I have found the problem, and it may indeed relate to the 
</span><br>
<span class="quotelev1">&gt; change in paffinity. By any chance, do you have unfilled sockets on that 
</span><br>
<span class="quotelev1">&gt; machine? Could you provide the output from something like &quot;cat 
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo&quot; (or the equiv for your system) so we could see what 
</span><br>
<span class="quotelev1">&gt; physical processors and sockets are present?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I'm correct as to the problem, here is the issue. OMPI has (until 
</span><br>
<span class="quotelev1">&gt; now) always assumed that the #logical processors (or sockets, or cores) 
</span><br>
<span class="quotelev1">&gt; was the same as the #physical processors (or sockets, or cores). As a 
</span><br>
<span class="quotelev1">&gt; result, several key subsystems were written without making any 
</span><br>
<span class="quotelev1">&gt; distinction as to which (logical vs physical) they were referring to. 
</span><br>
<span class="quotelev1">&gt; This was no problem until we recently encountered systems with &quot;holes&quot; 
</span><br>
<span class="quotelev1">&gt; in their system - a processor turned &quot;off&quot;, or a socket unpopulated, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, the local processor id no longer matches the physical 
</span><br>
<span class="quotelev1">&gt; processor id (ditto for sockets and cores). We adjusted the paffinity 
</span><br>
<span class="quotelev1">&gt; subsystem to deal with it - took much more effort than we would have 
</span><br>
<span class="quotelev1">&gt; liked, and exposed lots of inconsistencies in how the base operating 
</span><br>
<span class="quotelev1">&gt; systems handle such situations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, having gotten that straightened out, it is possible that 
</span><br>
<span class="quotelev1">&gt; you have uncovered a similar inconsistency in logical vs physical in 
</span><br>
<span class="quotelev1">&gt; another subsystem. I have asked better eyes than mine to take a look at 
</span><br>
<span class="quotelev1">&gt; that now to confirm - if so, it could take us a little while to fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My request for info was aimed at helping us to determine why your system 
</span><br>
<span class="quotelev1">&gt; is seeing this problem, but our tests didn't. We have tested the revised 
</span><br>
<span class="quotelev1">&gt; paffinity on both completely filled and on at least one system with 
</span><br>
<span class="quotelev1">&gt; &quot;holes&quot;, but differences in OS levels, processor types, etc could have 
</span><br>
<span class="quotelev1">&gt; caused our tests to pass while your system fails. I'm particularly 
</span><br>
<span class="quotelev1">&gt; suspicious of the old kernel you are running and how our revised code 
</span><br>
<span class="quotelev1">&gt; will handle it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now, I would suggest you work with revisions lower than r19391 - 
</span><br>
<span class="quotelev1">&gt; could you please confirm that r19390 or earlier works?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2008, at 7:21 AM, Camille Coti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, thank you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Camille
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, I'll look into it. I suspect the problem is due to the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; redefinition of the paffinity API to clarify physical vs logical 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors - more than likely, the maffinity interface suffers from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same problem we had to correct over there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We'll report back later with an estimate of how quickly this can be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 22, 2008, at 7:03 AM, Camille Coti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I compiled a clean checkout from the trunk (r19392), the problem is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Camille
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What OMPI version are you using? We just changed the paffinity 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; module last night, but did nothing to maffinity. However, it is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; possible that the maffinity framework makes some calls into 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; paffinity that need to adjust.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So version number would help a great deal in this case.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 22, 2008, at 5:23 AM, Camille Coti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am trying to run applications on a shared-memory machine. For 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the moment I am just trying to run tests on point-to-point 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communications (a  trivial token ring) and collective operations 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (from the SkaMPI tests suite).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It runs smoothly if mpi_paffinity_alone is set to 0. For a number 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of processes which is larger than about 10, global communications 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; just don't seem possible. Point-to-point communications seem to be 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OK.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But when I specify  --mca mpi_paffinity_alone 1 in my command 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line, I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mbind: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I looked into the code of maffinity/libnuma, and found out the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error comes from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      numa_setlocal_memory(segments[i].mbs_start_addr,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                           segments[i].mbs_len);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in maffinity_libnuma_module.c.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The machine I am using is a Linux box running a 2.6.5-7 kernel.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Has anyone experienced a similar problem?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Camille
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
<li><strong>Next message:</strong> <a href="6416.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6414.php">Mi Yan: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6412.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6417.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6417.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6418.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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
