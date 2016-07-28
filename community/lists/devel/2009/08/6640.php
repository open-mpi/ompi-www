<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 16 22:16:00 2009" -->
<!-- isoreceived="20090817021600" -->
<!-- sent="Sun, 16 Aug 2009 19:16:31 -0700" -->
<!-- isosent="20090817021631" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="4A88BD7F.4090706_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3844979.1418711250471183148.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-08-16 22:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6639.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6639.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
Chris Samuel wrote:
<blockquote
 cite="mid3844979.1418711250471183148.JavaMail.root@mail.vpac.org"
 type="cite">
  <pre wrap="">----- "Eugene Loh" <a class="moz-txt-link-rfc2396E" href="mailto:Eugene.Loh@Sun.COM">&lt;Eugene.Loh@Sun.COM&gt;</a> wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">This is an important discussion.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Indeed! My big fear is that people won't pick up the significance
of the change and will complain about performance regressions
in the middle of an OMPI stable release cycle.</pre>
  <blockquote type="cite">
    <pre wrap="">2) The proposed OMPI bind-to-socket default is less severe. In the
general case, it would allow multiple jobs to bind in the same way
without oversubscribing any core or socket. (This comment added to
the trac ticket.)
    </pre>
  </blockquote>
  <pre wrap="">That's a nice clarification, thanks. I suspect though that the
same issue we have with MVAPICH would occur if two 4 core jobs
both bound themselves to the first socket.
  </pre>
</blockquote>
Okay, so let me point out a second distinction from MVAPICH:&nbsp; the
default policy would be to spread out over sockets.<br>
<br>
Let's say you have two sockets, with four cores each.&nbsp; Let's say you
submit two four-core jobs.&nbsp; The first job would put two processes on
the first socket and two processes on the second.&nbsp; The second job would
do the same.&nbsp; The loading would be even.<br>
<br>
I'm not saying there couldn't be problems.&nbsp; It's just that MVAPICH2 (at
least what I looked at) has multiple shortfalls.&nbsp; The binding is to
fill up one socket after another (which decreases memory bandwidth per
process and increases chances of collisions with other jobs) and
binding is to core (increasing chances of oversubscribing cores).&nbsp; The
proposed OMPI behavior distributes over sockets (improving memory
bandwidth per process and reducing collisions with other jobs) and
binding is to sockets (reducing changes of oversubscribing cores,
whether due to other MPI jobs or due to multithreaded processes).&nbsp; So,
the proposed OMPI behavior mitigates the problems.<br>
<br>
It would be even better to have binding selections adapt to other
bindings on the system.<br>
<br>
In any case, regardless of what the best behavior is, I appreciate the
point about changing behavior in the middle of a stable release.&nbsp;
Arguably, leaving significant performance on the table in typical
situations is a bug that warrants fixing even in the middle of a
release, but I won't try to settle that debate here.<br>
<blockquote
 cite="mid3844979.1418711250471183148.JavaMail.root@mail.vpac.org"
 type="cite">
  <blockquote type="cite">
    <pre wrap="">3) Defaults (if I understand correctly) can be set differently
on each cluster.
    </pre>
  </blockquote>
  <pre wrap="">Yes, but the defaults should be sensible for the majority of
clusters.  If the majority do indeed share nodes between jobs
then I would suggest that the default should be off and the
minority who don't share nodes should have to enable it.
  </pre>
</blockquote>
In debates on this subject, I've heard people argue that:<br>
<br>
*) Though nodes are getting fatter, most are still thin.<br>
<br>
*) Resource managers tend to space share the cluster.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6639.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6639.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
