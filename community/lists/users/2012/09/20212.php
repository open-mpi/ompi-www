<?
$subject_val = "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 14 08:34:22 2012" -->
<!-- isoreceived="20120914123422" -->
<!-- sent="Fri, 14 Sep 2012 08:34:00 -0400" -->
<!-- isosent="20120914123400" -->
<!-- name="Douglas Eadline" -->
<!-- email="deadline_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1" -->
<!-- id="7718332b0048bc69a965ea9e6e7dd5bd.squirrel_at_mail.eadline.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5050BA5C.8080702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1<br>
<strong>From:</strong> Douglas Eadline (<em>deadline_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-14 08:34:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20213.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="20211.php">William Au: "[OMPI users] hanging in ioctl in solaris 5.10 openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="20202.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20237.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20237.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>I'll get back to this over the weekend and let you know
<br>
how it works. I had to write and article and tend to a
<br>
client issue this week. Thanks for you help.
<br>
<p><pre>
--
Doug
&gt; Le 12/09/2012 17:57, Jeff Squyres a &#233;crit :
&gt;&gt; Here's the r numbers with notable MX changes recently:
&gt;&gt;
&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/26698">https://svn.open-mpi.org/trac/ompi/changeset/26698</a>
&gt;
&gt; Reverting this one fixes the problem.
&gt; And adding --mca mtl ^mx to the command works too (Doug, can you try
&gt; that?)
&gt;
&gt; The problem is that the MTL component calls ompi_common_mx_initialize()
&gt; only once in component_init() but it calls finalize() twice: once in
&gt; component_close() and once in ompi_mtl_mx_finalize(). The attached patch
&gt; seems to work.
&gt;
&gt; Signed-off-by: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
&gt;
&gt; Brice
&gt;
&gt;
&gt; --
&gt; Mailscanner: Clean
&gt;
&gt;
-- 
Doug
-- 
Mailscanner: Clean
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20213.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="20211.php">William Au: "[OMPI users] hanging in ioctl in solaris 5.10 openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="20202.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20237.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20237.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
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
