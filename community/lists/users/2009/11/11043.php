<?
$subject_val = "Re: [OMPI users] Runtime error while running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 07:43:44 2009" -->
<!-- isoreceived="20091102124344" -->
<!-- sent="Mon, 02 Nov 2009 13:43:35 +0100" -->
<!-- isosent="20091102124335" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error while running mpirun" -->
<!-- id="4AEED3F7.9060501_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23DA2F26196D9B4DB6F773D07E76756E13C687_at_BLR-EC-MBX05.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime error while running mpirun<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 07:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11042.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11039.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Reply:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Reply:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Basant,
<br>
<p><p>The mca_paffinity_windowsd.dll is the debug version of 
<br>
mca_paffinity_windows.dll, but orterun.exe should know which one it can 
<br>
use when you build it.
<br>
<p>Because you were building Open MPI with libtool support, probably the 
<br>
problem could be that libtool is not loaded correctly. Could you check 
<br>
that libtool bin directory is in the PATH environment variable? If Open 
<br>
MPI can't find correct libtool library to call, it can't load any mca 
<br>
libraries for sure.
<br>
<p>Hope this will be helpful for you.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p><p>basant.lakhotiya_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I complied OMPI again, Its creating mca_paffinity_windows and 
</span><br>
<span class="quotelev1">&gt; mca_paffinity_windowsd.dll.
</span><br>
<span class="quotelev1">&gt; And also I have checked the dependency of both dll through &quot;VS2005 
</span><br>
<span class="quotelev1">&gt; Depends&quot;. Its not showing any missing dependency for these dlls.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; While running orterun.exe its giving the same error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Basant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Basant [mailto:basant.lakhotiya_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Mon 11/2/2009 12:14 PM
</span><br>
<span class="quotelev1">&gt; *To:* 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; *Subject:* RE: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its not creating mca_paffinity_windows.dll but there is a file
</span><br>
<span class="quotelev1">&gt; mca_paffinity_windowsd.dll.
</span><br>
<span class="quotelev1">&gt; Can you have any idea why it is not creating mca_paffinity_windows's dll.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Basant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Terry Dontje
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 30, 2009 11:05 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Basant,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not familiar with Windows builds of Open MPI.  However, can you 
</span><br>
<span class="quotelev1">&gt; see if
</span><br>
<span class="quotelev1">&gt; you Open MPI build actually created a mca_paffinity_window's dll?  I could
</span><br>
<span class="quotelev1">&gt; imagine the issue might be that the dll is not finding a needed 
</span><br>
<span class="quotelev1">&gt; dependency.
</span><br>
<span class="quotelev1">&gt; Under Windows is there a command similar to Unix's ldd command you can run
</span><br>
<span class="quotelev1">&gt; on the dll (if it exists)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *Subject:* [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev2">&gt; &gt; *From:* /basant.lakhotiya_at_[hidden]/
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mailto:basant.lakhotiya_at_%5Bhidden%5D?Subject=Re:%20%5BOMPI%20users
</span><br>
<span class="quotelev2">&gt; &gt; %5D%20Runtime%20error%20while%20running%20mpirun&gt;
</span><br>
<span class="quotelev2">&gt; &gt; *Date:* 2009-10-30 10:09:20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I compiled OpenMPI in windows server 2003 through Cygwin and also
</span><br>
<span class="quotelev2">&gt; &gt; through CMake and Visual Studio. In both the method I successfully
</span><br>
<span class="quotelev2">&gt; &gt; complied in cygwin I configured with following command
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./configure
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mca-no-build=timer-windows,memory_mallopt,maffinity,paffinity
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; without these flags I was getting error.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I got same error while running mpirun.exe/orterun.exe.
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone help me to rectify these errors.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; C:\openmpi_sln\debug&gt;orterun.exe -np 2 ipconfig [8puq2akbo:07476] mca:
</span><br>
<span class="quotelev2">&gt; &gt; base: component_find: &quot;mca_paffinity_windows&quot; does not appear to be a
</span><br>
<span class="quotelev2">&gt; &gt; valid paffinity MCA dynamic component (ignored):
</span><br>
<span class="quotelev2">&gt; &gt; The specifie
</span><br>
<span class="quotelev2">&gt; &gt; d module could not be found.
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel process
</span><br>
<span class="quotelev2">&gt; &gt; is likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   opal_paffinity_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file ..
</span><br>
<span class="quotelev2">&gt; &gt; \..\Linpack\Source\orte\runtime\orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt; &gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev2">&gt; &gt; file ..
</span><br>
<span class="quotelev2">&gt; &gt; \..\..\..\Linpack\Source\orte\tools\orterun\orterun.c at line 570
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Basant
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
<span class="quotelev1">&gt; * Please do not print this email unless it is absolutely necessary. *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any 
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<span class="quotelev1">&gt; information. If you are not the intended recipient, you should not 
</span><br>
<span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<span class="quotelev1">&gt; immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient 
</span><br>
<span class="quotelev1">&gt; should check this email and any attachments for the presence of 
</span><br>
<span class="quotelev1">&gt; viruses. The company accepts no liability for any damage caused by any 
</span><br>
<span class="quotelev1">&gt; virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11042.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11039.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Reply:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Reply:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
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
