<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 04:19:42 2012" -->
<!-- isoreceived="20120207091942" -->
<!-- sent="Tue, 07 Feb 2012 10:19:35 +0100" -->
<!-- isosent="20120207091935" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="4F30ECA7.1050009_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 04:19:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18414.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18415.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18415.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi James,
<br>
<p>One other possibility could be that ssh is actually not used at all. Did 
<br>
you build Open MPI under Cygwin? Is the ssh module shown up in the 
<br>
ompi_info output?
<br>
<p>The user credential message looks very familiar to me as it seems from 
<br>
the WMI (Windows Management Instrumentation) module, where the 'save 
<br>
credential' option has not been implemented.
<br>
<p>Shiqing
<br>
<p>On 2012-02-07 4:11 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Afraid I'm no OpenSSH expert, but it sounds like there is an issue 
</span><br>
<span class="quotelev1">&gt; with its configuration. Check out the OpenSSH config options to see if 
</span><br>
<span class="quotelev1">&gt; something fits.
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
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to setup Open-MPI across two Windows 7 machines with UAC 
</span><br>
<span class="quotelev2">&gt;&gt; disabled ......
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
<span class="quotelev2">&gt;&gt; and have rebuilt the windows version but can't seem to get past this.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18414.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>In reply to:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18415.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18415.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
