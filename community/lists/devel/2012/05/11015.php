<?
$subject_val = "Re: [OMPI devel] Building Open MPI without Java";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 16:31:27 2012" -->
<!-- isoreceived="20120523203127" -->
<!-- sent="Wed, 23 May 2012 16:31:23 -0400" -->
<!-- isosent="20120523203123" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Open MPI without Java" -->
<!-- id="CAANzjE=90AuNvedAhm=3FM5k8e8ZT+SdD9nLpGZE2sa-HN54fQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEnU8ZLMkmFKtS74nFs_pcbD6xspf8JFT1DOyW1ocbj9Ww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Building Open MPI without Java<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 16:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11016.php">Gunter, David O: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Previous message:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>In reply to:</strong> <a href="11007.php">Josh Hursey: "Re: [OMPI devel] Building Open MPI without Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11017.php">Ralph Castain: "Re: [OMPI devel] Building Open MPI without Java"</a>
<li><strong>Reply:</strong> <a href="11017.php">Ralph Castain: "Re: [OMPI devel] Building Open MPI without Java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up on this thread for the list. I can no longer reproduce
<br>
this configure error. It existed, really it did... :/
<br>
<p>After a maintenance cycle on the machine and updating to the current
<br>
trunk all was fine. The configure logic in the trunk did the right
<br>
thing. When it did not find a java compiler/libs in the search paths
<br>
it skipped over it and moved on. I'm still not sure what changed, I
<br>
credit the maintenance cycle.
<br>
<p>-- Josh
<br>
<p>On Wed, May 23, 2012 at 9:08 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thanks. I figured it was just overlooked since most systems have a
</span><br>
<span class="quotelev1">&gt; java compiler installed in normal locations these days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 23, 2012 at 8:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll fix that - yes, you should be able to build if no Java compiler is found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2012, at 6:51 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to build Open MPI without a Java compiler?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meaning, I have no Java compiler on a particular machine, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--disable-mpi-java' disables only the Java bindings and not the Java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler check. If the Java compiler check fails to find a compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then configure currently fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11016.php">Gunter, David O: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Previous message:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>In reply to:</strong> <a href="11007.php">Josh Hursey: "Re: [OMPI devel] Building Open MPI without Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11017.php">Ralph Castain: "Re: [OMPI devel] Building Open MPI without Java"</a>
<li><strong>Reply:</strong> <a href="11017.php">Ralph Castain: "Re: [OMPI devel] Building Open MPI without Java"</a>
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
