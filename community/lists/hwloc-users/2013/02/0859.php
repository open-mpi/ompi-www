<?
$subject_val = "Re: [hwloc-users] hwloc on Blue Gene/Q?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 02:51:23 2013" -->
<!-- isoreceived="20130211075123" -->
<!-- sent="Mon, 11 Feb 2013 08:51:16 +0100" -->
<!-- isosent="20130211075116" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on Blue Gene/Q?" -->
<!-- id="5118A2F4.2020206_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjcaewh7WiBadC0OxPB124+29TK4v8x6CvQiUE0a47JEbg_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 02:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0872.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Obviously, I should have mentioned that you must pass
<br>
--host=powerpc64-bgq-linux to configure. I will add a FAQ about this.
<br>
<p>Brice
<br>
<p><p><p><p>Le 11/02/2013 01:52, Erik Schnetter a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using this tarball. Things didn't work. (This particular run
</span><br>
<span class="quotelev1">&gt; used 2 MPI processes with 32 OpenMP threads each.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my application, I first output the topology in a tree structure. (I
</span><br>
<span class="quotelev1">&gt; do this in my application instead of via one of hwloc's tools because
</span><br>
<span class="quotelev1">&gt; I don't want to call out to shell code.) Then I output thread
</span><br>
<span class="quotelev1">&gt; bindings, then modify the thread bindings, then output them again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) The topology I find consists of 32 PUs and nothing else. I would
</span><br>
<span class="quotelev1">&gt; have expected to find two cache levels, 16 cores, and 64 PUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) When outputting the thread bindings, I received a segfault. The
</span><br>
<span class="quotelev1">&gt; lightweight core file says this was signal 6 (SIGABRT) in a routine
</span><br>
<span class="quotelev1">&gt; called &quot;.raise&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be happy to help debug this. How?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Feb 9, 2013 at 5:46 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The new &quot;bgq&quot; branch now contains proper topology for BG/Q nodes
</span><br>
<span class="quotelev1">&gt;     (including cores and caches, except the prefetching cache) as well
</span><br>
<span class="quotelev1">&gt;     as support for set/get binding of the current thread or of another
</span><br>
<span class="quotelev1">&gt;     thread. No process-wide binding since I don't know how to iterate
</span><br>
<span class="quotelev1">&gt;     over all threads of a process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A tarball is available at:
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;     <a href="https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz">https://ci.inria.fr/hwloc/job/hwloc-zcustom-tarball/lastSuccessfulBuild/artifact/hwloc-1.7a1r5312.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;     (this is our new regression testing tool, I hope the tarball won't
</span><br>
<span class="quotelev1">&gt;     disappear too soon)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I don't expect a lot more features so this branch will likely go
</span><br>
<span class="quotelev1">&gt;     into trunk very soon. But if you can look at it, that'll be great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 08/01/2013 18:06, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     I am trying to use hwloc on a Blue Gene/Q. Building and
</span><br>
<span class="quotelev2">&gt;&gt;     installing worked fine, and it reports the system configuration
</span><br>
<span class="quotelev2">&gt;&gt;     fine as well (i.e. it shows all PUs). However, when I try to
</span><br>
<span class="quotelev2">&gt;&gt;     inquire the thread/core bindings, hwloc crashes with an error in
</span><br>
<span class="quotelev2">&gt;&gt;     libc's free(). This is both with 1.6 and 1.6.1rc1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The error occurs apparently in CPU_FREE called from
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_linux_find_kernel_nr_cpus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Does this ring a bell with anyone? I know this is not enough
</span><br>
<span class="quotelev2">&gt;&gt;     information to debug things, but do you have any pointers for
</span><br>
<span class="quotelev2">&gt;&gt;     things to look at?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I remember reading somewhere that the last bit in a cpu_set_t
</span><br>
<span class="quotelev2">&gt;&gt;     cannot be used. A Blue Gene/Q has 64 PUs, and may be using 64-bit
</span><br>
<span class="quotelev2">&gt;&gt;     integers to hold cpu_set_t data. Could this be an issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     My goal is to examine and experiment with thread/core bindings
</span><br>
<span class="quotelev2">&gt;&gt;     with OpenMP to improve performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Erik Schnetter &lt;schnetter_at_[hidden] &lt;mailto:schnetter_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden] &lt;mailto:schnetter_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0859/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0857.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Reply:</strong> <a href="0872.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
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
