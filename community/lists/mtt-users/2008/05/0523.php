<?
$subject_val = "[MTT users] MTT server side problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 08:26:56 2008" -->
<!-- isoreceived="20080506122656" -->
<!-- sent="Tue, 06 May 2008 15:26:43 +0300" -->
<!-- isosent="20080506122643" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="[MTT users] MTT server side problem" -->
<!-- id="48204E83.4020700_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [MTT users] MTT server side problem<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 08:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">Jeff Squyres: "[MTT users] propose reducing MPI Install stdout_save_lines to 50"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0526.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
About the issue:
<br>
&nbsp;
<br>
1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client did not get a 
<br>
serial&quot;
<br>
As result of the error some of MTT results is not visible via the web 
<br>
reporter
<br>
&nbsp;
<br>
2. On server side I found follow error message:
<br>
[client 10.4.3.214] PHP Fatal error:  Allowed memory size of 33554432 
<br>
bytes exhausted (tried to allocate 23592960
<br>
bytes) in /.autodirect/swgwork/MTT/mtt/submit/index.php(79) : eval()'d 
<br>
code on line 77515
<br>
[Mon May 05 19:26:05 2008] [notice] caught SIGTERM, shutting down
<br>
[Mon May 05 19:30:54 2008] [notice] suEXEC mechanism enabled (wrapper: 
<br>
/usr/sbin/suexec)
<br>
[Mon May 05 19:30:54 2008] [notice] Digest: generating secret for digest 
<br>
authentication ...
<br>
[Mon May 05 19:30:54 2008] [notice] Digest: done
<br>
[Mon May 05 19:30:54 2008] [notice] LDAP: Built with OpenLDAP LDAP SDK
<br>
[Mon May 05 19:30:54 2008] [notice] LDAP: SSL support unavailable
<br>
&nbsp;
<br>
My memory limit in php.ini file was set on 256MB !
<br>
<p>Any ideas ?
<br>
<p>Thanks.
<br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">Jeff Squyres: "[MTT users] propose reducing MPI Install stdout_save_lines to 50"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Jeff Squyres: "Re: [MTT users] LD_LIBRARY_PATH setting in Run.pm masks a wrapper compiler issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0526.php">Ethan Mallove: "Re: [MTT users] MTT server side problem"</a>
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
