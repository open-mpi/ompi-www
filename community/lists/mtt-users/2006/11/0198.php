<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 07:22:49 2006" -->
<!-- isoreceived="20061106122249" -->
<!-- sent="Mon, 6 Nov 2006 07:22:23 -0500" -->
<!-- isosent="20061106122223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="FDDEA390-66CD-415A-87A0-B0FCAD30DE5A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061103213028.GD39413_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-06 07:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Jeff Squyres: "Re: [MTT users] mtt results"</a>
<li><strong>In reply to:</strong> <a href="0195.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow; I could have sworn that @foo@ was evaluated during  
<br>
Values::EvaluateString.
<br>
<p>In light of all that, I looked more closely at your patch.  I had  
<br>
assumed that you were modifying Values.pm and didn't even notice that  
<br>
you were modifying DoCommand.pm (doh!).  So in light of that, I have  
<br>
no objections to the patch, but I still don't think it's necessary.  :-)
<br>
<p><p><p>On Nov 3, 2006, at 4:30 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Nov/03/2006 03:31:40PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No, @foo@ is evaluated when shell_command is evaluated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's this block in Test/Run.pm, but I don't see the analogous
</span><br>
<span class="quotelev1">&gt; block anywhere else (e.g., Build or Install).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt;     while ($exec =~ m/@(.+?)@/) {
</span><br>
<span class="quotelev1">&gt;         my $val = $ini-&gt;val($mpi_details_section, $1);
</span><br>
<span class="quotelev1">&gt;         if (!$val) {
</span><br>
<span class="quotelev1">&gt;             Warning(&quot;Used undefined key @$1@ in exec value;  
</span><br>
<span class="quotelev1">&gt; skipping&quot;);
</span><br>
<span class="quotelev1">&gt;             return;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         $exec =~ s/@(.+?)@/$val/;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it would  have it's &quot; chopped before it was folded into
</span><br>
<span class="quotelev2">&gt;&gt; shell_command,  resulting in a the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CFLAGS=-g -O
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which would be wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I admit to not having looked closely at your patch; would
</span><br>
<span class="quotelev2">&gt;&gt; it handle  this scenario properly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, the always erroneous command-wrapping quotes get chopped
</span><br>
<span class="quotelev1">&gt; just before they're passed to exec() in DoCommand. It would
</span><br>
<span class="quotelev1">&gt; not chop the trailing quote, because there's no leading
</span><br>
<span class="quotelev1">&gt; quote.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2006, at 1:21 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 3, 2006, at 12:08 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Point taken about being literal. My thinking is that most
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be only guessing about the quoting mechanism of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; funclets (as I was for a bit), and there would never be a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real case for sending '&quot;cmd&quot;' to exec().
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about a doc fix then?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not so worried about a '&quot;cmd&quot;' to exec(), but more about other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fields.  Remember  that shell commands are a very small portion of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fields used in MTT - there's others that are explicitly used as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; portions of commands.  For example you could do something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell_command = ./configure @foo@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; foo = &quot;CFLAGS=-g -O&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which then wouldn't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Jeff Squyres: "Re: [MTT users] mtt results"</a>
<li><strong>In reply to:</strong> <a href="0195.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
