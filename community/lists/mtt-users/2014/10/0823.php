<?
$subject_val = "Re: [MTT users] Reporting results from offline runs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 09:02:56 2014" -->
<!-- isoreceived="20141027130256" -->
<!-- sent="Mon, 27 Oct 2014 14:02:52 +0100 (CET)" -->
<!-- isosent="20141027130252" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [MTT users] Reporting results from offline runs" -->
<!-- id="1151623876.187339.1414414972731.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E4969509-5342-4122-A51A-769EB881E184_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Reporting results from offline runs<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 09:02:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0822.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>In reply to:</strong> <a href="0822.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Reply:</strong> <a href="0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info.
<br>
<p>I gave these options a try.
<br>
Unfortunately the MTTDatabase module requires an URL to initialize - but if I provide an URL in the ini file, MTT tries to connect to this URL forever...
<br>
If I do not provide the URL the MTTDatabase module is skipped. Are there any additional/hidden options or environment variables? 
<br>
<p>Regards
<br>
Christoph Niethammer
<br>
<p><p><p><p>----- Original Message -----
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;MPI Testing Tool Users&quot; &lt;mtt-users_at_[hidden]&gt;
<br>
Sent: Friday, October 24, 2014 12:38:16 PM
<br>
Subject: Re: [MTT users] Reporting results from offline runs
<br>
<p>On Oct 22, 2014, at 5:46 PM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I saw client/mtt-submit which states it can submit  mttdatabase_debug file(s).
</span><br>
<span class="quotelev1">&gt; Are these the files written by the [Reporter: text file backup] ?
</span><br>
<p>Scheesh; I hit &quot;send&quot; by accident on the prior mail.  Sorry!
<br>
<p>I have the 3 following lines in my MTT database reporter section:
<br>
<p>mttdatabase_debug_filename = mttdb_debug_file
<br>
mttdatabase_keep_debug_files = 1
<br>
mttdatabase_debug_server = 1
<br>
<p>I don't remember what debug_server is... I think that's just for outputting some additional verbose statements when communicating with the server.  But the first two output the files that I think you need.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0823.php">http://www.open-mpi.org/community/lists/mtt-users/2014/10/0823.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0822.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>In reply to:</strong> <a href="0822.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Reply:</strong> <a href="0824.php">Jeff Squyres (jsquyres): "Re: [MTT users] Reporting results from offline runs"</a>
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
