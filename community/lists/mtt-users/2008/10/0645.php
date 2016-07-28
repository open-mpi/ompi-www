<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 13:56:47 2008" -->
<!-- isoreceived="20081031175647" -->
<!-- sent="Fri, 31 Oct 2008 12:56:15 -0500" -->
<!-- isosent="20081031175615" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)" -->
<!-- id="20081031175614.GA12134_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="01694EDB-2895-4FE2-B9BF-7B398F93BC0B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 13:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0642.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Reply:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct/31/2008 01:01:02PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Re-sending to the MTT list, because I think our listserver will 
</span><br>
<span class="quotelev1">&gt; automatically block Brian (I'll add him to the whitelist for future 
</span><br>
<span class="quotelev1">&gt; posts!).
</span><br>
<p>I'm getting a syntax error: 
<br>
<p>&nbsp;&nbsp;$ whatami
<br>
&nbsp;&nbsp;whatami: syntax error at line 149:  `DISTRIB_ID=$' unexpected
<br>
<p>Not sure if I'm doing a bad copy/paste out of my mail
<br>
client. Jeff, can you send the new whatami script as an
<br>
attachment?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 12:56 PM, Brian Elliott Finley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've taken a look at Ethan's patch.  I like the patch, and I like the
</span><br>
<span class="quotelev2">&gt;&gt; concept.  I made a small modification to it, breaking it out into a
</span><br>
<span class="quotelev2">&gt;&gt; subroutine, which I think makes the logic a bit easier to follow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Take a look and try this out.  If it works for you, I'll commit it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers, -Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's commit Ethan's patch, then, and see what Brian wants to do 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upstream.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 31, 2008, at 11:57 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry about that, I missed that Ethan had supplied a workaround
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; patch.  Oops.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ethan's patch works for me on sles9.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Oct 31, 2008 at 11:42 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ok.  Does Ethan's patch work for you, or should we just revert to our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prior
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version until upstream is fixed?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 31, 2008, at 11:39 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The new version of whatami is what broke sles9.  That new version
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; assumes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that if an /etc/lsb-release file exists that it has info about what
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; distribution it is.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLES seems to only put in what LSB it conforms to (the LSB_VERSION
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment variable).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Whatami should check if it got all the info it needs from the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lsb-release
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and if not, fall back to something else that worked before.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I just reverted the whatami I am using on BigRed to MTT's r1236 and it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; again.  No rush to fix this for me, but it is bad that whatami seems 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; now
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be broken for two major SLES releases (9 &amp; 10).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Oct 31, 2008 at 11:29 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which patch broke BigRed -- Ethan's patch, or Brian's original new
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of whatami?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 31, 2008, at 11:20 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This change also broke whatami for sles9 (which happens to be what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; BigRed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PPC cluster is running).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2008/10/30 Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using your &quot;whatami&quot; in the MPI Testing Tool (MTT), but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think a recent change to it broke for our sles10 system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We have an lsb-release file that is different from what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;whatami&quot; expects:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ cat /etc/lsb-release
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0-x86_64:core-3.0-x86_64&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Linux burl-ct-v20z-6 2.6.16.46-0.12-smp #1 SMP Thu May 17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 14:00:09 UTC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I attached a patch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian Elliott Finley
</span><br>
<span class="quotelev2">&gt;&gt; CIS / Argonne National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Office: 630.252.4742
</span><br>
<span class="quotelev2">&gt;&gt; Mobile: 630.631.6621
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # whatami
</span><br>
<span class="quotelev2">&gt;&gt; # Prints a string describing the system type.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #   $Id:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # &quot;whatami&quot; is part of Msys, the MCS Systems Administration Toolkit.
</span><br>
<span class="quotelev2">&gt;&gt; # For more information, see <a href="http://www.mcs.anl.gov/systems/software/">http://www.mcs.anl.gov/systems/software/</a> .
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) University of Chicago 1999.
</span><br>
<span class="quotelev2">&gt;&gt; # See the COPYRIGHT file in the distribution for details on the copyright.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Description:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Try to figure out what type of machine we're running on.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # The string returned is one that is useful to distinguish between
</span><br>
<span class="quotelev2">&gt;&gt; # system architectures, where we think of machines with the same 
</span><br>
<span class="quotelev2">&gt;&gt; architectures
</span><br>
<span class="quotelev2">&gt;&gt; # as machines that should be using the same set of compiled software.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # One would think that you could already get such a string from an 
</span><br>
<span class="quotelev2">&gt;&gt; existing
</span><br>
<span class="quotelev2">&gt;&gt; # UNIX utility.  But, no, this appears not to be the case.  &quot;uname&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; # &quot;arch&quot; come close, but are inconsistent.  Thus this script is basically
</span><br>
<span class="quotelev2">&gt;&gt; # a wrapper around those.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Several other programs in the Msys distribution (and innumerable scripts
</span><br>
<span class="quotelev2">&gt;&gt; # around MCS) call this program.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # TODO:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Authors:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #   Remy Evard &lt;evard_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Version 1.0 and 2.0:
</span><br>
<span class="quotelev2">&gt;&gt; #   2003.03.12 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - added get_linux_type function to provide a three part type:
</span><br>
<span class="quotelev2">&gt;&gt; #         Ie: linux-debian_unstable-ia32, or linux-sles8-ia64
</span><br>
<span class="quotelev2">&gt;&gt; #       - added -o (option_test)
</span><br>
<span class="quotelev2">&gt;&gt; #   2003.10.16 Larry A. Diegel &lt;diegella_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - patch for aix-5
</span><br>
<span class="quotelev2">&gt;&gt; #   2004.01.17 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - modified --help output
</span><br>
<span class="quotelev2">&gt;&gt; #       - accept --long-options as well as -s (short options)
</span><br>
<span class="quotelev2">&gt;&gt; #   2004.02.04 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - identify macosx on ppc and ppc64
</span><br>
<span class="quotelev2">&gt;&gt; #       - identify linux on Opteron (x86_64)
</span><br>
<span class="quotelev2">&gt;&gt; #   2004.02.26 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - add redhat AS
</span><br>
<span class="quotelev2">&gt;&gt; #       - add mandrake 9.1
</span><br>
<span class="quotelev2">&gt;&gt; #       - add redhat 9
</span><br>
<span class="quotelev2">&gt;&gt; #       - add redhat 8
</span><br>
<span class="quotelev2">&gt;&gt; #   2005.01.19 Susan Coghlan &lt;smc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - add sles8 PPC64
</span><br>
<span class="quotelev2">&gt;&gt; #   2005.02.01 Susan Coghlan &lt;smc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - add sles9
</span><br>
<span class="quotelev2">&gt;&gt; #   2005.03.07 Brian Elliott Finley
</span><br>
<span class="quotelev2">&gt;&gt; #       - add rhel, and deal w/different versions, sub-distros (AS|EL|WS)
</span><br>
<span class="quotelev2">&gt;&gt; #   2005.04.21 Peter Couvares &lt;pfc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - add tao linux 1.0, cygwin
</span><br>
<span class="quotelev2">&gt;&gt; #   2005.04.22 Ti Leggett &lt;leggett_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - add Gentoo
</span><br>
<span class="quotelev2">&gt;&gt; #   2006.03.14 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - more precise AIX type, aix-{version}.{release}
</span><br>
<span class="quotelev2">&gt;&gt; #       - add Cray Rocks 1.3
</span><br>
<span class="quotelev2">&gt;&gt; #       - add CentOS 4.0
</span><br>
<span class="quotelev2">&gt;&gt; #       - add SGI ProPack 3 -&gt; rhel3
</span><br>
<span class="quotelev2">&gt;&gt; #       - add SGI ProPack 4 -&gt; sles9
</span><br>
<span class="quotelev2">&gt;&gt; #       - add SuSE 9.1
</span><br>
<span class="quotelev2">&gt;&gt; #   2006.03.21 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - add Fedora Core &lt;n&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - drop RHEL sub-distros
</span><br>
<span class="quotelev2">&gt;&gt; #       - ClassAd output support
</span><br>
<span class="quotelev2">&gt;&gt; #       - XML output support
</span><br>
<span class="quotelev2">&gt;&gt; #   2006.03.30 Ti Leggett &lt;leggett_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Fixed CentOS to recognize 4.x instead of only 4.0
</span><br>
<span class="quotelev2">&gt;&gt; #   2006.10.17 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Add SuSE 10.1
</span><br>
<span class="quotelev2">&gt;&gt; #   2007.01.02 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Add SuSE 10.2
</span><br>
<span class="quotelev2">&gt;&gt; #   2007.02.06 Ti Leggett &lt;leggett_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Add MacOS on Intel support
</span><br>
<span class="quotelev2">&gt;&gt; #   2008.10.14 Brian Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Add generic lsb_release support
</span><br>
<span class="quotelev2">&gt;&gt; #         - includes CentOS 5.x
</span><br>
<span class="quotelev2">&gt;&gt; #   2008.10.30 Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Support two different SuSE 10 lsb-release file formats
</span><br>
<span class="quotelev2">&gt;&gt; #   2008.10.30 Brian Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #       - Turn Ethan's code and concept into a subroutine.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #   Authors -- Be sure to increment the version number appropriately!
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Exit codes:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #   0 on success
</span><br>
<span class="quotelev2">&gt;&gt; #   1 on failure to grok arguments or figure out architecture details
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Machine type strings:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #   sun4
</span><br>
<span class="quotelev2">&gt;&gt; #   irix-5
</span><br>
<span class="quotelev2">&gt;&gt; #   irix-6
</span><br>
<span class="quotelev2">&gt;&gt; #   solaris
</span><br>
<span class="quotelev2">&gt;&gt; #   freebsd
</span><br>
<span class="quotelev2">&gt;&gt; #   aix-{version}.{release}
</span><br>
<span class="quotelev2">&gt;&gt; #   aux
</span><br>
<span class="quotelev2">&gt;&gt; #   hpux
</span><br>
<span class="quotelev2">&gt;&gt; #   mips
</span><br>
<span class="quotelev2">&gt;&gt; #   osf
</span><br>
<span class="quotelev2">&gt;&gt; #   digital
</span><br>
<span class="quotelev2">&gt;&gt; #   next
</span><br>
<span class="quotelev2">&gt;&gt; #   linux-{distro_and_version}-{architecture}
</span><br>
<span class="quotelev2">&gt;&gt; #   solaris86
</span><br>
<span class="quotelev2">&gt;&gt; #   solarishp
</span><br>
<span class="quotelev2">&gt;&gt; #   nt
</span><br>
<span class="quotelev2">&gt;&gt; #   ntalpha
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program=`echo $0 | sed 's:.*/::'`
</span><br>
<span class="quotelev2">&gt;&gt; version=&quot;2008.10.31&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################################################################
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Subroutines
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; get_lsb_info_if_available()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;        if [ -f /etc/lsb-release ]; then
</span><br>
<span class="quotelev2">&gt;&gt;            #
</span><br>
<span class="quotelev2">&gt;&gt;            # 1) Example contents of /etc/lsb-release from Ubuntu Hardy:
</span><br>
<span class="quotelev2">&gt;&gt;            #   DISTRIB_ID=Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt;            #   DISTRIB_RELEASE=8.04
</span><br>
<span class="quotelev2">&gt;&gt;            #   DISTRIB_CODENAME=hardy
</span><br>
<span class="quotelev2">&gt;&gt;            #   DISTRIB_DESCRIPTION=&quot;Ubuntu hardy (development branch)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;            # 2) Example contents of /etc/lsb-release from SLES 9:
</span><br>
<span class="quotelev2">&gt;&gt;            #   
</span><br>
<span class="quotelev2">&gt;&gt; LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0-x86_64:core-3.0-x86_64&quot;
</span><br>
<span class="quotelev2">&gt;&gt;            . /etc/lsb-release
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        elif [ -x /usr/bin/lsb_release ]; then
</span><br>
<span class="quotelev2">&gt;&gt;            DISTRIB_ID=$(/usr/bin/lsb_release -i | sed -e 's/^Distributor 
</span><br>
<span class="quotelev2">&gt;&gt; ID:[[:space:]]//')
</span><br>
<span class="quotelev2">&gt;&gt;            DISTRIB_RELEASE=$(/usr/bin/lsb_release -r | sed -e 
</span><br>
<span class="quotelev2">&gt;&gt; 's/^Release:[[:space:]]//')
</span><br>
<span class="quotelev2">&gt;&gt;        fi
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; get_linux_type()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        # Step 1)  Determine $hardware string (in Linux terms, based on 
</span><br>
<span class="quotelev2">&gt;&gt; architecture
</span><br>
<span class="quotelev2">&gt;&gt;        #          names used by the Linux kernel.  See 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/linux/hardware/ for
</span><br>
<span class="quotelev2">&gt;&gt;        #          details).
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        case $uhardware in
</span><br>
<span class="quotelev2">&gt;&gt;                alpha)
</span><br>
<span class="quotelev2">&gt;&gt;                        hardware=alpha
</span><br>
<span class="quotelev2">&gt;&gt;                        ;;
</span><br>
<span class="quotelev2">&gt;&gt;                i386|i486|i586|i686)
</span><br>
<span class="quotelev2">&gt;&gt;                        hardware=ia32
</span><br>
<span class="quotelev2">&gt;&gt;                        ;;
</span><br>
<span class="quotelev2">&gt;&gt;                ppc64)
</span><br>
<span class="quotelev2">&gt;&gt;                        hardware=ppc64
</span><br>
<span class="quotelev2">&gt;&gt;                        ;;
</span><br>
<span class="quotelev2">&gt;&gt;                ia64)
</span><br>
<span class="quotelev2">&gt;&gt;                        hardware=ia64
</span><br>
<span class="quotelev2">&gt;&gt;                        ;;
</span><br>
<span class="quotelev2">&gt;&gt;                x86_64)
</span><br>
<span class="quotelev2">&gt;&gt;                        hardware=x86_64
</span><br>
<span class="quotelev2">&gt;&gt;                        ;;
</span><br>
<span class="quotelev2">&gt;&gt;                *)
</span><br>
<span class="quotelev2">&gt;&gt;                        hardware=unknown_hardware_please_send_us_a_patch
</span><br>
<span class="quotelev2">&gt;&gt;                        ;;
</span><br>
<span class="quotelev2">&gt;&gt;        esac
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        # Step 2)  Determine $distro (distribution) string
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        #          NOTES: Put newer tests higher up, as they'll most
</span><br>
<span class="quotelev2">&gt;&gt;        #                 likely get hit first. -BEF-
</span><br>
<span class="quotelev2">&gt;&gt;        #          NOTES: But, make sure that newer programatic tests don't 
</span><br>
<span class="quotelev2">&gt;&gt; override
</span><br>
<span class="quotelev2">&gt;&gt;        #                 older tests with different results. -BEF-
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        # If lsb-release contains the DISTRIB* variables we need - use
</span><br>
<span class="quotelev2">&gt;&gt;        # them, otherwise, defer to tests later down the line.
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        get_lsb_info_if_available
</span><br>
<span class="quotelev2">&gt;&gt;        if [ &quot;${DISTRIB_ID}&quot; != &quot;&quot; -a &quot;${DISTRIB_RELEASE}&quot; != &quot;&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;            distro=${DISTRIB_ID}_${DISTRIB_RELEASE}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        elif [ -f /etc/issue ]; then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                if [ -e /etc/debian_version ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_brand=debian
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_version=`cat /etc/debian_version | sed 
</span><br>
<span class="quotelev2">&gt;&gt; 's#testing/##'`
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=${distro_brand}_${distro_version}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -e /etc/gentoo-release ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_brand=gentoo
</span><br>
<span class="quotelev2">&gt;&gt;                        # If you think there should be a version,
</span><br>
<span class="quotelev2">&gt;&gt;                        # uncomment out the following
</span><br>
<span class="quotelev2">&gt;&gt;                        #gentoo_profile=`readlink /etc/make.profile`
</span><br>
<span class="quotelev2">&gt;&gt;                        #distro_version=`basename ${gentoo_profile}`
</span><br>
<span class="quotelev2">&gt;&gt;                        #distro=${distro_brand}_${distro_version}
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=${distro_brand}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Scientific Linux SL release [0-9\.]+' 
</span><br>
<span class="quotelev2">&gt;&gt; /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_ver=&quot;`grep 'Scientific Linux' /etc/issue | 
</span><br>
<span class="quotelev2">&gt;&gt; sed -e 's/.*release \([0-9]*\.[0-9]*\).*/\1/'`&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=scientificlinux_$distro_ver
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Red Hat Enterprise Linux ([a-zA-Z]+) 
</span><br>
<span class="quotelev2">&gt;&gt; release [0-9]*' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_brand=rhel
</span><br>
<span class="quotelev2">&gt;&gt;                        #sub_distro=`    grep 'Red Hat' /etc/issue | sed -e 
</span><br>
<span class="quotelev2">&gt;&gt; 's/Red Hat Enterprise Linux \([A-Z][A-Z]\) release \([0-9]*\).*/\1/' `
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_version=`grep 'Red Hat' /etc/issue | sed -e 
</span><br>
<span class="quotelev2">&gt;&gt; 's/Red Hat Enterprise Linux \([a-zA-Z]*\) release \([0-9]*\).*/\2/' `
</span><br>
<span class="quotelev2">&gt;&gt;                        
</span><br>
<span class="quotelev2">&gt;&gt; #distro=${distro_brand}${distro_version}_${sub_distro}
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=${distro_brand}${distro_version}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Cray Rocks Linux release 1.3' 
</span><br>
<span class="quotelev2">&gt;&gt; /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=rh73
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SGI ProPack 3' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=rhel3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'CentOS release 4.[0-9]' /etc/issue`&quot; ]; 
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=rhel4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SuSE SLES 8' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=sles8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Red Hat Linux Advanced Server release 
</span><br>
<span class="quotelev2">&gt;&gt; 2.1AS ' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=redhat_2.1AS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Red Hat Linux release 9 ' /etc/issue`&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=redhat_9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Red Hat Linux release 8.0 ' /etc/issue`&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=redhat_8.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Mandrake Linux release 9.1 ' 
</span><br>
<span class="quotelev2">&gt;&gt; /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=mandrake_9.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SGI ProPack 4' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=sles9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SUSE LINUX Enterprise Server 9' 
</span><br>
<span class="quotelev2">&gt;&gt; /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=sles9
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SUSE Linux Enterprise Server 10' 
</span><br>
<span class="quotelev2">&gt;&gt; /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=sles10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SuSE SLES 8' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=sles8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'UnitedLinux 1.0' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=sles8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                # Welcome to SuSE Linux 9.0 (x86-64) - Kernel \r (\l)
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.0' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=suse_9.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.1' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=suse_9.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.2' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=suse_9.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.3' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=suse_9.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                # Welcome to SUSE LINUX 10.1 (i586) - Kernel \r (\l).
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SUSE LINUX 10\.1' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=suse_10.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                # Welcome to openSUSE 10.2 (i586) - Kernel \r (\l).
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SUSE 10\.2' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=suse_10.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'SUSE 10\.3' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=suse_10.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Tao Linux release 1 ' /etc/issue`&quot; ]; 
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=tao_1.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'Fedora Core ' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_brand=fc
</span><br>
<span class="quotelev2">&gt;&gt;                        distro_version=`grep 'Fedora Core ' /etc/issue | 
</span><br>
<span class="quotelev2">&gt;&gt; sed -e 's/Fedora Core release \([0-9]*\).*/\1/' `
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=${distro_brand}${distro_version}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                elif [ -n &quot;`egrep 'White Box Enterprise Linux release 3.0' 
</span><br>
<span class="quotelev2">&gt;&gt; /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=white_box_enterprise_linux_3.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                else
</span><br>
<span class="quotelev2">&gt;&gt;                        distro=unknown_linux_type_please_send_us_a_patch
</span><br>
<span class="quotelev2">&gt;&gt;                fi
</span><br>
<span class="quotelev2">&gt;&gt;        fi
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        # Step 3)  Put it all together as $type
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        type=linux-${distro}-${hardware}
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;        release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; get_darwin_info()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        # step 1)  determine $hardware (architecture) string
</span><br>
<span class="quotelev2">&gt;&gt;        #          (Should be one of ppc, ppc64.  Why these strings?  Well, 
</span><br>
<span class="quotelev2">&gt;&gt; we are
</span><br>
<span class="quotelev2">&gt;&gt;        #           taking them from the arches directory names in the 
</span><br>
<span class="quotelev2">&gt;&gt; linux kernel
</span><br>
<span class="quotelev2">&gt;&gt;        #           source.) -BEF-
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        if [ -n &quot;`system_profiler SPHardwareDataType|egrep '(CPU 
</span><br>
<span class="quotelev2">&gt;&gt; Type|Processor Name): PowerPC G4 '`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                hardware=ppc
</span><br>
<span class="quotelev2">&gt;&gt;        elif [ -n &quot;`system_profiler SPHardwareDataType|egrep '(CPU 
</span><br>
<span class="quotelev2">&gt;&gt; Type|Processor Name): PowerPC (970|G5) '`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                hardware=ppc64
</span><br>
<span class="quotelev2">&gt;&gt;        elif [ -n &quot;`system_profiler SPHardwareDataType|egrep 'Processor 
</span><br>
<span class="quotelev2">&gt;&gt; Name: Intel Core Duo'`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                hardware=ia32
</span><br>
<span class="quotelev2">&gt;&gt;        elif [ -n &quot;`system_profiler SPHardwareDataType|egrep 'Processor 
</span><br>
<span class="quotelev2">&gt;&gt; Name: (Dual-Core Intel Xeon|Intel Core 2 Duo)'`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                hardware=x86_64
</span><br>
<span class="quotelev2">&gt;&gt;        else
</span><br>
<span class="quotelev2">&gt;&gt;                hardware=unknown_darwin_hardware_please_send_us_a_patch
</span><br>
<span class="quotelev2">&gt;&gt;        fi
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        # step 2)  determine $distro (distribution) string
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        #          Thanks to JP Navarro for the get distro version string 
</span><br>
<span class="quotelev2">&gt;&gt; command
</span><br>
<span class="quotelev2">&gt;&gt;        #          below. -BEF-
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        distro_brand=macosx
</span><br>
<span class="quotelev2">&gt;&gt;        distro_version=`sw_vers -productVersion|sed -e 
</span><br>
<span class="quotelev2">&gt;&gt; 's/\([0-9]\{1,2\}\.[0-9]\{1,2\}\).*/\1/'`
</span><br>
<span class="quotelev2">&gt;&gt;        distro=${distro_brand}_${distro_version}
</span><br>
<span class="quotelev2">&gt;&gt;        if [ -z &quot;$distro&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                distro=unknown_darwin_version_please_send_us_a_patch
</span><br>
<span class="quotelev2">&gt;&gt;        fi
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        # Step 3)  Put it all together as $type
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        type=darwin-${distro}-${hardware}
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;        release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; ################################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Check the number of arguments and set the mode.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; mode=type
</span><br>
<span class="quotelev2">&gt;&gt; format=default
</span><br>
<span class="quotelev2">&gt;&gt; if [ $# = 1 ]; then
</span><br>
<span class="quotelev2">&gt;&gt;  case &quot;$1&quot; in
</span><br>
<span class="quotelev2">&gt;&gt;    --c*|-c* )
</span><br>
<span class="quotelev2">&gt;&gt;      format=classad
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --x*|-x* )
</span><br>
<span class="quotelev2">&gt;&gt;      format=xml
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --t*|-t* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=type
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --n*|-n* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=os
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --r*|-r* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=release
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --m*|-m* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=hardware
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --a*|-a* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=all
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --list-all* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=list_all
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --l*|-l* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=list
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --v*|-v* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=version
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --h*|-h* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=usage
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;    --o*|-o* )
</span><br>
<span class="quotelev2">&gt;&gt;      mode=option_test
</span><br>
<span class="quotelev2">&gt;&gt;      # Cycles through and tries each of the other options, for testing 
</span><br>
<span class="quotelev2">&gt;&gt; purposes.
</span><br>
<span class="quotelev2">&gt;&gt;      ;;
</span><br>
<span class="quotelev2">&gt;&gt;  esac
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ &quot;$mode&quot; = &quot;unknown&quot; -o &quot;$mode&quot; = &quot;usage&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;        echo &quot;$program $version&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        echo
</span><br>
<span class="quotelev2">&gt;&gt;        echo &quot;Usage: $program [OPTION]&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        echo
</span><br>
<span class="quotelev2">&gt;&gt;        cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt; whatami determines the &quot;platform&quot; of the system on which it is run.  This
</span><br>
<span class="quotelev2">&gt;&gt; can be used, for example, to determine which of a series of nfs mounted
</span><br>
<span class="quotelev2">&gt;&gt; software directories is appropriate for use by the system in question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No unix utility quite fulfills these requirements, so the &quot;whatami&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; program's
</span><br>
<span class="quotelev2">&gt;&gt; purpose is to return a single unique string for each platform.  This 
</span><br>
<span class="quotelev2">&gt;&gt; string
</span><br>
<span class="quotelev2">&gt;&gt; can then used in directory names, program switches, and in other clever 
</span><br>
<span class="quotelev2">&gt;&gt; ways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Options:
</span><br>
<span class="quotelev2">&gt;&gt; --help, -h
</span><br>
<span class="quotelev2">&gt;&gt;    This help message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --version, -v
</span><br>
<span class="quotelev2">&gt;&gt;    The version of $program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --type, -t
</span><br>
<span class="quotelev2">&gt;&gt;    Prints the platform type (the default).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --name, -n
</span><br>
<span class="quotelev2">&gt;&gt;    Prints out the name of the operating system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --release, -r
</span><br>
<span class="quotelev2">&gt;&gt;    Prints out the name and release of the os, separated by a space.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --machine, -m
</span><br>
<span class="quotelev2">&gt;&gt;    Prints out the architecture type for the machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --all, -a
</span><br>
<span class="quotelev2">&gt;&gt;    Prints platform type, hardware, os, and version, seperated by a space.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --list, -l
</span><br>
<span class="quotelev2">&gt;&gt;    Lists summary of known description strings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please send patches to MCS Systems &lt;systems_at_[hidden]&gt;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        if [ &quot;$mode&quot; = &quot;usage&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                exit 0
</span><br>
<span class="quotelev2">&gt;&gt;        else
</span><br>
<span class="quotelev2">&gt;&gt;                exit 1
</span><br>
<span class="quotelev2">&gt;&gt;        fi
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Okay, now we know what we should do... if the mode is list or the 
</span><br>
<span class="quotelev2">&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt; # that's easy to get out of the way.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Be sure to add to this list whenever a new architecture is figured out.
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ &quot;$mode&quot; = &quot;list&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;        cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt; type:      cpu    os       version
</span><br>
<span class="quotelev2">&gt;&gt; ==================================
</span><br>
<span class="quotelev2">&gt;&gt; linux: (potential linux platform strings are numerous,
</span><br>
<span class="quotelev2">&gt;&gt;        and may not be known in advance)
</span><br>
<span class="quotelev2">&gt;&gt; aix-3.x:   *      AIX      3.x
</span><br>
<span class="quotelev2">&gt;&gt; aix-4.x:   *      AIX      4.x
</span><br>
<span class="quotelev2">&gt;&gt; aix-5.x:   *      AIX      5.x
</span><br>
<span class="quotelev2">&gt;&gt; aux:       *      A/UX     *
</span><br>
<span class="quotelev2">&gt;&gt; freebsd:   *      FreeBSD  *
</span><br>
<span class="quotelev2">&gt;&gt; hpux:      *      HP-UX    *
</span><br>
<span class="quotelev2">&gt;&gt; irix-5:    *      IRIX     5.x
</span><br>
<span class="quotelev2">&gt;&gt; irix-6:    *      IRIX     6.x
</span><br>
<span class="quotelev2">&gt;&gt; osf:       *      OSF1     *
</span><br>
<span class="quotelev2">&gt;&gt; solaris:   sparc  SunOS    5.x
</span><br>
<span class="quotelev2">&gt;&gt; sun4:      sparc  SunOS    4.x
</span><br>
<span class="quotelev2">&gt;&gt; ultrix:    *      Ultrix   *
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt;  exit 0
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ &quot;$mode&quot; = &quot;version&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;  echo &quot;$program $version&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  exit 0
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ &quot;$mode&quot; = &quot;option_test&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;  #
</span><br>
<span class="quotelev2">&gt;&gt;  # Test all options for whatami (except this one, of course)
</span><br>
<span class="quotelev2">&gt;&gt;  #
</span><br>
<span class="quotelev2">&gt;&gt;  for opt in -t -n -r -m -a -v --version -h --help -l
</span><br>
<span class="quotelev2">&gt;&gt;  do
</span><br>
<span class="quotelev2">&gt;&gt;      cmd=&quot;$0 $opt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      echo -n &quot;$cmd: &quot;
</span><br>
<span class="quotelev2">&gt;&gt;      $cmd
</span><br>
<span class="quotelev2">&gt;&gt;      if [ ! $? = 0 ]; then
</span><br>
<span class="quotelev2">&gt;&gt;        echo &quot;Failed on option $opt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        exit 1
</span><br>
<span class="quotelev2">&gt;&gt;      fi
</span><br>
<span class="quotelev2">&gt;&gt;  done
</span><br>
<span class="quotelev2">&gt;&gt;  exit 0
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Find uname, store its location in $UNAME
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; UNAME=unknown
</span><br>
<span class="quotelev2">&gt;&gt; for dir in `echo $PATH | sed 's/:/ /g'` ; do
</span><br>
<span class="quotelev2">&gt;&gt;  if [ -f $dir/uname ]; then
</span><br>
<span class="quotelev2">&gt;&gt;    UNAME=$dir/uname
</span><br>
<span class="quotelev2">&gt;&gt;    break
</span><br>
<span class="quotelev2">&gt;&gt;  fi
</span><br>
<span class="quotelev2">&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ &quot;$UNAME&quot; = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;  echo &quot;Unable to locate uname in the path, which means we're out of luck.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  exit 1
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Now we try to figure out what we're running on.  First we try to get
</span><br>
<span class="quotelev2">&gt;&gt; # close to the machine type, then we look at the mode and figure out what
</span><br>
<span class="quotelev2">&gt;&gt; # we need to print out.
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; uos=`($UNAME -s)       2&gt;/dev/null` || uos=unknown
</span><br>
<span class="quotelev2">&gt;&gt; urelease=`($UNAME -r)  2&gt;/dev/null` || urelease=unknown
</span><br>
<span class="quotelev2">&gt;&gt; uhardware=`($UNAME -m) 2&gt;/dev/null` || uhardware=unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; type=unknown
</span><br>
<span class="quotelev2">&gt;&gt; os=unknown
</span><br>
<span class="quotelev2">&gt;&gt; release=unknown
</span><br>
<span class="quotelev2">&gt;&gt; hardware=unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; case &quot;${uos}:${urelease}:${uhardware}&quot; in
</span><br>
<span class="quotelev2">&gt;&gt;  AIX:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    release=`$UNAME -v 2&gt;/dev/null` || release=unknown
</span><br>
<span class="quotelev2">&gt;&gt; #   case $release in
</span><br>
<span class="quotelev2">&gt;&gt; #     3)
</span><br>
<span class="quotelev2">&gt;&gt; #       type=aix-3
</span><br>
<span class="quotelev2">&gt;&gt; #       ;;
</span><br>
<span class="quotelev2">&gt;&gt; #     4)
</span><br>
<span class="quotelev2">&gt;&gt; #       type=aix-4
</span><br>
<span class="quotelev2">&gt;&gt; #       ;;
</span><br>
<span class="quotelev2">&gt;&gt; #     5)
</span><br>
<span class="quotelev2">&gt;&gt; #       type=aix-5
</span><br>
<span class="quotelev2">&gt;&gt; #       ;;
</span><br>
<span class="quotelev2">&gt;&gt; #   esac
</span><br>
<span class="quotelev2">&gt;&gt;    type=aix-$release.$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  A/UX:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=aux
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  CYGWIN_NT-5.1:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=cygwin-5.1
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Darwin:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    get_darwin_info
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  FreeBSD:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=freebsd
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  HP-UX:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=hpux
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  IRIX:5*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=irix-5
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=`$UNAME -p 2&gt;/dev/null` || hardware=unknown
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  # On alaska, uname-&gt;IRIX64, but IRIX everywhere else.
</span><br>
<span class="quotelev2">&gt;&gt;  IRIX*:6*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=irix-6
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=`$UNAME -p 2&gt;/dev/null` || hardware=unknown
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Linux:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    case $uhardware in
</span><br>
<span class="quotelev2">&gt;&gt; 	alpha)
</span><br>
<span class="quotelev2">&gt;&gt;        # legacy definition
</span><br>
<span class="quotelev2">&gt;&gt; 	    type=linux-alpha
</span><br>
<span class="quotelev2">&gt;&gt; 	    ;;
</span><br>
<span class="quotelev2">&gt;&gt; 	*)
</span><br>
<span class="quotelev2">&gt;&gt;        # legacy definitions
</span><br>
<span class="quotelev2">&gt;&gt; 	    if [ -f /etc/issue ]; then
</span><br>
<span class="quotelev2">&gt;&gt; 		if [ -n &quot;`cat /etc/issue | grep &quot;Mandrake release 7.2&quot;`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt; 		    type=linux-2
</span><br>
<span class="quotelev2">&gt;&gt; 		elif [ -n &quot;`cat /etc/issue | grep &quot;Red Hat Linux release 7.1&quot;`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt; 		    type=linux-rh71
</span><br>
<span class="quotelev2">&gt;&gt; 		elif [ -n &quot;`cat /etc/issue | grep &quot;Red Hat Linux release 7.2&quot;`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt; 		    type=linux-rh72
</span><br>
<span class="quotelev2">&gt;&gt; 		elif [ -n &quot;`cat /etc/issue | grep &quot;Red Hat Linux release 7.3&quot;`&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt; 		    type=linux-rh73
</span><br>
<span class="quotelev2">&gt;&gt; 		else
</span><br>
<span class="quotelev2">&gt;&gt; 		    get_linux_type
</span><br>
<span class="quotelev2">&gt;&gt; 		fi
</span><br>
<span class="quotelev2">&gt;&gt; 	    else
</span><br>
<span class="quotelev2">&gt;&gt; 		type=linux
</span><br>
<span class="quotelev2">&gt;&gt; 	    fi
</span><br>
<span class="quotelev2">&gt;&gt; 	    ;;
</span><br>
<span class="quotelev2">&gt;&gt;    esac
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  SunOS:4*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=sun4
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=`/bin/arch -k` || hardware=unknown
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  SunOS:5*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    solaris_version=`uname -r | sed 's/^5\.//'`
</span><br>
<span class="quotelev2">&gt;&gt;    type=solaris-${solaris_version}
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=`/bin/arch -k` || hardware=unknown
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  OSF1:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=osf
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ULTRIX:*:*)
</span><br>
<span class="quotelev2">&gt;&gt;    type=ultrix
</span><br>
<span class="quotelev2">&gt;&gt;    os=$uos
</span><br>
<span class="quotelev2">&gt;&gt;    release=$urelease
</span><br>
<span class="quotelev2">&gt;&gt;    hardware=$uhardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; esac
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exit_code=0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; grid=&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Got all the info, now just print the right stuff based on mode.
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt;&gt; case $format in
</span><br>
<span class="quotelev2">&gt;&gt;  classad)
</span><br>
<span class="quotelev2">&gt;&gt;    echo ${grid}whatami_type = \&quot;$type\&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    echo ${grid}whatami_os = \&quot;$os\&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    echo ${grid}whatami_release = \&quot;$release\&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    echo ${grid}whatami_hardware = \&quot;$hardware\&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    if [ $os = &quot;Linux&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;       echo ${grid}whatami_distro = \&quot;$distro\&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    fi
</span><br>
<span class="quotelev2">&gt;&gt;    exit
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;  xml)
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;&lt;${grid}whatami&gt;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;  &lt;type&gt;$type&lt;/type&gt;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;  &lt;os&gt;$os&lt;/os&gt;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;  &lt;release&gt;$release&lt;/release&gt;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;  &lt;hardware&gt;$hardware&lt;/hardware&gt;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    if [ $os = &quot;Linux&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;       echo &quot;  &lt;distro&gt;$distro&lt;/distro&gt;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    fi
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;&lt;/${grid}whatami&gt;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    exit
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt; esac
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; case $mode in
</span><br>
<span class="quotelev2">&gt;&gt;  type)
</span><br>
<span class="quotelev2">&gt;&gt;    if [ $type = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;      exit_code=1
</span><br>
<span class="quotelev2">&gt;&gt;    fi
</span><br>
<span class="quotelev2">&gt;&gt;    echo $type
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  os)
</span><br>
<span class="quotelev2">&gt;&gt;    if [ $os = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;      exit_code=1
</span><br>
<span class="quotelev2">&gt;&gt;    fi
</span><br>
<span class="quotelev2">&gt;&gt;    echo $os
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  release)
</span><br>
<span class="quotelev2">&gt;&gt;    if [ $os = &quot;unknown&quot; -o $release = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;      exit_code=1
</span><br>
<span class="quotelev2">&gt;&gt;    fi
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;$os $release&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  hardware)
</span><br>
<span class="quotelev2">&gt;&gt;    if [ $hardware = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;      exit_code=1
</span><br>
<span class="quotelev2">&gt;&gt;    fi
</span><br>
<span class="quotelev2">&gt;&gt;    echo $hardware
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  all)
</span><br>
<span class="quotelev2">&gt;&gt;    if [    $hardware = &quot;unknown&quot; \
</span><br>
<span class="quotelev2">&gt;&gt; 	 -o $os = &quot;unknown&quot;   \
</span><br>
<span class="quotelev2">&gt;&gt; 	 -o $release = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;      exit_code=1
</span><br>
<span class="quotelev2">&gt;&gt;    fi
</span><br>
<span class="quotelev2">&gt;&gt;    echo &quot;$type $hardware $os $release&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    ;;
</span><br>
<span class="quotelev2">&gt;&gt; esac
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exit $exit_code
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0644.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>In reply to:</strong> <a href="0642.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>Reply:</strong> <a href="0646.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
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
