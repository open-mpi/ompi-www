<?
$subject_val = "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 13:20:55 2008" -->
<!-- isoreceived="20080107182055" -->
<!-- sent="Mon, 7 Jan 2008 13:20:47 -0500" -->
<!-- isosent="20080107182047" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues" -->
<!-- id="20080107182046.GJ17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6C2C79E72C305246B504CBA17B5500C9030F0445_at_mtlexch01.mtl.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-07 13:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0472.php">Jeff Squyres: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Previous message:</strong> <a href="0470.php">Oleg Kats: "[MTT users] mtt multiple mpi install and non open mpi instal issues"</a>
<li><strong>In reply to:</strong> <a href="0470.php">Oleg Kats: "[MTT users] mtt multiple mpi install and non open mpi instal issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0472.php">Jeff Squyres: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Reply:</strong> <a href="0472.php">Jeff Squyres: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Oleg! It looks like Jeff already applied the
<br>
multilib.patch. The other one looks good to me.
<br>
<p>-Ethan
<br>
<p><p>On Mon, Jan/07/2008 07:23:55PM, Oleg Kats wrote:
<br>
<span class="quotelev1">&gt;    Hello All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Here is list of issues that we figure out during ourMTT usage:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1.       Installation of multiple MPIs failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          MTT successfully installed the first mpi installation but the all
</span><br>
<span class="quotelev1">&gt;    other installations were installed under ~user directory. For solution
</span><br>
<span class="quotelev1">&gt;    please see mttlib.patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    2.       Build of MPIs other than Open-mpi failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          PrepareForInstall function in MTT/MPI/Get/Download.pm client was
</span><br>
<span class="quotelev1">&gt;    stay in install/src dir and not in install/src/&lt;mpi vesion&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          please see mttlib_download.patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="0472.php">Jeff Squyres: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Previous message:</strong> <a href="0470.php">Oleg Kats: "[MTT users] mtt multiple mpi install and non open mpi instal issues"</a>
<li><strong>In reply to:</strong> <a href="0470.php">Oleg Kats: "[MTT users] mtt multiple mpi install and non open mpi instal issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0472.php">Jeff Squyres: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Reply:</strong> <a href="0472.php">Jeff Squyres: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
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
