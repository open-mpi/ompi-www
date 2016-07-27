<?
$subject_val = "Re: [MTT devel] bogus timestamps in database";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 18:39:53 2008" -->
<!-- isoreceived="20080717223953" -->
<!-- sent="Thu, 17 Jul 2008 18:39:37 -0400" -->
<!-- isosent="20080717223937" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] bogus timestamps in database" -->
<!-- id="20080717223937.GA31480_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3451C468-9E99-4A6A-97D7-2A611E5334B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] bogus timestamps in database<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-17 18:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0273.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Jeff Squyres: "[MTT devel] bogus timestamps in database"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Jeff Squyres: "[MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0273.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0273.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul/17/2008 04:35:38PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Here's a fun report (as of 17 July 2008):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mtt/index.php?do_redir=775">http://www.open-mpi.org/mtt/index.php?do_redir=775</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that two of the rows are in the future.  :-)  (Absoft has since fixed 
</span><br>
<span class="quotelev1">&gt; the problem; ntp accidentally got turned off)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan and I talked about this a bit, and then Josh and I talked about it.  
</span><br>
<span class="quotelev1">&gt; Posting here to summarize everything:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - It seems like a good solution for the moment is for submit.php to examine 
</span><br>
<span class="quotelev1">&gt; all the timestamps in a given submit and compare them to now().  Find the 
</span><br>
<span class="quotelev1">&gt; timestamp that latest in time, and compute x=latest_timestamp - now().  If 
</span><br>
<span class="quotelev1">&gt; x&gt;0, then subtract x from *all* timestamps in the submitted data.  Then 
</span><br>
<span class="quotelev1">&gt; print a Big Hairy Warning on the client that their time is not coordinated 
</span><br>
<span class="quotelev1">&gt; with the server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Josh thinks that we should have a larger conversation about how to have 
</span><br>
<span class="quotelev1">&gt; some values be regulated (e.g., MPI name, test suite name, etc.).  I agree 
</span><br>
<span class="quotelev1">&gt; -- classic case: some people call it &quot;intel&quot;, others call it &quot;intel suite&quot;. 
</span><br>
<span class="quotelev1">&gt;  They show up differently in the DB.  My $0.02 is that we should allow 
</span><br>
<span class="quotelev1">&gt; people to call it whatever they want in the .ini file, but then somehow 
</span><br>
<span class="quotelev1">&gt; ensure to submit the names all consistently (e.g., ini file has a map of 
</span><br>
<span class="quotelev1">&gt; &quot;this ini section is reported as 'intel'&quot;), and if the name is invalid, 
</span><br>
<span class="quotelev1">&gt; reject the data from the DB (or maybe put it in &quot;quarrantine&quot; so that it 
</span><br>
<span class="quotelev1">&gt; can be cleaned up and put in the main DB)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It's a neccessity that the INI section naming be flexible.
<br>
E.g., I have intel-32 and intel-64 sections to test 32-bit
<br>
and 64-bit. Note, there's no way around this because the
<br>
Perl INI parser we're using does not allow duplicate section
<br>
names, and also, MTT constructs a scratch tree on the
<br>
assumption that each section has a unique name.
<br>
<p>For &quot;database text string regulation&quot;, there's also:
<br>
<p>&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/mtt/ticket/7">http://svn.open-mpi.org/trac/mtt/ticket/7</a> (users should be
<br>
&nbsp;&nbsp;able to delete or modify results from database)
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; -- 
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
<li><strong>Next message:</strong> <a href="0273.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="0271.php">Jeff Squyres: "[MTT devel] bogus timestamps in database"</a>
<li><strong>In reply to:</strong> <a href="0271.php">Jeff Squyres: "[MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0273.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0273.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
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
