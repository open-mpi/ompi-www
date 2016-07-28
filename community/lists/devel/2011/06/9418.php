<?
$subject_val = "Re: [OMPI devel] Tarball distribution";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 26 05:55:46 2011" -->
<!-- isoreceived="20110626095546" -->
<!-- sent="Sun, 26 Jun 2011 05:55:41 -0400" -->
<!-- isosent="20110626095541" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Tarball distribution" -->
<!-- id="52F9659A-F04C-49CB-B5D0-2BD127CB1AF7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinJ4BAxA5ANA2HaY8B1xUP9KKmQCQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-26 05:55:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9419.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9417.php">John Esmet: "[OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9417.php">John Esmet: "[OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9420.php">John Esmet: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Reply:</strong> <a href="9420.php">John Esmet: "Re: [OMPI devel] Tarball distribution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's your umask?
<br>
<p>% umask
<br>
2
<br>
% tar xf openmpi-1.4.3.tar.bz2
<br>
% ls -la openmpi-1.4.3
<br>
total 12832
<br>
drwxrwxr-x  26 jsquyres  staff      884 Jun 26 05:55 ./
<br>
drwxr--r--  49 jsquyres  staff     1666 Jun 26 05:53 ../
<br>
-rw-rw-r--   1 jsquyres  staff     3927 Dec  8  2009 AUTHORS
<br>
-rw-rw-r--   1 jsquyres  staff     6879 Dec  8  2009 CMakeLists.txt
<br>
-rw-rw-r--   1 jsquyres  staff    44049 Dec  8  2009 Doxyfile
<br>
-rw-r--r--   1 jsquyres  staff     3456 Oct  5  2010 INSTALL
<br>
-rw-rw-r--   1 jsquyres  staff     4140 Dec  8  2009 LICENSE
<br>
-rw-rw-r--   1 jsquyres  staff     1107 Dec  8  2009 Makefile.am
<br>
-rw-rw-r--   1 jsquyres  staff    57894 Oct  5  2010 Makefile.in
<br>
-rw-rw-r--   1 jsquyres  staff      820 Dec  8  2009 Makefile.man-page-rules
<br>
-rw-rw-r--   1 jsquyres  staff    62523 Oct  5  2010 NEWS
<br>
-rw-r--r--   1 jsquyres  staff    52242 Oct  5  2010 README
<br>
-rw-rw-r--   1 jsquyres  staff     7195 Apr 13  2010 README.WINDOWS
<br>
-rw-rw-r--   1 jsquyres  staff     4126 Oct  5  2010 VERSION
<br>
-rw-rw-r--   1 jsquyres  staff     1364 Dec  8  2009 acinclude.m4
<br>
-rw-rw-r--   1 jsquyres  staff    39241 Oct  5  2010 aclocal.m4
<br>
-rwxrwxr-x   1 jsquyres  staff    43775 Apr 13  2010 autogen.sh*
<br>
drwxrwxr-x  99 jsquyres  staff     3366 Jun 26 05:54 config/
<br>
-rwxrwxr-x   1 jsquyres  staff  6154265 Oct  5  2010 configure*
<br>
-rw-rw-r--   1 jsquyres  staff    46619 Sep  9  2010 configure.ac
<br>
drwxrwxr-x   8 jsquyres  staff      272 Jun 26 05:54 contrib/
<br>
drwxrwxr-x  14 jsquyres  staff      476 Jun 26 05:54 examples/
<br>
drwxrwxr-x  26 jsquyres  staff      884 Jun 26 05:54 ompi/
<br>
drwxrwxr-x  20 jsquyres  staff      680 Jun 26 05:54 opal/
<br>
drwxrwxr-x  13 jsquyres  staff      442 Jun 26 05:55 orte/
<br>
drwxrwxr-x  12 jsquyres  staff      408 Jun 26 05:54 test/
<br>
%
<br>
<p><p><p>On Jun 26, 2011, at 12:41 AM, John Esmet wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I went to untar the source code and the folders are mode 777. Call me OCD, but I find this a little strange. What's up?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - John
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9419.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9417.php">John Esmet: "[OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9417.php">John Esmet: "[OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9420.php">John Esmet: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Reply:</strong> <a href="9420.php">John Esmet: "Re: [OMPI devel] Tarball distribution"</a>
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
