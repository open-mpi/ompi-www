<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 12:19:19 2008" -->
<!-- isoreceived="20080320161919" -->
<!-- sent="Thu, 20 Mar 2008 12:19:11 -0400" -->
<!-- isosent="20080320161911" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1164" -->
<!-- id="20080320161911.GM51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200803201403.m2KE3oNt026467_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1164<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 12:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<li><strong>Previous message:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<li><strong>Reply:</strong> <a href="0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I sense this &quot;do_not_run&quot; stuff could be useful to me, but
<br>
I'm not sure. Can you give a simple use case for
<br>
&quot;do_not_run&quot;? Could &quot;do_not_run&quot; be achieved by just
<br>
commenting out the INI lines that pertain to a certain
<br>
group? E.g., do these &quot;#&quot; comments ...
<br>
<p>&nbsp;&nbsp;# simple_really_slow:tests = src/MPI_Isend_flood_c src/MPI_Send_flood_c
<br>
&nbsp;&nbsp;# simple_really_slow:pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
<br>
&nbsp;&nbsp;# simple_really_slow:exclusive = 1
<br>
&nbsp;&nbsp;# simple_really_slow:timeout = &amp;sum(90, &amp;multiply(3, &amp;test_np()))
<br>
<p>... have the same effect as this?
<br>
<p>&nbsp;&nbsp;simple_really_slow:do_not_run = 1
<br>
<p>-Ethan
<br>
<p><p>On Thu, Mar/20/2008 10:03:50AM, jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2008-03-20 10:03:50 EDT (Thu, 20 Mar 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 1164
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1164">https://svn.open-mpi.org/trac/mtt/changeset/1164</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Added parameter to Simple specify module: do_not_run.  If set to 1 for
</span><br>
<span class="quotelev1">&gt; a specific subsection (and the subsection is exclusive), then those
</span><br>
<span class="quotelev1">&gt; tests will not be run.  Handy for explicitly specifying tests that
</span><br>
<span class="quotelev1">&gt; exist by should ''not'' be run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/CHANGES                        |    12 +++++++++---                            
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/Test/Specify/Simple.pm |    14 ++++++++++++++                          
</span><br>
<span class="quotelev1">&gt;    2 files changed, 23 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/CHANGES
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/CHANGES	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/CHANGES	2008-03-20 10:03:50 EDT (Thu, 20 Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -168,7 +168,13 @@
</span><br>
<span class="quotelev1">&gt;    - before_make_install
</span><br>
<span class="quotelev1">&gt;    - after_make_install
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- include_file(s) INI parameter - just like pre-processor &quot;#include&quot; directives
</span><br>
<span class="quotelev1">&gt; +- include_file(s) INI parameter - just like pre-processor &quot;#include&quot;
</span><br>
<span class="quotelev1">&gt; +  directives
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- trivial_tests_languages - comma separated list of languages to use for trivial 
</span><br>
<span class="quotelev1">&gt; -  tests (default: &quot;c,c++,f77,f90&quot;).
</span><br>
<span class="quotelev1">&gt; +- trivial_tests_languages - comma separated list of languages to use
</span><br>
<span class="quotelev1">&gt; +  for trivial tests (default: &quot;c,c++,f77,f90&quot;).
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +- added parameter to Simple specify module: do_not_run.  If set to 1
</span><br>
<span class="quotelev1">&gt; +  for a specific subsection (and the subsection is exclusive), then
</span><br>
<span class="quotelev1">&gt; +  those tests will not be run.  Handy for explicitly specifying tests
</span><br>
<span class="quotelev1">&gt; +  that exist but should *not* be run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Test/Specify/Simple.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Test/Specify/Simple.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Test/Specify/Simple.pm	2008-03-20 10:03:50 EDT (Thu, 20 Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -62,6 +62,7 @@
</span><br>
<span class="quotelev1">&gt;      # Now go through and see if any of the tests are marked as
</span><br>
<span class="quotelev1">&gt;      # &quot;exclusive&quot;. If they are, remove those tests from all other
</span><br>
<span class="quotelev1">&gt;      # groups.
</span><br>
<span class="quotelev1">&gt; +    my @groups_to_delete;
</span><br>
<span class="quotelev1">&gt;      foreach my $group (keys %$params) {
</span><br>
<span class="quotelev1">&gt;          # If this group is marked as exclusive, remove each of its
</span><br>
<span class="quotelev1">&gt;          # tests from all other groups
</span><br>
<span class="quotelev1">&gt; @@ -85,6 +86,19 @@
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # After we've performed the exclusivity filter, if the tests
</span><br>
<span class="quotelev1">&gt; +        # are marked as &quot;do_not_run&quot;, then delete this group (it's a
</span><br>
<span class="quotelev1">&gt; +        # way of specifying tests to *not* run).  Don't delete them
</span><br>
<span class="quotelev1">&gt; +        # now, it may (will?) screw up the outter loop's &quot;foreach&quot;.
</span><br>
<span class="quotelev1">&gt; +        if ($params-&gt;{$group}-&gt;{do_not_run}) {
</span><br>
<span class="quotelev1">&gt; +            push(@groups_to_delete, $group);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # Delete all the groups that were marked
</span><br>
<span class="quotelev1">&gt; +    foreach my $t (@groups_to_delete) {
</span><br>
<span class="quotelev1">&gt; +        delete $params-&gt;{$t};
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Now go through those groups and make the final list of tests to pass
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<li><strong>Previous message:</strong> <a href="0249.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
<li><strong>Reply:</strong> <a href="0251.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1164"</a>
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
