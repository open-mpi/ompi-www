<?
$subject_val = "[OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 23:36:23 2010" -->
<!-- isoreceived="20100630033623" -->
<!-- sent="Tue, 29 Jun 2010 23:36:18 -0400" -->
<!-- isosent="20100630033618" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="[OMPI devel] How to disable paffinity" -->
<!-- id="AANLkTimQOPG5iHQa6rkz50XKyTD0apuMqXFGYtj6lbdE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] How to disable paffinity<br>
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 23:36:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8122.php">Jeff Squyres: "[OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all ,
<br>
<p>I tried to run the openmpi on vxworks. Now I can run program ompi_info
<br>
etc. But it failed running &quot;mpirun ls&quot;,  the error is :
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;opal_paffinity_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>After using the ompi_info , I cann't find any available component for
<br>
paffinity. It seems the linux component of paffinity  isn't  available
<br>
. As the paffinity is not a must in openmpi . I wonder whether I can
<br>
disable the paffinity during the running of mpirun?
<br>
<pre>
-- 
Jing Zhang
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8122.php">Jeff Squyres: "[OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8124.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
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
