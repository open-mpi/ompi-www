<?
$subject_val = "[OMPI users] Problems with memchecker in version 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 04:44:21 2010" -->
<!-- isoreceived="20100622084421" -->
<!-- sent="Tue, 22 Jun 2010 10:44:16 +0200" -->
<!-- isosent="20100622084416" -->
<!-- name="Michele De Stefano" -->
<!-- email="micdestefano_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with memchecker in version 1.4.2" -->
<!-- id="AANLkTiltvlnnp9WMUQJwP63pUG8GWamx4_IVmiAzTp4q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems with memchecker in version 1.4.2<br>
<strong>From:</strong> Michele De Stefano (<em>micdestefano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 04:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13367.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning.
<br>
<p>I'm experiencing some problems with Open MPI 1.4.2, built on a CentOS
<br>
5.5, on a 32 bit machine.
<br>
<p>I've configured it with
<br>
<p>./configure --prefix=/usr/local/openmpi --enable-debug
<br>
--enable-memchecker --enable-heterogeneous
<br>
<p>When I run &quot;/usr/local/openmpi/bin/mpiexec -np 3 ls&quot;, Open MPI crashes
<br>
with this error message:
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_memchecker_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
<br>
in file ../../orte/runtime/orte_init.c at line 77
<br>
[ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
<br>
in file ../../../../orte/tools/orterun/orterun.c at line 543
<br>
<p><p>It seems that the memchecker does not work, because after
<br>
reconfiguring without &quot;--enable-memchecker&quot; and rebuilding, I don't
<br>
receive the same error anymore.
<br>
<p>May any of the Open MPI developers verify this problem, please ?
<br>
<p>Thank you very much.
<br>
Best regards.
<br>
<p><pre>
-- 
Michele De Stefano
<a href="http://www.linkedin.com/in/micdestefano">http://www.linkedin.com/in/micdestefano</a>
<a href="http://code.google.com/p/mds-utils">http://code.google.com/p/mds-utils</a>
<a href="http://micheledestefano.xoom.it">http://micheledestefano.xoom.it</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13367.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
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
