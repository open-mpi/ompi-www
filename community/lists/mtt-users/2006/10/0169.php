<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 14:47:44 2006" -->
<!-- isoreceived="20061031194744" -->
<!-- sent="Tue, 31 Oct 2006 14:47:34 -0500" -->
<!-- isosent="20061031194734" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Discussion on teleconf yesterday? (raw SQL)" -->
<!-- id="20061031194733.GU9933_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061027164257.GI9751_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 14:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<li><strong>Previous message:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<li><strong>In reply to:</strong> <a href="0162.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0163.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI - in the open-mpi.org/mtt, you can check the &quot;SQL&quot;
<br>
checkbox to see the raw SQL queries. Here's the &quot;Odin&quot; query
<br>
showing the SQL:
<br>
<p><a href="http://tinyurl.com/yd7oob">http://tinyurl.com/yd7oob</a>
<br>
<p>You can modify and play around with those on the live
<br>
database, e.g.:
<br>
<p>$ echo &quot;... some SQL ... &quot; | psql -d mtt -U iu
<br>
<p>I also like the pg_dump command. E.g., view the live schema:
<br>
<p>$ pg_dump -s -d mtt -U iu
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Basically our problems are:
</span><br>
<span class="quotelev2">&gt; &gt;   - Testing results come in at various times as they complete, we  
</span><br>
<span class="quotelev2">&gt; &gt; would really like a 'status report' at 8 am every day finished or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now, could you load up this webpage everyday at 8am?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://tinyurl.com/ydt777">http://tinyurl.com/ydt777</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<li><strong>Previous message:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT users] [MTT svn] svn:mtt-svn r403"</a>
<li><strong>In reply to:</strong> <a href="0162.php">Ethan Mallove: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0163.php">Jeff Squyres: "Re: [MTT users] Discussion on teleconf yesterday?"</a>
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
