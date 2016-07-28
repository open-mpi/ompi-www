<?
$subject_val = "Re: [OMPI users] Changing directory from /tmp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 13:22:57 2013" -->
<!-- isoreceived="20130904172257" -->
<!-- sent="Wed, 04 Sep 2013 13:22:56 -0400" -->
<!-- isosent="20130904172256" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing directory from /tmp" -->
<!-- id="52276C70.3020609_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0B202E20-82B9-4215-8AE3-889765A126B9_at_stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Changing directory from /tmp<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 13:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22608.php">Reuti: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>Previous message:</strong> <a href="22606.php">Ralph Castain: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>In reply to:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/04/2013 01:13 PM, Lee-Ping Wang wrote:
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a few clusters I am running into an issue where a temporary
</span><br>
&nbsp;&nbsp;directory cannot be created due to the root filesystem being
<br>
full, causing mpirun to crash.
<br>
Would it be possible to change the location where this
<br>
directory is being created?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-109-4.local:12055] opal_os_dirpath_create:
</span><br>
Error: Unable to create the sub-directory
<br>
(/tmp/openmpi-sessions-leeping_at_compute-109-4.local_0) of
<br>
(/tmp/openmpi-sessions-leeping_at_compute-109-4.local_0/28512/0/0),
<br>
mkdir failed [1]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Hi Lee-Ping
<br>
<p>See this FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=sm#where-sm-file">http://www.open-mpi.org/faq/?category=sm#where-sm-file</a>
<br>
<p>OMPI FAQ is your friend!
<br>
And so is ompi_info.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22608.php">Reuti: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>Previous message:</strong> <a href="22606.php">Ralph Castain: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>In reply to:</strong> <a href="22605.php">Lee-Ping Wang: "[OMPI users] Changing directory from /tmp"</a>
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
