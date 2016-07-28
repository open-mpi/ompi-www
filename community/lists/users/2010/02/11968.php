<?
$subject_val = "Re: [OMPI users] mpirun with WMI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 12:46:03 2010" -->
<!-- isoreceived="20100202174603" -->
<!-- sent="Tue, 02 Feb 2010 18:46:02 +0100" -->
<!-- isosent="20100202174602" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun with WMI on Windows 7" -->
<!-- id="4B6864DA.7090406_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B68615A.3010704_at_gmail.com" -->
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
<strong>Date:</strong> 2010-02-02 12:46:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11969.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11969.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="11969.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charles,
<br>
<p>It seems not a WMI problem, because the remote orted has already been 
<br>
launched, and only that part was done by WMI.
<br>
<p>What connection do you have between the nodes, tcp? Could you provide 
<br>
the version information of Open MPI, or just the output of ompi_info? so 
<br>
that I can take a close look.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p>Charles Shuller wrote:
<br>
<span class="quotelev1">&gt; No messages on the command prompt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I executed mpirun to launch notepad on the remote machine, It
</span><br>
<span class="quotelev1">&gt; crashes again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No information is ever printed to the command line unless I enter a bad
</span><br>
<span class="quotelev1">&gt; password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The very first time I attempt to use mpirun to launch a process on the
</span><br>
<span class="quotelev1">&gt; remote machine, I get an indefinite hang (I let it run for several hours
</span><br>
<span class="quotelev1">&gt; yesterday).   Subsequently I get an abend dialog in about 3 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My MPI application (Which just calls init and finalize)  is at C:\bin
</span><br>
<span class="quotelev1">&gt; which is in the system path on both machines, this is also the bin
</span><br>
<span class="quotelev1">&gt; directory for the openmpi package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anyway I can turn on logging, or do I need to go through and
</span><br>
<span class="quotelev1">&gt; insert debug statements myself and recompile?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/2/2010 11:17 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Charles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the local machine, which can be considered also as the &quot;head node&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; no orted will be launched, the mpirun itself works as it locally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you see any error message on the command prompt? That would be
</span><br>
<span class="quotelev2">&gt;&gt; very helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To do a simple test, just try to launch notepad on remote node: mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -np 1 -host host1 notepad.exe ,  and this will do the same thing as
</span><br>
<span class="quotelev2">&gt;&gt; you run the wmic command line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If that works, it might mean that, you didn't copy your MPI
</span><br>
<span class="quotelev2">&gt;&gt; application onto the remote node, which should present in the same
</span><br>
<span class="quotelev2">&gt;&gt; path as on all working nodes, for example, on working nodes, your
</span><br>
<span class="quotelev2">&gt;&gt; application could be placed at: D:\tests\app\app.exe (You have to do
</span><br>
<span class="quotelev2">&gt;&gt; so, because the wmi impersonate level doesn't support network share
</span><br>
<span class="quotelev2">&gt;&gt; yet. I'm still hacking on this to break the limit.). And then you can
</span><br>
<span class="quotelev2">&gt;&gt; run the mpirun command line supplied with the application full path or
</span><br>
<span class="quotelev2">&gt;&gt; directly run it under the application path.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Charles Shuller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Shiqing!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, it still doesn't work, but I've got more info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can use wmic to start an application on the remote machine, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that application does not start in the current login process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (notepad.exe starts, but I have to ask task manager to show all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes to find it, even though I'm currently logged in as the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user).  I believe this is expected behavior, please let me know if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When using mpirun, I can verify that orted starts on the remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine, but the crash or hang appears to happen before the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application starts execution.   Oddly, orted does not appear to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the local machine.  Logs all refer to mpirun crashing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Charles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/29/2010 2:56 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Charles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You don't need to install anything, but just a few security setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has to be correctly configured. Here are two links might be helpful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (will be added into README.WINDOWS too):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://community.spiceworks.com/topic/578">http://community.spiceworks.com/topic/578</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the other hand, in order to check if WMI is working between the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes, you can try with command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     C:\&gt;wmic /node:192.168.0.1 /user:username process call create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; notepad.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the ip has to be the remote computer ip address, and the user name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is which you use on remote computer. This command line will simply
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch a non-interactive notepad (no GUI) on remote node using WMI,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if it is successful, you should be able to see a notepad process in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Task Manager or Process Viewer, and that also means mpirun will work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through WMI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you check with the above command, and possibly tell me the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; return value, so that I can help you to make it work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Shiqing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Charles Shuller wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When attempting to launch an application on both local and remote
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; windows7 hosts, mpirun either hangs indefinately or abends.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The application executes correctly on both machines, when only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; launched
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on a single host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I believe mpirun is using WMI, README.WINDOWS indicates that this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case if I don't have the CCP toolkit and SDK installed, which I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't.  Additionally, I have encountered and resolved some security
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; issues
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; following this assumption.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any advice is welcome.  I'm not married to WMI, so if the solution is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;install something else&quot; I'm great with that.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Charles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11969.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11967.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11969.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="11969.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
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
