<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 03:57:32 2006" -->
<!-- isoreceived="20060821075732" -->
<!-- sent="Mon, 21 Aug 2006 09:57:36 +0200" -->
<!-- isosent="20060821075736" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] A few notes on IPv6 status" -->
<!-- id="20060821075736.GH2730_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060819210726.GE2730_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-21 03:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1002.php">George Bosilca: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="1000.php">Ralf Wildenhues: "[OMPI devel] exit declaration in configure tests"</a>
<li><strong>In reply to:</strong> <a href="0998.php">Adrian Knoth: "[OMPI devel] A few notes on IPv6 status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Aug 19, 2006 at 11:07:26PM +0200, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<p>Hi!
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Do you agree with a resulting URL like tcp://[2001:6f8::1]:port or
</span><br>
<span class="quotelev1">&gt; do you think it should be tcp6://?
</span><br>
<p>I've changed this to tcp6://, because orte/mca/oob/tcp/oob_tcp.c
<br>
contains the following lines:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* setup the IP address for storage */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp = mca_oob.oob_get_addr();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp2 = strrchr(tmp, '/') + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp3 = strrchr(tmp, ':');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == tmp2 || NULL == tmp3) {
<br>
<p>The old way (tcp://[IPv6]) would require code to remove
<br>
'[' and ']' iff af_family == AF_INET6.
<br>
<p>tcp6:// does not need any special treatment.
<br>
<p><span class="quotelev1">&gt; IPv6 interface discovery (talking about opal/util/if.c again)
</span><br>
<span class="quotelev1">&gt; needs special treatment on some systems. Right now, I have
</span><br>
<span class="quotelev1">&gt; -DLINUX_IPV6 and I'd probably need to catch more (at least
</span><br>
<span class="quotelev1">&gt; HPUX defines SIOCGLIFADDR which is also present on OpenBSD).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I'd have something like -DLINUX, I wouldn't need to
</span><br>
<span class="quotelev1">&gt; introduce more defines (like -DLINUX_IPV6 oder -DBSD_IPV6).
</span><br>
<p>I'm now using the compiler defines:
<br>
<p>#ifdef __linux__
<br>
#endif
<br>
<p><p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Fighting for peace is like fucking for virginity!
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1002.php">George Bosilca: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="1000.php">Ralf Wildenhues: "[OMPI devel] exit declaration in configure tests"</a>
<li><strong>In reply to:</strong> <a href="0998.php">Adrian Knoth: "[OMPI devel] A few notes on IPv6 status"</a>
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
