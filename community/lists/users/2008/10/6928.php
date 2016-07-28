<?
$subject_val = "[OMPI users] SGE tight integration and ?tm? protocol for start";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 16:40:17 2008" -->
<!-- isoreceived="20081009204017" -->
<!-- sent="Thu, 9 Oct 2008 16:40:13 -0400" -->
<!-- isosent="20081009204013" -->
<!-- name="Sean Davis" -->
<!-- email="sdavis2_at_[hidden]" -->
<!-- subject="[OMPI users] SGE tight integration and ?tm? protocol for start" -->
<!-- id="264855a00810091340ye476713k47554ddd94773f75_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] SGE tight integration and ?tm? protocol for start<br>
<strong>From:</strong> Sean Davis (<em>sdavis2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 16:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Previous message:</strong> <a href="6927.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Maybe reply:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am relatively new to OpenMPI and Sun Grid Engine parallel
<br>
integration.  I have a small cluster that is running SGE6.2 on linux
<br>
machines all using Intel Xeon processors.  I have installed OpenMPI
<br>
1.2.7 from source using the --with-sge switch.  Now, I am trying to
<br>
troubleshoot some problems I am having.  I have created a simple job
<br>
script:
<br>
<p>The job script looks like:
<br>
#!/bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -cwd
<br>
mpirun --mca pls_gridengine_verbose 1 -np $NSLOTS hostname
<br>
<p>And the output on the error stream:
<br>
<span class="quotelev1">&gt; more junksub.sh.e3574
</span><br>
[shakespeare:05720] mca: base: component_find: unable to open ras tm:
<br>
file not found (ignored)
<br>
[shakespeare:05720] mca: base: component_find: unable to open pls tm:
<br>
file not found (ignored)
<br>
Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
<br>
Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
<br>
Server daemon successfully started with task id &quot;1.shakespeare&quot;
<br>
[shakespeare:05733] mca: base: component_find: unable to open ras tm:
<br>
file not found (ignored)
<br>
[shakespeare:05733] mca: base: component_find: unable to open pls tm:
<br>
file not found (ignored)
<br>
error: executing task of job 3576 failed: failed sending task to
<br>
execd_at_[hidden]: can't find connecti
<br>
on
<br>
[shakespeare:05720] ERROR: A daemon on node octopus.nci.nih.gov failed
<br>
to start as expected.
<br>
[shakespeare:05720] ERROR: There may be more information available from
<br>
[shakespeare:05720] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[shakespeare:05720] ERROR: If the problem persists, please restart the
<br>
[shakespeare:05720] ERROR: Grid Engine PE job
<br>
[shakespeare:05720] ERROR: The daemon exited unexpectedly with status 1.
<br>
<p>However, there is no output in any output stream.
<br>
<p>And if I log into shakespeare and qrsh -q all.q_at_octopus, I immediately
<br>
get a slot, so there isn't a &quot;direct&quot; problem with connecting.
<br>
<p>As I got a hint from folks on the SGE mailing list, it appears that
<br>
qrsh is not being used for job submission.  Any suggestions as to why
<br>
this might be the case (or if it is the case)?
<br>
<p>Thanks,
<br>
Sean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<li><strong>Previous message:</strong> <a href="6927.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6948.php">Jeff Squyres: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Maybe reply:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
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
