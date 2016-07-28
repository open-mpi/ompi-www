<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 02:12:01 2009" -->
<!-- isoreceived="20090818061201" -->
<!-- sent="Tue, 18 Aug 2009 16:11:45 +1000 (EST)" -->
<!-- isosent="20090818061145" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="211821457.1478531250575905556.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1814938192.1478471250575764219.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-08-18 02:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6670.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6670.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6670.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6688.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah, you're missing the third secret safety switch that prevents
</span><br>
<span class="quotelev1">&gt; hapless mortals from using this stuff accidentally!  :^)
</span><br>
<p>Sounds good to me. :-)
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I think you need to add
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --mca opal_paffinity_alone 1
</span><br>
<p><p>Yup, looks like that's it; it fails to launch with that..
<br>
<p><p>$ mpiexec --mca opal_paffinity_alone 1 -bysocket -bind-to-socket -mca odls_base_report_bindings 99 -mca odls_base_verbose 7 ./cpi-1.4
<br>
[tango095.vpac.org:18548] mca:base:select:( odls) Querying component [default]
<br>
[tango095.vpac.org:18548] mca:base:select:( odls) Query of component [default] set priority to 1
<br>
[tango095.vpac.org:18548] mca:base:select:( odls) Selected component [default]
<br>
[tango095.vpac.org:18548] [[33990,0],0] odls:launch: spawning child [[33990,1],0]
<br>
[tango095.vpac.org:18548] [[33990,0],0] odls:launch: spawning child [[33990,1],1]
<br>
[tango095.vpac.org:18548] [[33990,0],0] odls:default:fork binding child [[33990,1],0] to socket 0 cpus 000f
<br>
[tango095.vpac.org:18548] [[33990,0],0] odls:default:fork binding child [[33990,1],1] to socket 1 cpus 00f0
<br>
--------------------------------------------------------------------------
<br>
An attempt to set processor affinity has failed - please check to
<br>
ensure that your system supports such functionality. If so, then
<br>
this is probably something that should be reported to the OMPI developers.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it encountered an error
<br>
on node tango095.vpac.org. More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
<p><p>This is most likely because it's getting an error from the
<br>
kernel when trying to bind to a socket it's not permitted
<br>
to access.
<br>
<p>cheers,
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
<li><strong>Next message:</strong> <a href="6670.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6668.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6670.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6670.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6688.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
