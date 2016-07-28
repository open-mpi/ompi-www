<?
$subject_val = "Re: [MTT devel] MTT email timeout notification feature";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 11:23:41 2009" -->
<!-- isoreceived="20090625152341" -->
<!-- sent="Thu, 25 Jun 2009 11:23:35 -0400" -->
<!-- isosent="20090625152335" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT email timeout notification feature" -->
<!-- id="20090625152335.GD30877_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C572D0C-04CC-447E-8CF9-A337D016088C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT email timeout notification feature<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 11:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/07/0416.php">Jeff Squyres: "[MTT devel] use of &amp;perl()"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>In reply to:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In r1300, I incorporated your notes, except for #2 and #3. I dug
<br>
around for a CPAN module for stack traces, but couldn't find anything.
<br>
Maybe MTT could contain a stripped down version of GDB for the sole
<br>
purpose of gathering stack traces? Or is there some other open source
<br>
&quot;stack trace grabber&quot; tool out there?
<br>
<p>-Ethan
<br>
<p>On Mon, Jun/22/2009 07:37:16AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Actually, I think this would be fine for the trunk.  Some random notes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. It might be nice to move this logic out of the docommand sub itself and 
</span><br>
<span class="quotelev1">&gt; into its own sub.
</span><br>
<span class="quotelev1">&gt; 2. it would also be good to generalize the ps and gdb commands for systems 
</span><br>
<span class="quotelev1">&gt; where those variants are not relevant
</span><br>
<span class="quotelev1">&gt; 3. it might even be good to generally develop the backtrace functionality 
</span><br>
<span class="quotelev1">&gt; overall -- backtraces would be really good to capture in the database...
</span><br>
<span class="quotelev1">&gt; 4. how about having a[n optional] timeout with the sentinel file?  that is, 
</span><br>
<span class="quotelev1">&gt; it'll send a mail, then wait another timeout (e.g., 1 hour) and if the 
</span><br>
<span class="quotelev1">&gt; sentinel file still exists, mtt will remove the file and keep going
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2009, at 2:47 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I came up with a feature, which does not seem quite appropriate to go
</span><br>
<span class="quotelev2">&gt;&gt; into the MTT trunk, but is still possibly useful for someone other
</span><br>
<span class="quotelev2">&gt;&gt; than me. I have posted a note about it on the MTT wiki:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://svn.open-mpi.org/trac/mtt/wiki/EmailTimeoutNotification">http://svn.open-mpi.org/trac/mtt/wiki/EmailTimeoutNotification</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the text of the Wiki page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We (Sun) were trying to track down a hang in an MPI test that we were
</span><br>
<span class="quotelev2">&gt;&gt; seeing in our MTT runs which was difficult to reproduce manually. The
</span><br>
<span class="quotelev2">&gt;&gt; problem is that MTT kills the hanging process before a developer has a
</span><br>
<span class="quotelev2">&gt;&gt; chance to investigate the issue. To address this, I patched an MTT
</span><br>
<span class="quotelev2">&gt;&gt; client (see attached patch file) to send out a notification email
</span><br>
<span class="quotelev2">&gt;&gt; containing an mpirun command line and GDB back trace for the hanging
</span><br>
<span class="quotelev2">&gt;&gt; test. A predefined sentinel file is touched, which can later be
</span><br>
<span class="quotelev2">&gt;&gt; removed to force MTT to move on and continue testing. Here are the INI
</span><br>
<span class="quotelev2">&gt;&gt; parameters to activate the timeout email notification:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * {{{docommand_timeout_sentinel_file}}}
</span><br>
<span class="quotelev2">&gt;&gt;  * {{{docommand_timeout_email_recipient}}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example usage:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; $ client/mtt --scratch /foo/bar --file foo.ini
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; docommand_timeout_sentinel_file=/tmp/mtt-timeout-sentinel-file-\&amp;random_string\(10\)
</span><br>
<span class="quotelev2">&gt;&gt;   docommand_timeout_email_recipient=fred.flintsone_at_[hidden],barney.rubble_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/07/0416.php">Jeff Squyres: "[MTT devel] use of &amp;perl()"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>In reply to:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
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
