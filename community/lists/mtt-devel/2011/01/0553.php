<?
$subject_val = "Re: [MTT devel] mtt eval problem on new perl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 26 05:42:54 2011" -->
<!-- isoreceived="20110126104254" -->
<!-- sent="Wed, 26 Jan 2011 12:42:49 +0200" -->
<!-- isosent="20110126104249" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt eval problem on new perl" -->
<!-- id="AANLkTikTFgjZDKnExbzLFJ2E=E+XxZPZEJJwe_TyqAS+_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110124175433.GA4176_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt eval problem on new perl<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-26 05:42:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/02/0554.php">Mike Dubman: "[MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Ethan Mallove: "Re: [MTT devel] mtt eval problem on new perl"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Ethan Mallove: "Re: [MTT devel] mtt eval problem on new perl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit fixes the problem:
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/changeset/1383">https://svn.open-mpi.org/trac/mtt/changeset/1383</a>
<br>
<p><p><p><p>On Mon, Jan 24, 2011 at 7:54 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jan/21/2011 10:51:41AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hi guys,
</span><br>
<span class="quotelev2">&gt; &gt;    Mtt`s funclets do not work on new perl version which is shipped with
</span><br>
<span class="quotelev2">&gt; &gt;    RHEL6, SLES11.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    The simple reproduce is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    np=&amp;step(....)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    It seems new perl does not like eval way used in mtt.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you file an MTT trac ticket including the Perl version and the
</span><br>
<span class="quotelev1">&gt; exact error message?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    10x
</span><br>
<span class="quotelev2">&gt; &gt;    M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/02/0554.php">Mike Dubman: "[MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Ethan Mallove: "Re: [MTT devel] mtt eval problem on new perl"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Ethan Mallove: "Re: [MTT devel] mtt eval problem on new perl"</a>
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
