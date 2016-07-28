<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:34:14 2014" -->
<!-- isoreceived="20140407223414" -->
<!-- sent="Mon, 7 Apr 2014 22:34:13 +0000" -->
<!-- isosent="20140407223413" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6" -->
<!-- id="EDCFE348-79F8-4520-B595-14C30A9AD9C8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140402211220.GV25953_at_sillage.bis.pasteur.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 18:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24101.php">Blosch, Edwin L: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24032.php">Tru Huynh: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per Dave's comment: note that running autogen.pl (or autogen.sh -- they're sym links to the same thing) is *only* necessary for SVN/hg/git checkouts of Open MPI.  
<br>
<p>You should *not* run autogen.pl in an expanded Open MPI tarball unless you really know what you're doing (e.g., you made a change to Open MPI that requires re-generating the GNU Autotools scripts).  Meaning: if you are expanding an Open MPI tarball, there's usually no reason to run autogen.pl -- just run configure and make.
<br>
<p>Sidenote: if you don't run autogen.pl, then it doesn't matter what version of GNU Autotools you have installed.  The Open MPI tarballs are pre-bootstrapped with the Right versions of the GNU Autotools so that end users don't have to worry about this kind of junk.  Having the Right versions of GNU Autotools is generally only an issue for Open MPI developers.
<br>
<p><p><p>On Apr 2, 2014, at 5:12 PM, Tru Huynh &lt;tru_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 01, 2014 at 03:26:00PM +0000, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am getting some errors building 1.8 on RHEL6.  I tried autoreconf as
</span><br>
<span class="quotelev2">&gt;&gt; suggested, but it failed for the same reason.  Is there a minimum
</span><br>
<span class="quotelev2">&gt;&gt; version of m4 required that is newer than that provided by RHEL6?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; What kind of errors? I have build on CentOS-5 (5.10) and CentOS-6 (6.5) x86_64
</span><br>
<span class="quotelev1">&gt; without any issue.
</span><br>
<span class="quotelev1">&gt; tar xjf openmpi-1.8.tar.bz2
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.8/
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/c6/shared/openmpi/1.8
</span><br>
<span class="quotelev1">&gt; nice make -j 8 &amp;&amp; make check &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tru
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24101.php">Blosch, Edwin L: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24032.php">Tru Huynh: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
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
