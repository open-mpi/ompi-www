<?
$subject_val = "Re: [OMPI users] Runtime error while running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 09:26:06 2009" -->
<!-- isoreceived="20091102142606" -->
<!-- sent="Mon, 02 Nov 2009 15:25:58 +0100" -->
<!-- isosent="20091102142558" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime error while running mpirun" -->
<!-- id="4AEEEBF6.8020708_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23DA2F26196D9B4DB6F773D07E76756E13C688_at_BLR-EC-MBX05.wipro.com" -->
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
<strong>Date:</strong> 2009-11-02 09:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11049.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Basant,
<br>
<p><p>Could you please also check in your Open MPI solutions, that do you have 
<br>
the mca_paffinity_windows project? and in the property of this project, 
<br>
go to linker-&gt;General, in &quot;Output File&quot; field, you will see the file 
<br>
name of this DLL, is the name &quot;libmca_paffinity_windows.dll&quot; or 
<br>
&quot;mca_paffinity_windows.dll&quot;.
<br>
<p>I just want to make sure the generated solution is correct. If it's 
<br>
correct, you can just rebuilt this single project, and then check if the 
<br>
correct dll is generated. If the project property is not correct, then I 
<br>
think I need to take a look your CMake cache file which you will find in 
<br>
the root directory of the solution. Thanks.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p>basant.lakhotiya_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sorry for misunderstanding. I checked its not creating mca_paffinity_windows.dll and mca_paffinity_windowsd.dll instead that files are libmca_paffinity_windows.dll and libmca_paffinity_windowsd.dll. Only .lib files are there for mca_paffinity_windows and mca_paffinity_windowsd.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The corresponding new errors are:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:04880] mca: base: component_find: unable to open C:/Sou
</span><br>
<span class="quotelev1">&gt; rce/installed/lib/openmpi/debug/mca_paffinity_windows: can't open the module (ig
</span><br>
<span class="quotelev1">&gt; nored)
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:04880] mca: base: component_find: unable to open C:/Sou
</span><br>
<span class="quotelev1">&gt; rce/installed/lib/openmpi/debug/mca_paffinity_windowsd: can't open the module (i
</span><br>
<span class="quotelev1">&gt; gnored)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;   opal_paffinity_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:04880] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ..
</span><br>
<span class="quotelev1">&gt; \..\Source\orte\runtime\orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [8puq2akbo:04880] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ..
</span><br>
<span class="quotelev1">&gt; \..\..\..\Source\orte\tools\orterun\orterun.c at line 570
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Basant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Mon 11/2/2009 6:13 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Basant Lakhotiya (WT01 - Computing and Storage IPG)
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Basant,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mca_paffinity_windowsd.dll is the debug version of
</span><br>
<span class="quotelev1">&gt; mca_paffinity_windows.dll, but orterun.exe should know which one it can
</span><br>
<span class="quotelev1">&gt; use when you build it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because you were building Open MPI with libtool support, probably the
</span><br>
<span class="quotelev1">&gt; problem could be that libtool is not loaded correctly. Could you check
</span><br>
<span class="quotelev1">&gt; that libtool bin directory is in the PATH environment variable? If Open
</span><br>
<span class="quotelev1">&gt; MPI can't find correct libtool library to call, it can't load any mca
</span><br>
<span class="quotelev1">&gt; libraries for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this will be helpful for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; basant.lakhotiya_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I complied OMPI again, Its creating mca_paffinity_windows and
</span><br>
<span class="quotelev2">&gt;&gt; mca_paffinity_windowsd.dll.
</span><br>
<span class="quotelev2">&gt;&gt; And also I have checked the dependency of both dll through &quot;VS2005
</span><br>
<span class="quotelev2">&gt;&gt; Depends&quot;. Its not showing any missing dependency for these dlls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While running orterun.exe its giving the same error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Basant
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* Basant [mailto:basant.lakhotiya_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Mon 11/2/2009 12:14 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* 'Open MPI Users'
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* RE: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Its not creating mca_paffinity_windows.dll but there is a file
</span><br>
<span class="quotelev2">&gt;&gt; mca_paffinity_windowsd.dll.
</span><br>
<span class="quotelev2">&gt;&gt; Can you have any idea why it is not creating mca_paffinity_windows's dll.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Basant
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Terry Dontje
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, October 30, 2009 11:05 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Basant,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not familiar with Windows builds of Open MPI.  However, can you
</span><br>
<span class="quotelev2">&gt;&gt; see if
</span><br>
<span class="quotelev2">&gt;&gt; you Open MPI build actually created a mca_paffinity_window's dll?  I could
</span><br>
<span class="quotelev2">&gt;&gt; imagine the issue might be that the dll is not finding a needed
</span><br>
<span class="quotelev2">&gt;&gt; dependency.
</span><br>
<span class="quotelev2">&gt;&gt; Under Windows is there a command similar to Unix's ldd command you can run
</span><br>
<span class="quotelev2">&gt;&gt; on the dll (if it exists)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* [OMPI users] Runtime error while running mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:* /basant.lakhotiya_at_[hidden]/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:basant.lakhotiya_at_%5Bhidden%5D?Subject=Re:%20%5BOMPI%20users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %5D%20Runtime%20error%20while%20running%20mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Date:* 2009-10-30 10:09:20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled OpenMPI in windows server 2003 through Cygwin and also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through CMake and Visual Studio. In both the method I successfully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complied in cygwin I configured with following command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mca-no-build=timer-windows,memory_mallopt,maffinity,paffinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without these flags I was getting error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got same error while running mpirun.exe/orterun.exe.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone help me to rectify these errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\openmpi_sln\debug&gt;orterun.exe -np 2 ipconfig [8puq2akbo:07476] mca:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base: component_find: &quot;mca_paffinity_windows&quot; does not appear to be a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valid paffinity MCA dynamic component (ignored):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The specifie
</span><br>
<span class="quotelev3">&gt;&gt;&gt; d module could not be found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_paffinity_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \..\Linpack\Source\orte\runtime\orte_init.c at line 79
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \..\..\..\Linpack\Source\orte\tools\orterun\orterun.c at line 570
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basant
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Please do not print this email unless it is absolutely necessary. *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The information contained in this electronic message and any
</span><br>
<span class="quotelev2">&gt;&gt; attachments to this message are intended for the exclusive use of the
</span><br>
<span class="quotelev2">&gt;&gt; addressee(s) and may contain proprietary, confidential or privileged
</span><br>
<span class="quotelev2">&gt;&gt; information. If you are not the intended recipient, you should not
</span><br>
<span class="quotelev2">&gt;&gt; disseminate, distribute or copy this e-mail. Please notify the sender
</span><br>
<span class="quotelev2">&gt;&gt; immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
<span class="quotelev2">&gt;&gt; should check this email and any attachments for the presence of
</span><br>
<span class="quotelev2">&gt;&gt; viruses. The company accepts no liability for any damage caused by any
</span><br>
<span class="quotelev2">&gt;&gt; virus transmitted by this email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.wipro.com
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]   
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
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
<li><strong>Next message:</strong> <a href="11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11049.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11047.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
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
