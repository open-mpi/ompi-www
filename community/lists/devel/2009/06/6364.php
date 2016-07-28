<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 27 19:52:48 2009" -->
<!-- isoreceived="20090627235248" -->
<!-- sent="Sat, 27 Jun 2009 16:52:43 -0700" -->
<!-- isosent="20090627235243" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552" -->
<!-- id="4A46B0CB.1060605_at_sun.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DF8FB981-E527-496B-9110-A2054E29E4EC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-27 19:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6365.php">Ralph Castain: "[OMPI devel] Updating the trunk"</a>
<li><strong>Previous message:</strong> <a href="6363.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>In reply to:</strong> <a href="6363.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=windows-1252"
 http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Jeff Squyres wrote:
<blockquote cite="midDF8FB981-E527-496B-9110-A2054E29E4EC@cisco.com"
 type="cite">Just to make sure that George / Eugene sees this commit
message...
  <div><br>
  </div>
  <div>There was a conflict committed in r21551.  Can someone check
these compiler warning messages?</div>
  <div><br>
  <div>
  <div>Begin forwarded message:</div>
  <blockquote type="cite">
    <div>
    <div style="margin: 0px;"><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal; color: rgb(0, 0, 0);"
 color="#000000" face="Helvetica" size="5"><b>From: </b></font><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal;"
 face="Helvetica" size="5">&lt;<a href="mailto:rhc@osl.iu.edu">rhc@osl.iu.edu</a>&gt;</font></div>
    <div style="margin: 0px;"><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal; color: rgb(0, 0, 0);"
 color="#000000" face="Helvetica" size="5"><b>Date: </b></font><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal;"
 face="Helvetica" size="5">June 26, 2009 9:39:15 PM EDT</font></div>
    <div style="margin: 0px;"><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal; color: rgb(0, 0, 0);"
 color="#000000" face="Helvetica" size="5"><b>To: </b></font><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal;"
 face="Helvetica" size="5">&lt;<a href="mailto:svn-full@open-mpi.org">svn-full@open-mpi.org</a>&gt;</font></div>
    <div style="margin: 0px;"><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal; color: rgb(0, 0, 0);"
 color="#000000" face="Helvetica" size="5"><b>Subject: </b></font><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal;"
 face="Helvetica" size="5"><b>[OMPI svn-full] svn:open-mpi r21552</b></font></div>
    <div style="margin: 0px;"><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal; color: rgb(0, 0, 0);"
 color="#000000" face="Helvetica" size="5"><b>Reply-To: </b></font><font
 style="font-family: Helvetica; font-style: normal; font-variant: normal; font-weight: normal; font-size: 18px; line-height: normal; font-size-adjust: none; font-stretch: normal;"
 face="Helvetica" size="5">&lt;<a href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>&gt;</font></div>
    <div style="margin: 0px; min-height: 14px;"><br>
    </div>
    </div>
    <div><!-- Converted from text/plain format -->
    <p><font size="2">Author: rhc<br>
Date: 2009-06-26 21:39:15 EDT (Fri, 26 Jun 2009)<br>
New Revision: 21552<br>
URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21552">https://svn.open-mpi.org/trac/ompi/changeset/21552</a><br>
    <br>
Log:<br>
Remove svn conflict lines due to commit r21551 in the sm btl. I #if 0'd
out the offending line that cause the conflict just in case it was the
correct one. However, this now compiles cleanly, minus the following
warnings that I wasn't sure which way to resolve:<br>
    <br>
btl_sm.c: In function ‘mca_btl_sm_sendi’:<br>
btl_sm.c:734: warning: comparison between signed and unsigned<br>
btl_sm.c: In function ‘mca_btl_sm_send’:<br>
btl_sm.c:812: warning: comparison between signed and unsigned<br>
    <br>
    <br>
Text files modified:<br>
   trunk/ompi/mca/btl/sm/btl_sm_component.c |     5
++---                                  <br>
   1 files changed, 2 insertions(+), 3 deletions(-)<br>
    <br>
Modified: trunk/ompi/mca/btl/sm/btl_sm_component.c<br>
==============================================================================<br>
--- trunk/ompi/mca/btl/sm/btl_sm_component.c    (original)<br>
+++ trunk/ompi/mca/btl/sm/btl_sm_component.c    2009-06-26 21:39:15 EDT
(Fri, 26 Jun 2009)<br>
@@ -428,11 +428,10 @@<br>
                 /* return the fragment */<br>
                 MCA_BTL_SM_FIFO_WRITE(<br>
                         mca_btl_sm_component.sm_peers[peer_smp_rank],<br>
-&lt;&lt;&lt;&lt;&lt;&lt;&lt; .mine<br>
                         my_smp_rank, peer_smp_rank, hdr-&gt;frag,
false, true, rc);<br>
-=======<br>
+#if 0<br>
                         my_smp_rank, peer_smp_rank, hdr-&gt;frag,
false, rc);<br>
-&gt;&gt;&gt;&gt;&gt;&gt;&gt; .r21550<br>
+#endif<br>
                 break;<br>
             }<br>
             case MCA_BTL_SM_FRAG_ACK:<br>
    </font></p>
    </div>
  </blockquote>
  </div>
  </div>
</blockquote>
<font size="2">Weird.  Okay.  I think it's fixed now with r21556.  For
the record, I will provide more explanation here than anyone probably
cares for.<br>
<br>
The stuff around line 431 of btl_sm_component.c is where the offending
"goto recheck_peer" had been inserted and that George just pulled out. 
Namely, the goto caused sm progress to keep draining the FIFO until
there was nothing left, while we agreed it should only poll until a
message fragment was received.  So, the "break" above is the correct
behavior.  George put it back and then I put my stuff back.  There was
a conflict on that one file.  I thought I overwrote his stuff (since we
both removed the offending goto statement).  I'm not sure what
happened, but it looks like some bad line crept in.  I must have done
something wrong with svn in managing that file conflict.  Sorry.<br>
<br>
For what it's worth, the extra argument you see above for
MCA_BTL_SM_FIFO_WRITE is something I introduced.  This macro now first
(before attempting the requested write) sees if there are any pending
sends to retry.  Incidentally, how are pending sends retried?  Well, by
calling MCA_BTL_SM_FIFO_WRITE!  Circular, yes?  Yes.  So, the extra
argument tells MCA_BTL_SM_FIFO_WRITE whether to retry pending sends or
not.<br>
<br>
Regarding the warnings in btl_sm.c, they're from btl_sm_sendi and
btl_sm_send.  In each case, when we try to send, we perform a check to
see if there are "lots" of outstanding fragments (sent, but not yet
returned).  If there are a "lot", we poll the FIFO to see if we can
reclaim any fragments.  The yardstick we use for "a lot" is based on
the FIFO size.  So, comparing an int to a size_t.  I introduced a
coercion into the code to make the warning go away.<br>
<br>
Sorry about the sloppiness on all accounts.<br>
</font>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6365.php">Ralph Castain: "[OMPI devel] Updating the trunk"</a>
<li><strong>Previous message:</strong> <a href="6363.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<li><strong>In reply to:</strong> <a href="6363.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
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
