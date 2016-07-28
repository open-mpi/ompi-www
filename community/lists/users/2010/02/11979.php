<?
$subject_val = "Re: [OMPI users] Parallel file write in fortran (+mpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 18:40:06 2010" -->
<!-- isoreceived="20100202234006" -->
<!-- sent="Tue, 2 Feb 2010 17:40:01 -0600" -->
<!-- isosent="20100202234001" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel file write in fortran (+mpi)" -->
<!-- id="876512661002021540s50219adtb78362fd045aef15_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E9CEE3A4-57A1-40EE-A657-0CDB53D86042_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel file write in fortran (+mpi)<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 18:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11980.php">David Singleton: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11980.php">David Singleton: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know it's wrong, but I don't think it is forbidden.... (which I
<br>
guess is what you are saying).
<br>
<p>On Tue, Feb 2, 2010 at 5:31 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; +1 on Nick's responses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK, if you don't mind getting garbage in the output file, it should be fine to do. &#194;&#160;Specifically: it should not cause OS issues (crash, reboot, corrupted filesystem, etc.) to do this -- but the file contents will likely be garbage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, this situation likely falls into the &quot;Doc, it hurts when I do this...&quot; category. &#194;&#160;Meaning: you know it's wrong, so you probably shouldn't be doing it anyway. &#194;&#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2010, at 4:50 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Laurence,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know whether it's as bad as a deadly sin, but for us parallel writes are a huge problem and we get complete garbage in the file. Take a look at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Implementing MPI-IO Atomic Mode and Shared File Pointers Using MPI One-Sided Communication, Robert Latham,Robert Ross, Rajeev Thakur, International Journal of High Performance Computing Applications, 21, 132 (2007).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They describe an implemenation of a &quot;mutex&quot; like object in MPI. If you protect writes to the file with an exclusive lock you can serialize the writes and make use of NFS's close to open cache coherence.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 2, 2010 at 08:27, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a question concerning having many processors in a mpi job all
</span><br>
<span class="quotelev2">&gt;&gt; write to the same file -- not using mpi calls but with standard
</span><br>
<span class="quotelev2">&gt;&gt; fortran I/O. I know that this can lead to consistency issues, but it
</span><br>
<span class="quotelev2">&gt;&gt; can also lead to OS issues with some flavors of nfs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At least in fortran, there is nothing &quot;wrong&quot; with doing this. My
</span><br>
<span class="quotelev2">&gt;&gt; question is whether this is &quot;One of the Seven Deadly Sins&quot; of mpi
</span><br>
<span class="quotelev2">&gt;&gt; programming, or just frowned on. (That is, it should be OK even if it
</span><br>
<span class="quotelev2">&gt;&gt; leads to nonsense files, and not lead to OS issues.) If it is a sin, I
</span><br>
<span class="quotelev2">&gt;&gt; would appreciate a link to where this is spelt out in some &quot;official&quot;
</span><br>
<span class="quotelev2">&gt;&gt; document or similar.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev2">&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev2">&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev2">&gt;&gt; Northwestern University
</span><br>
<span class="quotelev2">&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev2">&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev2">&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev2">&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev2">&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev2">&gt;&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev2">&gt;&gt; scattering and imaging to study the structure of matter.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11980.php">David Singleton: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11980.php">David Singleton: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
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
