<?
$subject_val = "[OMPI devel] Fwd: OMPI / Coverity: not running?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 17:49:59 2008" -->
<!-- isoreceived="20080616214959" -->
<!-- sent="Mon, 16 Jun 2008 17:49:47 -0400" -->
<!-- isosent="20080616214947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: OMPI / Coverity: not running?" -->
<!-- id="D8733FB1-3AAC-422D-A145-C76D6E7658EC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080610141702.GE23081_at_mail" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: OMPI / Coverity: not running?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 17:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI -- in case you hadn't already noticed, the Coverity results are a  
<br>
bit out of date (last run was 5/28/08).  It looks like they're going  
<br>
through some growing pains -- see my mail to David below, and his  
<br>
reply below that.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: David Maxwell &lt;dmaxwell_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: June 10, 2008 10:17:02 AM EDT
</span><br>
<span class="quotelev1">&gt; To: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: OMPI / Coverity: not running?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 06, 2008 at 08:16:31AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; David --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the last run of OMPI on scan2 was 5/28 (run ID 145).   
</span><br>
<span class="quotelev2">&gt;&gt; It also
</span><br>
<span class="quotelev2">&gt;&gt; looks like the same SVN r number tarball was used for all the runs  
</span><br>
<span class="quotelev2">&gt;&gt; since
</span><br>
<span class="quotelev2">&gt;&gt; 5/18 (r18449).  Our SVN is currently up to r18604.  Is something  
</span><br>
<span class="quotelev2">&gt;&gt; wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some other random observations:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The number of files decreased dramatically between run IDs 141 and
</span><br>
<span class="quotelev2">&gt;&gt;  142 (5/18 and 5/21) -- you've mentioned this problem before.
</span><br>
<span class="quotelev2">&gt;&gt; - The LOC counts between runs varies wildly, even when the number of
</span><br>
<span class="quotelev2">&gt;&gt;  files is more-or-less constant.  Max LOC I see is somewhere around
</span><br>
<span class="quotelev2">&gt;&gt;  430k; min LOC is somewhere around 100k.
</span><br>
<span class="quotelev2">&gt;&gt; - The number of files and LOC vary wildly, even when the same SVN r
</span><br>
<span class="quotelev2">&gt;&gt;  number was used (e.g., the 5/18 - 5/28 runs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you look into this?  As stats, the # files/LOC don't really  
</span><br>
<span class="quotelev2">&gt;&gt; matter to
</span><br>
<span class="quotelev2">&gt;&gt; us -- what matters is that it actually scans all the files that it  
</span><br>
<span class="quotelev2">&gt;&gt; can.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, can you tell us what extra libraries you installed to
</span><br>
<span class="quotelev2">&gt;&gt; configure against OMPI?  Remember that OMPI conditionally compiles  
</span><br>
<span class="quotelev2">&gt;&gt; a bunch
</span><br>
<span class="quotelev2">&gt;&gt; of its plugins, depending on what back-end library/software support  
</span><br>
<span class="quotelev2">&gt;&gt; exists
</span><br>
<span class="quotelev2">&gt;&gt; on the machine where ./configure is run.  Additionally, we might be  
</span><br>
<span class="quotelev2">&gt;&gt; able to
</span><br>
<span class="quotelev2">&gt;&gt; tune up your OMPI ./configure command to get greater coverage of the
</span><br>
<span class="quotelev2">&gt;&gt; overall code base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hello. This is a semi-automated reply (form-letter). I am not able
</span><br>
<span class="quotelev1">&gt; to reply to your message right now. I am receiving email requests
</span><br>
<span class="quotelev1">&gt; much more quickly than I can process them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My current projects include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration of new servers for the Scan website and build hosts -
</span><br>
<span class="quotelev1">&gt;  The existing database server is almost out of disk space. I can not
</span><br>
<span class="quotelev1">&gt;  add additional projects, or new runs of existing projects.  
</span><br>
<span class="quotelev1">&gt; Migration to
</span><br>
<span class="quotelev1">&gt;  the new database server is my top priority. Migration to the new  
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt;  servers is a secondary priority. Please be patient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration of a ticketing system to track outstanding requests -
</span><br>
<span class="quotelev1">&gt;  While I have tried to live off an inbox filing-system, this is no  
</span><br>
<span class="quotelev1">&gt; longer
</span><br>
<span class="quotelev1">&gt;  possible. I need to provide a way for people to query the status of
</span><br>
<span class="quotelev1">&gt;  their request without my involvement. You will receive a ticket  
</span><br>
<span class="quotelev1">&gt; number
</span><br>
<span class="quotelev1">&gt;  for your request as soon as testing of the new system is complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Completion of the automated build-request system -
</span><br>
<span class="quotelev1">&gt;  For those of you on the self-build trial, the new build and database
</span><br>
<span class="quotelev1">&gt;  servers are the blocking point on finishing the automation of this
</span><br>
<span class="quotelev1">&gt;  system. After that, you will be able to submit builds without  
</span><br>
<span class="quotelev1">&gt; requiring
</span><br>
<span class="quotelev1">&gt;  hands-on time from myself or Erinn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once the immediate project backlog is handled, we will process  
</span><br>
<span class="quotelev1">&gt; requests
</span><br>
<span class="quotelev1">&gt; as quickly as possible. While I'm likely to send you this queue  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; in order from the most recent end of my mailbox, tickets will preserve
</span><br>
<span class="quotelev1">&gt; the Date of your earliest email.
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
<li><strong>Next message:</strong> <a href="4139.php">Lenny Verkhovsky: "[OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
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
