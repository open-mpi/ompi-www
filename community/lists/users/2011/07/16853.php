<?
$subject_val = "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 07:28:43 2011" -->
<!-- isoreceived="20110708112843" -->
<!-- sent="Fri, 8 Jul 2011 07:28:42 -0400" -->
<!-- isosent="20110708112842" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows" -->
<!-- id="OF21812C9D.D1BCC498-ON852578C7.003EC718-852578C7.003F0DF3_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF77CE5A02.6E0A95CB-ON852578BE.006F6E2D-852578BE.006F8C7A_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows<br>
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 07:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16852.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been following this list for several months now and have been quite 
<br>
impressed by the helpfulness of the list experts in response to most 
<br>
questions.  So how come the pregnant silence in response to my question? I 
<br>
could really use some help here.
<br>
<p>- Jeff
<br>
<p><p><p>From:   Jeffrey A Cummings &lt;Jeffrey.A.Cummings_at_[hidden]&gt;
<br>
To:     Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:   06/29/2011 04:18 PM
<br>
Subject:        [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: [OMPI 
<br>
users] Problem with prebuilt ver 1.5.3 for windows
<br>
Sent by:        users-bounces_at_[hidden]
<br>
<p><p><p>Anyone (Shiqing perhaps) have any more thoughts on this problem? 
<br>
<p>- Jeff 
<br>
<p><p><p><p>From:        Damien &lt;damien_at_[hidden]&gt; 
<br>
To:        Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Date:        06/24/2011 03:59 PM 
<br>
Subject:        Re: [OMPI users] Problem with prebuilt ver 1.5.3 for 
<br>
windows 
<br>
Sent by:        users-bounces_at_[hidden] 
<br>
<p><p><p>Yeah, and I'm wrong too, InterlockedCompareExchange64 is available on 
<br>
32-bit.  I think this is one for Shiqing.
<br>
<p>You could build OpenMPI yourself if you have VS2008.  It's pretty easy to 
<br>
do.
<br>
<p>Damien
<br>
<p>On 24/06/2011 1:51 PM, Jeffrey A Cummings wrote: 
<br>
Damien - 
<br>
<p>I'm using the 32 bit version of OpenMPI.  I think the 64 refers to the 
<br>
size of integer that the function works on, not the operating system 
<br>
version.  I didn't have this problem with VS 2008, so I think they've 
<br>
changed something in VS 2010.  I just don't know how to fix it. 
<br>
<p>- Jeff 
<br>
<p><p><p><p>From:        Damien &lt;damien_at_[hidden]&gt; 
<br>
To:        Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Date:        06/24/2011 02:35 PM 
<br>
Subject:        Re: [OMPI users] Problem with prebuilt ver 1.5.3 for 
<br>
windows 
<br>
Sent by:        users-bounces_at_[hidden] 
<br>
<p><p><p>Jeff,
<br>
<p>InterlockedCompareExchange64 is a 64-bit-only instruction.  Are you 
<br>
running XP 32-bit (I think you are b/c I don't think there was a XP64 
<br>
SP3...).  You need the 32-bit OpenMPI version.  If you are running a 
<br>
64-bit OS, but building a 32-bit executable, that instruction isn't 
<br>
available in 32-bit and you still need to link with 32-bit OpenMPI.
<br>
<p>Damien    
<br>
<p>On 24/06/2011 12:16 PM, Jeffrey A Cummings wrote: 
<br>
I'm having a problem using the prebuilt Windows version 1.5.3 with my app 
<br>
built with MS VisualStudio 2010.  I get an error message (for each node) 
<br>
that says: &quot;The procedure entry point InterlockedCompareExchange64 could 
<br>
not be located in the dynamic link library KERNEL32.dll&quot;.  I'm running 
<br>
Windows XP, sp 3. 
<br>
<p>- Jeff Cummings 
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16852.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
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
