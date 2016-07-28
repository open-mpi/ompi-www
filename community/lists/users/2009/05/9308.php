<?
$subject_val = "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 08:55:01 2009" -->
<!-- isoreceived="20090512125501" -->
<!-- sent="Tue, 12 May 2009 14:54:56 +0200" -->
<!-- isosent="20090512125456" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)" -->
<!-- id="e76aa17f0905120554o58f705bfmad840fb129136064_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6BB7BE2C-C521-4EC7-9879-15848054EE76_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 08:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>Previous message:</strong> <a href="9307.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9307.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you a lot for this.
<br>
<p>I've just checked everything again, recompiled my code as well (I'm
<br>
using SCons so it detects that the headers and the libraries changed)
<br>
and it works without a warning.
<br>
<p>Matthieu
<br>
<p>2009/5/12 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On May 12, 2009, at 8:17 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, this is indeed the case. I'll try to clean the tree (I have
</span><br>
<span class="quotelev2">&gt;&gt; several other package and deleted the original 1.2.8 package) and test
</span><br>
<span class="quotelev2">&gt;&gt; again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This misleading libltdl error message continues to bite us over and over
</span><br>
<span class="quotelev1">&gt; again (users and developers alike), so I just put in a workaround with some
</span><br>
<span class="quotelev1">&gt; heuristics to try to print a better error message in cases like yours. &#160;Now
</span><br>
<span class="quotelev1">&gt; you'll see something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [foo.example.com:24273] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/bogus/lib/openmpi/mca_btl_openib: perhaps a missing symbol,
</span><br>
<span class="quotelev1">&gt; or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changeset here (Shiqing tells me it'll work on Windows, too -- MTT will tell
</span><br>
<span class="quotelev1">&gt; us for sure :-) ):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="https://svn.open-mpi.org/trac/ompi/changeset/21214">https://svn.open-mpi.org/trac/ompi/changeset/21214</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I filed to move it to v1.3.3 here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1917">https://svn.open-mpi.org/trac/ompi/ticket/1917</a>
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
Information System Engineer, Ph.D.
Website: <a href="http://matthieu-brucher.developpez.com/">http://matthieu-brucher.developpez.com/</a>
Blogs: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a> and <a href="http://blog.developpez.com/?blog=92">http://blog.developpez.com/?blog=92</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>Previous message:</strong> <a href="9307.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9307.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
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
