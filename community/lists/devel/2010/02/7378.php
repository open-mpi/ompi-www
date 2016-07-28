<?
$subject_val = "Re: [OMPI devel] New feature for SVN commit messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 11:10:30 2010" -->
<!-- isoreceived="20100205161030" -->
<!-- sent="Fri, 5 Feb 2010 11:10:25 -0500" -->
<!-- isosent="20100205161025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New feature for SVN commit messages" -->
<!-- id="645FF518-BC7C-48E5-93BB-DB0215E12B6F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="834F7CCB-0969-4719-AC6F-C31168A0602E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New feature for SVN commit messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 11:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7379.php">Caciano Machado: "[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<li><strong>Previous message:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>In reply to:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7382.php">Josh Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>Reply:</strong> <a href="7382.php">Josh Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IU has been having some problems with this -- let me ping the admin and see what happened (I also saw your commit go by and noticed that no CMR ticket was created).
<br>
<p><p>On Feb 5, 2010, at 10:48 AM, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Is this functionality still working?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added 'cmr:v1.5.1' to r22564 and it did not create a ticket. I noticed a few of the tickets manually created yesterday also cited this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2010, at 8:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A little while ago, IU added the feature of automatically creating CMRs from SVN commits when you add tokens like this in your commit message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    svn ci -m &quot;This fixes ...foo...  cmr:v1.4.2&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IU just extended this feature by allowing you to specify a reviewer, thusly:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    svn ci -m &quot;This fixes ...foo...  cmr:v1.4.2:reviewer=jsquyres&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You must specify a valid Trac ID.  If you do this, the ticket will be assigned to that ID, meaning that they'll get an email with the ticket and a request to review it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; More description is here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages">https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Enjoy!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Cisco.com - <a href="http://www.cisco.com">http://www.cisco.com</a>
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7379.php">Caciano Machado: "[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<li><strong>Previous message:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>In reply to:</strong> <a href="7377.php">Joshua Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7382.php">Josh Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<li><strong>Reply:</strong> <a href="7382.php">Josh Hursey: "Re: [OMPI devel] New feature for SVN commit messages"</a>
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
