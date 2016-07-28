<?
$subject_val = "[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 12:42:03 2014" -->
<!-- isoreceived="20140203174203" -->
<!-- sent="Mon, 03 Feb 2014 12:41:56 -0500" -->
<!-- isosent="20140203174156" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory" -->
<!-- id="52EFD4E4.8080005_at_giref.ulaval.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 12:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23543.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23541.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23543.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23543.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>with OpenMPI 1.6.3 I have encountered this error which &quot;randomly&quot; appears:
<br>
<p>[compile:20089] opal_os_dirpath_create: Error: Unable to create the 
<br>
sub-directory (/tmp/openmpi-sessions-cmpbib_at_compile_0/55528/0) of 
<br>
(/tmp/openmpi-sessions-cmpbib_at_compile_0/55528/0/0), mkdir failed [1]
<br>
[compile:20089] [[55528,0],0] ORTE_ERROR_LOG: Error in file 
<br>
util/session_dir.c at line 106
<br>
<p>(view full stderr attached)
<br>
<p>and also this mostly same one:
<br>
<p>[compile:22876] opal_os_dirpath_create: Error: Unable to create the 
<br>
sub-directory (/tmp/openmpi-sessions-cmpbib_at_compile_0/53197/0) of 
<br>
(/tmp/openmpi-sessions-cmpbib_at_compile_0/53197/0/0), mkdir failed [1]
<br>
...
<br>
<p>Looking deeper, I have found this in /tmp:
<br>
<p>ls -ladtr /tmp/openmpi-sessions-cmpbib\@compile_0/* |grep -v &quot;drwx&quot;
<br>
-rw-r--r-- 1 cmpbib bib   93 Jan 31 06:47 
<br>
/tmp/openmpi-sessions-cmpbib_at_compile_0/55528
<br>
-rw-r--r-- 1 cmpbib bib   92 Jan 31 06:48 
<br>
/tmp/openmpi-sessions-cmpbib_at_compile_0/41437
<br>
-rw-r--r-- 1 cmpbib bib   93 Jan 31 07:01 
<br>
/tmp/openmpi-sessions-cmpbib_at_compile_0/59324
<br>
-rw-r--r-- 1 cmpbib bib   92 Jan 31 09:49 
<br>
/tmp/openmpi-sessions-cmpbib_at_compile_0/53197
<br>
-rw-r--r-- 1 cmpbib bib   93 Jan 31 11:10 
<br>
/tmp/openmpi-sessions-cmpbib_at_compile_0/54532
<br>
-rw-r--r-- 1 cmpbib bib   93 Jan 31 14:18 
<br>
/tmp/openmpi-sessions-cmpbib_at_compile_0/36511
<br>
-rw-r--r-- 1 cmpbib bib   93 Feb  1 18:50 
<br>
/tmp/openmpi-sessions-cmpbib_at_compile_0/63980
<br>
<p><p>So there are some *files* in /tmp which are named like the directories 
<br>
which are tried to be created....
<br>
<p>The content of the file /tmp/openmpi-sessions-cmpbib_at_compile_0/55528 is:
<br>
<p>4016963584.0;tcp://10.1.1.46:51427;tcp://132.203.7.103:51427;tcp://192.168.122.1:51427
<br>
31231
<br>
<p>which looks like the content of the file &quot;contact.txt&quot; which seems to 
<br>
appear in a successfully created directory.  Also, the files have been 
<br>
created far before the executions which aborted...
<br>
<p>So, is this a bug in 1.6.3 and is there a &quot;solution&quot; for that?
<br>
(I know I can cleanup the files, but I expect OpenMPI to not try to 
<br>
create a directory if a file with the same name exists...)
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>


<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23542/Cerr.DiffusionInst.2.13.txt">Cerr.DiffusionInst.2.13.txt</a>
</ul>
<!-- attachment="Cerr.DiffusionInst.2.13.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23542/Cerr.mooney_3d_Clpen_mixte_64Hexa8_3proc.txt">Cerr.mooney_3d_Clpen_mixte_64Hexa8_3proc.txt</a>
</ul>
<!-- attachment="Cerr.mooney_3d_Clpen_mixte_64Hexa8_3proc.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23542/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23543.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23541.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23543.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23543.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
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
