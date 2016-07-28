<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 09:55:11 2011" -->
<!-- isoreceived="20110823135511" -->
<!-- sent="Tue, 23 Aug 2011 15:54:17 +0200" -->
<!-- isosent="20110823135417" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="5864_1314107711_p7NDt6cg001759_4E53B109.506_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3B684066-CFA3-4183-A64F-6C00933D3C03_at_cisco.com" -->
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
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 09:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9687.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9667.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I modified the code, copyright comments added.
<br>
<p>And about configure.m4, sorry I was not clear before, tipc.h is under 
<br>
/usr/include/linux/tipc.h, not under include directly.
<br>
<p>I have done some tests using tools like NetPIPE, osu and IMB and the 
<br>
result shows that TIPC BTL has a better performance
<br>
than TCP BTL.
<br>
<p>/Xin
<br>
<p>On 08/17/2011 04:23 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ok.  For the moment, you might want to leave the priority alone and see how it goes.  You can always manually turn off the SM BTL to test performance with and without it.  If it turns out to be better than the SM BTL, we can play the priority tricks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 17, 2011, at 10:09 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No there is no library that must be linked to. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About the performance compared to SM, I have not tested that yet. So far, I compared it with TCP. It has better performances under some circumstances, not all.
</span><br>
<span class="quotelev2">&gt;&gt; Now I am working with profiling tools, hope to find reasons and improve it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Xin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/17/2011 04:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, is there a libtipc that must be linked against?  If so, can you give me a symbol name to check for in there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 17, 2011, at 9:53 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I put it here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="https://bitbucket.org/jsquyres/ompi-tipc/overview">https://bitbucket.org/jsquyres/ompi-tipc/overview</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can clone that repo with the Mercurial distributed version control tool.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll add a configure.m4 shortly; possibly today.  You can test it for me.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the SM stuff, perhaps TIPC should just have a higher priority than the SM BTL -- that would naturally rank it above SM.  Is TIPC's same-node performance better than SM's?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 17, 2011, at 9:36 AM, Xin He wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is a single component.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And could someone write a configure file for me?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; structure sockaddr_tipc (defined in tipc.h)is a good sign we have tipc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And also TIPC cannot use with SM component, because TIPC use shared memory as well for communication between processes on the same node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please kindly check the appendix. Thank you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Xin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 08/17/2011 03:15 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is your code self-contained in a single component?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If it's a small (compressed) tarball, just send it to the list.  Otherwise, you might want to post it somewhere like bitbucket.org where people can download and look at it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 17, 2011, at 4:00 AM, Xin He wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have ran TIPC BTL component with the tools that recommended. After fixing some major bugs, I think the code is ready to be reviewed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I understand that a form has to be signed before OMPI can accept code. My organization is preparing that and soon a form will be sent.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But in the meantime, can someone review my code please? Where should I send to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Xin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;tipc.zip&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9688/tipc.zip">tipc.zip</a>
</ul>
<!-- attachment="tipc.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9687.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9667.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
