<?
$subject_val = "Re: [hwloc-devel] gather-topology fix and manpage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 18:37:57 2010" -->
<!-- isoreceived="20101220233757" -->
<!-- sent="Tue, 21 Dec 2010 00:37:51 +0100" -->
<!-- isosent="20101220233751" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology fix and manpage" -->
<!-- id="AANLkTikd__S_RbKbH70c99CCgN8k7m78aHvhE9Gx6Oph_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D0F0AB8.30805_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] gather-topology fix and manpage<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 18:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1746.php">Brice Goglin: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Previous message:</strong> <a href="1744.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1737.php">Brice Goglin: "[hwloc-devel] gather-topology fix and manpage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1746.php">Brice Goglin: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Reply:</strong> <a href="1746.php">Brice Goglin: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>thanks for looking into it!
<br>
<p>Regarding the naming. I would argue that since the utility is currently
<br>
called
<br>
hwloc-gather-topology.sh
<br>
then the man page should be named
<br>
hwloc-gather-topology.sh.1
<br>
<p>What's your opinion?
<br>
<p>I have just one question regarding this code:
<br>
if [ -z &quot;$name&quot; -o x`echo $name | cut -c1` = x- ]
<br>
<p>You code is definitely more portable than the code I have proposed. getopt
<br>
might not be available on all systems.
<br>
<p>Your code will give a usage message whenever -&lt;anything&gt; is used. Would not
<br>
be better to use the case statement to check if
<br>
-h | --help has been used to give the usage message
<br>
-&lt;anything&gt; to check if invalid option has been entered and give: error
<br>
message Unknown option and usage message
<br>
Proceed otherwise.
<br>
<p>This is how most program will work.
<br>
<p>BTW, there are Bash's native commands to get a substring.
<br>
${string:position:length}. To get the first char just do
<br>
echo ${name:0:1}
<br>
See <a href="http://tldp.org/LDP/abs/html/string-manipulation.html">http://tldp.org/LDP/abs/html/string-manipulation.html</a>
<br>
<p>Also, is there any reason not have -h|--help officially documented in the
<br>
man page?
<br>
<p>There won't be any 1.1.1 release before a couple weeks obviously. So if
<br>
<span class="quotelev1">&gt; you want to upload some RPM packages before 2011, you will have to patch
</span><br>
<span class="quotelev1">&gt; 1.1 anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>All right, once we agree on the proposed changes I will create rpm based on
<br>
1.1 with few patches.
<br>
<p>Cheers,
<br>
Jirka
<br>
<p>On Mon, Dec 20, 2010 at 8:50 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jirka,
</span><br>
<span class="quotelev1">&gt; I have committed (locally) some changes that should address everything
</span><br>
<span class="quotelev1">&gt; you reported and that are ok to backport in 1.1. I improved your manpage
</span><br>
<span class="quotelev1">&gt; proposal too. See attached. By the way, I don't know if the manpage
</span><br>
<span class="quotelev1">&gt; should be named .1 or .sh.1.
</span><br>
<span class="quotelev1">&gt; There won't be any 1.1.1 release before a couple weeks obviously. So if
</span><br>
<span class="quotelev1">&gt; you want to upload some RPM packages before 2011, you will have to patch
</span><br>
<span class="quotelev1">&gt; 1.1 anyway.
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1745/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1746.php">Brice Goglin: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Previous message:</strong> <a href="1744.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1737.php">Brice Goglin: "[hwloc-devel] gather-topology fix and manpage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1746.php">Brice Goglin: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Reply:</strong> <a href="1746.php">Brice Goglin: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
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
