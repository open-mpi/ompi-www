<?
$subject_val = "Re: [OMPI users] Runtime error while running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 05:35:07 2009" -->
<!-- isoreceived="20091102103507" -->
<!-- sent="Mon, 2 Nov 2009 16:04:55 +0530" -->
<!-- isosent="20091102103455" -->
<!-- name="basant.lakhotiya_at_[hidden]" -->
<!-- email="basant.lakhotiya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error while running mpirun" -->
<!-- id="23DA2F26196D9B4DB6F773D07E76756E13C687_at_BLR-EC-MBX05.wipro.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A260979E5B514EC6B4F16DAF7E7963E4_at_D147503" -->
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
<strong>From:</strong> <a href="mailto:basant.lakhotiya_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Runtime%20error%20while%20running%20mpirun"><em>basant.lakhotiya_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-11-02 05:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11040.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<li><strong>Previous message:</strong> <a href="11038.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11023.php">basant.lakhotiya_at_[hidden]: "[OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Reply:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
&nbsp;
<br>
I complied OMPI again, Its creating mca_paffinity_windows and mca_paffinity_windowsd.dll.
<br>
And also I have checked the dependency of both dll through &quot;VS2005 Depends&quot;. Its not showing any missing dependency for these dlls.
<br>
&nbsp;
<br>
While running orterun.exe its giving the same error.
<br>
&nbsp;
<br>
Thanks,
<br>
Basant
<br>
<p>________________________________
<br>
<p>From: Basant [mailto:basant.lakhotiya_at_[hidden]]
<br>
Sent: Mon 11/2/2009 12:14 PM
<br>
To: 'Open MPI Users'
<br>
Subject: RE: [OMPI users] Runtime error while running mpirun
<br>
<p><p><p>Hi Terry,
<br>
<p>Its not creating mca_paffinity_windows.dll but there is a file
<br>
mca_paffinity_windowsd.dll.
<br>
Can you have any idea why it is not creating mca_paffinity_windows's dll.
<br>
<p>Thanks,
<br>
Basant
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Terry Dontje
<br>
Sent: Friday, October 30, 2009 11:05 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Runtime error while running mpirun
<br>
<p>Hi Basant,
<br>
<p>I am not familiar with Windows builds of Open MPI.  However, can you see if
<br>
you Open MPI build actually created a mca_paffinity_window's dll?  I could
<br>
imagine the issue might be that the dll is not finding a needed dependency.
<br>
Under Windows is there a command similar to Unix's ldd command you can run
<br>
on the dll (if it exists)?
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev1">&gt; *From:* /basant.lakhotiya_at_[hidden]/
</span><br>
<span class="quotelev1">&gt; &lt;mailto:basant.lakhotiya_at_%5Bhidden%5D?Subject=Re:%20%5BOMPI%20users
</span><br>
<span class="quotelev1">&gt; %5D%20Runtime%20error%20while%20running%20mpirun&gt;
</span><br>
<span class="quotelev1">&gt; *Date:* 2009-10-30 10:09:20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI in windows server 2003 through Cygwin and also
</span><br>
<span class="quotelev1">&gt; through CMake and Visual Studio. In both the method I successfully
</span><br>
<span class="quotelev1">&gt; complied in cygwin I configured with following command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=timer-windows,memory_mallopt,maffinity,paffinity
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; without these flags I was getting error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got same error while running mpirun.exe/orterun.exe.
</span><br>
<span class="quotelev1">&gt; Can anyone help me to rectify these errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C:\openmpi_sln\debug&gt;orterun.exe -np 2 ipconfig [8puq2akbo:07476] mca:
</span><br>
<span class="quotelev1">&gt; base: component_find: &quot;mca_paffinity_windows&quot; does not appear to be a
</span><br>
<span class="quotelev1">&gt; valid paffinity MCA dynamic component (ignored):
</span><br>
<span class="quotelev1">&gt; The specifie
</span><br>
<span class="quotelev1">&gt; d module could not be found.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt; is likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_paffinity_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file ..
</span><br>
<span class="quotelev1">&gt; \..\Linpack\Source\orte\runtime\orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file ..
</span><br>
<span class="quotelev1">&gt; \..\..\..\Linpack\Source\orte\tools\orterun\orterun.c at line 570
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Basant
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11040.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<li><strong>Previous message:</strong> <a href="11038.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11023.php">basant.lakhotiya_at_[hidden]: "[OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Reply:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
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
