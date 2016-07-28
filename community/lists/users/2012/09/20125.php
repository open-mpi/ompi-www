<?
$subject_val = "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 03:59:54 2012" -->
<!-- isoreceived="20120905075954" -->
<!-- sent="Wed, 5 Sep 2012 09:59:48 +0200" -->
<!-- isosent="20120905075948" -->
<!-- name="Andrea Negri" -->
<!-- email="negri.andre_at_[hidden]" -->
<!-- subject="[OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="CAPUxaiTf5hgS1U-F=n79oPArhPY5fnfdEdmq=9ou9bU5cYRy4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Andrea Negri (<em>negri.andre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 03:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20126.php">Reuti: "Re: [OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<li><strong>Previous message:</strong> <a href="20124.php">San B: "[OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20111.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20149.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried with these flags (I use gcc 4.7 and open mpi 1.6), but
<br>
the program doesn't crash, a node go down and the rest of them remain
<br>
to wait a signal (there is an ALLREDUCE in the code).
<br>
<p>Anyway, yesterday some processes died (without a log) on the node 10,
<br>
I logged almost immediately in the node and I found the process
<br>
<p>/usr/sbin/hal_lpadmin -x /org/freedesktop/Hal/devices/pci_10de_267
<br>
<p>What is it? I know that hal is a device demon, but hal_lpadmin?
<br>
In any case, this is the output of lsb_release -a
<br>
LSB Version:	:core-3.0-amd64:core-3.0-noarch:graphics-3.0-amd64:graphics-3.0-noarch
<br>
andrea_at_cloud ~/run_zeus/CR15_100pc/exe90$ lsb_release -a
<br>
LSB Version:	:core-3.0-amd64:core-3.0-noarch:graphics-3.0-amd64:graphics-3.0-noarch
<br>
Distributor ID:	ScientificSL
<br>
Description:	Scientific Linux SL release 4.4 (Beryllium)
<br>
Release:	4.4
<br>
Codename:	Beryllium
<br>
<p><p>PS: What is the correct method to reply in this mailing list? I use
<br>
gmail and I usually I hit the reply butt, replace the object, but here
<br>
it seems the I opening a new thread each time I post.
<br>
<p><p>2012/9/4  &lt;users-request_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: OMPI 1.6.x Hang on khugepaged 100% CPU time (Yong Qin)
</span><br>
<span class="quotelev1">&gt;    2. Re: some mpi processes &quot;disappear&quot; on a cluster of        servers
</span><br>
<span class="quotelev1">&gt;       (David Warren)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 4 Sep 2012 09:21:27 -0700
</span><br>
<span class="quotelev1">&gt; From: Yong Qin &lt;yong.qin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time
</span><br>
<span class="quotelev1">&gt; To: kliteyn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CADEJBEVwU=n9OmU5i4YY=UfcNiGyc_jN_MvWm-8E-LKYC4E0UA_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 4, 2012 at 5:42 AM, Yevgeny Kliteynik
</span><br>
<span class="quotelev1">&gt; &lt;kliteyn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 8/30/2012 10:28 PM, Yong Qin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Aug 30, 2012 at 5:12 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 29, 2012, at 2:25 PM, Yong Qin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This issue has been observed on OMPI 1.6 and 1.6.1 with openib btl but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not on 1.4.5 (tcp btl is always fine). The application is VASP and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only one specific dataset is identified during the testing, and the OS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is SL 6.2 with kernel 2.6.32-220.23.1.el6.x86_64. The issue is that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when a certain type of load is put on OMPI 1.6.x, khugepaged thread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; always runs with 100% CPU load, and it looks to me like that OMPI is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; waiting for some memory to be available thus appears to be hung.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reducing the per node processes would sometimes ease the problem a bit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but not always. So I did some further testing by playing around with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the kernel transparent hugepage support.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. Disable transparent hugepage support completely (echo never
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/enabled). This would allow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the program to progress as normal (as in 1.4.5). Total run time for an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iteration is 3036.03 s.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll admit that we have not tested using transparent hugepages.  I wonder if there's some kind of bad interaction going on here...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The transparent hugepage is &quot;transparent&quot;, which means it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically applied to all applications unless it is explicitly told
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otherwise. I highly suspect that it is not working properly in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Like Jeff said - I don't think we've ever tested OMPI with transparent
</span><br>
<span class="quotelev2">&gt;&gt; huge pages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks. But have you tested OMPI under RHEL 6 or its variants (CentOS
</span><br>
<span class="quotelev1">&gt; 6, SL 6)? THP is on by default in RHEL 6 so no matter you want it or
</span><br>
<span class="quotelev1">&gt; not it's there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What exactly does changing this setting do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here (<a href="http://lwn.net/Articles/423592/">http://lwn.net/Articles/423592/</a>)  is a pretty good documentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on what these settings would do to the behaviour of the THP. I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think I can explain it better than the article so I will leave it to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you to digest. :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. Disable VM defrag effort (echo never
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/defrag). This allows the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program to run as well, but the performance is horrible. The same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iteration takes 4967.40 s.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. Disable defrag in khugepaged (echo no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/khugepaged/defrag). This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allows the program to run, and the performance is worse than #1 but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; better than #2. The same iteration takes 3348.10 s.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4. Disable both VM defrag and khugepaged defrag (#2 + #3). Similar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; performance as #3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So my question is, looks to me like this has to do with the memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; management in the openib btl, are we using huge pages in 1.6.x? If
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that is true, is there a better way to resolve or workaround it within
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI itself without disabling transparent hugepage support? We'd like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to keep the hugepage support if possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mellanox -- can you comment on this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I don't think that THP were really tested with OFED.
</span><br>
<span class="quotelev2">&gt;&gt; I can think of lots of ways thing can go wrong there.
</span><br>
<span class="quotelev2">&gt;&gt; This might be a good question to address to Linux-RDMA mailing list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is quite useful information. I guess we will just turn off THP
</span><br>
<span class="quotelev1">&gt; support for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 04 Sep 2012 10:31:05 -0700
</span><br>
<span class="quotelev1">&gt; From: David Warren &lt;warren_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster
</span><br>
<span class="quotelev1">&gt;         of      servers
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;50463AD9.3030002_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which FORTRAN compiler are you using? I believe that most of them allow
</span><br>
<span class="quotelev1">&gt; you to compile with -g and optimization and then force a stack dump on
</span><br>
<span class="quotelev1">&gt; crash. I have found this to work on code that seems to vanish on random
</span><br>
<span class="quotelev1">&gt; processors. Also, you might look at the FORTRAN options and see if it
</span><br>
<span class="quotelev1">&gt; lets you allocate memory for temporary arrays from the heap instead of
</span><br>
<span class="quotelev1">&gt; the stack. Sometime this will help, even if you have stacksize set to
</span><br>
<span class="quotelev1">&gt; unlimited. One last thing to check is are you running with 32bit  or 64
</span><br>
<span class="quotelev1">&gt; bit memory models.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are using ifort, the options you want are
</span><br>
<span class="quotelev1">&gt;   -O[2,3] -g -traceback -heap-arrays -mcmodel=medium
</span><br>
<span class="quotelev1">&gt; You only need -mcmodel=medium if you might exceed 2 gig in a process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For gfortran try
</span><br>
<span class="quotelev1">&gt; -O -g -fbacktrace -mcmodel=medium
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/03/12 13:39, Andrea Negri wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have asked to my admin and he said that no log messages were present
</span><br>
<span class="quotelev2">&gt;&gt; in /var/log, apart my login on the compute node.
</span><br>
<span class="quotelev2">&gt;&gt; No killed processes, no full stack errors, the memory is ok, 1GB is
</span><br>
<span class="quotelev2">&gt;&gt; used and 2GB are free.
</span><br>
<span class="quotelev2">&gt;&gt; Actually I don't know what kind of problem coud be, does someone have
</span><br>
<span class="quotelev2">&gt;&gt; ideas? Or at least a suspect?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please, don't let me alone!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the trouble with the mail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/9/1&lt;users-request_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          users-owner_at_[hidden]
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
<span class="quotelev3">&gt;&gt;&gt;     1. Re: some mpi processes &quot;disappear&quot; on a cluster of        servers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        (John Hearns)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     2. Re: users Digest, Vol 2339, Issue 5 (Andrea Negri)
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
<span class="quotelev3">&gt;&gt;&gt; Date: Sat, 1 Sep 2012 08:48:56 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: John Hearns&lt;hearnsj_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          of      servers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &lt;CAPqNE2WO3bgefjiyfums6yquODUHjJ75zJoeEyjrDq60fMZV5A_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apologies, I have not taken the time to read your comprehensive diagnostics!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As Gus says, this sounds like a memory problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My suspicion would be the kernel Out Of Memory (OOM) killer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log into those nodes (or ask your systems manager to do this). Look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; closely at /var/log/messages where there will be notifications when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OOM Killer kicks in and - well - kills large memory processes!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Grep for &quot;killed process&quot; in /var/log/messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://linux-mm.org/OOM_Killer">http://linux-mm.org/OOM_Killer</a>
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
<span class="quotelev3">&gt;&gt;&gt; Date: Sat, 1 Sep 2012 11:50:59 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Andrea Negri&lt;negri.andre_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] users Digest, Vol 2339, Issue 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &lt;CAPUxaiQ4RFqSK1kz7fM7U9XRxjQh8N+=98PAQm2ikvr7bv-ftw_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Gus and John,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my code (zeusmp2) is a F77 code ported in F95, and the very first time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have launched it, the processed disappears almost immediately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked the code with valgrind and some unallocated arrays were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passed wrongly to some subroutines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After having corrected this bug, the code runs for a while and after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occour all the stuff described in my first post.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the code still performs a lot of main temporal cycle before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;die&quot; (I don't know if thies piece of information is useful).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I'm going to check the memory usage, (I also have a lot of unused
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables in this pretty large code, maybe I shoud comment them).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uname -a returns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux cloud 2.6.9-42.0.3.ELsmp #1 SMP Thu Oct 5 16:29:37 CDT 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ulimit -a returns:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core file size                        (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data seg size                       (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file size                               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pending signals                    (-i) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max locked memory             (kbytes, -l) 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max memory size                (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open files                           (-n) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pipe size                            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack size                           (kbytes, -s) 10240
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu time                             (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max user processes             (-u) 36864
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual memory                   (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file locks                            (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can log on the logins nodes, but unfortunately the command ls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /var/log/messages return
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acpid               cron.4              messages.3         secure.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anaconda.log        cups                messages.4         spooler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anaconda.syslog     dmesg               mpi_uninstall.log  spooler.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anaconda.xlog       gdm                 ppp                spooler.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; audit               httpd               prelink.log        spooler.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boot.log            itac_uninstall.log  rpmpkgs            spooler.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boot.log.1          lastlog             rpmpkgs.1          vbox
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boot.log.2          mail                rpmpkgs.2          wtmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boot.log.3          maillog             rpmpkgs.3          wtmp.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boot.log.4          maillog.1           rpmpkgs.4          Xorg.0.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmkl_install.log    maillog.2           samba              Xorg.0.log.old
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmkl_uninstall.log  maillog.3           scrollkeeper.log   yum.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cron                maillog.4           secure             yum.log.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cron.1              messages            secure.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cron.2              messages.1          secure.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cron.3              messages.2          secure.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so, the log should be in some of these files (I don't have read
</span><br>
<span class="quotelev3">&gt;&gt;&gt; permission on these files). I'll contact the admin for that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2012/9/1&lt;users-request_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          users-request_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          users-owner_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1. Re: some mpi processes &quot;disappear&quot; on a cluster of        servers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        (Gus Correa)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Fri, 31 Aug 2012 20:11:41 -0400
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Gus Correa&lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          of      servers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID:&lt;504152BD.3000102_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Andrea
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would guess this is a memory problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you know how much memory each node has?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you know the memory that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each MPI process in the CFD code requires?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the program starts swapping/paging into disk, because of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; low memory, those interesting things that you described can happen.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would login to the compute nodes and monitor the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; amount of memory being used with &quot;top&quot; right after the program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; starts to run.  If there is a pattern of which node tends to fail,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; track login to that fail-prone node and monitor it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alternatively, if you cluster is running Ganglia,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you can see the memory use graphically,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the Ganglia web page in a web browser.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If your cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't allow direct user logins to compute nodes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you can ask the system administrator to do this for you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It may well be that the code has a memory leak, or that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it has a memory request spike, which may not be caught by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Jeff and Ralph will probably correct me soon for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; saying this, and I know the OpenMPI safeguards against
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process misbehavior are great, but ...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyway, we had several codes here that would make a node go south
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because of either type of memory problem, and subsequently the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program would die, or the other processes in other nodes would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; continue &quot;running&quot; [i.e. mostly waiting for MPI calls to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dead node that would never return] as you described.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the problem is benign, i.e., if it is just that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory-per-processor is not large enough to run in 10 processors,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you can get around it by running in, say, 20 processors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yet another issue that you may check is the stacksize in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compute nodes.  Many codes require a large stacksize, i.e.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they create large arrays in subroutines, etc, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the default stacksize in standard Linux distributions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may not be as large as needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We use ulimited stacksize in our compute nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can ask the system administrator to check this for you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and perhaps change it in /etc/security/limits.conf to make it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unlimited or at least larger than the default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The Linux shell command &quot;ulimit -a&quot; [bash] or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;limit&quot; [tcsh] will tell what the limits are.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 08/31/2012 07:15 PM, Andrea Negri wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, I have been in trouble for a year.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I run a pure MPI (no openMP) Fortran fluid dynamical code on a cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of server, and I obtain a strange behaviour by running the code on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; multiple nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The cluster is formed by 16 pc (1 pc is a node) with a dual core processor.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Basically, I'm able to run the code from the login node with the command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun  --mca btl_base_verbose 100 --mca backtrace_base_verbose 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca memory_base_verbose 100 --mca sysinfo_base_verbose 100  -nolocal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -hostfile ./host_file -n 10  ./zeusmp2.x&gt;&gt;   zmp_errors 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by selecting one process per core (i.e. in this case I use 5 nodes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The code starts, and it runs correctely for some time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After that, an entire node (sometimes two) &quot;disappears&quot; and it cannot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be reached with the ssh command, which returns: No route to host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sometimes the node is still reachable, but the two processes that was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; running on the node are disappears.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In addition, on the other nodes, the others processes are still running.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I have a look on the output and error file of mpirun, the following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error is present: [btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_btl_tcp_frag_recv: readv failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PS: I'm not the admin of the cluster, I've installed the gcc and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi on my own because the complier aviable on that machine are 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; years old.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I post here some information, if you want other info, you have only to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tell me which command I have to type on the bash and I will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; immediately reply.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complier: gcc 4.7 (which was also used to compile openmpi)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi version: 1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output of &quot;ompi_info --all&quot; from the node where I launch mpirun (which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is also the login node of the cluster)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Package: Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   Open MPI: 1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Open MPI SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Open MPI release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   Open RTE: 1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Open RTE SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Open RTE release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                       OPAL: 1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          OPAL SVN revision: r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          OPAL release date: May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MPI API: 2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Ident string: 1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA carto: file (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA timer: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: inter (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: self (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: sync (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: romio (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: csum (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: v (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: self (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: sm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA topo: unity (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: orted (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: tool (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA odls: default (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: cm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA rml: oob (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: cm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: direct (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: linear (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: radix (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: slave (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: env (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: slave (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: tool (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: command (MCA v2.0, API v1.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Prefix: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Exec_prefix: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Bindir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Sbindir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/sbin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Libdir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Incdir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Mandir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/man
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  Pkglibdir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Libexecdir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/libexec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                Datarootdir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Datadir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Sysconfdir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/etc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Sharedstatedir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/com
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              Localstatedir: /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/var
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    Infodir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Pkgdatadir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  Pkglibdir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              Pkgincludedir:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/include/openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Configure host: cloud.bo.astro.it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              Configured by: andrea
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              Configured on: Tue Jul 31 10:53:46 CEST 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Configure host: cloud.bo.astro.it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   Built by: andrea
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   Built on: Tue Jul 31 11:08:33 CEST 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Built host: cloud.bo.astro.it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 C bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Fortran90 bindings size: medium
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 C compiler: /home/andrea/library/gcc/gcc-objects/bin/gcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        C compiler absolute:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         C compiler version: 4.7.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                C char size: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                C bool size: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C short size: 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 C int size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                C long size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C float size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              C double size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             C pointer size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C char align: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C bool align: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                C int align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              C float align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             C double align: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               C++ compiler: /home/andrea/library/gcc/gcc-objects/bin/g++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      C++ compiler absolute: none
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fortran77 compiler: /home/andrea/library/gcc/gcc-objects/bin/gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Fortran77 compiler abs:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fortran90 compiler: /home/andrea/library/gcc/gcc-objects/bin/gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Fort have real16: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Fort real size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort dbl prec size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Fort cplx size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort dbl cplx size: 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Fort cplx32 size: 32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Fort real align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          Fort real16 align: 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort dbl prec align: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fort dbl cplx align: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          Fort cplx32 align: 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                C profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Build CFLAGS: -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Build FFLAGS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              Build FCFLAGS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              Build LDFLAGS: -Wl,--rpath
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wl,/home/andrea/library/gcc/gcc-objects/lib64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Build LIBS: -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       Wrapper extra FFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Wrapper extra FCFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Wrapper extra LIBS: -ldl  -lm -lnuma -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Internal debug support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            libltdl support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Host topology support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;/home/andrea/.openmpi/mca-params.conf:/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/etc/openmpi-mca-params.conf&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Path for MCA configuration files containing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; default parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             values
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_base_param_file_prefix&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Aggregate MCA parameter file sets
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_base_param_file_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/share/openmpi/amca-param-sets:/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/bin&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_base_param_file_path_force&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Forced Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_component_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/lib/openmpi:/home/andrea/.openmpi/components&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_component_show_load_errors&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to show errors for components that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failed to load or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_component_disable_dlopen&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to attempt to disable opening
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dynamic components or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mca: parameter &quot;mca_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;stderr&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Specifies where the default error output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stream goes (this is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             separate from distinct help messages).  Accepts a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             comma-delimited list of: stderr, stdout, syslog,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             syslogpri:&lt;notice|info|debug&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; syslogid:&lt;str&gt;   (where str is the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             prefix string for all syslog notices),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file[:filename] (if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             filename is not specified, a default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; filename is used),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             fileappend (if not specified, the file is opened for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             truncation), level[:N] (if specified,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; integer verbose level;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             otherwise, 0 is implied)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonym of:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If nonzero, assume that this job is the only (set of)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             process(es) running on each node and bind processes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_param_check&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether you want MPI API parameters checked
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at run-time or not.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                              Possible values are 0 (no checking) and 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (perform checking at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             run-time)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Yield the processor when waiting for MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication (for MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             processes, will default to 1 when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             How often to progress TCP communications (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = never, otherwise
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             specified in microseconds)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that were not freed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to actually free MPI objects when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; their handles are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             freed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_show_mpi_alloc_mem_leaks&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If&gt;0, MPI_FINALIZE will show up to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; many instances of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             memory allocated by MPI_ALLOC_MEM that was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not freed by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             MPI_FREE_MEM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to show all MCA parameter values
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; during MPI_INIT or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (good for reproducability of MPI jobs for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debug purposes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Accepted values are all, default, file, api,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and enviro - or a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             comma delimited combination of them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_show_mca_params_file&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If mpi_show_mca_params is true, setting this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; string to a valid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             filename tells Open MPI to dump all the MCA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter values
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             into a file suitable for reading via the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_param_files
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If nonzero, save the string hostnames of all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI peer processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (mostly for error / debugging output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages).  This can add
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             quite a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If nonzero, print out an identifying message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when MPI_ABORT is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             invoked (hostname, PID of the process that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; called MPI_ABORT)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             and delay for that many seconds before
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exiting (a negative
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             delay value means to never abort).  This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allows attaching of a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If nonzero, print out a stack trace when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_preconnect_mpi&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonyms: mpi_preconnect_all)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to force MPI processes to fully
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wire-up the MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             connections between MPI processes during
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_INIT (vs. making
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             connections lazily -- upon the first MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; traffic between each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             process peer pair)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to force MPI processes to fully
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wire-up the MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             connections between MPI processes during
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_INIT (vs. making
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             connections lazily -- upon the first MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; traffic between each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             process peer pair)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to use the &quot;leave pinned&quot; protocol
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or not.  Enabling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             this setting can help bandwidth performance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when repeatedly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             sending and receiving large messages with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the same buffers over
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RDMA-based networks (0 = do not use &quot;leave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pinned&quot; protocol, 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             = use &quot;leave pinned&quot; protocol, -1 = allow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; network to choose at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             runtime).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protocol or not.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If nonzero, issue a warning if program forks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; under conditions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             that could cause system errors
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: information &quot;mpi_have_sparse_group_storage&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether this Open MPI installation supports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; storing of data in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             MPI groups in &quot;sparse&quot; formats (good for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extremely large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             process count MPI jobs that create many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicators/groups)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_use_sparse_group_storage&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to use &quot;sparse&quot; storage formats for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI groups (only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             relevant if mpi_have_sparse_group_storage is 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mpi: parameter &quot;mpi_notify_init_finalize&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If nonzero, send two notifications during
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_INIT: one near
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             when MPI_INIT starts, and another right
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before MPI_INIT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             finishes, and send 2 notifications during
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_FINALIZE: one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             right when MPI_FINALIZE starts, and another near when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             MPI_FINALIZE finishes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If orte_base_help_aggregate is true,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; duplicate help messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             will be aggregated rather than displayed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; individually.  This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             can be helpful for parallel jobs that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; experience multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             identical failures; rather than print out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the same help/failure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             message N times, display it once with a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; count of how many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             processes sent the same message.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_tmpdir_base&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Base of the session directory tree
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_no_session_dirs&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Prohibited locations for session directories (multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             locations separated by ',', default=NULL)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_send_profile&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Send profile info in launch message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_debug&quot; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Top-level ORTE debug switch (default verbosity: 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_debug_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for ORTE debug messages (default: 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_debug_daemons&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_debug_daemons_file&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether want stdout/stderr of daemons to go
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to a file or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_daemon_bootstrap&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Bootstrap the connection to the HNP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_leave_session_attached&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether applications and/or daemons should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; leave their sessions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             attached so that any output can be received
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - this allows X
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             forwarding without all the attendant debugging output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_output_debugger_proctable&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether or not to output the debugger
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; proctable after launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (default: false)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_debugger_test_daemon&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of the executable to be used to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; simulate a debugger
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             colaunch (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_debugger_test_attach&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Test debugger colaunch after debugger attachment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_debugger_check_rate&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Set rate (in secs) for auto-detect of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debugger attachment (0 =&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             do not check)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_do_not_launch&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Perform all necessary operations to prepare
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to launch the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             application, but do not actually launch it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_daemon_spin&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Have any orteds spin until we can connect a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debugger to them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_daemon_fail&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Have the specified orted fail after init for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debugging purposes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_daemon_fail_delay&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Have the specified orted fail after
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specified number of seconds
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (default: 0 =&gt;   no delay)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_heartbeat_rate&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Seconds between checks for daemon
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; state-of-health (default: 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             =&gt;   do not check)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_startup_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Milliseconds/daemon to wait for startup
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before declaring
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             failed_to_start (default: 0 =&gt;   do not check)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_timing&quot; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_timing_details&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Request that detailed timing data by reported
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_base_user_debugger&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;totalview
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             @mpirun@ -a @mpirun_args@ : ddt -n @np@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -start @executable@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             @executable_argv@ @single_app@ : fxp @mpirun@ -a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             @mpirun_args@&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Sequence of user-level debuggers to search
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for in orterun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_abort_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Max time to wait [in secs] before aborting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an ORTE operation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (default: 1sec)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_timeout_step&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1000&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Time to wait [in usecs/proc] before aborting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an ORTE operation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (default: 1000 usec/proc)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_default_hostfile&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7/etc/openmpi-default-hostfile&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of the default hostfile (relative or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; absolute path, &quot;none&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             to ignore environmental or default MCA param setting)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_rankfile&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value, synonyms: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of the rankfile to be used for mapping
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes (relative
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             or absolute path)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_keep_fqdn_hostnames&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether or not to keep FQDN hostnames [default: no]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_use_regexp&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether or not to use regular expressions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for launch [default:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             no]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_tag_output&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Tag all output with [job,rank] (default: false)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_xml_output&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Display all output in XML format (default: false)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_xml_file&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Provide all output in XML format to the specified file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_timestamp_output&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Timestamp all application process output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (default: false)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_output_filename&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Redirect output from application processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; into filename.rank
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             [default: NULL]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_show_resolved_nodenames&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Display any node names that are resolved to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a different name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (default: false)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_hetero_apps&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Indicates that multiple app_contexts are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; being provided that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             are a mix of 32/64 bit binaries (default: false)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_launch_agent&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;orted&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Command used to start processes on remote
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes (default:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             orted)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_allocation_required&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether or not an allocation by a resource
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; manager is required
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             [default: no]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_xterm&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Create a new xterm window and display output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the specified
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ranks there [default: none]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_forward_job_control&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Forward SIGTSTP (after converting to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SIGSTOP) and SIGCONT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             signals to the application procs [default: no]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_rsh_agent&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ssh : rsh&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pls_rsh_agent, plm_rsh_agent)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The command used to launch executables on remote nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_assume_same_shell&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plm_rsh_assume_same_shell)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If set to 1, assume that the shell on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; remote node is the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             same as the shell on the local node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Otherwise, probe for what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the remote shell [default: 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_report_launch_progress&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Output a brief periodic report on launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; progress [default: no]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_num_boards&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of processor boards/node (1-256) [default: 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_num_sockets&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of sockets/board (1-256)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_num_cores&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of cores/socket (1-256)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_cpu_set&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Comma-separated list of ranges specifying logical cpus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_process_binding&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Policy for binding processes [none | core |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; socket | board]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (supported qualifier: if-avail)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_report_bindings&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Report bindings
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA orte: parameter &quot;orte_report_events&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             URI to which events are to be reported
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (default: NULL)]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA opal: parameter &quot;opal_net_private_ipv4&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;10.0.0.0/8;172.16.0.0/12;192.168.0.0/16;169.254.0.0/16&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Semicolon-delimited list of CIDR notation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; entries specifying
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             what networks are considered &quot;private&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (default value based on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RFC1918 and RFC3330)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;6,7,8,11&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Comma-delimited list of integer signal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; numbers to Open MPI to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             attempt to intercept.  Upon receipt of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intercepted signal,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Open MPI will display a stack trace and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; abort.  Open MPI will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             *not* replace signals if handlers are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; already installed by the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             time MPI_INIT is invoked.  Optionally append
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;:complain&quot; to any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             signal number in the comma-delimited list to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             complain if it detects another signal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; handler (and therefore
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             does not insert its own).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA opal: parameter &quot;opal_profile&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Set to non-zero to profile component selections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA opal: parameter &quot;opal_profile_file&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of the file containing the cluster configuration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             information
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA opal: parameter &quot;opal_paffinity_alone&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonyms: mpi_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If nonzero, assume that this job is the only (set of)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             process(es) running on each node and bind processes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA opal: parameter &quot;opal_set_max_sys_limits&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Set to non-zero to automatically set any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; system-imposed limits
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             to the maximum allowed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA opal: parameter &quot;opal_event_include&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;poll&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Comma-delimited list of libevent subsystems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to use (epoll,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             poll, select -- available on your platform)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA backtrace: parameter &quot;backtrace&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; backtrace framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the backtrace framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             MCA memchecker: parameter &quot;memchecker&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the memchecker
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             framework (&lt;none&gt;   means use all components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: parameter &quot;memory&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: parameter &quot;memory_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the memory framework (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: information
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;memory_linux_ptmalloc2_available&quot; (value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether ptmalloc2 support is included in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI or not (1 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: information
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;memory_linux_ummunotify_available&quot; (value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether ummunotify support is included in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI or not (1 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: parameter &quot;memory_linux_ptmalloc2_enable&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;-1&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to enable ptmalloc2 support or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (negative = try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             enable, but continue even if support is not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available, 0 = do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             not enable support, positive = try to enable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and fail if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             support is not available)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: parameter &quot;memory_linux_ummunotify_enable&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;-1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to enable ummunotify support or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (negative = try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             enable, but continue even if support is not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available, 0 = do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             not enable support, positive = try to enable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and fail if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             support is not available)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: parameter &quot;memory_linux_disable&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If this MCA parameter is set to 1 **VIA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ENVIRONMENT VARIABLE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ONLY*** (this MCA parameter *CANNOT* be set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in a file or on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             mpirun command line!), this component will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be disabled and will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             not attempt to use either ummunotify or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory hook support
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA memory: parameter &quot;memory_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the paffinity framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA paffinity: parameter &quot;paffinity&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; paffinity framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA paffinity: parameter &quot;paffinity_hwloc_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the hwloc paffinity component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA carto: parameter &quot;carto_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the carto framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA carto: parameter &quot;carto&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; carto framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA carto: parameter &quot;carto_auto_detect_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;11&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the auto_detect carto component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA carto: parameter &quot;carto_file_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The path to the cartography file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA carto: parameter &quot;carto_file_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the file carto component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the shmem framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shmem framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem_mmap_enable_nfs_warning&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Enable the warning emitted when Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; detects that its
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             shared memory backing file is located on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; network filesystem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (1 = enabled, 0 = disabled).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem_mmap_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;50&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the mmap shmem component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem_mmap_relocate_backing_file&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to change the default placement of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; backing files or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (Negative = try to relocate backing files to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an area rooted at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the path specified by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shmem_mmap_opal_shmem_mmap_backing_file_base_dir, but continue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             with the default path if the relocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fails, 0 = do not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             relocate, Positive = same as the negative
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; option, but will fail
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             if the relocation fails.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem_mmap_backing_file_base_dir&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;/dev/shm&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Specifies where backing files will be created when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             shmem_mmap_relocate_backing_file is in use.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem_posix_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the posix shmem component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA shmem: parameter &quot;shmem_sysv_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;30&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the sysv shmem component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA maffinity: parameter &quot;maffinity_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the maffinity framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA maffinity: parameter &quot;maffinity&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; maffinity framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA maffinity: parameter &quot;maffinity_first_use_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;10&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA maffinity: parameter &quot;maffinity_hwloc_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the hwloc maffinity component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA timer: parameter &quot;timer&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; timer framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA timer: parameter &quot;timer_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the timer framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA timer: parameter &quot;timer_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA sysinfo: parameter &quot;sysinfo&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sysinfo framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA sysinfo: parameter &quot;sysinfo_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the sysinfo framework (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA sysinfo: parameter &quot;sysinfo_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA hwloc: parameter &quot;hwloc_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the hwloc framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA hwloc: parameter &quot;hwloc_base_mem_alloc_policy&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Policy that determines how general memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocations are bound
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             after MPI_INIT.  A value of &quot;none&quot; means
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that no memory policy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             is applied.  A value of &quot;local_only&quot; means
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that all memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             allocations will be restricted to the local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NUMA node where
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             each process is placed.  Note that operating
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; system paging
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             policies are unaffected by this setting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For example, if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &quot;local_only&quot; is used and local NUMA node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory is exhausted, a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             new memory allocation may cause paging.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA hwloc: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;hwloc_base_mem_bind_failure_action&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;error&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             What Open MPI will do if it explicitly tries
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to bind memory to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             a specific NUMA location, and fails.  Note
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that this is a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             different case than the general allocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; policy described by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             hwloc_base_alloc_policy.  A value of &quot;warn&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; means that Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             will warn the first time this happens, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allow the job to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             continue (possibly with degraded
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; performance).  A value of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &quot;error&quot; means that Open MPI will abort the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; job if this happens.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA hwloc: parameter &quot;hwloc&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA hwloc: parameter &quot;hwloc_hwloc132_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA dpm: parameter &quot;dpm&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dpm framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA dpm: parameter &quot;dpm_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the dpm framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA dpm: parameter &quot;dpm_orte_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA pubsub: parameter &quot;pubsub&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pubsub framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA pubsub: parameter &quot;pubsub_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the pubsub framework (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA pubsub: parameter &quot;pubsub_orte_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;50&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the pubsub pmi component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA allocator: parameter &quot;allocator&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocator framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA allocator: parameter &quot;allocator_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the allocator framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA allocator: parameter &quot;allocator_basic_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;30&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              MCA allocator: parameter &quot;allocator_bucket_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coll framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the coll framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_basic_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_basic_crossover&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Minimum number of processes in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator before using the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_hierarch_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the hierarchical coll component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_hierarch_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Turn verbose message of the hierarchical
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; coll component on/off
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_hierarch_use_rdma&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Switch from the send btl list used to detect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hierarchies to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             rdma btl list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_hierarch_ignore_sm&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Ignore sm protocol when detecting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hierarchies. Required to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             enable the usage of protocol specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; collective operations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_hierarch_detection_alg&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;2&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Used to specify the algorithm for detecting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hierarchy.Choose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             between all or two levels of hierarchy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_hierarch_bcast_alg&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Used to specify the algorithm used for bcast
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_hierarch_segment_size&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;32768&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Used to specify the segment size for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; segmented algorithms.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_inter_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;40&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the inter coll component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_inter_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Turn verbose message of the inter coll
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component on/off
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_self_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;75&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sm_control_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Length of the control data -- should usually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be either the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             length of a cache line on most SMPs, or the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; size of a page on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             machines that support direct memory affinity
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; page placement (in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;8192&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Fragment size (in bytes) used for passing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data through shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             memory (will be rounded up to the nearest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; control_size size)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;2&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of &quot;in use&quot; flags, used to mark a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message passing area
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             segment as currently being used or not (must
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be&gt;= 2 and&lt;=
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             comm_num_segments)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sm_comm_num_segments&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;8&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of segments in each communicator's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared memory message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             passing area (must be&gt;= 2, and must be a multiple of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Degree of the tree for tree-based operations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (must be =&gt;   1 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of processes to use for the calculation of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             shared_mem_size MCA information parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (must be =&gt;   2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: information &quot;coll_sm_shared_mem_used_data&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (value:&lt;548864&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Amount of shared memory used, per
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicator, in the shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             memory data area for info_num_procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes (in bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sync_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;50&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the sync coll component; only relevant if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             barrier_before or barrier_after is&gt;   0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sync_barrier_before&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1000&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Do a synchronization before each Nth collective
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_sync_barrier_after&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Do a synchronization after each Nth collective
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_tuned_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;30&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (current value:&lt;32768&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Size of communicator were we stop
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pre-allocating memory for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             fixed internal buffer used for message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; requests etc that is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             hung off the communicator data segment. I.e.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if you have a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             100'000 nodes you might not want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pre-allocate 200'000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Inital fanout used in the tree topologies for each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             communicator. This is only an initial guess,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if a tuned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             collective needs a different fanout for an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operation, it build
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             it dynamically. This parameter is only for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the first guess and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             might save a little time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Inital fanout used in the chain (fanout
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; followed by pipeline)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             topologies for each communicator. This is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only an initial
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             guess, if a tuned collective needs a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different fanout for an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             operation, it build it dynamically. This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter is only for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Switch used to decide if we use static
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (compiled/if statements)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: parameter &quot;io_base_freelist_initial_size&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;16&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: parameter &quot;io_base_freelist_max_size&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;64&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: parameter &quot;io_base_freelist_increment&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;16&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: parameter &quot;io&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; io framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: parameter &quot;io_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the io framework (0 = no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: parameter &quot;io_romio_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: parameter &quot;io_romio_delete_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: information &quot;io_romio_version&quot; (value:&lt;from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPICH2 v1.3.1 with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             an additional patch from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; romio-maint_at_[hidden] about an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             attribute issue&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Version of ROMIO
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: information &quot;io_romio_user_configure_params&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             User-specified command line parameters
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; passed to ROMIO's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             configure script
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA io: information
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;io_romio_complete_configure_params&quot; (value:&lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             CFLAGS='-DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             -pthread' CPPFLAGS='
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -I/home/andrea/library/openmpi/openmpi-1.6/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                               -I/usr/include/infiniband -I/usr/include/infiniband'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             FFLAGS='' LDFLAGS='-Wl,--rpath
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             -Wl,/home/andrea/library/gcc/gcc-objects/lib64 '
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --enable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --prefix=/home/andrea/library/openmpi/openmpi-1.6-gnu-4.7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --with-mpi=open_mpi --disable-aio&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Complete set of command line parameters
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; passed to ROMIO's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             configure script
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpool framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the mpool framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_fake_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;vma&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The name of the registration cache the mpool
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the maximum size of registration cache in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bytes. 0 is unlimited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (default 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;67108864&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Enable verbose output for mpool sm component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA mpool: parameter &quot;mpool_sm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the PML framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pml framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;5&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_send_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;3&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_rdma_put_retries_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;5&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_max_rdma_per_request&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_max_send_per_range&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_unexpected_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;128&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_bfo_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of elements to add when growing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; request free lists
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_cm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;10&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             CM PML selection priority
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_send_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;3&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_rdma_put_retries_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;5&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_max_rdma_per_request&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_max_send_per_range&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_unexpected_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;128&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_csum_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;20&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;3&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_rdma_put_retries_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;5&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_max_rdma_per_request&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_max_send_per_range&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;4&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_unexpected_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;128&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_ob1_allocator&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;bucket&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_v_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_v_output&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;stderr&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA pml: parameter &quot;pml_v_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA bml: parameter &quot;bml&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bml framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA bml: parameter &quot;bml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the bml framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA bml: parameter &quot;bml_r2_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA rcache: parameter &quot;rcache&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rcache framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA rcache: parameter &quot;rcache_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the rcache framework (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA rcache: parameter &quot;rcache_vma_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of fragments by default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;32&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;65536&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             BTL exclusivity (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;10&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             only used by the &quot;dr&quot; PML (ignored by others): ACK=16,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             CHECKSUM=32, RDMA_COMPLETION=128; flags only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used by the &quot;bfo&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_rndv_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;131072&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Size (in bytes) of &quot;phase 1&quot; fragment sent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for all large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             messages (must be&gt;= 0 and&lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (must be&gt;= 1).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;262144&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2&quot; fragment of a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             long message when using the pipeline
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protocol (must be&gt;= 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_self_rdma_pipeline_send_length&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;2147483647&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Length of the &quot;phase 2&quot; portion of a large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message (in bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             when using the pipeline protocol.  This part
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             will be split into fragments of size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; max_send_size and sent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             using send/receive semantics (must be&gt;= 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only relevant when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_rdma_pipeline_frag_size&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;2147483647&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3&quot; fragment from a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             long message when using the pipeline
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protocol.  These fragments
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             will be sent using RDMA semantics (must be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 1; only relevant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_min_rdma_pipeline_size&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Messages smaller than this size (in bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will not use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RDMA pipeline protocol.  Instead, they will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be split into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             fragments of max_send_size and sent using send/receive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             semantics (must be&gt;=0, and is automatically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; adjusted up to at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             least
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (eager_limit+btl_rdma_pipeline_send_length); only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;100&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interconnect(0 = auto-detect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modules],&gt;= 1 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_latency&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Approximate latency of interconnect (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_self_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: information &quot;btl_sm_have_knem_support&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether this component supports the knem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Linux kernel module or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_use_knem&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether knem support is desired or not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (negative = try to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             enable knem support, but continue even if it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is not available,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             0 = do not enable knem support, positive =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try to enable knem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             support and fail if it is not available)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_knem_dma_min&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Minimum message size (in bytes) to use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; knem DMA mode;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ignored if knem does not support DMA mode (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = do not use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             knem DMA mode)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_knem_max_simultaneous&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Max number of simultaneous ongoing knem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operations to support
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (0 = do everything synchronously, which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; probably gives the best
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             large message latency;&gt;0 means to do all operations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             asynchronously, which supports better
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overlap for simultaneous
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             large message sends)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;8&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;64&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;-1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;sm&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;120&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;65535&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             BTL exclusivity (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             only used by the &quot;dr&quot; PML (ignored by others): ACK=16,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             CHECKSUM=32, RDMA_COMPLETION=128; flags only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used by the &quot;bfo&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_rndv_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4096&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Size (in bytes) of &quot;phase 1&quot; fragment sent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for all large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             messages (must be&gt;= 0 and&lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;4096&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (must be&gt;= 1).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;32768&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2&quot; fragment of a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             long message when using the pipeline
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protocol (must be&gt;= 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_bandwidth&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;9000&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interconnect(0 = auto-detect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modules],&gt;= 1 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_latency&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Approximate latency of interconnect (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_sm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_links&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_if_include&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Comma-delimited list of devices or CIDR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notation of networks to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             use for MPI communication (e.g., &quot;eth0,eth1&quot; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exclusive with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             btl_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;lo,sppp&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Comma-delimited list of devices or CIDR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notation of networks to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             NOT use for MPI communication -- all devices
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not matching these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             specifications will be used (e.g., &quot;eth0,eth1&quot; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exclusive with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             btl_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;8&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;32&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;30720&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The size of the internal cache for each TCP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection. This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             cache is used to reduce the number of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; syscalls, by replacing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             them with memcpy. Every read will read the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; expected data plus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the amount of the endpoint_cache
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_use_nagle&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to use Nagle's algorithm or not (using Nagle's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             algorithm may increase short message latency)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1024&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The minimum port where the TCP BTL will try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to bind (default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             1024)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;64511&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The number of ports where the TCP BTL will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try to bind (default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             64511). This parameter together with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; port min, define a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;100&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             BTL exclusivity (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;314&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             BTL bit flags (general flags: SEND=1, PUT=2, GET=4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             SEND_INPLACE=8, RDMA_MATCHED=64,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HETEROGENEOUS_RDMA=256; flags
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             only used by the &quot;dr&quot; PML (ignored by others): ACK=16,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             CHECKSUM=32, RDMA_COMPLETION=128; flags only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used by the &quot;bfo&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_rndv_eager_limit&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;65536&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Size (in bytes) of &quot;phase 1&quot; fragment sent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for all large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             messages (must be&gt;= 0 and&lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;65536&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (must be&gt;= 1).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;131072&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2&quot; fragment of a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             long message when using the pipeline
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protocol (must be&gt;= 1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_tcp_rdma_pipeline_send_length&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;131072&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Length of the &quot;phase 2&quot; portion of a large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message (in bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             when using the pipeline protocol.  This part
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             will be split into fragments of size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; max_send_size and sent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             using send/receive semantics (must be&gt;= 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only relevant when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_rdma_pipeline_frag_size&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;2147483647&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum size (in bytes) of a single &quot;phase
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3&quot; fragment from a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             long message when using the pipeline
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; protocol.  These fragments
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             will be sent using RDMA semantics (must be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 1; only relevant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_min_rdma_pipeline_size&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Messages smaller than this size (in bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will not use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RDMA pipeline protocol.  Instead, they will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be split into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             fragments of max_send_size and sent using send/receive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             semantics (must be&gt;=0, and is automatically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; adjusted up to at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             least
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (eager_limit+btl_rdma_pipeline_send_length); only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;100&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interconnect(0 = auto-detect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value at run-time [not supported in all BTL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modules],&gt;= 1 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_latency&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;100&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Approximate latency of interconnect (must be&gt;= 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_disable_family&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_if_seq&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If specified, a comma-delimited list of TCP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interfaces.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Interfaces will be assigned, one to each MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process, in a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             round-robin fashion on each server.  For
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; example, if the list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             is &quot;eth0,eth1&quot; and four MPI processes are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run on a single
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             server, then local ranks 0 and 2 will use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eth0 and local ranks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             1 and 3 will use eth1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_tcp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_base_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_base_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages when certain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             NICs are not used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mtl: parameter &quot;mtl&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtl framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the mtl framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA topo: parameter &quot;topo&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; topo framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA topo: parameter &quot;topo_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the topo framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA topo: parameter &quot;topo_unity_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; osc framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the osc framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Enable optimizations available only if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;16384&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_rdma_eager_send&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Attempt to start data movement during
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication call,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             instead of at synchrnoization time.  Info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; key of same name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             overrides this value.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_rdma_use_buffers&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Coalesce messages during an epoch to reduce network
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             utilization.  Info key of same name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overrides this value.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_rdma_use_rdma&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Use real RDMA operations to transfer data.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Info key of same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             name overrides this value.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_rdma_rdma_completion_wait&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Wait for all completion of rdma events before sending
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             acknowledgment.  Info key of same name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overrides this value.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_rdma_no_locks&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Enable optimizations available only if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA osc: parameter &quot;osc_rdma_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MCA op: parameter &quot;op_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level of the op framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: parameter &quot;iof&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; iof framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: parameter &quot;iof_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the iof framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: parameter &quot;iof_hnp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: parameter &quot;iof_orted_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA iof: parameter &quot;iof_tool_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; oob framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the oob framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbose level for the OOB tcp component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum number of peer connections to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; simultaneously maintain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (-1 = infinite)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;60&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of times to try shutting down a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection before giving
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Enable (1) / disable (0) debugging output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for this component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TCP socket send buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;131072&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TCP socket receive buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_if_include&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Comma-delimited list of TCP interfaces to use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Comma-delimited list of TCP interfaces to exclude
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Enable (1) / disable (0) random sleep for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection wireup.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;event&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Mode for HNP to accept incoming connections: event,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             listen_thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;10&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             High water mark for queued accepted socket
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list size.  Used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             only when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_listen_thread_wait_time&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;10&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Time in milliseconds to wait before actively
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking for new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             connections when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_static_ports&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Static ports for daemons and procs (IPv4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_dynamic_ports&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Range of ports to be dynamically used by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; daemons and procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (IPv4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_disable_family&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Disable IPv4 (4) or IPv6 (6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA oob: parameter &quot;oob_tcp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA odls: parameter &quot;odls_base_sigkill_timeout&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Time to wait for a process to die after
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; issuing a kill signal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             to it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA odls: parameter &quot;odls&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; odls framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA odls: parameter &quot;odls_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the odls framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA odls: parameter &quot;odls_default_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: parameter &quot;ras_base_display_alloc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to display the allocation after it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is determined
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: parameter &quot;ras_base_display_devel_alloc&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to display a developer-detail
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocation after it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             determined
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: parameter &quot;ras&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ras framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: parameter &quot;ras_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the ras framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: parameter &quot;ras_cm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: parameter &quot;ras_loadleveler_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;90&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the loadleveler ras component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ras: parameter &quot;ras_slurm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;75&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonym of: orte_rankfile)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Name of the rankfile to be used for mapping
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes (relative
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             or absolute path)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;slot&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Scheduling Policy for RMAPS. [slot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (alias:core) | socket |
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             board | node]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Launch n procs/node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_n_perboard&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Launch n procs/board
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_n_persocket&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;-1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Launch n procs/socket
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_loadbalance&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Balance total number of procs across all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocated nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_cpus_per_proc&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps_base_cpus_per_rank)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of cpus to use for each rank [1-2**15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (default=1)]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_cpus_per_rank&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, synonym of:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps_base_cpus_per_proc)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Number of cpus to use for each rank [1-2**15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (default=1)]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_stride&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             When binding multiple cores to a rank, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; step size to use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             between cores [1-2**15 (default: 1)]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_slot_list&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             List of processor IDs to bind MPI processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to (e.g., used in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             conjunction with rank files) [default=NULL]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If false, allow scheduling MPI applications
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on the same node as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             mpirun (default).  If true, do not schedule any MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If true, then do not allow oversubscription
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of nodes - mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             will return an error if there aren't enough
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes to launch all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to display the process map after it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is computed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_display_devel_map&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Whether to display a developer-detail
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process map after it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             computed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the rmaps framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_load_balance_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_resilient_fault_grp_file&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Filename that contains a description of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fault groups for this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             system
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_resilient_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_seq_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA rmaps: parameter &quot;rmaps_topo_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA rml: parameter &quot;rml_wrapper&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Use a Wrapper component around the selected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RML component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA rml: parameter &quot;rml&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rml framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA rml: parameter &quot;rml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the rml framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA rml: parameter &quot;rml_oob_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; routed framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the routed framework (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed_binomial_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed_cm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed_direct_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed_linear_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed_radix_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA routed: parameter &quot;routed_slave_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_agent&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ssh : rsh&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, deprecated, synonym
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of: orte_rsh_agent)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The command used to launch executables on remote nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_assume_same_shell&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;1&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             orte_assume_same_shell)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If set to 1, assume that the shell on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; remote node is the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             same as the shell on the local node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Otherwise, probe for what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the remote shell [default: 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plm framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the plm framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_num_concurrent&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;128&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             How many plm_rsh_agent instances to invoke
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; concurrently (must
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             be&gt;   0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_force_rsh&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Force the launcher to always use rsh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_disable_qrsh&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Disable the launcher to use qrsh when under
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the SGE parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_daemonize_qrsh&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Daemonize the orted under the SGE parallel environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_disable_llspawn&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Disable the use of llspawn when under the LoadLeveler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_daemonize_llspawn&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Daemonize the orted when under the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LoadLeveler environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;10&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the rsh plm component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_delay&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;1&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Delay (in seconds) between invocations of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the remote agent, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             only used when the &quot;debug&quot; MCA parameter is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; true, or the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             top-level MCA debugging is enabled
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (otherwise this value is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_rsh_tree_spawn&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If set to 1, launch via a tree-based topology
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_slurm_args&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA plm: parameter &quot;plm_slurm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Which Filem component to use (empty = auto-select)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the filem framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_rsh_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;20&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_rsh_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbose level for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_rsh_rcp&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;scp&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The rsh cp command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_rsh_cp&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;cp&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The Unix cp command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_rsh_rsh&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ssh&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The remote shell command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_rsh_max_incomming&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum number of incomming connections (0 = any)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  MCA filem: parameter &quot;filem_rsh_max_outgoing&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;10&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Maximum number of out going connections (0 = any)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA errmgr: parameter &quot;errmgr&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errmgr framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the errmgr framework (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 MCA errmgr: parameter &quot;errmgr_default_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess&quot; (current value:&lt;none&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source: default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ess framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the ess framework (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_env_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_hnp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_singleton_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_slave_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_slurm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_slurmd_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MCA ess: parameter &quot;ess_tool_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: parameter &quot;grpcomm&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; grpcomm framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: parameter &quot;grpcomm_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the grpcomm framework (0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: parameter &quot;grpcomm_bad_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: parameter &quot;grpcomm_basic_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                MCA grpcomm: parameter &quot;grpcomm_hier_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: parameter &quot;notifier_threshold_severity&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;critical&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Report all events at or above this severity
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [default: critical]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: parameter &quot;notifier&quot; (current value:&lt;none&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Default selection set of components for the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notifier framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (&lt;none&gt;   means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: parameter &quot;notifier_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Verbosity level for the notifier framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: parameter &quot;notifier_command_cmd&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:&lt;/sbin/initlog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             -f $s -n &quot;Open MPI&quot; -s &quot;$S: $m (errorcode:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $e)&quot;&gt;, data source:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Command to execute, with substitution.  $s =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; integer severity;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             $S = string severity; $e = integer error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code; $m = string
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: parameter &quot;notifier_command_timeout&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;30&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Timeout (in seconds) of the command
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: parameter &quot;notifier_command_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;10&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             data source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Priority of this component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MCA notifier: parameter &quot;notifier_syslog_priority&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (current value:&lt;0&gt;, data
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             source: default value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output of cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor     : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id     : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family    : 15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model         : 75
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name    : AMD Athlon(tm) 64 X2 Dual Core Processor 3800+
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping      : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz               : 1002.094
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size    : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id   : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings      : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id               : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores     : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu           : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level   : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp            : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags         : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext lm 3dnowext
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3dnow pni cx16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips      : 2003.90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size      : 1088 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size  : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment       : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts fid vid ttp [4] [5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor     : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id     : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family    : 15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model         : 75
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name    : AMD Athlon(tm) 64 X2 Dual Core Processor 3800+
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping      : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz               : 1002.094
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size    : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id   : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings      : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id               : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores     : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu           : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level   : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp            : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags         : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext lm 3dnowext
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3dnow pni cx16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips      : 2003.90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size      : 1088 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size  : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment       : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts fid vid ttp [4] [5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output of ifconfig -a from a compute node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:18:F3:3F:84:A1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet addr:192.168.0.2  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet6 addr: fe80::218:f3ff:fe3f:84a1/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX packets:2006 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             TX packets:2064 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX bytes:242685 (236.9 KiB)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Interrupt:11 Base address:0x8000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX packets:60 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             TX packets:60 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX bytes:4440 (4.3 KiB)  TX bytes:4440 (4.3 KiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sit0      Link encap:IPv6-in-IPv4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output of ifconfig -a from the login node, where I run mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:18:F3:51:B3:6E
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet addr:192.168.0.1  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet6 addr: fe80::218:f3ff:fe51:b36e/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX packets:7180758 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             TX packets:4989496 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX bytes:6045614452 (5.6 GiB)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Interrupt:201 Base address:0xe000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:01:02:13:AA:3C
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet addr:137.204.66.188  Bcast:137.204.66.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet6 addr: fe80::201:2ff:fe13:aa3c/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX packets:4750212 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             TX packets:405027 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX bytes:629146679 (600.0 MiB)  TX bytes:332118265 (316.7 MiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Interrupt:177 Base address:0x9c00
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX packets:288455 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             TX packets:288455 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX bytes:35908038 (34.2 MiB)  TX bytes:35908038 (34.2 MiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sit0      Link encap:IPv6-in-IPv4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ====================================================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output of mpirun --bynode --hostfile my_hostfile.txt --tag-output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,0]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,6]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,3]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,4]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,9]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,10]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,2]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,8]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,11]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,5]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:package:Open MPI andrea_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,7]&lt;stdout&gt;:ident:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:ompi:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:ompi:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:ompi:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:orte:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:orte:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:orte:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:opal:version:full:1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:opal:version:svn:r26429
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:opal:version:release_date:May 10, 2012
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1,1]&lt;stdout&gt;:ident:1.6
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------
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
<span class="quotelev4">&gt;&gt;&gt;&gt; End of users Digest, Vol 2339, Issue 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; **************************************
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
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 2340, Issue 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
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
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 2343, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20126.php">Reuti: "Re: [OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<li><strong>Previous message:</strong> <a href="20124.php">San B: "[OMPI users] OpenMPI-1.6.1: Warning - registering physical memry for mpi jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20111.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20149.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Maybe reply:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
