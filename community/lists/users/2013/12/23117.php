<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 15:00:46 2013" -->
<!-- isoreceived="20131202200046" -->
<!-- sent="Mon, 2 Dec 2013 15:00:44 -0500" -->
<!-- isosent="20131202200044" -->
<!-- name="Raiden Hasegawa" -->
<!-- email="raiden.hasegawa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting." -->
<!-- id="CAOkcFK104b=Ax=kcc4UYTTCWzhA90DWpc9_TQ3sgdWmJMeeoMA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6AD62DBE-EB96-400D-A3A1-1C41D4B3F5CF_at_cisco.com" -->
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
<strong>Date:</strong> 2013-12-02 15:00:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff.  The compiler does in fact work when running the troublesome
<br>
line in ./configure. I haven't set either FC, FCFLAGS nor do I have
<br>
LD_LIBRARY_PATH set in my .bashrc.  Do you have any thoughts on what
<br>
environmental variable may trip this up?
<br>
<p>Raiden
<br>
<p><p>On Mon, Dec 2, 2013 at 11:23 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; It looks like your Fortran compiler installation is borked.  Have you
</span><br>
<span class="quotelev1">&gt; tested with the same test program that configure used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        program main
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Put that in a simple &quot;conftest.f&quot; file, and try the same invocation line
</span><br>
<span class="quotelev1">&gt; that configure used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /usr/local/bin/gfortran -o conftest    conftest.f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that works and does not yield the same error that configure saw, then
</span><br>
<span class="quotelev1">&gt; perhaps there is some environment variable(s) that are/were present when
</span><br>
<span class="quotelev1">&gt; you run configure that are not present when you try the test manually...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2013, at 8:51 AM, Raiden Hasegawa &lt;raiden.hasegawa_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All, new to the list here.  I'm running into an error while trying to
</span><br>
<span class="quotelev1">&gt; configure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; shell$ ./configure --prefix=/usr/local/Cellar/open-mpi/1.7.3
</span><br>
<span class="quotelev1">&gt; --disable-silent-rules --enable-ipv6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is a blurb from the config.log (which I have attached as well):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:29606: checking if Fortran compiler works
</span><br>
<span class="quotelev2">&gt; &gt; configure:29635: /usr/local/bin/gfortran -o conftest    conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev2">&gt; &gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev2">&gt; &gt;   &quot;__gfortran_set_options&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt; &gt;       _main in cccSAmNO.o
</span><br>
<span class="quotelev2">&gt; &gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev2">&gt; &gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt; configure:29635: $? = 1
</span><br>
<span class="quotelev2">&gt; &gt; configure: program exited with status 1
</span><br>
<span class="quotelev2">&gt; &gt; configure: failed program was:
</span><br>
<span class="quotelev2">&gt; &gt; |       program main
</span><br>
<span class="quotelev2">&gt; &gt; |
</span><br>
<span class="quotelev2">&gt; &gt; |       end
</span><br>
<span class="quotelev2">&gt; &gt; configure:29651: result: no
</span><br>
<span class="quotelev2">&gt; &gt; configure:29665: error: Could not run a simple Fortran program.
</span><br>
<span class="quotelev1">&gt;  Aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have tested my gfortran compiler on some simple &quot;Hello World&quot; programs
</span><br>
<span class="quotelev1">&gt; and it works just fine.  I am having trouble diagnosing the problem and any
</span><br>
<span class="quotelev1">&gt; and all help would be appreciated.  Here are my specs:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mac os x 10.8.4
</span><br>
<span class="quotelev2">&gt; &gt; gcc and gfortran 4.8.2 (both installed using homebrew)
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi 1.7.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Raiden
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23118.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
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
