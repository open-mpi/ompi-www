<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 16 17:57:55 2009" -->
<!-- isoreceived="20090816215755" -->
<!-- sent="Sun, 16 Aug 2009 14:58:25 -0700" -->
<!-- isosent="20090816215825" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="4A888101.6040007_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0908160641v39b80527k5c9564c976c6c3a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-16 17:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6636.php">Graham, Richard L.: "[OMPI devel] Library dependencies"</a>
<li><strong>Previous message:</strong> <a href="6634.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6634.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
This is an important discussion.&nbsp; Do note:<br>
<br>
1) Bind-to-core is actually the default behavior of many MPIs today.<br>
<br>
2) The proposed OMPI bind-to-socket default is less severe.&nbsp; In the
general case, it would allow multiple jobs to bind in the same way
without oversubscribing any core or socket.&nbsp; (This comment added to the
trac ticket.)<br>
<br>
3) Defaults (if I understand correctly) can be set differently on each
cluster.<br>
<br>
Ralph Castain wrote:
<blockquote
 cite="mid71d2d8cc0908160641v39b80527k5c9564c976c6c3a4@mail.gmail.com"
 type="cite">There would be a "-do-not-bind" option that will prevent
us from binding processes to anything which should cover that situation.<br>
  <br>
My point was only that we would be changing the out-of-the-box behavior
to the opposite of today's, so all those such as yourself would now
have to add the -do-not-bind MCA param to your default MCA param file.<br>
  <br>
Doable - but it -is- a significant change in our out-of-the-box
behavior.<br>
  <br>
  <div class="gmail_quote">On Sun, Aug 16, 2009 at 2:14 AM, Chris
Samuel <span dir="ltr">&lt;<a href="mailto:csamuel@vpac.org">csamuel@vpac.org</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;"><br>
----- "Terry Dontje" <a class="moz-txt-link-rfc2396E" href="mailto:Terry.Dontje@Sun.COM">&lt;Terry.Dontje@Sun.COM&gt;</a> wrote:<br>
    <br>
&gt; I just wanted to give everyone a heads up if they do not get bugs<br>
&gt; email. &nbsp;I just submitted a CMR to move over some new paffinity
options<br>
&gt; from the trunk to the v1.3 branch.&nbsp;
<a class="moz-txt-link-freetext" href="https://svn.open-mpi.org/trac/ompi/ticket/1997">https://svn.open-mpi.org/trac/ompi/ticket/1997</a><br>
    <br>
Ralphs comments imply that for those sites that share nodes<br>
between jobs (such as ourselves, and most other sites that<br>
I'm aware of in Australia) these changes will severely impact<br>
performance.<br>
    <br>
I think that would be a Very Bad Thing(tm).<br>
    <br>
Can it be something that defaults to being configured out<br>
for at least 1.3 please ? &nbsp;That way those few sites that<br>
can take advantage can enable it whilst the rest of us<br>
aren't impacted.</blockquote>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6636.php">Graham, Richard L.: "[OMPI devel] Library dependencies"</a>
<li><strong>Previous message:</strong> <a href="6634.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6634.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
