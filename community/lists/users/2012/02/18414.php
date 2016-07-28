<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 06:17:21 2012" -->
<!-- isoreceived="20120207111721" -->
<!-- sent="Tue, 7 Feb 2012 22:17:11 +1100" -->
<!-- isosent="20120207111711" -->
<!-- name="James Torossian" -->
<!-- email="j.torossian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="005001cce58a$0afbbf60$20f33e20$_at_torossian@essetek.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CF6CF10C-6067-42AE-9CD7-52CB7E2E48B7_at_openmpi.org" -->
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
<strong>Date:</strong> 2012-02-07 06:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18415.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>&nbsp;
<br>
<p>Thanks for your quick response. I am using ssh without a passphrase, so
<br>
there was no need to start ssh-agent (ssh works as you can see from the
<br>
email I sent to George a little while ago . cc'd to users).
<br>
<p>&nbsp;
<br>
<p>Anyway, I installed ssh-agent as you suggested in case ompi/orte accessed
<br>
it, but it made no difference.
<br>
<p>&nbsp;
<br>
<p>Please let me know if you have any other thoughts.
<br>
<p>&nbsp;
<br>
<p>Cheers,
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
<p>From: Ralph Castain [mailto:rhc.openmpi_at_[hidden]] On Behalf Of Ralph
<br>
Castain
<br>
Sent: Tuesday, February 07, 2012 2:11 PM
<br>
To: james.torossian_at_[hidden]; Open MPI Users
<br>
Subject: Re: [OMPI users] O-MPI Support for Windows 7
<br>
<p>&nbsp;
<br>
<p>Afraid I'm no OpenSSH expert, but it sounds like there is an issue with its
<br>
configuration. Check out the OpenSSH config options to see if something
<br>
fits.
<br>
<p>&nbsp;
<br>
<p>I did a quick search and found this, as an example:
<br>
<p>&nbsp;
<br>
<p><a href="http://mah.everybody.org/docs/ssh">http://mah.everybody.org/docs/ssh</a>
<br>
<p>&nbsp;
<br>
<p>Note the need to run ssh-agent to cache login credentials.
<br>
<p>&nbsp;
<br>
<p>On Feb 6, 2012, at 5:05 PM, James Torossian wrote:
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18415.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18420.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
