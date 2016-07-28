<?
$subject_val = "[OMPI devel] 3rd party code contributions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 10:38:52 2008" -->
<!-- isoreceived="20080208153852" -->
<!-- sent="Fri, 08 Feb 2008 08:38:42 -0700" -->
<!-- isosent="20080208153842" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 3rd party code contributions" -->
<!-- id="C3D1C592.452C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] 3rd party code contributions<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 10:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3163.php">Jeff Squyres: "Re: [OMPI devel] ROMIO"</a>
<li><strong>Previous message:</strong> <a href="3161.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Reply:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Reply:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought maybe we should move this to another thread as it really isn't
<br>
about Torsten's specific RFC.
<br>
<p>I just took a quick gander at the code base to see how extensive this
<br>
problem might really be per Terry's concern. What I found was that we have
<br>
added 3rd party code in several places. How we want to define them in terms
<br>
of this issue is probably something for discussion.
<br>
<p>Packages I could readily identify include:
<br>
<p>1. event library
<br>
2. ROMIO
<br>
3. VT
<br>
4. backtrace
<br>
5. PLPA - this one is a little less obvious, but still being released as a
<br>
separate package
<br>
6. libNBC
<br>
<p>There may well be others - these are only the ones I know about. By 3rd
<br>
party package, I mean these are blocks of code obtained as a complete,
<br>
distinct version and &quot;dropped in&quot; to the OMPI code repository, and then to
<br>
some degree tied into our build system. They are not code specifically
<br>
developed for OMPI by OMPI developers.
<br>
<p>We have already discussed the issues with this approach. I am particularly
<br>
concerned with the maintenance and release cycle issues right now.
<br>
<p>If these packages could be linked to our code instead of embedded within it,
<br>
then it seems to me that updating them could become much easier. For
<br>
example, we could download and install the latest ROMIO + Panasas patch,
<br>
compile it, and simply link it into libompi - without occupying someone with
<br>
constantly fixing the build system issues, etc.
<br>
<p>Obviously, I don't claim to know enough about what was done to integrate
<br>
ROMIO to know if this would easily work. I only use it to illustrate the
<br>
point - the same could be said about the event library, for example.
<br>
<p>Given our maintenance support problems, it would seem to me that changing
<br>
the way we do 3rd party packaging may be worth consideration and some
<br>
effort. I can't prioritize that relative to 1.3, though I do note that, from
<br>
LANL's perspective, the ROMIO issue is a definite blocker for 1.3 release.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; Subject: Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to
</span><br>
<span class="quotelev1">&gt; trunk
</span><br>
<span class="quotelev1">&gt; From: Terry Dontje (Terry.Dontje_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2008-02-07 13:18:36
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, the below sounds good if we really believe there is going to be a
</span><br>
<span class="quotelev1">&gt; whole bunch of addons. I am not sure NBC really constitute as an addon
</span><br>
<span class="quotelev1">&gt; than more some research work that might become an official API. So I
</span><br>
<span class="quotelev1">&gt; look at the NBC stuff more like a BTL or PM that is in progress of being
</span><br>
<span class="quotelev1">&gt; developed/refined for prime time. So would a new PM or BTL be added via
</span><br>
<span class="quotelev1">&gt; ompi_contrib? I wouldn't think they would.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ompi_contrib sounds like a nice utility but I have feeling there are
</span><br>
<span class="quotelev1">&gt; bigger fish to fry unless we really believe there will be a lot of
</span><br>
<span class="quotelev1">&gt; addons that we will need to support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All these comments are good. I confess that although I should have, I
</span><br>
<span class="quotelev2">&gt;&gt; really did not previously consider the complexity of adding in N
</span><br>
<span class="quotelev2">&gt;&gt; contrib packages to OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The goal of the contrib packages is to easily allow additional
</span><br>
<span class="quotelev2">&gt;&gt; functionality that is nicely integrated with Open MPI. An obvious way
</span><br>
<span class="quotelev2">&gt;&gt; to do this is to include the code in the Open MPI tarball, but that
</span><br>
<span class="quotelev2">&gt;&gt; leads to the logistics and other issues that have been identified.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph proposes a good way around this. But what about going farther
</span><br>
<span class="quotelev2">&gt;&gt; than that: what we if we offer a standardized set of hooks for
</span><br>
<span class="quotelev2">&gt;&gt; including contrib functionality *after* core OMPI has been installed?
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it's one more step after OMPI has been installed -- but if we can
</span><br>
<span class="quotelev2">&gt;&gt; keep it as *one* step, perhaps the user onus is not that bad. Let me
</span><br>
<span class="quotelev2">&gt;&gt; explain.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Consider a new standalone executable: ompi_contrib. You would run
</span><br>
<span class="quotelev2">&gt;&gt; ompi_contrib to install and uninstall contrib functionality into your
</span><br>
<span class="quotelev2">&gt;&gt; existing OMPI:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_contrib --install <a href="http://www.example.com/nbc/nbc-ompi-contrib.tar.gz">http://www.example.com/nbc/nbc-ompi-contrib.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; or ompi_contrib --install file:///home/htor/nbc-ompi-contrib.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will download NBC (if http), build it, and install it into the
</span><br>
<span class="quotelev2">&gt;&gt; current OMPI. It is likely that the nbc-ompi-contrib.tar.gz file will
</span><br>
<span class="quotelev2">&gt;&gt; contain the real NBC tarball (or maybe just a reference to it?) plus a
</span><br>
<span class="quotelev2">&gt;&gt; small number of hook/glue scripts for OMPI integration (perhaps quite
</span><br>
<span class="quotelev2">&gt;&gt; similar to what is in the contrib/ tree [on the branch] today for
</span><br>
<span class="quotelev2">&gt;&gt; NBC?). Likewise, after NBC is installed into the local OMPI
</span><br>
<span class="quotelev2">&gt;&gt; installation, ompi_info should be able to show &quot;nbc&quot; as installed
</span><br>
<span class="quotelev2">&gt;&gt; contrib functionality. It then follows that we might be able to do:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_contrib --uninstall nbc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to uninstall contrib NBC from the local OMPI installation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This kind of approach would seem to have several benefits:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Keep a clear[er] distinction between core OMPI and contributed
</span><br>
<span class="quotelev2">&gt;&gt; packages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Allow simple integration of MPI libraries, tools, and even
</span><br>
<span class="quotelev2">&gt;&gt; applications (!) (think: numerical libraries, boost C++ libraries,
</span><br>
<span class="quotelev2">&gt;&gt; etc. -- how many of your users install additional tools on top of MPI
</span><br>
<span class="quotelev2">&gt;&gt; incorrectly?). Anything
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Allow 3rd parties to have &quot;contrib&quot; code to Open MPI without needing
</span><br>
<span class="quotelev2">&gt;&gt; to get into our code tree (and sign the 3rd party agreements, etc.),
</span><br>
<span class="quotelev2">&gt;&gt; keeping our distribution size down, avoiding release schedule
</span><br>
<span class="quotelev2">&gt;&gt; logistical issues, keeping our &quot;core&quot; build time down, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Allow integration of contrib functionality at both a per-user and
</span><br>
<span class="quotelev2">&gt;&gt; system-wide basis.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I'm really proposing here is that OMPI becomes a system that can
</span><br>
<span class="quotelev2">&gt;&gt; have additional functionality installed / uninstalled. Based on the
</span><br>
<span class="quotelev2">&gt;&gt; infrastructure that we already have, this is not as much of a stretch
</span><br>
<span class="quotelev2">&gt;&gt; as one would think.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (&quot;who's going to write this&quot; is a question that will also have to be
</span><br>
<span class="quotelev2">&gt;&gt; answered, but perhaps we can discuss the code concept/idea first...)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 7, 2008, at 10:11 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe Brian and Terry raise good points. May I offer a possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alternative? What if we only include in Open MPI an include file that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contains the &quot;hooks&quot; to libNBC, and have the build system only &quot;see&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if someone specifies --with-NBC (or whatever option name you like).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like, you can make the inclusion automatic if libNBC is detected on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system. It would make sense to also add -libNBC to the mpicc et al
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrappers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as well when the build system includes the function definitions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would allow those users that want (or can) to use that library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; against it, without adding a bunch of source code to our release. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there are complications that will have to be dealt with, but offer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something to consider.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, remember that there is an added burden when we add source code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI that we haven't discussed - we are now adding coordination
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issues to our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; own release cycle. If libNBC changes, are we now going to be pressed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue another OMPI release so that the new NBC version is included?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now need to coordinate our releases with theirs so that things align?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And if we have an increasing number of such &quot;included&quot; packages, how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is -that- release discussion going to get?!?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/7/08 4:48 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3163.php">Jeff Squyres: "Re: [OMPI devel] ROMIO"</a>
<li><strong>Previous message:</strong> <a href="3161.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Reply:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Reply:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
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
