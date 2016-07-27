<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 10:23:19 2007" -->
<!-- isoreceived="20070919142319" -->
<!-- sent="Wed, 19 Sep 2007 10:23:15 -0400" -->
<!-- isosent="20070919142315" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: sun)" -->
<!-- id="2F9F5CC7-3067-4C33-9DE1-110D599C7C68_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070919140842.GA19008_at_sun.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 10:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>Previous message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>In reply to:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just implemented a 'fix' for this in which if the client submits a  
<br>
test_build or test_run without proper lineage instead of guessing  
<br>
(any mostly getting it wrong) we just point the result to an 'undef'  
<br>
row. This will allow us to more effectively track these going  
<br>
forward, and maybe even remove them if needed.
<br>
<p>So I guess I wouldn't worry about it past this morning, but it is  
<br>
something we might want to ponder about a bit more by looking at how  
<br>
the reporter/submit scripts should deal with Already Installed  
<br>
scenarios.
<br>
<p>-- Josh
<br>
<p>On Sep 19, 2007, at 10:08 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Sep/17/2007 10:46:45AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've been getting quite a few errors from submit.php of
</span><br>
<span class="quotelev2">&gt;&gt; the below  form. It seems that the MPI Install that is
</span><br>
<span class="quotelev2">&gt;&gt; being referenced is not  valid. Could this is an 'already
</span><br>
<span class="quotelev2">&gt;&gt; installed' issue where the user is  trying to submit
</span><br>
<span class="quotelev2">&gt;&gt; results to the database without having submitted an
</span><br>
<span class="quotelev2">&gt;&gt; mpi_install?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are correct. Some test reporter-less runs were done
</span><br>
<span class="quotelev1">&gt; before some runs that used the MTTDatabase reporter were
</span><br>
<span class="quotelev1">&gt; done. I guess the rule of thumb is to, from the outset, run
</span><br>
<span class="quotelev1">&gt; using --trial if you plan to eventually send to the
</span><br>
<span class="quotelev1">&gt; database.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2007, at 10:37 AM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find_mpi_install_id():
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following SELECT returned -1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SELECT mpi_install_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      compiler    NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpi_version = '1.2.4b1r16122M'  AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpi_name    = 'developer'  AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	compiler_version    = '4.1.2'  AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	hostname    = 'fog01'  AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mtt_client_version    = '2.1devel'  AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	local_username    = 'paklui'  AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	platform_name    = 'fog01'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0111.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1033 (commit to www.open-mpi.org?)"</a>
<li><strong>Previous message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>In reply to:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
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
