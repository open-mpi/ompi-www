<?
$subject_val = "Re: [MTT devel] Weird MTT test names";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 10:32:24 2008" -->
<!-- isoreceived="20080306153224" -->
<!-- sent="Thu, 6 Mar 2008 10:32:22 -0500" -->
<!-- isosent="20080306153222" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Weird MTT test names" -->
<!-- id="EF0D8CD7-1405-4782-B817-40337B411676_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080306152619.GH51303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Weird MTT test names<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 10:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<li><strong>Previous message:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>In reply to:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool. I just wanted to make sure this wasn't a symptom of a problem in  
<br>
the client.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 6, 2008, at 10:26 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; You can go ahead and delete those rows. (I believe they are
</span><br>
<span class="quotelev1">&gt; from the ORTE test suite I was working on.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar/06/2008 09:39:16AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to cleanup the test_suite/test_name tables in the  
</span><br>
<span class="quotelev2">&gt;&gt; database,
</span><br>
<span class="quotelev2">&gt;&gt; removing some test names that are invalid and unreferenced.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the process I found a whole series of test_names of the following
</span><br>
<span class="quotelev2">&gt;&gt; form:
</span><br>
<span class="quotelev2">&gt;&gt; test_suite = trivial
</span><br>
<span class="quotelev2">&gt;&gt; test_name  = MXIQNeaG8e-ping
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For this particular one it points to Ethan:
</span><br>
<span class="quotelev2">&gt;&gt; mtt=&gt; select submit.* from submit natural join test_run where
</span><br>
<span class="quotelev2">&gt;&gt; test_name_id = 3947;
</span><br>
<span class="quotelev2">&gt;&gt;  submit_id |    hostname    | local_username | http_username |
</span><br>
<span class="quotelev2">&gt;&gt; mtt_client_version
</span><br>
<span class="quotelev2">&gt;&gt; -----------+----------------+----------------+---------------
</span><br>
<span class="quotelev2">&gt;&gt; +--------------------
</span><br>
<span class="quotelev2">&gt;&gt;       2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
</span><br>
<span class="quotelev2">&gt;&gt;       2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
</span><br>
<span class="quotelev2">&gt;&gt;       2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
</span><br>
<span class="quotelev2">&gt;&gt; (3 rows)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This particular data was submitted on Jan 1, 2008.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea why we are seeing such cryptic names being submitted to the
</span><br>
<span class="quotelev2">&gt;&gt; database?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1163"</a>
<li><strong>Previous message:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>In reply to:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
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
