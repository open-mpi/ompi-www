<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 16:35:46 2005" -->
<!-- isoreceived="20050817213546" -->
<!-- sent="Wed, 17 Aug 2005 15:35:42 -0600" -->
<!-- isosent="20050817213542" -->
<!-- name="James W. Barker" -->
<!-- email="jbarker_at_[hidden]" -->
<!-- subject="Autogen.sh errors" -->
<!-- id="6.2.0.14.2.20050817153208.036224f0_at_cic-mail.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> James W. Barker (<em>jbarker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-17 16:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Jeff Squyres: "Re:  Autogen.sh errors"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0183.php">Jeff Squyres: "Re:  Autogen.sh errors"</a>
<li><strong>Reply:</strong> <a href="0183.php">Jeff Squyres: "Re:  Autogen.sh errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I'm having trouble with auotgen.sh.  Autogen.sh errors saying I need to 
<br>
install Autoconf 2.58 but I am at version 2.59; any thoughts?
<br>
<p>Jim Barker
<br>
<p>Open MPI MCA component configure generator finished
<br>
*** Running GNU tools
<br>
[Running] aclocal
<br>
aclocal:configure.ac:108: warning: macro `AM_ENABLE_SHARED' not found in 
<br>
library
<br>
aclocal:configure.ac:109: warning: macro `AM_DISABLE_STATIC' not found in 
<br>
library
<br>
aclocal:configure.ac:383: warning: macro `AM_PROG_LIBTOOL' not found in library
<br>
[Running] autoheader
<br>
[Running] autoconf
<br>
configure.ac:110: error: possibly undefined macro: AM_ENABLE_SHARED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
configure.ac:111: error: possibly undefined macro: AM_DISABLE_STATIC
<br>
configure.ac:395: error: possibly undefined macro: AM_PROG_LIBTOOL
<br>
<p>-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;autoconf&quot; has failed.  See above for
<br>
the specific error message that caused it to abort.
<br>
<p>This *MAY* be caused by an older version of one of the required
<br>
packages.  Please make sure you are using at least the following
<br>
versions:
<br>
<p>GNU Autoconf 2.58
<br>
GNU Automake 1.7
<br>
GNU Libtool  1.5
<br>
-------------------------------------------------------------------------
<br>
<p>ffe1.lanl.gov&gt; autoconf -V
<br>
autoconf (GNU Autoconf) 2.59
<br>
Written by David J. MacKenzie and Akim Demaille.
<br>
<p>Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p><p><p>James W. Barker  Ph.D.
<br>
CCS-1,  Resilient Technologies Team
<br>
505-665-9558
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Jeff Squyres: "Re:  Autogen.sh errors"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0183.php">Jeff Squyres: "Re:  Autogen.sh errors"</a>
<li><strong>Reply:</strong> <a href="0183.php">Jeff Squyres: "Re:  Autogen.sh errors"</a>
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
