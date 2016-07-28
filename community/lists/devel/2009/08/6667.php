<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 00:23:32 2009" -->
<!-- isoreceived="20090818042332" -->
<!-- sent="Tue, 18 Aug 2009 14:23:23 +1000 (EST)" -->
<!-- isosent="20090818042323" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="967576726.1477701250569403375.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1251609462.1477641250569256731.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 00:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6666.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe in reply to:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Chris
</span><br>
<p>Hiya,
<br>
<p><span class="quotelev1">&gt; The devel trunk has all of this in it - you can get that tarball from 
</span><br>
<span class="quotelev1">&gt; the OMPI web site (take the nightly snapshot).
</span><br>
<p>OK, grabbed that (1.4a1r21825). Configured with:
<br>
<p>./configure --prefix=$FOO --with-openib --with-tm=/usr/
<br>
local/torque/latest --enable-static  --enable-shared
<br>
<p>It built &amp; installed OK, but when running a trivial example
<br>
with it I don't see evidence for that code getting called.
<br>
Perhaps I'm not passing the correct options ?
<br>
<p>$ mpiexec -bysocket -bind-to-socket -mca odls_base_report_bindings 99 -mca odls_base_verbose 7 ./cpi-1.4
<br>
[tango095.vpac.org:16976] mca:base:select:( odls) Querying component [default]
<br>
[tango095.vpac.org:16976] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[tango095.vpac.org:16976] mca:base:select:( odls) Selected component [default]
<br>
[tango095.vpac.org:16976] [[36578,0],0] odls:launch: spawning child [[36578,1],0]
<br>
[tango095.vpac.org:16976] [[36578,0],0] odls:launch: spawning child [[36578,1],1]
<br>
[tango095.vpac.org:16976] [[36578,0],0] odls:launch: spawning child [[36578,1],2]
<br>
[tango095.vpac.org:16976] [[36578,0],0] odls:launch: spawning child [[36578,1],3]
<br>
Process 0 on tango095.vpac.org
<br>
Process 1 on tango095.vpac.org
<br>
Process 2 on tango095.vpac.org
<br>
Process 3 on tango095.vpac.org
<br>
^Cmpiexec: killing job...
<br>
<p>Increasing odls_base_verbose only seems to add the environment being
<br>
passed to the child processes. :-(
<br>
<p>I'm pretty sure I've got the right code as ompi_info -a
<br>
reports the debug setting from the patch:
<br>
<p>MCA odls: parameter &quot;odls_base_report_bindings&quot; (current value: &lt;0&gt;, data source: default value)
<br>
<p><span class="quotelev1">&gt; I plan to work on cpuset support beginning Tues morning.
</span><br>
<p>Great, anything I can help with then please let me know,
<br>
I'll be back from leave by then.
<br>
<p>All the best,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6666.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe in reply to:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
