<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 11:24:25 2008" -->
<!-- isoreceived="20081107162425" -->
<!-- sent="Fri, 7 Nov 2008 11:24:17 -0500" -->
<!-- isosent="20081107162417" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)" -->
<!-- id="9EDE18B2-A0DA-45C3-9254-61451C154578_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081107161633.GL12131_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 11:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0654.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0654.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Reply:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ditto:
<br>
<p>[8:23] svbu-mpi:~/svn/mtt % ./client/whatami/whatami
<br>
linux-RedHatEnterpriseAS_4-x86_64
<br>
<p><p>On Nov 7, 2008, at 11:16 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Nov/06/2008 04:24:15PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Brian.  Ethan -- if it works for you, can you pull down a new
</span><br>
<span class="quotelev2">&gt;&gt; version and commit to MTT's SVN?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get &quot;linux-RedHatEnterpriseServer_5-ia32&quot;, instead of
</span><br>
<span class="quotelev1">&gt; &quot;linux-rhel5-ia32&quot; now. I guess I sort of prefer the short
</span><br>
<span class="quotelev1">&gt; version. Oh well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 6, 2008, at 3:19 PM, Brian Elliott Finley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've committed a new version that includes the version referenced  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and changed the $() to ``.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers, -Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The 2008.10.31 version that Jeff forwarded works fine on SLES9  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PPC64.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2008/10/31 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry; my stupid mailer didn't display it as an attachment when I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forwarded.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 31, 2008, at 1:56 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Oct/31/2008 01:01:02PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Re-sending to the MTT list, because I think our listserver will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; automatically block Brian (I'll add him to the whitelist for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; future
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; posts!).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm getting a syntax error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ whatami
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; whatami: syntax error at line 149:  `DISTRIB_ID=$' unexpected
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Not sure if I'm doing a bad copy/paste out of my mail
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; client. Jeff, can you send the new whatami script as an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; attachment?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Elliott Finley
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CIS / Argonne National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Office: 630.252.4742
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mobile: 630.631.6621
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Previous message:</strong> <a href="0654.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0654.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Reply:</strong> <a href="0656.php">Brian Elliott Finley: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
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
