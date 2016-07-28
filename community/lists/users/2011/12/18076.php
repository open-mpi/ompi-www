<?
$subject_val = "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 17:27:28 2011" -->
<!-- isoreceived="20111229222728" -->
<!-- sent="Fri, 30 Dec 2011 01:27:23 +0300" -->
<!-- isosent="20111229222723" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL" -->
<!-- id="CAGR4S9E_it7APe7TC6pSCrGW4MSXYckpeM7ZZ+wHWb5wux9ovw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6F1D68A3-24C9-4DC8-899D-162395BE20E2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 17:27:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18075.php">Lloyd Brown: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>In reply to:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Reply:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
<br>
Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
<br>
Revision: 24785
<br>
Node Kind: directory
<br>
Schedule: normal
<br>
Last Changed Author: rhc
<br>
Last Changed Rev: 24785
<br>
Last Changed Date: 2011-06-17 22:01:23 +0400 (Fri, 17 Jun 2011)
<br>
<p>1. Checking tool versions
<br>
<p>&nbsp;&nbsp;&nbsp;Searching for autoconf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found autoconf version 2.67; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 67 -- need 65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for libtoolize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found libtoolize version 2.2.6b; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 6b -- need 6b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for automake
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found automake version 1.11.1; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 1 -- need 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 11 -- need 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 1 -- need 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
<p>2011/12/30 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Are you doing this on a subversion checkout? Of which branch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you check your autotoll versions to ensure you meet the minimum required levels? The requirements differ by version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 29, 2011, at 2:52 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI Community,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need a custom OpenMPI build. While running ./autogen.pl on Debian
</span><br>
<span class="quotelev2">&gt;&gt; Squeeze, there is an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- Found autogen.sh; running...
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf2.50: Entering directory `.'
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf2.50: configure.in: not using Gettext
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf2.50: running: aclocal --force -I m4
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf2.50: configure.in: tracing
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf2.50: configure.in: not using Libtool
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf2.50: running: /usr/bin/autoconf --force
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:113: error: possibly undefined macro: AC_PROG_LIBTOOL
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf2.50: /usr/bin/autoconf failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt; Command failed: ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's a bit confusing, because automake, libtool, autoconf are
</span><br>
<span class="quotelev2">&gt;&gt; installed. What might be the other reasons of this error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - Dima.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18075.php">Lloyd Brown: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>In reply to:</strong> <a href="18074.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Reply:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
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
