<?
$subject_val = "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 10:57:07 2010" -->
<!-- isoreceived="20100427145707" -->
<!-- sent="Tue, 27 Apr 2010 08:57:03 -0600 (MDT)" -->
<!-- isosent="20100427145703" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI &amp;amp; SGE: bash errors at mpirun" -->
<!-- id="alpine.BSF.2.00.1004270829450.65321_at_hurl.aict.ualberta.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1272371919.14852.15.camel_at_defected" -->
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
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 10:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12827.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12825.php">Jeff Squyres: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12816.php">Frederik Himpe: "[OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12865.php">Reuti: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12865.php">Reuti: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 27 Apr 2010, Frederik Himpe wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI is installed in its own prefix
</span><br>
<span class="quotelev1">&gt; (/shared/apps/openmpi/gcc-4.4/1.4.1), and can be loaded by the
</span><br>
<span class="quotelev1">&gt; environment module (<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>) openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I can successfully run this pe job:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N test
</span><br>
<span class="quotelev1">&gt; #$ -q all.q
</span><br>
<span class="quotelev1">&gt; #$ -pe openmpi 20
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; . /etc/profile.d/modules.sh
</span><br>
<span class="quotelev1">&gt; module add sge gmp mpfr gcc openmpi/gcc-4.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This script results in empty test.p[oe]* files and a test.o* file with
</span><br>
<span class="quotelev1">&gt; different node hostnames, but test.e* contains these errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev1">&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev1">&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev1">&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems somehow the module environment tools are called in a wrong way,
</span><br>
<span class="quotelev1">&gt; but I cannot figure out how this happens. These errors are triggered by
</span><br>
<span class="quotelev1">&gt; the mpirun command (commenting out mpirun and just leaving the rest of
</span><br>
<span class="quotelev1">&gt; the script intact, does not result in these errors.). I cannot reproduce
</span><br>
<span class="quotelev1">&gt; these errors with any other kind of job, nor do they happen when I login
</span><br>
<span class="quotelev1">&gt; to any node with ssh or when running the bash command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what exactly does mpirun call which might trigger this error?
</span><br>
<p>This seems to be a known problem for gridengine...
<br>
<p><a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=238562">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=238562</a>
<br>
<p><pre>
-- 
Edmund Sumbar
AICT Research Support Group
esumbar_at_[hidden]
780.492.9360
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12827.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12825.php">Jeff Squyres: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12816.php">Frederik Himpe: "[OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12865.php">Reuti: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12865.php">Reuti: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
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
