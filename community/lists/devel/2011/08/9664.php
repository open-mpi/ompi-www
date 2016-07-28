<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 17 09:53:21 2011" -->
<!-- isoreceived="20110817135321" -->
<!-- sent="Wed, 17 Aug 2011 09:53:15 -0400" -->
<!-- isosent="20110817135315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="27539218-4CC4-4B1D-9F13-A4CA19D3531F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5866_1313588261_p7HDbafT029441_4E4BC3F9.2060605_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL code ready for review<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-17 09:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9665.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9663.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9663.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9665.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9665.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I put it here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/ompi-tipc/overview">https://bitbucket.org/jsquyres/ompi-tipc/overview</a>
<br>
<p>You can clone that repo with the Mercurial distributed version control tool.
<br>
<p>I'll add a configure.m4 shortly; possibly today.  You can test it for me.  :-)
<br>
<p>For the SM stuff, perhaps TIPC should just have a higher priority than the SM BTL -- that would naturally rank it above SM.  Is TIPC's same-node performance better than SM's?
<br>
<p><p>On Aug 17, 2011, at 9:36 AM, Xin He wrote:
<br>
<p><span class="quotelev1">&gt; It is a single component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And could someone write a configure file for me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; structure sockaddr_tipc (defined in tipc.h)is a good sign we have tipc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And also TIPC cannot use with SM component, because TIPC use shared memory as well for communication between processes on the same node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please kindly check the appendix. Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Xin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/17/2011 03:15 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is your code self-contained in a single component?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it's a small (compressed) tarball, just send it to the list.  Otherwise, you might want to post it somewhere like bitbucket.org where people can download and look at it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 17, 2011, at 4:00 AM, Xin He wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have ran TIPC BTL component with the tools that recommended. After fixing some major bugs, I think the code is ready to be reviewed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand that a form has to be signed before OMPI can accept code. My organization is preparing that and soon a form will be sent.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But in the meantime, can someone review my code please? Where should I send to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xin
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;tipc.zip&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9665.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9663.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9663.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9665.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9665.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
