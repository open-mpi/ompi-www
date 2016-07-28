<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 11:55:21 2008" -->
<!-- isoreceived="20080207165521" -->
<!-- sent="Thu, 07 Feb 2008 09:55:06 -0700" -->
<!-- isosent="20080207165506" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="C3D085FA.C268%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B207E4B6-35C4-4AB4-ABC1-AFC34029C5D2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 11:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3159.php">Ralph H Castain: "[OMPI devel] ROMIO"</a>
<li><strong>Previous message:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3160.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think your proposed approach is an excellent one! I know it will take work
<br>
to implement, which raises its own issues, but I do believe that it is the
<br>
only real long-term solution.
<br>
<p>Just my $0.002. I would be willing to help with implementation, if that
<br>
would be of use. Not sure I understand the build system well enough to just
<br>
do it, I fear.
<br>
<p><p>On 2/7/08 9:34 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All these comments are good.  I confess that although I should have, I
</span><br>
<span class="quotelev1">&gt; really did not previously consider the complexity of adding in N
</span><br>
<span class="quotelev1">&gt; contrib packages to OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The goal of the contrib packages is to easily allow additional
</span><br>
<span class="quotelev1">&gt; functionality that is nicely integrated with Open MPI.  An obvious way
</span><br>
<span class="quotelev1">&gt; to do this is to include the code in the Open MPI tarball, but that
</span><br>
<span class="quotelev1">&gt; leads to the logistics and other issues that have been identified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph proposes a good way around this.  But what about going farther
</span><br>
<span class="quotelev1">&gt; than that: what we if we offer a standardized set of hooks for
</span><br>
<span class="quotelev1">&gt; including contrib functionality *after* core OMPI has been installed?
</span><br>
<span class="quotelev1">&gt; Yes, it's one more step after OMPI has been installed -- but if we can
</span><br>
<span class="quotelev1">&gt; keep it as *one* step, perhaps the user onus is not that bad.  Let me
</span><br>
<span class="quotelev1">&gt; explain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider a new standalone executable: ompi_contrib.  You would run
</span><br>
<span class="quotelev1">&gt; ompi_contrib to install and uninstall contrib functionality into your
</span><br>
<span class="quotelev1">&gt; existing OMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ompi_contrib --install <a href="http://www.example.com/nbc/nbc-ompi-contrib.tar.gz">http://www.example.com/nbc/nbc-ompi-contrib.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; or  ompi_contrib --install file:///home/htor/nbc-ompi-contrib.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will download NBC (if http), build it, and install it into the
</span><br>
<span class="quotelev1">&gt; current OMPI.  It is likely that the nbc-ompi-contrib.tar.gz file will
</span><br>
<span class="quotelev1">&gt; contain the real NBC tarball (or maybe just a reference to it?) plus a
</span><br>
<span class="quotelev1">&gt; small number of hook/glue scripts for OMPI integration (perhaps quite
</span><br>
<span class="quotelev1">&gt; similar to what is in the contrib/ tree [on the branch] today for
</span><br>
<span class="quotelev1">&gt; NBC?).  Likewise, after NBC is installed into the local OMPI
</span><br>
<span class="quotelev1">&gt; installation, ompi_info should be able to show &quot;nbc&quot; as installed
</span><br>
<span class="quotelev1">&gt; contrib functionality.  It then follows that we might be able to do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ompi_contrib --uninstall nbc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to uninstall contrib NBC from the local OMPI installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This kind of approach would seem to have several benefits:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Keep a clear[er] distinction between core OMPI and contributed
</span><br>
<span class="quotelev1">&gt; packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Allow simple integration of MPI libraries, tools, and even
</span><br>
<span class="quotelev1">&gt; applications (!) (think: numerical libraries, boost C++ libraries,
</span><br>
<span class="quotelev1">&gt; etc. -- how many of your users install additional tools on top of MPI
</span><br>
<span class="quotelev1">&gt; incorrectly?).  Anything
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Allow 3rd parties to have &quot;contrib&quot; code to Open MPI without needing
</span><br>
<span class="quotelev1">&gt; to get into our code tree (and sign the 3rd party agreements, etc.),
</span><br>
<span class="quotelev1">&gt; keeping our distribution size down, avoiding release schedule
</span><br>
<span class="quotelev1">&gt; logistical issues, keeping our &quot;core&quot; build time down, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Allow integration of contrib functionality at both a per-user and
</span><br>
<span class="quotelev1">&gt; system-wide basis.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I'm really proposing here is that OMPI becomes a system that can
</span><br>
<span class="quotelev1">&gt; have additional functionality installed / uninstalled.  Based on the
</span><br>
<span class="quotelev1">&gt; infrastructure that we already have, this is not as much of a stretch
</span><br>
<span class="quotelev1">&gt; as one would think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (&quot;who's going to write this&quot; is a question that will also have to be
</span><br>
<span class="quotelev1">&gt; answered, but perhaps we can discuss the code concept/idea first...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2008, at 10:11 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe Brian and Terry raise good points. May I offer a possible
</span><br>
<span class="quotelev2">&gt;&gt; alternative? What if we only include in Open MPI an include file that
</span><br>
<span class="quotelev2">&gt;&gt; contains the &quot;hooks&quot; to libNBC, and have the build system only &quot;see&quot;
</span><br>
<span class="quotelev2">&gt;&gt; those
</span><br>
<span class="quotelev2">&gt;&gt; if someone specifies --with-NBC (or whatever option name you like).
</span><br>
<span class="quotelev2">&gt;&gt; If you
</span><br>
<span class="quotelev2">&gt;&gt; like, you can make the inclusion automatic if libNBC is detected on
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; system. It would make sense to also add -libNBC to the mpicc et al
</span><br>
<span class="quotelev2">&gt;&gt; wrappers
</span><br>
<span class="quotelev2">&gt;&gt; as well when the build system includes the function definitions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This would allow those users that want (or can) to use that library
</span><br>
<span class="quotelev2">&gt;&gt; link
</span><br>
<span class="quotelev2">&gt;&gt; against it, without adding a bunch of source code to our release. I
</span><br>
<span class="quotelev2">&gt;&gt; suspect
</span><br>
<span class="quotelev2">&gt;&gt; there are complications that will have to be dealt with, but offer
</span><br>
<span class="quotelev2">&gt;&gt; it as
</span><br>
<span class="quotelev2">&gt;&gt; something to consider.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, remember that there is an added burden when we add source code
</span><br>
<span class="quotelev2">&gt;&gt; to Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI that we haven't discussed - we are now adding coordination
</span><br>
<span class="quotelev2">&gt;&gt; issues to our
</span><br>
<span class="quotelev2">&gt;&gt; own release cycle. If libNBC changes, are we now going to be pressed
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; issue another OMPI release so that the new NBC version is included?
</span><br>
<span class="quotelev2">&gt;&gt; Do we
</span><br>
<span class="quotelev2">&gt;&gt; now need to coordinate our releases with theirs so that things align?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And if we have an increasing number of such &quot;included&quot; packages, how
</span><br>
<span class="quotelev2">&gt;&gt; complex
</span><br>
<span class="quotelev2">&gt;&gt; is -that- release discussion going to get?!?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/7/08 4:48 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Torsten Hoefler wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me start by reminding everyone that I have no vote, so this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; probably be sent to /dev/null.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks for your comment and this will not go to /dev/null!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think Ralph raised some good points.  I'd like to raise another.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yes [will reply to this in a separate thread]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does it make sense to bring LibNBC into the release at this point,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; given the current standardization process of non-blocking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; collectives?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My feeling is no, based on the long term support costs.  We had
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem with a function in LAM/MPI -- MPIL_SPAWN, I believe it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that was almost but not quite MPI_COMM_SPAWN.  It was added to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn before the standard was finished for dynamics.  The problem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it wasn't quite MPI_COMM_SPAWN, so we were now stuck with yet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; another
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function to support (in a touchy piece of code) for infinity and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; beyond.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I worry that we'll have the same with LibNBC -- a piece of code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; solves an immediate problem (no non-blocking collectives in MPI)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will become a long-term support anchor.  Since this is something
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we'll
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be encouraging users to write code to, it's not like support for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mvapi, where we can just deprecate it and users won't really
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; notice.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's one thing to tell them to update their cluster software
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stack --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it's another to tell them to rewrite their applications.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think this is a very good and valid point. However, I would like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deprecate the NBC_* things as soon as non-blocking collectives are a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; part of the standard. Of course, this would probably need two minor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions to &quot;clean&quot; the code-base, but this is (will be) our normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; procedure (just what happened to MVAPI).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though it doesn't seem to me that NBC is a slam dunk to get into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spec and I could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imagine it changing significantly due to someone elses opinion/needs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And rewriting the user's application will not be that hard, it'll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mainly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be vim:%s/NBC_/MPI_/g. Even if we change the interface (e.g. add
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tags or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; decide to use the more limited split collective approach), this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; task is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rather easy and can be automated easily. It's not a functionality
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change, just an interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though if NBC is built by default for release builds I think that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; raises
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the bar saying that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI believe this should be used by all of our users without any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concerns that the API may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change or it might have significant issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On a similar track do you have any tests that validate the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality/correctness of NBC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that can be ran as a part of the MTT nightly tests?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My opinion is I have no problem with NBC being merged in just that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't think it should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; built by default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3159.php">Ralph H Castain: "[OMPI devel] ROMIO"</a>
<li><strong>Previous message:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3160.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
