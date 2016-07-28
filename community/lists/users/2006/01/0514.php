<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 11:57:34 2006" -->
<!-- isoreceived="20060119165734" -->
<!-- sent="Thu, 19 Jan 2006 08:57:25 -0800" -->
<!-- isosent="20060119165725" -->
<!-- name="Kraig Winters" -->
<!-- email="kraig_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1" -->
<!-- id="8FAC20C3-0D12-4FE4-B494-0B8687A48E48_at_coast.ucsd.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C84A84DC-1ADF-4BEC-BBA5-84D6E43140F8_at_open-mpi.org" -->
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
<strong>From:</strong> Kraig Winters (<em>kraig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 11:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>In reply to:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. Since I submitted the report below, I tried installing
<br>
v1.01 on my powerbook which also had 10.4.3, the same compiler
<br>
versions etc. On the powerbook, ./configure --&gt; make --&gt; make install
<br>
worked brilliantly. I began exploring what could be different on the
<br>
2 machines. I checked the versions of everything that seemed
<br>
relevant (autoconf, env variables, sh etc) and everything matched.
<br>
The machines are so similar I was actually able to configure on the
<br>
powerbook and compile/install on the dual G5.
<br>
<p>Yesterday afternoon, I did a software update to 10.4.4 on the
<br>
dual G5 machine (the one on which I was having trouble).
<br>
This morning, to regenerate the config.status file for you, I ran the
<br>
same configure command:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/usr/local/openmpi
<br>
and everything worked fine!! make and sudo make install also
<br>
worked perfectly.
<br>
<p>Google searching on
<br>
<p>sed: unescaped newline inside  substitute pattern
<br>
<p>shows that this error crops up fairly often, in different
<br>
software packages, usually (always?) associated with
<br>
conftest, often w/  OS X but not always. Unfortunately
<br>
are no solutions posted, at least that I could find.
<br>
<p>In the end, I suspect it was the restart rather than
<br>
the OS upgrade that fixed the problem, though I can't
<br>
imagine what kind of problem got corrected. I wasn't
<br>
having any other problems though I was running all
<br>
sorts of different applications, including ./configure
<br>
on, for example, petsc.
<br>
<p>I'm confused but happy that things are working nicely.
<br>
Thanks for having a look.
<br>
Kraig
<br>
<p><p>On Jan 18, 2006, at 7:25 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry it's taken a few days to look at this -- I'm unable to
</span><br>
<span class="quotelev1">&gt; replicate your problem on a 10.4.3 machine, but I'm only using the
</span><br>
<span class="quotelev1">&gt; gnu compilers (the IBM compilers are not officially supported on
</span><br>
<span class="quotelev1">&gt; Tiger -- I wouldn't expect that to be the problem here, but anything
</span><br>
<span class="quotelev1">&gt; is possible).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send your config.status file? (please compress)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2006, at 8:48 PM, Kraig Winters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi.
</span><br>
<span class="quotelev2">&gt;&gt; I'm having trouble configuring v1.0.1 on a system
</span><br>
<span class="quotelev2">&gt;&gt; running OS X 10.4.3, using gcc/xlf. The configure script
</span><br>
<span class="quotelev2">&gt;&gt; is happy until it's in it's final stages and begins to
</span><br>
<span class="quotelev2">&gt;&gt; create the makefiles. Each time it attempts to create
</span><br>
<span class="quotelev2">&gt;&gt; a new makefile, the following error is produced:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/mca/ns/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; sed: 23: ./confstatBmI51v/subs-4.sed: unescaped newline inside
</span><br>
<span class="quotelev2">&gt;&gt; substitute pattern
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The configure then runs to completion but of course each and every
</span><br>
<span class="quotelev2">&gt;&gt; makefile is empty. I've enclosed the log and screen output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Kraig
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config_output.tar.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>In reply to:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
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
