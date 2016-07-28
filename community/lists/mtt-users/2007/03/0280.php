<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 12:40:36 2007" -->
<!-- isoreceived="20070301174036" -->
<!-- sent="Thu, 1 Mar 2007 12:40:25 -0500" -->
<!-- isosent="20070301174025" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] script to resubmit results" -->
<!-- id="20070301174024.GA10113_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1273DD0E-95AF-4B5C-9AD6-6D98224835D3_at_cisco.com" -->
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
<strong>Date:</strong> 2007-03-01 12:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Bill D'amico: "[MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Reply:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just added a client/mtt-submit script to the mtt/trunk SVN
<br>
repository which will help you.  You'll need to use it like
<br>
this:
<br>
<p>$ client/mtt-submit -f '/directory/where/results/are/*.txt' -g -u cisco -p &lt;cisco-password&gt;
<br>
<p>/directory/where/results/are/ is specified in your INI file
<br>
as mttdatabase_debug_filename.
<br>
<p>CAUTION: Use this script with care!  For example, you could
<br>
end up with duplicate test results in the database if you
<br>
used mtt-submit twice on the same file.
<br>
<p>-Ethan
<br>
<p>&nbsp;
<br>
On Thu, Mar/01/2007 08:40:17AM, Bill D'amico wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    We had a proxy server fail during the night and may have had some
</span><br>
<span class="quotelev1">&gt;    results get lost. Jeff asked me to check for existence of a
</span><br>
<span class="quotelev1">&gt;    resubmission script - is there one, and if so where is it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Bill D'Amico
</span><br>
<span class="quotelev1">&gt;    [1]bdamico_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Server virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. mailto:bdamico_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0279.php">Josh Hursey: "Re: [MTT users] MTT database performance boost"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Bill D'amico: "[MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Reply:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
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
