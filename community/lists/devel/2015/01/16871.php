<?
$subject_val = "Re: [OMPI devel] devel Digest, Vol 2905, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 23:32:35 2015" -->
<!-- isoreceived="20150201043235" -->
<!-- sent="Sat, 31 Jan 2015 22:32:34 -0600" -->
<!-- isosent="20150201043234" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 2905, Issue 1" -->
<!-- id="CAFGXdkxJNB4cKTD70MCBWwrsQBqqBnhNFRfgvV7C9UqnYwNoJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.3.1422550802.25122.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] devel Digest, Vol 2905, Issue 1<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-31 23:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16872.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16870.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reporting bugs in the github world"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Mellanox 2.33.5100 firmware upgrade that came out a few days ago
<br>
did indeed fix the
<br>
problem we were seeing with the mlx4 errors.  Thanks for pointing us in
<br>
that direction.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>
<p>On Thu, Jan 29, 2015 at 11:00 AM, &lt;devel-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send devel mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         devel-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         devel-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of devel digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: mlx4 QP operation err (Christopher Samuel)
</span><br>
<span class="quotelev1">&gt;    2. Re: mlx4 QP operation err (Devendar Bureddy)
</span><br>
<span class="quotelev1">&gt;    3. Re: MTL interfaces (Todd Kordenbrock)
</span><br>
<span class="quotelev1">&gt;    4. Re: For discussion tomorrow: MTL issues (Friedley, Andrew)
</span><br>
<span class="quotelev1">&gt;    5. Webex for this morning (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt;    6. Re: For discussion tomorrow: MTL issues (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt;    7. Re: Webex for this morning (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Jan 2015 11:52:46 +1100
</span><br>
<span class="quotelev1">&gt; From: Christopher Samuel &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] mlx4 QP operation err
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;54C9845E.90102_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29/01/15 11:31, Dave Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;       I've found some old references to similar mlx4 errors dating back
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; 2009 that lead me to believe this may be a firmware error.  I believe
</span><br>
<span class="quotelev1">&gt; we're
</span><br>
<span class="quotelev2">&gt; &gt; running the most up to date version of the firmware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was a new version released a few days ago, 2.33.5100:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mellanox.com/page/firmware_table_ConnectX3ProEN">http://www.mellanox.com/page/firmware_table_ConnectX3ProEN</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Release notes are here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mellanox.com/pdf/firmware/ConnectX3Pro-FW-2_33_5100-release_notes.pdf">http://www.mellanox.com/pdf/firmware/ConnectX3Pro-FW-2_33_5100-release_notes.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bug fixes start on page 23, looks like there are 29 fixes
</span><br>
<span class="quotelev1">&gt; in this version, and fix 1 is for RoCE (though of course may
</span><br>
<span class="quotelev1">&gt; not be relevant) - &quot;The first Read response was not treated as
</span><br>
<span class="quotelev1">&gt; implicit ACK&quot; (discovered in 2.30.8000).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Jan 2015 01:00:53 +0000
</span><br>
<span class="quotelev1">&gt; From: Devendar Bureddy &lt;devendar_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;DrDaveTurner_at_[hidden]&quot; &lt;DrDaveTurner_at_[hidden]&gt;, Open MPI
</span><br>
<span class="quotelev1">&gt;         Developers      &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] mlx4 QP operation err
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; AM2PR05MB0771310015102ED8ED29D1B1AE300_at_AM2PR05MB0771.eurprd05.prod.outlook.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are you able to reproduce this error with ib verbs bw test?  I hope,  you
</span><br>
<span class="quotelev1">&gt; are running on lossless Ethernet fabric setup and selecting correct VLAN .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Dave Turner
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, January 28, 2015 4:31 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] mlx4 QP operation err
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm testing RoCE on 40 Gbps Mellanox ethernet cards and am getting a
</span><br>
<span class="quotelev1">&gt; mlx4 QP operation error every time it gets to testing 132 kB packets.
</span><br>
<span class="quotelev1">&gt; These
</span><br>
<span class="quotelev1">&gt; are aggregate tests in that 16 cores on one host are doing bi-directional
</span><br>
<span class="quotelev1">&gt; ping-pongs to 16 cores on another host across the Mellanox cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I've found some old references to similar mlx4 errors dating back to
</span><br>
<span class="quotelev1">&gt; 2009 that lead me to believe this may be a firmware error.  I believe we're
</span><br>
<span class="quotelev1">&gt; running the most up to date version of the firmware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Could someone comment on whether these are firmware issues, and
</span><br>
<span class="quotelev1">&gt; if so how to report them to Mellanox?  I've attached some files with more
</span><br>
<span class="quotelev1">&gt; detailed information on this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Dave Turner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Work:     DaveTurner_at_[hidden]&lt;mailto:DaveTurner_at_[hidden]&gt;     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;              118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; Home:    DrDaveTurner_at_[hidden]&lt;mailto:DrDaveTurner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Jan 2015 22:45:02 -0600
</span><br>
<span class="quotelev1">&gt; From: Todd Kordenbrock &lt;thkgcode_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] MTL interfaces
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; CAEGOymDbQszdQQPb2DwCth392Eds6JkKXqBA1FFXzAYEREhyiA_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can attend at that time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; todd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 28, 2015 at 3:55 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ryan / Sandia (anyone else who cares about MTL interfaces):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you attend a webex tomorrow at 1pm US Central to discuss adding
</span><br>
<span class="quotelev2">&gt; &gt; one-sided interfaces to the MTL?  (it must be before 2pm US Central)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16831.php">http://www.open-mpi.org/community/lists/devel/2015/01/16831.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Jan 2015 14:52:43 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Friedley, Andrew&quot; &lt;andrew.friedley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] For discussion tomorrow: MTL issues
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; 0429C22EBDB44040B478F8F77EF14518CA3D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything written up about recent Open MPI one-sided work?
</span><br>
<span class="quotelev1">&gt; Looking for something beyond just the code that I can study up on.. papers,
</span><br>
<span class="quotelev1">&gt; design docs, future plans, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev2">&gt; &gt; Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, January 28, 2015 4:26 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers List
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI devel] For discussion tomorrow: MTL issues
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MTL authors --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We had *some* discussion of MTL issues this afternoon in the room, but
</span><br>
<span class="quotelev2">&gt; &gt; need your input (since most of you are not here).  Here's what we'd like
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; talk about tomorrow (and we realize you might not have answers for this
</span><br>
<span class="quotelev2">&gt; &gt; tomorrow).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Short version: based on Mellanox's experience, why not ditch the CM PML
</span><br>
<span class="quotelev2">&gt; &gt; and have all current MTLs move up to be PMLs?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; More detail:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We all know that Mellanox moved their MXM MTL up to be a PML.  The short
</span><br>
<span class="quotelev2">&gt; &gt; version of &quot;why did they do this?&quot; is because CM really added no value
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt; MXM.  Literally, all it did was add overhead:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. translate some OMPI data structures to a neutral/CM data structure 2.
</span><br>
<span class="quotelev2">&gt; &gt; which was then translated into the MXM data structures 3. then call MXM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So why not chop out one of those layers:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. translate OMPI data structures into MXM data structures 2. then call
</span><br>
<span class="quotelev1">&gt; MXM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Taking a crass look at the existing MTLs, we wonder if it would be
</span><br>
<span class="quotelev1">&gt; worthwhile
</span><br>
<span class="quotelev2">&gt; &gt; to do the same thing for all of them.  It doesn't seem (to us) that it
</span><br>
<span class="quotelev1">&gt; would be
</span><br>
<span class="quotelev2">&gt; &gt; a lot of work -- the PML and MTL interfaces are quite similar.  And
</span><br>
<span class="quotelev1">&gt; there could
</span><br>
<span class="quotelev2">&gt; &gt; be message rate improvements for those MTLs-turned-PMLs, just like it did
</span><br>
<span class="quotelev2">&gt; &gt; for MXM/yalla.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *If* this is a good assumption -- that MTLs should all become PMLs --
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev2">&gt; &gt; MPI one-sided operations become the next logical question.  I.e., what
</span><br>
<span class="quotelev2">&gt; &gt; happens when you call MPI_PUT / MPI_GET / etc.?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right now, you'll end up using the osc/pt2pt component, which will use
</span><br>
<span class="quotelev1">&gt; PML
</span><br>
<span class="quotelev2">&gt; &gt; calls to effect MPI RMA functionality over the PML interface.  Which is
</span><br>
<span class="quotelev1">&gt; fine,
</span><br>
<span class="quotelev2">&gt; &gt; and will work correctly in all cases.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, MTL-turned-PML authors will then have the option of writing an
</span><br>
<span class="quotelev2">&gt; &gt; osc/YOUR_COMPONENT for doing optimized MPI-one-sided operations on
</span><br>
<span class="quotelev2">&gt; &gt; your network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is what we would like to discuss with you tomorrow.  Tell us that
</span><br>
<span class="quotelev1">&gt; this idea
</span><br>
<span class="quotelev2">&gt; &gt; is crazy, or that it's ok, or that you need to think about it, ...etc.
</span><br>
<span class="quotelev1">&gt; Let's chat.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt; &gt; mpi.org/community/lists/devel/2015/01/16836.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Jan 2015 15:02:25 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Webex for this morning
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;BC07DA89-30CB-4DDE-B8EE-EFB46C2D805C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're just starting this morning.  We've joined a running webex if anyone
</span><br>
<span class="quotelev1">&gt; feels like joining.  Here's what we'll be talking about this morning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/wiki/Meeting-2015-01#topics-still-to-discuss">https://github.com/open-mpi/ompi/wiki/Meeting-2015-01#topics-still-to-discuss</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MTL discussion will be at 1pm US Central today.  It'll *probably* be
</span><br>
<span class="quotelev1">&gt; the same webex link.  I'll send out whatever the correct webex link is --
</span><br>
<span class="quotelev1">&gt; even if it's the same one -- slightly before the 1pm US Central start time
</span><br>
<span class="quotelev1">&gt; today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 6
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Jan 2015 15:04:05 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] For discussion tomorrow: MTL issues
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;422D01EB-A42B-4F8F-B33D-A5C577217C1C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 29, 2015, at 8:52 AM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there anything written up about recent Open MPI one-sided work?
</span><br>
<span class="quotelev1">&gt; Looking for something beyond just the code that I can study up on.. papers,
</span><br>
<span class="quotelev1">&gt; design docs, future plans, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doubtful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the main intent for the original discussion is that Nathan had
</span><br>
<span class="quotelev1">&gt; some ideas about extending the MTL interface to include some one-sided
</span><br>
<span class="quotelev1">&gt; functionality so MPI_PUT/MPI_GET/etc. could turn into nice native RMA
</span><br>
<span class="quotelev1">&gt; support in MTLs as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That discussion, however, combined with the MXM/Yalla discussion, turned
</span><br>
<span class="quotelev1">&gt; into the ideas / email I sent yesterday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 7
</span><br>
<span class="quotelev1">&gt; Date: Thu, 29 Jan 2015 15:06:35 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Webex for this morning
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C9328216-AE7F-4572-82E5-6F03C4FDEE61_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sigh.  That's the wiki link, not the webex link.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the webex link for this morning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://cisco.webex.com/cisco/e.php?MTID=m5da65867500cfd51e7a1ed895b2e2a8d">https://cisco.webex.com/cisco/e.php?MTID=m5da65867500cfd51e7a1ed895b2e2a8d</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 29, 2015, at 9:02 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We're just starting this morning.  We've joined a running webex if
</span><br>
<span class="quotelev1">&gt; anyone feels like joining.  Here's what we'll be talking about this morning:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/wiki/Meeting-2015-01#topics-still-to-discuss">https://github.com/open-mpi/ompi/wiki/Meeting-2015-01#topics-still-to-discuss</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The MTL discussion will be at 1pm US Central today.  It'll *probably* be
</span><br>
<span class="quotelev1">&gt; the same webex link.  I'll send out whatever the correct webex link is --
</span><br>
<span class="quotelev1">&gt; even if it's the same one -- slightly before the 1pm US Central start time
</span><br>
<span class="quotelev1">&gt; today.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16842.php">http://www.open-mpi.org/community/lists/devel/2015/01/16842.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of devel Digest, Vol 2905, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16871/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16872.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16870.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reporting bugs in the github world"</a>
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
