<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  7 05:00:06 2006" -->
<!-- isoreceived="20061107100006" -->
<!-- sent="Mon, 6 Nov 2006 11:34:55 -0500" -->
<!-- isosent="20061106163455" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] reporter weirdness" -->
<!-- id="20061106163455.GA54858_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7F5B676C-78A9-4249-90DD-87100F437AB3_at_cisco.com" -->
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
<strong>Date:</strong> 2006-11-06 11:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0207.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>In reply to:</strong> <a href="0202.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0207.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Reply:</strong> <a href="0207.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov/06/2006 11:15:04AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Still weird, though, that it shows 2 failures but then
</span><br>
<span class="quotelev1">&gt; only 1 output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We should fix that in the 2.0 reporter...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The outputs ''are'' identical (see below), so GROUP BY is
<br>
doing its job. We could rethink how we use the aggregating
<br>
functions if you'd rather show seperate rows regardless of
<br>
whether stdout, stderr, env, etc. are identical.
<br>
<p>---------------------------------------------------------
<br>
Config args:
<br>
N/A
<br>
<p>Stdout:
<br>
Configuring Open MPI/IBM test suite
<br>
checking for a BSD-compatible install...
<br>
/pkg/gnu/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking build system type... i386-pc-solaris2.10
<br>
checking host system type... i386-pc-solaris2.10
<br>
checking for gcc... mpicc
<br>
checking for C compiler default output file name...
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log for more details.
<br>
make: *** No targets specified and no makefile found. Stop.
<br>
<p>Stderr:
<br>
N/A
<br>
<p>Env:
<br>
N/A
<br>
<p>Test duration:
<br>
00:00:03
<br>
---------------------------------------------------------
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2006, at 10:31 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Nov/06/2006 09:08:32AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is odd:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://tinyurl.com/y4aetm">http://tinyurl.com/y4aetm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It shows &quot;Fail / 2&quot; for some of the tests, but I only see one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; output.  What does that mean?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you set &quot;Date Aggregattion&quot; to &quot;Second-by-Second&quot; it
</span><br>
<span class="quotelev2">&gt; &gt; shows I ran the same tests multiple times during the past 24
</span><br>
<span class="quotelev2">&gt; &gt; hrs (which happens because I'm using a fresh scratch tree
</span><br>
<span class="quotelev2">&gt; &gt; each time). (See <a href="http://tinyurl.com/y9fyly">http://tinyurl.com/y9fyly</a>.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; E.g.,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2006-11-05 17:05:25 sun4u SunOS 5.10 ...v1.2 ..r12431 ..64-bit ibm  
</span><br>
<span class="quotelev2">&gt; &gt; sun 5.7 0 1
</span><br>
<span class="quotelev2">&gt; &gt; 2006-11-05 21:39:18 sun4u SunOS 5.10 ...v1.2 ..r12431 ..64-bit ibm  
</span><br>
<span class="quotelev2">&gt; &gt; sun 5.7 0 1
</span><br>
<span class="quotelev2">&gt; &gt; 2006-11-06 08:39:52 sun4u SunOS 5.10 ...v1.2 ..r12431 ..64-bit ibm  
</span><br>
<span class="quotelev2">&gt; &gt; sun 5.7 0 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev1">&gt; Server Virtualization Business Unit
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
<li><strong>Next message:</strong> <a href="0207.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>In reply to:</strong> <a href="0202.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0207.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Reply:</strong> <a href="0207.php">Jeff Squyres: "Re: [MTT users] reporter weirdness"</a>
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
