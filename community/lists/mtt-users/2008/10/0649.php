<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 14:56:11 2008" -->
<!-- isoreceived="20081031185611" -->
<!-- sent="Fri, 31 Oct 2008 18:55:33 +0000" -->
<!-- isosent="20081031185533" -->
<!-- name="Brian Elliott Finley" -->
<!-- email="finley_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)" -->
<!-- id="1494444340-1225479367-cardhu_decombobulator_blackberry.rim.net-629868126-_at_bxe206.bisx.prod.on.blackberry" -->
<!-- inreplyto="20081031181459.GI12131_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)<br>
<strong>From:</strong> Brian Elliott Finley (<em>finley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 14:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/11/0650.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0647.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0648.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I bet we can fix those occurances safely. 
<br>
<p>-Brian
<br>
<p>&nbsp;
<br>
<pre>
--
Brian Elliott Finley
CIS / Argonne National Laboratory
Office: 630.252.4742
Mobile: 630.631.6621
-----Original Message-----
From: Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
Date: Fri, 31 Oct 2008 13:14:59 
To: General user list for the MPI Testing Tool&lt;mtt-users_at_[hidden]&gt;
Cc: Brian Elliott Finley&lt;finley_at_[hidden]&gt;; &lt;jsquyres_at_[hidden]&gt;
Subject: Re: [MTT users] Patch for whatami (new sles10 lsb-release file
	format)
I'm still getting the error. Solaris sh seems to genuinely
have a problem with foo=$(bar) syntax:
  $ cat ./dollar-paren.sh
  #!/bin/sh
  foo=$(date)
  $ ./dollar-paren.sh
  dollar-paren.sh: syntax error at line 2: `foo=$' unexpected
Backticks seem to work though. E.g.,
  foo=`date`
-Ethan
On Fri, Oct/31/2008 02:01:55PM, Jeff Squyres wrote:
&gt; Sorry; my stupid mailer didn't display it as an attachment when I
&gt; forwarded.  Try this.
&gt;
&gt; On Oct 31, 2008, at 1:56 PM, Ethan Mallove wrote:
&gt;
&gt;&gt; On Fri, Oct/31/2008 01:01:02PM, Jeff Squyres wrote:
&gt;&gt; &gt; Re-sending to the MTT list, because I think our listserver will
&gt;&gt; &gt; automatically block Brian (I'll add him to the whitelist for future
&gt;&gt; &gt; posts!).
&gt;&gt;
&gt;&gt; I'm getting a syntax error:
&gt;&gt;
&gt;&gt;   $ whatami
&gt;&gt;   whatami: syntax error at line 149:  `DISTRIB_ID=$' unexpected
&gt;&gt;
&gt;&gt; Not sure if I'm doing a bad copy/paste out of my mail
&gt;&gt; client. Jeff, can you send the new whatami script as an
&gt;&gt; attachment?
&gt;&gt;
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; Cisco Systems
&gt; _______________________________________________
&gt; mtt-users mailing list
&gt; mtt-users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/11/0650.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
<li><strong>In reply to:</strong> <a href="0647.php">Ethan Mallove: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file	format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0648.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release fileformat)"</a>
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
