<?
$subject_val = "Re: [OMPI devel] oshmem only supports Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 15:26:45 2014" -->
<!-- isoreceived="20140724192645" -->
<!-- sent="Thu, 24 Jul 2014 19:26:44 +0000" -->
<!-- isosent="20140724192644" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem only supports Linux ?" -->
<!-- id="51B5B3DD-6CBD-4A24-B912-A70BC39054A4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZbKqDgP9c5P_ZSswLDS+gEgGqwDD0-RqcDng3eQqjRqQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem only supports Linux ?<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 15:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15261.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="15259.php">Mike Dubman: "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<li><strong>In reply to:</strong> <a href="15259.php">Mike Dubman: "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2014, at 2:00 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OSHMEM memheap implementation relies on the  &quot;_end&quot; symbol provided by linux linker. The _end symbol indicates the beginning of the program dynamic allocation area.
</span><br>
<span class="quotelev1">&gt; This is needed to allow programmatic access to the process global/static variables.
</span><br>
<p>Looks like this functionality could be implemented on Darwin (OS X) by using the vm_region function:
<br>
<p><a href="http://www.gnu.org/software/hurd/gnumach-doc/Memory-Attributes.html#Memory-Attributes">http://www.gnu.org/software/hurd/gnumach-doc/Memory-Attributes.html#Memory-Attributes</a>
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15261.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="15259.php">Mike Dubman: "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<li><strong>In reply to:</strong> <a href="15259.php">Mike Dubman: "Re: [OMPI devel] oshmem only supports Linux ?"</a>
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
