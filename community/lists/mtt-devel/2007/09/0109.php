<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 10:08:47 2007" -->
<!-- isoreceived="20070919140847" -->
<!-- sent="Wed, 19 Sep 2007 10:08:42 -0400" -->
<!-- isosent="20070919140842" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: sun)" -->
<!-- id="20070919140842.GA19008_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="01064A35-73F2-4C69-B392-2CBB20F8C3A4_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 10:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Reply:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Sep/17/2007 10:46:45AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I've been getting quite a few errors from submit.php of
</span><br>
<span class="quotelev1">&gt; the below  form. It seems that the MPI Install that is
</span><br>
<span class="quotelev1">&gt; being referenced is not  valid. Could this is an 'already
</span><br>
<span class="quotelev1">&gt; installed' issue where the user is  trying to submit
</span><br>
<span class="quotelev1">&gt; results to the database without having submitted an
</span><br>
<span class="quotelev1">&gt; mpi_install?
</span><br>
<p><p>You are correct. Some test reporter-less runs were done
<br>
before some runs that used the MTTDatabase reporter were
<br>
done. I guess the rule of thumb is to, from the outset, run
<br>
using --trial if you plan to eventually send to the
<br>
database.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2007, at 10:37 AM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; find_mpi_install_id():
</span><br>
<span class="quotelev2">&gt; &gt; The following SELECT returned -1:
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; SELECT mpi_install_id
</span><br>
<span class="quotelev2">&gt; &gt; FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev2">&gt; &gt;      mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev2">&gt; &gt;      compiler    NATURAL JOIN
</span><br>
<span class="quotelev2">&gt; &gt;      compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev2">&gt; &gt;      submit
</span><br>
<span class="quotelev2">&gt; &gt; WHERE
</span><br>
<span class="quotelev2">&gt; &gt; 	mpi_version = '1.2.4b1r16122M'  AND
</span><br>
<span class="quotelev2">&gt; &gt; 	mpi_name    = 'developer'  AND
</span><br>
<span class="quotelev2">&gt; &gt; 	compiler_version    = '4.1.2'  AND
</span><br>
<span class="quotelev2">&gt; &gt; 	hostname    = 'fog01'  AND
</span><br>
<span class="quotelev2">&gt; &gt; 	mtt_client_version    = '2.1devel'  AND
</span><br>
<span class="quotelev2">&gt; &gt; 	local_username    = 'paklui'  AND
</span><br>
<span class="quotelev2">&gt; &gt; 	platform_name    = 'fog01'
</span><br>
<span class="quotelev2">&gt; &gt; 	ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Reply:</strong> <a href="0110.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
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
