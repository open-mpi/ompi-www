<?
$subject_val = "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  2 16:19:52 2010" -->
<!-- isoreceived="20100502201952" -->
<!-- sent="Sun, 2 May 2010 22:19:37 +0200" -->
<!-- isosent="20100502201937" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI &amp;amp; SGE: bash errors at mpirun" -->
<!-- id="A86079B7-EE6E-4888-A74C-496A46439EFD_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.BSF.2.00.1004270829450.65321_at_hurl.aict.ualberta.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-02 16:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12866.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12864.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12826.php">Edmund Sumbar: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.04.2010 um 16:57 schrieb Edmund Sumbar:
<br>
<p><span class="quotelev1">&gt; On Tue, 27 Apr 2010, Frederik Himpe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI is installed in its own prefix
</span><br>
<span class="quotelev2">&gt;&gt; (/shared/apps/openmpi/gcc-4.4/1.4.1), and can be loaded by the
</span><br>
<span class="quotelev2">&gt;&gt; environment module (<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>) openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I can successfully run this pe job:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N test
</span><br>
<span class="quotelev2">&gt;&gt; #$ -q all.q
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe openmpi 20
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; . /etc/profile.d/modules.sh
</span><br>
<span class="quotelev2">&gt;&gt; module add sge gmp mpfr gcc openmpi/gcc-4.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np $NSLOTS hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This script results in empty test.p[oe]* files and a test.o* file  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; different node hostnames, but test.e* contains these errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev2">&gt;&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems somehow the module environment tools are called in a wrong  
</span><br>
<span class="quotelev2">&gt;&gt; way,
</span><br>
<span class="quotelev2">&gt;&gt; but I cannot figure out how this happens. These errors are  
</span><br>
<span class="quotelev2">&gt;&gt; triggered by
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun command (commenting out mpirun and just leaving the rest  
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; the script intact, does not result in these errors.). I cannot  
</span><br>
<span class="quotelev2">&gt;&gt; reproduce
</span><br>
<span class="quotelev2">&gt;&gt; these errors with any other kind of job, nor do they happen when I  
</span><br>
<span class="quotelev2">&gt;&gt; login
</span><br>
<span class="quotelev2">&gt;&gt; to any node with ssh or when running the bash command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, what exactly does mpirun call which might trigger this error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to be a known problem for gridengine...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=238562">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=238562</a>
</span><br>
<p>In the thread of the mentioned list I posted these workarounds:
<br>
<p><a href="http://www.beowulf.org/pipermail/beowulf/2010-January/027273.html">http://www.beowulf.org/pipermail/beowulf/2010-January/027273.html</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edmund Sumbar
</span><br>
<span class="quotelev1">&gt; AICT Research Support Group
</span><br>
<span class="quotelev1">&gt; esumbar_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 780.492.9360
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="12866.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12864.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12826.php">Edmund Sumbar: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
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
