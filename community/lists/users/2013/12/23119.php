<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 15:52:47 2013" -->
<!-- isoreceived="20131202205247" -->
<!-- sent="Mon, 2 Dec 2013 15:52:46 -0500" -->
<!-- isosent="20131202205246" -->
<!-- name="Raiden Hasegawa" -->
<!-- email="raiden.hasegawa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting." -->
<!-- id="CAOkcFK37rG1Rd7gTnR=DDKKcrB7HLYYdzjE8CkYJYY2jSuyM=A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CFA34528-25B2-496A-B101-24432D5B9A38_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting.<br>
<strong>From:</strong> Raiden Hasegawa (<em>raiden.hasegawa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 15:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, what I meant is that when running:
<br>
<p>/usr/local/bin/gfortran -o conftest    conftest.f
<br>
<p>outside of configure it does work.
<br>
<p>I don't think I have DYLD_LIBRARY_PATH set, but I will check when I get
<br>
back to my home computer.
<br>
<p><p>On Mon, Dec 2, 2013 at 3:47 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 2, 2013, at 3:00 PM, Raiden Hasegawa &lt;raiden.hasegawa_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Jeff.  The compiler does in fact work when running the
</span><br>
<span class="quotelev1">&gt; troublesome line in ./configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Errr... I'm not sure how to parse that.  The config.log you cited shows
</span><br>
<span class="quotelev1">&gt; that the compiler does *not* work in configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; configure:29606: checking if Fortran compiler works
</span><br>
<span class="quotelev1">&gt; configure:29635: /usr/local/bin/gfortran -o conftest    conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;__gfortran_set_options&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in cccSAmNO.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:29635: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; |       program main
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |       end
</span><br>
<span class="quotelev1">&gt; configure:29651: result: no
</span><br>
<span class="quotelev1">&gt; configure:29665: error: Could not run a simple Fortran program.  Aborting.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you typo and mean that the compiler does work when outside of
</span><br>
<span class="quotelev1">&gt; configure, and fails when it is inside configure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't set either FC, FCFLAGS nor do I have LD_LIBRARY_PATH set in my
</span><br>
<span class="quotelev1">&gt; .bashrc.  Do you have any thoughts on what environmental variable may trip
</span><br>
<span class="quotelev1">&gt; this up?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have DYLD_LIBRARY_PATH set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
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
