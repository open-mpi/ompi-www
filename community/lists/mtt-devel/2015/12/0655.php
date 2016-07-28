<?
$subject_val = "Re: [MTT devel] [devel-core] MTT on ivy";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 08:44:59 2015" -->
<!-- isoreceived="20151203134459" -->
<!-- sent="Thu, 3 Dec 2015 14:44:54 +0100 (CET)" -->
<!-- isosent="20151203134454" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [devel-core] MTT on ivy" -->
<!-- id="455871796.22557.1449150294320.JavaMail.zimbra_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sXcrm_cGPzktT+58+9MTZ1wXECehyWbgmBt11XHuNGtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [devel-core] MTT on ivy<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-03 08:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0656.php">Josh Hursey: "[MTT devel] GitHub Issue Cleanup"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/11/0654.php">Josh Hursey: "[MTT devel] statement_timeout on MTT Reporter Queries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Escaping the parentheses helps:
<br>
^ivy cluster \(sj\)$
<br>
<p>PS: I like regex :)
<br>
<p>Regards
<br>
Christoph Niethammer
<br>
<p>----- Original Message -----
<br>
From: &quot;Gilles Gouaillardet&quot; &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
To: &quot;Open MPI Core Developers&quot; &lt;devel-core_at_[hidden]&gt;
<br>
Cc: &quot;mtt-devel&quot; &lt;mtt-devel_at_[hidden]&gt;
<br>
Sent: Thursday, December 3, 2015 2:41:07 PM
<br>
Subject: Re: [devel-core] MTT on ivy
<br>
<p>Sylvain, 
<br>
<p>I incidentally found the '(sj)' is giving mtt web a hard time. 
<br>
for example, if i click on the links to see the latest build failures, mtt reports nothing. 
<br>
a workaround is to replace 
<br>
^ivy cluster (sj)$ 
<br>
with 
<br>
^ivy 
<br>
I guess the (sj) is interpreted as a regex by mtt web and this is not what we would have expected here 
<br>
<p>for the time being, can you remove the parenthesis ? 
<br>
<p>Cheers, 
<br>
<p>Gilles 
<br>
<p>On Wednesday, December 2, 2015, Sylvain Jeaugey &lt; sjeaugey_at_[hidden] &gt; wrote: 
<br>
<p><p>That was exactly the kind of feature I was looking for. Thanks ! 
<br>
<p>On 12/01/2015 11:42 AM, Jeff Squyres (jsquyres) wrote: 
<br>
<p><p><p><p>On Dec 1, 2015, at 1:16 PM, Sylvain Jeaugey &lt; sjeaugey_at_[hidden] &gt; wrote: 
<br>
<p>My results will be marked as &quot;ivy cluster (sj)&quot; while I'm playing with the test scripts. When the results look good, I will remove the &quot;(sj)&quot;. 
<br>
You can also use the &quot;trial=1&quot; value in the INI file to mark your results as trials (that are not shown by default searches on the web interface). 
<br>
<p><p><p>----------------------------------------------------------------------------------- 
<br>
This email message is for the sole use of the intended recipient(s) and may contain 
<br>
confidential information. Any unauthorized review, use, disclosure or distribution 
<br>
is prohibited. If you are not the intended recipient, please contact the sender by 
<br>
reply email and destroy all copies of the original message. 
<br>
----------------------------------------------------------------------------------- 
<br>
_______________________________________________ 
<br>
devel-core mailing list 
<br>
devel-core_at_[hidden] 
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a> 
<br>
<p>_______________________________________________
<br>
devel-core mailing list
<br>
devel-core_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0656.php">Josh Hursey: "[MTT devel] GitHub Issue Cleanup"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2015/11/0654.php">Josh Hursey: "[MTT devel] statement_timeout on MTT Reporter Queries"</a>
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
