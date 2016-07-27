<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 10:46:49 2007" -->
<!-- isoreceived="20070917144649" -->
<!-- sent="Mon, 17 Sep 2007 10:46:45 -0400" -->
<!-- isosent="20070917144645" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: sun)" -->
<!-- id="01064A35-73F2-4C69-B392-2CBB20F8C3A4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709171437.l8HEb1EG024928_at_milliways.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-09-17 10:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0105.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0103.php">Jeff Squyres: "[MTT devel] sanity check a reporter commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Reply:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been getting quite a few errors from submit.php of the below  
<br>
form. It seems that the MPI Install that is being referenced is not  
<br>
valid. Could this is an 'already installed' issue where the user is  
<br>
trying to submit results to the database without having submitted an  
<br>
mpi_install?
<br>
<p><p>-- Josh
<br>
<p>On Sep 17, 2007, at 10:37 AM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; find_mpi_install_id():
</span><br>
<span class="quotelev1">&gt; The following SELECT returned -1:
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; SELECT mpi_install_id
</span><br>
<span class="quotelev1">&gt; FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev1">&gt;      mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev1">&gt;      compiler    NATURAL JOIN
</span><br>
<span class="quotelev1">&gt;      compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev1">&gt;      submit
</span><br>
<span class="quotelev1">&gt; WHERE
</span><br>
<span class="quotelev1">&gt; 	mpi_version = '1.2.4b1r16122M'  AND
</span><br>
<span class="quotelev1">&gt; 	mpi_name    = 'developer'  AND
</span><br>
<span class="quotelev1">&gt; 	compiler_version    = '4.1.2'  AND
</span><br>
<span class="quotelev1">&gt; 	hostname    = 'fog01'  AND
</span><br>
<span class="quotelev1">&gt; 	mtt_client_version    = '2.1devel'  AND
</span><br>
<span class="quotelev1">&gt; 	local_username    = 'paklui'  AND
</span><br>
<span class="quotelev1">&gt; 	platform_name    = 'fog01'
</span><br>
<span class="quotelev1">&gt; 	ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0105.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0103.php">Jeff Squyres: "[MTT devel] sanity check a reporter commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Reply:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
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
