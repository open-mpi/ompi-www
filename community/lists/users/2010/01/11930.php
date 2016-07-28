<?
$subject_val = "Re: [OMPI users] mpirun with WMI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 03:56:49 2010" -->
<!-- isoreceived="20100129085649" -->
<!-- sent="Fri, 29 Jan 2010 09:56:49 +0100" -->
<!-- isosent="20100129085649" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun with WMI on Windows 7" -->
<!-- id="4B62A2D1.9050301_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B6239C9.3040308_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun with WMI on Windows 7<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 03:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Previous message:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11920.php">Charles Shuller: "[OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charles,
<br>
<p>You don't need to install anything, but just a few security setting has 
<br>
to be correctly configured. Here are two links might be helpful (will be 
<br>
added into README.WINDOWS too):
<br>
<a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
<br>
<a href="http://community.spiceworks.com/topic/578">http://community.spiceworks.com/topic/578</a>
<br>
<p>On the other hand, in order to check if WMI is working between the 
<br>
nodes, you can try with command:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C:\&gt;wmic /node:192.168.0.1 /user:username process call create 
<br>
notepad.exe
<br>
<p>the ip has to be the remote computer ip address, and the user name is 
<br>
which you use on remote computer. This command line will simply launch a 
<br>
non-interactive notepad (no GUI) on remote node using WMI, if it is 
<br>
successful, you should be able to see a notepad process in Task Manager 
<br>
or Process Viewer, and that also means mpirun will work through WMI.
<br>
<p>Could you check with the above command, and possibly tell me the return 
<br>
value, so that I can help you to make it work.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>Charles Shuller wrote:
<br>
<span class="quotelev1">&gt; When attempting to launch an application on both local and remote
</span><br>
<span class="quotelev1">&gt; windows7 hosts, mpirun either hangs indefinately or abends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application executes correctly on both machines, when only launched
</span><br>
<span class="quotelev1">&gt; on a single host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe mpirun is using WMI, README.WINDOWS indicates that this is the
</span><br>
<span class="quotelev1">&gt; case if I don't have the CCP toolkit and SDK installed, which I don't.  
</span><br>
<span class="quotelev1">&gt; Additionally, I have encountered and resolved some security issues
</span><br>
<span class="quotelev1">&gt; following this assumption.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice is welcome.  I'm not married to WMI, so if the solution is
</span><br>
<span class="quotelev1">&gt; &quot;install something else&quot; I'm great with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles
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
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Previous message:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11920.php">Charles Shuller: "[OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
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
