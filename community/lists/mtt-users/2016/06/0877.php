<?
$subject_val = "Re: [MTT users] Invalid mpi install id while reporting MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 15:36:47 2016" -->
<!-- isoreceived="20160621193647" -->
<!-- sent="Tue, 21 Jun 2016 19:36:44 +0000" -->
<!-- isosent="20160621193644" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Invalid mpi install id while reporting MTT" -->
<!-- id="B72FA69E-5D3F-41E4-BFCC-ACD9D24F28A7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F8258729-D2BE-4C9A-87AE-D4F56BC7249C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Invalid mpi install id while reporting MTT<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-21 15:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>In reply to:</strong> <a href="0876.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Reply:</strong> <a href="0878.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abhishek --
<br>
<p>Could you send the full output from your mtt client run with the --verbose flag enabled?
<br>
<p>If you'd prefer not to send it to the public list, send it directly to me and Josh Hursey (IBM).
<br>
<p>Thanks!
<br>
<p><p><p><span class="quotelev1">&gt; On Jun 21, 2016, at 6:48 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings Abhishek.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You sent me your INI file in another email thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, you need to run all the 5 phases.  During the MPI install, for example, even if you have an &quot;already installed&quot; MPI (i.e., using the MPI Get module &quot;AlreadyInstalled&quot;), you still have to run that phase so that a) the appropriate data structures are created in MTT, and b) the MTT client registers the result of that &quot;install&quot; with the server (and gets an ID back from the server).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically: even though the MPI install step may effectively be a no-op (because you're using an MPI that is already installed), MTT still needs to report back the &quot;success&quot; of the MPI install step to the server so that it can get an MPI Install ID back from the server to use with subsequent phases.  That's essentially what the AlreadyInstalled module does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I have a few suggestions about the .ini file you sent me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I see you're using the OMPI_Snapshot MPI Get module.  That's fine (and that's what we all do for nightly testing).  But I thought you said you were using your own sources...?  That's why I mentioned the AlreadyInstalled module, above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - ...ah, perhaps you meant that you were using your own sources via the <a href="http://localhost/">http://localhost/</a>... URL you provided via the ompi_snapshot_url?  I'm assuming that this is just for testing purposes, and you'll replace it with the real nightly URL, later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Note that in the MPI install section, the templated supplies &quot;-j 32&quot; as &quot;make&quot; arguments.  This does a 32-way parallel build.  This is probably only recommended for 16-core machines (or more).  My point: adjust that -j value to suit your local machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Do you only care about testing the TCP BTL?  The MPI Details section contains the &quot;mca&quot; value, which is currently only set to test the TCP transport for MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I see you encoded the github password for the ompi-tests repo in your .ini file.  This is fine, but as you probably figured out, but the drawback is that you can't email your .ini file to a public list (e.g., this one) for discussion.  If you care, as an alternative, I *think* you can stash this git username/password on your local filesystem, instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Similar to the above, I see your MTT database password in your .ini file.  FWIW, I keep my Cisco MTT database password in a separate file on the filesystem, and access it in my .ini file like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = &amp;stringify(&amp;cat(&quot;/home/mpiteam/mtt-db-password.txt&quot;))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This allows me to save my MTT .ini file in git / share it with others, and not compromise my password.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 20, 2016, at 2:28 PM, Abhishek Joshi &lt;abhishek.joshi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While trying to submit results for MTT , I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Invalid mpi_install_id () given. (Not provided). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using the following cmd:
</span><br>
<span class="quotelev2">&gt;&gt; ./client/mtt   --trial --file ./ompi-core-template.ini_sample --print-time 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, I am using a custom build, i.e MPI sources are my own.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Abhishek
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/06/0875.php">http://www.open-mpi.org/community/lists/mtt-users/2016/06/0875.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>In reply to:</strong> <a href="0876.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Reply:</strong> <a href="0878.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
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
