<?
$subject_val = "[OMPI devel] Git security vulnerability, please upgrade Windows &amp; OS X Git clients";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 10:52:34 2014" -->
<!-- isoreceived="20141219155234" -->
<!-- sent="Fri, 19 Dec 2014 15:52:32 +0000" -->
<!-- isosent="20141219155232" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] Git security vulnerability, please upgrade Windows &amp;amp; OS X Git clients" -->
<!-- id="E6657FAD-B607-46E2-B35E-192EF3E9EB06_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Git security vulnerability, please upgrade Windows &amp; OS X Git clients<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 10:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16691.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting from <a href="https://github.com/blog/1938-vulnerability-announced-update-your-git-clients">https://github.com/blog/1938-vulnerability-announced-update-your-git-clients</a>
<br>
<p>&quot;&quot;&quot;
<br>
A critical Git security vulnerability has been announced today, affecting all versions of the official Git client and all related software that interacts with Git repositories, including GitHub for Windows and GitHub for Mac. Because this is a client-side only vulnerability, github.com and GitHub Enterprise are not directly affected.
<br>
<p>The vulnerability concerns Git and Git-compatible clients that access Git repositories in a case-insensitive or case-normalizing filesystem. An attacker can craft a malicious Git tree that will cause Git to overwrite its own .git/config file when cloning or checking out a repository, leading to arbitrary command execution in the client machine. Git clients running on OS X (HFS+) or any version of Microsoft Windows (NTFS, FAT) are exploitable through this vulnerability. Linux clients are not affected if they run in a case-sensitive filesystem.
<br>
<p>We strongly encourage all users of GitHub and GitHub Enterprise to update their Git clients as soon as possible, and to be particularly careful when cloning or accessing Git repositories hosted on unsafe or untrusted hosts.
<br>
&quot;&quot;&quot;
<br>
<p>The official Git release post: <a href="http://article.gmane.org/gmane.linux.kernel/1853266">http://article.gmane.org/gmane.linux.kernel/1853266</a>
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16691.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
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
