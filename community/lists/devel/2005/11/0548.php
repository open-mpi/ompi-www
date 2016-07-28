<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 15:18:01 2005" -->
<!-- isoreceived="20051123201801" -->
<!-- sent="Wed, 23 Nov 2005 15:12:27 -0500" -->
<!-- isosent="20051123201227" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="DCF63A9E-A7DF-45AC-998C-FB762E2F7448_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA039056-82E5-45A5-A63A-A0B076DF5AFE_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 15:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">Andrew Friedley: "MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem seems to be fixed now.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 23, 2005, at 2:39 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Fixed in SVN.  Sorry about that...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2005, at 2:15 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I continue to have the same problem with the missing ltdl.h
</span><br>
<span class="quotelev2">&gt;&gt; header I
</span><br>
<span class="quotelev2">&gt;&gt; reported few days ago, I spend some time today to dig a little bit
</span><br>
<span class="quotelev2">&gt;&gt; inside
</span><br>
<span class="quotelev2">&gt;&gt; to find out what and how happens. Finally, I figure out the
</span><br>
<span class="quotelev2">&gt;&gt; problem. It
</span><br>
<span class="quotelev2">&gt;&gt; happens only after the last set of changes on the Makefile.am and
</span><br>
<span class="quotelev2">&gt;&gt; only on
</span><br>
<span class="quotelev2">&gt;&gt; systems where there is not a ltdl.h installed on a default location.
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise ... on systems where the ltdl.h is installed ... the  
</span><br>
<span class="quotelev2">&gt;&gt; ugliest
</span><br>
<span class="quotelev2">&gt;&gt; things may happens. We can use our ltdl.h in some directories (like
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; opal base) and the system one in others (because a missing -I). How ?
</span><br>
<span class="quotelev2">&gt;&gt; Simply because most of the base components require the
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/mca_base_component_repository.h include. In this file at
</span><br>
<span class="quotelev2">&gt;&gt; line 27
</span><br>
<span class="quotelev2">&gt;&gt; there is a include &quot;ltdl.h&quot; supposely protected by the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_WANT_LIBLTDL.
</span><br>
<span class="quotelev2">&gt;&gt; This define is always true as it come from the ompi_config.h so the
</span><br>
<span class="quotelev2">&gt;&gt; ltdl.h
</span><br>
<span class="quotelev2">&gt;&gt; is always required. Now on system where this file does not exist on
</span><br>
<span class="quotelev2">&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt; system include directories we are supposed to get the one we have ...
</span><br>
<span class="quotelev2">&gt;&gt; except that the -I for our include is not added in all the base
</span><br>
<span class="quotelev2">&gt;&gt; directories after the last set of changes to the Makefile.am.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now your turn to have fun ... and to bring back a consistent
</span><br>
<span class="quotelev2">&gt;&gt; behaviour :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We must accept finite disappointment, but we must never lose  
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                    Martin Luther King
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">Andrew Friedley: "MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
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
