<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 18:49:01 2014" -->
<!-- isoreceived="20140324224901" -->
<!-- sent="Mon, 24 Mar 2014 22:48:46 +0000" -->
<!-- isosent="20140324224846" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="CCD9A749-FD1D-450B-954F-00A028EB7700_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S8st_svi6jtsgqrCBarCUhFpLHf9L+k86C2CaeQSBd6Xg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 18:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2014, at 6:34 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the late reply. The answer is: No, 1.14.1 has not fixed the problem (and indeed, that's what my Mac is running):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (28) $ make install | &amp; tee makeinstall.log
</span><br>
<span class="quotelev1">&gt; Making install in src
</span><br>
<span class="quotelev1">&gt;  ../config/install-sh -c -d '/Users/fortran/AutomakeBug/autobug14/lib'
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../libtool   --mode=install /usr/bin/install -c   libfortran_stuff.la '/Users/fortran/AutomakeBug/autobug14/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: /usr/bin/install -c .libs/libfortran_stuff.0.dylib /Users/fortran/AutomakeBug/autobug14/lib/libfortran_stuff.0.dylib
</span><br>
<span class="quotelev1">&gt; install: .libs/libfortran_stuff.0.dylib: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the output from either the am12 or am14 test. If you have any options you'd like me to try with this, let me know. (For example, is there a way to make autotools *more* verbose? I've always tried to make it less so!)
</span><br>
<p>Ok.  With the am14 tarball, please run:
<br>
<p>make clean
<br>
<p>And then run this:
<br>
<p>make V=1 install
<br>
<p>And then send the following:
<br>
<p>- configure stdout
<br>
- config.log file
<br>
- stdout/stderr from &quot;make V=1 install&quot;
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
