<?
$subject_val = "Re: [OMPI devel] git tree mirror: I give up :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 02:03:03 2012" -->
<!-- isoreceived="20121002060303" -->
<!-- sent="Tue, 02 Oct 2012 08:02:55 +0200" -->
<!-- isosent="20121002060255" -->
<!-- name="Bert Wesarg" -->
<!-- email="Bert.Wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] git tree mirror: I give up :-(" -->
<!-- id="506A838F.20900_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7BF4F197-2ED3-44E0-B205-7383C25C6DFD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] git tree mirror: I give up :-(<br>
<strong>From:</strong> Bert Wesarg (<em>Bert.Wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 02:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11539.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11539.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Reply:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 10/01/2012 10:22 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Brice pinged me off list and said he *might* have a look at this later this week.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case anyone else might be interested in taking over the git SVN mirror, here's a history of what has been done:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Eugene Voronov at Mellanox kindly provided 2 scripts that were the foundation for what I did in the git mirror.  The final versions of them are attached:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - make-git-clone.sh: made the initial git clone of the SVN tree
</span><br>
<span class="quotelev1">&gt;    - update-git-svn.sh: run every 30 mins to pull from SVN, merge to all the relevant branches, and push to github
</span><br>
<span class="quotelev1">&gt;    - authors.txt: a file I made with all the SVN IDs and committer names (made via svn log + scripting + manual tweaks).  You'll need this file to run the above 2 scripts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. To be honest, I don't fully understand the git-ness of what these 2 scripts are doing (which is why I'm giving this up).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. The update script has been run via cron for several weeks and mysteriously stopped working (with a set of errors -- see attached) this past Friday.  All updates since then have (predictably) failed because git is in the middle of a failed merge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. For anyone who wants to take this stuff over, I'm happy to share the local tree that I was using for the pulling-from-SVN and pushing-to-github, or you can feel free to re-create the tree yourself.  I'm also happy to give whatever access you need to the OMPI organization on github.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>as far as I know, github.com has a svn-2-git conversion service too, but
<br>
I never tried it though. Btw, I have also good git skills and using
<br>
git-svn for local stuff, but never setup a git-svn-mirror, only a
<br>
git-cvs-mirror.
<br>
<p>That said, while I'm currently not working on the Open MPI code, I'm
<br>
nevertheless offer you my help.
<br>
<p>Bert
<br>
<pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: Bert.Wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11540/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11539.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11539.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Reply:</strong> <a href="11541.php">Jeff Squyres: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
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
