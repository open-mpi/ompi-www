<?
$subject_val = "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 14:29:31 2009" -->
<!-- isoreceived="20090424182931" -->
<!-- sent="Fri, 24 Apr 2009 12:29:00 -0600" -->
<!-- isosent="20090424182900" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft" -->
<!-- id="03471C39-4296-4A0A-8AF7-63F56BA0A14D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F2033B.4010409_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 14:29:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5868.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5868.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, so here is a typical scenario that we have engaged in  
<br>
occasionally. We have a problem in our build system, and the autotools  
<br>
folks ask us to do a debugging and/or verbose run and send them the  
<br>
output. We do that, but it goes out over the mailing list and/or hits  
<br>
some gmail accounts.
<br>
<p>So now we have effectively distributed that output, yes? And so now we  
<br>
have violated the new license?
<br>
<p>Frankly, this all seems absurd to me. The GPL continues to grow in its  
<br>
unfriendliness. Perhaps it is time we reconsider our use of these  
<br>
tools - we had given some consideration in the past to moving, and  
<br>
maybe we need to do so again.
<br>
<p>Count me frustrated with GPL nonsense.
<br>
<p><p>On Apr 24, 2009, at 12:21 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for getting expert review on this, Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;IANAL&gt;
</span><br>
<span class="quotelev1">&gt; For the record, it is my understanding that the autotools, gcc and  
</span><br>
<span class="quotelev1">&gt; similar projects have all been very careful in the GPL3 transition  
</span><br>
<span class="quotelev1">&gt; to ensure that *use* of their respective tools will continue to be  
</span><br>
<span class="quotelev1">&gt; as &quot;free&quot; as it has always been: no restrictions on what one can do  
</span><br>
<span class="quotelev1">&gt; with the normal &quot;output&quot; from these tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe concern of the forwarded posting was to ensure that  
</span><br>
<span class="quotelev1">&gt; &quot;output&quot; was properly classified to avoid excluding any valid uses.   
</span><br>
<span class="quotelev1">&gt; For instance, there is a clear statement that &quot;verbose&quot;, &quot;debugging&quot;  
</span><br>
<span class="quotelev1">&gt; and &quot;tracing&quot; outputs from autoconf are *not* eligible for the  
</span><br>
<span class="quotelev1">&gt; license exception, and this is a tighter definition than used  
</span><br>
<span class="quotelev1">&gt; previously.  Is that restriction a problem for anybody?  For OMPI I  
</span><br>
<span class="quotelev1">&gt; would say NO, but only for lack of knowing otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, while Jeff has checked that his Lawyers are all happy, there is  
</span><br>
<span class="quotelev1">&gt; still a burden on us geeks.  We need to look at how we are *using*  
</span><br>
<span class="quotelev1">&gt; the various GNU software packages to see if we are distributing  
</span><br>
<span class="quotelev1">&gt; under a non-GPL license anything the revised license exceptions  
</span><br>
<span class="quotelev1">&gt; would say we cannot.  This is not something we can expect our  
</span><br>
<span class="quotelev1">&gt; lawyers to do for us.
</span><br>
<span class="quotelev1">&gt; &lt;/IANAL&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; To follow up for the web archives, I chatted with Cisco legal about  
</span><br>
<span class="quotelev2">&gt;&gt; this and they were fine with it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2009, at 3:12 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IANAL and don't understand most of what is listed below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the GNU Autotools go to GPL3, will we be unable to upgrade beyond
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the last versions that are GPL2?  I see the phrase &quot;we still want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow people to distribute the normal output of Autoconf under any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; license they want&quot;, but I'm wondering if Cisco will be afraid of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GPL3...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I'll need to ask Cisco's lawyers about this.  Can others ask
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their corporate overlords as well?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; From: &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Date: April 21, 2009 2:46:37 PM EDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; To: &lt;autoconf_at_[hidden]&gt;, &lt;automake_at_[hidden]&gt;, &lt;libtool_at_[hidden]&gt;, &lt;autotools-announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subject: RFC: proposed GPLv3 license exception draft
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Reply-To: &lt;autoconf_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [ cross-posted to several groups; please followup on the autoconf
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; list ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; In order to complete the GNU Project's migration to GPLv3, every  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; program that has exceptions to its license needs to have those
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; exceptions updated for GPLv3.  We've prepared draft text for an
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; updated
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; version of the Autoconf exception, and we're interested in hearing
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; feedback on it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The primary purpose of this update is to have the exception  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build on
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; top
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; of the framework for Additional Permissions that GPLv3 provides in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; section 7.  We are not trying to change the exception's underlying
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; policy: we still want to allow people to distribute the normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; output of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Autoconf under any license they want.  However, the new draft  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does try
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to address new issues that have come up since the current GPLv2- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; based
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; exception was written.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The new exception grants people permission to distribute Eligible
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Output
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Material under terms of their choice.  In short, Eligible Output
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Material is a more formally defined way of talking about the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; scripts&quot; that are the subject of the old GPLv2-based exception.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; change of note is that it is defined to explicitly exclude tracing
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; output, to prevent people from using that mechanism to be able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; distribute more source under the terms of the exception than  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they are
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; supposed to be able to.  If anyone causes Autoconf to output stuff
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; is not Eligible Output Material, then they will not be able to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; take
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; advantage of the exception: they would have to distribute the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; scripts under the terms of GPLv3 alone.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Another benefit of the new exception is that it is not FSF- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; any way.  When other copyright holders make modified versions of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Autoconf, they can apply the exact same permission text to their
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; changes, and it will work the way people want.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; We hope that this new exception will help make Autoconf's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; licensing a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; little more clear and robust -- if also a little more verbose --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; same way that GPLv3 has done for the entire free software
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; community.  We
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; are interested in hearing feedback from Autoconf developers about
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; whether there might be intended good uses of the software that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are not
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; covered by this exception -- or conversely, known bad uses of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; software that might be covered.  We're also interested in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hearing if
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; there are particular parts of the text that you think might be
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; misunderstood by developers: it may not always be possible, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; like for this exception to be as clear as possible to as many  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; people
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; possible.  If you're interested, please review the text and let us
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; know
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; what you think.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Below is the text of the proposed exception.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks to Brett Smith for help in preparing this message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --- cut ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This Exception is an additional permission under section 7 of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the GNU
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; General Public License, version 3 (&quot;GPLv3&quot;).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The purpose of this Exception is to allow distribution of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Autoconf's
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; typical output under terms of the recipient's choice (including
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; proprietary).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 0. Definitions
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;Covered Code&quot; is any source code and/or object code of Autoconf
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; covered work under this License.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;Eligible Output Material&quot; is Covered Code that is included in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; standard, minimally verbose, non-debugging and non-tracing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; version of Autoconf distributed to you under this License.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moreover,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;Eligible Output Material&quot; may be comprised only of Covered Code
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that (a)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; must necessarily appear in Autoconf-generated configure scripts  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (b) is
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; required for those configure scripts to function.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;Ineligible Output Material&quot; is Covered Code that is not Eligible
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Output
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Material.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1. Grant of Additional Permission.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; You have permission to propagate output of Autoconf, even if such
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; propagation would otherwise violate the terms of GPLv3.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, if
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; cause Autoconf to output any Ineligible Output Material, you do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; have
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; permission to convey the resulting covered work under this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exception
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; you must remove this Exception in accordance with the second
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; paragraph of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; GPLv3's Section 7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 2. No Weakening of Autoconf Copyleft.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The availability of this Exception does not imply any general
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; presumption
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that third-party software is unaffected by the copyleft  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requirements
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the license of Autoconf.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --- cut ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5868.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>In reply to:</strong> <a href="5868.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Reply:</strong> <a href="5870.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
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
