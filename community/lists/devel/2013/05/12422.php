<?
$subject_val = "[OMPI devel] Regarding registering openib memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 31 09:04:44 2013" -->
<!-- isoreceived="20130531130444" -->
<!-- sent="Fri, 31 May 2013 18:34:40 +0530" -->
<!-- isosent="20130531130440" -->
<!-- name="alankrutha reddy" -->
<!-- email="alankruthareddy46_at_[hidden]" -->
<!-- subject="[OMPI devel] Regarding registering openib memory" -->
<!-- id="CAGFTm77Vhxa4wPJDF8w9pzQDihMQfmb_bObDJz6rBfA_V03j6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Regarding registering openib memory<br>
<strong>From:</strong> alankrutha reddy (<em>alankruthareddy46_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-31 09:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12423.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Regarding registering openib memory"</a>
<li><strong>Previous message:</strong> <a href="12421.php">Piotr Lesnicki: "[OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12423.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Regarding registering openib memory"</a>
<li><strong>Reply:</strong> <a href="12423.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Regarding registering openib memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Whwnever I'm trying to run MPI program it is giving error. I have changed
<br>
locked memory limits by using
<br>
<p>ulimit -l unlimited
<br>
<p>But still it is giving below error
<br>
<p><p>--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;Local host:              abc
<br>
&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;Total memory:            131007 MiB
<br>
<p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>How can I resolve it.? Can anyone help me in fixing this bug.?
<br>
<p><p><p><pre>
-- 
*Regards
**Alankrutha*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12422/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12423.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Regarding registering openib memory"</a>
<li><strong>Previous message:</strong> <a href="12421.php">Piotr Lesnicki: "[OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12423.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Regarding registering openib memory"</a>
<li><strong>Reply:</strong> <a href="12423.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Regarding registering openib memory"</a>
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
