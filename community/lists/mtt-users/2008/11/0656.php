<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 15:07:54 2008" -->
<!-- isoreceived="20081107200754" -->
<!-- sent="Fri, 07 Nov 2008 14:07:49 -0600" -->
<!-- isosent="20081107200749" -->
<!-- name="Brian Elliott Finley" -->
<!-- email="finley_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)" -->
<!-- id="4914A015.1050208_at_anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9EDE18B2-A0DA-45C3-9254-61451C154578_at_cisco.com" -->
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
<strong>From:</strong> Brian Elliott Finley (<em>finley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 15:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0657.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<li><strong>Previous message:</strong> <a href="0655.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0655.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/01/0660.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/01/0660.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, we don't want to be changing the results that folks are already
<br>
relying on, but it looks like we are.
<br>
<p>The benefit in putting the lsb test at the top is that most new and
<br>
future distros can be identified by that.
<br>
<p>But, it looks like the safest thing to do is to put it at the bottom.
<br>
Unfortunately, that means that we have to run through all the other
<br>
tests, which will not match, for all future distros.  Maybe it happens
<br>
so fast, even with the extra tests, that it's not worth worrying about.
<br>
<p>Options:
<br>
&nbsp;&nbsp;a) Just put the lsb tests at the end (more computer effort over time)
<br>
&nbsp;&nbsp;b) Put the lsb tests in the middle, after distro tests that are
<br>
already defined, but that we know also have lsb info (more people effort)
<br>
&nbsp;&nbsp;c) I don't think leaving as is is an option, because if someone
<br>
updates to the latest version of whatami, it may break existing tests
<br>
they depend on.
<br>
<p>I'm leaning towards a).
<br>
<p>Thoughts?
<br>
<p>-Brian
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ditto:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [8:23] svbu-mpi:~/svn/mtt % ./client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; linux-RedHatEnterpriseAS_4-x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2008, at 11:16 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov/06/2008 04:24:15PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Brian.  Ethan -- if it works for you, can you pull down a new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version and commit to MTT's SVN?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get &quot;linux-RedHatEnterpriseServer_5-ia32&quot;, instead of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;linux-rhel5-ia32&quot; now. I guess I sort of prefer the short
</span><br>
<span class="quotelev2">&gt;&gt; version. Oh well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 6, 2008, at 3:19 PM, Brian Elliott Finley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've committed a new version that includes the version referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and changed the $() to ``.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers, -Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The 2008.10.31 version that Jeff forwarded works fine on SLES9 PPC64.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2008/10/31 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sorry; my stupid mailer didn't display it as an attachment when I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; forwarded.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Try this.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 31, 2008, at 1:56 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Oct/31/2008 01:01:02PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Re-sending to the MTT list, because I think our listserver will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; automatically block Brian (I'll add him to the whitelist for future
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; posts!).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm getting a syntax error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ whatami
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; whatami: syntax error at line 149:  `DISTRIB_ID=$' unexpected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not sure if I'm doing a bad copy/paste out of my mail
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; client. Jeff, can you send the new whatami script as an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; attachment?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian Elliott Finley
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CIS / Argonne National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Office: 630.252.4742
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mobile: 630.631.6621
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
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Brian Elliott Finley
CIS / Argonne National Laboratory
Office: 630.252.4742
Mobile: 630.631.6621
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0657.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<li><strong>Previous message:</strong> <a href="0655.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0655.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/01/0660.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2009/01/0660.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release	fileformat)"</a>
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
