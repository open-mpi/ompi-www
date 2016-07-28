<?
$subject_val = "[OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 15:12:47 2009" -->
<!-- isoreceived="20090421191247" -->
<!-- sent="Tue, 21 Apr 2009 15:12:41 -0400" -->
<!-- isosent="20090421191241" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft" -->
<!-- id="557BBF2A-1146-4E3B-9637-387E1857445D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090421184632.GA5132_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 15:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5851.php">Lenny Verkhovsky: "[OMPI devel] Mtt Fails"</a>
<li><strong>Previous message:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5867.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5867.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IANAL and don't understand most of what is listed below.
<br>
<p>If the GNU Autotools go to GPL3, will we be unable to upgrade beyond  
<br>
the last versions that are GPL2?  I see the phrase &quot;we still want to  
<br>
allow people to distribute the normal output of Autoconf under any  
<br>
license they want&quot;, but I'm wondering if Cisco will be afraid of GPL3...
<br>
<p>I think I'll need to ask Cisco's lawyers about this.  Can others ask  
<br>
their corporate overlords as well?
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: April 21, 2009 2:46:37 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;autoconf_at_[hidden]&gt;, &lt;automake_at_[hidden]&gt;, &lt;libtool_at_[hidden]&gt;, &lt;autotools-announce_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Subject: RFC: proposed GPLv3 license exception draft
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;autoconf_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ cross-posted to several groups; please followup on the autoconf  
</span><br>
<span class="quotelev1">&gt; list ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to complete the GNU Project's migration to GPLv3, every GNU
</span><br>
<span class="quotelev1">&gt; program that has exceptions to its license needs to have those
</span><br>
<span class="quotelev1">&gt; exceptions updated for GPLv3.  We've prepared draft text for an  
</span><br>
<span class="quotelev1">&gt; updated
</span><br>
<span class="quotelev1">&gt; version of the Autoconf exception, and we're interested in hearing  
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; feedback on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The primary purpose of this update is to have the exception build on  
</span><br>
<span class="quotelev1">&gt; top
</span><br>
<span class="quotelev1">&gt; of the framework for Additional Permissions that GPLv3 provides in
</span><br>
<span class="quotelev1">&gt; section 7.  We are not trying to change the exception's underlying
</span><br>
<span class="quotelev1">&gt; policy: we still want to allow people to distribute the normal  
</span><br>
<span class="quotelev1">&gt; output of
</span><br>
<span class="quotelev1">&gt; Autoconf under any license they want.  However, the new draft does try
</span><br>
<span class="quotelev1">&gt; to address new issues that have come up since the current GPLv2-based
</span><br>
<span class="quotelev1">&gt; exception was written.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new exception grants people permission to distribute Eligible  
</span><br>
<span class="quotelev1">&gt; Output
</span><br>
<span class="quotelev1">&gt; Material under terms of their choice.  In short, Eligible Output
</span><br>
<span class="quotelev1">&gt; Material is a more formally defined way of talking about the  
</span><br>
<span class="quotelev1">&gt; &quot;configure
</span><br>
<span class="quotelev1">&gt; scripts&quot; that are the subject of the old GPLv2-based exception.  One
</span><br>
<span class="quotelev1">&gt; change of note is that it is defined to explicitly exclude tracing
</span><br>
<span class="quotelev1">&gt; output, to prevent people from using that mechanism to be able to
</span><br>
<span class="quotelev1">&gt; distribute more source under the terms of the exception than they are
</span><br>
<span class="quotelev1">&gt; supposed to be able to.  If anyone causes Autoconf to output stuff  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; is not Eligible Output Material, then they will not be able to take
</span><br>
<span class="quotelev1">&gt; advantage of the exception: they would have to distribute the  
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; scripts under the terms of GPLv3 alone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another benefit of the new exception is that it is not FSF-specific in
</span><br>
<span class="quotelev1">&gt; any way.  When other copyright holders make modified versions of
</span><br>
<span class="quotelev1">&gt; Autoconf, they can apply the exact same permission text to their
</span><br>
<span class="quotelev1">&gt; changes, and it will work the way people want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We hope that this new exception will help make Autoconf's licensing a
</span><br>
<span class="quotelev1">&gt; little more clear and robust -- if also a little more verbose -- in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; same way that GPLv3 has done for the entire free software  
</span><br>
<span class="quotelev1">&gt; community.  We
</span><br>
<span class="quotelev1">&gt; are interested in hearing feedback from Autoconf developers about
</span><br>
<span class="quotelev1">&gt; whether there might be intended good uses of the software that are not
</span><br>
<span class="quotelev1">&gt; covered by this exception -- or conversely, known bad uses of the
</span><br>
<span class="quotelev1">&gt; software that might be covered.  We're also interested in hearing if
</span><br>
<span class="quotelev1">&gt; there are particular parts of the text that you think might be
</span><br>
<span class="quotelev1">&gt; misunderstood by developers: it may not always be possible, but we'd
</span><br>
<span class="quotelev1">&gt; like for this exception to be as clear as possible to as many people  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; possible.  If you're interested, please review the text and let us  
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev1">&gt; what you think.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the text of the proposed exception.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to Brett Smith for help in preparing this message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- cut ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This Exception is an additional permission under section 7 of the GNU
</span><br>
<span class="quotelev1">&gt; General Public License, version 3 (&quot;GPLv3&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The purpose of this Exception is to allow distribution of Autoconf's
</span><br>
<span class="quotelev1">&gt; typical output under terms of the recipient's choice (including
</span><br>
<span class="quotelev1">&gt; proprietary).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0. Definitions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Covered Code&quot; is any source code and/or object code of Autoconf  
</span><br>
<span class="quotelev1">&gt; that is a
</span><br>
<span class="quotelev1">&gt; covered work under this License.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Eligible Output Material&quot; is Covered Code that is included in the
</span><br>
<span class="quotelev1">&gt; standard, minimally verbose, non-debugging and non-tracing output of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; version of Autoconf distributed to you under this License.  Moreover,
</span><br>
<span class="quotelev1">&gt; &quot;Eligible Output Material&quot; may be comprised only of Covered Code  
</span><br>
<span class="quotelev1">&gt; that (a)
</span><br>
<span class="quotelev1">&gt; must necessarily appear in Autoconf-generated configure scripts and  
</span><br>
<span class="quotelev1">&gt; (b) is
</span><br>
<span class="quotelev1">&gt; required for those configure scripts to function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Ineligible Output Material&quot; is Covered Code that is not Eligible  
</span><br>
<span class="quotelev1">&gt; Output
</span><br>
<span class="quotelev1">&gt; Material.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Grant of Additional Permission.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have permission to propagate output of Autoconf, even if such
</span><br>
<span class="quotelev1">&gt; propagation would otherwise violate the terms of GPLv3.  However, if  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; cause Autoconf to output any Ineligible Output Material, you do not  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; permission to convey the resulting covered work under this Exception  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; you must remove this Exception in accordance with the second  
</span><br>
<span class="quotelev1">&gt; paragraph of
</span><br>
<span class="quotelev1">&gt; GPLv3's Section 7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. No Weakening of Autoconf Copyleft.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The availability of this Exception does not imply any general  
</span><br>
<span class="quotelev1">&gt; presumption
</span><br>
<span class="quotelev1">&gt; that third-party software is unaffected by the copyleft requirements  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; the license of Autoconf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- cut ---
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5851.php">Lenny Verkhovsky: "[OMPI devel] Mtt Fails"</a>
<li><strong>Previous message:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5867.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5867.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
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
