<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 10:12:00 2012" -->
<!-- isoreceived="20120207151200" -->
<!-- sent="Wed, 8 Feb 2012 02:11:48 +1100" -->
<!-- isosent="20120207151148" -->
<!-- name="James Torossian" -->
<!-- email="j.torossian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="009101cce5aa$d1587ca0$740975e0$_at_torossian@essetek.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F31290B.3010703_at_hlrs.de" -->
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
<strong>Date:</strong> 2012-02-07 10:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18419.php">Abhinav Sarje: "[OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18417.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18417.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18414.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>&nbsp;
<br>
<p>Thanks again for your quick reply (and George also for the previous reply),
<br>
<p>&nbsp;
<br>
<p>I take it that the Windows 32 bit executable on the Open-MPI download site
<br>
is also built with cmake and suffers the same limitation? Was this intended?
<br>
<p>&nbsp;
<br>
<p>Has anyone built a Windows 32 bit executable which supports ssh? If so, was
<br>
this under Linux or Cygwin? (and how is this achieved?)
<br>
<p>&nbsp;
<br>
<p>Best regards,
<br>
<p>Jim
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Shiqing Fan
<br>
Sent: Wednesday, February 08, 2012 12:37 AM
<br>
To: George Bosilca
<br>
Cc: Open MPI Users; james.torossian_at_[hidden]
<br>
Subject: Re: [OMPI users] O-MPI Support for Windows 7
<br>
<p>&nbsp;
<br>
<p><p>I'm afraid &quot;--mca plm rsh&quot; is not going to work. James is using a Windows
<br>
build, which doesn't have the rsh plm module. 
<br>
<p>There are only two plm modules for windows:
<br>
MCA plm: process (MCA ...
<br>
MCA plm: ccp (MCA ...
<br>
<p>I think the binaries built by James contains only the process module, which
<br>
is internaly using WMI. So there is no way to switch to ssh or rsh, because
<br>
they are not built.
<br>
<p>To use ssh, one has to build Open MPI source under Cygwin, using the
<br>
auto-tools chain (the same as on Linux). Unfortunately, the CMake support in
<br>
OMPI was only for the native windows build, it won't work under Cygwin.
<br>
<p>On 2012-02-07 1:51 PM, George Bosilca wrote: 
<br>
<p>Let's try to force the usage of ssh. 
<br>
<p>&nbsp;
<br>
<p>First try:
<br>
<p>&nbsp;
<br>
<p>mpirun --mca plm rsh hostname
<br>
<p>&nbsp;
<br>
<p>If not, go in the installation directory and rename
<br>
lib/openmpi/mca_plm_rsh.* to something without the .la and .so extension.
<br>
Then re-run the hostname via mpirun.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>&nbsp;
<br>
<p>On Feb 7, 2012, at 06:32 , James Torossian wrote:
<br>
<p><p><p><p><p>Hi Shiqing,
<br>
<p>&nbsp;
<br>
<p>I agree. I think that I am somehow using WMI, but this is happening both
<br>
with the Open-MPI windows binary (OpenMPI_v1.5.4-1_win32.exe) and also with
<br>
versions of the binaries I built (1.4.3 &amp; 1.5.1 from svn).
<br>
<p>&nbsp;
<br>
<p>What do I have to do to get OpenMPI to use ssh instead of WMI. From what I
<br>
can see of the configuration with ompi_info, the following seems correct:
<br>
<p>&nbsp;
<br>
<p>$ ompi_info -all
<br>
<p>Package: Open MPI hpcfan_at_VISCLUSTER26 Distribution
<br>
<p>Open MPI: 1.5.4
<br>
<p>Open MPI SVN revision: r25060
<br>
<p>Open MPI release date: Aug 18, 2011
<br>
<p>Open RTE: 1.5.4
<br>
<p>Open RTE SVN revision: r25060
<br>
<p>Open RTE release date: Aug 18, 2011
<br>
<p>OPAL: 1.5.4
<br>
<p>OPAL SVN revision: r25060
<br>
<p>OPAL release date: Aug 18, 2011
<br>
<p>Ident string: 1.5.4
<br>
<p>..
<br>
<p>MCA orte: parameter &quot;orte_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, ..
<br>
<p>..
<br>
<p>MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, ..
<br>
<p>..
<br>
<p>&nbsp;
<br>
<p>Is there a cmake configuration option I need to set for a Windows build to
<br>
use ssh? Is there some environment or package configuration option I need to
<br>
set?
<br>
<p>&nbsp;
<br>
<p>Thanks again for your help, I am keen to know what I am missing.
<br>
<p>Best regards,
<br>
<p>Jim
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Tuesday, February 07, 2012 8:20 PM
<br>
To: Open MPI Users; james.torossian_at_[hidden]
<br>
Cc: Ralph Castain
<br>
Subject: Re: [OMPI users] O-MPI Support for Windows 7
<br>
<p>&nbsp;
<br>
<p>Hi James,
<br>
<p>One other possibility could be that ssh is actually not used at all. Did you
<br>
build Open MPI under Cygwin? Is the ssh module shown up in the ompi_info
<br>
output?
<br>
<p>The user credential message looks very familiar to me as it seems from the
<br>
WMI (Windows Management Instrumentation) module, where the 'save credential'
<br>
option has not been implemented.
<br>
<p>Shiqing
<br>
<p>On 2012-02-07 4:11 AM, Ralph Castain wrote:
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
<p><p><p><p><p><p>Hi all,
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
<p><p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18419.php">Abhinav Sarje: "[OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18417.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18417.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18414.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
