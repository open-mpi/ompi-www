<?
$subject_val = "Re: [OMPI users] How to get started?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 00:22:29 2008" -->
<!-- isoreceived="20080821042229" -->
<!-- sent="Thu, 21 Aug 2008 00:22:15 -0400" -->
<!-- isosent="20080821042215" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to get started?" -->
<!-- id="1219292535.14498.114.camel_at_workhorse" -->
<!-- inreplyto="577A59B8-D1AC-4F4F-8A3A-2EC1D8F18FC6_at_cisco.com" -->
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
<strong>Date:</strong> 2008-08-21 00:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6404.php">Mehdi Bozzo-Rey: "[OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>Previous message:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="6354.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, here goes a start:
<br>
<p>Category: Platform Specific Questions | Debian/Ubuntu
<br>
<p>$q[] = &quot;Which Debian Open MPI packages do I need?&quot;;
<br>
<p>$anchor[] = &quot;debian-package-contents&quot;;
<br>
<p>$a[] = &quot;That depends on your use of Open MPI.  If you are running a
<br>
pre-compiled MPI binary in one process, you simply need [libopenmpi1].
<br>
To launch jobs in multiple processes, you need [openmpi-bin], which
<br>
includes [orted], [orterun] (_a.k.a._ [mpirun]), and [ompi_info].  To
<br>
compile programs, you need [libopenmpi-dev], or if you need debugging
<br>
symbols, then [libopenmpi-dbg] with debugging symbols.&lt;p&gt; Note: if you
<br>
install, or have ever installed, mpich and/or lam packages, please be
<br>
sure you use [update-alternatives] to make sure that the \&quot;[mpi]\&quot; and
<br>
\&quot;[mpirun]\&quot; symlinks point to the Open MPI entries.&quot;;
<br>
<p>$q[] = &quot;How do I run Open MPI programs in a Debian chroot environment?&quot;;
<br>
<p>$anchor[] = &quot;debian-chroot-broken&quot;;
<br>
<p>$a[] = &quot;As of version 1.2.7, this does not work; see &quot; .
<br>
aurchin_click(&quot;<a href="http://bugs.debian.org/494046">http://bugs.debian.org/494046</a>&quot;) . &quot;Debian bug
<br>
494046&lt;/a&gt;.&quot;;
<br>
<p>$q[] = &quot;Is Ubuntu Linux a supported platform?&quot;;
<br>
<p>$anchor[] = &quot;ubuntu&quot;;
<br>
<p>$a[] = &quot;Unofficially, there are Open MPI packages in the Ubuntu
<br>
\&quot;universe\&quot; package section.  Unfortunately, the packages in 8.04 LTS
<br>
Hardy Heron are buggy, so you should either get packages from Debian
<br>
Lenny or compile Open MPI yourself.&lt;p&gt; In general, Ubuntu gets its
<br>
\&quot;universe\&quot; packages from Debian unstable at a time set by their
<br>
release schedules, a time generally not known to the Debian package
<br>
developers, so the quality of the Ubuntu packages is generally not as
<br>
good as that of the packages in a Debian release.&quot;;
<br>
<p>Dirk, any comments?
<br>
<p>-Adam
<br>
<p>On Fri, 2008-08-15 at 15:43 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I love it when people submit FAQ text -- please do!  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check out our guidelines on how to write FAQ entries:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries">https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 15, 2008, at 12:20 PM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A number of distributors provide pre-compiled Open-MPI packages, so  
</span><br>
<span class="quotelev2">&gt; &gt; one
</span><br>
<span class="quotelev2">&gt; &gt; doesn't need to go to the trouble of compiling it.  For example, on
</span><br>
<span class="quotelev2">&gt; &gt; Debian GNU/Linux, Dirk Eddelbuettel has led a packaging effort such  
</span><br>
<span class="quotelev2">&gt; &gt; that
</span><br>
<span class="quotelev2">&gt; &gt; &quot;apt-get install libopenmpi-dev openmpi-bin&quot; (or the equivalent from
</span><br>
<span class="quotelev2">&gt; &gt; aptitude or synaptic) gets everything one needs to compile and run an
</span><br>
<span class="quotelev2">&gt; &gt; Open-MPI program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can someone add this to the FAQ?  I'd be glad to contribute a  
</span><br>
<span class="quotelev2">&gt; &gt; paragraph,
</span><br>
<span class="quotelev2">&gt; &gt; and update it as needed.  (E.g. Debian Lenny will have a working  
</span><br>
<span class="quotelev2">&gt; &gt; version
</span><br>
<span class="quotelev2">&gt; &gt; of 1.2.7-rc2, though Ubuntu Hardy universe has AFAIR a buggy version  
</span><br>
<span class="quotelev2">&gt; &gt; of
</span><br>
<span class="quotelev2">&gt; &gt; 1.2.5...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Adam
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2008-08-15 at 12:47 +0200, jody wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Anughra
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why don't you check the FAQ first:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It answers may questions and also provides instruction to install
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open-MPI and build MPI applications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And, yes, Open-MPI works with gcc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Aug 15, 2008 at 12:25 PM, Anugraha Sankaranarayanan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;atomhouse_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hi all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        I'm new to MPI.Can I install OpenMPI for my gcc?I'm using
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ubuntu(hardy heron) on a Intel DualCore Notebook.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Anugraha.S
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Engineering consulting with open source tools
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6403/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6404.php">Mehdi Bozzo-Rey: "[OMPI users] configure script: Fortran 77-90: $LDFLAGS not honored when checking whether gfortran and gfortran compilers are compatible: bug ?"</a>
<li><strong>Previous message:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="6354.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>Reply:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
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
