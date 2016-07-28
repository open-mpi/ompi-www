<?
$subject_val = "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 10:07:18 2010" -->
<!-- isoreceived="20100211150718" -->
<!-- sent="Thu, 11 Feb 2010 07:08:55 -0800" -->
<!-- isosent="20100211150855" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="4B741D87.3040003_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA170566E4_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 10:08:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7409.php">Lisandro Dalcin: "[OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Previous message:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Jeff Squyres (jsquyres) wrote:
<blockquote
 cite="mid58D723FE08DC6A4398E6596E38F3FA170566E4@XMB-RCD-205.cisco.com"
 type="cite">
  <meta name="Generator"
 content="MS Exchange Server version 6.5.7654.12">
  <title>Re: [OMPI devel] failure with
zero-lengthReduce()andbothsbuf=rbuf=NULL</title>
  <div><font color="navy" face="Arial" size="2">
I misparsed your reply. Yes, bcast(1) *can* sync if it wants to. I
don't have a spec handy to check if bcast(0) is defined or not (similar
to reduce). If it is, then sure, it could sync as well. <br>
  <br>
My previous point was that barrier is the only collective that is
*required* to synchronize.&nbsp;</font></div>
  <br>
  <div>
  <hr tabindex="-1" align="center" size="2" width="100%"><font
 face="Tahoma" size="2">
  <b>From</b>: <a class="moz-txt-link-abbreviated" href="mailto:devel-bounces@open-mpi.org">devel-bounces@open-mpi.org</a>
<a class="moz-txt-link-rfc2396E" href="mailto:devel-bounces@open-mpi.org">&lt;devel-bounces@open-mpi.org&gt;</a>
  <br>
  <b>To</b>: <a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a> <a class="moz-txt-link-rfc2396E" href="mailto:devel@open-mpi.org">&lt;devel@open-mpi.org&gt;</a>
  <br>
  <b>Sent</b>: Thu Feb 11 07:04:59 2010<br>
  <b>Subject</b>: Re: [OMPI devel] failure
withzero-lengthReduce()andbothsbuf=rbuf=NULL
  <br>
  </font><br>
  </div>
<!-- Converted from text/plain format -->
  <p><font size="2">Where does bcast(1) synchronize?<br>
  <br>
(Oops on typo - if reduce(1) wasn't defined, that definitely would be
bad :) )<br>
  </font></p>
</blockquote>
To clarify my comments on this thread...<br>
<br>
There are causal synchronizations in all collectives.&nbsp; E.g., a non-root
process cannot exit a broadcast before the root process has entered.&nbsp;
The root process cannot exit a reduce before the last non-root process
has entered.&nbsp; Stuff like that.&nbsp; Those were the only syncs I was talking
about and the only sync that the HPCC pingpong test relied on.&nbsp; I
wasn't talking about full barrier sync.<br>
<br>
Anyhow, a causal sync for a null collective is different.&nbsp; There is no
data forcing synchronization.&nbsp; Unlike point-to-point messages, there
isn't even header meta data.&nbsp; So what behavior is required in the case
of null collectives?<br>
<br>
Incidentally, in what respect is reduce(0) not defined?&nbsp; It would seem
to me that it would be an array of 0 length, so we don't need to worry
about its datatype or contents.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7409.php">Lisandro Dalcin: "[OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Previous message:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
