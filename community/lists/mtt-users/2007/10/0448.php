<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 09:58:49 2007" -->
<!-- isoreceived="20071010135849" -->
<!-- sent="Wed, 10 Oct 2007 09:58:44 -0400" -->
<!-- isosent="20071010135844" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;quot;Passed&amp;quot; result on a run-time linker error" -->
<!-- id="20071010135844.GA10192_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6A78BE78-7426-4CDC-9950-D6EE5AA3C786_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 09:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>Previous message:</strong> <a href="0447.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>In reply to:</strong> <a href="0447.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>Reply:</strong> <a href="0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Oct/06/2007 07:59:43PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; A few questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - what's your &quot;pass&quot; criteria?  Is it looking at wifexited and  
</span><br>
<span class="quotelev1">&gt; wexitstatus?
</span><br>
<p>I have this: 
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;pass = &amp;eq(&amp;test_wexitstatus(), 0)
<br>
<p>I'm guessing it should it be changed to this?
<br>
<p>&nbsp;&nbsp;pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
<br>
<p><span class="quotelev1">&gt; - what does solaris return as an exit code in this case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Looks like 137.
<br>
<p>&nbsp;&nbsp;$ cc -G -o libbar.so bar.c
<br>
&nbsp;&nbsp;$ file libbar.so
<br>
&nbsp;&nbsp;libbar.so:      ELF 32-bit MSB dynamic lib SPARC32PLUS Version 1, V8+ Required, dynamically linked, not stripped
<br>
&nbsp;&nbsp;$ cc foo.c -L`pwd` -R`pwd` -lbar -o foo                                                                                            
<br>
&nbsp;&nbsp;$ ldd foo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libbar.so =&gt;     /home/emallove/tmp/libbar.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;$ ./foo
<br>
&nbsp;&nbsp;$ echo $?
<br>
&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;$ rm libbar.so
<br>
&nbsp;&nbsp;$ ldd foo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libbar.so =&gt;     (file not found)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;$ ./foo
<br>
&nbsp;&nbsp;ld.so.1: foo: fatal: libbar.so: open failed: No such file or directory
<br>
&nbsp;&nbsp;Killed
<br>
&nbsp;&nbsp;$ echo $?
<br>
&nbsp;&nbsp;137
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; On Sep 27, 2007, at 4:22 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some trivial tests outputted the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   ld.so.1: orterun: fatal: libopen-pal.so.0: open failed: No such  
</span><br>
<span class="quotelev2">&gt; &gt; file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=394">http://www.open-mpi.org/mtt/index.php?do_redir=394</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How could these tests result in &quot;pass&quot;?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I attached an mttdatabase debug file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ld.so.1-errors-with-pass.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>Previous message:</strong> <a href="0447.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>In reply to:</strong> <a href="0447.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<li><strong>Reply:</strong> <a href="0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
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
