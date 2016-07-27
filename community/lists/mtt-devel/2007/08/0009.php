<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 09:27:47 2007" -->
<!-- isoreceived="20070827132747" -->
<!-- sent="Mon, 27 Aug 2007 09:27:24 -0400" -->
<!-- isosent="20070827132724" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] Upgrade cron question" -->
<!-- id="FCFD3FA6-3A0D-41F1-8C0E-81CA739CC9F6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-08-27 09:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are the following two scripts needed anymore?
<br>
monitor_disk_usage.pl
<br>
prune_db.pl
<br>
<p>They both rely on the old db schema. If they are needed then we need  
<br>
to update them.
<br>
<p>I renamed 'prune_db.pl' to 'DEACTIVATE-prune_db.pl' so it is not  
<br>
accidently run, as I don't know if it would mangle the new db or not.  
<br>
I did this locally in:
<br>
/l/osl/www/www.open-mpi.org/mtt/cron
<br>
<p>Whos account are the cron scripts running currently?
<br>
<p><p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
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
