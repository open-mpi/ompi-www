<?
$subject_val = "Re: [MTT devel] MTT email timeout notification feature";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 07:37:23 2009" -->
<!-- isoreceived="20090622113723" -->
<!-- sent="Mon, 22 Jun 2009 07:37:16 -0400" -->
<!-- isosent="20090622113716" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT email timeout notification feature" -->
<!-- id="4C572D0C-04CC-447E-8CF9-A337D016088C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090619184758.GD30874_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 07:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Previous message:</strong> <a href="0413.php">Ethan Mallove: "[MTT devel] MTT email timeout notification feature"</a>
<li><strong>In reply to:</strong> <a href="0413.php">Ethan Mallove: "[MTT devel] MTT email timeout notification feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Reply:</strong> <a href="0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I think this would be fine for the trunk.  Some random notes:
<br>
<p>1. It might be nice to move this logic out of the docommand sub itself  
<br>
and into its own sub.
<br>
2. it would also be good to generalize the ps and gdb commands for  
<br>
systems where those variants are not relevant
<br>
3. it might even be good to generally develop the backtrace  
<br>
functionality overall -- backtraces would be really good to capture in  
<br>
the database...
<br>
4. how about having a[n optional] timeout with the sentinel file?   
<br>
that is, it'll send a mail, then wait another timeout (e.g., 1 hour)  
<br>
and if the sentinel file still exists, mtt will remove the file and  
<br>
keep going
<br>
<p><p>On Jun 19, 2009, at 2:47 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I came up with a feature, which does not seem quite appropriate to go
</span><br>
<span class="quotelev1">&gt; into the MTT trunk, but is still possibly useful for someone other
</span><br>
<span class="quotelev1">&gt; than me. I have posted a note about it on the MTT wiki:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://svn.open-mpi.org/trac/mtt/wiki/EmailTimeoutNotification">http://svn.open-mpi.org/trac/mtt/wiki/EmailTimeoutNotification</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the text of the Wiki page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We (Sun) were trying to track down a hang in an MPI test that we were
</span><br>
<span class="quotelev1">&gt; seeing in our MTT runs which was difficult to reproduce manually. The
</span><br>
<span class="quotelev1">&gt; problem is that MTT kills the hanging process before a developer has a
</span><br>
<span class="quotelev1">&gt; chance to investigate the issue. To address this, I patched an MTT
</span><br>
<span class="quotelev1">&gt; client (see attached patch file) to send out a notification email
</span><br>
<span class="quotelev1">&gt; containing an mpirun command line and GDB back trace for the hanging
</span><br>
<span class="quotelev1">&gt; test. A predefined sentinel file is touched, which can later be
</span><br>
<span class="quotelev1">&gt; removed to force MTT to move on and continue testing. Here are the INI
</span><br>
<span class="quotelev1">&gt; parameters to activate the timeout email notification:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * {{{docommand_timeout_sentinel_file}}}
</span><br>
<span class="quotelev1">&gt;  * {{{docommand_timeout_email_recipient}}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example usage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; $ client/mtt --scratch /foo/bar --file foo.ini
</span><br>
<span class="quotelev1">&gt;   docommand_timeout_sentinel_file=/tmp/mtt-timeout-sentinel-file- 
</span><br>
<span class="quotelev1">&gt; \&amp;random_string\(10\)
</span><br>
<span class="quotelev1">&gt;   docommand_timeout_email_recipient=fred.flintsone_at_[hidden],barney.rubble_at_[hidden]
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Previous message:</strong> <a href="0413.php">Ethan Mallove: "[MTT devel] MTT email timeout notification feature"</a>
<li><strong>In reply to:</strong> <a href="0413.php">Ethan Mallove: "[MTT devel] MTT email timeout notification feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Reply:</strong> <a href="0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
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
