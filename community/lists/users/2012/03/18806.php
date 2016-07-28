<?
$subject_val = "Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 08:35:25 2012" -->
<!-- isoreceived="20120320123525" -->
<!-- sent="Tue, 20 Mar 2012 08:35:20 -0400" -->
<!-- isosent="20120320123520" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo" -->
<!-- id="0C40E57D-95E1-454A-B457-4D5E75C10A3C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C100F54C6E6_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 08:35:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18807.php">Gunter, David O: "[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18805.php">Ilias Miroslav: "[OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<li><strong>In reply to:</strong> <a href="18805.php">Ilias Miroslav: "[OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you run autogen.pl?
<br>
<p>(if you're working with the Open MPI trunk for development reasons, you might want to post to the devel_at_[hidden] list, not the general users list)
<br>
<p><p>On Mar 20, 2012, at 8:31 AM, Ilias Miroslav wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I updated ompi-trunk to the most recent trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/bin/openmpi_i32lp64_intel_static/ompi-trunk/.svn info
</span><br>
<span class="quotelev1">&gt; Path: .
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev1">&gt; Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
</span><br>
<span class="quotelev1">&gt; Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev1">&gt; Revision: 26166
</span><br>
<span class="quotelev1">&gt; Node Kind: directory
</span><br>
<span class="quotelev1">&gt; Schedule: normal
</span><br>
<span class="quotelev1">&gt; Last Changed Author: miked
</span><br>
<span class="quotelev1">&gt; Last Changed Rev: 26166
</span><br>
<span class="quotelev1">&gt; Last Changed Date: 2012-03-20 11:00:52 +0100 (Tue, 20 Mar 2012)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and did configure, which returned with this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/home/ilias/bin/openmpi_i32lp64_intel_static --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-share  --enable-static
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; config.status: orte/include/orte_config.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/include/ompi_config.h
</span><br>
<span class="quotelev1">&gt; config.status: ompi/include/ompi_config.h is unchanged
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/include/mpi.h
</span><br>
<span class="quotelev1">&gt; config.status: error: cannot find input file: `opal/mca/hwloc/hwloc131/hwloc/include/private/autogen/config.h.in'
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/bin/openmpi_i32lp64_intel_static/ompi-trunk/.make all install
</span><br>
<span class="quotelev1">&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd . &amp;&amp; /bin/sh /home/ilias/bin/openmpi_i32lp64_intel_static/ompi-trunk/config/missing --run aclocal-1.11 -I config
</span><br>
<span class="quotelev1">&gt; aclocal-1.11: config/autogen_found_items.m4:286: file `opal/mca/hwloc/hwloc131/configure.m4' does not exist
</span><br>
<span class="quotelev1">&gt; make: *** [aclocal.m4] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Miro
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
<li><strong>Next message:</strong> <a href="18807.php">Gunter, David O: "[OMPI users] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18805.php">Ilias Miroslav: "[OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
<li><strong>In reply to:</strong> <a href="18805.php">Ilias Miroslav: "[OMPI users] file `opal/mca/hwloc/hwloc131/configure.m4' does not exist in svn repo"</a>
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
