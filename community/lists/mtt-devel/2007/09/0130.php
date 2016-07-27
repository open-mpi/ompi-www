<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 10:25:22 2007" -->
<!-- isoreceived="20070925142522" -->
<!-- sent="Tue, 25 Sep 2007 10:25:08 -0400" -->
<!-- isosent="20070925142508" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] if whatami is missing..." -->
<!-- id="A5BDA493-5D7D-4B1A-BF49-808B939B7BB3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070925141526.GB1913_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 10:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>In reply to:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2007, at 10:15 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; How about we first go with Plan C: uname (if it's
</span><br>
<span class="quotelev1">&gt; available).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   platform_type = &amp;shell(&quot;uname -p&quot;)
</span><br>
<span class="quotelev1">&gt;   platform_hardware = &amp;shell(&quot;uname -m&quot;)
</span><br>
<span class="quotelev1">&gt;   os_name = &amp;shell(&quot;uname -s&quot;)
</span><br>
<span class="quotelev1">&gt;   os_version = &amp;shell(&quot;uname -v&quot;)
</span><br>
<p>Hmm.  Not bad, but it still is a bit odd.  Here's what I get:
<br>
<p>OSX/macbook pro (intel chip):
<br>
-----------------------------
<br>
uname -p: i386
<br>
uname -m: i386
<br>
uname -s: Darwin
<br>
uname -v: Darwin Kernel Version 8.10.1: Wed May 23 16:33:00 PDT 2007;  
<br>
root:xnu-792.22.5~1/RELEASE_I386
<br>
<p>whatami -t: darwin-macosx_10.4-ia32
<br>
whatami -m: ia32
<br>
whatami -n: Darwin
<br>
whatami -r: Darwin 8.10.1
<br>
<p>Linux/RHEL4u4 (64 bit xeon):
<br>
--------------
<br>
uname -p: x86_64
<br>
uname -m: x86_64
<br>
uname -s: Linux
<br>
uname -v: #1 SMP Wed Jul 12 23:32:02 EDT 2006
<br>
<p>whatami -t: linux-rhel4-x86_64
<br>
whatami -m: x86_64
<br>
whatami -n: Linux
<br>
whatami -r: Linux 2.6.9-42.ELsmp
<br>
<p>What do you get on your Solaris platforms?
<br>
<p>It looks like both of them will have slight inaccuracies / not- 
<br>
entirely-clear values (e.g., uname -p and -m seem to return the same  
<br>
values, but I don't know why whatami returns &quot;ia32&quot; for the MacBook  
<br>
Pro, nor do I know how &quot;Darwin 8.10.1&quot; maps to &quot;OS X 10.4.10&quot;).
<br>
<p><span class="quotelev1">&gt; Otherwise default to &quot;unknown&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the we go down this list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. User-specified in INI
</span><br>
<span class="quotelev1">&gt;   2. whatami
</span><br>
<span class="quotelev1">&gt;   3. uname
</span><br>
<span class="quotelev1">&gt;   4. &quot;unknown&quot;
</span><br>
<p>This sounds reasonable to me.  I'll implement it.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
<li><strong>In reply to:</strong> <a href="0129.php">Ethan Mallove: "Re: [MTT devel] if whatami is missing..."</a>
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
