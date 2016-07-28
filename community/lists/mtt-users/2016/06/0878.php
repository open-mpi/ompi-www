<?
$subject_val = "Re: [MTT users] Invalid mpi install id while reporting MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 16:01:04 2016" -->
<!-- isoreceived="20160621200104" -->
<!-- sent="Wed, 22 Jun 2016 01:30:42 +0530" -->
<!-- isosent="20160621200042" -->
<!-- name="Abhishek Joshi" -->
<!-- email="abhishek.joshi_at_[hidden]" -->
<!-- subject="Re: [MTT users] Invalid mpi install id while reporting MTT" -->
<!-- id="CAK_Rsw3qA+Z5FgQUN4E_fWxqF6BzJ4fs7qVOoMBGsuKZ87_T1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B72FA69E-5D3F-41E4-BFCC-ACD9D24F28A7_at_cisco.com" -->
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
<strong>From:</strong> Abhishek Joshi (<em>abhishek.joshi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-21 16:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0879.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Previous message:</strong> <a href="0877.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>In reply to:</strong> <a href="0877.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0879.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Reply:</strong> <a href="0879.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
As of the latest master, I am getting this with e
<br>
<p><p>On Wed, Jun 22, 2016 at 1:06 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Abhishek --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you send the full output from your mtt client run with the --verbose
</span><br>
<span class="quotelev1">&gt; flag enabled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you'd prefer not to send it to the public list, send it directly to me
</span><br>
<span class="quotelev1">&gt; and Josh Hursey (IBM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 21, 2016, at 6:48 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings Abhishek.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You sent me your INI file in another email thread.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In general, you need to run all the 5 phases.  During the MPI install,
</span><br>
<span class="quotelev1">&gt; for example, even if you have an &quot;already installed&quot; MPI (i.e., using the
</span><br>
<span class="quotelev1">&gt; MPI Get module &quot;AlreadyInstalled&quot;), you still have to run that phase so
</span><br>
<span class="quotelev1">&gt; that a) the appropriate data structures are created in MTT, and b) the MTT
</span><br>
<span class="quotelev1">&gt; client registers the result of that &quot;install&quot; with the server (and gets an
</span><br>
<span class="quotelev1">&gt; ID back from the server).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Specifically: even though the MPI install step may effectively be a
</span><br>
<span class="quotelev1">&gt; no-op (because you're using an MPI that is already installed), MTT still
</span><br>
<span class="quotelev1">&gt; needs to report back the &quot;success&quot; of the MPI install step to the server so
</span><br>
<span class="quotelev1">&gt; that it can get an MPI Install ID back from the server to use with
</span><br>
<span class="quotelev1">&gt; subsequent phases.  That's essentially what the AlreadyInstalled module
</span><br>
<span class="quotelev1">&gt; does.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, I have a few suggestions about the .ini file you sent
</span><br>
<span class="quotelev1">&gt; me:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - I see you're using the OMPI_Snapshot MPI Get module.  That's fine (and
</span><br>
<span class="quotelev1">&gt; that's what we all do for nightly testing).  But I thought you said you
</span><br>
<span class="quotelev1">&gt; were using your own sources...?  That's why I mentioned the
</span><br>
<span class="quotelev1">&gt; AlreadyInstalled module, above.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - ...ah, perhaps you meant that you were using your own sources via the
</span><br>
<span class="quotelev1">&gt; <a href="http://localhost/">http://localhost/</a>... URL you provided via the ompi_snapshot_url?  I'm
</span><br>
<span class="quotelev1">&gt; assuming that this is just for testing purposes, and you'll replace it with
</span><br>
<span class="quotelev1">&gt; the real nightly URL, later.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Note that in the MPI install section, the templated supplies &quot;-j 32&quot;
</span><br>
<span class="quotelev1">&gt; as &quot;make&quot; arguments.  This does a 32-way parallel build.  This is probably
</span><br>
<span class="quotelev1">&gt; only recommended for 16-core machines (or more).  My point: adjust that -j
</span><br>
<span class="quotelev1">&gt; value to suit your local machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Do you only care about testing the TCP BTL?  The MPI Details section
</span><br>
<span class="quotelev1">&gt; contains the &quot;mca&quot; value, which is currently only set to test the TCP
</span><br>
<span class="quotelev1">&gt; transport for MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - I see you encoded the github password for the ompi-tests repo in your
</span><br>
<span class="quotelev1">&gt; .ini file.  This is fine, but as you probably figured out, but the drawback
</span><br>
<span class="quotelev1">&gt; is that you can't email your .ini file to a public list (e.g., this one)
</span><br>
<span class="quotelev1">&gt; for discussion.  If you care, as an alternative, I *think* you can stash
</span><br>
<span class="quotelev1">&gt; this git username/password on your local filesystem, instead.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Similar to the above, I see your MTT database password in your .ini
</span><br>
<span class="quotelev1">&gt; file.  FWIW, I keep my Cisco MTT database password in a separate file on
</span><br>
<span class="quotelev1">&gt; the filesystem, and access it in my .ini file like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mttdatabase_password =
</span><br>
<span class="quotelev1">&gt; &amp;stringify(&amp;cat(&quot;/home/mpiteam/mtt-db-password.txt&quot;))
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This allows me to save my MTT .ini file in git / share it with others,
</span><br>
<span class="quotelev1">&gt; and not compromise my password.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 20, 2016, at 2:28 PM, Abhishek Joshi &lt;
</span><br>
<span class="quotelev1">&gt; abhishek.joshi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; While trying to submit results for MTT , I get the following error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Invalid mpi_install_id () given. (Not provided).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am using the following cmd:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./client/mtt   --trial --file ./ompi-core-template.ini_sample
</span><br>
<span class="quotelev1">&gt; --print-time
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, I am using a custom build, i.e MPI sources are my own.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Abhishek
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/06/0875.php">http://www.open-mpi.org/community/lists/mtt-users/2016/06/0875.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">https://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/06/0878.php">http://www.open-mpi.org/community/lists/mtt-users/2016/06/0878.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Abhishek
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0879.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Previous message:</strong> <a href="0877.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>In reply to:</strong> <a href="0877.php">Jeff Squyres (jsquyres): "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0879.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
<li><strong>Reply:</strong> <a href="0879.php">Abhishek Joshi: "Re: [MTT users] Invalid mpi install id while reporting MTT"</a>
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
