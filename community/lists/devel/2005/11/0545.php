<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 02:38:17 2005" -->
<!-- isoreceived="20051123073817" -->
<!-- sent="Wed, 23 Nov 2005 08:38:05 +0100" -->
<!-- isosent="20051123073805" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="20051123073805.GA14221_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 02:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Jeff Squyres: "1.0.1rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>* George Bosilca wrote on Wed, Nov 23, 2005 at 08:15:30AM CET:
<br>
<span class="quotelev1">&gt; As I continue to have the same problem with the missing ltdl.h header I 
</span><br>
<span class="quotelev1">&gt; reported few days ago, I spend some time today to dig a little bit inside 
</span><br>
<span class="quotelev1">&gt; to find out what and how happens. Finally, I figure out the problem. It 
</span><br>
<span class="quotelev1">&gt; happens only after the last set of changes on the Makefile.am and only on 
</span><br>
<span class="quotelev1">&gt; systems where there is not a ltdl.h installed on a default location. 
</span><br>
<span class="quotelev1">&gt; Otherwise ... on systems where the ltdl.h is installed ... the ugliest 
</span><br>
<span class="quotelev1">&gt; things may happens. We can use our ltdl.h in some directories (like the 
</span><br>
<span class="quotelev1">&gt; opal base) and the system one in others (because a missing -I). How ? 
</span><br>
<span class="quotelev1">&gt; Simply because most of the base components require the 
</span><br>
<span class="quotelev1">&gt; opal/mca/mca_base_component_repository.h include. In this file at line 27 
</span><br>
<span class="quotelev1">&gt; there is a include &quot;ltdl.h&quot; supposely protected by the OMPI_WANT_LIBLTDL. 
</span><br>
<span class="quotelev1">&gt; This define is always true as it come from the ompi_config.h so the ltdl.h 
</span><br>
<span class="quotelev1">&gt; is always required. Now on system where this file does not exist on some 
</span><br>
<span class="quotelev1">&gt; system include directories we are supposed to get the one we have ... 
</span><br>
<span class="quotelev1">&gt; except that the -I for our include is not added in all the base 
</span><br>
<span class="quotelev1">&gt; directories after the last set of changes to the Makefile.am.
</span><br>
<p>Hmm.  Wasn't the decision a while ago to
<br>
&nbsp;&nbsp;#include &lt;libltdl/ltdl.h&gt;
<br>
consistently, plus, in order to allow the next version of libltdl to
<br>
work seamlessly as well, to also -I.../libltdl (although the Libtool
<br>
documentation suggests otherwise)?
<br>
<p>I haven't followed changes regarding this closely, but above would be
<br>
safe for OpenMPI in both cases: both failure to include the in-tree
<br>
ltdl.h as well as failure with Libtool-2.0 will result in compilation
<br>
errors, and are thus easy to find and fix.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Jeff Squyres: "1.0.1rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0544.php">George Bosilca: "ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
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
