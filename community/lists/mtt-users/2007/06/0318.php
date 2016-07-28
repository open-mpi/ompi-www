<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 09:40:05 2007" -->
<!-- isoreceived="20070607134005" -->
<!-- sent="Thu, 7 Jun 2007 16:40:00 +0300" -->
<!-- isosent="20070607134000" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test build failure" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA02B3BC_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9646F7F3-70AA-4CC5-BDB6-014B9D4EE0FC_at_cisco.com" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 09:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Reply:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I have those two files in my node (see attachment)
<br>
I don't know what the purpose of these file either but the configure
<br>
script of the ibm test uses them (see lines 1177 - 1193 in the configure
<br>
script)
<br>
<p>I'll try to remove them and see what happens.
<br>
<p>Thanks.
<br>
Sharon.  
<br>
<p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Thursday, June 07, 2007 2:56 PM
<br>
To: General user list for the MPI Testing Tool
<br>
Subject: Re: [MTT users] Test build failure
<br>
<p>This is really weird -- you're invoking configure with the proper  
<br>
command line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=mpicc CXX=mpic++ F77=mpif77
<br>
<p>But somehow it's getting &quot;gcc&quot; for the C compiler instead of &quot;mpicc&quot;,  
<br>
and therefore it can't find &lt;mpi.h&gt;.
<br>
<p>One thing that I notice in your config.log (and configure output)  
<br>
that I have not seen before is that at the very beginning of  
<br>
configure, it is loading up 2 &quot;site&quot; config files:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure: loading site script /usr/local/share/config.site
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure: loading site script /usr/local/etc/config.site
<br>
<p>I wonder if these are somehow overriding your choice of CC and  
<br>
setting it back to gcc.
<br>
<p>What are these files?  Do you need them?  I have no similar files in  
<br>
my autoconf installations.
<br>
<p><p>On Jun 7, 2007, at 3:27 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; Sorry for the delay. Attached the config.log from the last  
</span><br>
<span class="quotelev1">&gt; compilation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sharon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 06, 2007 2:50 PM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] Test build failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wow, that's weird.  Your INI file looks ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you dig down into the scratch directory and find the config.log
</span><br>
<span class="quotelev1">&gt; file that resulted from running this configure script?  I'd like to
</span><br>
<span class="quotelev1">&gt; see what the specific error was that caused it to fail to find mpi.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2007, at 7:39 AM, Sharon Melamed wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run MTT version 2.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the test build phase, some of the builds fails. For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The build output of the ibm test looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: ./configure CC=mpicc CXX=mpic++ F77=mpif77
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running command: /tmp/IhYOhJexxR
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:configure: loading site script /usr/local/share/config.site
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:configure: loading site script /usr/local/etc/config.site
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:Configuring Open MPI/IBM test suite
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for a BSD-compatible install... OUT:(cached) OUT:/usr/
</span><br>
<span class="quotelev2">&gt;&gt; bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether build environment is sane... OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for gawk... OUT:(cached) OUT:gawk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether make sets $(MAKE)... OUT:(cached) OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking build system type... OUT:(cached) OUT:x86_64-unknown-
</span><br>
<span class="quotelev2">&gt;&gt; linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking host system type... OUT:x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for gcc... OUT:(cached) OUT:gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for C compiler default output file name... OUT:a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether the C compiler works... OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether we are cross compiling... OUT:no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for suffix of executables... OUT:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for suffix of object files... OUT:(cached) OUT:o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether we are using the GNU C compiler... OUT:
</span><br>
<span class="quotelev2">&gt;&gt; (cached) OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether gcc accepts -g... OUT:(cached) OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for gcc option to accept ANSI C... OUT:(cached)
</span><br>
<span class="quotelev2">&gt;&gt; OUT:none needed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for style of include used by make... OUT:GNU
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking dependency style of gcc... OUT:(cached) OUT:gcc3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether we are using the GNU C++ compiler... OUT:
</span><br>
<span class="quotelev2">&gt;&gt; (cached) OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether mpic++ accepts -g... OUT:(cached) OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking dependency style of mpic++... OUT:(cached) OUT:gcc3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for mpif77... OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether we are using the GNU Fortran 77 compiler...
</span><br>
<span class="quotelev2">&gt;&gt; OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking whether mpif77 accepts -g... OUT:yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for ranlib... OUT:(cached) OUT:ranlib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for mpi.h... OUT:no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:configure: error: cannot continue -- cannot find &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:make: *** OUT:No targets specified and no makefile foundOUT:.
</span><br>
<span class="quotelev2">&gt;&gt; Stop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Command complete, exit status: 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you can see, the configure script cant find the mpi.h file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have this problem in other builds as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached my ini file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sharon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;sharon-test-2.1.ini&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<span class="quotelev1">&gt; &lt;config.log&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0318/config.site">config.site</a>
</ul>
<!-- attachment="config.site" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Reply:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
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
