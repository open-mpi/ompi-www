<?
$subject_val = "[OMPI users] Making RPM from source that respects --prefix";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 06:48:54 2009" -->
<!-- isoreceived="20091002104854" -->
<!-- sent="Fri, 2 Oct 2009 03:48:49 -0700 (PDT)" -->
<!-- isosent="20091002104849" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="[OMPI users] Making RPM from source that respects --prefix" -->
<!-- id="666203.88099.qm_at_web57605.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Making RPM from source that respects --prefix<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 06:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10870.php">Peter Lonjers: "[OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Reply:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Reply:</strong> <a href="10873.php">Kiril Dichev: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Maybe reply:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build an RPM of 1.3.3 from the SRPM.  Despite typical RPM practice, I need to build ompi so that it installs to a different directory from /usr or /opt, i.e. what I would get if I just built from source myself with a --prefix argument to configure.
<br>
<p>When I invoke buildrpm with the --define 'configure_options --prefix=&lt;desired path&gt; ...', the options do get set when the building process gets kicked off.  However, when I query the final RPM, only vampirtrace has paid attention to the specified --prefix and wants to place its files accordingly.  How should I alter the .spec file (or in some other place?) to get the desired behavior for the final file locations in the RPM?
<br>
<p>Thank you for any help.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10870.php">Peter Lonjers: "[OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Reply:</strong> <a href="10872.php">Jeff Squyres: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Reply:</strong> <a href="10873.php">Kiril Dichev: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Maybe reply:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
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
