<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 14:39:32 2005" -->
<!-- isoreceived="20051123193932" -->
<!-- sent="Wed, 23 Nov 2005 14:39:31 -0500" -->
<!-- isosent="20051123193931" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="CA039056-82E5-45A5-A63A-A0B076DF5AFE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.WNT.4.63.0511230205360.3464_at_bosilca" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 14:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Jeff Squyres: "1.0.1rc3 now available"</a>
<li><strong>In reply to:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in SVN.  Sorry about that...
<br>
<p>On Nov 23, 2005, at 2:15 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; As I continue to have the same problem with the missing ltdl.h  
</span><br>
<span class="quotelev1">&gt; header I
</span><br>
<span class="quotelev1">&gt; reported few days ago, I spend some time today to dig a little bit  
</span><br>
<span class="quotelev1">&gt; inside
</span><br>
<span class="quotelev1">&gt; to find out what and how happens. Finally, I figure out the  
</span><br>
<span class="quotelev1">&gt; problem. It
</span><br>
<span class="quotelev1">&gt; happens only after the last set of changes on the Makefile.am and  
</span><br>
<span class="quotelev1">&gt; only on
</span><br>
<span class="quotelev1">&gt; systems where there is not a ltdl.h installed on a default location.
</span><br>
<span class="quotelev1">&gt; Otherwise ... on systems where the ltdl.h is installed ... the ugliest
</span><br>
<span class="quotelev1">&gt; things may happens. We can use our ltdl.h in some directories (like  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; opal base) and the system one in others (because a missing -I). How ?
</span><br>
<span class="quotelev1">&gt; Simply because most of the base components require the
</span><br>
<span class="quotelev1">&gt; opal/mca/mca_base_component_repository.h include. In this file at  
</span><br>
<span class="quotelev1">&gt; line 27
</span><br>
<span class="quotelev1">&gt; there is a include &quot;ltdl.h&quot; supposely protected by the  
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_LIBLTDL.
</span><br>
<span class="quotelev1">&gt; This define is always true as it come from the ompi_config.h so the  
</span><br>
<span class="quotelev1">&gt; ltdl.h
</span><br>
<span class="quotelev1">&gt; is always required. Now on system where this file does not exist on  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; system include directories we are supposed to get the one we have ...
</span><br>
<span class="quotelev1">&gt; except that the -I for our include is not added in all the base
</span><br>
<span class="quotelev1">&gt; directories after the last set of changes to the Makefile.am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now your turn to have fun ... and to bring back a consistent  
</span><br>
<span class="quotelev1">&gt; behaviour :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                    Martin Luther King
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Jeff Squyres: "1.0.1rc3 now available"</a>
<li><strong>In reply to:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
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
