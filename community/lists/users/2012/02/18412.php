<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 03:56:42 2012" -->
<!-- isoreceived="20120207085642" -->
<!-- sent="Tue, 7 Feb 2012 19:56:32 +1100" -->
<!-- isosent="20120207085632" -->
<!-- name="James Torossian" -->
<!-- email="j.torossian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="003c01cce576$64f80820$2ee81860$_at_torossian@essetek.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74CFC6F1-0F91-4B1F-8702-AA52BAF8A4F9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] O-MPI Support for Windows 7<br>
<strong>From:</strong> James Torossian (<em>j.torossian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 03:56:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>&nbsp;
<br>
<p>Thanks for your prompt reply, it is much appreciated. In response to your
<br>
questions:
<br>
<p>&nbsp;
<br>
<p>Yes, I can execute ipconfig.exe through ssh without having to provide a
<br>
username or password (both in an ssh session and the command line).
<br>
<p>&nbsp;
<br>
<p>I have run hostname as requested (the hostname is not returned but the
<br>
process launches on the remote machine and terminates) ...
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ ssh NanoOneQuad
<br>
<p>Last login: Tue Feb  7 19:35:14 2012 from jimt-pc
<br>
<p>&nbsp;
<br>
<p>JimT_at_NanoOneQuad ~
<br>
<p>$ hostname
<br>
<p>NanoOneQuad
<br>
<p>&nbsp;
<br>
<p>JimT_at_NanoOneQuad ~
<br>
<p>$ exit
<br>
<p>logout
<br>
<p>Connection to NanoOneQuad closed.
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ ssh NanoOneQuad hostname
<br>
<p>NanoOneQuad
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ mpirun -H NanoOneQuad hostname.exe
<br>
<p>connecting to NanoOneQuad
<br>
<p>username:JimT
<br>
<p>password:**************
<br>
<p>Save Credential?(Y/N) n
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$
<br>
<p>&nbsp;
<br>
<p>Please let me know any ideas you may have.
<br>
<p>&nbsp;
<br>
<p>Thanks again,
<br>
<p>Jim
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: George Bosilca [mailto:bosilca_at_[hidden]] 
<br>
Sent: Tuesday, February 07, 2012 2:10 PM
<br>
To: james.torossian_at_[hidden]; Open MPI Users
<br>
Subject: Re: [OMPI users] O-MPI Support for Windows 7
<br>
<p>&nbsp;
<br>
<p>James,
<br>
<p>&nbsp;
<br>
<p>There is no mention about username or password in OMPI. I guess one of the
<br>
applications used in the process, either the ssh or the ipconfig.exe is
<br>
missing the current context to be executed without a higher level of
<br>
credentials.
<br>
<p>&nbsp;
<br>
<p>Can you execute ipconfig.exe once connected through ssh without having to
<br>
provide the username and password? If yes, can you execute hostname through
<br>
mpirun instead of ipconfig.exe?
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Feb 6, 2012, at 19:05 , James Torossian wrote:
<br>
<p><p><p><p><p>Hi all,
<br>
<p>I am trying to setup Open-MPI across two Windows 7 machines with UAC
<br>
disabled ..
<br>
<p>&nbsp;
<br>
<p>Cygwin with OpenSSH is installed, and I can successfully ssh to each machine
<br>
without entry of username and password:
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ ssh NanoOneQuad
<br>
<p>Last login: Tue Feb  7 01:42:02 2012 from jimt-pc
<br>
<p>&nbsp;
<br>
<p>JimT_at_NanoOneQuad ~
<br>
<p>$
<br>
<p>&nbsp;
<br>
<p>Regardless of this, mpirun insists on asking for a username and password;
<br>
then asks to save credentials, but if selected, responds with not
<br>
implemented. If saving credentials is not selected, then I can see that the
<br>
task starts on the other machine (in task manager) and that the task runs to
<br>
completion OK:
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ mpirun -H NanoOneQuad ipconfig.exe
<br>
<p>connecting to NanoOneQuad
<br>
<p>username:JimT
<br>
<p>password:**************
<br>
<p>Save Credential?(Y/N) y
<br>
<p>[JimT-PC:03784] This feature hasn't been implemented yet.
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$ mpirun -H NanoOneQuad ipconfig.exe
<br>
<p>connecting to NanoOneQuad
<br>
<p>username:JimT
<br>
<p>password:**************
<br>
<p>Save Credential?(Y/N) n
<br>
<p>&nbsp;
<br>
<p>JimT_at_JimT-PC ~
<br>
<p>$
<br>
<p>&nbsp;
<br>
<p>Please let me know what I have missed. I have gone through the FAQs and have
<br>
rebuilt the windows version but can't seem to get past this.
<br>
<p>&nbsp;
<br>
<p>Thanks and best regards,
<br>
<p>Jim
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
