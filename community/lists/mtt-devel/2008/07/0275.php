<?
$subject_val = "Re: [MTT devel] bogus timestamps in database";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 15:55:20 2008" -->
<!-- isoreceived="20080718195520" -->
<!-- sent="Fri, 18 Jul 2008 15:55:14 -0400" -->
<!-- isosent="20080718195514" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] bogus timestamps in database" -->
<!-- id="20080718195513.GC31480_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="89360B09-CE9A-4230-BE46-633982F46ABF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-07-18 15:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0276.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>In reply to:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0276.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0276.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm basically available except for 2-4p on Friday.
<br>
<p>-Ethan
<br>
<p>On Fri, Jul/18/2008 10:02:10AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Yeah it might be good to touch base and see if there are any burning fires 
</span><br>
<span class="quotelev1">&gt; that we need to put out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For me it would have to be either next week or most likely the end of 
</span><br>
<span class="quotelev1">&gt; August. :( The good news is that I don't have too much on my calendar for 
</span><br>
<span class="quotelev1">&gt; next week. I'm available (prefer earlier in the week):
</span><br>
<span class="quotelev1">&gt;  M - Anytime
</span><br>
<span class="quotelev1">&gt;  T - 12 - 2, 2-4
</span><br>
<span class="quotelev1">&gt;  W - 10 - 11:30, 2 - 4
</span><br>
<span class="quotelev1">&gt;  R - anytime
</span><br>
<span class="quotelev1">&gt;  F - not available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2008, at 9:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mebbe we should have a teleconf sometime in the not-distant future and see 
</span><br>
<span class="quotelev2">&gt;&gt; if we want to prioritize some of the pending MTT work...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 17, 2008, at 6:39 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul/17/2008 04:35:38PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's a fun report (as of 17 July 2008):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=775">http://www.open-mpi.org/mtt/index.php?do_redir=775</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that two of the rows are in the future.  :-)  (Absoft has since 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fixed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem; ntp accidentally got turned off)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ethan and I talked about this a bit, and then Josh and I talked about 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Posting here to summarize everything:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - It seems like a good solution for the moment is for submit.php to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; examine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the timestamps in a given submit and compare them to now().  Find 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; timestamp that latest in time, and compute x=latest_timestamp - now().  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x&gt;0, then subtract x from *all* timestamps in the submitted data.  Then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; print a Big Hairy Warning on the client that their time is not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coordinated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the server.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Josh thinks that we should have a larger conversation about how to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some values be regulated (e.g., MPI name, test suite name, etc.).  I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; agree
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- classic case: some people call it &quot;intel&quot;, others call it &quot;intel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suite&quot;.They show up differently in the DB.  My $0.02 is that we should 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; people to call it whatever they want in the .ini file, but then somehow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ensure to submit the names all consistently (e.g., ini file has a map of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;this ini section is reported as 'intel'&quot;), and if the name is invalid,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reject the data from the DB (or maybe put it in &quot;quarrantine&quot; so that it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can be cleaned up and put in the main DB)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's a neccessity that the INI section naming be flexible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E.g., I have intel-32 and intel-64 sections to test 32-bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 64-bit. Note, there's no way around this because the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perl INI parser we're using does not allow duplicate section
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names, and also, MTT constructs a scratch tree on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assumption that each section has a unique name.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For &quot;database text string regulation&quot;, there's also:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/7">http://svn.open-mpi.org/trac/mtt/ticket/7</a> (users should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to delete or modify results from database)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0276.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>In reply to:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0276.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0276.php">Jeff Squyres: "Re: [MTT devel] bogus timestamps in database"</a>
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
