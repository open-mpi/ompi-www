<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 13:15:57 2008" -->
<!-- isoreceived="20080214181557" -->
<!-- sent="Thu, 14 Feb 2008 13:15:37 -0500" -->
<!-- isosent="20080214181537" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="743386B4-5BDF-43E8-9ABB-9FE830E1F713_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="95DF29AD-A3FD-4E7E-A950-96C49B1E3C2A_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-14 13:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3249.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to	trunk"</a>
<li><strong>Previous message:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3249.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to	trunk"</a>
<li><strong>Reply:</strong> <a href="3249.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to	trunk"</a>
<li><strong>Reply:</strong> <a href="3250.php">George Bosilca: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I don't think that we ever concluded this discussion/RFC.
<br>
<p>I am in favor of bringing in libnbc, given the qualifications below.
<br>
<p>Others?
<br>
<p><p>On Feb 8, 2008, at 12:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Terry -- I reluctantly agree.  :-)  What I envision is not difficult
</span><br>
<span class="quotelev1">&gt; (a first cut/feature-lean version is probably only several hundred
</span><br>
<span class="quotelev1">&gt; lines of perl?), but I don't have the cycles (at present) to implement
</span><br>
<span class="quotelev1">&gt; it -- my priorities are elsewhere at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anyone is interested in this, I would gladly talk them through what
</span><br>
<span class="quotelev1">&gt; [I think] needs to be done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, for NBC, per Terry's points:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - if it's not compiled/installed by default
</span><br>
<span class="quotelev1">&gt; - if we can make a big enough red flag for users that it's an R&amp;D
</span><br>
<span class="quotelev1">&gt; effort that is subject to change (perhaps 3'x5'?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I think it would not be a bad thing to include NBC.  But then I
</span><br>
<span class="quotelev1">&gt; think we need to disallow any other contrib/ projects until someone
</span><br>
<span class="quotelev1">&gt; can find the cycles to implement a better solution (such as an
</span><br>
<span class="quotelev1">&gt; ompi_contrib executable/system).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2008, at 1:18 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, the below sounds good if we really believe there is going to
</span><br>
<span class="quotelev2">&gt;&gt; be a
</span><br>
<span class="quotelev2">&gt;&gt; whole bunch of addons.  I am not sure NBC really constitute as an
</span><br>
<span class="quotelev2">&gt;&gt; addon
</span><br>
<span class="quotelev2">&gt;&gt; than more some research work that might become an official API.  So I
</span><br>
<span class="quotelev2">&gt;&gt; look at the NBC stuff more like a BTL or PM that is in progress of
</span><br>
<span class="quotelev2">&gt;&gt; being
</span><br>
<span class="quotelev2">&gt;&gt; developed/refined for prime time.  So would a new PM or BTL be added
</span><br>
<span class="quotelev2">&gt;&gt; via
</span><br>
<span class="quotelev2">&gt;&gt; ompi_contrib?  I wouldn't think they would.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ompi_contrib sounds like a nice utility but I have feeling there
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; bigger fish to fry unless we really believe there will be a lot of
</span><br>
<span class="quotelev2">&gt;&gt; addons that we will need to support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All these comments are good.  I confess that although I should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really did not previously consider the complexity of adding in N
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contrib packages to OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The goal of the contrib packages is to easily allow additional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality that is nicely integrated with Open MPI.  An obvious
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do this is to include the code in the Open MPI tarball, but that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leads to the logistics and other issues that have been identified.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph proposes a good way around this.  But what about going farther
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than that: what we if we offer a standardized set of hooks for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; including contrib functionality *after* core OMPI has been  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it's one more step after OMPI has been installed -- but if we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keep it as *one* step, perhaps the user onus is not that bad.  Let  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explain.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Consider a new standalone executable: ompi_contrib.  You would run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_contrib to install and uninstall contrib functionality into  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; existing OMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_contrib --install <a href="http://www.example.com/nbc/nbc-ompi-contrib.tar.gz">http://www.example.com/nbc/nbc-ompi-contrib.tar.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or  ompi_contrib --install file:///home/htor/nbc-ompi-contrib.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will download NBC (if http), build it, and install it into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current OMPI.  It is likely that the nbc-ompi-contrib.tar.gz file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contain the real NBC tarball (or maybe just a reference to it?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plus a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small number of hook/glue scripts for OMPI integration (perhaps  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar to what is in the contrib/ tree [on the branch] today for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NBC?).  Likewise, after NBC is installed into the local OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation, ompi_info should be able to show &quot;nbc&quot; as installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contrib functionality.  It then follows that we might be able to do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_contrib --uninstall nbc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to uninstall contrib NBC from the local OMPI installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This kind of approach would seem to have several benefits:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Keep a clear[er] distinction between core OMPI and contributed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; packages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Allow simple integration of MPI libraries, tools, and even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications (!) (think: numerical libraries, boost C++ libraries,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc. -- how many of your users install additional tools on top of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incorrectly?).  Anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Allow 3rd parties to have &quot;contrib&quot; code to Open MPI without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get into our code tree (and sign the 3rd party agreements, etc.),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keeping our distribution size down, avoiding release schedule
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logistical issues, keeping our &quot;core&quot; build time down, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Allow integration of contrib functionality at both a per-user and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system-wide basis.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I'm really proposing here is that OMPI becomes a system that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have additional functionality installed / uninstalled.  Based on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; infrastructure that we already have, this is not as much of a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stretch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as one would think.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comments?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&quot;who's going to write this&quot; is a question that will also have to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; answered, but perhaps we can discuss the code concept/idea first...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 7, 2008, at 10:11 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe Brian and Terry raise good points. May I offer a possible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; alternative? What if we only include in Open MPI an include file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contains the &quot;hooks&quot; to libNBC, and have the build system only  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;see&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if someone specifies --with-NBC (or whatever option name you like).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like, you can make the inclusion automatic if libNBC is detected on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system. It would make sense to also add -libNBC to the mpicc et al
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrappers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as well when the build system includes the function definitions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This would allow those users that want (or can) to use that library
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; against it, without adding a bunch of source code to our release. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suspect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there are complications that will have to be dealt with, but offer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something to consider.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, remember that there is an added burden when we add source  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI that we haven't discussed - we are now adding coordination
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issues to our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; own release cycle. If libNBC changes, are we now going to be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pressed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue another OMPI release so that the new NBC version is included?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now need to coordinate our releases with theirs so that things
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; align?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And if we have an increasing number of such &quot;included&quot; packages,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is -that- release discussion going to get?!?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/7/08 4:48 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Torsten Hoefler wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Let me start by reminding everyone that I have no vote, so this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; probably be sent to /dev/null.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thanks for your comment and this will not go to /dev/null!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think Ralph raised some good points.  I'd like to raise
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; another.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; yes [will reply to this in a separate thread]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does it make sense to bring LibNBC into the release at this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; point,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; given the current standardization process of non-blocking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; collectives?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; My feeling is no, based on the long term support costs.  We had
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem with a function in LAM/MPI -- MPIL_SPAWN, I believe it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; was --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that was almost but not quite MPI_COMM_SPAWN.  It was added to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; spawn before the standard was finished for dynamics.  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it wasn't quite MPI_COMM_SPAWN, so we were now stuck with yet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; another
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; function to support (in a touchy piece of code) for infinity and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; beyond.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I worry that we'll have the same with LibNBC -- a piece of code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; solves an immediate problem (no non-blocking collectives in MPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; will become a long-term support anchor.  Since this is something
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; we'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; be encouraging users to write code to, it's not like support for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mvapi, where we can just deprecate it and users won't really
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; notice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It's one thing to tell them to update their cluster software
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; stack --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it's another to tell them to rewrite their applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think this is a very good and valid point. However, I would  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; deprecate the NBC_* things as soon as non-blocking collectives
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; part of the standard. Of course, this would probably need two
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; minor
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; versions to &quot;clean&quot; the code-base, but this is (will be) our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; normal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; procedure (just what happened to MVAPI).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Though it doesn't seem to me that NBC is a slam dunk to get into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spec and I could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; imagine it changing significantly due to someone elses opinion/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; needs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And rewriting the user's application will not be that hard, it'll
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mainly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be vim:%s/NBC_/MPI_/g. Even if we change the interface (e.g. add
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tags or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; decide to use the more limited split collective approach), this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; task is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rather easy and can be automated easily. It's not a functionality
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; change, just an interface.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Though if NBC is built by default for release builds I think that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; raises
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the bar saying that we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI believe this should be used by all of our users without any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; concerns that the API may
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; change or it might have significant issues.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On a similar track do you have any tests that validate the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; functionality/correctness of NBC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that can be ran as a part of the MTT nightly tests?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My opinion is I have no problem with NBC being merged in just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't think it should be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; built by default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3249.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to	trunk"</a>
<li><strong>Previous message:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3249.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to	trunk"</a>
<li><strong>Reply:</strong> <a href="3249.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to	trunk"</a>
<li><strong>Reply:</strong> <a href="3250.php">George Bosilca: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
