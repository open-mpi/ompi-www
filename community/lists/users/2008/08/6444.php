<?
$subject_val = "Re: [OMPI users] How to get started?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 11:10:24 2008" -->
<!-- isoreceived="20080828151024" -->
<!-- sent="Thu, 28 Aug 2008 11:10:16 -0400" -->
<!-- isosent="20080828151016" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to get started?" -->
<!-- id="1219936216.31503.44.camel_at_workhorse" -->
<!-- inreplyto="1219292535.14498.114.camel_at_workhorse" -->
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
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 11:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6443.php">Tim Mattox: "[OMPI users] Open MPI v1.2.7 released"</a>
<li><strong>In reply to:</strong> <a href="6403.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With no comments in a week, can this go in?  Additional optional text
<br>
regarding an unofficial backport is inline below.
<br>
<p>Thanks,
<br>
Adam
<br>
<p>On Thu, 2008-08-21 at 00:22 -0400, Adam C Powell IV wrote:
<br>
<span class="quotelev1">&gt; Okay, here goes a start:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Category: Platform Specific Questions | Debian/Ubuntu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $q[] = &quot;Which Debian Open MPI packages do I need?&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $anchor[] = &quot;debian-package-contents&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $a[] = &quot;That depends on your use of Open MPI.  If you are running a
</span><br>
<span class="quotelev1">&gt; pre-compiled MPI binary in one process, you simply need [libopenmpi1].
</span><br>
<span class="quotelev1">&gt; To launch jobs in multiple processes, you need [openmpi-bin], which
</span><br>
<span class="quotelev1">&gt; includes [orted], [orterun] (_a.k.a._ [mpirun]), and [ompi_info].  To
</span><br>
<span class="quotelev1">&gt; compile programs, you need [libopenmpi-dev], or if you need debugging
</span><br>
<span class="quotelev1">&gt; symbols, then [libopenmpi-dbg] with debugging symbols.&lt;p&gt; Note: if you
</span><br>
<span class="quotelev1">&gt; install, or have ever installed, mpich and/or lam packages, please be
</span><br>
<span class="quotelev1">&gt; sure you use [update-alternatives] to make sure that the \&quot;[mpi]\&quot; and
</span><br>
<span class="quotelev1">&gt; \&quot;[mpirun]\&quot; symlinks point to the Open MPI entries.&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $q[] = &quot;How do I run Open MPI programs in a Debian chroot environment?&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $anchor[] = &quot;debian-chroot-broken&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $a[] = &quot;As of version 1.2.7, this does not work; see &quot; .
</span><br>
<span class="quotelev1">&gt; aurchin_click(&quot;<a href="http://bugs.debian.org/494046">http://bugs.debian.org/494046</a>&quot;) . &quot;Debian bug
</span><br>
<span class="quotelev1">&gt; 494046&lt;/a&gt;.&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $q[] = &quot;Is Ubuntu Linux a supported platform?&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $anchor[] = &quot;ubuntu&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $a[] = &quot;Unofficially, there are Open MPI packages in the Ubuntu
</span><br>
<span class="quotelev1">&gt; \&quot;universe\&quot; package section.  Unfortunately, the packages in 8.04 LTS
</span><br>
<span class="quotelev1">&gt; Hardy Heron are buggy, so you should either get packages from Debian
</span><br>
<span class="quotelev1">&gt; Lenny or compile Open MPI yourself.&lt;p&gt; In general, Ubuntu gets its
</span><br>
<span class="quotelev1">&gt; \&quot;universe\&quot; packages from Debian unstable at a time set by their
</span><br>
<span class="quotelev1">&gt; release schedules, a time generally not known to the Debian package
</span><br>
<span class="quotelev1">&gt; developers, so the quality of the Ubuntu packages is generally not as
</span><br>
<span class="quotelev1">&gt; good as that of the packages in a Debian release.&quot;;
</span><br>
<p>There is an unofficial backport of the 1.2.7-rc1 release for Ubuntu
<br>
Hardy Heron which you can get by following the instructions at:
<br>
<a href="http://www.opennovation.org/ubuntu/">http://www.opennovation.org/ubuntu/</a> .
<br>
<p><span class="quotelev1">&gt; Dirk, any comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 2008-08-15 at 15:43 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I love it when people submit FAQ text -- please do!  :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Check out our guidelines on how to write FAQ entries:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries">https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 15, 2008, at 12:20 PM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A number of distributors provide pre-compiled Open-MPI packages, so  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one
</span><br>
<span class="quotelev3">&gt; &gt; &gt; doesn't need to go to the trouble of compiling it.  For example, on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Debian GNU/Linux, Dirk Eddelbuettel has led a packaging effort such  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;apt-get install libopenmpi-dev openmpi-bin&quot; (or the equivalent from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; aptitude or synaptic) gets everything one needs to compile and run an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open-MPI program.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can someone add this to the FAQ?  I'd be glad to contribute a  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; paragraph,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and update it as needed.  (E.g. Debian Lenny will have a working  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; version
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of 1.2.7-rc2, though Ubuntu Hardy universe has AFAIR a buggy version  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.2.5...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Adam
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, 2008-08-15 at 12:47 +0200, jody wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi Anughra
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Why don't you check the FAQ first:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It answers may questions and also provides instruction to install
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Open-MPI and build MPI applications.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; And, yes, Open-MPI works with gcc.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Fri, Aug 15, 2008 at 12:25 PM, Anugraha Sankaranarayanan
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &lt;atomhouse_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; hi all,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;        I'm new to MPI.Can I install OpenMPI for my gcc?I'm using
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Ubuntu(hardy heron) on a Intel DualCore Notebook.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Anugraha.S
</span><br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6444/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
<li><strong>Previous message:</strong> <a href="6443.php">Tim Mattox: "[OMPI users] Open MPI v1.2.7 released"</a>
<li><strong>In reply to:</strong> <a href="6403.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
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
