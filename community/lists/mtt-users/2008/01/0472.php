<?
$subject_val = "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 14:46:24 2008" -->
<!-- isoreceived="20080107194624" -->
<!-- sent="Mon, 7 Jan 2008 14:45:38 -0500" -->
<!-- isosent="20080107194538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues" -->
<!-- id="522F95CA-9313-4313-9736-3ED2486B1123_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080107182046.GJ17034_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-07 14:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Brad Penoff: "[MTT users] access to ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now committed them both; thanks!
<br>
<p><p>On Jan 7, 2008, at 1:20 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Oleg! It looks like Jeff already applied the
</span><br>
<span class="quotelev1">&gt; multilib.patch. The other one looks good to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan/07/2008 07:23:55PM, Oleg Kats wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Hello All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Here is list of issues that we figure out during ourMTT usage:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1.       Installation of multiple MPIs failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MTT successfully installed the first mpi installation but  
</span><br>
<span class="quotelev2">&gt;&gt; the all
</span><br>
<span class="quotelev2">&gt;&gt;   other installations were installed under ~user directory. For  
</span><br>
<span class="quotelev2">&gt;&gt; solution
</span><br>
<span class="quotelev2">&gt;&gt;   please see mttlib.patch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   2.       Build of MPIs other than Open-mpi failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         PrepareForInstall function in MTT/MPI/Get/Download.pm  
</span><br>
<span class="quotelev2">&gt;&gt; client was
</span><br>
<span class="quotelev2">&gt;&gt;   stay in install/src dir and not in install/src/&lt;mpi vesion&gt;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         please see mttlib_download.patch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Brad Penoff: "[MTT users] access to ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
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
