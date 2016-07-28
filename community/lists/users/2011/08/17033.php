<?
$subject_val = "Re: [OMPI users] Open MPI via SSH noob issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 12:50:30 2011" -->
<!-- isoreceived="20110809165030" -->
<!-- sent="Tue, 9 Aug 2011 12:50:24 -0400" -->
<!-- isosent="20110809165024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI via SSH noob issue" -->
<!-- id="D9DF7FA4-2CEA-4DFB-A72C-F844C1DCC7D0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E415CD2.9030303_at_atmos.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI via SSH noob issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 12:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17034.php">CB: "[OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Previous message:</strong> <a href="17032.php">David Warren: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17032.php">David Warren: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17041.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Reply:</strong> <a href="17041.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, Open MPI doesn't use the names in the hostfile to figure out which TCP/IP addresses to use (for example).  Each process ends up publishing a list of IP addresses at which it can be connected, and OMPI does routability computations to figure out which is the &quot;best&quot; address to contact a given peer on.
<br>
<p>If you're just starting with Open MPI, can you upgrade?  1.2.8 is pretty ancient.  Open MPI 1.4.3 is the most recent stable release; 1.5.3 is our &quot;feature&quot; series, but it's also relatively stable (new releases are coming in both the 1.4.x and 1.5.x series soon, FWIW).
<br>
<p><p>On Aug 9, 2011, at 12:14 PM, David Warren wrote:
<br>
<p><span class="quotelev1">&gt; I don't know if this is it, but if you use the name localhost, won't processes on both machines try to talk to 127.0.0.1? I believe you need to use the real hostname in you host file. I think that your two tests work because there is no interprocess communication, just stdout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/08/11 23:46, Christopher Jones wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I changed the subject of my previous posting to reflect a new problem encountered when I changed my strategy to using SSH instead of Xgrid on two mac pros. I've set up a login-less ssh communication between the two macs (connected via direct ethernet, both running openmpi 1.2.8 on OSX 10.6.8) per the instructions on the FAQ. I can type in 'ssh computer-name.local' on either computer and connect without a password prompt. From what I can see, the ssh-agent is up and running - the following is listed in my ENV:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SSH_AUTH_SOCK=/tmp/launch-5FoCc1/Listeners
</span><br>
<span class="quotelev2">&gt;&gt; SSH_AGENT_PID=61058
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My host file simply lists 'localhost' and 'chrisjones2_at_allana-welshs-mac-pro.local'. When I run a simple hello_world test, I get what seems like a reasonable output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; chris-joness-mac-pro:~ chrisjones$ mpirun -np 8 -hostfile hostfile ./test_hello
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can also run hostname and get what seems to be an ok response (unless I'm wrong about this):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; chris-joness-mac-pro:~ chrisjones$ mpirun -np 8 -hostfile hostfile hostname
</span><br>
<span class="quotelev2">&gt;&gt; allana-welshs-mac-pro.local
</span><br>
<span class="quotelev2">&gt;&gt; allana-welshs-mac-pro.local
</span><br>
<span class="quotelev2">&gt;&gt; allana-welshs-mac-pro.local
</span><br>
<span class="quotelev2">&gt;&gt; allana-welshs-mac-pro.local
</span><br>
<span class="quotelev2">&gt;&gt; quadcore.mikrob.slu.se
</span><br>
<span class="quotelev2">&gt;&gt; quadcore.mikrob.slu.se
</span><br>
<span class="quotelev2">&gt;&gt; quadcore.mikrob.slu.se
</span><br>
<span class="quotelev2">&gt;&gt; quadcore.mikrob.slu.se
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, when I run the ring_c test, it freezes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; chris-joness-mac-pro:~ chrisjones$ mpirun -np 8 -hostfile hostfile ./ring_c
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (8 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (I noted that processors on both computers are active).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ring_c was compiled separately on each computer, however both have the same version of openmpi and OSX. I've gone through the FAQ and searched the user forum, but I can't quite seems to get this problem unstuck.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for your time,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 5, 2011, at 6:00 PM,&lt;users-request_at_[hidden]&gt;  &lt;users-request_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1. Re: OpenMPI causing WRF to crash (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   2. Re: OpenMPI causing WRF to crash (Anthony Chan)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3. Re: Program hangs on send when run with nodes on  remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      machine (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   4. Re: openmpi 1.2.8 on Xgrid noob issue (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   5. Re: parallel I/O on 64-bit indexed arays (Rob Latham)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 4 Aug 2011 19:18:36 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI causing WRF to crash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:&lt;3F0E661F-A74F-4E51-86C0-1F84FEB0764D_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal 15 is usually SIGTERM on Linux, meaning that some external entity probably killed the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OMPI error message you describe is also typical for that kind of scenario -- i.e., a process exited without calling MPI_Finalize could mean that it called exit() or some external process killed it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 3, 2011, at 7:24 AM, BasitAli Khan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to run a rather heavy wrf simulation with spectral nudging but the simulation crashes after 1.8 minutes of integration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The simulation has two domains    with  d01 = 601x601 and d02 = 721x721 and 51 vertical levels. I tried this simulation on two different systems but result was more or less same. For example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On our Bluegene/P  with SUSE Linux Enterprise Server 10 ppc and XLF compiler I tried to run wrf on 2048 shared memory nodes (1 compute node = 4 cores , 32 bit, 850 Mhz). For the parallel run I used mpixlc, mpixlcxx and mpixlf90.  I got the following error message in the wrf.err file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Aug 01 19:50:21.244540&gt;  BE_MPI (ERROR): The error message in the job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; record is as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Aug 01 19:50:21.244657&gt;  BE_MPI (ERROR):   &quot;killed with signal 15&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also tried to run the same simulation on our linux cluster (Linux Red Hat Enterprise 5.4m  x86_64 and Intel compiler) with 8, 16 and 64 nodes (1 compute node=8 cores). For the parallel run I am used mpi/openmpi/1.4.2-intel-11. I got the following error message in the error log after couple of minutes of integration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mpirun has exited due to process rank 45 with PID 19540 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node ci118 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried many things but nothing seems to be working. However, if I reduce  grid points below 200, the simulation goes fine. It appears that probably OpenMP has problem with large number of grid points but I have no idea how to fix it. I will greatly appreciate if you could suggest some solution.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basit A. Khan, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Postdoctoral Fellow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Division of Physical Sciences&amp;  Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office# 3204, Level 3, Building 1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; King Abdullah University of Science&amp;  Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4700 King Abdullah Blvd, Box 2753, Thuwal 23955 ?6900,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kingdom of Saudi Arabia.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office: +966(0)2 808 0276,  Mobile: +966(0)5 9538 7592
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E-mail: basitali.khan_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Skype name: basit.a.khan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 4 Aug 2011 18:59:59 -0500 (CDT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Anthony Chan&lt;chan_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI causing WRF to crash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;660521091.191111.1312502399225.JavaMail.root_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=utf-8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you want to debug this on BGP, you could set BG_COREDUMPONERROR=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and look at the backtrace in the light weight core files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (you probably need to recompile everything with -g).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A.Chan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Dmitry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for a prompt and fairly detailed response. I have also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; forwarded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the email to wrf community in the hope that somebody would have some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; straight forward solution. I will try to debug the error as suggested
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you if I would not have much luck from the wrf forum.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basit A. Khan, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Postdoctoral Fellow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Division of Physical Sciences&amp;  Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office# 3204, Level 3, Building 1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; King Abdullah University of Science&amp;  Technology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4700 King Abdullah Blvd, Box 2753, Thuwal 23955 ?6900,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kingdom of Saudi Arabia.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office: +966(0)2 808 0276, Mobile: +966(0)5 9538 7592
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E-mail: basitali.khan_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Skype name: basit.a.khan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 8/3/11 2:46 PM, &quot;Dmitry N. Mikushin&quot;&lt;maemarcus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5 apparently means one of the WRF's MPI processes has been
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unexpectedly terminated, maybe by program decision. No matter, if it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is OpenMPI-specifi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
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
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 4 Aug 2011 20:46:16 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Program hangs on send when run with nodes on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        remote machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:&lt;F344F301-AD7B-4E83-B0DF-A6E0010725A6_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I notice that in the worker, you have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth2      Link encap:Ethernet  HWaddr 00:1b:21:77:c5:d4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:192.168.1.155  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: fe80::21b:21ff:fe77:c5d4/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:9225846 errors:0 dropped:75175 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:8 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:1336628768 (1.3 GB)  TX bytes:552 (552.0 B)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth3      Link encap:Ethernet  HWaddr 00:1b:21:77:c5:d5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet addr:192.168.1.156  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          inet6 addr: fe80::21b:21ff:fe77:c5d5/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX packets:26481809 errors:0 dropped:75059 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          TX packets:18030236 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          RX bytes:70061260271 (70.0 GB)  TX bytes:11844181778 (11.8 GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Two different NICs are on the same subnet -- that doesn't seem like a good idea...?  I think this topic has come up on the users list before, and, IIRC, the general consensus is &quot;don't do that&quot; because it's not clear as to which NIC Linux will actually send outgoing traffic across bound for the 192.168.1.x subnet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 4, 2011, at 1:59 PM, Keith Manville wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having trouble running my MPI program on multiple nodes. I can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run multiple processes on a single node, and I can spawn processes on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on remote nodes, but when I call Send from a remote node, the node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; never returns, even though there is an appropriate Recv waiting. I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pretty sure this is an issue with my configuration, not my code. I've
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tried some other sample programs I found and had the same problem of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hanging on a send from one host to another.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's an in depth description:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wrote a quick test program where each process with rank&gt;  1 sends an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int to the master (rank 0), and the master receives until it gets
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something from every other process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My test program works fine when I run multiple processes on a single machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; either the local node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ./mpirun -n 4 ./mpi-test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm localhost:2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm localhost:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:1 sending 11...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:2 sending 12...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:2 sent 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:1 sent 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm localhost:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:0 received 11 from 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:0 received 12 from 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm localhost:3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:3 sending 13...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:3 sent 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:0 received 13 from 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all workers checked in!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or a remote one:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ./mpirun -np 2 -host remotehost ./mpi-test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm remotehost:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remotehost:0 received 11 from 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all workers checked in!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm remotehost:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remotehost:1 sending 11...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remotehost:1 sent 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But when I try to run the master locally and the worker(s) remotely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (this is the way I am actually interested in running it), Send never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; returns and it hangs indefinitely.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ./mpirun -np 2 -host localhost,remotehost ./mpi-test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm localhost:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm remotehost:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remotehost:1 sending 11...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just to see if it would work, I tried spawning the master on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remotehost and the worker on the localhost.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ./mpirun -np 2 -host remotehost,localhost ./mpi-test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm localhost:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:1 sending 11...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; localhost:1 sent 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi I'm remotehost:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remotehost:0 received 0 from 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all workers checked in!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It doesn't hang on Send, but the wrong value is received.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any idea what's going on? I've attached my code, my config.log,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ifconfig output, and ompi_info output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Keith
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mpi.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 4 Aug 2011 20:48:30 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:&lt;C2EA7FD0-BADB-4D05-851C-C444BE26FA5A_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid our Xgrid support has lagged, and Apple hasn't show much interest in MPI + Xgrid support -- much less HPC.  :-\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you see the FAQ items about Xgrid?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=osx#xgrid-howto">http://www.open-mpi.org/faq/?category=osx#xgrid-howto</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 4, 2011, at 4:16 AM, Christopher Jones wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm currently trying to set up a small xgrid between two mac pros (a single quadcore and a 2 duo core), where both are directly connected via an ethernet cable. I've set up xgrid using the password authentication (rather than the kerberos), and from what I can tell in the Xgrid admin tool it seems to be working. However, once I try a simple hello world program, I get this error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; chris-joness-mac-pro:~ chrisjones$ mpirun -np 4 ./test_hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 381 on node xgrid-node-0 exited on signal 15 (Terminated).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2011-08-04 10:02:16.329 mpirun[350:903] *** Terminating app due to uncaught exception 'NSInvalidArgumentException', reason: '*** -[NSKVONotifying_XGConnection&lt;0x1001325a0&gt;  finalize]: called when collecting not enabled'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** Call stack at first throw:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      0   CoreFoundation                      0x00007fff814237b4 __exceptionPreprocess + 180
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      1   libobjc.A.dylib                     0x00007fff84fe8f03 objc_exception_throw + 45
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      2   CoreFoundation                      0x00007fff8143e631 -[NSObject(NSObject) finalize] + 129
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      3   mca_pls_xgrid.so                    0x00000001002a9ce3 -[PlsXGridClient dealloc] + 419
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      4   mca_pls_xgrid.so                    0x00000001002a9837 orte_pls_xgrid_finalize + 40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      5   libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      6   libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      7   libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      8   mpirun                              0x00000001000011ff orterun + 2042
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      9   mpirun                              0x0000000100000a03 main + 27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      10  mpirun                              0x00000001000009e0 start + 52
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      11  ???                                 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminate called after throwing an instance of 'NSException'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] Signal: Abort trap (6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] Signal code:  (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 0] 2   libSystem.B.dylib                   0x00007fff81ca51ba _sigtramp + 26
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 1] 3   ???                                 0x00000001000cd400 0x0 + 4295808000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 2] 4   libstdc++.6.dylib                   0x00007fff830965d2 __tcf_0 + 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 3] 5   libobjc.A.dylib                     0x00007fff84fecb39 _objc_terminate + 100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 4] 6   libstdc++.6.dylib                   0x00007fff83094ae1 _ZN10__cxxabiv111__terminateEPFvvE + 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 5] 7   libstdc++.6.dylib                   0x00007fff83094b16 _ZN10__cxxabiv112__unexpectedEPFvvE + 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 6] 8   libstdc++.6.dylib                   0x00007fff83094bfc _ZL23__gxx_exception_cleanup19_Unwind_Reason_CodeP17_Unwind_Exception + 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 7] 9   libobjc.A.dylib                     0x00007fff84fe8fa2 object_getIvar + 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 8] 10  CoreFoundation                      0x00007fff8143e631 -[NSObject(NSObject) finalize] + 129
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [ 9] 11  mca_pls_xgrid.so                    0x00000001002a9ce3 -[PlsXGridClient dealloc] + 419
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [10] 12  mca_pls_xgrid.so                    0x00000001002a9837 orte_pls_xgrid_finalize + 40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [11] 13  libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [12] 14  libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [13] 15  libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [14] 16  mpirun                              0x00000001000011ff orterun + 2042
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [15] 17  mpirun                              0x0000000100000a03 main + 27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [16] 18  mpirun                              0x00000001000009e0 start + 52
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] [17] 19  ???                                 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [chris-joness-mac-pro:00350] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Abort trap
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've seen this error in a previous mailing, and it seems that the issue has something to do with forcing everything to use kerberos (SSO). However, I noticed that in the computer being used as an agent, this option is grayed on in the Xgrid sharing configuration (I have no idea why). I would therefore ask if it is absolutely necessary to use SSO to get openmpi to run with xgrid, or am I missing something with the password setup. Seems that the kerberos option is much more complicated, and I may even want to switch to just using openmpi with ssh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chris Jones
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Post-doctoral Research Assistant,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Microbiology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Swedish University of Agricultural Sciences
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Uppsala, Sweden
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phone: +46 (0)18 67 3222
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email: chris.jones_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Soil and Environmental Microbiology
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; National Institute for Agronomic Research
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dijon, France
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 5 Aug 2011 08:41:58 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Rob Latham&lt;robl_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] parallel I/O on 64-bit indexed arays
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: Quincey Koziol&lt;koziol_at_[hidden]&gt;, Fab Tillier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;ftillier_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:&lt;20110805134158.GA28241_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 27, 2011 at 06:13:05PM +0200, Troels Haugboelle wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and we get good (+GB/s) performance when writing files from large runs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interestingly, an alternative and conceptually simpler option is to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use MPI_FILE_WRITE_ORDERED, but the performance of that function on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Blue-Gene/P sucks - 20 MB/s instead of GB/s. I do not know why.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ordered mode as implemented in ROMIO is awful.  Entirely serialized.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We pass a token from process to process. Each process acquires the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; token, updates the shared file pointer, does its i/o, then passes the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; token to the next process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What we should do, and have done in test branches [1], is use MPI_SCAN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to look at the shared file pointer once, tell all the processors their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; offset, then update the shared file pointer while all processes do I/O
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in parallel.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]: Robert Latham, Robert Ross, and Rajeev Thakur. &quot;Implementing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI-IO Atomic Mode and Shared File Pointers Using MPI One-Sided
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Communication&quot;. International Journal of High Performance Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Applications, 21(2):132-143, 2007
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since no one uses the shared file pointers, and even fewer people use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ordered mode, we just haven't seen the need to do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you want to rebuild your MPI library on BlueGene?  I can pretty
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quickly generate and send a patch that will make ordered mode go whip
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fast.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==rob
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Troels
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 6/7/11 15:04 , Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 7, 2011, at 4:53 AM, Troels Haugboelle wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In principle yes, but the problem is we have an unequal amount of particles on each node, so the length of each array is not guaranteed to be divisible by 2, 4 or any other number. If I have understood the definition of MPI_TYPE_CREATE_SUBARRAY correctly the offset can be 64-bit, but not the global array size, so, optimally, what I am looking for is something that has unequal size for each thread, simple vector, and with 64-bit offsets and global array size.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's a bit awkward, but you can still make datatypes to give the offset that you want.  E.g., if you need an offset of 2B+31 bytes, you can make datatype A with type contig of N=(2B/sizeof(int)) int's.  Then make datatype B with type struct, containing type A and 31 MPI_BYTEs.  Then use 1 instance of datatype B to get the offset that you want.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You could make utility functions that, given a specific (64 bit) offset, it makes an MPI datatype that matches the offset, and then frees it (and all sub-datatypes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is a bit of overhead in creating these datatypes, but it should be dwarfed by the amount of data that you're reading/writing, right?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's awkward, but it should work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Another possible workaround would be to identify subsections that do not pass 2B elements, make sub communicators, and then let each of them dump their elements with proper offsets. It may work. The problematic architecture is a BG/P. On other clusters doing simple I/O, letting all threads open the file, seek to their position, and then write their chunk works fine, but somehow on BG/P performance drops dramatically. My guess is that there is some file locking, or we are overwhelming the I/O nodes..
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This ticket for the MPI-3 standard is a first step in the right direction, but won't do everything you need (this is more FYI):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; See the PDF attached to the ticket; it's going up for a &quot;first reading&quot; in a month.  It'll hopefully be part of the MPI-3 standard by the end of the year (Fab Tillier, CC'ed, has been the chief proponent of this ticket for the past several months).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Quincey Koziol from the HDF group is going to propose a follow on to this ticket, specifically about the case you're referring to -- large counts for file functions and datatype constructors.  Quincey -- can you expand on what you'll be proposing, perchance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Interesting, I think something along the lines of the note would be very useful and needed for large applications.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot for the pointers and your suggestions,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Troels
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rob Latham
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1977, Issue 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
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
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; &lt;warren.vcf&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17034.php">CB: "[OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Previous message:</strong> <a href="17032.php">David Warren: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17032.php">David Warren: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17041.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Reply:</strong> <a href="17041.php">Christopher Jones: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
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
