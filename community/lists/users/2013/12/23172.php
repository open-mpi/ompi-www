<?
$subject_val = "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 10 11:55:19 2013" -->
<!-- isoreceived="20131210165519" -->
<!-- sent="Tue, 10 Dec 2013 11:55:18 -0500" -->
<!-- isosent="20131210165518" -->
<!-- name="Raiden Hasegawa" -->
<!-- email="raiden.hasegawa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting." -->
<!-- id="CAOkcFK3ro=RzQcMxXq+OS0YzpX_6amd8ap4MK+ju50Z6n2s8pg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A09751F-5FAD-413B-BDBB-B00684D8C1AA_at_cisco.com" -->
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
<strong>Date:</strong> 2013-12-10 11:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23173.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23171.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
<p>It turns out this was an issue with Homebrew (package manager for mac) and
<br>
not related to open-mpi...
<br>
<p>If any Homebrew users have this issue in the future when installing
<br>
open-mpi here's what happened: there were some non-Homebrewed 32-bit
<br>
gfortran libraries floating around in the lib directory Homebrew uses,
<br>
which were being called instead of the correct Homebrewed 64 bit libraries.
<br>
<p>Best,
<br>
<p>Raiden
<br>
<p><p>On Mon, Dec 2, 2013 at 4:02 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I did notice that you have an oddity:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I see /usr/local/opt/gfortran/bin in your PATH (line 41 in config.log)
</span><br>
<span class="quotelev1">&gt; - I see that configure is invoking /usr/local/bin/gfortran (line 7630 and
</span><br>
<span class="quotelev1">&gt; elsewhere in config.log)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That implies that you have 2 different gfortrans installed on your
</span><br>
<span class="quotelev1">&gt; machine, one of which may be faulty, or may accidentally be referring to
</span><br>
<span class="quotelev1">&gt; the libraries of the other (therefore resulting in Badness).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2013, at 3:52 PM, Raiden Hasegawa &lt;raiden.hasegawa_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, what I meant is that when running:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/bin/gfortran -o conftest    conftest.f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; outside of configure it does work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't think I have DYLD_LIBRARY_PATH set, but I will check when I get
</span><br>
<span class="quotelev1">&gt; back to my home computer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Dec 2, 2013 at 3:47 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 2, 2013, at 3:00 PM, Raiden Hasegawa &lt;raiden.hasegawa_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks, Jeff.  The compiler does in fact work when running the
</span><br>
<span class="quotelev1">&gt; troublesome line in ./configure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Errr... I'm not sure how to parse that.  The config.log you cited shows
</span><br>
<span class="quotelev1">&gt; that the compiler does *not* work in configure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
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
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did you typo and mean that the compiler does work when outside of
</span><br>
<span class="quotelev1">&gt; configure, and fails when it is inside configure?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I haven't set either FC, FCFLAGS nor do I have LD_LIBRARY_PATH set in
</span><br>
<span class="quotelev1">&gt; my .bashrc.  Do you have any thoughts on what environmental variable may
</span><br>
<span class="quotelev1">&gt; trip this up?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have DYLD_LIBRARY_PATH set?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23173.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23171.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="23120.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
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
