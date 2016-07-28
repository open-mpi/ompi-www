<?
$subject_val = "Re: [OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 12:57:20 2014" -->
<!-- isoreceived="20141030165720" -->
<!-- sent="Thu, 30 Oct 2014 16:51:01 +0000" -->
<!-- isosent="20141030165101" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518C5D691_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj63SRSGuLdZExPrf2FFYQeR6Y5XZDdVqr8jZROux+BYLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] enable-smp-locks affects PSM performance<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 12:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16134.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>

<br>
No, we do not, just the OMPI default.
<br>

<br>
This post isn&#226;&#128;&#153;t so much about our packaging requirements, as about default behavior in upstream Open MPI.  We&#226;&#128;&#153;d like performance to be good by default for anyone compiling their own Open MPI (and using PSM).
<br>

<br>
Andrew
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Thursday, October 30, 2014 8:53 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] enable-smp-locks affects PSM performance
<br>

<br>
Hi Andrew,
<br>

<br>
In your distribution of ompi, do you include versions of ompi to support different MPI thread safetylevels?  In particular, do you include a library which supports MPI_THREAD_MULTIPLE?
<br>
Just trying to better understand the requirements of you ompi package in terms of MPI thread safety.
<br>

<br>
Thanks,
<br>

<br>
Howard
<br>

<br>

<br>
2014-10-30 8:10 GMT-06:00 Friedley, Andrew &lt;andrew.friedley_at_[hidden]&lt;mailto:andrew.friedley_at_[hidden]&gt;&gt;:
<br>
Hi,
<br>

<br>
I'm reporting a performance (message rate 16%, latency 3%) regression when using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would guess it affects other networks too, but I haven't tested.  The problem stems from the --enable-smp-locks and --enable-opal-multi-threads options.
<br>

<br>
--enable-smp-locks defaults to enabled and, on x86, causes a 'lock' prefix to be prepended to ASM instructions used by atomic primitives.  Disabling removes the 'lock' prefix.
<br>

<br>
In OMPI 1.6.5, --enable-opal-multi-threads defaulted to disabled.  When enabled, OPAL would be compiled with multithreading support, which included compiling in calls to atomic primitives.  Those atomic primitives, in turn, potentially use a lock prefix (controlled by --enable-smp-locks).
<br>

<br>
SVN r29891 on the trunk changed the above.  --enable-opal-multi-threads was removed.  CPP macros (#if OPAL_ENABLE_MULTI_THREADS) controlling various calls to atomic primitives were removed, effectively changing the default behavior to multithreading ON for OPAL.  This change was then carried to the v1.7 branch in r29944, Fixes #3983.
<br>

<br>
We can use --disable-smp-locks to make the performance regression go away for the builds we ship, but we'd very much prefer if performance was good 'out of the box' for people that grab an OMPI tarball and use it with PSM.
<br>

<br>
My question is, what's the best way to do that?  It seems obvious to just make --disable-smp-locks the default, but I presume the change was done on purpose, so I'm looking for community feedback.
<br>

<br>
Thanks,
<br>

<br>
Andrew
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16130.php">http://www.open-mpi.org/community/lists/devel/2014/10/16130.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16134.php">Paul Kapinos: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
