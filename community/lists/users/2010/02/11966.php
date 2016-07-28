<?
$subject_val = "Re: [OMPI users] mpirun with WMI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 12:17:10 2010" -->
<!-- isoreceived="20100202171710" -->
<!-- sent="Tue, 02 Feb 2010 18:17:09 +0100" -->
<!-- isosent="20100202171709" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun with WMI on Windows 7" -->
<!-- id="4B685E15.5000506_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B68556D.3020904_at_gmail.com" -->
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
<strong>Date:</strong> 2010-02-02 12:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11965.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charles,
<br>
<p>On the local machine, which can be considered also as the &quot;head node&quot;, 
<br>
no orted will be launched, the mpirun itself works as it locally.
<br>
<p>Did you see any error message on the command prompt? That would be very 
<br>
helpful.
<br>
<p>To do a simple test, just try to launch notepad on remote node: mpirun 
<br>
-np 1 -host host1 notepad.exe ,  and this will do the same thing as you 
<br>
run the wmic command line.
<br>
<p>If that works, it might mean that, you didn't copy your MPI application 
<br>
onto the remote node, which should present in the same path as on all 
<br>
working nodes, for example, on working nodes, your application could be 
<br>
placed at: D:\tests\app\app.exe (You have to do so, because the wmi 
<br>
impersonate level doesn't support network share yet. I'm still hacking 
<br>
on this to break the limit.). And then you can run the mpirun command 
<br>
line supplied with the application full path or directly run it under 
<br>
the application path.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p>Charles Shuller wrote:
<br>
<span class="quotelev1">&gt; Thanks Shiqing!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, it still doesn't work, but I've got more info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can use wmic to start an application on the remote machine, but that 
</span><br>
<span class="quotelev1">&gt; application does not start in the current login process (notepad.exe 
</span><br>
<span class="quotelev1">&gt; starts, but I have to ask task manager to show all processes to find 
</span><br>
<span class="quotelev1">&gt; it, even though I'm currently logged in as the same user).  I believe 
</span><br>
<span class="quotelev1">&gt; this is expected behavior, please let me know if it's not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using mpirun, I can verify that orted starts on the remote 
</span><br>
<span class="quotelev1">&gt; machine, but the crash or hang appears to happen before the 
</span><br>
<span class="quotelev1">&gt; application starts execution.   Oddly, orted does not appear to start 
</span><br>
<span class="quotelev1">&gt; on the local machine.  Logs all refer to mpirun crashing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/29/2010 2:56 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Charles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You don't need to install anything, but just a few security setting 
</span><br>
<span class="quotelev2">&gt;&gt; has to be correctly configured. Here are two links might be helpful 
</span><br>
<span class="quotelev2">&gt;&gt; (will be added into README.WINDOWS too):
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://community.spiceworks.com/topic/578">http://community.spiceworks.com/topic/578</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, in order to check if WMI is working between the 
</span><br>
<span class="quotelev2">&gt;&gt; nodes, you can try with command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     C:\&gt;wmic /node:192.168.0.1 /user:username process call create 
</span><br>
<span class="quotelev2">&gt;&gt; notepad.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the ip has to be the remote computer ip address, and the user name is 
</span><br>
<span class="quotelev2">&gt;&gt; which you use on remote computer. This command line will simply 
</span><br>
<span class="quotelev2">&gt;&gt; launch a non-interactive notepad (no GUI) on remote node using WMI, 
</span><br>
<span class="quotelev2">&gt;&gt; if it is successful, you should be able to see a notepad process in 
</span><br>
<span class="quotelev2">&gt;&gt; Task Manager or Process Viewer, and that also means mpirun will work 
</span><br>
<span class="quotelev2">&gt;&gt; through WMI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you check with the above command, and possibly tell me the 
</span><br>
<span class="quotelev2">&gt;&gt; return value, so that I can help you to make it work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Charles Shuller wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When attempting to launch an application on both local and remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt; windows7 hosts, mpirun either hangs indefinately or abends.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The application executes correctly on both machines, when only launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a single host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe mpirun is using WMI, README.WINDOWS indicates that this is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case if I don't have the CCP toolkit and SDK installed, which I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't.  Additionally, I have encountered and resolved some security 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following this assumption.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any advice is welcome.  I'm not married to WMI, so if the solution is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;install something else&quot; I'm great with that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Charles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11965.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
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
