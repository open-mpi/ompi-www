<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 13:01:11 2008" -->
<!-- isoreceived="20081031170111" -->
<!-- sent="Fri, 31 Oct 2008 13:01:02 -0400" -->
<!-- isosent="20081031170102" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)" -->
<!-- id="01694EDB-2895-4FE2-B9BF-7B398F93BC0B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="490B38C7.2060703_at_anl.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 13:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0643.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0634.php">Ethan Mallove: "[MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)"</a>
<li><strong>Reply:</strong> <a href="0645.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Re-sending to the MTT list, because I think our listserver will  
<br>
automatically block Brian (I'll add him to the whitelist for future  
<br>
posts!).
<br>
<p><p>On Oct 31, 2008, at 12:56 PM, Brian Elliott Finley wrote:
<br>
<p><span class="quotelev1">&gt; I've taken a look at Ethan's patch.  I like the patch, and I like the
</span><br>
<span class="quotelev1">&gt; concept.  I made a small modification to it, breaking it out into a
</span><br>
<span class="quotelev1">&gt; subroutine, which I think makes the logic a bit easier to follow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Take a look and try this out.  If it works for you, I'll commit it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers, -Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Let's commit Ethan's patch, then, and see what Brian wants to do  
</span><br>
<span class="quotelev2">&gt;&gt; upstream.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2008, at 11:57 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry about that, I missed that Ethan had supplied a workaround
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch.  Oops.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan's patch works for me on sles9.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Oct 31, 2008 at 11:42 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok.  Does Ethan's patch work for you, or should we just revert to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version until upstream is fixed?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 31, 2008, at 11:39 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The new version of whatami is what broke sles9.  That new version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; assumes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that if an /etc/lsb-release file exists that it has info about  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; distribution it is.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SLES seems to only put in what LSB it conforms to (the LSB_VERSION
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment variable).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Whatami should check if it got all the info it needs from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lsb-release
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and if not, fall back to something else that worked before.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just reverted the whatami I am using on BigRed to MTT's r1236  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; works
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; again.  No rush to fix this for me, but it is bad that whatami  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; seems to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; now
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be broken for two major SLES releases (9 &amp; 10).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, Oct 31, 2008 at 11:29 AM, Jeff Squyres  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Which patch broke BigRed -- Ethan's patch, or Brian's original  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; new
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of whatami?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 31, 2008, at 11:20 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This change also broke whatami for sles9 (which happens to be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; our
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; BigRed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; PPC cluster is running).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2008/10/30 Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using your &quot;whatami&quot; in the MPI Testing Tool (MTT), but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think a recent change to it broke for our sles10 system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We have an lsb-release file that is different from what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;whatami&quot; expects:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ cat /etc/lsb-release
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; x86_64:core-3.0-x86_64&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Linux burl-ct-v20z-6 2.6.16.46-0.12-smp #1 SMP Thu May 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 14:00:09 UTC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I attached a patch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Brian Elliott Finley
</span><br>
<span class="quotelev1">&gt; CIS / Argonne National Laboratory
</span><br>
<span class="quotelev1">&gt; Office: 630.252.4742
</span><br>
<span class="quotelev1">&gt; Mobile: 630.631.6621
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # whatami
</span><br>
<span class="quotelev1">&gt; # Prints a string describing the system type.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #   $Id:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # &quot;whatami&quot; is part of Msys, the MCS Systems Administration Toolkit.
</span><br>
<span class="quotelev1">&gt; # For more information, see <a href="http://www.mcs.anl.gov/systems/software/">http://www.mcs.anl.gov/systems/software/</a> .
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Copyright (c) University of Chicago 1999.
</span><br>
<span class="quotelev1">&gt; # See the COPYRIGHT file in the distribution for details on the  
</span><br>
<span class="quotelev1">&gt; copyright.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Description:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Try to figure out what type of machine we're running on.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # The string returned is one that is useful to distinguish between
</span><br>
<span class="quotelev1">&gt; # system architectures, where we think of machines with the same  
</span><br>
<span class="quotelev1">&gt; architectures
</span><br>
<span class="quotelev1">&gt; # as machines that should be using the same set of compiled software.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # One would think that you could already get such a string from an  
</span><br>
<span class="quotelev1">&gt; existing
</span><br>
<span class="quotelev1">&gt; # UNIX utility.  But, no, this appears not to be the case.  &quot;uname&quot;  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; # &quot;arch&quot; come close, but are inconsistent.  Thus this script is  
</span><br>
<span class="quotelev1">&gt; basically
</span><br>
<span class="quotelev1">&gt; # a wrapper around those.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Several other programs in the Msys distribution (and innumerable  
</span><br>
<span class="quotelev1">&gt; scripts
</span><br>
<span class="quotelev1">&gt; # around MCS) call this program.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; # TODO:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Authors:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #   Remy Evard &lt;evard_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Version 1.0 and 2.0:
</span><br>
<span class="quotelev1">&gt; #   2003.03.12 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - added get_linux_type function to provide a three part type:
</span><br>
<span class="quotelev1">&gt; #         Ie: linux-debian_unstable-ia32, or linux-sles8-ia64
</span><br>
<span class="quotelev1">&gt; #       - added -o (option_test)
</span><br>
<span class="quotelev1">&gt; #   2003.10.16 Larry A. Diegel &lt;diegella_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - patch for aix-5
</span><br>
<span class="quotelev1">&gt; #   2004.01.17 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - modified --help output
</span><br>
<span class="quotelev1">&gt; #       - accept --long-options as well as -s (short options)
</span><br>
<span class="quotelev1">&gt; #   2004.02.04 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - identify macosx on ppc and ppc64
</span><br>
<span class="quotelev1">&gt; #       - identify linux on Opteron (x86_64)
</span><br>
<span class="quotelev1">&gt; #   2004.02.26 Brian Elliott Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - add redhat AS
</span><br>
<span class="quotelev1">&gt; #       - add mandrake 9.1
</span><br>
<span class="quotelev1">&gt; #       - add redhat 9
</span><br>
<span class="quotelev1">&gt; #       - add redhat 8
</span><br>
<span class="quotelev1">&gt; #   2005.01.19 Susan Coghlan &lt;smc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - add sles8 PPC64
</span><br>
<span class="quotelev1">&gt; #   2005.02.01 Susan Coghlan &lt;smc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - add sles9
</span><br>
<span class="quotelev1">&gt; #   2005.03.07 Brian Elliott Finley
</span><br>
<span class="quotelev1">&gt; #       - add rhel, and deal w/different versions, sub-distros (AS| 
</span><br>
<span class="quotelev1">&gt; EL|WS)
</span><br>
<span class="quotelev1">&gt; #   2005.04.21 Peter Couvares &lt;pfc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - add tao linux 1.0, cygwin
</span><br>
<span class="quotelev1">&gt; #   2005.04.22 Ti Leggett &lt;leggett_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - add Gentoo
</span><br>
<span class="quotelev1">&gt; #   2006.03.14 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - more precise AIX type, aix-{version}.{release}
</span><br>
<span class="quotelev1">&gt; #       - add Cray Rocks 1.3
</span><br>
<span class="quotelev1">&gt; #       - add CentOS 4.0
</span><br>
<span class="quotelev1">&gt; #       - add SGI ProPack 3 -&gt; rhel3
</span><br>
<span class="quotelev1">&gt; #       - add SGI ProPack 4 -&gt; sles9
</span><br>
<span class="quotelev1">&gt; #       - add SuSE 9.1
</span><br>
<span class="quotelev1">&gt; #   2006.03.21 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - add Fedora Core &lt;n&gt;
</span><br>
<span class="quotelev1">&gt; #       - drop RHEL sub-distros
</span><br>
<span class="quotelev1">&gt; #       - ClassAd output support
</span><br>
<span class="quotelev1">&gt; #       - XML output support
</span><br>
<span class="quotelev1">&gt; #   2006.03.30 Ti Leggett &lt;leggett_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Fixed CentOS to recognize 4.x instead of only 4.0
</span><br>
<span class="quotelev1">&gt; #   2006.10.17 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Add SuSE 10.1
</span><br>
<span class="quotelev1">&gt; #   2007.01.02 JP Navarro &lt;navarro_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Add SuSE 10.2
</span><br>
<span class="quotelev1">&gt; #   2007.02.06 Ti Leggett &lt;leggett_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Add MacOS on Intel support
</span><br>
<span class="quotelev1">&gt; #   2008.10.14 Brian Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Add generic lsb_release support
</span><br>
<span class="quotelev1">&gt; #         - includes CentOS 5.x
</span><br>
<span class="quotelev1">&gt; #   2008.10.30 Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Support two different SuSE 10 lsb-release file formats
</span><br>
<span class="quotelev1">&gt; #   2008.10.30 Brian Finley &lt;finley_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; #       - Turn Ethan's code and concept into a subroutine.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #   Authors -- Be sure to increment the version number appropriately!
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Exit codes:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #   0 on success
</span><br>
<span class="quotelev1">&gt; #   1 on failure to grok arguments or figure out architecture details
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Machine type strings:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #   sun4
</span><br>
<span class="quotelev1">&gt; #   irix-5
</span><br>
<span class="quotelev1">&gt; #   irix-6
</span><br>
<span class="quotelev1">&gt; #   solaris
</span><br>
<span class="quotelev1">&gt; #   freebsd
</span><br>
<span class="quotelev1">&gt; #   aix-{version}.{release}
</span><br>
<span class="quotelev1">&gt; #   aux
</span><br>
<span class="quotelev1">&gt; #   hpux
</span><br>
<span class="quotelev1">&gt; #   mips
</span><br>
<span class="quotelev1">&gt; #   osf
</span><br>
<span class="quotelev1">&gt; #   digital
</span><br>
<span class="quotelev1">&gt; #   next
</span><br>
<span class="quotelev1">&gt; #   linux-{distro_and_version}-{architecture}
</span><br>
<span class="quotelev1">&gt; #   solaris86
</span><br>
<span class="quotelev1">&gt; #   solarishp
</span><br>
<span class="quotelev1">&gt; #   nt
</span><br>
<span class="quotelev1">&gt; #   ntalpha
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program=`echo $0 | sed 's:.*/::'`
</span><br>
<span class="quotelev1">&gt; version=&quot;2008.10.31&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ################################################################################
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Subroutines
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; get_lsb_info_if_available()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;        if [ -f /etc/lsb-release ]; then
</span><br>
<span class="quotelev1">&gt;            #
</span><br>
<span class="quotelev1">&gt;            # 1) Example contents of /etc/lsb-release from Ubuntu  
</span><br>
<span class="quotelev1">&gt; Hardy:
</span><br>
<span class="quotelev1">&gt;            #   DISTRIB_ID=Ubuntu
</span><br>
<span class="quotelev1">&gt;            #   DISTRIB_RELEASE=8.04
</span><br>
<span class="quotelev1">&gt;            #   DISTRIB_CODENAME=hardy
</span><br>
<span class="quotelev1">&gt;            #   DISTRIB_DESCRIPTION=&quot;Ubuntu hardy (development branch)&quot;
</span><br>
<span class="quotelev1">&gt;            # 2) Example contents of /etc/lsb-release from SLES 9:
</span><br>
<span class="quotelev1">&gt;            #   LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0- 
</span><br>
<span class="quotelev1">&gt; x86_64:core-3.0-x86_64&quot;
</span><br>
<span class="quotelev1">&gt;            . /etc/lsb-release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        elif [ -x /usr/bin/lsb_release ]; then
</span><br>
<span class="quotelev1">&gt;            DISTRIB_ID=$(/usr/bin/lsb_release -i | sed -e 's/ 
</span><br>
<span class="quotelev1">&gt; ^Distributor ID:[[:space:]]//')
</span><br>
<span class="quotelev1">&gt;            DISTRIB_RELEASE=$(/usr/bin/lsb_release -r | sed -e 's/ 
</span><br>
<span class="quotelev1">&gt; ^Release:[[:space:]]//')
</span><br>
<span class="quotelev1">&gt;        fi
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; get_linux_type()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        # Step 1)  Determine $hardware string (in Linux terms, based  
</span><br>
<span class="quotelev1">&gt; on architecture
</span><br>
<span class="quotelev1">&gt;        #          names used by the Linux kernel.  See /usr/src/ 
</span><br>
<span class="quotelev1">&gt; linux/hardware/ for
</span><br>
<span class="quotelev1">&gt;        #          details).
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        case $uhardware in
</span><br>
<span class="quotelev1">&gt;                alpha)
</span><br>
<span class="quotelev1">&gt;                        hardware=alpha
</span><br>
<span class="quotelev1">&gt;                        ;;
</span><br>
<span class="quotelev1">&gt;                i386|i486|i586|i686)
</span><br>
<span class="quotelev1">&gt;                        hardware=ia32
</span><br>
<span class="quotelev1">&gt;                        ;;
</span><br>
<span class="quotelev1">&gt;                ppc64)
</span><br>
<span class="quotelev1">&gt;                        hardware=ppc64
</span><br>
<span class="quotelev1">&gt;                        ;;
</span><br>
<span class="quotelev1">&gt;                ia64)
</span><br>
<span class="quotelev1">&gt;                        hardware=ia64
</span><br>
<span class="quotelev1">&gt;                        ;;
</span><br>
<span class="quotelev1">&gt;                x86_64)
</span><br>
<span class="quotelev1">&gt;                        hardware=x86_64
</span><br>
<span class="quotelev1">&gt;                        ;;
</span><br>
<span class="quotelev1">&gt;                *)
</span><br>
<span class="quotelev1">&gt;                         
</span><br>
<span class="quotelev1">&gt; hardware=unknown_hardware_please_send_us_a_patch
</span><br>
<span class="quotelev1">&gt;                        ;;
</span><br>
<span class="quotelev1">&gt;        esac
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        # Step 2)  Determine $distro (distribution) string
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        #          NOTES: Put newer tests higher up, as they'll most
</span><br>
<span class="quotelev1">&gt;        #                 likely get hit first. -BEF-
</span><br>
<span class="quotelev1">&gt;        #          NOTES: But, make sure that newer programatic tests  
</span><br>
<span class="quotelev1">&gt; don't override
</span><br>
<span class="quotelev1">&gt;        #                 older tests with different results. -BEF-
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        # If lsb-release contains the DISTRIB* variables we need - use
</span><br>
<span class="quotelev1">&gt;        # them, otherwise, defer to tests later down the line.
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        get_lsb_info_if_available
</span><br>
<span class="quotelev1">&gt;        if [ &quot;${DISTRIB_ID}&quot; != &quot;&quot; -a &quot;${DISTRIB_RELEASE}&quot; != &quot;&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;            distro=${DISTRIB_ID}_${DISTRIB_RELEASE}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        elif [ -f /etc/issue ]; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                if [ -e /etc/debian_version ]; then
</span><br>
<span class="quotelev1">&gt;                        distro_brand=debian
</span><br>
<span class="quotelev1">&gt;                        distro_version=`cat /etc/debian_version | sed  
</span><br>
<span class="quotelev1">&gt; 's#testing/##'`
</span><br>
<span class="quotelev1">&gt;                        distro=${distro_brand}_${distro_version}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -e /etc/gentoo-release ]; then
</span><br>
<span class="quotelev1">&gt;                        distro_brand=gentoo
</span><br>
<span class="quotelev1">&gt;                        # If you think there should be a version,
</span><br>
<span class="quotelev1">&gt;                        # uncomment out the following
</span><br>
<span class="quotelev1">&gt;                        #gentoo_profile=`readlink /etc/make.profile`
</span><br>
<span class="quotelev1">&gt;                        #distro_version=`basename ${gentoo_profile}`
</span><br>
<span class="quotelev1">&gt;                        #distro=${distro_brand}_${distro_version}
</span><br>
<span class="quotelev1">&gt;                        distro=${distro_brand}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Scientific Linux SL release [0-9\.] 
</span><br>
<span class="quotelev1">&gt; +' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro_ver=&quot;`grep 'Scientific Linux' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue | sed -e 's/.*release \([0-9]*\.[0-9]*\).*/\1/'`&quot;
</span><br>
<span class="quotelev1">&gt;                        distro=scientificlinux_$distro_ver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Red Hat Enterprise Linux ([a-zA-Z] 
</span><br>
<span class="quotelev1">&gt; +) release [0-9]*' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro_brand=rhel
</span><br>
<span class="quotelev1">&gt;                        #sub_distro=`    grep 'Red Hat' /etc/issue |  
</span><br>
<span class="quotelev1">&gt; sed -e 's/Red Hat Enterprise Linux \([A-Z][A-Z]\) release \([0-9]* 
</span><br>
<span class="quotelev1">&gt; \).*/\1/' `
</span><br>
<span class="quotelev1">&gt;                        distro_version=`grep 'Red Hat' /etc/issue |  
</span><br>
<span class="quotelev1">&gt; sed -e 's/Red Hat Enterprise Linux \([a-zA-Z]*\) release \([0-9]* 
</span><br>
<span class="quotelev1">&gt; \).*/\2/' `
</span><br>
<span class="quotelev1">&gt;                        #distro=${distro_brand}${distro_version}_$ 
</span><br>
<span class="quotelev1">&gt; {sub_distro}
</span><br>
<span class="quotelev1">&gt;                        distro=${distro_brand}${distro_version}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Cray Rocks Linux release 1.3' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=rh73
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SGI ProPack 3' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=rhel3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'CentOS release 4.[0-9]' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=rhel4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SuSE SLES 8' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=sles8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Red Hat Linux Advanced Server  
</span><br>
<span class="quotelev1">&gt; release 2.1AS ' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=redhat_2.1AS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Red Hat Linux release 9 ' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=redhat_9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Red Hat Linux release 8.0 ' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=redhat_8.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Mandrake Linux release 9.1 ' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=mandrake_9.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SGI ProPack 4' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=sles9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SUSE LINUX Enterprise Server 9' / 
</span><br>
<span class="quotelev1">&gt; etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=sles9
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SUSE Linux Enterprise Server 10' / 
</span><br>
<span class="quotelev1">&gt; etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=sles10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SuSE SLES 8' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=sles8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'UnitedLinux 1.0' /etc/issue`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;                        distro=sles8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                # Welcome to SuSE Linux 9.0 (x86-64) - Kernel \r (\l)
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.0' /etc/issue`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;                        distro=suse_9.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.1' /etc/issue`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;                        distro=suse_9.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.2' /etc/issue`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;                        distro=suse_9.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SuSE Linux 9\.3' /etc/issue`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;                        distro=suse_9.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                # Welcome to SUSE LINUX 10.1 (i586) - Kernel \r (\l).
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SUSE LINUX 10\.1' /etc/issue`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;                        distro=suse_10.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                # Welcome to openSUSE 10.2 (i586) - Kernel \r (\l).
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SUSE 10\.2' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=suse_10.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'SUSE 10\.3' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=suse_10.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Tao Linux release 1 ' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=tao_1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'Fedora Core ' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro_brand=fc
</span><br>
<span class="quotelev1">&gt;                        distro_version=`grep 'Fedora Core ' /etc/ 
</span><br>
<span class="quotelev1">&gt; issue | sed -e 's/Fedora Core release \([0-9]*\).*/\1/' `
</span><br>
<span class="quotelev1">&gt;                        distro=${distro_brand}${distro_version}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                elif [ -n &quot;`egrep 'White Box Enterprise Linux release  
</span><br>
<span class="quotelev1">&gt; 3.0' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                        distro=white_box_enterprise_linux_3.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                else
</span><br>
<span class="quotelev1">&gt;                         
</span><br>
<span class="quotelev1">&gt; distro=unknown_linux_type_please_send_us_a_patch
</span><br>
<span class="quotelev1">&gt;                fi
</span><br>
<span class="quotelev1">&gt;        fi
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        # Step 3)  Put it all together as $type
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        type=linux-${distro}-${hardware}
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        os=$uos
</span><br>
<span class="quotelev1">&gt;        release=$urelease
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; get_darwin_info()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        # step 1)  determine $hardware (architecture) string
</span><br>
<span class="quotelev1">&gt;        #          (Should be one of ppc, ppc64.  Why these strings?   
</span><br>
<span class="quotelev1">&gt; Well, we are
</span><br>
<span class="quotelev1">&gt;        #           taking them from the arches directory names in  
</span><br>
<span class="quotelev1">&gt; the linux kernel
</span><br>
<span class="quotelev1">&gt;        #           source.) -BEF-
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        if [ -n &quot;`system_profiler SPHardwareDataType|egrep '(CPU Type| 
</span><br>
<span class="quotelev1">&gt; Processor Name): PowerPC G4 '`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                hardware=ppc
</span><br>
<span class="quotelev1">&gt;        elif [ -n &quot;`system_profiler SPHardwareDataType|egrep '(CPU  
</span><br>
<span class="quotelev1">&gt; Type|Processor Name): PowerPC (970|G5) '`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                hardware=ppc64
</span><br>
<span class="quotelev1">&gt;        elif [ -n &quot;`system_profiler SPHardwareDataType|egrep  
</span><br>
<span class="quotelev1">&gt; 'Processor Name: Intel Core Duo'`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                hardware=ia32
</span><br>
<span class="quotelev1">&gt;        elif [ -n &quot;`system_profiler SPHardwareDataType|egrep  
</span><br>
<span class="quotelev1">&gt; 'Processor Name: (Dual-Core Intel Xeon|Intel Core 2 Duo)'`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                hardware=x86_64
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;                hardware=unknown_darwin_hardware_please_send_us_a_patch
</span><br>
<span class="quotelev1">&gt;        fi
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        # step 2)  determine $distro (distribution) string
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        #          Thanks to JP Navarro for the get distro version  
</span><br>
<span class="quotelev1">&gt; string command
</span><br>
<span class="quotelev1">&gt;        #          below. -BEF-
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        distro_brand=macosx
</span><br>
<span class="quotelev1">&gt;        distro_version=`sw_vers -productVersion|sed -e 's/\ 
</span><br>
<span class="quotelev1">&gt; ([0-9]\{1,2\}\.[0-9]\{1,2\}\).*/\1/'`
</span><br>
<span class="quotelev1">&gt;        distro=${distro_brand}_${distro_version}
</span><br>
<span class="quotelev1">&gt;        if [ -z &quot;$distro&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                distro=unknown_darwin_version_please_send_us_a_patch
</span><br>
<span class="quotelev1">&gt;        fi
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        # Step 3)  Put it all together as $type
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;        type=darwin-${distro}-${hardware}
</span><br>
<span class="quotelev1">&gt;        #
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        os=$uos
</span><br>
<span class="quotelev1">&gt;        release=$urelease
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ################################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Check the number of arguments and set the mode.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; mode=type
</span><br>
<span class="quotelev1">&gt; format=default
</span><br>
<span class="quotelev1">&gt; if [ $# = 1 ]; then
</span><br>
<span class="quotelev1">&gt;  case &quot;$1&quot; in
</span><br>
<span class="quotelev1">&gt;    --c*|-c* )
</span><br>
<span class="quotelev1">&gt;      format=classad
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --x*|-x* )
</span><br>
<span class="quotelev1">&gt;      format=xml
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --t*|-t* )
</span><br>
<span class="quotelev1">&gt;      mode=type
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --n*|-n* )
</span><br>
<span class="quotelev1">&gt;      mode=os
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --r*|-r* )
</span><br>
<span class="quotelev1">&gt;      mode=release
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --m*|-m* )
</span><br>
<span class="quotelev1">&gt;      mode=hardware
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --a*|-a* )
</span><br>
<span class="quotelev1">&gt;      mode=all
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --list-all* )
</span><br>
<span class="quotelev1">&gt;      mode=list_all
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --l*|-l* )
</span><br>
<span class="quotelev1">&gt;      mode=list
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --v*|-v* )
</span><br>
<span class="quotelev1">&gt;      mode=version
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --h*|-h* )
</span><br>
<span class="quotelev1">&gt;      mode=usage
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    --o*|-o* )
</span><br>
<span class="quotelev1">&gt;      mode=option_test
</span><br>
<span class="quotelev1">&gt;      # Cycles through and tries each of the other options, for  
</span><br>
<span class="quotelev1">&gt; testing purposes.
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;  esac
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;$mode&quot; = &quot;unknown&quot; -o &quot;$mode&quot; = &quot;usage&quot; ]; then
</span><br>
<span class="quotelev1">&gt;        echo &quot;$program $version&quot;
</span><br>
<span class="quotelev1">&gt;        echo
</span><br>
<span class="quotelev1">&gt;        echo &quot;Usage: $program [OPTION]&quot;
</span><br>
<span class="quotelev1">&gt;        echo
</span><br>
<span class="quotelev1">&gt;        cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; whatami determines the &quot;platform&quot; of the system on which it is run.   
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; can be used, for example, to determine which of a series of nfs  
</span><br>
<span class="quotelev1">&gt; mounted
</span><br>
<span class="quotelev1">&gt; software directories is appropriate for use by the system in question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No unix utility quite fulfills these requirements, so the &quot;whatami&quot;  
</span><br>
<span class="quotelev1">&gt; program's
</span><br>
<span class="quotelev1">&gt; purpose is to return a single unique string for each platform.  This  
</span><br>
<span class="quotelev1">&gt; string
</span><br>
<span class="quotelev1">&gt; can then used in directory names, program switches, and in other  
</span><br>
<span class="quotelev1">&gt; clever ways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Options:
</span><br>
<span class="quotelev1">&gt; --help, -h
</span><br>
<span class="quotelev1">&gt;    This help message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --version, -v
</span><br>
<span class="quotelev1">&gt;    The version of $program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --type, -t
</span><br>
<span class="quotelev1">&gt;    Prints the platform type (the default).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --name, -n
</span><br>
<span class="quotelev1">&gt;    Prints out the name of the operating system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --release, -r
</span><br>
<span class="quotelev1">&gt;    Prints out the name and release of the os, separated by a space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --machine, -m
</span><br>
<span class="quotelev1">&gt;    Prints out the architecture type for the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --all, -a
</span><br>
<span class="quotelev1">&gt;    Prints platform type, hardware, os, and version, seperated by a  
</span><br>
<span class="quotelev1">&gt; space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --list, -l
</span><br>
<span class="quotelev1">&gt;    Lists summary of known description strings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please send patches to MCS Systems &lt;systems_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if [ &quot;$mode&quot; = &quot;usage&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                exit 0
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;                exit 1
</span><br>
<span class="quotelev1">&gt;        fi
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; # Okay, now we know what we should do... if the mode is list or the  
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; # that's easy to get out of the way.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Be sure to add to this list whenever a new architecture is figured  
</span><br>
<span class="quotelev1">&gt; out.
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;$mode&quot; = &quot;list&quot; ]; then
</span><br>
<span class="quotelev1">&gt;        cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; type:      cpu    os       version
</span><br>
<span class="quotelev1">&gt; ==================================
</span><br>
<span class="quotelev1">&gt; linux: (potential linux platform strings are numerous,
</span><br>
<span class="quotelev1">&gt;        and may not be known in advance)
</span><br>
<span class="quotelev1">&gt; aix-3.x:   *      AIX      3.x
</span><br>
<span class="quotelev1">&gt; aix-4.x:   *      AIX      4.x
</span><br>
<span class="quotelev1">&gt; aix-5.x:   *      AIX      5.x
</span><br>
<span class="quotelev1">&gt; aux:       *      A/UX     *
</span><br>
<span class="quotelev1">&gt; freebsd:   *      FreeBSD  *
</span><br>
<span class="quotelev1">&gt; hpux:      *      HP-UX    *
</span><br>
<span class="quotelev1">&gt; irix-5:    *      IRIX     5.x
</span><br>
<span class="quotelev1">&gt; irix-6:    *      IRIX     6.x
</span><br>
<span class="quotelev1">&gt; osf:       *      OSF1     *
</span><br>
<span class="quotelev1">&gt; solaris:   sparc  SunOS    5.x
</span><br>
<span class="quotelev1">&gt; sun4:      sparc  SunOS    4.x
</span><br>
<span class="quotelev1">&gt; ultrix:    *      Ultrix   *
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;  exit 0
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;$mode&quot; = &quot;version&quot; ]; then
</span><br>
<span class="quotelev1">&gt;  echo &quot;$program $version&quot;
</span><br>
<span class="quotelev1">&gt;  exit 0
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;$mode&quot; = &quot;option_test&quot; ]; then
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Test all options for whatami (except this one, of course)
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  for opt in -t -n -r -m -a -v --version -h --help -l
</span><br>
<span class="quotelev1">&gt;  do
</span><br>
<span class="quotelev1">&gt;      cmd=&quot;$0 $opt&quot;
</span><br>
<span class="quotelev1">&gt;      echo -n &quot;$cmd: &quot;
</span><br>
<span class="quotelev1">&gt;      $cmd
</span><br>
<span class="quotelev1">&gt;      if [ ! $? = 0 ]; then
</span><br>
<span class="quotelev1">&gt;        echo &quot;Failed on option $opt&quot;
</span><br>
<span class="quotelev1">&gt;        exit 1
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt;  done
</span><br>
<span class="quotelev1">&gt;  exit 0
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; # Find uname, store its location in $UNAME
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; UNAME=unknown
</span><br>
<span class="quotelev1">&gt; for dir in `echo $PATH | sed 's/:/ /g'` ; do
</span><br>
<span class="quotelev1">&gt;  if [ -f $dir/uname ]; then
</span><br>
<span class="quotelev1">&gt;    UNAME=$dir/uname
</span><br>
<span class="quotelev1">&gt;    break
</span><br>
<span class="quotelev1">&gt;  fi
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;$UNAME&quot; = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev1">&gt;  echo &quot;Unable to locate uname in the path, which means we're out of  
</span><br>
<span class="quotelev1">&gt; luck.&quot;
</span><br>
<span class="quotelev1">&gt;  exit 1
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; # Now we try to figure out what we're running on.  First we try to get
</span><br>
<span class="quotelev1">&gt; # close to the machine type, then we look at the mode and figure out  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; # we need to print out.
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uos=`($UNAME -s)       2&gt;/dev/null` || uos=unknown
</span><br>
<span class="quotelev1">&gt; urelease=`($UNAME -r)  2&gt;/dev/null` || urelease=unknown
</span><br>
<span class="quotelev1">&gt; uhardware=`($UNAME -m) 2&gt;/dev/null` || uhardware=unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; type=unknown
</span><br>
<span class="quotelev1">&gt; os=unknown
</span><br>
<span class="quotelev1">&gt; release=unknown
</span><br>
<span class="quotelev1">&gt; hardware=unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; case &quot;${uos}:${urelease}:${uhardware}&quot; in
</span><br>
<span class="quotelev1">&gt;  AIX:*:*)
</span><br>
<span class="quotelev1">&gt;    release=`$UNAME -v 2&gt;/dev/null` || release=unknown
</span><br>
<span class="quotelev1">&gt; #   case $release in
</span><br>
<span class="quotelev1">&gt; #     3)
</span><br>
<span class="quotelev1">&gt; #       type=aix-3
</span><br>
<span class="quotelev1">&gt; #       ;;
</span><br>
<span class="quotelev1">&gt; #     4)
</span><br>
<span class="quotelev1">&gt; #       type=aix-4
</span><br>
<span class="quotelev1">&gt; #       ;;
</span><br>
<span class="quotelev1">&gt; #     5)
</span><br>
<span class="quotelev1">&gt; #       type=aix-5
</span><br>
<span class="quotelev1">&gt; #       ;;
</span><br>
<span class="quotelev1">&gt; #   esac
</span><br>
<span class="quotelev1">&gt;    type=aix-$release.$urelease
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A/UX:*:*)
</span><br>
<span class="quotelev1">&gt;    type=aux
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  CYGWIN_NT-5.1:*:*)
</span><br>
<span class="quotelev1">&gt;    type=cygwin-5.1
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Darwin:*:*)
</span><br>
<span class="quotelev1">&gt;    get_darwin_info
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  FreeBSD:*:*)
</span><br>
<span class="quotelev1">&gt;    type=freebsd
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  HP-UX:*:*)
</span><br>
<span class="quotelev1">&gt;    type=hpux
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  IRIX:5*:*)
</span><br>
<span class="quotelev1">&gt;    type=irix-5
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=`$UNAME -p 2&gt;/dev/null` || hardware=unknown
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # On alaska, uname-&gt;IRIX64, but IRIX everywhere else.
</span><br>
<span class="quotelev1">&gt;  IRIX*:6*:*)
</span><br>
<span class="quotelev1">&gt;    type=irix-6
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=`$UNAME -p 2&gt;/dev/null` || hardware=unknown
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Linux:*:*)
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    case $uhardware in
</span><br>
<span class="quotelev1">&gt; 	alpha)
</span><br>
<span class="quotelev1">&gt;        # legacy definition
</span><br>
<span class="quotelev1">&gt; 	    type=linux-alpha
</span><br>
<span class="quotelev1">&gt; 	    ;;
</span><br>
<span class="quotelev1">&gt; 	*)
</span><br>
<span class="quotelev1">&gt;        # legacy definitions
</span><br>
<span class="quotelev1">&gt; 	    if [ -f /etc/issue ]; then
</span><br>
<span class="quotelev1">&gt; 		if [ -n &quot;`cat /etc/issue | grep &quot;Mandrake release 7.2&quot;`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; 		    type=linux-2
</span><br>
<span class="quotelev1">&gt; 		elif [ -n &quot;`cat /etc/issue | grep &quot;Red Hat Linux release 7.1&quot;`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; 		    type=linux-rh71
</span><br>
<span class="quotelev1">&gt; 		elif [ -n &quot;`cat /etc/issue | grep &quot;Red Hat Linux release 7.2&quot;`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; 		    type=linux-rh72
</span><br>
<span class="quotelev1">&gt; 		elif [ -n &quot;`cat /etc/issue | grep &quot;Red Hat Linux release 7.3&quot;`&quot; ];  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; 		    type=linux-rh73
</span><br>
<span class="quotelev1">&gt; 		else
</span><br>
<span class="quotelev1">&gt; 		    get_linux_type
</span><br>
<span class="quotelev1">&gt; 		fi
</span><br>
<span class="quotelev1">&gt; 	    else
</span><br>
<span class="quotelev1">&gt; 		type=linux
</span><br>
<span class="quotelev1">&gt; 	    fi
</span><br>
<span class="quotelev1">&gt; 	    ;;
</span><br>
<span class="quotelev1">&gt;    esac
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  SunOS:4*:*)
</span><br>
<span class="quotelev1">&gt;    type=sun4
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=`/bin/arch -k` || hardware=unknown
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  SunOS:5*:*)
</span><br>
<span class="quotelev1">&gt;    solaris_version=`uname -r | sed 's/^5\.//'`
</span><br>
<span class="quotelev1">&gt;    type=solaris-${solaris_version}
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=`/bin/arch -k` || hardware=unknown
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  OSF1:*:*)
</span><br>
<span class="quotelev1">&gt;    type=osf
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ULTRIX:*:*)
</span><br>
<span class="quotelev1">&gt;    type=ultrix
</span><br>
<span class="quotelev1">&gt;    os=$uos
</span><br>
<span class="quotelev1">&gt;    release=$urelease
</span><br>
<span class="quotelev1">&gt;    hardware=$uhardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; esac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exit_code=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; grid=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; # Got all the info, now just print the right stuff based on mode.
</span><br>
<span class="quotelev1">&gt; #  
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; case $format in
</span><br>
<span class="quotelev1">&gt;  classad)
</span><br>
<span class="quotelev1">&gt;    echo ${grid}whatami_type = \&quot;$type\&quot;
</span><br>
<span class="quotelev1">&gt;    echo ${grid}whatami_os = \&quot;$os\&quot;
</span><br>
<span class="quotelev1">&gt;    echo ${grid}whatami_release = \&quot;$release\&quot;
</span><br>
<span class="quotelev1">&gt;    echo ${grid}whatami_hardware = \&quot;$hardware\&quot;
</span><br>
<span class="quotelev1">&gt;    if [ $os = &quot;Linux&quot; ]; then
</span><br>
<span class="quotelev1">&gt;       echo ${grid}whatami_distro = \&quot;$distro\&quot;
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    exit
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;  xml)
</span><br>
<span class="quotelev1">&gt;    echo &quot;&lt;${grid}whatami&gt;&quot;
</span><br>
<span class="quotelev1">&gt;    echo &quot;  &lt;type&gt;$type&lt;/type&gt;&quot;
</span><br>
<span class="quotelev1">&gt;    echo &quot;  &lt;os&gt;$os&lt;/os&gt;&quot;
</span><br>
<span class="quotelev1">&gt;    echo &quot;  &lt;release&gt;$release&lt;/release&gt;&quot;
</span><br>
<span class="quotelev1">&gt;    echo &quot;  &lt;hardware&gt;$hardware&lt;/hardware&gt;&quot;
</span><br>
<span class="quotelev1">&gt;    if [ $os = &quot;Linux&quot; ]; then
</span><br>
<span class="quotelev1">&gt;       echo &quot;  &lt;distro&gt;$distro&lt;/distro&gt;&quot;
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    echo &quot;&lt;/${grid}whatami&gt;&quot;
</span><br>
<span class="quotelev1">&gt;    exit
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt; esac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; case $mode in
</span><br>
<span class="quotelev1">&gt;  type)
</span><br>
<span class="quotelev1">&gt;    if [ $type = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev1">&gt;      exit_code=1
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    echo $type
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  os)
</span><br>
<span class="quotelev1">&gt;    if [ $os = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev1">&gt;      exit_code=1
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    echo $os
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  release)
</span><br>
<span class="quotelev1">&gt;    if [ $os = &quot;unknown&quot; -o $release = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev1">&gt;      exit_code=1
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    echo &quot;$os $release&quot;
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hardware)
</span><br>
<span class="quotelev1">&gt;    if [ $hardware = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev1">&gt;      exit_code=1
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    echo $hardware
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  all)
</span><br>
<span class="quotelev1">&gt;    if [    $hardware = &quot;unknown&quot; \
</span><br>
<span class="quotelev1">&gt; 	 -o $os = &quot;unknown&quot;   \
</span><br>
<span class="quotelev1">&gt; 	 -o $release = &quot;unknown&quot; ]; then
</span><br>
<span class="quotelev1">&gt;      exit_code=1
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    echo &quot;$type $hardware $os $release&quot;
</span><br>
<span class="quotelev1">&gt;    ;;
</span><br>
<span class="quotelev1">&gt; esac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exit $exit_code
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0643.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0634.php">Ethan Mallove: "[MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)"</a>
<li><strong>Reply:</strong> <a href="0645.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)"</a>
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
