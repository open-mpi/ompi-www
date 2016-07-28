<?
$subject_val = "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 02:32:10 2011" -->
<!-- isoreceived="20110512063210" -->
<!-- sent="Thu, 12 May 2011 12:02:05 +0530" -->
<!-- isosent="20110512063205" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt" -->
<!-- id="BANLkTikWGVrE-8TOaKot+xTrLbsOKDFyKw_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="5542743.17270.1305127564418.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-12 02:32:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16525.php">Jeff Squyres: "Re: [OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe in reply to:</strong> <a href="16507.php">hi: "[OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16560.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Reply:</strong> <a href="16560.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Clarifications:
<br>
- I have downloaded pre-build OpenMPI_v1..5.3-x64 from open-mpi.org
<br>
- installed it on Window 7
<br>
- and then copied OpenMPI_v1..5.3-x64 directory from Windows 7 to
<br>
Windows Server 2008 into different directory and also in same
<br>
directory
<br>
<p>Now on Windows Server 2008, I am observing these errors...
<br>
<p>c:\ompi_tests\win64&gt;mpirun mar_f_i_op.exe
<br>
[nbld-w08:04820] [[30632,0],0] ORTE_ERROR_LOG: Error in file
<br>
..\..\..\openmpi-1.5.3\orte\mca\ras\base\ras_base_allocate.c at line
<br>
147
<br>
[nbld-w08:04820] [[30632,0],0] ORTE_ERROR_LOG: Error in file
<br>
..\..\..\openmpi-1.5.3\orte\mca\plm\base\plm_base_launch_support.c at
<br>
line 99
<br>
[nbld-w08:04820] [[30632,0],0] ORTE_ERROR_LOG: Error in file
<br>
..\..\..\openmpi-1.5.3\orte\mca\plm\ccp\plm_ccp_module.c at line 186
<br>
=
<br>
<p>As suggested, I tried with following but nothing worked...
<br>
- copied to the same directory as it was in previous machine
<br>
- executed &quot;mpirun -mca orte_headnode_name HEADNODE_NAME&quot;  and &quot;mpirun
<br>
-mca orte_headnode_name MYHOSTNAME&quot;
<br>
- set OPENMPI_HOME and other OPAL_* env variables as follow...
<br>
<p>set OPENMPI_HOME=C:\MPIs\OpenMPI_v1.5.3-x64
<br>
set OPAL_PREFIX=C:\MPIs\OpenMPI_v1.5.3-x64
<br>
set OPAL_EXEC_PREFIX=C:\MPIs\OpenMPI_v1.5.3-x64
<br>
set OPAL_BINDIR=C:\MPIs\OpenMPI_v1.5.3-x64\bin
<br>
set OPAL_SBINDIR=C:\MPIs\OpenMPI_v1.5.3-x64\sbin
<br>
set OPAL_LIBEXECDIR=C:\MPIs\OpenMPI_v1.5.3-x64\libexec
<br>
set OPAL_DATAROOTDIR=C:\MPIs\OpenMPI_v1.5.3-x64\share
<br>
set OPAL_DATADIR=C:\MPIs\OpenMPI_v1.5.3-x64\share
<br>
set OPAL_SYSCONFDIR=C:\MPIs\OpenMPI_v1.5.3-x64\etc
<br>
set OPAL_LOCALSTATEDIR=C:\MPIs\OpenMPI_v1.5.3-x64\etc
<br>
set OPAL_LIBDIR=C:\MPIs\OpenMPI_v1.5.3-x64\lib
<br>
set OPAL_INCLUDEDIR=C:\MPIs\OpenMPI_v1.5.3-x64\include
<br>
set OPAL_INFODIR=C:\MPIs\OpenMPI_v1.5.3-x64\share\info
<br>
set OPAL_MANDIR=C:\MPIs\OpenMPI_v1.5.3-x64\share\man
<br>
set OPAL_PKGDATADIR=C:\MPIs\OpenMPI_v1.5.3-x64\share\openmpi
<br>
set OPAL_PKGLIBDIR=C:\MPIs\OpenMPI_v1.5.3-x64\lib\openmpi
<br>
set OPAL_PKGINCLUDEDIR=C:\MPIs\OpenMPI_v1.5.3-x64\include\openmpi
<br>
<p>Please correct if I missed any other env variable.
<br>
<p>Thank you.
<br>
-Hiral
<br>
<p><p>On Wed, May 11, 2011 at 8:56 PM, Shiqing Fan &lt;hpcfan_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message means that Open MPI couldn't allocate any compute node. It might because the headnode wasn't discovered. You could try with option &quot;-mca orte_headnode_name HEADNODE_NAME&quot; in the mpirun command line (mpirun --help will show how to use it) .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And Jeff is also right, special care should be taken for the executable paths, and it's better to use UNC path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To clarify the path issue, if you just copy the OMPI dir to another computer, there might also be another problem that OMPI couldn't load the registry entries, as the registry entries were set during the installation phase on the specific computer. In 1.5.3, a overall env &quot;OPENMPI_HOME&quot; will do the work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; ----- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; -----
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#210;&#209;&#183;&#162;&#203;&#205;&#211;&#202;&#188;&#254;: Wed, 11 May 2011 15:21:26 +0200 (CEST)
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] Sorry! You were supposed to get help about: But    couldn't open help-orterun.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2011, at 5:50 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Clarification: I installed pre-built OpenMPI_v1.5.3-x64 on Windows 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and copied this directory into Windows Server 2008.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you copy OMPI to the same directory tree that you built it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI hard-codes some directory names when it builds, and it expects to find that directory structure when it runs.  If you build OMPI with a --prefix of /foo, but then move it to /bar, various things may not work (like finding help messages, etc.) unless you set the OMPI/OPAL environment variables that tell OMPI where the files are actually located.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16525.php">Jeff Squyres: "Re: [OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="16523.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Maybe in reply to:</strong> <a href="16507.php">hi: "[OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16560.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Reply:</strong> <a href="16560.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
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
