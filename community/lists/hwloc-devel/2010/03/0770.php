<?
$subject_val = "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 17:54:20 2010" -->
<!-- isoreceived="20100318215420" -->
<!-- sent="Thu, 18 Mar 2010 22:54:14 +0100" -->
<!-- isosent="20100318215414" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()" -->
<!-- id="4BA2A106.30208_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36ca99e91003171341g479de4a2pc93a867d86f09b8f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 17:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0769.php">Bert Wesarg: "[hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>In reply to:</strong> <a href="0768.php">Bert Wesarg: "[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with this retry algorithm of
</span><br>
<span class="quotelev1">&gt; hwloc_linux_foreach_proc_tid(). For example with the
</span><br>
<span class="quotelev1">&gt; hwloc_linux_get_pid_cpubind() function. hwloc_linux_get_pid_cpubind()
</span><br>
<span class="quotelev1">&gt; should collect all affinity mask from the threads. But if the retry is
</span><br>
<span class="quotelev1">&gt; triggered and the new tid list does not have a tid anymore which had
</span><br>
<span class="quotelev1">&gt; an affinity mask which is not a subset of the collected one in the
</span><br>
<span class="quotelev1">&gt; first run. The end result is inaccurate.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Thanks for the report, I applied a slightly different patch to SVN.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0769.php">Bert Wesarg: "[hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>In reply to:</strong> <a href="0768.php">Bert Wesarg: "[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
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
