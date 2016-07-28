<?
$subject_val = "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 14:49:53 2014" -->
<!-- isoreceived="20140203194953" -->
<!-- sent="Mon, 3 Feb 2014 11:49:02 -0800" -->
<!-- isosent="20140203194902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory" -->
<!-- id="D19BF30B-EF00-4379-8C2D-5FBEF94D67D6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52EFD4E4.8080005_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 14:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23542.php">Eric Chamberland: "[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23542.php">Eric Chamberland: "[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seems rather odd - is your /tmp by any chance network mounted?
<br>
<p>On Feb 3, 2014, at 9:41 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.6.3 I have encountered this error which &quot;randomly&quot; appears:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compile:20089] opal_os_dirpath_create: Error: Unable to create the sub-directory (/tmp/openmpi-sessions-cmpbib_at_compile_0/55528/0) of (/tmp/openmpi-sessions-cmpbib_at_compile_0/55528/0/0), mkdir failed [1]
</span><br>
<span class="quotelev1">&gt; [compile:20089] [[55528,0],0] ORTE_ERROR_LOG: Error in file util/session_dir.c at line 106
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (view full stderr attached)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and also this mostly same one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compile:22876] opal_os_dirpath_create: Error: Unable to create the sub-directory (/tmp/openmpi-sessions-cmpbib_at_compile_0/53197/0) of (/tmp/openmpi-sessions-cmpbib_at_compile_0/53197/0/0), mkdir failed [1]
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking deeper, I have found this in /tmp:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ls -ladtr /tmp/openmpi-sessions-cmpbib\@compile_0/* |grep -v &quot;drwx&quot;
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 cmpbib bib   93 Jan 31 06:47 /tmp/openmpi-sessions-cmpbib_at_compile_0/55528
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 cmpbib bib   92 Jan 31 06:48 /tmp/openmpi-sessions-cmpbib_at_compile_0/41437
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 cmpbib bib   93 Jan 31 07:01 /tmp/openmpi-sessions-cmpbib_at_compile_0/59324
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 cmpbib bib   92 Jan 31 09:49 /tmp/openmpi-sessions-cmpbib_at_compile_0/53197
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 cmpbib bib   93 Jan 31 11:10 /tmp/openmpi-sessions-cmpbib_at_compile_0/54532
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 cmpbib bib   93 Jan 31 14:18 /tmp/openmpi-sessions-cmpbib_at_compile_0/36511
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 cmpbib bib   93 Feb  1 18:50 /tmp/openmpi-sessions-cmpbib_at_compile_0/63980
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So there are some *files* in /tmp which are named like the directories which are tried to be created....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The content of the file /tmp/openmpi-sessions-cmpbib_at_compile_0/55528 is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4016963584.0;tcp://10.1.1.46:51427;tcp://132.203.7.103:51427;tcp://192.168.122.1:51427
</span><br>
<span class="quotelev1">&gt; 31231
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which looks like the content of the file &quot;contact.txt&quot; which seems to appear in a successfully created directory.  Also, the files have been created far before the executions which aborted...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, is this a bug in 1.6.3 and is there a &quot;solution&quot; for that?
</span><br>
<span class="quotelev1">&gt; (I know I can cleanup the files, but I expect OpenMPI to not try to create a directory if a file with the same name exists...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; &lt;Cerr.DiffusionInst.2.13.txt&gt;&lt;Cerr.mooney_3d_Clpen_mixte_64Hexa8_3proc.txt&gt;&lt;ompi_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23542.php">Eric Chamberland: "[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23542.php">Eric Chamberland: "[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23544.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
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
