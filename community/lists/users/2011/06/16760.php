<?
$subject_val = "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 15:51:23 2011" -->
<!-- isoreceived="20110624195123" -->
<!-- sent="Fri, 24 Jun 2011 15:51:11 -0400" -->
<!-- isosent="20110624195111" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows" -->
<!-- id="OFE9669A95.BE0F6AB7-ON852578B9.006CC55B-852578B9.006D1353_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4E04D8C4.6070401_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows<br>
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-24 15:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16761.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16759.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>In reply to:</strong> <a href="16759.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16761.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16761.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p><p><p><p>From:   Damien &lt;damien_at_[hidden]&gt;
<br>
To:     Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:   06/24/2011 02:35 PM
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16761.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16759.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>In reply to:</strong> <a href="16759.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16761.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16761.php">Damien: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
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
