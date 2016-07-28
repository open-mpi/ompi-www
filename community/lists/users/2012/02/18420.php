<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 18:43:28 2012" -->
<!-- isoreceived="20120207234328" -->
<!-- sent="Tue, 7 Feb 2012 16:43:18 -0700" -->
<!-- isosent="20120207234318" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="7EFE7EA2-3867-4CBE-BCCC-146B029DDD1E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4f313fbe.09a3e50a.5a26.448aSMTPIN_ADDED_at_mx.google.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 18:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18419.php">Abhinav Sarje: "[OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Maybe in reply to:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been a long time since I played with Cygwin, so take this with a grain of salt. However, why don't you just use autotools in Cygwin and build OMPI ala Linux, as outlined by Shiqing? I used to do that and run under ssh - IIRC, it worked fine.
<br>
<p>My memory may be faulty, though - still, might be worth a try. I seem to recall you had to be running Cygwin on the remote machines as well, so maybe that isn't acceptable?
<br>
<p><p>On Feb 7, 2012, at 8:11 AM, James Torossian wrote:
<br>
<p><span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks again for your quick reply (and George also for the previous reply),
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I take it that the Windows 32 bit executable on the Open-MPI download site is also built with cmake and suffers the same limitation? Was this intended?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Has anyone built a Windows 32 bit executable which supports ssh? If so, was this under Linux or Cygwin? (and how is this achieved?)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Shiqing Fan
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, February 08, 2012 12:37 AM
</span><br>
<span class="quotelev1">&gt; To: George Bosilca
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users; james.torossian_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] O-MPI Support for Windows 7
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid &quot;--mca plm rsh&quot; is not going to work. James is using a Windows build, which doesn't have the rsh plm module. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are only two plm modules for windows:
</span><br>
<span class="quotelev1">&gt; MCA plm: process (MCA ...
</span><br>
<span class="quotelev1">&gt; MCA plm: ccp (MCA ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the binaries built by James contains only the process module, which is internaly using WMI. So there is no way to switch to ssh or rsh, because they are not built.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To use ssh, one has to build Open MPI source under Cygwin, using the auto-tools chain (the same as on Linux). Unfortunately, the CMake support in OMPI was only for the native windows build, it won't work under Cygwin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2012-02-07 1:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; Let's try to force the usage of ssh.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; First try:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun --mca plm rsh hostname
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If not, go in the installation directory and rename lib/openmpi/mca_plm_rsh.* to something without the .la and .so extension. Then re-run the hostname via mpirun.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2012, at 06:32 , James Torossian wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I agree. I think that I am somehow using WMI, but this is happening both with the Open-MPI windows binary (OpenMPI_v1.5.4-1_win32.exe) and also with versions of the binaries I built (1.4.3 &amp; 1.5.1 from svn).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What do I have to do to get OpenMPI to use ssh instead of WMI. From what I can see of the configuration with ompi_info, the following seems correct:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ ompi_info -all
</span><br>
<span class="quotelev1">&gt; Package: Open MPI hpcfan_at_VISCLUSTER26 Distribution
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.5.4
</span><br>
<span class="quotelev1">&gt; Open MPI SVN revision: r25060
</span><br>
<span class="quotelev1">&gt; Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt; Open RTE: 1.5.4
</span><br>
<span class="quotelev1">&gt; Open RTE SVN revision: r25060
</span><br>
<span class="quotelev1">&gt; Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt; OPAL: 1.5.4
</span><br>
<span class="quotelev1">&gt; OPAL SVN revision: r25060
</span><br>
<span class="quotelev1">&gt; OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev1">&gt; Ident string: 1.5.4
</span><br>
<span class="quotelev1">&gt; &#133;.
</span><br>
<span class="quotelev1">&gt; MCA orte: parameter &quot;orte_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, &#133;.
</span><br>
<span class="quotelev1">&gt; &#133;.
</span><br>
<span class="quotelev1">&gt; MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, &#133;.
</span><br>
<span class="quotelev1">&gt; &#133;.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a cmake configuration option I need to set for a Windows build to use ssh? Is there some environment or package configuration option I need to set?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks again for your help, I am keen to know what I am missing.
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 07, 2012 8:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users; james.torossian_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Ralph Castain
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] O-MPI Support for Windows 7
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi James,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One other possibility could be that ssh is actually not used at all. Did you build Open MPI under Cygwin? Is the ssh module shown up in the ompi_info output?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The user credential message looks very familiar to me as it seems from the WMI (Windows Management Instrumentation) module, where the 'save credential' option has not been implemented.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2012-02-07 4:11 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; Afraid I'm no OpenSSH expert, but it sounds like there is an issue with its configuration. Check out the OpenSSH config options to see if something fits.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I did a quick search and found this, as an example:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; <a href="http://mah.everybody.org/docs/ssh">http://mah.everybody.org/docs/ssh</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Note the need to run ssh-agent to cache login credentials.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2012, at 5:05 PM, James Torossian wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I am trying to setup Open-MPI across two Windows 7 machines with UAC disabled &#133;&#133;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Cygwin with OpenSSH is installed, and I can successfully ssh to each machine without entry of username and password:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev1">&gt; $ ssh NanoOneQuad
</span><br>
<span class="quotelev1">&gt; Last login: Tue Feb  7 01:42:02 2012 from jimt-pc
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; JimT_at_NanoOneQuad ~
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regardless of this, mpirun insists on asking for a username and password; then asks to save credentials, but if selected, responds with not implemented. If saving credentials is not selected, then I can see that the task starts on the other machine (in task manager) and that the task runs to completion OK:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev1">&gt; $ mpirun -H NanoOneQuad ipconfig.exe
</span><br>
<span class="quotelev1">&gt; connecting to NanoOneQuad
</span><br>
<span class="quotelev1">&gt; username:JimT
</span><br>
<span class="quotelev1">&gt; password:**************
</span><br>
<span class="quotelev1">&gt; Save Credential?(Y/N) y
</span><br>
<span class="quotelev1">&gt; [JimT-PC:03784] This feature hasn't been implemented yet.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev1">&gt; $ mpirun -H NanoOneQuad ipconfig.exe
</span><br>
<span class="quotelev1">&gt; connecting to NanoOneQuad
</span><br>
<span class="quotelev1">&gt; username:JimT
</span><br>
<span class="quotelev1">&gt; password:**************
</span><br>
<span class="quotelev1">&gt; Save Credential?(Y/N) n
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please let me know what I have missed. I have gone through the FAQs and have rebuilt the windows version but can&#146;t seem to get past this.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks and best regards,
</span><br>
<span class="quotelev1">&gt; Jim
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email: fan_at_[hidden]
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18420/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18421.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18419.php">Abhinav Sarje: "[OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Maybe in reply to:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
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
