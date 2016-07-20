<?
$subject_val = "Re: [hwloc-users] Zero cache line size on Power7?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  4 13:18:25 2013" -->
<!-- isoreceived="20130304181825" -->
<!-- sent="Mon, 4 Mar 2013 13:18:21 -0500" -->
<!-- isosent="20130304181821" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Zero cache line size on Power7?" -->
<!-- id="CADKQjjfxnJgYknr=vRtUSsnVwUQ8eoG9H+NPj8EcoiOLC4sM5A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5134B196.60704_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Zero cache line size on Power7?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-04 13:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Fabio Tordini: "[hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>In reply to:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice
<br>
<p>With argument, I get
<br>
<p>bash-3.2$
<br>
configs/sim-debug/scratch/build/hwloc/hwloc-1.7a1r5312/tests/linux/hwloc-gather-topology
<br>
pandora
<br>
cat: cannot open /proc/mounts
<br>
Usage: tar -{c|r|t|u|x} [ -BdDEFhilmopRsUvwZ ] [ -Number ] [ -f TarFile ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ -b Blocks ] [ -S [ Feet ] | [ Feet_at_Density ] | [ Blocksb ] ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ -L InputList ] [-X ExcludeFile] [ -N Blocks ] [ -C Directory ]
<br>
File ...
<br>
Usage: tar {c|r|t|u|x} [ bBdDEfFhilLXmNopRsSUvwZ[0-9] ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ Blocks ] [ TarFile ] [ InputList ] [ ExcludeFile ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ [ Feet ] | [ Feet_at_Density ] | [ Blocksb ] ] [-C Directory ]
<br>
File ...
<br>
mv: cannot rename /tmp/tmp.0sq5xLkmNA/pandora.tar.bz2 to ./pandora.tar.bz2:
<br>
No such file or directory
<br>
Hierarchy gathered in ./pandora.tar.bz2 and kept in
<br>
/tmp/tmp.0sq5xLkmNA/pandora/
<br>
Expected topology output stored in ./pandora.output
<br>
<p>bash-3.2$ ls -l /tmp/tmp.EhR7AqZjsK/pandora.tar.bz2
<br>
/tmp/tmp.EhR7AqZjsK/pandora.tar.bz2 not found
<br>
<p>I don't think my tar supports bz2 (it's not GNU tar). There is a gtar,
<br>
though.
<br>
<p>The file pandora.output exists; I will send it to you privately.
<br>
<p>-erik
<br>
<p><p><p>On Mon, Mar 4, 2013 at 9:37 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  You should run hwloc-gather-topology with one parameter:
</span><br>
<span class="quotelev1">&gt;   hwloc-gather-topology foo
</span><br>
<span class="quotelev1">&gt; This should generate foo.tar.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't explicitly check the number of parameters, we directly look at
</span><br>
<span class="quotelev1">&gt; $1. My bash makes $1 empty when not given, looks like your bash doesn't
</span><br>
<span class="quotelev1">&gt; accept that. The attached patch should fix the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: tests/linux/hwloc-gather-topology.in
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- tests/linux/hwloc-gather-topology.in	(r&#233;vision 5403)
</span><br>
<span class="quotelev1">&gt; +++ tests/linux/hwloc-gather-topology.in	(copie de travail)
</span><br>
<span class="quotelev1">&gt; @@ -34,6 +34,11 @@
</span><br>
<span class="quotelev1">&gt;     echo &quot;  $0 /tmp/\$(uname -n)&quot;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +if test x$# = x0 ; then
</span><br>
<span class="quotelev1">&gt; +  usage
</span><br>
<span class="quotelev1">&gt; +  exit 1
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  name=&quot;$1&quot;; shift
</span><br>
<span class="quotelev1">&gt;  if [ -z &quot;$name&quot; -o x`echo $name | cut -c1` = x- ] ; then
</span><br>
<span class="quotelev1">&gt;    [ x$name != x -a x$name != x-h -a x$name != x--help ] &amp;&amp; echo &quot;Unrecognized option: $name&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 04/03/2013 14:47, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  bash-3.2$
</span><br>
<span class="quotelev1">&gt; configs/sim-debug/scratch/build/hwloc/hwloc-1.7a1r5312/tests/linux/hwloc-gather-topology
</span><br>
<span class="quotelev1">&gt; configs/sim-debug/scratch/build/hwloc/hwloc-1.7a1r5312/tests/linux/hwloc-gather-topology[37]:
</span><br>
<span class="quotelev1">&gt; shift: bad number
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  No tarball is generated.
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
<span class="quotelev1">&gt; On Wed, Feb 27, 2013 at 5:19 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I think I've seen cases where the device-tree contains 0 for such line
</span><br>
<span class="quotelev2">&gt;&gt; sizes.
</span><br>
<span class="quotelev2">&gt;&gt; I guess we should document that the line size is 0 means unknown.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the tarball generated by hwloc-gather-topology ? (send it
</span><br>
<span class="quotelev2">&gt;&gt; only to, in a private email)
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
<span class="quotelev2">&gt;&gt; Le 27/02/2013 23:11, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I am running hwloc 1.7a1r5312 on a Power7 architecture. I find there a
</span><br>
<span class="quotelev2">&gt;&gt; level 2 cache with a cacheline size of 0. Is this to be expected? The
</span><br>
<span class="quotelev2">&gt;&gt; documentation doesn't say that determining the cacheline size may fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I query the cache parameters from my application with these results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Cache (unknown name) has type &quot;data&quot; depth 1
</span><br>
<span class="quotelev2">&gt;&gt;    size 32768 linesize 128 associativity 8 stride 4096
</span><br>
<span class="quotelev2">&gt;&gt; Cache (unknown name) has type &quot;unified&quot; depth 2
</span><br>
<span class="quotelev2">&gt;&gt;    size 262144 linesize 0 associativity 8 stride 32768
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Fabio Tordini: "[hwloc-users] Trying to get last cpu location"</a>
<li><strong>Previous message:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>In reply to:</strong> <a href="0880.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
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
