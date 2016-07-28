<?
$subject_val = "[OMPI devel] 1.6 NEWS bullets";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 09:00:53 2012" -->
<!-- isoreceived="20120502130053" -->
<!-- sent="Wed, 2 May 2012 06:00:48 -0700" -->
<!-- isosent="20120502130048" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6 NEWS bullets" -->
<!-- id="3414EA40-C92A-4898-9F9F-FB33BCCE35F2_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6 NEWS bullets<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 09:00:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>Reply:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's what I've put for the 1.6 NEWS bullets -- do they look ok?
<br>
<p>- Fix some process affinity issues.  When binding a process, Open MPI
<br>
&nbsp;&nbsp;will now bind to all available hyperthreads in a core (or socket,
<br>
&nbsp;&nbsp;depending on the binding options specified).
<br>
- Add support for ARM5 and ARM6 (in addition to the existing ARM7
<br>
&nbsp;&nbsp;support).  Thanks to Evan Clinton for the patch.
<br>
- Minor Mellanox MXM fixes.
<br>
- Minor fixes to the mpirun(1) and MPI_Comm_create(3) man pages.
<br>
- Prevent segv if COMM_SPAWN_MULTIPLE fails.  Thanks to Fujitsu for
<br>
&nbsp;&nbsp;the patch.
<br>
- Disable interposed memory management in fakeroot environments.  This
<br>
&nbsp;&nbsp;fixes a problem in some build environments.
<br>
- Minor hwloc updates.
<br>
- Array versions of MPI_TEST and MPI_WAIT with a count==0 will now
<br>
&nbsp;&nbsp;return immediately with MPI_SUCCESS.  Thanks to Jeremiah Willcock
<br>
&nbsp;&nbsp;for the suggestion.
<br>
- Update VampirTrace to v5.12.2.
<br>
- Properly handle forwarding stdin to all processes when &quot;mpirun
<br>
&nbsp;&nbsp;--stdin all&quot; is used.
<br>
- Workaround XLC assembly bug.
<br>
- OS X Tiger (10.3) has not been supported for a while, so forcibly
<br>
&nbsp;&nbsp;abort configure if we detect it.
<br>
- Fix segv in the openib BTL when running on SPARC 64 systems.
<br>
- Fix some include file ordering issues on some BSD-based platforms.
<br>
&nbsp;&nbsp;Thanks to Paul Hargove for this (and many, many other) fixes.
<br>
- Properly handle .FALSE. return parameter value to attribute copy
<br>
&nbsp;&nbsp;callback functions.
<br>
- Fix a bunch of minor C++ API issues; thanks to Fujitsu for the patch.
<br>
- Fixed the default hostfile MCA parameter behavior.
<br>
- Per the MPI spec, ensure not to touch the port_name parameter to
<br>
&nbsp;&nbsp;MPI_CLOSE_PORT (it's an IN parameter).
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
<li><strong>Next message:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>Reply:</strong> <a href="10958.php">Brice Goglin: "Re: [OMPI devel] 1.6 NEWS bullets"</a>
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
