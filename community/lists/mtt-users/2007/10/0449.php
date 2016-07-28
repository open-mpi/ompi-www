<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 08:43:34 2007" -->
<!-- isoreceived="20071011124334" -->
<!-- sent="Thu, 11 Oct 2007 08:43:18 -0400" -->
<!-- isosent="20071011124318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;quot;Passed&amp;quot; result on a run-time linker error" -->
<!-- id="3CE71BCF-4BE2-485D-9E44-A46462272FED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071010135844.GA10192_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-11 08:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/11/0450.php">Karol Mroz: "[MTT users] unable to pull tests"</a>
<li><strong>Previous message:</strong> <a href="0448.php">Ethan Mallove: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>In reply to:</strong> <a href="0448.php">Ethan Mallove: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 10, 2007, at 9:58 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - what's your &quot;pass&quot; criteria?  Is it looking at wifexited and
</span><br>
<span class="quotelev2">&gt;&gt; wexitstatus?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   pass = &amp;eq(&amp;test_wexitstatus(), 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing it should it be changed to this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
</span><br>
<p>Yes -- try this.
<br>
<p><span class="quotelev2">&gt;&gt; - what does solaris return as an exit code in this case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like 137.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ cc -G -o libbar.so bar.c
</span><br>
<span class="quotelev1">&gt;   $ file libbar.so
</span><br>
<span class="quotelev1">&gt;   libbar.so:      ELF 32-bit MSB dynamic lib SPARC32PLUS Version 1,  
</span><br>
<span class="quotelev1">&gt; V8+ Required, dynamically linked, not stripped
</span><br>
<span class="quotelev1">&gt;   $ cc foo.c -L`pwd` -R`pwd` -lbar -o foo
</span><br>
<span class="quotelev1">&gt;   $ ldd foo
</span><br>
<span class="quotelev1">&gt;           libbar.so =&gt;     /home/emallove/tmp/libbar.so
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt;   $ ./foo
</span><br>
<span class="quotelev1">&gt;   $ echo $?
</span><br>
<span class="quotelev1">&gt;   0
</span><br>
<span class="quotelev1">&gt;   $ rm libbar.so
</span><br>
<span class="quotelev1">&gt;   $ ldd foo
</span><br>
<span class="quotelev1">&gt;           libbar.so =&gt;     (file not found)
</span><br>
<span class="quotelev1">&gt;           ...
</span><br>
<span class="quotelev1">&gt;   $ ./foo
</span><br>
<span class="quotelev1">&gt;   ld.so.1: foo: fatal: libbar.so: open failed: No such file or  
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt;   Killed
</span><br>
<span class="quotelev1">&gt;   $ echo $?
</span><br>
<span class="quotelev1">&gt;   137
</span><br>
<p>I honestly don't remember if $? is the exit code or the aggregate  
<br>
return (i.e., it includes the bit indicating died-due-to-signal-or-not).
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/11/0450.php">Karol Mroz: "[MTT users] unable to pull tests"</a>
<li><strong>Previous message:</strong> <a href="0448.php">Ethan Mallove: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>In reply to:</strong> <a href="0448.php">Ethan Mallove: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
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
