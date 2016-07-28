<?
$subject_val = "Re: [OMPI devel] New feature for SVN commit messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 17:05:36 2010" -->
<!-- isoreceived="20100208220536" -->
<!-- sent="Mon, 8 Feb 2010 17:05:30 -0500" -->
<!-- isosent="20100208220530" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New feature for SVN commit messages" -->
<!-- id="21393ABC-F945-42F3-A869-5587FA851FB6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="645FF518-BC7C-48E5-93BB-DB0215E12B6F_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 17:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7381.php">Jeff Squyres: "Re: [OMPI devel] Create success (r1.7a1r22577)"</a>
<li><strong>In reply to:</strong> <a href="7378.php">Jeff Squyres: "Re: [OMPI devel] New feature for SVN commit messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like this is fixed now. Let us know if you see any other  
<br>
issues with it.
<br>
<p>-- Josh
<br>
<p>On Feb 5, 2010, at 11:10 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; IU has been having some problems with this -- let me ping the admin  
</span><br>
<span class="quotelev1">&gt; and see what happened (I also saw your commit go by and noticed that  
</span><br>
<span class="quotelev1">&gt; no CMR ticket was created).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2010, at 10:48 AM, Joshua Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this functionality still working?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I added 'cmr:v1.5.1' to r22564 and it did not create a ticket. I  
</span><br>
<span class="quotelev2">&gt;&gt; noticed a few of the tickets manually created yesterday also cited  
</span><br>
<span class="quotelev2">&gt;&gt; this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2010, at 8:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A little while ago, IU added the feature of automatically creating  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMRs from SVN commits when you add tokens like this in your commit  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   svn ci -m &quot;This fixes ...foo...  cmr:v1.4.2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IU just extended this feature by allowing you to specify a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reviewer, thusly:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   svn ci -m &quot;This fixes ...foo...  cmr:v1.4.2:reviewer=jsquyres&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You must specify a valid Trac ID.  If you do this, the ticket will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be assigned to that ID, meaning that they'll get an email with the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ticket and a request to review it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More description is here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages">https://svn.open-mpi.org/trac/ompi/wiki/TracSVNCommitMessages</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enjoy!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cisco.com - <a href="http://www.cisco.com">http://www.cisco.com</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7381.php">Jeff Squyres: "Re: [OMPI devel] Create success (r1.7a1r22577)"</a>
<li><strong>In reply to:</strong> <a href="7378.php">Jeff Squyres: "Re: [OMPI devel] New feature for SVN commit messages"</a>
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
