<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2428, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 05:53:25 2012" -->
<!-- isoreceived="20121205105325" -->
<!-- sent="Wed, 5 Dec 2012 18:53:16 +0800 (CST)" -->
<!-- isosent="20121205105316" -->
<!-- name="&#213;&#212;&#211;&#161;" -->
<!-- email="yin_zhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2428, Issue 1" -->
<!-- id="53d105b6.a96f.13b6ab2bba4.Coremail.yin_zhao_at_126.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="mailman.13.1354640402.5449.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 2428, Issue 1<br>
<strong>From:</strong> &#213;&#212;&#211;&#161; (<em>yin_zhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-05 05:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20879.php">утс║: "[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>Previous message:</strong> <a href="20877.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, 
<br>
<p><p>I have a MPI_Isend/MPI_Recv problem in  a multi-thread program. 
<br>
<p><p>In the program:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The first machine has one thread does some computation and call MPI_Isend to send buffer to the second machine, and another thread is always trying to MPI_Recv data from the second machine. And the first thread will MPI_Wait its last MPI_Isend to complete before call MPI_Isend again.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The second machine does the exact same thing.
<br>
<p><p>Then I got the result that : 
<br>
The first machine: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 0 : MPI_Isend data to the second machine successfully. but blocked in MPI_Wait because last MPI_Isend did not complete. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 1 : try to MPI_Recv data from the second machine, but no data and it blocked. 
<br>
The second machine: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 0 : MPI_Isend data to the first machine successfully. but blocked in MPI_Wait because last MPI_Isend did not complete. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 1 : try to MPI_Recv data from the first machine, but no data and it blocked. 
<br>
<p><p>Does anyone have any ideas?   I appreciated it very much, because I have tracked the problem for two days but no progress. 
<br>
<p><p>Eason Zhao 
<br>
<p>At 2012-12-05 01:00:02,users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt;than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. Re: 0xc000007b error exit on 64-bit Windows 7
</span><br>
<span class="quotelev1">&gt;      (damien_at_[hidden])
</span><br>
<span class="quotelev1">&gt;   2. Re: 0xc000007b error exit on 64-bit Windows 7 (Damien)
</span><br>
<span class="quotelev1">&gt;   3. Windows support for OpenMPI (Damien)
</span><br>
<span class="quotelev1">&gt;   4. Re: Windows support for OpenMPI (John R. Cary)
</span><br>
<span class="quotelev1">&gt;   5. Re: Windows support for OpenMPI (Damien)
</span><br>
<span class="quotelev1">&gt;   6. Romio and OpenMPI builds (Brock Palen)
</span><br>
<span class="quotelev1">&gt;   7. Re: Romio and OpenMPI builds (Eric Chamberland)
</span><br>
<span class="quotelev1">&gt;   8. Re: CentOS 6.3 &amp; OpenMPI 1.6.3 (Joseph Farran)
</span><br>
<span class="quotelev1">&gt;   9. Re: BLCR + Qlogic infiniband (William Hay)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 1
</span><br>
<span class="quotelev1">&gt;Date: Mon, 3 Dec 2012 10:03:41 -0700
</span><br>
<span class="quotelev1">&gt;From: damien_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;233b9754-b3a9-47d7-9dd1-3e6680ba4318.maildroid_at_localhost&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ignore what I posted,  Hristo is right.   On my phone screen the C looked like a 0.  Sorry. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sent from my android device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Sent: Mon, 03 Dec 2012 9:01 AM
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm afraid we've lost the open MPI community windows developer. So I don't know if you'll get a good answer to this question. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry!  :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 3, 2012, at 6:40 AM, &quot;Ilias Miroslav&quot; &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear experts,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just installed <a href="http://www.open-mpi.org/software/ompi/v1.6/downloads/OpenMPI_v1.6.1-1_win64.exe">http://www.open-mpi.org/software/ompi/v1.6/downloads/OpenMPI_v1.6.1-1_win64.exe</a> on our Intel i7 64-bit Windows 7 system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I try to run  some executable, I am getting error &quot;Application Error The application was unable to start correctly (0xc000007b)...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help please ? The &quot;C:\Program Files (x86)\OpenMPI_v1.6.1-x64\bin&quot; string is in my %Path% variable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yours, Miro
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: On 32-bit Windows 7 the 32-bit OpenMPI application works fine.
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;-------------- next part --------------
</span><br>
<span class="quotelev1">&gt;HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 2
</span><br>
<span class="quotelev1">&gt;Date: Mon, 03 Dec 2012 10:19:39 -0700
</span><br>
<span class="quotelev1">&gt;From: Damien &lt;damien_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] 0xc000007b error exit on 64-bit Windows 7
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;50BCDF2B.4040502_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I just tried it on a clean VM, the 64-bit OpenMPI installer does install 
</span><br>
<span class="quotelev1">&gt;to Program Files (x86).  That's not the end of the world, but you have 
</span><br>
<span class="quotelev1">&gt;to watch your paths.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Miroslav, when you ran the installer did you say yes to adding OpenMPI 
</span><br>
<span class="quotelev1">&gt;to the system path?  If you installed both 32 and 64-bit binaries, and 
</span><br>
<span class="quotelev1">&gt;added both to the system path, it will typically just append the paths.  
</span><br>
<span class="quotelev1">&gt;So if you installed 32-bit first, then 64-bit, whenever you run 
</span><br>
<span class="quotelev1">&gt;something it will load the 32-bit OpenMPI runtime first, even running 
</span><br>
<span class="quotelev1">&gt;64-bit, which will cause that bad image error. I think that's why your 
</span><br>
<span class="quotelev1">&gt;32-bit run works and 64-bit doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I suggest uninstalling both 32 and 64-bit OpenMPIs, make sure they're 
</span><br>
<span class="quotelev1">&gt;removed from the path, then reinstall them *without* putting them into 
</span><br>
<span class="quotelev1">&gt;the system path, and try again from there.  You'll have to set your 
</span><br>
<span class="quotelev1">&gt;paths manually, but you'll be running with the right binaries each time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 03/12/2012 9:55 AM, Iliev, Hristo wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0xC000007B is STATUS_INVALID_IMAGE_FORMAT. It mostly means that some of the
</span><br>
<span class="quotelev2">&gt;&gt; dynamic link libraries (DLLs) that the executable is linked against are of
</span><br>
<span class="quotelev2">&gt;&gt; different &quot;bitness&quot;, e.g. 32-bit. It could be a packaging error in Open MPI,
</span><br>
<span class="quotelev2">&gt;&gt; or it could be messed up installation. You could use the Dependency Walker
</span><br>
<span class="quotelev2">&gt;&gt; tool to examine the list of DLLs that the executable depends upon and see
</span><br>
<span class="quotelev2">&gt;&gt; which one is the culprit. Dependency Walker is available here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.dependencywalker.com/">http://www.dependencywalker.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which brings me to the question: why the win64 version of Open MPI is
</span><br>
<span class="quotelev2">&gt;&gt; installed in &quot;Program Files (x86)&quot;, where 32-bit things go?!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; Hristo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Ilias Miroslav
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, December 03, 2012 3:40 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] 0xc000007b error exit on 64-bit Windows 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear experts,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just installed <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org/software/ompi/v1.6/downloads/OpenMPI_v1.6.1-1_win64.exe on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; our Intel i7 64-bit Windows 7 system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I try to run  some executable, I am getting error &quot;Application Error
</span><br>
<span class="quotelev2">&gt;&gt; The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application was unable to start correctly (0xc000007b)...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help please ? The &quot;C:\Program Files (x86)\OpenMPI_v1.6.1-x64\bin&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; string is in my %Path% variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yours, Miro
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: On 32-bit Windows 7 the 32-bit OpenMPI application works fine.
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
<span class="quotelev1">&gt;-------------- next part --------------
</span><br>
<span class="quotelev1">&gt;HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 3
</span><br>
<span class="quotelev1">&gt;Date: Mon, 03 Dec 2012 10:32:57 -0700
</span><br>
<span class="quotelev1">&gt;From: Damien &lt;damien_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Windows support for OpenMPI
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;50BCE249.3020501_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I completely missed the message about Shiqing departing as the OpenMPI 
</span><br>
<span class="quotelev1">&gt;Windows maintainer.  I'll try and keep Windows builds going for 1.6 at 
</span><br>
<span class="quotelev1">&gt;least, I have 2011 and 2013 Intel licenses and VS2008 and 2012, but not 
</span><br>
<span class="quotelev1">&gt;2010.  I see that the 1.6.3 code base already doesn't build on Windows 
</span><br>
<span class="quotelev1">&gt;in VS2012  :-(.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;While I can try and keep builds going, I don't have access to a Windows 
</span><br>
<span class="quotelev1">&gt;cluster right now, and I'm flat out on two other projects. I can test on 
</span><br>
<span class="quotelev1">&gt;my workstation, but that will only go so far. Longer-term, there needs 
</span><br>
<span class="quotelev1">&gt;to be a decision made on whether Windows gets to be a first-class 
</span><br>
<span class="quotelev1">&gt;citizen in OpenMPI or not.  Jeff's already told me that 1.7 is lagging 
</span><br>
<span class="quotelev1">&gt;behind on Windows.  It would be a shame to have all the work Shiqing put 
</span><br>
<span class="quotelev1">&gt;in gradually decay because it can't be supported enough.  If there's any 
</span><br>
<span class="quotelev1">&gt;Microsoft/HPC/Azure folks observing this list, or any other vendors who 
</span><br>
<span class="quotelev1">&gt;run on Windows with OpenMPI, maybe we can see what can be done if you're 
</span><br>
<span class="quotelev1">&gt;interested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 4
</span><br>
<span class="quotelev1">&gt;Date: Mon, 03 Dec 2012 11:59:13 -0700
</span><br>
<span class="quotelev1">&gt;From: &quot;John R. Cary&quot; &lt;cary_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Windows support for OpenMPI
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;50BCF681.40200_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear OpenMPI community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This email is about whether a commercial version of OpenMPI for Windows
</span><br>
<span class="quotelev1">&gt;could be successful.  I hesitated before sending this, but upon asking
</span><br>
<span class="quotelev1">&gt;some others (notably Jeff) on this list, it seemed appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We at Tech-X have been asking whether a commercial/freemium support 
</span><br>
<span class="quotelev1">&gt;model for a Windows
</span><br>
<span class="quotelev1">&gt;version of OpenMPI would work.  We are currently working on this for some
</span><br>
<span class="quotelev1">&gt;other products, notably PETSc, which is discussed at
</span><br>
<span class="quotelev1">&gt;<a href="http://www.txcorp.com/home/cosml">http://www.txcorp.com/home/cosml</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We see some downsides - in particular, with Microsoft's HPC Pack, 
</span><br>
<span class="quotelev1">&gt;Windows users
</span><br>
<span class="quotelev1">&gt;have free access to an MPI solution.  This has to be balanced by some
</span><br>
<span class="quotelev1">&gt;particular advantages of OpenMPI such that there would be a group of
</span><br>
<span class="quotelev1">&gt;users who would pay for it for anyone to make this work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We would be very interested in hearing from folks on this list who either
</span><br>
<span class="quotelev1">&gt;(1) help define the competitive advantage of having OpenMPI on Windows or
</span><br>
<span class="quotelev1">&gt;(2) would be interested in a commercial solution, were it available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Naturally, any solution should benefit the OpenMPI community as well to
</span><br>
<span class="quotelev1">&gt;be a success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would be glad to hear from folks on list or off.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thx....John Cary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 12/3/2012 10:32 AM, Damien wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I completely missed the message about Shiqing departing as the OpenMPI 
</span><br>
<span class="quotelev2">&gt;&gt; Windows maintainer.  I'll try and keep Windows builds going for 1.6 at 
</span><br>
<span class="quotelev2">&gt;&gt; least, I have 2011 and 2013 Intel licenses and VS2008 and 2012, but 
</span><br>
<span class="quotelev2">&gt;&gt; not 2010.  I see that the 1.6.3 code base already doesn't build on 
</span><br>
<span class="quotelev2">&gt;&gt; Windows in VS2012  :-(.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I can try and keep builds going, I don't have access to a 
</span><br>
<span class="quotelev2">&gt;&gt; Windows cluster right now, and I'm flat out on two other projects. I 
</span><br>
<span class="quotelev2">&gt;&gt; can test on my workstation, but that will only go so far. Longer-term, 
</span><br>
<span class="quotelev2">&gt;&gt; there needs to be a decision made on whether Windows gets to be a 
</span><br>
<span class="quotelev2">&gt;&gt; first-class citizen in OpenMPI or not.  Jeff's already told me that 
</span><br>
<span class="quotelev2">&gt;&gt; 1.7 is lagging behind on Windows.  It would be a shame to have all the 
</span><br>
<span class="quotelev2">&gt;&gt; work Shiqing put in gradually decay because it can't be supported 
</span><br>
<span class="quotelev2">&gt;&gt; enough.  If there's any Microsoft/HPC/Azure folks observing this list, 
</span><br>
<span class="quotelev2">&gt;&gt; or any other vendors who run on Windows with OpenMPI, maybe we can see 
</span><br>
<span class="quotelev2">&gt;&gt; what can be done if you're interested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 5
</span><br>
<span class="quotelev1">&gt;Date: Mon, 03 Dec 2012 12:42:23 -0700
</span><br>
<span class="quotelev1">&gt;From: Damien &lt;damien_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Windows support for OpenMPI
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;50BD009F.4060305_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is a good start.  Stepping up a level and without wanting to start 
</span><br>
<span class="quotelev1">&gt;a bunfight with other MPI implementations, what are the advantages of 
</span><br>
<span class="quotelev1">&gt;OpenMPI over those other various MPI implementations, irrespective of 
</span><br>
<span class="quotelev1">&gt;platform?  There must be some advantages, or OpenMPI wouldn't exist.  Do 
</span><br>
<span class="quotelev1">&gt;those advantages apply on Windows and would they justify ongoing Windows 
</span><br>
<span class="quotelev1">&gt;support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 03/12/2012 11:59 AM, John R. Cary wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI community,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This email is about whether a commercial version of OpenMPI for Windows
</span><br>
<span class="quotelev2">&gt;&gt; could be successful.  I hesitated before sending this, but upon asking
</span><br>
<span class="quotelev2">&gt;&gt; some others (notably Jeff) on this list, it seemed appropriate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We at Tech-X have been asking whether a commercial/freemium support 
</span><br>
<span class="quotelev2">&gt;&gt; model for a Windows
</span><br>
<span class="quotelev2">&gt;&gt; version of OpenMPI would work.  We are currently working on this for some
</span><br>
<span class="quotelev2">&gt;&gt; other products, notably PETSc, which is discussed at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.txcorp.com/home/cosml">http://www.txcorp.com/home/cosml</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We see some downsides - in particular, with Microsoft's HPC Pack, 
</span><br>
<span class="quotelev2">&gt;&gt; Windows users
</span><br>
<span class="quotelev2">&gt;&gt; have free access to an MPI solution.  This has to be balanced by some
</span><br>
<span class="quotelev2">&gt;&gt; particular advantages of OpenMPI such that there would be a group of
</span><br>
<span class="quotelev2">&gt;&gt; users who would pay for it for anyone to make this work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We would be very interested in hearing from folks on this list who either
</span><br>
<span class="quotelev2">&gt;&gt; (1) help define the competitive advantage of having OpenMPI on Windows or
</span><br>
<span class="quotelev2">&gt;&gt; (2) would be interested in a commercial solution, were it available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Naturally, any solution should benefit the OpenMPI community as well to
</span><br>
<span class="quotelev2">&gt;&gt; be a success.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be glad to hear from folks on list or off.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thx....John Cary
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/3/2012 10:32 AM, Damien wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I completely missed the message about Shiqing departing as the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI Windows maintainer.  I'll try and keep Windows builds going 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for 1.6 at least, I have 2011 and 2013 Intel licenses and VS2008 and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2012, but not 2010.  I see that the 1.6.3 code base already doesn't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build on Windows in VS2012  :-(.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While I can try and keep builds going, I don't have access to a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Windows cluster right now, and I'm flat out on two other projects. I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can test on my workstation, but that will only go so far. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Longer-term, there needs to be a decision made on whether Windows 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gets to be a first-class citizen in OpenMPI or not. Jeff's already 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; told me that 1.7 is lagging behind on Windows. It would be a shame to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have all the work Shiqing put in gradually decay because it can't be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supported enough.  If there's any Microsoft/HPC/Azure folks observing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this list, or any other vendors who run on Windows with OpenMPI, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maybe we can see what can be done if you're interested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Damien
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 6
</span><br>
<span class="quotelev1">&gt;Date: Mon, 3 Dec 2012 17:37:36 -0500
</span><br>
<span class="quotelev1">&gt;From: Brock Palen &lt;brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Romio and OpenMPI builds
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;8A9D5FA0-5444-4427-8790-1A5CA03BC3D7_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I was trying to use hints with ROMIO and lustre prompted by another post on this list. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a simple MPI-IO code and I cannot using the notes I find set the lustre striping using the config file and setting ROMIO_HINTS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;How can I check which ADIO drivers ROMIO in OPenMPI was built with when I built it?
</span><br>
<span class="quotelev1">&gt;Can I make ROMIO go into 'verbose' mode and have it print what it is setting all its values to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brock Palen
</span><br>
<span class="quotelev1">&gt;www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt;CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt;brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;(734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 7
</span><br>
<span class="quotelev1">&gt;Date: Mon, 03 Dec 2012 19:12:27 -0500
</span><br>
<span class="quotelev1">&gt;From: Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Romio and OpenMPI builds
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;50BD3FEB.2060100_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Le 12/03/2012 05:37 PM, Brock Palen a ?crit :
</span><br>
<span class="quotelev2">&gt;&gt; I was trying to use hints with ROMIO and lustre prompted by another post on this list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a simple MPI-IO code and I cannot using the notes I find set the lustre striping using the config file and setting ROMIO_HINTS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I check which ADIO drivers ROMIO in OPenMPI was built with when I built it?
</span><br>
<span class="quotelev2">&gt;&gt; Can I make ROMIO go into 'verbose' mode and have it print what it is setting all its values to?
</span><br>
<span class="quotelev1">&gt;Try &quot;ompi_info -a&quot; and check for lustre in the output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ompi_info -a | grep -i romio
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;                   MCA io: information &quot;io_romio_user_configure_params&quot; 
</span><br>
<span class="quotelev1">&gt;(value: &lt;--with-file-system=testfs+ufs+nfs+lustre&gt;, data source: default 
</span><br>
<span class="quotelev1">&gt;value)
</span><br>
<span class="quotelev1">&gt;                           User-specified command line parameters passed 
</span><br>
<span class="quotelev1">&gt;to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt;                   MCA io: information 
</span><br>
<span class="quotelev1">&gt;&quot;io_romio_complete_configure_params&quot; (value: 
</span><br>
<span class="quotelev1">&gt;&lt;--with-file-system=testfs+ufs+nfs+lustre  CFLAGS='-DNDEBUG -O3 -xHOST 
</span><br>
<span class="quotelev1">&gt;-Wall -finline-functions -fno-strict-aliasing -restrict -pthread' 
</span><br>
<span class="quotelev1">&gt;CPPFLAGS='  
</span><br>
<span class="quotelev1">&gt;-I/clumeq/src/Open-MPI/1.6.3/intel/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include 
</span><br>
<span class="quotelev1">&gt;-I/clumeq/src/Open-MPI/1.6.3/intel/Build/opal/mca/hwloc/hwloc132/hwloc/include   
</span><br>
<span class="quotelev1">&gt;-I/usr/include/infiniband -I/usr/include/infiniband' FFLAGS='' LDFLAGS=' 
</span><br>
<span class="quotelev1">&gt;' --enable-shared --enable-static 
</span><br>
<span class="quotelev1">&gt;--with-file-system=testfs+ufs+nfs+lustre  
</span><br>
<span class="quotelev1">&gt;--prefix=/software/MPI/openmpi/1.6.3_intel --with-mpi=open_mpi 
</span><br>
<span class="quotelev1">&gt;--disable-aio&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Complete set of command line parameters 
</span><br>
<span class="quotelev1">&gt;passed to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 8
</span><br>
<span class="quotelev1">&gt;Date: Mon, 03 Dec 2012 23:20:49 -0800
</span><br>
<span class="quotelev1">&gt;From: Joseph Farran &lt;jfarran_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3
</span><br>
<span class="quotelev1">&gt;To: Mike Dubman &lt;mike.ompi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;50BDA451.8060800_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Mike.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Removed the old mxm, downloaded and installed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/tmp/mxm/v1.1/per-ofed/1.5.4.1/mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am suing OFED 1.5.4.1 and it still fails at the same spot:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;make[2]: Entering directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_cancel.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_component.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_endpoint.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_probe.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_recv.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_send.lo
</span><br>
<span class="quotelev1">&gt;   CCLD   mca_mtl_mxm.la
</span><br>
<span class="quotelev1">&gt;/bin/grep: /usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt;/bin/sed: can't read /usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt;libtool: link: `/usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la' is not a valid libtool archive
</span><br>
<span class="quotelev1">&gt;make[2]: *** [mca_mtl_mxm.la] Error 1
</span><br>
<span class="quotelev1">&gt;make[2]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'
</span><br>
<span class="quotelev1">&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 12/2/2012 10:18 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ohh.. you have MOFED 1.5.4.1, thought it was 1.5.3-3.1.0
</span><br>
<span class="quotelev2">&gt;&gt; will provide you a link to mxm package compiled with this MOFED version (thanks to no ABI in OFED).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Dec 2, 2012 at 10:04 PM, Joseph Farran &lt;jfarran_at_[hidden] &lt;mailto:jfarran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     1.5.4.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 9
</span><br>
<span class="quotelev1">&gt;Date: Tue, 4 Dec 2012 10:43:05 +0000
</span><br>
<span class="quotelev1">&gt;From: William Hay &lt;w.hay_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] BLCR + Qlogic infiniband
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID:
</span><br>
<span class="quotelev1">&gt;	&lt;CAOEAUJ71Xf06oW6oo3tW+_sXm1zqjxnYDQiL2wg9nqd7zrknZw_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 28 November 2012 11:14, William Hay &lt;w.hay_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build openmpi with support for BLCR plus qlogic infiniband
</span><br>
<span class="quotelev2">&gt;&gt; (plus grid engine).  Everything seems to compile OK and checkpoints are
</span><br>
<span class="quotelev2">&gt;&gt; taken but whenever I try to restore a checkpoint I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; - do_mmap(&lt;file&gt;, 00002aaab18c7000, 0000000000001000, ...) failed:
</span><br>
<span class="quotelev2">&gt;&gt; ffffffffffffffea
</span><br>
<span class="quotelev2">&gt;&gt; - mmap failed: /dev/ipath
</span><br>
<span class="quotelev2">&gt;&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev2">&gt;&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev2">&gt;&gt; Restart failed: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This occurs whether I specify psm or openib as the btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like the sort of thing I would expect to be handled by the blcr
</span><br>
<span class="quotelev2">&gt;&gt; supporting code in openmpi.  So I guess I have a couple ofquestions.
</span><br>
<span class="quotelev2">&gt;&gt; 1)Are Infiniband and BLCR support in openmpi compatible?
</span><br>
<span class="quotelev2">&gt;&gt; 2)Are there any special tricks necessary to get them working together.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A third question occurred to me that may be relevant.  How do I verify
</span><br>
<span class="quotelev1">&gt;that my openmpi install has blcr support built in?  I would have thought
</span><br>
<span class="quotelev1">&gt;this would mean that either mpiexec or binaries built with mpicc would have
</span><br>
<span class="quotelev1">&gt;libcr linked in.  However running ldd doesn't report this in either case.
</span><br>
<span class="quotelev1">&gt; I'm setting LD_PRELOAD to point to it but I would have thought openmpi
</span><br>
<span class="quotelev1">&gt;would need to register a callback with blcr and it would be easier to do
</span><br>
<span class="quotelev1">&gt;this if the library were linked in rather than trying to detect whether it
</span><br>
<span class="quotelev1">&gt;has been LD_PRELOADed.  I'm building with the following options:
</span><br>
<span class="quotelev1">&gt;./configure --prefix=/home/ccaawih/openmpi-blcr --with-openib --without-psm
</span><br>
<span class="quotelev1">&gt;--with-blcr=/usr --with-blcr-libdir=/usr/lib64 --with-ft=cr
</span><br>
<span class="quotelev1">&gt;--enable-ft-thread --enable-mpi-threads --with-sge
</span><br>
<span class="quotelev1">&gt;-------------- next part --------------
</span><br>
<span class="quotelev1">&gt;HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;End of users Digest, Vol 2428, Issue 1
</span><br>
<span class="quotelev1">&gt;**************************************
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20879.php">утс║: "[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>Previous message:</strong> <a href="20877.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
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
