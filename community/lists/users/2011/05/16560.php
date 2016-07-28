<?
$subject_val = "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 06:26:31 2011" -->
<!-- isoreceived="20110518102631" -->
<!-- sent="Wed, 18 May 2011 15:56:25 +0530" -->
<!-- isosent="20110518102625" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt" -->
<!-- id="BANLkTikS+bSOLw-+6bOZeBD3HB1VzspdzQ_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="BANLkTikWGVrE-8TOaKot+xTrLbsOKDFyKw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-05-18 06:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16524.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Reply:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any comment / suggestion on how to resolve this?
<br>
<p>Thank you.
<br>
-Hiral
<br>
<p>On 5/12/11, hi &lt;hiralsmaillist_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clarifications:
</span><br>
<span class="quotelev1">&gt; - I have downloaded pre-build OpenMPI_v1..5.3-x64 from open-mpi.org
</span><br>
<span class="quotelev1">&gt; - installed it on Window 7
</span><br>
<span class="quotelev1">&gt; - and then copied OpenMPI_v1..5.3-x64 directory from Windows 7 to
</span><br>
<span class="quotelev1">&gt; Windows Server 2008 into different directory and also in same
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now on Windows Server 2008, I am observing these errors...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c:\ompi_tests\win64&gt;mpirun mar_f_i_op.exe
</span><br>
<span class="quotelev1">&gt; [nbld-w08:04820] [[30632,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ..\..\..\openmpi-1.5.3\orte\mca\ras\base\ras_base_allocate.c at line
</span><br>
<span class="quotelev1">&gt; 147
</span><br>
<span class="quotelev1">&gt; [nbld-w08:04820] [[30632,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ..\..\..\openmpi-1.5.3\orte\mca\plm\base\plm_base_launch_support.c at
</span><br>
<span class="quotelev1">&gt; line 99
</span><br>
<span class="quotelev1">&gt; [nbld-w08:04820] [[30632,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ..\..\..\openmpi-1.5.3\orte\mca\plm\ccp\plm_ccp_module.c at line 186
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As suggested, I tried with following but nothing worked...
</span><br>
<span class="quotelev1">&gt; - copied to the same directory as it was in previous machine
</span><br>
<span class="quotelev1">&gt; - executed &quot;mpirun -mca orte_headnode_name HEADNODE_NAME&quot;  and &quot;mpirun
</span><br>
<span class="quotelev1">&gt; -mca orte_headnode_name MYHOSTNAME&quot;
</span><br>
<span class="quotelev1">&gt; - set OPENMPI_HOME and other OPAL_* env variables as follow...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set OPENMPI_HOME=C:\MPIs\OpenMPI_v1.5.3-x64
</span><br>
<span class="quotelev1">&gt; set OPAL_PREFIX=C:\MPIs\OpenMPI_v1.5.3-x64
</span><br>
<span class="quotelev1">&gt; set OPAL_EXEC_PREFIX=C:\MPIs\OpenMPI_v1.5.3-x64
</span><br>
<span class="quotelev1">&gt; set OPAL_BINDIR=C:\MPIs\OpenMPI_v1.5.3-x64\bin
</span><br>
<span class="quotelev1">&gt; set OPAL_SBINDIR=C:\MPIs\OpenMPI_v1.5.3-x64\sbin
</span><br>
<span class="quotelev1">&gt; set OPAL_LIBEXECDIR=C:\MPIs\OpenMPI_v1.5.3-x64\libexec
</span><br>
<span class="quotelev1">&gt; set OPAL_DATAROOTDIR=C:\MPIs\OpenMPI_v1.5.3-x64\share
</span><br>
<span class="quotelev1">&gt; set OPAL_DATADIR=C:\MPIs\OpenMPI_v1.5.3-x64\share
</span><br>
<span class="quotelev1">&gt; set OPAL_SYSCONFDIR=C:\MPIs\OpenMPI_v1.5.3-x64\etc
</span><br>
<span class="quotelev1">&gt; set OPAL_LOCALSTATEDIR=C:\MPIs\OpenMPI_v1.5.3-x64\etc
</span><br>
<span class="quotelev1">&gt; set OPAL_LIBDIR=C:\MPIs\OpenMPI_v1.5.3-x64\lib
</span><br>
<span class="quotelev1">&gt; set OPAL_INCLUDEDIR=C:\MPIs\OpenMPI_v1.5.3-x64\include
</span><br>
<span class="quotelev1">&gt; set OPAL_INFODIR=C:\MPIs\OpenMPI_v1.5.3-x64\share\info
</span><br>
<span class="quotelev1">&gt; set OPAL_MANDIR=C:\MPIs\OpenMPI_v1.5.3-x64\share\man
</span><br>
<span class="quotelev1">&gt; set OPAL_PKGDATADIR=C:\MPIs\OpenMPI_v1.5.3-x64\share\openmpi
</span><br>
<span class="quotelev1">&gt; set OPAL_PKGLIBDIR=C:\MPIs\OpenMPI_v1.5.3-x64\lib\openmpi
</span><br>
<span class="quotelev1">&gt; set OPAL_PKGINCLUDEDIR=C:\MPIs\OpenMPI_v1.5.3-x64\include\openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please correct if I missed any other env variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 11, 2011 at 8:56 PM, Shiqing Fan &lt;hpcfan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error message means that Open MPI couldn't allocate any compute node.
</span><br>
<span class="quotelev2">&gt;&gt; It might because the headnode wasn't discovered. You could try with option
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-mca orte_headnode_name HEADNODE_NAME&quot; in the mpirun command line (mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --help will show how to use it) .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And Jeff is also right, special care should be taken for the executable
</span><br>
<span class="quotelev2">&gt;&gt; paths, and it's better to use UNC path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To clarify the path issue, if you just copy the OMPI dir to another
</span><br>
<span class="quotelev2">&gt;&gt; computer, there might also be another problem that OMPI couldn't load the
</span><br>
<span class="quotelev2">&gt;&gt; registry entries, as the registry entries were set during the installation
</span><br>
<span class="quotelev2">&gt;&gt; phase on the specific computer. In 1.5.3, a overall env &quot;OPENMPI_HOME&quot;
</span><br>
<span class="quotelev2">&gt;&gt; will do the work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt; ----- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254; -----
</span><br>
<span class="quotelev2">&gt;&gt; &#183;&#162;&#188;&#254;&#200;&#203;: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#210;&#209;&#183;&#162;&#203;&#205;&#211;&#202;&#188;&#254;: Wed, 11 May 2011 15:21:26 +0200 (CEST)
</span><br>
<span class="quotelev2">&gt;&gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] Sorry! You were supposed to get help about: But
</span><br>
<span class="quotelev2">&gt;&gt; couldn't open help-orterun.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 11, 2011, at 5:50 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Clarification: I installed pre-built OpenMPI_v1.5.3-x64 on Windows 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and copied this directory into Windows Server 2008.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you copy OMPI to the same directory tree that you built it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI hard-codes some directory names when it builds, and it expects to
</span><br>
<span class="quotelev2">&gt;&gt; find that directory structure when it runs.  If you build OMPI with a
</span><br>
<span class="quotelev2">&gt;&gt; --prefix of /foo, but then move it to /bar, various things may not work
</span><br>
<span class="quotelev2">&gt;&gt; (like finding help messages, etc.) unless you set the OMPI/OPAL
</span><br>
<span class="quotelev2">&gt;&gt; environment variables that tell OMPI where the files are actually
</span><br>
<span class="quotelev2">&gt;&gt; located.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>In reply to:</strong> <a href="16524.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Reply:</strong> <a href="16566.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
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
