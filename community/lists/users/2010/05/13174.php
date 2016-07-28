<?
$subject_val = "Re: [OMPI users] Open MPI 1.4.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 18:45:47 2010" -->
<!-- isoreceived="20100527224547" -->
<!-- sent="Fri, 28 May 2010 08:45:37 +1000" -->
<!-- isosent="20100527224537" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4.2 released" -->
<!-- id="4BFEF611.5010000_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4882_1274998864_4BFEF050_4882_5404_1_E8FE9E9D-B925-4CA6-9ECC-BAD992F6D372_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.4.2 released<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 18:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13175.php">Rahul Nabar: "[OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="12874.php">Ralph Castain: "[OMPI users] Open MPI 1.4.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/28/2010 08:20 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 16, 2010, at 5:21 AM, Aleksej Saushev wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/">http://cvsweb.netbsd.org/bsdweb.cgi/pkgsrc/parallel/openmpi/patches/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the high latency reply...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; aa: We haven't added RPATH support yet.  We've talked about it but never done it.  There are some in OMPI who insist that rpath support needs to be optional.  A full patch solution would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We have problems with rpath overriding LD_RUN_PATH.  LD_RUN_PATH is
<br>
an intrinsic part of the way we configure our user's environment.  We
<br>
effectively use (impose) rpath but through the flexible, concatenatable
<br>
LD_RUN_PATH.
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13175.php">Rahul Nabar: "[OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="12874.php">Ralph Castain: "[OMPI users] Open MPI 1.4.2 released"</a>
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
