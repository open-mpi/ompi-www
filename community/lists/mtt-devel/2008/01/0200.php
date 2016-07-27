<?
$subject_val = "Re: [MTT devel] server side MTT stuff";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 10:59:30 2008" -->
<!-- isoreceived="20080102155930" -->
<!-- sent="Wed, 2 Jan 2008 10:59:25 -0500" -->
<!-- isosent="20080102155925" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] server side MTT stuff" -->
<!-- id="20080102155925.GE17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DD7DFD74-AA18-46D6-BA46-5C6417B26CA6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] server side MTT stuff<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-02 10:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0201.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Jeff Squyres: "[MTT devel] server side MTT stuff"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Jeff Squyres: "[MTT devel] server side MTT stuff"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nice!
<br>
<p>On Wed, Jan/02/2008 09:14:50AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Some new-year MTT FYI's...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Apparently Myricom has recently been setting up MTT internally for  
</span><br>
<span class="quotelev1">&gt; all their MPI testing.  Patrick told me they've had good success with  
</span><br>
<span class="quotelev1">&gt; it so far.  Woo hoo!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Apparently, Mellanox is trying the same but ran into some SQL  
</span><br>
<span class="quotelev1">&gt; problems with the reporter PHP.  That is, they apparently brought up  
</span><br>
<span class="quotelev1">&gt; the DB ok and were able to push some data from the client into the  
</span><br>
<span class="quotelev1">&gt; server, but then got some kind of SELECT problem in the reporter.  I  
</span><br>
<span class="quotelev1">&gt; told Mellanox to send mail to the mtt-users list; since we only have 1  
</span><br>
<span class="quotelev1">&gt; MTT server running, it may not be as robust/portable as the client  
</span><br>
<span class="quotelev1">&gt; side.  So hopefully we'll get some good feedback from them shortly.
</span><br>
<p>They should do a web query appending &amp;debug=on&amp;sql=2 and
<br>
send the output. Also, Postgres version might be an issue.
<br>
The reporter may be using settings only available in
<br>
Postgres 8 (i.e., constraint_exclusion?). open-mpi.org is
<br>
using PG 8.2.4.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="0201.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Jeff Squyres: "[MTT devel] server side MTT stuff"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Jeff Squyres: "[MTT devel] server side MTT stuff"</a>
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
