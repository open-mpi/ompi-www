<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 19:52:27 2013" -->
<!-- isoreceived="20130211005227" -->
<!-- sent="Sun, 10 Feb 2013 19:52:23 -0500" -->
<!-- isosent="20130211005223" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="CADKQjjcaewh7WiBadC0OxPB124+29TK4v8x6CvQiUE0a47JEbg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5116D1B4.6090501_at_inria.fr" -->
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
<strong>Date:</strong> 2013-02-10 19:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice
<br>
<p>I tried using this tarball. Things didn't work. (This particular run used 2
<br>
MPI processes with 32 OpenMP threads each.)
<br>
<p>In my application, I first output the topology in a tree structure. (I do
<br>
this in my application instead of via one of hwloc's tools because I don't
<br>
want to call out to shell code.) Then I output thread bindings, then modify
<br>
the thread bindings, then output them again.
<br>
<p>(1) The topology I find consists of 32 PUs and nothing else. I would have
<br>
expected to find two cache levels, 16 cores, and 64 PUs.
<br>
<p>(2) When outputting the thread bindings, I received a segfault. The
<br>
lightweight core file says this was signal 6 (SIGABRT) in a routine called
<br>
&quot;.raise&quot;.
<br>
<p>I'd be happy to help debug this. How?
<br>
<p>-erik
<br>
<p><p><p><p>On Sat, Feb 9, 2013 at 5:46 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  The new &quot;bgq&quot; branch now contains proper topology for BG/Q nodes
</span><br>
<span class="quotelev1">&gt; (including cores and caches, except the prefetching cache) as well as
</span><br>
<span class="quotelev1">&gt; support for set/get binding of the current thread or of another thread. No
</span><br>
<span class="quotelev1">&gt; process-wide binding since I don't know how to iterate over all threads of
</span><br>
<span class="quotelev1">&gt; a process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A tarball is available at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz">https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; (this is our new regression testing tool, I hope the tarball won't
</span><br>
<span class="quotelev1">&gt; disappear too soon)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't expect a lot more features so this branch will likely go into
</span><br>
<span class="quotelev1">&gt; trunk very soon. But if you can look at it, that'll be great.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Le 08/01/2013 18:06, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use hwloc on a Blue Gene/Q. Building and installing worked
</span><br>
<span class="quotelev1">&gt; fine, and it reports the system configuration fine as well (i.e. it shows
</span><br>
<span class="quotelev1">&gt; all PUs). However, when I try to inquire the thread/core bindings, hwloc
</span><br>
<span class="quotelev1">&gt; crashes with an error in libc's free(). This is both with 1.6 and 1.6.1rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The error occurs apparently in CPU_FREE called from
</span><br>
<span class="quotelev1">&gt; hwloc_linux_find_kernel_nr_cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Does this ring a bell with anyone? I know this is not enough information
</span><br>
<span class="quotelev1">&gt; to debug things, but do you have any pointers for things to look at?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I remember reading somewhere that the last bit in a cpu_set_t cannot be
</span><br>
<span class="quotelev1">&gt; used. A Blue Gene/Q has 64 PUs, and may be using 64-bit integers to hold
</span><br>
<span class="quotelev1">&gt; cpu_set_t data. Could this be an issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My goal is to examine and experiment with thread/core bindings with
</span><br>
<span class="quotelev1">&gt; OpenMP to improve performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -erik
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0857/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0859.php">Brice Goglin: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
