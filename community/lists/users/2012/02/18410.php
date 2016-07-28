<?
$subject_val = "Re: [OMPI users] O-MPI Support for Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 22:10:33 2012" -->
<!-- isoreceived="20120207031033" -->
<!-- sent="Mon, 6 Feb 2012 22:10:27 -0500" -->
<!-- isosent="20120207031027" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] O-MPI Support for Windows 7" -->
<!-- id="74CFC6F1-0F91-4B1F-8702-AA52BAF8A4F9_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="000301cce52c$38c26f10$aa474d30$_at_torossian@essetek.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 22:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18409.php">George Bosilca: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>In reply to:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
James,
<br>
<p>There is no mention about username or password in OMPI. I guess one of the applications used in the process, either the ssh or the ipconfig.exe is missing the current context to be executed without a higher level of credentials.
<br>
<p>Can you execute ipconfig.exe once connected through ssh without having to provide the username and password? If yes, can you execute hostname through mpirun instead of ipconfig.exe?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Feb 6, 2012, at 19:05 , James Torossian wrote:
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18411.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18409.php">George Bosilca: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>In reply to:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Reply:</strong> <a href="18412.php">James Torossian: "Re: [OMPI users] O-MPI Support for Windows 7"</a>
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
