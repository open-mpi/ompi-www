<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 22:11:18 2012" -->
<!-- isoreceived="20120207031118" -->
<!-- sent="Mon, 6 Feb 2012 20:11:08 -0700" -->
<!-- isosent="20120207031108" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="CF6CF10C-6067-42AE-9CD7-52CB7E2E48B7_at_openmpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4f306af2.0186e50a.6b28.ffff8a33SMTPIN_ADDED_at_mx.google.com" -->
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
<strong>Date:</strong> 2012-02-06 22:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18414.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I'm no OpenSSH expert, but it sounds like there is an issue with its configuration. Check out the OpenSSH config options to see if something fits.
<br>
<p>I did a quick search and found this, as an example:
<br>
<p><a href="http://mah.everybody.org/docs/ssh">http://mah.everybody.org/docs/ssh</a>
<br>
<p>Note the need to run ssh-agent to cache login credentials.
<br>
<p>On Feb 6, 2012, at 5:05 PM, James Torossian wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18410.php">George Bosilca: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Maybe in reply to:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18413.php">Shiqing Fan: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18414.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
