<?
$subject_val = "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 09:51:10 2008" -->
<!-- isoreceived="20080822135110" -->
<!-- sent="Fri, 22 Aug 2008 07:51:02 -0600" -->
<!-- isosent="20080822135102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="0BE0AB41-B32E-4AB4-ABE9-747F225930B0_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48AEBD4F.6070408_at_lri.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 09:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6413.php">STUART PURVES: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6415.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6415.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I have found the problem, and it may indeed relate to the  
<br>
change in paffinity. By any chance, do you have unfilled sockets on  
<br>
that machine? Could you provide the output from something like &quot;cat / 
<br>
proc/cpuinfo&quot; (or the equiv for your system) so we could see what  
<br>
physical processors and sockets are present?
<br>
<p>If I'm correct as to the problem, here is the issue. OMPI has (until  
<br>
now) always assumed that the #logical processors (or sockets, or  
<br>
cores) was the same as the #physical processors (or sockets, or  
<br>
cores). As a result, several key subsystems were written without  
<br>
making any distinction as to which (logical vs physical) they were  
<br>
referring to. This was no problem until we recently encountered  
<br>
systems with &quot;holes&quot; in their system - a processor turned &quot;off&quot;, or a  
<br>
socket unpopulated, etc.
<br>
<p>In this case, the local processor id no longer matches the physical  
<br>
processor id (ditto for sockets and cores). We adjusted the paffinity  
<br>
subsystem to deal with it - took much more effort than we would have  
<br>
liked, and exposed lots of inconsistencies in how the base operating  
<br>
systems handle such situations.
<br>
<p>Unfortunately, having gotten that straightened out, it is possible  
<br>
that you have uncovered a similar inconsistency in logical vs physical  
<br>
in another subsystem. I have asked better eyes than mine to take a  
<br>
look at that now to confirm - if so, it could take us a little while  
<br>
to fix.
<br>
<p>My request for info was aimed at helping us to determine why your  
<br>
system is seeing this problem, but our tests didn't. We have tested  
<br>
the revised paffinity on both completely filled and on at least one  
<br>
system with &quot;holes&quot;, but differences in OS levels, processor types,  
<br>
etc could have caused our tests to pass while your system fails. I'm  
<br>
particularly suspicious of the old kernel you are running and how our  
<br>
revised code will handle it.
<br>
<p>For now, I would suggest you work with revisions lower than r19391 -  
<br>
could you please confirm that r19390 or earlier works?
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 22, 2008, at 7:21 AM, Camille Coti wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Camille
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I'll look into it. I suspect the problem is due to the  
</span><br>
<span class="quotelev2">&gt;&gt; redefinition of the paffinity API to clarify physical vs logical  
</span><br>
<span class="quotelev2">&gt;&gt; processors - more than likely, the maffinity interface suffers from  
</span><br>
<span class="quotelev2">&gt;&gt; the same problem we had to correct over there.
</span><br>
<span class="quotelev2">&gt;&gt; We'll report back later with an estimate of how quickly this can be  
</span><br>
<span class="quotelev2">&gt;&gt; fixed.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 22, 2008, at 7:03 AM, Camille Coti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled a clean checkout from the trunk (r19392), the problem  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is still the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Camille
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What OMPI version are you using? We just changed the paffinity  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module last night, but did nothing to maffinity. However, it is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possible that the maffinity framework makes some calls into  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paffinity that need to adjust.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So version number would help a great deal in this case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 22, 2008, at 5:23 AM, Camille Coti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to run applications on a shared-memory machine. For  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the moment I am just trying to run tests on point-to-point  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communications (a  trivial token ring) and collective operations  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (from the SkaMPI tests suite).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It runs smoothly if mpi_paffinity_alone is set to 0. For a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; number of processes which is larger than about 10, global  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communications just don't seem possible. Point-to-point  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communications seem to be OK.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But when I specify  --mca mpi_paffinity_alone 1 in my command  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line, I get the following error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mbind: Invalid argument
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I looked into the code of maffinity/libnuma, and found out the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error comes from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      numa_setlocal_memory(segments[i].mbs_start_addr,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                           segments[i].mbs_len);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in maffinity_libnuma_module.c.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The machine I am using is a Linux box running a 2.6.5-7 kernel.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Has anyone experienced a similar problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Camille
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
<li><strong>Next message:</strong> <a href="6413.php">STUART PURVES: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6411.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6415.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6415.php">Camille Coti: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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
