<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 15:24:35 2007" -->
<!-- isoreceived="20070524192435" -->
<!-- sent="Thu, 24 May 2007 15:24:15 -0400" -->
<!-- isosent="20070524192415" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Few trunk results this morning?" -->
<!-- id="ea86ce220705241224g4abd9f47ic345f49be32595be_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220705241143k46876b1en66a5bef040ceccb8_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 15:24:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/06/0310.php">Shai Venter: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Tim Mattox: "Re: [MTT users] Few trunk results this morning?"</a>
<li><strong>In reply to:</strong> <a href="0308.php">Tim Mattox: "Re: [MTT users] Few trunk results this morning?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, it was a disk quota problem.  The quota has been increased, so
<br>
this particular problem will be averted for quite awhile.
<br>
<p>On 5/24/07, Tim Mattox &lt;timattox_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I haven't found anything in the logs, but it appears the partition holding
</span><br>
<span class="quotelev1">&gt; the website filled up last night.  It's fine now though...  I'll ask
</span><br>
<span class="quotelev1">&gt; the sysadmin
</span><br>
<span class="quotelev1">&gt; to look into it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've initiated a build of a new trunk &quot;nightly&quot; so that there will be something
</span><br>
<span class="quotelev1">&gt; there in about 20 minutes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/24/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Indiana: it looks like something went wrong with the tarball
</span><br>
<span class="quotelev2">&gt; &gt; generation last night (note the zero-length files):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [12:12] eddie:/l/osl/www/www.open-mpi.org/nightly/trunk % l
</span><br>
<span class="quotelev2">&gt; &gt; total 42468
</span><br>
<span class="quotelev2">&gt; &gt; drwxrwsr-x  3 jsquyres openmpi     4096 May 23 21:22 ./
</span><br>
<span class="quotelev2">&gt; &gt; drwxrwsr-x  7 jsquyres openmpi     4096 Apr 21 23:12 ../
</span><br>
<span class="quotelev2">&gt; &gt; -rw-rw-r--  1 jsquyres openmpi     1738 Aug 27  2006 index.php
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  openmpi        0 May 23 21:22 latest_snapshot.txt
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  openmpi        0 May 23 21:22 md5sums.txt
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 3919045 May 19 21:09
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14701.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 6903261 May 19 21:08
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14701.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 3920829 May 20 21:09
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14702.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 6903903 May 20 21:09
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14702.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 3928934 May 21 21:09
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14715.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 6915775 May 21 21:08
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14715.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 3928720 May 22 21:09
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14719.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  projects 6914181 May 22 21:09
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14719.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  openmpi        0 May 23 21:22
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14743.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  openmpi        0 May 23 21:22
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r14743.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt; -rw-r--r--  1 mpiteam  openmpi        0 May 23 21:22 sha1sums.txt
</span><br>
<span class="quotelev2">&gt; &gt; drwxrwsr-x  7 jsquyres openmpi     4096 May 24 11:54 .svn/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What happened?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 24, 2007, at 12:08 PM, Sheldon D'mello wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Ethan,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yes, there is an error being generated by the wget command. Looks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; like the tarball does not exist.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Running command: wget -nv
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    <a href="http://www.open-mpi.org/nightly/trunk/openmpi-.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-.tar.gz</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OUT:<a href="http://www.open-mpi.org/nightly/trunk/openmpi-.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-.tar.gz</a>:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OUT:11:05:16 ERROR 404: Not Found.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Command complete, exit status: 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** ERROR: Module aborted: MTT::MPI::Get::OMPI_Snapshot:Get: ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ERROR:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Could not download tarball -- aborting
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sheldon
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sdmello_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent by: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 05/24/2007 11:00 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please respond to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users Digest, Vol 15, Issue 7
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Send mtt-users mailing list submissions to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 mtt-users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 mtt-users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt; &gt; &gt; than &quot;Re: Contents of mtt-users digest...&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   1. Few trunk results this morning? (Ethan Mallove)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message: 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: Thu, 24 May 2007 11:52:23 -0400
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [MTT users] Few trunk results this morning?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: MTT users &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Message-ID: &lt;20070524155223.GJ6879_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There's hardly any ompi-nightly-trunk results this morning
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from *any* of the &quot;ompi-core-testers&quot;. Did something happen
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with the tarball generator last night?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Ethan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; End of mtt-users Digest, Vol 15, Issue 7
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ****************************************
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/06/0310.php">Shai Venter: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Tim Mattox: "Re: [MTT users] Few trunk results this morning?"</a>
<li><strong>In reply to:</strong> <a href="0308.php">Tim Mattox: "Re: [MTT users] Few trunk results this morning?"</a>
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
