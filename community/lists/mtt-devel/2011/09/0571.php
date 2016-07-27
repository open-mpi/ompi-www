<?
$subject_val = "Re: [MTT devel] Some MTT Reporter woes (Detail view)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 11 16:52:53 2011" -->
<!-- isoreceived="20110911205253" -->
<!-- sent="Sun, 11 Sep 2011 16:52:49 -0400" -->
<!-- isosent="20110911205249" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Some MTT Reporter woes (Detail view)" -->
<!-- id="CAANzjEkb+WoJQLC5SYkDNKTg4hLHkhVJWLh7O0FYc7p7_83Naw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEn_Hy=x5Ux7QRX0iwY7qyCqiHo4A59u=+rU20MbKGnLUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Some MTT Reporter woes (Detail view)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-11 16:52:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0572.php">Eugene Loh: "[MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0570.php">Josh Hursey: "[MTT devel] Some MTT Reporter woes (Detail view)"</a>
<li><strong>In reply to:</strong> <a href="0570.php">Josh Hursey: "[MTT devel] Some MTT Reporter woes (Detail view)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The detail view issue has been fixed in r1493. See the commit message
<br>
for details.
<br>
<p>No data was lost. It was just that the query was not selecting all of
<br>
the fields that it needed.
<br>
<p>Let me know if you see any other issues.
<br>
<p>-- Josh
<br>
<p>On Fri, Sep 9, 2011 at 2:32 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Terry mentioned a bug to me offline. I am posting here so that others
</span><br>
<span class="quotelev1">&gt; with the same problem can see the eventual followup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the detail view the 'network' and 'command' lines are incorrect:
</span><br>
<span class="quotelev1">&gt; &#160;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=2009">http://www.open-mpi.org/mtt/index.php?do_redir=2009</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 'command' line is blank. So that either means that the Reporter
</span><br>
<span class="quotelev1">&gt; SELECT query is not getting the correct data, or that the data was
</span><br>
<span class="quotelev1">&gt; never stored. So I'll have to dig into this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 'network' line is a number. I suspect that this is the network row
</span><br>
<span class="quotelev1">&gt; id, instead of the string values. I think the reporter is not
</span><br>
<span class="quotelev1">&gt; activating the translation function properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also noticed some errors in the log in which the Reporter
</span><br>
<span class="quotelev1">&gt; SELECT query is malformed. I'll take a look at how that might have
</span><br>
<span class="quotelev1">&gt; occurred while I'm at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not think that these are related to the recent Summary updates
</span><br>
<span class="quotelev1">&gt; (since the commands above do not use the tables). I'll try to take a
</span><br>
<span class="quotelev1">&gt; look at these issues over the weekend, and post back when I have
</span><br>
<span class="quotelev1">&gt; resolved things (or have more information).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/01/0572.php">Eugene Loh: "[MTT devel] duplicate results"</a>
<li><strong>Previous message:</strong> <a href="0570.php">Josh Hursey: "[MTT devel] Some MTT Reporter woes (Detail view)"</a>
<li><strong>In reply to:</strong> <a href="0570.php">Josh Hursey: "[MTT devel] Some MTT Reporter woes (Detail view)"</a>
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
