<?
$subject_val = "Re: [OMPI users] mpirun with WMI on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 11:40:26 2010" -->
<!-- isoreceived="20100202164026" -->
<!-- sent="Tue, 02 Feb 2010 10:40:13 -0600" -->
<!-- isosent="20100202164013" -->
<!-- name="Charles Shuller" -->
<!-- email="charles.shuller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun with WMI on Windows 7" -->
<!-- id="4B68556D.3020904_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B62A2D1.9050301_at_hlrs.de" -->
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
<strong>From:</strong> Charles Shuller (<em>charles.shuller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 11:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11964.php">Lee Manko: "[OMPI users] Cluster Communications Issues"</a>
<li><strong>Previous message:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11930.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11966.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="11966.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Shiqing!
<br>
<p>Unfortunately, it still doesn't work, but I've got more info.
<br>
<p>I can use wmic to start an application on the remote machine, but that
<br>
application does not start in the current login process (notepad.exe
<br>
starts, but I have to ask task manager to show all processes to find it,
<br>
even though I'm currently logged in as the same user).  I believe this
<br>
is expected behavior, please let me know if it's not.
<br>
<p>When using mpirun, I can verify that orted starts on the remote machine,
<br>
but the crash or hang appears to happen before the application starts
<br>
execution.   Oddly, orted does not appear to start on the local
<br>
machine.  Logs all refer to mpirun crashing.
<br>
<p><p>Cheers!
<br>
<p>Charles
<br>
<p>On 1/29/2010 2:56 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi Charles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You don't need to install anything, but just a few security setting
</span><br>
<span class="quotelev1">&gt; has to be correctly configured. Here are two links might be helpful
</span><br>
<span class="quotelev1">&gt; (will be added into README.WINDOWS too):
</span><br>
<span class="quotelev1">&gt; <a href="http://msdn.microsoft.com/en-us/library/aa393266(VS.85">http://msdn.microsoft.com/en-us/library/aa393266(VS.85</a>).aspx
</span><br>
<span class="quotelev1">&gt; <a href="http://community.spiceworks.com/topic/578">http://community.spiceworks.com/topic/578</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, in order to check if WMI is working between the
</span><br>
<span class="quotelev1">&gt; nodes, you can try with command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     C:\&gt;wmic /node:192.168.0.1 /user:username process call create
</span><br>
<span class="quotelev1">&gt; notepad.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the ip has to be the remote computer ip address, and the user name is
</span><br>
<span class="quotelev1">&gt; which you use on remote computer. This command line will simply launch
</span><br>
<span class="quotelev1">&gt; a non-interactive notepad (no GUI) on remote node using WMI, if it is
</span><br>
<span class="quotelev1">&gt; successful, you should be able to see a notepad process in Task
</span><br>
<span class="quotelev1">&gt; Manager or Process Viewer, and that also means mpirun will work
</span><br>
<span class="quotelev1">&gt; through WMI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you check with the above command, and possibly tell me the
</span><br>
<span class="quotelev1">&gt; return value, so that I can help you to make it work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles Shuller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When attempting to launch an application on both local and remote
</span><br>
<span class="quotelev2">&gt;&gt; windows7 hosts, mpirun either hangs indefinately or abends.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The application executes correctly on both machines, when only launched
</span><br>
<span class="quotelev2">&gt;&gt; on a single host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe mpirun is using WMI, README.WINDOWS indicates that this is the
</span><br>
<span class="quotelev2">&gt;&gt; case if I don't have the CCP toolkit and SDK installed, which I
</span><br>
<span class="quotelev2">&gt;&gt; don't.  Additionally, I have encountered and resolved some security
</span><br>
<span class="quotelev2">&gt;&gt; issues
</span><br>
<span class="quotelev2">&gt;&gt; following this assumption.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advice is welcome.  I'm not married to WMI, so if the solution is
</span><br>
<span class="quotelev2">&gt;&gt; &quot;install something else&quot; I'm great with that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Charles
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11963/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11963/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11964.php">Lee Manko: "[OMPI users] Cluster Communications Issues"</a>
<li><strong>Previous message:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11930.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11966.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Reply:</strong> <a href="11966.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
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
