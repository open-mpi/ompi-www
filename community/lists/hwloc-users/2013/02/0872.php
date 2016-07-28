<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 15:12:49 2013" -->
<!-- isoreceived="20130215201249" -->
<!-- sent="Fri, 15 Feb 2013 15:12:45 -0500" -->
<!-- isosent="20130215201245" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="CADKQjjd5yoNsMEOXu9_ysk4s7ONFY4=G1BKKn9K3d1kdXkKe4g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5118A2F4.2020206_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on Blue Gene/Q?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 15:12:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice
<br>
<p>Yepp, works for me as well. Thanks!
<br>
<p>-erik
<br>
<p><p>On Mon, Feb 11, 2013 at 2:51 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Obviously, I should have mentioned that you must pass
</span><br>
<span class="quotelev1">&gt; --host=powerpc64-bgq-linux to configure. I will add a FAQ about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 11/02/2013 01:52, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I tried using this tarball. Things didn't work. (This particular run
</span><br>
<span class="quotelev1">&gt; used 2 MPI processes with 32 OpenMP threads each.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  In my application, I first output the topology in a tree structure. (I
</span><br>
<span class="quotelev1">&gt; do this in my application instead of via one of hwloc's tools because I
</span><br>
<span class="quotelev1">&gt; don't want to call out to shell code.) Then I output thread bindings, then
</span><br>
<span class="quotelev1">&gt; modify the thread bindings, then output them again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (1) The topology I find consists of 32 PUs and nothing else. I would
</span><br>
<span class="quotelev1">&gt; have expected to find two cache levels, 16 cores, and 64 PUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (2) When outputting the thread bindings, I received a segfault. The
</span><br>
<span class="quotelev1">&gt; lightweight core file says this was signal 6 (SIGABRT) in a routine called
</span><br>
<span class="quotelev1">&gt; &quot;.raise&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'd be happy to help debug this. How?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Sat, Feb 9, 2013 at 5:46 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The new &quot;bgq&quot; branch now contains proper topology for BG/Q nodes
</span><br>
<span class="quotelev2">&gt;&gt; (including cores and caches, except the prefetching cache) as well as
</span><br>
<span class="quotelev2">&gt;&gt; support for set/get binding of the current thread or of another thread. No
</span><br>
<span class="quotelev2">&gt;&gt; process-wide binding since I don't know how to iterate over all threads of
</span><br>
<span class="quotelev2">&gt;&gt; a process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A tarball is available at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz">https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; (this is our new regression testing tool, I hope the tarball won't
</span><br>
<span class="quotelev2">&gt;&gt; disappear too soon)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't expect a lot more features so this branch will likely go into
</span><br>
<span class="quotelev2">&gt;&gt; trunk very soon. But if you can look at it, that'll be great.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 08/01/2013 18:06, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use hwloc on a Blue Gene/Q. Building and installing worked
</span><br>
<span class="quotelev2">&gt;&gt; fine, and it reports the system configuration fine as well (i.e. it shows
</span><br>
<span class="quotelev2">&gt;&gt; all PUs). However, when I try to inquire the thread/core bindings, hwloc
</span><br>
<span class="quotelev2">&gt;&gt; crashes with an error in libc's free(). This is both with 1.6 and 1.6.1rc1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The error occurs apparently in CPU_FREE called from
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_linux_find_kernel_nr_cpus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Does this ring a bell with anyone? I know this is not enough
</span><br>
<span class="quotelev2">&gt;&gt; information to debug things, but do you have any pointers for things to
</span><br>
<span class="quotelev2">&gt;&gt; look at?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I remember reading somewhere that the last bit in a cpu_set_t cannot be
</span><br>
<span class="quotelev2">&gt;&gt; used. A Blue Gene/Q has 64 PUs, and may be using 64-bit integers to hold
</span><br>
<span class="quotelev2">&gt;&gt; cpu_set_t data. Could this be an issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  My goal is to examine and experiment with thread/core bindings with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMP to improve performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
