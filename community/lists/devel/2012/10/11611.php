<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 11:09:05 2012" -->
<!-- isoreceived="20121018150905" -->
<!-- sent="Thu, 18 Oct 2012 15:08:59 +0000" -->
<!-- isosent="20121018150859" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B1130213D_at_ECS-EXG-P-MB04.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2813FC92-FFE8-4101-96F7-AF342B5EDA94_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cross Memory Attach: What am I Missing?<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 11:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11612.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11612.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11612.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11617.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>I really appreciate your pointing me in the right direction. It turns out that on this particular system had /etc/sysctl.d/10-ptrace.conf was set to 1. Changing this to 0 fixed the problem. I'm not sure if this is the best way of getting things to work, but is sufficient for my purposes.
<br>
<p>Thanks!
<br>
<p>Sam
<br>
________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of George Bosilca [bosilca_at_[hidden]]
<br>
Sent: Thursday, October 18, 2012 7:44 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Cross Memory Attach: What am I Missing?
<br>
<p>Check the permissions granted by pam. Look in the /etc/security to check for any type of restrictions.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Oct 17, 2012, at 23:30 , &quot;Gutierrez, Samuel K&quot; &lt;samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi,
<br>
<p>I'm trying to run with CMA support, but process_vm_readv is failing with EPERM when trying to use it as a regular user (everything seems to work fine as root). I've looked around for some solutions, but I can't seem to find what I'm looking for. The documentation states that the target and source processes need to have the same GID and UID to work properly. It appears that they do, so my feeling is that I'm missing something.
<br>
<p>Any help is greatly appreciated.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11612.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11610.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11612.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11612.php">Jeff Squyres: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11617.php">Christopher Yeoh: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
