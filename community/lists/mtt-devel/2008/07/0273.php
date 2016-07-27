<?
$subject_val = "Re: [MTT devel] bogus timestamps in database";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 09:29:58 2008" -->
<!-- isoreceived="20080718132958" -->
<!-- sent="Fri, 18 Jul 2008 09:29:52 -0400" -->
<!-- isosent="20080718132952" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] bogus timestamps in database" -->
<!-- id="0F84ADF8-7C6C-4C4F-84B9-1A70DEE013ED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080717223937.GA31480_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-18 09:29:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>In reply to:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mebbe we should have a teleconf sometime in the not-distant future and  
<br>
see if we want to prioritize some of the pending MTT work...?
<br>
<p><p>On Jul 17, 2008, at 6:39 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jul/17/2008 04:35:38PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here's a fun report (as of 17 July 2008):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mtt/index.php?do_redir=775">http://www.open-mpi.org/mtt/index.php?do_redir=775</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that two of the rows are in the future.  :-)  (Absoft has  
</span><br>
<span class="quotelev2">&gt;&gt; since fixed
</span><br>
<span class="quotelev2">&gt;&gt; the problem; ntp accidentally got turned off)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ethan and I talked about this a bit, and then Josh and I talked  
</span><br>
<span class="quotelev2">&gt;&gt; about it.
</span><br>
<span class="quotelev2">&gt;&gt; Posting here to summarize everything:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - It seems like a good solution for the moment is for submit.php to  
</span><br>
<span class="quotelev2">&gt;&gt; examine
</span><br>
<span class="quotelev2">&gt;&gt; all the timestamps in a given submit and compare them to now().   
</span><br>
<span class="quotelev2">&gt;&gt; Find the
</span><br>
<span class="quotelev2">&gt;&gt; timestamp that latest in time, and compute x=latest_timestamp -  
</span><br>
<span class="quotelev2">&gt;&gt; now().  If
</span><br>
<span class="quotelev2">&gt;&gt; x&gt;0, then subtract x from *all* timestamps in the submitted data.   
</span><br>
<span class="quotelev2">&gt;&gt; Then
</span><br>
<span class="quotelev2">&gt;&gt; print a Big Hairy Warning on the client that their time is not  
</span><br>
<span class="quotelev2">&gt;&gt; coordinated
</span><br>
<span class="quotelev2">&gt;&gt; with the server.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Josh thinks that we should have a larger conversation about how  
</span><br>
<span class="quotelev2">&gt;&gt; to have
</span><br>
<span class="quotelev2">&gt;&gt; some values be regulated (e.g., MPI name, test suite name, etc.).   
</span><br>
<span class="quotelev2">&gt;&gt; I agree
</span><br>
<span class="quotelev2">&gt;&gt; -- classic case: some people call it &quot;intel&quot;, others call it &quot;intel  
</span><br>
<span class="quotelev2">&gt;&gt; suite&quot;. 
</span><br>
<span class="quotelev2">&gt;&gt; They show up differently in the DB.  My $0.02 is that we should allow
</span><br>
<span class="quotelev2">&gt;&gt; people to call it whatever they want in the .ini file, but then  
</span><br>
<span class="quotelev2">&gt;&gt; somehow
</span><br>
<span class="quotelev2">&gt;&gt; ensure to submit the names all consistently (e.g., ini file has a  
</span><br>
<span class="quotelev2">&gt;&gt; map of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;this ini section is reported as 'intel'&quot;), and if the name is  
</span><br>
<span class="quotelev2">&gt;&gt; invalid,
</span><br>
<span class="quotelev2">&gt;&gt; reject the data from the DB (or maybe put it in &quot;quarrantine&quot; so  
</span><br>
<span class="quotelev2">&gt;&gt; that it
</span><br>
<span class="quotelev2">&gt;&gt; can be cleaned up and put in the main DB)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's a neccessity that the INI section naming be flexible.
</span><br>
<span class="quotelev1">&gt; E.g., I have intel-32 and intel-64 sections to test 32-bit
</span><br>
<span class="quotelev1">&gt; and 64-bit. Note, there's no way around this because the
</span><br>
<span class="quotelev1">&gt; Perl INI parser we're using does not allow duplicate section
</span><br>
<span class="quotelev1">&gt; names, and also, MTT constructs a scratch tree on the
</span><br>
<span class="quotelev1">&gt; assumption that each section has a unique name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For &quot;database text string regulation&quot;, there's also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://svn.open-mpi.org/trac/mtt/ticket/7">http://svn.open-mpi.org/trac/mtt/ticket/7</a> (users should be
</span><br>
<span class="quotelev1">&gt;  able to delete or modify results from database)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Previous message:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>In reply to:</strong> <a href="0272.php">Ethan Mallove: "Re: [MTT devel] bogus timestamps in database"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
<li><strong>Reply:</strong> <a href="0274.php">Josh Hursey: "Re: [MTT devel] bogus timestamps in database"</a>
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
