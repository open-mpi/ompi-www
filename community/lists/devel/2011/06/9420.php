<?
$subject_val = "Re: [OMPI devel] Tarball distribution";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 26 10:00:43 2011" -->
<!-- isoreceived="20110626140043" -->
<!-- sent="Sun, 26 Jun 2011 10:00:34 -0400" -->
<!-- isosent="20110626140034" -->
<!-- name="John Esmet" -->
<!-- email="esmet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Tarball distribution" -->
<!-- id="BANLkTimyFtdAvCX4XtFY9ZBRV-8HEhi+xw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52F9659A-F04C-49CB-B5D0-2BD127CB1AF7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Tarball distribution<br>
<strong>From:</strong> John Esmet (<em>esmet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-26 10:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9421.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9419.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9418.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
umask returns 0022
<br>
<p>I can reproduce the issue on my ubuntu 10.10 vm's, but not on a macbook, nor
<br>
a centos box. Interesting.
<br>
<p>On Sun, Jun 26, 2011 at 5:55 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What's your umask?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % umask
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; % tar xf openmpi-1.4.3.tar.bz2
</span><br>
<span class="quotelev1">&gt; % ls -la openmpi-1.4.3
</span><br>
<span class="quotelev1">&gt; total 12832
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  26 jsquyres  staff      884 Jun 26 05:55 ./
</span><br>
<span class="quotelev1">&gt; drwxr--r--  49 jsquyres  staff     1666 Jun 26 05:53 ../
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff     3927 Dec  8  2009 AUTHORS
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff     6879 Dec  8  2009 CMakeLists.txt
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff    44049 Dec  8  2009 Doxyfile
</span><br>
<span class="quotelev1">&gt; -rw-r--r--   1 jsquyres  staff     3456 Oct  5  2010 INSTALL
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff     4140 Dec  8  2009 LICENSE
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff     1107 Dec  8  2009 Makefile.am
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff    57894 Oct  5  2010 Makefile.in
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff      820 Dec  8  2009
</span><br>
<span class="quotelev1">&gt; Makefile.man-page-rules
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff    62523 Oct  5  2010 NEWS
</span><br>
<span class="quotelev1">&gt; -rw-r--r--   1 jsquyres  staff    52242 Oct  5  2010 README
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff     7195 Apr 13  2010 README.WINDOWS
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff     4126 Oct  5  2010 VERSION
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff     1364 Dec  8  2009 acinclude.m4
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff    39241 Oct  5  2010 aclocal.m4
</span><br>
<span class="quotelev1">&gt; -rwxrwxr-x   1 jsquyres  staff    43775 Apr 13  2010 autogen.sh*
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  99 jsquyres  staff     3366 Jun 26 05:54 config/
</span><br>
<span class="quotelev1">&gt; -rwxrwxr-x   1 jsquyres  staff  6154265 Oct  5  2010 configure*
</span><br>
<span class="quotelev1">&gt; -rw-rw-r--   1 jsquyres  staff    46619 Sep  9  2010 configure.ac
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x   8 jsquyres  staff      272 Jun 26 05:54 contrib/
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  14 jsquyres  staff      476 Jun 26 05:54 examples/
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  26 jsquyres  staff      884 Jun 26 05:54 ompi/
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  20 jsquyres  staff      680 Jun 26 05:54 opal/
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  13 jsquyres  staff      442 Jun 26 05:55 orte/
</span><br>
<span class="quotelev1">&gt; drwxrwxr-x  12 jsquyres  staff      408 Jun 26 05:54 test/
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2011, at 12:41 AM, John Esmet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I went to untar the source code and the folders are mode 777. Call me
</span><br>
<span class="quotelev1">&gt; OCD, but I find this a little strange. What's up?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - John
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9420/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9421.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9419.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9418.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
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
