<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 08:37:24 2012" -->
<!-- isoreceived="20120207133724" -->
<!-- sent="Tue, 07 Feb 2012 14:37:15 +0100" -->
<!-- isosent="20120207133715" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="4F31290B.3010703_at_hlrs.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="88825843-FB10-4E92-9397-812F4EE88B08_at_eecs.utk.edu" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 08:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18416.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18416.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid &quot;--mca plm rsh&quot; is not going to work. James is using a 
<br>
Windows build, which doesn't have the rsh plm module.
<br>
<p>There are only two plm modules for windows:
<br>
MCA plm: process (MCA ...
<br>
MCA plm: ccp (MCA ...
<br>
<p>I think the binaries built by James contains only the process module, 
<br>
which is internaly using WMI. So there is no way to switch to ssh or 
<br>
rsh, because they are not built.
<br>
<p>To use ssh, one has to build Open MPI source under Cygwin, using the 
<br>
auto-tools chain (the same as on Linux). Unfortunately, the CMake 
<br>
support in OMPI was only for the native windows build, it won't work 
<br>
under Cygwin.
<br>
<p>On 2012-02-07 1:51 PM, George Bosilca wrote:
<br>
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
<span class="quotelev1">&gt; If not, go in the installation directory and rename 
</span><br>
<span class="quotelev1">&gt; lib/openmpi/mca_plm_rsh.* to something without the .la and .so 
</span><br>
<span class="quotelev1">&gt; extension. Then re-run the hostname via mpirun.
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
<span class="quotelev2">&gt;&gt; Hi Shiqing,
</span><br>
<span class="quotelev2">&gt;&gt; I agree. I think that I am somehow using WMI, but this is happening 
</span><br>
<span class="quotelev2">&gt;&gt; both with the Open-MPI windows binary (OpenMPI_v1.5.4-1_win32.exe) 
</span><br>
<span class="quotelev2">&gt;&gt; and also with versions of the binaries I built (1.4.3 &amp; 1.5.1 from svn).
</span><br>
<span class="quotelev2">&gt;&gt; What do I have to do to get OpenMPI to use ssh instead of WMI. From 
</span><br>
<span class="quotelev2">&gt;&gt; what I can see of the configuration with ompi_info, the following 
</span><br>
<span class="quotelev2">&gt;&gt; seems correct:
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info -all
</span><br>
<span class="quotelev2">&gt;&gt; Package: Open MPI hpcfan_at_VISCLUSTER26 Distribution
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt; OPAL: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; OPAL SVN revision: r25060
</span><br>
<span class="quotelev2">&gt;&gt; OPAL release date: Aug 18, 2011
</span><br>
<span class="quotelev2">&gt;&gt; Ident string: 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; &#133;.
</span><br>
<span class="quotelev2">&gt;&gt; MCA orte: parameter &quot;orte_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, &#133;.
</span><br>
<span class="quotelev2">&gt;&gt; &#133;.
</span><br>
<span class="quotelev2">&gt;&gt; MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &lt;ssh : rsh&gt;, &#133;.
</span><br>
<span class="quotelev2">&gt;&gt; &#133;.
</span><br>
<span class="quotelev2">&gt;&gt; Is there a cmake configuration option I need to set for a Windows 
</span><br>
<span class="quotelev2">&gt;&gt; build to use ssh? Is there some environment or package configuration 
</span><br>
<span class="quotelev2">&gt;&gt; option I need to set?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again for your help, I am keen to know what I am missing.
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:*Tuesday, February 07, 2012 8:20 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:*Open MPI Users; james.torossian_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:james.torossian_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Cc:*Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:*Re: [OMPI users] O-MPI Support for Windows 7
</span><br>
<span class="quotelev2">&gt;&gt; Hi James,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One other possibility could be that ssh is actually not used at all. 
</span><br>
<span class="quotelev2">&gt;&gt; Did you build Open MPI under Cygwin? Is the ssh module shown up in 
</span><br>
<span class="quotelev2">&gt;&gt; the ompi_info output?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The user credential message looks very familiar to me as it seems 
</span><br>
<span class="quotelev2">&gt;&gt; from the WMI (Windows Management Instrumentation) module, where the 
</span><br>
<span class="quotelev2">&gt;&gt; 'save credential' option has not been implemented.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2012-02-07 4:11 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Afraid I'm no OpenSSH expert, but it sounds like there is an issue 
</span><br>
<span class="quotelev2">&gt;&gt; with its configuration. Check out the OpenSSH config options to see 
</span><br>
<span class="quotelev2">&gt;&gt; if something fits.
</span><br>
<span class="quotelev2">&gt;&gt; I did a quick search and found this, as an example:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mah.everybody.org/docs/ssh">http://mah.everybody.org/docs/ssh</a>
</span><br>
<span class="quotelev2">&gt;&gt; Note the need to run ssh-agent to cache login credentials.
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2012, at 5:05 PM, James Torossian wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to setup Open-MPI across two Windows 7 machines with UAC 
</span><br>
<span class="quotelev2">&gt;&gt; disabled &#133;&#133;
</span><br>
<span class="quotelev2">&gt;&gt; Cygwin with OpenSSH is installed, and I can successfully ssh to each 
</span><br>
<span class="quotelev2">&gt;&gt; machine without entry of username and password:
</span><br>
<span class="quotelev2">&gt;&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev2">&gt;&gt; $ ssh NanoOneQuad
</span><br>
<span class="quotelev2">&gt;&gt; Last login: Tue Feb  7 01:42:02 2012 from jimt-pc
</span><br>
<span class="quotelev2">&gt;&gt; JimT_at_NanoOneQuad ~
</span><br>
<span class="quotelev2">&gt;&gt; $
</span><br>
<span class="quotelev2">&gt;&gt; Regardless of this, mpirun insists on asking for a username and 
</span><br>
<span class="quotelev2">&gt;&gt; password; then asks to save credentials, but if selected, responds 
</span><br>
<span class="quotelev2">&gt;&gt; with not implemented. If saving credentials is not selected, then I 
</span><br>
<span class="quotelev2">&gt;&gt; can see that the task starts on the other machine (in task manager) 
</span><br>
<span class="quotelev2">&gt;&gt; and that the task runs to completion OK:
</span><br>
<span class="quotelev2">&gt;&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -H NanoOneQuad ipconfig.exe
</span><br>
<span class="quotelev2">&gt;&gt; connecting to NanoOneQuad
</span><br>
<span class="quotelev2">&gt;&gt; username:JimT
</span><br>
<span class="quotelev2">&gt;&gt; password:**************
</span><br>
<span class="quotelev2">&gt;&gt; Save Credential?(Y/N) y
</span><br>
<span class="quotelev2">&gt;&gt; [JimT-PC:03784] This feature hasn't been implemented yet.
</span><br>
<span class="quotelev2">&gt;&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -H NanoOneQuad ipconfig.exe
</span><br>
<span class="quotelev2">&gt;&gt; connecting to NanoOneQuad
</span><br>
<span class="quotelev2">&gt;&gt; username:JimT
</span><br>
<span class="quotelev2">&gt;&gt; password:**************
</span><br>
<span class="quotelev2">&gt;&gt; Save Credential?(Y/N) n
</span><br>
<span class="quotelev2">&gt;&gt; JimT_at_JimT-PC ~
</span><br>
<span class="quotelev2">&gt;&gt; $
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know what I have missed. I have gone through the FAQs 
</span><br>
<span class="quotelev2">&gt;&gt; and have rebuilt the windows version but can&#146;t seem to get past this.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18417/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18416.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18416.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18418.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
