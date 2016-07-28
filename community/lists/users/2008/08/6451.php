<?
$subject_val = "Re: [OMPI users] How to get started?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 21:58:54 2008" -->
<!-- isoreceived="20080830015854" -->
<!-- sent="Sat, 30 Aug 2008 07:28:48 +0530" -->
<!-- isosent="20080830015848" -->
<!-- name="Anugraha Sankaranarayanan" -->
<!-- email="atomhouse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to get started?" -->
<!-- id="62da47a00808291858l37bf84aexe418e1dcad671d65_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1219936216.31503.44.camel_at_workhorse" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to get started?<br>
<strong>From:</strong> Anugraha Sankaranarayanan (<em>atomhouse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-29 21:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6452.php">Lee Amy: "[OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Previous message:</strong> <a href="6450.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, everyone.I have successfully installed the openmpi pkg in
<br>
my ubuntu hardy heron for gcc( HP Compaq Dual-core notebook) following
<br>
the instructions in the FAQ page.I still need to install the
<br>
libopenmpi-dev header file pkg.Will come back after doing that.
<br>
<p>Anugraha.S
<br>
<p>On 8/28/08, Adam C Powell IV &lt;hazelsct_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; With no comments in a week, can this go in?  Additional optional text
</span><br>
<span class="quotelev1">&gt; regarding an unofficial backport is inline below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Adam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2008-08-21 at 00:22 -0400, Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Okay, here goes a start:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Category: Platform Specific Questions | Debian/Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $q[] = &quot;Which Debian Open MPI packages do I need?&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $anchor[] = &quot;debian-package-contents&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $a[] = &quot;That depends on your use of Open MPI.  If you are running a
</span><br>
<span class="quotelev2">&gt;&gt; pre-compiled MPI binary in one process, you simply need [libopenmpi1].
</span><br>
<span class="quotelev2">&gt;&gt; To launch jobs in multiple processes, you need [openmpi-bin], which
</span><br>
<span class="quotelev2">&gt;&gt; includes [orted], [orterun] (_a.k.a._ [mpirun]), and [ompi_info].  To
</span><br>
<span class="quotelev2">&gt;&gt; compile programs, you need [libopenmpi-dev], or if you need debugging
</span><br>
<span class="quotelev2">&gt;&gt; symbols, then [libopenmpi-dbg] with debugging symbols.&lt;p&gt; Note: if you
</span><br>
<span class="quotelev2">&gt;&gt; install, or have ever installed, mpich and/or lam packages, please be
</span><br>
<span class="quotelev2">&gt;&gt; sure you use [update-alternatives] to make sure that the \&quot;[mpi]\&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;[mpirun]\&quot; symlinks point to the Open MPI entries.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $q[] = &quot;How do I run Open MPI programs in a Debian chroot environment?&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $anchor[] = &quot;debian-chroot-broken&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $a[] = &quot;As of version 1.2.7, this does not work; see &quot; .
</span><br>
<span class="quotelev2">&gt;&gt; aurchin_click(&quot;<a href="http://bugs.debian.org/494046">http://bugs.debian.org/494046</a>&quot;) . &quot;Debian bug
</span><br>
<span class="quotelev2">&gt;&gt; 494046&lt;/a&gt;.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $q[] = &quot;Is Ubuntu Linux a supported platform?&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $anchor[] = &quot;ubuntu&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $a[] = &quot;Unofficially, there are Open MPI packages in the Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;universe\&quot; package section.  Unfortunately, the packages in 8.04 LTS
</span><br>
<span class="quotelev2">&gt;&gt; Hardy Heron are buggy, so you should either get packages from Debian
</span><br>
<span class="quotelev2">&gt;&gt; Lenny or compile Open MPI yourself.&lt;p&gt; In general, Ubuntu gets its
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;universe\&quot; packages from Debian unstable at a time set by their
</span><br>
<span class="quotelev2">&gt;&gt; release schedules, a time generally not known to the Debian package
</span><br>
<span class="quotelev2">&gt;&gt; developers, so the quality of the Ubuntu packages is generally not as
</span><br>
<span class="quotelev2">&gt;&gt; good as that of the packages in a Debian release.&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an unofficial backport of the 1.2.7-rc1 release for Ubuntu
</span><br>
<span class="quotelev1">&gt; Hardy Heron which you can get by following the instructions at:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.opennovation.org/ubuntu/">http://www.opennovation.org/ubuntu/</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dirk, any comments?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Adam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 2008-08-15 at 15:43 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I love it when people submit FAQ text -- please do!  :-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Check out our guidelines on how to write FAQ entries:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      <a href="https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries">https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Aug 15, 2008, at 12:20 PM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; A number of distributors provide pre-compiled Open-MPI packages, so
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; one
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; doesn't need to go to the trouble of compiling it.  For example, on
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Debian GNU/Linux, Dirk Eddelbuettel has led a packaging effort such
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; that
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; &quot;apt-get install libopenmpi-dev openmpi-bin&quot; (or the equivalent from
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; aptitude or synaptic) gets everything one needs to compile and run an
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Open-MPI program.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Can someone add this to the FAQ?  I'd be glad to contribute a
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; paragraph,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; and update it as needed.  (E.g. Debian Lenny will have a working
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; version
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; of 1.2.7-rc2, though Ubuntu Hardy universe has AFAIR a buggy version
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; of
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 1.2.5...)
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; -Adam
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Fri, 2008-08-15 at 12:47 +0200, jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Hi Anughra
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Why don't you check the FAQ first:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; It answers may questions and also provides instruction to install
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Open-MPI and build MPI applications.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; And, yes, Open-MPI works with gcc.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; On Fri, Aug 15, 2008 at 12:25 PM, Anugraha Sankaranarayanan
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; &lt;atomhouse_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt; hi all,
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt;        I'm new to MPI.Can I install OpenMPI for my gcc?I'm using
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt; Ubuntu(hardy heron) on a Intel DualCore Notebook.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt;&gt; Anugraha.S
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Engineering consulting with open source tools
</span><br>
<span class="quotelev1">&gt; <a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6452.php">Lee Amy: "[OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Previous message:</strong> <a href="6450.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
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
