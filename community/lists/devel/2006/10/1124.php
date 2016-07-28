<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 08:51:11 2006" -->
<!-- isoreceived="20061018125111" -->
<!-- sent="Wed, 18 Oct 2006 08:50:56 -0400" -->
<!-- isosent="20061018125056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (no subject)" -->
<!-- id="E52DC39D-CBBE-4EE0-8268-A3BFAC4F2E53_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1948B6A2-F9DE-4747-AF50-32E59CF92653_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 08:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1125.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>Previous message:</strong> <a href="1123.php">Brian Barrett: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="1123.php">Brian Barrett: "[OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These all look good to me.
<br>
<p>On Oct 18, 2006, at 1:11 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have four changes I'd like to make to the wrapper compilers (well,
</span><br>
<span class="quotelev1">&gt; more the build system).  I figured I'd make them available for public
</span><br>
<span class="quotelev1">&gt; comment before I did any of them, as they would change how things got
</span><br>
<span class="quotelev1">&gt; installed and what the user sees:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Only install opal{cc,c++} and orte{cc,c++} if configured with --
</span><br>
<span class="quotelev1">&gt; with-devel-headers.  Right now, they are always installed, but there
</span><br>
<span class="quotelev1">&gt; are no header files installed for either project, so there's really
</span><br>
<span class="quotelev1">&gt; not much way for a user to actually compile an OPAL / ORTE  
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Drop support for opalCC and orteCC.  It's a pain to setup all the
</span><br>
<span class="quotelev1">&gt; symlinks (indeed, they are currently done wrong for opalCC) and
</span><br>
<span class="quotelev1">&gt; there's no history like there is for mpiCC.  This isn't a big deal,
</span><br>
<span class="quotelev1">&gt; but would make two Makefiles easier to deal with.  And since about
</span><br>
<span class="quotelev1">&gt; every 3 months, I have to fix the Makefiles after they get borked up
</span><br>
<span class="quotelev1">&gt; a little bit, it makes my life easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Change what is currently opalcc.1 (name it something generic,
</span><br>
<span class="quotelev1">&gt; probably opal_wrapper.1) and add some macros that get sed'ed so that
</span><br>
<span class="quotelev1">&gt; the man pages appear to be customized for the given command.  Josh
</span><br>
<span class="quotelev1">&gt; and I had talked about this long ago, but time prevented us from
</span><br>
<span class="quotelev1">&gt; actually doing anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) Install the wrapper data files even if we compiled with --disable-
</span><br>
<span class="quotelev1">&gt; binaries.  This is for the use case of doing multi-lib builds, where
</span><br>
<span class="quotelev1">&gt; one word size will only have the library built, but we need both set
</span><br>
<span class="quotelev1">&gt; of wrapper data files to piece together to activate the multi-lib
</span><br>
<span class="quotelev1">&gt; support in the wrapper compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1125.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>Previous message:</strong> <a href="1123.php">Brian Barrett: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="1123.php">Brian Barrett: "[OMPI devel] (no subject)"</a>
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
