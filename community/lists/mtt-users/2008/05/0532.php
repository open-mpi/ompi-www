<?
$subject_val = "[MTT users] Fail to run MTT, maybe authorization failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 09:13:37 2008" -->
<!-- isoreceived="20080507131337" -->
<!-- sent="Wed, 7 May 2008 21:26:26 +0800" -->
<!-- isosent="20080507132626" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="[MTT users] Fail to run MTT, maybe authorization failure" -->
<!-- id="OF1F3D0C30.C0CB9A7C-ON48257442.0048A815-48257442.0048B6F3_at_cn.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT users] Fail to run MTT, maybe authorization failure<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 09:26:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT users] Fail to run MTT, maybe authorization failure"</a>
<li><strong>Reply:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT users] Fail to run MTT, maybe authorization failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I am new to MTT. Today I applied for one MTT account and got the
<br>
confirmation mail with password. But I failed to run client/mtt after
<br>
setting mttdatabase_username, mttdatabase_password and
<br>
mttdatabase_platform. Following message is printed out:
<br>
<p>[root_at_valiant MTT]#  client/mtt -d --force -f
<br>
samples/ompi-core-template.ini
<br>
Debug is 1, Verbose is 1
<br>
...
<br>
Evaluating: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
<br>
Evaluating: OMPI
<br>
Evaluating: redhat
<br>
&nbsp;&nbsp;&nbsp;Set HTTP credentials for realm &quot;OMPI&quot;
<br>
MTTDatabase getting a client serial number...
<br>
MTTDatabase trying proxy:  / Default (none)
<br>
*** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
<br>
*** WARNING: &gt;&gt; Error was: 401 Authorization Required
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;!DOCTYPE HTML PUBLIC &quot;-//IETF//DTD HTML 2.0//EN&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;html&gt;&lt;head&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;401 Authorization Required&lt;/title&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;&lt;body&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Authorization Required&lt;/h1&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This server could not verify that you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;are authorized to access the document
<br>
&nbsp;&nbsp;&nbsp;&nbsp;requested.  Either you supplied the wrong
<br>
&nbsp;&nbsp;&nbsp;&nbsp;credentials (e.g., bad password), or your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;browser doesn't understand how to supply
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the credentials required.&lt;/p&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;hr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;address&gt;Apache Server at www.open-mpi.org Port 443&lt;/address&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;&lt;/html&gt;
<br>
<p>I tried to open <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a> and
<br>
<a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>. Account/password is required. But
<br>
I also failed to login in. Does MTT database use different account?
<br>
<p>Thanks!
<br>
<p>Wen Hao Wang
<br>
Email: wangwhao_at_[hidden]
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0532/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0533.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT users] Fail to run MTT, maybe authorization failure"</a>
<li><strong>Reply:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT users] Fail to run MTT, maybe authorization failure"</a>
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
