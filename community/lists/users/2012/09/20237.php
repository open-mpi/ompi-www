<?
$subject_val = "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 17 16:11:16 2012" -->
<!-- isoreceived="20120917201116" -->
<!-- sent="Mon, 17 Sep 2012 16:10:58 -0400" -->
<!-- isosent="20120917201058" -->
<!-- name="Douglas Eadline" -->
<!-- email="deadline_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1" -->
<!-- id="beaf33595be2bb6f968fa041effc67d2.squirrel_at_mail.eadline.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7718332b0048bc69a965ea9e6e7dd5bd.squirrel_at_mail.eadline.org" -->
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
<strong>Date:</strong> 2012-09-17 16:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20236.php">Siegmar Gross: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>In reply to:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20201.php">George Bosilca: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed, the patched worked, ran the NAS suite and it worked fine.
<br>
<p>Thanks Brice.
<br>
<p><pre>
--
Doug
&gt; Brice,
&gt;
&gt; I'll get back to this over the weekend and let you know
&gt; how it works. I had to write and article and tend to a
&gt; client issue this week. Thanks for you help.
&gt;
&gt; --
&gt; Doug
&gt;
&gt;
&gt;&gt; Le 12/09/2012 17:57, Jeff Squyres a &#233;crit :
&gt;&gt;&gt; Here's the r numbers with notable MX changes recently:
&gt;&gt;&gt;
&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/26698">https://svn.open-mpi.org/trac/ompi/changeset/26698</a>
&gt;&gt;
&gt;&gt; Reverting this one fixes the problem.
&gt;&gt; And adding --mca mtl ^mx to the command works too (Doug, can you try
&gt;&gt; that?)
&gt;&gt;
&gt;&gt; The problem is that the MTL component calls ompi_common_mx_initialize()
&gt;&gt; only once in component_init() but it calls finalize() twice: once in
&gt;&gt; component_close() and once in ompi_mtl_mx_finalize(). The attached patch
&gt;&gt; seems to work.
&gt;&gt;
&gt;&gt; Signed-off-by: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
&gt;&gt;
&gt;&gt; Brice
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; Mailscanner: Clean
&gt;&gt;
&gt;&gt;
&gt;
&gt;
&gt; --
&gt; Doug
&gt;
&gt; --
&gt; Mailscanner: Clean
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20236.php">Siegmar Gross: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342(Solaris, Oracle C)"</a>
<li><strong>In reply to:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20201.php">George Bosilca: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
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
